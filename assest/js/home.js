(function () {
  const VERSION = '1.3';
  const store = MM.store, { $, $$, icons } = MM;
  const reduced = MM.reduced;
  const root = document.documentElement;
  const hero = $('[data-hero]');
  const film = $('[data-hero-film]');
  const closingFilm = $('[data-closing-film]');

  /* Pricing block */
  let service = 'seo', term = 3;
  const counters = new Map();
  function count(el, to, animate) {
    const from = counters.has(el) ? counters.get(el) : to;
    counters.set(el, to);
    if (!animate || reduced || from === to) { el.textContent = store.money(to); return; }
    const t0 = performance.now(), D = 600;
    (function f(t) { const k = Math.min(1, (t - t0) / D), e = 1 - Math.pow(1 - k, 3); el.textContent = store.money(from + (to - from) * e); if (k < 1) requestAnimationFrame(f); })(t0);
  }
  function swap(el, html) {
    if (reduced) { el.innerHTML = html; return; }
    el.classList.add('is-out');
    setTimeout(() => { el.innerHTML = html; el.classList.remove('is-out'); }, 250);
  }
  function renderPackages(animate, serviceChanged) {
    const s = store.service(service);
    $$('[data-package]').forEach(card => {
      const tier = card.dataset.package, t = store.tierIndex(tier);
      count($('[data-package-total]', card), store.price(service, tier, term), animate);
      $('[data-package-monthly]', card).textContent = s.oneOff ? 'One off payment' : `${store.money(store.monthly(service, tier, term))} a month, ${term} month term`;
      if (serviceChanged) {
        swap($('[data-package-figures]', card), s.figures[t].map(f => `<div><b>${typeof f.value === 'object' ? store.money(f.value.money) : f.value}</b><span>${f.label}</span></div>`).join(''));
        swap($('[data-package-ticks]', card), s.included[t].map(x => `<li>${icons.check}${x}</li>`).join(''));
      }
    });
    if (serviceChanged) {
      swap($('[data-package-name]'), s.name);
      swap($('[data-package-desc]'), s.home.description);
      swap($('[data-package-note]'), s.home.note);
    }
    $$('[data-package-terms] button').forEach(b => { b.disabled = !!s.oneOff; });
  }
  $$('[data-service-tile]').forEach(b => b.addEventListener('click', () => {
    service = b.dataset.serviceTile;
    $$('[data-service-tile]').forEach(x => x.classList.toggle('is-active', x === b));
    renderPackages(true, true);
  }));
  $$('[data-package-terms] button').forEach(b => b.addEventListener('click', () => {
    term = +b.dataset.term;
    $$('[data-package-terms] button').forEach(x => x.classList.toggle('is-active', x === b));
    renderPackages(true, false);
  }));
  $$('[data-package-add]').forEach(b => b.addEventListener('click', () => {
    const tier = b.closest('[data-package]').dataset.package, s = store.service(service);
    store.addToCart(service, tier, term);
    MM.bumpCart();
    MM.toast(`${s.name} ${store.tierName(tier)}${s.oneOff ? ', one off' : `, ${term} ${term > 1 ? 'months' : 'month'}`} added to your cart`);
    const label = b.textContent;
    b.classList.add('is-added'); b.textContent = 'Added to cart';
    setTimeout(() => { b.classList.remove('is-added'); b.textContent = label; }, 2200);
  }));
  document.addEventListener('mm:currency', () => renderPackages(true, true));

  /* smooth scroll: lerp on wheel input, fine pointers only */
  let target = scrollY, pos = scrollY, running = false, LERP = 0.1;
  const smooth = !reduced && matchMedia('(pointer:fine)').matches;
  const maxY = () => root.scrollHeight - innerHeight;
  const menuOpen = () => $('[data-menu-panel]')?.classList.contains('is-open');
  if (smooth) {
    addEventListener('wheel', e => {
      if (e.ctrlKey || menuOpen() || e.target.closest('[data-cart-panel], [data-menu-panel]')) return;
      e.preventDefault();
      const d = e.deltaY * (e.deltaMode === 1 ? 40 : e.deltaMode === 2 ? innerHeight : 1);
      target = Math.max(0, Math.min(maxY(), target + d)); kick();
    }, { passive: false });
    addEventListener('scroll', () => { if (!running) target = pos = scrollY; });
  }
  function kick() { if (!running) { running = true; pos = scrollY; requestAnimationFrame(step); } }
  function step() {
    pos += (target - pos) * LERP;
    if (Math.abs(target - pos) < 0.5) pos = target;
    scrollTo(0, pos);
    if (pos !== target) requestAnimationFrame(step); else running = false;
  }
  function scrollToId(id) {
    const el = id === 'top' ? document.body : document.getElementById(id);
    if (!el) return;
    const y = id === 'top' ? 0 : el.getBoundingClientRect().top + scrollY;
    if (!smooth) { scrollTo({ top: y, behavior: reduced ? 'auto' : 'smooth' }); return; }
    target = Math.max(0, Math.min(maxY(), y)); LERP = 0.075; kick(); setTimeout(() => { LERP = 0.1; }, 1600);
  }
  $$('[data-scroll-to]').forEach(a => a.addEventListener('click', e => { e.preventDefault(); scrollToId(a.dataset.scrollTo); }));

  /* Scroll linked effects */
  const fills = $$('[data-words]'), pars = $$('[data-parallax]'), steps = $$('[data-how-steps] .how-step');
  fills.forEach(el => {
    const out = [];
    el.childNodes.forEach(n => {
      const dim = n.nodeType === 1 && n.classList.contains('intro__word--dim');
      n.textContent.split(/(\s+)/).forEach(t => { if (t) out.push(/\s/.test(t) ? t : `<span class="intro__word${dim ? ' intro__word--dim' : ''}">${t}</span>`); });
    });
    el.innerHTML = out.join('');
    el._words = $$('.intro__word', el);
  });
  function frame() {
    const vh = innerHeight;
    if (!reduced) {
      fills.forEach(el => {
        const r = el.getBoundingClientRect(), p = Math.max(0, Math.min(1, (vh * 0.9 - r.top) / (vh * 0.6)));
        const k = p * (el._words.length + 2);
        el._words.forEach((w, i) => { const on = k > i; if (w._on !== on) { w._on = on; w.style.opacity = on ? 1 : ''; } });
      });
      pars.forEach(el => {
        const r = el.getBoundingClientRect();
        if (r.bottom < -50 || r.top > vh + 50) return;
        const k = (r.top + r.height / 2 - vh / 2) / (vh / 2 + r.height / 2);
        el.firstElementChild.style.transform = `translate3d(0,${(-k * r.height * 0.1).toFixed(1)}px,0)`;
      });
      if (steps.length && innerWidth > 820) {
        let best = 0, bd = 1e9;
        steps.forEach((s, i) => { const r = s.getBoundingClientRect(), d = Math.abs(r.top + r.height / 2 - vh * 0.5); if (d < bd) { bd = d; best = i; } });
        steps.forEach((s, i) => s.classList.toggle('is-dimmed', i !== best));
      }
    }
    requestAnimationFrame(frame);
  }

  function grid() {
    const w = $('.intro .wrap').getBoundingClientRect();
    $$('[data-grid] i').forEach((i, n) => { i.style.left = (w.left + w.width * n / 4) + 'px'; });
  }

  const title = $('[data-split]', hero);
  function split() {
    if (!title.dataset.src) title.dataset.src = title.textContent;
    title.innerHTML = title.dataset.src.split(' ').map(w => `<span class="split-word">${w}</span>`).join(' ');
    const lines = []; let top = null, acc = [];
    $$('.split-word', title).forEach(w => { const t = w.offsetTop; if (top !== null && Math.abs(t - top) > 2) { lines.push(acc); acc = []; } top = t; acc.push(w.textContent); });
    if (acc.length) lines.push(acc);
    title.innerHTML = lines.map((l, i) => `<span class="line"><span class="line__inner" style="--i:${i}">${l.join(' ')}</span></span>`).join('');
  }
  addEventListener('resize', () => { grid(); split(); });

  film.addEventListener('playing', () => film.classList.add('is-playing'));
  const watch = (el, video) => new IntersectionObserver(es => es.forEach(e => { if (reduced) return; if (e.isIntersecting) { const p = video.play(); if (p) p.catch(() => {}); } else video.pause(); }), { threshold: 0.05 }).observe(el);
  watch(hero, film);
  watch(closingFilm, closingFilm);

  const countObserver = new IntersectionObserver(es => es.forEach(e => {
    if (!e.isIntersecting) return;
    countObserver.unobserve(e.target);
    const el = e.target, to = +el.dataset.count;
    if (reduced) { el.textContent = to; return; }
    const t0 = performance.now() + 250, D = 1400;
    el.textContent = '0';
    (function f(t) { const k = Math.max(0, Math.min(1, (t - t0) / D)); el.textContent = Math.round(to * (1 - Math.pow(1 - k, 3))); if (k < 1) requestAnimationFrame(f); })(performance.now());
  }), { threshold: 0.6 });
  $$('[data-count]').forEach(el => { if (!reduced) el.textContent = '0'; countObserver.observe(el); });

  const pk = $('[data-packages]'), glow = $('[data-glow]');
  if (!reduced && matchMedia('(pointer:fine)').matches) {
    let gx = 0, gy = 0, tx = 0, ty = 0, on = false;
    pk.addEventListener('pointermove', e => {
      const r = pk.getBoundingClientRect(); tx = e.clientX - r.left; ty = e.clientY - r.top;
      if (on) return;
      on = true; gx = tx; gy = ty; pk.classList.add('is-lit');
      (function f() { gx += (tx - gx) * 0.14; gy += (ty - gy) * 0.14; glow.style.setProperty('--mx', gx.toFixed(1) + 'px'); glow.style.setProperty('--my', gy.toFixed(1) + 'px'); if (on) requestAnimationFrame(f); })();
    });
    pk.addEventListener('pointerleave', () => { on = false; pk.classList.remove('is-lit'); });
  }

  const GLYPHS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  function decode(el) {
    const t = el.dataset.txt, n = t.length, D = 700, t0 = performance.now();
    (function f(now) {
      const k = Math.min(1, (now - t0) / D), done = Math.floor(k * n * 1.15);
      let o = '';
      for (let i = 0; i < n; i++) { const c = t[i]; o += (i < done || c === ' ' || c === ',') ? c : GLYPHS[(Math.random() * GLYPHS.length) | 0]; }
      el.textContent = o;
      if (k < 1) requestAnimationFrame(f); else el.textContent = t;
    })(t0);
  }
  const decodeObserver = new IntersectionObserver(es => es.forEach(e => { if (!e.isIntersecting) return; decodeObserver.unobserve(e.target); setTimeout(() => decode(e.target), +e.target.dataset.delay || 0); }), { threshold: 0.6 });
  if (!reduced) $$('.home-index span, .fact__key, .includes-strip__label, .example__top span').forEach(el => {
    el.dataset.txt = el.textContent.toUpperCase();
    el.dataset.delay = el.matches('.fact__key') ? [...el.closest('.facts').children].indexOf(el.closest('.fact')) * 90 : 0;
    decodeObserver.observe(el);
  });

  function go() { requestAnimationFrame(() => requestAnimationFrame(() => { hero.classList.add('is-ready'); document.body.classList.add('is-ready'); })); }
  function start() { split(); grid(); renderPackages(false, true); requestAnimationFrame(frame); }
  document.fonts.ready.then(start);

  /* loader: real progress (fonts, poster, film, page), 1.5s minimum */
  const L = $('[data-loader]');
  let loaderRun;
  function loader() {
    if (reduced || !L) { if (L) L.remove(); root.classList.remove('is-loading'); go(); return; }
    const arc = $('[data-loader-arc]', L), pc = $('[data-loader-percent]', L), edge = $('[data-loader-edge]', L), mark = $('[data-loader-mark]', L);
    history.scrollRestoration = 'manual'; scrollTo(0, 0); target = pos = 0;
    L.style.display = ''; L.classList.remove('is-out'); L.style.setProperty('--r', 0); root.classList.add('is-loading');
    const got = {}, W = { fonts: 0.3, poster: 0.15, film: 0.35, page: 0.2 };
    const done = k => { got[k] = 1; };
    document.fonts.ready.then(() => done('fonts'));
    const poster = $('[data-hero-poster]');
    (poster.complete ? Promise.resolve() : new Promise(r => { poster.onload = poster.onerror = r; })).then(() => done('poster'));
    if (film.readyState >= 3) done('film'); else { film.addEventListener('canplay', () => done('film'), { once: true }); film.addEventListener('error', () => done('film'), { once: true }); setTimeout(() => done('film'), 3500); }
    if (document.readyState === 'complete') done('page'); else addEventListener('load', () => done('page'), { once: true });
    const t0 = performance.now(), MIN = 1500;
    let shown = 0, held = 0;
    setTimeout(() => pc.classList.add('is-on'), 150);
    const run = loaderRun = {};
    (function tick(now) {
      if (run !== loaderRun) return;
      const real = Object.keys(W).reduce((a, k) => a + (got[k] ? W[k] : 0), 0);
      const want = Math.min(real, Math.min(1, (now - t0) / MIN));
      shown = Math.min(want, shown + Math.max((want - shown) * 0.1, 0.006));
      arc.setAttribute('stroke-dashoffset', (1 - shown).toFixed(4));
      pc.textContent = Math.round(shown * 100) + '%';
      const e = 1 - Math.pow(1 - shown, 3), dx = innerWidth / 2 + 80, dy = innerHeight / 2 + 80;
      mark.style.transform = `translate(${(dx * (1 - e)).toFixed(1)}px,${(dy * (1 - e)).toFixed(1)}px)`;
      if (shown >= 1) {
        if (!held) {
          held = now;
          setTimeout(() => { if (run !== loaderRun) return; mark.classList.add('is-pressed'); setTimeout(() => { mark.classList.remove('is-pressed'); mark.classList.add('is-clicked'); setTimeout(() => { if (run === loaderRun) reveal(); }, 140); }, 110); }, 120);
        }
        return;
      }
      requestAnimationFrame(tick);
    })(t0);
    function reveal() {
      L.classList.add('is-out');
      const R = Math.hypot(innerWidth, innerHeight) / 2 + 40, D = 1150, d0 = performance.now() + 40, ring = parseFloat(getComputedStyle($('.loader__ring', L)).width) / 2;
      let went = false;
      const ease = k => k < 0.5 ? 8 * k * k * k * k : 1 - Math.pow(-2 * k + 2, 4) / 2;
      (function f(now) {
        if (run !== loaderRun) return;
        const k = Math.max(0, Math.min(1, (now - d0) / D)), e = ease(k), r = e * R;
        L.style.setProperty('--r', r.toFixed(1));
        const er = Math.max(ring * (1 - e * 0.4), r + 24);
        edge.style.width = edge.style.height = (er * 2).toFixed(1) + 'px';
        edge.style.opacity = k > 0 ? (1 - k).toFixed(3) : 0;
        mark.style.transform = `scale(${1 + e * 0.8})`; mark.style.opacity = Math.max(0, 1 - k * 2.2).toFixed(3);
        if (!went && k > 0.28) { went = true; go(); }
        if (k < 1) requestAnimationFrame(f); else { L.style.display = 'none'; root.classList.remove('is-loading'); }
      })(performance.now());
    }
  }
  loader();

  /* console: mm.version(), mm.state(), mm.tune({lerp}), mm.currency('USD'), mm.loader(), mm.remeasure() */
  window.mm = {
    version: () => VERSION,
    state: () => ({ version: VERSION, currency: store.currency(), service: store.service(service).name, term, cart: store.cart().length, scroll: Math.round(scrollY), smooth,
      film: { time: +film.currentTime.toFixed(2), paused: film.paused }, closing: { time: +closingFilm.currentTime.toFixed(2), paused: closingFilm.paused } }),
    tune: o => { if (o && o.lerp) LERP = o.lerp; return { lerp: LERP }; },
    currency: c => { store.setCurrency(c); return store.currency(); },
    loader: () => { hero.classList.remove('is-ready'); document.body.classList.remove('is-ready'); const m = $('[data-loader-mark]'); m.style.transform = ''; m.style.opacity = ''; m.classList.remove('is-clicked', 'is-pressed'); $('[data-loader-arc]').setAttribute('stroke-dashoffset', 1); $('[data-loader-percent]').classList.remove('is-on'); void L.offsetWidth; loader(); },
    remeasure: () => { grid(); split(); }
  };
})();

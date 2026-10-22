/*
  homepage motion and pricing, ported from marketandmatter-homepage-html v5.3.
  all content is static in index.html. prices live on each card as
  data-p-<service>="1 month,3 months,6 months,12 months" (GBP), or one value for one off services.
*/
(() => {
  const RM = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const $ = (s, r = document) => r.querySelector(s),
    $$ = (s, r = document) => [...r.querySelectorAll(s)];
  const home = $('[data-mm-home]');
  if (!home) return;

  /* ---------- pricing: service tiles and term switch over static data ---------- */
  let svc = 'seo',
    term = 3;
  const TI = { 1: 0, 3: 1, 6: 2, 12: 3 };
  const fmt = n => '£' + Math.round(n).toLocaleString('en-GB');
  const prices = (el, s) => (el.dataset['p' + s[0].toUpperCase() + s.slice(1)] || '').split(',').map(Number);
  const isOnce = s => prices($('[data-tot]', home), s).length === 1;
  const total = (el, s, m) => {
    const p = prices(el, s);
    return p.length === 1 ? p[0] : p[TI[m]];
  };
  const counters = new Map();

  function count(el, to, animate) {
    const from = counters.has(el) ? counters.get(el) : to;
    counters.set(el, to);
    if (!animate || RM || from === to) {
      el.textContent = fmt(to);
      return;
    }
    const t0 = performance.now(),
      D = 600;
    (function f(t) {
      const k = Math.min(1, (t - t0) / D),
        e = 1 - Math.pow(1 - k, 3);
      el.textContent = fmt(from + (to - from) * e);
      if (k < 1) requestAnimationFrame(f);
    })(t0);
  }

  function renderCards(animate) {
    $$('[data-tier]', home).forEach(card => {
      const tot = $('[data-tot]', card),
        v = total(tot, svc, term);
      count(tot, v, animate);
      $('[data-mo]', card).textContent = isOnce(svc) ? 'One off payment' : `${fmt(v / term)} a month, ${term} month term`;
    });
    $$('[data-termseg] button', home).forEach(b => b.disabled = isOnce(svc));
  }

  /* static blocks per service, cross faded like the original text swap */
  function showService(next) {
    const prev = svc;
    svc = next;
    const out = $$(`[data-svc-show="${prev}"]`, home),
      inn = $$(`[data-svc-show="${next}"]`, home);
    const swapIn = () => {
      out.forEach(el => el.hidden = true);
      inn.forEach(el => {
        el.hidden = false;
        el.classList.add('mm-out');
        el.classList.add('mm-in');
      });
      void home.offsetWidth;
      inn.forEach(el => el.classList.remove('mm-out'));
    };
    if (RM) swapIn();
    else {
      out.forEach(el => el.classList.add('mm-out'));
      setTimeout(swapIn, 250);
    }
    renderCards(true);
  }
  $$('[data-svcseg] button', home).forEach(b => b.addEventListener('click', () => {
    if (b.dataset.s === svc) return;
    $$('[data-svcseg] button', home).forEach(x => x.classList.toggle('mm-on', x === b));
    showService(b.dataset.s);
  }));
  $$('[data-termseg] button', home).forEach(b => b.addEventListener('click', () => {
    term = +b.dataset.m;
    $$('[data-termseg] button', home).forEach(x => x.classList.toggle('mm-on', x === b));
    renderCards(true);
  }));
  $$('[data-tot]', home).forEach(el => counters.set(el, total(el, svc, term)));

  /* add to cart: confirmation on the button and a toast */
  let tt;
  const toast = $('[data-toast]', home);
  $$('[data-add]', home).forEach(b => b.addEventListener('click', () => {
    const name = $(`[data-svc-show="${svc}"]`, $('.mm-sl', home)).textContent;
    $('[data-toastt]', toast).textContent =
      `${name} ${b.dataset.add}${isOnce(svc) ? ', one off' : ', ' + term + (term > 1 ? ' months' : ' month')} added to your cart`;
    toast.classList.add('mm-show');
    clearTimeout(tt);
    tt = setTimeout(() => toast.classList.remove('mm-show'), 2600);
    const lab = b.textContent;
    b.classList.add('mm-added');
    b.textContent = 'Added to cart';
    setTimeout(() => {
      b.classList.remove('mm-added');
      b.textContent = lab;
    }, 2200);
  }));

  /* ---------- faq ---------- */
  $$('[data-qs] .mm-q', home).forEach(q => $('button', q).addEventListener('click', () => {
    const o = !q.classList.contains('mm-open');
    $$('[data-qs] .mm-q', home).forEach(x => {
      x.classList.remove('mm-open');
      $('button', x).setAttribute('aria-expanded', 'false');
    });
    if (o) {
      q.classList.add('mm-open');
      $('button', q).setAttribute('aria-expanded', 'true');
    }
  }));

  /* ---------- native scrolling; in-page links glide to their section ---------- */
  function scrollToId(id) {
    const el = id === 'top' ? document.body : document.getElementById(id);
    if (!el) return;
    const y = id === 'top' ? 0 : el.getBoundingClientRect().top + scrollY;
    window.scrollTo({ top: y, behavior: RM ? 'auto' : 'smooth' });
  }
  $$('[data-to]', home).forEach(a => a.addEventListener('click', e => {
    e.preventDefault();
    scrollToId(a.dataset.to);
  }));

  /* ---------- in view reveals, fade up 60px, 0.1s stagger per group ---------- */
  const io = new IntersectionObserver(es => {
    const batch = es.filter(e => e.isIntersecting).map(e => e.target);
    batch.sort((a, b) => a.getBoundingClientRect().top - b.getBoundingClientRect().top ||
      a.getBoundingClientRect().left - b.getBoundingClientRect().left);
    batch.forEach((el, i) => {
      el.style.setProperty('--rd', (i * .1) + 's');
      el.classList.add('mm-in');
      io.unobserve(el);
    });
  }, { rootMargin: '0px 0px -8% 0px', threshold: 0 });
  /* hidden service blocks never intersect, so they count as revealed */
  $$('[data-rv]', home).forEach(el => RM || el.hidden ? el.classList.add('mm-in') : io.observe(el));

  /* ---------- mobile carousels: dots follow the card in view, tap a dot to go there ---------- */
  function carousel(track, dots) {
    const items = [...track.children];
    dots.innerHTML = items.map((_, i) => `<button type="button" aria-label="Show card ${i + 1} of ${items.length}"></button>`).join('');
    const btns = [...dots.children];
    const pad = () => parseFloat(getComputedStyle(track).paddingLeft) || 0;
    const left = el => el.getBoundingClientRect().left - track.getBoundingClientRect().left + track.scrollLeft - pad();
    function sync() {
      const max = track.scrollWidth - track.clientWidth;
      let on = 0;
      if (track.scrollLeft >= max - 2) on = items.length - 1;
      else {
        let bd = 1e9;
        items.forEach((el, i) => {
          const d = Math.abs(left(el) - track.scrollLeft);
          if (d < bd) {
            bd = d;
            on = i;
          }
        });
      }
      btns.forEach((b, i) => b.classList.toggle('mm-on', i === on));
    }
    btns.forEach((b, i) => b.addEventListener('click', () =>
      track.scrollTo({ left: left(items[i]), behavior: RM ? 'auto' : 'smooth' })));
    let q = false;
    track.addEventListener('scroll', () => {
      if (q) return;
      q = true;
      requestAnimationFrame(() => {
        q = false;
        sync();
      });
    }, { passive: true });
    addEventListener('resize', sync);
    sync();
  }
  carousel($('[data-svcseg]', home), $('[data-dots-for="tiles"]', home));
  carousel($('.mm-pcards', home), $('[data-dots-for="cards"]', home));

  /* cards off to the side never intersect, reveal the row together */
  const cardRow = $$('.mm-pcards > [data-rv]', home);
  const mo = new MutationObserver(() => {
    if (!cardRow.some(c => c.classList.contains('mm-in'))) return;
    mo.disconnect();
    cardRow.forEach(c => c.classList.add('mm-in'));
  });
  mo.observe($('.mm-pcards', home), { subtree: true, attributes: true, attributeFilter: ['class'] });

  /* ---------- scroll linked: text fill, image parallax ---------- */
  const hero = $('.mm-hero', home);
  const fills = $$('[data-words]', home),
    pars = $$('[data-par]', home);

  function frame() {
    const vh = innerHeight;
    if (!RM) {
      fills.forEach(el => {
        const r = el.getBoundingClientRect();
        const p = Math.max(0, Math.min(1, (vh * .9 - r.top) / (vh * .6)));
        const ws = el._w,
          k = p * (ws.length + 2);
        ws.forEach((w, i) => {
          const on = k > i;
          if (w._on !== on) {
            w._on = on;
            w.style.opacity = on ? 1 : '';
          }
        });
      });
      pars.forEach(el => {
        const r = el.getBoundingClientRect();
        if (r.bottom < -50 || r.top > vh + 50) return;
        const k = (r.top + r.height / 2 - vh / 2) / (vh / 2 + r.height / 2);
        el.firstElementChild.style.transform = `translate3d(0,${(-k * r.height * .1).toFixed(1)}px,0)`;
      });
    }
  }
  /* only work when the page actually moves, at most once a frame */
  let queued = false;
  const requestFrame = () => {
    if (queued) return;
    queued = true;
    requestAnimationFrame(() => {
      queued = false;
      frame();
    });
  };
  addEventListener('scroll', requestFrame, { passive: true });
  addEventListener('resize', requestFrame);

  /* ---------- grid lines on the container quarters ---------- */
  function grid() {
    const w = $('.mm-intro .mm-wrap', home).getBoundingClientRect();
    $$('[data-grid] i', home).forEach((i, n) => i.style.left = (w.left + w.width * n / 4) + 'px');
  }
  addEventListener('resize', () => {
    grid();
    split($('h1', hero));
  });

  /* ---------- hero entrance: masked lines plus fades ---------- */
  function split(el) {
    if (!el.dataset.src) el.dataset.src = el.textContent;
    el.innerHTML = el.dataset.src.split(' ').map(w => `<span class="mm-w">${w}</span>`).join(' ');
    const lines = [];
    let top = null,
      acc = [];
    $$('.mm-w', el).forEach(w => {
      const t = w.offsetTop;
      if (top !== null && Math.abs(t - top) > 2) {
        lines.push(acc);
        acc = [];
      }
      top = t;
      acc.push(w.textContent);
    });
    if (acc.length) lines.push(acc);
    el.innerHTML = lines.map((l, i) =>
      `<span class="mm-line"><span class="mm-line-in" style="--i:${i}">${l.join(' ')}</span></span>`).join('');
  }

  /* films only play while on screen */
  function playInView(video, watch) {
    new IntersectionObserver(es => es.forEach(e => {
      if (RM) return;
      if (e.isIntersecting) {
        const p = video.play();
        if (p) p.catch(() => {});
      } else video.pause();
    }), { threshold: .05 }).observe(watch);
  }
  const v = $('video', hero);
  v.addEventListener('playing', () => v.classList.add('mm-playing'));
  playInView(v, hero);
  const cv = $('[data-cfilm]', home);
  playInView(cv, cv);

  /* intro statement fills word by word */
  fills.forEach(el => {
    const out = [];
    el.childNodes.forEach(n => {
      const dim = n.nodeType === 1 && n.classList.contains('mm-dim');
      n.textContent.split(/(\s+)/).forEach(t => {
        if (!t) return;
        out.push(/\s/.test(t) ? t : `<span class="mm-w${dim ? ' mm-dim' : ''}">${t}</span>`);
      });
    });
    el.innerHTML = out.join('');
    el._w = $$('.mm-w', el);
  });

  /* counters */
  const cio = new IntersectionObserver(es => es.forEach(e => {
    if (!e.isIntersecting) return;
    cio.unobserve(e.target);
    const el = e.target,
      to = +el.dataset.count;
    if (RM) {
      el.textContent = to;
      return;
    }
    const t0 = performance.now() + 250,
      D = 1400;
    el.textContent = '0';
    (function f(t) {
      const k = Math.max(0, Math.min(1, (t - t0) / D));
      el.textContent = Math.round(to * (1 - Math.pow(1 - k, 3)));
      if (k < 1) requestAnimationFrame(f);
    })(performance.now());
  }), { threshold: .6 });
  $$('[data-count]', home).forEach(el => {
    if (!RM) el.textContent = '0';
    cio.observe(el);
  });

  /* lattice glow follows the pointer in Pricing (fine pointers only) */
  const pk = $('#services', home),
    gl = $('[data-glow]', home);
  if (!RM && matchMedia('(pointer:fine)').matches) {
    let gx = 0,
      gy = 0,
      tx = 0,
      ty = 0,
      on = false;
    pk.addEventListener('pointermove', e => {
      const r = pk.getBoundingClientRect();
      tx = e.clientX - r.left;
      ty = e.clientY - r.top;
      if (!on) {
        on = true;
        gx = tx;
        gy = ty;
        pk.classList.add('mm-lit');
        (function f() {
          gx += (tx - gx) * .14;
          gy += (ty - gy) * .14;
          gl.style.setProperty('--mx', gx.toFixed(1) + 'px');
          gl.style.setProperty('--my', gy.toFixed(1) + 'px');
          if (on) requestAnimationFrame(f);
        })();
      }
    });
    pk.addEventListener('pointerleave', () => {
      on = false;
      pk.classList.remove('mm-lit');
    });
  }

  /* mono labels decode into place as they arrive */
  const GL = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

  function decode(el) {
    const t = el.dataset.txt,
      n = t.length,
      D = 700,
      t0 = performance.now();
    (function f(now) {
      const k = Math.min(1, (now - t0) / D),
        done = Math.floor(k * n * 1.15);
      let o = '';
      for (let i = 0; i < n; i++) {
        const c = t[i];
        o += (i < done || c === ' ' || c === ',') ? c : GL[(Math.random() * GL.length) | 0];
      }
      el.textContent = k < 1 ? o : t;
      if (k < 1) requestAnimationFrame(f);
    })(t0);
  }
  const dio = new IntersectionObserver(es => es.forEach(e => {
    if (!e.isIntersecting) return;
    dio.unobserve(e.target);
    setTimeout(() => decode(e.target), +e.target.dataset.dd || 0);
  }), { threshold: .6 });
  if (!RM) $$('.mm-idx span, .mm-fact .mm-k, .mm-strip .mm-lb, .mm-ex .mm-top span', home).forEach(el => {
    el.dataset.txt = el.textContent.toUpperCase();
    el.dataset.dd = el.matches('.mm-fact .mm-k') ? [...el.closest('.mm-facts').children].indexOf(el.closest('.mm-fact')) * 90 : 0;
    dio.observe(el);
  });

  function go() {
    requestAnimationFrame(() => requestAnimationFrame(() => {
      hero.classList.add('mm-go');
      home.classList.add('mm-go');
    }));
  }

  function start() {
    split($('h1', hero));
    grid();
    renderCards(false);
    requestFrame();
  }
  document.fonts.ready.then(start);

  /* ---------- loader: real progress (fonts, poster, film, page), floor of 1.5s so it reads ---------- */
  const L = $('[data-ldr]', home);

  function loader() {
    if (RM || !L) {
      if (L) L.remove();
      document.documentElement.classList.remove('mm-ld');
      go();
      return;
    }
    const arc = $('[data-larc]', L),
      pc = $('[data-lpc]', L),
      ed = $('[data-led]', L),
      mk = $('.mm-lmk', L);
    history.scrollRestoration = 'manual';
    scrollTo(0, 0);
    document.documentElement.classList.add('mm-ld');
    const got = {};
    const W = { fonts: .3, poster: .15, film: .35, page: .2 };
    const done = k => got[k] = 1;
    document.fonts.ready.then(() => done('fonts'));
    const im = $('.mm-media img', hero);
    (im.complete ? Promise.resolve() : new Promise(r => im.onload = im.onerror = r)).then(() => done('poster'));
    if (v.readyState >= 3) done('film');
    else {
      v.addEventListener('canplay', () => done('film'), { once: true });
      v.addEventListener('error', () => done('film'), { once: true });
      setTimeout(() => done('film'), 3500);
    }
    if (document.readyState === 'complete') done('page');
    else addEventListener('load', () => done('page'), { once: true });
    const t0 = performance.now(),
      MIN = 1500;
    let shown = 0,
      held = 0;
    setTimeout(() => pc.classList.add('mm-on'), 150);
    (function tick(now) {
      const real = Object.keys(W).reduce((a, k) => a + (got[k] ? W[k] : 0), 0);
      const want = Math.min(real, Math.min(1, (now - t0) / MIN));
      shown = Math.min(want, shown + Math.max((want - shown) * .1, .006));
      arc.setAttribute('stroke-dashoffset', (1 - shown).toFixed(4));
      pc.textContent = Math.round(shown * 100) + '%';
      const e = 1 - Math.pow(1 - shown, 3),
        dx = innerWidth / 2 + 80,
        dy = innerHeight / 2 + 80;
      mk.style.transform = `translate(${(dx * (1 - e)).toFixed(1)}px,${(dy * (1 - e)).toFixed(1)}px)`;
      if (shown >= 1) {
        if (!held) {
          held = now;
          setTimeout(() => {
            mk.classList.add('mm-press');
            setTimeout(() => {
              mk.classList.remove('mm-press');
              mk.classList.add('mm-clk');
              setTimeout(reveal, 140);
            }, 110);
          }, 120);
        }
        return;
      }
      requestAnimationFrame(tick);
    })(t0);

    function reveal() {
      L.classList.add('mm-out');
      const R = Math.hypot(innerWidth, innerHeight) / 2 + 40,
        D = 1150,
        d0 = performance.now() + 40,
        ring = parseFloat(getComputedStyle($('.mm-lrg', L)).width) / 2;
      let went = false;
      const ease = k => k < .5 ? 8 * k * k * k * k : 1 - Math.pow(-2 * k + 2, 4) / 2;
      (function f(now) {
        const k = Math.max(0, Math.min(1, (now - d0) / D)),
          e = ease(k),
          r = e * R;
        L.style.setProperty('--r', r.toFixed(1));
        const er = Math.max(ring * (1 - e * .4), r + 24);
        ed.style.width = ed.style.height = (er * 2).toFixed(1) + 'px';
        ed.style.opacity = k > 0 ? (1 - k).toFixed(3) : 0;
        mk.style.transform = `scale(${1 + e * .8})`;
        mk.style.opacity = Math.max(0, 1 - k * 2.2).toFixed(3);
        if (!went && k > .28) {
          went = true;
          go();
        }
        if (k < 1) requestAnimationFrame(f);
        else {
          L.style.display = 'none';
          document.documentElement.classList.remove('mm-ld');
        }
      })(performance.now());
    }
  }
  loader();
})();
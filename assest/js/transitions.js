/* page transitions, late image fades and the quiet reveal.
   loaded in the head so the transition events are caught before the first paint; the rest waits for the DOM */
document.documentElement.classList.add('js');

(function () {
  const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const native = window.CSS && CSS.supports && CSS.supports('view-transition-name', 'none');

  // a skipped native transition rejects its promises, keep that out of the console
  const hush = e => { const t = e.viewTransition; if (t) [t.ready, t.finished, t.updateCallbackDone].forEach(p => p && p.catch(() => {})); };
  addEventListener('pageswap', hush);
  addEventListener('pagereveal', hush);

  /* fade out before leaving, only where the browser has no native transition */
  const OWN = '[data-inert], [data-scroll-to], [data-log-out], [data-no-transition]';
  function leaves(e) {
    if (e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return null;
    const a = e.target.closest && e.target.closest('a[href]');
    if (!a || a.closest(OWN) || a.hasAttribute('download')) return null;
    if (a.target && a.target !== '_self') return null;
    const url = new URL(a.href, location.href);
    if (!/^(https?|file):$/.test(url.protocol) || url.origin !== location.origin) return null;
    if (url.hash && url.pathname === location.pathname && url.search === location.search) return null;
    return url;
  }
  if (!native && !reduced) {
    document.addEventListener('click', e => {
      const url = leaves(e);
      if (!url) return;
      e.preventDefault();
      document.body.classList.add('is-leaving');
      setTimeout(() => { location.href = url.href; }, 200);
    }, true);
  }
  // back and forward can restore a faded page from the cache
  addEventListener('pageshow', e => { if (e.persisted) document.body.classList.remove('is-leaving'); });

  if (reduced) return;
  const $$ = (s, r = document) => [...r.querySelectorAll(s)];

  /* images still loading fade in over a tint; cached ones are left alone */
  function settle(img) {
    const frame = img.parentElement;
    img.classList.remove('is-pending');
    img.classList.add('is-arriving');
    setTimeout(() => { img.classList.remove('is-arriving'); frame.classList.remove('is-media-wait'); }, 450);
  }
  function media() {
    $$('img[loading="lazy"]').forEach(img => {
      if (img.complete || img.dataset.media) return;
      img.dataset.media = '1';
      img.classList.add('is-pending');
      img.parentElement.classList.add('is-media-wait');
      img.addEventListener('load', () => settle(img), { once: true });
      img.addEventListener('error', () => settle(img), { once: true });
    });
  }

  /* inner page sections with no designed motion rise in once; anything already on screen stays put */
  function rise() {
    if (document.body.classList.contains('home') || !('IntersectionObserver' in window)) return;
    const quiet = $$('main > section, main.legal .legal__clause, main.not-found').filter(s => !s.querySelector('[data-reveal]') && !s.matches('[data-reveal]') && !s.classList.contains('hero') && !s.classList.contains('auth'));
    const items = quiet.flatMap(s => {
      const box = s.querySelector(':scope > .container') || s;
      return box.matches('.legal__clause') ? [box] : [...box.children];
    }).filter(el => el.getBoundingClientRect().top > innerHeight);
    if (!items.length) return;
    items.forEach(el => el.classList.add('rise'));
    const io = new IntersectionObserver(entries => {
      entries.filter(e => e.isIntersecting).forEach((e, i) => {
        e.target.style.setProperty('--rise-delay', (i * 0.07) + 's');
        e.target.classList.add('is-in');
        io.unobserve(e.target);
      });
    }, { rootMargin: '0px 0px -6% 0px' });
    items.forEach(el => io.observe(el));
  }

  function start() {
    media(); rise();
    document.addEventListener('mm:render', media);
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start, { once: true });
  else start();
})();

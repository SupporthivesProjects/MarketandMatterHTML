(function() {
	const store = MM.store;
	const {
		icons
	} = MM;
	const $ = (s, r = document) => r.querySelector(s);
	const $$ = (s, r = document) => [...r.querySelectorAll(s)];
	const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
	MM.$ = $;
	MM.$$ = $$;
	MM.reduced = reduced;

	const session = store.session();
	if (session) $$('.site-nav__avatar').forEach(a => {
		a.textContent = session.name.split(' ').map(w => w[0]).join('').slice(0, 2).toUpperCase();
	});

	/* Menu and cart panel */
	const menu = $('[data-menu-panel]'),
		menuBtn = $('[data-menu-toggle]');
	const cartPanel = $('[data-cart-panel]'),
		cartBtn = $('[data-cart-toggle]');
	const group = $('[data-menu-group]'),
		servicesBtn = $('[data-menu-services]');

	function setMenu(open) {
		if (!menu) return;
		menu.classList.toggle('is-open', open);
		menuBtn.textContent = open ? 'Close' : 'Menu';
		menuBtn.setAttribute('aria-expanded', open);
		if (!open) {
			group.classList.remove('is-open');
			servicesBtn.setAttribute('aria-expanded', 'false');
		}
		document.body.classList.toggle('has-menu-open', open);
	}

	function setCart(open) {
		if (!cartPanel) return;
		cartPanel.classList.toggle('is-open', open);
		cartBtn.setAttribute('aria-expanded', open);
	}
	MM.setCart = setCart;
	if (menu) {
		menuBtn.addEventListener('click', e => {
			e.stopPropagation();
			setCart(false);
			setMenu(!menu.classList.contains('is-open'));
		});
		servicesBtn.addEventListener('click', () => {
			const o = !group.classList.contains('is-open');
			group.classList.toggle('is-open', o);
			servicesBtn.setAttribute('aria-expanded', o);
		});
		cartBtn.addEventListener('click', e => {
			e.stopPropagation();
			setMenu(false);
			setCart(!cartPanel.classList.contains('is-open'));
		});
		$('[data-cart-close]').addEventListener('click', () => setCart(false));
		[menu, cartPanel, $('.site-nav')].forEach(el => el.addEventListener('click', e => e.stopPropagation()));
		document.addEventListener('click', () => {
			setMenu(false);
			setCart(false);
		});
		addEventListener('keydown', e => {
			if (e.key === 'Escape') {
				setMenu(false);
				setCart(false);
				closePopup();
			}
		});
	}

	function syncCurrency() {
		const c = store.currency();
		$$('[data-currency]').forEach(b => b.classList.toggle('is-active', b.dataset.currency === c));
		$$('[data-currency-select]').forEach(s => {
			s.value = c;
		});
	}
	$$('[data-currency]').forEach(b => b.addEventListener('click', () => store.setCurrency(b.dataset.currency)));
	$$('[data-currency-select]').forEach(s => s.addEventListener('change', () => store.setCurrency(s.value)));

	const SYMBOL = () => store.money(0).replace(/[\d,]/g, '');

	/* static prices: data-price-from="seo", data-price="seo:silver:3" */
	function renderPrices() {
		$$('[data-price-from]').forEach(el => {
			const id = el.dataset.priceFrom,
				s = store.service(id),
				amount = store.money(store.fromPrice(id));
			const style = el.dataset.style || 'full';
			if (style === 'amount') el.textContent = 'From ' + amount;
			else el.textContent = s.oneOff ? `From ${amount}, one off` : `From ${amount} a month`;
		});
		$$('[data-price]').forEach(el => {
			const [s, t, m] = el.dataset.price.split(':');
			el.textContent = store.money(store.price(s, t, +m));
		});
		$$('[data-price-monthly]').forEach(el => {
			const [s, t, m] = el.dataset.priceMonthly.split(':');
			el.textContent = store.money(store.monthly(s, t, +m));
		});
		// rounded to the nearest 50 in the viewing currency
		const band = gbp => SYMBOL() + (Math.round(store.convert(gbp) / 50) * 50).toLocaleString('en-GB');
		$$('[data-budget]').forEach(o => {
			const [lo, hi] = o.dataset.budget.split('-').map(Number);
			o.textContent = !lo ? `Under ${band(hi)}` : !hi ? `Over ${band(lo)}` : `${band(lo)} to ${band(hi)}`;
		});
		$$('[data-figures]').forEach(el => {
			const [s, t] = el.dataset.figures.split(':');
			el.innerHTML = store.service(s).figures[store.tierIndex(t)].map(f => `<div><b class="figures__value">${typeof f.value === 'object' ? store.money(f.value.money) : f.value}</b><span class="figures__label">${f.label}</span></div>`).join('');
		});
	}

	function renderCart() {
		const lines = store.cart();
		$$('[data-cart-count]').forEach(n => {
			n.textContent = lines.length;
		});
		if (!cartPanel) return;
		cartPanel.classList.toggle('has-lines', lines.length > 0);
		$('[data-cart-panel-lines]').innerHTML = lines.map(l => {
			const s = store.service(l.service);
			return `<div class="cart-panel__line"><div><b class="cart-panel__name">${s.name}</b><small class="cart-panel__meta">${store.tierName(l.tier)}, ${s.oneOff ? 'one off' : l.term + ' month term'}</small></div>
        <div class="cart-panel__price"><span class="cart-panel__amount">${store.money(store.lineTotal(l))}</span><button type="button" class="cart-panel__remove" data-remove-line="${l.id}">Remove</button></div></div>`;
		}).join('');
		$('[data-cart-panel-total]').textContent = store.money(store.totals(lines).subtotal);
		$$('[data-remove-line]', cartPanel).forEach(b => b.addEventListener('click', () => store.removeFromCart(b.dataset.removeLine)));
	}
	MM.bumpCart = function() {
		$$('[data-cart-count]').forEach(n => {
			n.classList.remove('is-bumped');
			void n.offsetWidth;
			n.classList.add('is-bumped');
		});
	};

	function renderAll() {
		syncCurrency();
		renderPrices();
		renderCart();
		document.dispatchEvent(new CustomEvent('mm:render'));
	}
	document.addEventListener('mm:currency', renderAll);
	document.addEventListener('mm:cart', renderCart);
	addEventListener('storage', renderAll);

	const toast = document.createElement('div');
	toast.className = 'toast';
	toast.setAttribute('role', 'status');
	document.body.appendChild(toast);
	let toastTimer;
	MM.toast = function(text) {
		toast.innerHTML = icons.check + '<span></span>';
		toast.lastChild.textContent = text;
		toast.classList.add('is-visible');
		clearTimeout(toastTimer);
		toastTimer = setTimeout(() => toast.classList.remove('is-visible'), 2600);
	};

	/* links with no destination yet (social, downloads) show a tooltip */
	const tip = document.createElement('div');
	tip.className = 'tooltip';
	document.body.appendChild(tip);
	let tipTimer;
	document.addEventListener('click', e => {
		const a = e.target.closest('[data-inert]');
		if (!a) return;
		e.preventDefault();
		e.stopPropagation();
		const r = a.getBoundingClientRect();
		tip.textContent = a.dataset.inert || 'Page not built yet';
		tip.style.left = Math.min(innerWidth - 80, Math.max(80, r.left + r.width / 2)) + 'px';
		tip.style.top = Math.max(40, r.top) + 'px';
		tip.classList.remove('is-visible');
		void tip.offsetWidth;
		tip.classList.add('is-visible');
		clearTimeout(tipTimer);
		tipTimer = setTimeout(() => tip.classList.remove('is-visible'), 1600);
	}, true);
	addEventListener('scroll', () => tip.classList.remove('is-visible'), {
		passive: true
	});

	/* Popups */
	let popupEl = null;

	function closePopup() {
		if (popupEl) {
			popupEl.remove();
			popupEl = null;
			document.body.style.overflow = '';
		}
	}
	MM.popup = function({
		heading,
		lines,
		button,
		href
	}) {
		closePopup();
		popupEl = document.createElement('div');
		popupEl.className = 'popup';
		popupEl.setAttribute('role', 'dialog');
		popupEl.setAttribute('aria-modal', 'true');
		popupEl.setAttribute('aria-labelledby', 'popup-heading');
		popupEl.innerHTML = `<div class="popup__card"><span class="popup__mark">${icons.check}</span>
      <div class="popup__text"><h2 class="popup__heading" id="popup-heading"></h2><p class="popup__body"></p></div>
      <a class="button button--block sweep" href="${href}"><span></span><span class="button__icon">${icons.arrow}</span></a></div>`;
		$('.popup__heading', popupEl).textContent = heading;
		const body = $('.popup__body', popupEl);
		lines.forEach((l, i) => {
			if (i) body.appendChild(document.createElement('br'));
			body.appendChild(document.createTextNode(l));
		});
		$('.button span', popupEl).textContent = button;
		document.body.appendChild(popupEl);
		document.body.style.overflow = 'hidden';
		$('.button', popupEl).focus();
	};

	$$('[data-accordion]').forEach(list => {
		$$('[data-accordion-item]', list).forEach(item => {
			const btn = $('[data-accordion-button]', item);
			btn.addEventListener('click', () => {
				const open = !item.classList.contains('is-open');
				if (list.dataset.accordion === 'single') $$('[data-accordion-item]', list).forEach(x => {
					x.classList.remove('is-open');
					$('[data-accordion-button]', x).setAttribute('aria-expanded', 'false');
				});
				item.classList.toggle('is-open', open);
				btn.setAttribute('aria-expanded', open);
			});
		});
	});

	$$('[data-carousel]').forEach(track => {
		const dots = track.parentElement.querySelector('[data-carousel-dots]');
		if (!dots) return;
		const items = [...track.children];
		dots.innerHTML = items.map((_, i) => `<button type="button" aria-label="Show item ${i + 1}"></button>`).join('');
		const buttons = [...dots.children];
		const update = () => {
			const x = track.scrollLeft,
				w = track.scrollWidth - track.clientWidth;
			const i = w <= 0 ? 0 : Math.round((x / w) * (items.length - 1));
			buttons.forEach((b, j) => b.classList.toggle('is-active', j === i));
		};
		buttons.forEach((b, i) => b.addEventListener('click', () => track.scrollTo({
			left: items[i].offsetLeft - items[0].offsetLeft,
			behavior: reduced ? 'auto' : 'smooth'
		})));
		track.addEventListener('scroll', update, {
			passive: true
		});
		update();
	});

	$$('[data-toggle-password]').forEach(b => b.addEventListener('click', () => {
		const input = b.parentElement.querySelector('input');
		const show = input.type === 'password';
		input.type = show ? 'text' : 'password';
		b.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
	}));

	/* fake reCAPTCHA, ticks on click. swap for the real widget, verify server side */
	$$('[data-captcha]').forEach(c => c.addEventListener('click', () => {
		const on = c.getAttribute('aria-checked') !== 'true';
		c.setAttribute('aria-checked', on);
		c.classList.toggle('is-checked', on);
	}));

	/* Forms */
	MM.validate = function(form) {
		let ok = true;
		$$('[required]', form).forEach(input => {
			const bad = input.type === 'checkbox' ? !input.checked : !input.value.trim() || (input.type === 'email' && !/^\S+@\S+\.\S+$/.test(input.value));
			input.closest('.field, .consent')?.classList.toggle('is-invalid', bad);
			if (bad) ok = false;
		});
		const captcha = $('[data-captcha]', form);
		if (captcha && captcha.getAttribute('aria-checked') !== 'true') {
			captcha.classList.add('is-invalid');
			ok = false;
		} else if (captcha) captcha.classList.remove('is-invalid');
		const match = $('[data-match]', form);
		if (match && match.value !== $('#' + match.dataset.match, form).value) {
			match.closest('.field').classList.add('is-invalid');
			ok = false;
		}
		if (!ok) {
			const first = $('.is-invalid input, .is-invalid textarea, .is-invalid select, .is-invalid', form);
			first?.focus?.();
		}
		return ok;
	};
	$$('[data-form]').forEach(form => form.addEventListener('submit', e => {
		e.preventDefault();
		if (!MM.validate(form)) return;
		const data = Object.fromEntries(new FormData(form));
		const name = (data.name || '').trim() || 'John Smith';
		const email = (data.email || '').trim() || 'john@example.com';
		const first = name.split(' ')[0];
		const kind = form.dataset.form;
		if (kind === 'message') MM.popup({
			heading: 'Message sent',
			lines: [`Thanks, ${name}.`, `We will reply to ${email}.`],
			button: 'Back to homepage',
			href: 'index.html'
		});
		if (kind === 'brief') MM.popup({
			heading: 'Brief received',
			lines: [`Thanks, ${name}.`, `We will reply to ${email}.`],
			button: 'Back to homepage',
			href: 'index.html'
		});
		if (kind === 'login') {
			store.signIn(store.session()?.name || 'John Smith', email);
			location.href = 'account.html';
		}
		if (kind === 'signup') {
			store.signIn(name, email);
			MM.popup({
				heading: 'Account created',
				lines: [`Welcome, ${first}. Your invoices and reports`, 'will all live in your account.'],
				button: 'Go to your account',
				href: 'account.html'
			});
		}
		if (kind === 'forgot') MM.popup({
			heading: 'Check your email',
			lines: [`We sent a link to ${email}.`, 'Open it to set a new password.'],
			button: 'Back to log in',
			href: 'login.html'
		});
		if (kind === 'reset') MM.popup({
			heading: 'Password updated',
			lines: ['Your password is changed.', 'You can log in with it now.'],
			button: 'Log in',
			href: 'login.html'
		});
		if (kind === 'details') {
			store.signIn(name, email);
			MM.popup({
				heading: 'Changes saved',
				lines: ['Your details are up to date.', 'We use them on your next invoice.'],
				button: 'Back to your account',
				href: 'account.html'
			});
		}
	}));
	$$('.field input, .field textarea, .field select').forEach(i => i.addEventListener('input', () => i.closest('.field').classList.remove('is-invalid')));
	$$('.consent input').forEach(i => i.addEventListener('change', () => i.closest('.consent').classList.remove('is-invalid')));

	$$('[data-upload]').forEach(u => {
		const input = $('input[type=file]', u),
			name = $('[data-upload-name]', u);
		input.addEventListener('change', () => {
			if (input.files[0]) name.textContent = input.files[0].name;
		});
	});

	$$('[data-log-out]').forEach(b => b.addEventListener('click', e => {
		e.preventDefault();
		store.signOut();
		location.href = 'index.html';
	}));

	const reveal = $$('[data-reveal]');
	if (reduced || !('IntersectionObserver' in window)) reveal.forEach(el => el.classList.add('is-in'));
	else {
		const io = new IntersectionObserver(entries => {
			const shown = entries.filter(e => e.isIntersecting).map(e => e.target);
			shown.sort((a, b) => a.getBoundingClientRect().top - b.getBoundingClientRect().top || a.getBoundingClientRect().left - b.getBoundingClientRect().left);
			shown.forEach((el, i) => {
				el.style.setProperty('--reveal-delay', (i * 0.08) + 's');
				el.classList.add('is-in');
				io.unobserve(el);
			});
		}, {
			rootMargin: '0px 0px -6% 0px'
		});
		reveal.forEach(el => io.observe(el));
	}

	renderAll();
})();
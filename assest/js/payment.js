/*
  payment gateway goes here: startPayment(order)
  order: { ref, placed, currency, customer: {name, email, phone, company, address...},
           lines: [{service, tier, term, amount}], subtotal, discount, total }
  amounts are GBP; currency is what the buyer was viewing.
  live: post to the server, reprice there, create the session, redirect to the hosted page,
  return to payment-complete.html?order=REF or payment-error.html?order=REF.
  for now it saves the order and skips to the result page. checkout.html?fail=1 shows the error page.
*/
window.MM = window.MM || {};
MM.payment = {
  startPayment(order) {
    const fail = new URLSearchParams(location.search).has('fail');
    if (fail) {
      MM.store.write(MM.store.KEYS.lastOrder, order);
      location.href = 'payment-error.html?order=' + encodeURIComponent(order.ref);
      return;
    }
    MM.store.saveOrder(Object.assign({}, order, { status: 'paid' }));
    MM.store.signIn(order.customer.name, order.customer.email);
    MM.store.clearCart();
    location.href = 'payment-complete.html?order=' + encodeURIComponent(order.ref);
  }
};

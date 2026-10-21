// demo customer. orders hold service, tier and term only; amounts come from the catalogue
window.MM_ACCOUNT = {
  member: {
    name: 'John Smith', email: 'john@example.com', phone: '+44 7700 900123', company: 'Smith & Co',
    address1: '12 Market Street', address2: '', city: 'London', region: 'England', postcode: 'EC1A 1BB', country: 'United Kingdom',
    since: '2026-02-14', passwordChanged: '2026-08-08'
  },
  orders: [
    { ref: 'MM 10421', placed: '2026-10-01', payment: 'Visa ending 4242', lines: [{ service: 'email-marketing', tier: 'bronze', term: 3 }] },
    { ref: 'MM 10398', placed: '2026-08-08', payment: 'Visa ending 4242', discountCode: 'SPRING100', lines: [{ service: 'seo', tier: 'silver', term: 3 }, { service: 'paid-search', tier: 'bronze', term: 3 }] },
    { ref: 'MM 10311', placed: '2026-06-02', payment: 'Visa ending 4242', lines: [{ service: 'social-media', tier: 'bronze', term: 3 }] },
    { ref: 'MM 10107', placed: '2026-02-14', payment: 'Visa ending 4242', lines: [{ service: 'web-design', tier: 'silver', term: null }] }
  ],
  // overview rows. state: preparing, active or ended; progress 0 to 1
  services: [
    { service: 'email-marketing', tier: 'bronze', term: 3, state: 'preparing', progress: 0.04, note: 'Order MM 10421, paid in full. Starts once your brief is in.' },
    { service: 'seo', tier: 'silver', term: 3, state: 'active', progress: 0.59, note: 'Month 2 of 3. Ends 8 Nov 2026. Next report 1 Nov.' },
    { service: 'paid-search', tier: 'bronze', term: 3, state: 'active', progress: 0.59, note: 'Month 2 of 3. Ends 8 Nov 2026. Next report 1 Nov.' },
    { service: 'social-media', tier: 'bronze', term: 3, state: 'ended', progress: 1, note: 'Ended 2 Sep 2026. All 3 reports delivered.' },
    { service: 'web-design', tier: 'silver', term: null, state: 'ended', progress: 1, note: 'Launched 28 Mar 2026. Launch pack delivered.' }
  ],
  reports: [
    { name: 'Paid search report, September 2026', service: 'paid-search', tier: 'bronze', delivered: '2026-10-01' },
    { name: 'SEO report, September 2026', service: 'seo', tier: 'silver', delivered: '2026-10-01' },
    { name: 'SEO report, August 2026', service: 'seo', tier: 'silver', delivered: '2026-09-01' },
    { name: 'Paid search report, August 2026', service: 'paid-search', tier: 'bronze', delivered: '2026-09-01' },
    { name: 'Social media report, August 2026', service: 'social-media', tier: 'bronze', delivered: '2026-09-01' },
    { name: 'SEO technical audit', service: 'seo', tier: 'silver', delivered: '2026-08-15' },
    { name: 'Social media report, July 2026', service: 'social-media', tier: 'bronze', delivered: '2026-08-01' },
    { name: 'Social media report, June 2026', service: 'social-media', tier: 'bronze', delivered: '2026-07-01' },
    { name: 'Website launch pack', service: 'web-design', tier: 'silver', delivered: '2026-03-28' }
  ]
};

<?php
helper('form');

// Get user details for footer
$company_name = $user_details['company_name'] ?? 'Manufacturing Corp';
$business_address = $user_details['business_address'] ?? 'Main Factory';
$company_phone = $user_details['company_phone_no'] ?? '+1-800-MFG';
$email_address = $user_details['email_id'] ?? 'info@manufacturing.com';

echo $custom_insert['foot'] ?? '';
?>

<style>
   
body {
  margin: 0;
  padding: 0;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

/* Typography */
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  font-weight: var(--font-weight-semibold);
  line-height: var(--line-height-tight);
  color: var(--color-text);
  letter-spacing: var(--letter-spacing-tight);
}

h1 {
  font-size: var(--font-size-4xl);
}
h2 {
  font-size: var(--font-size-3xl);
}
h3 {
  font-size: var(--font-size-2xl);
}
h4 {
  font-size: var(--font-size-xl);
}
h5 {
  font-size: var(--font-size-lg);
}
h6 {
  font-size: var(--font-size-md);
}

p {
  margin: 0 0 var(--space-16) 0;
}

a {
  color: var(--color-primary);
  text-decoration: none;
  transition: color var(--duration-fast) var(--ease-standard);
}

a:hover {
  color: var(--color-primary-hover);
}

code,
pre {
  font-family: var(--font-family-mono);
  font-size: calc(var(--font-size-base) * 0.95);
  background-color: var(--color-secondary);
  border-radius: var(--radius-sm);
}

code {
  padding: var(--space-1) var(--space-4);
}

pre {
  padding: var(--space-16);
  margin: var(--space-16) 0;
  overflow: auto;
  border: 1px solid var(--color-border);
}

pre code {
  background: none;
  padding: 0;
}

/* Buttons */
.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--space-8) var(--space-16);
  border-radius: var(--radius-base);
  font-size: var(--font-size-base);
  font-weight: 500;
  line-height: 1.5;
  cursor: pointer;
  transition: all var(--duration-normal) var(--ease-standard);
  border: none;
  text-decoration: none;
  position: relative;
}

.btn:focus-visible {
  outline: none;
  box-shadow: var(--focus-ring);
}

.btn--primary {
  background: var(--color-primary);
  color: var(--color-btn-primary-text);
}

.btn--primary:hover {
  background: var(--color-primary-hover);
}

.btn--primary:active {
  background: var(--color-primary-active);
}

.btn--secondary {
  background: var(--color-secondary);
  color: var(--color-text);
}

.btn--secondary:hover {
  background: var(--color-secondary-hover);
}

.btn--secondary:active {
  background: var(--color-secondary-active);
}

.btn--outline {
  background: transparent;
  border: 1px solid var(--color-border);
  color: var(--color-text);
}

.btn--outline:hover {
  background: var(--color-secondary);
}

.btn--sm {
  padding: var(--space-4) var(--space-12);
  font-size: var(--font-size-sm);
  border-radius: var(--radius-sm);
}

.btn--lg {
  padding: var(--space-10) var(--space-20);
  font-size: var(--font-size-lg);
  border-radius: var(--radius-md);
}

.btn--full-width {
  width: 100%;
}

.btn:disabled {
  opacity: 0.5;
  cursor: not-allowed;
}

/* Form elements */
.form-control {
  display: block;
  width: 100%;
  padding: var(--space-8) var(--space-12);
  font-size: var(--font-size-md);
  line-height: 1.5;
  color: var(--color-text);
  background-color: var(--color-surface);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-base);
  transition: border-color var(--duration-fast) var(--ease-standard),
    box-shadow var(--duration-fast) var(--ease-standard);
}

textarea.form-control {
  font-family: var(--font-family-base);
  font-size: var(--font-size-base);
}

select.form-control {
  padding: var(--space-8) var(--space-12);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-image: var(--select-caret-light);
  background-repeat: no-repeat;
  background-position: right var(--space-12) center;
  background-size: 16px;
  padding-right: var(--space-32);
}

/* Add a dark mode specific caret */
@media (prefers-color-scheme: dark) {
  select.form-control {
    background-image: var(--select-caret-dark);
  }
}

/* Also handle data-color-scheme */
[data-color-scheme="dark"] select.form-control {
  background-image: var(--select-caret-dark);
}

[data-color-scheme="light"] select.form-control {
  background-image: var(--select-caret-light);
}

.form-control:focus {
  border-color: var(--color-primary);
  outline: var(--focus-outline);
}

.form-label {
  display: block;
  margin-bottom: var(--space-8);
  font-weight: var(--font-weight-medium);
  font-size: var(--font-size-sm);
}

.form-group {
  margin-bottom: var(--space-16);
}

/* Card component */
.card {
  background-color: var(--color-surface);
  border-radius: var(--radius-lg);
  border: 1px solid var(--color-card-border);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--duration-normal) var(--ease-standard);
}

.card:hover {
  box-shadow: var(--shadow-md);
}

.card__body {
  padding: var(--space-16);
}

.card__header,
.card__footer {
  padding: var(--space-16);
  border-bottom: 1px solid var(--color-card-border-inner);
}

/* Status indicators - simplified with CSS variables */
.status {
  display: inline-flex;
  align-items: center;
  padding: var(--space-6) var(--space-12);
  border-radius: var(--radius-full);
  font-weight: var(--font-weight-medium);
  font-size: var(--font-size-sm);
}

.status--success {
  background-color: rgba(
    var(--color-success-rgb, 33, 128, 141),
    var(--status-bg-opacity)
  );
  color: var(--color-success);
  border: 1px solid
    rgba(var(--color-success-rgb, 33, 128, 141), var(--status-border-opacity));
}

.status--error {
  background-color: rgba(
    var(--color-error-rgb, 192, 21, 47),
    var(--status-bg-opacity)
  );
  color: var(--color-error);
  border: 1px solid
    rgba(var(--color-error-rgb, 192, 21, 47), var(--status-border-opacity));
}

.status--warning {
  background-color: rgba(
    var(--primary-color, 168, 75, 47),
    var(--status-bg-opacity)
  );
  color: var(--primary-color);
  border: 1px solid
    rgba(var(--primary-color, 168, 75, 47), var(--status-border-opacity));
}

.status--info {
  background-color: rgba(
    var(--color-info-rgb, 98, 108, 113),
    var(--status-bg-opacity)
  );
  color: var(--color-info);
  border: 1px solid
    rgba(var(--color-info-rgb, 98, 108, 113), var(--status-border-opacity));
}

/* Container layout */
.container {
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: var(--space-16);
  padding-left: var(--space-16);
}

@media (min-width: 640px) {
  .container {
    max-width: var(--container-sm);
  }
}
@media (min-width: 768px) {
  .container {
    max-width: var(--container-md);
  }
}
@media (min-width: 1024px) {
  .container {
    max-width: var(--container-lg);
  }
}
@media (min-width: 1280px) {
  .container {
    max-width: var(--container-xl);
  }
}

/* Utility classes */
.flex {
  display: flex;
}
.flex-col {
  flex-direction: column;
}
.items-center {
  align-items: center;
}
.justify-center {
  justify-content: center;
}
.justify-between {
  justify-content: space-between;
}
.gap-4 {
  gap: var(--space-4);
}
.gap-8 {
  gap: var(--space-8);
}
.gap-16 {
  gap: var(--space-16);
}

.m-0 {
  margin: 0;
}
.mt-8 {
  margin-top: var(--space-8);
}
.mb-8 {
  margin-bottom: var(--space-8);
}
.mx-8 {
  margin-left: var(--space-8);
  margin-right: var(--space-8);
}
.my-8 {
  margin-top: var(--space-8);
  margin-bottom: var(--space-8);
}

.p-0 {
  padding: 0;
}
.py-8 {
  padding-top: var(--space-8);
  padding-bottom: var(--space-8);
}
.px-8 {
  padding-left: var(--space-8);
  padding-right: var(--space-8);
}
.py-16 {
  padding-top: var(--space-16);
  padding-bottom: var(--space-16);
}
.px-16 {
  padding-left: var(--space-16);
  padding-right: var(--space-16);
}

.block {
  display: block;
}
.hidden {
  display: none;
}

/* Accessibility */
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

:focus-visible {
  outline: var(--focus-outline);
  outline-offset: 2px;
}

/* Dark mode specifics */
[data-color-scheme="dark"] .btn--outline {
  border: 1px solid var(--color-border-secondary);
}

@font-face {
  font-family: 'FKGroteskNeue';
  src: url('https://r2cdn.perplexity.ai/fonts/FKGroteskNeue.woff2')
    format('woff2');
}

/* END PERPLEXITY DESIGN SYSTEM */
```css
/* ===== PERPLEXITY DESIGN SYSTEM - FOOTER STYLES ===== */
/* Updated to match Perplexity Design System */

/* ===== FOOTER WRAPPER ===== */
.industrial-footer-wrapper {
    background: linear-gradient(180deg, var(--color-charcoal-800) 0%, var(--color-surface) 100%);
    border-top: 2px solid var(--primary-color);
    color: var(--color-text);
    position: relative;
}

.industrial-footer-wrapper::before {
    content: '';
    position: absolute;
    top: -1px;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
}

/* ===== FOOTER CONTENT ===== */
.industrial-footer-content {
    padding: var(--space-32) 0 var(--space-24) 0;
    background: var(--color-charcoal-800);
}

.footer-section-title {
    color: var(--primary-color);
    font-size: var(--font-size-xl);
    font-weight: var(--font-weight-bold);
    font-family: var(--font-family-base);
    margin-bottom: var(--space-20);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    display: flex;
    align-items: center;
    padding-bottom: var(--space-16);
    border-bottom: 2px solid var(--color-border);
}

/* ===== CONTACT CARDS ===== */
.contact-card {
    background: var(--color-surface);
    border-left: 3px solid var(--primary-color);
    padding: var(--space-20);
    margin-bottom: var(--space-20);
    border-radius: var(--radius-base);
    transition: all var(--duration-normal) var(--ease-standard);
    box-shadow: var(--shadow-sm);
}

.contact-card:hover {
    background: var(--color-charcoal-800);
    border-left-color: var(--color-primary);
    transform: translateX(var(--space-4));
    box-shadow: var(--shadow-md);
}

.contact-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: var(--color-slate-900);
    border-radius: var(--radius-base);
    margin-bottom: var(--space-10);
    font-size: var(--font-size-xl);
}

.contact-card h5 {
    color: var(--primary-color);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-md);
    font-family: var(--font-family-base);
    margin-bottom: var(--space-8);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.contact-card p {
    color: var(--color-text-secondary);
    font-size: var(--font-size-sm);
    font-family: var(--font-family-base);
    margin-bottom: var(--space-10);
    line-height: var(--line-height-normal);
}

.facility-hours {
    margin-top: var(--space-12);
    padding-top: var(--space-12);
    border-top: 1px solid var(--color-border);
}

.facility-hours small {
    color: var(--color-success);
    display: block;
    margin-bottom: var(--space-4);
    font-size: var(--font-size-xs);
}

.contact-link {
    display: inline-block;
    color: var(--color-primary);
    text-decoration: none;
    font-size: var(--font-size-sm);
    margin-bottom: var(--space-6);
    transition: all var(--duration-normal) var(--ease-standard);
    font-weight: var(--font-weight-semibold);
}

.contact-link:hover {
    color: var(--primary-color);
    transform: translateX(var(--space-2));
}

/* ===== QUICK LINKS ===== */
.industrial-links-modern {
    list-style: none;
    padding: 0;
    margin-bottom: var(--space-20);
}

.industrial-links-modern li {
    margin-bottom: var(--space-10);
}

.industrial-links-modern a {
    color: var(--color-text);
    text-decoration: none;
    font-size: var(--font-size-md);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    gap: var(--space-8);
    padding: var(--space-8) 0;
}

.industrial-links-modern a i {
    color: var(--primary-color);
    font-size: var(--font-size-sm);
    transition: all var(--duration-normal) var(--ease-standard);
}

.industrial-links-modern a:hover {
    color: var(--primary-color);
    padding-left: var(--space-8);
}

.industrial-links-modern a:hover i {
    transform: translateX(var(--space-2));
}

/* ===== SERVICE BADGES ===== */
.services-quick-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: var(--space-10);
    margin-top: var(--space-20);
}

.service-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-primary);
    padding: var(--space-8) var(--space-12);
    border-radius: var(--radius-base);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    font-family: var(--font-family-base);
    text-align: center;
    transition: all var(--duration-normal) var(--ease-standard);
    cursor: default;
}

.service-badge:hover {
    background: var(--primary-color);
    color: var(--color-slate-900);
    border-color: var(--primary-color);
}

/* ===== CERTIFICATIONS ===== */
.industrial-certifications {
    margin-bottom: var(--space-20);
}

.cert-row {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-10);
}

.cert-badge-industrial {
    display: inline-flex;
    align-items: center;
    gap: var(--space-6);
    background: var(--color-surface);
    border-left: 3px solid var(--color-success);
    color: var(--color-success);
    padding: var(--space-8) var(--space-12);
    border-radius: var(--radius-base);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
}

.cert-badge-industrial:hover {
    background: var(--color-success);
    color: var(--color-cream-50);
}

.cert-badge-industrial i {
    font-size: var(--font-size-base);
}

/* ===== SOCIAL MEDIA ===== */
.industrial-social-showcase {
    margin-bottom: var(--space-20);
}

.social-icons-industrial {
    display: flex;
    gap: var(--space-12);
    flex-wrap: wrap;
}

.social-icon-industrial {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-text);
    border-radius: var(--radius-base);
    text-decoration: none;
    transition: all var(--duration-normal) var(--ease-standard);
    font-size: var(--font-size-base);
    box-shadow: var(--shadow-xs);
}

.social-icon-industrial:hover {
    transform: translateY(-var(--space-2));
    border-color: var(--primary-color);
    background: var(--primary-color);
    color: var(--color-slate-900);
    box-shadow: var(--shadow-sm);
}

.social-icon-industrial.facebook:hover {
    background: #1877f2;
    border-color: #1877f2;
    color: var(--color-white);
}

.social-icon-industrial.twitter:hover {
    background: #1da1f2;
    border-color: #1da1f2;
    color: var(--color-white);
}

.social-icon-industrial.instagram:hover {
    background: #e4405f;
    border-color: #e4405f;
    color: var(--color-white);
}

.social-icon-industrial.youtube:hover {
    background: #ff0000;
    border-color: #ff0000;
    color: var(--color-white);
}

.social-icon-industrial.linkedin:hover {
    background: #0a66c2;
    border-color: #0a66c2;
    color: var(--color-white);
}

/* ===== NEWSLETTER ===== */
.industrial-newsletter {
    background: var(--color-surface);
    border-left: 3px solid var(--color-primary);
    padding: var(--space-20);
    border-radius: var(--radius-base);
    box-shadow: var(--shadow-sm);
}

.newsletter-header h4 {
    color: var(--color-primary);
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-bold);
    font-family: var(--font-family-base);
    margin-bottom: var(--space-8);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.newsletter-description {
    color: var(--color-text-secondary);
    font-size: var(--font-size-sm);
    font-family: var(--font-family-base);
    margin-bottom: var(--space-16);
    line-height: var(--line-height-normal);
}

.newsletter-input-group {
    display: flex;
    gap: var(--space-8);
    margin-bottom: var(--space-12);
}

.newsletter-input-group input {
    flex: 1;
    background: var(--color-charcoal-800);
    border: 1px solid var(--color-border);
    color: var(--color-text);
    padding: var(--space-10) var(--space-12);
    border-radius: var(--radius-base);
    font-size: var(--font-size-sm);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
}

.newsletter-input-group input:focus {
    outline: none;
    border-color: var(--color-primary);
    box-shadow: var(--focus-ring);
}

.newsletter-input-group input::placeholder {
    color: var(--color-text-secondary);
}

.newsletter-submit-btn {
    background: var(--primary-color);
    color: var(--color-btn-primary-text);
    border: none;
    padding: var(--space-10) var(--space-16);
    border-radius: var(--radius-base);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-sm);
    font-family: var(--font-family-base);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    white-space: nowrap;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.newsletter-submit-btn:hover {
    background: var(--primary-color);
    transform: translateY(-var(--space-1));
}

.newsletter-submit-btn:active {
    background: var(--color-primary-active);
}

.privacy-notice {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
    font-family: var(--font-family-base);
    padding-top: var(--space-10);
    border-top: 1px solid var(--color-border);
}

/* ===== COPYRIGHT SECTION ===== */
.industrial-copyright-section {
    background: var(--color-surface);
    border-top: 1px solid var(--color-border);
    padding: var(--space-20) 0;
    color: var(--color-text-secondary);
}

.copyright-text {
    font-size: var(--font-size-sm);
    font-family: var(--font-family-base);
    margin-bottom: 0;
    line-height: var(--line-height-normal);
}

.copyright-text strong {
    color: var(--primary-color);
    font-weight: var(--font-weight-semibold);
}

.legal-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: var(--space-20);
    flex-wrap: wrap;
    justify-content: flex-end;
}

.legal-links li {
    margin: 0;
}

.legal-links a {
    color: var(--color-text-secondary);
    text-decoration: none;
    font-size: var(--font-size-sm);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
}

.legal-links a:hover {
    color: var(--primary-color);
}

/* ===== MANUFACTURING STATS BAR ===== */
.industrial-stats-bar {
    background: var(--color-surface);
    border-top: 1px solid var(--color-border);
    padding: var(--space-32) 0;
}

.stat-item {
    padding: var(--space-20);
}

.stat-value {
    color: var(--primary-color);
    font-size: var(--font-size-4xl);
    font-weight: var(--font-weight-bold);
    font-family: var(--font-family-base);
    display: block;
    margin-bottom: var(--space-8);
    line-height: var(--line-height-tight);
}

.stat-label {
    color: var(--color-text-secondary);
    font-size: var(--font-size-md);
    font-family: var(--font-family-base);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    font-weight: var(--font-weight-semibold);
}

/* ===== SCROLL TO TOP BUTTON ===== */
.scroll-top-industrial {
    position: fixed;
    bottom: var(--space-24);
    right: var(--space-24);
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    color: var(--color-slate-900);
    border-radius: var(--radius-base);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: var(--font-size-xl);
    opacity: 0;
    visibility: hidden;
    transition: all var(--duration-normal) var(--ease-standard);
    z-index: 999;
    border: 2px solid var(--primary-color);
    box-shadow: var(--shadow-sm);
}

.scroll-top-industrial:hover {
    background: transparent;
    color: var(--primary-color);
    transform: translateY(-var(--space-2));
    box-shadow: var(--shadow-lg);
}

.scroll-top-industrial.show {
    opacity: 1;
    visibility: visible;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .services-quick-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .industrial-footer-content {
        padding: var(--space-24) 0 var(--space-16) 0;
    }

    .footer-section-title {
        font-size: var(--font-size-lg);
    }

    .legal-links {
        flex-direction: column;
        gap: var(--space-10);
        justify-content: flex-start;
    }

    .stat-value {
        font-size: var(--font-size-3xl);
    }

    .social-icons-industrial {
        justify-content: center;
    }

    .scroll-top-industrial {
        bottom: var(--space-20);
        right: var(--space-20);
        width: 45px;
        height: 45px;
        font-size: var(--font-size-lg);
    }
}

@media (max-width: 480px) {
    .industrial-footer-content {
        padding: var(--space-20) 0 var(--space-12) 0;
    }

    .footer-section-title {
        font-size: var(--font-size-base);
        margin-bottom: var(--space-16);
        padding-bottom: var(--space-12);
    }

    .contact-card {
        padding: var(--space-16);
        margin-bottom: var(--space-16);
    }

    .services-quick-grid {
        grid-template-columns: 1fr;
        gap: var(--space-8);
    }

    .newsletter-input-group {
        flex-direction: column;
    }

    .newsletter-submit-btn {
        width: 100%;
    }

    .stat-item {
        padding: var(--space-16);
    }

    .stat-value {
        font-size: var(--font-size-2xl);
    }

    .industrial-stats-bar {
        padding: var(--space-24) 0;
    }

    .industrial-copyright-section {
        padding: var(--space-16) 0;
    }

    .social-icons-industrial {
        gap: var(--space-8);
    }

    .social-icon-industrial {
        width: 40px;
        height: 40px;
        font-size: var(--font-size-sm);
    }

    .cert-row {
        gap: var(--space-8);
    }

    .industrial-newsletter {
        padding: var(--space-16);
    }

    .scroll-top-industrial {
        bottom: var(--space-16);
        right: var(--space-16);
        width: 40px;
        height: 40px;
        font-size: var(--font-size-base);
    }
}

@media (max-width: 576px) {
    .industrial-footer-content {
        padding: var(--space-16) 0 var(--space-10) 0;
    }

    .footer-section-title {
        font-size: var(--font-size-md);
    }

    .contact-card {
        padding: var(--space-12);
        margin-bottom: var(--space-12);
    }

    .services-quick-grid {
        grid-template-columns: 1fr;
    }

    .newsletter-input-group {
        flex-direction: column;
    }

    .newsletter-submit-btn {
        width: 100%;
    }

    .stat-item {
        padding: var(--space-12);
    }

    .stat-value {
        font-size: var(--font-size-xl);
    }
}
</style>
<!-- ===== INDUSTRIAL EDGE PRO - MANUFACTURING FOOTER ===== -->

<!-- Ultra Modern Industrial Footer -->
<footer class="industrial-footer-wrapper">
    
    <!-- Footer Main Content -->
    <div class="industrial-footer-content">
        <div class="container-fluid">
            <div class="row g-4 px-4 py-5">
                
                <!-- Section 1: Manufacturing Facility Information -->
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-section-title">
                        <i class="fas fa-industry me-2"></i>Contact Manufacturing
                    </h3>
                    
                    <!-- Main Manufacturing Facility -->
                    <?php if (!empty($user_details['business_address'])): ?>
                    <div class="contact-card industrial">
                        <div class="contact-icon industrial-icon">
                            <i class="fas fa-factory"></i>
                        </div>
                        <h5>Main Facility</h5>
                        <p><?= htmlspecialchars($user_details['business_address']); ?></p>
                        <div class="facility-hours">
                            <small><i class="fas fa-clock me-1"></i>Mon - Fri: 8:00 AM - 5:00 PM</small><br>
                            <small><i class="fas fa-tools me-1"></i>24/7 Emergency Support</small>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Phone & Email Contact -->
                    <div class="contact-card industrial">
                        <div class="contact-icon industrial-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5>Quick Contact</h5>
                        <a href="tel:<?= htmlspecialchars($user_details['company_phone_no'] ?? ''); ?>" class="contact-link">
                            <i class="fas fa-phone me-2"></i><?= htmlspecialchars($user_details['company_phone_no'] ?? '+1-800-MFG'); ?>
                        </a>
                        <a href="mailto:<?= htmlspecialchars($user_details['email_id'] ?? ''); ?>" class="contact-link">
                            <i class="fas fa-envelope me-2"></i><?= htmlspecialchars($user_details['email_id'] ?? 'info@mfg.com'); ?>
                        </a>
                    </div>

                    <!-- Branch Manufacturing Facility -->
                    <?php if (!empty($user_details['alternate_address'])): ?>
                    <div class="contact-card industrial">
                        <div class="contact-icon industrial-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5>Branch Facility</h5>
                        <p><?= htmlspecialchars($user_details['alternate_address']); ?></p>
                        <?php if (!empty($user_details['alternate_mobile'])): ?>
                            <a href="tel:<?= htmlspecialchars($user_details['alternate_mobile']); ?>" class="contact-link">
                                <i class="fas fa-phone me-2"></i><?= htmlspecialchars($user_details['alternate_mobile']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Section 2: Quick Navigation Links -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-section-title">
                        <i class="fas fa-sitemap me-2"></i>Navigation
                    </h3>
                    <ul class="industrial-links-modern">
                        <?php
                        $users_info = new App\Libraries\User_details();
                        $final_menu = $users_info->menuLists_new();

                        foreach ($final_menu as $menu) {
                            $link = ($menu['menu_name'] === "Updates") ? base_url() . "/updates" : base_url() . '/' . $menu['menu_link'];
                            $target = ($menu['menu_name'] === "Updates") ? 'target="_blank" rel="noopener noreferrer"' : '';
                            
                            echo '<li>';
                            echo '<a href="' . $link . '" ' . $target . '>';
                            echo '<i class="fas fa-angle-right"></i>';
                            echo htmlspecialchars($menu['menu_name']);
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>

                    <!-- Services Grid -->
                    
                </div>

                <!-- Section 3: Certifications & Social Media -->
                <div class="col-lg-4 col-md-12">
                    <h3 class="footer-section-title">
                        <i class="fas fa-certificate me-2"></i> Connect
                    </h3>
                    
                    

                    <!-- Social Media Icons -->
                    <div class="industrial-social-showcase">
                        <div class="social-icons-industrial">
                            <a href="<?= !empty($user_details['facebook_page']) ? htmlspecialchars($user_details['facebook_page']) : 'https://www.facebook.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-industrial facebook"
                               title="Follow on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?= !empty($user_details['twitter_page']) ? htmlspecialchars($user_details['twitter_page']) : 'https://twitter.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-industrial twitter"
                               title="Follow on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?= !empty($user_details['instagram_page']) ? htmlspecialchars($user_details['instagram_page']) : 'https://www.instagram.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-industrial instagram"
                               title="Follow on Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?= !empty($user_details['youtube_page']) ? htmlspecialchars($user_details['youtube_page']) : 'https://www.youtube.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-industrial youtube"
                               title="Subscribe on YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="<?= !empty($user_details['linkedin_page']) ? htmlspecialchars($user_details['linkedin_page']) : 'https://www.linkedin.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-industrial linkedin"
                               title="Connect on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Manufacturing Newsletter Subscription -->
                    <?php if (!empty($user_details['business_description'])): ?>
                    <div class="industrial-newsletter">
                        <div class="newsletter-header">
                            <h4><i class="fas fa-bell me-2"></i>Manufacturing Updates</h4>
                            <p class="newsletter-description">Subscribe for production updates, industry news, and technical insights.</p>
                        </div>
                        <form class="newsletter-form-industrial" method="post" action="<?= base_url('newsletter/subscribe'); ?>">
                            <div class="newsletter-input-group">
                                <input type="email" name="email" placeholder="Enter your business email" required 
                                       aria-label="Email for newsletter subscription">
                                <button type="submit" class="newsletter-submit-btn">
                                    <i class="fas fa-arrow-right me-1"></i>Subscribe
                                </button>
                            </div>
                        </form>
                        <div class="privacy-notice">
                            <small><i class="fas fa-lock me-1"></i>We protect your data. No spam, ever.</small>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Industrial Footer Bottom / Copyright -->
    <div class="industrial-copyright-section">
        <div class="container-fluid">
            <div class="row align-items-center px-4">
                <div class="col-md-12">
                    <p class="copyright-text text-center">
                        © <?= date("Y"); ?> <strong><?= htmlspecialchars($user_details['company_name'] ?? 'Manufacturing Corp'); ?></strong>. Manufacturing Excellence.
                    </p>
                </div>
               
            </div>
        </div>
    </div>

   
</footer>

<!-- Scroll to Top Button -->
<div class="scroll-top-industrial" id="scrollTopBtn" title="Back to top">
    <i class="fas fa-arrow-up"></i>
</div>

<script>
// Industrial Theme Footer Scripts
document.addEventListener('DOMContentLoaded', function() {
    // Scroll to Top Button Functionality
    const scrollBtn = document.getElementById('scrollTopBtn');
    
    if(scrollBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 500) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });
        
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Animate footer elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all footer sections
    const footerElements = document.querySelectorAll('.contact-card, .industrial-social-showcase, .industrial-newsletter, .service-badge');
    footerElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });

    // Newsletter form validation
    const newsletterForms = document.querySelectorAll('.newsletter-form-industrial');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const emailInput = this.querySelector('input[type="email"]');
            if (!validateEmail(emailInput.value)) {
                e.preventDefault();
                emailInput.classList.add('is-invalid');
                setTimeout(() => {
                    emailInput.classList.remove('is-invalid');
                }, 3000);
            }
        });
    });

    // Email validation function
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Animate stats counter
    const statsBar = document.querySelector('.industrial-stats-bar');
    if(statsBar) {
        const observerStats = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                    entry.target.classList.add('animated');
                    animateStats();
                }
            });
        }, {threshold: 0.5});
        
        observerStats.observe(statsBar);
    }

    function animateStats() {
        const stats = document.querySelectorAll('.stat-value');
        stats.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-count'));
            const duration = 2000;
            const increment = target / (duration / 50);
            let current = 0;

            const counter = setInterval(() => {
                current += increment;
                if (current >= target) {
                    stat.textContent = stat.getAttribute('data-count') + 
                        (stat.textContent.includes('%') ? '%' : 
                         stat.textContent.includes('+') ? '+' : '');
                    clearInterval(counter);
                } else {
                    stat.textContent = Math.floor(current);
                }
            }, 50);
        });
    }
});
</script>
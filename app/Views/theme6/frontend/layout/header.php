<?php
helper('form');

// Command bar visibility
$command_bar = "d-none";
if($user_details['topbar'] != "Hide"){
    $command_bar = "";
}

// Fallback colors from master layout variables
$industrial_colors = array(
    'background' => $colors['background'] ?? '#1a1a1a',
    'surface' => $colors['surface'] ?? '#0f1419',
    'primary' => $colors['inquiry_button_color'] ?? $colors['primary_color'] ?? '#ff6b35',
    'secondary' => $colors['secondary_accent_color'] ?? $colors['secondary_color'] ?? '#00aaff',
    'accent' => $colors['border_color'] ?? '#c0c0c0',
    'success' => $colors['success_color'] ?? '#00ff88',
    'text_primary' => $colors['text_primary_color'] ?? $colors['text_primary'] ?? '#ffffff',
    'text_secondary' => $colors['text_secondary_color'] ?? $colors['text_secondary'] ?? '#a0a0a0'
);

echo $custom_insert['head'] ?? '';
?>

<style>
    

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
  background: var(--primary-color);
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
    var(--color-warning-rgb, 168, 75, 47),
    var(--status-bg-opacity)
  );
  color: var(--color-warning);
  border: 1px solid
    rgba(var(--color-warning-rgb, 168, 75, 47), var(--status-border-opacity));
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
/* ===== INDUSTRIAL EDGE PRO THEME - UPDATED STYLES ===== */
/* Updated to match design system */

/* ===== COMMAND BAR ===== */
.industrial-command-bar {
    background: linear-gradient(135deg, var(--color-surface) 0%, var(--color-charcoal-800) 100%);
    border-bottom: 2px solid var(--color-border);
    padding: var(--space-12) 0;
    font-size: var(--font-size-sm);
    position: relative;
    font-family: var(--font-family-base);
}

.industrial-command-bar::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--color-primary), transparent);
}

.industrial-branding {
    display: flex;
    align-items: center;
    gap: var(--space-10);
}

.industrial-logo-text {
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-xl);
    color: var(--color-primary);
    letter-spacing: 2px;
    text-transform: uppercase;
}

.industrial-company-name {
    color: var(--color-text);
    font-weight: var(--font-weight-semibold);
    font-size: var(--font-size-base);
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Metrics Ticker */
.industrial-metrics-ticker {
    display: flex;
    gap: var(--space-32);
    justify-content: center;
    padding: 0 var(--space-20);
}

.ticker-metric {
    display: flex;
    align-items: baseline;
    gap: var(--space-6);
    padding: 0 var(--space-16);
    border-right: 1px solid var(--color-border);
}

.ticker-metric:last-child {
    border-right: none;
}

.metric-label {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: var(--font-weight-semibold);
}

.metric-value {
    color: var(--color-success);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-xl);
    font-variant-numeric: tabular-nums;
}

.metric-unit {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
}

/* Actions */
.industrial-actions {
    display: flex;
    gap: var(--space-12);
    align-items: center;
}

.industrial-hotline {
    display: flex;
    align-items: center;
    gap: var(--space-8);
    color: var(--color-info);
    text-decoration: none;
    font-weight: var(--font-weight-semibold);
    transition: all var(--duration-normal) var(--ease-standard);
    padding: var(--space-8) var(--space-12);
    border-radius: var(--radius-sm);
    white-space: nowrap;
}

.industrial-hotline:hover {
    background: rgba(var(--color-info-rgb), 0.1);
    color: var(--primary-color);
    transform: translateX(2px);
}

.industrial-quote-btn {
    background: var(--primary-color);
    color: var(--color-btn-primary-text);
    border: none;
    padding: var(--space-8) var(--space-16);
    border-radius: var(--radius-sm);
    font-weight: var(--font-weight-bold);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    gap: var(--space-6);
    font-size: var(--font-size-sm);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.industrial-quote-btn:hover {
    background: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.industrial-quote-btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

/* ===== NAVBAR ===== */
.industrial-main-navbar {
    background: var(--color-charcoal-800);
    border-bottom: 1px solid var(--color-border);
    padding: var(--space-12) 0;
    transition: all var(--duration-normal) var(--ease-standard);
    position: sticky;
    top: 0;
    z-index: 998;
}

.industrial-main-navbar.scrolled {
    background: rgba(var(--color-charcoal-800), 0.95);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: var(--shadow-lg);
}

.industrial-logo {
    max-height: 50px;
    width: auto;
    filter: brightness(1.1);
    transition: filter var(--duration-normal) var(--ease-standard);
}

.industrial-logo:hover {
    filter: brightness(1.3);
}

.industrial-navbar-toggler {
    border: none;
    color: var(--color-primary);
    font-size: var(--font-size-xl);
    padding: var(--space-8);
}

.industrial-navbar-toggler:focus {
    box-shadow: var(--focus-ring);
    outline: none;
}

/* Navigation Items */
.industrial-navbar-nav {
    gap: var(--space-4);
}

.industrial-nav-item {
    position: relative;
}

.industrial-nav-link {
    color: var(--color-text) !important;
    font-weight: var(--font-weight-semibold);
    font-size: var(--font-size-base);
    padding: var(--space-8) var(--space-16) !important;
    transition: all var(--duration-normal) var(--ease-standard);
    position: relative;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.industrial-nav-link:hover {
    color: var(--primary-color) !important;
}

.industrial-nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: width var(--duration-normal) var(--ease-standard);
}

.industrial-nav-link:hover::after,
.industrial-nav-link.active::after {
    width: 100%;
}

.industrial-nav-link:focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
}

/* Dropdown Menu */
.industrial-dropdown-menu {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-base);
    padding: var(--space-8) 0;
    box-shadow: var(--shadow-lg);
}

.industrial-dropdown-item {
    color: var(--color-text) !important;
    padding: var(--space-12) var(--space-20);
    font-size: var(--font-size-base);
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    gap: var(--space-8);
}

.industrial-dropdown-item:hover {
    background: var(--color-charcoal-800);
    color: var(--color-primary) !important;
    padding-left: var(--space-24);
}

.industrial-dropdown-item:focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
}

/* ===== SEARCH BAR ===== */
.industrial-search-wrapper {
    flex: 0 0 300px;
    margin: 0 var(--space-20);
}

.search-input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.search-icon {
    position: absolute;
    left: var(--space-12);
    color: var(--color-text-secondary);
    pointer-events: none;
    transition: color var(--duration-normal) var(--ease-standard);
}

.industrial-search-input {
    width: 100%;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-text);
    padding: var(--space-8) var(--space-32) var(--space-8) 36px;
    border-radius: var(--radius-base);
    font-size: var(--font-size-base);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
}

.industrial-search-input:focus {
    background: var(--color-charcoal-800);
    border-color: var(--color-primary);
    outline: none;
    box-shadow: var(--focus-ring);
    color: var(--color-text);
}

.industrial-search-input:focus + .search-icon {
    color: var(--color-primary);
}

.industrial-search-input::placeholder {
    color: var(--color-text-secondary);
}

.industrial-search-btn {
    position: absolute;
    right: 0;
    background: none;
    border: none;
    color: var(--color-text-secondary);
    padding: var(--space-8) var(--space-12);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    font-size: var(--font-size-base);
}

.industrial-search-btn:hover {
    color: var(--color-primary);
    transform: translateX(2px);
}

.industrial-search-btn:focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
}

/* Search Suggestions */
.search-suggestions {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-top: none;
    border-radius: 0 0 var(--radius-base) var(--radius-base);
    max-height: 0;
    overflow: hidden;
    transition: max-height var(--duration-normal) var(--ease-standard);
    z-index: 1000;
    box-shadow: var(--shadow-md);
}

.industrial-search-input:focus ~ .search-suggestions,
.search-suggestions:hover {
    max-height: 250px;
    overflow-y: auto;
}

.suggestion-item {
    padding: var(--space-12) var(--space-16);
    color: var(--color-text-secondary);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    gap: var(--space-10);
    font-size: var(--font-size-base);
    border-bottom: 1px solid var(--color-border);
}

.suggestion-item:last-child {
    border-bottom: none;
}

.suggestion-item:hover {
    background: var(--color-charcoal-800);
    color: var(--color-primary);
    padding-left: var(--space-20);
}

.suggestion-item:focus-visible {
    outline: var(--focus-outline);
    outline-offset: -2px;
}

.suggestion-item i {
    color: var(--color-info);
    font-size: var(--font-size-lg);
}

/* ===== PORTAL LOGIN ===== */
.industrial-portal-login {
    margin-left: auto;
    padding-left: var(--space-20);
    border-left: 1px solid var(--color-border);
}

.industrial-login-link {
    color: var(--color-info);
    text-decoration: none;
    font-weight: var(--font-weight-semibold);
    padding: var(--space-8) var(--space-16);
    border: 1px solid var(--color-info);
    border-radius: var(--radius-base);
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    gap: var(--space-6);
    font-size: var(--font-size-sm);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.industrial-login-link:hover {
    background: var(--color-info);
    color: var(--color-btn-primary-text);
    transform: translateY(-2px);
}

.industrial-login-link:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

/* ===== RFQ MODAL ===== */
.industrial-modal-content {
    background: var(--bg-primary);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-lg);
}

.industrial-modal-header {
    background: linear-gradient(135deg, var(--color-surface) 0%, var(--bg-primary) 100%);
    border-bottom: 1px solid var(--color-border);
    padding: var(--space-20);
    border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}

.industrial-modal-title {
    color: var(--color-primary);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-2xl);
    display: flex;
    align-items: center;
    gap: var(--space-10);
}

.industrial-btn-close {
    filter: invert(1) brightness(2);
    opacity: 0.7;
    transition: opacity var(--duration-normal) var(--ease-standard);
}

.industrial-btn-close:hover {
    opacity: 1;
}

.industrial-btn-close:focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
}

.industrial-modal-body {
    padding: var(--space-32);
}

/* Benefits Section */
.industrial-rfq-benefits {
    padding: var(--space-20);
    background: var(--color-surface);
    border-left: 3px solid var(--color-primary);
    border-radius: var(--radius-base);
}

.benefits-title {
    color: var(--color-primary);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    font-size: var(--font-size-lg);
    display: flex;
    align-items: center;
    gap: var(--space-8);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: var(--space-12);
    margin-bottom: var(--space-12);
    color: var(--color-text-secondary);
    font-size: var(--font-size-base);
}

.benefit-item i {
    color: var(--color-success);
    font-size: var(--font-size-sm);
    flex-shrink: 0;
}

.certification-preview {
    margin-top: var(--space-20);
    padding-top: var(--space-20);
    border-top: 1px solid var(--color-border);
}

.cert-label {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
    text-transform: uppercase;
    margin-bottom: var(--space-8);
    letter-spacing: 1px;
    font-weight: var(--font-weight-semibold);
}

.cert-badge {
    display: inline-block;
    background: var(--color-charcoal-800);
    border: 1px solid var(--color-info);
    color: var(--color-info);
    padding: var(--space-6) var(--space-10);
    border-radius: var(--radius-base);
    font-size: var(--font-size-xs);
    margin-right: var(--space-8);
    font-weight: var(--font-weight-semibold);
    margin-bottom: var(--space-4);
}

/* Form Sections */
.form-section {
    margin-bottom: var(--space-24);
    padding-bottom: var(--space-20);
    border-bottom: 1px solid var(--color-border);
}

.form-section:last-of-type {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.section-title {
    color: var(--color-primary);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    font-size: var(--font-size-base);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-left:100px;
}

.industrial-form-group {
    margin-bottom: var(--space-16);
}

.industrial-form-label {
    color: var(--color-text);
    font-weight: var(--font-weight-semibold);
    margin-bottom: var(--space-8);
    font-size: var(--font-size-base);
    display: block;
    text-transform: capitalize;
}

.required {
    color: var(--color-primary);
}

.industrial-form-control {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-text);
    padding: var(--space-10) var(--space-12);
    border-radius: var(--radius-base);
    font-size: var(--font-size-base);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
    width: 100%;
}

.industrial-form-control:focus {
    background: var(--color-charcoal-800);
    border-color: var(--color-primary);
    outline: none;
    box-shadow: var(--focus-ring);
    color: var(--color-text);
}

.industrial-form-control::placeholder {
    color: var(--color-text-secondary);
}

/* CAD Upload */
.cad-upload-area {
    border: 2px dashed var(--color-border);
    border-radius: var(--radius-base);
    padding: var(--space-32);
    text-align: center;
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    background: var(--color-surface);
    position: relative;
}

.cad-upload-area:hover {
    border-color: var(--color-primary);
    background: rgba(var(--color-primary-rgb), 0.05);
    transform: translateY(-2px);
}

.cad-upload-area:focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
}

.cad-upload-area i {
    font-size: var(--font-size-4xl);
    color: var(--color-info);
    display: block;
    margin-bottom: var(--space-10);
    transition: transform var(--duration-normal) var(--ease-standard);
}

.cad-upload-area:hover i {
    transform: scale(1.1);
}

.cad-upload-area p {
    color: var(--color-text);
    margin-bottom: var(--space-4);
    font-weight: var(--font-weight-semibold);
}

.cad-upload-area small {
    color: var(--color-text-secondary);
    font-size: var(--font-size-sm);
    display: block;
}

.file-item {
    padding: var(--space-10) var(--space-12);
    background: var(--color-surface);
    border-radius: var(--radius-base);
    margin-bottom: var(--space-8);
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--color-text);
    border-left: 3px solid var(--color-info);
}

/* Checkboxes */
.industrial-checkbox {
    display: flex;
    align-items: center;
    gap: var(--space-10);
    margin-bottom: var(--space-12);
    cursor: pointer;
}

.industrial-checkbox input[type="checkbox"] {
    width: 18px;
    height: 18px;
    cursor: pointer;
    accent-color: var(--color-primary);
    border-radius: var(--radius-sm);
}

.industrial-checkbox input[type="checkbox"]:focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
}

.industrial-checkbox label {
    color: var(--color-text-secondary);
    cursor: pointer;
    margin: 0;
    font-size: var(--font-size-base);
    user-select: none;
}

/* Modal Footer */
.industrial-modal-footer {
    border-top: 1px solid var(--color-border);
    padding: var(--space-20);
    background: var(--color-surface);
    display: flex;
    gap: var(--space-10);
    justify-content: flex-end;
    border-radius: 0 0 var(--radius-lg) var(--radius-lg);
}

.industrial-btn-secondary,
.industrial-btn-primary {
    padding: var(--space-10) var(--space-20);
    border-radius: var(--radius-base);
    font-weight: var(--font-weight-semibold);
    font-family: var(--font-family-base);
    transition: all var(--duration-normal) var(--ease-standard);
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: var(--font-size-sm);
    display: flex;
    align-items: center;
    gap: var(--space-6);
}

.industrial-btn-secondary {
    background: transparent;
    color: var(--color-text-secondary);
    border: 1px solid var(--color-border);
}

.industrial-btn-secondary:hover {
    background: var(--color-charcoal-800);
    border-color: var(--color-text-secondary);
    color: var(--color-text);
    transform: translateY(-2px);
}

.industrial-btn-secondary:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

.industrial-btn-primary {
    background: var(--primary-color);
    color: var(--color-btn-primary-text);
}

.industrial-btn-primary:hover {
    background: var(--color-primary-hover);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.industrial-btn-primary:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .industrial-metrics-ticker {
        gap: var(--space-20);
    }
    
    .ticker-metric {
        padding: 0 var(--space-10);
    }
}

@media (max-width: 991px) {
    .industrial-metrics-ticker {
        display: none;
    }
    
    .industrial-search-wrapper {
        flex: 1 !important;
        margin: var(--space-16) 0 !important;
        margin-left: 0 !important;
    }
    
    .industrial-navbar-nav {
        margin: var(--space-16) 0;
    }
    
    .industrial-portal-login {
        margin-left: 0;
        padding-left: 0;
        border-left: none;
        margin-top: var(--space-16);
    }
}

@media (max-width: 768px) {
    .industrial-quote-btn span,
    .industrial-hotline span {
        display: none;
    }
    
    .industrial-logo {
        max-height: 40px;
    }
    
    .industrial-nav-link {
        padding: var(--space-10) var(--space-12) !important;
        font-size: var(--font-size-base);
    }
    
    .industrial-modal-body {
        padding: var(--space-16);
    }
    
    .industrial-rfq-benefits {
        margin-bottom: var(--space-20);
    }
}

@media (max-width: 576px) {
    .industrial-command-bar {
        padding: var(--space-6) 0;
        font-size: var(--font-size-xs);
    }
    
    .industrial-company-name {
        display: none;
    }
    
    .industrial-modal-body {
        padding: var(--space-16);
    }
    
    .industrial-rfq-benefits {
        margin-bottom: var(--space-20);
    }
}

/* Mobile portrait breakpoint at 480px */
@media (max-width: 480px) {
    .industrial-command-bar {
        padding: var(--space-4) 0;
        font-size: var(--font-size-xs);
    }
    
    .industrial-logo-text {
        font-size: var(--font-size-lg);
    }
    
    .industrial-actions {
        gap: var(--space-8);
    }
    
    .industrial-quote-btn,
    .industrial-login-link {
        padding: var(--space-6) var(--space-12);
        font-size: var(--font-size-xs);
    }
    
    .industrial-main-navbar {
        padding: var(--space-8) 0;
    }
    
    .industrial-nav-link {
        padding: var(--space-8) var(--space-10) !important;
        font-size: var(--font-size-sm);
    }
    
    .industrial-search-wrapper {
        margin: var(--space-12) 0 !important;
    }
    
    .industrial-search-input {
        padding: var(--space-6) var(--space-24) var(--space-6) 30px;
        font-size: var(--font-size-sm);
    }
    
    .industrial-modal-content {
        border-radius: var(--radius-base);
        margin: var(--space-8);
    }
    
    .industrial-modal-header,
    .industrial-modal-footer {
        padding: var(--space-16);
    }
    
    .industrial-modal-body {
        padding: var(--space-12);
    }
    
    .industrial-modal-title {
        font-size: var(--font-size-xl);
    }
    
    .industrial-rfq-benefits {
        padding: var(--space-16);
        margin-bottom: var(--space-16);
    }
    
    .cad-upload-area {
        padding: var(--space-24);
    }
    
    .cad-upload-area i {
        font-size: var(--font-size-3xl);
    }
    
    .industrial-btn-secondary,
    .industrial-btn-primary {
        padding: var(--space-8) var(--space-16);
        font-size: var(--font-size-xs);
        flex: 1;
        justify-content: center;
    }
    
    .industrial-modal-footer {
        flex-direction: column;
        gap: var(--space-8);
    }
}

</style>

<!-- ===== INDUSTRIAL EDGE PRO - MANUFACTURING THEME ===== -->

<!-- Industrial Command Bar with Live Metrics -->
<div class="industrial-command-bar <?= $command_bar; ?>">
    <div class="industrial-command-bar-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left: Company Branding -->
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="industrial-branding">
                        <span class="industrial-company-name"><?= htmlspecialchars($user_details['company_name'] ?? 'Industrial Corp'); ?></span>
                    </div>
                </div>
                
                <!-- Center: Live Metrics Ticker -->
                <div class="col-lg-5 col-md-4 col-0 d-none d-md-block">
                    <div class="industrial-metrics-ticker">
                        <!-- Production Capacity -->
                        <div class="ticker-metric">
                            <span class="metric-label">Capacity</span>
                            <span class="metric-value" id="production-metric">87</span>
                            <span class="metric-unit">%</span>
                        </div>
                        
                        <!-- Quality Score -->
                        <div class="ticker-metric">
                            <span class="metric-label">Quality</span>
                            <span class="metric-value" id="quality-metric">96</span>
                            <span class="metric-unit">%</span>
                        </div>
                        
                        
                    </div>
                </div>
                
                <!-- Right: Actions & Hotline -->
                <div class="col-lg-3 col-md-5 col-6 text-end">
                    <div class="industrial-actions">
                        <!-- Hotline -->
                        <a href="tel:<?= $user_details['company_phone_no'] ?? ''; ?>" class="industrial-hotline">
                            <i class="fas fa-phone"></i>
                            <span class="d-none d-sm-inline"><?= htmlspecialchars($user_details['company_phone_no'] ?? '+1-800-MFG'); ?></span>
                        </a>
                        
                        <!-- Quote Button -->
                        <button class="industrial-quote-btn" data-bs-target="#rfqModal" data-bs-toggle="modal" type="button">
                            <i class="fas fa-file-contract"></i><span class="d-none d-sm-inline">Get Quote</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="baseUrl" value="<?= base_url(); ?>" />
<input type="hidden" id="checkError" value="0" />

<!-- Industrial Main Navigation -->
<nav class="navbar navbar-expand-lg industrial-main-navbar sticky-top">
    <div class="container-fluid industrial-header-padding">
        <!-- Logo -->
        <a class="navbar-brand industrial-navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= !empty($user_details['business_logo']) ? base_url().'/public/uploads/img/business_logo/'.htmlspecialchars($user_details['business_logo']) : base_url().'/public/assets/img/factory-logo.webp'; ?>" 
                 alt="<?= htmlspecialchars($user_details['company_name'] ?? 'Manufacturing'); ?>" 
                 title="<?= htmlspecialchars($user_details['company_name'] ?? 'Manufacturing'); ?>"
                 class="industrial-logo">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler industrial-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Main Menu -->
            <ul class="navbar-nav mx-auto industrial-navbar-nav">
                <?php
                foreach ($menu_lists as $menu_list) {
                    if($menu_list['is_active_os'] != 0) {
                        if($menu_list['menu_name'] != "Updates") {
                            $has_dropdown = count($menu_list['sub_menu'] ?? []) > 0;
                            $dropdown_class = $has_dropdown ? "dropdown" : "";
                            $toggle_class = $has_dropdown ? "dropdown-toggle" : "";
                            $href = $has_dropdown ? "#" : base_url() . '/' . ($menu_list['menu_link'] ?? '');
                            $target = "";
                        } else {
                            $has_dropdown = false;
                            $dropdown_class = "";
                            $toggle_class = "";
                            $href = base_url() . "/updates";
                            $target = "_blank";
                        }
                ?>
                    <li class="nav-item industrial-nav-item <?= $dropdown_class; ?>">
                        <a class="nav-link industrial-nav-link <?= $toggle_class; ?>" 
                           href="<?= $href; ?>" 
                           <?= !empty($target) ? 'target="'.$target.'" rel="noopener noreferrer"' : ''; ?>
                           <?php if ($has_dropdown): ?>
                               id="navbarDropdown<?= $menu_list['id']; ?>"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                           <?php endif; ?>>
                            <?= ucfirst(htmlspecialchars($menu_list['menu_name'])); ?>
                            <?php if ($has_dropdown): ?>
                                <i class="fas fa-chevron-down ms-2"></i>
                            <?php endif; ?>
                        </a>
                        
                        <?php if ($has_dropdown): ?>
                            <ul class="dropdown-menu industrial-dropdown-menu" aria-labelledby="navbarDropdown<?= $menu_list['id']; ?>">
                                <?php foreach ($menu_list['sub_menu'] ?? [] as $sub_menu): 
                                    $menu_id_sub_menu_id = $menu_list['id']."/".$sub_menu['sub_menu'];
                                ?>
                                    <li>
                                        <a class="dropdown-item industrial-dropdown-item" 
                                           href="<?= base_url().'/'.$sub_menu['menu_link'].'/'.base64_encode($menu_id_sub_menu_id); ?>">
                                            <i class="fas fa-angle-right"></i>
                                            <?= htmlspecialchars($sub_menu['menu_name']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php
                    }
                }
                ?>
            </ul>

            <!-- Search Bar with AI Features -->
            <div class="industrial-search-wrapper">
                <form class="industrial-search-form" method="post" action="<?= base_url('search'); ?>">
                    <div class="search-input-group">
                        <i class="fas fa-search search-icon"></i>
                        <input name="search" 
                               value="<?= set_value('search'); ?>" 
                               id="search" 
                               type="search" 
                               placeholder="Search parts, specs, CAD..." 
                               aria-label="Search"
                               class="industrial-search-input"
                               required>
                        <button class="industrial-search-btn" type="submit" aria-label="Search">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    
                    
                </form>
            </div>

           
        </div>
    </div>
</nav>



<!-- ===== INDUSTRIAL HEADER SCRIPTS ===== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect
    const navbar = document.querySelector('.industrial-main-navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.industrial-navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                navbarCollapse.classList.remove('show');
            }
        });
    });
    
    // Search suggestions
    const suggestionItems = document.querySelectorAll('.suggestion-item');
    const searchInput = document.getElementById('search');
    
    suggestionItems.forEach(item => {
        item.addEventListener('click', function() {
            searchInput.value = this.dataset.search;
            document.querySelector('.industrial-search-form').submit();
        });
    });
    
    // RFQ Form - CAD Upload
    const cadUploadArea = document.getElementById('cadUploadArea');
    const cadFileInput = document.getElementById('cadFile');
    
    if(cadUploadArea && cadFileInput) {
        cadUploadArea.addEventListener('click', () => cadFileInput.click());
        
        cadUploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            cadUploadArea.classList.add('dragover');
        });
        
        cadUploadArea.addEventListener('dragleave', () => {
            cadUploadArea.classList.remove('dragover');
        });
        
        cadUploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            cadUploadArea.classList.remove('dragover');
            const files = e.dataTransfer.files;
            cadFileInput.files = files;
            updateFileList(files);
        });
        
        cadFileInput.addEventListener('change', function() {
            updateFileList(this.files);
        });
    }
    
    function updateFileList(files) {
        const fileList = document.getElementById('fileList');
        if(fileList) {
            fileList.innerHTML = '';
            
            Array.from(files).forEach(file => {
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item';
                fileItem.innerHTML = `
                    <span><i class="fas fa-file"></i> ${file.name}</span>
                    <small>${(file.size / 1024 / 1024).toFixed(2)} MB</small>
                `;
                fileList.appendChild(fileItem);
            });
        }
    }
    
    // RFQ Form Submission
    const submitRFQBtn = document.getElementById('submitRFQ');
    if(submitRFQBtn) {
        submitRFQBtn.addEventListener('click', function() {
            const form = document.getElementById('rfqForm');
            if(form.checkValidity()) {
                alert('RFQ submitted successfully! Our team will contact you within 24 hours.');
                const modal = bootstrap.Modal.getInstance(document.getElementById('rfqModal'));
                if(modal) {
                    modal.hide();
                }
                form.reset();
            } else {
                form.reportValidity();
            }
        });
    }
    
    // Live Metrics Animation
    function animateMetrics() {
        const productionMetric = document.getElementById('production-metric');
        const qualityMetric = document.getElementById('quality-metric');
        
        if(productionMetric) {
            setInterval(() => {
                const randomVariance = Math.floor(Math.random() * 5) - 2;
                let production = parseInt(productionMetric.textContent) + randomVariance;
                production = Math.min(Math.max(production, 75), 98);
                productionMetric.textContent = production;
            }, 5000);
        }
        
        if(qualityMetric) {
            setInterval(() => {
                const randomVariance = Math.floor(Math.random() * 3) - 1;
                let quality = parseInt(qualityMetric.textContent) + randomVariance;
                quality = Math.min(Math.max(quality, 92), 99);
                qualityMetric.textContent = quality;
            }, 7000);
        }
        
        
    }
    
    animateMetrics();
});
</script>

<!-- ===== END INDUSTRIAL EDGE PRO HEADER ===== -->
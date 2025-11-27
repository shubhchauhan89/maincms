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
/* ===== INDUSTRIAL EDGE PRO - BANNER STYLES ===== */
/* Complete banner styling for manufacturing theme */

/* ===== VIDEO BANNER SECTION ===== */
.industrial-video-banner-container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.industrial-video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.industrial-video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(var(--color-charcoal-700), 0.6) 0%, rgba(var(--color-slate-900), 0.4) 100%);
    z-index: 2;
}

/* ===== BANNER CONTENT ===== */
.industrial-banner-content-wrapper {
    position: relative;
    z-index: 3;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.industrial-banner-content-box {
    text-align: center;
    animation: slideInUp var(--duration-normal) var(--ease-standard);
}

.industrial-banner-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(var(--primary-color), 0.15);
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
    padding: var(--space-10) var(--space-16);
    border-radius: var(--radius-full);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-20);
    backdrop-filter: blur(10px);
}

.industrial-banner-badge i {
    font-size: var(--font-size-md);
}

/* Banner Title */
.industrial-banner-title {
    color: var(--color-text);
    font-size: var(--font-size-4xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-20);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    line-height: var(--line-height-tight);
    text-shadow: 0 4px 20px rgba(var(--color-black), 0.5);
    font-family: var(--font-family-base);
}

/* Banner Description */
.industrial-banner-description {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xl);
    max-width: 600px;
    margin: 0 auto var(--space-32);
    line-height: var(--line-height-normal);
    font-family: var(--font-family-base);
}

/* ===== BANNER BUTTONS ===== */
.industrial-banner-buttons {
    display: flex;
    gap: var(--space-16);
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: var(--space-32);
}

.industrial-btn {
    padding: var(--space-12) var(--space-24);
    border-radius: var(--radius-base);
    font-weight: var(--font-weight-bold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    transition: all var(--duration-normal) var(--ease-standard);
    border: 2px solid transparent;
    cursor: pointer;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: var(--space-8);
    font-size: var(--font-size-base);
    font-family: var(--font-family-base);
}

.industrial-btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

.industrial-btn-primary {
    background: var(--primary-color);
    color: var(--color-slate-900);
    border-color: var(--color-primary);
}

.industrial-btn-primary:hover {
    background: var(--primary-color);
    border-color: var(--primary-color);
    transform: translateY(-3px);
    box-shadow: 0 12px 24px rgba(var(--color-primary), 0.4);
}

.industrial-btn-secondary {
    background: transparent;
    color: var(--color-primary);
    border-color: var(--color-primary);
}

.industrial-btn-secondary:hover {
    background: var(--color-primary);
    color: var(--color-btn-primary-text);
    transform: translateY(-3px);
    box-shadow: 0 12px 24px rgba(var(--color-primary), 0.4);
}

/* ===== CAPABILITY PILLS ===== */
.industrial-banner-features {
    display: flex;
    gap: var(--space-12);
    justify-content: center;
    flex-wrap: wrap;
}

.industrial-capability-pill {
    display: inline-flex;
    align-items: center;
    gap: var(--space-6);
    background: rgba(var(--color-teal-500-rgb), 0.15);
    border: 1px solid var(--color-primary);
    color: var(--color-primary);
    padding: var(--space-8) var(--space-12);
    border-radius: var(--radius-full);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    backdrop-filter: blur(10px);
    transition: all var(--duration-normal) var(--ease-standard);
    font-family: var(--font-family-base);
}

.industrial-capability-pill:hover {
    background: var(--color-primary);
    color: var(--color-btn-primary-text);
}

.industrial-capability-pill i {
    color: var(--color-success);
    font-size: var(--font-size-sm);
}

/* ===== BANNER STATS ===== */
.industrial-banner-stats {
    position: absolute;
    bottom: 80px;
    left: 0;
    right: 0;
    z-index: 4;
    background: rgba(var(--color-slate-900-rgb), 0.9);
    backdrop-filter: blur(10px);
    border-top: 1px solid var(--color-border);
    border-bottom: 1px solid var(--color-border);
    padding: var(--space-20) 0;
}

.industrial-banner-stats .stat-item {
    text-align: center;
    padding: var(--space-16);
}

.industrial-banner-stats .stat-number {
    color: var(--color-warning);
    font-size: var(--font-size-3xl);
    font-weight: var(--font-weight-bold);
    display: block;
    font-family: var(--font-family-base);
}

.industrial-banner-stats .stat-label {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    font-weight: var(--font-weight-semibold);
    margin-top: var(--space-4);
    font-family: var(--font-family-base);
}

/* ===== VIDEO CAPTION ===== */
.industrial-video-caption {
    position: absolute;
    bottom: var(--space-20);
    left: var(--space-20);
    right: var(--space-20);
    z-index: 4;
    color: var(--color-text-secondary);
    font-size: var(--font-size-sm);
    background: rgba(var(--color-slate-900-rgb), 0.8);
    padding: var(--space-10) var(--space-16);
    border-radius: var(--radius-base);
    display: flex;
    align-items: center;
    gap: var(--space-8);
    font-family: var(--font-family-base);
}

/* ===== SCROLL INDICATOR ===== */
.industrial-scroll-indicator {
    position: absolute;
    bottom: var(--space-32);
    left: 50%;
    transform: translateX(-50%);
    z-index: 4;
    text-align: center;
    color: var(--color-warning);
    cursor: pointer;
    animation: bounce 2s infinite;
}

.industrial-scroll-indicator span {
    display: block;
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-8);
    font-family: var(--font-family-base);
}

.industrial-scroll-indicator i {
    display: block;
    font-size: var(--font-size-xl);
}

/* ===== IMAGE CAROUSEL SECTION ===== */
.industrial-banner-carousel-wrapper {
    width: 100%;
    position: relative;
}

.industrial-banner-slider-container {
    position: relative;
}

.industrial-banner-slide {
    position: relative;
}

.industrial-banner-height {
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
}

.industrial-blur-overlay {
    backdrop-filter: blur(3px);
    -webkit-backdrop-filter: blur(3px);
}

.industrial-banner-gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(var(--color-charcoal-700), 0.5) 0%, rgba(var(--color-slate-900), 0.3) 100%);
    z-index: 1;
}

/* ===== BANNER CONTENT POSITIONING ===== */
.industrial-banner-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
}

.industrial-banner-content.left {
    text-align: left;
    margin-right: auto;
}

.industrial-banner-content.center {
    text-align: center;
    margin: 0 auto;
}

.industrial-banner-content.right {
    text-align: right;
    margin-left: auto;
}

/* Category Badge */
.industrial-banner-category {
    display: inline-flex;
    align-items: center;
    background: rgba(var(--primary-color), 0.15);
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
    padding: var(--space-8) var(--space-16);
    border-radius: var(--radius-full);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-16);
    backdrop-filter: blur(10px);
    font-family: var(--font-family-base);
}

/* Slide Title */
.industrial-banner-slide-title {
    font-size: var(--font-size-4xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    line-height: var(--line-height-tight);
    text-shadow: 0 4px 20px rgba(var(--color-black), 0.5);
    color: var(--color-text);
    font-family: var(--font-family-base);
}

/* Slide Description */
.industrial-banner-slide-description {
    font-size: var(--font-size-lg);
    margin-bottom: var(--space-24);
    line-height: var(--line-height-normal);
    color: var(--color-text-secondary);
    font-family: var(--font-family-base);
}

/* Detail Box */
.industrial-detail-box {
    background: rgba(var(--color-slate-900-rgb), 0.8);
    backdrop-filter: blur(10px);
    padding: var(--space-20);
    border-left: 3px solid var(--primary-color);
    border-radius: var(--radius-base);
    margin-bottom: var(--space-24);
}

/* ===== SLIDE BUTTONS ===== */
.industrial-banner-slide-buttons {
    display: flex;
    gap: var(--space-12);
    flex-wrap: wrap;
}

.industrial-banner-content.left .industrial-banner-slide-buttons {
    justify-content: flex-start;
}

.industrial-banner-content.center .industrial-banner-slide-buttons {
    justify-content: center;
}

.industrial-banner-content.right .industrial-banner-slide-buttons {
    justify-content: flex-end;
}

/* ===== SLICK CAROUSEL ARROWS ===== */
.industrial-banner-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(var(--primary-color), 0.2);
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    width: 50px;
    height: 50px;
    border-radius: var(--radius-base);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
}

.industrial-banner-arrow:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

.slick-prev {
    left: var(--space-20);
}

.slick-next {
    right: var(--space-20);
}

.industrial-banner-arrow:hover {
    background: var(--primary-color);
    color: var(--color-slate-900);
}

/* ===== SLICK DOTS ===== */
.slick-dots {
    bottom: var(--space-20);
    position: absolute;
    z-index: 10;
}

.slick-dots li {
    margin: 0 var(--space-8);
}

.slick-dots li button {
    width: var(--space-12);
    height: var(--space-12);
    border-radius: 50%;
    background: rgba(var(--color-white), 0.3);
    border: none;
    transition: all var(--duration-normal) var(--ease-standard);
}

.slick-dots li.slick-active button {
    background: var(--primary-color);
    width: 15px;
    border-radius: var(--radius-sm);
}

/* ===== ANIMATIONS ===== */
@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0) translateX(-50%);
    }
    50% {
        transform: translateY(-10px) translateX(-50%);
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fadeInDown {
    opacity: 0;
    animation: fadeInDown 0.8s var(--ease-standard) forwards;
}

.animate-fadeInUp {
    opacity: 0;
    animation: fadeInUp 0.8s var(--ease-standard) forwards;
}

.animate-fadeInDown.animated,
.animate-fadeInUp.animated {
    opacity: 1;
    transform: translateY(0);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .industrial-banner-title {
        font-size: var(--font-size-3xl);
    }

    .industrial-banner-slide-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-banner-description {
        font-size: var(--font-size-lg);
    }

    .industrial-banner-slide-description {
        font-size: var(--font-size-base);
    }
}

@media (max-width: 768px) {
    .industrial-video-banner-container {
        height: 70vh;
    }

    .industrial-banner-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-banner-description {
        font-size: var(--font-size-base);
    }

    .industrial-banner-buttons {
        gap: var(--space-10);
    }

    .industrial-btn {
        padding: var(--space-10) var(--space-16);
        font-size: var(--font-size-sm);
    }

    .industrial-banner-height {
        height: 60vh;
    }

    .industrial-banner-slide-title {
        font-size: var(--font-size-xl);
    }

    .industrial-banner-slide-description {
        font-size: var(--font-size-sm);
    }

    .industrial-banner-arrow {
        width: 40px;
        height: 40px;
        font-size: var(--font-size-sm);
    }

    .slick-prev {
        left: var(--space-10);
    }

    .slick-next {
        right: var(--space-10);
    }

    .industrial-banner-stats {
        bottom: 60px;
    }

    .industrial-banner-stats .stat-number {
        font-size: var(--font-size-xl);
    }

    .industrial-banner-stats .stat-label {
        font-size: var(--font-size-xs);
    }
}

@media (max-width: 576px) {
    .industrial-video-banner-container {
        height: 50vh;
    }

    .industrial-banner-title {
        font-size: var(--font-size-xl);
    }

    .industrial-banner-description {
        font-size: var(--font-size-sm);
    }

    .industrial-banner-buttons {
        flex-direction: column;
    }

    .industrial-btn {
        width: 100%;
        justify-content: center;
    }

    .industrial-banner-height {
        height: 50vh;
    }

    .industrial-banner-slide-title {
        font-size: var(--font-size-xl);
    }

    .industrial-banner-slide-description {
        font-size: var(--font-size-sm);
    }

    .industrial-banner-content.left .industrial-banner-slide-buttons,
    .industrial-banner-content.center .industrial-banner-slide-buttons,
    .industrial-banner-content.right .industrial-banner-slide-buttons {
        justify-content: stretch;
    }

    .industrial-banner-arrow {
        display: none;
    }

    .slick-dots {
        bottom: var(--space-10);
    }

    .slick-dots li {
        margin: 0 var(--space-4);
    }

    .slick-dots li button {
        width: var(--space-8);
        height: var(--space-8);
    }

    .slick-dots li.slick-active button {
        width: var(--space-20);
    }
}

/* ===== MOBILE PORTRAIT RESPONSIVE (480px) ===== */
@media (max-width: 480px) {
    .industrial-video-banner-container {
        height: 60vh;
    }

    .industrial-banner-title {
        font-size: var(--font-size-lg);
        margin-bottom: var(--space-16);
    }

    .industrial-banner-description {
        font-size: var(--font-size-sm);
        margin: 0 auto var(--space-24);
        padding: 0 var(--space-16);
    }

    .industrial-banner-badge {
        padding: var(--space-6) var(--space-12);
        font-size: var(--font-size-xs);
        margin-bottom: var(--space-16);
    }

    .industrial-btn {
        padding: var(--space-8) var(--space-16);
        font-size: var(--font-size-sm);
        gap: var(--space-6);
    }

    .industrial-banner-buttons {
        gap: var(--space-8);
        padding: 0 var(--space-16);
    }

    .industrial-capability-pill {
        padding: var(--space-6) var(--space-10);
        font-size: var(--font-size-xs);
    }

    .industrial-banner-height {
        height: 50vh;
    }

    .industrial-banner-slide-title {
        font-size: var(--font-size-lg);
        margin-bottom: var(--space-12);
    }

    .industrial-banner-slide-description {
        font-size: var(--font-size-sm);
        margin-bottom: var(--space-20);
    }

    .industrial-banner-category {
        padding: var(--space-6) var(--space-12);
        font-size: var(--font-size-xs);
        margin-bottom: var(--space-12);
    }

    .industrial-detail-box {
        padding: var(--space-16);
        margin-bottom: var(--space-20);
    }

    .industrial-banner-slide-buttons {
        gap: var(--space-8);
    }

    .industrial-banner-content {
        padding: 0 var(--space-16);
        max-width: 100%;
    }

    .industrial-banner-stats {
        bottom: var(--space-32);
        padding: var(--space-16) 0;
    }

    .industrial-banner-stats .stat-item {
        padding: var(--space-8);
    }

    .industrial-banner-stats .stat-number {
        font-size: var(--font-size-lg);
    }

    .industrial-banner-stats .stat-label {
        font-size: var(--font-size-xs);
        margin-top: var(--space-2);
    }

    .industrial-video-caption {
        bottom: var(--space-16);
        left: var(--space-16);
        right: var(--space-16);
        padding: var(--space-8) var(--space-12);
        font-size: var(--font-size-xs);
    }

    .industrial-scroll-indicator {
        bottom: var(--space-24);
    }

    .industrial-scroll-indicator span {
        font-size: var(--font-size-xs);
        margin-bottom: var(--space-6);
    }

    .industrial-scroll-indicator i {
        font-size: var(--font-size-lg);
    }
}
</style>

<?php
// Industrial Banner Section Component

if (!empty($sliders)) {
    foreach ($sliders as $slider) {
        if ($slider['section_id'] == $myurl['section_id']) {
            
            // Check if this section has a video
            $has_video = false;
            $video_slider = null;
            
            foreach ($slider as $key => $sldr) {
                if ($key !== 'section_id' && isset($sldr['media_type']) && $sldr['media_type'] === 'video' && !empty($sldr['video'])) {
                    $has_video = true;
                    $video_slider = $sldr;
                    break;
                }
            }
            
            // VIDEO BANNER - Full Screen with Industrial Overlay
            if ($has_video && $video_slider) {
                ?>
                <!-- ===== INDUSTRIAL EDGE PRO - VIDEO BANNER ===== -->
                <section class="industrial-video-banner-container">
                    <!-- Manufacturing Background Video -->
                    <video class="industrial-video-background" autoplay muted loop playsinline>
                        <source src="<?= base_url(); ?>/public/uploads/client_videos/<?= htmlspecialchars($video_slider['video']); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    
                    <!-- Industrial Gradient Overlay -->
                    <div class="industrial-video-overlay"></div>
                    
                    <!-- Industrial Banner Content -->
                    <div class="industrial-banner-content-wrapper">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center justify-content-center">
                                <div class="col-lg-10 col-md-12 industrial-banner-content-box">
                                    <!-- Industrial Accent Badge -->
                                    <div class="industrial-banner-badge animate-fadeInDown">
                                        <i class="fas fa-cogs me-2"></i>
                                        <span><?= !empty($video_slider['badge_text']) ? htmlspecialchars($video_slider['badge_text']) : 'Advanced Manufacturing'; ?></span>
                                    </div>

                                    <!-- Main Banner Title -->
                                    <?php if (!empty($video_slider['title'])): ?>
                                        <h1 class="industrial-banner-title animate-fadeInUp" 
                                            style="font-family: <?= $video_slider['title_style'] ?? 'inherit'; ?>;">
                                            <?= htmlspecialchars($video_slider['title']); ?>
                                        </h1>
                                    <?php endif; ?>
                                    
                                    <!-- Banner Description -->
                                    <?php if (!empty($video_slider['desc'])): ?>
                                        <p class="industrial-banner-description animate-fadeInUp" 
                                           style="font-family: <?= $video_slider['desc_style'] ?? 'inherit'; ?>;
                                                  animation-delay: 0.2s;">
                                            <?= htmlspecialchars($video_slider['desc']); ?>
                                        </p>
                                    <?php endif; ?>

                                    <!-- CTA Buttons -->
                                    <div class="industrial-banner-buttons animate-fadeInUp" style="animation-delay: 0.4s;">
                                        <button class="industrial-btn industrial-btn-primary" data-bs-target="#rfqModal" data-bs-toggle="modal">
                                            <i class="fas fa-file-contract me-2"></i>Request Quote
                                        </button>
                                        <a href="<?= base_url('services'); ?>" class="industrial-btn industrial-btn-secondary">
                                            <i class="fas fa-tools me-2"></i>Our Services
                                        </a>
                                    </div>

                                    <!-- Manufacturing Capabilities Pills -->
                                    <?php if (!empty($video_slider['features'])): ?>
                                    <div class="industrial-banner-features animate-fadeInUp" style="animation-delay: 0.6s;">
                                        <?php 
                                        $features = explode(',', $video_slider['features']);
                                        foreach ($features as $feature):
                                            $feature = trim($feature);
                                        ?>
                                        <span class="industrial-capability-pill">
                                            <i class="fas fa-check-circle"></i> <?= htmlspecialchars($feature); ?>
                                        </span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Manufacturing Stats Bar (Optional) -->
                    <?php if (!empty($video_slider['show_stats']) && $video_slider['show_stats'] == 'yes'): ?>
                    <div class="industrial-banner-stats">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 stat-item">
                                    <div class="stat-number">10000+</div>
                                    <div class="stat-label">Parts Delivered</div>
                                </div>
                                <div class="col-md-3 col-sm-6 stat-item">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Clients</div>
                                </div>
                                <div class="col-md-3 col-sm-6 stat-item">
                                    <div class="stat-number">25+</div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                                <div class="col-md-3 col-sm-6 stat-item">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">On-Time Delivery</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Video Caption -->
                    <?php if (!empty($video_slider['video_caption'])): ?>
                        <div class="industrial-video-caption">
                            <i class="fas fa-info-circle me-2"></i><?= htmlspecialchars($video_slider['video_caption']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Scroll Indicator -->
                    <div class="industrial-scroll-indicator">
                        <span>Scroll to explore</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </section>

                <?php
            } else {
                // IMAGE SLIDER - Industrial Professional Carousel
                ?>
                <!-- ===== INDUSTRIAL EDGE PRO - IMAGE BANNER ===== -->
                <section class="industrial-banner-carousel-wrapper">
                    <div class="industrial-banner-slider-container one-time">
                
                    <?php
                    if (isset($slider['section_id'])) {
                        unset($slider['section_id']);
                    }
                    
                    foreach ($slider as $key => $sldr) {
                    ?>
                        <div class="industrial-banner-slide">
                            <!-- Banner Background Image -->
                            <div class="industrial-banner-height position-relative" 
                                 style="background-image: url(<?= base_url(); ?>/public/uploads/slider_images/<?= htmlspecialchars($sldr['image']); ?>); 
                                         background-attachment: fixed;">
                                
                                <!-- Image Blur Effect -->
                                <?php if ($sldr['image_blur'] == 'yes'): ?>
                                    <div class="industrial-blur-overlay position-absolute top-0 start-0 w-100 h-100" 
                                         style="backdrop-filter: blur(3px);"></div>
                                <?php endif; ?>

                                <!-- Industrial Gradient Overlay -->
                                <div class="industrial-banner-gradient-overlay"></div>
                                
                                <!-- Banner Content Row -->
                                <div class="row align-items-center justify-content-<?php 
                                    echo ($sldr['content_position'] == 'left') ? 'start' : 
                                         (($sldr['content_position'] == 'center') ? 'center' : 'end'); 
                                ?> h-100 px-4">
                                    <div class="col-lg-12 col-md-10 industrial-banner-content <?= $sldr['content_position']; ?>">
                                        
                                        <!-- Industrial Category Badge -->
                                        <div class="industrial-banner-category animate-fadeInDown">
                                            <i class="fas fa-hammer me-2"></i>
                                            <span><?= !empty($sldr['category']) ? htmlspecialchars($sldr['category']) : 'Manufacturing Excellence'; ?></span>
                                        </div>

                                        <!-- Banner Title -->
                                        <h2 class="industrial-banner-slide-title animate-fadeInUp" 
                                            style="color: <?= $sldr['heading_color']; ?>;
                                                    font-family: <?= $sldr['title_style']; ?> !important;
                                                    font-size: <?= $sldr['title_font_size']; ?>px;
                                                    text-align: <?= ($sldr['content_position'] == 'left') ? 'left' : 
                                                                 (($sldr['content_position'] == 'right') ? 'right' : 'center'); ?>;">
                                            <?= htmlspecialchars($sldr['title']); ?>
                                        </h2>

                                        <!-- Banner Description with Optional Blur Box -->
                                        <?php if ($sldr['blur'] == 'yes'): ?>
                                            <div class="industrial-detail-box">
                                        <?php endif; ?>
                                        
                                        <?php if (!empty($sldr['desc'])): ?>
                                            <p class="industrial-banner-slide-description animate-fadeInUp" 
                                               style="color: <?= $sldr['text_color']; ?>;
                                                       font-family: <?= $sldr['desc_style']; ?>;
                                                       font-size: <?= $sldr['description_font_size']; ?>px;
                                                       text-align: <?= ($sldr['content_position'] == 'left') ? 'left' : 
                                                                    (($sldr['content_position'] == 'right') ? 'right' : 'center'); ?>;">
                                                <?= htmlspecialchars($sldr['desc']); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if ($sldr['blur'] == 'yes'): ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Banner Call-to-Action Buttons -->
                                        <div class="industrial-banner-slide-buttons animate-fadeInUp" style="animation-delay: 0.2s;">
                                            <button class="industrial-btn industrial-btn-primary" 
                                                    data-bs-target="#rfqModal" 
                                                    data-bs-toggle="modal">
                                                <i class="fas fa-file-contract me-2"></i>Get Quote
                                            </button>
                                            <?php if (!empty($sldr['secondary_button_text'])): ?>
                                                <a href="<?= !empty($sldr['secondary_button_link']) ? htmlspecialchars($sldr['secondary_button_link']) : 'javascript:void(0)'; ?>" 
                                                   class="industrial-btn industrial-btn-secondary">
                                                    <i class="fas fa-arrow-right me-2"></i><?= htmlspecialchars($sldr['secondary_button_text']); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    
                    </div>
                </section>
                <?php
            }
        }
    }
}
unset($slider);
?>

<!-- Industrial Banner Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Initialize Industrial Banner Slider (Slick)
    if (document.querySelector('.industrial-banner-slider-container.one-time')) {
        $('.industrial-banner-slider-container.one-time').slick({
            dots: true,
            infinite: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            fade: true,
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            pauseOnHover: true,
            arrows: true,
            adaptiveHeight: false,
            prevArrow: '<button class="slick-prev industrial-banner-arrow"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button class="slick-next industrial-banner-arrow"><i class="fas fa-chevron-right"></i></button>'
        });
    }

    // Trigger animations when slider changes
    if (document.querySelector('.industrial-banner-slider-container.one-time')) {
        $('.industrial-banner-slider-container.one-time').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            const $slides = $('.industrial-banner-slide');
            $slides.find('.animate-fadeInDown, .animate-fadeInUp').removeClass('animated');
        });

        $('.industrial-banner-slider-container.one-time').on('afterChange', function(event, slick, currentSlide) {
            const $currentSlide = $('.industrial-banner-slide').eq(currentSlide);
            $currentSlide.find('.animate-fadeInDown, .animate-fadeInUp').addClass('animated');
        });

        // Animate first slide
        setTimeout(function() {
            const $firstSlide = $('.industrial-banner-slide').first();
            $firstSlide.find('.animate-fadeInDown, .animate-fadeInUp').addClass('animated');
        }, 500);
    }

    // Ensure video plays on mobile
    const videoElements = document.querySelectorAll('.industrial-video-background');
    videoElements.forEach(video => {
        video.play().catch(error => {
            console.log('Video autoplay prevented:', error);
        });
    });

    // Smooth scroll indicator functionality
    const scrollIndicator = document.querySelector('.industrial-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            window.scrollBy({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        });
    }

    // Parallax effect on scroll
    window.addEventListener('scroll', function() {
        const bannerBgs = document.querySelectorAll('.industrial-banner-height');
        bannerBgs.forEach(bg => {
            const scrollPosition = window.pageYOffset;
            if (bg.style.backgroundAttachment === 'fixed') {
                bg.style.backgroundPosition = `center ${scrollPosition * 0.5}px`;
            }
        });
    });
});

// Intersection Observer for animation trigger
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.querySelectorAll('.animate-fadeInDown, .animate-fadeInUp').forEach(el => {
                    el.classList.add('animated');
                });
            }
        });
    }, observerOptions);

    document.querySelectorAll('.industrial-banner-content-wrapper').forEach(el => {
        observer.observe(el);
    });
});
</script>
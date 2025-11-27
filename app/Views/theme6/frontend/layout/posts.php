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
  padding: 50px var(--space-16);
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
/* ===== INDUSTRIAL EDGE PRO - POSTS/NEWS SECTION STYLES ===== */
/* Manufacturing industry news and updates styling */

/* ===== WRAPPER ===== */
.industrial-posts-innovative-wrapper {
    position: relative;
    background: var(--color-background);
    color: var(--color-text);
    padding: var(--space-32) 0;
    overflow: hidden;
}

/* .industrial-posts-gradient-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(var(--color-orange-500-rgb), 0.05) 0%, rgba(var(--color-teal-500-rgb), 0.05) 100%);
    z-index: 0;
} */

/* ===== HEADER ===== */
.industrial-posts-header {
    text-align: center;
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-posts-title {
    color: var(--primary-color);
    font-size: var(--font-size-4xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    font-family: var(--font-family-base);
}

.industrial-posts-description {
    color: var(--color-text-secondary);
    font-size: var(--font-size-lg);
    max-width: 600px;
    margin: 0 auto;
    line-height: var(--line-height-normal);
}

/* ===== HORIZONTAL SCROLL SECTION ===== */
.industrial-posts-horizontal-container {
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-posts-scroll-label {
    display: flex;
    align-items: center;
    gap: var(--space-8);
    color: var(--color-primary);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-20);
}

.industrial-posts-horizontal-scroll {
    display: flex;
    gap: var(--space-20);
    overflow-x: auto;
    padding-bottom: var(--space-16);
    scroll-behavior: smooth;
    scrollbar-width: thin;
    scrollbar-color: var(--color-primary) var(--color-surface);
}

.industrial-posts-horizontal-scroll::-webkit-scrollbar {
    height: 8px;
}

.industrial-posts-horizontal-scroll::-webkit-scrollbar-track {
    background: var(--color-surface);
    border-radius: var(--radius-sm);
}

.industrial-posts-horizontal-scroll::-webkit-scrollbar-thumb {
    background: var(--color-primary);
    border-radius: var(--radius-sm);
}

.industrial-posts-horizontal-scroll::-webkit-scrollbar-thumb:hover {
    background: var(--color-primary-hover);
}

/* ===== HORIZONTAL CARD ===== */
.industrial-post-horizontal-card {
    flex: 0 0 280px;
    background: var(--color-surface);
    border-radius: var(--radius-base);
    border: 1px solid var(--color-card-border);
    overflow: hidden;
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    position: relative;
}

.industrial-post-horizontal-card:hover {
    transform: translateY(-10px);
    border-color: var(--color-primary);
    box-shadow: var(--shadow-lg);
}

.industrial-post-h-image-wrapper {
    position: relative;
    width: 100%;
    height: 180px;
    overflow: hidden;
}

.industrial-post-h-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--duration-normal) var(--ease-standard);
}

.industrial-post-horizontal-card:hover .industrial-post-h-image {
    transform: scale(1.05);
}

.industrial-post-h-badge {
    position: absolute;
    top: var(--space-10);
    right: var(--space-10);
    background: var(--primary-color);
    color: var(--color-primary);
    padding: var(--space-6) var(--space-12);
    border-radius: var(--radius-full);
    font-size: var(--font-size-xs);
    font-weight: var(--font-weight-semibold);
    display: flex;
    align-items: center;
    gap: var(--space-4);
}

.industrial-post-h-content {
    padding: var(--space-16);
}

.industrial-post-h-date {
    color: var(--color-primary);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-medium);
    display: flex;
    align-items: center;
    gap: var(--space-4);
}

.industrial-post-h-title {
    color: var(--color-text);
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
    margin: var(--space-10) 0;
    line-height: var(--line-height-tight);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.industrial-post-h-category {
    color: var(--color-text-secondary);
    font-size: var(--font-size-sm);
    display: flex;
    align-items: center;
    gap: var(--space-6);
    margin-top: var(--space-8);
}

/* ===== FEATURED SECTION ===== */
.industrial-posts-featured-section {
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-posts-featured-label {
    display: flex;
    align-items: center;
    gap: var(--space-8);
    color: var(--color-primary);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-20);
}

.industrial-posts-featured-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-32);
    background: var(--color-surface);
    border: 1px solid var(--color-card-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
}

.industrial-posts-featured-card:hover {
    border-color: var(--color-primary);
    box-shadow: var(--shadow-lg);
}

.industrial-posts-featured-image {
    width: 100%;
    height: 100%;
    min-height: 400px;
    overflow: hidden;
}

.industrial-posts-featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--duration-normal) var(--ease-standard);
}

.industrial-posts-featured-card:hover .industrial-posts-featured-image img {
    transform: scale(1.05);
}

.industrial-posts-featured-content {
    padding: var(--space-32);
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.industrial-posts-featured-date {
    color: var(--color-primary);
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-medium);
    margin-bottom: var(--space-16);
    display: flex;
    align-items: center;
    gap: var(--space-6);
}

.industrial-posts-featured-title {
    color: var(--color-text);
    font-size: var(--font-size-3xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    line-height: var(--line-height-tight);
}

.industrial-posts-featured-excerpt {
    color: var(--color-text-secondary);
    font-size: var(--font-size-base);
    margin-bottom: var(--space-20);
    line-height: var(--line-height-normal);
}

.industrial-posts-featured-feature {
    display: flex;
    align-items: center;
    gap: var(--space-10);
    color: var(--color-success);
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-medium);
    margin-bottom: var(--space-20);
}

.industrial-posts-featured-btn {
    align-self: flex-start;
    background: var(--primary-color);
    color: var(--color-primary);
    border: none;
    padding: var(--space-12) var(--space-24);
    border-radius: var(--radius-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    gap: var(--space-8);
    font-size: var(--font-size-sm);
}

.industrial-posts-featured-btn:hover {
    background: var(--color-primary-hover);
    transform: translateY(-2px);
}

.industrial-posts-featured-btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

/* ===== GRID SECTION ===== */
.industrial-posts-grid-section {
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-posts-grid-label {
    display: flex;
    align-items: center;
    gap: var(--space-8);
    color: var(--color-primary);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-20);
}

.industrial-posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--space-24);
}

/* ===== GRID CARD ===== */
.industrial-post-grid-card {
    background: var(--color-surface);
    border: 1px solid var(--color-card-border);
    border-radius: var(--radius-base);
    overflow: hidden;
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    flex-direction: column;
    height: 100%;
}

.industrial-post-grid-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
}

.industrial-post-grid-image {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.industrial-post-grid-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--duration-normal) var(--ease-standard);
}

.industrial-post-grid-card:hover .industrial-post-grid-image img {
    transform: scale(1.08);
}

.industrial-post-grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(var(--primary-color), 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity var(--duration-normal) var(--ease-standard);
    font-size: var(--font-size-3xl);
    color: var(--color-btn-primary-text);
}

.industrial-post-grid-card:hover .industrial-post-grid-overlay {
    opacity: 1;
}

.industrial-post-grid-content {
    padding: var(--space-20);
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.industrial-post-grid-date {
    color: var(--color-primary);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-medium);
    margin-bottom: var(--space-10);
    display: flex;
    align-items: center;
    gap: var(--space-4);
}

.industrial-post-grid-title {
    color: var(--color-text);
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-semibold);
    margin-bottom: var(--space-12);
    line-height: var(--line-height-tight);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.industrial-post-grid-category {
    display: flex;
    gap: var(--space-8);
    flex-wrap: wrap;
    margin-top: auto;
}

.category-badge {
    display: inline-block;
    background: rgba(var(--primary-color), 0.15);
    border: 1px solid var(--primary-color);
    color: var(--color-primary);
    padding: var(--space-4) var(--space-10);
    border-radius: var(--radius-sm);
    font-size: var(--font-size-xs);
    font-weight: var(--font-weight-medium);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ===== VIEW ALL SECTION ===== */
.industrial-posts-view-all {
    text-align: center;
    margin-top: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-posts-view-btn {
    display: inline-flex;
    align-items: center;
    gap: var(--space-8);
    padding: var(--space-16) var(--space-32);
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-color) 100%);
    color: var(--color-primary);
    border-radius: var(--radius-sm);
    font-weight: var(--font-weight-semibold);
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    transition: all var(--duration-normal) var(--ease-standard);
    border: 2px solid transparent;
    font-size: var(--font-size-sm);
}

.industrial-posts-view-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
    color: var(--color-primary);
}

.industrial-posts-view-btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

/* ===== ANIMATIONS ===== */
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

.industrial-post-animate {
    animation: fadeInUp var(--duration-normal) var(--ease-standard) forwards;
    opacity: 0;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 480px) {
    .industrial-posts-innovative-wrapper {
        padding: var(--space-24) 0;
    }

    .industrial-posts-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-posts-description {
        font-size: var(--font-size-base);
    }

    .industrial-posts-horizontal-scroll {
        gap: var(--space-12);
    }

    .industrial-post-horizontal-card {
        flex: 0 0 180px;
    }

    .industrial-post-h-image-wrapper {
        height: 120px;
    }

    .industrial-post-h-content {
        padding: var(--space-12);
    }

    .industrial-posts-grid {
        grid-template-columns: 1fr;
    }

    .industrial-posts-featured-content {
        padding: var(--space-16);
    }

    .industrial-posts-featured-title {
        font-size: var(--font-size-xl);
    }

    .industrial-posts-featured-excerpt {
        font-size: var(--font-size-sm);
    }

    .industrial-post-grid-image {
        height: 140px;
    }
}

@media (max-width: 768px) {
    .industrial-posts-innovative-wrapper {
        padding: var(--space-32) 0;
    }

    .industrial-posts-header {
        margin-bottom: var(--space-24);
    }

    .industrial-posts-title {
        font-size: var(--font-size-3xl);
    }

    .industrial-posts-description {
        font-size: var(--font-size-base);
    }

    .industrial-posts-horizontal-scroll {
        gap: var(--space-16);
    }

    .industrial-post-horizontal-card {
        flex: 0 0 220px;
    }

    .industrial-posts-featured-card {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .industrial-posts-featured-image {
        min-height: 250px;
    }

    .industrial-posts-featured-content {
        padding: var(--space-20);
    }

    .industrial-posts-featured-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-posts-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: var(--space-16);
    }

    .industrial-post-grid-image {
        height: 160px;
    }
}

@media (max-width: 1024px) {
    .industrial-posts-title {
        font-size: var(--font-size-3xl);
    }

    .industrial-posts-featured-card {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .industrial-posts-featured-image {
        min-height: 300px;
    }

    .industrial-posts-featured-content {
        padding: var(--space-24);
    }

    .industrial-posts-featured-title {
        font-size: var(--font-size-2xl);
    }
}

</style>

<?php
// Industrial Edge Pro - Manufacturing Posts/News Component

if (!empty($posts)) {
    
    foreach ($posts as $p) {
       if (!isset($p['posts']) || empty($p['posts'])) {
            continue;
        }
        
        $section_id = $p['section_id'] ?? null;
        $datasection = $p['sub_menu_name'] ?? "Industry Updates";
        
        // Get the actual posts array
        $posts_array = $p['posts'];
        ?>

<!-- ===== INDUSTRIAL EDGE PRO - MANUFACTURING NEWS SECTION ===== -->
<section class="industrial-posts-innovative-wrapper">
    <!-- Gradient background -->
    <!-- <div class="industrial-posts-gradient-bg"></div> -->

    <div class="container">
        <!-- Header -->
        <div class="industrial-posts-header" data-aos="fade-down" data-aos-duration="800">
            <h2 class="industrial-posts-title">
                <?= htmlspecialchars($datasection) ?>
            </h2>
            <p class="industrial-posts-description">
                Stay updated with the latest manufacturing trends, industrial innovations, technical breakthroughs, and production insights from our expert team.
            </p>
        </div>

        <!-- Horizontal Scrolling Section -->
        <div class="industrial-posts-horizontal-container">
            <div class="industrial-posts-scroll-label">
                <i class="fas fa-newspaper"></i> Latest Updates
            </div>
            <div class="industrial-posts-horizontal-scroll">
                <?php
                $cardIndex = 0;
                foreach ($posts_array as $post) {
                    // Check if slug exists before using
                    if (!isset($post['slug'])) {
                        continue;
                    }
                    
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/industrial-article-default.png' 
                        : base_url() . '/public/uploads/post_updates_images/' . htmlspecialchars($post['image']);
                    $url = base_url() . '/updates/' . htmlspecialchars($post['slug']);
                    $cardIndex++;
                    
                    if ($cardIndex > 6) break; // Show first 6
                ?>
                    <div class="industrial-post-horizontal-card industrial-post-animate" 
                         onclick="window.location.href='<?= $url; ?>'">
                        <div class="industrial-post-h-image-wrapper">
                            <img src="<?= $img; ?>" 
                                 alt="<?= htmlspecialchars($post['title'] ?? 'Article'); ?>" 
                                 class="industrial-post-h-image"
                                 loading="lazy">
                            <?php if (!empty($post['text_on_image'])): ?>
                                <div class="industrial-post-h-badge">
                                    <i class="fas fa-tag me-1"></i><?= htmlspecialchars($post['text_on_image']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="industrial-post-h-content">
                            <span class="industrial-post-h-date">
                                <i class="fas fa-calendar-alt me-1"></i><?= isset($post['created_at']) ? date('d M Y', strtotime($post['created_at'])) : 'N/A'; ?>
                            </span>
                            <h3 class="industrial-post-h-title">
                                <?= htmlspecialchars($post['title'] ?? 'Untitled'); ?>
                            </h3>
                            <?php if (!empty($post['specifications'])): ?>
                                <div class="industrial-post-h-category">
                                    <i class="fas fa-tools me-1"></i>
                                    <span><?= htmlspecialchars(substr($post['specifications'], 0, 30)); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Featured Large Article -->
        <?php 
        // Use first post as featured
        if (!empty($posts_array) && isset($posts_array)): 
            $featured = reset($posts_array); // Get first post
            
            // Check if slug exists
            if (isset($featured['slug'])):
                $featuredImg = empty($featured['image']) 
                    ? base_url() . '/public/assets/img/industrial-article-default.png' 
                    : base_url() . '/public/uploads/post_updates_images/' . htmlspecialchars($featured['image']);
                $featuredUrl = base_url() . '/updates/' . htmlspecialchars($featured['slug']);
        ?>
        <div class="industrial-posts-featured-section">
            <div class="industrial-posts-featured-label">
                <i class="fas fa-bolt"></i> Featured News
            </div>
            <div class="industrial-posts-featured-card" onclick="window.location.href='<?= $featuredUrl; ?>'">
                <div class="industrial-posts-featured-image">
                    <img src="<?= $featuredImg; ?>" 
                         alt="<?= htmlspecialchars($featured['title'] ?? 'Featured'); ?>" 
                         loading="lazy">
                </div>
                <div class="industrial-posts-featured-content">
                    <div class="industrial-posts-featured-date">
                        <i class="fas fa-calendar me-1"></i><?= isset($featured['created_at']) ? date('d M Y', strtotime($featured['created_at'])) : 'N/A'; ?>
                    </div>
                    <h3 class="industrial-posts-featured-title">
                        <?= htmlspecialchars($featured['title'] ?? 'Untitled'); ?>
                    </h3>
                    <p class="industrial-posts-featured-excerpt">
                        <?= htmlspecialchars(substr($featured['title'] ?? '', 0, 120)); ?>...
                    </p>
                    <?php if (!empty($featured['key_point'])): ?>
                        <div class="industrial-posts-featured-feature">
                            <i class="fas fa-check-circle"></i>
                            <span><?= htmlspecialchars($featured['key_point']); ?></span>
                        </div>
                    <?php endif; ?>
                    <button class="industrial-posts-featured-btn">
                        <i class="fas fa-arrow-right me-2"></i>Read Update
                    </button>
                </div>
            </div>
        </div>
        <?php endif; endif; ?>

        <!-- Grid Posts Section -->
        <div class="industrial-posts-grid-section">
            <div class="industrial-posts-grid-label">
                <i class="fas fa-th"></i> More News
            </div>
            <div class="industrial-posts-grid">
                <?php
                $cardIndex = 0;
                foreach ($posts_array as $post) {
                    if ($cardIndex === 0) { 
                        $cardIndex++;
                        continue; // Skip first (already shown as featured)
                    }
                    
                    // Check if slug exists
                    if (!isset($post['slug'])) {
                        continue;
                    }
                    
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/industrial-article-default.png' 
                        : base_url() . '/public/uploads/post_updates_images/' . htmlspecialchars($post['image']);
                    $url = base_url() . '/updates/' . htmlspecialchars($post['slug']);
                    $cardIndex++;
                ?>
                    <div class="industrial-post-grid-card industrial-post-animate" 
                         onclick="window.location.href='<?= $url; ?>'">
                        <div class="industrial-post-grid-image">
                            <img src="<?= $img; ?>" 
                                 alt="<?= htmlspecialchars($post['title'] ?? 'Article'); ?>" 
                                 loading="lazy">
                            <div class="industrial-post-grid-overlay">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="industrial-post-grid-content">
                            <div class="industrial-post-grid-date">
                                <i class="fas fa-clock me-1"></i><?= isset($post['created_at']) ? date('d M Y', strtotime($post['created_at'])) : 'N/A'; ?>
                            </div>
                            <h3 class="industrial-post-grid-title">
                                <?= htmlspecialchars(substr($post['title'] ?? 'Untitled', 0, 50)); ?>
                            </h3>
                            <div class="industrial-post-grid-category">
                                <span class="category-badge">Manufacturing</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- View All Link -->
        <div class="industrial-posts-view-all">
            <a href="<?= base_url() . '/updates' ?>" target="_blank" class="industrial-posts-view-btn">
                <i class="fas fa-arrow-right me-2"></i>View All Updates
            </a>
        </div>
    </div>
</section>

<script>
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    }

    // Add animation delay to cards
    document.addEventListener('DOMContentLoaded', function() {
        const posts = document.querySelectorAll('.industrial-post-animate');
        posts.forEach((post, index) => {
            post.style.animationDelay = (index * 100) + 'ms';
        });

        // Add click handlers for cards
        const cards = document.querySelectorAll('.industrial-post-horizontal-card, .industrial-post-grid-card, .industrial-posts-featured-card');
        cards.forEach(card => {
            card.style.cursor = 'pointer';
        });
    });
</script>

<?php 
    }
}
?>
<?php   
if (!empty($testimonials)) {
    foreach ($testimonials as $testi) {
        if ($testi['section_id'] == $myurl['section_id']) {
            if (isset($testi['section_id'])) {
                unset($testi['section_id']);
            }
            if (isset($testi['sub_menu_name'])) {
                $datasubmenu = $testi['sub_menu_name'];
                unset($testi['sub_menu_name']);
            } else {
                $datasubmenu = "Client Testimonials";
            }
?>

<style>


/* Base styles */
html {
  font-size: var(--font-size-base);
  font-family: var(--font-family-base);
  line-height: var(--line-height-normal);
  color: var(--color-text);
  background-color: var(--color-background);
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

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
```css
/* ===== INDUSTRIAL EDGE PRO - TESTIMONIALS SECTION STYLES ===== */
/* Client testimonials and reviews styling for manufacturing */

/* ===== WRAPPER ===== */
.industrial-testimonials-innovative-wrapper {
    position: relative;
    background: var(--color-background);
    color: var(--color-text);
    padding: var(--space-32) 0;
    overflow: hidden;
}

/* .industrial-testimonials-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    overflow: hidden;
    pointer-events: none;
}

.industrial-testimonials-shape {
    position: absolute;
    border-radius: var(--radius-full);
    opacity: 0.08;
}

.industrial-testimonials-shape-1 {
    width: 300px;
    height: 300px;
    background: var(--color-primary);
    top: -100px;
    right: -100px;
}

.industrial-testimonials-shape-2 {
    width: 250px;
    height: 250px;
    background: var(--color-info);
    bottom: 50px;
    left: -80px;
}

.industrial-testimonials-shape-3 {
    width: 200px;
    height: 200px;
    background: var(--color-success);
    top: 50%;
    right: 10%;
} */

/* ===== HEADER ===== */
.industrial-testimonials-header {
    text-align: center;
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-testimonials-title {
    font-size: var(--font-size-3xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-20);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    color: var(--primary-color);
    line-height: var(--line-height-tight);
}

.industrial-title-accent {
    color: var(--color-primary);
    display: block;
}

.industrial-testimonials-divider {
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, var(--color-primary), var(--color-info));
    margin: var(--space-16) auto var(--space-24);
    border-radius: var(--radius-sm);
}

.industrial-testimonials-subtitle {
    color: var(--color-text-secondary);
    font-size: var(--font-size-lg);
    max-width: 700px;
    margin: 0 auto;
    line-height: var(--line-height-normal);
}

/* ===== TESTIMONIALS GRID ===== */
.industrial-testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: var(--space-32);
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
}

/* ===== TESTIMONIAL CARD ===== */
.industrial-testimonial-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--space-32);
    transition: all var(--duration-normal) var(--ease-standard);
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    box-shadow: var(--shadow-sm);
}

.industrial-testimonial-card:hover {
    border-color: var(--color-primary);
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

/* Rating Stars */
.industrial-testimonial-rating {
    display: flex;
    gap: var(--space-6);
    margin-bottom: var(--space-16);
}

.industrial-testimonial-star {
    color: var(--primary-color);
    font-size: var(--font-size-lg);
}

/* Quote Icon */
.industrial-testimonial-quote {
    font-size: var(--font-size-3xl);
    color: var(--color-primary);
    opacity: 0.3;
    margin-bottom: var(--space-10);
}

/* Testimonial Text */
.industrial-testimonial-text {
    color: var(--color-text-secondary);
    font-size: var(--font-size-base);
    line-height: var(--line-height-normal);
    margin-bottom: var(--space-20);
    flex-grow: 1;
    font-style: italic;
}

/* Read More Link */
.industrial-testimonial-read-more {
    color: var(--color-info);
    text-decoration: none;
    font-weight: var(--font-weight-semibold);
    font-size: var(--font-size-sm);
    display: inline-flex;
    align-items: center;
    gap: var(--space-6);
    margin-bottom: var(--space-20);
    transition: all var(--duration-normal) var(--ease-standard);
}

.industrial-testimonial-read-more:hover {
    color: var(--color-primary);
    gap: var(--space-10);
}

/* Author Info */
.industrial-testimonial-author {
    display: flex;
    align-items: center;
    gap: var(--space-16);
    border-top: 1px solid var(--color-border);
    padding-top: var(--space-20);
    margin-top: auto;
}

.industrial-testimonial-avatar {
    width: 50px;
    height: 50px;
    border-radius: var(--radius-full);
    object-fit: cover;
    border: 2px solid var(--color-primary);
}

.industrial-testimonial-author-info h5 {
    color: var(--color-text);
    margin: 0;
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-sm);
}

.industrial-testimonial-author-info span {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
    display: block;
}

.industrial-testimonial-date {
    display: flex;
    align-items: center;
}

/* ===== ANIMATION ===== */
@keyframes fadeUpStagger {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.industrial-testimonial-card-animate {
    animation: fadeUpStagger 0.6s var(--ease-standard) forwards;
    opacity: 0;
}

/* ===== MODAL ===== */
.industrial-testimonial-modal-content {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.industrial-testimonial-modal-header {
    background: var(--color-primary);
    border: none;
    color: var(--color-btn-primary-text);
}

.industrial-testimonial-modal-title {
    color: var(--color-btn-primary-text);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-xl);
    display: flex;
    align-items: center;
    gap: var(--space-8);
}

.industrial-testimonial-modal-body {
    padding: var(--space-32);
    position: relative;
}

.industrial-testimonial-modal-quote {
    font-size: var(--font-size-2xl);
    color: var(--color-primary);
    opacity: 0.4;
    margin-bottom: var(--space-16);
}

.industrial-testimonial-modal-body p {
    color: var(--color-text);
    font-size: var(--font-size-lg);
    line-height: var(--line-height-normal);
    margin-bottom: var(--space-20);
    font-style: italic;
}

.industrial-testimonial-modal-name {
    color: var(--color-info);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-base);
    margin-top: var(--space-24) !important;
    padding-top: var(--space-24);
    border-top: 1px solid var(--color-border);
}

/* ===== CTA SECTION ===== */
.industrial-testimonials-cta {
    text-align: center;
    /* background: var(--color-bg-6); */
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: var(--space-32);
    position: relative;
    z-index: 1;
}

.industrial-testimonials-cta h3 {
    color: var(--color-primary);
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-bold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-bottom: var(--space-10);
}

.industrial-testimonials-cta p {
    color: var(--color-text-secondary);
    font-size: var(--font-size-lg);
    margin-bottom: var(--space-24);
}

.industrial-testimonials-cta-btn {
    background: var(--primary-color);
    color: var(--color-primary);
    border: none;
    padding: var(--space-16) var(--space-32);
    border-radius: var(--radius-base);
    font-weight: var(--font-weight-bold);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    display: inline-flex;
    align-items: center;
    gap: var(--space-8);
    font-size: var(--font-size-sm);
}

.industrial-testimonials-cta-btn:hover {
    background: var(--color-primary);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.industrial-testimonials-cta-btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .industrial-testimonials-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-testimonials-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: var(--space-24);
    }

    .industrial-testimonials-cta {
        padding: var(--space-32);
    }

    .industrial-testimonials-cta h3 {
        font-size: var(--font-size-xl);
    }
}

@media (max-width: 768px) {
    .industrial-testimonials-innovative-wrapper {
        padding: var(--space-24) 0;
    }

    .industrial-testimonials-header {
        margin-bottom: var(--space-24);
    }

    .industrial-testimonials-title {
        font-size: var(--font-size-xl);
    }

    .industrial-testimonials-subtitle {
        font-size: var(--font-size-base);
    }

    .industrial-testimonials-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--space-20);
    }

    .industrial-testimonial-card {
        padding: var(--space-20);
    }

    .industrial-testimonials-cta {
        padding: var(--space-24);
        margin: var(--space-32) 0 0 0;
    }

    .industrial-testimonials-cta h3 {
        font-size: var(--font-size-lg);
    }

    .industrial-testimonials-cta-btn {
        font-size: var(--font-size-xs);
        padding: var(--space-12) var(--space-24);
    }
}

@media (max-width: 576px) {
    .industrial-testimonials-innovative-wrapper {
        padding: var(--space-32) 0;
    }

    .industrial-testimonials-title {
        font-size: var(--font-size-lg);
    }

    .industrial-testimonials-subtitle {
        font-size: var(--font-size-sm);
    }

    .industrial-testimonials-grid {
        grid-template-columns: 1fr;
        gap: var(--space-16);
    }

    .industrial-testimonial-card {
        padding: var(--space-16);
    }

    .industrial-testimonial-text {
        font-size: var(--font-size-sm);
    }

    .industrial-testimonial-author {
        gap: var(--space-10);
    }

    .industrial-testimonials-cta {
        padding: var(--space-20);
    }

    .industrial-testimonials-cta h3 {
        font-size: var(--font-size-lg);
    }

    .industrial-testimonials-cta p {
        font-size: var(--font-size-base);
    }

    .industrial-testimonials-cta-btn {
        width: 100%;
        justify-content: center;
    }
}

/* Mobile portrait breakpoint at 480px */
@media (max-width: 480px) {
    .industrial-testimonials-innovative-wrapper {
        padding: var(--space-20) 0;
    }

    .industrial-testimonials-header {
        margin-bottom: var(--space-20);
    }

    .industrial-testimonials-title {
        font-size: var(--font-size-md);
        margin-bottom: var(--space-16);
    }

    .industrial-testimonials-subtitle {
        font-size: var(--font-size-xs);
        padding: 0 var(--space-16);
    }

    .industrial-testimonials-divider {
        width: 40px;
        height: 3px;
        margin: var(--space-12) auto var(--space-16);
    }

    .industrial-testimonials-grid {
        gap: var(--space-12);
        padding: 0 var(--space-8);
    }

    .industrial-testimonial-card {
        padding: var(--space-12);
        margin-bottom: var(--space-8);
    }

    .industrial-testimonial-text {
        font-size: var(--font-size-xs);
        line-height: 1.4;
    }

    .industrial-testimonial-author {
        gap: var(--space-8);
        padding-top: var(--space-16);
    }

    .industrial-testimonial-avatar {
        width: 40px;
        height: 40px;
    }

    .industrial-testimonials-cta {
        padding: var(--space-16);
        margin: var(--space-24) var(--space-8) 0;
    }

    .industrial-testimonials-cta h3 {
        font-size: var(--font-size-md);
        margin-bottom: var(--space-8);
    }

    .industrial-testimonials-cta p {
        font-size: var(--font-size-sm);
        margin-bottom: var(--space-20);
    }

    .industrial-testimonials-cta-btn {
        font-size: var(--font-size-xs);
        padding: var(--space-10) var(--space-16);
    }

    .industrial-testimonial-modal-body {
        padding: var(--space-20);
    }

    .industrial-testimonial-modal-quote {
        font-size: var(--font-size-xl);
    }

    .industrial-testimonial-modal-body p {
        font-size: var(--font-size-base);
    }

    /* Hide decorative shapes on very small screens */
    .industrial-testimonials-shape-2,
    .industrial-testimonials-shape-3 {
        display: none;
    }

    .industrial-testimonials-shape-1 {
        width: 150px;
        height: 150px;
        top: -50px;
        right: -50px;
    }
}
</style>

<!-- ===== INDUSTRIAL EDGE PRO - CLIENT TESTIMONIALS SECTION ===== -->
<section class="industrial-testimonials-innovative-wrapper">
    <!-- Animated Background Elements -->
    <!-- <div class="industrial-testimonials-bg-elements">
        <div class="industrial-testimonials-shape industrial-testimonials-shape-1"></div>
        <div class="industrial-testimonials-shape industrial-testimonials-shape-2"></div>
        <div class="industrial-testimonials-shape industrial-testimonials-shape-3"></div>
    </div> -->

    <div class="container">
        <!-- Header -->
        <div class="industrial-testimonials-header" data-aos="fade-down" data-aos-duration="900">
            <h2 class="industrial-testimonials-title">
                What Our <span class="industrial-title-accent">Clients Say</span>
            </h2>
            <div class="industrial-testimonials-divider"></div>
            <p class="industrial-testimonials-subtitle">
                Real stories from manufacturing partners who trust us with their precision parts and manufacturing excellence
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="industrial-testimonials-grid">
            <?php
            $testimonialIndex = 0;
            foreach ($testi as $testimonial) {
                $img = !empty($testimonial['image']) 
                    ? base_url() . '/public/uploads/testimonial_images/' . htmlspecialchars($testimonial['image']) 
                    : base_url() . '/public/assets/img/default-avatar.png';
                
                $preview_text = strlen($testimonial['description']) > 150 
                    ? substr($testimonial['description'], 0, 150) . '...' 
                    : $testimonial['description'];
                
                $animationDelay = $testimonialIndex * 100;
                $testimonialIndex++;
            ?>
                <div class="industrial-testimonial-card industrial-testimonial-card-animate" 
                     data-aos="fade-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;">

                    <!-- Rating Stars -->
                    <div class="industrial-testimonial-rating">
                        <i class="fas fa-star industrial-testimonial-star"></i>
                        <i class="fas fa-star industrial-testimonial-star"></i>
                        <i class="fas fa-star industrial-testimonial-star"></i>
                        <i class="fas fa-star industrial-testimonial-star"></i>
                        <i class="fas fa-star industrial-testimonial-star"></i>
                    </div>

                    <!-- Quote Icon -->
                    <i class="fas fa-quote-left industrial-testimonial-quote"></i>

                    <!-- Testimonial Text -->
                    <p class="industrial-testimonial-text">
                        <?= htmlspecialchars($preview_text); ?>
                    </p>

                    <!-- Read More Button -->
                    <?php if (strlen($testimonial['description']) > 150) { ?>
                        <a class="industrial-testimonial-read-more" 
                           href="javascript:void(0)" 
                           onclick="industrialTestimonialModal('<?php echo base64_encode($testimonial['description']); ?>', '<?= htmlspecialchars($testimonial['name']); ?>')">
                            Read full review
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    <?php } ?>

                    <!-- Author Info -->
                    <div class="industrial-testimonial-author">
                        <img src="<?= $img; ?>" 
                             alt="<?= htmlspecialchars($testimonial['name']); ?>" 
                             class="industrial-testimonial-avatar">
                        <div class="industrial-testimonial-author-info">
                            <h5><?= htmlspecialchars($testimonial['name']); ?></h5>
                            <span class="industrial-testimonial-date">
                                <i class="fas fa-calendar-alt me-1"></i><?= date('d M Y', strtotime($testimonial['created_at'])); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Call-to-Action Section -->
        <div class="industrial-testimonials-cta" data-aos="fade-up" data-aos-delay="600">
            <h3>Ready to Partner With Us?</h3>
            <p>Join 500+ satisfied manufacturing partners</p>
            <button class="industrial-testimonials-cta-btn" data-bs-target="#rfqModal" data-bs-toggle="modal">
                <i class="fas fa-file-contract me-2"></i>Request a Quote
            </button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }

        // Add staggered animation delays
        const testimonials = document.querySelectorAll('.industrial-testimonial-card-animate');
        testimonials.forEach((card, index) => {
            card.style.animationDelay = (index * 100) + 'ms';
        });
    });

    // Testimonial Modal
    function industrialTestimonialModal(description, name = '') {
        const decodedDescription = atob(description);
        const modalHTML = `
            <div class="modal fade" id="industrialTestimonialModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content industrial-testimonial-modal-content">
                        <div class="modal-header industrial-testimonial-modal-header">
                            <h5 class="modal-title industrial-testimonial-modal-title">
                                <i class="fas fa-quote-left me-2"></i>Client Review
                            </h5>
                            <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body industrial-testimonial-modal-body">
                            <i class="fas fa-quote-left industrial-testimonial-modal-quote"></i>
                            <p>\${escapeHtml(decodedDescription)}</p>
                            \${name ? '<p class="industrial-testimonial-modal-name">— ' + escapeHtml(name) + '</p>' : ''}
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Remove existing modal if present
        const existingModal = document.getElementById('industrialTestimonialModal');
        if (existingModal) existingModal.remove();

        // Insert and show modal
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        const modal = new bootstrap.Modal(document.getElementById('industrialTestimonialModal'));
        modal.show();

        // Remove modal after hide
        document.getElementById('industrialTestimonialModal').addEventListener('hidden.bs.modal', function() {
            this.remove();
        });
    }

    // Helper function to escape HTML
    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, m => map[m]);
    }
</script>

<?php
        }
    }
}
?>
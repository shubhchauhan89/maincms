<?php
if(isset($myurl['soroting_order'])){
    $id = $myurl['soroting_order'];
}else{
    $id = "111";
}
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
/* ===== INDUSTRIAL EDGE PRO - INQUIRY FORM SECTION STYLES ===== */
/* Manufacturing inquiry and contact form styling */

/* ===== WRAPPER ===== */
.industrial-inquiry-innovative-wrapper {
    position: relative;
    background: var(--color-background);
    color: var(--color-text);
    padding: calc(var(--space-8) * 2.5) 0;
    overflow: hidden;
}

.industrial-inquiry-mesh-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        linear-gradient(45deg, transparent 48%, var(--primary-color) 49%, var(--primary-color) 51%, transparent 52%),
        linear-gradient(-45deg, transparent 48%, var(--color-primary) 49%, var(--color-primary) 51%, transparent 52%);
    background-size: 100px 100px;
    opacity: 0.03;
    z-index: 0;
}

/* ===== HEADER ===== */
.industrial-inquiry-header {
    text-align: center;
    margin-bottom: calc(var(--space-32) * 1.875);
    position: relative;
    z-index: 1;
}

.industrial-inquiry-title {
    font-size: var(--font-size-4xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--color-text);
    font-family: var(--font-family-base);
    line-height: var(--line-height-tight);
}

.industrial-inquiry-accent {
    color: var(--primary-color);
    display: block;
}

.industrial-inquiry-subtitle {
    color: var(--color-text-secondary);
    font-size: var(--font-size-lg);
    max-width: 700px;
    margin: 0 auto;
    line-height: var(--line-height-normal);
    font-family: var(--font-family-base);
}

/* ===== FORM WRAPPER ===== */
.industrial-inquiry-form-wrapper {
    position: relative;
    z-index: 1;
    max-width: 700px;
    margin: 0 auto;
}

.industrial-inquiry-form-card {
    background: var(--color-surface);
    border: 1px solid var(--color-card-border);
    border-radius: var(--radius-lg);
    padding: calc(var(--space-32) * 1.5625);
    box-shadow: var(--shadow-lg);
}

/* ===== FORM STRUCTURE ===== */
.industrial-inquiry-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-20);
    margin-bottom: var(--space-20);
}

.industrial-inquiry-form-group {
    margin-bottom: var(--space-20);
}

.industrial-inquiry-form-label {
    display: block;
    color: var(--color-text);
    font-weight: var(--font-weight-medium);
    margin-bottom: var(--space-8);
    font-size: var(--font-size-sm);
    text-transform: capitalize;
    font-family: var(--font-family-base);
}

.required {
    color: var(--primary-color);
    font-weight: var(--font-weight-bold);
    margin-left: var(--space-2);
}

/* ===== INPUT WRAPPER ===== */
.industrial-inquiry-input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.industrial-inquiry-form-control {
    width: 100%;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    color: var(--color-text);
    padding: var(--space-12) calc(var(--space-32) + var(--space-8)) var(--space-12) var(--space-12);
    border-radius: var(--radius-base);
    font-size: var(--font-size-base);
    transition: all var(--duration-normal) var(--ease-standard);
    font-family: var(--font-family-base);
    line-height: var(--line-height-normal);
}

.industrial-inquiry-form-control:focus {
    outline: none;
    border-color: var(--color-primary);
    box-shadow: var(--focus-ring);
    background: var(--color-surface);
    color: var(--color-text);
}

.industrial-inquiry-form-control::placeholder {
    color: var(--color-text-secondary);
}

textarea.industrial-inquiry-form-control {
    resize: vertical;
    min-height: 120px;
    padding: var(--space-12);
}

/* ===== INPUT ICON ===== */
.industrial-inquiry-input-icon {
    position: absolute;
    right: var(--space-12);
    color: var(--primary-color);
    font-size: var(--font-size-base);
    pointer-events: none;
    transition: color var(--duration-normal) var(--ease-standard);
}

.industrial-inquiry-form-control:focus ~ .industrial-inquiry-input-icon {
    color: var(--color-primary);
}

/* ===== CHECKBOXES ===== */
.industrial-inquiry-checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: var(--space-16);
}

.industrial-inquiry-checkbox {
    display: flex;
    align-items: center;
    gap: var(--space-10);
    cursor: pointer;
    user-select: none;
}

.industrial-inquiry-checkbox input[type="checkbox"] {
    width: 18px;
    height: 18px;
    cursor: pointer;
    accent-color: var(--primary-color);
    border-radius: var(--radius-sm);
}

.industrial-inquiry-checkbox span {
    color: var(--color-text);
    font-size: var(--font-size-base);
    transition: color var(--duration-normal) var(--ease-standard);
    font-family: var(--font-family-base);
}

.industrial-inquiry-checkbox input[type="checkbox"]:checked + span {
    color: var(--primary-color);
    font-weight: var(--font-weight-medium);
}

/* ===== SUBMIT WRAPPER ===== */
.industrial-inquiry-submit-wrapper {
    margin-top: calc(var(--space-16) * 1.875);
}

.industrial-inquiry-submit-btn {
    width: 100%;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-color) 100%);
    color: var(--color-primary);
    border: none;
    padding: var(--space-16) calc(var(--space-16) * 1.75);
    border-radius: var(--radius-base);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: 0.025em;
    font-size: var(--font-size-base);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-10);
    font-family: var(--font-family-base);
}

.industrial-inquiry-submit-btn:hover:not(.loading) {
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(var(--primary-color), 0.3);
}

.industrial-inquiry-submit-btn.loading {
    opacity: 0.7;
}

.industrial-inquiry-submit-btn:disabled {
    cursor: not-allowed;
    opacity: 0.6;
}

.industrial-inquiry-submit-btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
}

.industrial-inquiry-form-note {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xs);
    margin-top: var(--space-12);
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-4);
    font-family: var(--font-family-base);
}

/* ===== ALERTS ===== */
.industrial-inquiry-alert {
    display: flex;
    align-items: center;
    gap: var(--space-12);
    padding: var(--space-16) var(--space-20);
    border-radius: var(--radius-base);
    margin-bottom: var(--space-20);
    font-weight: var(--font-weight-medium);
    animation: alert-slideIn 0.4s var(--ease-standard);
    font-family: var(--font-family-base);
}

@keyframes alert-slideIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.industrial-inquiry-alert-success {
    background: rgba(var(--color-success-rgb), var(--status-bg-opacity));
    border: 1px solid rgba(var(--color-success-rgb), var(--status-border-opacity));
    color: var(--color-success);
}

.industrial-inquiry-alert-success i {
    font-size: var(--font-size-xl);
}

.industrial-inquiry-alert-danger {
    background: rgba(var(--color-error-rgb), var(--status-bg-opacity));
    border: 1px solid rgba(var(--color-error-rgb), var(--status-border-opacity));
    color: var(--color-error);
}

.industrial-inquiry-alert-danger i {
    font-size: var(--font-size-xl);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .industrial-inquiry-innovative-wrapper {
        padding: calc(var(--space-32) * 1.875) 0;
    }

    .industrial-inquiry-title {
        font-size: var(--font-size-3xl);
    }

    .industrial-inquiry-subtitle {
        font-size: var(--font-size-base);
    }

    .industrial-inquiry-form-card {
        padding: calc(var(--space-16) * 1.875);
    }

    .industrial-inquiry-form-row {
        grid-template-columns: 1fr;
        gap: var(--space-16);
    }

    .industrial-inquiry-checkbox-group {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-12);
    }
}

@media (max-width: 576px) {
    .industrial-inquiry-innovative-wrapper {
        padding: calc(var(--space-32) * 1.25) 0;
    }

    .industrial-inquiry-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-inquiry-subtitle {
        font-size: var(--font-size-sm);
    }

    .industrial-inquiry-form-card {
        padding: var(--space-20);
        border-radius: var(--radius-base);
    }

    .industrial-inquiry-form-control {
        padding: var(--space-10) calc(var(--space-32) + var(--space-4)) var(--space-10) var(--space-10);
        font-size: var(--font-size-sm);
    }

    textarea.industrial-inquiry-form-control {
        min-height: 100px;
    }

    .industrial-inquiry-input-icon {
        right: var(--space-10);
        font-size: var(--font-size-sm);
    }

    .industrial-inquiry-submit-btn {
        padding: var(--space-12) var(--space-20);
        font-size: var(--font-size-sm);
    }

    .industrial-inquiry-checkbox-group {
        grid-template-columns: 1fr;
    }

    .industrial-inquiry-form-note {
        font-size: calc(var(--font-size-xs) * 0.9);
    }
}

@media (max-width: 480px) {
    .industrial-inquiry-innovative-wrapper {
        padding: var(--space-32) 0;
    }

    .industrial-inquiry-header {
        margin-bottom: calc(var(--space-32) * 1.25);
    }

    .industrial-inquiry-title {
        font-size: var(--font-size-xl);
        margin-bottom: var(--space-12);
    }

    .industrial-inquiry-subtitle {
        font-size: var(--font-size-xs);
    }

    .industrial-inquiry-form-card {
        padding: var(--space-16);
        border-radius: var(--radius-sm);
    }

    .industrial-inquiry-form-row {
        gap: var(--space-12);
        margin-bottom: var(--space-16);
    }

    .industrial-inquiry-form-group {
        margin-bottom: var(--space-16);
    }

    .industrial-inquiry-form-control {
        padding: var(--space-8) var(--space-32) var(--space-8) var(--space-8);
        font-size: var(--font-size-xs);
    }

    textarea.industrial-inquiry-form-control {
        min-height: 80px;
        padding: var(--space-8);
    }

    .industrial-inquiry-input-icon {
        right: var(--space-8);
        font-size: var(--font-size-xs);
    }

    .industrial-inquiry-checkbox-group {
        gap: var(--space-8);
    }

    .industrial-inquiry-checkbox span {
        font-size: var(--font-size-xs);
    }

    .industrial-inquiry-submit-wrapper {
        margin-top: var(--space-20);
    }

    .industrial-inquiry-submit-btn {
        padding: var(--space-10) var(--space-16);
        font-size: var(--font-size-xs);
        gap: var(--space-6);
    }

    .industrial-inquiry-form-note {
        font-size: calc(var(--font-size-xs) * 0.85);
        margin-top: var(--space-8);
    }

    .industrial-inquiry-alert {
        padding: var(--space-12) var(--space-16);
        gap: var(--space-8);
        margin-bottom: var(--space-16);
    }

    .industrial-inquiry-alert-success i,
    .industrial-inquiry-alert-danger i {
        font-size: var(--font-size-base);
    }
}
</style>

<!-- ===== INDUSTRIAL EDGE PRO - INQUIRY FORM SECTION ===== -->
<section class="industrial-inquiry-innovative-wrapper" id="businessQueryId<?= $id; ?>">
    <!-- Animated Background Mesh -->
    <div class="industrial-inquiry-mesh-bg"></div>

    <div class="container">
        <!-- Header -->
        <div class="industrial-inquiry-header" data-aos="fade-down" data-aos-duration="900">
            <h2 class="industrial-inquiry-title">
                Get <span class="industrial-inquiry-accent">In Touch</span>
            </h2>
            <p class="industrial-inquiry-subtitle">
                Have manufacturing requirements? Our expert team is ready to help. Send us your specifications and we'll provide a detailed quote.
            </p>
        </div>

        <!-- Form Container -->
        <div class="industrial-inquiry-form-wrapper">
            <div class="industrial-inquiry-form-card" data-aos="fade-up" data-aos-duration="900">
                <form class="contact-form" id="inquiryForm<?= $id; ?>">
                    <?php 
                    $validation = \Config\Services::validation();
                    $session = \Config\Services::session();
                    if ($session->getFlashdata('message') !== NULL) : ?>
                        <div class="industrial-inquiry-alert industrial-inquiry-alert-success">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo session()->getFlashdata('message'); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($session->getFlashdata('error') !== NULL) : ?>
                        <div class="industrial-inquiry-alert industrial-inquiry-alert-danger">
                            <i class="fas fa-exclamation-circle"></i>
                            <span><?php echo session()->getFlashdata('error'); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($session->getFlashdata('sec-id') !== NULL){
                        echo '<script>document.getElementById("'.$session->getFlashdata('sec-id').'").scrollIntoView({behavior: "smooth", block: "start"});</script>';
                    } ?>

                    <!-- Two Column Row -->
                    <div class="industrial-inquiry-form-row">
                        <div class="industrial-inquiry-form-group">
                            <label class="industrial-inquiry-form-label" for="userName<?= $id; ?>">
                                Full Name <span class="required">*</span>
                            </label>
                            <div class="industrial-inquiry-input-wrapper">
                                <input 
                                    type="text" 
                                    class="industrial-inquiry-form-control" 
                                    id="userName<?= $id; ?>" 
                                    name="name" 
                                    placeholder="Enter your full name"
                                    required>
                                <i class="fas fa-user industrial-inquiry-input-icon"></i>
                            </div>
                        </div>

                        <div class="industrial-inquiry-form-group">
                            <label class="industrial-inquiry-form-label" for="userPhone<?= $id; ?>">
                                Phone Number <span class="required">*</span>
                            </label>
                            <div class="industrial-inquiry-input-wrapper">
                                <input 
                                    type="tel" 
                                    class="industrial-inquiry-form-control" 
                                    id="userPhone<?= $id; ?>" 
                                    name="number" 
                                    maxlength="10" 
                                    placeholder="Enter 10-digit phone number"
                                    required>
                                <i class="fas fa-phone industrial-inquiry-input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Company & Email Row -->
                    <div class="industrial-inquiry-form">
                        <div class="industrial-inquiry-form-group">
                            <label class="industrial-inquiry-form-label" for="userEmail<?= $id; ?>">
                                Email Address <span class="required">*</span>
                            </label>
                            <div class="industrial-inquiry-input-wrapper">
                                <input 
                                    type="email" 
                                    class="industrial-inquiry-form-control" 
                                    id="userEmail<?= $id; ?>" 
                                    name="email" 
                                    placeholder="Enter your email address"
                                    required>
                                <i class="fas fa-envelope industrial-inquiry-input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="industrial-inquiry-form-group">
                        <label class="industrial-inquiry-form-label" for="userMessage<?= $id; ?>">
                            Project Details <span class="required">*</span>
                        </label>
                        <div class="industrial-inquiry-input-wrapper">
                            <textarea 
                                class="industrial-inquiry-form-control" 
                                id="userMessage<?= $id; ?>" 
                                name="message" 
                                placeholder="Describe your manufacturing requirements, specifications, quantity, and timeline..."
                                rows="5"
                                required></textarea>
                            <i class="fas fa-pen-fancy industrial-inquiry-input-icon" style="top: 25px;"></i>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="industrial-inquiry-submit-wrapper">
                        <button 
                            type="button" 
                            class="industrial-inquiry-submit-btn sendMessage" 
                            id="sendMessage<?= $id; ?>" 
                            onclick="sendMessage(<?= $id; ?>)">
                            <span>Send Inquiry</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <p class="industrial-inquiry-form-note">
                            <i class="fas fa-lock me-1"></i>We respect your privacy. Your information is secure.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Show Alert Function
    function showIndustrialAlert(message, type, id) {
        const alertHTML = `
            <div class="industrial-inquiry-alert industrial-inquiry-alert-${type}">
                <i class="fas fa-${type === 'success' ? 'check' : 'exclamation'}-circle"></i>
                <span>${message}</span>
            </div>
        `;
        
        const form = document.querySelector('#inquiryForm' + id);
        const existingAlert = form.querySelector('.industrial-inquiry-alert');
        
        if (existingAlert) {
            existingAlert.remove();
        }
        
        form.insertAdjacentHTML('afterbegin', alertHTML);
        
        setTimeout(() => {
            const alert = form.querySelector('.industrial-inquiry-alert');
            if (alert) {
                alert.style.animation = 'alert-slideOut 0.4s ease';
                setTimeout(() => alert.remove(), 400);
            }
        }, 5000);
    }

    // Send Message Function
    function sendIndustrialMessage(id) {
        const form = document.querySelector('#inquiryForm' + id);
        const name = form.querySelector('input[name="name"]').value.trim();
        const phone = form.querySelector('input[name="number"]').value.trim();
        const company = form.querySelector('input[name="company"]').value.trim();
        const email = form.querySelector('input[name="email"]').value.trim();
        const message = form.querySelector('textarea[name="message"]').value.trim();
        
        // Validate fields
        if (!name || !phone || !email || !message || !company) {
            showIndustrialAlert('Please fill in all required fields', 'danger', id);
            return;
        }
        
        // Validate phone
        if (!/^\d{10}$/.test(phone)) {
            showIndustrialAlert('Please enter a valid 10-digit phone number', 'danger', id);
            return;
        }
        
        // Validate email
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showIndustrialAlert('Please enter a valid email address', 'danger', id);
            return;
        }
        
        // Get selected services
        const services = Array.from(form.querySelectorAll('input[name="services"]:checked')).map(el => el.value).join(', ');
        
        // Set loading state
        const btn = document.getElementById('sendMessage' + id);
        btn.classList.add('loading');
        btn.disabled = true;
        btn.innerHTML = '<span>Sending...</span><i class="fas fa-spinner fa-spin"></i>';
        
        // Send data
        fetch(base_url + 'send-inquiry', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: name,
                phone: phone,
                company: company,
                email: email,
                message: message,
                services: services
            })
        })
        .then(response => response.json())
        .then(data => {
            btn.classList.remove('loading');
            btn.disabled = false;
            btn.innerHTML = '<span>Send Inquiry</span><i class="fas fa-paper-plane"></i>';
            
            if (data.success) {
                showIndustrialAlert('Inquiry sent successfully! We\'ll contact you shortly with a quote.', 'success', id);
                form.reset();
            } else {
                showIndustrialAlert(data.message || 'Error sending inquiry. Please try again.', 'danger', id);
            }
        })
        .catch(error => {
            btn.classList.remove('loading');
            btn.disabled = false;
            btn.innerHTML = '<span>Send Inquiry</span><i class="fas fa-paper-plane"></i>';
            showIndustrialAlert('Error sending inquiry. Please try again later.', 'danger', id);
        });
    }

    // Add CSS animation for alert slide out
    if (!document.querySelector('#alertStyles')) {
        const style = document.createElement('style');
        style.id = 'alertStyles';
        style.textContent = `
            @keyframes alert-slideOut {
                to {
                    opacity: 0;
                    transform: translateY(-10px);
                }
            }
        `;
        document.head.appendChild(style);
    }
</script>
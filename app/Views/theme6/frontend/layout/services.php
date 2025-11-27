<?php
$heading = "";
if (!empty($services)) {
    foreach ($services as $service) {
        $heading = $service['sub_menu_name'];
        unset($service['sub_menu_name']);
        if ($service['section_id'] == $myurl['section_id']) {
            if(isset($service['section_id'])){
                unset($service['section_id']);
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
/* ===== INDUSTRIAL EDGE PRO - SERVICES SECTION STYLES ===== */
/* Manufacturing services with 3D flip card effects */

/* ===== WRAPPER ===== */
.industrial-services-innovative-wrapper {
    position: relative;
    background: var(--color-background);
    color: var(--color-text);
    padding: calc(var(--space-32) * 3) 0;
    overflow: hidden;
}

.industrial-services-mesh-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        linear-gradient(45deg, transparent 48%, var(--primary-color) 49%, var(--primary-color) 51%, transparent 52%),
        linear-gradient(-45deg, transparent 48%, var(--color-teal-500) 49%, var(--color-teal-500) 51%, transparent 52%);
    background-size: 150px 150px;
    opacity: 0.03;
    z-index: 0;
}

/* ===== HEADER ===== */
.industrial-services-header {
    text-align: center;
    margin-bottom: calc(var(--space-32) * 2);
    position: relative;
    z-index: 1;
}

.industrial-services-title {
    font-size: var(--font-size-4xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    color: var(--color-text);
    line-height: var(--line-height-tight);
}

.industrial-services-accent {
    color: var(--primary-color);
    display: block;
}

.industrial-services-subtitle {
    color: var(--color-text-secondary);
    font-size: var(--font-size-xl);
    max-width: 700px;
    margin: 0 auto;
    line-height: var(--line-height-normal);
}

/* ===== SERVICES GRID ===== */
.industrial-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: calc(var(--space-16) + var(--space-4));
    position: relative;
    z-index: 1;
    perspective: 1000px;
}

/* ===== SERVICE CARD ===== */
.industrial-service-card {
    height: 380px;
    position: relative;
    cursor: pointer;
}

.industrial-service-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 600ms var(--ease-standard);
    transform-style: preserve-3d;
}

.industrial-service-card:hover .industrial-service-card-inner {
    transform: rotateY(180deg);
}

/* ===== CARD FACES ===== */
.industrial-service-card-front,
.industrial-service-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: var(--space-24);
    border-radius: var(--radius-lg);
    border: 1px solid var(--color-border);
    box-shadow: var(--shadow-sm);
}

.industrial-service-card-front {
    background: linear-gradient(135deg, var(--color-surface) 0%, rgba(var(--color-charcoal-700), 0.8) 100%);
    z-index: 2;
}

.industrial-service-card-back {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--color-orange-400) 100%);
    transform: rotateY(180deg);
    z-index: 1;
    color: var(--color-slate-900);
}

/* ===== FRONT CONTENT ===== */
.industrial-service-front-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.industrial-service-icon-large {
    width: 80px;
    height: 80px;
    background: rgba(var(--primary-color), 0.15);
    border: 2px solid var(--primary-color);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--space-20);
    font-size: var(--font-size-4xl);
    color: var(--primary-color);
    transition: all var(--duration-normal) var(--ease-standard);
}

.industrial-service-card:hover .industrial-service-icon-large {
    transform: scale(1.1) rotateZ(-10deg);
}

.industrial-service-title-front {
    color: var(--primary-color);
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    line-height: var(--line-height-tight);
}

.industrial-service-description-front {
    color: var(--color-text-secondary);
    font-size: var(--font-size-md);
    line-height: var(--line-height-normal);
    margin-bottom: 0;
}

.industrial-service-cta-front {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-8);
    color: var(--color-teal-500);
    font-weight: var(--font-weight-semibold);
    font-size: var(--font-size-sm);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    margin-top: var(--space-20);
    transition: all var(--duration-normal) var(--ease-standard);
}

.industrial-service-card:hover .industrial-service-cta-front {
    color: var(--primary-color);
    gap: var(--space-12);
}

/* ===== BACK CONTENT ===== */
.industrial-service-back-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    justify-content: space-between;
    height: 100%;
}

.industrial-service-icon-small {
    font-size: var(--font-size-4xl);
    margin-bottom: var(--space-10);
    opacity: 0.9;
}

.industrial-service-title-back {
    color: var(--color-slate-900);
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--space-16);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    line-height: var(--line-height-tight);
}

/* ===== FEATURES ===== */
.industrial-service-features {
    display: flex;
    flex-direction: column;
    gap: var(--space-10);
    margin: var(--space-16) 0;
    flex-grow: 1;
    justify-content: center;
}

.industrial-service-feature {
    display: flex;
    align-items: center;
    gap: var(--space-8);
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    color: var(--color-slate-900);
}

.industrial-service-feature i {
    font-size: var(--font-size-sm);
    color: var(--color-slate-900);
    opacity: 0.9;
}

/* ===== CTA BUTTON ===== */
.industrial-service-cta-back {
    background: var(--color-slate-900);
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
    padding: var(--space-10) var(--space-20);
    border-radius: var(--radius-sm);
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-sm);
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    text-transform: uppercase;
    letter-spacing: var(--letter-spacing-tight);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-6);
}

.industrial-service-cta-back:hover {
    background: var(--primary-color);
    color: var(--color-slate-900);
    transform: scale(1.05);
}

/* ===== ANIMATION ===== */
@keyframes zoomInUp {
    from {
        opacity: 0;
        transform: translateY(var(--space-32)) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.industrial-service-card-animate {
    animation: zoomInUp 0.6s ease-out forwards;
    opacity: 0;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .industrial-services-title {
        font-size: var(--font-size-3xl);
    }

    .industrial-services-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--space-24);
    }

    .industrial-service-card {
        height: 360px;
    }
}

@media (max-width: 768px) {
    .industrial-services-innovative-wrapper {
        padding: calc(var(--space-32) * 2) 0;
    }

    .industrial-services-header {
        margin-bottom: calc(var(--space-32) + var(--space-16));
    }

    .industrial-services-title {
        font-size: var(--font-size-2xl);
    }

    .industrial-services-subtitle {
        font-size: var(--font-size-lg);
    }

    .industrial-services-grid {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: calc(var(--space-16) + var(--space-8));
    }

    .industrial-service-card {
        height: 340px;
    }

    .industrial-service-card-front,
    .industrial-service-card-back {
        padding: var(--space-20);
    }

    .industrial-service-icon-large {
        width: 70px;
        height: 70px;
        font-size: var(--font-size-3xl);
    }

    .industrial-service-title-front,
    .industrial-service-title-back {
        font-size: var(--font-size-xl);
    }

    .industrial-service-description-front {
        font-size: var(--font-size-sm);
    }
}

@media (max-width: 576px) {
    .industrial-services-innovative-wrapper {
        padding: calc(var(--space-24) + var(--space-16)) 0;
    }

    .industrial-services-title {
        font-size: var(--font-size-xl);
    }

    .industrial-services-subtitle {
        font-size: var(--font-size-md);
    }

    .industrial-services-grid {
        grid-template-columns: 1fr;
        gap: var(--space-20);
    }

    .industrial-service-card {
        height: 320px;
    }

    .industrial-service-card-front,
    .industrial-service-card-back {
        padding: var(--space-16);
    }

    .industrial-service-icon-large {
        width: 60px;
        height: 60px;
        font-size: var(--font-size-2xl);
    }

    .industrial-service-title-front,
    .industrial-service-title-back {
        font-size: var(--font-size-lg);
    }

    .industrial-service-feature {
        font-size: var(--font-size-xs);
    }

    .industrial-service-cta-back {
        padding: var(--space-8) var(--space-16);
        font-size: var(--font-size-xs);
    }
}

@media (max-width: 480px) {
    .industrial-services-innovative-wrapper {
        padding: var(--space-32) 0;
    }

    .industrial-services-header {
        margin-bottom: var(--space-32);
    }

    .industrial-services-title {
        font-size: var(--font-size-lg);
        margin-bottom: var(--space-12);
    }

    .industrial-services-subtitle {
        font-size: var(--font-size-sm);
    }

    .industrial-services-grid {
        gap: var(--space-16);
    }

    .industrial-service-card {
        height: 300px;
    }

    .industrial-service-card-front,
    .industrial-service-card-back {
        padding: var(--space-12);
    }

    .industrial-service-icon-large {
        width: 50px;
        height: 50px;
        font-size: var(--font-size-xl);
        margin-bottom: var(--space-16);
    }

    .industrial-service-title-front,
    .industrial-service-title-back {
        font-size: var(--font-size-md);
        margin-bottom: var(--space-12);
    }

    .industrial-service-description-front {
        font-size: var(--font-size-xs);
    }

    .industrial-service-cta-front {
        margin-top: var(--space-16);
        font-size: var(--font-size-xs);
    }

    .industrial-service-features {
        gap: var(--space-8);
        margin: var(--space-12) 0;
    }

    .industrial-service-feature {
        font-size: var(--font-size-xs);
    }

    .industrial-service-cta-back {
        padding: var(--space-6) var(--space-12);
        font-size: var(--font-size-xs);
    }
}
</style>

<!-- ===== INDUSTRIAL EDGE PRO - MANUFACTURING SERVICES SECTION ===== -->
<section class="industrial-services-innovative-wrapper">
    <!-- Mesh Gradient Background -->
    <div class="industrial-services-mesh-bg"></div>

    <div class="container">
        <!-- Header -->
        <div class="industrial-services-header" data-aos="fade-down" data-aos-duration="900">
            <h2 class="industrial-services-title">
                Our <span class="industrial-services-accent"><?= htmlspecialchars($heading); ?></span>
            </h2>
            <p class="industrial-services-subtitle">
                Comprehensive manufacturing solutions with cutting-edge technology and precision engineering designed for your production excellence.
            </p>
        </div>

        <!-- Services Grid with 3D Flip Cards -->
        <div class="industrial-services-grid">
            <?php
            $cardIndex = 0;
            foreach ($service as $s) {
                $serviceTitle = htmlspecialchars($s['service'] ?? 'Service');
                $description = htmlspecialchars(substr($s['description'] ?? '', 0, 80));
                $url = base_url() . '/services/' . htmlspecialchars($s['menu_link'] ?? '#');
                $animationDelay = $cardIndex * 100;
                $cardIndex++;
                
                // Array of manufacturing capabilities
                $features = [
                    '✓ Expert Manufacturing Engineers',
                    '✓ Advanced CNC Technology',
                    '✓ Quality Assured Production'
                ];
            ?>
                <div class="industrial-service-card industrial-service-card-animate" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;">

                    <!-- Card Inner (for 3D flip) -->
                    <div class="industrial-service-card-inner">
                        
                        <!-- Front Face -->
                        <div class="industrial-service-card-front">
                            <div class="industrial-service-front-content">
                                <!-- Icon -->
                                <div class="industrial-service-icon-large">
                                    <i class="fas fa-cogs"></i>
                                </div>

                                <!-- Title -->
                                <h3 class="industrial-service-title-front">
                                    <?= $serviceTitle; ?>
                                </h3>

                                <!-- Description -->
                                <?php if (!empty($s['description'])): ?>
                                    <p class="industrial-service-description-front">
                                        <?= $description; ?>...
                                    </p>
                                <?php endif; ?>
                            </div>

                            <!-- CTA -->
                            <div class="industrial-service-cta-front">
                                <span>Hover for Details</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>

                        <!-- Back Face (Flip Side) -->
                        <div class="industrial-service-card-back">
                            <div class="industrial-service-back-content">
                                <!-- Small Icon -->
                                <div class="industrial-service-icon-small">
                                    <i class="fas fa-hammer"></i>
                                </div>

                                <!-- Title -->
                                <h3 class="industrial-service-title-back">
                                    <?= $serviceTitle; ?>
                                </h3>

                                <!-- Features -->
                                <div class="industrial-service-features">
                                    <?php foreach ($features as $feature): ?>
                                        <div class="industrial-service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <span><?= $feature; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- CTA Button -->
                                <a href="<?= $url; ?>" style="text-decoration: none;">
                                    <button class="industrial-service-cta-back">
                                        <i class="fas fa-arrow-right me-2"></i>Explore
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
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
        const cards = document.querySelectorAll('.industrial-service-card-animate');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 100) + 'ms';
        });

        // 3D Flip functionality
        const flipCards = document.querySelectorAll('.industrial-service-card-inner');
        flipCards.forEach(card => {
            card.style.transformStyle = 'preserve-3d';
        });
    });
</script>

<?php 
        }    
    }
}
?>
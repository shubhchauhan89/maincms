<style>


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
    /* ===== INDUSTRIAL EDGE PRO - CUSTOM FLEXIBLE SECTION STYLES ===== */
    /* Flexible layout: Full width, Normal (image smaller), or Stretch (image full height) */

    /* ===== WRAPPER ===== */
    .industrial-custom-section-wrapper {
        position: relative;
        padding: 50px 0;
        background: var(--color-background);
        overflow: hidden;
    }

    /* Animated Background */
    .industrial-custom-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--color-primary) 0%, transparent 50%),
            linear-gradient(135deg, var(--color-teal-600) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: custom-bg-shift 800ms ease infinite;
    }

    @keyframes custom-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Main Container */
    .industrial-custom-container {
        position: relative;
        z-index: 1;
        max-width: var(--container-xl);
        margin: 0 auto;
        padding: 0 var(--space-20);
    }

    /* Grid Layouts */
    .industrial-custom-grid {
        display: grid;
        align-items: center;
        gap: var(--space-32);
    }

    /* Full Width - No Image */
    .industrial-custom-grid.layout-full {
        grid-template-columns: 1fr;
    }

    /* Normal Layout - Left Image */
    .industrial-custom-grid.layout-normal-left {
        grid-template-columns: 350px 1fr;
    }

    /* Normal Layout - Right Image */
    .industrial-custom-grid.layout-normal-right {
        grid-template-columns: 1fr 350px;
    }

    /* Stretch Layout - Left Image */
    .industrial-custom-grid.layout-stretch-left {
        grid-template-columns: 1fr 1fr;
        height: 600px;
    }

    /* Stretch Layout - Right Image */
    .industrial-custom-grid.layout-stretch-right {
        grid-template-columns: 1fr 1fr;
        height: 600px;
    }

    /* Reorder for left image */
    .industrial-custom-grid.layout-normal-left .industrial-custom-image-section,
    .industrial-custom-grid.layout-stretch-left .industrial-custom-image-section {
        order: -1;
    }

    /* Content Section */
    .industrial-custom-content {
        position: relative;
        z-index: 2;
    }

    .industrial-custom-shape-accent {
        position: absolute;
        top: -50px;
        left: -50px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, var(--color-primary), transparent);
        border-radius: var(--radius-full);
        opacity: 0.1;
        filter: blur(50px);
        animation: float-accent 15s ease-in-out infinite;
    }

    @keyframes float-accent {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(var(--space-32), -50px); }
    }

    .industrial-custom-content-inner {
        position: relative;
        z-index: 3;
    }

    /* Heading */
    .industrial-custom-heading {
        font-size: var(--font-size-4xl);
        font-weight: var(--font-weight-bold);
        margin-bottom: var(--space-24);
        letter-spacing: var(--letter-spacing-tight);
        color: var(--color-text);
        line-height: var(--line-height-tight);
        text-transform: uppercase;
    }

    .industrial-custom-heading span {
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-teal-600) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Description */
    .industrial-custom-description {
        font-size: var(--font-size-base);
        line-height: var(--line-height-normal);
        color: var(--color-text-secondary);
        margin-bottom: var(--space-24);
    }

    .industrial-custom-description p {
        margin-bottom: var(--space-16);
    }

    .industrial-custom-description strong {
        color: var(--color-text);
        font-weight: var(--font-weight-bold);
    }

    /* Features */
    .industrial-custom-features {
        display: flex;
        flex-wrap: wrap;
        gap: var(--space-16);
        margin-bottom: var(--space-32);
    }

    .industrial-custom-feature-pill {
        display: inline-flex;
        align-items: center;
        gap: var(--space-8);
        padding: var(--space-10) var(--space-16);
        background: linear-gradient(135deg, rgba(var(--primary-color), 0.1), rgba(var(--color-teal-600-rgb), 0.1));
        color: var(--primary-color);
        border-radius: var(--radius-full);
        font-size: var(--font-size-sm);
        font-weight: var(--font-weight-semibold);
        border: 1px solid rgba(var(--primary-color), 0.2);
        transition: all var(--duration-normal) var(--ease-standard);
    }

    .industrial-custom-feature-pill:hover {
        background: var(--color-primary);
        color: var(--color-btn-primary-text);
        transform: translateY(-2px);
        border-color: var(--color-primary);
    }

    .industrial-custom-feature-pill i {
        color: var(--color-success);
    }

    /* CTA Button */
    .industrial-custom-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: var(--space-8);
        padding: var(--space-16) var(--space-32);
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-hover) 100%);
        color: var(--color-btn-primary-text);
        border: none;
        border-radius: var(--radius-base);
        font-weight: var(--font-weight-bold);
        font-size: var(--font-size-base);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        cursor: pointer;
        transition: all var(--duration-normal) var(--ease-standard);
        position: relative;
        overflow: hidden;
    }

    .industrial-custom-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: var(--radius-full);
        background: rgba(var(--color-white-rgb, 255, 255, 255), 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .industrial-custom-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .industrial-custom-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-lg);
    }

    .industrial-custom-btn:focus-visible {
        outline: none;
        box-shadow: var(--focus-ring);
    }

    /* Image Section */
    .industrial-custom-image-section {
        position: relative;
        height: 100%;
    }

    .industrial-custom-image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
    }

    /* Normal Layout Image */
    .layout-normal-left .industrial-custom-image-wrapper,
    .layout-normal-right .industrial-custom-image-wrapper {
        height: 350px;
    }

    .industrial-custom-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s var(--ease-standard);
    }

    .industrial-custom-image-wrapper:hover .industrial-custom-image {
        transform: scale(1.1) rotate(2deg);
    }

    /* Image Overlay */
    .industrial-custom-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(var(--primary-color), 0.15), transparent);
        opacity: 0;
        transition: opacity var(--duration-normal) var(--ease-standard);
    }

    .industrial-custom-image-wrapper:hover .industrial-custom-image-overlay {
        opacity: 1;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .industrial-custom-heading {
            font-size: var(--font-size-3xl);
        }
        .industrial-custom-grid {
            gap: var(--space-24);
        }
        .industrial-custom-grid.layout-stretch-left,
        .industrial-custom-grid.layout-stretch-right {
            height: auto;
        }
    }

    @media (max-width: 991px) {
        .industrial-custom-section-wrapper {
            padding: var(--space-24) 0;
        }
        .industrial-custom-heading {
            font-size: var(--font-size-2xl);
        }
        .industrial-custom-grid.layout-normal-left,
        .industrial-custom-grid.layout-normal-right,
        .industrial-custom-grid.layout-stretch-left,
        .industrial-custom-grid.layout-stretch-right {
            grid-template-columns: 1fr;
        }
        .industrial-custom-grid.layout-normal-left .industrial-custom-image-section,
        .industrial-custom-grid.layout-stretch-left .industrial-custom-image-section {
            order: 0;
        }
        .industrial-custom-image-wrapper {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .industrial-custom-section-wrapper {
            padding: var(--space-20) 0;
        }
        .industrial-custom-container {
            padding: 0 var(--space-16);
        }
        .industrial-custom-heading {
            font-size: var(--font-size-xl);
        }
        .industrial-custom-description {
            font-size: var(--font-size-sm);
        }
        .industrial-custom-features {
            gap: var(--space-10);
        }
        .industrial-custom-feature-pill {
            font-size: var(--font-size-xs);
            padding: var(--space-8) var(--space-12);
        }
        .industrial-custom-image-wrapper {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .industrial-custom-heading {
            font-size: var(--font-size-lg);
        }
        .industrial-custom-btn {
            width: 100%;
            padding: var(--space-12) var(--space-24);
        }
        .industrial-custom-image-wrapper {
            height: 200px;
        }
    }

    @media (max-width: 480px) {
        .industrial-custom-section-wrapper {
            padding: var(--space-16) 0;
        }
        .industrial-custom-container {
            padding: 0 var(--space-12);
        }
        .industrial-custom-heading {
            font-size: var(--font-size-md);
            margin-bottom: var(--space-16);
        }
        .industrial-custom-description {
            margin-bottom: var(--space-16);
        }
        .industrial-custom-features {
            margin-bottom: var(--space-20);
            gap: var(--space-8);
        }
        .industrial-custom-feature-pill {
            padding: var(--space-6) var(--space-10);
        }
        .industrial-custom-btn {
            font-size: var(--font-size-sm);
            padding: var(--space-10) var(--space-16);
        }
        .industrial-custom-image-wrapper {
            height: 180px;
        }
        .industrial-custom-grid {
            gap: var(--space-16);
        }
    }
</style>

<?php
// Determine layout options
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;
$hasImage = $hasImage ?? 'yes';

// Determine layout class
$layoutClass = 'layout-full';
if ($hasImage === "yes") {
    if ($isStretch) {
        $layoutClass = $imageOnLeft ? 'layout-stretch-left' : 'layout-stretch-right';
    } else {
        $layoutClass = $imageOnLeft ? 'layout-normal-left' : 'layout-normal-right';
    }
}
?>

<!-- ===== INDUSTRIAL EDGE PRO - CUSTOM FLEXIBLE SECTION ===== -->
<section class="industrial-custom-section-wrapper">
    <!-- Animated Background -->
    <div class="industrial-custom-bg"></div>

    <div class="industrial-custom-container">
        <div class="industrial-custom-grid <?= $layoutClass; ?>">
            
            <!-- Content Section -->
            <div class="industrial-custom-content"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="industrial-custom-shape-accent"></div>

                <div class="industrial-custom-content-inner">
                    <!-- Heading -->
                    <h2 class="industrial-custom-heading">
                        <?= htmlspecialchars($custom['heading'] ?? 'Manufacturing Excellence'); ?>
                    </h2>

                    <!-- Description -->
                    <div class="industrial-custom-description">
                        <?= $custom['description'] ?? '<p>Advanced manufacturing solutions designed for your production needs</p>'; ?>
                    </div>

                    <!-- Feature Pills -->
                    <div class="industrial-custom-features">
                        <div class="industrial-custom-feature-pill">
                            <i class="fas fa-check-circle"></i>
                            Quality Certified
                        </div>
                        <div class="industrial-custom-feature-pill">
                            <i class="fas fa-bolt"></i>
                            Fast Production
                        </div>
                        <div class="industrial-custom-feature-pill">
                            <i class="fas fa-shield-alt"></i>
                            Fully Tested
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <button class="industrial-custom-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#rfqModal">
                        <i class="fas fa-arrow-right"></i>
                        Request Quote Today
                    </button>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="industrial-custom-image-section"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="industrial-custom-image-wrapper">
                    <img src="<?= htmlspecialchars($img ?? base_url() . '/public/assets/img/default-section.jpg'); ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Manufacturing'); ?>" 
                         class="industrial-custom-image"
                         loading="lazy">
                    <div class="industrial-custom-image-overlay"></div>
                </div>
            </div>
            <?php endif; ?>
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
    });
</script>

<?php
?>
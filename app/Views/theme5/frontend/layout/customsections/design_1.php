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

<style>
    /* ===== REVOLUTIONARY MEDICAL CUSTOM SECTION ===== */
    
    .medical-custom-section-wrapper {
        position: relative;
        padding: 120px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .medical-custom-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.08;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(135deg, var(--medical-teal, #008080) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: custom-bg-shift 20s ease infinite;
    }

    @keyframes custom-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Main Container */
    .medical-custom-container {
        position: relative;
        z-index: 1;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Grid Layouts */
    .medical-custom-grid {
        display: grid;
        align-items: center;
        gap: 60px;
    }

    /* Full Width - No Image */
    .medical-custom-grid.layout-full {
        grid-template-columns: 1fr;
    }

    /* Normal Layout - Left Image */
    .medical-custom-grid.layout-normal-left {
        grid-template-columns: 350px 1fr;
    }

    /* Normal Layout - Right Image */
    .medical-custom-grid.layout-normal-right {
        grid-template-columns: 1fr 350px;
    }

    /* Stretch Layout - Left Image */
    .medical-custom-grid.layout-stretch-left {
        grid-template-columns: 1fr 1fr;
        height: 600px;
    }

    /* Stretch Layout - Right Image */
    .medical-custom-grid.layout-stretch-right {
        grid-template-columns: 1fr 1fr;
        height: 600px;
    }

    /* Reorder for left image */
    .medical-custom-grid.layout-normal-left .medical-custom-image-section,
    .medical-custom-grid.layout-stretch-left .medical-custom-image-section {
        order: -1;
    }

    /* Content Section */
    .medical-custom-content {
        position: relative;
        z-index: 2;
    }

    .medical-custom-shape-accent {
        position: absolute;
        top: -50px;
        left: -50px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, var(--medical-teal, #008080), transparent);
        border-radius: 50%;
        opacity: 0.1;
        filter: blur(50px);
        animation: float-accent 15s ease-in-out infinite;
    }

    @keyframes float-accent {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, -50px); }
    }

    .medical-custom-content-inner {
        position: relative;
        z-index: 3;
    }

    /* Heading */
    .medical-custom-heading {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 25px;
        letter-spacing: -1px;
        color: var(--text-dark);
        line-height: 1.2;
    }

    .medical-custom-heading span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Description */
    .medical-custom-description {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
        margin-bottom: 30px;
    }

    .medical-custom-description p {
        margin-bottom: 15px;
    }

    .medical-custom-description strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    /* Features */
    .medical-custom-features {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 35px;
    }

    .medical-custom-feature-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
        color: var(--medical-teal, #008080);
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        border: 1px solid rgba(0, 128, 128, 0.2);
        transition: all 0.3s ease;
    }

    .medical-custom-feature-pill:hover {
        background: var(--medical-teal, #008080);
        color: white;
        transform: translateY(-2px);
    }

    .medical-custom-feature-pill i {
        color: var(--trust-green, #28a745);
    }

    /* CTA Button */
    .medical-custom-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 16px 40px;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .medical-custom-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .medical-custom-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .medical-custom-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 128, 128, 0.3);
    }

    /* Image Section */
    .medical-custom-image-section {
        position: relative;
        height: 100%;
    }

    .medical-custom-image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    /* Normal Layout Image */
    .layout-normal-left .medical-custom-image-wrapper,
    .layout-normal-right .medical-custom-image-wrapper {
        height: 350px;
    }

    .medical-custom-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-custom-image-wrapper:hover .medical-custom-image {
        transform: scale(1.1) rotate(2deg);
    }

    /* Image Overlay */
    .medical-custom-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 61, 122, 0.2), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .medical-custom-image-wrapper:hover .medical-custom-image-overlay {
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-custom-heading {
            font-size: 40px;
        }
        .medical-custom-grid {
            gap: 40px;
        }
        .medical-custom-grid.layout-stretch-left,
        .medical-custom-grid.layout-stretch-right {
            height: auto;
        }
    }

    @media (max-width: 991px) {
        .medical-custom-section-wrapper {
            padding: 80px 0;
        }
        .medical-custom-heading {
            font-size: 36px;
        }
        .medical-custom-grid.layout-normal-left,
        .medical-custom-grid.layout-normal-right,
        .medical-custom-grid.layout-stretch-left,
        .medical-custom-grid.layout-stretch-right {
            grid-template-columns: 1fr;
        }
        .medical-custom-grid.layout-normal-left .medical-custom-image-section,
        .medical-custom-grid.layout-stretch-left .medical-custom-image-section {
            order: 0;
        }
        .medical-custom-image-wrapper {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .medical-custom-section-wrapper {
            padding: 60px 0;
        }
        .medical-custom-heading {
            font-size: 32px;
        }
        .medical-custom-description {
            font-size: 14px;
        }
        .medical-custom-features {
            gap: 10px;
        }
        .medical-custom-feature-pill {
            font-size: 12px;
            padding: 8px 12px;
        }
        .medical-custom-image-wrapper {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .medical-custom-heading {
            font-size: 28px;
        }
        .medical-custom-btn {
            width: 100%;
            padding: 14px 24px;
        }
        .medical-custom-image-wrapper {
            height: 200px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-custom-image-wrapper {
        box-shadow: 0 20px 60px rgba(0, 128, 128, 0.2);
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL CUSTOM SECTION ===== -->
<section class="medical-custom-section-wrapper">
    <!-- Animated Background -->
    <div class="medical-custom-bg"></div>

    <div class="medical-custom-container">
        <div class="medical-custom-grid <?= $layoutClass; ?>">
            
            <!-- Content Section -->
            <div class="medical-custom-content"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="medical-custom-shape-accent"></div>

                <div class="medical-custom-content-inner">
                    <!-- Heading -->
                    <h2 class="medical-custom-heading">
                        <?= htmlspecialchars($custom['heading'] ?? 'Section Heading'); ?>
                    </h2>

                    <!-- Description -->
                    <div class="medical-custom-description">
                        <?= $custom['description'] ?? '<p>Section description goes here</p>'; ?>
                    </div>

                    <!-- Feature Pills -->
                    <div class="medical-custom-features">
                        <div class="medical-custom-feature-pill">
                            <i class="fas fa-check-circle"></i>
                            Quality Assured
                        </div>
                        <div class="medical-custom-feature-pill">
                            <i class="fas fa-bolt"></i>
                            Fast Service
                        </div>
                        <div class="medical-custom-feature-pill">
                            <i class="fas fa-shield-alt"></i>
                            Secure & Safe
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <button class="medical-custom-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#inquiryModal">
                        <i class="fas fa-arrow-right"></i>
                        Get Started Today
                    </button>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="medical-custom-image-section"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="medical-custom-image-wrapper">
                    <img src="<?= $img ?? base_url() . '/public/assets/img/default-section.jpg'; ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Section'); ?>" 
                         class="medical-custom-image"
                         loading="lazy">
                    <div class="medical-custom-image-overlay"></div>
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

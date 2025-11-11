<!-- design_1.php - Fixed Image Size for Normal Layouts -->
<style>
    /* ===== CUSTOM SECTION DESIGN 1 - CREATIVE LAYOUTS ===== */
    
    .custom-section-wrapper {
        position: relative;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Background Pattern */
    .custom-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background: var(--theme_mode_color);
        pointer-events: none;
    }

    /* Container */
    .custom-container {
        position: relative;
        z-index: 1;
    }

    /* ===== LAYOUT 1: NORMAL LEFT (Small Image Left, Large Content Right) ===== */
    
    .custom-grid.layout-normal-left {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 0;
        align-items: center;
        min-height: auto;
        padding: 60px 0;
    }

    .custom-grid.layout-normal-left .custom-image-section {
        order: 1;
        overflow: hidden;
        width: 320px;
        height: 380px;
        flex-shrink: 0;
    }

    .custom-grid.layout-normal-left .custom-content {
        order: 2;
        padding: 60px 50px;
        background: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ===== LAYOUT 2: NORMAL RIGHT (Large Content Left, Small Image Right) ===== */
    
    .custom-grid.layout-normal-right {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 0;
        align-items: center;
        min-height: auto;
        padding: 60px 0;
    }

    .custom-grid.layout-normal-right .custom-image-section {
        order: 2;
        overflow: hidden;
        width: 320px;
        height: 380px;
        flex-shrink: 0;
    }

    .custom-grid.layout-normal-right .custom-content {
        order: 1;
        padding: 60px 50px;
        background: var(--theme_mode_color);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ===== LAYOUT 3: STRETCH LEFT (50-50 Split, Image Left with Gradient Content) ===== */
    
    .custom-grid.layout-stretch-left {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .custom-grid.layout-stretch-left .custom-image-section {
        order: 1;
        overflow: hidden;
        min-height: 600px;
    }

    .custom-grid.layout-stretch-left .custom-content {
        order: 2;
        padding: 80px 60px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .custom-grid.layout-stretch-left .custom-content::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(0,0,0,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    /* ===== LAYOUT 4: STRETCH RIGHT (50-50 Split, Content Left with Gradient, Image Right) ===== */
    
    .custom-grid.layout-stretch-right {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .custom-grid.layout-stretch-right .custom-content {
        order: 1;
        padding: 80px 60px;
        background: var(--theme_mode_color);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .custom-grid.layout-stretch-right .custom-content::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(0,0,0,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .custom-grid.layout-stretch-right .custom-image-section {
        order: 2;
        overflow: hidden;
        min-height: 600px;
    }

    /* ===== LAYOUT 5: NO IMAGE (Full Width Content) ===== */
    
    .custom-grid.layout-full {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 0;
    }

    .custom-grid.layout-full .custom-content {
        width: 100%;
        max-width: 900px;
        padding: 60px 50px;
        background: var(--theme_surface_color);
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* === CONTENT SECTION === */
    
    .custom-content {
        position: relative;
        z-index: 2;
    }

    /* Border Animation */
    .custom-grid.layout-normal-left .custom-content::before,
    .custom-grid.layout-normal-right .custom-content::before,
    .custom-grid.layout-stretch-left .custom-content::before,
    .custom-grid.layout-stretch-right .custom-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        animation: borderSlide 0.8s ease-out 0.3s forwards;
    }

    @keyframes borderSlide {
        to { transform: scaleX(1); }
    }

    /* Content Inner */
    .custom-content-inner {
        position: relative;
        z-index: 2;
    }

    /* Heading */
    .custom-heading {
        font-size: 42px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .custom-grid.layout-normal-left .custom-heading,
    .custom-grid.layout-normal-right .custom-heading {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .custom-grid.layout-stretch-left .custom-heading,
    .custom-grid.layout-stretch-right .custom-heading,
    .custom-grid.layout-full .custom-heading {
        color: white;
    }

    .custom-grid.layout-full .custom-heading {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Description */
    .custom-description {
        font-size: 15px;
        line-height: 1.8;
        color: var(--text-dark);
        margin-bottom: 30px;
    }

    .custom-grid.layout-stretch-left .custom-description,
    .custom-grid.layout-stretch-right .custom-description {
        color: var(--text-dark);
    }

    .custom-description p {
        margin-bottom: 15px;
    }

    .custom-description p:last-child {
        margin-bottom: 0;
    }

    .custom-description strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    .custom-grid.layout-stretch-left .custom-description strong,
    .custom-grid.layout-stretch-right .custom-description strong {
        color: var(--text-dark);
    }

    .custom-description ul,
    .custom-description ol {
        margin-left: 25px;
        margin-bottom: 15px;
    }

    .custom-description li {
        margin-bottom: 10px;
    }

    .custom-description a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .custom-grid.layout-stretch-left .custom-description a,
    .custom-grid.layout-stretch-right .custom-description a {
        color: white;
    }

    /* Feature Pills */
    .custom-features {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .custom-feature-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
    }

    .custom-grid.layout-stretch-left .custom-feature-pill,
    .custom-grid.layout-stretch-right .custom-feature-pill {
        background: rgba(255, 255, 255, 0.15);
        color: white;
    }

    .custom-feature-pill i {
        font-size: 14px;
        color: var(--primary-color);
    }

    .custom-grid.layout-stretch-left .custom-feature-pill i,
    .custom-grid.layout-stretch-right .custom-feature-pill i {
        color: white;
    }

    /* CTA Button */
    .custom-btn {
        display: inline-block;
        padding: 14px 40px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .custom-btn::before {
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

    .custom-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .custom-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    .custom-grid.layout-stretch-left .custom-btn,
    .custom-grid.layout-stretch-right .custom-btn {
        background: var(--primary-color);
        color: var(--text-dark);
    }

    /* === IMAGE SECTION === */
    
    .custom-image-section {
        position: relative;
        overflow: hidden;
    }

    .custom-image-wrapper {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .custom-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .custom-image-section:hover .custom-image {
        transform: scale(1.08);
    }

    /* Image Overlay */
    .custom-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, transparent 0%, rgba(0,0,0,0.3) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .custom-image-section:hover .custom-image-overlay {
        opacity: 1;
    }

    /* Decorative Element */
    .custom-shape-accent {
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(var(--bs-primary-rgb), 0.05);
        opacity: 0.5;
        z-index: 0;
    }

    .custom-grid.layout-stretch-left .custom-content .custom-shape-accent {
        bottom: -100px;
        right: -100px;
    }

    .custom-grid.layout-stretch-right .custom-content .custom-shape-accent {
        bottom: -100px;
        left: -100px;
    }

    /* === RESPONSIVE === */
    
    @media (max-width: 1200px) {
        .custom-heading {
            font-size: 36px;
        }

        .custom-grid.layout-normal-left .custom-image-section,
        .custom-grid.layout-normal-right .custom-image-section {
            width: 280px;
            height: 340px;
        }

        .custom-grid.layout-normal-left .custom-content,
        .custom-grid.layout-normal-right .custom-content {
            padding: 50px 40px;
        }
    }

    @media (max-width: 991px) {
        /* Stack vertically on tablet */
        .custom-grid.layout-normal-left,
        .custom-grid.layout-normal-right,
        .custom-grid.layout-stretch-left,
        .custom-grid.layout-stretch-right {
            grid-template-columns: 1fr !important;
            padding: 40px 0 !important;
        }

        .custom-grid.layout-normal-left .custom-image-section,
        .custom-grid.layout-normal-right .custom-image-section {
            width: 100% !important;
            height: 300px !important;
            order: 1 !important;
        }

        .custom-grid.layout-normal-left .custom-content,
        .custom-grid.layout-normal-right .custom-content {
            order: 2 !important;
            padding: 40px 30px;
        }

        .custom-grid.layout-stretch-left .custom-image-section,
        .custom-grid.layout-stretch-right .custom-image-section {
            min-height: 350px !important;
        }

        .custom-grid.layout-stretch-left .custom-content,
        .custom-grid.layout-stretch-right .custom-content {
            min-height: 350px !important;
            padding: 40px 30px !important;
        }

        .custom-heading {
            font-size: 32px;
        }

        .custom-features {
            justify-content: flex-start;
        }
    }

    @media (max-width: 768px) {
        .custom-content {
            padding: 30px 20px !important;
        }

        .custom-heading {
            font-size: 28px;
            margin-bottom: 16px;
        }

        .custom-description {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .custom-image-section {
            min-height: 280px !important;
        }

        .custom-features {
            gap: 10px;
        }

        .custom-feature-pill {
            padding: 8px 14px;
            font-size: 12px;
        }

        .custom-grid.layout-full {
            padding: 60px 20px;
        }

        .custom-grid.layout-full .custom-content {
            padding: 30px 25px;
            border-radius: 12px;
        }
    }

    @media (max-width: 576px) {
        .custom-heading {
            font-size: 24px;
        }

        .custom-description {
            font-size: 13px;
        }

        .custom-btn {
            width: 100%;
            padding: 12px 30px;
        }

        .custom-image-section {
            min-height: 250px !important;
        }

        .custom-features {
            flex-direction: column;
            align-items: flex-start;
        }

        .custom-feature-pill {
            width: 100%;
            justify-content: flex-start;
        }

        .custom-grid.layout-full {
            padding: 50px 0;
        }

        .custom-grid.layout-full .custom-content {
            margin: 0 20px;
        }
    }
</style>

<?php
// Determine layout based on position and image option
// $hasImage = $hasImage ?? false;
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;

// Determine which layout to use
$layoutClass = 'layout-full'; // Default: no image

if ($hasImage === "yes") {
    if ($isStretch) {
        // Stretch layouts - Full height image
        $layoutClass = $imageOnLeft ? 'layout-stretch-left' : 'layout-stretch-right';
    } else {
        // Normal layouts - Small fixed image
        $layoutClass = $imageOnLeft ? 'layout-normal-left' : 'layout-normal-right';
    }
}
?>

<section class="custom-section-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Background Pattern -->
    <div class="custom-bg-pattern"></div>

    <div class="container-fluid px-0 mx-0 custom-container">
        <div class="custom-grid <?= $layoutClass; ?>">
            
            <!-- Content Section -->
            <div class="custom-content"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="custom-shape-accent"></div>

                <div class="custom-content-inner">
                    <!-- Heading -->
                    <h2 class="custom-heading">
                        <?= htmlspecialchars($custom['heading']); ?>
                    </h2>

                    <!-- Description -->
                    <div class="custom-description">
                        <?= $custom['description']; ?>
                    </div>

                    <!-- Feature Pills -->
                    <!-- <div class="custom-features">
                        <div class="custom-feature-pill">
                            <i class="fas fa-check-circle"></i>
                            Premium Quality
                        </div>
                        <div class="custom-feature-pill">
                            <i class="fas fa-bolt"></i>
                            Fast Delivery
                        </div>
                        <div class="custom-feature-pill">
                            <i class="fas fa-shield-alt"></i>
                            Secure & Safe
                        </div>
                    </div> -->

                    <!-- CTA Button -->
                    <button class="custom-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#inquiryModal">
                        <i class="fas fa-arrow-right me-2"></i>
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="custom-image-section"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="custom-image-wrapper">
                    <img src="<?= $img; ?>" 
                         alt="<?= htmlspecialchars($custom['heading']); ?>" 
                         class="custom-image"
                         loading="lazy">
                    <div class="custom-image-overlay"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

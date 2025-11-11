<!-- design_2.php - Creative Features Showcase Design - UPDATED -->
<style>
    /* ===== DESIGN 2: KEY FEATURES/SPECIFICATIONS SHOWCASE ===== */
    
    .custom-section-d2-wrapper {
        position: relative;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Background Pattern */
    .custom-bg-pattern-d2 {
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
    .custom-container-d2 {
        position: relative;
        z-index: 1;
    }

    /* ===== LAYOUT 1: NORMAL LEFT (Small Image Left, Features Right) ===== */
    
    .custom-grid-d2.layout-normal-left {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 0;
        align-items: stretch;
        padding: 60px 0;
    }

    .custom-grid-d2.layout-normal-left .custom-image-section-d2 {
        order: 1;
        overflow: hidden;
        width: 320px;
        height: 380px;
        flex-shrink: 0;
        position: relative;
    }

    .custom-grid-d2.layout-normal-left .custom-features-section-d2 {
        order: 2;
        padding: 60px 50px;
        background: var(--theme_mode_color);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ===== LAYOUT 2: NORMAL RIGHT (Features Left, Small Image Right) ===== */
    
    .custom-grid-d2.layout-normal-right {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 0;
        align-items: stretch;
        padding: 60px 0;
    }

    .custom-grid-d2.layout-normal-right .custom-image-section-d2 {
        order: 2;
        overflow: hidden;
        width: 320px;
        height: 380px;
        flex-shrink: 0;
        position: relative;
    }

    .custom-grid-d2.layout-normal-right .custom-features-section-d2 {
        order: 1;
        padding: 60px 50px;
        background: var(--theme_mode_color);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ===== LAYOUT 3: STRETCH LEFT (Image Left 50%, Features Right 50% with Gradient) ===== */
    
    .custom-grid-d2.layout-stretch-left {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .custom-grid-d2.layout-stretch-left .custom-image-section-d2 {
        order: 1;
        overflow: hidden;
        min-height: 600px;
    }

    .custom-grid-d2.layout-stretch-left .custom-features-section-d2 {
        order: 2;
        padding: 80px 60px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: var(--theme_mode_color);
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .custom-grid-d2.layout-stretch-left .custom-features-section-d2::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    /* ===== LAYOUT 4: STRETCH RIGHT (Features Left 50% with Gradient, Image Right 50%) ===== */
    
    .custom-grid-d2.layout-stretch-right {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .custom-grid-d2.layout-stretch-right .custom-features-section-d2 {
        order: 1;
        padding: 80px 60px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color: var(--theme_mode_color);
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .custom-grid-d2.layout-stretch-right .custom-features-section-d2::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .custom-grid-d2.layout-stretch-right .custom-image-section-d2 {
        order: 2;
        overflow: hidden;
        min-height: 600px;
    }

    /* ===== LAYOUT 5: NO IMAGE (Full Width Grid) ===== */
    
    .custom-grid-d2.layout-full {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 0;
    }

    .custom-grid-d2.layout-full .custom-features-section-d2 {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* === FEATURES SECTION === */
    
    .custom-features-section-d2 {
        position: relative;
        z-index: 2;
    }

    /* Border Animation */
    .custom-grid-d2.layout-normal-left .custom-features-section-d2::before,
    .custom-grid-d2.layout-normal-right .custom-features-section-d2::before,
    .custom-grid-d2.layout-stretch-left .custom-features-section-d2::before,
    .custom-grid-d2.layout-stretch-right .custom-features-section-d2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        animation: borderSlide-d2 0.8s ease-out 0.3s forwards;
    }

    @keyframes borderSlide-d2 {
        to { transform: scaleX(1); }
    }

    /* Content Inner */
    .custom-features-inner-d2 {
        position: relative;
        z-index: 2;
    }

    /* Heading */
    .custom-heading-d2 {
        font-size: 42px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 35px;
        letter-spacing: -1px;
    }

    .custom-grid-d2.layout-normal-left .custom-heading-d2,
    .custom-grid-d2.layout-normal-right .custom-heading-d2 {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .custom-grid-d2.layout-stretch-left .custom-heading-d2,
    .custom-grid-d2.layout-stretch-right .custom-heading-d2,
    .custom-grid-d2.layout-full .custom-heading-d2 {
        color: var(--theme_mode_color);
    }

    .custom-grid-d2.layout-full .custom-heading-d2 {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
    }

    /* ===== FEATURES GRID - LIST LAYOUT ===== */
    
    .custom-features-grid-d2 {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 30px;
    }

    .custom-grid-d2.layout-full .custom-features-grid-d2 {
        max-width: 700px;
        width: 100%;
    }

    /* Feature Card - Horizontal Layout */
    .custom-feature-card-d2 {
        display: flex;
        align-items: center;
        gap: 18px;
        background: var(--theme_surface_color);
        padding: 18px 22px;
        border-radius: 12px;
        text-align: left;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-left: 4px solid var(--primary-color);
    }

    .custom-grid-d2.layout-stretch-left .custom-feature-card-d2,
    .custom-grid-d2.layout-stretch-right .custom-feature-card-d2 {
        background: rgba(255, 255, 255, 0.15);
        border-left-color: var(--theme_mode_color);
    }

    .custom-feature-card-d2:hover {
        transform: translateX(8px);
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.12);
    }

    .custom-grid-d2.layout-stretch-left .custom-feature-card-d2:hover,
    .custom-grid-d2.layout-stretch-right .custom-feature-card-d2:hover {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.2);
    }

    /* Feature Icon */
    .custom-feature-icon-d2 {
        width: 70px;
        height: 70px;
        min-width: 70px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--theme_mode_color);
        font-size: 32px;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .custom-feature-card-d2:hover .custom-feature-icon-d2 {
        transform: scale(1.1) rotate(-5deg);
        box-shadow: 0 8px 20px rgba(var(--bs-primary-rgb), 0.3);
    }

    /* Feature Content */
    .custom-feature-content-d2 {
        flex: 1;
        min-width: 0;
    }

    /* Feature Title */
    .custom-feature-title-d2 {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
        var(--theme_mode_color)-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .custom-grid-d2.layout-stretch-left .custom-feature-title-d2,
    .custom-grid-d2.layout-stretch-right .custom-feature-title-d2 {
        color: var(--theme_mode_color);
    }

    /* CTA Button */
    .custom-btn-d2 {
        display: inline-block;
        padding: 14px 40px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: var(--theme_mode_color);
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
        margin-top: 15px;
    }

    .custom-btn-d2::before {
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

    .custom-btn-d2:hover::before {
        width: 300px;
        height: 300px;
    }

    .custom-btn-d2:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    .custom-grid-d2.layout-stretch-left .custom-btn-d2,
    .custom-grid-d2.layout-stretch-right .custom-btn-d2 {
        background: var(--theme_mode_color);
        color: var(--primary-color);
    }

    /* === IMAGE SECTION === */
    
    .custom-image-section-d2 {
        position: relative;
        overflow: hidden;
    }

    .custom-image-wrapper-d2 {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .custom-image-d2 {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .custom-image-section-d2:hover .custom-image-d2 {
        transform: scale(1.08);
    }

    /* Image Overlay */
    .custom-image-overlay-d2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, transparent 0%, rgba(0,0,0,0.3) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .custom-image-section-d2:hover .custom-image-overlay-d2 {
        opacity: 1;
    }

    /* === RESPONSIVE === */
    
    @media (max-width: 1200px) {
        .custom-heading-d2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .custom-features-grid-d2 {
            gap: 14px;
        }

        .custom-feature-card-d2 {
            padding: 16px 20px;
            gap: 16px;
        }

        .custom-feature-icon-d2 {
            width: 65px;
            height: 65px;
            font-size: 28px;
        }

        .custom-grid-d2.layout-normal-left .custom-image-section-d2,
        .custom-grid-d2.layout-normal-right .custom-image-section-d2 {
            width: 280px;
            height: 340px;
        }
    }

    @media (max-width: 991px) {
        .custom-grid-d2.layout-normal-left,
        .custom-grid-d2.layout-normal-right,
        .custom-grid-d2.layout-stretch-left,
        .custom-grid-d2.layout-stretch-right {
            grid-template-columns: 1fr !important;
            padding: 40px 0 !important;
        }

        .custom-grid-d2.layout-normal-left .custom-image-section-d2,
        .custom-grid-d2.layout-normal-right .custom-image-section-d2 {
            width: 100% !important;
            height: 300px !important;
            order: 1 !important;
        }

        .custom-grid-d2.layout-normal-left .custom-features-section-d2,
        .custom-grid-d2.layout-normal-right .custom-features-section-d2 {
            order: 2 !important;
            padding: 40px 30px;
        }

        .custom-grid-d2.layout-stretch-left .custom-image-section-d2,
        .custom-grid-d2.layout-stretch-right .custom-image-section-d2 {
            min-height: 350px !important;
        }

        .custom-grid-d2.layout-stretch-left .custom-features-section-d2,
        .custom-grid-d2.layout-stretch-right .custom-features-section-d2 {
            min-height: 350px !important;
            padding: 40px 30px !important;
        }

        .custom-heading-d2 {
            font-size: 32px;
            margin-bottom: 25px;
        }

        .custom-features-grid-d2 {
            gap: 12px;
        }

        .custom-feature-card-d2 {
            padding: 14px 18px;
            gap: 14px;
        }

        .custom-feature-icon-d2 {
            width: 60px;
            height: 60px;
            font-size: 26px;
        }

        .custom-feature-title-d2 {
            font-size: 14px;
        }
    }

    @media (max-width: 768px) {
        .custom-features-section-d2 {
            padding: 30px 20px !important;
        }

        .custom-heading-d2 {
            font-size: 28px;
            margin-bottom: 22px;
        }

        .custom-image-section-d2 {
            min-height: 280px !important;
        }

        .custom-features-grid-d2 {
            gap: 12px;
        }

        .custom-feature-card-d2 {
            padding: 13px 16px;
            gap: 12px;
        }

        .custom-feature-icon-d2 {
            width: 55px;
            height: 55px;
            font-size: 24px;
        }

        .custom-feature-title-d2 {
            font-size: 13px;
        }
    }

    @media (max-width: 576px) {
        .custom-heading-d2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .custom-btn-d2 {
            width: 100%;
            padding: 12px 30px;
        }

        .custom-image-section-d2 {
            min-height: 250px !important;
        }

        .custom-features-grid-d2 {
            gap: 10px;
        }

        .custom-feature-card-d2 {
            padding: 12px 14px;
            gap: 10px;
        }

        .custom-feature-icon-d2 {
            width: 50px;
            height: 50px;
            font-size: 22px;
        }

        .custom-feature-title-d2 {
            font-size: 12px;
        }

        .custom-grid-d2.layout-full {
            padding: 50px 20px;
        }
    }
</style>



<?php
// Determine layout based on position and image option
// $hasImage = $hasImage ?? false;
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;

// Parse features data
$features = [];
if (!empty($custom['features_data'])) {
    $features = is_array($custom['features_data']) 
        ? $custom['features_data'] 
        : json_decode($custom['features_data'], true);
}

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

<section class="custom-section-d2-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Background Pattern -->
    <div class="custom-bg-pattern-d2"></div>

    <div class="container-fluid px-0 mx-0 custom-container-d2">
        <div class="custom-grid-d2 <?= $layoutClass; ?>">
            
            <!-- Features Section -->
            <div class="custom-features-section-d2"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="custom-features-inner-d2">
                    <!-- Heading -->
                    <h2 class="custom-heading-d2">
                        <?= htmlspecialchars($custom['heading']); ?>
                    </h2>

                    <div class="custom-features-grid-d2">
                        <?php if (!empty($features)): ?>
                            <?php foreach ($features as $index => $feature): ?>
                                <div class="custom-feature-card-d2" 
                                    data-aos="fade-in-right" 
                                    data-aos-delay="<?= ($index % 4) * 100; ?>">
                                    <div class="custom-feature-icon-d2">
                                        <i class="fas <?= htmlspecialchars($feature['icon'] ?? 'fa-star'); ?>"></i>
                                    </div>
                                    <div class="custom-feature-content-d2">
                                        <h4 class="custom-feature-title-d2">
                                            <?= htmlspecialchars($feature['title'] ?? 'Feature'); ?>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Fallback Features -->
                            <div class="custom-feature-card-d2" data-aos="fade-in-right" data-aos-delay="0">
                                <div class="custom-feature-icon-d2">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="custom-feature-content-d2">
                                    <h4 class="custom-feature-title-d2">Modern Design</h4>
                                </div>
                            </div>
                            <div class="custom-feature-card-d2" data-aos="fade-in-right" data-aos-delay="100">
                                <div class="custom-feature-icon-d2">
                                    <i class="fas fa-wifi"></i>
                                </div>
                                <div class="custom-feature-content-d2">
                                    <h4 class="custom-feature-title-d2">Free WiFi</h4>
                                </div>
                            </div>
                            <div class="custom-feature-card-d2" data-aos="fade-in-right" data-aos-delay="200">
                                <div class="custom-feature-icon-d2">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="custom-feature-content-d2">
                                    <h4 class="custom-feature-title-d2">24/7 Security</h4>
                                </div>
                            </div>
                            <div class="custom-feature-card-d2" data-aos="fade-in-right" data-aos-delay="300">
                                <div class="custom-feature-icon-d2">
                                    <i class="fas fa-swimming-pool"></i>
                                </div>
                                <div class="custom-feature-content-d2">
                                    <h4 class="custom-feature-title-d2">Swimming Pool</h4>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>


                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="custom-image-section-d2"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="custom-image-wrapper-d2">
                    <img src="<?= $img; ?>" 
                         alt="<?= htmlspecialchars($custom['heading']); ?>" 
                         class="custom-image-d2"
                         loading="lazy">
                    <div class="custom-image-overlay-d2"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

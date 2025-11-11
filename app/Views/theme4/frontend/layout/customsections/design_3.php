<!-- design_3.php - Statistics/Numbers Showcase Design -->
<style>
    /* ===== DESIGN 3: STATISTICS SHOWCASE ===== */
    
    .custom-section-d3-wrapper {
        position: relative;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Background Pattern */
    .custom-bg-pattern-d3 {
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
    .custom-container-d3 {
        position: relative;
        z-index: 1;
    }

    /* ===== LAYOUT 1: NORMAL LEFT (Small Image Left, Stats Right) ===== */
    
    .custom-grid-d3.layout-normal-left {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 0;
        align-items: stretch;
        padding: 60px 0;
    }

    .custom-grid-d3.layout-normal-left .custom-image-section-d3 {
        order: 1;
        overflow: hidden;
        width: 320px;
        height: 380px;
        flex-shrink: 0;
        position: relative;
    }

    .custom-grid-d3.layout-normal-left .custom-stats-section-d3 {
        order: 2;
        padding: 60px 50px;
        background:  var(--text-dark);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ===== LAYOUT 2: NORMAL RIGHT (Stats Left, Small Image Right) ===== */
    
    .custom-grid-d3.layout-normal-right {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 0;
        align-items: stretch;
        padding: 60px 0;
    }

    .custom-grid-d3.layout-normal-right .custom-image-section-d3 {
        order: 2;
        overflow: hidden;
        width: 320px;
        height: 380px;
        flex-shrink: 0;
        position: relative;
    }

    .custom-grid-d3.layout-normal-right .custom-stats-section-d3 {
        order: 1;
        padding: 60px 50px;
        background:  var(--text-dark);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ===== LAYOUT 3: STRETCH LEFT (Image Left 50%, Stats Right 50% with Gradient) ===== */
    
    .custom-grid-d3.layout-stretch-left {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .custom-grid-d3.layout-stretch-left .custom-image-section-d3 {
        order: 1;
        overflow: hidden;
        min-height: 600px;
    }

    .custom-grid-d3.layout-stretch-left .custom-stats-section-d3 {
        order: 2;
        padding: 80px 60px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color:  var(--text-dark);
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .custom-grid-d3.layout-stretch-left .custom-stats-section-d3::after {
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

    /* ===== LAYOUT 4: STRETCH RIGHT (Stats Left 50% with Gradient, Image Right 50%) ===== */
    
    .custom-grid-d3.layout-stretch-right {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .custom-grid-d3.layout-stretch-right .custom-stats-section-d3 {
        order: 1;
        padding: 80px 60px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        color:  var(--text-dark);
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .custom-grid-d3.layout-stretch-right .custom-stats-section-d3::after {
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

    .custom-grid-d3.layout-stretch-right .custom-image-section-d3 {
        order: 2;
        overflow: hidden;
        min-height: 600px;
    }

    /* ===== LAYOUT 5: NO IMAGE (Full Width) ===== */
    
    .custom-grid-d3.layout-full {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 0;
    }

    .custom-grid-d3.layout-full .custom-stats-section-d3 {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* === STATS SECTION === */
    
    .custom-stats-section-d3 {
        position: relative;
        z-index: 2;
    }

    /* Border Animation */
    .custom-grid-d3.layout-normal-left .custom-stats-section-d3::before,
    .custom-grid-d3.layout-normal-right .custom-stats-section-d3::before,
    .custom-grid-d3.layout-stretch-left .custom-stats-section-d3::before,
    .custom-grid-d3.layout-stretch-right .custom-stats-section-d3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        animation: borderSlide-d3 0.8s ease-out 0.3s forwards;
    }

    @keyframes borderSlide-d3 {
        to { transform: scaleX(1); }
    }

    /* Content Inner */
    .custom-stats-inner-d3 {
        position: relative;
        z-index: 2;
    }

    /* Heading */
    .custom-heading-d3 {
        font-size: 42px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .custom-grid-d3.layout-normal-left .custom-heading-d3,
    .custom-grid-d3.layout-normal-right .custom-heading-d3 {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .custom-grid-d3.layout-stretch-left .custom-heading-d3,
    .custom-grid-d3.layout-stretch-right .custom-heading-d3,
    .custom-grid-d3.layout-full .custom-heading-d3 {
        color:  var(--text-dark);
    }

    .custom-grid-d3.layout-full .custom-heading-d3 {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
    }

    /* Description */
    .custom-description-d3 {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
        margin-bottom: 40px;
    }

    .custom-grid-d3.layout-stretch-left .custom-description-d3,
    .custom-grid-d3.layout-stretch-right .custom-description-d3 {
        color: rgba(255, 255, 255, 0.95);
    }

    /* Statistics Grid */
    .custom-stats-grid-d3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .custom-grid-d3.layout-full .custom-stats-grid-d3 {
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        max-width: 900px;
        width: 100%;
    }

    /* Statistic Card */
    .custom-stat-card-d3 {
        background: var(--theme_surface_color);
        padding: 35px 25px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-top: 4px solid var(--primary-color);
    }

    .custom-grid-d3.layout-stretch-left .custom-stat-card-d3,
    .custom-grid-d3.layout-stretch-right .custom-stat-card-d3 {
        background: rgba(255, 255, 255, 0.15);
        border-top-color:  var(--text-dark);
    }

    .custom-stat-card-d3:hover {
        transform: translateY(-12px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .custom-grid-d3.layout-stretch-left .custom-stat-card-d3:hover,
    .custom-grid-d3.layout-stretch-right .custom-stat-card-d3:hover {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    /* Statistic Number */
    .custom-stat-number-d3 {
        font-size: 42px;
        font-weight: 900;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
        line-height: 1;
    }

    .custom-grid-d3.layout-stretch-left .custom-stat-number-d3,
    .custom-grid-d3.layout-stretch-right .custom-stat-number-d3 {
        -webkit-text-fill-color:  var(--text-dark);
        background: none;
        color:  var(--text-dark);
    }

    /* Statistic Label */
    .custom-stat-label-d3 {
        font-size: 14px;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .custom-grid-d3.layout-stretch-left .custom-stat-label-d3,
    .custom-grid-d3.layout-stretch-right .custom-stat-label-d3 {
        color:  var(--text-dark);
    }

    /* Counter Animation */
    .custom-stat-number-d3 {
        animation: countUp 1s ease-out forwards;
    }

    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* CTA Button */
    .custom-btn-d3 {
        display: inline-block;
        padding: 14px 40px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color:  var(--text-dark);
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

    .custom-btn-d3::before {
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

    .custom-btn-d3:hover::before {
        width: 300px;
        height: 300px;
    }

    .custom-btn-d3:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    .custom-grid-d3.layout-stretch-left .custom-btn-d3,
    .custom-grid-d3.layout-stretch-right .custom-btn-d3 {
        background:  var(--text-dark);
        color: var(--primary-color);
    }

    /* === IMAGE SECTION === */
    
    .custom-image-section-d3 {
        position: relative;
        overflow: hidden;
    }

    .custom-image-wrapper-d3 {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .custom-image-d3 {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .custom-image-section-d3:hover .custom-image-d3 {
        transform: scale(1.08);
    }

    /* Image Overlay */
    .custom-image-overlay-d3 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, transparent 0%, rgba(0,0,0,0.3) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .custom-image-section-d3:hover .custom-image-overlay-d3 {
        opacity: 1;
    }

    /* === RESPONSIVE === */
    
    @media (max-width: 1200px) {
        .custom-heading-d3 {
            font-size: 36px;
        }

        .custom-stats-grid-d3 {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .custom-stat-card-d3 {
            padding: 30px 20px;
        }

        .custom-stat-number-d3 {
            font-size: 36px;
        }

        .custom-grid-d3.layout-normal-left .custom-image-section-d3,
        .custom-grid-d3.layout-normal-right .custom-image-section-d3 {
            width: 280px;
            height: 340px;
        }
    }

    @media (max-width: 991px) {
        .custom-grid-d3.layout-normal-left,
        .custom-grid-d3.layout-normal-right,
        .custom-grid-d3.layout-stretch-left,
        .custom-grid-d3.layout-stretch-right {
            grid-template-columns: 1fr !important;
            padding: 40px 0 !important;
        }

        .custom-grid-d3.layout-normal-left .custom-image-section-d3,
        .custom-grid-d3.layout-normal-right .custom-image-section-d3 {
            width: 100% !important;
            height: 300px !important;
            order: 1 !important;
        }

        .custom-grid-d3.layout-normal-left .custom-stats-section-d3,
        .custom-grid-d3.layout-normal-right .custom-stats-section-d3 {
            order: 2 !important;
            padding: 40px 30px;
        }

        .custom-grid-d3.layout-stretch-left .custom-image-section-d3,
        .custom-grid-d3.layout-stretch-right .custom-image-section-d3 {
            min-height: 350px !important;
        }

        .custom-grid-d3.layout-stretch-left .custom-stats-section-d3,
        .custom-grid-d3.layout-stretch-right .custom-stats-section-d3 {
            min-height: 350px !important;
            padding: 40px 30px !important;
        }

        .custom-heading-d3 {
            font-size: 32px;
        }

        .custom-stats-grid-d3 {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .custom-stats-section-d3 {
            padding: 30px 20px !important;
        }

        .custom-heading-d3 {
            font-size: 28px;
            margin-bottom: 18px;
        }

        .custom-description-d3 {
            font-size: 14px;
            margin-bottom: 30px;
        }

        .custom-image-section-d3 {
            min-height: 280px !important;
        }

        .custom-stats-grid-d3 {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .custom-stat-card-d3 {
            padding: 25px 18px;
        }

        .custom-stat-number-d3 {
            font-size: 32px;
        }

        .custom-stat-label-d3 {
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .custom-heading-d3 {
            font-size: 24px;
        }

        .custom-description-d3 {
            font-size: 13px;
        }

        .custom-btn-d3 {
            width: 100%;
            padding: 12px 30px;
        }

        .custom-image-section-d3 {
            min-height: 250px !important;
        }

        .custom-stats-grid-d3 {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .custom-stat-card-d3 {
            padding: 22px 16px;
        }

        .custom-stat-number-d3 {
            font-size: 28px;
        }

        .custom-grid-d3.layout-full {
            padding: 50px 20px;
        }
    }
</style>

<?php
// Determine layout based on position and image option
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;

// Parse statistics data
$statistics = [];
if (!empty($custom['statistics_data'])) {
    $statistics = is_array($custom['statistics_data']) 
        ? $custom['statistics_data'] 
        : json_decode($custom['statistics_data'], true);
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

<section class="custom-section-d3-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Background Pattern -->
    <div class="custom-bg-pattern-d3"></div>

    <div class="container-fluid px-0 mx-0 custom-container-d3">
        <div class="custom-grid-d3 <?= $layoutClass; ?>">
            
            <!-- Statistics Section -->
            <div class="custom-stats-section-d3"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="custom-stats-inner-d3">
                    <!-- Heading -->
                    <h2 class="custom-heading-d3">
                        <?= htmlspecialchars($custom['heading']); ?>
                    </h2>

                    <!-- Description -->
                    <?php if (!empty($custom['description'])): ?>
                    <div class="custom-description-d3">
                        <?= $custom['description']; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Statistics Grid -->
                    <div class="custom-stats-grid-d3">
                        <?php if (!empty($statistics)): ?>
                            <?php foreach ($statistics as $index => $stat): ?>
                                <div class="custom-stat-card-d3" 
                                     data-aos="zoom-in-up" 
                                     data-aos-delay="<?= ($index % 4) * 100; ?>">
                                    <div class="custom-stat-number-d3">
                                        <?= htmlspecialchars($stat['number'] ?? '0'); ?>
                                    </div>
                                    <h4 class="custom-stat-label-d3">
                                        <?= htmlspecialchars($stat['label'] ?? 'Statistic'); ?>
                                    </h4>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Fallback Statistics -->
                            <div class="custom-stat-card-d3" data-aos="zoom-in-up" data-aos-delay="0">
                                <div class="custom-stat-number-d3">500+</div>
                                <h4 class="custom-stat-label-d3">Happy Clients</h4>
                            </div>
                            <div class="custom-stat-card-d3" data-aos="zoom-in-up" data-aos-delay="100">
                                <div class="custom-stat-number-d3">15+</div>
                                <h4 class="custom-stat-label-d3">Years Experience</h4>
                            </div>
                            <div class="custom-stat-card-d3" data-aos="zoom-in-up" data-aos-delay="200">
                                <div class="custom-stat-number-d3">100%</div>
                                <h4 class="custom-stat-label-d3">Satisfaction</h4>
                            </div>
                            <div class="custom-stat-card-d3" data-aos="zoom-in-up" data-aos-delay="300">
                                <div class="custom-stat-number-d3">24/7</div>
                                <h4 class="custom-stat-label-d3">Support</h4>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- CTA Button -->
                    <!-- <button class="custom-btn-d3" 
                            data-bs-toggle="modal" 
                            data-bs-target="#inquiryModal">
                        <i class="fas fa-arrow-right me-2"></i>
                        Learn More
                    </button> -->
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="custom-image-section-d3"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="custom-image-wrapper-d3">
                    <img src="<?= $img; ?>" 
                         alt="<?= htmlspecialchars($custom['heading']); ?>" 
                         class="custom-image-d3"
                         loading="lazy">
                    <div class="custom-image-overlay-d3"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

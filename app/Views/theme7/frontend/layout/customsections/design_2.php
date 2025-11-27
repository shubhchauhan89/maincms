<?php
/**
 * ============================================
 * EDUCATIONAL THEME - CUSTOM SECTION DESIGN 2
 * ============================================
 * File: theme7/frontend/layout/customsections/design_2.php
 * Purpose: Modern dynamic features showcase
 * Version: 1.0
 * Last Updated: 2025-11-27
 * 
 * Design: Features-focused, animated, professional
 * - Dynamic feature cards (unlimited)
 * - Auto-numbered counters
 * - Staggered animations
 * - Icon support
 * - Responsive grid
 * ============================================
 */

// Layout configuration
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;
$hasImage = $hasImage ?? 'yes';

// Parse features data
$features = [];
if (!empty($custom['features_data'])) {
    $features = is_array($custom['features_data']) 
        ? $custom['features_data'] 
        : json_decode($custom['features_data'], true);
}

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

<!-- ============================================
     CUSTOM SECTION DESIGN 2 - FEATURES
     ============================================ -->
<section class="custom-design-2-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="custom-design-2-decoration" 
         style="position: absolute; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                z-index: 0; 
                overflow: hidden;">
        
        <div style="position: absolute; 
                   width: 300px; 
                   height: 300px; 
                   background: radial-gradient(circle, rgba(33, 128, 161, 0.08), transparent); 
                   border-radius: 50%; 
                   top: 50px; 
                   right: 5%; 
                   animation: float 8s ease-in-out infinite;"></div>
        
        <div style="position: absolute; 
                   width: 200px; 
                   height: 200px; 
                   background: radial-gradient(circle, rgba(230, 126, 34, 0.08), transparent); 
                   border-radius: 50%; 
                   bottom: 100px; 
                   left: 10%; 
                   animation: float 10s ease-in-out infinite; 
                   animation-delay: 1s;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 1;">
        
        <!-- Features Grid -->
        <div class="custom-design-2-grid <?= htmlspecialchars($layoutClass) ?>"
             style="display: grid; 
                    gap: 40px; 
                    align-items: center;">
            
            <!-- Features Section -->
            <div class="custom-design-2-content" 
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left' ?>" 
                 data-aos-duration="800"
                 style="animation: fadeIn 0.8s ease-out;">
                
                <div class="custom-design-2-content-inner">
                    
                    <!-- Heading -->
                    <h2 class="custom-design-2-heading" 
                        style="font-size: 42px; 
                               color: var(--text-primary); 
                               margin-bottom: 20px; 
                               font-weight: 700; 
                               line-height: 1.2; 
                               letter-spacing: -0.5px;">
                        <span style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                    -webkit-background-clip: text; 
                                    -webkit-text-fill-color: transparent; 
                                    background-clip: text;">
                            <?= htmlspecialchars($custom['heading'] ?? 'Features') ?>
                        </span>
                    </h2>

                    <!-- Description -->
                    <?php if (!empty($custom['description'])): ?>
                    <div class="custom-design-2-description" 
                         style="font-size: 15px; 
                                color: rgba(var(--text-primary), 0.8); 
                                line-height: 1.8; 
                                margin-bottom: 30px;">
                        <?= $custom['description'] ?>
                    </div>
                    <?php endif; ?>

                    <!-- Features List -->
                    <div class="custom-design-2-features" 
                         style="display: flex; 
                                flex-direction: column; 
                                gap: 20px;">
                        
                        <?php 
                        $featureCount = 1;
                        if (!empty($features)): 
                            foreach ($features as $index => $feature): 
                                $stagger_delay = ($index * 0.1);
                        ?>
                            <!-- Feature Item -->
                            <div class="custom-design-2-feature-item" 
                                 data-aos="fade-up" 
                                 data-aos-delay="<?= ($index % 4) * 80 ?>"
                                 style="animation: slideInLeft 0.6s ease-out; 
                                        animation-delay: <?= $stagger_delay ?>s; 
                                        animation-fill-mode: both; 
                                        display: flex; 
                                        gap: 20px; 
                                        align-items: flex-start; 
                                        padding: 20px; 
                                        background: var(--card-background); 
                                        border: 1px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        transition: all var(--transition-normal) var(--ease-standard);"
                                 onmouseover="this.style.background='linear-gradient(135deg, rgba(33, 128, 161, 0.05), transparent)'; this.style.borderColor='var(--primary-color)'; this.style.boxShadow='0 8px 24px rgba(33, 128, 161, 0.1)'"
                                 onmouseout="this.style.background='var(--card-background)'; this.style.borderColor='var(--card-border)'; this.style.boxShadow='none'">
                                
                                <!-- Icon -->
                                <div style="position: relative; 
                                           flex-shrink: 0; 
                                           width: 60px; 
                                           height: 60px; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           border-radius: var(--border-radius-lg); 
                                           display: flex; 
                                           align-items: center; 
                                           justify-content: center; 
                                           font-size: 24px; 
                                           color: white; 
                                           transition: all var(--transition-normal) var(--ease-standard);"
                                     onmouseover="this.style.transform='scale(1.1) rotate(5deg)'"
                                     onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                    <i class="fa-solid <?= htmlspecialchars($feature['icon'] ?? 'fa-circle-check') ?>"></i>
                                    
                                    <!-- Counter Badge -->
                                    <div style="position: absolute; 
                                               top: -8px; 
                                               right: -8px; 
                                               width: 32px; 
                                               height: 32px; 
                                               background: var(--accent-color); 
                                               border: 3px solid white; 
                                               border-radius: 50%; 
                                               display: flex; 
                                               align-items: center; 
                                               justify-content: center; 
                                               font-size: 14px; 
                                               font-weight: 700; 
                                               color: white; 
                                               box-shadow: 0 4px 12px rgba(230, 126, 34, 0.3);">
                                        <?= $featureCount ?>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div style="flex-grow: 1;">
                                    <h4 class="custom-design-2-feature-title" 
                                        style="font-size: 15px; 
                                               font-weight: 700; 
                                               color: var(--text-primary); 
                                               margin: 0 0 8px 0; 
                                               text-transform: uppercase; 
                                               letter-spacing: 0.5px;">
                                        <?= htmlspecialchars($feature['title'] ?? 'Feature') ?>
                                    </h4>
                                    <p class="custom-design-2-feature-description" 
                                       style="font-size: 14px; 
                                              color: rgba(var(--text-primary), 0.7); 
                                              margin: 0; 
                                              line-height: 1.6;">
                                        <?= htmlspecialchars($feature['description'] ?? 'Feature description') ?>
                                    </p>
                                </div>
                            </div>
                        <?php 
                            $featureCount++;
                            endforeach; 
                        else: 
                        ?>
                            <!-- Fallback Features -->
                            <div class="custom-design-2-feature-item" 
                                 style="display: flex; 
                                        gap: 20px; 
                                        align-items: flex-start; 
                                        padding: 20px; 
                                        background: var(--card-background); 
                                        border: 1px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: slideInLeft 0.6s ease-out;">
                                <div style="position: relative; 
                                           flex-shrink: 0; 
                                           width: 60px; 
                                           height: 60px; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           border-radius: var(--border-radius-lg); 
                                           display: flex; 
                                           align-items: center; 
                                           justify-content: center; 
                                           font-size: 24px; 
                                           color: white;">
                                    <i class="fa-solid fa-cogs"></i>
                                    <div style="position: absolute; top: -8px; right: -8px; width: 32px; height: 32px; background: var(--accent-color); border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: white;">1</div>
                                </div>
                                <div>
                                    <h4 style="font-size: 15px; font-weight: 700; color: var(--text-primary); margin: 0 0 8px 0; text-transform: uppercase;">Feature One</h4>
                                    <p style="font-size: 14px; color: rgba(var(--text-primary), 0.7); margin: 0;">Exceptional capability and performance</p>
                                </div>
                            </div>

                            <div class="custom-design-2-feature-item" 
                                 style="display: flex; 
                                        gap: 20px; 
                                        align-items: flex-start; 
                                        padding: 20px; 
                                        background: var(--card-background); 
                                        border: 1px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: slideInLeft 0.6s ease-out; animation-delay: 0.1s;">
                                <div style="position: relative; 
                                           flex-shrink: 0; 
                                           width: 60px; 
                                           height: 60px; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           border-radius: var(--border-radius-lg); 
                                           display: flex; 
                                           align-items: center; 
                                           justify-content: center; 
                                           font-size: 24px; 
                                           color: white;">
                                    <i class="fa-solid fa-bolt"></i>
                                    <div style="position: absolute; top: -8px; right: -8px; width: 32px; height: 32px; background: var(--accent-color); border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: white;">2</div>
                                </div>
                                <div>
                                    <h4 style="font-size: 15px; font-weight: 700; color: var(--text-primary); margin: 0 0 8px 0; text-transform: uppercase;">Feature Two</h4>
                                    <p style="font-size: 14px; color: rgba(var(--text-primary), 0.7); margin: 0;">High performance with proven results</p>
                                </div>
                            </div>

                            <div class="custom-design-2-feature-item" 
                                 style="display: flex; 
                                        gap: 20px; 
                                        align-items: flex-start; 
                                        padding: 20px; 
                                        background: var(--card-background); 
                                        border: 1px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: slideInLeft 0.6s ease-out; animation-delay: 0.2s;">
                                <div style="position: relative; 
                                           flex-shrink: 0; 
                                           width: 60px; 
                                           height: 60px; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           border-radius: var(--border-radius-lg); 
                                           display: flex; 
                                           align-items: center; 
                                           justify-content: center; 
                                           font-size: 24px; 
                                           color: white;">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <div style="position: absolute; top: -8px; right: -8px; width: 32px; height: 32px; background: var(--accent-color); border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: white;">3</div>
                                </div>
                                <div>
                                    <h4 style="font-size: 15px; font-weight: 700; color: var(--text-primary); margin: 0 0 8px 0; text-transform: uppercase;">Feature Three</h4>
                                    <p style="font-size: 14px; color: rgba(var(--text-primary), 0.7); margin: 0;">Quality assured and tested thoroughly</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="custom-design-2-image-section" 
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right' ?>" 
                 data-aos-duration="800"
                 style="animation: fadeIn 0.8s ease-out; animation-delay: 0.1s;">
                
                <div class="custom-design-2-image-wrapper" 
                     style="position: relative; 
                            border-radius: var(--border-radius-lg); 
                            overflow: hidden; 
                            box-shadow: var(--shadow-lg);">
                    
                    <img src="<?= htmlspecialchars($img ?? base_url() . '/public/assets/img/no-image.png') ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Image') ?>" 
                         class="custom-design-2-image" 
                         loading="lazy"
                         style="width: 100%; 
                                height: 100%; 
                                object-fit: cover; 
                                display: block; 
                                transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    
                    <!-- Image Overlay -->
                    <div style="position: absolute; 
                               top: 0; 
                               left: 0; 
                               width: 100%; 
                               height: 100%; 
                               background: rgba(0, 0, 0, 0); 
                               transition: all var(--transition-normal) var(--ease-standard); 
                               z-index: 1;"
                         onmouseover="this.style.background='rgba(0, 0, 0, 0.3)'"
                         onmouseout="this.style.background='rgba(0, 0, 0, 0)'"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<!-- ============================================
     CUSTOM DESIGN 2 STYLES
     ============================================ -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(40px); }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-20px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .custom-design-2-grid.layout-full {
        grid-template-columns: 1fr;
        max-width: 900px;
        margin: 0 auto;
    }

    .custom-design-2-grid.layout-normal-right {
        grid-template-columns: 1fr 1fr;
    }

    .custom-design-2-grid.layout-normal-left {
        grid-template-columns: 1fr 1fr;
    }

    .custom-design-2-grid.layout-stretch-right {
        grid-template-columns: 1.2fr 1fr;
    }

    .custom-design-2-grid.layout-stretch-left {
        grid-template-columns: 1fr 1.2fr;
    }

    .custom-design-2-grid.layout-normal-left .custom-design-2-content {
        order: 2;
    }

    .custom-design-2-grid.layout-normal-left .custom-design-2-image-section {
        order: 1;
    }

    .custom-design-2-grid.layout-stretch-left .custom-design-2-content {
        order: 2;
    }

    .custom-design-2-grid.layout-stretch-left .custom-design-2-image-section {
        order: 1;
        min-height: 600px;
    }

    .custom-design-2-grid.layout-stretch-right .custom-design-2-image-section {
        min-height: 600px;
    }

    @media (max-width: 992px) {
        .custom-design-2-grid {
            grid-template-columns: 1fr !important;
            gap: 30px;
        }

        .custom-design-2-grid.layout-stretch-right .custom-design-2-image-section,
        .custom-design-2-grid.layout-stretch-left .custom-design-2-image-section {
            min-height: 400px !important;
        }

        .custom-design-2-heading {
            font-size: 32px !important;
        }
    }

    @media (max-width: 768px) {
        .custom-design-2-section {
            padding: 60px 0 !important;
        }

        .custom-design-2-grid {
            grid-template-columns: 1fr !important;
            gap: 20px;
        }

        .custom-design-2-heading {
            font-size: 28px !important;
        }

        .custom-design-2-image-section {
            order: -1;
        }

        .custom-design-2-decoration {
            display: none;
        }

        .custom-design-2-features {
            gap: 15px !important;
        }

        .custom-design-2-feature-item {
            flex-direction: column !important;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .custom-design-2-section {
            padding: 40px 0 !important;
        }

        .custom-design-2-heading {
            font-size: 20px !important;
        }

        .custom-design-2-description {
            font-size: 14px !important;
        }

        .custom-design-2-feature-item {
            padding: 16px !important;
        }

        .custom-design-2-feature-title {
            font-size: 13px !important;
        }

        .custom-design-2-feature-description {
            font-size: 13px !important;
        }
    }

    .custom-design-2-feature-item:focus-within {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    @media print {
        .custom-design-2-section {
            display: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 120
            });
        }

        // Stagger feature animations
        var features = document.querySelectorAll('.custom-design-2-feature-item');
        features.forEach(function(feature, index) {
            feature.style.setProperty('animation-delay', (index * 0.1) + 's');
        });
    });
</script>

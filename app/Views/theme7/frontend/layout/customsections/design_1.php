<?php
/**
 * ============================================
 * EDUCATIONAL THEME - CUSTOM FLEXIBLE SECTION
 * ============================================
 * File: theme7/frontend/layout/custom-section-flexible.php
 * Purpose: Reusable flexible content section
 * Version: 1.0
 * Last Updated: 2025-11-27
 * 
 * Design: Professional, flexible, modern
 * - Multiple layout options
 * - Scroll animations (AOS)
 * - Feature pills/badges
 * - CTA button
 * - Responsive design
 * - Professional styling
 * ============================================
 */

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

<!-- ============================================
     CUSTOM FLEXIBLE SECTION
     ============================================ -->
<section class="custom-flexible-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="custom-decoration" 
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
        
        <!-- Custom Section Grid -->
        <div class="custom-grid <?= htmlspecialchars($layoutClass) ?>"
             style="display: grid; 
                    gap: 40px; 
                    align-items: center;">
            
            <!-- Content Section -->
            <div class="custom-content" 
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left' ?>" 
                 data-aos-duration="800"
                 style="animation: fadeIn 0.8s ease-out;">
                
                <!-- Content Inner -->
                <div class="custom-content-inner">
                    
                    <!-- Heading -->
                    <h2 class="custom-heading" 
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
                            <?= htmlspecialchars($custom['heading'] ?? 'Section Heading') ?>
                        </span>
                    </h2>

                    <!-- Description -->
                    <div class="custom-description" 
                         style="font-size: 15px; 
                                color: rgba(var(--text-primary), 0.8); 
                                line-height: 1.8; 
                                margin-bottom: 30px;">
                        <?= $custom['description'] ?? '<p>Content description goes here.</p>' ?>
                    </div>

                    <!-- Feature Pills -->
                    <div class="custom-features" 
                         style="display: flex; 
                                flex-wrap: wrap; 
                                gap: 15px; 
                                margin-bottom: 30px;">
                        
                        <div class="custom-pill" 
                             style="display: flex; 
                                    align-items: center; 
                                    gap: 8px; 
                                    padding: 12px 20px; 
                                    background: rgba(33, 128, 161, 0.1); 
                                    border: 1px solid rgba(33, 128, 161, 0.2); 
                                    border-radius: var(--border-radius-lg); 
                                    font-size: 13px; 
                                    font-weight: 600; 
                                    color: var(--primary-color); 
                                    transition: all var(--transition-normal) var(--ease-standard);"
                             onmouseover="this.style.background='rgba(33, 128, 161, 0.15)'; this.style.borderColor='var(--primary-color)'"
                             onmouseout="this.style.background='rgba(33, 128, 161, 0.1)'; this.style.borderColor='rgba(33, 128, 161, 0.2)'">
                            <i class="fa-solid fa-check-circle"></i>
                            <span>Quality Assured</span>
                        </div>

                        <div class="custom-pill" 
                             style="display: flex; 
                                    align-items: center; 
                                    gap: 8px; 
                                    padding: 12px 20px; 
                                    background: rgba(33, 128, 161, 0.1); 
                                    border: 1px solid rgba(33, 128, 161, 0.2); 
                                    border-radius: var(--border-radius-lg); 
                                    font-size: 13px; 
                                    font-weight: 600; 
                                    color: var(--primary-color); 
                                    transition: all var(--transition-normal) var(--ease-standard);"
                             onmouseover="this.style.background='rgba(33, 128, 161, 0.15)'; this.style.borderColor='var(--primary-color)'"
                             onmouseout="this.style.background='rgba(33, 128, 161, 0.1)'; this.style.borderColor='rgba(33, 128, 161, 0.2)'">
                            <i class="fa-solid fa-bolt"></i>
                            <span>High Performance</span>
                        </div>

                        <div class="custom-pill" 
                             style="display: flex; 
                                    align-items: center; 
                                    gap: 8px; 
                                    padding: 12px 20px; 
                                    background: rgba(33, 128, 161, 0.1); 
                                    border: 1px solid rgba(33, 128, 161, 0.2); 
                                    border-radius: var(--border-radius-lg); 
                                    font-size: 13px; 
                                    font-weight: 600; 
                                    color: var(--primary-color); 
                                    transition: all var(--transition-normal) var(--ease-standard);"
                             onmouseover="this.style.background='rgba(33, 128, 161, 0.15)'; this.style.borderColor='var(--primary-color)'"
                             onmouseout="this.style.background='rgba(33, 128, 161, 0.1)'; this.style.borderColor='rgba(33, 128, 161, 0.2)'">
                            <i class="fa-solid fa-shield-alt"></i>
                            <span>Fully Tested</span>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="<?= htmlspecialchars($custom['cta_link'] ?? '#contact') ?>" 
                       class="custom-btn" 
                       style="display: inline-flex; 
                              align-items: center; 
                              gap: 10px; 
                              padding: 14px 32px; 
                              background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                              color: white; 
                              text-decoration: none; 
                              font-weight: 700; 
                              font-size: 13px; 
                              text-transform: uppercase; 
                              letter-spacing: 1px; 
                              border-radius: var(--border-radius); 
                              transition: all var(--transition-normal) var(--ease-standard)); 
                              border: none; 
                              cursor: pointer;"
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 30px rgba(33, 128, 161, 0.3)'"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span><?= htmlspecialchars($custom['cta_text'] ?? 'Learn More') ?></span>
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="custom-image-section" 
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right' ?>" 
                 data-aos-duration="800"
                 style="animation: fadeIn 0.8s ease-out; 
                        animation-delay: 0.1s;">
                
                <div class="custom-image-wrapper" 
                     style="position: relative; 
                            border-radius: var(--border-radius-lg); 
                            overflow: hidden; 
                            box-shadow: var(--shadow-lg);">
                    
                    <img src="<?= htmlspecialchars($img ?? base_url() . '/public/assets/img/no-image.png') ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Image') ?>" 
                         class="custom-image" 
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
     CUSTOM SECTION STYLES
     ============================================ -->
<style>
    /* ============================================
       ANIMATIONS
       ============================================ */

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(40px);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Custom Grid Layouts */
    .custom-grid.layout-full {
        grid-template-columns: 1fr;
        max-width: 800px;
        margin: 0 auto;
    }

    .custom-grid.layout-normal-right {
        grid-template-columns: 1fr 1fr;
    }

    .custom-grid.layout-normal-left {
        grid-template-columns: 1fr 1fr;
    }

    .custom-grid.layout-stretch-right {
        grid-template-columns: 1.2fr 1fr;
    }

    .custom-grid.layout-stretch-left {
        grid-template-columns: 1fr 1.2fr;
    }

    .custom-grid.layout-normal-left .custom-content {
        order: 2;
    }

    .custom-grid.layout-normal-left .custom-image-section {
        order: 1;
    }

    .custom-grid.layout-stretch-left .custom-content {
        order: 2;
    }

    .custom-grid.layout-stretch-left .custom-image-section {
        order: 1;
        min-height: 600px;
    }

    .custom-grid.layout-stretch-right .custom-image-section {
        min-height: 600px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .custom-grid {
            grid-template-columns: 1fr !important;
            gap: 30px;
        }

        .custom-grid.layout-stretch-right .custom-image-section,
        .custom-grid.layout-stretch-left .custom-image-section {
            min-height: 400px !important;
        }

        .custom-heading {
            font-size: 32px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .custom-flexible-section {
            padding: 60px 0 !important;
        }

        .custom-grid {
            grid-template-columns: 1fr !important;
            gap: 20px;
        }

        .custom-heading {
            font-size: 28px !important;
        }

        .custom-image-section {
            order: -1;
        }

        .custom-decoration {
            display: none;
        }

        .custom-features {
            flex-direction: column !important;
        }

        .custom-pill {
            width: 100% !important;
        }

        .custom-btn {
            width: 100% !important;
            justify-content: center;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .custom-flexible-section {
            padding: 40px 0 !important;
        }

        .custom-heading {
            font-size: 20px !important;
        }

        .custom-description {
            font-size: 14px !important;
        }

        .custom-pill {
            font-size: 12px !important;
            padding: 10px 16px !important;
        }

        .custom-btn {
            padding: 12px 24px !important;
            font-size: 12px !important;
        }
    }

    /* Accessibility */
    .custom-btn:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    .custom-pill:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .custom-flexible-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     CUSTOM SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Initialize AOS (Animate On Scroll)
        // ============================================
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 120
            });
        }

        // ============================================
        // Stagger animations for pills
        // ============================================
        var pills = document.querySelectorAll('.custom-pill');
        pills.forEach(function(pill, index) {
            pill.style.animationDelay = (index * 0.1) + 's';
        });

        // ============================================
        // Analytics tracking for CTA clicks
        // ============================================
        document.querySelectorAll('.custom-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var heading = this.closest('.custom-flexible-section')?.querySelector('.custom-heading')?.textContent.trim();
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'custom_section_cta', {
                        'section_heading': heading
                    });
                }
            });
        });
    });
</script>

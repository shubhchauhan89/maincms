<?php
/**
 * ============================================
 * EDUCATIONAL THEME - CUSTOM SECTION DESIGN 3
 * ============================================
 * File: theme7/frontend/layout/customsections/design_3.php
 * Purpose: Modern statistics/metrics showcase
 * Version: 1.0
 * Last Updated: 2025-11-27
 * 
 * Design: Stats-focused, animated, professional
 * - Dynamic statistics items (unlimited)
 * - Large number display
 * - Metric labels
 * - Zoom + scale animations
 * - Counter animation ready
 * - Responsive grid
 * ============================================
 */

// Layout configuration
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;
$hasImage = $hasImage ?? 'yes';

// Parse statistics data
$statistics = [];
if (!empty($custom['statistics_data'])) {
    $statistics = is_array($custom['statistics_data']) 
        ? $custom['statistics_data'] 
        : json_decode($custom['statistics_data'], true);
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
     CUSTOM SECTION DESIGN 3 - STATISTICS
     ============================================ -->
<section class="custom-design-3-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="custom-design-3-decoration" 
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
        
        <!-- Statistics Grid -->
        <div class="custom-design-3-grid <?= htmlspecialchars($layoutClass) ?>"
             style="display: grid; 
                    gap: 40px; 
                    align-items: center;">
            
            <!-- Statistics Section -->
            <div class="custom-design-3-content" 
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left' ?>" 
                 data-aos-duration="800"
                 style="animation: fadeIn 0.8s ease-out;">
                
                <div class="custom-design-3-content-inner">
                    
                    <!-- Heading -->
                    <h2 class="custom-design-3-heading" 
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
                            <?= htmlspecialchars($custom['heading'] ?? 'Our Impact') ?>
                        </span>
                    </h2>

                    <!-- Description -->
                    <?php if (!empty($custom['description'])): ?>
                    <div class="custom-design-3-description" 
                         style="font-size: 15px; 
                                color: rgba(var(--text-primary), 0.8); 
                                line-height: 1.8; 
                                margin-bottom: 40px;">
                        <?= $custom['description'] ?>
                    </div>
                    <?php endif; ?>

                    <!-- Statistics Grid -->
                    <div class="custom-design-3-stats" 
                         style="display: grid; 
                                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); 
                                gap: 30px; 
                                margin-top: 40px;">
                        
                        <?php 
                        $statCount = 1;
                        if (!empty($statistics)): 
                            foreach ($statistics as $index => $stat): 
                                $stagger_delay = ($index * 0.1);
                        ?>
                            <!-- Stat Item -->
                            <div class="custom-design-3-stat-item" 
                                 data-aos="zoom-in" 
                                 data-aos-delay="<?= ($index % 4) * 100 ?>"
                                 style="animation: zoomInScale 0.6s ease-out; 
                                        animation-delay: <?= $stagger_delay ?>s; 
                                        animation-fill-mode: both; 
                                        text-align: center; 
                                        padding: 30px; 
                                        background: var(--card-background); 
                                        border: 2px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        transition: all var(--transition-normal) var(--ease-standard);"
                                 onmouseover="this.style.background='linear-gradient(135deg, rgba(33, 128, 161, 0.08), transparent)'; this.style.borderColor='var(--primary-color)'; this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 30px rgba(33, 128, 161, 0.15)'"
                                 onmouseout="this.style.background='var(--card-background)'; this.style.borderColor='var(--card-border)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                
                                <!-- Number -->
                                <div class="custom-design-3-stat-number" 
                                     style="font-size: 48px; 
                                            font-weight: 900; 
                                            background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                            -webkit-background-clip: text; 
                                            -webkit-text-fill-color: transparent; 
                                            background-clip: text; 
                                            margin-bottom: 12px; 
                                            font-family: var(--font-family-mono); 
                                            transition: all var(--transition-normal) var(--ease-standard);"
                                     onmouseover="this.style.fontSize='56px'"
                                     onmouseout="this.style.fontSize='48px'">
                                    <?= htmlspecialchars($stat['number'] ?? '0') ?>
                                </div>

                                <!-- Label -->
                                <h4 class="custom-design-3-stat-label" 
                                    style="font-size: 14px; 
                                           font-weight: 700; 
                                           color: var(--text-primary); 
                                           margin: 0; 
                                           text-transform: uppercase; 
                                           letter-spacing: 1px; 
                                           line-height: 1.5;">
                                    <?= htmlspecialchars($stat['label'] ?? 'Metric') ?>
                                </h4>

                                <!-- Optional Description -->
                                <?php if (!empty($stat['description'])): ?>
                                <p style="font-size: 12px; 
                                         color: rgba(var(--text-primary), 0.6); 
                                         margin: 8px 0 0 0; 
                                         line-height: 1.4;">
                                    <?= htmlspecialchars($stat['description']) ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        <?php 
                            $statCount++;
                            endforeach; 
                        else: 
                        ?>
                            <!-- Fallback Statistics -->
                            <div class="custom-design-3-stat-item" 
                                 style="text-align: center; 
                                        padding: 30px; 
                                        background: var(--card-background); 
                                        border: 2px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: zoomInScale 0.6s ease-out;">
                                <div style="font-size: 48px; 
                                           font-weight: 900; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           -webkit-background-clip: text; 
                                           -webkit-text-fill-color: transparent; 
                                           background-clip: text; 
                                           margin-bottom: 12px;">
                                    10K+
                                </div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--text-primary); margin: 0; text-transform: uppercase;">Projects</h4>
                            </div>

                            <div class="custom-design-3-stat-item" 
                                 style="text-align: center; 
                                        padding: 30px; 
                                        background: var(--card-background); 
                                        border: 2px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: zoomInScale 0.6s ease-out; animation-delay: 0.1s;">
                                <div style="font-size: 48px; 
                                           font-weight: 900; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           -webkit-background-clip: text; 
                                           -webkit-text-fill-color: transparent; 
                                           background-clip: text; 
                                           margin-bottom: 12px;">
                                    500+
                                </div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--text-primary); margin: 0; text-transform: uppercase;">Clients</h4>
                            </div>

                            <div class="custom-design-3-stat-item" 
                                 style="text-align: center; 
                                        padding: 30px; 
                                        background: var(--card-background); 
                                        border: 2px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: zoomInScale 0.6s ease-out; animation-delay: 0.2s;">
                                <div style="font-size: 48px; 
                                           font-weight: 900; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           -webkit-background-clip: text; 
                                           -webkit-text-fill-color: transparent; 
                                           background-clip: text; 
                                           margin-bottom: 12px;">
                                    25+
                                </div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--text-primary); margin: 0; text-transform: uppercase;">Years</h4>
                            </div>

                            <div class="custom-design-3-stat-item" 
                                 style="text-align: center; 
                                        padding: 30px; 
                                        background: var(--card-background); 
                                        border: 2px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        animation: zoomInScale 0.6s ease-out; animation-delay: 0.3s;">
                                <div style="font-size: 48px; 
                                           font-weight: 900; 
                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                           -webkit-background-clip: text; 
                                           -webkit-text-fill-color: transparent; 
                                           background-clip: text; 
                                           margin-bottom: 12px;">
                                    98%
                                </div>
                                <h4 style="font-size: 14px; font-weight: 700; color: var(--text-primary); margin: 0; text-transform: uppercase;">Success Rate</h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="custom-design-3-image-section" 
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right' ?>" 
                 data-aos-duration="800"
                 style="animation: fadeIn 0.8s ease-out; animation-delay: 0.1s;">
                
                <div class="custom-design-3-image-wrapper" 
                     style="position: relative; 
                            border-radius: var(--border-radius-lg); 
                            overflow: hidden; 
                            box-shadow: var(--shadow-lg);">
                    
                    <img src="<?= htmlspecialchars($img ?? base_url() . '/public/assets/img/no-image.png') ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Image') ?>" 
                         class="custom-design-3-image" 
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
     CUSTOM DESIGN 3 STYLES
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

    @keyframes zoomInScale {
        from {
            transform: scale(0.9);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .custom-design-3-grid.layout-full {
        grid-template-columns: 1fr;
        max-width: 900px;
        margin: 0 auto;
    }

    .custom-design-3-grid.layout-normal-right {
        grid-template-columns: 1fr 1fr;
    }

    .custom-design-3-grid.layout-normal-left {
        grid-template-columns: 1fr 1fr;
    }

    .custom-design-3-grid.layout-stretch-right {
        grid-template-columns: 1.2fr 1fr;
    }

    .custom-design-3-grid.layout-stretch-left {
        grid-template-columns: 1fr 1.2fr;
    }

    .custom-design-3-grid.layout-normal-left .custom-design-3-content {
        order: 2;
    }

    .custom-design-3-grid.layout-normal-left .custom-design-3-image-section {
        order: 1;
    }

    .custom-design-3-grid.layout-stretch-left .custom-design-3-content {
        order: 2;
    }

    .custom-design-3-grid.layout-stretch-left .custom-design-3-image-section {
        order: 1;
        min-height: 600px;
    }

    .custom-design-3-grid.layout-stretch-right .custom-design-3-image-section {
        min-height: 600px;
    }

    @media (max-width: 992px) {
        .custom-design-3-grid {
            grid-template-columns: 1fr !important;
            gap: 30px;
        }

        .custom-design-3-grid.layout-stretch-right .custom-design-3-image-section,
        .custom-design-3-grid.layout-stretch-left .custom-design-3-image-section {
            min-height: 400px !important;
        }

        .custom-design-3-heading {
            font-size: 32px !important;
        }

        .custom-design-3-stats {
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)) !important;
            gap: 20px !important;
        }
    }

    @media (max-width: 768px) {
        .custom-design-3-section {
            padding: 60px 0 !important;
        }

        .custom-design-3-grid {
            grid-template-columns: 1fr !important;
            gap: 20px;
        }

        .custom-design-3-heading {
            font-size: 28px !important;
        }

        .custom-design-3-image-section {
            order: -1;
        }

        .custom-design-3-decoration {
            display: none;
        }

        .custom-design-3-stats {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 15px !important;
        }
    }

    @media (max-width: 480px) {
        .custom-design-3-section {
            padding: 40px 0 !important;
        }

        .custom-design-3-heading {
            font-size: 20px !important;
        }

        .custom-design-3-description {
            font-size: 14px !important;
        }

        .custom-design-3-stat-item {
            padding: 20px !important;
        }

        .custom-design-3-stat-number {
            font-size: 32px !important;
        }

        .custom-design-3-stat-label {
            font-size: 12px !important;
        }

        .custom-design-3-stats {
            grid-template-columns: 1fr !important;
            gap: 12px !important;
        }
    }

    .custom-design-3-stat-item:focus-within {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    @media print {
        .custom-design-3-section {
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

        // Stagger statistics animations
        var stats = document.querySelectorAll('.custom-design-3-stat-item');
        stats.forEach(function(stat, index) {
            stat.style.setProperty('animation-delay', (index * 0.1) + 's');
        });

        // Optional: Add counter animation on scroll
        var counterElements = document.querySelectorAll('.custom-design-3-stat-number');
        var hasAnimated = false;

        function animateCounters() {
            if (hasAnimated) return;
            hasAnimated = true;

            counterElements.forEach(function(element) {
                var text = element.textContent.trim();
                var number = parseInt(text.replace(/\D/g, ''));
                var suffix = text.replace(/[0-9]/g, '');

                if (!isNaN(number)) {
                    var current = 0;
                    var increment = Math.ceil(number / 30);
                    var counter = setInterval(function() {
                        current += increment;
                        if (current >= number) {
                            current = number;
                            clearInterval(counter);
                        }
                        element.textContent = current + suffix;
                    }, 30);
                }
            });
        }

        // Trigger counter animation on scroll
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            var statsSection = document.querySelector('.custom-design-3-section');
            if (statsSection) {
                observer.observe(statsSection);
            }
        }
    });
</script>

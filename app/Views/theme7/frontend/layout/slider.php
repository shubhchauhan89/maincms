<?php
/**
 * ============================================
 * EDUCATIONAL THEME - HERO SLIDER COMPONENT
 * ============================================
 * File: theme7/frontend/layout/hero-slider.php
 * Purpose: Modern hero slider matching wireframe
 * Version: 1.0
 * Last Updated: 2025-11-27
 * 
 * Design: Clean, modern, professional
 * - Full-width hero slider
 * - Content positioning (left, center, right)
 * - Image blur overlay option
 * - Smooth animations
 * - Responsive design
 * - Color-themed
 * ============================================
 */
?>

<!-- ============================================
     HERO SLIDER SECTION
     ============================================ -->
<section class="hero-slider-section" style="position: relative; overflow: hidden;">
    
    <?php
    if (!empty($sliders)) {
        foreach ($sliders as $slider) {
            if (isset($slider['section_id']) && $slider['section_id'] == ($myurl['section_id'] ?? null)) {
                if (isset($slider['section_id'])) {
                    unset($slider['section_id']);
                }
                
                $slide_index = 0;
                foreach ($slider as $key => $sldr) {
                    $slide_index++;
                    $content_position = strtolower($sldr['content_position'] ?? 'center');
                    $has_blur = strtolower($sldr['image_blur'] ?? 'no') === 'yes';
                    $has_content_box = strtolower($sldr['blur'] ?? 'no') === 'yes';
                    
                    // Determine animation direction
                    if ($content_position === 'left') {
                        $animation_class = 'slide-in-left';
                    } elseif ($content_position === 'right') {
                        $animation_class = 'slide-in-right';
                    } else {
                        $animation_class = 'zoom-in';
                    }
                    
                    // Alignment mapping
                    if ($content_position === 'left') {
                        $align_class = 'justify-content-start';
                    } elseif ($content_position === 'right') {
                        $align_class = 'justify-content-end';
                    } else {
                        $align_class = 'justify-content-center';
                    }
                    
                    if ($content_position === 'left') {
                        $text_align = 'text-start';
                    } elseif ($content_position === 'right') {
                        $text_align = 'text-end';
                    } else {
                        $text_align = 'text-center';
                    }
                    
                    if ($content_position === 'left') {
                        $padding_class = 'ps-5';
                    } elseif ($content_position === 'right') {
                        $padding_class = 'pe-5';
                    } else {
                        $padding_class = '';
                    }
                    ?>
                    
                    <!-- Individual Slide -->
                    <div class="hero-slide position-relative" 
                         style="position: relative; 
                                 height: 500px; 
                                 background-image: url('<?= base_url() ?>/public/uploads/slider_images/<?= esc($sldr['image'] ?? '', 'attr') ?>'); 
                                 background-size: cover; 
                                 background-position: center; 
                                 background-attachment: fixed;">
                        
                        <!-- Image Overlay (optional blur) -->
                        <?php if ($has_blur) { ?>
                        <div class="slider-overlay position-absolute top-0 start-0 w-100 h-100" 
                             style="background: linear-gradient(135deg, rgba(33, 128, 161, 0.3), rgba(230, 126, 34, 0.2)); 
                                     backdrop-filter: blur(3px); 
                                     z-index: 1;"></div>
                        <?php } else { ?>
                        <div class="slider-overlay position-absolute top-0 start-0 w-100 h-100" 
                             style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1)); 
                                     z-index: 1;"></div>
                        <?php } ?>

                        <!-- Slide Content -->
                        <div class="hero-content position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center <?= $align_class ?>" 
                             style="z-index: 2; padding: 0 40px;">
                            
                            <!-- Content Wrapper (optional box background) -->
                            <div class="content-box <?= $text_align ?>" 
                                 style="<?php if ($has_content_box) { 
                                     echo 'background: rgba(255, 255, 255, 0.95); 
                                           backdrop-filter: blur(10px); 
                                           padding: 40px; 
                                           border-radius: var(--border-radius-lg); 
                                           max-width: 500px; 
                                           box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);'; 
                                 } ?>">
                                
                                <!-- Slide Title -->
                                <h1 class="slide-title <?= $animation_class ?>" 
                                    style="color: <?= esc($sldr['heading_color'] ?? '#ffffff', 'attr') ?>; 
                                           font-family: <?= esc($sldr['title_style'] ?? 'inherit', 'attr') ?>; 
                                           font-size: <?= intval($sldr['title_font_size'] ?? 48) ?>px; 
                                           font-weight: 700; 
                                           line-height: 1.2; 
                                           margin: 0 0 20px 0; 
                                           animation-delay: 0.2s; 
                                           animation-fill-mode: both;">
                                    <?= esc($sldr['title'] ?? '', 'html') ?>
                                </h1>

                                <!-- Slide Description -->
                                <?php if (!empty($sldr['desc'])) { ?>
                                <p class="slide-description <?= $animation_class ?>" 
                                   style="color: <?= esc($sldr['text_color'] ?? '#666666', 'attr') ?>; 
                                          font-family: <?= esc($sldr['desc_style'] ?? 'inherit', 'attr') ?>; 
                                          font-size: <?= intval($sldr['description_font_size'] ?? 18) ?>px; 
                                          line-height: 1.6; 
                                          margin: 0 0 30px 0; 
                                          animation-delay: 0.4s; 
                                          animation-fill-mode: both;">
                                    <?= esc($sldr['desc'] ?? '', 'html') ?>
                                </p>
                                <?php } ?>

                                <!-- CTA Button (optional) -->
                                <div class="slide-cta <?= $animation_class ?>" 
                                     style="animation-delay: 0.6s; animation-fill-mode: both;">
                                    <button class="btn btn-primary" 
                                            style="background-color: var(--inquiry_button_color); 
                                                   color: var(--primary-text-color); 
                                                   border: none; 
                                                   padding: 12px 32px; 
                                                   border-radius: var(--border-radius); 
                                                   font-size: 15px; 
                                                   font-weight: 600; 
                                                   cursor: pointer; 
                                                   transition: all var(--transition-normal) var(--ease-standard); 
                                                   box-shadow: 0 4px 12px rgba(33, 128, 161, 0.3);"
                                            onmouseover="this.style.backgroundColor='var(--accent-color)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(33, 128, 161, 0.4)'"
                                            onmouseout="this.style.backgroundColor='var(--inquiry_button_color)'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(33, 128, 161, 0.3)'">
                                        <i class="fa-solid fa-arrow-right me-2"></i>Explore Now
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Counter (optional) -->
                        <div class="slide-counter position-absolute bottom-0 end-0" 
                             style="z-index: 3; padding: 20px; background: rgba(0, 0, 0, 0.3); color: white; font-size: 12px; border-radius: var(--border-radius) 0 0 0;">
                            <span><?= $slide_index ?> / <?= count($slider) ?></span>
                        </div>
                    </div>

                    <?php
                }
            }
        }
    } else {
        // Fallback if no sliders available
        ?>
        <div class="hero-slide position-relative" 
             style="position: relative; 
                     height: 500px; 
                     background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                     display: flex; 
                     align-items: center; 
                     justify-content: center;">
            
            <div class="text-center text-white" style="z-index: 2;">
                <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">
                    Welcome to Our Educational Platform
                </h1>
                <p style="font-size: 18px; margin-bottom: 30px;">
                    Learn, grow, and achieve your goals with our comprehensive courses
                </p>
                <button class="btn btn-light" 
                        style="padding: 12px 32px; border-radius: var(--border-radius); font-weight: 600;">
                    <i class="fa-solid fa-arrow-right me-2"></i>Get Started
                </button>
            </div>
        </div>
        <?php
    }
    ?>
</section>


<!-- ============================================
     SLIDER STYLES
     ============================================ -->
<style>
    /* Hero Slider Container */
    .hero-slider-section {
        width: 100%;
        background: var(--section-background);
    }

    /* Individual Slide */
    .hero-slide {
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    /* Slide Content */
    .hero-content {
        width: 100%;
        height: 100%;
    }

    /* Content Box */
    .content-box {
        animation: fadeIn 1s ease-out forwards;
    }

    /* Slide Title */
    .slide-title {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    /* Slide Description */
    .slide-description {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    /* ============================================
       ANIMATIONS
       ============================================ */

    /* Slide In Left Animation */
    @keyframes slideInLeft {
        from {
            transform: translateX(-100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Slide In Right Animation */
    @keyframes slideInRight {
        from {
            transform: translateX(100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Zoom In Animation */
    @keyframes zoomIn {
        from {
            transform: scale(0.9);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Fade In Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Apply animations to elements */
    .slide-in-left {
        animation: slideInLeft 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .slide-in-right {
        animation: slideInRight 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .zoom-in {
        animation: zoomIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Button Styles */
    .btn-primary {
        cursor: pointer;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .btn-primary:hover {
        text-decoration: none;
    }

    .btn-light {
        background-color: white !important;
        color: var(--primary-color) !important;
        font-weight: 600;
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .btn-light:hover {
        background-color: var(--primary-color) !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(33, 128, 161, 0.4);
    }

    /* Slide Counter */
    .slide-counter {
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .hero-slide {
            height: 400px;
        }

        .slide-title {
            font-size: 36px !important;
        }

        .slide-description {
            font-size: 16px !important;
        }

        .content-box {
            max-width: 450px !important;
            padding: 30px !important;
        }

        .hero-content {
            padding: 0 20px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .hero-slide {
            height: 300px;
        }

        .slide-title {
            font-size: 24px !important;
            line-height: 1.3;
        }

        .slide-description {
            font-size: 13px !important;
            margin-bottom: 20px !important;
        }

        .content-box {
            max-width: 90% !important;
            padding: 20px !important;
            background: rgba(255, 255, 255, 0.98) !important;
        }

        .hero-content {
            padding: 0 15px !important;
        }

        .btn-primary,
        .btn-light {
            padding: 10px 20px !important;
            font-size: 13px !important;
        }

        .slide-counter {
            padding: 10px 15px !important;
            font-size: 11px !important;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .hero-slide {
            height: 250px;
        }

        .slide-title {
            font-size: 18px !important;
            margin-bottom: 10px !important;
        }

        .slide-description {
            font-size: 12px !important;
            margin-bottom: 15px !important;
            line-height: 1.4;
        }

        .content-box {
            max-width: 95% !important;
            padding: 15px !important;
        }

        .btn-primary,
        .btn-light {
            padding: 8px 16px !important;
            font-size: 12px !important;
            width: 100%;
        }
    }

    /* Accessibility */
    .btn-primary:focus-visible,
    .btn-light:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .hero-slider-section {
            display: none;
        }
    }
</style>


<!-- ============================================
     SLIDER JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Initialize Slider Animations
        // ============================================
        initializeSliderAnimations();
        
        // Reinitialize on window resize
        window.addEventListener('resize', function() {
            initializeSliderAnimations();
        });

        function initializeSliderAnimations() {
            // Animate all slides on load
            const slides = document.querySelectorAll('.hero-slide');
            const animationElements = document.querySelectorAll('.slide-title, .slide-description, .slide-cta');
            
            animationElements.forEach(element => {
                // Reset animation
                element.style.animationPlayState = 'running';
            });
        }

        // ============================================
        // Intersection Observer for lazy loading
        // ============================================
        if ('IntersectionObserver' in window) {
            const slides = document.querySelectorAll('.hero-slide');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Trigger animation when slide enters viewport
                        entry.target.classList.add('in-view');
                    }
                });
            }, {
                threshold: 0.1
            });

            slides.forEach(slide => observer.observe(slide));
        }

        // ============================================
        // Scroll Performance Optimization
        // ============================================
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    updateSliderOnScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        function updateSliderOnScroll() {
            const sliders = document.querySelectorAll('.hero-slide');
            sliders.forEach(slider => {
                const rect = slider.getBoundingClientRect();
                const parallaxElements = slider.querySelectorAll('[style*="background-attachment"]');
                
                if (window.innerHeight > rect.top && 0 > rect.bottom) {
                    // Slider is in viewport, update parallax if applicable
                    const scrollPercent = (window.innerHeight - rect.top) / (window.innerHeight + rect.height);
                    // This can be extended for parallax effects
                }
            });
        }

        // ============================================
        // Button Click Tracking
        // ============================================
        document.querySelectorAll('.slide-cta button').forEach(button => {
            button.addEventListener('click', function() {
                // Track button click if analytics available
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'slider_cta_click', {
                        'button_text': this.textContent.trim()
                    });
                }
            });
        });

        // ============================================
        // Keyboard Navigation (Accessibility)
        // ============================================
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                // Can be extended for slider navigation
            }
        });
    });
</script>

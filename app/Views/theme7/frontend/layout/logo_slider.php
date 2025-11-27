
<section class="amenities-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Decoration -->
    <div class="amenities-decoration" 
         style="position: absolute; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                z-index: 0; 
                overflow: hidden;">
        
        <!-- Floating circles -->
        <div style="position: absolute; 
                   width: 200px; 
                   height: 200px; 
                   background: radial-gradient(circle, rgba(33, 128, 161, 0.08), transparent); 
                   border-radius: 50%; 
                   top: 50px; 
                   right: 5%; 
                   animation: float 8s ease-in-out infinite;"></div>
        
        <div style="position: absolute; 
                   width: 150px; 
                   height: 150px; 
                   background: radial-gradient(circle, rgba(230, 126, 34, 0.08), transparent); 
                   border-radius: 50%; 
                   bottom: 100px; 
                   left: 10%; 
                   animation: float 10s ease-in-out infinite; 
                   animation-delay: 1s;"></div>
        
        <!-- Grid pattern -->
        <svg style="position: absolute; 
                   width: 100%; 
                   height: 100%; 
                   opacity: 0.03;" 
             xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
                    <path d="M 50 0 L 0 0 0 50" fill="none" stroke="var(--primary-color)" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="container" style="position: relative; z-index: 1;">
        
        <?php
        // Get amenities title
        $amenities_title = 'Our Amenities';

        if (!empty($logo_slider) && is_array($logo_slider) && !empty($logo_slider[0])) {
            if (isset($logo_slider[0]['sub_menu_name'])) {
                $amenities_title = $logo_slider[0]['sub_menu_name'];
            }
        }

        // Also check sort_order
        if (!empty($sort_order)) {
            foreach ($sort_order as $item) {
                if ($item['url_val'] === 'logo_slider' && !empty($item['title'])) {
                    $amenities_title = $item['title'];
                    break;
                }
            }
        }
        ?>

        <!-- Section Header -->
        <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
            
            <h2 class="amenities-title fw-bold" 
                style="font-size: 42px; 
                       color: var(--text-primary); 
                       margin-bottom: 15px; 
                       text-transform: uppercase; 
                       letter-spacing: 2px; 
                       position: relative; 
                       display: inline-block;">
                <span style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                           -webkit-background-clip: text; 
                           -webkit-text-fill-color: transparent; 
                           background-clip: text;">
                    <?= esc($amenities_title, 'html') ?>
                </span>
            </h2>
            
            <!-- Animated divider -->
            <div style="width: 120px; 
                       height: 5px; 
                       background: linear-gradient(90deg, var(--primary-color), var(--accent-color)); 
                       margin: 25px auto; 
                       border-radius: 3px; 
                       animation: expandWidth 0.8s ease-out; 
                       animation-delay: 0.2s; 
                       animation-fill-mode: both;"></div>
            
            <p class="section-subtitle" 
               style="font-size: 16px; 
                      color: rgba(var(--text-primary), 0.7); 
                      margin-top: 15px; 
                      animation: fadeIn 0.8s ease-out; 
                      animation-delay: 0.3s;">
                Discover the features that make our platform exceptional
            </p>
        </div>

        <!-- Amenities Grid -->
        <div class="amenities-grid" 
             style="display: grid; 
                   grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); 
                   gap: 30px; 
                   margin-top: 50px; 
                   animation: fadeIn 0.8s ease-out; 
                   animation-delay: 0.4s;">
            
            <?php
            if (!empty($logo_slider) && is_array($logo_slider)) {
                $amenityIndex = 0;
                
                // Extract amenities from the first level of array
                $amenities = $logo_slider[0];
                
                foreach ($amenities as $key => $amenity) {
                    // Skip non-array items and section_id, sub_menu_name
                    if (!is_array($amenity) || $key === 'section_id' || $key === 'sub_menu_name') {
                        continue;
                    }

                    if (isset($amenity['image']) && isset($amenity['name'])) {
                        $img = !empty($amenity['image']) 
                            ? base_url() . '/public/uploads/logo_slider_images/' . esc($amenity['image'], 'attr')
                            : base_url() . '/public/assets/img/no-image.png';
                        
                        $name = esc($amenity['name'], 'html');
                        $amenityIndex++;
                        $stagger_delay = ($amenityIndex * 0.08);
                        ?>
                        
                        <!-- Amenity Item -->
                        <div class="amenity-item" 
                             style="animation: zoomInScale 0.6s ease-out; 
                                    animation-delay: <?= $stagger_delay ?>s; 
                                    animation-fill-mode: both; 
                                    cursor: pointer;">
                            
                            <!-- Amenity Card -->
                            <div class="amenity-card" 
                                 style="background: var(--card-background); 
                                        border: 1px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        padding: 30px 20px; 
                                        text-align: center; 
                                        height: 100%; 
                                        display: flex; 
                                        flex-direction: column; 
                                        align-items: center; 
                                        justify-content: center; 
                                        transition: all var(--transition-normal) var(--ease-standard); 
                                        position: relative; 
                                        overflow: hidden; 
                                        box-shadow: var(--shadow-sm);"
                                 onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='var(--shadow-lg)'; this.style.borderColor='var(--primary-color)'"
                                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-sm)'; this.style.borderColor='var(--card-border)'">
                                
                                <!-- Background glow effect -->
                                <div style="position: absolute; 
                                           top: 0; 
                                           left: 0; 
                                           width: 100%; 
                                           height: 100%; 
                                           background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                                           opacity: 0; 
                                           transition: opacity var(--transition-normal) var(--ease-standard); 
                                           z-index: 0;"
                                     onmouseover="this.style.opacity='1'"
                                     onmouseout="this.style.opacity='0'"></div>

                                <!-- Content wrapper -->
                                <div style="position: relative; z-index: 1; width: 100%;">
                                    
                                    <!-- Icon Container -->
                                    <div class="amenity-icon-wrapper" 
                                         style="margin-bottom: 20px; 
                                                display: flex; 
                                                justify-content: center;">
                                        
                                        <div class="amenity-icon" 
                                             style="width: 80px; 
                                                    height: 80px; 
                                                    background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                                                    border-radius: var(--border-radius-lg); 
                                                    display: flex; 
                                                    align-items: center; 
                                                    justify-content: center; 
                                                    transition: all var(--transition-normal) var(--ease-standard); 
                                                    border: 2px solid var(--card-border);"
                                             onmouseover="this.style.background='linear-gradient(135deg, var(--primary-color), var(--accent-color))'; this.style.transform='scale(1.1) rotate(5deg)'; this.style.borderColor='var(--primary-color)'"
                                             onmouseout="this.style.background='linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1))'; this.style.transform='scale(1) rotate(0deg)'; this.style.borderColor='var(--card-border)'">
                                            
                                            <img src="<?= $img ?>" 
                                                 alt="<?= $name ?>" 
                                                 loading="lazy"
                                                 title="<?= $name ?>"
                                                 style="width: 50px; 
                                                        height: 50px; 
                                                        object-fit: contain; 
                                                        transition: transform var(--transition-normal) var(--ease-standard);"
                                                 onmouseover="this.style.transform='scale(1.15)'"
                                                 onmouseout="this.style.transform='scale(1)'">
                                        </div>
                                    </div>

                                    <!-- Amenity Name -->
                                    <h4 class="amenity-name" 
                                        style="font-size: 15px; 
                                               font-weight: 700; 
                                               color: var(--text-primary); 
                                               margin: 0; 
                                               line-height: 1.4; 
                                               transition: color var(--transition-normal) var(--ease-standard);"
                                        onmouseover="this.style.color='var(--primary-color)'"
                                        onmouseout="this.style.color='var(--text-primary)'">
                                        <?= $name ?>
                                    </h4>

                                    <!-- Bottom accent line (appears on hover) -->
                                    <div style="width: 0; 
                                               height: 2px; 
                                               background: linear-gradient(90deg, var(--primary-color), var(--accent-color)); 
                                               margin: 12px auto 0; 
                                               transition: width var(--transition-normal) var(--ease-standard);"
                                         onmouseover="this.style.width='40px'"
                                         onmouseout="this.style.width='0'"></div>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                    }
                }
            } else {
                ?>
                <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                    <i class="fa-solid fa-star" 
                       style="font-size: 48px; 
                              color: rgba(var(--text-primary), 0.3); 
                              margin-bottom: 15px; 
                              display: block;"></i>
                    <p style="color: rgba(var(--text-primary), 0.6); font-size: 16px;">
                        No amenities available at the moment
                    </p>
                </div>
                <?php
            }
            ?>
        </div>

        <!-- Optional: Features highlight row -->
        <?php if (!empty($logo_slider) && count($logo_slider[0]) > 6) { ?>
        <div class="amenities-highlight" 
             style="margin-top: 60px; 
                    padding: 40px; 
                    background: linear-gradient(135deg, rgba(33, 128, 161, 0.05), rgba(230, 126, 34, 0.05)); 
                    border: 1px solid var(--card-border); 
                    border-radius: var(--border-radius-lg); 
                    text-align: center; 
                    animation: slideUpFade 0.8s ease-out; 
                    animation-delay: 0.6s;">
            
            <p style="font-size: 15px; 
                     color: rgba(var(--text-primary), 0.8); 
                     margin: 0; 
                     line-height: 1.6;">
                <i class="fa-solid fa-check-circle me-2" style="color: var(--primary-color);"></i>
                All amenities are carefully designed to provide an exceptional learning experience
            </p>
        </div>
        <?php } ?>
    </div>
</section>


<!-- ============================================
     AMENITIES SECTION STYLES
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

    @keyframes slideDownFade {
        from {
            transform: translateY(-30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideUpFade {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes expandWidth {
        from {
            width: 0;
            opacity: 0;
        }
        to {
            width: 120px;
            opacity: 1;
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

    @keyframes zoomInScale {
        from {
            transform: scale(0.7);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Grid responsive styles */
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 30px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 20px;
        }

        .amenities-title {
            font-size: 32px !important;
        }

        .amenity-card {
            padding: 20px 15px !important;
        }

        .amenity-icon {
            width: 70px !important;
            height: 70px !important;
        }

        .amenity-icon img {
            width: 45px !important;
            height: 45px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .amenities-section {
            padding: 60px 0 !important;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 15px;
        }

        .amenities-title {
            font-size: 24px !important;
        }

        .amenity-card {
            padding: 15px 12px !important;
        }

        .amenity-icon {
            width: 60px !important;
            height: 60px !important;
        }

        .amenity-icon img {
            width: 40px !important;
            height: 40px !important;
        }

        .amenity-name {
            font-size: 13px !important;
        }

        .amenities-decoration {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            gap: 10px;
        }

        .amenity-card {
            padding: 12px 10px !important;
        }

        .amenity-icon {
            width: 50px !important;
            height: 50px !important;
        }

        .amenity-icon img {
            width: 32px !important;
            height: 32px !important;
        }

        .amenity-name {
            font-size: 11px !important;
        }
    }

    /* Accessibility */
    .amenity-card:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .amenities-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     AMENITIES SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var amenityItems = document.querySelectorAll('.amenity-item');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, {
                threshold: 0.1
            });

            amenityItems.forEach(function(item) {
                observer.observe(item);
            });
        }

        // ============================================
        // Analytics tracking for amenity interactions
        // ============================================
        document.querySelectorAll('.amenity-card').forEach(function(card) {
            card.addEventListener('mouseenter', function() {
                var amenityName = this.querySelector('.amenity-name').textContent.trim();
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'amenity_hover', {
                        'amenity_name': amenityName
                    });
                }
            });
        });

        // ============================================
        // Smooth stagger animation delays
        // ============================================
        var amenityItems = document.querySelectorAll('.amenity-item');
        amenityItems.forEach(function(item, index) {
            var delay = (index * 0.08);
            item.style.setProperty('animation-delay', delay + 's');
        });

        // ============================================
        // Keyboard Navigation
        // ============================================
        document.querySelectorAll('.amenity-card').forEach(function(card, index) {
            card.setAttribute('tabindex', '0');
            card.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.dispatchEvent(new MouseEvent('mouseenter'));
                }
            });
        });
    });
</script>

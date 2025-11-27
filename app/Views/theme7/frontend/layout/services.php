
<section class="services-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="services-decoration" 
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
        
        <?php
        $heading = "";
        if (!empty($services)) {
            foreach ($services as $service) {
                $heading = $service['sub_menu_name'] ?? 'Our Services';
                unset($service['sub_menu_name']);
                
                if (isset($service['section_id']) && $service['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($service['section_id'])) {
                        unset($service['section_id']);
                    }
                    ?>
                    
                    <!-- Section Header -->
                    <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
                        
                        <h2 class="services-title fw-bold" 
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
                                <?= esc($heading, 'html') ?>
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
                           style="font-size: 15px; 
                                  color: rgba(var(--text-primary), 0.7); 
                                  margin-top: 15px; 
                                  animation: fadeIn 0.8s ease-out; 
                                  animation-delay: 0.3s;">
                            Explore our comprehensive range of professional services
                        </p>
                    </div>

                    <!-- Services Grid -->
                    <div class="services-grid" 
                         style="display: grid; 
                                grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); 
                                gap: 30px; 
                                margin-top: 50px; 
                                animation: fadeIn 0.8s ease-out; 
                                animation-delay: 0.4s;">
                        
                        <?php
                        $service_count = 0;
                        if (!empty($service)) {
                            foreach ($service as $s) {
                                $service_count++;
                                
                                // Image handling
                                $img = !empty($s['image']) 
                                    ? base_url() . "/public/uploads/service_images/" . esc($s['image'], 'attr')
                                    : base_url() . "/public/assets/img/no-service.png";
                                
                                // URL handling
                                $service_url = base_url() . '/services/' . esc($s['menu_link'] ?? '', 'url');
                                $service_name = esc($s['service'] ?? 'Service', 'html');
                                $stagger_delay = ($service_count * 0.1);
                                ?>
                                
                                <!-- Service Card -->
                                <div class="service-card-wrapper" 
                                     style="animation: zoomInScale 0.6s ease-out; 
                                            animation-delay: <?= $stagger_delay ?>s; 
                                            animation-fill-mode: both; 
                                            perspective: 1000px;">
                                    
                                    <!-- Flip Container -->
                                    <div class="service-card-flip" 
                                         style="position: relative; 
                                                width: 100%; 
                                                height: 350px; 
                                                transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); 
                                                transform-style: preserve-3d;"
                                         onmouseover="this.style.transform='rotateY(180deg)'"
                                         onmouseout="this.style.transform='rotateY(0deg)'">
                                        
                                        <!-- Front Side (Image) -->
                                        <div class="service-card-front" 
                                             style="position: absolute; 
                                                    width: 100%; 
                                                    height: 100%; 
                                                    backface-visibility: hidden; 
                                                    -webkit-backface-visibility: hidden; 
                                                    display: flex; 
                                                    flex-direction: column; 
                                                    border-radius: var(--border-radius-lg); 
                                                    overflow: hidden;">
                                            
                                            <!-- Image Container -->
                                            <div style="position: relative; 
                                                       width: 100%; 
                                                       height: 250px; 
                                                       overflow: hidden; 
                                                       background: linear-gradient(135deg, var(--section-background), var(--card-background));">
                                                
                                                <img src="<?= $img ?>" 
                                                     alt="<?= $service_name ?>" 
                                                     style="width: 100%; 
                                                            height: 100%; 
                                                            object-fit: cover; 
                                                            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);"
                                                     onmouseover="this.style.transform='scale(1.1) rotate(2deg)'"
                                                     onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                                
                                                <!-- Overlay -->
                                                <div style="position: absolute; 
                                                           top: 0; 
                                                           left: 0; 
                                                           width: 100%; 
                                                           height: 100%; 
                                                           background: linear-gradient(135deg, rgba(33, 128, 161, 0.2), rgba(230, 126, 34, 0.2)); 
                                                           z-index: 1;"></div>
                                            </div>

                                            <!-- Service Name -->
                                            <div style="background: var(--primary-color); 
                                                       color: white; 
                                                       padding: 15px; 
                                                       text-align: center; 
                                                       flex-grow: 1; 
                                                       display: flex; 
                                                       align-items: center; 
                                                       justify-content: center;">
                                                
                                                <h5 style="font-size: 15px; 
                                                          font-weight: 700; 
                                                          margin: 0; 
                                                          line-height: 1.4; 
                                                          text-transform: uppercase; 
                                                          letter-spacing: 0.5px;">
                                                    <?= strlen($service_name) > 40 ? substr($service_name, 0, 40) . '...' : $service_name ?>
                                                </h5>
                                            </div>

                                            <!-- Flip Icon Indicator -->
                                            <div style="position: absolute; 
                                                       top: 15px; 
                                                       right: 15px; 
                                                       width: 35px; 
                                                       height: 35px; 
                                                       background: rgba(255, 255, 255, 0.9); 
                                                       border-radius: 50%; 
                                                       display: flex; 
                                                       align-items: center; 
                                                       justify-content: center; 
                                                       font-size: 18px; 
                                                       color: var(--primary-color); 
                                                       z-index: 3; 
                                                       transition: all 0.3s ease; 
                                                       opacity: 0.7;"
                                                 onmouseover="this.style.opacity='1'; this.style.transform='scale(1.1)'"
                                                 onmouseout="this.style.opacity='0.7'; this.style.transform='scale(1)'">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                            </div>
                                        </div>

                                        <!-- Back Side (Content) -->
                                        <div class="service-card-back" 
                                             style="position: absolute; 
                                                    width: 100%; 
                                                    height: 100%; 
                                                    backface-visibility: hidden; 
                                                    -webkit-backface-visibility: hidden; 
                                                    transform: rotateY(180deg); 
                                                    background: linear-gradient(135deg, var(--primary-color), rgba(33, 128, 161, 0.9)); 
                                                    border-radius: var(--border-radius-lg); 
                                                    display: flex; 
                                                    flex-direction: column; 
                                                    align-items: center; 
                                                    justify-content: center; 
                                                    padding: 30px; 
                                                    text-align: center; 
                                                    box-shadow: 0 10px 40px rgba(33, 128, 161, 0.3);">
                                            
                                            <!-- Back Content -->
                                            <div style="flex-grow: 1; 
                                                       display: flex; 
                                                       flex-direction: column; 
                                                       justify-content: center; 
                                                       gap: 20px;">
                                                
                                                <!-- Service Icon -->
                                                <div style="font-size: 48px; 
                                                           color: rgba(255, 255, 255, 0.3);">
                                                    <i class="fa-solid fa-sparkles"></i>
                                                </div>

                                                <!-- Service Description -->
                                                <div>
                                                    <h5 style="color: white; 
                                                              font-size: 16px; 
                                                              font-weight: 700; 
                                                              margin-bottom: 12px; 
                                                              text-transform: uppercase; 
                                                              letter-spacing: 1px;">
                                                        <?= strlen($service_name) > 30 ? substr($service_name, 0, 30) . '...' : $service_name ?>
                                                    </h5>
                                                    <p style="color: rgba(255, 255, 255, 0.9); 
                                                             font-size: 13px; 
                                                             line-height: 1.6; 
                                                             margin: 0;">
                                                        Explore this service and discover how it can benefit your learning journey
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Know More Button -->
                                            <a href="<?= $service_url ?>" 
                                               class="service-know-more-btn" 
                                               style="background: white; 
                                                      color: var(--primary-color); 
                                                      padding: 12px 28px; 
                                                      border-radius: var(--border-radius); 
                                                      font-weight: 600; 
                                                      text-decoration: none; 
                                                      font-size: 13px; 
                                                      text-transform: uppercase; 
                                                      letter-spacing: 0.5px; 
                                                      transition: all var(--transition-normal) var(--ease-standard); 
                                                      display: inline-flex; 
                                                      align-items: center; 
                                                      gap: 8px;"
                                               onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(255, 255, 255, 0.3)'"
                                               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                                Know More
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            }
                        } else {
                            ?>
                            <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                                <i class="fa-solid fa-briefcase" 
                                   style="font-size: 48px; 
                                          color: rgba(var(--text-primary), 0.3); 
                                          margin-bottom: 15px; 
                                          display: block;"></i>
                                <p style="color: rgba(var(--text-primary), 0.6); font-size: 16px;">
                                    No services available at the moment
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    
                    <?php
                }
            }
        } else {
            ?>
            <div class="empty-state text-center py-5">
                <i class="fa-solid fa-inbox" 
                   style="font-size: 48px; 
                          color: rgba(var(--text-primary), 0.3); 
                          margin-bottom: 20px; 
                          display: block;"></i>
                <h3 style="color: var(--text-primary); font-size: 20px; margin-bottom: 10px;">No Services Found</h3>
                <p style="color: rgba(var(--text-primary), 0.6);">Please check back soon for our services</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     SERVICES SECTION STYLES
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
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Services Grid */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
        gap: 30px;
    }

    /* 3D Flip Effect */
    .service-card-flip {
        transform-style: preserve-3d;
    }

    .service-card-front,
    .service-card-back {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .services-title {
            font-size: 32px !important;
        }

        .service-card-flip {
            height: 320px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .services-section {
            padding: 60px 0 !important;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .services-title {
            font-size: 28px !important;
        }

        .service-card-flip {
            height: 300px !important;
        }

        .services-decoration {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .services-section {
            padding: 40px 0 !important;
        }

        .services-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .services-title {
            font-size: 20px !important;
        }

        .service-card-flip {
            height: 280px !important;
        }
    }

    /* Accessibility */
    .service-card-flip:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    .service-know-more-btn:focus-visible {
        outline: 2px solid white;
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .services-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     SERVICES SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var serviceCards = document.querySelectorAll('.service-card-wrapper');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, {
                threshold: 0.1
            });

            serviceCards.forEach(function(card) {
                observer.observe(card);
            });
        }

        // ============================================
        // Touch support for mobile flip cards
        // ============================================
        var flipCards = document.querySelectorAll('.service-card-flip');
        flipCards.forEach(function(card) {
            var isFlipped = false;
            
            card.addEventListener('click', function() {
                if (isFlipped) {
                    this.style.transform = 'rotateY(0deg)';
                    isFlipped = false;
                } else {
                    this.style.transform = 'rotateY(180deg)';
                    isFlipped = true;
                }
            });

            // Reset on mouse leave
            card.parentElement.addEventListener('mouseleave', function() {
                if (window.innerWidth > 768) {
                    card.style.transform = 'rotateY(0deg)';
                    isFlipped = false;
                }
            });
        });

        // ============================================
        // Analytics tracking for service interactions
        // ============================================
        document.querySelectorAll('.service-know-more-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var serviceName = this.closest('.service-card-flip').querySelector('h5').textContent.trim();
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'service_view', {
                        'service_name': serviceName
                    });
                }
            });
        });

        // ============================================
        // Stagger animation delays
        // ============================================
        var serviceWrappers = document.querySelectorAll('.service-card-wrapper');
        serviceWrappers.forEach(function(wrapper, index) {
            var delay = (index * 0.1);
            wrapper.style.setProperty('animation-delay', delay + 's');
        });
    });
</script>

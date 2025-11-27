
<section class="testimonials-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--primary-color) 0%, rgba(33, 128, 161, 0.95) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Decoration -->
    <div class="testimonials-decoration" 
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
                   background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent); 
                   border-radius: 50%; 
                   top: -50px; 
                   right: 5%; 
                   animation: float 8s ease-in-out infinite;"></div>
        
        <div style="position: absolute; 
                   width: 200px; 
                   height: 200px; 
                   background: radial-gradient(circle, rgba(230, 126, 34, 0.1), transparent); 
                   border-radius: 50%; 
                   bottom: 100px; 
                   left: 10%; 
                   animation: float 10s ease-in-out infinite; 
                   animation-delay: 1s;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 1;">
        
        <?php
        if (!empty($testimonials)) {
            foreach ($testimonials as $testi) {
                if (isset($testi['section_id']) && $testi['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($testi['section_id'])) {
                        unset($testi['section_id']);
                    }
                    
                    $datasubmenu = $testi['sub_menu_name'] ?? 'What Our Clients Say';
                    if (isset($testi['sub_menu_name'])) {
                        unset($testi['sub_menu_name']);
                    }
                    ?>
                    
                    <!-- Section Header -->
                    <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
                        
                        <h2 class="testimonials-title fw-bold" 
                            style="font-size: 42px; 
                                   color: white; 
                                   margin-bottom: 15px; 
                                   text-transform: uppercase; 
                                   letter-spacing: 2px; 
                                   text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                            <?= esc($datasubmenu, 'html') ?>
                        </h2>
                        
                        <!-- Animated divider -->
                        <div style="width: 120px; 
                                   height: 5px; 
                                   background: linear-gradient(90deg, rgba(255, 255, 255, 0.8), rgba(230, 126, 34, 0.8)); 
                                   margin: 25px auto; 
                                   border-radius: 3px; 
                                   animation: expandWidth 0.8s ease-out; 
                                   animation-delay: 0.2s; 
                                   animation-fill-mode: both;"></div>
                        
                        <p class="section-subtitle" 
                           style="font-size: 16px; 
                                  color: rgba(255, 255, 255, 0.9); 
                                  margin-top: 15px; 
                                  animation: fadeIn 0.8s ease-out; 
                                  animation-delay: 0.3s;">
                            Hear from our satisfied students and partners
                        </p>
                    </div>

                    <!-- Testimonials Grid -->
                    <div class="testimonials-grid" 
                         style="display: grid; 
                                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
                                gap: 30px; 
                                margin-top: 50px; 
                                animation: fadeIn 0.8s ease-out; 
                                animation-delay: 0.4s;">
                        
                        <?php
                        $testimonial_count = 0;
                        if (!empty($testi)) {
                            foreach ($testi as $testimonial) {
                                $testimonial_count++;
                                
                                // Image handling
                                $img = !empty($testimonial['image']) 
                                    ? base_url() . '/public/uploads/testimonial_images/' . esc($testimonial['image'], 'attr')
                                    : base_url() . '/public/assets/img/no-avatar.png';
                                
                                $name = esc($testimonial['name'] ?? 'Anonymous', 'html');
                                $description = esc($testimonial['description'] ?? '', 'html');
                                $created_at = date('d M Y', strtotime($testimonial['created_at'] ?? now()));
                                $stagger_delay = ($testimonial_count * 0.1);
                                ?>
                                
                                <!-- Testimonial Card -->
                                <div class="testimonial-card-wrapper" 
                                     style="animation: zoomInScale 0.6s ease-out; 
                                            animation-delay: <?= $stagger_delay ?>s; 
                                            animation-fill-mode: both;">
                                    
                                    <div class="testimonial-card" 
                                         style="background: white; 
                                                border-radius: var(--border-radius-lg); 
                                                padding: 30px; 
                                                height: 100%; 
                                                display: flex; 
                                                flex-direction: column; 
                                                transition: all var(--transition-normal) var(--ease-standard); 
                                                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); 
                                                position: relative; 
                                                overflow: hidden;"
                                         onmouseover="this.style.transform='translateY(-10px) scale(1.02)'; this.style.boxShadow='0 15px 45px rgba(0, 0, 0, 0.3)'"
                                         onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.2)'">
                                        
                                        <!-- Quote Icon -->
                                        <div class="quote-icon" 
                                             style="font-size: 40px; 
                                                    color: var(--primary-color); 
                                                    margin-bottom: 15px; 
                                                    opacity: 0.3; 
                                                    transition: all var(--transition-normal) var(--ease-standard);"
                                             onmouseover="this.style.opacity='0.6'; this.style.transform='scale(1.2)'"
                                             onmouseout="this.style.opacity='0.3'; this.style.transform='scale(1)'">
                                            <i class="fa-solid fa-quote-left"></i>
                                        </div>

                                        <!-- Rating Stars -->
                                        <div class="rating-stars" 
                                             style="color: var(--accent-color); 
                                                    font-size: 14px; 
                                                    margin-bottom: 15px; 
                                                    letter-spacing: 2px;">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <!-- Testimonial Text -->
                                        <p class="testimonial-text" 
                                           style="font-size: 14px; 
                                                  color: rgba(26, 26, 26, 0.8); 
                                                  line-height: 1.6; 
                                                  margin: 0 0 20px 0; 
                                                  flex-grow: 1; 
                                                  display: -webkit-box; 
                                                  -webkit-line-clamp: 3; 
                                                  -webkit-box-orient: vertical; 
                                                  overflow: hidden;">
                                            "<?= strlen($description) > 150 ? substr($description, 0, 150) . '...' : $description ?>"
                                        </p>

                                        <!-- Read More Link -->
                                        <?php if (strlen($description) > 150) { ?>
                                        <a href="javascript:void(0)" 
                                           onclick="testimonialModal('<?= base64_encode($description) ?>')" 
                                           class="read-more-link" 
                                           style="display: inline-flex; 
                                                  align-items: center; 
                                                  gap: 6px; 
                                                  color: var(--primary-color); 
                                                  text-decoration: none; 
                                                  font-size: 12px; 
                                                  font-weight: 600; 
                                                  margin-bottom: 20px; 
                                                  transition: all var(--transition-normal) var(--ease-standard);"
                                           onmouseover="this.style.color='var(--accent-color)'; this.style.transform='translateX(3px)'"
                                           onmouseout="this.style.color='var(--primary-color)'; this.style.transform='translateX(0)'">
                                            Read Full Testimonial
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                        <?php } ?>

                                        <!-- Divider -->
                                        <div style="height: 2px; 
                                                   background: linear-gradient(90deg, rgba(33, 128, 161, 0.2), rgba(230, 126, 34, 0.2)); 
                                                   margin: 20px 0;"></div>

                                        <!-- Author Info -->
                                        <div class="author-info" 
                                             style="display: flex; 
                                                    align-items: center; 
                                                    gap: 15px;">
                                            
                                            <!-- Avatar -->
                                            <div class="author-avatar" 
                                                 style="flex-shrink: 0; 
                                                        transition: all var(--transition-normal) var(--ease-standard);"
                                                 onmouseover="this.style.transform='scale(1.1)'"
                                                 onmouseout="this.style.transform='scale(1)'">
                                                <img src="<?= $img ?>" 
                                                     alt="<?= $name ?>" 
                                                     style="width: 50px; 
                                                            height: 50px; 
                                                            border-radius: 50%; 
                                                            object-fit: cover; 
                                                            border: 3px solid var(--primary-color);">
                                            </div>

                                            <!-- Author Details -->
                                            <div class="author-details">
                                                <h6 class="author-name" 
                                                    style="font-size: 14px; 
                                                           font-weight: 700; 
                                                           color: var(--text-primary); 
                                                           margin: 0 0 4px 0; 
                                                           transition: color var(--transition-normal) var(--ease-standard);"
                                                    onmouseover="this.style.color='var(--primary-color)'"
                                                    onmouseout="this.style.color='var(--text-primary)'">
                                                    <?= strlen($name) > 20 ? substr($name, 0, 20) . '...' : $name ?>
                                                </h6>
                                                <p class="author-date" 
                                                   style="font-size: 11px; 
                                                          color: rgba(26, 26, 26, 0.6); 
                                                          margin: 0; 
                                                          text-transform: uppercase; 
                                                          letter-spacing: 0.5px;">
                                                    <?= $created_at ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            }
                        } else {
                            ?>
                            <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                                <i class="fa-solid fa-heart" 
                                   style="font-size: 48px; 
                                          color: rgba(255, 255, 255, 0.3); 
                                          margin-bottom: 15px; 
                                          display: block;"></i>
                                <p style="color: rgba(255, 255, 255, 0.7); font-size: 16px;">
                                    No testimonials available at the moment
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
                          color: rgba(255, 255, 255, 0.3); 
                          margin-bottom: 20px; 
                          display: block;"></i>
                <h3 style="color: white; font-size: 20px; margin-bottom: 10px;">No Testimonials Found</h3>
                <p style="color: rgba(255, 255, 255, 0.7);">Testimonials will appear here soon</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     TESTIMONIALS SECTION STYLES
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

    /* Testimonials Grid */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .testimonials-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .testimonials-title {
            font-size: 32px !important;
        }

        .testimonial-card {
            padding: 24px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .testimonials-section {
            padding: 60px 0 !important;
        }

        .testimonials-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .testimonials-title {
            font-size: 24px !important;
        }

        .testimonial-card {
            padding: 20px !important;
        }

        .quote-icon {
            font-size: 32px !important;
        }

        .testimonials-decoration {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .testimonials-section {
            padding: 40px 0 !important;
        }

        .testimonial-card {
            padding: 16px !important;
        }

        .testimonials-title {
            font-size: 20px !important;
        }

        .author-avatar img {
            width: 45px !important;
            height: 45px !important;
        }
    }

    /* Accessibility */
    .testimonial-card:focus-visible {
        outline: 2px solid white;
        outline-offset: 2px;
    }

    .read-more-link:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .testimonials-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     TESTIMONIALS SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var testimonialCards = document.querySelectorAll('.testimonial-card-wrapper');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, {
                threshold: 0.1
            });

            testimonialCards.forEach(function(card) {
                observer.observe(card);
            });
        }

        // ============================================
        // Testimonial Modal Handler
        // ============================================
        window.testimonialModal = function(encodedText) {
            var decodedText = atob(encodedText);
            
            // Create modal if it doesn't exist
            var modal = document.getElementById('testimonialModal');
            if (!modal) {
                modal = document.createElement('div');
                modal.id = 'testimonialModal';
                modal.style.cssText = `
                    display: none;
                    position: fixed;
                    z-index: 1000;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    animation: fadeIn 0.3s ease-out;
                `;
                
                modal.innerHTML = `
                    <div style="background-color: white;
                                margin: 10% auto;
                                padding: 30px;
                                border-radius: 12px;
                                max-width: 600px;
                                max-height: 80vh;
                                overflow-y: auto;
                                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
                                animation: slideUpFade 0.3s ease-out;">
                        <span style="float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                    color: var(--primary-color);
                                    cursor: pointer;
                                    transition: all 0.3s;"
                              onmouseover="this.style.transform='scale(1.2)'"
                              onmouseout="this.style.transform='scale(1)'"
                              onclick="document.getElementById('testimonialModal').style.display='none'">
                            &times;
                        </span>
                        <h2 style="color: var(--primary-color);
                                  margin-top: 0;">Full Testimonial</h2>
                        <p id="testimonialContent" 
                           style="font-size: 15px;
                                  line-height: 1.8;
                                  color: rgba(26, 26, 26, 0.8);">
                        </p>
                    </div>
                `;
                
                document.body.appendChild(modal);
                
                // Close modal when clicking outside
                window.addEventListener('click', function(event) {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }
            
            document.getElementById('testimonialContent').textContent = decodedText;
            modal.style.display = 'block';
        };

        // ============================================
        // Analytics tracking for testimonial interactions
        // ============================================
        document.querySelectorAll('.read-more-link').forEach(function(link) {
            link.addEventListener('click', function() {
                var authorName = this.closest('.testimonial-card').querySelector('.author-name').textContent.trim();
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'testimonial_read', {
                        'author_name': authorName
                    });
                }
            });
        });

        // ============================================
        // Stagger animation delays
        // ============================================
        var testimonialCards = document.querySelectorAll('.testimonial-card-wrapper');
        testimonialCards.forEach(function(card, index) {
            var delay = (index * 0.1);
            card.style.setProperty('animation-delay', delay + 's');
        });
    });
</script>


<section class="faq-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="faq-decoration" 
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
        if (!empty($fq_lists)) {
            foreach ($fq_lists as $fq_list) {
                if (isset($fq_list['section_id']) && $fq_list['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($fq_list['section_id'])) {
                        unset($fq_list['section_id']);
                    }
                    
                    $datasubmenu = $fq_list['sub_menu_name'] ?? 'Frequently Asked Questions';
                    if (isset($fq_list['sub_menu_name'])) {
                        unset($fq_list['sub_menu_name']);
                    }
                    ?>
                    
                    <!-- Section Header -->
                    <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
                        
                        <h2 class="faq-title fw-bold" 
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
                                <?= esc($datasubmenu, 'html') ?>
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
                            Find answers to common questions and get the information you need
                        </p>
                    </div>

                    <!-- FAQ Container -->
                    <div class="faq-container" 
                         style="max-width: 900px; 
                                margin: 0 auto; 
                                animation: slideUpFade 0.8s ease-out; 
                                animation-delay: 0.4s;">
                        
                        <!-- Accordion -->
                        <div class="faq-accordion" 
                             id="faqAccordion"
                             style="display: flex; 
                                    flex-direction: column; 
                                    gap: 15px;">
                            
                            <?php
                            $faq_count = 0;
                            if (!empty($fq_list)) {
                                foreach ($fq_list as $faq) {
                                    $faq_count++;
                                    $faq_id = $faq['id'] ?? $faq_count;
                                    $faq_title = esc($faq['title'] ?? 'FAQ Item', 'html');
                                    $faq_content = $faq['content'] ?? '';
                                    $stagger_delay = ($faq_count * 0.08);
                                    ?>
                                    
                                    <!-- FAQ Item -->
                                    <div class="faq-item-wrapper" 
                                         style="animation: slideInLeft 0.6s ease-out; 
                                                animation-delay: <?= $stagger_delay ?>s; 
                                                animation-fill-mode: both;">
                                        
                                        <!-- FAQ Card -->
                                        <div class="faq-card" 
                                             style="background: var(--card-background); 
                                                    border: 1px solid var(--card-border); 
                                                    border-radius: var(--border-radius-lg); 
                                                    overflow: hidden; 
                                                    transition: all var(--transition-normal) var(--ease-standard); 
                                                    box-shadow: var(--shadow-sm);"
                                             onmouseover="this.style.boxShadow='var(--shadow-md)'; this.style.borderColor='var(--primary-color)'"
                                             onmouseout="this.style.boxShadow='var(--shadow-sm)'; this.style.borderColor='var(--card-border)'">
                                            
                                            <!-- FAQ Header (Question) -->
                                            <button class="faq-button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#collapse<?= esc($faq_id, 'attr') ?>" 
                                                    aria-expanded="false" 
                                                    aria-controls="collapse<?= esc($faq_id, 'attr') ?>"
                                                    style="width: 100%; 
                                                           padding: 20px 30px; 
                                                           background: transparent; 
                                                           border: none; 
                                                           text-align: left; 
                                                           cursor: pointer; 
                                                           display: flex; 
                                                           align-items: center; 
                                                           justify-content: space-between; 
                                                           gap: 20px; 
                                                           transition: all var(--transition-normal) var(--ease-standard);"
                                                    onmouseover="this.style.background='rgba(33, 128, 161, 0.05)'"
                                                    onmouseout="this.style.background='transparent'">
                                                
                                                <!-- Question Text -->
                                                <h5 class="faq-question" 
                                                    style="font-size: 15px; 
                                                           font-weight: 700; 
                                                           color: var(--text-primary); 
                                                           margin: 0; 
                                                           line-height: 1.4; 
                                                           text-transform: uppercase; 
                                                           letter-spacing: 0.5px; 
                                                           flex-grow: 1;">
                                                    <?= strlen($faq_title) > 80 ? substr($faq_title, 0, 80) . '...' : $faq_title ?>
                                                </h5>

                                                <!-- Toggle Icon -->
                                                <div class="faq-icon" 
                                                     style="font-size: 20px; 
                                                            color: var(--primary-color); 
                                                            flex-shrink: 0; 
                                                            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1); 
                                                            display: flex; 
                                                            align-items: center; 
                                                            justify-content: center;">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                            </button>

                                            <!-- FAQ Body (Answer) -->
                                            <div class="faq-collapse collapse" 
                                                 id="collapse<?= esc($faq_id, 'attr') ?>" 
                                                 data-bs-parent="#faqAccordion"
                                                 style="transition: all var(--transition-normal) var(--ease-standard);">
                                                
                                                <div class="faq-body" 
                                                     style="padding: 0 30px 20px 30px; 
                                                            border-top: 2px solid var(--card-border); 
                                                            background: linear-gradient(135deg, rgba(33, 128, 161, 0.03), transparent);">
                                                    
                                                    <div style="font-size: 14px; 
                                                               color: rgba(var(--text-primary), 0.8); 
                                                               line-height: 1.8;">
                                                        <?= $faq_content ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php
                                }
                            } else {
                                ?>
                                <div style="text-align: center; padding: 60px 20px;">
                                    <i class="fa-solid fa-circle-question" 
                                       style="font-size: 48px; 
                                              color: rgba(var(--text-primary), 0.3); 
                                              margin-bottom: 15px; 
                                              display: block;"></i>
                                    <p style="color: rgba(var(--text-primary), 0.6); font-size: 16px;">
                                        No FAQs available at the moment
                                    </p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <!-- FAQ Support Box -->
                    <div class="faq-support-box" 
                         style="margin-top: 60px; 
                                padding: 40px; 
                                background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                                border: 2px solid var(--primary-color); 
                                border-radius: var(--border-radius-lg); 
                                text-align: center; 
                                animation: slideUpFade 0.8s ease-out; 
                                animation-delay: 0.6s;">
                        
                        <div style="font-size: 32px; 
                                   color: var(--primary-color); 
                                   margin-bottom: 15px;">
                            <i class="fa-solid fa-lifering"></i>
                        </div>
                        
                        <h4 style="font-size: 18px; 
                                  font-weight: 700; 
                                  color: var(--text-primary); 
                                  margin-bottom: 10px;">
                            Didn't find what you're looking for?
                        </h4>
                        
                        <p style="font-size: 14px; 
                                 color: rgba(var(--text-primary), 0.7); 
                                 margin: 0 0 20px 0;">
                            Our support team is here to help. Reach out to us with your questions.
                        </p>
                        
                        <a href="<?= base_url('contact') ?>" 
                           style="display: inline-block; 
                                  background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                  color: white; 
                                  padding: 12px 28px; 
                                  border-radius: var(--border-radius); 
                                  text-decoration: none; 
                                  font-weight: 600; 
                                  font-size: 13px; 
                                  text-transform: uppercase; 
                                  letter-spacing: 0.5px; 
                                  transition: all var(--transition-normal) var(--ease-standard);"
                           onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(33, 128, 161, 0.3)'"
                           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            Contact Us
                        </a>
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
                <h3 style="color: var(--text-primary); font-size: 20px; margin-bottom: 10px;">No FAQs Found</h3>
                <p style="color: rgba(var(--text-primary), 0.6);">FAQ content will appear here soon</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     FAQ SECTION STYLES
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

    /* Accordion Collapse Animation */
    .faq-collapse {
        overflow: hidden;
    }

    .faq-collapse.collapsing {
        transition: height var(--transition-normal) var(--ease-standard);
    }

    /* Icon Rotation */
    .faq-button[aria-expanded="true"] .faq-icon {
        transform: rotate(180deg);
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .faq-title {
            font-size: 32px !important;
        }

        .faq-card {
            border-radius: var(--border-radius-lg) !important;
        }

        .faq-button {
            padding: 18px 24px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .faq-section {
            padding: 60px 0 !important;
        }

        .faq-title {
            font-size: 28px !important;
        }

        .faq-container {
            padding: 0 15px !important;
        }

        .faq-button {
            padding: 16px 20px !important;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .faq-icon {
            align-self: flex-end;
            margin-top: -30px;
        }

        .faq-body {
            padding: 0 20px 20px 20px !important;
        }

        .faq-decoration {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .faq-section {
            padding: 40px 0 !important;
        }

        .faq-title {
            font-size: 20px !important;
        }

        .faq-question {
            font-size: 13px !important;
        }

        .faq-body {
            font-size: 13px !important;
        }

        .faq-support-box {
            padding: 25px 20px !important;
        }
    }

    /* Accessibility */
    .faq-button:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .faq-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     FAQ SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var faqItems = document.querySelectorAll('.faq-item-wrapper');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, {
                threshold: 0.1
            });

            faqItems.forEach(function(item) {
                observer.observe(item);
            });
        }

        // ============================================
        // Smooth collapse/expand with custom animation
        // ============================================
        var collapseElements = document.querySelectorAll('.faq-collapse');
        
        collapseElements.forEach(function(collapse) {
            collapse.addEventListener('show.bs.collapse', function() {
                var card = this.closest('.faq-card');
                if (card) {
                    card.style.background = 'linear-gradient(135deg, rgba(33, 128, 161, 0.05), transparent)';
                }
            });

            collapse.addEventListener('hide.bs.collapse', function() {
                var card = this.closest('.faq-card');
                if (card) {
                    card.style.background = 'var(--card-background)';
                }
            });
        });

        // ============================================
        // Analytics tracking for FAQ interactions
        // ============================================
        document.querySelectorAll('.faq-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var title = this.querySelector('.faq-question').textContent.trim();
                var isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'faq_interaction', {
                        'faq_title': title,
                        'action': isExpanded ? 'expand' : 'collapse'
                    });
                }
            });
        });

        // ============================================
        // Stagger animation delays
        // ============================================
        var faqWrappers = document.querySelectorAll('.faq-item-wrapper');
        faqWrappers.forEach(function(wrapper, index) {
            var delay = (index * 0.08);
            wrapper.style.setProperty('animation-delay', delay + 's');
        });

        // ============================================
        // Keyboard accessibility
        // ============================================
        document.querySelectorAll('.faq-button').forEach(function(button) {
            button.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    });
</script>

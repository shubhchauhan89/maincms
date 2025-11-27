<?php
/**
 * ============================================
 * EDUCATIONAL THEME - FOOTER COMPONENT
 * ============================================
 * File: theme7/frontend/layout/footer.php
 * Purpose: Professional footer matching wireframe
 * Version: 1.0
 * Last Updated: 2025-11-27
 * 
 * Design: Clean, organized, modern
 * - Multiple sections (contact, links, social)
 * - Professional spacing and typography
 * - Responsive layout
 * - Full color theming with CSS variables
 * ============================================
 */
?>

<!-- ============================================
     FOOTER MAIN SECTION
     ============================================ -->
<footer class="educational-footer" 
        style="background-color: var(--footer_background); 
               color: var(--footer_text_color); 
               padding: 60px 0 0 0; 
               margin-top: 80px; 
               border-top: 1px solid var(--card-border);">
    
    <!-- Footer Top Content -->
    <div class="footer-content py-5">
        <div class="container px-4">
            <div class="row g-5">
                
                <!-- ============================================
                     SECTION 1: CONTACT INFORMATION
                     ============================================ -->
                <div class="col-lg-3 col-md-6 footer-section">
                    <div class="footer-box" style="height: 100%; display: flex; flex-direction: column;">
                        
                        <!-- Section Header -->
                        <h3 class="footer-title fw-bold mb-4" style="font-size: 18px; color: var(--footer_text_color); border-bottom: 3px solid var(--primary-color); padding-bottom: 12px; display: inline-block;">
                            <i class="fa-solid fa-location-dot me-2"></i>Get In Touch
                        </h3>

                        <!-- Address 1 -->
                        <div class="footer-info-item mb-4">
                            <p class="mb-2" style="font-size: 13px; font-weight: 500; color: var(--footer_text_color);">
                                <strong>Main Office:</strong>
                            </p>
                            <p class="mb-3" style="font-size: 12px; color: rgba(var(--footer_text_color), 0.8); line-height: 1.6;">
                                <?= esc($user_details['business_address'] ?? 'Address not available', 'html') ?>
                            </p>
                            
                            <!-- Phone & Email -->
                            <div class="contact-details mb-2">
                                <p class="mb-1" style="font-size: 12px;">
                                    <strong><i class="fa-solid fa-phone me-2" style="color: var(--primary-color);"></i>Phone:</strong><br>
                                    <a href="tel:<?= esc($user_details['company_phone_no'] ?? '', 'url') ?>" 
                                       style="color: var(--footer_text_color); text-decoration: none; transition: color var(--transition-normal) var(--ease-standard);"
                                       onmouseover="this.style.color='var(--primary-color)'"
                                       onmouseout="this.style.color='var(--footer_text_color)'">
                                        <?= esc($user_details['company_phone_no'] ?? '', 'html') ?>
                                    </a>
                                </p>
                            </div>

                            <div class="contact-details">
                                <p class="mb-0" style="font-size: 12px;">
                                    <strong><i class="fa-solid fa-envelope me-2" style="color: var(--primary-color);"></i>Email:</strong><br>
                                    <a href="mailto:<?= esc($user_details['email_id'] ?? '', 'url') ?>" 
                                       style="color: var(--footer_text_color); text-decoration: none; transition: color var(--transition-normal) var(--ease-standard);"
                                       onmouseover="this.style.color='var(--primary-color)'"
                                       onmouseout="this.style.color='var(--footer_text_color)'">
                                        <?= esc($user_details['email_id'] ?? '', 'html') ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Address 2 (if available) -->
                        <?php if (!empty($user_details['alternate_address'])) { ?>
                        <div class="footer-info-item" style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
                            <p class="mb-2" style="font-size: 13px; font-weight: 500; color: var(--footer_text_color);">
                                <strong>Branch Office:</strong>
                            </p>
                            <p class="mb-3" style="font-size: 12px; color: rgba(var(--footer_text_color), 0.8); line-height: 1.6;">
                                <?= esc($user_details['alternate_address'], 'html') ?>
                            </p>

                            <?php if (!empty($user_details['alternate_mobile'])) { ?>
                            <p class="mb-1" style="font-size: 12px;">
                                <strong><i class="fa-solid fa-phone me-2" style="color: var(--primary-color);"></i>Phone:</strong><br>
                                <a href="tel:<?= esc($user_details['alternate_mobile'], 'url') ?>" 
                                   style="color: var(--footer_text_color); text-decoration: none;">
                                    <?= esc($user_details['alternate_mobile'], 'html') ?>
                                </a>
                            </p>
                            <?php } ?>

                            <?php if (!empty($user_details['alternate_email_id'])) { ?>
                            <p class="mb-0" style="font-size: 12px;">
                                <strong><i class="fa-solid fa-envelope me-2" style="color: var(--primary-color);"></i>Email:</strong><br>
                                <a href="mailto:<?= esc($user_details['alternate_email_id'], 'url') ?>" 
                                   style="color: var(--footer_text_color); text-decoration: none;">
                                    <?= esc($user_details['alternate_email_id'], 'html') ?>
                                </a>
                            </p>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- ============================================
                     SECTION 2: QUICK LINKS
                     ============================================ -->
                <div class="col-lg-3 col-md-6 footer-section">
                    <div class="footer-box">
                        
                        <!-- Section Header -->
                        <h3 class="footer-title fw-bold mb-4" style="font-size: 18px; color: var(--footer_text_color); border-bottom: 3px solid var(--primary-color); padding-bottom: 12px; display: inline-block;">
                            <i class="fa-solid fa-link me-2"></i>Quick Links
                        </h3>

                        <!-- Menu Links -->
                        <ul class="footer-links list-unstyled" style="margin: 0; padding: 0;">
                            <?php
                            if (!empty($menu_lists)) {
                                $count = 0;
                                foreach ($menu_lists as $menu) {
                                    if (($menu['is_active_os'] ?? 0) == 0) continue;
                                    if ($count >= 6) break; // Limit to 6 items
                                    
                                    $menu_name = esc($menu['menu_name'] ?? '', 'html');
                                    $menu_link = base_url() . '/' . esc($menu['menu_link'] ?? '', 'url');
                                    
                                    if ($menu_name == "Updates") {
                                        $menu_link = base_url() . "/update.html";
                                    }
                            ?>
                            
                            <li class="mb-2">
                                <a href="<?= $menu_link; ?>" 
                                   class="footer-link" 
                                   style="font-size: 13px; 
                                          color: rgba(var(--footer_text_color), 0.85); 
                                          text-decoration: none; 
                                          transition: all var(--transition-normal) var(--ease-standard); 
                                          display: inline-flex; 
                                          align-items: center; 
                                          gap: 8px;"
                                   onmouseover="this.style.color='var(--primary-color)'; this.style.paddingLeft='5px'"
                                   onmouseout="this.style.color='rgba(var(--footer_text_color), 0.85)'; this.style.paddingLeft='0'">
                                    <i class="fa-solid fa-chevron-right" style="font-size: 10px; opacity: 0;"></i>
                                    <span><?= $menu_name; ?></span>
                                </a>
                            </li>

                            <?php
                                    $count++;
                                }
                            }
                            ?>

                            <!-- Additional Links -->
                            <li class="mt-3 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                                <a href="<?= base_url(); ?>/privacy-policy" 
                                   class="footer-link" 
                                   style="font-size: 12px; 
                                          color: rgba(var(--footer_text_color), 0.7); 
                                          text-decoration: none; 
                                          transition: color var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.color='var(--primary-color)'"
                                   onmouseout="this.style.color='rgba(var(--footer_text_color), 0.7)'">
                                    <i class="fa-solid fa-shield me-2"></i>Privacy Policy
                                </a>
                            </li>
                            <li class="mt-1">
                                <a href="<?= base_url(); ?>/terms-conditions" 
                                   class="footer-link" 
                                   style="font-size: 12px; 
                                          color: rgba(var(--footer_text_color), 0.7); 
                                          text-decoration: none; 
                                          transition: color var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.color='var(--primary-color)'"
                                   onmouseout="this.style.color='rgba(var(--footer_text_color), 0.7)'">
                                    <i class="fa-solid fa-file-contract me-2"></i>Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- ============================================
                     SECTION 3: ABOUT & DESCRIPTION
                     ============================================ -->
                <div class="col-lg-3 col-md-6 footer-section">
                    <div class="footer-box">
                        
                        <!-- Section Header -->
                        <h3 class="footer-title fw-bold mb-4" style="font-size: 18px; color: var(--footer_text_color); border-bottom: 3px solid var(--primary-color); padding-bottom: 12px; display: inline-block;">
                            <i class="fa-solid fa-info-circle me-2"></i>About Us
                        </h3>

                        <!-- Business Description -->
                        <div class="footer-description">
                            <p style="font-size: 12px; 
                                     color: rgba(var(--footer_text_color), 0.8); 
                                     line-height: 1.6; 
                                     margin: 0; 
                                     text-align: justify;">
                                <?= !empty($user_details['business_description']) 
                                    ? substr(esc($user_details['business_description'], 'html'), 0, 150) . '...' 
                                    : 'Welcome to our educational platform. We are committed to providing high-quality courses and training programs.' ?>
                            </p>

                            <!-- Business Stats (Optional) -->
                            <div class="footer-stats mt-4 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                                <div class="stat-item mb-2">
                                    <span style="font-size: 11px; color: rgba(var(--footer_text_color), 0.7);">Active Students</span>
                                    <p style="font-size: 16px; font-weight: bold; color: var(--primary-color); margin: 5px 0 0 0;">
                                        <i class="fa-solid fa-users me-2"></i>1000+
                                    </p>
                                </div>
                                <div class="stat-item">
                                    <span style="font-size: 11px; color: rgba(var(--footer_text_color), 0.7);">Courses Available</span>
                                    <p style="font-size: 16px; font-weight: bold; color: var(--primary-color); margin: 5px 0 0 0;">
                                        <i class="fa-solid fa-book me-2"></i>50+
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================
                     SECTION 4: SOCIAL MEDIA & NEWSLETTER
                     ============================================ -->
                <div class="col-lg-3 col-md-6 footer-section">
                    <div class="footer-box">
                        
                        <!-- Section Header -->
                        <h3 class="footer-title fw-bold mb-4" style="font-size: 18px; color: var(--footer_text_color); border-bottom: 3px solid var(--primary-color); padding-bottom: 12px; display: inline-block;">
                            <i class="fa-solid fa-share-nodes me-2"></i>Follow Us
                        </h3>

                        <!-- Social Media Links -->
                        <div class="social-links mb-4">
                            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                                
                                <!-- Facebook -->
                                <?php if (!empty($user_details['facebook_page'])) { ?>
                                <a href="<?= esc($user_details['facebook_page'], 'url') ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="social-icon" 
                                   style="width: 40px; 
                                          height: 40px; 
                                          display: flex; 
                                          align-items: center; 
                                          justify-content: center; 
                                          background-color: #1877F2; 
                                          border-radius: var(--border-radius); 
                                          color: white; 
                                          font-size: 18px; 
                                          transition: all var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 4px 12px rgba(24, 119, 242, 0.4)'"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                                   title="Follow us on Facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <?php } ?>

                                <!-- Twitter -->
                                <?php if (!empty($user_details['twitter_page'])) { ?>
                                <a href="<?= esc($user_details['twitter_page'], 'url') ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="social-icon" 
                                   style="width: 40px; 
                                          height: 40px; 
                                          display: flex; 
                                          align-items: center; 
                                          justify-content: center; 
                                          background-color: #1DA1F2; 
                                          border-radius: var(--border-radius); 
                                          color: white; 
                                          font-size: 18px; 
                                          transition: all var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 4px 12px rgba(29, 161, 242, 0.4)'"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                                   title="Follow us on Twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <?php } ?>

                                <!-- Instagram -->
                                <?php if (!empty($user_details['instagram_page'])) { ?>
                                <a href="<?= esc($user_details['instagram_page'], 'url') ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="social-icon" 
                                   style="width: 40px; 
                                          height: 40px; 
                                          display: flex; 
                                          align-items: center; 
                                          justify-content: center; 
                                          background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
                                          border-radius: var(--border-radius); 
                                          color: white; 
                                          font-size: 18px; 
                                          transition: all var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 4px 12px rgba(220, 39, 67, 0.4)'"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                                   title="Follow us on Instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <?php } ?>

                                <!-- LinkedIn -->
                                <?php if (!empty($user_details['linkedin_page'])) { ?>
                                <a href="<?= esc($user_details['linkedin_page'], 'url') ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="social-icon" 
                                   style="width: 40px; 
                                          height: 40px; 
                                          display: flex; 
                                          align-items: center; 
                                          justify-content: center; 
                                          background-color: #0077B5; 
                                          border-radius: var(--border-radius); 
                                          color: white; 
                                          font-size: 18px; 
                                          transition: all var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 4px 12px rgba(0, 119, 181, 0.4)'"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                                   title="Follow us on LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <?php } ?>

                                <!-- YouTube -->
                                <?php if (!empty($user_details['youtube_page'])) { ?>
                                <a href="<?= esc($user_details['youtube_page'], 'url') ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="social-icon" 
                                   style="width: 40px; 
                                          height: 40px; 
                                          display: flex; 
                                          align-items: center; 
                                          justify-content: center; 
                                          background-color: #FF0000; 
                                          border-radius: var(--border-radius); 
                                          color: white; 
                                          font-size: 18px; 
                                          transition: all var(--transition-normal) var(--ease-standard);"
                                   onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 4px 12px rgba(255, 0, 0, 0.4)'"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                                   title="Subscribe on YouTube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- Newsletter Section -->
                        <div class="footer-newsletter" style="padding-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.1);">
                            <p style="font-size: 12px; font-weight: 500; color: var(--footer_text_color); margin-bottom: 12px;">
                                <i class="fa-solid fa-envelope me-2" style="color: var(--primary-color);"></i>
                                Subscribe to Newsletter
                            </p>
                            <form method="post" action="<?= base_url(); ?>/subscribe" style="display: flex; gap: 0;">
                                <input type="email" 
                                       name="newsletter_email" 
                                       placeholder="Enter your email"
                                       style="flex: 1; 
                                              padding: 8px 12px; 
                                              border: 1px solid rgba(255, 255, 255, 0.2); 
                                              border-radius: var(--border-radius) 0 0 var(--border-radius); 
                                              background-color: rgba(255, 255, 255, 0.1); 
                                              color: var(--footer_text_color); 
                                              font-size: 12px;"
                                       required>
                                <button type="submit" 
                                        style="padding: 8px 12px; 
                                               background-color: var(--primary-color); 
                                               color: white; 
                                               border: none; 
                                               border-radius: 0 var(--border-radius) var(--border-radius) 0; 
                                               cursor: pointer; 
                                               transition: all var(--transition-normal) var(--ease-standard);"
                                        onmouseover="this.style.backgroundColor='var(--accent-color)'; this.style.transform='scale(1.05)'"
                                        onmouseout="this.style.backgroundColor='var(--primary-color)'; this.style.transform='scale(1)'">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </form>
                            <small style="display: block; margin-top: 6px; font-size: 11px; color: rgba(var(--footer_text_color), 0.6);">
                                We respect your privacy. No spam!
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom (Copyright) -->
    <div class="footer-bottom" 
         style="background-color: var(--copyright_background); 
                 color: var(--copyright_text_color); 
                 padding: 20px 0; 
                 text-align: center; 
                 border-top: 1px solid rgba(255, 255, 255, 0.1);">
        
        <div class="container px-4">
            <div class="row align-items-center g-3">
                
                <!-- Copyright Text -->
                <div class="col-md-6 text-md-start text-center">
                    <p style="font-size: 12px; margin: 0;">
                        &copy; <?= date("Y"); ?> 
                        <strong style="color: var(--primary-color);">
                            <?= esc($user_details['business_name'] ?? 'Your Institute', 'html') ?>
                        </strong>
                        - All Rights Reserved.
                    </p>
                </div>

                <!-- Footer Links -->
                <div class="col-md-6 text-md-end text-center">
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; font-size: 11px;">
                        <a href="<?= base_url(); ?>/privacy-policy" 
                           style="color: var(--copyright_text_color); text-decoration: none; transition: color var(--transition-normal) var(--ease-standard);"
                           onmouseover="this.style.color='var(--primary-color)'"
                           onmouseout="this.style.color='var(--copyright_text_color)'">
                            Privacy Policy
                        </a>
                        <span style="color: rgba(var(--copyright_text_color), 0.5);">|</span>
                        <a href="<?= base_url(); ?>/terms-conditions" 
                           style="color: var(--copyright_text_color); text-decoration: none; transition: color var(--transition-normal) var(--ease-standard);"
                           onmouseover="this.style.color='var(--primary-color)'"
                           onmouseout="this.style.color='var(--copyright_text_color)'">
                            Terms & Conditions
                        </a>
                        <span style="color: rgba(var(--copyright_text_color), 0.5);">|</span>
                        <a href="<?= base_url(); ?>/contact" 
                           style="color: var(--copyright_text_color); text-decoration: none; transition: color var(--transition-normal) var(--ease-standard);"
                           onmouseover="this.style.color='var(--primary-color)'"
                           onmouseout="this.style.color='var(--copyright_text_color)'">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Design Credit -->
            <div style="margin-top: 15px; padding-top: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); text-align: center;">
                <small style="font-size: 10px; color: rgba(var(--copyright_text_color), 0.5);">
                    Designed & Developed with <i class="fa-solid fa-heart" style="color: var(--primary-color);"></i> 
                    | Made in India 🇮🇳
                </small>
            </div>
        </div>
    </div>
</footer>

<!-- Custom Footer Injection (Tracking scripts, etc.) -->
<?= $custom_insert['foot'] ?? ''; ?>


<!-- ============================================
     FOOTER STYLES
     ============================================ -->
<style>
    /* Footer responsive adjustments */
    @media (max-width: 992px) {
        .footer-section {
            margin-bottom: 30px;
        }

        .footer-title {
            font-size: 16px !important;
        }
    }

    @media (max-width: 768px) {
        .educational-footer {
            padding-top: 40px;
            margin-top: 50px;
        }

        .footer-content {
            padding: 30px 0 !important;
        }

        .footer-box {
            order: 1;
        }

        .footer-section:nth-child(1) .footer-box {
            order: 2;
        }

        .footer-title {
            font-size: 15px !important;
        }

        .footer-link {
            font-size: 12px !important;
        }
    }

    /* Accessibility */
    .footer-link:focus-visible,
    .social-icon:focus-visible,
    button:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Link animation */
    .footer-link {
        position: relative;
    }

    .footer-link::before {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 1px;
        background: var(--primary-color);
        transition: width var(--transition-normal) var(--ease-standard);
    }

    .footer-link:hover::before {
        width: 100%;
    }

    /* Smooth scroll to top */
    html {
        scroll-behavior: smooth;
    }
</style>

<!-- ============================================
     FOOTER JAVASCRIPT (Scroll to Top, etc.)
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Scroll to Top Button
        // ============================================
        const scrollToTopButton = document.createElement('button');
        scrollToTopButton.id = 'scrollToTopBtn';
        scrollToTopButton.innerHTML = '<i class="fa-solid fa-arrow-up"></i>';
        scrollToTopButton.style.cssText = `
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 99;
            transition: all var(--transition-normal) var(--ease-standard);
            box-shadow: 0 4px 12px rgba(33, 128, 161, 0.3);
            font-size: 18px;
        `;
        
        document.body.appendChild(scrollToTopButton);

        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollToTopButton.style.display = 'flex';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });

        // Scroll to top on click
        scrollToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Button hover effects
        scrollToTopButton.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1) translateY(-3px)';
            this.style.boxShadow = '0 6px 16px rgba(33, 128, 161, 0.4)';
        });

        scrollToTopButton.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1) translateY(0)';
            this.style.boxShadow = '0 4px 12px rgba(33, 128, 161, 0.3)';
        });

        // ============================================
        // Newsletter Subscription
        // ============================================
        const newsletterForms = document.querySelectorAll('form[action*="/subscribe"]');
        newsletterForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const emailInput = this.querySelector('input[type="email"]');
                
                // Basic validation
                if (!emailInput.value.includes('@')) {
                    e.preventDefault();
                    emailInput.style.borderColor = 'var(--danger)';
                    setTimeout(() => {
                        emailInput.style.borderColor = 'rgba(255, 255, 255, 0.2)';
                    }, 3000);
                }
            });
        });

        // ============================================
        // Footer Links Analytics (Optional)
        // ============================================
        document.querySelectorAll('.footer-link, .social-icon').forEach(link => {
            link.addEventListener('click', function() {
                // Track link clicks if analytics is available
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'footer_link_click', {
                        'link_text': this.textContent,
                        'link_url': this.href
                    });
                }
            });
        });
    });
</script>

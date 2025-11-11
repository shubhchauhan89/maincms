<style>
    /* ===== MEDICAL THEME - FOOTER STYLES ===== */


    /* ===== FOOTER MAIN WRAPPER ===== */
    .medical-footer-wrapper {
        background: linear-gradient(180deg, var(--medical-blue, #003d7a) 0%, #005a99 100%);
        color: var(--patient-white, #ffffff);
        margin-top: 80px;
        overflow: hidden;
        position: relative;
    }

    /* ===== FOOTER CONTENT SECTION ===== */
    .medical-footer-content {
        padding: 60px 0 40px;
        position: relative;
        z-index: 2;
    }

    .footer-section-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--patient-white, #ffffff);
        display: flex;
        align-items: center;
        padding-bottom: 12px;
        border-bottom: 2px solid rgba(0, 128, 128, 0.3);
    }

    .footer-section-title i {
        color: var(--medical-teal, #008080);
        font-size: 22px;
    }

    /* ===== CONTACT CARDS ===== */
    .contact-card {
        background: rgba(255, 255, 255, 0.08);
        border-left: 3px solid var(--medical-teal, #008080);
        border-radius: 8px;
        padding: 18px;
        margin-bottom: 18px;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .contact-card:hover {
        background: rgba(0, 128, 128, 0.15);
        transform: translateX(8px);
        box-shadow: 0 4px 16px rgba(0, 128, 128, 0.2);
    }

    .contact-card h5 {
        font-size: 14px;
        font-weight: 700;
        margin: 8px 0 10px 0;
        color: var(--medical-teal, #008080);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .contact-card p {
        font-size: 13px;
        line-height: 1.6;
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.85);
    }

    .contact-icon {
        width: 40px;
        height: 40px;
        background: rgba(0, 128, 128, 0.2);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        font-size: 18px;
        color: var(--medical-teal, #008080);
    }

    .contact-link {
        display: inline-block;
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        font-size: 13px;
        margin-right: 15px;
        transition: all 0.3s ease;
        margin-bottom: 8px;
    }

    .contact-link:hover {
        color: var(--medical-teal, #008080);
        text-decoration: underline;
        transform: translateX(3px);
    }

    .clinic-hours {
        background: rgba(0, 128, 128, 0.1);
        padding: 8px 10px;
        border-radius: 6px;
        margin-top: 8px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.8);
    }

    /* ===== QUICK LINKS ===== */
    .healthcare-links-modern {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .healthcare-links-modern li {
        margin-bottom: 12px;
        opacity: 0.9;
    }

    .healthcare-links-modern a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 10px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .healthcare-links-modern a:hover {
        color: var(--medical-teal, #008080);
        background: rgba(0, 128, 128, 0.1);
        padding-left: 16px;
    }

    .healthcare-links-modern i {
        font-size: 12px;
        color: var(--medical-teal, #008080);
        transition: transform 0.3s ease;
    }

    .healthcare-links-modern a:hover i {
        transform: translateX(3px);
    }

    .healthcare-info-links {
        background: rgba(255, 255, 255, 0.05);
        padding: 18px;
        border-radius: 8px;
        border-left: 3px solid var(--medical-teal, #008080);
    }

    .healthcare-info-links h5 {
        font-size: 13px;
        font-weight: 700;
        color: var(--medical-teal, #008080);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
    }

    /* ===== SOCIAL MEDIA ===== */
    .healthcare-social-showcase {
        margin-bottom: 30px;
    }

    .social-icons-healthcare {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .social-icon-medical {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--patient-white, #ffffff);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 18px;
        position: relative;
        overflow: hidden;
    }

    .social-icon-medical::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(0, 128, 128, 0.2);
        transition: left 0.3s ease;
        z-index: -1;
    }

    .social-icon-medical:hover::before {
        left: 0;
    }

    /* Individual Social Colors */
    .social-icon-medical.facebook {
        background: rgba(59, 89, 152, 0.3);
        border: 1px solid rgba(59, 89, 152, 0.5);
    }

    .social-icon-medical.facebook:hover {
        background: #3b5998;
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(59, 89, 152, 0.4);
    }

    .social-icon-medical.twitter {
        background: rgba(29, 161, 242, 0.3);
        border: 1px solid rgba(29, 161, 242, 0.5);
    }

    .social-icon-medical.twitter:hover {
        background: #1da1f2;
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(29, 161, 242, 0.4);
    }

    .social-icon-medical.instagram {
        background: rgba(224, 75, 109, 0.3);
        border: 1px solid rgba(224, 75, 109, 0.5);
    }

    .social-icon-medical.instagram:hover {
        background: linear-gradient(135deg, #E4405F, #FD1D1D);
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(224, 75, 109, 0.4);
    }

    .social-icon-medical.youtube {
        background: rgba(255, 0, 0, 0.3);
        border: 1px solid rgba(255, 0, 0, 0.5);
    }

    .social-icon-medical.youtube:hover {
        background: #ff0000;
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(255, 0, 0, 0.4);
    }

    .social-icon-medical.linkedin {
        background: rgba(0, 119, 181, 0.3);
        border: 1px solid rgba(0, 119, 181, 0.5);
    }

    .social-icon-medical.linkedin:hover {
        background: #0077b5;
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0, 119, 181, 0.4);
    }

    /* ===== NEWSLETTER SECTION ===== */
    .healthcare-newsletter {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(0, 128, 128, 0.2);
        border-radius: 10px;
        padding: 20px;
        backdrop-filter: blur(10px);
    }

    .newsletter-header h4 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--medical-teal, #008080);
    }

    .newsletter-description {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.75);
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .newsletter-form-healthcare {
        margin-bottom: 12px;
    }

    .newsletter-input-group {
        display: flex;
        gap: 0;
        border-radius: 8px;
        overflow: hidden;
    }

    .newsletter-form-healthcare input[type="email"] {
        flex: 1;
        background: rgba(255, 255, 255, 0.9);
        border: none;
        padding: 12px 16px;
        font-size: 13px;
        color: var(--text-dark, #1a1a1a);
        transition: all 0.3s ease;
    }

    .newsletter-form-healthcare input[type="email"]:focus {
        outline: none;
        background: var(--patient-white, #ffffff);
        box-shadow: 0 0 0 2px rgba(0, 128, 128, 0.3);
    }

    .newsletter-form-healthcare input[type="email"].is-invalid {
        border: 2px solid #dc3545;
        animation: shake 0.3s ease-in-out;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }

    .newsletter-submit-btn {
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        color: var(--patient-white, #ffffff);
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s ease;
    }

    .newsletter-submit-btn:hover {
        transform: translateX(-2px);
        box-shadow: 0 4px 12px rgba(0, 128, 128, 0.3);
    }

    .newsletter-submit-btn:active {
        transform: translateX(0);
    }

    .privacy-notice {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.65);
        padding: 10px;
        background: rgba(0, 128, 128, 0.08);
        border-radius: 6px;
        text-align: center;
    }

    /* ===== CERTIFICATIONS ===== */
    .healthcare-certifications {
        background: rgba(40, 167, 69, 0.1);
        border-left: 3px solid var(--trust-green, #28a745);
        padding: 15px;
        border-radius: 8px;
    }

    .cert-label {
        font-size: 12px;
        font-weight: 700;
        color: var(--trust-green, #28a745);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    .cert-badges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .cert-badge {
        background: rgba(40, 167, 69, 0.2);
        color: var(--trust-green, #28a745);
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* ===== COPYRIGHT SECTION ===== */
    .medical-copyright-section {
        background: rgba(0, 0, 0, 0.15);
        padding: 25px 0;
        border-top: 1px solid rgba(0, 128, 128, 0.2);
    }

    .copyright-text {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    .legal-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .legal-links li {
        display: inline-block;
    }

    .legal-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 13px;
        transition: all 0.3s ease;
    }

    .legal-links a:hover {
        color: var(--medical-teal, #008080);
        text-decoration: underline;
    }

    /* ===== SCROLL TO TOP BUTTON ===== */
    .scroll-top-medical {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        color: var(--patient-white, #ffffff);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
        box-shadow: 0 4px 12px rgba(0, 128, 128, 0.3);
        font-size: 20px;
    }

    .scroll-top-medical:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 128, 128, 0.4);
    }

    .scroll-top-medical:active {
        transform: translateY(0);
    }

    .scroll-top-medical.show {
        opacity: 1;
        visibility: visible;
    }

    /* ===== DARK MODE SUPPORT ===== */
    body.theme-dark .medical-footer-wrapper {
        background: linear-gradient(180deg, #001a4d 0%, #003366 100%);
    }

    body.theme-dark .contact-card {
        background: rgba(0, 128, 128, 0.08);
    }

    body.theme-dark .healthcare-newsletter {
        background: rgba(0, 128, 128, 0.08);
    }

    body.theme-dark .footer-section-title {
        border-bottom-color: rgba(0, 128, 128, 0.2);
    }

    body.theme-dark .medical-copyright-section {
        background: rgba(0, 0, 0, 0.4);
        border-top-color: rgba(0, 128, 128, 0.15);
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 991px) {
        .medical-footer-content {
            padding: 50px 0 30px;
        }

        .footer-section-title {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .social-icons-healthcare {
            gap: 10px;
            margin-bottom: 15px;
        }

        .social-icon-medical {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }

        .legal-links {
            gap: 15px;
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .medical-wave-separator {
            height: 60px;
        }

        .medical-footer-content {
            padding: 40px 0 25px;
        }

        .footer-section-title {
            font-size: 15px;
            margin-bottom: 18px;
        }

        .contact-card {
            margin-bottom: 15px;
            padding: 15px;
        }

        .healthcare-social-showcase {
            margin-bottom: 20px;
        }

        .social-icons-healthcare {
            justify-content: center;
            gap: 8px;
        }

        .newsletter-input-group {
            flex-direction: column;
            gap: 8px;
        }

        .newsletter-form-healthcare input[type="email"],
        .newsletter-submit-btn {
            width: 100%;
        }

        .legal-links {
            justify-content: center;
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }

        .scroll-top-medical {
            bottom: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
            font-size: 18px;
        }
    }

    @media (max-width: 576px) {
        .medical-wave-separator {
            height: 50px;
        }

        .medical-footer-content {
            padding: 30px 0 20px;
        }

        .footer-section-title {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .contact-card h5 {
            font-size: 13px;
        }

        .contact-card p,
        .contact-link {
            font-size: 12px;
        }

        .healthcare-links-modern a {
            font-size: 13px;
            padding: 6px 8px;
        }

        .social-icons-healthcare {
            gap: 6px;
        }

        .social-icon-medical {
            width: 38px;
            height: 38px;
            font-size: 14px;
        }

        .newsletter-form-healthcare input[type="email"] {
            font-size: 12px;
            padding: 10px 12px;
        }

        .newsletter-submit-btn {
            padding: 10px 16px;
            font-size: 12px;
        }

        .copyright-text,
        .legal-links a {
            font-size: 12px;
        }

        .scroll-top-medical {
            bottom: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            font-size: 16px;
        }

        .medical-copyright-section {
            padding: 20px 0;
        }
    }

    /* ===== ANIMATION ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .contact-card,
    .healthcare-social-showcase,
    .healthcare-newsletter {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>


<!-- ===== MEDICAL THEME - PROFESSIONAL FOOTER ===== -->

<!-- Ultra Modern Medical Footer -->
<footer class="medical-footer-wrapper">
    <!-- Medical Gradient Wave Separator -->


    <!-- Footer Main Content -->
    <div class="medical-footer-content">
        <div class="container">
            <div class="row g-4">
                
                <!-- Section 1: Healthcare Clinic Information -->
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-section-title">
                        <i class="fas fa-hospital-user me-2"></i>Contact Us
                    </h3>
                    
                    <!-- Main Clinic/Hospital Address -->
                    <?php if (!empty($user_details['business_address'])): ?>
                    <div class="contact-card healthcare">
                        <div class="contact-icon healthcare-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Main Clinic</h5>
                        <p><?= $user_details['business_address']; ?></p>
                        <div class="clinic-hours">
                            <small><i class="fas fa-clock me-1"></i>Mon - Fri: 9:00 AM - 6:00 PM</small>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Phone & Email Contact -->
                    <div class="contact-card healthcare">
                        <div class="contact-icon healthcare-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h5>Emergency Contact</h5>
                        <a href="tel:<?= $user_details['company_phone_no']; ?>" class="contact-link">
                            <i class="fas fa-phone-alt me-2"></i><?= $user_details['company_phone_no']; ?>
                        </a>
                        <a href="mailto:<?= $user_details['email_id']; ?>" class="contact-link">
                            <i class="fas fa-envelope me-2"></i><?= $user_details['email_id']; ?>
                        </a>
                    </div>

                    <!-- Branch Office/Secondary Clinic -->
                    <?php if (!empty($user_details['alternate_address'])): ?>
                    <div class="contact-card healthcare">
                        <div class="contact-icon healthcare-icon">
                            <i class="fas fa-clinic-medical"></i>
                        </div>
                        <h5>Branch Clinic</h5>
                        <p><?= $user_details['alternate_address']; ?></p>
                        <?php if (!empty($user_details['alternate_mobile'])): ?>
                            <a href="tel:<?= $user_details['alternate_mobile']; ?>" class="contact-link">
                                <i class="fas fa-phone-alt me-2"></i><?= $user_details['alternate_mobile']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Section 2: Quick Navigation Links -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-section-title">
                        <i class="fas fa-link me-2"></i>Quick Links
                    </h3>
                    <ul class="healthcare-links-modern">
                        <?php
                        $users_info = new App\Libraries\User_details();
                        $final_menu = $users_info->menuLists_new();

                        foreach ($final_menu as $menu) {
                            $link = ($menu['menu_name'] === "Updates") ? base_url() . "/update.html" : base_url() . '/' . $menu['menu_link'];
                            $target = ($menu['menu_name'] === "Updates") ? 'target="_blank" rel="noopener noreferrer"' : '';
                            
                            echo '<li>';
                            echo '<a href="' . $link . '" ' . $target . '>';
                            echo '<i class="fas fa-chevron-right"></i>';
                            echo $menu['menu_name'];
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>

                    
                </div>

                <!-- Section 3: Social Media & Newsletter -->
                <div class="col-lg-5 col-md-12">
                    <h3 class="footer-section-title">
                        <i class="fas fa-share-alt me-2"></i>Follow & Stay Connected
                    </h3>
                    
                    <!-- Social Media Icons -->
                    <div class="healthcare-social-showcase">
                        <div class="social-icons-healthcare">
                            <a href="<?= !empty($user_details['facebook_page']) ? $user_details['facebook_page'] : 'https://www.facebook.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-medical facebook"
                               title="Follow us on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?= !empty($user_details['twitter_page']) ? $user_details['twitter_page'] : 'https://twitter.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-medical twitter"
                               title="Follow us on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?= !empty($user_details['instagram_page']) ? $user_details['instagram_page'] : 'https://www.instagram.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-medical instagram"
                               title="Follow us on Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?= !empty($user_details['youtube_page']) ? $user_details['youtube_page'] : 'https://www.youtube.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-medical youtube"
                               title="Subscribe on YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="<?= !empty($user_details['linkedin_page']) ? $user_details['linkedin_page'] : 'https://www.linkedin.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-medical linkedin"
                               title="Connect on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Healthcare Newsletter Subscription -->
                    <?php if (!empty($user_details['business_description'])): ?>
                    <div class="healthcare-newsletter">
                        <div class="newsletter-header">
                            <h4><i class="fas fa-bell me-2"></i>Health Updates & Tips</h4>
                            <p class="newsletter-description">Subscribe to receive health tips, clinic updates, and medical information.</p>
                        </div>
                        <form class="newsletter-form-healthcare" method="post" action="<?= base_url('newsletter/subscribe'); ?>">
                            <div class="newsletter-input-group">
                                <input type="email" name="email" placeholder="Enter your email address" required 
                                       aria-label="Email for newsletter subscription">
                                <button type="submit" class="newsletter-submit-btn">
                                    <i class="fas fa-paper-plane me-2"></i>Subscribe
                                </button>
                            </div>
                        </form>
                        <div class="privacy-notice">
                            <small><i class="fas fa-lock me-1"></i>Your privacy is important to us. We never share your information.</small>
                        </div>
                    </div>
                    <?php endif; ?>

                   
                </div>
            </div>
        </div>
    </div>

    <!-- Medical Footer Bottom / Copyright -->
    <div class="medical-copyright-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">
                        © <?= date("Y"); ?> <strong><?= $user_details['company_name']; ?></strong>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="legal-links">
                        <li><a href="<?= base_url('privacy-policy'); ?>">Privacy Policy</a></li>
                        <li><a href="<?= base_url('terms-conditions'); ?>">Terms & Conditions</a></li>
                        <li><a href="<?= base_url('disclaimer'); ?>">Medical Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<div class="scroll-top-medical" id="scrollTopBtn" title="Back to top">
    <i class="fas fa-arrow-up"></i>
</div>

<?php echo $custom_insert['foot']; ?>

<script>
// Medical Theme Footer Scripts
document.addEventListener('DOMContentLoaded', function() {
    // Scroll to Top Button Functionality
    const scrollBtn = document.getElementById('scrollTopBtn');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 500) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });
    
    scrollBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Animate footer elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.contact-card, .healthcare-social-showcase, .healthcare-newsletter').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });

    // Newsletter form validation
    const newsletterForms = document.querySelectorAll('.newsletter-form-healthcare');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const emailInput = this.querySelector('input[type="email"]');
            if (!validateEmail(emailInput.value)) {
                e.preventDefault();
                emailInput.classList.add('is-invalid');
                setTimeout(() => {
                    emailInput.classList.remove('is-invalid');
                }, 3000);
            }
        });
    });

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
</script>

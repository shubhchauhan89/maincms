<style>
    /* Ultra Modern Real Estate Footer */
    .footer-wrapper {
        position: relative;
        background: linear-gradient(180deg, #0a1628 0%, #162447 50%, #1f4068 100%);
        overflow: hidden;
    }

    /* Animated Background Elements */
    .footer-bg-animation {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
    }

    .footer-bg-animation span {
        position: absolute;
        display: block;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.05);
        animation: float-animation 25s linear infinite;
        bottom: -150px;
    }

    .footer-bg-animation span:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
        animation-duration: 20s;
    }

    .footer-bg-animation span:nth-child(2) {
        left: 10%;
        width: 40px;
        height: 40px;
        animation-delay: 2s;
        animation-duration: 15s;
    }

    .footer-bg-animation span:nth-child(3) {
        left: 70%;
        width: 60px;
        height: 60px;
        animation-delay: 4s;
        animation-duration: 18s;
    }

    .footer-bg-animation span:nth-child(4) {
        left: 40%;
        width: 50px;
        height: 50px;
        animation-delay: 0s;
        animation-duration: 22s;
    }

    .footer-bg-animation span:nth-child(5) {
        left: 65%;
        width: 35px;
        height: 35px;
        animation-delay: 3s;
        animation-duration: 19s;
    }

    .footer-bg-animation span:nth-child(6) {
        left: 75%;
        width: 70px;
        height: 70px;
        animation-delay: 7s;
        animation-duration: 17s;
    }

    .footer-bg-animation span:nth-child(7) {
        left: 35%;
        width: 45px;
        height: 45px;
        animation-delay: 5s;
        animation-duration: 21s;
    }

    .footer-bg-animation span:nth-child(8) {
        left: 50%;
        width: 55px;
        height: 55px;
        animation-delay: 9s;
        animation-duration: 16s;
    }

    @keyframes float-animation {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }
        100% {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }
    }

    /* Footer Content */
    .footer-content {
        position: relative;
        z-index: 1;
        padding: 80px 0 40px;
    }

    /* Wave Separator */
    .wave-separator {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .wave-separator svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 60px;
    }

    .wave-separator .shape-fill {
        fill: var(--theme_mode_color);
    }

    /* Section Headings */
    .footer-section-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
        color: #fff;
    }

    .footer-section-title::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        border-radius: 10px;
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    /* Contact Cards */
    .contact-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 20px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .contact-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transition: left 0.5s;
    }

    .contact-card:hover::before {
        left: 100%;
    }

    .contact-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        border-color: var(--primary-color);
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: white;
        margin-bottom: 15px;
        animation: pulse-icon 2s infinite;
    }

    @keyframes pulse-icon {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    .contact-card h5 {
        color: var(--primary-color);
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .contact-card p,
    .contact-card a {
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
        text-decoration: none;
        transition: color 0.3s;
    }

    .contact-card a:hover {
        color: var(--accent-color);
    }

    /* Quick Links */
    .quick-links-modern {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .quick-links-modern li {
        margin-bottom: 15px;
        opacity: 0;
        animation: fadeInUp 0.6s forwards;
    }

    .quick-links-modern li:nth-child(1) { animation-delay: 0.1s; }
    .quick-links-modern li:nth-child(2) { animation-delay: 0.2s; }
    .quick-links-modern li:nth-child(3) { animation-delay: 0.3s; }
    .quick-links-modern li:nth-child(4) { animation-delay: 0.4s; }
    .quick-links-modern li:nth-child(5) { animation-delay: 0.5s; }
    .quick-links-modern li:nth-child(6) { animation-delay: 0.6s; }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .quick-links-modern a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 15px;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 8px;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
    }

    .quick-links-modern a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 100%;
        background: var(--accent-color);
        transform: scaleY(0);
        transition: transform 0.3s;
    }

    .quick-links-modern a:hover::before {
        transform: scaleY(1);
    }

    .quick-links-modern a:hover {
        background: rgba(255, 255, 255, 0.05);
        padding-left: 25px;
        color: var(--accent-color);
    }

    .quick-links-modern a i {
        margin-right: 12px;
        font-size: 12px;
        transition: margin-right 0.3s;
    }

    .quick-links-modern a:hover i {
        margin-right: 18px;
    }

    /* Social Media Section */
    .social-showcase {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-icons-grid {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
        /* margin-bottom: 30px; */
    }

    .social-icon-btn {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .social-icon-btn::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: inherit;
        filter: blur(10px);
        opacity: 0;
        transition: opacity 0.4s;
    }

    .social-icon-btn:hover::before {
        opacity: 0.7;
    }

    .social-icon-btn:hover {
        transform: translateY(-10px) rotate(5deg);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }

    .social-icon-btn.twitter { background: linear-gradient(135deg, #1DA1F2, #0d8bd9); }
    .social-icon-btn.facebook { background: linear-gradient(135deg, #1877F2, #0d65d9); }
    .social-icon-btn.instagram { background: linear-gradient(135deg, #E4405F, #C13584); }
    .social-icon-btn.youtube { background: linear-gradient(135deg, #FF0000, #cc0000); }
    .social-icon-btn.linkedin { background: linear-gradient(135deg, #0077B5, #005885); }

    /* Facebook Feed Modern */
    .facebook-feed-modern {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        margin-top: 25px;
        animation: slideInUp 0.8s ease-out;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .facebook-feed-modern iframe {
        width: 100%;
        height: 400px;
        border: none;
    }

    /* Newsletter Modern */
    .newsletter-modern {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        border-radius: 20px;
        padding: 35px;
        margin-top: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
    }

    .newsletter-modern::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        animation: rotate-gradient 15s linear infinite;
    }

    @keyframes rotate-gradient {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .newsletter-modern h4 {
        color: white;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    .newsletter-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }

    .newsletter-form-modern {
        display: flex;
        gap: 10px;
        position: relative;
        z-index: 1;
    }

    .newsletter-form-modern input {
        flex: 1;
        padding: 15px 20px;
        border: none;
        border-radius: 50px;
        font-size: 14px;
        background: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }

    .newsletter-form-modern input:focus {
        outline: none;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    .newsletter-form-modern button {
        padding: 15px 35px;
        border: none;
        border-radius: 50px;
        background: white;
        color: var(--primary-color);
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s;
        white-space: nowrap;
    }

    .newsletter-form-modern button:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    /* Copyright Modern */
    .copyright-modern {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        padding: 25px 0;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copyright-modern p {
        color: rgba(255, 255, 255, 0.7);
        margin: 0;
        font-size: 14px;
    }

    .copyright-modern a {
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s;
    }

    .copyright-modern a:hover {
        color: white;
    }

    /* Scroll to Top Ultra Modern */
    .scroll-top-modern {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        cursor: pointer;
        z-index: 1000;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: all 0.3s;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    .scroll-top-modern:hover {
        transform: scale(1.15) rotate(360deg);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .scroll-top-modern.show {
        display: flex;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .footer-content {
            padding: 50px 0 30px;
        }

        .contact-card {
            margin-bottom: 15px;
        }

        .social-icons-grid {
            gap: 10px;
        }

        .social-icon-btn {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .newsletter-form-modern {
            flex-direction: column;
        }

        .newsletter-form-modern button {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .footer-section-title {
            font-size: 20px;
        }

        .facebook-feed-modern iframe {
            height: 350px;
        }

        .scroll-top-modern {
            width: 50px;
            height: 50px;
            font-size: 20px;
            bottom: 20px;
            right: 20px;
        }
    }
</style>

<!-- Ultra Modern Footer -->
<footer class="footer-wrapper">
    <!-- Animated Background -->
    <div class="footer-bg-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Wave Separator -->
    <div class="wave-separator">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-section-title">Get In Touch</h3>
                    
                    <?php if (!empty($user_details['business_address'])): ?>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Main Office</h5>
                        <p><?= $user_details['business_address']; ?></p>
                    </div>
                    <?php endif; ?>


                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Contact Us</h5>
                        <a href="tel:<?= $user_details['company_phone_no']; ?>">
                            <?= $user_details['company_phone_no']; ?>
                        </a>
                        <a href="mailto:<?= $user_details['email_id']; ?>">
                           | <?= $user_details['email_id']; ?>
                        </a>
                    </div>

                    <?php if (!empty($user_details['alternate_address'])): ?>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5>Branch Office</h5>
                        <p><?= $user_details['alternate_address']; ?></p>
                        <?php if (!empty($user_details['alternate_mobile'])): ?>
                            <a href="tel:<?= $user_details['alternate_mobile']; ?>">
                                <?= $user_details['alternate_mobile']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-section-title">Quick Links</h3>
                    <ul class="quick-links-modern">
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

                <!-- Social & Newsletter -->
                <div class="col-lg-5 col-md-12">
                    <h3 class="footer-section-title">Connect With Us</h3>
                    
                    <div class="social-showcase">
                        <!-- Social Icons -->
                        <div class="social-icons-grid">
                            <a href="<?= !empty($user_details['twitter_page']) ? $user_details['twitter_page'] : 'https://twitter.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-btn twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?= !empty($user_details['facebook_page']) ? $user_details['facebook_page'] : 'https://www.facebook.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-btn facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?= !empty($user_details['instagram_page']) ? $user_details['instagram_page'] : 'https://www.instagram.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-btn instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?= !empty($user_details['youtube_page']) ? $user_details['youtube_page'] : 'https://www.youtube.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-btn youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="<?= !empty($user_details['linkedin_page']) ? $user_details['linkedin_page'] : 'https://www.linkedin.com'; ?>" 
                               target="_blank" rel="noopener noreferrer" class="social-icon-btn linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                        
                    </div>

                    <!-- Newsletter -->
                    <?php if (!empty($user_details['business_description'])): ?>
                    <div class="newsletter-modern">
                        <h4><i class="fas fa-envelope-open-text me-2"></i>Stay Updated</h4>
                        <div class="newsletter-text">
                            <?= $user_details['business_description']; ?>
                        </div>
                        <form class="newsletter-form-modern" method="post" action="<?= base_url('newsletter/subscribe'); ?>">
                            <input type="email" name="email" placeholder="Your email address" required>
                            <button type="submit">
                                <i class="fas fa-paper-plane me-2"></i>Subscribe
                            </button>
                        </form>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright-modern">
        <div class="container">
            <p>
                © <?= date("Y"); ?> <?= $colors['copyright_text'] ?? $user_details['company_name']; ?>. All Rights Reserved. 
            </p>
        </div>
    </div>
</footer>

<!-- Scroll to Top -->
<div class="scroll-top-modern" id="scrollTopBtn">
    <i class="fas fa-arrow-up"></i>
</div>

<?php echo $custom_insert['foot']; ?>

<script>
// Ultra Modern Footer Scripts
document.addEventListener('DOMContentLoaded', function() {
    // Scroll to Top
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

    // Animate elements on scroll
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

    document.querySelectorAll('.contact-card, .social-showcase').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
});
</script>

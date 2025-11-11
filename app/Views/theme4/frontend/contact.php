<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* Ultra Modern Contact Us Page */
    
    /* Page Wrapper */
    .contact-us-page {
        overflow: hidden;
    }

    /* Contact Hero Section */
    .contact-hero {
        position: relative;
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(0,0,0,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .contact-hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
    }

    .contact-hero-title {
        font-size: 52px;
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .contact-hero-subtitle {
        font-size: 18px;
        font-weight: 500;
        opacity: 0.95;
    }

    /* Main Contact Section */
    .contact-main-wrapper {
        padding: 80px 0;
        background: var(--theme_mode_color);
        position: relative;
    }

    .contact-main-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.04;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--accent-color) 0%, transparent 50%);
        pointer-events: none;
    }

    .contact-main-content {
        position: relative;
        z-index: 1;
    }

    /* Section Title */
    .contact-section-title {
        font-size: 42px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 60px;
    }

    /* Map Container */
    .contact-map-container {
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        margin-bottom: 60px;
        animation: slideInDown 0.8s ease-out;
    }

    .contact-map-container iframe {
        width: 100%;
        height: 500px;
        border: none;
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Contact Info & Form Grid */
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: stretch;
    }

    /* Contact Info Section */
    .contact-info-wrapper {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        border-radius: 25px;
        padding: 50px;
        color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .contact-info-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(0,0,0,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .contact-info-wrapper::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .contact-info-content {
        position: relative;
        z-index: 1;
    }

    /* Contact Info Item */
    .contact-info-item {
        display: flex;
        gap: 20px;
        margin-bottom: 35px;
        animation: slideInLeft 0.8s ease-out;
        animation-fill-mode: both;
    }

    .contact-info-item:nth-child(2) {
        animation-delay: 0.1s;
    }

    .contact-info-item:nth-child(3) {
        animation-delay: 0.2s;
    }

    .contact-info-item:nth-child(4) {
        animation-delay: 0.3s;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .contact-info-icon {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: white;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .contact-info-item:hover .contact-info-icon {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1) rotate(10deg);
    }

    .contact-info-text h4 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .contact-info-text p {
        font-size: 15px;
        margin: 0;
        opacity: 0.95;
        line-height: 1.5;
    }

    .contact-info-text a {
        color: var(--theme_surface_color);
        text-decoration: none;
        transition: opacity 0.3s ease;
    }

    .contact-info-text a:hover {
        opacity: 0.8;
        text-decoration: underline;
    }

    /* Contact Form Section */
    .contact-form-wrapper {
        background: var(--theme_surface_color);
        border-radius: 25px;
        padding: 50px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        border-top: 5px solid var(--primary-color);
        animation: slideInRight 0.8s ease-out;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .contact-form-title {
        font-size: 24px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .contact-form-title i {
        color: var(--primary-color);
    }

    /* Form Elements */
    .contact-form-group {
        margin-bottom: 20px;
    }

    .contact-form-group label {
        display: block;
        font-weight: 600;
        font-size: 14px;
        color: var(--text-dark);
        margin-bottom: 10px;
    }

    .contact-form-control {
        width: 100%;
        padding: 14px 18px;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .contact-form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        background: white;
        box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.1);
        transform: translateY(-2px);
    }

    textarea.contact-form-control {
        resize: vertical;
        min-height: 140px;
    }

    /* Submit Button */
    .contact-submit-btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border: none;
        color: white;
        font-weight: 700;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        margin-top: 10px;
    }

    .contact-submit-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .contact-submit-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .contact-submit-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    /* Quick Contact Stats */
    .contact-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 60px;
        padding-top: 60px;
        border-top: 2px solid #e9ecef;
    }

    .stat-card {
        text-align: center;
        padding: 20px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .stat-icon {
        font-size: 40px;
        color: var(--primary-color);
        margin-bottom: 12px;
    }

    .stat-number {
        font-size: 28px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .stat-label {
        font-size: 13px;
        color: #adb5bd;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }

    /* Social Links */
    .contact-social {
        display: flex;
        gap: 12px;
        margin-top: 25px;
        flex-wrap: wrap;
    }

    .social-link {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .contact-hero-title {
            font-size: 42px;
        }

        .contact-section-title {
            font-size: 36px;
        }
    }

    @media (max-width: 991px) {
        .contact-main-wrapper {
            padding: 60px 0;
        }

        .contact-info-wrapper,
        .contact-form-wrapper {
            padding: 40px 30px;
        }

        .contact-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .contact-map-container iframe {
            height: 400px;
        }
    }

    @media (max-width: 768px) {
        .contact-hero {
            padding: 50px 0;
        }

        .contact-hero-title {
            font-size: 32px;
        }

        .contact-main-wrapper {
            padding: 50px 0;
        }

        .contact-section-title {
            font-size: 28px;
        }

        .contact-info-wrapper,
        .contact-form-wrapper {
            padding: 30px 20px;
        }

        .contact-map-container iframe {
            height: 300px;
        }

        .contact-info-item {
            margin-bottom: 25px;
        }

        .contact-stats {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .contact-hero-title {
            font-size: 26px;
        }

        .contact-section-title {
            font-size: 24px;
        }

        .contact-info-wrapper,
        .contact-form-wrapper {
            padding: 25px 15px;
        }

        .contact-form-title {
            font-size: 20px;
        }

        .contact-map-container iframe {
            height: 250px;
        }

        .contact-stats {
            grid-template-columns: 1fr;
        }

        .contact-info-icon {
            width: 50px;
            height: 50px;
            font-size: 24px;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme4") ?>
<div class="contact-us-page overflow-hidden">
    <!-- Additional Sections -->
    <?php
    foreach ($sort_order as $myurl) {
        if ($myurl['url_val'] != "contact") {
            $file_path = 'layout/' . $myurl['url_val'] . '.php';
            if (file_exists($file_path)) {
                include($file_path);
            }
        }
    }
    ?>

    <!-- Main Contact Section -->
    <section class="contact-main-wrapper">
        <div class="container contact-main-content">
            <!-- Section Title -->
            <h2 class="contact-section-title" data-aos="fade-up" data-aos-duration="1000">
                Get In Touch With Us
            </h2>

            <!-- Map -->
            <div class="contact-map-container" data-aos="flip-down" data-aos-duration="1000">
                <?php if (!empty($user_details['company_map'])) {
                    echo $user_details['company_map'];
                } else { ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v=1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php } ?>
            </div>

            <!-- Contact Grid -->
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info-wrapper" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="contact-info-content">
                        <!-- Address -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Our Location</h4>
                                <p><?= htmlspecialchars($user_details['business_address']); ?></p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Email Address</h4>
                                <p><a href="mailto:<?= $user_details['user_email']; ?>">
                                    <?= htmlspecialchars($user_details['user_email']); ?>
                                </a></p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Phone Number</h4>
                                <p><a href="tel:+91<?= $user_details['company_phone_no']; ?>">
                                    +91 <?= htmlspecialchars($user_details['company_phone_no']); ?>
                                </a></p>
                            </div>
                        </div>

                        <!-- Hours (Optional) -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Business Hours</h4>
                                <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: By Appointment</p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="contact-social">
                            <a href="#" class="social-link" title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" title="Twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" title="LinkedIn" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-link" title="Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper" data-aos="zoom-in-left" data-aos-duration="1000">
                    <div class="contact-form-title">
                        <i class="fas fa-paper-plane"></i>Send us a Message
                    </div>

                    <?= $this->include('theme4/frontend/layout/message'); ?>

                    <!-- Stats Below Form -->
                    <div class="contact-stats">
                        <div class="stat-card">
                            <div class="stat-icon"><i class="fas fa-handshake"></i></div>
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="fas fa-project-diagram"></i></div>
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Projects Done</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="fas fa-award"></i></div>
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Years Exp.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>
<?= $this->endSection() ?>

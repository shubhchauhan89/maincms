<?= $this->extend("theme5/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== REVOLUTIONARY MEDICAL CONTACT PAGE ===== */
    
    .medical-contact-page {
        position: relative;
        overflow: hidden;
        background: var(--theme_mode_color);
    }

    /* Main Contact Wrapper */
    .medical-contact-main-wrapper {
        position: relative;
        padding: 80px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .medical-contact-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.08;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(135deg, var(--medical-teal, #008080) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: contact-bg-shift 25s ease infinite;
    }

    @keyframes contact-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    .medical-contact-main-content {
        position: relative;
        z-index: 1;
        max-width: 1400px;
    }

    /* Page Title */
    .medical-contact-section-title {
        font-size: 56px;
        font-weight: 900;
        text-align: center;
        margin-bottom: 60px;
        letter-spacing: -2px;
        color: var(--text-dark);
    }

    .medical-contact-section-title span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Map Container */
    .medical-contact-map-container {
        width: 100%;
        height: 500px;
        border-radius: 25px;
        overflow: hidden;
        margin-bottom: 80px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
        border: 2px solid rgba(0, 128, 128, 0.1);
    }

    .medical-contact-map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* Contact Grid */
    .medical-contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
    }

    /* Contact Info Section */
    .medical-contact-info-wrapper {
        position: relative;
    }

    .medical-contact-info-content {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    /* Contact Info Item */
    .medical-contact-info-item {
        display: flex;
        gap: 20px;
        padding: 25px;
        background: var(--theme_surface_color);
        border-radius: 15px;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-contact-info-item:hover {
        transform: translateY(-8px);
        border-color: rgba(0, 128, 128, 0.2);
        box-shadow: 0 20px 50px rgba(0, 128, 128, 0.1);
        background: linear-gradient(135deg, var(--theme_surface_color) 0%, rgba(0, 128, 128, 0.03) 100%);
    }

    .medical-contact-info-icon {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        border-radius: 15px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.15), rgba(0, 61, 122, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--medical-teal, #008080);
        transition: all 0.4s ease;
    }

    .medical-contact-info-item:hover .medical-contact-info-icon {
        background: linear-gradient(135deg, var(--medical-teal, #008080), var(--medical-blue, #003d7a));
        color: white;
        transform: scale(1.12);
    }

    .medical-contact-info-text h4 {
        font-size: 16px;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0 0 8px 0;
        transition: color 0.3s ease;
    }

    .medical-contact-info-item:hover .medical-contact-info-text h4 {
        color: var(--medical-teal, #008080);
    }

    .medical-contact-info-text p {
        font-size: 14px;
        color: #6c757d;
        margin: 0;
        line-height: 1.6;
    }

    .medical-contact-info-text a {
        color: var(--medical-teal, #008080);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .medical-contact-info-text a:hover {
        color: var(--medical-blue, #003d7a);
    }

    /* Social Links */
    .medical-contact-social {
        display: flex;
        gap: 15px;
        margin-top: 20px;
        padding-top: 25px;
        border-top: 2px solid rgba(0, 128, 128, 0.1);
    }

    .medical-contact-social-link {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: var(--medical-teal, #008080);
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .medical-contact-social-link:hover {
        background: linear-gradient(135deg, var(--medical-teal, #008080), var(--medical-blue, #003d7a));
        color: white;
        transform: translateY(-5px);
    }

    /* Contact Form Section */
    .medical-contact-form-wrapper {
        position: relative;
        padding: 50px;
        background: var(--theme_surface_color);
        border-radius: 25px;
        border: 2px solid rgba(0, 128, 128, 0.1);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    }

    .medical-contact-form-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        border-radius: 25px 25px 0 0;
    }

    .medical-contact-form-title {
        font-size: 24px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .medical-contact-form-title i {
        color: var(--medical-teal, #008080);
        font-size: 28px;
    }

    /* Contact Stats */
    .medical-contact-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 2px solid rgba(0, 128, 128, 0.1);
    }

    .medical-contact-stat-card {
        text-align: center;
        padding: 20px;
        border-radius: 15px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.05), rgba(0, 61, 122, 0.05));
        transition: all 0.4s ease;
    }

    .medical-contact-stat-card:hover {
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
        transform: translateY(-5px);
    }

    .medical-contact-stat-icon {
        font-size: 32px;
        color: var(--medical-teal, #008080);
        margin-bottom: 8px;
    }

    .medical-contact-stat-number {
        font-size: 28px;
        font-weight: 900;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 5px;
    }

    .medical-contact-stat-label {
        font-size: 12px;
        color: #6c757d;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-contact-section-title {
            font-size: 48px;
        }
    }

    @media (max-width: 991px) {
        .medical-contact-main-wrapper {
            padding: 60px 0;
        }
        .medical-contact-section-title {
            font-size: 40px;
            margin-bottom: 40px;
        }
        .medical-contact-map-container {
            height: 400px;
            margin-bottom: 50px;
        }
        .medical-contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .medical-contact-form-wrapper {
            padding: 40px;
        }
    }

    @media (max-width: 768px) {
        .medical-contact-main-wrapper {
            padding: 40px 0;
        }
        .medical-contact-section-title {
            font-size: 32px;
        }
        .medical-contact-map-container {
            height: 300px;
        }
        .medical-contact-info-wrapper,
        .medical-contact-form-wrapper {
            border-radius: 15px;
        }
        .medical-contact-stats {
            grid-template-columns: 1fr;
        }
        .medical-contact-form-wrapper {
            padding: 30px;
        }
    }

    @media (max-width: 576px) {
        .medical-contact-section-title {
            font-size: 28px;
        }
        .medical-contact-map-container {
            height: 250px;
        }
        .medical-contact-info-item {
            padding: 18px;
            gap: 15px;
        }
        .medical-contact-info-icon {
            width: 50px;
            height: 50px;
            font-size: 24px;
        }
        .medical-contact-social {
            justify-content: center;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-contact-info-item {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-contact-form-wrapper {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme5") ?>
<div class="medical-contact-page overflow-hidden">
    <!-- Background -->
    <div class="medical-contact-bg"></div>

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
    <section class="medical-contact-main-wrapper">
        <div class="container-fluid medical-contact-main-content px-3 px-md-5">
            <!-- Section Title -->
            <h2 class="medical-contact-section-title" data-aos="fade-down" data-aos-duration="900">
                Get In <span>Touch</span> With Us
            </h2>

            <!-- Map -->
            <div class="medical-contact-map-container" data-aos="zoom-in" data-aos-duration="1000">
                <?php if (!empty($user_details['company_map'])) {
                    echo $user_details['company_map'];
                } else { ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v=1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php } ?>
            </div>

            <!-- Contact Grid -->
            <div class="medical-contact-grid">
                <!-- Contact Information -->
                <div class="medical-contact-info-wrapper" data-aos="fade-right" data-aos-duration="1000">
                    <div class="medical-contact-info-content">
                        <!-- Address -->
                        <div class="medical-contact-info-item">
                            <div class="medical-contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="medical-contact-info-text">
                                <h4>Our Location</h4>
                                <p><?= htmlspecialchars($user_details['business_address'] ?? 'Medical Center Address'); ?></p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="medical-contact-info-item">
                            <div class="medical-contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="medical-contact-info-text">
                                <h4>Email Address</h4>
                                <p><a href="mailto:<?= $user_details['user_email'] ?? 'contact@healthcare.com'; ?>">
                                    <?= htmlspecialchars($user_details['user_email'] ?? 'contact@healthcare.com'); ?>
                                </a></p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="medical-contact-info-item">
                            <div class="medical-contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="medical-contact-info-text">
                                <h4>Phone Number</h4>
                                <p><a href="tel:+91<?= $user_details['company_phone_no'] ?? '9876543210'; ?>">
                                    +91 <?= htmlspecialchars($user_details['company_phone_no'] ?? '9876543210'); ?>
                                </a></p>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="medical-contact-info-item">
                            <div class="medical-contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="medical-contact-info-text">
                                <h4>Business Hours</h4>
                                <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: 10:00 AM - 2:00 PM<br>Emergency: 24/7</p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="medical-contact-social">
                            <a href="#" class="medical-contact-social-link" title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="medical-contact-social-link" title="Twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="medical-contact-social-link" title="LinkedIn" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="medical-contact-social-link" title="Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="medical-contact-social-link" title="WhatsApp" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="medical-contact-form-wrapper" data-aos="fade-left" data-aos-duration="1000">
                    <div class="medical-contact-form-title">
                        <i class="fas fa-paper-plane"></i>Send us a Message
                    </div>

                    <?= $this->include('theme5/frontend/layout/message'); ?>

                    <!-- Stats Below Form -->
                    <div class="medical-contact-stats">
                        <div class="medical-contact-stat-card">
                            <div class="medical-contact-stat-icon"><i class="fas fa-user-md"></i></div>
                            <div class="medical-contact-stat-number">500+</div>
                            <div class="medical-contact-stat-label">Happy Patients</div>
                        </div>
                        <div class="medical-contact-stat-card">
                            <div class="medical-contact-stat-icon"><i class="fas fa-heartbeat"></i></div>
                            <div class="medical-contact-stat-number">1000+</div>
                            <div class="medical-contact-stat-label">Cases Treated</div>
                        </div>
                        <div class="medical-contact-stat-card">
                            <div class="medical-contact-stat-icon"><i class="fas fa-award"></i></div>
                            <div class="medical-contact-stat-number">25+</div>
                            <div class="medical-contact-stat-label">Years Exp.</div>
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
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }
    });
</script>
<?= $this->endSection() ?>

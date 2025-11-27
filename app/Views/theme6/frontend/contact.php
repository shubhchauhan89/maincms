<?= $this->extend("theme6/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== INDUSTRIAL EDGE PRO - CONTACT PAGE STYLES ===== */

    .industrial-contact-page {
        position: relative;
        background: var(--industrial-black);
        color: var(--industrial-text);
    }

    .industrial-contact-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--industrial-orange) 0%, transparent 50%),
            linear-gradient(135deg, var(--industrial-blue) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: contact-bg-shift 20s ease infinite;
    }

    @keyframes contact-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    .industrial-contact-main-wrapper {
        position: relative;
        z-index: 1;
        padding: 100px 0;
    }

    .industrial-contact-main-content {
        max-width: 1400px;
        margin: 0 auto;
    }

    .industrial-contact-section-title {
        font-size: 3rem;
        font-weight: 900;
        text-align: center;
        margin-bottom: 60px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .industrial-contact-section-title span {
        color: var(--industrial-orange);
        display: block;
    }

    .industrial-contact-map-container {
        width: 100%;
        height: 400px;
        margin-bottom: 60px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        border: 1px solid var(--industrial-silver);
    }

    .industrial-contact-map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .industrial-contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: flex-start;
    }

    /* ===== CONTACT INFO ===== */
    .industrial-contact-info-wrapper {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 40px;
        position: relative;
    }

    .industrial-contact-info-content {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .industrial-contact-info-item {
        display: flex;
        gap: 20px;
        padding-bottom: 25px;
        border-bottom: 1px solid var(--industrial-silver);
        transition: all 300ms ease;
    }

    .industrial-contact-info-item:last-of-type {
        border-bottom: none;
        padding-bottom: 0;
    }

    .industrial-contact-info-item:hover {
        transform: translateX(10px);
    }

    .industrial-contact-info-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #1a1a1a;
        flex-shrink: 0;
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
    }

    .industrial-contact-info-text h4 {
        color: var(--industrial-orange);
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .industrial-contact-info-text p {
        color: var(--industrial-text-secondary);
        font-size: 1rem;
        margin: 0;
        line-height: 1.6;
    }

    .industrial-contact-info-text a {
        color: var(--industrial-blue);
        text-decoration: none;
        transition: color 300ms ease;
    }

    .industrial-contact-info-text a:hover {
        color: var(--industrial-orange);
    }

    /* ===== SOCIAL LINKS ===== */
    .industrial-contact-social {
        display: flex;
        gap: 15px;
        margin-top: 15px;
        padding-top: 25px;
        border-top: 1px solid var(--industrial-silver);
    }

    .industrial-contact-social-link {
        width: 45px;
        height: 45px;
        border: 2px solid var(--industrial-orange);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--industrial-orange);
        text-decoration: none;
        transition: all 300ms ease;
        font-size: 1.2rem;
    }

    .industrial-contact-social-link:hover {
        background: var(--industrial-orange);
        color: #1a1a1a;
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(255, 107, 53, 0.3);
    }

    /* ===== CONTACT FORM ===== */
    .industrial-contact-form-wrapper {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 40px;
    }

    .industrial-contact-form-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--industrial-orange);
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* ===== STATS ===== */
    .industrial-contact-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 40px;
        padding-top: 40px;
        border-top: 1px solid var(--industrial-silver);
    }

    .industrial-contact-stat-card {
        text-align: center;
        padding: 20px;
        background: rgba(255, 107, 53, 0.05);
        border-radius: 8px;
        border: 1px solid rgba(255, 107, 53, 0.2);
        transition: all 300ms ease;
    }

    .industrial-contact-stat-card:hover {
        background: rgba(255, 107, 53, 0.15);
        border-color: var(--industrial-orange);
        transform: translateY(-5px);
    }

    .industrial-contact-stat-icon {
        font-size: 2rem;
        color: var(--industrial-orange);
        margin-bottom: 10px;
    }

    .industrial-contact-stat-number {
        font-size: 1.8rem;
        font-weight: 900;
        color: var(--industrial-orange);
        margin-bottom: 5px;
    }

    .industrial-contact-stat-label {
        font-size: 0.9rem;
        color: var(--industrial-text-secondary);
        font-weight: 600;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .industrial-contact-section-title {
            font-size: 2.5rem;
        }

        .industrial-contact-map-container {
            height: 350px;
        }

        .industrial-contact-grid {
            gap: 40px;
        }
    }

    @media (max-width: 991px) {
        .industrial-contact-main-wrapper {
            padding: 60px 0;
        }

        .industrial-contact-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .industrial-contact-stats {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .industrial-contact-section-title {
            font-size: 1.8rem;
            margin-bottom: 40px;
        }

        .industrial-contact-map-container {
            height: 250px;
            margin-bottom: 40px;
        }

        .industrial-contact-info-wrapper,
        .industrial-contact-form-wrapper {
            padding: 30px 20px;
        }

        .industrial-contact-info-item {
            gap: 15px;
        }

        .industrial-contact-info-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .industrial-contact-stats {
            gap: 15px;
        }
    }

    @media (max-width: 576px) {
        .industrial-contact-main-content {
            padding: 0 15px;
        }

        .industrial-contact-section-title {
            font-size: 1.5rem;
        }

        .industrial-contact-map-container {
            height: 200px;
        }

        .industrial-contact-info-wrapper,
        .industrial-contact-form-wrapper {
            padding: 20px 15px;
        }

        .industrial-contact-form-title {
            font-size: 1.2rem;
        }

        .industrial-contact-stats {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .industrial-contact-social {
            justify-content: center;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme6") ?>
<div class="industrial-contact-page overflow-hidden">
    <!-- Background -->
    <div class="industrial-contact-bg"></div>

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
    <section class="industrial-contact-main-wrapper">
        <div class="container-fluid industrial-contact-main-content px-3 px-md-5">
            <!-- Section Title -->
            <h2 class="industrial-contact-section-title" data-aos="fade-down" data-aos-duration="900">
                Get In <span>Touch</span> With Us
            </h2>

            <!-- Map -->
            <div class="industrial-contact-map-container" data-aos="zoom-in" data-aos-duration="1000">
                <?php if (!empty($user_details['company_map'])) {
                    echo $user_details['company_map'];
                } else { ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v=1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php } ?>
            </div>

            <!-- Contact Grid -->
            <div class="industrial-contact-grid">
                <!-- Contact Information -->
                <div class="industrial-contact-info-wrapper" data-aos="fade-right" data-aos-duration="1000">
                    <div class="industrial-contact-info-content">
                        <!-- Address -->
                        <div class="industrial-contact-info-item">
                            <div class="industrial-contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="industrial-contact-info-text">
                                <h4>Our Location</h4>
                                <p><?= htmlspecialchars($user_details['business_address'] ?? 'Manufacturing Facility Address'); ?></p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="industrial-contact-info-item">
                            <div class="industrial-contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="industrial-contact-info-text">
                                <h4>Email Address</h4>
                                <p><a href="mailto:<?= htmlspecialchars($user_details['user_email'] ?? 'contact@manufacturing.com'); ?>">
                                    <?= htmlspecialchars($user_details['user_email'] ?? 'contact@manufacturing.com'); ?>
                                </a></p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="industrial-contact-info-item">
                            <div class="industrial-contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="industrial-contact-info-text">
                                <h4>Phone Number</h4>
                                <p><a href="tel:+91<?= htmlspecialchars($user_details['company_phone_no'] ?? '9876543210'); ?>">
                                    +91 <?= htmlspecialchars($user_details['company_phone_no'] ?? '9876543210'); ?>
                                </a></p>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="industrial-contact-info-item">
                            <div class="industrial-contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="industrial-contact-info-text">
                                <h4>Business Hours</h4>
                                <p>Mon - Fri: 8:00 AM - 6:00 PM<br>Sat: 9:00 AM - 1:00 PM<br>Emergency: 24/7 Support</p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="industrial-contact-social">
                            <a href="#" class="industrial-contact-social-link" title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="industrial-contact-social-link" title="Twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="industrial-contact-social-link" title="LinkedIn" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="industrial-contact-social-link" title="Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="industrial-contact-social-link" title="WhatsApp" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="industrial-contact-form-wrapper" data-aos="fade-left" data-aos-duration="1000">
                    <div class="industrial-contact-form-title">
                        <i class="fas fa-paper-plane"></i>Send us a Message
                    </div>

                    <?= $this->include('theme6/frontend/layout/message'); ?>

                
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
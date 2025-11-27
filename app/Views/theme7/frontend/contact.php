<?= $this->extend("theme7/frontend/layout/master") ?>

<?= $this->section("customCss") ?>
<style>
    /* ============================================
       CONTACT PAGE - CUSTOM STYLES
       ============================================ */

    .contact-page-wrapper {
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
        position: relative;
        overflow: hidden;
    }

    .contact-page-wrapper::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(33, 128, 161, 0.08), transparent);
        border-radius: 50%;
        top: 100px;
        right: 5%;
        animation: float 8s ease-in-out infinite;
        z-index: 0;
    }

    .contact-page-wrapper::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(230, 126, 34, 0.08), transparent);
        border-radius: 50%;
        bottom: 200px;
        left: 10%;
        animation: float 10s ease-in-out infinite;
        animation-delay: 1s;
        z-index: 0;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(40px); }
    }

    .contact-page-content {
        position: relative;
        z-index: 1;
    }

    /* Header Section */
    .contact-header {
        text-align: center;
        margin-bottom: 60px;
        padding: 40px 0;
    }

    .contact-header-subtitle {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 15px;
        display: inline-block;
        padding: 8px 16px;
        background: rgba(33, 128, 161, 0.1);
        border-radius: var(--border-radius-full);
    }

    .contact-header h2 {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.1;
    }

    .contact-header h2 span {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .contact-header p {
        font-size: 16px;
        color: rgba(var(--text-primary), 0.7);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Main Contact Section */
    .contact-main-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-top: 60px;
        align-items: start;
    }

    /* Contact Info Cards */
    .contact-info-section {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .contact-info-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 32px;
        transition: all var(--transition-normal) var(--ease-standard);
        display: flex;
        gap: 20px;
    }

    .contact-info-card:hover {
        background: linear-gradient(135deg, rgba(33, 128, 161, 0.05), transparent);
        border-color: var(--primary-color);
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(33, 128, 161, 0.15);
    }

    .contact-info-card-icon {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: var(--border-radius-lg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .contact-info-card:hover .contact-info-card-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .contact-info-card-content h4 {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-primary);
        margin: 0 0 8px 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .contact-info-card-content p {
        font-size: 14px;
        color: rgba(var(--text-primary), 0.7);
        margin: 0;
        line-height: 1.6;
    }

    .contact-info-card-content a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .contact-info-card-content a:hover {
        color: var(--accent-color);
    }

    /* Map Section */
    .contact-map-section {
        position: relative;
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        min-height: 400px;
    }

    .contact-map-section iframe {
        width: 100%;
        height: 100%;
        border: none;
        min-height: 400px;
    }

    .contact-map-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0);
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .contact-map-section:hover .contact-map-overlay {
        background: rgba(0, 0, 0, 0.1);
    }

    /* Contact Form */
    .contact-form-section {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 40px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .contact-form-section:hover {
        border-color: var(--primary-color);
        box-shadow: 0 12px 30px rgba(33, 128, 161, 0.1);
    }

    .contact-form-section h3 {
        font-size: 24px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid var(--card-border);
    }

    .contact-form-group {
        margin-bottom: 24px;
    }

    .contact-form-group label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .contact-form-group input,
    .contact-form-group textarea,
    .contact-form-group select {
        width: 100%;
        padding: 12px 16px;
        font-size: 14px;
        line-height: 1.5;
        color: var(--text-primary);
        background-color: var(--section-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius);
        transition: all var(--transition-normal) var(--ease-standard));
        font-family: var(--font-family-base);
    }

    .contact-form-group input:focus,
    .contact-form-group textarea:focus,
    .contact-form-group select:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(33, 128, 161, 0.1);
        background-color: var(--card-background);
    }

    .contact-form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .contact-form-group textarea::placeholder {
        color: rgba(var(--text-primary), 0.5);
    }

    .contact-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .contact-form-submit {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 32px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: all var(--transition-normal) var(--ease-standard));
        width: 100%;
        justify-content: center;
    }

    .contact-form-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(33, 128, 161, 0.3);
    }

    .contact-form-submit:active {
        transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .contact-main-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .contact-header h2 {
            font-size: 36px;
        }

        .contact-form-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .contact-header h2 {
            font-size: 28px;
        }

        .contact-header p {
            font-size: 14px;
        }

        .contact-info-card {
            padding: 24px;
        }

        .contact-form-section {
            padding: 30px 24px;
        }

        .contact-map-section {
            min-height: 300px;
        }

        .contact-map-section iframe {
            min-height: 300px;
        }
    }

    @media (max-width: 480px) {
        .contact-header h2 {
            font-size: 20px;
        }

        .contact-header {
            margin-bottom: 40px;
            padding: 20px 0;
        }

        .contact-info-card {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .contact-info-card-icon {
            margin: 0 auto;
        }

        .contact-form-section {
            padding: 24px 16px;
        }

        .contact-form-group {
            margin-bottom: 16px;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme7") ?>
<div class="contact-page-wrapper">
    <div class="contact-page-content">
        <div class="container" style="padding: 100px 0;">
            
            <!-- Header Section -->
            <div class="contact-header" data-aos="fade-down" data-aos-duration="800">
                <div class="contact-header-subtitle">Get In Touch</div>
                <h2>
                    <span>Let's Connect</span>
                </h2>
                <p>Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>

            <!-- Main Content Grid -->
            <div class="contact-main-grid">
                
                <!-- Left: Contact Info + Map -->
                <div data-aos="fade-right" data-aos-duration="800">
                    
                    <!-- Contact Info Cards -->
                    <div class="contact-info-section">
                        
                        <!-- Location Card -->
                        <div class="contact-info-card" data-aos="fade-up" data-aos-delay="0">
                            <div class="contact-info-card-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-card-content">
                                <h4>Location</h4>
                                <p><?= htmlspecialchars($user_details['business_address'] ?? 'Address not available') ?></p>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div class="contact-info-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="contact-info-card-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-info-card-content">
                                <h4>Email</h4>
                                <p>
                                    <a href="mailto:<?= htmlspecialchars($user_details['user_email'] ?? '') ?>">
                                        <?= htmlspecialchars($user_details['user_email'] ?? 'Email not available') ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div class="contact-info-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-card-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-info-card-content">
                                <h4>Phone</h4>
                                <p>
                                    <a href="tel:+91<?= htmlspecialchars($user_details['company_phone_no'] ?? '') ?>">
                                        +91 <?= htmlspecialchars($user_details['company_phone_no'] ?? 'Phone not available') ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Hours Card (Optional) -->
                        <div class="contact-info-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-info-card-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="contact-info-card-content">
                                <h4>Business Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday - Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div class="contact-map-section" data-aos="zoom-in" data-aos-delay="400" style="margin-top: 30px;">
                        <?php if (!empty($user_details['company_map'])): ?>
                            <?= $user_details['company_map'] ?>
                        <?php else: ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.3191804340063!2d77.59!3d12.97!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzEyLjAiTiA3N8KwMzUnMjQuMCJF!5e0!3m2!1sen!2sin!4v1234567890" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php endif; ?>
                        <div class="contact-map-overlay"></div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="contact-form-section" data-aos="fade-left" data-aos-duration="800">
                    <h3>Send us a Message</h3>
                    
                    <?= $this->include('theme7/frontend/layout/message') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 120
            });
        }

        // Stagger contact cards
        const cards = document.querySelectorAll('.contact-info-card');
        cards.forEach((card, index) => {
            card.style.setProperty('animation-delay', (index * 0.1) + 's');
        });

        // Form interaction tracking
        const form = document.querySelector('form');
        if (form) {
            const inputs = form.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        }

        // Analytics tracking for form submission
        const submitBtn = form ? form.querySelector('[type="submit"]') : null;
        if (submitBtn) {
            submitBtn.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'contact_form_submit', {
                        'event_category': 'contact',
                        'event_label': 'Form submitted'
                    });
                }
            });
        }
    });
</script>
<?= $this->endSection() ?>

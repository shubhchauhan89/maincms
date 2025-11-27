<?= $this->extend("theme7/frontend/layout/master") ?>

<?= $this->section("customCss") ?>
<style>
    /* ============================================
       SERVICE DETAIL PAGE - CUSTOM STYLES
       ============================================ */

    .service-page-wrapper {
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
        position: relative;
        overflow: hidden;
    }

    .service-page-wrapper::before {
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

    .service-page-wrapper::after {
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

    /* Hero Banner */
    .service-hero {
        position: relative;
        min-height: 350px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 60px;
        overflow: hidden;
    }

    .service-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
        z-index: 1;
    }

    .service-hero-content {
        position: relative;
        z-index: 2;
        color: white;
    }

    .service-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin: 0 0 20px 0;
        line-height: 1.1;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .service-hero-breadcrumb {
        font-size: 14px;
        opacity: 0.95;
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .service-hero-breadcrumb a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .service-hero-breadcrumb a:hover {
        color: white;
        text-decoration: underline;
    }

    .service-hero-breadcrumb span {
        color: rgba(255, 255, 255, 0.6);
    }

    /* Service Details Section */
    .service-details-wrapper {
        position: relative;
        z-index: 1;
        padding: 80px 0;
    }

    .service-details-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* Service Content */
    .service-content-section {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .service-content-header {
        display: grid;
        grid-template-columns: 200px 1fr;
        gap: 30px;
        align-items: start;
    }

    .service-image-card {
        position: relative;
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        height: 200px;
    }

    .service-image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .service-image-card:hover img {
        transform: scale(1.1);
    }

    .service-title-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 24px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .service-title-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .service-title-card h2 {
        font-size: 32px;
        font-weight: 800;
        color: var(--text-primary);
        margin: 0;
        line-height: 1.2;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .service-description-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 30px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .service-description-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .service-description-card p,
    .service-description-card ul,
    .service-description-card ol,
    .service-description-card li {
        font-size: 15px;
        color: rgba(var(--text-primary), 0.8);
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .service-description-card ul,
    .service-description-card ol {
        margin-left: 20px;
    }

    .service-description-card li {
        margin-bottom: 8px;
    }

    /* Sidebar */
    .service-sidebar {
        position: relative;
    }

    .service-sidebar-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        transition: all var(--transition-normal) var(--ease-standard));
        max-height: 600px;
        overflow-y: auto;
    }

    .service-sidebar-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .service-sidebar-header {
        padding: 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .service-sidebar-header h5 {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .service-sidebar-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-sidebar-item {
        border-bottom: 1px solid var(--card-border);
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .service-sidebar-item:last-child {
        border-bottom: none;
    }

    .service-sidebar-item:hover {
        background: linear-gradient(135deg, rgba(33, 128, 161, 0.05), transparent);
    }

    .service-sidebar-link {
        display: block;
        padding: 16px 20px;
        color: var(--text-primary);
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .service-sidebar-link:hover,
    .service-sidebar-link.active {
        color: var(--primary-color);
        padding-left: 24px;
        background: rgba(33, 128, 161, 0.05);
    }

    /* Services Grid */
    .services-grid-section {
        position: relative;
        z-index: 1;
        padding: 80px 0;
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
    }

    .services-grid-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .services-grid-header h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 10px;
        color: var(--text-primary);
    }

    .services-grid-header h2 span {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .service-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        transition: all var(--transition-normal) var(--ease-standard));
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .service-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(33, 128, 161, 0.15);
    }

    .service-card-image {
        position: relative;
        width: 100%;
        height: 240px;
        background: var(--section-background);
        overflow: hidden;
    }

    .service-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .service-card:hover .service-card-image img {
        transform: scale(1.1);
    }

    .service-card-content {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .service-card-title {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 12px;
        line-height: 1.4;
        flex-grow: 1;
    }

    .service-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-radius: var(--border-radius);
        transition: all var(--transition-normal) var(--ease-standard));
        border: none;
        cursor: pointer;
    }

    .service-card-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.2);
    }

    /* Contact Section */
    .service-contact-section {
        position: relative;
        z-index: 1;
        padding: 80px 0;
    }

    .service-contact-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .service-contact-header-subtitle {
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

    .service-contact-header h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 20px;
        color: var(--text-primary);
    }

    .service-contact-header h2 span {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .service-contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    .service-contact-map {
        position: relative;
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        min-height: 400px;
    }

    .service-contact-map iframe {
        width: 100%;
        height: 100%;
        border: none;
        min-height: 400px;
    }

    .service-contact-form {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 40px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .service-contact-form:hover {
        border-color: var(--primary-color);
        box-shadow: 0 12px 30px rgba(33, 128, 161, 0.1);
    }

    .service-contact-form h3 {
        font-size: 24px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid var(--card-border);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .service-details-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .service-contact-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .service-hero h1 {
            font-size: 36px;
        }

        .service-title-card h2 {
            font-size: 24px;
        }

        .services-grid-header h2 {
            font-size: 32px;
        }

        .service-contact-header h2 {
            font-size: 32px;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }
    }

    @media (max-width: 768px) {
        .service-hero {
            min-height: 280px;
            padding: 40px 30px;
        }

        .service-hero h1 {
            font-size: 28px;
        }

        .service-details-wrapper {
            padding: 60px 0;
        }

        .service-content-header {
            grid-template-columns: 1fr;
        }

        .service-sidebar-card {
            max-height: 100%;
        }

        .services-grid-section {
            padding: 60px 0;
        }

        .services-grid-header h2 {
            font-size: 28px;
        }

        .services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .service-contact-section {
            padding: 60px 0;
        }

        .service-contact-header h2 {
            font-size: 28px;
        }

        .service-contact-map {
            min-height: 300px;
        }

        .service-contact-map iframe {
            min-height: 300px;
        }
    }

    @media (max-width: 480px) {
        .service-hero {
            min-height: 200px;
            padding: 30px 20px;
        }

        .service-hero h1 {
            font-size: 20px;
        }

        .service-hero-breadcrumb {
            font-size: 12px;
            flex-wrap: wrap;
        }

        .service-title-card h2 {
            font-size: 20px;
        }

        .service-description-card {
            padding: 20px 16px;
        }

        .service-description-card p {
            font-size: 14px;
        }

        .service-sidebar-header h5 {
            font-size: 14px;
        }

        .service-sidebar-link {
            font-size: 13px;
            padding: 12px 16px;
        }

        .services-grid-header h2 {
            font-size: 20px;
        }

        .services-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .service-card-image {
            height: 200px;
        }

        .service-contact-header h2 {
            font-size: 20px;
        }

        .service-contact-form {
            padding: 24px 16px;
        }

        .service-contact-map {
            min-height: 250px;
        }

        .service-contact-map iframe {
            min-height: 250px;
        }
    }

    /* Scrollbar Styling */
    .service-sidebar-card::-webkit-scrollbar {
        width: 6px;
    }

    .service-sidebar-card::-webkit-scrollbar-track {
        background: var(--section-background);
    }

    .service-sidebar-card::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 3px;
    }

    .service-sidebar-card::-webkit-scrollbar-thumb:hover {
        background: var(--accent-color);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme7") ?>
<div class="service-page-wrapper">
    
    <!-- Service Hero Banner -->
    <?php
    $banner_img = !empty($service['banner']) 
        ? base_url()."/public/uploads/service_banners/" . $service['banner'] 
        : base_url()."/public/assets/img/default-banner.jpg";
    ?>
    <div class="service-hero" 
         style="background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('<?= htmlspecialchars($banner_img) ?>');"
         data-aos="fade-down" 
         data-aos-duration="800">
        <div class="service-hero-content">
            <h1><?= htmlspecialchars($service['service'] ?? 'Service') ?></h1>
            <div class="service-hero-breadcrumb">
                <a href="<?= base_url('/') ?>">Home</a>
                <span>/</span>
                <a href="<?= base_url('/services') ?>">Services</a>
                <span>/</span>
                <span><?= htmlspecialchars($service['service'] ?? 'Service') ?></span>
            </div>
        </div>
    </div>

    <!-- Service Details Section -->
    <div class="container service-details-wrapper">
        <div class="service-details-grid">
            
            <!-- Main Content (Left) -->
            <div class="service-content-section" data-aos="fade-right" data-aos-duration="800">
                
                <!-- Image + Title -->
                <div class="service-content-header">
                    <!-- Service Image -->
                    <div class="service-image-card">
                        <?php
                        $service_img = !empty($service['image']) 
                            ? base_url()."/public/uploads/service_images/" . $service['image'] 
                            : base_url()."/public/assets/img/no-image.png";
                        ?>
                        <img src="<?= htmlspecialchars($service_img) ?>" 
                             alt="<?= htmlspecialchars($service['service'] ?? 'Service') ?>"
                             loading="lazy">
                    </div>

                    <!-- Title Card -->
                    <div class="service-title-card">
                        <h2><?= htmlspecialchars($service['service'] ?? 'Service') ?></h2>
                    </div>
                </div>

                <!-- Description Content -->
                <div class="service-description-card">
                    <?= $service['content'] ?? '<p>Service content not available.</p>' ?>
                </div>
            </div>

            <!-- Sidebar (Right) -->
            <div class="service-sidebar" data-aos="fade-left" data-aos-duration="800">
                <div class="service-sidebar-card">
                    <div class="service-sidebar-header">
                        <h5>All Services</h5>
                    </div>
                    <ul class="service-sidebar-list">
                        
                        <!-- Regular Services -->
                        <?php if (!empty($all_services)): ?>
                            <?php foreach ($all_services as $svc): ?>
                                <?php $svc_url = base_url().'/services/'.$svc['menu_link']; ?>
                                <li class="service-sidebar-item">
                                    <a href="<?= $svc_url ?>" 
                                       class="service-sidebar-link <?= ($svc['id'] == $service['id']) ? 'active' : '' ?>">
                                        <?= htmlspecialchars($svc['service']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- Custom Services -->
                        <?php if (!empty($custom_services)): ?>
                            <?php foreach ($custom_services as $cust_svc): ?>
                                <?php $cust_url = base_url().'/custom/'.$cust_svc['sub_menu_link']; ?>
                                <li class="service-sidebar-item">
                                    <a href="<?= $cust_url ?>" class="service-sidebar-link">
                                        <?= htmlspecialchars($cust_svc['sub_menu']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Grid Section -->
    <?php if (!empty($all_services) || !empty($custom_services)): ?>
    <div class="services-grid-section">
        <div class="container">
            <div class="services-grid-header" data-aos="fade-up" data-aos-duration="800">
                <h2><span>Our Services</span></h2>
            </div>

            <div class="services-grid">
                
                <!-- Regular Services -->
                <?php if (!empty($all_services)): ?>
                    <?php foreach ($all_services as $index => $svc): ?>
                        <?php
                        $svc_img = !empty($svc['image']) 
                            ? base_url()."/public/uploads/service_images/" . $svc['image'] 
                            : base_url()."/public/assets/img/services-default.jpg";
                        $svc_url = base_url().'/services/'.$svc['menu_link'];
                        ?>
                        <div class="service-card" 
                             data-aos="fade-up" 
                             data-aos-delay="<?= $index * 100 ?>">
                            <div class="service-card-image">
                                <img src="<?= htmlspecialchars($svc_img) ?>" 
                                     alt="<?= htmlspecialchars($svc['service']) ?>"
                                     loading="lazy">
                            </div>
                            <div class="service-card-content">
                                <h3 class="service-card-title">
                                    <?= htmlspecialchars($svc['service']) ?>
                                </h3>
                                <a href="<?= $svc_url ?>" class="service-card-btn">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span>Know More</span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- Custom Services -->
                <?php if (!empty($custom_services)): ?>
                    <?php foreach ($custom_services as $index => $cust_svc): ?>
                        <?php
                        $cust_img = !empty($cust_svc['image']) 
                            ? base_url()."/public/uploads/custom_pages_image/" . $cust_svc['image'] 
                            : base_url()."/public/assets/img/services-default.jpg";
                        $cust_url = base_url().'/custom/'.$cust_svc['sub_menu_link'];
                        $total_index = (count($all_services ?? []) + $index);
                        ?>
                        <div class="service-card" 
                             data-aos="fade-up" 
                             data-aos-delay="<?= $total_index * 100 ?>">
                            <div class="service-card-image">
                                <img src="<?= htmlspecialchars($cust_img) ?>" 
                                     alt="<?= htmlspecialchars($cust_svc['sub_menu']) ?>"
                                     loading="lazy">
                            </div>
                            <div class="service-card-content">
                                <h3 class="service-card-title">
                                    <?= htmlspecialchars($cust_svc['sub_menu']) ?>
                                </h3>
                                <a href="<?= $cust_url ?>" class="service-card-btn">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span>Know More</span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Contact CTA Section -->
    <div class="service-contact-section">
        <div class="container">
            <div class="service-contact-header" data-aos="fade-up" data-aos-duration="800">
                <div class="service-contact-header-subtitle">Get In Touch</div>
                <h2>
                    <span>Ready to Get Started?</span>
                </h2>
            </div>

            <div class="service-contact-grid">
                
                <!-- Map (Left) -->
                <div class="service-contact-map" data-aos="fade-right" data-aos-duration="800">
                    <?php if (!empty($user_details['company_map'])): ?>
                        <?= $user_details['company_map'] ?>
                    <?php else: ?>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.3191804340063!2d77.59!3d12.97!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzEyLjAiTiA3N8KwMzUnMjQuMCJF!5e0!3m2!1sen!2sin!4v1234567890" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                </div>

                <!-- Form (Right) -->
                <div class="service-contact-form" data-aos="fade-left" data-aos-duration="800">
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

        // Set active service in sidebar
        const currentUrl = window.location.href;
        const sidebarLinks = document.querySelectorAll('.service-sidebar-link');
        sidebarLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active');
                // Scroll to active link
                link.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });

        // Analytics tracking
        const serviceCards = document.querySelectorAll('.service-card-btn');
        serviceCards.forEach(btn => {
            btn.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    const serviceName = this.closest('.service-card').querySelector('.service-card-title')?.textContent || 'Service';
                    gtag('event', 'service_view', {
                        'event_category': 'engagement',
                        'event_label': serviceName
                    });
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>

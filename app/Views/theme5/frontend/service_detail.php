<?= $this->extend("theme5/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== REVOLUTIONARY MEDICAL SERVICE DETAIL PAGE ===== */
    
    .medical-service-detail-page {
        position: relative;
        overflow: hidden;
        background: var(--theme_mode_color);
    }

    /* Hero Banner */
    .medical-service-hero-banner {
        position: relative;
        padding: 120px 0;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        overflow: hidden;
        min-height: 400px;
    }

    .medical-service-hero-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 61, 122, 0.85) 0%, rgba(0, 128, 128, 0.85) 100%);
        pointer-events: none;
    }

    .medical-service-hero-banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 30%),
            radial-gradient(circle at 80% 70%, rgba(0,128,128,0.1) 0%, transparent 30%);
        pointer-events: none;
    }

    .medical-service-hero-content {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .medical-service-hero-title {
        font-size: 64px;
        font-weight: 900;
        margin-bottom: 25px;
        letter-spacing: -2px;
        line-height: 1.2;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .medical-service-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 14px;
        font-weight: 600;
    }

    .medical-service-breadcrumb a {
        color: rgba(255, 255, 255, 0.95);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .medical-service-breadcrumb a:hover {
        color: white;
    }

    .medical-service-breadcrumb i {
        color: rgba(255, 255, 255, 0.7);
    }

    /* Main Detail Wrapper */
    .medical-service-detail-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
    }

    .medical-service-detail-content {
        max-width: 1400px;
    }

    /* Service Content Grid */
    .medical-service-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
    }

    /* Service Image Container */
    .medical-service-image-container {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.6s ease;
    }

    .medical-service-image-container:hover {
        border-color: rgba(0, 128, 128, 0.2);
        box-shadow: 0 40px 100px rgba(0, 128, 128, 0.2);
        transform: translateY(-10px);
    }

    .medical-service-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.7s ease;
    }

    .medical-service-image-container:hover .medical-service-image {
        transform: scale(1.08);
    }

    /* Service Details Section */
    .medical-service-details-section {
        position: relative;
    }

    .medical-service-title-box {
        margin-bottom: 30px;
        padding-bottom: 25px;
        border-bottom: 3px solid var(--medical-teal, #008080);
    }

    .medical-service-title-box h3 {
        font-size: 42px;
        font-weight: 900;
        color: var(--text-dark);
        margin: 0;
        line-height: 1.3;
    }

    .medical-service-content-text {
        font-size: 15px;
        line-height: 1.9;
        color: #6c757d;
    }

    .medical-service-content-text p {
        margin-bottom: 20px;
    }

    .medical-service-content-text ul,
    .medical-service-content-text ol {
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .medical-service-content-text li {
        margin-bottom: 12px;
    }

    .medical-service-content-text strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    /* Sidebar */
    .medical-service-sidebar {
        position: sticky;
        top: 100px;
    }

    .medical-sidebar-title {
        font-size: 18px;
        font-weight: 800;
        color: white;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        padding: 20px 25px;
        border-radius: 15px 15px 0 0;
        display: flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0;
    }

    .medical-sidebar-title i {
        color: rgba(255, 255, 255, 0.9);
    }

    .medical-services-list {
        background: var(--theme_surface_color);
        border: 2px solid rgba(0, 128, 128, 0.1);
        border-radius: 0 0 15px 15px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    }

    .medical-service-list-item {
        display: flex;
        align-items: center;
        padding: 18px 20px;
        border-bottom: 1px solid rgba(0, 128, 128, 0.05);
        text-decoration: none;
        color: #6c757d;
        transition: all 0.3s ease;
        position: relative;
    }

    .medical-service-list-item:last-child {
        border-bottom: none;
    }

    .medical-service-list-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(180deg, var(--medical-teal, #008080), var(--medical-blue, #003d7a));
        transform: scaleY(0);
        transition: transform 0.3s ease;
        transform-origin: center;
    }

    .medical-service-list-item:hover::before,
    .medical-service-list-item.active::before {
        transform: scaleY(1);
    }

    .medical-service-list-item:hover {
        background: linear-gradient(90deg, rgba(0, 128, 128, 0.05), transparent);
        color: var(--medical-teal, #008080);
        padding-left: 25px;
    }

    .medical-service-list-item.active {
        background: linear-gradient(90deg, rgba(0, 128, 128, 0.1), transparent);
        color: var(--medical-teal, #008080);
        font-weight: 700;
    }

    .medical-service-list-text {
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s ease;
    }

    .medical-service-list-text i {
        font-size: 12px;
        transition: transform 0.3s ease;
    }

    .medical-service-list-item:hover .medical-service-list-text i {
        transform: translateX(5px);
    }

    /* More Services Section */
    .medical-more-services-section {
        position: relative;
        padding: 120px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    .medical-more-services-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        pointer-events: none;
        background: 
            radial-gradient(circle at 20% 50%, var(--medical-teal, #008080) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, var(--medical-blue, #003d7a) 0%, transparent 50%);
    }

    .medical-section-header {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-bottom: 70px;
    }

    .medical-section-subtitle {
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--medical-teal, #008080);
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .medical-section-heading {
        font-size: 52px;
        font-weight: 900;
        color: var(--text-dark);
        margin: 0;
        line-height: 1.2;
    }

    /* Services Grid */
    .medical-services-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 35px;
    }

    /* Service Card */
    .medical-service-card {
        position: relative;
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .medical-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.6s ease;
        transform-origin: left;
        z-index: 10;
    }

    .medical-service-card:hover::before {
        transform: scaleX(1);
    }

    .medical-service-card:hover {
        transform: translateY(-20px);
        box-shadow: 0 40px 100px rgba(0, 128, 128, 0.2);
        border-color: rgba(0, 128, 128, 0.2);
        background: linear-gradient(135deg, var(--theme_surface_color) 0%, rgba(0, 128, 128, 0.05) 100%);
    }

    .medical-service-card-image-wrapper {
        position: relative;
        width: 100%;
        height: 250px;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
    }

    .medical-service-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .medical-service-card:hover .medical-service-card-image {
        transform: scale(1.12);
    }

    .medical-service-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, transparent 0%, rgba(0, 61, 122, 0.3) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .medical-service-card:hover .medical-service-card-overlay {
        opacity: 1;
    }

    .medical-service-card-content {
        padding: 30px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .medical-service-card-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 12px;
        transition: color 0.3s ease;
        line-height: 1.4;
    }

    .medical-service-card:hover .medical-service-card-title {
        color: var(--medical-teal, #008080);
    }

    .medical-service-card-desc {
        font-size: 14px;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 20px;
        flex: 1;
    }

    .medical-service-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 700;
        color: var(--medical-teal, #008080);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .medical-service-card-btn:hover {
        gap: 14px;
        color: var(--medical-blue, #003d7a);
    }

    /* Contact Section */
    .medical-contact-section {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(180deg, var(--theme_mode_color) 0%, rgba(0, 128, 128, 0.02) 100%);
    }

    /* Animations */
    .medical-card-animate {
        opacity: 0;
        animation: service-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes service-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-service-hero-title {
            font-size: 48px;
        }
        .medical-service-title-box h3 {
            font-size: 36px;
        }
        .medical-section-heading {
            font-size: 44px;
        }
    }

    @media (max-width: 991px) {
        .medical-service-hero-banner {
            padding: 80px 0;
            min-height: 300px;
        }
        .medical-service-hero-title {
            font-size: 36px;
        }
        .medical-service-detail-wrapper {
            padding: 60px 0;
        }
        .medical-service-content-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .medical-service-sidebar {
            position: relative;
            top: auto;
        }
        .medical-more-services-section {
            padding: 80px 0;
        }
    }

    @media (max-width: 768px) {
        .medical-service-hero-title {
            font-size: 32px;
            margin-bottom: 15px;
        }
        .medical-service-title-box h3 {
            font-size: 28px;
        }
        .medical-section-heading {
            font-size: 36px;
        }
        .medical-services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
        .medical-service-card-content {
            padding: 24px;
        }
    }

    @media (max-width: 576px) {
        .medical-service-hero-banner {
            padding: 60px 0;
        }
        .medical-service-hero-title {
            font-size: 26px;
        }
        .medical-service-hero-content {
            padding-left: 20px !important;
        }
        .medical-service-title-box h3 {
            font-size: 24px;
        }
        .medical-services-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-service-sidebar {
        background: #1a1f2e;
    }

    body.theme-dark .medical-services-list {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-service-card {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-service-card:hover {
        background: linear-gradient(135deg, #1a1f2e 0%, rgba(0, 128, 128, 0.08) 100%);
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section("contenttheme5"); ?>

<div class="medical-service-detail-page">
    <!-- Hero Banner -->
    <section class="medical-service-hero-banner" 
             style="background-image: url(<?php 
                $bannerimg = !empty($service['banner']) 
                    ? base_url()."/public/uploads/service_banners/" . $service['banner'] 
                    : base_url()."/public/assets/img/services-hero.jpg";
                echo $bannerimg;
             ?>);"
             data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="medical-service-hero-content">
                <h1 class="medical-service-hero-title">
                    <?= htmlspecialchars($service['service'] ?? 'Service'); ?>
                </h1>
                <div class="medical-service-breadcrumb">
                    <a href="<?= base_url(); ?>">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?= base_url() . '/services'; ?>">Services</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?= htmlspecialchars($service['service'] ?? 'Service'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="medical-service-detail-wrapper">
        <div class="container medical-service-detail-content">
            <div class="row g-4">
                <!-- Main Service Content -->
                <div class="col-lg-8">
                    <div class="medical-service-main-content">
                        <div class="medical-service-content-grid">
                            <!-- Service Image -->
                            <div class="medical-service-image-container" data-aos="fade-right" data-aos-duration="1000">
                                <?php
                                $img = !empty($service['image']) 
                                    ? base_url() . "/public/uploads/service_images/" . $service['image'] 
                                    : base_url() . "/public/assets/img/services-one.jpg";
                                ?>
                                <img src="<?= $img; ?>" 
                                     alt="<?= htmlspecialchars($service['service']); ?>" 
                                     class="medical-service-image"
                                     loading="lazy">
                            </div>

                            <!-- Service Details -->
                            <div class="medical-service-details-section" data-aos="fade-left" data-aos-duration="1000">
                                <div class="medical-service-title-box">
                                    <h3><?= htmlspecialchars($service['service'] ?? 'Service'); ?></h3>
                                </div>

                                <div class="medical-service-content-text">
                                    <?= $service['content'] ?? '<p>Service description not available</p>'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar - All Services -->
                <div class="col-lg-4">
                    <div class="medical-service-sidebar" data-aos="fade-left" data-aos-duration="1000">
                        <div class="medical-sidebar-title">
                            <i class="fas fa-list"></i>All Services
                        </div>

                        <div class="medical-services-list">
                            <?php
                            // Regular services
                            if (!empty($all_services)) {
                                foreach ($all_services as $all) {
                                    $url = base_url() . '/services/' . $all['menu_link'];
                                    $isActive = (isset($service['id']) && $all['id'] == $service['id']) ? 'active' : '';
                            ?>
                                <a href="<?= $url; ?>" class="medical-service-list-item <?= $isActive; ?>">
                                    <div class="medical-service-list-text">
                                        <i class="fas fa-arrow-right"></i>
                                        <?= htmlspecialchars($all['service']); ?>
                                    </div>
                                </a>
                            <?php
                                }
                            }

                            // Custom services
                            if (!empty($custom_services)) {
                                foreach ($custom_services as $cust) {
                                    $url = base_url() . '/custom/' . $cust['sub_menu_link'];
                            ?>
                                <a href="<?= $url; ?>" class="medical-service-list-item">
                                    <div class="medical-service-list-text">
                                        <i class="fas fa-arrow-right"></i>
                                        <?= htmlspecialchars($cust['sub_menu']); ?>
                                    </div>
                                </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Services Section -->
    <?php if (!empty($all_services)): ?>
    <section class="medical-more-services-section">
        <div class="container">
            <div class="medical-section-header">
                <p class="medical-section-subtitle">
                    <i class="fas fa-briefcase me-2"></i>Explore More
                </p>
                <h2 class="medical-section-heading">Our Services</h2>
            </div>

            <div class="medical-services-grid">
                <?php
                $cardIndex = 0;
                foreach ($all_services as $svc) {
                    $img = !empty($svc['image']) 
                        ? base_url() . "/public/uploads/service_images/" . $svc['image']
                        : base_url() . "/public/assets/img/services-img.jpg";
                    $url = base_url() . '/services/' . $svc['menu_link'];
                    $cardIndex++;
                ?>
                    <div class="medical-service-card medical-card-animate" 
                         data-aos="zoom-in-up" 
                         data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                        <a href="<?= $url; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                            <div class="medical-service-card-image-wrapper">
                                <img src="<?= $img; ?>" 
                                     alt="<?= htmlspecialchars($svc['service']); ?>" 
                                     class="medical-service-card-image"
                                     loading="lazy">
                                <div class="medical-service-card-overlay"></div>
                            </div>
                            <div class="medical-service-card-content">
                                <h5 class="medical-service-card-title">
                                    <?= htmlspecialchars($svc['service']); ?>
                                </h5>
                                <?php if (!empty($svc['content'])): ?>
                                <p class="medical-service-card-desc">
                                    <?= htmlspecialchars(substr(strip_tags($svc['content']), 0, 80)); ?>
                                </p>
                                <?php endif; ?>
                                <span class="medical-service-card-btn">
                                    <i class="fas fa-arrow-right"></i>Learn More
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } 

                // Custom services cards
                if (!empty($custom_services)) {
                    foreach ($custom_services as $cust) {
                        $img = !empty($cust['image']) 
                            ? base_url() . "/public/uploads/custom_pages_image/" . $cust['image']
                            : base_url() . "/public/assets/img/services-img.jpg";
                        $url = base_url() . '/custom/' . $cust['sub_menu_link'];
                        $cardIndex++;
                ?>
                        <div class="medical-service-card medical-card-animate" 
                             data-aos="zoom-in-up" 
                             data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                             style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                            <a href="<?= $url; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                                <div class="medical-service-card-image-wrapper">
                                    <img src="<?= $img; ?>" 
                                         alt="<?= htmlspecialchars($cust['sub_menu']); ?>" 
                                         class="medical-service-card-image"
                                         loading="lazy">
                                    <div class="medical-service-card-overlay"></div>
                                </div>
                                <div class="medical-service-card-content">
                                    <h5 class="medical-service-card-title">
                                        <?= htmlspecialchars($cust['sub_menu']); ?>
                                    </h5>
                                    <span class="medical-service-card-btn">
                                        <i class="fas fa-arrow-right"></i>Learn More
                                    </span>
                                </div>
                            </a>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Contact Section -->
    <section class="medical-contact-section">
        <div class="container">
            <div class="medical-section-header">
                <p class="medical-section-subtitle">
                    <i class="fas fa-phone me-2"></i>Get in Touch
                </p>
                <h2 class="medical-section-heading">Contact Us</h2>
            </div>

            <div class="row g-4">
                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12); height: 400px;">
                        <?php if(!empty($user_details['company_map'])) {
                            echo $user_details['company_map'];
                        } else { ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v=1234567890" width="100%" height="100%" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } ?>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <?= $this->include('theme5/frontend/layout/message'); ?>
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

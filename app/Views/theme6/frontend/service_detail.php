<?= $this->extend("theme6/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== INDUSTRIAL EDGE PRO - SERVICE DETAIL PAGE STYLES ===== */

    .industrial-service-detail-page {
        position: relative;
        background: var(--industrial-black);
        color: var(--industrial-text);
    }

    /* ===== HERO BANNER ===== */
    .industrial-service-hero-banner {
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 150px 0;
        overflow: hidden;
    }

    .industrial-service-hero-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(26, 26, 26, 0.9), rgba(255, 107, 53, 0.3));
        z-index: 1;
    }

    .industrial-service-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .industrial-service-hero-title {
        font-size: 3rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        color: var(--industrial-text);
    }

    .industrial-service-breadcrumb {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-size: 0.95rem;
        flex-wrap: wrap;
    }

    .industrial-service-breadcrumb a {
        color: var(--industrial-blue);
        text-decoration: none;
        transition: color 300ms ease;
    }

    .industrial-service-breadcrumb a:hover {
        color: var(--industrial-orange);
    }

    .industrial-service-breadcrumb i {
        color: var(--industrial-silver);
    }

    .industrial-service-breadcrumb span {
        color: var(--industrial-orange);
        font-weight: 600;
    }

    /* ===== MAIN CONTENT ===== */
    .industrial-service-detail-wrapper {
        position: relative;
        padding: 80px 0;
    }

    .industrial-service-detail-content {
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ===== SERVICE CONTENT GRID ===== */
    .industrial-service-main-content {
        width: 100%;
    }

    .industrial-service-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    /* ===== SERVICE IMAGE ===== */
    .industrial-service-image-container {
        width: 100%;
        height: 450px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--industrial-silver);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .industrial-service-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease;
    }

    .industrial-service-image-container:hover .industrial-service-image {
        transform: scale(1.08) rotate(1deg);
    }

    /* ===== SERVICE DETAILS ===== */
    .industrial-service-details-section {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .industrial-service-title-box {
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        padding: 25px;
        border-radius: 8px;
    }

    .industrial-service-title-box h3 {
        font-size: 2rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0;
        color: #1a1a1a;
    }

    .industrial-service-content-text {
        color: var(--industrial-text-secondary);
        line-height: 1.8;
        font-size: 0.95rem;
    }

    .industrial-service-content-text p {
        margin-bottom: 15px;
    }

    .industrial-service-content-text p:last-child {
        margin-bottom: 0;
    }

    .industrial-service-content-text strong {
        color: var(--industrial-orange);
        font-weight: 700;
    }

    /* ===== SIDEBAR ===== */
    .industrial-service-sidebar {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 30px;
        position: sticky;
        top: 100px;
    }

    .industrial-sidebar-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--industrial-orange);
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* ===== SERVICES LIST ===== */
    .industrial-services-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .industrial-service-list-item {
        padding: 15px 18px;
        background: var(--industrial-black);
        border: 1px solid var(--industrial-silver);
        border-radius: 8px;
        text-decoration: none;
        color: var(--industrial-text);
        transition: all 300ms ease;
        display: flex;
        align-items: center;
    }

    .industrial-service-list-item:hover {
        background: var(--industrial-black);
        border-color: var(--industrial-orange);
        transform: translateX(5px);
        box-shadow: 0 8px 20px rgba(255, 107, 53, 0.1);
    }

    .industrial-service-list-item.active {
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.2), transparent);
        border-color: var(--industrial-orange);
        color: var(--industrial-orange);
        font-weight: 700;
    }

    .industrial-service-list-text {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
        flex: 1;
    }

    .industrial-service-list-text i {
        color: var(--industrial-orange);
        font-size: 0.8rem;
        transition: all 300ms ease;
    }

    .industrial-service-list-item:hover .industrial-service-list-text i {
        transform: translateX(5px);
    }

    /* ===== MORE SERVICES SECTION ===== */
    .industrial-more-services-section {
        position: relative;
        padding: 80px 0;
        background: var(--industrial-surface);
        border-top: 1px solid var(--industrial-silver);
    }

    .industrial-section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .industrial-section-subtitle {
        color: var(--industrial-blue);
        font-weight: 700;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .industrial-section-heading {
        font-size: 2.2rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* ===== SERVICES GRID ===== */
    .industrial-services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .industrial-service-card {
        background: var(--industrial-black);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        overflow: hidden;
        transition: all 400ms ease;
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

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

    .industrial-service-card:hover {
        transform: translateY(-12px);
        border-color: var(--industrial-orange);
        box-shadow: 0 20px 50px rgba(255, 107, 53, 0.2);
    }

    .industrial-service-card-image-wrapper {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .industrial-service-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease;
    }

    .industrial-service-card:hover .industrial-service-card-image {
        transform: scale(1.1);
    }

    .industrial-service-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.2), transparent);
        opacity: 0;
        transition: opacity 300ms ease;
    }

    .industrial-service-card:hover .industrial-service-card-overlay {
        opacity: 1;
    }

    .industrial-service-card-content {
        padding: 25px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .industrial-service-card-title {
        font-size: 1.1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 12px;
        color: var(--industrial-text);
    }

    .industrial-service-card-desc {
        color: var(--industrial-text-secondary);
        font-size: 0.9rem;
        margin-bottom: 15px;
        flex: 1;
        line-height: 1.5;
    }

    .industrial-service-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: var(--industrial-orange);
        font-weight: 700;
        font-size: 0.9rem;
        transition: all 300ms ease;
    }

    .industrial-service-card:hover .industrial-service-card-btn {
        gap: 10px;
        color: var(--industrial-blue);
    }

    /* ===== CONTACT SECTION ===== */
    .industrial-contact-section {
        position: relative;
        padding: 80px 0;
        background: var(--industrial-black);
        border-top: 1px solid var(--industrial-silver);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .industrial-service-hero-title {
            font-size: 2.5rem;
        }

        .industrial-service-content-grid {
            gap: 30px;
        }

        .industrial-service-sidebar {
            top: 80px;
        }
    }

    @media (max-width: 991px) {
        .industrial-service-detail-wrapper {
            padding: 60px 0;
        }

        .industrial-service-content-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .industrial-service-image-container {
            height: 350px;
        }

        .industrial-service-sidebar {
            position: static;
            margin-top: 40px;
        }

        .industrial-services-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .industrial-service-hero-banner {
            padding: 100px 0;
        }

        .industrial-service-hero-title {
            font-size: 1.8rem;
        }

        .industrial-service-image-container {
            height: 250px;
        }

        .industrial-service-title-box h3 {
            font-size: 1.5rem;
        }

        .industrial-section-heading {
            font-size: 1.8rem;
        }

        .industrial-service-card-title {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .industrial-service-hero-title {
            font-size: 1.3rem;
        }

        .industrial-service-breadcrumb {
            font-size: 0.85rem;
            gap: 8px;
        }

        .industrial-service-sidebar,
        .industrial-service-details-section {
            padding: 20px;
        }

        .industrial-services-grid {
            grid-template-columns: 1fr;
        }

        .industrial-service-card-content {
            padding: 20px;
        }

        .industrial-section-heading {
            font-size: 1.5rem;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section("contenttheme6"); ?>

<div class="industrial-service-detail-page">
    <!-- Hero Banner -->
    <section class="industrial-service-hero-banner" 
             style="background-image: url(<?php 
                $bannerimg = !empty($service['banner']) 
                    ? base_url()."/public/uploads/service_banners/" . htmlspecialchars($service['banner']) 
                    : base_url()."/public/assets/img/industrial-service-hero.jpg";
                echo $bannerimg;
             ?>);"
             data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="industrial-service-hero-content">
                <h1 class="industrial-service-hero-title">
                    <?= htmlspecialchars($service['service'] ?? 'Service'); ?>
                </h1>
                <div class="industrial-service-breadcrumb">
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
    <section class="industrial-service-detail-wrapper">
        <div class="container industrial-service-detail-content">
            <div class="row g-4">
                <!-- Main Service Content -->
                <div class="col-lg-8">
                    <div class="industrial-service-main-content">
                        <div class="industrial-service-content-grid">
                            <!-- Service Image -->
                            <div class="industrial-service-image-container" data-aos="fade-right" data-aos-duration="1000">
                                <?php
                                $img = !empty($service['image']) 
                                    ? base_url() . "/public/uploads/service_images/" . htmlspecialchars($service['image']) 
                                    : base_url() . "/public/assets/img/industrial-service-default.jpg";
                                ?>
                                <img src="<?= $img; ?>" 
                                     alt="<?= htmlspecialchars($service['service'] ?? 'Service'); ?>" 
                                     class="industrial-service-image"
                                     loading="lazy">
                            </div>

                            <!-- Service Details -->
                            <div class="industrial-service-details-section" data-aos="fade-left" data-aos-duration="1000">
                                <div class="industrial-service-title-box">
                                    <h3><?= htmlspecialchars($service['service'] ?? 'Service'); ?></h3>
                                </div>

                                <div class="industrial-service-content-text">
                                    <?= $service['content'] ?? '<p>Service description not available</p>'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar - All Services -->
                <div class="col-lg-4">
                    <div class="industrial-service-sidebar" data-aos="fade-left" data-aos-duration="1000">
                        <div class="industrial-sidebar-title">
                            <i class="fas fa-list"></i>All Services
                        </div>

                        <div class="industrial-services-list">
                            <?php
                            // Regular services
                            if (!empty($all_services)) {
                                foreach ($all_services as $all) {
                                    $url = base_url() . '/services/' . htmlspecialchars($all['menu_link']);
                                    $isActive = (isset($service['id']) && $all['id'] == $service['id']) ? 'active' : '';
                            ?>
                                <a href="<?= $url; ?>" class="industrial-service-list-item <?= $isActive; ?>">
                                    <div class="industrial-service-list-text">
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
                                    $url = base_url() . '/custom/' . htmlspecialchars($cust['sub_menu_link']);
                            ?>
                                <a href="<?= $url; ?>" class="industrial-service-list-item">
                                    <div class="industrial-service-list-text">
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
    <section class="industrial-more-services-section">
        <div class="container">
            <div class="industrial-section-header">
                <p class="industrial-section-subtitle">
                    <i class="fas fa-briefcase me-2"></i>Explore More
                </p>
                <h2 class="industrial-section-heading">Our Services</h2>
            </div>

            <div class="industrial-services-grid">
                <?php
                $cardIndex = 0;
                foreach ($all_services as $svc) {
                    $img = !empty($svc['image']) 
                        ? base_url() . "/public/uploads/service_images/" . htmlspecialchars($svc['image'])
                        : base_url() . "/public/assets/img/industrial-service-default.jpg";
                    $url = base_url() . '/services/' . htmlspecialchars($svc['menu_link']);
                    $cardIndex++;
                ?>
                    <div class="industrial-service-card" 
                         data-aos="zoom-in-up" 
                         data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                        <a href="<?= $url; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                            <div class="industrial-service-card-image-wrapper">
                                <img src="<?= $img; ?>" 
                                     alt="<?= htmlspecialchars($svc['service']); ?>" 
                                     class="industrial-service-card-image"
                                     loading="lazy">
                                <div class="industrial-service-card-overlay"></div>
                            </div>
                            <div class="industrial-service-card-content">
                                <h5 class="industrial-service-card-title">
                                    <?= htmlspecialchars($svc['service']); ?>
                                </h5>
                                <?php if (!empty($svc['content'])): ?>
                                <p class="industrial-service-card-desc">
                                    <?= htmlspecialchars(substr(strip_tags($svc['content']), 0, 80)); ?>
                                </p>
                                <?php endif; ?>
                                <span class="industrial-service-card-btn">
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
                            ? base_url() . "/public/uploads/custom_pages_image/" . htmlspecialchars($cust['image'])
                            : base_url() . "/public/assets/img/industrial-service-default.jpg";
                        $url = base_url() . '/custom/' . htmlspecialchars($cust['sub_menu_link']);
                        $cardIndex++;
                ?>
                        <div class="industrial-service-card" 
                             data-aos="zoom-in-up" 
                             data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                             style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                            <a href="<?= $url; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                                <div class="industrial-service-card-image-wrapper">
                                    <img src="<?= $img; ?>" 
                                         alt="<?= htmlspecialchars($cust['sub_menu']); ?>" 
                                         class="industrial-service-card-image"
                                         loading="lazy">
                                    <div class="industrial-service-card-overlay"></div>
                                </div>
                                <div class="industrial-service-card-content">
                                    <h5 class="industrial-service-card-title">
                                        <?= htmlspecialchars($cust['sub_menu']); ?>
                                    </h5>
                                    <span class="industrial-service-card-btn">
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
    <section class="industrial-contact-section">
        <div class="container">
            <div class="industrial-section-header">
                <p class="industrial-section-subtitle">
                    <i class="fas fa-phone me-2"></i>Get in Touch
                </p>
                <h2 class="industrial-section-heading">Contact Us</h2>
            </div>

            <div class="row g-4">
                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3); height: 400px;">
                        <?php if(!empty($user_details['company_map'])) {
                            echo htmlspecialchars($user_details['company_map'], ENT_QUOTES, 'UTF-8');
                        } else { ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v=1234567890" width="100%" height="100%" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } ?>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
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
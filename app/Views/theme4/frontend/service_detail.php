<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* Ultra Modern Service Detail Page */
    
    /* Hero Banner */
    .service-hero-banner {
        position: relative;
        height: 400px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .service-hero-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.7) 100%);
        z-index: 1;
    }

    .service-hero-banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(0,0,0,0.2) 0%, transparent 50%);
        pointer-events: none;
        z-index: 2;
    }

    .service-hero-content {
        position: relative;
        z-index: 3;
        text-align: left;
        color: white;
        animation: slideInLeft 0.8s ease-out;
    }

    .service-hero-title {
        font-size: 52px;
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        letter-spacing: -1px;
    }

    .service-breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
        font-weight: 500;
    }

    .service-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .service-breadcrumb a:hover {
        color: white;
    }

    /* Main Content Wrapper */
    .service-detail-wrapper {
        padding: 80px 0;
        background: var(--theme_mode_color);
        position: relative;
    }

    .service-detail-wrapper::before {
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

    .service-detail-content {
        position: relative;
        z-index: 1;
    }

    /* Main Content Section */
    .service-main-content {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        margin-bottom: 50px;
        border-top: 5px solid var(--primary-color);
    }

    .service-content-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 40px;
        align-items: start;
    }

    /* Service Image */
    .service-image-container {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        animation: slideInLeft 0.8s ease-out;
    }

    .service-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .service-image-container:hover .service-image {
        transform: scale(1.08);
    }

    /* Service Details */
    .service-details-section {
        animation: slideInRight 0.8s ease-out;
    }

    .service-title-box {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        padding: 20px;
        border-radius: 12px;
        border-left: 4px solid var(--primary-color);
        margin-bottom: 25px;
    }

    .service-title-box h3 {
        font-size: 28px;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0;
    }

    .service-content-text {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
    }

    .service-content-text p {
        margin-bottom: 15px;
    }

    .service-content-text strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    .service-content-text ul,
    .service-content-text ol {
        margin-left: 20px;
        margin-bottom: 15px;
    }

    .service-content-text li {
        margin-bottom: 10px;
    }

    /* Sidebar - Related Services */
    .service-sidebar {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        position: sticky;
        top: 20px;
    }

    .sidebar-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #e9ecef;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-title i {
        color: var(--primary-color);
    }

    /* Services List */
    .services-list {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .service-list-item {
        padding: 15px;
        border-bottom: 1px solid #e9ecef;
        text-decoration: none;
        color: var(--text-dark);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .service-list-item:last-child {
        border-bottom: none;
    }

    .service-list-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        transform: scaleY(0);
        transition: transform 0.3s ease;
        transform-origin: top;
    }

    .service-list-item:hover {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
        transform: translateX(8px);
    }

    .service-list-item:hover::before {
        transform: scaleY(1);
    }

    .service-list-text {
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .service-list-text i {
        color: var(--primary-color);
        font-size: 12px;
    }

    /* More Services Section */
    .more-services-section {
        padding: 80px 0;
        background: white;
        position: relative;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-subtitle {
        font-size: 14px;
        color: #adb5bd;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }

    .section-heading {
        font-size: 42px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Services Grid */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    /* Service Card */
    .service-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.5s ease;
        transform-origin: left;
        z-index: 10;
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    /* Card Image */
    .service-card-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 250px;
        background: linear-gradient(135deg, #f0f0f0, #e0e0e0);
    }

    .service-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .service-card:hover .service-card-image {
        transform: scale(1.15) rotate(3deg);
    }

    /* Card Overlay */
    .service-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.6) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .service-card:hover .service-card-overlay {
        opacity: 1;
    }

    /* Card Content */
    .service-card-content {
        padding: 25px;
        display: flex;
        flex-direction: column;
    }

    .service-card-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 12px;
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .service-card:hover .service-card-title {
        color: var(--primary-color);
    }

    .service-card-desc {
        font-size: 14px;
        color: #6c757d;
        margin-bottom: 18px;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .service-card-btn {
        display: inline-block;
        padding: 10px 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-decoration: none;
        border-radius: 25px;
        font-weight: 700;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        align-self: flex-start;
        border: none;
        cursor: pointer;
    }

    .service-card-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Animations */
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

    .card-animate {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
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

    /* Responsive */
    @media (max-width: 1200px) {
        .service-hero-title {
            font-size: 42px;
        }

        .service-content-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .service-sidebar {
            position: relative;
            top: auto;
        }
    }

    @media (max-width: 991px) {
        .service-detail-wrapper {
            padding: 60px 0;
        }

        .service-hero-banner {
            height: 300px;
        }

        .service-hero-title {
            font-size: 36px;
        }

        .service-main-content {
            padding: 30px;
        }

        .section-heading {
            font-size: 36px;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .service-detail-wrapper {
            padding: 50px 0;
        }

        .service-hero-banner {
            height: 250px;
        }

        .service-hero-title {
            font-size: 28px;
        }

        .service-main-content {
            padding: 25px;
        }

        .service-content-grid {
            grid-template-columns: 1fr;
        }

        .service-image-container {
            order: 2;
        }

        .service-details-section {
            order: 1;
        }

        .section-heading {
            font-size: 32px;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .service-card-image-wrapper {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .service-hero-title {
            font-size: 24px;
        }

        .service-title-box h3 {
            font-size: 22px;
        }

        .section-heading {
            font-size: 26px;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .sidebar-title {
            font-size: 16px;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section("contenttheme4"); ?>

<div class="service-detail-page">
    <!-- Hero Banner -->
    <section class="service-hero-banner" 
             style="background-image: url(<?php 
                $bannerimg = !empty($service['banner']) 
                    ? base_url()."/public/uploads/service_banners/" . $service['banner'] 
                    : base_url()."/public/assets/img/services-hero.jpg";
                echo $bannerimg;
             ?>);"
             data-aos="fade-up" data-aos-duration="1000">
        <div class="service-hero-content" style="padding-left: 50px;">
            <h1 class="service-hero-title"><?= htmlspecialchars($service['service']); ?></h1>
            <div class="service-breadcrumb">
                <a href="<?= base_url(); ?>">
                    <i class="fas fa-home me-1"></i>Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?= base_url(); ?>/services">Services</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($slug); ?></span>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="service-detail-wrapper">
        <div class="container service-detail-content">
            <div class="row g-4">
                <!-- Main Service Content -->
                <div class="col-lg-8">
                    <div class="service-main-content">
                        <div class="service-content-grid">
                            <!-- Service Image -->
                            <div class="service-image-container" data-aos="fade-right" data-aos-duration="1000">
                                <?php
                                $img = !empty($service['image']) 
                                    ? base_url() . "/public/uploads/service_images/" . $service['image'] 
                                    : base_url() . "/public/assets/img/services-one.jpg";
                                ?>
                                <img src="<?= $img; ?>" 
                                     alt="<?= htmlspecialchars($service['service']); ?>" 
                                     class="service-image"
                                     loading="lazy">
                            </div>

                            <!-- Service Details -->
                            <div class="service-details-section" data-aos="fade-left" data-aos-duration="1000">
                                <div class="service-title-box">
                                    <h3><?= htmlspecialchars($service['service']); ?></h3>
                                </div>

                                <div class="service-content-text">
                                    <?= $service['content']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar - All Services -->
                <div class="col-lg-4">
                    <div class="service-sidebar" data-aos="fade-left" data-aos-duration="1000">
                        <div class="sidebar-title">
                            <i class="fas fa-list"></i>All Services
                        </div>

                        <div class="services-list">
                            <?php
                            // Regular services
                            if (!empty($all_services)) {
                                foreach ($all_services as $all) {
                                    $url = base_url() . '/services/' . $all['menu_link'];
                                    $isActive = ($all['id'] == $service['id']) ? 'active' : '';
                            ?>
                                <a href="<?= $url; ?>" class="service-list-item <?= $isActive; ?>">
                                    <div class="service-list-text">
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
                                <a href="<?= $url; ?>" class="service-list-item">
                                    <div class="service-list-text">
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
    <section class="more-services-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">
                    <i class="fas fa-briefcase me-2"></i>Explore More
                </p>
                <h2 class="section-heading">Our Services</h2>
            </div>

            <div class="services-grid">
                <?php
                $cardIndex = 0;
                foreach ($all_services as $svc) {
                    $img = !empty($svc['image']) 
                        ? base_url() . "/public/uploads/service_images/" . $svc['image']
                        : base_url() . "/public/assets/img/services-img.jpg";
                    $url = base_url() . '/services/' . $svc['menu_link'];
                    $cardIndex++;
                ?>
                    <div class="service-card card-animate" 
                         data-aos="zoom-in-up" 
                         data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                        <div class="service-card-image-wrapper">
                            <img src="<?= $img; ?>" 
                                 alt="<?= htmlspecialchars($svc['service']); ?>" 
                                 class="service-card-image"
                                 loading="lazy">
                            <div class="service-card-overlay"></div>
                        </div>
                        <div class="service-card-content">
                            <h5 class="service-card-title">
                                <?= htmlspecialchars($svc['service']); ?>
                            </h5>
                            <?php if (!empty($svc['content'])): ?>
                            <p class="service-card-desc">
                                <?= htmlspecialchars(substr(strip_tags($svc['content']), 0, 80)); ?>
                            </p>
                            <?php endif; ?>
                            <a href="<?= $url; ?>" class="service-card-btn">
                                <i class="fas fa-arrow-right me-2"></i>Learn More
                            </a>
                        </div>
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
                        <div class="service-card card-animate" 
                             data-aos="zoom-in-up" 
                             data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                             style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                            <div class="service-card-image-wrapper">
                                <img src="<?= $img; ?>" 
                                     alt="<?= htmlspecialchars($cust['sub_menu']); ?>" 
                                     class="service-card-image"
                                     loading="lazy">
                                <div class="service-card-overlay"></div>
                            </div>
                            <div class="service-card-content">
                                <h5 class="service-card-title">
                                    <?= htmlspecialchars($cust['sub_menu']); ?>
                                </h5>
                                <a href="<?= $url; ?>" class="service-card-btn">
                                    <i class="fas fa-arrow-right me-2"></i>Learn More
                                </a>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Contact Section -->
    <section class="more-services-section" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">
                    <i class="fas fa-phone me-2"></i>Get in Touch
                </p>
                <h2 class="section-heading">Contact Us</h2>
            </div>

            <div class="row g-4">
                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);">
                        <?php if(!empty($user_details['company_map'])) {
                            echo $user_details['company_map'];
                        } ?>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <?= $this->include('theme4/frontend/layout/message'); ?>
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

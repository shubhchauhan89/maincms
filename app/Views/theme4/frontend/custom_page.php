<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* Ultra Modern Custom Page */
    
    /* Hero Section */
    .custom-page-hero {
        position: relative;
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        overflow: hidden;
        min-height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custom-page-hero::before {
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

    .custom-page-hero-content {
        position: relative;
        z-index: 1;
        text-align: left;
        color: white;
        animation: slideInLeft 0.8s ease-out;
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

    .custom-page-hero-title {
        font-size: 52px;
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        letter-spacing: -1px;
    }

    .custom-page-breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
        font-weight: 500;
    }

    .custom-page-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .custom-page-breadcrumb a:hover {
        color: white;
    }

    /* Main Content Wrapper */
    .custom-page-wrapper {
        padding: 80px 0;
        background: var(--theme_mode_color);
        position: relative;
    }

    .custom-page-wrapper::before {
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

    .custom-page-content {
        position: relative;
        z-index: 1;
    }

    /* Featured Image */
    .custom-page-image-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        margin-bottom: 50px;
        animation: slideInDown 0.8s ease-out;
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

    .custom-page-image {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .custom-page-image-container:hover .custom-page-image {
        transform: scale(1.05);
    }

    /* Content Box */
    .custom-page-content-box {
        background: white;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border-top: 5px solid var(--primary-color);
    }

    /* Title Bar */
    .custom-page-title-bar {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        padding: 25px;
        border-radius: 12px;
        border-left: 4px solid var(--primary-color);
        margin-bottom: 30px;
    }

    .custom-page-title-bar h3 {
        font-size: 28px;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0;
    }

    /* Content Text */
    .custom-page-text {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
    }

    .custom-page-text p {
        margin-bottom: 18px;
    }

    .custom-page-text strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    .custom-page-text em {
        color: var(--primary-color);
        font-style: italic;
    }

    .custom-page-text ul,
    .custom-page-text ol {
        margin-left: 25px;
        margin-bottom: 18px;
    }

    .custom-page-text li {
        margin-bottom: 12px;
    }

    .custom-page-text h2,
    .custom-page-text h3,
    .custom-page-text h4,
    .custom-page-text h5 {
        color: var(--text-dark);
        font-weight: 700;
        margin-top: 25px;
        margin-bottom: 15px;
    }

    .custom-page-text a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .custom-page-text a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    .custom-page-text blockquote {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
        border-left: 4px solid var(--primary-color);
        padding: 20px 25px;
        margin: 25px 0;
        border-radius: 8px;
        font-style: italic;
        color: #666;
    }

    .custom-page-text table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
    }

    .custom-page-text table th {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 12px;
        text-align: left;
    }

    .custom-page-text table td {
        padding: 12px;
        border-bottom: 1px solid #e9ecef;
    }

    .custom-page-text table tr:hover {
        background: #f8f9fa;
    }

    /* CTA Section */
    .custom-page-cta {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        margin-top: 40px;
        position: relative;
        overflow: hidden;
    }

    .custom-page-cta::before {
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

    .custom-page-cta-content {
        position: relative;
        z-index: 1;
    }

    .custom-page-cta h4 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .custom-page-cta p {
        font-size: 16px;
        margin-bottom: 20px;
        opacity: 0.95;
    }

    .custom-page-cta-btn {
        display: inline-block;
        padding: 14px 40px;
        background: white;
        color: var(--primary-color);
        text-decoration: none;
        border-radius: 25px;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .custom-page-cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* Related Content Section */
    .related-content-section {
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

    /* Highlight Box */
    .custom-highlight-box {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.08), rgba(var(--bs-primary-rgb), 0.03));
        padding: 25px;
        border-left: 5px solid var(--primary-color);
        border-radius: 10px;
        margin: 25px 0;
    }

    .custom-highlight-box strong {
        color: var(--primary-color);
    }

    /* Animations */
    .page-animate {
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
        .custom-page-hero-title {
            font-size: 42px;
        }

        .custom-page-content-box {
            padding: 40px;
        }

        .section-heading {
            font-size: 36px;
        }
    }

    @media (max-width: 991px) {
        .custom-page-wrapper {
            padding: 60px 0;
        }

        .custom-page-hero {
            padding: 60px 0;
            min-height: 300px;
        }

        .custom-page-hero-title {
            font-size: 36px;
        }

        .custom-page-content-box {
            padding: 30px;
        }

        .related-content-section {
            padding: 60px 0;
        }
    }

    @media (max-width: 768px) {
        .custom-page-wrapper {
            padding: 50px 0;
        }

        .custom-page-hero {
            padding: 40px 0;
            min-height: 250px;
        }

        .custom-page-hero-title {
            font-size: 28px;
        }

        .custom-page-content-box {
            padding: 25px;
        }

        .custom-page-text {
            font-size: 14px;
        }

        .section-heading {
            font-size: 32px;
        }

        .custom-page-image {
            max-height: 350px;
        }
    }

    @media (max-width: 576px) {
        .custom-page-hero-title {
            font-size: 24px;
        }

        .custom-page-title-bar h3 {
            font-size: 22px;
        }

        .section-heading {
            font-size: 26px;
        }

        .custom-page-cta {
            padding: 25px;
        }

        .custom-page-cta h4 {
            font-size: 20px;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme4") ?>
<div class="custom-page-wrapper-main">
    <!-- Hero Section -->
    <section class="custom-page-hero" data-aos="fade-up" data-aos-duration="1000">
        <div class="custom-page-hero-content" style="padding-left: 50px;">
            <h1 class="custom-page-hero-title"><?= htmlspecialchars(ucwords($title)); ?></h1>
            <div class="custom-page-breadcrumb">
                <a href="<?= base_url(); ?>">
                    <i class="fas fa-home me-1"></i>Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($slug); ?></span>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="custom-page-wrapper">
        <div class="container custom-page-content">
            <?php if (!empty($custom_data)) { 
                $img = !empty($custom_data['image']) 
                    ? base_url() . "/public/uploads/custom_pages_image/" . $custom_data['image'] 
                    : "";
            ?>
                <!-- Featured Image -->
                <?php if (!empty($img)): ?>
                <div class="custom-page-image-container page-animate" data-aos="flip-down" data-aos-duration="1000">
                    <img src="<?= $img; ?>" 
                         alt="<?= htmlspecialchars($custom_data['heading']); ?>" 
                         class="custom-page-image"
                         loading="lazy">
                </div>
                <?php endif; ?>

                <!-- Content Box -->
                <div class="custom-page-content-box page-animate" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Title Bar -->
                    <div class="custom-page-title-bar">
                        <h3><?= htmlspecialchars($custom_data['heading']); ?></h3>
                    </div>

                    <!-- Content Text -->
                    <div class="custom-page-text">
                        <?= $custom_data['content']; ?>
                    </div>

                    <!-- CTA Section (Optional) -->
                    <div class="custom-page-cta page-animate">
                        <div class="custom-page-cta-content">
                            <h4>Ready to Get Started?</h4>
                            <p>Join us today and experience the difference quality service makes</p>
                            <button class="custom-page-cta-btn" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                                <i class="fas fa-arrow-right me-2"></i>Contact Us Now
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Additional Sections -->
    <?php
    if ($sort_order) {
        foreach ($sort_order as $myurl) {
            $file_url = 'layout/' . $myurl['url_val'] . ".php";
            if (file_exists($file_url)) {
                include($file_url);
            }
        }
    }
    ?>
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

        // Add staggered animations
        const animateElements = document.querySelectorAll('.page-animate');
        animateElements.forEach((el, index) => {
            el.style.animationDelay = (index * 0.1) + 's';
        });
    });
</script>
<?= $this->endSection() ?>

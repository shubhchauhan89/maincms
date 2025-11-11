<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== REVOLUTIONARY MEDICAL PRODUCT DETAIL PAGE ===== */
    
    .medical-product-detail-page {
        position: relative;
        overflow: hidden;
        background: var(--theme_mode_color);
    }

    /* Hero Section */
    .medical-product-hero {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        overflow: hidden;
    }

    .medical-product-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
        pointer-events: none;
    }

    .medical-product-hero-content {
        position: relative;
        z-index: 1;
    }

    .medical-product-hero-title {
        font-size: 56px;
        font-weight: 900;
        margin-bottom: 25px;
        letter-spacing: -1px;
        line-height: 1.2;
    }

    .medical-product-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 14px;
    }

    .medical-product-breadcrumb a {
        color: rgba(255,255,255,0.9);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .medical-product-breadcrumb a:hover {
        color: white;
    }

    .medical-product-breadcrumb i {
        color: rgba(255,255,255,0.7);
    }

    /* Main Detail Wrapper */
    .medical-product-detail-wrapper {
        position: relative;
        padding: 80px 0;
        background: var(--theme_mode_color);
    }

    .medical-product-detail-content {
        max-width: 1400px;
    }

    /* Gallery Section */
    .medical-gallery-wrapper {
        position: relative;
    }

    .medical-gallery-main-container {
        position: relative;
        width: 100%;
        aspect-ratio: 1;
        border-radius: 20px;
        overflow: hidden;
        background: var(--theme_surface_color);
        border: 2px solid rgba(0, 128, 128, 0.1);
        cursor: pointer;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
        margin-bottom: 25px;
    }

    .medical-gallery-main-container:hover {
        border-color: rgba(0, 128, 128, 0.3);
        box-shadow: 0 30px 80px rgba(0, 128, 128, 0.15);
        transform: translateY(-5px);
    }

    .medical-gallery-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .medical-gallery-main-container:hover .medical-gallery-main-image {
        transform: scale(1.08);
    }

    /* Thumbnails */
    .medical-gallery-thumbnails {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .medical-gallery-thumbnails::-webkit-scrollbar {
        height: 6px;
    }

    .medical-gallery-thumbnails::-webkit-scrollbar-track {
        background: transparent;
    }

    .medical-gallery-thumbnails::-webkit-scrollbar-thumb {
        background: var(--medical-teal, #008080);
        border-radius: 3px;
    }

    .medical-gallery-thumbnail {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        border-radius: 12px;
        border: 3px solid rgba(0, 128, 128, 0.2);
        cursor: pointer;
        object-fit: cover;
        transition: all 0.3s ease;
        opacity: 0.7;
    }

    .medical-gallery-thumbnail:hover,
    .medical-gallery-thumbnail.active {
        border-color: var(--medical-teal, #008080);
        opacity: 1;
        transform: scale(1.05);
    }

    /* Shorts Section */
    .medical-shorts-section {
        margin-top: 30px;
    }

    .medical-shorts-title {
        font-size: 14px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .medical-shorts-title i {
        color: var(--medical-teal, #008080);
    }

    .medical-shorts-carousel {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .medical-shorts-carousel::-webkit-scrollbar {
        height: 6px;
    }

    .medical-shorts-carousel::-webkit-scrollbar-thumb {
        background: var(--medical-teal, #008080);
        border-radius: 3px;
    }

    .medical-short-item {
        flex-shrink: 0;
        width: 150px;
        height: 250px;
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .medical-short-item:hover {
        border-color: rgba(0, 128, 128, 0.3);
        transform: scale(1.05);
    }

    .medical-short-item iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* Product Info Wrapper */
    .medical-product-info-wrapper {
        position: relative;
    }

    .medical-product-title {
        font-size: 42px;
        font-weight: 900;
        color: var(--text-dark);
        margin-bottom: 30px;
        line-height: 1.3;
    }

    /* Description Boxes */
    .medical-description-box {
        margin-bottom: 25px;
        padding: 25px;
        background: var(--theme_surface_color);
        border-radius: 15px;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.4s ease;
    }

    .medical-description-box:hover {
        border-color: rgba(0, 128, 128, 0.2);
        box-shadow: 0 15px 40px rgba(0, 128, 128, 0.08);
        transform: translateY(-5px);
    }

    .medical-description-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .medical-description-title i {
        color: var(--medical-teal, #008080);
        font-size: 18px;
    }

    .medical-description-content {
        font-size: 14px;
        color: #6c757d;
        line-height: 1.8;
    }

    .medical-description-content p {
        margin-bottom: 12px;
    }

    .medical-description-content ul,
    .medical-description-content ol {
        margin-left: 20px;
        margin-bottom: 12px;
    }

    .medical-description-content li {
        margin-bottom: 8px;
    }

    /* Enquiry Button */
    .medical-product-enquiry-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 40px;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .medical-product-enquiry-btn::before {
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

    .medical-product-enquiry-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .medical-product-enquiry-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 128, 128, 0.3);
    }

    /* More Products Section */
    .medical-more-products-section {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    .medical-section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .medical-section-subtitle {
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--medical-teal, #008080);
        margin-bottom: 10px;
    }

    .medical-section-heading {
        font-size: 48px;
        font-weight: 900;
        color: var(--text-dark);
        margin-bottom: 20px;
    }

    /* Products Grid */
    .medical-products-grid,
    .medical-related-posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
    }

    /* Product Card */
    .medical-product-card {
        position: relative;
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
    }

    .medical-product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.6s ease;
        transform-origin: left;
        z-index: 10;
    }

    .medical-product-card:hover::before {
        transform: scaleX(1);
    }

    .medical-product-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 30px 70px rgba(0, 128, 128, 0.15);
        border-color: rgba(0, 128, 128, 0.2);
    }

    .medical-product-card-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .medical-product-card:hover .medical-product-card-image {
        transform: scale(1.1);
    }

    .medical-product-card-content {
        padding: 25px;
    }

    .medical-product-card-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .medical-product-card:hover .medical-product-card-title {
        color: var(--medical-teal, #008080);
    }

    .medical-product-card-desc {
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 15px;
        min-height: 40px;
    }

    .medical-product-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 700;
        color: var(--medical-teal, #008080);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .medical-product-card-btn:hover {
        gap: 12px;
        color: var(--medical-blue, #003d7a);
    }

    /* Media Modal */
    .medical-modal-nav-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--medical-teal, #008080);
        color: white;
        border: none;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .medical-modal-nav-btn:hover {
        background: var(--medical-blue, #003d7a);
        transform: scale(1.1);
    }

    /* Animations */
    .medical-card-animate {
        opacity: 0;
        animation: card-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes card-fadeInUp {
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
        .medical-product-hero-title {
            font-size: 42px;
        }
        .medical-product-title {
            font-size: 36px;
        }
        .medical-section-heading {
            font-size: 40px;
        }
    }

    @media (max-width: 991px) {
        .medical-product-hero {
            padding: 60px 0;
        }
        .medical-product-detail-wrapper {
            padding: 60px 0;
        }
        .medical-product-hero-title {
            font-size: 36px;
        }
        .medical-product-title {
            font-size: 32px;
        }
        .medical-gallery-wrapper {
            margin-bottom: 40px;
        }
    }

    @media (max-width: 768px) {
        .medical-product-hero {
            padding: 40px 0;
        }
        .medical-product-hero-title {
            font-size: 28px;
            margin-bottom: 15px;
        }
        .medical-product-title {
            font-size: 26px;
        }
        .medical-section-heading {
            font-size: 32px;
        }
        .medical-products-grid,
        .medical-related-posts-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .medical-product-hero-title {
            font-size: 24px;
        }
        .medical-product-title {
            font-size: 22px;
        }
        .medical-products-grid,
        .medical-related-posts-grid {
            grid-template-columns: 1fr;
        }
        .medical-product-enquiry-btn {
            width: 100%;
            justify-content: center;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-description-box {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-product-card {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme4") ?>
<?php

function getYouTubeID($url) {
    if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
        preg_match('/(?:shorts\/|v=|\/v\/|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $url, $matches);
        return $matches ?? null;
    }
    return null;
}

$youtubeID = !empty($product['product_video']) ? getYouTubeID($product['product_video']) : null;
$shortsUrls = !empty($product['youtube_shorts_urls'])
    ? array_filter(array_map('trim', explode(',', $product['youtube_shorts_urls'])))
    : [];

?>

<div class="medical-product-detail-page">
    <!-- Hero Section -->
    <section class="medical-product-hero">
        <div class="container">
            <div class="medical-product-hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="medical-product-hero-title">
                    <?= htmlspecialchars($product['product_name']); ?>
                </h1>
                <div class="medical-product-breadcrumb">
                    <a href="<?= base_url(); ?>">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?= base_url() . '/products'; ?>">Products</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?= htmlspecialchars($product['product_name']); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="medical-product-detail-wrapper">
        <div class="container medical-product-detail-content">
            <div class="row g-4">
                <!-- Image Gallery -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="medical-gallery-wrapper">
                        <!-- Main Image -->
                        <div class="medical-gallery-main-container" onclick="openGalleryModal()">
                            <?php
                            $mainImage = !empty($product['main_image']) 
                                ? base_url()."/public/uploads/product_images/" . $product['main_image'] 
                                : base_url()."/public/assets/img/product1.jpg";
                            ?>
                            <img src="<?= $mainImage ?>" class="medical-gallery-main-image" alt="Product Image" id="mainImage">
                        </div>

                        <!-- Thumbnails -->
                        <div class="medical-gallery-thumbnails">
                            <?php
                            $thumbIndex = 0;
                            
                            // Main image first
                            echo '<img src="'.$mainImage.'" class="medical-gallery-thumbnail active" onclick="changeImage(this, '.$thumbIndex.')" alt="Thumbnail">';
                            $thumbIndex++;
                            
                            // Additional images
                            if (!empty($product_images)) {
                                foreach ($product_images as $imgRow) {
                                    $img = base_url()."/public/uploads/product_images/" . $imgRow['product_image'];
                                    echo '<img src="'.$img.'" class="medical-gallery-thumbnail" onclick="changeImage(this, '.$thumbIndex.')" alt="Thumbnail">';
                                    $thumbIndex++;
                                }
                            }
                            
                            // YouTube video thumbnail
                            if ($youtubeID) {
                                echo '<img src="https://img.youtube.com/vi/'.$youtubeID.'/0.jpg" class="medical-gallery-thumbnail" onclick="playVideo('.$thumbIndex.')" alt="Video Thumbnail" style="cursor: pointer;">';
                            }
                            ?>
                        </div>

                        <!-- Shorts Section -->
                        <?php if (!empty($shortsUrls)): ?>
                        <div class="medical-shorts-section">
                            <div class="medical-shorts-title">
                                <i class="fas fa-video"></i>Featured Shorts
                            </div>
                            <div class="medical-shorts-carousel">
                                <?php foreach ($shortsUrls as $shortUrl): ?>
                                    <?php $shortId = getYouTubeID($shortUrl); ?>
                                    <?php if ($shortId): ?>
                                        <div class="medical-short-item">
                                            <iframe src="https://www.youtube.com/embed/<?= $shortId ?>?autoplay=0&mute=1" allowfullscreen loading="lazy"></iframe>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                    <div class="medical-product-info-wrapper">
                        <h2 class="medical-product-title">
                            <?= htmlspecialchars($product['product_name']); ?>
                        </h2>

                        <!-- Short Description -->
                        <?php if (!empty($product['short_description'])): ?>
                        <div class="medical-description-box">
                            <div class="medical-description-title">
                                <i class="fas fa-info-circle"></i>Overview
                            </div>
                            <div class="medical-description-content">
                                <?= $product['short_description']; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Long Description -->
                        <?php if (!empty($product['long_description'])): ?>
                        <div class="medical-description-box">
                            <div class="medical-description-title">
                                <i class="fas fa-book"></i>Details
                            </div>
                            <div class="medical-description-content">
                                <?= $product['long_description']; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Specifications -->
                        <?php if (!empty($product['specification'])): ?>
                        <div class="medical-description-box">
                            <div class="medical-description-title">
                                <i class="fas fa-list-check"></i>Specifications
                            </div>
                            <div class="medical-description-content">
                                <?= $product['specification']; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Enquiry Button -->
                        <button class="medical-product-enquiry-btn" 
                                data-bs-target="#inquiryModal" 
                                data-bs-toggle="modal" 
                                type="button">
                            <i class="fas fa-phone"></i>Request Information
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Products Section -->
    <?php if(!empty($all_products) && count($all_products) > 0): ?>
    <section class="medical-more-products-section">
        <div class="container">
            <div class="medical-section-header">
                <p class="medical-section-subtitle">Explore More</p>
                <h2 class="medical-section-heading">Our Products</h2>
            </div>

            <div class="medical-products-grid">
                <?php
                $cardIndex = 0;
                foreach ($all_products as $all) {
                    if ($cardIndex >= 6) break; // Limit to 6 products
                    $img = !empty($all['main_image']) 
                        ? base_url()."/public/uploads/product_images/" . $all['main_image'] 
                        : base_url()."/public/assets/img/product1.jpg";
                    $url = base_url() . '/products/' . $all['menu_link'];
                    $cardIndex++;
                ?>
                    <div class="medical-product-card medical-card-animate" 
                         data-aos="zoom-in-up" 
                         data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                        <a href="<?= $url; ?>" style="text-decoration: none; color: inherit;">
                            <img src="<?= $img; ?>" alt="<?= htmlspecialchars($all['product_name']); ?>" class="medical-product-card-image">
                            <div class="medical-product-card-content">
                                <h5 class="medical-product-card-title"><?= htmlspecialchars($all['product_name']); ?></h5>
                                <p class="medical-product-card-desc"><?= htmlspecialchars(substr($all['short_description'] ?? '', 0, 80)); ?></p>
                                <span class="medical-product-card-btn">
                                    <i class="fas fa-arrow-right"></i>View Product
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Related Posts Section -->
    <?php if(!empty($all_blogs) && count($all_blogs) > 0): ?>
    <section class="medical-more-products-section">
        <div class="container">
            <div class="medical-section-header">
                <p class="medical-section-subtitle">Related Content</p>
                <h2 class="medical-section-heading">Related Articles</h2>
            </div>

            <div class="medical-related-posts-grid">
                <?php
                $postIndex = 0;
                foreach ($all_blogs as $blog) {
                    if ($postIndex >= 6) break; // Limit to 6 blogs
                    $blogImg = !empty($blog['image']) 
                        ? base_url() . "/public/uploads/post_updates_images/" . $blog['image'] 
                        : base_url() . "/public/assets/img/product1.jpg";
                    $blogUrl = base_url() . "/updates/" . $blog['slug'];
                    $postIndex++;
                ?>
                    <div class="medical-product-card medical-card-animate" 
                         data-aos="fade-up" 
                         data-aos-delay="<?= ($postIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($postIndex % 3) * 100; ?>ms;">
                        <a href="<?= $blogUrl; ?>" style="text-decoration: none; color: inherit;">
                            <img src="<?= $blogImg; ?>" alt="<?= htmlspecialchars($blog['title']); ?>" class="medical-product-card-image">
                            <div class="medical-product-card-content">
                                <h5 class="medical-product-card-title"><?= htmlspecialchars($blog['title']); ?></h5>
                                <p class="medical-product-card-desc"><?= htmlspecialchars(substr($blog['description'] ?? '', 0, 80)); ?></p>
                                <span class="medical-product-card-btn">
                                    <i class="fas fa-book"></i>Read Article
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Additional Sections -->
    <?php
    foreach ($sort_order ?? [] as $myurl) {
        $file_url = 'layout/' . $myurl['url_val'] . ".php";
        if (file_exists($file_url)) {
            include($file_url);
        }
    }
    ?>
</div>

<!-- Media Modal -->
<div class="modal fade" id="mediaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-body text-center position-relative">
                <button class="medical-modal-nav-btn" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); z-index: 100;" onclick="prevMedia()" type="button">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div id="modalContent"></div>
                <button class="medical-modal-nav-btn" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); z-index: 100;" onclick="nextMedia()" type="button">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <button type="button" class="btn-close btn-close-white" style="position: absolute; top: 20px; right: 20px; z-index: 100;" data-bs-dismiss="modal"></button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
    const mediaItems = <?= json_encode($mediaItems ?? []); ?>;
    let currentMediaIndex = 0;

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

    function changeImage(element, index) {
        document.querySelectorAll('.medical-gallery-thumbnail').forEach(el => el.classList.remove('active'));
        element.classList.add('active');
        
        const src = element.src;
        document.getElementById('mainImage').src = src;
        currentMediaIndex = index;
    }

    function playVideo(index) {
        if (typeof mediaItems !== 'undefined' && mediaItems[index]) {
            currentMediaIndex = index;
            openGalleryModal();
        }
    }

    function openGalleryModal() {
        const modal = new bootstrap.Modal(document.getElementById('mediaModal'));
        displayMedia();
        modal.show();
    }

    function displayMedia() {
        if (typeof mediaItems !== 'undefined' && mediaItems[currentMediaIndex]) {
            const item = mediaItems[currentMediaIndex];
            const container = document.getElementById('modalContent');
            
            if (item.type === 'video') {
                container.innerHTML = `<iframe width="100%" height="600" src="${item.src}?autoplay=1" frameborder="0" allowfullscreen style="border-radius: 15px;"></iframe>`;
            } else {
                container.innerHTML = `<img src="${item.src}" class="img-fluid" style="max-height: 600px; border-radius: 15px;">`;
            }
        }
    }

    function nextMedia() {
        if (typeof mediaItems !== 'undefined' && mediaItems.length > 0) {
            currentMediaIndex = (currentMediaIndex + 1) % mediaItems.length;
            displayMedia();
        }
    }

    function prevMedia() {
        if (typeof mediaItems !== 'undefined' && mediaItems.length > 0) {
            currentMediaIndex = (currentMediaIndex - 1 + mediaItems.length) % mediaItems.length;
            displayMedia();
        }
    }
</script>
<?= $this->endSection() ?>

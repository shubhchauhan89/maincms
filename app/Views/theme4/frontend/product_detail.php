<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* Ultra Modern Product Detail Page */
    
    /* Hero Section */
    .product-hero {
        position: relative;
        padding: 20px 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        overflow: hidden;
        /* min-height: 350px; */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-hero::before {
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

    .product-hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: var(--theme_surface_color);
        animation: slideInDown 0.6s ease-out;
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

    .product-hero-title {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .product-breadcrumb {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 14px;
        font-weight: 500;
    }

    .product-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .product-breadcrumb a:hover {
        color: var(--theme_surface_color);
    }

    /* Main Content */
    .product-detail-wrapper {
        padding: 80px 0;
        background: var(--theme_mode_color);
        position: relative;
    }

    .product-detail-wrapper::before {
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

    .product-detail-content {
        position: relative;
        z-index: 1;
    }

    /* Image Gallery */
    .product-gallery-wrapper {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        margin-bottom: 40px;
    }

    .gallery-main-container {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 20px;
        background: var(--theme_mode_color);
        aspect-ratio: 1;
    }

    .gallery-main-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.4s ease;
        cursor: zoom-in;
    }

    .gallery-main-container:hover .gallery-main-image {
        transform: scale(1.05);
    }

    /* Thumbnail Strip */
    .gallery-thumbnails {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .gallery-thumbnail {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        cursor: pointer;
        border: 3px solid transparent;
        transition: all 0.3s ease;
        flex-shrink: 0;
        object-fit: cover;
        background: var(--theme_mode_color);
    }

    .gallery-thumbnail:hover {
        border-color: var(--primary-color);
        transform: scale(1.05);
    }

    .gallery-thumbnail.active {
        border-color: var(--primary-color);
        box-shadow: 0 0 15px rgba(var(--bs-primary-rgb), 0.3);
    }

    /* Shortcuts Section */
    .shorts-section {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 2px solid #e9ecef;
    }

    .shorts-title {
        font-size: 14px;
        font-weight: 700;
        color: var(--text-dark);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .shorts-title i {
        color: var(--primary-color);
    }

    .shorts-carousel {
        display: flex;
        gap: 15px;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .short-item {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .short-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .short-item iframe {
        width: 150px;
        height: 250px;
        border: none;
    }

    /* Product Details Section */
    .product-info-wrapper {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border-top: 5px solid var(--primary-color);
    }

    .product-title {
        font-size: 32px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .product-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: var(--theme_surface_color);
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    /* Description Sections */
    .product-description-box {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
        padding: 25px;
        border-radius: 15px;
        border-left: 4px solid var(--primary-color);
        margin-bottom: 25px;
    }

    .description-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .description-title i {
        color: var(--primary-color);
    }

    .description-content {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
    }

    .description-content p {
        margin-bottom: 15px;
    }

    .description-content strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    .description-content ul,
    .description-content ol {
        margin-left: 20px;
        margin-bottom: 15px;
    }

    .description-content li {
        margin-bottom: 8px;
    }

    /* Enquiry Button */
    .product-enquiry-btn {
        display: inline-block;
        padding: 16px 50px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: var(--theme_surface_color);
        border: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        width: 100%;
        margin-top: 20px;
    }

    .product-enquiry-btn::before {
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

    .product-enquiry-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .product-enquiry-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    /* More Products Section */
    .more-products-section {
        padding: 80px 0;
        background: var(--theme_mode_color);
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

    /* Product Cards Grid */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .product-card {
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.4s ease;
        transform-origin: left;
        z-index: 10;
    }

    .product-card:hover::before {
        transform: scaleX(1);
    }

    .product-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .product-card-image {
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card:hover .product-card-image {
        transform: scale(1.1);
    }

    .product-card-content {
        padding: 25px;
    }

    .product-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .product-card-desc {
        font-size: 13px;
        color: #6c757d;
        margin-bottom: 15px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-card-btn {
        display: inline-block;
        padding: 10px 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: var(--theme_surface_color);
        text-decoration: none;
        border-radius: 25px;
        font-weight: 700;
        font-size: 12px;
        text-transform: uppercase;
        transition: all 0.3s ease;
        width: 100%;
        text-align: center;
        border: none;
        cursor: pointer;
    }

    .product-card-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Related Posts Section */
    .related-posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .related-post-card {
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
    }

    .related-post-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.4s ease;
        transform-origin: left;
        z-index: 10;
    }

    .related-post-card:hover::before {
        transform: scaleX(1);
    }

    .related-post-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    /* Modal Styles */
    #mediaModal .modal-content {
        background: #1a1a1a;
        border: none;
        border-radius: 15px;
    }

    #mediaModal .modal-body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 500px;
    }

    #mediaModal img,
    #mediaModal iframe {
        max-width: 100%;
        max-height: 600px;
        border-radius: 10px;
    }

    /* Navigation Buttons */
    .modal-nav-btn {
        background: var(--primary-color);
        color: var(--theme_surface_color);
        border: none;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-nav-btn:hover {
        background: var(--accent-color);
        transform: scale(1.1);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .product-hero-title {
            font-size: 38px;
        }

        .product-title {
            font-size: 28px;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 991px) {
        .product-detail-wrapper {
            padding: 60px 0;
        }

        .product-hero {
            padding: 60px 0;
            min-height: 280px;
        }

        .product-hero-title {
            font-size: 32px;
        }

        .product-info-wrapper {
            padding: 30px;
        }

        .gallery-main-container {
            aspect-ratio: auto;
            min-height: 300px;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .product-hero {
            padding: 40px 0;
            min-height: 220px;
        }

        .product-hero-title {
            font-size: 26px;
        }

        .gallery-thumbnails {
            max-height: 100px;
            overflow-y: auto;
        }

        .gallery-thumbnail {
            width: 70px;
            height: 70px;
        }

        .product-info-wrapper {
            padding: 25px;
        }

        .product-description-box {
            padding: 20px;
        }

        .section-heading {
            font-size: 32px;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
        }

        .short-item iframe {
            width: 120px;
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .product-hero-title {
            font-size: 22px;
        }

        .product-title {
            font-size: 22px;
        }

        .gallery-main-container {
            min-height: 250px;
        }

        .products-grid {
            grid-template-columns: 1fr;
        }

        .section-heading {
            font-size: 26px;
        }

        .short-item iframe {
            width: 100%;
            height: 200px;
        }
    }

    /* Custom Scrollbar */
    .gallery-thumbnails::-webkit-scrollbar,
    .shorts-carousel::-webkit-scrollbar {
        height: 6px;
    }

    .gallery-thumbnails::-webkit-scrollbar-track,
    .shorts-carousel::-webkit-scrollbar-track {
        background: transparent;
    }

    .gallery-thumbnails::-webkit-scrollbar-thumb,
    .shorts-carousel::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 10px;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-animate {
        opacity: 0;
        animation: slideInUp 0.6s ease-out forwards;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme4") ?>
<?php

function getYouTubeID($url) {
    if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
        preg_match('/(?:shorts\/|v=|\/v\/|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $url, $matches);
        return $matches[1] ?? null;
    }
    return null;
}

$youtubeID = !empty($product['product_video']) ? getYouTubeID($product['product_video']) : null;
$shortsUrls = !empty($product['youtube_shorts_urls'])
    ? array_filter(array_map('trim', explode(',', $product['youtube_shorts_urls'])))
    : [];

?>

<div class="product-detail-page">
    <!-- Hero Section -->
    <section class="product-hero">
        <div class="product-hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="product-hero-title"><?= htmlspecialchars($product['product_name']); ?></h1>
            <div class="product-breadcrumb">
                <a href="<?= base_url(); ?>">
                    <i class="fas fa-home me-1"></i>Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?= base_url(); ?>">Products</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($slugs); ?></span>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="product-detail-wrapper">
        <div class="container product-detail-content">
            <div class="row g-4">
                <!-- Image Gallery -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="product-gallery-wrapper">
                        <!-- Main Image -->
                        <div class="gallery-main-container" onclick="openGalleryModal()">
                            <?php
                            $mainImage = !empty($product['main_image']) 
                                ? base_url()."/public/uploads/product_images/" . $product['main_image'] 
                                : base_url()."/public/assets/img/product1.jpg";
                            ?>
                            <img src="<?= $mainImage ?>" class="gallery-main-image" alt="Main Product Image" id="mainImage">
                        </div>

                        <!-- Thumbnails -->
                        <div class="gallery-thumbnails">
                            <?php
                            $thumbIndex = 0;
                            
                            // Main image first
                            echo '<img src="'.$mainImage.'" class="gallery-thumbnail active" onclick="changeImage(this, '.$thumbIndex.')" alt="Thumbnail">';
                            $thumbIndex++;
                            
                            // Additional images
                            if (!empty($product_images)) {
                                foreach ($product_images as $imgRow) {
                                    $img = base_url()."/public/uploads/product_images/" . $imgRow['product_image'];
                                    echo '<img src="'.$img.'" class="gallery-thumbnail" onclick="changeImage(this, '.$thumbIndex.')" alt="Thumbnail">';
                                    $thumbIndex++;
                                }
                            }
                            
                            // YouTube video thumbnail
                            if ($youtubeID) {
                                echo '<img src="https://img.youtube.com/vi/'.$youtubeID.'/0.jpg" class="gallery-thumbnail" onclick="playVideo('.$thumbIndex.')" alt="Video Thumbnail">';
                            }
                            ?>
                        </div>

                        <!-- Shorts Section -->
                        <?php if (!empty($shortsUrls)): ?>
                        <div class="shorts-section">
                            <div class="shorts-title">
                                <i class="fas fa-video"></i>Featured Shorts
                            </div>
                            <div class="shorts-carousel">
                                <?php foreach ($shortsUrls as $shortUrl): ?>
                                    <?php $shortId = getYouTubeID($shortUrl); ?>
                                    <?php if ($shortId): ?>
                                        <div class="short-item">
                                            <iframe src="https://www.youtube.com/embed/<?= $shortId ?>?autoplay=0&mute=1" allowfullscreen></iframe>
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
                    <div class="product-info-wrapper">
                        <h2 class="product-title"><?= htmlspecialchars($product['product_name']); ?></h2>

                        <!-- Short Description -->
                        <?php if (!empty($product['short_description'])): ?>
                        <div class="product-description-box">
                            <div class="description-title">
                                <i class="fas fa-info-circle"></i>Overview
                            </div>
                            <div class="description-content">
                                <?= $product['short_description']; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Long Description -->
                        <?php if (!empty($product['long_description'])): ?>
                        <div class="product-description-box">
                            <div class="description-title">
                                <i class="fas fa-book"></i>Details
                            </div>
                            <div class="description-content">
                                <?= $product['long_description']; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Specifications -->
                        <?php if (!empty($product['specification'])): ?>
                        <div class="product-description-box">
                            <div class="description-title">
                                <i class="fas fa-list-check"></i>Specifications
                            </div>
                            <div class="description-content">
                                <?= $product['specification']; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Enquiry Button -->
                        <button class="product-enquiry-btn" 
                                data-bs-target="#inquiryModal" 
                                data-bs-toggle="modal" 
                                type="button">
                            <i class="fas fa-phone me-2"></i>Request Information
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Products Section -->
    <?php if(!empty($all_products) && count($all_products) > 0): ?>
    <section class="more-products-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Explore More</p>
                <h2 class="section-heading">Our Products</h2>
            </div>

            <div class="products-grid">
                <?php
                $cardIndex = 0;
                foreach ($all_products as $all) {
                    $img = !empty($all['main_image']) 
                        ? base_url()."/public/uploads/product_images/" . $all['main_image'] 
                        : base_url()."/public/assets/img/product1.jpg";
                    $url = base_url() . '/products/' . $all['menu_link'];
                    $cardIndex++;
                ?>
                    <div class="product-card card-animate" 
                         data-aos="zoom-in-up" 
                         data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                        <a href="<?= $url; ?>">
                            <img src="<?= $img; ?>" alt="<?= htmlspecialchars($all['product_name']); ?>" class="product-card-image">
                        </a>
                        <div class="product-card-content">
                            <h5 class="product-card-title"><?= htmlspecialchars($all['product_name']); ?></h5>
                            <p class="product-card-desc"><?= htmlspecialchars(substr($all['short_description'], 0, 80)); ?></p>
                            <a href="<?= $url; ?>" class="product-card-btn">
                                <i class="fas fa-arrow-right me-2"></i>View Product
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Related Posts/Blogs Section -->
    <?php if(!empty($all_blogs) && count($all_blogs) > 0): ?>
    <section class="more-products-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Related Content</p>
                <h2 class="section-heading">Related Posts</h2>
            </div>

            <div class="related-posts-grid">
                <?php
                $postIndex = 0;
                foreach ($all_blogs as $blog) {
                    $blogImg = !empty($blog['image']) 
                        ? base_url() . "/public/uploads/post_updates_images/" . $blog['image'] 
                        : base_url() . "/public/assets/img/product1.jpg";
                    $blogUrl = base_url() . "/updates/" . $blog['slug'];
                    $postIndex++;
                ?>
                    <div class="related-post-card card-animate" 
                         data-aos="fade-up" 
                         data-aos-delay="<?= ($postIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($postIndex % 3) * 100; ?>ms;">
                        <a href="<?= $blogUrl; ?>">
                            <img src="<?= $blogImg; ?>" alt="<?= htmlspecialchars($blog['title']); ?>" class="product-card-image">
                        </a>
                        <div class="product-card-content">
                            <h5 class="product-card-title"><?= htmlspecialchars($blog['title']); ?></h5>
                            <p class="product-card-desc"><?= htmlspecialchars(substr($blog['description'], 0, 80)); ?></p>
                            <a href="<?= $blogUrl; ?>" class="product-card-btn">
                                <i class="fas fa-book me-2"></i>Read Article
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Additional Sections -->
    <?php
    foreach ($sort_order as $myurl) {
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
        <div class="modal-content">
            <div class="modal-body text-center">
                <button class="modal-nav-btn" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%);" onclick="prevMedia()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div id="modalContent"></div>
                <button class="modal-nav-btn" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%);" onclick="nextMedia()">
                    <i class="fas fa-chevron-right"></i>
                </button>
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
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });

    function changeImage(element, index) {
        document.querySelectorAll('.gallery-thumbnail').forEach(el => el.classList.remove('active'));
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
                container.innerHTML = `<iframe width="100%" height="600" src="${item.src}?autoplay=1" frameborder="0" allowfullscreen></iframe>`;
            } else {
                container.innerHTML = `<img src="${item.src}" class="img-fluid" style="max-height: 600px;">`;
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

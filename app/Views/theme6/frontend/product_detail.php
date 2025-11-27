<?= $this->extend("theme6/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== INDUSTRIAL EDGE PRO - PRODUCT DETAIL PAGE STYLES ===== */

    .industrial-product-detail-page {
        position: relative;
        background: var(--industrial-black);
        color: var(--industrial-text);
    }

    /* ===== HERO SECTION ===== */
    .industrial-product-hero {
        background: linear-gradient(135deg, var(--industrial-black) 0%, rgba(255, 107, 53, 0.05) 100%);
        padding: 80px 0;
        border-bottom: 1px solid var(--industrial-silver);
        position: relative;
    }

    .industrial-product-hero-content {
        text-align: center;
    }

    .industrial-product-hero-title {
        font-size: 2.5rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .industrial-product-breadcrumb {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-size: 0.95rem;
        flex-wrap: wrap;
    }

    .industrial-product-breadcrumb a {
        color: var(--industrial-blue);
        text-decoration: none;
        transition: color 300ms ease;
    }

    .industrial-product-breadcrumb a:hover {
        color: var(--industrial-orange);
    }

    .industrial-product-breadcrumb i {
        color: var(--industrial-silver);
    }

    .industrial-product-breadcrumb span {
        color: var(--industrial-orange);
        font-weight: 600;
    }

    /* ===== MAIN CONTENT ===== */
    .industrial-product-detail-wrapper {
        position: relative;
        padding: 80px 0;
    }

    .industrial-product-detail-content {
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ===== GALLERY ===== */
    .industrial-gallery-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .industrial-gallery-main-container {
        position: relative;
        width: 100%;
        height: 450px;
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        transition: all 300ms ease;
    }

    .industrial-gallery-main-container:hover {
        border-color: var(--industrial-orange);
        box-shadow: 0 10px 30px rgba(255, 107, 53, 0.2);
    }

    .industrial-gallery-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease;
    }

    .industrial-gallery-main-container:hover .industrial-gallery-main-image {
        transform: scale(1.05);
    }

    /* ===== THUMBNAILS ===== */
    .industrial-gallery-thumbnails {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
        gap: 12px;
    }

    .industrial-gallery-thumbnail {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border: 2px solid var(--industrial-silver);
        border-radius: 8px;
        cursor: pointer;
        transition: all 300ms ease;
    }

    .industrial-gallery-thumbnail:hover {
        border-color: var(--industrial-blue);
    }

    .industrial-gallery-thumbnail.active {
        border-color: var(--industrial-orange);
        box-shadow: 0 0 0 2px var(--industrial-orange);
    }

    /* ===== SHORTS SECTION ===== */
    .industrial-shorts-section {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 20px;
    }

    .industrial-shorts-title {
        font-weight: 700;
        color: var(--industrial-orange);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .industrial-shorts-carousel {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 12px;
    }

    .industrial-short-item {
        width: 100%;
        height: 200px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid var(--industrial-silver);
    }

    .industrial-short-item iframe {
        width: 100%;
        height: 100%;
    }

    /* ===== PRODUCT INFO ===== */
    .industrial-product-info-wrapper {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .industrial-product-title {
        font-size: 2rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--industrial-text);
        margin: 0;
    }

    /* ===== DESCRIPTION BOXES ===== */
    .industrial-description-box {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 25px;
        transition: all 300ms ease;
    }

    .industrial-description-box:hover {
        border-color: var(--industrial-orange);
        box-shadow: 0 10px 30px rgba(255, 107, 53, 0.1);
    }

    .industrial-description-title {
        font-weight: 700;
        color: var(--industrial-orange);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .industrial-description-title i {
        font-size: 1.2rem;
    }

    .industrial-description-content {
        color: var(--industrial-text-secondary);
        line-height: 1.8;
        font-size: 0.95rem;
    }

    .industrial-description-content p {
        margin-bottom: 10px;
    }

    .industrial-description-content p:last-child {
        margin-bottom: 0;
    }

    /* ===== ENQUIRY BUTTON ===== */
    .industrial-product-enquiry-btn {
        padding: 16px 40px;
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        color: #1a1a1a;
        border: none;
        border-radius: 4px;
        font-weight: 700;
        font-size: 1.05rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 300ms ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .industrial-product-enquiry-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255, 107, 53, 0.3);
    }

    /* ===== MORE PRODUCTS SECTION ===== */
    .industrial-more-products-section {
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
    }

    .industrial-section-heading {
        font-size: 2.2rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* ===== PRODUCT GRID ===== */
    .industrial-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .industrial-product-card {
        background: var(--industrial-black);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        overflow: hidden;
        transition: all 400ms ease;
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
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

    .industrial-product-card:hover {
        transform: translateY(-12px);
        border-color: var(--industrial-orange);
        box-shadow: 0 20px 50px rgba(255, 107, 53, 0.2);
    }

    .industrial-product-card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 400ms ease;
    }

    .industrial-product-card:hover .industrial-product-card-image {
        transform: scale(1.1);
    }

    .industrial-product-card-content {
        padding: 20px;
    }

    .industrial-product-card-title {
        font-weight: 700;
        color: var(--industrial-text);
        margin-bottom: 8px;
        font-size: 1.05rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .industrial-product-card-desc {
        color: var(--industrial-text-secondary);
        font-size: 0.9rem;
        margin-bottom: 12px;
        line-height: 1.5;
    }

    .industrial-product-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: var(--industrial-orange);
        font-weight: 700;
        font-size: 0.9rem;
        transition: all 300ms ease;
    }

    .industrial-product-card:hover .industrial-product-card-btn {
        gap: 10px;
        color: var(--industrial-blue);
    }

    /* ===== RELATED POSTS ===== */
    .industrial-related-posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    /* ===== MODAL ===== */
    .industrial-modal-nav-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--industrial-orange);
        color: #1a1a1a;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 300ms ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .industrial-modal-nav-btn:hover {
        background: var(--primary-color);
        transform: scale(1.1);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .industrial-product-hero-title {
            font-size: 2rem;
        }

        .industrial-product-title {
            font-size: 1.8rem;
        }

        .industrial-gallery-main-container {
            height: 350px;
        }
    }

    @media (max-width: 991px) {
        .industrial-product-detail-wrapper {
            padding: 60px 0;
        }

        .industrial-gallery-main-container {
            height: 300px;
        }

        .industrial-products-grid,
        .industrial-related-posts-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .industrial-product-hero {
            padding: 50px 0;
        }

        .industrial-product-hero-title {
            font-size: 1.5rem;
        }

        .industrial-product-title {
            font-size: 1.3rem;
        }

        .industrial-gallery-main-container {
            height: 250px;
        }

        .industrial-gallery-thumbnails {
            grid-template-columns: repeat(4, 1fr);
        }

        .industrial-description-box {
            padding: 20px;
        }

        .industrial-section-heading {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 576px) {
        .industrial-product-hero-title {
            font-size: 1.2rem;
        }

        .industrial-product-title {
            font-size: 1.1rem;
        }

        .industrial-gallery-main-container {
            height: 200px;
        }

        .industrial-gallery-thumbnails {
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }

        .industrial-gallery-thumbnail {
            height: 60px;
        }

        .industrial-product-enquiry-btn {
            width: 100%;
            justify-content: center;
        }

        .industrial-products-grid,
        .industrial-related-posts-grid {
            grid-template-columns: 1fr;
        }

        .industrial-section-heading {
            font-size: 1.5rem;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme6") ?>
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

<div class="industrial-product-detail-page">
    <!-- Hero Section -->
    <section class="industrial-product-hero">
        <div class="container">
            <div class="industrial-product-hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="industrial-product-hero-title">
                    <?= htmlspecialchars($product['product_name'] ?? 'Product'); ?>
                </h1>
                <div class="industrial-product-breadcrumb">
                    <a href="<?= base_url(); ?>">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?= base_url() . '/products'; ?>">Products</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?= htmlspecialchars($product['product_name'] ?? 'Product'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="industrial-product-detail-wrapper">
        <div class="container industrial-product-detail-content">
            <div class="row g-4">
                <!-- Image Gallery -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="industrial-gallery-wrapper">
                        <!-- Main Image -->
                        <div class="industrial-gallery-main-container" onclick="openGalleryModal()">
                            <?php
                            $mainImage = !empty($product['main_image']) 
                                ? base_url()."/public/uploads/product_images/" . htmlspecialchars($product['main_image']) 
                                : base_url()."/public/assets/img/industrial-product-default.jpg";
                            ?>
                            <img src="<?= $mainImage ?>" class="industrial-gallery-main-image" alt="Product Image" id="mainImage">
                        </div>

                        <!-- Thumbnails -->
                        <div class="industrial-gallery-thumbnails">
                            <?php
                            $thumbIndex = 0;
                            
                            echo '<img src="'.$mainImage.'" class="industrial-gallery-thumbnail active" onclick="changeImage(this, '.$thumbIndex.')" alt="Thumbnail">';
                            $thumbIndex++;
                            
                            if (!empty($product_images)) {
                                foreach ($product_images as $imgRow) {
                                    $img = base_url()."/public/uploads/product_images/" . htmlspecialchars($imgRow['product_image']);
                                    echo '<img src="'.$img.'" class="industrial-gallery-thumbnail" onclick="changeImage(this, '.$thumbIndex.')" alt="Thumbnail">';
                                    $thumbIndex++;
                                }
                            }
                            
                            if ($youtubeID) {
                                echo '<img src="https://img.youtube.com/vi/'.$youtubeID.'/0.jpg" class="industrial-gallery-thumbnail" onclick="playVideo('.$thumbIndex.')" alt="Video Thumbnail" style="cursor: pointer;">';
                            }
                            ?>
                        </div>

                        <!-- Shorts Section -->
                        <?php if (!empty($shortsUrls)): ?>
                        <div class="industrial-shorts-section">
                            <div class="industrial-shorts-title">
                                <i class="fas fa-video"></i>Featured Shorts
                            </div>
                            <div class="industrial-shorts-carousel">
                                <?php foreach ($shortsUrls as $shortUrl): ?>
                                    <?php $shortId = getYouTubeID($shortUrl); ?>
                                    <?php if ($shortId): ?>
                                        <div class="industrial-short-item">
                                            <iframe src="https://www.youtube.com/embed/<?= htmlspecialchars($shortId) ?>?autoplay=0&mute=1" allowfullscreen loading="lazy"></iframe>
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
                    <div class="industrial-product-info-wrapper">
                        <h2 class="industrial-product-title">
                            <?= htmlspecialchars($product['product_name'] ?? 'Product'); ?>
                        </h2>

                        <!-- Short Description -->
                        <?php if (!empty($product['short_description'])): ?>
                        <div class="industrial-description-box">
                            <div class="industrial-description-title">
                                <i class="fas fa-info-circle"></i>Overview
                            </div>
                            <div class="industrial-description-content">
                                <?= htmlspecialchars($product['short_description']); ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Long Description -->
                        <?php if (!empty($product['long_description'])): ?>
                        <div class="industrial-description-box">
                            <div class="industrial-description-title">
                                <i class="fas fa-book"></i>Details
                            </div>
                            <div class="industrial-description-content">
                                <?= htmlspecialchars($product['long_description']); ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Specifications -->
                        <?php if (!empty($product['specification'])): ?>
                        <div class="industrial-description-box">
                            <div class="industrial-description-title">
                                <i class="fas fa-list-check"></i>Specifications
                            </div>
                            <div class="industrial-description-content">
                                <?= htmlspecialchars($product['specification']); ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Enquiry Button -->
                        <button class="industrial-product-enquiry-btn" 
                                data-bs-target="#rfqModal" 
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
    <section class="industrial-more-products-section">
        <div class="container">
            <div class="industrial-section-header">
                <p class="industrial-section-subtitle">Explore More</p>
                <h2 class="industrial-section-heading">Our Products</h2>
            </div>

            <div class="industrial-products-grid">
                <?php
                $cardIndex = 0;
                foreach ($all_products as $all) {
                    if ($cardIndex >= 6) break;
                    $img = !empty($all['main_image']) 
                        ? base_url()."/public/uploads/product_images/" . htmlspecialchars($all['main_image']) 
                        : base_url()."/public/assets/img/industrial-product-default.jpg";
                    $url = base_url() . '/products/' . htmlspecialchars($all['menu_link']);
                    $cardIndex++;
                ?>
                    <div class="industrial-product-card" 
                         data-aos="zoom-in-up" 
                         data-aos-delay="<?= ($cardIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($cardIndex % 3) * 100; ?>ms;">
                        <a href="<?= $url; ?>" style="text-decoration: none; color: inherit;">
                            <img src="<?= $img; ?>" alt="<?= htmlspecialchars($all['product_name']); ?>" class="industrial-product-card-image">
                            <div class="industrial-product-card-content">
                                <h5 class="industrial-product-card-title"><?= htmlspecialchars($all['product_name']); ?></h5>
                                <p class="industrial-product-card-desc"><?= htmlspecialchars(substr($all['short_description'] ?? '', 0, 80)); ?></p>
                                <span class="industrial-product-card-btn">
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

    <!-- Related Articles Section -->
    <?php if(!empty($all_blogs) && count($all_blogs) > 0): ?>
    <section class="industrial-more-products-section" style="background: var(--industrial-black);">
        <div class="container">
            <div class="industrial-section-header">
                <p class="industrial-section-subtitle">Related Content</p>
                <h2 class="industrial-section-heading">Related Articles</h2>
            </div>

            <div class="industrial-related-posts-grid">
                <?php
                $postIndex = 0;
                foreach ($all_blogs as $blog) {
                    if ($postIndex >= 6) break;
                    $blogImg = !empty($blog['image']) 
                        ? base_url() . "/public/uploads/post_updates_images/" . htmlspecialchars($blog['image']) 
                        : base_url() . "/public/assets/img/industrial-product-default.jpg";
                    $blogUrl = base_url() . "/updates/" . htmlspecialchars($blog['slug']);
                    $postIndex++;
                ?>
                    <div class="industrial-product-card" 
                         data-aos="fade-up" 
                         data-aos-delay="<?= ($postIndex % 3) * 100; ?>"
                         style="animation-delay: <?= ($postIndex % 3) * 100; ?>ms;">
                        <a href="<?= $blogUrl; ?>" style="text-decoration: none; color: inherit;">
                            <img src="<?= $blogImg; ?>" alt="<?= htmlspecialchars($blog['title']); ?>" class="industrial-product-card-image">
                            <div class="industrial-product-card-content">
                                <h5 class="industrial-product-card-title"><?= htmlspecialchars($blog['title']); ?></h5>
                                <p class="industrial-product-card-desc"><?= htmlspecialchars(substr($blog['description'] ?? '', 0, 80)); ?></p>
                                <span class="industrial-product-card-btn">
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
        $file_url = 'layout/' . htmlspecialchars($myurl['url_val']) . ".php";
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
                <button class="industrial-modal-nav-btn" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); z-index: 100;" onclick="prevMedia()" type="button">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div id="modalContent"></div>
                <button class="industrial-modal-nav-btn" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); z-index: 100;" onclick="nextMedia()" type="button">
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
        document.querySelectorAll('.industrial-gallery-thumbnail').forEach(el => el.classList.remove('active'));
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
                container.innerHTML = `<iframe width="100%" height="600" src="${item.src}?autoplay=1" frameborder="0" allowfullscreen style="border-radius: 12px;"></iframe>`;
            } else {
                container.innerHTML = `<img src="${item.src}" class="img-fluid" style="max-height: 600px; border-radius: 12px;">`;
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
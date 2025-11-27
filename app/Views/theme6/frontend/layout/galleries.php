<style>
    /* ============================================= */
    /* INDUSTRIAL GALLERY SECTION - DYNAMIC COLORS  */
    /* ============================================= */
    
    /* Gallery Wrapper */
    .gallery-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--bg-primary);
        overflow: hidden;
    }

    /* Animated Background */
    .gallery-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.03;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--secondary-color) 0%, transparent 50%);
        animation: pattern-float 20s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes pattern-float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, 30px); }
    }

    /* Gallery Content */
    .gallery-content {
        position: relative;
        z-index: 1;
    }

    /* Section Title */
    .gallery-section-title {
        font-size: var(--font-size-4xl);
        font-weight: var(--font-weight-bold);
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: var(--space-16);
        letter-spacing: var(--letter-spacing-tight);
        text-transform: uppercase;
    }

    .gallery-subtitle {
        font-size: var(--font-size-lg);
        color: var(--text-secondary);
        text-align: center;
        margin-bottom: 60px;
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: var(--space-24);
        margin-bottom: 50px;
    }

    /* Gallery Item */
    .gallery-item {
        background: var(--bg-surface);
        border-radius: var(--radius-lg);
        overflow: hidden;
        cursor: pointer;
        transition: all var(--duration-normal) var(--ease-standard);
        border: 2px solid var(--border-color-light);
        position: relative;
    }

    .gallery-item:hover {
        transform: translateY(-8px);
        border-color: var(--primary-color);
        box-shadow: 0 12px 40px rgba(var(--primary-rgb), 0.2);
    }

    /* Image Container */
    .gallery-image-container {
        position: relative;
        width: 100%;
        padding-top: 75%; /* 4:3 Aspect Ratio */
        overflow: hidden;
        background: var(--bg-primary);
    }

    .gallery-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform var(--duration-normal) var(--ease-standard);
    }

    .gallery-item:hover .gallery-image {
        transform: scale(1.1);
    }

    /* Overlay */
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            135deg,
            rgba(var(--primary-rgb), 0.9),
            rgba(var(--secondary-rgb), 0.9)
        );
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity var(--duration-normal) var(--ease-standard);
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay-icon {
        width: 60px;
        height: 60px;
        background: var(--bg-surface);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 24px;
        transform: scale(0.8);
        transition: transform var(--duration-normal) var(--ease-standard);
    }

    .gallery-item:hover .gallery-overlay-icon {
        transform: scale(1);
    }

    /* Title Section */
    .gallery-title-section {
        padding: var(--space-16);
        background: var(--bg-surface);
        border-top: 1px solid var(--border-color-light);
    }

    .gallery-item-title {
        font-size: var(--font-size-lg);
        font-weight: var(--font-weight-semibold);
        color: var(--text-primary);
        margin: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: color var(--duration-fast) var(--ease-standard);
    }

    .gallery-item:hover .gallery-item-title {
        color: var(--primary-color);
    }

    /* Load More Button */
    .gallery-load-more {
        text-align: center;
        margin-top: 40px;
    }

    .gallery-load-more-btn {
        display: inline-flex;
        align-items: center;
        padding: var(--space-12) var(--space-32);
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: var(--primary-text);
        border: none;
        border-radius: var(--radius-full);
        font-size: var(--font-size-base);
        font-weight: var(--font-weight-semibold);
        cursor: pointer;
        transition: all var(--duration-normal) var(--ease-standard);
        box-shadow: 0 4px 15px rgba(var(--primary-rgb), 0.3);
    }

    .gallery-load-more-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(var(--primary-rgb), 0.4);
    }

    .gallery-load-more-btn:active {
        transform: translateY(-1px);
    }

    /* Lightbox */
    .gallery-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all var(--duration-normal) var(--ease-standard);
    }

    .gallery-lightbox.active {
        opacity: 1;
        visibility: visible;
    }

    .gallery-lightbox-content {
        max-width: 90vw;
        max-height: 90vh;
        position: relative;
    }

    .gallery-lightbox-image {
        max-width: 100%;
        max-height: 90vh;
        object-fit: contain;
        border-radius: var(--radius-base);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }

    /* Lightbox Close Button */
    .gallery-lightbox-close {
        position: absolute;
        top: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: var(--bg-surface);
        border: 2px solid var(--primary-color);
        border-radius: 50%;
        color: var(--primary-color);
        font-size: 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all var(--duration-fast) var(--ease-standard);
        z-index: 10001;
    }

    .gallery-lightbox-close:hover {
        background: var(--primary-color);
        color: var(--primary-text);
        transform: rotate(90deg);
    }

    /* Lightbox Navigation */
    .gallery-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background: var(--bg-surface);
        border: 2px solid var(--primary-color);
        border-radius: 50%;
        color: var(--primary-color);
        font-size: 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all var(--duration-fast) var(--ease-standard);
        z-index: 10001;
    }

    .gallery-lightbox-nav:hover {
        background: var(--primary-color);
        color: var(--primary-text);
    }

    .gallery-lightbox-prev {
        left: 30px;
    }

    .gallery-lightbox-next {
        right: 30px;
    }

    /* Lightbox Info */
    .gallery-lightbox-info {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--bg-surface);
        color: var(--text-primary);
        padding: var(--space-8) var(--space-20);
        border-radius: var(--radius-full);
        font-size: var(--font-size-sm);
        font-weight: var(--font-weight-medium);
        border: 1px solid var(--border-color);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: var(--space-20);
        }

        .gallery-section-title {
            font-size: var(--font-size-3xl);
        }
    }

    @media (max-width: 991px) {
        .gallery-wrapper {
            padding: 80px 0;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: var(--space-16);
        }

        .gallery-section-title {
            font-size: var(--font-size-2xl);
        }

        .gallery-subtitle {
            font-size: var(--font-size-base);
            margin-bottom: 40px;
        }
    }

    @media (max-width: 768px) {
        .gallery-wrapper {
            padding: 60px 0;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: var(--space-16);
        }

        .gallery-section-title {
            font-size: var(--font-size-xl);
        }

        .gallery-title-section {
            padding: var(--space-12);
        }

        .gallery-item-title {
            font-size: var(--font-size-base);
        }

        .gallery-lightbox-close,
        .gallery-lightbox-nav {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }

        .gallery-lightbox-prev {
            left: 15px;
        }

        .gallery-lightbox-next {
            right: 15px;
        }

        .gallery-lightbox-close {
            top: 15px;
            right: 15px;
        }

        .gallery-lightbox-info {
            bottom: 15px;
            padding: var(--space-6) var(--space-16);
        }
    }

    @media (max-width: 576px) {
        .gallery-grid {
            grid-template-columns: 1fr;
            gap: var(--space-16);
        }

        .gallery-section-title {
            font-size: var(--font-size-lg);
        }

        .gallery-load-more-btn {
            padding: var(--space-10) var(--space-24);
            font-size: var(--font-size-sm);
        }
    }
</style>

<?php
$heading = "";
if(!empty($gallery_images)){
    foreach($gallery_images as $gallery_img){
        $heading = $gallery_img['sub_menu_name'];
        unset($gallery_img['sub_menu_name']); 
        if ($gallery_img['section_id'] == $myurl['section_id']) {
            if(isset($gallery_img['section_id'])){
                unset($gallery_img['section_id']);
            }
?>

<section class="gallery-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="gallery-bg-pattern"></div>

    <div class="container gallery-content">
        <!-- Section Title -->
        <h2 class="gallery-section-title"><?= htmlspecialchars($heading); ?></h2>
        <p class="gallery-subtitle">Explore our beautiful property collection</p>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
            <?php
            $galleryIndex = 0;
            foreach ($gallery_img as $gi) {
                $img = !empty($gi['image']) 
                    ? base_url().'/public/uploads/gallery_images/' . $gi['image'] 
                    : base_url().'/public/assets/img/gallery-placeholder.jpg';
                $galleryIndex++;
            ?>
                <div class="gallery-item" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="<?= ($galleryIndex % 3) * 100; ?>"
                     onclick="openGalleryLightbox(this)">
                    
                    <div class="gallery-image-container">
                        <img src="<?= htmlspecialchars($img); ?>" 
                             alt="<?= htmlspecialchars($gi['title']); ?>" 
                             class="gallery-image"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-title-section">
                        <h4 class="gallery-item-title" title="<?= htmlspecialchars($gi['title']); ?>">
                            <?= htmlspecialchars($gi['title']); ?>
                        </h4>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Load More Button (Optional) -->
        <div class="gallery-load-more" data-aos="fade-up" data-aos-delay="400">
            <button class="gallery-load-more-btn">
                <i class="fas fa-images me-2"></i>Load More
            </button>
        </div>
    </div>
</section>

<!-- Gallery Lightbox -->
<div class="gallery-lightbox" id="galleryLightbox">
    <button class="gallery-lightbox-close" onclick="closeGalleryLightbox()">
        <i class="fas fa-times"></i>
    </button>
    <button class="gallery-lightbox-nav gallery-lightbox-prev" onclick="prevGalleryImage()">
        <i class="fas fa-chevron-left"></i>
    </button>
    <div class="gallery-lightbox-content">
        <img src="" alt="" class="gallery-lightbox-image" id="lightboxImage">
    </div>
    <button class="gallery-lightbox-nav gallery-lightbox-next" onclick="nextGalleryImage()">
        <i class="fas fa-chevron-right"></i>
    </button>
    <div class="gallery-lightbox-info" id="lightboxInfo"></div>
</div>

<script>
    let currentGalleryIndex = 0;
    let galleryItems = [];

    function openGalleryLightbox(element) {
        galleryItems = document.querySelectorAll('.gallery-item');
        currentGalleryIndex = Array.from(galleryItems).indexOf(element);
        displayGalleryImage();
        document.getElementById('galleryLightbox').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeGalleryLightbox() {
        document.getElementById('galleryLightbox').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    function displayGalleryImage() {
        const img = galleryItems[currentGalleryIndex].querySelector('.gallery-image');
        const title = galleryItems[currentGalleryIndex].querySelector('.gallery-item-title').textContent;
        document.getElementById('lightboxImage').src = img.src;
        document.getElementById('lightboxImage').alt = title;
        document.getElementById('lightboxInfo').textContent = `${currentGalleryIndex + 1} / ${galleryItems.length}`;
    }

    function nextGalleryImage() {
        currentGalleryIndex = (currentGalleryIndex + 1) % galleryItems.length;
        displayGalleryImage();
    }

    function prevGalleryImage() {
        currentGalleryIndex = (currentGalleryIndex - 1 + galleryItems.length) % galleryItems.length;
        displayGalleryImage();
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.getElementById('galleryLightbox').classList.contains('active')) {
            if (e.key === 'ArrowRight') nextGalleryImage();
            if (e.key === 'ArrowLeft') prevGalleryImage();
            if (e.key === 'Escape') closeGalleryLightbox();
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>

<?php
        }
    }
}
?>

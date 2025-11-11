<style>
    /* Ultra Modern Gallery Section */
    
    /* Gallery Wrapper */
    .gallery-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .gallery-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.04;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--accent-color) 0%, transparent 50%);
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
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .gallery-subtitle {
        font-size: 16px;
        color: #6c757d;
        text-align: center;
        margin-bottom: 60px;
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    /* Gallery Item */
    .gallery-item {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        background: var(--theme_surface_color);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        animation: slideInUp 0.6s ease-out forwards;
        cursor: pointer;
    }

    .gallery-item:nth-child(1) { animation-delay: 0.05s; }
    .gallery-item:nth-child(2) { animation-delay: 0.1s; }
    .gallery-item:nth-child(3) { animation-delay: 0.15s; }
    .gallery-item:nth-child(4) { animation-delay: 0.2s; }
    .gallery-item:nth-child(5) { animation-delay: 0.25s; }
    .gallery-item:nth-child(6) { animation-delay: 0.3s; }
    .gallery-item:nth-child(n+7) { animation-delay: 0.35s; }

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

    .gallery-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.4s ease;
        transform-origin: left;
        z-index: 10;
    }

    .gallery-item:hover::before {
        transform: scaleX(1);
    }

    .gallery-item:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    /* Image Container */
    .gallery-image-container {
        position: relative;
        overflow: hidden;
        height: 250px;
        background: linear-gradient(135deg, #f0f0f0, #e0e0e0);
    }

    .gallery-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        display: block;
    }

    .gallery-item:hover .gallery-image {
        transform: scale(1.15) rotate(3deg);
    }

    /* Overlay */
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.6) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding: 30px;
        z-index: 2;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay-icon {
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 24px;
        transition: all 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay-icon {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Title Section */
    .gallery-title-section {
        padding: 20px;
    }

    .gallery-item-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        transition: color 0.3s ease;
    }

    .gallery-item:hover .gallery-item-title {
        color: var(--primary-color);
    }

    /* Filter Buttons */
    .gallery-filter-wrapper {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .gallery-filter-btn {
        padding: 10px 24px;
        background: white;
        border: 2px solid #e9ecef;
        color: var(--text-dark);
        border-radius: 25px;
        font-weight: 600;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .gallery-filter-btn:hover,
    .gallery-filter-btn.active {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Lightbox Modal */
    .gallery-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .gallery-lightbox.active {
        opacity: 1;
        visibility: visible;
    }

    .gallery-lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: zoomIn 0.3s ease-out;
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .gallery-lightbox-image {
        max-width: 100%;
        max-height: 85vh;
        object-fit: contain;
        border-radius: 10px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
    }

    .gallery-lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--primary-color);
        transition: all 0.3s ease;
        z-index: 10000;
    }

    .gallery-lightbox-close:hover {
        transform: scale(1.1);
        background: var(--primary-color);
        color: white;
    }

    .gallery-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        border-radius: 50%;
        color: white;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10000;
    }

    .gallery-lightbox-nav:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-50%) scale(1.1);
    }

    .gallery-lightbox-prev {
        left: 20px;
    }

    .gallery-lightbox-next {
        right: 20px;
    }

    .gallery-lightbox-info {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 12px 24px;
        border-radius: 25px;
        font-size: 14px;
        z-index: 10000;
    }

    /* Load More Button */
    .gallery-load-more {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .gallery-load-more-btn {
        padding: 14px 50px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
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
    }

    .gallery-load-more-btn::before {
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

    .gallery-load-more-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .gallery-load-more-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .gallery-section-title {
            font-size: 42px;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
    }

    @media (max-width: 991px) {
        .gallery-wrapper {
            padding: 80px 0;
        }

        .gallery-section-title {
            font-size: 36px;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .gallery-wrapper {
            padding: 60px 0;
        }

        .gallery-section-title {
            font-size: 32px;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .gallery-image-container {
            height: 200px;
        }

        .gallery-filter-wrapper {
            gap: 8px;
        }

        .gallery-filter-btn {
            padding: 8px 16px;
            font-size: 12px;
        }

        .gallery-lightbox-close,
        .gallery-lightbox-nav {
            width: 40px;
            height: 40px;
            font-size: 20px;
        }

        .gallery-lightbox-prev {
            left: 10px;
        }

        .gallery-lightbox-next {
            right: 10px;
        }
    }

    @media (max-width: 576px) {
        .gallery-section-title {
            font-size: 28px;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 12px;
        }

        .gallery-image-container {
            height: 150px;
        }

        .gallery-title-section {
            padding: 15px;
        }

        .gallery-item-title {
            font-size: 14px;
        }

        .gallery-lightbox-content {
            max-width: 95%;
        }

        .gallery-lightbox-image {
            max-height: 80vh;
        }

        .gallery-lightbox-info {
            font-size: 12px;
            padding: 10px 16px;
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
                        <img src="<?= $img; ?>" 
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


<section class="gallery-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="gallery-decoration" 
         style="position: absolute; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                z-index: 0; 
                overflow: hidden;">
        
        <div style="position: absolute; 
                   width: 300px; 
                   height: 300px; 
                   background: radial-gradient(circle, rgba(33, 128, 161, 0.08), transparent); 
                   border-radius: 50%; 
                   top: 50px; 
                   right: 5%; 
                   animation: float 8s ease-in-out infinite;"></div>
        
        <div style="position: absolute; 
                   width: 200px; 
                   height: 200px; 
                   background: radial-gradient(circle, rgba(230, 126, 34, 0.08), transparent); 
                   border-radius: 50%; 
                   bottom: 100px; 
                   left: 10%; 
                   animation: float 10s ease-in-out infinite; 
                   animation-delay: 1s;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 1;">
        
        <?php
        $heading = "";
        if (!empty($gallery_images)) {
            foreach ($gallery_images as $gallery_img) {
                $heading = $gallery_img['sub_menu_name'] ?? 'Our Gallery';
                unset($gallery_img['sub_menu_name']);
                
                if (isset($gallery_img['section_id']) && $gallery_img['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($gallery_img['section_id'])) {
                        unset($gallery_img['section_id']);
                    }
                    ?>
                    
                    <!-- Section Header -->
                    <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
                        
                        <h2 class="gallery-title fw-bold" 
                            style="font-size: 42px; 
                                   color: var(--text-primary); 
                                   margin-bottom: 15px; 
                                   text-transform: uppercase; 
                                   letter-spacing: 2px; 
                                   position: relative; 
                                   display: inline-block;">
                            <span style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                        -webkit-background-clip: text; 
                                        -webkit-text-fill-color: transparent; 
                                        background-clip: text;">
                                <?= esc($heading, 'html') ?>
                            </span>
                        </h2>
                        
                        <!-- Animated divider -->
                        <div style="width: 120px; 
                                   height: 5px; 
                                   background: linear-gradient(90deg, var(--primary-color), var(--accent-color)); 
                                   margin: 25px auto; 
                                   border-radius: 3px; 
                                   animation: expandWidth 0.8s ease-out; 
                                   animation-delay: 0.2s; 
                                   animation-fill-mode: both;"></div>
                        
                        <p class="section-subtitle" 
                           style="font-size: 15px; 
                                  color: rgba(var(--text-primary), 0.7); 
                                  margin-top: 15px; 
                                  animation: fadeIn 0.8s ease-out; 
                                  animation-delay: 0.3s;">
                            Explore our collection of memorable moments and achievements
                        </p>
                    </div>

                    <!-- Gallery Grid -->
                    <div class="gallery-grid" 
                         style="display: grid; 
                                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
                                gap: 25px; 
                                margin-top: 50px; 
                                animation: fadeIn 0.8s ease-out; 
                                animation-delay: 0.4s;">
                        
                        <?php
                        $image_count = 0;
                        if (!empty($gallery_img)) {
                            foreach ($gallery_img as $gi) {
                                $image_count++;
                                
                                // Image handling
                                $img = !empty($gi['image']) 
                                    ? base_url() . '/public/uploads/gallery_images/' . esc($gi['image'], 'attr')
                                    : base_url() . '/public/assets/img/no-gallery.png';
                                
                                $title = esc($gi['title'] ?? 'Gallery Image', 'html');
                                $stagger_delay = ($image_count * 0.08);
                                ?>
                                
                                <!-- Gallery Item -->
                                <div class="gallery-item-wrapper" 
                                     style="animation: zoomInScale 0.6s ease-out; 
                                            animation-delay: <?= $stagger_delay ?>s; 
                                            animation-fill-mode: both;">
                                    
                                    <!-- Gallery Card -->
                                    <div class="gallery-card" 
                                         style="position: relative; 
                                                width: 100%; 
                                                height: 280px; 
                                                border-radius: var(--border-radius-lg); 
                                                overflow: hidden; 
                                                background: var(--card-background); 
                                                box-shadow: var(--shadow-sm); 
                                                transition: all var(--transition-normal) var(--ease-standard); 
                                                cursor: pointer;"
                                         onmouseover="this.style.boxShadow='var(--shadow-lg)'; this.style.transform='scale(1.02)'"
                                         onmouseout="this.style.boxShadow='var(--shadow-sm)'; this.style.transform='scale(1)'">
                                        
                                        <!-- Image Container -->
                                        <div class="gallery-image-wrapper" 
                                             style="position: absolute; 
                                                    top: 0; 
                                                    left: 0; 
                                                    width: 100%; 
                                                    height: 100%; 
                                                    overflow: hidden;">
                                            
                                            <img src="<?= $img ?>" 
                                                 alt="<?= $title ?>" 
                                                 title="<?= $title ?>" 
                                                 loading="lazy"
                                                 style="width: 100%; 
                                                        height: 100%; 
                                                        object-fit: cover; 
                                                        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);"
                                                 onmouseover="this.style.transform='scale(1.1) rotate(2deg)'"
                                                 onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                        </div>

                                        <!-- Overlay -->
                                        <div class="gallery-overlay" 
                                             style="position: absolute; 
                                                    top: 0; 
                                                    left: 0; 
                                                    width: 100%; 
                                                    height: 100%; 
                                                    background: linear-gradient(135deg, rgba(33, 128, 161, 0.8), rgba(230, 126, 34, 0.8)); 
                                                    opacity: 0; 
                                                    transition: opacity var(--transition-normal) var(--ease-standard); 
                                                    display: flex; 
                                                    align-items: center; 
                                                    justify-content: center; 
                                                    z-index: 2;"
                                             onmouseover="this.style.opacity='1'"
                                             onmouseout="this.style.opacity='0'">
                                            
                                            <!-- Overlay Content -->
                                            <div style="text-align: center; color: white;">
                                                <div style="font-size: 48px; margin-bottom: 15px;">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </div>
                                                <p style="font-size: 13px; 
                                                          font-weight: 600; 
                                                          text-transform: uppercase; 
                                                          letter-spacing: 1px;">
                                                    Click to View
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <div class="gallery-title-box" 
                                             style="position: absolute; 
                                                    bottom: 0; 
                                                    left: 0; 
                                                    right: 0; 
                                                    background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.8)); 
                                                    padding: 30px 20px 15px; 
                                                    z-index: 1;">
                                            
                                            <h5 class="gallery-item-title" 
                                                style="font-size: 14px; 
                                                       font-weight: 700; 
                                                       color: white; 
                                                       margin: 0; 
                                                       line-height: 1.4; 
                                                       text-transform: capitalize; 
                                                       display: -webkit-box; 
                                                       -webkit-line-clamp: 2; 
                                                       -webkit-box-orient: vertical; 
                                                       overflow: hidden;">
                                                <?= strlen($title) > 50 ? substr($title, 0, 50) . '...' : $title ?>
                                            </h5>
                                        </div>

                                        <!-- Click Handler Link -->
                                        <a href="<?= $img ?>" 
                                           class="gallery-link" 
                                           data-lightbox="gallery" 
                                           data-title="<?= $title ?>"
                                           style="position: absolute; 
                                                  top: 0; 
                                                  left: 0; 
                                                  width: 100%; 
                                                  height: 100%; 
                                                  z-index: 3;"></a>
                                    </div>
                                </div>
                                
                                <?php
                            }
                        } else {
                            ?>
                            <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                                <i class="fa-solid fa-image" 
                                   style="font-size: 48px; 
                                          color: rgba(var(--text-primary), 0.3); 
                                          margin-bottom: 15px; 
                                          display: block;"></i>
                                <p style="color: rgba(var(--text-primary), 0.6); font-size: 16px;">
                                    No gallery images available at the moment
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    
                    <?php
                }
            }
        } else {
            ?>
            <div class="empty-state text-center py-5">
                <i class="fa-solid fa-inbox" 
                   style="font-size: 48px; 
                          color: rgba(var(--text-primary), 0.3); 
                          margin-bottom: 20px; 
                          display: block;"></i>
                <h3 style="color: var(--text-primary); font-size: 20px; margin-bottom: 10px;">No Gallery Found</h3>
                <p style="color: rgba(var(--text-primary), 0.6);">Gallery images will appear here soon</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     LIGHTBOX/MODAL GALLERY
     ============================================ -->
<style>
    /* Lightbox Modal Styles */
    .gallery-lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.95);
        animation: fadeIn 0.3s ease-out;
    }

    .gallery-lightbox.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gallery-lightbox-content {
        position: relative;
        width: 90%;
        max-width: 900px;
        height: auto;
        max-height: 85vh;
        animation: slideUpFade 0.3s ease-out;
    }

    .gallery-lightbox-image {
        width: 100%;
        height: auto;
        max-height: 85vh;
        object-fit: contain;
        border-radius: var(--border-radius-lg);
    }

    .gallery-lightbox-title {
        color: white;
        font-size: 14px;
        margin-top: 15px;
        text-align: center;
    }

    .gallery-lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: white;
        font-size: 32px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .gallery-lightbox-close:hover {
        transform: scale(1.2);
    }

    .gallery-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 32px;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 10;
        user-select: none;
        padding: 15px 20px;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.5);
    }

    .gallery-lightbox-nav:hover {
        background: rgba(0, 0, 0, 0.8);
        transform: translateY(-50%) scale(1.1);
    }

    .gallery-lightbox-prev {
        left: -60px;
    }

    .gallery-lightbox-next {
        right: -60px;
    }
</style>

<!-- ============================================
     GALLERY SECTION STYLES
     ============================================ -->
<style>
    /* ============================================
       ANIMATIONS
       ============================================ */

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(40px);
        }
    }

    @keyframes slideDownFade {
        from {
            transform: translateY(-30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideUpFade {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes expandWidth {
        from {
            width: 0;
            opacity: 0;
        }
        to {
            width: 120px;
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes zoomInScale {
        from {
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-title {
            font-size: 32px !important;
        }

        .gallery-card {
            height: 250px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .gallery-section {
            padding: 60px 0 !important;
        }

        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .gallery-title {
            font-size: 28px !important;
        }

        .gallery-card {
            height: 220px !important;
        }

        .gallery-decoration {
            display: none;
        }

        .gallery-lightbox-prev,
        .gallery-lightbox-next {
            left: -40px !important;
            right: -40px !important;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .gallery-section {
            padding: 40px 0 !important;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .gallery-title {
            font-size: 20px !important;
        }

        .gallery-card {
            height: 200px !important;
        }

        .gallery-overlay {
            opacity: 0.9 !important;
        }

        .gallery-lightbox-content {
            width: 95%;
            max-height: 90vh;
        }
    }

    /* Accessibility */
    .gallery-card:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    .gallery-link:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .gallery-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     GALLERY SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var galleryItems = document.querySelectorAll('.gallery-item-wrapper');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, {
                threshold: 0.1
            });

            galleryItems.forEach(function(item) {
                observer.observe(item);
            });
        }

        // ============================================
        // Gallery Lightbox
        // ============================================
        var currentImageIndex = 0;
        var galleryImages = [];

        function openLightbox(index) {
            var lightbox = document.getElementById('galleryLightbox');
            if (!lightbox) {
                // Create lightbox if it doesn't exist
                lightbox = document.createElement('div');
                lightbox.id = 'galleryLightbox';
                lightbox.className = 'gallery-lightbox';
                lightbox.innerHTML = `
                    <div class="gallery-lightbox-content">
                        <span class="gallery-lightbox-close" onclick="closeLightbox()">&times;</span>
                        <div style="position: relative;">
                            <img id="galleryLightboxImage" class="gallery-lightbox-image" src="" alt="">
                            <span class="gallery-lightbox-nav gallery-lightbox-prev" onclick="prevGalleryImage()">&#10094;</span>
                            <span class="gallery-lightbox-nav gallery-lightbox-next" onclick="nextGalleryImage()">&#10095;</span>
                        </div>
                        <div id="galleryLightboxTitle" class="gallery-lightbox-title"></div>
                    </div>
                `;
                document.body.appendChild(lightbox);

                // Close on background click
                lightbox.addEventListener('click', function(e) {
                    if (e.target === lightbox) {
                        closeLightbox();
                    }
                });
            }

            currentImageIndex = index;
            updateLightboxImage();
            lightbox.classList.add('active');
        }

        function closeLightbox() {
            var lightbox = document.getElementById('galleryLightbox');
            if (lightbox) {
                lightbox.classList.remove('active');
            }
        }

        function updateLightboxImage() {
            var image = galleryImages[currentImageIndex];
            var lightboxImage = document.getElementById('galleryLightboxImage');
            var lightboxTitle = document.getElementById('galleryLightboxTitle');

            if (image) {
                lightboxImage.src = image.src;
                lightboxImage.alt = image.alt;
                lightboxTitle.textContent = image.alt;
            }
        }

        window.nextGalleryImage = function() {
            currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
            updateLightboxImage();
        };

        window.prevGalleryImage = function() {
            currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
            updateLightboxImage();
        };

        window.closeLightbox = closeLightbox;

        // ============================================
        // Setup gallery links
        // ============================================
        var galleryLinks = document.querySelectorAll('.gallery-link');
        galleryLinks.forEach(function(link, index) {
            var img = link.parentElement.querySelector('img');
            galleryImages.push({
                src: link.href,
                alt: link.getAttribute('data-title') || img.alt
            });

            link.addEventListener('click', function(e) {
                e.preventDefault();
                openLightbox(index);
            });
        });

        // ============================================
        // Keyboard navigation for lightbox
        // ============================================
        document.addEventListener('keydown', function(e) {
            if (document.getElementById('galleryLightbox')?.classList.contains('active')) {
                if (e.key === 'ArrowRight') nextGalleryImage();
                if (e.key === 'ArrowLeft') prevGalleryImage();
                if (e.key === 'Escape') closeLightbox();
            }
        });

        // ============================================
        // Analytics tracking for gallery interactions
        // ============================================
        document.querySelectorAll('.gallery-link').forEach(function(link) {
            link.addEventListener('click', function() {
                var title = this.getAttribute('data-title');
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'gallery_view', {
                        'image_title': title
                    });
                }
            });
        });

        // ============================================
        // Stagger animation delays
        // ============================================
        var galleryWrappers = document.querySelectorAll('.gallery-item-wrapper');
        galleryWrappers.forEach(function(wrapper, index) {
            var delay = (index * 0.08);
            wrapper.style.setProperty('animation-delay', delay + 's');
        });
    });
</script>

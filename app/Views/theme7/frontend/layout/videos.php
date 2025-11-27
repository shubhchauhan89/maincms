
<section class="videos-section" 
         style="padding: 100px 0; 
                 background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="videos-decoration" 
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
        if (!empty($videoes)) {
            $heading = "";
            foreach ($videoes as $vid) {
                $heading = $vid['heading'] ?? '';
                
                if (isset($vid['section_id']) && $vid['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($vid['section_id'])) {
                        unset($vid['section_id']);
                    }
                    if (isset($vid['heading'])) {
                        unset($vid['heading']);
                    }
                    
                    $datasubmenu = $vid['sub_menu_name'] ?? 'Featured Videos';
                    if (isset($vid['sub_menu_name'])) {
                        unset($vid['sub_menu_name']);
                    }
                    ?>
                    
                    <!-- Section Header -->
                    <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
                        
                        <h2 class="videos-title fw-bold" 
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
                                <?= esc($datasubmenu, 'html') ?>
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
                            Watch our engaging collection of educational videos
                        </p>
                    </div>

                    <!-- Videos Grid -->
                    <div class="videos-grid" 
                         style="display: grid; 
                                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
                                gap: 30px; 
                                margin-top: 50px; 
                                animation: fadeIn 0.8s ease-out; 
                                animation-delay: 0.4s;">
                        
                        <?php
                        $video_count = 0;
                        if (!empty($vid)) {
                            foreach ($vid as $video) {
                                $video_count++;
                                
                                // Image handling
                                $img = !empty($video['thumbnail_images']) 
                                    ? base_url() . '/public/uploads/thumbnail_images/' . esc($video['thumbnail_images'], 'attr')
                                    : base_url() . '/public/assets/img/no-video.png';
                                
                                // Video URL handling
                                $video_url = esc($video['url'] ?? '', 'url');
                                $video_title = esc($video['title'] ?? 'Video', 'html');
                                $stagger_delay = ($video_count * 0.1);
                                
                                // Extract YouTube video ID if needed
                                $youtube_id = '';
                                if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
                                    if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $video_url, $matches)) {
                                        $youtube_id = $matches[1];
                                    }
                                }
                                ?>
                                
                                <!-- Video Card -->
                                <div class="video-item-wrapper" 
                                     style="animation: zoomInScale 0.6s ease-out; 
                                            animation-delay: <?= $stagger_delay ?>s; 
                                            animation-fill-mode: both;">
                                    
                                    <!-- Video Card -->
                                    <div class="video-card" 
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
                                        
                                        <!-- Thumbnail Image -->
                                        <div class="video-image-wrapper" 
                                             style="position: absolute; 
                                                    top: 0; 
                                                    left: 0; 
                                                    width: 100%; 
                                                    height: 100%; 
                                                    overflow: hidden;">
                                            
                                            <img src="<?= $img ?>" 
                                                 alt="<?= $video_title ?>" 
                                                 title="<?= $video_title ?>" 
                                                 loading="lazy"
                                                 style="width: 100%; 
                                                        height: 100%; 
                                                        object-fit: cover; 
                                                        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);"
                                                 onmouseover="this.style.transform='scale(1.1) rotate(2deg)'"
                                                 onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                        </div>

                                        <!-- Overlay -->
                                        <div class="video-overlay" 
                                             style="position: absolute; 
                                                    top: 0; 
                                                    left: 0; 
                                                    width: 100%; 
                                                    height: 100%; 
                                                    background: linear-gradient(135deg, rgba(33, 128, 161, 0.7), rgba(230, 126, 34, 0.7)); 
                                                    opacity: 0; 
                                                    transition: opacity var(--transition-normal) var(--ease-standard); 
                                                    display: flex; 
                                                    align-items: center; 
                                                    justify-content: center; 
                                                    z-index: 2;"
                                             onmouseover="this.style.opacity='1'"
                                             onmouseout="this.style.opacity='0'">
                                            
                                            <!-- Play Button -->
                                            <div style="text-align: center;">
                                                <div class="video-play-button" 
                                                     style="display: inline-flex; 
                                                            align-items: center; 
                                                            justify-content: center; 
                                                            width: 80px; 
                                                            height: 80px; 
                                                            background: white; 
                                                            border-radius: 50%; 
                                                            font-size: 36px; 
                                                            color: var(--primary-color); 
                                                            transition: all var(--transition-normal) var(--ease-standard);"
                                                     onmouseover="this.style.transform='scale(1.15)'; this.style.boxShadow='0 0 30px rgba(255, 255, 255, 0.5)'"
                                                     onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
                                                    <i class="fa-solid fa-play" style="margin-left: 4px;"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Title -->
                                        <div class="video-title-box" 
                                             style="position: absolute; 
                                                    bottom: 0; 
                                                    left: 0; 
                                                    right: 0; 
                                                    background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.9)); 
                                                    padding: 40px 20px 15px; 
                                                    z-index: 1;">
                                            
                                            <h5 class="video-item-title" 
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
                                                <?= strlen($video_title) > 50 ? substr($video_title, 0, 50) . '...' : $video_title ?>
                                            </h5>
                                        </div>

                                        <!-- Click Handler Link -->
                                        <?php if (!empty($youtube_id)) { ?>
                                        <a href="https://www.youtube.com/embed/<?= esc($youtube_id, 'attr') ?>" 
                                           class="video-link" 
                                           data-lity
                                           style="position: absolute; 
                                                  top: 0; 
                                                  left: 0; 
                                                  width: 100%; 
                                                  height: 100%; 
                                                  z-index: 3;"></a>
                                        <?php } else if (!empty($video_url)) { ?>
                                        <a href="<?= $video_url ?>" 
                                           class="video-link popup-youtube" 
                                           style="position: absolute; 
                                                  top: 0; 
                                                  left: 0; 
                                                  width: 100%; 
                                                  height: 100%; 
                                                  z-index: 3;"></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                
                                <?php
                            }
                        } else {
                            ?>
                            <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                                <i class="fa-solid fa-video" 
                                   style="font-size: 48px; 
                                          color: rgba(var(--text-primary), 0.3); 
                                          margin-bottom: 15px; 
                                          display: block;"></i>
                                <p style="color: rgba(var(--text-primary), 0.6); font-size: 16px;">
                                    No videos available at the moment
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
                <h3 style="color: var(--text-primary); font-size: 20px; margin-bottom: 10px;">No Videos Found</h3>
                <p style="color: rgba(var(--text-primary), 0.6);">Video content will appear here soon</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     VIDEOS SECTION STYLES
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

    /* Videos Grid */
    .videos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .videos-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .videos-title {
            font-size: 32px !important;
        }

        .video-card {
            height: 250px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .videos-section {
            padding: 60px 0 !important;
        }

        .videos-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .videos-title {
            font-size: 28px !important;
        }

        .video-card {
            height: 220px !important;
        }

        .videos-decoration {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .videos-section {
            padding: 40px 0 !important;
        }

        .videos-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .videos-title {
            font-size: 20px !important;
        }

        .video-card {
            height: 200px !important;
        }

        .video-play-button {
            width: 60px !important;
            height: 60px !important;
            font-size: 28px !important;
        }
    }

    /* Accessibility */
    .video-card:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    .video-link:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .videos-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     VIDEOS SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var videoItems = document.querySelectorAll('.video-item-wrapper');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, {
                threshold: 0.1
            });

            videoItems.forEach(function(item) {
                observer.observe(item);
            });
        }

        // ============================================
        // Analytics tracking for video interactions
        // ============================================
        document.querySelectorAll('.video-link').forEach(function(link) {
            link.addEventListener('click', function() {
                var title = this.closest('.video-card').querySelector('.video-item-title').textContent.trim();
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'video_play', {
                        'video_title': title
                    });
                }
            });
        });

        // ============================================
        // Stagger animation delays
        // ============================================
        var videoWrappers = document.querySelectorAll('.video-item-wrapper');
        videoWrappers.forEach(function(wrapper, index) {
            var delay = (index * 0.1);
            wrapper.style.setProperty('animation-delay', delay + 's');
        });
    });
</script>

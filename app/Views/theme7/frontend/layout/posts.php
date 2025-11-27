<style>
    /* Webkit Scrollbar (Chrome, Safari, Edge) */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-track {
        background: var(--card-border);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 10px;
        transition: background var(--transition-normal) var(--ease-standard);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--accent-color);
    }

    /* Firefox Scrollbar */
    * {
        scrollbar-color: var(--primary-color) var(--card-border);
        scrollbar-width: thin;
    }
</style>

<!-- ============================================
     UPDATES/POSTS SECTION
     ============================================ -->
<section class="posts-section" 
         style="padding: 60px 0; 
                 background-color: var(--section-background); 
                 border-top: 1px solid var(--card-border);">
    
    <div class="container px-4">
        
        <?php
        if (!empty($posts)) {
            foreach ($posts as $p) {
                if (isset($p['section_id']) && $p['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($p['section_id'])) {
                        unset($p['section_id']);
                    }
                    
                    $section_title = $p['sub_menu_name'] ?? 'Latest Updates';
                    if (isset($p['sub_menu_name'])) {
                        unset($p['sub_menu_name']);
                    }
                    ?>
                    
                    <!-- Section Header -->
                    <div class="section-header text-center mb-5" 
                         style="animation: fadeIn 0.8s ease-out;">
                        
                        <h2 class="section-title fw-bold" 
                            style="font-size: 36px; 
                                   color: var(--text-primary); 
                                   margin-bottom: 10px; 
                                   text-transform: uppercase; 
                                   letter-spacing: 1px;">
                            <i class="fa-solid fa-newspaper me-3" style="color: var(--primary-color);"></i>
                            <?= esc($section_title, 'html') ?>
                        </h2>
                        
                        <div class="section-divider" 
                             style="width: 80px; 
                                    height: 4px; 
                                    background: linear-gradient(90deg, var(--primary-color), var(--accent-color)); 
                                    margin: 0 auto 20px;">
                        </div>
                        
                        <p class="section-subtitle" 
                           style="font-size: 14px; 
                                  color: rgba(var(--text-primary), 0.7); 
                                  max-width: 600px; 
                                  margin: 0 auto;">
                            Stay updated with our latest news, articles, and announcements
                        </p>
                    </div>

                    <!-- Main Content Row -->
                    <div class="row g-4" style="animation: slideInUp 0.8s ease-out;">
                        
                        <!-- ============================================
                             LEFT COLUMN: FEATURED POSTS
                             ============================================ -->
                        <div class="col-lg-8">
                            <div class="featured-posts-grid">
                                <div class="row g-4">
                                    <?php
                                    if (!empty($p['posts'])) {
                                        $post_count = 0;
                                        foreach ($p['posts'] as $post) {
                                            $post_count++;
                                            
                                            // Image fallback
                                            $img = empty($post['image']) 
                                                ? base_url() . '/public/assets/img/no-image.png' 
                                                : base_url() . '/public/uploads/post_updates_images/' . esc($post['image'], 'attr');
                                            
                                            // Post URL
                                            $post_url = base_url() . '/updates/' . esc($post['slug'] ?? '', 'url');
                                            
                                            // Post date
                                            $post_date = date('d M Y', strtotime($post['created_at'] ?? now()));
                                            ?>
                                            
                                            <!-- Featured Post Card -->
                                            <div class="col-md-6 featured-post-card" 
                                                 style="animation: slideInUp 0.8s ease-out; animation-delay: <?= ($post_count * 0.1) ?>s; animation-fill-mode: both;">
                                                
                                                <article class="post-card" 
                                                         style="background: var(--card-background); 
                                                                border: 1px solid var(--card-border); 
                                                                border-radius: var(--border-radius-lg); 
                                                                overflow: hidden; 
                                                                transition: all var(--transition-normal) var(--ease-standard); 
                                                                box-shadow: var(--shadow-sm); 
                                                                height: 100%; 
                                                                display: flex; 
                                                                flex-direction: column;"
                                                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='var(--shadow-lg)'"
                                                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-sm)'">
                                                    
                                                    <!-- Post Image -->
                                                    <div class="post-image-wrapper" 
                                                         style="position: relative; 
                                                                overflow: hidden; 
                                                                height: 250px; 
                                                                background-color: var(--section-background);">
                                                        
                                                        <img src="<?= $img ?>" 
                                                             alt="<?= esc($post['title'] ?? '', 'attr') ?>" 
                                                             class="post-image" 
                                                             style="width: 100%; 
                                                                    height: 100%; 
                                                                    object-fit: cover; 
                                                                    transition: transform var(--transition-normal) var(--ease-standard);"
                                                             onmouseover="this.style.transform='scale(1.05)'"
                                                             onmouseout="this.style.transform='scale(1)'">
                                                        
                                                        <!-- Date Badge -->
                                                        <div class="post-date-badge" 
                                                             style="position: absolute; 
                                                                    top: 12px; 
                                                                    left: 12px; 
                                                                    background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                                                    color: white; 
                                                                    padding: 6px 12px; 
                                                                    border-radius: var(--border-radius); 
                                                                    font-size: 11px; 
                                                                    font-weight: 600; 
                                                                    letter-spacing: 0.5px;">
                                                            <?= $post_date ?>
                                                        </div>
                                                    </div>

                                                    <!-- Post Content -->
                                                    <div class="post-content" 
                                                         style="padding: 20px; 
                                                                flex-grow: 1; 
                                                                display: flex; 
                                                                flex-direction: column;">
                                                        
                                                        <!-- Title -->
                                                        <h3 class="post-title" 
                                                            style="font-size: 16px; 
                                                                   font-weight: 600; 
                                                                   color: var(--text-primary); 
                                                                   margin: 0 0 12px 0; 
                                                                   line-height: 1.4; 
                                                                   transition: color var(--transition-normal) var(--ease-standard);">
                                                            <?= esc(substr($post['title'] ?? '', 0, 60), 'html') ?>
                                                            <?php if (strlen($post['title'] ?? '') > 60) echo '...'; ?>
                                                        </h3>

                                                        <!-- Description -->
                                                        <?php if (!empty($post['description'])) { ?>
                                                        <p class="post-description" 
                                                           style="font-size: 12px; 
                                                                  color: rgba(var(--text-primary), 0.7); 
                                                                  margin: 0 0 15px 0; 
                                                                  line-height: 1.5; 
                                                                  flex-grow: 1;">
                                                            <?= esc(substr($post['description'] ?? '', 0, 100), 'html') ?>...
                                                        </p>
                                                        <?php } ?>

                                                        <!-- Read More Button -->
                                                        <a href="<?= $post_url ?>" 
                                                           class="post-read-more" 
                                                           style="display: inline-flex; 
                                                                  align-items: center; 
                                                                  gap: 8px; 
                                                                  color: var(--primary-color); 
                                                                  text-decoration: none; 
                                                                  font-size: 13px; 
                                                                  font-weight: 600; 
                                                                  transition: all var(--transition-normal) var(--ease-standard);"
                                                           onmouseover="this.style.color='var(--accent-color)'; this.style.transform='translateX(3px)'"
                                                           onmouseout="this.style.color='var(--primary-color)'; this.style.transform='translateX(0)'">
                                                            Read More
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </article>
                                            </div>
                                            
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="col-12 text-center py-5">
                                            <p style="color: rgba(var(--text-primary), 0.5); font-size: 14px;">
                                                No posts available at the moment
                                            </p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- ============================================
                             RIGHT COLUMN: RECENT POSTS SIDEBAR
                             ============================================ -->
                        <div class="col-lg-4">
                            <div class="recent-posts-sidebar" 
                                 style="background: var(--card-background); 
                                        border: 1px solid var(--card-border); 
                                        border-radius: var(--border-radius-lg); 
                                        padding: 24px; 
                                        height: fit-content; 
                                        box-shadow: var(--shadow-sm); 
                                        position: sticky; 
                                        top: 90px;">
                                
                                <!-- Sidebar Title -->
                                <h3 class="sidebar-title" 
                                    style="font-size: 18px; 
                                           font-weight: 700; 
                                           color: var(--text-primary); 
                                           margin: 0 0 20px 0; 
                                           padding-bottom: 12px; 
                                           border-bottom: 2px solid var(--primary-color);">
                                    <i class="fa-solid fa-fire me-2" style="color: var(--accent-color);"></i>
                                    Trending Now
                                </h3>

                                <!-- Recent Posts List -->
                                <div class="recent-posts-list" 
                                     style="max-height: 500px; 
                                            overflow-y: auto; 
                                            padding-right: 8px;">
                                    
                                    <?php
                                    if (!empty($all_posts ?? [])) {
                                        $trending_count = 0;
                                        foreach ($all_posts as $post) {
                                            $trending_count++;
                                            if ($trending_count > 6) break;
                                            
                                            $trending_image = empty($post['image']) 
                                                ? base_url() . '/public/assets/img/no-image.png' 
                                                : base_url() . '/public/uploads/post_updates_images/' . esc($post['image'], 'attr');
                                            
                                            $trending_url = base_url() . '/updates/' . esc($post['slug'] ?? '', 'url');
                                            $trending_date = date('d M Y', strtotime($post['created_at'] ?? now()));
                                            ?>
                                            
                                            <!-- Trending Post Item -->
                                            <a href="<?= $trending_url ?>" 
                                               class="trending-post-item" 
                                               style="display: flex; 
                                                      gap: 12px; 
                                                      margin-bottom: 16px; 
                                                      padding-bottom: 16px; 
                                                      border-bottom: 1px solid var(--card-border); 
                                                      text-decoration: none; 
                                                      transition: all var(--transition-normal) var(--ease-standard);"
                                               onmouseover="this.style.opacity='0.8'"
                                               onmouseout="this.style.opacity='1'">
                                                
                                                <!-- Trending Image -->
                                                <div class="trending-image" 
                                                     style="flex-shrink: 0; 
                                                            width: 70px; 
                                                            height: 70px; 
                                                            border-radius: var(--border-radius); 
                                                            overflow: hidden; 
                                                            background-color: var(--section-background);">
                                                    <img src="<?= $trending_image ?>" 
                                                         alt="<?= esc($post['title'] ?? '', 'attr') ?>" 
                                                         style="width: 100%; 
                                                                height: 100%; 
                                                                object-fit: cover;">
                                                </div>

                                                <!-- Trending Info -->
                                                <div class="trending-info" style="flex-grow: 1;">
                                                    <p class="trending-date" 
                                                       style="font-size: 11px; 
                                                              color: var(--primary-color); 
                                                              font-weight: 600; 
                                                              margin: 0 0 4px 0; 
                                                              text-transform: uppercase; 
                                                              letter-spacing: 0.5px;">
                                                        <?= $trending_date ?>
                                                    </p>
                                                    <h6 class="trending-title" 
                                                        style="font-size: 13px; 
                                                               font-weight: 600; 
                                                               color: var(--text-primary); 
                                                               margin: 0; 
                                                               line-height: 1.3;">
                                                        <?= esc(substr($post['title'] ?? '', 0, 40), 'html') ?>
                                                        <?php if (strlen($post['title'] ?? '') > 40) echo '...'; ?>
                                                    </h6>
                                                </div>
                                            </a>
                                            
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <p style="color: rgba(var(--text-primary), 0.5); font-size: 12px; text-align: center; padding: 20px 0;">
                                            No trending posts yet
                                        </p>
                                        <?php
                                    }
                                    ?>
                                </div>

                                <!-- See More Button -->
                                <a href="<?= base_url() ?>/update.html" 
                                   class="see-more-btn" 
                                   style="display: flex; 
                                          align-items: center; 
                                          justify-content: center; 
                                          width: 100%; 
                                          margin-top: 20px; 
                                          padding: 12px 20px; 
                                          background-color: var(--inquiry_button_color, var(--primary-color)); 
                                          color: white; 
                                          border: none; 
                                          border-radius: var(--border-radius); 
                                          font-size: 14px; 
                                          font-weight: 600; 
                                          text-decoration: none; 
                                          cursor: pointer; 
                                          transition: all var(--transition-normal) var(--ease-standard); 
                                          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);"
                                   onmouseover="this.style.backgroundColor='var(--accent-color)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.15)'"
                                   onmouseout="this.style.backgroundColor='var(--inquiry_button_color, var(--primary-color))'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0, 0, 0, 0.1)'">
                                    <i class="fa-solid fa-arrow-right me-2"></i>
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                }
            }
        } else {
            // No posts section
            ?>
            <div class="empty-state text-center py-5">
                <i class="fa-solid fa-inbox" style="font-size: 48px; color: rgba(var(--text-primary), 0.3); margin-bottom: 20px; display: block;"></i>
                <h3 style="color: var(--text-primary); font-size: 20px; margin-bottom: 10px;">No Updates Available</h3>
                <p style="color: rgba(var(--text-primary), 0.6);">Check back soon for the latest news and announcements</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     POSTS SECTION STYLES
     ============================================ -->
<style>
    /* Posts Section */
    .posts-section {
        position: relative;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideInUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Featured Post Cards */
    .featured-post-card {
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .post-card {
        transition: all var(--transition-normal) var(--ease-standard);
    }

    /* Section Title */
    .section-title {
        transition: color var(--transition-normal) var(--ease-standard);
    }

    /* Recent Posts Scrollbar */
    .recent-posts-list::-webkit-scrollbar {
        width: 5px;
    }

    .recent-posts-list::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 5px;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .recent-posts-sidebar {
            position: relative !important;
            top: auto !important;
            margin-top: 30px;
        }

        .section-title {
            font-size: 28px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .posts-section {
            padding: 40px 0 !important;
        }

        .section-title {
            font-size: 24px !important;
        }

        .featured-post-card .post-image-wrapper {
            height: 200px !important;
        }

        .featured-posts-grid .row {
            display: flex;
            flex-wrap: wrap;
        }

        .featured-posts-grid .col-md-6 {
            width: 100% !important;
        }

        .post-title {
            font-size: 15px !important;
        }

        .post-description {
            font-size: 12px !important;
        }

        .see-more-btn {
            font-size: 12px !important;
            padding: 10px 16px !important;
        }
    }

    /* Accessibility */
    .post-card:focus-visible,
    .see-more-btn:focus-visible,
    .post-read-more:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .posts-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     POSTS SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for card animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var postCards = document.querySelectorAll('.featured-post-card');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = entry.target.style.animation;
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            postCards.forEach(function(card) {
                observer.observe(card);
            });
        }

        // ============================================
        // Trending posts scroll smooth
        // ============================================
        var recentPostsList = document.querySelector('.recent-posts-list');
        if (recentPostsList) {
            recentPostsList.addEventListener('scroll', function() {
                // Smooth scroll already handled by CSS
            });
        }

        // ============================================
        // Analytics tracking for post clicks
        // ============================================
        document.querySelectorAll('.post-read-more, .trending-post-item, .see-more-btn').forEach(function(link) {
            link.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    var postTitle = this.textContent.trim();
                    gtag('event', 'post_click', {
                        'post_title': postTitle
                    });
                }
            });
        });
    });
</script>

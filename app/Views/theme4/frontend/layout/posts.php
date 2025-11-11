<style>
    /* Ultra Modern Posts Section */
    .posts-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .posts-bg-pattern {
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

    /* Section Title */
    .posts-section-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 60px;
        letter-spacing: -1px;
        position: relative;
        z-index: 1;
    }

    /* Main Content Wrapper */
    .posts-content-wrapper {
        position: relative;
        z-index: 1;
    }

    /* Featured Posts Grid */
    .featured-posts-section {
        margin-bottom: 50px;
    }

    .featured-posts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    /* Post Card */
    .post-card {
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .post-card::before {
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

    .post-card:hover::before {
        transform: scaleX(1);
    }

    .post-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    /* Image Container */
    .post-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 300px;
        background: linear-gradient(135deg, #f0f0f0, #e0e0e0);
    }

    .post-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .post-card:hover .post-image {
        transform: scale(1.15) rotate(3deg);
    }

    /* Image Overlay */
    .post-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.5) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .post-card:hover .post-image-overlay {
        opacity: 1;
    }

    /* Badge */
    .post-badge {
        position: absolute;
        bottom: 15px;
        right: 15px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 10px 18px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        z-index: 2;
        animation: badge-pulse 2s ease-in-out infinite;
    }

    @keyframes badge-pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Post Content */
    .post-content {
        padding: 28px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .post-date {
        display: inline-block;
        font-size: 11px;
        color: var(--primary-color);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 12px;
    }

    .post-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 15px;
        line-height: 1.4;
        transition: color 0.3s ease;
        flex-grow: 1;
    }

    .post-title:hover {
        color: var(--primary-color);
    }

    /* Location */
    .post-location {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #6c757d;
        margin-bottom: 12px;
        font-size: 13px;
        font-weight: 500;
    }

    .post-location i {
        color: var(--primary-color);
        font-size: 14px;
    }

    /* Features */
    .post-features {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 18px;
    }

    .feature-badge {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        color: var(--primary-color);
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        border: 1px solid rgba(var(--bs-primary-rgb), 0.2);
        transition: all 0.3s ease;
    }

    .feature-badge:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    .feature-badge i {
        margin-right: 4px;
    }

    /* Price */
    .post-price {
        font-size: 20px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 18px;
    }

    /* Read More Button */
    .post-read-more-btn {
        display: inline-block;
        padding: 12px 28px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-decoration: none;
        border-radius: 12px;
        border: none;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .post-read-more-btn::before {
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

    .post-read-more-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .post-read-more-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    /* Sidebar */
    .posts-sidebar {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        height: fit-content;
        position: sticky;
        top: 20px;
    }

    .sidebar-title {
        font-size: 20px;
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

    /* Recent Posts List */
    .recent-posts-list {
        max-height: 600px;
        overflow-y: auto;
        padding-right: 10px;
    }

    /* Recent Post Item */
    .recent-post-item {
        display: flex;
        gap: 15px;
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 15px;
        text-decoration: none;
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
        background: transparent;
    }

    .recent-post-item:hover {
        background: #f8f9fa;
        border-left-color: var(--primary-color);
        transform: translateX(8px);
    }

    .recent-post-thumbnail {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        object-fit: cover;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .recent-post-item:hover .recent-post-thumbnail {
        transform: scale(1.08);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .recent-post-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .recent-post-date {
        font-size: 11px;
        color: #adb5bd;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .recent-post-title {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-dark);
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .recent-post-item:hover .recent-post-title {
        color: var(--primary-color);
    }

    /* See More Button */
    .see-more-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
    }

    .see-more-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* Custom Scrollbar */
    .recent-posts-list::-webkit-scrollbar {
        width: 6px;
    }

    .recent-posts-list::-webkit-scrollbar-track {
        background: transparent;
    }

    .recent-posts-list::-webkit-scrollbar-thumb {
        background: #d9d9d9;
        border-radius: 10px;
    }

    .recent-posts-list::-webkit-scrollbar-thumb:hover {
        background: var(--primary-color);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .posts-section-title {
            font-size: 42px;
        }

        .featured-posts-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
    }

    @media (max-width: 991px) {
        .posts-wrapper {
            padding: 80px 0;
        }

        .posts-section-title {
            font-size: 36px;
            margin-bottom: 50px;
        }

        .posts-sidebar {
            position: relative;
            top: auto;
            margin-top: 40px;
        }

        .featured-posts-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .posts-wrapper {
            padding: 60px 0;
        }

        .posts-section-title {
            font-size: 32px;
        }

        .featured-posts-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .post-image-wrapper {
            height: 250px;
        }

        .post-content {
            padding: 20px;
        }

        .posts-sidebar {
            padding: 20px;
        }

        .recent-post-item {
            padding: 12px;
            margin-bottom: 12px;
        }

        .recent-post-thumbnail {
            width: 70px;
            height: 70px;
        }
    }

    @media (max-width: 576px) {
        .posts-section-title {
            font-size: 28px;
            margin-bottom: 40px;
        }

        .featured-posts-grid {
            grid-template-columns: 1fr;
        }

        .post-image-wrapper {
            height: 220px;
        }

        .post-title {
            font-size: 16px;
        }

        .recent-post-item {
            flex-direction: column;
        }

        .recent-post-thumbnail {
            width: 100%;
            height: 100px;
        }
    }

    /* Animation */
    .post-card-animate {
        opacity: 0;
        animation: slideInUp 0.6s ease-out forwards;
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
</style>

<?php
if (!empty($posts)) {
    foreach ($posts as $p) {
        if ($p['section_id'] == $myurl['section_id']) {
            if(isset($p['section_id'])){
                unset($p['section_id']);
            }
            if (isset($p['sub_menu_name'])) {
                $datasubmenu = $p['sub_menu_name'];
                unset($p['sub_menu_name']);
            } else {
                $datasubmenu = "Latest Properties";
            }
        ?>

<section class="posts-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="posts-bg-pattern"></div>

    <div class="container posts-content-wrapper">
        <!-- Section Title -->
        <h2 class="posts-section-title"><?= $datasubmenu ?></h2>

        <div class="row g-4">
            <!-- Featured Posts Grid -->
            <div class="col-lg-8">
                <div class="featured-posts-section">
                    <div class="featured-posts-grid">
                        <?php
                        $cardIndex = 0;
                        foreach ($p as $post) {
                            $img = empty($post['image']) 
                                ? base_url() . '/public/assets/img/services3-img.png' 
                                : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                            $url = base_url() . '/updates/' . $post['slug'];
                            $animationDelay = $cardIndex * 100;
                            $cardIndex++;
                        ?>
                            <div class="post-card post-card-animate" 
                                 data-aos="zoom-in-up" 
                                 data-aos-delay="<?= $animationDelay; ?>"
                                 style="animation-delay: <?= $animationDelay; ?>ms;">

                                <!-- Image Container -->
                                <div class="post-image-wrapper">
                                    <a href="<?= $url; ?>" title="View Post">
                                        <img src="<?= $img; ?>" 
                                             alt="<?= htmlspecialchars($post['title']); ?>" 
                                             class="post-image"
                                             loading="lazy">
                                    </a>
                                    <div class="post-image-overlay"></div>

                                    <!-- Badge -->
                                    <?php if (!empty($post['text_on_image']) || isset($p['text_on_image'])): ?>
                                        <div class="post-badge">
                                            <i class="fas fa-star me-1"></i>
                                            <?= htmlspecialchars($post['text_on_image'] ?? $p['text_on_image'] ?? 'Featured'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Date -->
                                    <span class="post-date">
                                        <i class="fas fa-calendar-alt me-1"></i>
                                        <?= date('d M Y', strtotime($post['created_at'])); ?>
                                    </span>

                                    <!-- Title -->
                                    <a href="<?= $url; ?>" class="post-title">
                                        <?= htmlspecialchars($post['title']); ?>
                                    </a>

                                    <!-- Location -->
                                    <?php if (!empty($post['specifications']) || isset($p['specifications'])): ?>
                                        <div class="post-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span><?= htmlspecialchars($post['specifications'] ?? $p['specifications'] ?? ''); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Features -->
                                    <?php if (!empty($post['key_point']) || isset($p['key_point'])): ?>
                                        <div class="post-features">
                                            <span class="feature-badge">
                                                <i class="fas fa-check"></i>
                                                <?= htmlspecialchars($post['key_point'] ?? $p['key_point'] ?? ''); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Price -->
                                    <?php if (!empty($post['price_info']) || isset($p['price_info'])): ?>
                                        <div class="post-price">
                                            ₹ <?= htmlspecialchars($post['price_info'] ?? $p['price_info'] ?? '0'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Read More Button -->
                                    <a href="<?= $url; ?>" class="post-read-more-btn">
                                        <i class="fas fa-arrow-right me-2"></i>Read More
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Recent Posts -->
            <div class="col-lg-4">
                <div class="posts-sidebar">
                    <div class="sidebar-title">
                        <i class="fas fa-clock"></i>Recent Posts
                    </div>

                    <div class="recent-posts-list">
                        <?php if($all_posts): 
                            foreach($all_posts as $post): 
                                $url = base_url() . '/updates/' . $post['slug'];
                                $img = !empty($post['image']) 
                                    ? base_url() . '/public/uploads/post_updates_images/' . $post['image']
                                    : base_url() . '/public/assets/img/empty.png';
                        ?>
                            <a href="<?= $url; ?>" class="recent-post-item">
                                <img src="<?= $img ?>" 
                                     alt="<?= htmlspecialchars($post['title']); ?>" 
                                     class="recent-post-thumbnail"
                                     loading="lazy">
                                <div class="recent-post-info">
                                    <span class="recent-post-date">
                                        <?= date('d M Y', strtotime($post['created_at'])); ?>
                                    </span>
                                    <h6 class="recent-post-title">
                                        <?= htmlspecialchars(substr($post['title'], 0, 45)); ?>...
                                    </h6>
                                </div>
                            </a>
                        <?php endforeach; 
                        endif; ?>
                    </div>

                    <a href="<?= base_url() . "/update.html" ?>" target="_blank" class="see-more-btn">
                        <i class="fas fa-external-link-alt me-2"></i>View All Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
        }
    }
}
?>

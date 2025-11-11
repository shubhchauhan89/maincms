<?= $this->extend("theme5/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== REVOLUTIONARY MEDICAL POST DETAIL PAGE ===== */
    
    .medical-post-detail-page {
        position: relative;
        overflow: hidden;
        background: var(--theme_mode_color);
    }

    /* Hero Section */
    .medical-post-detail-hero {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        overflow: hidden;
    }

    .medical-post-detail-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
        pointer-events: none;
    }

    .medical-post-detail-hero-content {
        position: relative;
        z-index: 1;
        max-width: 1400px;
        margin: 0 auto;
    }

    .medical-post-detail-title {
        font-size: 56px;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -1px;
        line-height: 1.2;
    }

    .medical-post-detail-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 14px;
        font-weight: 600;
    }

    .medical-post-detail-breadcrumb a {
        color: rgba(255, 255, 255, 0.95);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .medical-post-detail-breadcrumb a:hover {
        color: white;
    }

    /* Main Content Wrapper */
    .medical-post-detail-wrapper {
        position: relative;
        padding: 80px 0;
        background: var(--theme_mode_color);
    }

    .medical-post-detail-content-wrapper {
        max-width: 1400px;
    }

    /* Featured Image */
    .medical-post-detail-image-container {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        margin-bottom: 40px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.6s ease;
    }

    .medical-post-detail-image-container:hover {
        border-color: rgba(0, 128, 128, 0.2);
        box-shadow: 0 40px 100px rgba(0, 128, 128, 0.2);
        transform: translateY(-10px);
    }

    .medical-post-detail-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.7s ease;
    }

    .medical-post-detail-image-container:hover .medical-post-detail-image {
        transform: scale(1.05);
    }

    /* Meta Box */
    .medical-post-detail-meta-box {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px;
        margin-bottom: 40px;
        border: 2px solid rgba(0, 128, 128, 0.1);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    }

    .medical-post-detail-meta-header {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 2px solid rgba(0, 128, 128, 0.1);
    }

    .medical-meta-item {
        display: flex;
        gap: 15px;
        align-items: flex-start;
    }

    .medical-meta-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.15), rgba(0, 61, 122, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--medical-teal, #008080);
        flex-shrink: 0;
    }

    .medical-meta-text h6 {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        color: #6c757d;
        margin-bottom: 5px;
        letter-spacing: 1px;
    }

    .medical-meta-text p {
        font-size: 15px;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
    }

    /* Property Details Grid */
    .medical-post-property-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
    }

    .medical-detail-card {
        padding: 20px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.05), rgba(0, 61, 122, 0.05));
        border-radius: 12px;
        border: 1px solid rgba(0, 128, 128, 0.1);
        transition: all 0.3s ease;
    }

    .medical-detail-card:hover {
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
        transform: translateY(-3px);
    }

    .medical-detail-card-label {
        font-size: 12px;
        font-weight: 700;
        color: #6c757d;
        text-transform: uppercase;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 5px;
        letter-spacing: 0.5px;
    }

    .medical-detail-card-label i {
        color: var(--medical-teal, #008080);
    }

    .medical-detail-card-value {
        font-size: 16px;
        font-weight: 800;
        color: var(--medical-blue, #003d7a);
    }

    /* Post Title Bar */
    .medical-post-detail-title-bar {
        margin-bottom: 40px;
        padding-bottom: 25px;
        border-bottom: 3px solid var(--medical-teal, #008080);
    }

    .medical-post-detail-title-bar h3 {
        font-size: 42px;
        font-weight: 900;
        color: var(--text-dark);
        margin: 0;
        line-height: 1.3;
    }

    /* Post Description */
    .medical-post-detail-description {
        font-size: 15px;
        line-height: 2;
        color: #6c757d;
    }

    .medical-post-detail-description p {
        margin-bottom: 20px;
    }

    .medical-post-detail-description ul,
    .medical-post-detail-description ol {
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .medical-post-detail-description li {
        margin-bottom: 12px;
    }

    .medical-post-detail-description strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    .medical-post-detail-description a {
        color: var(--medical-teal, #008080);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .medical-post-detail-description a:hover {
        color: var(--medical-blue, #003d7a);
    }

    /* Sidebar */
    .medical-post-detail-sidebar {
        position: sticky;
        top: 100px;
    }

    .medical-sidebar-title {
        font-size: 18px;
        font-weight: 800;
        color: white;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        padding: 20px 25px;
        border-radius: 15px 15px 0 0;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 0;
    }

    .medical-related-posts-list {
        background: var(--theme_surface_color);
        border: 2px solid rgba(0, 128, 128, 0.1);
        border-radius: 0 0 15px 15px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    }

    .medical-related-post-item {
        display: flex;
        gap: 15px;
        padding: 18px 20px;
        border-bottom: 1px solid rgba(0, 128, 128, 0.05);
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
    }

    .medical-related-post-item:last-child {
        border-bottom: none;
    }

    .medical-related-post-item:hover {
        background: linear-gradient(90deg, rgba(0, 128, 128, 0.05), transparent);
        padding-left: 25px;
    }

    .medical-related-post-thumbnail {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        object-fit: cover;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .medical-related-post-item:hover .medical-related-post-thumbnail {
        transform: scale(1.08);
    }

    .medical-related-post-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .medical-related-post-date {
        font-size: 12px;
        color: #6c757d;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .medical-related-post-title {
        font-size: 14px;
        font-weight: 700;
        color: var(--text-dark);
        margin: 5px 0 0 0;
        transition: color 0.3s ease;
        line-height: 1.4;
    }

    .medical-related-post-item:hover .medical-related-post-title {
        color: var(--medical-teal, #008080);
    }

    /* More Updates Section */
    .medical-more-updates-section {
        position: relative;
        padding: 120px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    .medical-more-updates-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        pointer-events: none;
        background: 
            radial-gradient(circle at 20% 50%, var(--medical-teal, #008080) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, var(--medical-blue, #003d7a) 0%, transparent 50%);
    }

    .medical-more-updates-title {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-bottom: 70px;
    }

    .medical-more-updates-subtitle {
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--medical-teal, #008080);
        margin-bottom: 12px;
    }

    .medical-more-updates-heading {
        font-size: 52px;
        font-weight: 900;
        color: var(--text-dark);
        margin: 0;
    }

    /* Updates Grid */
    .medical-more-updates-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 35px;
    }

    /* Update Card */
    .medical-update-card-item {
        position: relative;
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .medical-update-card-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.6s ease;
        transform-origin: left;
        z-index: 10;
    }

    .medical-update-card-item:hover::before {
        transform: scaleX(1);
    }

    .medical-update-card-item:hover {
        transform: translateY(-20px);
        box-shadow: 0 40px 100px rgba(0, 128, 128, 0.2);
        border-color: rgba(0, 128, 128, 0.2);
        background: linear-gradient(135deg, var(--theme_surface_color) 0%, rgba(0, 128, 128, 0.05) 100%);
    }

    .medical-update-card-image-wrapper {
        position: relative;
        width: 100%;
        height: 250px;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
    }

    .medical-update-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .medical-update-card-item:hover .medical-update-card-image {
        transform: scale(1.12);
    }

    .medical-update-card-content {
        padding: 30px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .medical-update-card-date {
        font-size: 12px;
        font-weight: 700;
        color: var(--medical-teal, #008080);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .medical-update-card-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 15px;
        transition: color 0.3s ease;
        line-height: 1.4;
    }

    .medical-update-card-item:hover .medical-update-card-title {
        color: var(--medical-teal, #008080);
    }

    .medical-update-card-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 700;
        color: var(--medical-teal, #008080);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .medical-update-card-link:hover {
        gap: 14px;
        color: var(--medical-blue, #003d7a);
    }

    /* Animations */
    @keyframes post-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-post-detail-title {
            font-size: 48px;
        }
        .medical-post-detail-title-bar h3 {
            font-size: 36px;
        }
        .medical-more-updates-heading {
            font-size: 44px;
        }
    }

    @media (max-width: 991px) {
        .medical-post-detail-hero {
            padding: 60px 0;
        }
        .medical-post-detail-title {
            font-size: 36px;
        }
        .medical-post-detail-wrapper {
            padding: 60px 0;
        }
        .medical-post-detail-meta-header {
            grid-template-columns: 1fr;
        }
        .medical-post-detail-sidebar {
            position: relative;
            top: auto;
        }
        .medical-more-updates-section {
            padding: 80px 0;
        }
    }

    @media (max-width: 768px) {
        .medical-post-detail-title {
            font-size: 32px;
        }
        .medical-post-detail-title-bar h3 {
            font-size: 28px;
        }
        .medical-more-updates-heading {
            font-size: 36px;
        }
        .medical-more-updates-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
        .medical-post-detail-description {
            font-size: 14px;
            line-height: 1.8;
        }
    }

    @media (max-width: 576px) {
        .medical-post-detail-hero {
            padding: 40px 0;
        }
        .medical-post-detail-title {
            font-size: 26px;
        }
        .medical-post-detail-title-bar h3 {
            font-size: 24px;
        }
        .medical-more-updates-grid {
            grid-template-columns: 1fr;
        }
        .medical-update-card-content {
            padding: 24px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-post-detail-meta-box {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-related-posts-list {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-update-card-item {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-update-card-item:hover {
        background: linear-gradient(135deg, #1a1f2e 0%, rgba(0, 128, 128, 0.08) 100%);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme5") ?>

<div class="medical-post-detail-page">
    <!-- Hero Section -->
    <section class="medical-post-detail-hero">
        <div class="container">
            <div class="medical-post-detail-hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="medical-post-detail-title">
                    <?= htmlspecialchars($post['title'] ?? 'Article'); ?>
                </h1>
                <div class="medical-post-detail-breadcrumb">
                    <a href="<?= base_url(); ?>">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?= base_url() . '/updates'; ?>">Articles</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?= htmlspecialchars($post['slug'] ?? 'Article'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="medical-post-detail-wrapper">
        <div class="container medical-post-detail-content-wrapper">
            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <?php
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/update.jpg' 
                        : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                    ?>
                    <div class="medical-post-detail-image-container" data-aos="flip-left" data-aos-duration="1000">
                        <img src="<?= $img; ?>" alt="<?= htmlspecialchars($post['title'] ?? 'Article'); ?>" class="medical-post-detail-image">
                    </div>

                    <!-- Meta Information -->
                    <div class="medical-post-detail-meta-box" data-aos="fade-up">
                        <div class="medical-post-detail-meta-header">
                            <div class="medical-meta-item">
                                <div class="medical-meta-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="medical-meta-text">
                                    <h6>Author</h6>
                                    <p>Admin</p>
                                </div>
                            </div>

                            <div class="medical-meta-item">
                                <div class="medical-meta-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="medical-meta-text">
                                    <h6>Published</h6>
                                    <p><?= date('d M Y', strtotime($post['created_at'] ?? 'now')); ?></p>
                                </div>
                            </div>

                            <?php if (!empty($post['specifications'])): ?>
                            <div class="medical-meta-item">
                                <div class="medical-meta-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="medical-meta-text">
                                    <h6>Category</h6>
                                    <p><?= htmlspecialchars($post['specifications']); ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Property Details Grid -->
                        <?php if (!empty($post['key_point']) || !empty($post['price_info']) || !empty($post['text_on_image'])): ?>
                        <div class="medical-post-property-details">
                            <?php if (!empty($post['key_point'])): ?>
                            <div class="medical-detail-card">
                                <div class="medical-detail-card-label">
                                    <i class="fas fa-check"></i>Key Points
                                </div>
                                <div class="medical-detail-card-value">
                                    <?= htmlspecialchars($post['key_point']); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($post['price_info'])): ?>
                            <div class="medical-detail-card">
                                <div class="medical-detail-card-label">
                                    <i class="fas fa-tag"></i>Reference
                                </div>
                                <div class="medical-detail-card-value">
                                    <?= htmlspecialchars($post['price_info']); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($post['text_on_image'])): ?>
                            <div class="medical-detail-card">
                                <div class="medical-detail-card-label">
                                    <i class="fas fa-star"></i>Status
                                </div>
                                <div class="medical-detail-card-value">
                                    <?= htmlspecialchars($post['text_on_image']); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Post Title Bar -->
                    <div class="medical-post-detail-title-bar" data-aos="fade-up">
                        <h3><?= htmlspecialchars($post['title'] ?? 'Article'); ?></h3>
                    </div>

                    <!-- Post Description -->
                    <div class="medical-post-detail-description" data-aos="fade-up">
                        <?= $post['description'] ?? '<p>Article content not available</p>'; ?>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="medical-post-detail-sidebar" data-aos="flip-right" data-aos-duration="1000">
                        <div class="medical-sidebar-title">
                            <i class="fas fa-bookmark"></i>Related Articles
                        </div>

                        <div class="medical-related-posts-list">
                            <?php
                            if (!empty($all_post)) {
                                foreach ($all_post as $related_post) {
                                    $related_img = empty($related_post['image']) 
                                        ? base_url() . '/public/assets/img/services3-img.png' 
                                        : base_url() . '/public/uploads/post_updates_images/' . $related_post['image'];
                                    $related_url = base_url() . '/updates/' . $related_post['slug'];
                            ?>
                                <a href="<?= $related_url; ?>" class="medical-related-post-item">
                                    <img src="<?= $related_img; ?>" 
                                         alt="<?= htmlspecialchars($related_post['title']); ?>" 
                                         class="medical-related-post-thumbnail"
                                         loading="lazy">
                                    <div class="medical-related-post-info">
                                        <span class="medical-related-post-date">
                                            <?= date('d M Y', strtotime($related_post['created_at'] ?? 'now')); ?>
                                        </span>
                                        <h6 class="medical-related-post-title">
                                            <?= htmlspecialchars(substr($related_post['title'], 0, 50)); ?>
                                        </h6>
                                    </div>
                                </a>
                            <?php
                                }
                            }

                            if (!empty($custom_updates)) {
                                foreach ($custom_updates as $custom_upd) {
                                    $custom_img = empty($custom_upd['image']) 
                                        ? base_url() . '/public/assets/img/services3-img.png' 
                                        : base_url() . '/public/uploads/custom_pages_image/' . $custom_upd['image'];
                                    $custom_url = base_url() . '/custom/' . $custom_upd['sub_menu_link'];
                            ?>
                                <a href="<?= $custom_url; ?>" class="medical-related-post-item">
                                    <img src="<?= $custom_img; ?>" 
                                         alt="<?= htmlspecialchars($custom_upd['sub_menu']); ?>" 
                                         class="medical-related-post-thumbnail"
                                         loading="lazy">
                                    <div class="medical-related-post-info">
                                        <span class="medical-related-post-date">
                                            <?= date('d M Y', strtotime($custom_upd['created_at'] ?? 'now')); ?>
                                        </span>
                                        <h6 class="medical-related-post-title">
                                            <?= htmlspecialchars(substr($custom_upd['sub_menu'], 0, 50)); ?>
                                        </h6>
                                    </div>
                                </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Updates Section -->
    <?php if(!empty($all_post) && count($all_post) > 0): ?>
    <section class="medical-more-updates-section">
        <div class="container">
            <div class="medical-more-updates-title">
                <p class="medical-more-updates-subtitle">
                    <i class="fas fa-fire me-2"></i>Discover More
                </p>
                <h2 class="medical-more-updates-heading">More Articles</h2>
            </div>

            <div class="medical-more-updates-grid">
                <?php
                $update_index = 0;
                foreach ($all_post as $update_post) {
                    if ($update_index >= 6) break;
                    $update_img = empty($update_post['image']) 
                        ? base_url() . '/public/assets/img/services3-img.png' 
                        : base_url() . '/public/uploads/post_updates_images/' . $update_post['image'];
                    $update_url = base_url() . '/updates/' . $update_post['slug'];
                    $update_index++;
                ?>
                    <div class="medical-update-card-item" data-aos="zoom-in-up" data-aos-delay="<?= ($update_index % 3) * 100; ?>">
                        <a href="<?= $update_url; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                            <div class="medical-update-card-image-wrapper">
                                <img src="<?= $update_img; ?>" 
                                     alt="<?= htmlspecialchars($update_post['title']); ?>" 
                                     class="medical-update-card-image"
                                     loading="lazy">
                            </div>
                            <div class="medical-update-card-content">
                                <div class="medical-update-card-date">
                                    <?= date('d M Y', strtotime($update_post['created_at'] ?? 'now')); ?>
                                </div>
                                <h5 class="medical-update-card-title">
                                    <?= htmlspecialchars($update_post['title']); ?>
                                </h5>
                                <span class="medical-update-card-link">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
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

<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
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
</script>
<?= $this->endSection() ?>

<?= $this->extend("theme6/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== INDUSTRIAL EDGE PRO - BLOG DETAIL PAGE STYLES ===== */

    .industrial-post-detail-page {
        position: relative;
        background: var(--industrial-black);
        color: var(--industrial-text);
    }

    /* ===== HERO SECTION ===== */
    .industrial-post-detail-hero {
        background: linear-gradient(135deg, var(--industrial-black) 0%, rgba(255, 107, 53, 0.05) 100%);
        padding: 80px 0;
        border-bottom: 1px solid var(--industrial-silver);
        position: relative;
    }

    .industrial-post-detail-hero-content {
        text-align: center;
    }

    .industrial-post-detail-title {
        font-size: 2.5rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    .industrial-post-detail-breadcrumb {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-size: 0.95rem;
        flex-wrap: wrap;
    }

    .industrial-post-detail-breadcrumb a {
        color: var(--industrial-blue);
        text-decoration: none;
        transition: color 300ms ease;
    }

    .industrial-post-detail-breadcrumb a:hover {
        color: var(--industrial-orange);
    }

    .industrial-post-detail-breadcrumb i {
        color: var(--industrial-silver);
    }

    .industrial-post-detail-breadcrumb span {
        color: var(--industrial-orange);
        font-weight: 600;
    }

    /* ===== MAIN CONTENT ===== */
    .industrial-post-detail-wrapper {
        position: relative;
        padding: 80px 0;
    }

    .industrial-post-detail-content-wrapper {
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ===== FEATURED IMAGE ===== */
    .industrial-post-detail-image-container {
        width: 100%;
        height: 450px;
        margin-bottom: 40px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--industrial-silver);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .industrial-post-detail-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease;
    }

    .industrial-post-detail-image-container:hover .industrial-post-detail-image {
        transform: scale(1.05);
    }

    /* ===== META INFORMATION ===== */
    .industrial-post-detail-meta-box {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 30px;
        margin-bottom: 40px;
    }

    .industrial-post-detail-meta-header {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid var(--industrial-silver);
    }

    .industrial-meta-item {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .industrial-meta-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        color: #1a1a1a;
        flex-shrink: 0;
    }

    .industrial-meta-text h6 {
        font-weight: 700;
        color: var(--industrial-orange);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0 0 5px 0;
    }

    .industrial-meta-text p {
        color: var(--industrial-text-secondary);
        margin: 0;
        font-size: 0.95rem;
    }

    /* ===== PROPERTY DETAILS ===== */
    .industrial-post-property-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
    }

    .industrial-detail-card {
        background: rgba(255, 107, 53, 0.05);
        border: 1px solid rgba(255, 107, 53, 0.2);
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        transition: all 300ms ease;
    }

    .industrial-detail-card:hover {
        background: rgba(255, 107, 53, 0.15);
        border-color: var(--industrial-orange);
    }

    .industrial-detail-card-label {
        color: var(--industrial-orange);
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .industrial-detail-card-value {
        color: var(--industrial-text);
        font-weight: 600;
        font-size: 0.95rem;
    }

    /* ===== POST TITLE BAR ===== */
    .industrial-post-detail-title-bar {
        background: var(--industrial-surface);
        border-left: 4px solid var(--industrial-orange);
        padding: 25px;
        margin-bottom: 40px;
        border-radius: 0 8px 8px 0;
    }

    .industrial-post-detail-title-bar h3 {
        font-size: 1.8rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0;
        color: var(--industrial-text);
    }

    /* ===== POST DESCRIPTION ===== */
    .industrial-post-detail-description {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 40px;
        line-height: 1.8;
        font-size: 1rem;
    }

    .industrial-post-detail-description p {
        margin-bottom: 20px;
        color: var(--industrial-text-secondary);
    }

    .industrial-post-detail-description p:last-child {
        margin-bottom: 0;
    }

    .industrial-post-detail-description h2,
    .industrial-post-detail-description h3,
    .industrial-post-detail-description h4 {
        color: var(--industrial-text);
        font-weight: 700;
        margin-top: 30px;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .industrial-post-detail-description strong {
        color: var(--industrial-orange);
        font-weight: 700;
    }

    .industrial-post-detail-description em {
        color: var(--industrial-blue);
    }

    .industrial-post-detail-description a {
        color: var(--industrial-blue);
        text-decoration: none;
        transition: color 300ms ease;
    }

    .industrial-post-detail-description a:hover {
        color: var(--industrial-orange);
    }

    /* ===== SIDEBAR ===== */
    .industrial-post-detail-sidebar {
        background: var(--industrial-surface);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        padding: 30px;
        position: sticky;
        top: 100px;
    }

    .industrial-sidebar-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--industrial-orange);
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* ===== RELATED POSTS ===== */
    .industrial-related-posts-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .industrial-related-post-item {
        display: flex;
        gap: 15px;
        background: var(--industrial-black);
        border: 1px solid var(--industrial-silver);
        border-radius: 8px;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        transition: all 300ms ease;
    }

    .industrial-related-post-item:hover {
        border-color: var(--industrial-orange);
        transform: translateX(5px);
        box-shadow: 0 8px 20px rgba(255, 107, 53, 0.1);
    }

    .industrial-related-post-thumbnail {
        width: 80px;
        height: 80px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .industrial-related-post-info {
        padding: 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
    }

    .industrial-related-post-date {
        font-size: 0.8rem;
        color: var(--industrial-blue);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }

    .industrial-related-post-title {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--industrial-text);
        margin: 0;
        line-height: 1.3;
    }

    /* ===== MORE UPDATES SECTION ===== */
    .industrial-more-updates-section {
        position: relative;
        padding: 80px 0;
        background: var(--industrial-surface);
        border-top: 1px solid var(--industrial-silver);
    }

    .industrial-more-updates-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .industrial-more-updates-subtitle {
        color: var(--industrial-blue);
        font-weight: 700;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .industrial-more-updates-heading {
        font-size: 2.2rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* ===== UPDATES GRID ===== */
    .industrial-more-updates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .industrial-update-card-item {
        background: var(--industrial-black);
        border: 1px solid var(--industrial-silver);
        border-radius: 12px;
        overflow: hidden;
        transition: all 400ms ease;
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
        display: flex;
        flex-direction: column;
        height: 100%;
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

    .industrial-update-card-item:hover {
        transform: translateY(-12px);
        border-color: var(--industrial-orange);
        box-shadow: 0 20px 50px rgba(255, 107, 53, 0.2);
    }

    .industrial-update-card-image-wrapper {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .industrial-update-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease;
    }

    .industrial-update-card-item:hover .industrial-update-card-image {
        transform: scale(1.1);
    }

    .industrial-update-card-content {
        padding: 25px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .industrial-update-card-date {
        color: var(--industrial-blue);
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    .industrial-update-card-title {
        font-size: 1.1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 12px;
        flex: 1;
        line-height: 1.4;
    }

    .industrial-update-card-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: var(--industrial-orange);
        font-weight: 700;
        font-size: 0.9rem;
        transition: all 300ms ease;
    }

    .industrial-update-card-item:hover .industrial-update-card-link {
        gap: 10px;
        color: var(--industrial-blue);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .industrial-post-detail-title {
            font-size: 2rem;
        }

        .industrial-post-detail-sidebar {
            top: 80px;
        }
    }

    @media (max-width: 991px) {
        .industrial-post-detail-wrapper {
            padding: 60px 0;
        }

        .industrial-post-detail-image-container {
            height: 350px;
        }

        .industrial-post-detail-sidebar {
            position: static;
            margin-top: 40px;
        }

        .industrial-more-updates-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .industrial-post-detail-hero {
            padding: 50px 0;
        }

        .industrial-post-detail-title {
            font-size: 1.5rem;
        }

        .industrial-post-detail-image-container {
            height: 250px;
            margin-bottom: 30px;
        }

        .industrial-post-detail-meta-header {
            grid-template-columns: 1fr;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        .industrial-post-detail-description {
            padding: 25px;
        }

        .industrial-post-detail-title-bar h3 {
            font-size: 1.3rem;
        }

        .industrial-more-updates-heading {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 576px) {
        .industrial-post-detail-title {
            font-size: 1.2rem;
        }

        .industrial-post-detail-meta-box {
            padding: 20px;
        }

        .industrial-post-detail-sidebar {
            padding: 20px;
        }

        .industrial-post-detail-description {
            padding: 20px;
            font-size: 0.95rem;
        }

        .industrial-more-updates-grid {
            grid-template-columns: 1fr;
        }

        .industrial-update-card-content {
            padding: 20px;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme6") ?>

<div class="industrial-post-detail-page">
    <!-- Hero Section -->
    <section class="industrial-post-detail-hero">
        <div class="container">
            <div class="industrial-post-detail-hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="industrial-post-detail-title">
                    <?= htmlspecialchars($post['title'] ?? 'Article'); ?>
                </h1>
                <div class="industrial-post-detail-breadcrumb">
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
    <section class="industrial-post-detail-wrapper">
        <div class="container industrial-post-detail-content-wrapper">
            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <?php
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/industrial-article-default.jpg' 
                        : base_url() . '/public/uploads/post_updates_images/' . htmlspecialchars($post['image']);
                    ?>
                    <div class="industrial-post-detail-image-container" data-aos="flip-left" data-aos-duration="1000">
                        <img src="<?= $img; ?>" alt="<?= htmlspecialchars($post['title'] ?? 'Article'); ?>" class="industrial-post-detail-image">
                    </div>

                    <!-- Meta Information -->
                    <div class="industrial-post-detail-meta-box" data-aos="fade-up">
                        <div class="industrial-post-detail-meta-header">
                            <div class="industrial-meta-item">
                                <div class="industrial-meta-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="industrial-meta-text">
                                    <h6>Author</h6>
                                    <p>Admin</p>
                                </div>
                            </div>

                            <div class="industrial-meta-item">
                                <div class="industrial-meta-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="industrial-meta-text">
                                    <h6>Published</h6>
                                    <p><?= date('d M Y', strtotime($post['created_at'] ?? 'now')); ?></p>
                                </div>
                            </div>

                            <?php if (!empty($post['specifications'])): ?>
                            <div class="industrial-meta-item">
                                <div class="industrial-meta-icon">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <div class="industrial-meta-text">
                                    <h6>Category</h6>
                                    <p><?= htmlspecialchars($post['specifications']); ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Property Details Grid -->
                        <?php if (!empty($post['key_point']) || !empty($post['price_info']) || !empty($post['text_on_image'])): ?>
                        <div class="industrial-post-property-details">
                            <?php if (!empty($post['key_point'])): ?>
                            <div class="industrial-detail-card">
                                <div class="industrial-detail-card-label">
                                    <i class="fas fa-check"></i>Key Points
                                </div>
                                <div class="industrial-detail-card-value">
                                    <?= htmlspecialchars($post['key_point']); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($post['price_info'])): ?>
                            <div class="industrial-detail-card">
                                <div class="industrial-detail-card-label">
                                    <i class="fas fa-tag"></i>Reference
                                </div>
                                <div class="industrial-detail-card-value">
                                    <?= htmlspecialchars($post['price_info']); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($post['text_on_image'])): ?>
                            <div class="industrial-detail-card">
                                <div class="industrial-detail-card-label">
                                    <i class="fas fa-star"></i>Status
                                </div>
                                <div class="industrial-detail-card-value">
                                    <?= htmlspecialchars($post['text_on_image']); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Post Title Bar -->
                    <div class="industrial-post-detail-title-bar" data-aos="fade-up">
                        <h3><?= htmlspecialchars($post['title'] ?? 'Article'); ?></h3>
                    </div>

                    <!-- Post Description -->
                    <div class="industrial-post-detail-description" data-aos="fade-up">
                        <?= $post['description'] ?? '<p>Article content not available</p>'; ?>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="industrial-post-detail-sidebar" data-aos="flip-right" data-aos-duration="1000">
                        <div class="industrial-sidebar-title">
                            <i class="fas fa-bookmark"></i>Related Articles
                        </div>

                        <div class="industrial-related-posts-list">
                            <?php
                            if (!empty($all_post)) {
                                foreach ($all_post as $related_post) {
                                    $related_img = empty($related_post['image']) 
                                        ? base_url() . '/public/assets/img/industrial-article-default.jpg' 
                                        : base_url() . '/public/uploads/post_updates_images/' . htmlspecialchars($related_post['image']);
                                    $related_url = base_url() . '/updates/' . htmlspecialchars($related_post['slug']);
                            ?>
                                <a href="<?= $related_url; ?>" class="industrial-related-post-item">
                                    <img src="<?= $related_img; ?>" 
                                         alt="<?= htmlspecialchars($related_post['title']); ?>" 
                                         class="industrial-related-post-thumbnail"
                                         loading="lazy">
                                    <div class="industrial-related-post-info">
                                        <span class="industrial-related-post-date">
                                            <?= date('d M Y', strtotime($related_post['created_at'] ?? 'now')); ?>
                                        </span>
                                        <h6 class="industrial-related-post-title">
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
                                        ? base_url() . '/public/assets/img/industrial-article-default.jpg' 
                                        : base_url() . '/public/uploads/custom_pages_image/' . htmlspecialchars($custom_upd['image']);
                                    $custom_url = base_url() . '/custom/' . htmlspecialchars($custom_upd['sub_menu_link']);
                            ?>
                                <a href="<?= $custom_url; ?>" class="industrial-related-post-item">
                                    <img src="<?= $custom_img; ?>" 
                                         alt="<?= htmlspecialchars($custom_upd['sub_menu']); ?>" 
                                         class="industrial-related-post-thumbnail"
                                         loading="lazy">
                                    <div class="industrial-related-post-info">
                                        <span class="industrial-related-post-date">
                                            <?= date('d M Y', strtotime($custom_upd['created_at'] ?? 'now')); ?>
                                        </span>
                                        <h6 class="industrial-related-post-title">
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
    <section class="industrial-more-updates-section">
        <div class="container">
            <div class="industrial-more-updates-title">
                <p class="industrial-more-updates-subtitle">
                    <i class="fas fa-fire me-2"></i>Discover More
                </p>
                <h2 class="industrial-more-updates-heading">More Articles</h2>
            </div>

            <div class="industrial-more-updates-grid">
                <?php
                $update_index = 0;
                foreach ($all_post as $update_post) {
                    if ($update_index >= 6) break;
                    $update_img = empty($update_post['image']) 
                        ? base_url() . '/public/assets/img/industrial-article-default.jpg' 
                        : base_url() . '/public/uploads/post_updates_images/' . htmlspecialchars($update_post['image']);
                    $update_url = base_url() . '/updates/' . htmlspecialchars($update_post['slug']);
                    $update_index++;
                ?>
                    <div class="industrial-update-card-item" data-aos="zoom-in-up" data-aos-delay="<?= ($update_index % 3) * 100; ?>">
                        <a href="<?= $update_url; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                            <div class="industrial-update-card-image-wrapper">
                                <img src="<?= $update_img; ?>" 
                                     alt="<?= htmlspecialchars($update_post['title']); ?>" 
                                     class="industrial-update-card-image"
                                     loading="lazy">
                            </div>
                            <div class="industrial-update-card-content">
                                <div class="industrial-update-card-date">
                                    <?= date('d M Y', strtotime($update_post['created_at'] ?? 'now')); ?>
                                </div>
                                <h5 class="industrial-update-card-title">
                                    <?= htmlspecialchars($update_post['title']); ?>
                                </h5>
                                <span class="industrial-update-card-link">
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
        $file_url = 'layout/' . htmlspecialchars($myurl['url_val']) . ".php";
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
<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* Ultra Modern Post Detail Page */
    
    /* Hero Section */
    .post-detail-hero {
        position: relative;
        padding: 20px 0;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
        overflow: hidden;
        /* min-height: 400px; */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .post-detail-hero::before {
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

    .post-detail-hero-content {
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

    .post-detail-title {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .post-detail-breadcrumb {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 14px;
        font-weight: 500;
    }

    .post-detail-breadcrumb a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .post-detail-breadcrumb a:hover {
        color: var(--theme_surface_color);
    }

    .post-detail-breadcrumb i {
        color: rgba(255, 255, 255, 0.7);
    }

    /* Main Content Area */
    .post-detail-wrapper {
        padding: 80px 0;
        background: var(--theme_mode_color);
        position: relative;
    }

    .post-detail-wrapper::before {
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

    .post-detail-content-wrapper {
        position: relative;
        z-index: 1;
    }

    /* Featured Image */
    .post-detail-image-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        margin-bottom: 50px;
        animation: slideInUp 0.6s ease-out;
    }

    .post-detail-image {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .post-detail-image-container:hover .post-detail-image {
        transform: scale(1.05);
    }

    /* Post Meta Information */
    .post-detail-meta-box {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px;
        margin-bottom: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border-top: 5px solid var(--primary-color);
    }

    .post-detail-meta-header {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 25px;
        padding-bottom: 25px;
        border-bottom: 2px solid #e9ecef;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 0 0 auto;
    }

    .meta-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 20px;
    }

    .meta-text h6 {
        font-size: 12px;
        color: #adb5bd;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 0 4px 0;
        font-weight: 600;
    }

    .meta-text p {
        font-size: 16px;
        color: var(--text-dark);
        font-weight: 700;
        margin: 0;
    }

    /* Property Details in Post */
    .post-property-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .detail-card {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
        padding: 20px;
        border-radius: 12px;
        border-left: 4px solid var(--primary-color);
    }

    .detail-card-label {
        font-size: 12px;
        color: #adb5bd;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .detail-card-value {
        font-size: 18px;
        color: var(--text-dark);
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Post Title Bar */
    .post-detail-title-bar {
        background: var(--theme_surface_color);
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border-top: 4px solid var(--primary-color);
    }

    .post-detail-title-bar h3 {
        font-size: 28px;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0;
    }

    /* Post Description */
    .post-detail-description {
        font-size: 16px;
        line-height: 1.8;
        color: #6c757d;
        margin-bottom: 50px;
    }

    .post-detail-description p {
        margin-bottom: 20px;
    }

    .post-detail-description strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    /* Post Badge */
    .post-detail-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: var(--theme_surface_color);
        padding: 12px 24px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    /* Sidebar - Related Posts */
    .post-detail-sidebar {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        height: fit-content;
        position: sticky;
        top: 20px;
    }

    .sidebar-title {
        font-size: 18px;
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

    /* Related Posts List */
    .related-posts-list {
        max-height: 700px;
        overflow-y: auto;
    }

    .related-post-item {
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

    .related-post-item:hover {
        background: var(--theme_surface_color);
        border-left-color: var(--primary-color);
        transform: translateX(8px);
    }

    .related-post-thumbnail {
        width: 70px;
        height: 70px;
        border-radius: 10px;
        object-fit: cover;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .related-post-item:hover .related-post-thumbnail {
        transform: scale(1.08);
    }

    .related-post-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .related-post-date {
        font-size: 11px;
        color: #adb5bd;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 4px;
    }

    .related-post-title {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-dark);
        line-height: 1.2;
        transition: color 0.3s ease;
    }

    .related-post-item:hover .related-post-title {
        color: var(--primary-color);
    }

    /* More Updates Section */
    .more-updates-section {
        padding: 80px 0;
        background: var(--theme_mode_color);
        position: relative;
    }

    .more-updates-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .more-updates-subtitle {
        font-size: 14px;
        color: #adb5bd;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }

    .more-updates-heading {
        font-size: 42px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* More Updates Grid */
    .more-updates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .update-card-item {
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
    }

    .update-card-item::before {
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

    .update-card-item:hover::before {
        transform: scaleX(1);
    }

    .update-card-item:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .update-card-image-wrapper {
        position: relative;
        height: 250px;
        overflow: hidden;
        background: #f0f0f0;
    }

    .update-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .update-card-item:hover .update-card-image {
        transform: scale(1.1);
    }

    .update-card-content {
        padding: 25px;
    }

    .update-card-date {
        font-size: 11px;
        color: var(--primary-color);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .update-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .update-card-link {
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
    }

    .update-card-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Custom Scrollbar */
    .related-posts-list::-webkit-scrollbar {
        width: 6px;
    }

    .related-posts-list::-webkit-scrollbar-track {
        background: transparent;
    }

    .related-posts-list::-webkit-scrollbar-thumb {
        background: #d9d9d9;
        border-radius: 10px;
    }

    .related-posts-list::-webkit-scrollbar-thumb:hover {
        background: var(--primary-color);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .post-detail-title {
            font-size: 38px;
        }
    }

    @media (max-width: 991px) {
        .post-detail-hero {
            padding: 60px 0;
            min-height: 300px;
        }

        .post-detail-title {
            font-size: 32px;
        }

        .post-detail-wrapper {
            padding: 60px 0;
        }

        .post-detail-sidebar {
            position: relative;
            top: auto;
            margin-top: 40px;
        }

        .more-updates-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .post-detail-hero {
            padding: 40px 0;
            min-height: 250px;
        }

        .post-detail-title {
            font-size: 26px;
        }

        .post-detail-meta-header {
            gap: 20px;
        }

        .meta-item {
            flex: 0 0 calc(50% - 10px);
        }

        .post-detail-wrapper {
            padding: 50px 0;
        }

        .more-updates-grid {
            grid-template-columns: 1fr;
        }

        .update-card-image-wrapper {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .post-detail-title {
            font-size: 22px;
        }

        .post-detail-meta-box {
            padding: 20px;
        }

        .meta-item {
            flex: 0 0 100%;
        }

        .post-detail-title-bar h3 {
            font-size: 22px;
        }

        .update-card-image-wrapper {
            height: 180px;
        }
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
<?= $this->endSection() ?>

<?= $this->section("contenttheme4") ?>
<div class="post-detail-page">
    <!-- Hero Section -->
    <section class="post-detail-hero">
        <div class="post-detail-hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="post-detail-title"><?= htmlspecialchars($post['title']); ?></h1>
            <div class="post-detail-breadcrumb">
                <a href="<?= base_url(); ?>">
                    <i class="fas fa-home me-1"></i>Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?= base_url(); ?>/update.html">Updates</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($post['slug']); ?></span>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="post-detail-wrapper">
        <div class="container post-detail-content-wrapper">
            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <?php
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/update.jpg' 
                        : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                    ?>
                    <div class="post-detail-image-container" data-aos="flip-left" data-aos-duration="1000">
                        <img src="<?= $img; ?>" alt="<?= htmlspecialchars($post['title']); ?>" class="post-detail-image">
                    </div>

                    <!-- Meta Information -->
                    <div class="post-detail-meta-box" data-aos="fade-up">
                        <div class="post-detail-meta-header">
                            <div class="meta-item">
                                <div class="meta-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="meta-text">
                                    <h6>Author</h6>
                                    <p>Admin</p>
                                </div>
                            </div>

                            <div class="meta-item">
                                <div class="meta-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="meta-text">
                                    <h6>Published</h6>
                                    <p><?= date('d M Y', strtotime($post['created_at'])); ?></p>
                                </div>
                            </div>

                            <?php if (!empty($post['specifications'])): ?>
                            <div class="meta-item">
                                <div class="meta-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="meta-text">
                                    <h6>Location</h6>
                                    <p><?= htmlspecialchars($post['specifications']); ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Property Details Grid -->
                        <?php if (!empty($post['key_point']) || !empty($post['price_info']) || !empty($post['text_on_image'])): ?>
                        <div class="post-property-details">
                            <?php if (!empty($post['key_point'])): ?>
                            <div class="detail-card">
                                <div class="detail-card-label">
                                    <i class="fas fa-check me-1"></i>Features
                                </div>
                                <div class="detail-card-value">
                                    <?= htmlspecialchars($post['key_point']); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($post['price_info'])): ?>
                            <div class="detail-card">
                                <div class="detail-card-label">
                                    <i class="fas fa-tag me-1"></i>Price
                                </div>
                                <div class="detail-card-value">
                                    ₹ <?= htmlspecialchars($post['price_info']); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($post['text_on_image'])): ?>
                            <div class="detail-card">
                                <div class="detail-card-label">
                                    <i class="fas fa-star me-1"></i>Status
                                </div>
                                <div class="detail-card-value">
                                    <?= htmlspecialchars($post['text_on_image']); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Post Title Bar -->
                    <div class="post-detail-title-bar" data-aos="fade-up">
                        <h3><?= htmlspecialchars($post['title']); ?></h3>
                    </div>

                    <!-- Post Description -->
                    <div class="post-detail-description" data-aos="fade-up">
                        <?= $post['description']; ?>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="post-detail-sidebar" data-aos="flip-right" data-aos-duration="1000">
                        <div class="sidebar-title">
                            <i class="fas fa-bookmark"></i>Related Posts
                        </div>

                        <div class="related-posts-list">
                            <?php
                            if (!empty($all_post)) {
                                foreach ($all_post as $related_post) {
                                    $related_img = empty($related_post['image']) 
                                        ? base_url() . '/public/assets/img/services3-img.png' 
                                        : base_url() . '/public/uploads/post_updates_images/' . $related_post['image'];
                                    $related_url = base_url() . '/updates/' . $related_post['slug'];
                            ?>
                                <a href="<?= $related_url; ?>" class="related-post-item">
                                    <img src="<?= $related_img; ?>" 
                                         alt="<?= htmlspecialchars($related_post['title']); ?>" 
                                         class="related-post-thumbnail"
                                         loading="lazy">
                                    <div class="related-post-info">
                                        <span class="related-post-date">
                                            <?= date('d M Y', strtotime($related_post['created_at'])); ?>
                                        </span>
                                        <h6 class="related-post-title">
                                            <?= htmlspecialchars(substr($related_post['title'], 0, 50)); ?>...
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
                                <a href="<?= $custom_url; ?>" class="related-post-item">
                                    <img src="<?= $custom_img; ?>" 
                                         alt="<?= htmlspecialchars($custom_upd['sub_menu']); ?>" 
                                         class="related-post-thumbnail"
                                         loading="lazy">
                                    <div class="related-post-info">
                                        <span class="related-post-date">
                                            <?= date('d M Y', strtotime($custom_upd['created_at'])); ?>
                                        </span>
                                        <h6 class="related-post-title">
                                            <?= htmlspecialchars(substr($custom_upd['sub_menu'], 0, 50)); ?>...
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
    <?php if($is_active_os) { ?>
    <section class="more-updates-section">
        <div class="container">
            <div class="more-updates-title">
                <p class="more-updates-subtitle">
                    <i class="fas fa-fire me-2"></i>Discover More
                </p>
                <h2 class="more-updates-heading">More Exciting Updates</h2>
            </div>

            <div class="more-updates-grid">
                <?php
                if (!empty($all_post) && count($all_post) > 0) {
                    foreach ($all_post as $index => $update_post) {
                        $update_img = empty($update_post['image']) 
                            ? base_url() . '/public/assets/img/services3-img.png' 
                            : base_url() . '/public/uploads/post_updates_images/' . $update_post['image'];
                        $update_url = base_url() . '/updates/' . $update_post['slug'];
                ?>
                    <div class="update-card-item" data-aos="zoom-in-up" data-aos-delay="<?= $index * 100; ?>">
                        <div class="update-card-image-wrapper">
                            <img src="<?= $update_img; ?>" 
                                 alt="<?= htmlspecialchars($update_post['title']); ?>" 
                                 class="update-card-image"
                                 loading="lazy">
                        </div>
                        <div class="update-card-content">
                            <div class="update-card-date">
                                <?= date('d M Y', strtotime($update_post['created_at'])); ?>
                            </div>
                            <h5 class="update-card-title">
                                <?= htmlspecialchars($update_post['title']); ?>
                            </h5>
                            <a href="<?= $update_url; ?>" class="update-card-link">
                                Read More
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                <?php
                    }
                } else {
                    echo '<div class="alert alert-info w-100">No more updates available.</div>';
                }
                ?>
            </div>
        </div>
    </section>
    <?php } ?>

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
<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>
<?= $this->endSection() ?>

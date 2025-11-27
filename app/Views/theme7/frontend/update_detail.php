<?= $this->extend("theme7/frontend/layout/master") ?>

<?= $this->section("customCss") ?>
<style>
    /* ============================================
       UPDATES/BLOG DETAIL PAGE - CUSTOM STYLES
       ============================================ */

    .updates-page-wrapper {
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
        position: relative;
        overflow: hidden;
    }

    .updates-page-wrapper::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(33, 128, 161, 0.08), transparent);
        border-radius: 50%;
        top: 100px;
        right: 5%;
        animation: float 8s ease-in-out infinite;
        z-index: 0;
    }

    .updates-page-wrapper::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(230, 126, 34, 0.08), transparent);
        border-radius: 50%;
        bottom: 200px;
        left: 10%;
        animation: float 10s ease-in-out infinite;
        animation-delay: 1s;
        z-index: 0;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(40px); }
    }

    /* Hero Banner */
    .updates-hero {
        position: relative;
        height: 300px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 0 60px;
        overflow: hidden;
    }

    .updates-hero::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -100px;
        right: -100px;
        animation: float 8s ease-in-out infinite;
    }

    .updates-hero-content {
        position: relative;
        z-index: 1;
        color: white;
    }

    .updates-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin: 0 0 20px 0;
        line-height: 1.1;
    }

    .updates-hero-breadcrumb {
        font-size: 14px;
        opacity: 0.95;
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .updates-hero-breadcrumb a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .updates-hero-breadcrumb a:hover {
        color: white;
        text-decoration: underline;
    }

    .updates-hero-breadcrumb span {
        color: rgba(255, 255, 255, 0.6);
    }

    /* Updates Details Section */
    .updates-details-wrapper {
        position: relative;
        z-index: 1;
        padding: 80px 0;
    }

    .updates-details-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* Main Content */
    .updates-content-section {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .updates-featured-image {
        position: relative;
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        height: 400px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .updates-featured-image:hover {
        box-shadow: 0 20px 40px rgba(33, 128, 161, 0.2);
        transform: translateY(-4px);
    }

    .updates-featured-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .updates-featured-image:hover img {
        transform: scale(1.05);
    }

    .updates-meta {
        display: flex;
        gap: 30px;
        padding: 20px 0;
        border-top: 1px solid var(--card-border);
        border-bottom: 1px solid var(--card-border);
        flex-wrap: wrap;
    }

    .updates-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: rgba(var(--text-primary), 0.7);
    }

    .updates-meta-item i {
        color: var(--primary-color);
        font-size: 16px;
    }

    .updates-meta-item strong {
        color: var(--text-primary);
    }

    .updates-title-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 32px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .updates-title-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .updates-title-card h2 {
        font-size: 36px;
        font-weight: 800;
        color: var(--text-primary);
        margin: 0;
        line-height: 1.2;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .updates-content-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 30px;
        transition: all var(--transition-normal) var(--ease-standard));
        line-height: 1.8;
    }

    .updates-content-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .updates-content-card p,
    .updates-content-card ul,
    .updates-content-card ol,
    .updates-content-card li,
    .updates-content-card a {
        font-size: 15px;
        color: rgba(var(--text-primary), 0.8);
        margin-bottom: 12px;
    }

    .updates-content-card a {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .updates-content-card a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    .updates-content-card ul,
    .updates-content-card ol {
        margin-left: 20px;
    }

    .updates-content-card li {
        margin-bottom: 8px;
    }

    /* Sidebar */
    .updates-sidebar {
        position: relative;
    }

    .updates-sidebar-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        transition: all var(--transition-normal) var(--ease-standard));
        max-height: 600px;
        overflow-y: auto;
    }

    .updates-sidebar-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .updates-sidebar-header {
        padding: 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .updates-sidebar-header h5 {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .updates-sidebar-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .updates-sidebar-item {
        border-bottom: 1px solid var(--card-border);
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .updates-sidebar-item:last-child {
        border-bottom: none;
    }

    .updates-sidebar-item:hover {
        background: linear-gradient(135deg, rgba(33, 128, 161, 0.05), transparent);
    }

    .updates-sidebar-link {
        display: flex;
        gap: 12px;
        padding: 16px 20px;
        color: var(--text-primary);
        text-decoration: none;
        font-size: 14px;
        transition: all var(--transition-normal) var(--ease-standard));
        align-items: center;
    }

    .updates-sidebar-link:hover,
    .updates-sidebar-link.active {
        color: var(--primary-color);
        padding-left: 24px;
        background: rgba(33, 128, 161, 0.05);
    }

    .updates-sidebar-thumbnail {
        width: 50px;
        height: 50px;
        border-radius: var(--border-radius);
        object-fit: cover;
        flex-shrink: 0;
    }

    .updates-sidebar-text h6 {
        font-size: 13px;
        font-weight: 700;
        margin: 0 0 4px 0;
        line-height: 1.3;
    }

    .updates-sidebar-text p {
        font-size: 12px;
        color: rgba(var(--text-primary), 0.6);
        margin: 0;
    }

    /* More Updates Grid */
    .more-updates-section {
        position: relative;
        z-index: 1;
        padding: 80px 0;
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
    }

    .more-updates-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .more-updates-header h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 10px;
        color: var(--text-primary);
    }

    .more-updates-header h2 span {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .updates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .update-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        transition: all var(--transition-normal) var(--ease-standard));
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .update-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(33, 128, 161, 0.15);
    }

    .update-card-image {
        position: relative;
        width: 100%;
        height: 240px;
        background: var(--section-background);
        overflow: hidden;
    }

    .update-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .update-card:hover .update-card-image img {
        transform: scale(1.1);
    }

    .update-card-date {
        position: absolute;
        top: 16px;
        right: 16px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 8px 16px;
        border-radius: var(--border-radius);
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        z-index: 1;
    }

    .update-card-content {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .update-card-title {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 16px;
        line-height: 1.4;
        flex-grow: 1;
    }

    .update-card-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-radius: var(--border-radius);
        transition: all var(--transition-normal) var(--ease-standard));
        border: none;
        cursor: pointer;
        width: 100%;
        justify-content: center;
    }

    .update-card-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .updates-details-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .updates-hero h1 {
            font-size: 36px;
        }

        .updates-title-card h2 {
            font-size: 28px;
        }

        .more-updates-header h2 {
            font-size: 32px;
        }

        .updates-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }
    }

    @media (max-width: 768px) {
        .updates-hero {
            height: 250px;
            padding: 0 40px;
        }

        .updates-hero h1 {
            font-size: 28px;
        }

        .updates-details-wrapper {
            padding: 60px 0;
        }

        .updates-featured-image {
            height: 300px;
        }

        .updates-sidebar-card {
            max-height: 100%;
        }

        .more-updates-section {
            padding: 60px 0;
        }

        .more-updates-header h2 {
            font-size: 28px;
        }

        .updates-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .updates-hero {
            height: 200px;
            padding: 0 20px;
        }

        .updates-hero h1 {
            font-size: 20px;
        }

        .updates-hero-breadcrumb {
            font-size: 12px;
            flex-wrap: wrap;
        }

        .updates-title-card h2 {
            font-size: 20px;
        }

        .updates-title-card {
            padding: 20px 16px;
        }

        .updates-content-card {
            padding: 20px 16px;
        }

        .updates-meta {
            flex-direction: column;
            gap: 12px;
        }

        .more-updates-header h2 {
            font-size: 20px;
        }

        .updates-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .update-card-image {
            height: 200px;
        }

        .updates-sidebar-link {
            padding: 12px 16px;
        }

        .updates-sidebar-thumbnail {
            width: 40px;
            height: 40px;
        }
    }

    /* Scrollbar Styling */
    .updates-sidebar-card::-webkit-scrollbar {
        width: 6px;
    }

    .updates-sidebar-card::-webkit-scrollbar-track {
        background: var(--section-background);
    }

    .updates-sidebar-card::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 3px;
    }

    .updates-sidebar-card::-webkit-scrollbar-thumb:hover {
        background: var(--accent-color);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme7") ?>
<div class="updates-page-wrapper">
    
    <!-- Hero Banner -->
    <div class="updates-hero" data-aos="fade-down" data-aos-duration="800">
        <div class="updates-hero-content">
            <h1><?= htmlspecialchars($post['title'] ?? 'Update') ?></h1>
            <div class="updates-hero-breadcrumb">
                <a href="<?= base_url('/') ?>">Home</a>
                <span>/</span>
                <a href="<?= base_url('/updates') ?>">Updates</a>
                <span>/</span>
                <span><?= htmlspecialchars($post['slug'] ?? 'Update') ?></span>
            </div>
        </div>
    </div>

    <!-- Updates Details Section -->
    <div class="container updates-details-wrapper">
        <div class="updates-details-grid">
            
            <!-- Main Content (Left) -->
            <div class="updates-content-section" data-aos="fade-right" data-aos-duration="800">
                
                <!-- Featured Image -->
                <div class="updates-featured-image">
                    <?php
                    $featured_img = !empty($post['image']) 
                        ? base_url()."/public/uploads/post_updates_images/" . $post['image'] 
                        : base_url()."/public/assets/img/default-update.jpg";
                    ?>
                    <img src="<?= htmlspecialchars($featured_img) ?>" 
                         alt="<?= htmlspecialchars($post['title'] ?? 'Update') ?>"
                         loading="lazy">
                </div>

                <!-- Meta Information -->
                <div class="updates-meta">
                    <div class="updates-meta-item">
                        <i class="fa-solid fa-calendar"></i>
                        <strong><?= date("d M, Y", strtotime($post['created_at'])) ?></strong>
                    </div>
                    <div class="updates-meta-item">
                        <i class="fa-solid fa-user"></i>
                        <strong>By Admin</strong>
                    </div>
                    <div class="updates-meta-item">
                        <i class="fa-solid fa-folder"></i>
                        <strong>Updates</strong>
                    </div>
                </div>

                <!-- Title Card -->
                <div class="updates-title-card">
                    <h2><?= htmlspecialchars($post['title'] ?? 'Untitled') ?></h2>
                </div>

                <!-- Content Card -->
                <div class="updates-content-card">
                    <?= $post['description'] ?? '<p>No content available.</p>' ?>
                </div>
            </div>

            <!-- Sidebar (Right) -->
            <div class="updates-sidebar" data-aos="fade-left" data-aos-duration="800">
                <div class="updates-sidebar-card">
                    <div class="updates-sidebar-header">
                        <h5>All Updates</h5>
                    </div>
                    <ul class="updates-sidebar-list">
                        
                        <!-- Regular Updates -->
                        <?php if (!empty($all_post)): ?>
                            <?php foreach ($all_post as $recent_post): ?>
                                <?php $post_url = base_url().'/updates/'.$recent_post['slug']; ?>
                                <li class="updates-sidebar-item">
                                    <a href="<?= $post_url ?>" 
                                       class="updates-sidebar-link <?= ($recent_post['id'] == $post['id']) ? 'active' : '' ?>">
                                        <?php
                                        $thumb_img = !empty($recent_post['image']) 
                                            ? base_url()."/public/uploads/post_updates_images/" . $recent_post['image'] 
                                            : base_url()."/public/assets/img/default-update.jpg";
                                        ?>
                                        <img src="<?= htmlspecialchars($thumb_img) ?>" 
                                             alt="<?= htmlspecialchars($recent_post['title']) ?>"
                                             class="updates-sidebar-thumbnail"
                                             loading="lazy">
                                        <div class="updates-sidebar-text">
                                            <h6><?= htmlspecialchars(substr($recent_post['title'], 0, 50)) ?></h6>
                                            <p><?= date("d M Y", strtotime($recent_post['created_at'])) ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- Custom Updates -->
                        <?php if (!empty($custom_updates)): ?>
                            <?php foreach ($custom_updates as $custom_post): ?>
                                <?php $custom_url = base_url().'/custom/'.$custom_post['sub_menu_link']; ?>
                                <li class="updates-sidebar-item">
                                    <a href="<?= $custom_url ?>" class="updates-sidebar-link">
                                        <?php
                                        $custom_thumb = !empty($custom_post['image']) 
                                            ? base_url()."/public/uploads/custom_pages_image/" . $custom_post['image'] 
                                            : base_url()."/public/assets/img/default-update.jpg";
                                        ?>
                                        <img src="<?= htmlspecialchars($custom_thumb) ?>" 
                                             alt="<?= htmlspecialchars($custom_post['sub_menu']) ?>"
                                             class="updates-sidebar-thumbnail"
                                             loading="lazy">
                                        <div class="updates-sidebar-text">
                                            <h6><?= htmlspecialchars(substr($custom_post['sub_menu'], 0, 50)) ?></h6>
                                            <p><?= date("d M Y", strtotime($custom_post['created_at'])) ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- More Updates Grid Section -->
    <?php if (!empty($all_post) && count($all_post) > 0): ?>
    <div class="more-updates-section">
        <div class="container">
            <div class="more-updates-header" data-aos="fade-up" data-aos-duration="800">
                <h2><span>Explore More Updates</span></h2>
                <p style="font-size: 16px; color: rgba(var(--text-primary), 0.7); margin-top: 12px;">
                    Stay informed with our latest news and updates
                </p>
            </div>

            <div class="updates-grid">
                <?php foreach ($all_post as $index => $recent_update): ?>
                    <?php
                    $update_img = !empty($recent_update['image']) 
                        ? base_url()."/public/uploads/post_updates_images/" . $recent_update['image'] 
                        : base_url()."/public/assets/img/default-update.jpg";
                    $update_url = base_url().'/updates/' . $recent_update['slug'];
                    ?>
                    <div class="update-card" 
                         data-aos="fade-up" 
                         data-aos-delay="<?= $index * 100 ?>">
                        <div class="update-card-image">
                            <img src="<?= htmlspecialchars($update_img) ?>" 
                                 alt="<?= htmlspecialchars($recent_update['title']) ?>"
                                 loading="lazy">
                            <div class="update-card-date">
                                <?= date('d M Y', strtotime($recent_update['created_at'])) ?>
                            </div>
                        </div>
                        <div class="update-card-content">
                            <h3 class="update-card-title">
                                <?= htmlspecialchars($recent_update['title']) ?>
                            </h3>
                            <a href="<?= $update_url ?>" class="update-card-btn">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Additional Sections from sort_order -->
    <?php
    if (!empty($sort_order)) {
        foreach ($sort_order as $section) {
            $file_path = 'layout/' . $section['url_val'] . '.php';
            if (file_exists(APPPATH . 'Views/theme7/frontend/' . $file_path)) {
                include(APPPATH . 'Views/theme7/frontend/' . $file_path);
            }
        }
    }
    ?>
</div>
<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 120
            });
        }

        // Set active update in sidebar
        const currentUrl = window.location.href;
        const sidebarLinks = document.querySelectorAll('.updates-sidebar-link');
        sidebarLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active');
                link.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });

        // Analytics tracking
        const readMoreButtons = document.querySelectorAll('.update-card-btn');
        readMoreButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    const updateTitle = this.closest('.update-card').querySelector('.update-card-title')?.textContent || 'Update';
                    gtag('event', 'update_view', {
                        'event_category': 'engagement',
                        'event_label': updateTitle
                    });
                }
            });
        });

        // Share functionality (optional)
        const shareBtn = document.querySelector('.update-share-btn');
        if (shareBtn) {
            shareBtn.addEventListener('click', function() {
                if (navigator.share) {
                    navigator.share({
                        title: document.querySelector('.updates-title-card h2')?.textContent,
                        text: 'Check out this update!',
                        url: window.location.href
                    }).catch(err => console.log('Share error:', err));
                }
            });
        }
    });
</script>
<?= $this->endSection() ?>

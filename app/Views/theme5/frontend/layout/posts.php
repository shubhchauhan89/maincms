<?php
if (!empty($posts)) {
    
    foreach ($posts as $p) {
       if (!isset($p['posts']) || empty($p['posts'])) {
            continue;
        }
        
        $section_id = $p['section_id'] ?? null;
        $datasubmenu = $p['sub_menu_name'] ?? "Health Insights";
        
        // ✅ Get the actual posts array
        $posts_array = $p['posts'];
        ?>

        <style>
    /* ===== INNOVATIVE MEDICAL ARTICLES SECTION ===== */
    
    .medical-articles-innovative-wrapper {
        position: relative;
        padding: 120px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated gradient background */
    .medical-articles-gradient-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.08;
        pointer-events: none;
        background: linear-gradient(135deg, 
            var(--medical-blue, #003d7a) 0%, 
            var(--medical-teal, #008080) 50%, 
            var(--medical-blue, #003d7a) 100%);
        animation: gradient-shift 15s ease-in-out infinite;
    }

    @keyframes gradient-shift {
        0% { background-position: 0% center; }
        50% { background-position: 100% center; }
        100% { background-position: 0% center; }
    }

    /* Header with decorative line */
    .medical-articles-header {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-bottom: 100px;
    }

    .medical-articles-header::before {
        content: '';
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        border-radius: 2px;
    }

    .medical-articles-title {
        font-size: 56px;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -2px;
        color: var(--text-dark);
    }

    .medical-articles-title span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .medical-articles-description {
        font-size: 16px;
        color: #6c757d;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Horizontal scrolling articles */
    .medical-articles-horizontal-container {
        position: relative;
        z-index: 1;
        margin-bottom: 80px;
    }

    .medical-articles-scroll-label {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--medical-teal, #008080);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .medical-articles-scroll-label::before {
        content: '';
        width: 20px;
        height: 2px;
        background: var(--medical-teal, #008080);
    }

    .medical-articles-horizontal-scroll {
        display: flex;
        gap: 25px;
        overflow-x: auto;
        padding-bottom: 20px;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }

    .medical-articles-horizontal-scroll::-webkit-scrollbar {
        height: 4px;
    }

    .medical-articles-horizontal-scroll::-webkit-scrollbar-track {
        background: transparent;
    }

    .medical-articles-horizontal-scroll::-webkit-scrollbar-thumb {
        background: var(--medical-teal, #008080);
        border-radius: 2px;
    }

    /* Horizontal Article Card */
    .medical-article-horizontal-card {
        flex: 0 0 380px;
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0, 128, 128, 0.1);
        cursor: pointer;
    }

    .medical-article-horizontal-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 30px 70px rgba(0, 128, 128, 0.15);
        border-color: rgba(0, 128, 128, 0.2);
    }

    .medical-article-h-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 200px;
        background: linear-gradient(135deg, #f0f4f8, #e8f2f7);
    }

    .medical-article-h-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-article-horizontal-card:hover .medical-article-h-image {
        transform: scale(1.15) rotate(2deg);
    }

    .medical-article-h-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        color: white;
        padding: 6px 12px;
        border-radius: 50px;
        font-size: 9px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 12px rgba(0, 128, 128, 0.3);
    }

    .medical-article-h-content {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .medical-article-h-date {
        font-size: 11px;
        color: var(--medical-teal, #008080);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    .medical-article-h-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 10px;
        line-height: 1.4;
        transition: color 0.3s ease;
        flex-grow: 1;
    }

    .medical-article-horizontal-card:hover .medical-article-h-title {
        color: var(--medical-teal, #008080);
    }

    .medical-article-h-specialty {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #6c757d;
        margin-bottom: 12px;
    }

    .medical-article-h-specialty i {
        color: var(--medical-blue, #003d7a);
    }

    /* Featured Large Card */
    .medical-articles-featured-section {
        position: relative;
        z-index: 1;
        margin-bottom: 80px;
    }

    .medical-articles-featured-label {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--medical-teal, #008080);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .medical-articles-featured-label::before {
        content: '';
        width: 20px;
        height: 2px;
        background: var(--medical-teal, #008080);
    }

    .medical-articles-featured-card {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 128, 128, 0.2);
        display: grid;
        grid-template-columns: 1fr 1fr;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
    }

    .medical-articles-featured-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 80px rgba(0, 128, 128, 0.3);
    }

    .medical-articles-featured-image {
        position: relative;
        overflow: hidden;
        height: 350px;
    }

    .medical-articles-featured-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-articles-featured-card:hover .medical-articles-featured-image img {
        transform: scale(1.1);
    }

    .medical-articles-featured-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 61, 122, 0.3), transparent);
        z-index: 2;
    }

    .medical-articles-featured-content {
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .medical-articles-featured-date {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.8;
        margin-bottom: 15px;
    }

    .medical-articles-featured-title {
        font-size: 32px;
        font-weight: 900;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .medical-articles-featured-excerpt {
        font-size: 15px;
        line-height: 1.6;
        opacity: 0.9;
        margin-bottom: 30px;
    }

    .medical-articles-featured-feature {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .medical-articles-featured-feature i {
        color: var(--trust-green, #28a745);
    }

    .medical-articles-featured-btn {
        width: fit-content;
        padding: 14px 32px;
        background: white;
        color: var(--medical-teal, #008080);
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .medical-articles-featured-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
    }

    /* Grid Articles Section */
    .medical-articles-grid-section {
        position: relative;
        z-index: 1;
    }

    .medical-articles-grid-label {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--medical-teal, #008080);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .medical-articles-grid-label::before {
        content: '';
        width: 20px;
        height: 2px;
        background: var(--medical-teal, #008080);
    }

    .medical-articles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .medical-article-grid-card {
        background: var(--theme_surface_color);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        border: 1px solid rgba(0, 128, 128, 0.1);
    }

    .medical-article-grid-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.5s ease;
        transform-origin: left;
    }

    .medical-article-grid-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0, 128, 128, 0.15);
    }

    .medical-article-grid-card:hover::before {
        transform: scaleX(1);
    }

    .medical-article-grid-image {
        position: relative;
        height: 180px;
        overflow: hidden;
    }

    .medical-article-grid-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .medical-article-grid-card:hover .medical-article-grid-image img {
        transform: scale(1.1);
    }

    .medical-article-grid-content {
        padding: 20px;
    }

    .medical-article-grid-date {
        font-size: 10px;
        color: var(--medical-teal, #008080);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
    }

    .medical-article-grid-title {
        font-size: 15px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 10px;
        line-height: 1.4;
        transition: color 0.3s ease;
    }

    .medical-article-grid-card:hover .medical-article-grid-title {
        color: var(--medical-teal, #008080);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-articles-title {
            font-size: 42px;
        }

        .medical-articles-featured-card {
            grid-template-columns: 1fr;
        }

        .medical-articles-featured-image {
            height: 250px;
        }

        .medical-articles-featured-content {
            padding: 40px 30px;
        }
    }

    @media (max-width: 991px) {
        .medical-articles-innovative-wrapper {
            padding: 80px 0;
        }

        .medical-articles-title {
            font-size: 36px;
        }

        .medical-article-horizontal-card {
            flex: 0 0 320px;
        }

        .medical-articles-featured-content {
            padding: 30px;
        }

        .medical-articles-featured-title {
            font-size: 24px;
        }
    }

    @media (max-width: 768px) {
        .medical-articles-innovative-wrapper {
            padding: 60px 0;
        }

        .medical-articles-title {
            font-size: 32px;
        }

        .medical-articles-horizontal-scroll {
            gap: 15px;
        }

        .medical-article-horizontal-card {
            flex: 0 0 90%;
        }

        .medical-articles-featured-card {
            grid-template-columns: 1fr;
        }

        .medical-articles-featured-image {
            height: 200px;
        }

        .medical-articles-featured-content {
            padding: 25px;
        }

        .medical-articles-featured-title {
            font-size: 20px;
        }

        .medical-articles-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .medical-articles-title {
            font-size: 28px;
        }

        .medical-articles-grid {
            grid-template-columns: 1fr;
        }

        .medical-articles-featured-content {
            padding: 20px;
        }

        .medical-articles-featured-excerpt {
            display: none;
        }
    }

    /* Animations */
    .medical-article-animate {
        opacity: 0;
        animation: article-fadeIn 0.6s ease-out forwards;
    }

    @keyframes article-fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-articles-featured-card {
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, var(--medical-blue, #003d7a) 100%);
    }

    body.theme-dark .medical-article-horizontal-card,
    body.theme-dark .medical-article-grid-card {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }
</style>

<!-- ===== INNOVATIVE MEDICAL ARTICLES SECTION ===== -->
<section class="medical-articles-innovative-wrapper">
    <!-- Gradient background -->
    <div class="medical-articles-gradient-bg"></div>

    <div class="container">
        <!-- Header -->
        <div class="medical-articles-header" data-aos="fade-down" data-aos-duration="800">
            <h2 class="medical-articles-title">
                <?= htmlspecialchars($datasubmenu) ?>
            </h2>
            <p class="medical-articles-description">
                Stay updated with the latest healthcare insights, medical breakthroughs, and wellness tips from our expert team.
            </p>
        </div>

        <!-- Horizontal Scrolling Section -->
        <div class="medical-articles-horizontal-container">
            <div class="medical-articles-scroll-label">
                <i class="fas fa-book-medical"></i> Featured Articles
            </div>
            <div class="medical-articles-horizontal-scroll">
                <?php
                $cardIndex = 0;
                foreach ($posts_array as $post) {
                    // ✅ FIX: Check if slug exists before using
                    if (!isset($post['slug'])) {
                        continue;
                    }
                    
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/medical-article-default.png' 
                        : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                    $url = base_url() . '/updates/' . $post['slug'];
                    $cardIndex++;
                    
                    if ($cardIndex > 6) break; // Show first 6
                ?>
                    <div class="medical-article-horizontal-card medical-article-animate" 
                         onclick="window.location.href='<?= $url; ?>'">
                        <div class="medical-article-h-image-wrapper">
                            <img src="<?= $img; ?>" 
                                 alt="<?= htmlspecialchars($post['title'] ?? 'Article'); ?>" 
                                 class="medical-article-h-image"
                                 loading="lazy">
                            <?php if (!empty($post['text_on_image'])): ?>
                                <div class="medical-article-h-badge">
                                    <?= htmlspecialchars($post['text_on_image']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="medical-article-h-content">
                            <span class="medical-article-h-date">
                                <?= isset($post['created_at']) ? date('d M Y', strtotime($post['created_at'])) : 'N/A'; ?>
                            </span>
                            <h3 class="medical-article-h-title">
                                <?= htmlspecialchars($post['title'] ?? 'Untitled'); ?>
                            </h3>
                            <?php if (!empty($post['specifications'])): ?>
                                <div class="medical-article-h-specialty">
                                    <i class="fas fa-stethoscope"></i>
                                    <span><?= htmlspecialchars(substr($post['specifications'], 0, 30)); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Featured Large Article -->
        <?php 
        // ✅ FIX: Use $posts_array instead of $p
        if (!empty($posts_array) && isset($posts_array)): 
            $featured = $posts_array;
            
            // ✅ FIX: Check if slug exists
            if (isset($featured['slug'])):
                $featuredImg = empty($featured['image']) 
                    ? base_url() . '/public/assets/img/medical-article-default.png' 
                    : base_url() . '/public/uploads/post_updates_images/' . $featured['image'];
                $featuredUrl = base_url() . '/updates/' . $featured['slug'];
        ?>
        <div class="medical-articles-featured-section">
            <div class="medical-articles-featured-label">
                <i class="fas fa-fire"></i> Editor's Pick
            </div>
            <div class="medical-articles-featured-card" onclick="window.location.href='<?= $featuredUrl; ?>'">
                <div class="medical-articles-featured-image">
                    <img src="<?= $featuredImg; ?>" 
                         alt="<?= htmlspecialchars($featured['title'] ?? 'Featured'); ?>" 
                         loading="lazy">
                </div>
                <div class="medical-articles-featured-content">
                    <div class="medical-articles-featured-date">
                        <i class="fas fa-calendar me-1"></i><?= isset($featured['created_at']) ? date('d M Y', strtotime($featured['created_at'])) : 'N/A'; ?>
                    </div>
                    <h3 class="medical-articles-featured-title">
                        <?= htmlspecialchars($featured['title'] ?? 'Untitled'); ?>
                    </h3>
                    <p class="medical-articles-featured-excerpt">
                        <?= htmlspecialchars(substr($featured['title'] ?? '', 0, 120)); ?>...
                    </p>
                    <?php if (!empty($featured['key_point'])): ?>
                        <div class="medical-articles-featured-feature">
                            <i class="fas fa-check-circle"></i>
                            <span><?= htmlspecialchars($featured['key_point']); ?></span>
                        </div>
                    <?php endif; ?>
                    <button class="medical-articles-featured-btn">
                        <i class="fas fa-arrow-right me-2"></i>Read Article
                    </button>
                </div>
            </div>
        </div>
        <?php endif; endif; ?>

        <!-- Grid Articles Section -->
        <div class="medical-articles-grid-section">
            <div class="medical-articles-grid-label">
                <i class="fas fa-th"></i> More Articles
            </div>
            <div class="medical-articles-grid">
                <?php
                $cardIndex = 0;
                foreach ($posts_array as $post) {
                    if ($cardIndex === 0) { 
                        $cardIndex++;
                        continue; // Skip first (already shown as featured)
                    }
                    
                    // ✅ FIX: Check if slug exists
                    if (!isset($post['slug'])) {
                        continue;
                    }
                    
                    $img = empty($post['image']) 
                        ? base_url() . '/public/assets/img/medical-article-default.png' 
                        : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                    $url = base_url() . '/updates/' . $post['slug'];
                    $cardIndex++;
                ?>
                    <div class="medical-article-grid-card medical-article-animate" 
                         onclick="window.location.href='<?= $url; ?>'">
                        <div class="medical-article-grid-image">
                            <img src="<?= $img; ?>" 
                                 alt="<?= htmlspecialchars($post['title'] ?? 'Article'); ?>" 
                                 loading="lazy">
                        </div>
                        <div class="medical-article-grid-content">
                            <div class="medical-article-grid-date">
                                <?= isset($post['created_at']) ? date('d M Y', strtotime($post['created_at'])) : 'N/A'; ?>
                            </div>
                            <h3 class="medical-article-grid-title">
                                <?= htmlspecialchars(substr($post['title'] ?? 'Untitled', 0, 50)); ?>
                            </h3>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- View All Link -->
        <div style="text-align: center; margin-top: 60px; position: relative; z-index: 1;">
            <a href="<?= base_url() . '/update.html' ?>" target="_blank" style="display: inline-block; padding: 16px 40px; background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%); color: white; border-radius: 12px; font-weight: 700; text-decoration: none; transition: all 0.3s ease; border: none;">
                <i class="fas fa-arrow-right me-2"></i>Explore All Articles
            </a>
        </div>
    </div>
</section>

<script>
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const articles = document.querySelectorAll('.medical-article-animate');
        articles.forEach((article, index) => {
            article.style.animationDelay = (index * 100) + 'ms';
        });
    });
</script>

<?php 
    }
}
?>

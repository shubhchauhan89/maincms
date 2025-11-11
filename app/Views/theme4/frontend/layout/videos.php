<style>
    /* Ultra Modern Videos Section */
    
    /* Videos Wrapper */
    .videos-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .videos-bg-pattern {
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

    /* Videos Content */
    .videos-content {
        position: relative;
        z-index: 1;
    }

    /* Section Title */
    .videos-section-title {
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

    .videos-subtitle {
        font-size: 16px;
        color: #6c757d;
        text-align: center;
        margin-bottom: 60px;
    }

    /* Videos Grid */
    .videos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    /* Video Card */
    .video-card {
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        animation: slideInUp 0.6s ease-out forwards;
    }

    .video-card:nth-child(1) { animation-delay: 0.05s; }
    .video-card:nth-child(2) { animation-delay: 0.1s; }
    .video-card:nth-child(3) { animation-delay: 0.15s; }
    .video-card:nth-child(4) { animation-delay: 0.2s; }
    .video-card:nth-child(5) { animation-delay: 0.25s; }
    .video-card:nth-child(6) { animation-delay: 0.3s; }
    .video-card:nth-child(n+7) { animation-delay: 0.35s; }

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

    .video-card::before {
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

    .video-card:hover::before {
        transform: scaleX(1);
    }

    .video-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    /* Thumbnail Container */
    .video-thumbnail-wrapper {
        position: relative;
        overflow: hidden;
        height: 220px;
        background: linear-gradient(135deg, #f0f0f0, #e0e0e0);
    }

    .video-thumbnail {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        display: block;
    }

    .video-card:hover .video-thumbnail {
        transform: scale(1.15) rotate(2deg);
    }

    /* Play Button Overlay */
    .video-play-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.5) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 2;
    }

    .video-card:hover .video-play-overlay {
        opacity: 1;
    }

    .video-play-button {
        width: 80px;
        height: 80px;
        background: var(--theme_surface_color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 32px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .video-card:hover .video-play-button {
        transform: scale(1.1);
        background: var(--accent-color);
        color: var(--theme_surface_color);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    /* Duration Badge */
    .video-duration {
        position: absolute;
        bottom: 12px;
        right: 12px;
        background: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 700;
        z-index: 3;
    }

    /* Video Info */
    .video-info {
        padding: 25px;
    }

    .video-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        transition: color 0.3s ease;
    }

    .video-card:hover .video-title {
        color: var(--primary-color);
    }

    .video-stats {
        display: flex;
        gap: 12px;
        margin-top: 12px;
        font-size: 12px;
        color: #adb5bd;
    }

    .video-stats i {
        color: var(--primary-color);
    }

    /* Video Player Modal */
    .video-player-modal {
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

    .video-player-modal.active {
        opacity: 1;
        visibility: visible;
    }

    .video-player-container {
        position: relative;
        width: 90%;
        max-width: 1000px;
        aspect-ratio: 16 / 9;
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

    .video-player-iframe {
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 10px;
    }

    .video-player-close {
        position: absolute;
        top: -45px;
        right: 0;
        width: 45px;
        height: 45px;
        background: var(--theme_surface_color);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--primary-color);
        transition: all 0.3s ease;
    }

    .video-player-close:hover {
        transform: scale(1.1);
        background: var(--primary-color);
        color: white;
    }

    /* Category Filter */
    .video-filter-wrapper {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .video-filter-btn {
        padding: 10px 24px;
        background: var(--theme_surface_color);
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

    .video-filter-btn:hover,
    .video-filter-btn.active {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Load More Button */
    .videos-load-more {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .videos-load-more-btn {
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

    .videos-load-more-btn::before {
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

    .videos-load-more-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .videos-load-more-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .videos-section-title {
            font-size: 42px;
        }

        .videos-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
    }

    @media (max-width: 991px) {
        .videos-wrapper {
            padding: 80px 0;
        }

        .videos-section-title {
            font-size: 36px;
        }

        .videos-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .video-thumbnail-wrapper {
            height: 200px;
        }
    }

    @media (max-width: 768px) {
        .videos-wrapper {
            padding: 60px 0;
        }

        .videos-section-title {
            font-size: 32px;
        }

        .videos-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .video-thumbnail-wrapper {
            height: 180px;
        }

        .video-play-button {
            width: 60px;
            height: 60px;
            font-size: 24px;
        }

        .video-player-close {
            top: -40px;
            width: 40px;
            height: 40px;
        }

        .video-filter-wrapper {
            gap: 8px;
        }

        .video-filter-btn {
            padding: 8px 16px;
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .videos-section-title {
            font-size: 28px;
        }

        .videos-grid {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }

        .video-thumbnail-wrapper {
            height: 150px;
        }

        .video-title {
            font-size: 14px;
        }

        .video-info {
            padding: 15px;
        }

        .video-play-button {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .video-player-container {
            width: 95%;
        }

        .video-player-iframe {
            border-radius: 8px;
        }
    }
</style>

<?php
if (!empty($videoes)) {
    $heading = ""; 
    foreach ($videoes as $vid) {
        $heading = $vid['heading'];
        if ($vid['section_id'] == $myurl['section_id']) {
            if (isset($vid['section_id'])) {
                unset($vid['section_id']);
                unset($vid['heading']);
            }
            if (isset($vid['sub_menu_name'])) {
                $datasubmenu = $vid['sub_menu_name'];
                unset($vid['sub_menu_name']);
            } else {
                $datasubmenu = "Our Videos";
            }
?>

<section class="videos-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="videos-bg-pattern"></div>

    <div class="container videos-content">
        <!-- Section Title -->
        <h2 class="videos-section-title"><?= htmlspecialchars($datasubmenu); ?></h2>
        <p class="videos-subtitle">Watch our latest property tours and testimonials</p>

        <!-- Videos Grid -->
        <div class="videos-grid">
            <?php
            $videoIndex = 0;
            foreach ($vid as $video) {
                $img = !empty($video['thumbnail_images']) 
                    ? base_url() . '/public/uploads/thumbnail_images/' . $video['thumbnail_images'] 
                    : base_url() . '/public/assets/img/video-thumb.jpg';
                
                // Extract YouTube video ID
                $videoUrl = $video['url'];
                if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|embed)\/|.*[?&]v=)|youtu\.be\/)([^"&?\s]{11})/', $videoUrl, $matches)) {
                    $youtubeId = $matches[1];
                } else {
                    $youtubeId = '';
                }

                $videoIndex++;
            ?>
                <div class="video-card" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="<?= ($videoIndex % 3) * 100; ?>"
                     onclick="playVideo('<?= $youtubeId; ?>')">
                    
                    <div class="video-thumbnail-wrapper">
                        <img src="<?= $img; ?>" 
                             alt="<?= htmlspecialchars($video['title']); ?>" 
                             class="video-thumbnail"
                             loading="lazy">
                        <div class="video-play-overlay">
                            <div class="video-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <!-- Duration Badge (Optional) -->
                        <?php if (!empty($video['duration'])): ?>
                        <div class="video-duration">
                            <?= htmlspecialchars($video['duration']); ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="video-info">
                        <h4 class="video-title" title="<?= htmlspecialchars($video['title']); ?>">
                            <?= htmlspecialchars($video['title']); ?>
                        </h4>
                        <div class="video-stats">
                            <span><i class="fas fa-eye"></i> Views</span>
                            <span><i class="fas fa-calendar-alt"></i> Recently</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Load More Button (Optional) -->
        <div class="videos-load-more" data-aos="fade-up" data-aos-delay="400">
            <button class="videos-load-more-btn">
                <i class="fas fa-play-circle me-2"></i>Load More Videos
            </button>
        </div>
    </div>
</section>

<!-- Video Player Modal -->
<div class="video-player-modal" id="videoPlayerModal">
    <button class="video-player-close" onclick="closeVideoPlayer()">
        <i class="fas fa-times"></i>
    </button>
    <div class="video-player-container">
        <iframe class="video-player-iframe" 
                id="videoPlayerIframe"
                src="" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    </div>
</div>

<script>
    function playVideo(youtubeId) {
        if (youtubeId) {
            document.getElementById('videoPlayerIframe').src = `https://www.youtube.com/embed/${youtubeId}?autoplay=1`;
            document.getElementById('videoPlayerModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeVideoPlayer() {
        document.getElementById('videoPlayerIframe').src = '';
        document.getElementById('videoPlayerModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeVideoPlayer();
        }
    });

    // Close on background click
    document.getElementById('videoPlayerModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeVideoPlayer();
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

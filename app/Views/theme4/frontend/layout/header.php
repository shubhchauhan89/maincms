<?php
helper('form');
$topbar = "d-none";
if($user_details['topbar']!="Hide"){
    $topbar = "";
}
echo $custom_insert['head'];
?>

<style>
    /* Ultra Modern Real Estate Header */
    
    /* Animated Topbar */
    .real-estate-topbar {
        background: linear-gradient(135deg, var(--header_background) 0%, color-mix(in srgb, var(--header_background) 70%, #000 30%) 100%);
        color: var(--header_text);
        font-size: 14px;
        padding: 10px 0;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Animated gradient overlay */
    .real-estate-topbar::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
        animation: rotate-gradient 20s linear infinite;
        pointer-events: none;
    }

    @keyframes rotate-gradient {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .topbar-content {
        position: relative;
        z-index: 1;
    }

    .contact-info {
        display: flex;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--header_text);
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        font-weight: 500;
        position: relative;
        padding: 5px 10px;
        border-radius: 20px;
    }

    .contact-item::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .contact-item:hover::before {
        opacity: 1;
    }

    .contact-item:hover {
        transform: translateY(-3px) scale(1.05);
    }

    .contact-item i {
        font-size: 16px;
        animation: pulse-icon 2s infinite;
    }

    @keyframes pulse-icon {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    .whatsapp-btn {
        color: #25d366 !important;
    }

    .whatsapp-btn:hover {
        color: #1da851 !important;
    }

    .whatsapp-btn i {
        animation: shake 1s infinite;
    }

    @keyframes shake {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(-10deg); }
        75% { transform: rotate(10deg); }
    }

    /* Inquiry Button with Glow */
    .inquiry-btn {
        background: linear-gradient(135deg, var(--inquiry_button_color), color-mix(in srgb, var(--inquiry_button_color) 80%, #000 20%));
        border: none;
        padding: 10px 25px;
        border-radius: 25px;
        color: white;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
    }

    .inquiry-btn::before {
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

    .inquiry-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .inquiry-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .inquiry-btn i {
        position: relative;
        z-index: 1;
    }

    /* Main Navigation with Glassmorphism */
    .main-navbar {
        background: var(--theme_surface_color);
        backdrop-filter: blur(20px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        padding: 15px 0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        z-index: 999;
    }

    .main-navbar::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color), var(--primary-color));
        background-size: 200% 100%;
        animation: shimmer-line 3s linear infinite;
    }

    @keyframes shimmer-line {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    .main-navbar.scrolled {
        padding: 8px 0;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.15);
        background: rgba(255, 255, 255, 0.98);
    }

    /* Logo Animation */
    .navbar-brand {
        position: relative;
    }

    .navbar-brand img {
        height: 60px;
        width: auto;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        object-fit: contain;
        filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.1));
    }

    .navbar-brand:hover img {
        transform: scale(1.05) rotate(2deg);
        filter: drop-shadow(0 4px 15px rgba(0, 0, 0, 0.2));
    }

    .main-navbar.scrolled .navbar-brand img {
        height: 50px;
    }

    /* Modern Navigation Links */
    .navbar-nav .nav-item {
        margin: 0 5px;
        position: relative;
    }

    .navbar-nav .nav-link {
        color: var(--navbar_text) !important;
        font-weight: 600;
        font-size: 15px;
        padding: 12px 18px !important;
        border-radius: 12px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .navbar-nav .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s;
    }

    .navbar-nav .nav-link:hover::before {
        left: 100%;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 5px;
        left: 50%;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .navbar-nav .nav-link:hover {
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        transform: translateY(-2px);
    }

    .navbar-nav .nav-link:hover::after {
        width: 70%;
    }

    /* Dropdown with Smooth Animation */
    .dropdown-menu {
        border: none;
        border-radius: 15px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        padding: 15px 0;
        margin-top: 15px;
        background: white;
        min-width: 240px;
        backdrop-filter: blur(10px);
        animation: dropdown-fade-in 0.3s ease-out;
        overflow: hidden;
    }

    @keyframes dropdown-fade-in {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    }

    .dropdown-item {
        padding: 12px 25px;
        color: var(--text-dark);
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: var(--accent-color);
        transform: scaleY(0);
        transition: transform 0.3s;
    }

    .dropdown-item:hover::before {
        transform: scaleY(1);
    }

    .dropdown-item:hover {
        background: linear-gradient(90deg, rgba(var(--bs-primary-rgb), 0.05), transparent);
        color: var(--primary-color);
        padding-left: 35px;
    }

    /* Advanced Search Bar */
    .property-search {
        display: flex;
        align-items: center;
        background: white;
        border: 2px solid var(--border-light);
        border-radius: 30px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        max-width: 320px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .property-search:focus-within {
        border-color: var(--primary-color);
        box-shadow: 0 8px 30px rgba(var(--bs-primary-rgb), 0.2);
        transform: translateY(-2px);
    }

    .property-search input {
        border: none;
        background: transparent;
        padding: 14px 20px;
        outline: none;
        width: 100%;
        font-size: 14px;
        color: var(--text-dark);
    }

    .property-search input::placeholder {
        color: #a0aec0;
    }

    .search-btn {
        background: linear-gradient(135deg, var(--searchbar_button_color), color-mix(in srgb, var(--searchbar_button_color) 80%, #000 20%));
        border: none;
        padding: 14px 22px;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-btn:hover {
        transform: scale(1.1);
    }

    .search-btn i {
        animation: search-pulse 2s infinite;
    }

    @keyframes search-pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }

    /* Mobile Toggle Modern */
    .navbar-toggler {
        border: none;
        padding: 10px 14px;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--light-gray), #e9ecef);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 3px rgba(var(--bs-primary-rgb), 0.25);
    }

    .navbar-toggler i {
        color: var(--navbar_text);
        font-size: 20px;
        transition: transform 0.3s;
    }

    .navbar-toggler:hover i {
        transform: rotate(90deg);
    }

    /* Ultra Modern Modal */
    .modal-content {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: modal-slide-up 0.4s ease-out;
    }

    @keyframes modal-slide-up {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .modal-header.modal-bg-color {
        background: linear-gradient(135deg, var(--header_background) 0%, color-mix(in srgb, var(--header_background) 70%, #000 30%) 100%);
        color: white;
        padding: 25px 35px;
        border: none;
        position: relative;
        overflow: hidden;
    }

    .modal-header.modal-bg-color::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        animation: rotate-gradient 15s linear infinite;
    }

    .modal-title {
        font-weight: 700;
        font-size: 22px;
        color: white;
        position: relative;
        z-index: 1;
    }

    .modal-body {
        padding: 35px;
        background: #f8f9fa;
    }

    .form-group label,
    .form-label {
        color: var(--text-dark);
        font-weight: 600;
        margin-bottom: 10px;
        display: block;
        font-size: 14px;
    }

    .form-control {
        border: 2px solid var(--border-light);
        border-radius: 12px;
        padding: 14px 18px;
        transition: all 0.3s ease;
        background: white;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.1);
        outline: none;
        transform: translateY(-1px);
    }

    .modal-footer {
        padding: 25px 35px;
        border: none;
        background: white;
    }

    .btn-color,
    .btn-primary {
        background: linear-gradient(135deg, var(--inquiry_button_color), color-mix(in srgb, var(--inquiry_button_color) 80%, #000 20%));
        border: none;
        padding: 14px 35px;
        border-radius: 30px;
        font-weight: 700;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        color: white;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
    }

    .btn-color::before,
    .btn-primary::before {
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

    .btn-color:hover::before,
    .btn-primary:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-color:hover,
    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        color: white;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #6c757d, #5a6268);
        border: none;
        padding: 14px 35px;
        border-radius: 30px;
        font-weight: 700;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary:hover {
        background: linear-gradient(135deg, #5a6268, #495057);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* Benefits Section with Animation */
    .inquiry-benefits {
        background: white;
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 2px solid var(--border-light);
    }

    .inquiry-benefits h6 {
        color: var(--text-dark);
        font-weight: 700;
        margin-bottom: 20px;
        font-size: 17px;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        margin-bottom: 14px;
        font-size: 14px;
        opacity: 0;
        animation: fade-in-up 0.5s forwards;
    }

    .benefit-item:nth-child(1) { animation-delay: 0.1s; }
    .benefit-item:nth-child(2) { animation-delay: 0.2s; }
    .benefit-item:nth-child(3) { animation-delay: 0.3s; }
    .benefit-item:nth-child(4) { animation-delay: 0.4s; }
    .benefit-item:nth-child(5) { animation-delay: 0.5s; }

    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .benefit-item i {
        color: var(--success-green);
        margin-right: 12px;
        font-size: 20px;
        flex-shrink: 0;
        animation: pulse-icon 2s infinite;
    }

    .benefit-item span {
        color: var(--text-dark);
        line-height: 1.5;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .contact-info {
            flex-direction: column;
            gap: 1rem;
            text-align: center;
        }

        .property-search {
            max-width: 100%;
            margin: 15px 0;
        }

        .navbar-nav .nav-item {
            margin: 5px 0;
        }

        .navbar-nav .nav-link {
            padding: 12px 15px !important;
        }

        .navbar-nav .nav-link::after {
            display: none;
        }

        .modal-body {
            padding: 25px 20px;
        }
    }

    @media (max-width: 768px) {
        .real-estate-topbar {
            padding: 12px 0;
        }

        .contact-info {
            font-size: 13px;
            gap: 0.8rem;
        }

        .inquiry-btn {
            padding: 8px 18px;
            font-size: 12px;
            width: 100%;
            margin-top: 10px;
        }

        .navbar-brand img {
            height: 50px;
        }

        .modal-body {
            padding: 20px 15px;
        }

        .inquiry-benefits {
            margin-bottom: 15px;
            padding: 20px;
        }
    }

    @media (max-width: 576px) {
        .contact-item {
            font-size: 12px;
        }

        .contact-item i {
            font-size: 14px;
        }

        .benefit-item {
            font-size: 13px;
        }

        .benefit-item i {
            font-size: 18px;
        }
    }
</style>

<!-- Ultra Modern Real Estate Header -->
<!-- Animated Top Contact Bar -->
<div class="real-estate-topbar <?= $topbar; ?>">
    <div class="topbar-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7 mb-2 mb-md-0">
                    <div class="contact-info">
                        <a href="tel:<?= $user_details['company_phone_no']; ?>" class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span><?= $user_details['company_phone_no']; ?></span>
                        </a>
                        <a href="https://wa.me/<?= $user_details['company_phone_no']; ?>?text=Hi,%20I%20would%20like%20to%20inquire%20about%20your%20properties" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="contact-item whatsapp-btn">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                        <a href="#" class="contact-item" data-bs-target="#inquiryModal" data-bs-toggle="modal">
                            <i class="fas fa-envelope"></i>
                            <span class="d-none d-lg-inline">Get Free Consultation</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-end">
                    <button class="inquiry-btn" data-bs-target="#inquiryModal" data-bs-toggle="modal" type="button">
                        <i class="fas fa-home me-2"></i>Make An Inquiry
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="baseUrl" value="<?= base_url(); ?>" />
<input type="hidden" id="checkError" value="0" />

<!-- Main Navigation with Glassmorphism -->
<nav class="navbar navbar-expand-lg main-navbar sticky-top">
    <div class="container-fluid header-padding">
        <!-- Logo with Animation -->
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= !empty($user_details['business_logo']) ? base_url().'/public/uploads/img/business_logo/'.$user_details['business_logo'] : base_url().'/public/assets/img/empty_user.webp'; ?>" 
                 alt="<?= $user_details['company_name'] ?? 'Real Estate'; ?> Logo" 
                 class="img-fluid">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-3">
                <?php
                foreach ($menu_lists as $menu_list) {
                    if($menu_list['is_active_os'] != 0) {
                        if($menu_list['menu_name'] != "Updates") {
                            $has_dropdown = count($menu_list['sub_menu']) > 0;
                            $dropdown_class = $has_dropdown ? "dropdown" : "";
                            $toggle_class = $has_dropdown ? "dropdown-toggle" : "";
                            $href = $has_dropdown ? "#" : base_url() . '/' . $menu_list['menu_link'];
                            $target = "";
                        } else {
                            $has_dropdown = false;
                            $dropdown_class = "";
                            $toggle_class = "";
                            $href = base_url() . "/update.html";
                            $target = "_blank";
                        }
                ?>
                    <li class="nav-item <?= $dropdown_class; ?>">
                        <a class="nav-link <?= $toggle_class; ?> text-nowrap" 
                           href="<?= $href; ?>" 
                           <?= !empty($target) ? 'target="'.$target.'" rel="noopener noreferrer"' : ''; ?>
                           <?php if ($has_dropdown): ?>
                               id="navbarDropdown<?= $menu_list['id']; ?>"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                           <?php endif; ?>>
                            <?= ucfirst($menu_list['menu_name']); ?>
                        </a>
                        
                        <?php if ($has_dropdown): ?>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown<?= $menu_list['id']; ?>">
                                <?php foreach ($menu_list['sub_menu'] as $sub_menu): 
                                    $menu_id_sub_menu_id = $menu_list['id']."/".$sub_menu['sub_menu'];
                                ?>
                                    <li>
                                        <a class="dropdown-item" 
                                           href="<?= base_url().'/'.$sub_menu['menu_link'].'/'.base64_encode($menu_id_sub_menu_id); ?>">
                                            <?= $sub_menu['menu_name']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php
                    }
                }
                ?>
            </ul>

            <!-- Advanced Property Search -->
            <div class="property-search">
                <form class="d-flex w-100" method="post" action="<?= base_url('search'); ?>">
                    <input name="search" 
                           value="<?= set_value('search'); ?>" 
                           id="search" 
                           type="search" 
                           placeholder="Search properties..." 
                           aria-label="Search properties"
                           required>
                    <button class="search-btn" type="submit" aria-label="Search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Ultra Modern Inquiry Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modal-bg-color">
                <h5 class="modal-title" id="inquiryModalLabel">
                    <i class="fas fa-home me-2"></i>Property Inquiry
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="inquiry-benefits">
                            <h6>Why Inquire With Us?</h6>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Free consultation with property experts</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Instant property valuation</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Exclusive property listings</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Market insights and trends</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Professional guidance</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form class="contact-form">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" id="name" 
                                       placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="number" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" maxlength="10" name="number" id="number" 
                                       placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="enqEmail" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="enqEmail" id="enqEmail" 
                                       placeholder="Enter your email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="propertyType" class="form-label">Property Interest</label>
                                <select class="form-control" name="propertyType" id="propertyType">
                                    <option value="">Select property type</option>
                                    <option value="buy">Looking to Buy</option>
                                    <option value="sell">Looking to Sell</option>
                                    <option value="rent">Looking to Rent</option>
                                    <option value="invest">Investment Property</option>
                                    <option value="commercial">Commercial Property</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Additional Details</label>
                                <textarea class="form-control" name="message" id="message" rows="3" 
                                          placeholder="Tell us about your property requirements..."></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Close
                </button>
                <button type="button" id="sendMsg" class="btn btn-color text-white rounded-pill">
                    <i class="fas fa-paper-plane me-2"></i>Send Inquiry
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Modal -->
<div class="modal fade" id="testimonialModalShow" tabindex="-1" role="dialog" aria-labelledby="testimonialModalShowLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-bg-color">
                <h5 class="modal-title" id="testimonialModalShowLabel">
                    <i class="fas fa-quote-left me-2"></i>Client Testimonial
                </h5>
                <button type="button" class="btn-close btn-close-white testimonialModalClose" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Testimonial content will be loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill testimonialModalClose" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Close
                </button>
            </div>
        </div>
    </div>
</div>

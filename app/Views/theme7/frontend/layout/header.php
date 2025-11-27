<?php
/**
 * ============================================
 * EDUCATIONAL THEME - HEADER COMPONENT
 * ============================================
 * File: theme7/frontend/layout/header.php
 * Purpose: Header with topbar, navbar, and inquiry modal
 * Version: 1.0
 * Last Updated: 2025-11-27
 * ============================================
 */

helper('form');

// Determine if topbar should be displayed
$topbar_class = ($user_details['topbar'] ?? 'Show') == 'Hide' ? 'd-none' : '';

// Get any custom head content
$custom_head = $custom_insert['head'] ?? '';
?>

<!-- ============================================
     CUSTOM HEAD INJECTION (Analytics, Tracking, etc.)
     ============================================ -->
<?= $custom_head; ?>


<!-- ============================================
     TOPBAR (Contact Info & Quick Actions)
     ============================================ -->
<div class="topbar <?= $topbar_class; ?>" style="background-color: var(--header_background); border-bottom: 1px solid var(--card-border);">
    <div class="container-fluid px-4 py-2">
        <div class="row align-items-center g-0">
            
            <!-- Left: Contact Information -->
            <div class="col-md-6 col-12">
                <ul class="topbar-links list-unstyled d-flex flex-wrap gap-3 mb-0">
                    
                    <!-- Phone Icon -->
                    <li class="d-flex align-items-center gap-2">
                        <a href="tel:<?= esc($user_details['company_phone_no'] ?? '', 'url') ?>" 
                           class="topbar-link" 
                           style="color: var(--header_text);" 
                           title="Call us">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </li>

                    <!-- Phone Number Link -->
                    <li class="d-flex align-items-center">
                        <a href="tel:<?= esc($user_details['company_phone_no'] ?? '', 'url') ?>" 
                           class="topbar-link fw-500 text-decoration-none" 
                           style="color: var(--header_text); font-size: 14px;">
                            <?= esc($user_details['company_phone_no'] ?? '', 'html') ?>
                        </a>
                    </li>

                    <!-- WhatsApp Link -->
                    <li class="d-flex align-items-center">
                        <a href="https://wa.me/<?= esc($user_details['company_phone_no'] ?? '', 'url') ?>?text=Hi%27,%20like%20to%20chat%20with%20you" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="topbar-link text-success" 
                           title="Chat on WhatsApp"
                           style="font-size: 16px;">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>

                    <!-- Email/Contact Icon -->
                    <li class="d-flex align-items-center">
                        <a href="#contact" 
                           class="topbar-link" 
                           style="color: var(--header_text); font-size: 14px;" 
                           title="Contact us">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Right: Quick Actions -->
            <div class="col-md-6 col-12 text-md-end text-start mt-2 mt-md-0">
                <button class="btn btn-sm rounded-pill" 
                        style="background-color: var(--primary-color); color: var(--primary-text-color); border: none;"
                        data-bs-target="#inquiryModal" 
                        data-bs-toggle="modal" 
                        type="button">
                    <i class="fa-solid fa-envelope-open-text me-2"></i>
                    Make An Inquiry
                </button>
            </div>

        </div>
    </div>
</div>

<!-- Hidden inputs for JavaScript -->
<input type="hidden" id="baseUrl" value="<?= base_url(); ?>" />
<input type="hidden" id="checkError" value="0" />


<!-- ============================================
     MAIN NAVBAR (Navigation & Logo)
     ============================================ -->
<nav class="navbar navbar-expand-lg" 
     style="background-color: var(--navbar_background); 
             color: var(--navbar_text); 
             box-shadow: 0 2px 8px var(--shadow-sm); 
             position: sticky; 
             top: 0; 
             z-index: 100;"
     id="mainNavbar">
    
    <div class="container-fluid px-4">
        
        <!-- Brand/Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url(); ?>" title="Home">
            <img class="navbar-logo" 
                 src="<?= !empty($user_details['business_logo']) 
                    ? base_url() . '/public/uploads/img/business_logo/' . esc($user_details['business_logo'], 'attr') 
                    : base_url() . '/public/assets/img/empty_user.webp'; ?>" 
                 alt="<?= esc($user_details['business_name'] ?? 'Logo', 'attr') ?>" 
                 width="auto" 
                 height="60px"
                 style="object-fit: contain;">
            <span class="navbar-brand-text d-none d-sm-inline" 
                  style="font-weight: 600; font-size: 16px; color: var(--navbar_text);">
                <?= esc($user_details['business_name'] ?? 'Educational Platform', 'html') ?>
            </span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarContent" 
                aria-controls="navbarContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
                style="border-color: var(--navbar_text); color: var(--navbar_text);">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            
            <!-- Main Navigation Menu -->
            <ul class="navbar-nav ms-auto gap-1">
                <?php
                if (!empty($menu_lists)) {
                    foreach ($menu_lists as $menu_list) {
                        
                        // Check if menu item is active
                        if (($menu_list['is_active_os'] ?? 0) == 0) {
                            continue;
                        }

                        // Handle menu link
                        $has_submenu = !empty($menu_list['sub_menu']) && count($menu_list['sub_menu']) > 0;
                        $menu_name = esc($menu_list['menu_name'] ?? '', 'html');
                        
                        // Determine href and target
                        if ($menu_name == "Updates") {
                            $menu_href = base_url() . "/update.html";
                            $menu_target = "_blank";
                            $is_dropdown = false;
                        } else {
                            $menu_href = $has_submenu ? "#" : base_url() . '/' . esc($menu_list['menu_link'] ?? '', 'url');
                            $menu_target = "";
                            $is_dropdown = $has_submenu;
                        }

                        $dropdown_id = 'navDropdown' . ($menu_list['id'] ?? '');
                        $dropdown_class = $is_dropdown ? 'dropdown' : '';
                        $toggle_class = $is_dropdown ? 'dropdown-toggle' : '';
                ?>

                <!-- Menu Item -->
                <li class="nav-item <?= $dropdown_class; ?>">
                    <a class="nav-link <?= $toggle_class; ?> text-nowrap" 
                       href="<?= $menu_href; ?>"
                       target="<?= $menu_target; ?>"
                       style="color: var(--navbar_text); font-weight: 500; transition: color var(--transition-normal) var(--ease-standard);"
                       onmouseover="this.style.color='var(--primary-color)'"
                       onmouseout="this.style.color='var(--navbar_text)'"
                       <?php if ($is_dropdown) {
                           echo "id='" . $dropdown_id . "' role='button' data-bs-toggle='dropdown' aria-expanded='false'";
                       } ?>>
                        <?= $menu_name; ?>
                    </a>

                    <!-- Dropdown Menu (if has submenu) -->
                    <?php if ($is_dropdown) { ?>
                    <ul class="dropdown-menu" 
                        aria-labelledby="<?= $dropdown_id; ?>"
                        style="background-color: var(--card-background); 
                               border: 1px solid var(--card-border); 
                               border-radius: var(--border-radius); 
                               box-shadow: var(--shadow-md);">
                        
                        <?php foreach ($menu_list['sub_menu'] as $sub_menu) {
                            $sub_menu_name = esc($sub_menu['menu_name'] ?? '', 'html');
                            $sub_menu_link = esc($sub_menu['menu_link'] ?? '', 'url');
                            $sub_menu_id = esc($menu_list['id'] . "/" . ($sub_menu['sub_menu'] ?? ''), 'url');
                            $encoded_id = base64_encode($sub_menu_id);
                            $sub_menu_href = base_url() . '/' . $sub_menu_link . '/' . $encoded_id;
                        ?>
                        <li>
                            <a class="dropdown-item" 
                               href="<?= $sub_menu_href; ?>"
                               style="color: var(--navbar_text); padding: 10px 16px; transition: all var(--transition-normal) var(--ease-standard);"
                               onmouseover="this.style.backgroundColor='var(--section-background); this.style.color='var(--primary-color)'"
                               onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--navbar_text)'">
                                <?= $sub_menu_name; ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>

                <?php
                    }
                }
                ?>
            </ul>

            <!-- Search Bar (Right side of navbar) -->
            <form class="d-flex ms-lg-3 mt-3 mt-lg-0" method="post" action="<?= base_url(); ?>/search">
                <div class="input-group" style="max-width: 250px;">
                    <input class="form-control" 
                           type="search" 
                           name="search" 
                           value="<?= set_value('search'); ?>" 
                           id="headerSearch"
                           placeholder="Search courses, resources..." 
                           aria-label="Search"
                           style="border: 1px solid var(--card-border); 
                                  padding: 8px 12px; 
                                  font-size: 14px;
                                  background-color: var(--searchbar_color);"
                           required>
                    <button class="btn" 
                            type="submit"
                            style="background-color: var(--searchbar_button_color); 
                                   color: white; 
                                   border: 1px solid var(--searchbar_button_color); 
                                   padding: 8px 16px;">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>


<!-- ============================================
     INQUIRY MODAL (Contact Form)
     ============================================ -->
<div class="modal fade" 
     id="inquiryModal" 
     tabindex="-1" 
     aria-labelledby="inquiryModalLabel" 
     aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border: none; border-radius: var(--border-radius-lg); overflow: hidden;">
            
            <!-- Modal Header -->
            <div class="modal-header" 
                 style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                        color: white; 
                        border: none; 
                        padding: 24px;">
                <h5 class="modal-title fw-bold" id="inquiryModalLabel">
                    <i class="fa-solid fa-envelope-open-text me-2"></i>Make an Inquiry
                </h5>
                <button type="button" 
                        class="btn-close btn-close-white" 
                        data-bs-dismiss="modal" 
                        aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style="padding: 24px; background-color: var(--card-background);">
                <form class="inquiry-form" id="inquiryForm">
                    
                    <!-- Full Name -->
                    <div class="form-group mb-3">
                        <label for="inquiryName" class="form-label fw-500" style="color: var(--text-primary);">
                            Full Name <span style="color: var(--danger);">*</span>
                        </label>
                        <input type="text" 
                               class="form-control" 
                               id="inquiryName" 
                               name="name" 
                               placeholder="Enter your full name"
                               style="border: 1px solid var(--card-border); 
                                      border-radius: var(--border-radius); 
                                      padding: 10px 12px;
                                      background-color: var(--section-background);"
                               required>
                        <small class="text-muted"></small>
                    </div>

                    <!-- Mobile Number -->
                    <div class="form-group mb-3">
                        <label for="inquiryPhone" class="form-label fw-500" style="color: var(--text-primary);">
                            Mobile Number <span style="color: var(--danger);">*</span>
                        </label>
                        <input type="tel" 
                               class="form-control" 
                               id="inquiryPhone" 
                               name="number" 
                               maxlength="10" 
                               placeholder="10-digit mobile number"
                               style="border: 1px solid var(--card-border); 
                                      border-radius: var(--border-radius); 
                                      padding: 10px 12px;
                                      background-color: var(--section-background);"
                               required>
                        <small class="text-muted">Format: 10 digits without country code</small>
                    </div>

                    <!-- Email Address -->
                    <div class="form-group mb-3">
                        <label for="inquiryEmail" class="form-label fw-500" style="color: var(--text-primary);">
                            Email Address <span style="color: var(--danger);">*</span>
                        </label>
                        <input type="email" 
                               class="form-control" 
                               id="inquiryEmail" 
                               name="enqEmail" 
                               placeholder="your@email.com"
                               style="border: 1px solid var(--card-border); 
                                      border-radius: var(--border-radius); 
                                      padding: 10px 12px;
                                      background-color: var(--section-background);"
                               required>
                        <small class="text-muted"></small>
                    </div>

                    <!-- Message -->
                    <div class="form-group mb-3">
                        <label for="inquiryMessage" class="form-label fw-500" style="color: var(--text-primary);">
                            Message <span style="color: var(--danger);">*</span>
                        </label>
                        <textarea class="form-control" 
                                  id="inquiryMessage" 
                                  name="message" 
                                  rows="4" 
                                  placeholder="Tell us about your inquiry..."
                                  style="border: 1px solid var(--card-border); 
                                         border-radius: var(--border-radius); 
                                         padding: 10px 12px;
                                         background-color: var(--section-background); 
                                         resize: vertical; 
                                         min-height: 100px;"
                                  required></textarea>
                        <small class="text-muted">Minimum 10 characters</small>
                    </div>

                    <!-- Form Message (Success/Error) -->
                    <div id="inquiryMessage" style="display: none; margin-bottom: 15px;"></div>

                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer" style="background-color: var(--section-background); border-top: 1px solid var(--card-border); padding: 16px 24px;">
                <button type="button" 
                        class="btn btn-secondary" 
                        data-bs-dismiss="modal"
                        style="border-radius: var(--border-radius); padding: 8px 20px;">
                    Close
                </button>
                <button type="button" 
                        id="sendInquiry" 
                        class="btn text-white" 
                        style="background-color: var(--primary-color); 
                               border: none; 
                               border-radius: var(--border-radius); 
                               padding: 8px 20px;
                               transition: all var(--transition-normal) var(--ease-standard);"
                        onmouseover="this.style.backgroundColor='var(--accent-color); this.style.transform='translateY(-2px)'; this.style.boxShadow='var(--shadow-md)'"
                        onmouseout="this.style.backgroundColor='var(--primary-color); this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="fa-solid fa-paper-plane me-2"></i>Send Inquiry
                </button>
            </div>
        </div>
    </div>
</div>


<!-- ============================================
     HEADER STYLES (Component-Specific)
     ============================================ -->
<style>
    /* Topbar Styles */
    .topbar {
        font-size: 14px;
        transition: background-color var(--transition-normal) var(--ease-standard);
    }

    .topbar-links li {
        list-style: none;
    }

    .topbar-link {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: color var(--transition-normal) var(--ease-standard);
    }

    .topbar-link:hover {
        color: var(--primary-color) !important;
    }

    /* Navbar Styles */
    #mainNavbar {
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .navbar-brand {
        gap: 10px;
        text-decoration: none;
    }

    .navbar-brand:hover .navbar-brand-text {
        color: var(--primary-color) !important;
    }

    .nav-link {
        position: relative;
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin-right: 20px;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: width var(--transition-normal) var(--ease-standard);
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: var(--section-background) !important;
    }

    /* Form Styles */
    .form-control:focus,
    .form-select:focus,
    textarea:focus {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 3px rgba(33, 128, 161, 0.1) !important;
        background-color: var(--card-background) !important;
    }

    /* Modal Animations */
    .modal.fade .modal-dialog {
        animation: slideUp 0.3s var(--ease-standard);
    }

    @keyframes slideUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .topbar {
            font-size: 13px;
        }

        .topbar-links {
            gap: 10px !important;
        }

        .navbar-nav {
            margin-top: 15px;
        }

        .nav-link {
            margin-right: 0;
            padding: 10px 0 !important;
        }

        .nav-link::after {
            display: none;
        }

        .form-inline {
            flex-direction: column;
        }

        .input-group {
            max-width: 100% !important;
        }
    }

    /* Accessibility */
    .nav-link:focus-visible,
    .topbar-link:focus-visible,
    .form-control:focus-visible,
    button:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }
</style>


<!-- ============================================
     HEADER JAVASCRIPT (Modal & Form Handling)
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Inquiry Form Submission
        // ============================================
        const sendInquiryBtn = document.getElementById('sendInquiry');
        const inquiryForm = document.getElementById('inquiryForm');
        const inquiryModalElement = document.getElementById('inquiryModal');
        
        if (sendInquiryBtn && inquiryForm) {
            sendInquiryBtn.addEventListener('click', function() {
                // Validate form
                if (!inquiryForm.checkValidity()) {
                    inquiryForm.reportValidity();
                    return;
                }

                // Show loading state
                sendInquiryBtn.disabled = true;
                sendInquiryBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';

                // Prepare form data
                const formData = new FormData(inquiryForm);

                // Send AJAX request
                fetch('<?= base_url(); ?>/submit-inquiry', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const messageDiv = document.getElementById('inquiryMessage');
                    
                    if (data.success) {
                        // Show success message
                        messageDiv.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle me-2"></i>' + (data.message || 'Inquiry sent successfully!') + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                        messageDiv.style.display = 'block';
                        
                        // Reset form
                        inquiryForm.reset();
                        
                        // Close modal after 2 seconds
                        setTimeout(() => {
                            const modal = bootstrap.Modal.getInstance(inquiryModalElement);
                            if (modal) modal.hide();
                        }, 2000);
                    } else {
                        // Show error message
                        messageDiv.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-exclamation-circle me-2"></i>' + (data.message || 'Failed to send inquiry. Please try again.') + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                        messageDiv.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    const messageDiv = document.getElementById('inquiryMessage');
                    messageDiv.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-exclamation-circle me-2"></i>An error occurred. Please try again.<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                    messageDiv.style.display = 'block';
                })
                .finally(() => {
                    // Reset button state
                    sendInquiryBtn.disabled = false;
                    sendInquiryBtn.innerHTML = '<i class="fa-solid fa-paper-plane me-2"></i>Send Inquiry';
                });
            });
        }

        // ============================================
        // Mobile Menu: Close on item click
        // ============================================
        const navbarCollapse = document.getElementById('navbarContent');
        if (navbarCollapse) {
            navbarCollapse.addEventListener('click', function(e) {
                if (e.target.closest('a:not([data-bs-toggle])')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        }

        // ============================================
        // Phone Input: Allow only digits
        // ============================================
        const phoneInput = document.getElementById('inquiryPhone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10);
            });
        }

        // ============================================
        // Navbar: Change style on scroll
        // ============================================
        const navbar = document.getElementById('mainNavbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.style.boxShadow = '0 4px 12px var(--shadow-md)';
                } else {
                    navbar.style.boxShadow = '0 2px 8px var(--shadow-sm)';
                }
            });
        }

        // ============================================
        // Active Menu Item: Highlight current page
        // ============================================
        const currentUrl = window.location.pathname;
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            if (link.getAttribute('href') !== '#') {
                const href = link.getAttribute('href');
                if (currentUrl.includes(href)) {
                    link.style.color = 'var(--primary-color)';
                    link.style.fontWeight = '600';
                }
            }
        });
    });
</script>

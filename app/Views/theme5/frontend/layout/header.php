<?php
helper('form');
$topbar = "d-none";
if($user_details['topbar']!="Hide"){
    $topbar = "";
}
echo $custom_insert['head'] ?? '';
?>

<style>
    /* ===== REVOLUTIONARY MEDICAL HEADER & TOPBAR ===== */
    
    /* Medical TopBar */
    .medical-topbar {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        padding: 12px 0;
        color: white;
        font-size: 13px;
        position: relative;
        overflow: hidden;
    }

    .medical-topbar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .medical-topbar-content {
        position: relative;
        z-index: 1;
    }

    .medical-contact-info {
        display: flex;
        align-items: center;
        gap: 25px;
        flex-wrap: wrap;
    }

    .medical-contact-item {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: rgba(255, 255, 255, 0.95);
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .medical-contact-item:hover {
        color: white;
        gap: 12px;
    }

    .medical-contact-item i {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
    }

    .medical-whatsapp-btn {
        background: rgba(255, 255, 255, 0.15);
        padding: 6px 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .medical-whatsapp-btn:hover {
        background: rgba(37, 211, 102, 0.3);
        color: white !important;
    }

    .medical-appointment-btn {
        padding: 10px 24px;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 8px;
        font-weight: 700;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-appointment-btn:hover {
        background: white;
        color: var(--medical-teal, #008080);
        border-color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Main Navigation */
    .medical-main-navbar {
        background: var(--theme_mode_color);
        padding: 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        border-bottom: 2px solid rgba(0, 128, 128, 0.1);
        position: sticky;
        top: 0;
        z-index: 999;
    }

    .medical-main-navbar.sticky-top {
        transition: all 0.3s ease;
    }

    .medical-main-navbar.sticky-top.scrolled {
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.12);
    }

    .medical-header-padding {
        padding: 15px 0;
    }

    /* Logo */
    .medical-navbar-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .medical-navbar-brand img {
        max-height: 50px;
        width: auto;
        transition: transform 0.3s ease;
    }

    .medical-navbar-brand:hover img {
        transform: scale(1.05);
    }

    /* Navigation Links */
    .medical-navbar-nav {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .medical-nav-item {
        position: relative;
    }

    .medical-nav-link {
        padding: 8px 18px !important;
        color: #6c757d !important;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        position: relative;
    }

    .medical-nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: translateX(-50%);
        transition: width 0.3s ease;
    }

    .medical-nav-link:hover {
        color: var(--medical-teal, #008080) !important;
    }

    .medical-nav-link:hover::after {
        width: 100%;
    }

    /* Dropdown Menu */
    .medical-dropdown-menu {
        background: var(--theme_surface_color);
        border: 2px solid rgba(0, 128, 128, 0.1);
        border-radius: 12px;
        margin-top: 10px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        animation: dropdownSlide 0.3s ease-out;
    }

    @keyframes dropdownSlide {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .medical-dropdown-item {
        color: #6c757d !important;
        font-weight: 600;
        font-size: 13px;
        padding: 12px 20px !important;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .medical-dropdown-item:hover {
        background: rgba(0, 128, 128, 0.1) !important;
        color: var(--medical-teal, #008080) !important;
        border-left-color: var(--medical-teal, #008080);
        padding-left: 25px !important;
    }

    /* Search Bar */
    .medical-search {
        display: flex;
        align-items: center;
        margin-left: 20px;
    }

    .medical-search form {
        display: flex;
        align-items: center;
        background: rgba(0, 128, 128, 0.05);
        border: 2px solid rgba(0, 128, 128, 0.1);
        border-radius: 8px;
        padding: 8px 12px;
        transition: all 0.3s ease;
    }

    .medical-search form:focus-within {
        background: rgba(0, 128, 128, 0.1);
        border-color: var(--medical-teal, #008080);
        box-shadow: 0 0 0 3px rgba(0, 128, 128, 0.1);
    }

    .medical-search input {
        border: none;
        background: transparent;
        color: var(--text-dark);
        font-size: 13px;
        outline: none;
        width: 200px;
    }

    .medical-search input::placeholder {
        color: #adb5bd;
    }

    .medical-search-btn {
        background: none;
        border: none;
        color: var(--medical-teal, #008080);
        cursor: pointer;
        font-size: 14px;
        transition: all 0.3s ease;
        margin-left: 8px;
    }

    .medical-search-btn:hover {
        color: var(--medical-blue, #003d7a);
        transform: scale(1.15);
    }

    /* Mobile Navbar Toggler */
    .medical-navbar-toggler {
        border: none;
        color: var(--medical-teal, #008080);
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .medical-navbar-toggler:focus {
        box-shadow: none;
        outline: none;
    }

    .medical-navbar-toggler:hover {
        color: var(--medical-blue, #003d7a);
        transform: scale(1.1);
    }

    /* Appointment Modal */
    .medical-modal {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 80px rgba(0, 0, 0, 0.15);
    }

    .medical-modal-bg-color {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        border: none;
        padding: 25px;
    }

    .medical-modal-title {
        font-size: 20px;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .medical-modal-title i {
        font-size: 24px;
        color: rgba(255, 255, 255, 0.9);
    }

    .medical-btn-close-white {
        filter: brightness(0) invert(1);
    }

    /* Appointment Benefits */
    .medical-appointment-benefits {
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.05), rgba(0, 61, 122, 0.05));
        border-radius: 15px;
        padding: 25px;
        border: 2px solid rgba(0, 128, 128, 0.1);
    }

    .medical-benefits-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .medical-benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 15px;
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
    }

    .medical-benefit-item i {
        color: var(--medical-teal, #008080);
        font-size: 16px;
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* Appointment Form */
    .medical-appointment-form {
        padding: 0;
    }

    .medical-form-group {
        margin-bottom: 18px;
    }

    .medical-form-label {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-dark);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
        display: block;
    }

    .medical-form-label .text-danger {
        color: #dc3545;
    }

    .medical-form-control {
        border: 2px solid rgba(0, 128, 128, 0.1);
        border-radius: 10px;
        padding: 12px 15px;
        font-size: 13px;
        color: var(--text-dark);
        background: var(--theme_surface_color);
        transition: all 0.3s ease;
    }

    .medical-form-control:focus {
        border-color: var(--medical-teal, #008080);
        box-shadow: 0 0 0 4px rgba(0, 128, 128, 0.1);
        outline: none;
    }

    .medical-form-control::placeholder {
        color: #adb5bd;
    }

    /* Modal Footer */
    .medical-modal-footer {
        border-top: 2px solid rgba(0, 128, 128, 0.1);
        padding: 20px;
        background: rgba(0, 128, 128, 0.02);
    }

    .medical-btn-appointment {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        border: none;
        padding: 12px 30px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .medical-btn-appointment::before {
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

    .medical-btn-appointment:hover::before {
        width: 300px;
        height: 300px;
    }

    .medical-btn-appointment:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0, 128, 128, 0.3);
    }

    /* Responsive */
    @media (max-width: 991px) {
        .medical-contact-info {
            gap: 12px;
            font-size: 12px;
        }

        .medical-navbar-collapse {
            padding-top: 20px;
        }

        .medical-search {
            margin-left: 0;
            margin-top: 15px;
        }

        .medical-search input {
            width: 100%;
        }

        .medical-medical-search form {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .medical-topbar {
            padding: 10px 0;
            font-size: 12px;
        }

        .medical-appointment-btn {
            padding: 8px 16px;
            font-size: 11px;
        }

        .medical-header-padding {
            padding: 12px 0;
        }

        .medical-navbar-brand img {
            max-height: 40px;
        }

        .medical-nav-link {
            padding: 6px 12px !important;
            font-size: 12px;
        }

        .medical-contact-info {
            flex-direction: column;
            gap: 8px;
        }

        .medical-contact-item {
            gap: 6px;
        }

        .medical-col-md-5,
        .medical-col-md-7 {
            margin-top: 20px;
        }

        .medical-col-md-7:first-child {
            margin-top: 0;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-dropdown-menu {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-appointment-benefits {
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.08), rgba(0, 61, 122, 0.08));
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-form-control {
        background: #0f1419;
        border-color: rgba(0, 128, 128, 0.15);
        color: #e0e0e0;
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL HEADER ===== -->

<!-- Medical TopBar -->
<div class="medical-topbar <?= $topbar; ?>">
    <div class="medical-topbar-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-10 col-md-9 mb-2 mb-md-0">
                    <div class="medical-contact-info">
                        <!-- Phone Contact -->
                        <a href="tel:<?= $user_details['company_phone_no'] ?? ''; ?>" class="medical-contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span><?= htmlspecialchars($user_details['company_phone_no'] ?? 'N/A'); ?></span>
                        </a>
                        
                        <!-- WhatsApp Consultation -->
                        <a href="https://wa.me/<?= str_replace(['+', ' ', '-'], '', $user_details['company_phone_no'] ?? ''); ?>?text=Hi,%20I%20would%20like%20to%20schedule%20an%20appointment" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="medical-contact-item medical-whatsapp-btn">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp Us</span>
                        </a>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="col-lg-2 col-md-3 text-end">
                    <button class="medical-appointment-btn" data-bs-target="#appointmentModal" data-bs-toggle="modal" type="button">
                        <i class="fas fa-calendar-check me-2"></i>Schedule Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="baseUrl" value="<?= base_url(); ?>" />
<input type="hidden" id="checkError" value="0" />

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg medical-main-navbar sticky-top">
    <div class="container-fluid medical-header-padding">
        <!-- Logo -->
        <a class="navbar-brand medical-navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= !empty($user_details['business_logo']) ? base_url().'/public/uploads/img/business_logo/'.htmlspecialchars($user_details['business_logo']) : base_url().'/public/assets/img/empty_user.webp'; ?>" 
                 alt="<?= htmlspecialchars($user_details['company_name'] ?? 'Medical Center'); ?>" 
                 title="<?= htmlspecialchars($user_details['company_name'] ?? 'Medical Center'); ?>">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler medical-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto medical-navbar-nav">
                <?php
                foreach ($menu_lists as $menu_list) {
                    if($menu_list['is_active_os'] != 0) {
                        if($menu_list['menu_name'] != "Updates") {
                            $has_dropdown = count($menu_list['sub_menu'] ?? []) > 0;
                            $dropdown_class = $has_dropdown ? "dropdown" : "";
                            $toggle_class = $has_dropdown ? "dropdown-toggle" : "";
                            $href = $has_dropdown ? "#" : base_url() . '/' . ($menu_list['menu_link'] ?? '');
                            $target = "";
                        } else {
                            $has_dropdown = false;
                            $dropdown_class = "";
                            $toggle_class = "";
                            $href = base_url() . "/updates";
                            $target = "_blank";
                        }
                ?>
                    <li class="nav-item medical-nav-item <?= $dropdown_class; ?>">
                        <a class="nav-link medical-nav-link <?= $toggle_class; ?>" 
                           href="<?= $href; ?>" 
                           <?= !empty($target) ? 'target="'.$target.'" rel="noopener noreferrer"' : ''; ?>
                           <?php if ($has_dropdown): ?>
                               id="navbarDropdown<?= $menu_list['id']; ?>"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                           <?php endif; ?>>
                            <?= ucfirst(htmlspecialchars($menu_list['menu_name'])); ?>
                        </a>
                        
                        <?php if ($has_dropdown): ?>
                            <ul class="dropdown-menu medical-dropdown-menu" aria-labelledby="navbarDropdown<?= $menu_list['id']; ?>">
                                <?php foreach ($menu_list['sub_menu'] ?? [] as $sub_menu): 
                                    $menu_id_sub_menu_id = $menu_list['id']."/".$sub_menu['sub_menu'];
                                ?>
                                    <li>
                                        <a class="dropdown-item medical-dropdown-item" 
                                           href="<?= base_url().'/'.$sub_menu['menu_link'].'/'.base64_encode($menu_id_sub_menu_id); ?>">
                                            <?= htmlspecialchars($sub_menu['menu_name']); ?>
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

            <!-- Search Bar -->
            <div class="medical-search">
                <form class="d-flex w-100" method="post" action="<?= base_url('search'); ?>">
                    <input name="search" 
                           value="<?= set_value('search'); ?>" 
                           id="search" 
                           type="search" 
                           placeholder="Search doctors, services..." 
                           aria-label="Search"
                           required>
                    <button class="medical-search-btn" type="submit" aria-label="Search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Appointment Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content medical-modal">
            <!-- Modal Header -->
            <div class="modal-header medical-modal-bg-color">
                <h5 class="modal-title medical-modal-title" id="appointmentModalLabel">
                    <i class="fas fa-stethoscope"></i>Schedule Your Appointment
                </h5>
                <button type="button" class="btn-close medical-btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4">
                <div class="row">
                    <!-- Benefits Section -->
                    <div class="col-md-5">
                        <div class="medical-appointment-benefits">
                            <h6 class="medical-benefits-title">Why Choose Us?</h6>
                            
                            <div class="medical-benefit-item">
                                <i class="fas fa-user-md"></i>
                                <span>Expert doctors & healthcare professionals</span>
                            </div>
                            
                            <div class="medical-benefit-item">
                                <i class="fas fa-clock"></i>
                                <span>Flexible appointment scheduling</span>
                            </div>
                            
                            <div class="medical-benefit-item">
                                <i class="fas fa-file-medical"></i>
                                <span>Complete medical consultation</span>
                            </div>
                            
                            <div class="medical-benefit-item">
                                <i class="fas fa-hospital-user"></i>
                                <span>Modern healthcare facilities</span>
                            </div>
                            
                            <div class="medical-benefit-item">
                                <i class="fas fa-heartbeat"></i>
                                <span>Compassionate patient care</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Section -->
                    <div class="col-md-7">
                        <form class="medical-appointment-form">
                            <div class="medical-form-group">
                                <label for="patientName" class="medical-form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="patientName" class="form-control medical-form-control" id="patientName" 
                                       placeholder="Enter your full name" required>
                            </div>
                            
                            <div class="medical-form-group">
                                <label for="patientPhone" class="medical-form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control medical-form-control" maxlength="10" name="patientPhone" id="patientPhone" 
                                       placeholder="Enter phone number" required>
                            </div>
                            
                            <div class="medical-form-group">
                                <label for="patientEmail" class="medical-form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control medical-form-control" name="patientEmail" id="patientEmail" 
                                       placeholder="Enter email" required>
                            </div>
                            
                            <div class="medical-form-group">
                                <label for="doctorSpecialty" class="medical-form-label">Select Specialty <span class="text-danger">*</span></label>
                                <select class="form-control medical-form-control" name="doctorSpecialty" id="doctorSpecialty" required>
                                    <option value="">-- Select a specialty --</option>
                                    <option value="general">General Consultation</option>
                                    <option value="cardiology">Cardiology</option>
                                    <option value="dermatology">Dermatology</option>
                                    <option value="dentistry">Dentistry</option>
                                    <option value="pediatrics">Pediatrics</option>
                                    <option value="orthopedics">Orthopedics</option>
                                    <option value="neurology">Neurology</option>
                                    <option value="ophthalmology">Ophthalmology</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="medical-form-group">
                                <label for="appointmentDate" class="medical-form-label">Preferred Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control medical-form-control" name="appointmentDate" id="appointmentDate" required>
                            </div>
                            
                            <div class="medical-form-group">
                                <label for="appointmentNotes" class="medical-form-label">Additional Notes</label>
                                <textarea class="form-control medical-form-control" name="appointmentNotes" id="appointmentNotes" rows="3" 
                                          placeholder="Describe your symptoms or health concerns..."></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer medical-modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Cancel
                </button>
                <button type="button" id="sendAppointment" class="btn medical-btn-appointment text-white rounded-pill">
                    <i class="fas fa-check-circle me-2"></i>Book Appointment
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ===== END REVOLUTIONARY MEDICAL HEADER ===== -->

<script>
// Header Scripts
document.addEventListener('DOMContentLoaded', function() {
    // Sticky navbar scroll effect
    const navbar = document.querySelector('.medical-main-navbar');
    
    if(navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Appointment form submission
    const appointmentBtn = document.getElementById('sendAppointment');
    if(appointmentBtn) {
        appointmentBtn.addEventListener('click', function() {
            const form = document.querySelector('.medical-appointment-form');
            if(form.checkValidity()) {
                // Form is valid - submit logic here
                alert('Appointment booked successfully! We will contact you soon.');
                const modal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
                modal.hide();
            } else {
                form.reportValidity();
            }
        });
    }
});
</script>

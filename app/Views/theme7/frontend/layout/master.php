<?php
/**
 * ============================================
 * EDUCATIONAL THEME - MASTER LAYOUT
 * ============================================
 * File: theme7/frontend/layout/master.php
 * Purpose: Main layout template for all pages
 * Version: 1.0
 * Last Updated: 2025-11-27
 * ============================================
 */
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1'>
    
    <!-- Dynamic Title Tag -->
    <title>
        <?php
        if (isset($meta_keywords) && !empty($meta_keywords)) {
            echo $title;
        } else {
            echo $title;
        }
        ?>
    </title>

    <!-- Meta Keywords Tag -->
    <?php
    if (isset($meta_keywords) && !empty($meta_keywords)) {
        $i = 0;
        $total = count($meta_keywords) - 1;
        $final_data = "";
        $comm = ", ";
        foreach ($meta_keywords as $keyword) {
            if ($i == $total) {
                $comm = "";
            }
            $final_data .= $keyword['keyword'] . $comm;
            $i++;
        }
        echo '<meta name="keywords" content="' . esc($final_data, 'html') . '">';
    } else {
        echo '<meta name="keywords" content="' . esc($keywords ?? '', 'html') . '">';
    }
    ?>

    <!-- Meta Description Tag -->
    <meta name='description' content='<?= esc($description ?? '', 'html') ?>'>

    <!-- CSS Links (included from cssLinks.php) -->
    <?= $this->include('theme7/frontend/layout/cssLinks') ?>

    <!-- Custom CSS Section for Individual Pages -->
    <?= $this->renderSection('customCss'); ?>

    <!-- Dynamic Color System & Theme Variables -->
    <style>
        :root {
            /* ============================================
               EXISTING CORE COLOR VARIABLES (Backward Compatible)
               ============================================ */
            --header_background: <?= $colors['header_background'] ?? '#ffffff'; ?>;
            --header_text: <?= $colors['header_text'] ?? '#1a1a1a'; ?>;
            --navbar_background: <?= $colors['navbar_background'] ?? '#f8f9fa'; ?>;
            --navbar_text: <?= $colors['navbar_text'] ?? '#1a1a1a'; ?>;
            --searchbar_color: <?= $colors['searchbar_color'] ?? '#ffffff'; ?>;
            --searchbar_button_color: <?= $colors['searchbar_button_color'] ?? '#2180A1'; ?>;
            --inquiry_button_color: <?= $colors['inquiry_button_color'] ?? '#E67E22'; ?>;
            --footer_background: <?= $colors['header_background'] ?? '#1a1a1a'; ?>;
            --footer_text_color: <?= $colors['header_text'] ?? '#ffffff'; ?>;
            --copyright_background: <?= $colors['copyright_background'] ?? '#0d0d0d'; ?>;
            --copyright_text_color: <?= $colors['copyright_text_color'] ?? '#999999'; ?>;

            /* ============================================
               PRIMARY THEME COLORS (User Customizable)
               ============================================ */
            --primary-color: <?= $user_details['custom_color'] ?? '#2180A1'; ?>;
            --primary-text-color: <?= $user_details['custom_text_color'] ?? '#ffffff'; ?>;
            --accent-color: <?= $colors['inquiry_button_color'] ?? '#E67E22'; ?>;

            /* ============================================
               EDUCATIONAL THEME SPECIFIC COLORS
               ============================================ */
            --card-background: <?= $colors['card_background_color'] ?? '#ffffff'; ?>;
            --card-border: <?= $colors['card_border_color'] ?? '#e2e8f0'; ?>;
            --section-background: <?= $colors['section_background_color'] ?? '#f7f8fc'; ?>;
            --price-highlight: <?= $colors['price_highlight_color'] ?? '#28a745'; ?>;
            
            /* Optional Gradient Colors */
            --gradient-start: <?= $colors['gradient_start_color'] ?? $colors['header_background'] ?? '#2180A1'; ?>;
            --gradient-end: <?= $colors['gradient_end_color'] ?? $colors['header_background'] ?? '#1a5a7a'; ?>;
            --badge-color: <?= $colors['badge_color'] ?? '#ff6b35'; ?>;
            --link-hover: <?= $colors['link_hover_color'] ?? '#E67E22'; ?>;

            /* ============================================
               STATUS & ALERT COLORS
               ============================================ */
            --alert-success: <?= $colors['alert_success_color'] ?? '#28a745'; ?>;
            --alert-error: <?= $colors['alert_error_color'] ?? '#dc3545'; ?>;
            --alert-warning: <?= $colors['alert_warning_color'] ?? '#ffc107'; ?>;
            --alert-info: <?= $colors['alert_info_color'] ?? '#17a2b8'; ?>;

            /* ============================================
               STATIC NEUTRAL COLORS (Design System)
               ============================================ */
            --light-gray: #f7f8fc;
            --gold-accent: #d4af37;
            --success-green: #28a745;
            --text-dark: #2d3748;
            --text-primary: #1a1a1a;
            --text-secondary: #666666;
            --text-muted: #999999;
            --border-light: #e2e8f0;
            --white: #ffffff;
            
            /* Shadows */
            --shadow-xs: rgba(0, 0, 0, 0.05);
            --shadow-sm: rgba(0, 0, 0, 0.1);
            --shadow-md: rgba(0, 0, 0, 0.15);
            --shadow-lg: rgba(0, 0, 0, 0.2);

            /* Layout Dimensions */
            --header-height: 70px;
            --sidebar-width: 280px;
            --sidebar-width-mobile: 60px;
            --border-radius: 8px;
            --border-radius-lg: 12px;
            
            /* Transitions */
            --transition-fast: 150ms;
            --transition-normal: 300ms;
            --transition-slow: 500ms;
            --ease-standard: cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* ============================================
           THEME BODY CLASS STYLING
           ============================================ */
        body.theme-educational {
            --bs-orange-100: <?= $user_details['custom_color'] ?? '#2180A1'; ?>;
            --bs-primary-rgb: <?= $user_details['rbg_custom_color'] ?? '33, 128, 161'; ?>;
        }

        body.theme-custom {
            --bs-orange-100: <?= $user_details['custom_color'] ?? '#2180A1'; ?>;
            --bs-primary-rgb: <?= $user_details['rbg_custom_color'] ?? '33, 128, 161'; ?>;
        }

        /* ============================================
           CUSTOM TEXT COLOR CLASS
           ============================================ */
        .custom-text-color p,
        .custom-text-color {
            color: <?= $user_details['custom_text_color'] ?? '#1a1a1a'; ?> !important;
        }

        /* ============================================
           ENSURE CONSISTENT BASE STYLING
           ============================================ */
        html {
            font-size: 16px;
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--section-background);
            color: var(--text-primary);
        }

        /* Remove default link underline */
        a {
            text-decoration: none !important;
        }
    </style>

</head>

<body class="theme-<?= $user_details['theme_color'] ?? 'educational'; ?>">
    
    <!-- ============================================
         HEADER COMPONENT
         ============================================ -->
    <?= $this->include('theme7/frontend/layout/header') ?>

    <!-- ============================================
         MAIN CONTENT AREA (Rendered from Individual Pages)
         ============================================ -->
    <?= $this->renderSection('contentTheme7'); ?>

    <!-- ============================================
         FOOTER COMPONENT
         ============================================ -->
    <?= $this->include('theme7/frontend/layout/footer') ?>

    <!-- ============================================
         JAVASCRIPT INCLUDES
         ============================================ -->
    <?= $this->include('theme7/frontend/layout/jsLinks') ?>

    <!-- ============================================
         CUSTOM SCRIPTS SECTION (Individual Page Scripts)
         ============================================ -->
    <?= $this->renderSection('customScripts'); ?>

    <!-- ============================================
         PAYMENT STATUS CHECKING & EXTERNAL SCRIPTS
         ============================================ -->
    <?php
    // Get payment status from parent URL
    $url = getenv('PARENT_URL') . '/user/payment-status';
    $post = [
        'base_url' => base_url(),
    ];
    
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $post,
    );
    
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $payment_status  = curl_exec($ch);
    curl_close($ch);
    $payment_status_data = json_decode($payment_status, true);
    
    // Determine if scripts should be disabled based on payment status
    $disable_script = false;
    if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID') {
        $disable_script = true;
    }
    ?>

    <!-- ============================================
         EXTERNAL DATA & SCRIPTS (Conditional)
         ============================================ -->
    <?php if (!$disable_script) : ?>
        <script defer>
            $(function() {
                // Get current URL path
                var eppathurl = window.location.origin + window.location.pathname;
                var eptagmanage = new XMLHttpRequest();
                var getDataUrl = "<?= base_url(); ?>" + '/posts/getAllData/';
                var currentUrl = "<?= site_url(uri_string()); ?>";
                
                // Encode URLs for security
                getDataUrl = btoa(getDataUrl);
                
                // Handle AJAX response
                eptagmanage.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.response !== 0) {
                            var temp = new Array();
                            var mystr = this.response;
                            temp = mystr.split("||||||||||");
                            
                            // Update page title
                            $("head").find("title").remove();
                            $('head').append(temp[0]);
                            
                            // Append external content to body
                            $("body").append(temp[1]);
                        }
                    }
                };
                
                // Send AJAX request
                eptagmanage.open("POST", atob(getDataUrl) + btoa(currentUrl));
                eptagmanage.send();
            });

            // ============================================
            // DYNAMIC META KEYWORDS INJECTION
            // ============================================
            document.addEventListener('DOMContentLoaded', function() {
                var keywords = <?= json_encode($meta_keywords ?? []) ?>;
                
                if (keywords && keywords.length > 0) {
                    // Extract keyword strings
                    var keywordString = keywords.map(function(keyword) {
                        return keyword.keyword;
                    }).join(', ');

                    // Create and append meta tag
                    var metaKeywordsTag = document.createElement('meta');
                    metaKeywordsTag.name = 'keywords';
                    metaKeywordsTag.content = keywordString;
                    document.head.appendChild(metaKeywordsTag);
                }
            });
        </script>
    <?php endif; ?>

</body>

</html>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1'>
    <title>
        <?php
        if (isset($meta_keywords) && !empty($meta_keywords)) {
            $i = 0;
            $total = count($meta_keywords) - 1;
            $comm = ", ";
            if ($i == $total) {
                $comm = "";
            }
            foreach ($meta_keywords as $keyword) {
                if ($i == $total) {
                    $comm = "";
                }
                $keyword['keyword'] . $comm;
                $i++;
            }
            echo $title;
        } else {
            echo $title;
        }
        ?>
    </title>
    <?php
    if (isset($meta_keywords) && !empty($meta_keywords)) {
        $i = 0;
        $total = count($meta_keywords) - 1;
        $final_data = "";
        $comm = "";
        $comm = ", ";
        if ($i == $total) {
            $comm = "";
        }
        foreach ($meta_keywords as $keyword) {
            if ($i == $total) {
                $comm = "";
            }
            $final_data .= $keyword['keyword'] . $comm;
            $i++;
        }
        '<meta name="keywords" content="' . $final_data . '">';
    } else {
        echo '<meta name="keywords" content="' . $keywords . '" >';
    }
    ?>

    <meta name='description' content='<?= $description ?>'>
    <?= $this->include('theme5/frontend/layout/cssLinks') ?>
    <?= $this->renderSection('customCss'); ?>

    <style>
        :root {
            /* --- Medical Theme Color Variables (Dynamic from DB) --- */
            --header_background: <?= $colors['header_background'] ?? '#003d7a'; ?>;
            --header_text: <?= $colors['header_text'] ?? '#ffffff'; ?>;
            --navbar_text: <?= $colors['navbar_text'] ?? '#1a1a1a'; ?>;
            --inquiry_button_color: <?= $colors['inquiry_button_color'] ?? '#008080'; ?>;
            --navbar_background: <?= $colors['navbar_background'] ?? '#003d7a'; ?>;
            --appointment_button_color: <?= $colors['inquiry_button_color'] ?? '#008080'; ?>;
            --copyright_background: <?= $colors['copyright_background'] ?? '#003d7a'; ?>;
            --copyright_text_color: <?= $colors['copyright_text_color'] ?? '#ffffff'; ?>;
            
            <?php if ($user_details['theme_mode'] === 'dark'): ?>
                --theme_mode_color: #0f1419;
                --theme_surface_color: #1a1f2e;
            <?php else: ?>
                --theme_mode_color: #f8fafb;
                --theme_surface_color: #f8fafb;
            <?php endif; ?>

            /* --- Medical Theme Extensions with Healthcare Focus --- */
            --accent-color: var(--inquiry_button_color, #008080);
            --medical-blue: <?= !empty($colors['navbar_background']) ? $colors['navbar_background'] : '#003d7a'; ?>;
            --medical-teal: #008080;
            --light-background: #e8f4f8;
            --trust-green: #28a745;
            --alert-red: #dc3545;
            --text-dark: var(--navbar_text, #1a1a1a);
            --border-light: #d4e4ed;
            --patient-white: #ffffff;

            /* --- Gradients for Medical Professional Look --- */
            --topbar-gradient-start: <?= $colors['header_background'] ?? '#003d7a'; ?>;
            --topbar-gradient-end: <?= $colors['header_background'] ?? '#003d7a'; ?>;

            --primary-color: <?= $user_details['custom_color']; ?>;
            --primary-text-color: <?= $user_details['custom_text_color']; ?>;
            
            /* --- Medical Theme Advanced Customization --- */
            --primary-accent: <?= $colors['primary_accent_color'] ?? '#008080'; ?>;
            --card-bg: <?= $colors['card_background_color'] ?? '#ffffff'; ?>;
            --alert-color: <?= $colors['alert_color'] ?? '#ff3860'; ?>;
            --gradient-start: <?= $colors['gradient_start_color'] ?? ($colors['header_background'] ?? '#003d7a'); ?>;
            --gradient-end: <?= $colors['gradient_end_color'] ?? '#006666'; ?>;
            --border-color: <?= $colors['border_color'] ?? '#d4e4ed'; ?>;
        }

        body {
            background-color: var(--theme_mode_color) !important;
        }

        body.theme-custom {
            --bs-orange-100: <?= $user_details['custom_color']; ?>;
            --bs-primary-rgb: <?= $user_details['rbg_custom_color']; ?>;
        }

        .custom-text-color p,
        .custom-text-color {
            color: <?= $user_details['custom_text_color']; ?> !important;
        }
    </style>
</head>

<body class="theme-<?= $user_details['theme_color']; ?>">
    <?= $this->include('theme5/frontend/layout/header') ?>
    <?= $this->renderSection('contenttheme5'); ?>
    <?= $this->include('theme5/frontend/layout/footer') ?>

    <?= $this->include('theme5/frontend/layout/jsLinks') ?>
    <?= $this->renderSection('customScripts'); ?>
    
    <?php 
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
    if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID') {
        $disable_script = true;
    } else {
        $disable_script = false;
    }
    ?>
       
    <?php if (!$disable_script) : ?>
        <script defer>
            $(function() {
                var eppathurl = window.location.origin + window.location.pathname;
                var eptagmanage = new XMLHttpRequest();
                var getDataUrl = "<?= base_url(); ?>" + '/posts/getAllData/';
                var currentUrl = "<?= site_url(uri_string()); ?>";
                getDataUrl = btoa(getDataUrl);
                eptagmanage.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.response !== 0) {
                            var temp = new Array();
                            var mystr = this.response;
                            temp = mystr.split("||||||||||");
                            $("head").find("title").remove();
                            $('head').append(temp[0]);
                            $("body").append(temp[1]);
                        }
                    }
                };
                eptagmanage.open("POST", atob(getDataUrl) + btoa(currentUrl));
                eptagmanage.send();
            })
            
            document.addEventListener('DOMContentLoaded', function() {
                var keywords = <?= json_encode($meta_keywords) ?>;
                if (keywords && keywords.length > 0) {
                    var keywordString = keywords.map(function(keyword) {
                        return keyword.keyword;
                    }).join(', ');
    
                    var metaKeywordsTag = document.createElement('meta');
                    metaKeywordsTag.name = 'keywords';
                    metaKeywordsTag.content = keywordString;
                    document.head.appendChild(metaKeywordsTag);
                }
            });
            
            // Navbar scroll effect for medical theme
            document.addEventListener('DOMContentLoaded', function() {
                const navbar = document.querySelector('.main-navbar');
                
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 100) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });
                
                // Close mobile menu when clicking on a link
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
                const navbarCollapse = document.querySelector('.navbar-collapse');
                
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth < 992) {
                            navbarCollapse.classList.remove('show');
                        }
                    });
                });
            });
        </script>
    <?php endif; ?>
</body>

</html>
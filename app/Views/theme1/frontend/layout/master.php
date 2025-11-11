<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no, maximun-scale=1'>
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
    <?= $this->include('theme1/frontend/layout/cssLinks') ?>
    <?= $this->renderSection('customCss'); ?>

    <style>
        :root {
            /* --- Existing Core Color Variables --- */
            --header_background: <?= $colors['header_background']; ?>;
            --header_text: <?= $colors['header_text']; ?>;
            --navbar_background: <?= $colors['navbar_background']; ?>;
            --navbar_text: <?= $colors['navbar_text']; ?>;
            --searchbar_color: <?= $colors['searchbar_color']; ?>;
            --searchbar_button_color: <?= $colors['searchbar_button_color']; ?>;
            --inquiry_button_color: <?= $colors['inquiry_button_color']; ?>;
            --footer_background: <?= $colors['footer_background']; ?>;
            --footer_text_color: <?= $colors['footer_text_color']; ?>;
            --copyright_background: <?= $colors['copyright_background']; ?>;
            --copyright_text_color: <?= $colors['copyright_text_color']; ?>;
            
            /* --- Main Theme Colors --- */
            --primary-color: <?= $user_details['custom_color']; ?>;
            --primary-text-color: <?= $user_details['custom_text_color']; ?>;
            --accent-color: var(--inquiry_button_color);
            
            /* --- New Dynamic Colors (Priority 1) --- */
            --card-background: <?= $colors['card_background_color'] ?? '#ffffff'; ?>;
            --card-border: <?= $colors['card_border_color'] ?? '#e2e8f0'; ?>;
            --section-background: <?= $colors['section_background_color'] ?? '#f7f8fc'; ?>;
            --price-highlight: <?= $colors['price_highlight_color'] ?? '#28a745'; ?>;
            
            /* --- New Dynamic Colors (Priority 2 - Optional) --- */
            --gradient-start: <?= $colors['gradient_start_color'] ?? $colors['header_background']; ?>;
            --gradient-end: <?= $colors['gradient_end_color'] ?? $colors['header_background']; ?>;
            --badge-color: <?= $colors['badge_color'] ?? '#ff6b35'; ?>;
            --link-hover: <?= $colors['link_hover_color'] ?? '#d4af37'; ?>;
            --alert-success: <?= $colors['alert_success_color'] ?? '#28a745'; ?>;
            --alert-error: <?= $colors['alert_error_color'] ?? '#dc3545'; ?>;
            
            /* --- Static Design System Colors --- */
            --light-gray: #f7f8fc;
            --gold-accent: #d4af37;
            --success-green: #28a745;
            --text-dark: #2d3748;
            --border-light: #e2e8f0;
            --white: #ffffff;
            --shadow-sm: rgba(0, 0, 0, 0.1);
            --shadow-md: rgba(0, 0, 0, 0.15);
            --shadow-lg: rgba(0, 0, 0, 0.2);
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
    <?= $this->include('theme1/frontend/layout/header') ?>
    <?= $this->renderSection('contentTheme1'); ?>
    <?= $this->include('theme1/frontend/layout/footer') ?>

    <?= $this->include('theme1/frontend/layout/jsLinks') ?>
    <?= $this->renderSection('customScripts'); ?>
    <!-- <script src="<?= base_url(); ?>/assets/js/pages/common.js"></script> -->
    
     <?php $url = getenv('PARENT_URL') . '/user/payment-status';
      $post = [
          //'base_url' => 'demo.sartiaglobal.com',
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
         if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID'){
            $disable_script = true;
          }else{
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
                            // document.body.innerHTML = document.body.innerHTML + temp[1];
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
        </script>
    <?php endif; ?>
</body>

</html>
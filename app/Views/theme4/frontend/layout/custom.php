<?php
if (!empty($custom_section)) {
    foreach ($custom_section as $custom) {
        if ($custom['id'] != $myurl['section_id']) continue;

        $img = !empty($custom['upload_image'])
            ? base_url().'/public/uploads/custom_images/' . $custom['upload_image']
            : base_url().'/public/assets/img/bg-empty.jpg';

        $position = $custom['position'] ?? 'right';
        
        $hasImage = $custom['image_option'] ?? 'no';



        $isStretch = in_array($position, ['stretch-left', 'stretch-right']);
        
        $imageOnLeft = in_array($position, ['left', 'stretch-left']);

        $design = $custom['design_option'] ?? '1';
        
        $design_path = "theme4/frontend/layout/customsections/design_{$design}.php";
        $view_path = "theme4/frontend/layout/customsections/design_{$design}";

        if (file_exists(APPPATH . "Views/" . $design_path)) {
            echo view($view_path, [
                'custom' => $custom,
                'img' => $img,
                'hasImage' => $hasImage,
                'position' => $position,
                'isStretch' => $isStretch,
                'imageOnLeft' => $imageOnLeft,
            ]);
        } else {
            echo "<p class='text-danger text-center py-5'>Design template not found for option {$design}.</p>";
        }
    }
}
?>

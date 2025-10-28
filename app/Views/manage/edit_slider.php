<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('manage/all-slider'); ?>">Slider Images</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<input type="hidden" name="slider_id" id="slider_id" value="<?= $slider_data->id; ?>">
				<form class="py-4 px-2" id="EditSliders">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Slider Image <span class="text-danger">*</span></label>
								<input type="file" class="form-control" accept="image/png, image/jpeg" name="slider_image" id="slider_image">
							</div>
							<img src="<?= base_url('public/uploads/slider_images').'/'.$slider_data->slider_image; ?>" class="img-preview w-300" />							
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Heading Color<span class="text-danger">*</span></label>
								<input type="color" class="form-control" name="heading_color" id="heading_color" value="<?= $slider_data->heading_color; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Text Color <span class="text-danger">*</span></label>
								<input type="color" class="form-control" name="text_color" id="text_color" value="<?= $slider_data->text_color; ?>">
							</div>
						</div>

						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="name" id="name" value="<?= $slider_data->name; ?>" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" value="<?= $slider_data->title; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Content Position</label>
								<select class="form-control" name="contentPosition" id="contentPosition">
									<option value="left" <?php if ($slider_data->content_position == 'left') echo 'selected'; ?>>Left </option>
									<option value="right" <?php if ($slider_data->content_position == 'right') echo 'selected'; ?>>Right </option>
									<option value="center" <?php if ($slider_data->content_position == 'center') echo 'selected'; ?>>Center </option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label>Description</label>
								
								<textarea class="form-control" name="description" rows="3"><?= $slider_data->description; ?></textarea>

							</div>
						</div>

						

						<div class="col-md-4">
							<div class="form-group">
								<label>Blur on Description</label>
								<select class="form-control" name="blurDescription" id="blurDescription">
									<option value="yes" <?php if ($slider_data->blur_on_description == 'yes') echo 'selected'; ?>>Yes </option>
									<option value="no" <?php if ($slider_data->blur_on_description == 'no') echo 'selected'; ?>>No </option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Blur on Image</label>
								<select class="form-control" name="imageBlur" id="imageBlur">
									<option value="yes" <?php if ($slider_data->image_blur == 'yes') echo 'selected'; ?>>Yes </option>
									<option value="no" <?php if ($slider_data->image_blur == 'no') echo 'selected'; ?>>No </option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Title Font Size</label>
								<select class="form-control" name="titleFontSize" id="titleFontSize">
								<?php
									$selected_size = $slider_data->title_font_size; 

									for ($size = 11; $size <= 70; $size++) {
										$selected = ($size == $selected_size) ? 'selected' : ''; 
										echo "<option value=\"$size\" $selected>$size</option>"; 
									}
								?>

								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Description Font Size</label>
								<select class="form-control" name="descriptionFontSize" id="descriptionFontSize">
									<?php
									$selected_description_size = $slider_data->description_font_size;
									for ($size = 11; $size <= 36; $size++) {
										$selected = ($size == $selected_description_size) ? 'selected' : ''; 
										echo "<option value=\"$size\" $selected>$size</option>"; 
									}
									?>


								</select>
							</div>
						</div>

						

						<div class="col-md-4">
							<div class="form-group">
								<label>Title Font Style</label>
								<select class="form-control" name="fontStyle" id="fontStyle">
									<option value="inherit" <?php if ($slider_data->title_font_family == 'inherit') echo 'selected'; ?>>Default</option>
									<option value="cursive" <?php if ($slider_data->title_font_family == 'cursive') echo 'selected'; ?>>Cursive</option>
									<option value="monospace" <?php if ($slider_data->title_font_family == 'monospace') echo 'selected'; ?>>Monospace</option>
									<option value="sans-serif" <?php if ($slider_data->title_font_family == 'sans-serif') echo 'selected'; ?>>Sans-Serif</option>
									<option value="serif" <?php if ($slider_data->title_font_family == 'serif') echo 'selected'; ?>>Serif</option>
									<option value="work_sans" <?php if ($slider_data->title_font_family == 'work_sans') echo 'selected'; ?>>Work Sans</option>
									<option value="tai_heritage" <?php if ($slider_data->title_font_family == 'tai_heritage') echo 'selected'; ?>>Tai Heritage</option>
									<option value="roboto_slab" <?php if ($slider_data->title_font_family == 'roboto_slab') echo 'selected'; ?>>Roboto Slab</option>
									<option value="raleway" <?php if ($slider_data->title_font_family == 'raleway') echo 'selected'; ?>>Raleway</option>
									<option value="oswald" <?php if ($slider_data->title_font_family == 'oswald') echo 'selected'; ?>>Oswald</option>
									<option value="lora" <?php if ($slider_data->title_font_family == 'lora') echo 'selected'; ?>>Lora</option>
									<option value="joan" <?php if ($slider_data->title_font_family == 'joan') echo 'selected'; ?>>Joan</option>
									<option value="fascinate" <?php if ($slider_data->title_font_family == 'fascinate') echo 'selected'; ?>>Fascinate</option>
									<option value="rototo-bold" <?php if ($slider_data->title_font_family == 'rototo-bold') echo 'selected'; ?>>Rototo Bold</option>
									<option value="rototo-italic" <?php if ($slider_data->title_font_family == 'rototo-italic') echo 'selected'; ?>>Rototo Italic</option>
									<option value="rototo-bold-italic" <?php if ($slider_data->title_font_family == 'rototo-bold-italic') echo 'selected'; ?>>Rototo Bold Italic</option>
									<option value="rototo-regular" <?php if ($slider_data->title_font_family == 'rototo-regular') echo 'selected'; ?>>Roboto Regular</option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Description Font Style</label>
								<select class="form-control" name="descFontStyle" id="descFontStyle">
									<option value="inherit" <?php if ($slider_data->desc_font_family == 'inherit') echo 'selected'; ?>>Cursive</option>
									<option value="cursive" <?php if ($slider_data->desc_font_family == 'cursive') echo 'selected'; ?>>Default</option>
									<option value="monospace" <?php if ($slider_data->desc_font_family == 'monospace') echo 'selected'; ?>>Monospace</option>
									<option value="sans-serif" <?php if ($slider_data->desc_font_family == 'sans-serif') echo 'selected'; ?>>Sans-Serif</option>
									<option value="serif" <?php if ($slider_data->desc_font_family == 'serif') echo 'selected'; ?>>Serif</option>
									<option value="work_sans" <?php if ($slider_data->desc_font_family == 'work_sans') echo 'selected'; ?>>Work Sans</option>
									<option value="tai_heritage" <?php if ($slider_data->desc_font_family == 'tai_heritage') echo 'selected'; ?>>Tai Heritage</option>
									<option value="roboto_slab" <?php if ($slider_data->desc_font_family == 'roboto_slab') echo 'selected'; ?>>Roboto Slab</option>
									<option value="raleway" <?php if ($slider_data->desc_font_family == 'raleway') echo 'selected'; ?>>Raleway</option>
									<option value="oswald" <?php if ($slider_data->desc_font_family == 'oswald') echo 'selected'; ?>>Oswald</option>
									<option value="lora" <?php if ($slider_data->desc_font_family == 'lora') echo 'selected'; ?>>Lora</option>
									<option value="joan" <?php if ($slider_data->desc_font_family == 'joan') echo 'selected'; ?>>Joan</option>
									<option value="fascinate" <?php if ($slider_data->desc_font_family == 'fascinate') echo 'selected'; ?>>Fascinate</option>
									<option value="rototo-bold" <?php if ($slider_data->desc_font_family == 'rototo-bold') echo 'selected'; ?>>Rototo Bold</option>
									<option value="rototo-italic" <?php if ($slider_data->desc_font_family == 'rototo-italic') echo 'selected'; ?>>Rototo Italic</option>
									<option value="rototo-bold-italic" <?php if ($slider_data->desc_font_family == 'rototo-bold-italic') echo 'selected'; ?>>Rototo Bold Italic</option>
									<option value="rototo-regular" <?php if ($slider_data->desc_font_family == 'rototo-regular') echo 'selected'; ?>>Roboto Regular</option>
								</select>
							</div>
						</div>

						

					</div>
					<div>
						<button class="btn btn-primary btn-sm">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Row end -->
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$(document).ready(function() {
		$('.pages').select2();
		$('.slider_name').select2();
	});
</script>

<script src="<?php echo base_url('public/assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>
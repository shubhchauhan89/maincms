<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Content Management</a></li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('/manage/all-slider') ?>">All Slider</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<!-- End Page Header -->
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<form class="py-4 px-2" id="AddNewSliders">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Media Type</label>
								<div>
									<input type="radio" name="media_type" id="media_type_image" value="image" checked>
									<label for="media_type_image">Images</label>
									
									<input type="radio" name="media_type" id="media_type_video" value="video">
									<label for="media_type_video">Video</label>
								</div>
							</div>

							<!-- Video Upload -->
							<div id="video-upload-section" style="display: none;">
								<div class="form-group">
									<label>Upload Video (Single)</label>
									<input type="file" class="form-control" accept="video/mp4, video/webm, video/ogg" name="video" id="video">
									<small>Max 100MB - MP4, WebM, OGG</small>
								</div>
								<video id="video-preview" width="100" height="100" style="display:none; margin-top: 10px;"></video>
							</div>

							<!-- Image Upload -->
							<div id="image-upload-section">
								<div class="form-group">
									<label>Upload Image</label>
									<input type="file" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp" name="slider_images" id="slider_images">
									<small>Max 5MB each - PNG, JPEG, WebP - Max 20 images</small>
								</div>
								<div id="image-preview-container" style="margin-top: 10px;">
									<!-- Previews here -->
								</div>
							</div>
						</div>



						<div class="col-md-4">
							<div class="form-group">
								<label>Heading Color<span class="text-danger">*</span></label>
								<input type="color" class="form-control" name="heading_color" id="heading_color">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Text Color <span class="text-danger">*</span></label>
								<input type="color" class="form-control" name="text_color" id="text_color">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="name" id="name" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" id="title">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Content Position</label>
								<select class="form-control" name="contentPosition" id="contentPosition">
									<option value="left">Left </option>
									<option value="right" >Right </option>
									<option value="center" >Center </option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="description" id="description" rows="3"></textarea>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Blur on Description</label>
								<select class="form-control" name="blurDescription" id="blurDescription">
									<option value="yes" >Yes </option>
									<option value="no">No </option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Blur on Image</label>
								<select class="form-control" name="imageBlur" id="imageBlur">
									<option value="yes">Yes </option>
									<option value="no">No </option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Title Font Size</label>
								<select class="form-control" name="titleFontSize" id="titleFontSize">
								<?php
									

									for ($size = 11; $size <= 70; $size++) {
										echo "<option value=\"$size\">$size</option>"; 
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
									for ($size = 11; $size <= 36; $size++) {
										echo "<option value=\"$size\" >$size</option>"; 
									}
									?>


								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Title Font Style</label>
								<select class="form-control" name="fontStyle" id="fontStyle">
									<option value="inherit">Default</option>
									<option value="cursive">Cursive</option>
									<option value="monospace">Monospace</option>
									<option value="sans-serif">Sans-Serif</option>
									<option value="serif">Serif</option>
									<option value="work_sans">Work Sans</option>
									<option value="tai_heritage">Tai Heritage</option>
									<option value="roboto_slab">Roboto Slab</option>
									<option value="raleway">Raleway</option>
									<option value="oswald">Oswald</option>
									<option value="lora">Lora</option>
									<option value="joan">Joan</option>
									<option value="fascinate">Fascinate</option>
									<option value="rototo-bold">Rototo Bold</option>
									<option value="rototo-italic">Rototo Italic</option>
									<option value="rototo-bold-italic">Rototo Bold Italic</option>
									<option value="rototo-regular">Roboto Regular</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Description Font Style</label>
								<select class="form-control" name="descFontStyle" id="descFontStyle">
									<option value="cursive">Default</option>
									<option value="inherit">inherit</option>
									<option value="monospace">Monospace</option>
									<option value="sans-serif">Sans-Serif</option>
									<option value="serif">Serif</option>
									<option value="work_sans">Work Sans</option>
									<option value="tai_heritage">Tai Heritage</option>
									<option value="roboto_slab">Roboto Slab</option>
									<option value="raleway">Raleway</option>
									<option value="oswald">Oswald</option>
									<option value="lora">Lora</option>
									<option value="joan">Joan</option>
									<option value="fascinate">Fascinate</option>
									<option value="rototo-bold">Rototo Bold</option>
									<option value="rototo-italic">Rototo Italic</option>
									<option value="rototo-bold-italic">Rototo Bold Italic</option>
									<option value="rototo-regular">Roboto Regular</option>
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
// Toggle media type
document.querySelectorAll('input[name="media_type"]').forEach(radio => {
    radio.addEventListener('change', function() {
        if (this.value === 'video') {
            document.getElementById('video-upload-section').style.display = 'block';
            document.getElementById('image-upload-section').style.display = 'none';
            document.getElementById('slider_images').removeAttribute('required');
            document.getElementById('video').setAttribute('required', 'required');
        } else {
            document.getElementById('video-upload-section').style.display = 'none';
            document.getElementById('image-upload-section').style.display = 'block';
            document.getElementById('video').removeAttribute('required');
            document.getElementById('slider_images').setAttribute('required', 'required');
        }
    });
});

// Video preview
document.getElementById('video')?.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const video = document.getElementById('video-preview');
            video.src = event.target.result;
            video.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});

// Image previews
document.getElementById('slider_images')?.addEventListener('change', function(e) {
    const container = document.getElementById('image-preview-container');
    container.innerHTML = '';
    
    Array.from(e.target.files).forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(event) {
            const img = document.createElement('img');
            img.src = event.target.result;
            img.width = 100;
            img.height = 100;
            img.style.margin = '5px';
            img.style.border = '1px solid #ddd';
            container.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
});
</script>
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>
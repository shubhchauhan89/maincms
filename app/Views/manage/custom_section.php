<?= $this->extend('template/main'); ?>
<?= $this->section('style'); ?>
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 200px;
        }
        .ck-content .image {
            max-width: 80%;
        }
    </style>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<h6>
<strong></strong>
<marquee style="color:red;"><?php echo "After adding content in manage section, must update Arrange Section from Appearance Menu."; ?></marquee>
</h6>
<!-- End Page Header -->
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<div class=" mt-3 text-right mb-2">
					<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Section</button>
				</div>
				<div class="table-responsive">
					<table class="table" id="Custom_slider_table">
						<thead>
							<th>#</th>
							<th>Heading</th>
							<th>Description</th>
							<th>Images</th>
							<th>Page</th>
							<th>Position</th>
							<th>Created at</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $num = 1;
							if ($data) : foreach ($data as $value) : 
								$img = !empty($value->upload_image)?
									base_url().'/public/uploads/custom_images/'.$value->upload_image:
									base_url().'/public/assets/img/empty.png';
								?>
									<tr id="<?= $value->id ?>">
										<td><?= $num; ?></td>
										<td class="custom_wdth"><?= $value->heading; ?></td>
										<td class="custom_wdth"><?= $value->description; ?></td>
										<td>
											<a href="<?= $img;?>" target="_blank" >
												<img style="width:50px; height:50px;" src="<?= $img;?>" alt="" />
											</a>
										</td>
										<td><?php
											$arr = json_decode($value->page_id);
											$arr = getSubMenuPageName($arr[0]->menu, $arr[0]->sub_menu);
											echo $arr;
										?></td>
										<td><?= $value->position; ?></td>
										<td><?= $value->created_at; ?></td>
										<td>
											<button class="btn btn-primary btn-sm" onclick="editCustom_section(<?= $value->id ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
											<button class="btn btn-danger btn-sm" onclick="deleteCustom_section(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</td>
									</tr>
							<?php $num++;
								endforeach;
							endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row end -->

<!--Start Offcanvas-->
<div class="offcanvas offcanvas-end" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width:650px;">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Add Custom Section</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<input type="hidden" name="section_id" id="section_id">
		<form id="AddCustomSection">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<lable>Select Page</lable>
						<select name="page_id" id="page_id" class="form-control">
							<option value="">Select</option>
							<?php if ($pages) : foreach ($pages as $value) : ?>
									<?php $ids = '';
									$optiontext = '';
									// if (empty($value->service_id) && empty($value->product_id)) {
									// 	$ids = $value->menu_name;
									// 	$optiontext = $value->menu_name;
									// } else if (!empty($value->service_id)) {
									// 	$ids = $value->menu_name . "," . $value->service_id;
									// 	$optiontext = $value->menu_name . " - " . $value->service;
									// } else {
									// 	$ids = $value->menu_name . "," . $value->product_id;
									// 	$optiontext = $value->menu_name . " - " . $value->product_name;
									// }
									$ids = $value->menu_id . ", 0, ".$value->sub_menu;
									$optiontext = $value->menu_name;
									?>
									<option value="<?= $ids; ?>"><?= $optiontext; ?></option>
							<?php endforeach;
							endif; ?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<lable>Select Design</lable>
						<select name="design_option" id="design_option" class="form-control">
							<option value="1">Design 1: Content</option>
							<option value="2">Design 2: Specifications Showcase</option>
							<option value="3">Design 3</option>
						</select>
					</div>
				</div>
				

				<div id="features-section" style="display: none;">
					<hr>
					<h6 class="mb-3"><strong>Key Features/Specifications</strong></h6>
					<small class="text-muted d-block mb-3">
						<i class="fas fa-info-circle"></i> Add features that will be displayed with real estate icons
					</small>
					<div id="features-container">
						<div class="feature-item mb-3 p-3 border rounded" style="background: #f8f9fa;">
							<div class="row align-items-end">
								<div class="col-md-9">
									<label class="small"><strong>Feature Title</strong></label>
									<input type="text" class="form-control feature-title" placeholder="e.g., Swimming Pool, Gym, WiFi" required>
								</div>
								<div class="col-md-3">
									<button type="button" class="btn btn-sm btn-outline-danger remove-feature" style="display: none;">
										<i class="fa fa-trash"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-sm btn-outline-primary" id="add-feature">
						<i class="fa fa-plus me-2"></i>Add Feature
					</button>
            	</div>

				<!-- Statistics Section (for Design 3) -->
				<div id="statistics-section" style="display: none;">
					<hr>
					<h6 class="mb-3"><strong>Key Statistics/Numbers</strong></h6>
					<small class="text-muted d-block mb-3">
						<i class="fas fa-info-circle"></i> Add statistics that will be displayed as impressive numbers
					</small>
					<div id="statistics-container">
						<div class="statistic-item mb-3 p-3 border rounded" style="background: #f8f9fa;">
							<div class="row align-items-end">
								<div class="col-md-4">
									<label class="small"><strong>Number</strong></label>
									<input type="text" class="form-control statistic-number" placeholder="e.g., 500+" required>
								</div>
								<div class="col-md-7">
									<label class="small"><strong>Label</strong></label>
									<input type="text" class="form-control statistic-label" placeholder="e.g., Happy Clients" required>
								</div>
								<div class="col-md-1">
									<button type="button" class="btn btn-sm btn-outline-danger remove-statistic" style="display: none;">
										<i class="fa fa-trash"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-sm btn-outline-primary" id="add-statistic">
						<i class="fa fa-plus me-2"></i>Add Statistic
					</button>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<lable>Do you Want to Upload Image ?</lable>
						<select name="option_image" id="option_image" class="form-control">
							<option value="">Select</option>
							<option value="yes">Yes</option>
							<option value="no">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<lable>Upload Image</lable>
						<input type="file" name="upload_image" id="upload_image" class="form-control">
						<input type="hidden" name="custom_upload_image_temp" id="custom_upload_image_temp" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<lable>Image Position</lable>
						<select name="position" id="position" class="form-control">
							<option value="left">Left</option>
							<option value="right">Right</option>
							<option value="stretch-left">Stretch Left</option>
							<option value="stretch-right">Stretch Right</option>
						</select>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<lable>Heading</lable>
						<input type="text" name="heading" id="heading" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<lable>Description</lable>
					<textarea class="form-control" name="description" id="description"></textarea>
				</div>
			</div>
			<div>
				<Button class="btn btn-primary btn-sm" id="section_btn">Save</Button>
			</div>
		</form>
	</div>
</div>
<!--End Offcanvas-->

</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?php echo base_url('public/assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url()?>/public/assets/js/othercustomscripts.js"></script>
<script>
	$(document).ready(function() {
		$('#Custom_slider_table').DataTable({
			responsive: false,
		});
		CKEDITOR.replace("description", {
			toolbarGroups: [
				{ name: "clipboard", groups: ["clipboard", "undo"] },
				{ name: "basicstyles", groups: ["basicstyles", "cleanup"] },
				{
					name: "paragraph",
					groups: ["list", "indent", "blocks", "align"],
				},
				{ name: "links" },
				{ name: "insert" },
				{ name: "colors" },
				{ name: "tools" },
			],
		});
	})

	document.addEventListener("DOMContentLoaded", function() {
            const selectElement = document.getElementById('option_image');
            const uploadImageField = document.getElementById('upload_image').parentNode.parentNode;

            // Initially hide the upload image field
            uploadImageField.style.display = 'none';

            selectElement.addEventListener('change', function() {
                if (selectElement.value === 'yes') {
                    uploadImageField.style.display = 'block';
                } else {
                    uploadImageField.style.display = 'none';
                }
            });
        });
	
    // Real Estate Icons Mapping
    const REAL_ESTATE_ICONS = {
        'pool': 'fa-swimming-pool',
        'swim': 'fa-swimming-pool',
        'swimming': 'fa-swimming-pool',
        'gym': 'fa-dumbbell',
        'fitness': 'fa-dumbbell',
        'workout': 'fa-dumbbell',
        'wifi': 'fa-wifi',
        'internet': 'fa-wifi',
        'security': 'fa-shield-alt',
        'cctv': 'fa-video',
        'parking': 'fa-parking',
        'car': 'fa-car',
        'garden': 'fa-leaf',
        'park': 'fa-leaf',
        'green': 'fa-leaf',
        'kitchen': 'fa-utensils',
        'balcony': 'fa-building',
        'terrace': 'fa-building',
        'elevator': 'fa-arrows-alt-v',
        'lift': 'fa-arrows-alt-v',
        'basketball': 'fa-basketball-ball',
        'court': 'fa-basketball-ball',
        'cricket': 'fa-baseball-ball',
        'tennis': 'fa-baseball-ball',
        'hall': 'fa-home',
        'room': 'fa-door-open',
        'bed': 'fa-bed',
        'bedroom': 'fa-bed',
        'ac': 'fa-snowflake',
        'air': 'fa-snowflake',
        'heating': 'fa-fire',
        'water': 'fa-water',
        'solar': 'fa-sun',
        'power': 'fa-bolt',
        'generator': 'fa-bolt',
        'laundry': 'fa-tshirt',
        'doorman': 'fa-user-tie',
        'concierge': 'fa-user-tie',
        'restaurant': 'fa-utensils',
        'cafe': 'fa-coffee',
        'bar': 'fa-wine-glass-alt',
        'library': 'fa-book',
        'theater': 'fa-film',
        'cinema': 'fa-film',
        'spa': 'fa-spa',
        'sauna': 'fa-hot-tub',
        'meditation': 'fa-om',
        'yoga': 'fa-om',
        'lounge': 'fa-couch',
        'seating': 'fa-couch',
        'office': 'fa-briefcase',
        'workspace': 'fa-briefcase',
        'pet': 'fa-paw',
        'dog': 'fa-paw',
        'school': 'fa-graduation-cap',
        'medical': 'fa-hospital',
        'clinic': 'fa-hospital',
        'security-gate': 'fa-gate',
        'gate': 'fa-gate',
        'gated': 'fa-gate',
        'playground': 'fa-child',
        'kids': 'fa-child',
    };

    // Get icon for feature title
    function getIconForFeature(title) {
        const lowerTitle = title.toLowerCase().trim();
        
        // Check exact match first
        if (REAL_ESTATE_ICONS[lowerTitle]) {
            return REAL_ESTATE_ICONS[lowerTitle];
        }
        
        // Check partial matches
        for (const [key, icon] of Object.entries(REAL_ESTATE_ICONS)) {
            if (lowerTitle.includes(key) || key.includes(lowerTitle.split(' ')[0])) {
                return icon;
            }
        }
        
        // Default icon
        return 'fa-star';
    }

	document.getElementById('design_option').addEventListener('change', function() {
        const featuresSection = document.getElementById('features-section');
        const statisticsSection = document.getElementById('statistics-section');
        const descriptionLabel = document.querySelector('label[for="description"]');
        
        if (this.value === '2') {
            featuresSection.style.display = 'block';
            statisticsSection.style.display = 'none';
            descriptionLabel.style.display = 'none';
            document.getElementById('description').style.display = 'none';
        } else if (this.value === '3') {
            featuresSection.style.display = 'none';
            statisticsSection.style.display = 'block';
            descriptionLabel.style.display = 'block';
            document.getElementById('description').style.display = 'block';
        } else {
            featuresSection.style.display = 'none';
            statisticsSection.style.display = 'none';
            descriptionLabel.style.display = 'block';
            document.getElementById('description').style.display = 'block';
        }
    });

    // Add feature button
    document.getElementById('add-feature').addEventListener('click', function() {
        const container = document.getElementById('features-container');
        const itemCount = container.querySelectorAll('.feature-item').length;
        
        const newFeature = document.createElement('div');
        newFeature.className = 'feature-item mb-3 p-3 border rounded';
        newFeature.style.background = '#f8f9fa';
        newFeature.innerHTML = `
            <div class="row align-items-end">
                <div class="col-md-9">
                    <label class="small"><strong>Feature Title</strong></label>
                    <input type="text" class="form-control feature-title" placeholder="e.g., Swimming Pool, Gym, WiFi" required>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-sm btn-outline-danger remove-feature">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        
        container.appendChild(newFeature);
        
        // Add remove functionality
        newFeature.querySelector('.remove-feature').addEventListener('click', function(e) {
            e.preventDefault();
            newFeature.remove();
            updateRemoveButtons();
        });
        
        updateRemoveButtons();
    });

    // Update remove button visibility
    function updateRemoveButtons() {
        const items = document.querySelectorAll('.feature-item');
        items.forEach((item, index) => {
            const removeBtn = item.querySelector('.remove-feature');
            // Show remove button only if there's more than 1 feature
            if (items.length > 1) {
                removeBtn.style.display = 'block';
            } else {
                removeBtn.style.display = 'none';
            }
        });
    }

    // Initial call to update buttons
    updateRemoveButtons();

    // Collect features data before form submission
    document.getElementById('AddCustomSection').addEventListener('submit', function(e) {
        const designOption = document.getElementById('design_option').value;
        
        if (designOption === '2') {
            const features = [];
            document.querySelectorAll('.feature-item').forEach(item => {
                const title = item.querySelector('.feature-title').value;
                if (title) {
                    features.push({ 
                        title: title,
                        icon: getIconForFeature(title)
                    });
                }
            });
            
            if (features.length === 0) {
                e.preventDefault();
                Swal.fire({ 
                    icon: "warning", 
                    text: "Please add at least one feature for Design 2" 
                });
                return;
            }
            
            // Add features as hidden input
            let featuresInput = document.querySelector('input[name="features_data"]');
            if (!featuresInput) {
                featuresInput = document.createElement('input');
                featuresInput.type = 'hidden';
                featuresInput.name = 'features_data';
                this.appendChild(featuresInput);
            }
            featuresInput.value = JSON.stringify(features);
        } else {
            // For Design 1, ensure features data is empty
            let featuresInput = document.querySelector('input[name="features_data"]');
            if (featuresInput) {
                featuresInput.remove();
            }
        }
    });

    // Reset form on offcanvas hide
    document.getElementById('offcanvasRight').addEventListener('hidden.bs.offcanvas', function() {
        document.getElementById('AddCustomSection').reset();
        document.getElementById('section_id').val = '';
        document.getElementById('offcanvasRightLabel').textContent = 'Add Custom Section';
        document.getElementById('section_btn').textContent = 'Save';
        document.getElementById('section_btn').innerHTML = '<i class="fa fa-save me-2"></i>Save';
        
        // Reset features section
        const container = document.getElementById('features-container');
        container.innerHTML = `
            <div class="feature-item mb-3 p-3 border rounded" style="background: #f8f9fa;">
                <div class="row align-items-end">
                    <div class="col-md-9">
                        <label class="small"><strong>Feature Title</strong></label>
                        <input type="text" class="form-control feature-title" placeholder="e.g., Swimming Pool, Gym, WiFi" required>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-feature" style="display: none;">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;
        updateRemoveButtons();
    });

    // Add statistic button
    document.getElementById('add-statistic').addEventListener('click', function() {
        const container = document.getElementById('statistics-container');
        const itemCount = container.querySelectorAll('.statistic-item').length;
        
        const newStatistic = document.createElement('div');
        newStatistic.className = 'statistic-item mb-3 p-3 border rounded';
        newStatistic.style.background = '#f8f9fa';
        newStatistic.innerHTML = `
            <div class="row align-items-end">
                <div class="col-md-4">
                    <label class="small"><strong>Number</strong></label>
                    <input type="text" class="form-control statistic-number" placeholder="e.g., 500+" required>
                </div>
                <div class="col-md-7">
                    <label class="small"><strong>Label</strong></label>
                    <input type="text" class="form-control statistic-label" placeholder="e.g., Happy Clients" required>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-sm btn-outline-danger remove-statistic">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        
        container.appendChild(newStatistic);
        
        // Add remove functionality
        newStatistic.querySelector('.remove-statistic').addEventListener('click', function(e) {
            e.preventDefault();
            newStatistic.remove();
            updateRemoveStatisticButtons();
        });
        
        updateRemoveStatisticButtons();
    });

    // Update remove button visibility
    function updateRemoveStatisticButtons() {
        const items = document.querySelectorAll('.statistic-item');
        items.forEach((item, index) => {
            const removeBtn = item.querySelector('.remove-statistic');
            if (items.length > 1) {
                removeBtn.style.display = 'block';
            } else {
                removeBtn.style.display = 'none';
            }
        });
    }

    // Initial call to update buttons
    updateRemoveStatisticButtons();

    // Collect statistics data before form submission
    const originalSubmitHandler = document.getElementById('AddCustomSection').onsubmit;
    document.getElementById('AddCustomSection').addEventListener('submit', function(e) {
        const designOption = document.getElementById('design_option').value;
        
        if (designOption === '3') {
            const statistics = [];
            document.querySelectorAll('.statistic-item').forEach(item => {
                const number = item.querySelector('.statistic-number').value;
                const label = item.querySelector('.statistic-label').value;
                if (number && label) {
                    statistics.push({ number, label });
                }
            });
            
            if (statistics.length === 0) {
                e.preventDefault();
                Swal.fire({ 
                    icon: "warning", 
                    text: "Please add at least one statistic for Design 3" 
                });
                return;
            }
            
            // Add statistics as hidden input
            let statisticsInput = document.querySelector('input[name="statistics_data"]');
            if (!statisticsInput) {
                statisticsInput = document.createElement('input');
                statisticsInput.type = 'hidden';
                statisticsInput.name = 'statistics_data';
                this.appendChild(statisticsInput);
            }
            statisticsInput.value = JSON.stringify(statistics);
        } else {
            // Remove statistics data for other designs
            let statisticsInput = document.querySelector('input[name="statistics_data"]');
            if (statisticsInput) {
                statisticsInput.remove();
            }
        }
    });

    // Reset form on offcanvas hide
    document.getElementById('offcanvasRight').addEventListener('hidden.bs.offcanvas', function() {
        // Reset statistics section
        const container = document.getElementById('statistics-container');
        container.innerHTML = `
            <div class="statistic-item mb-3 p-3 border rounded" style="background: #f8f9fa;">
                <div class="row align-items-end">
                    <div class="col-md-4">
                        <label class="small"><strong>Number</strong></label>
                        <input type="text" class="form-control statistic-number" placeholder="e.g., 500+" required>
                    </div>
                    <div class="col-md-7">
                        <label class="small"><strong>Label</strong></label>
                        <input type="text" class="form-control statistic-label" placeholder="e.g., Happy Clients" required>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-statistic" style="display: none;">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;
        updateRemoveStatisticButtons();
    });
</script>


<?= $this->endSection(); ?>


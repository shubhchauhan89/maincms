<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Manage Section</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<strong></strong>
<marquee style="color:red;"><?php echo "After adding content in manage section, must update Arrange Section from Appearance Menu."; ?></marquee>
</h6>
<!-- End Page Header -->

<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<input type="hidden" name="service_sec_id" id="service_sec_id">
				<form id="ServiceSection" class="mt-3">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Services <span class="text-danger"> *</span></label>
								<select class="form-control services" id="services" name="services[]" multiple required>
									<?php if ($services) : foreach ($services as $value) : ?>
											<option value="<?= $value->id; ?>"><?= $value->service; ?></option>
									<?php endforeach;
									endif; ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pages <span class="text-danger"> *</span></label>
								<select class="form-control pages" id="pages" name="pages[]" multiple required>
									<?php
									//bb_print_r($pages);
									if ($pages) : foreach ($pages as $value) : 
										$ids = $value->menu_id . ", 0, ".$value->sub_menu;
										$optiontext = $value->menu_name;
										?>
										<option value="<?= $ids; ?>"><?= $optiontext; ?></option>
									<?php endforeach;
									endif; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Heading <span class="text-danger"> *</span></label>
						<input type="text" class="form-control" name="heading" id="heading">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="discription" id="discription"></textarea>
					</div>
					<div class="mt-2 mb-3">
						<button class="btn btn-primary btn-sm">Add Section</button>
					</div>
				</form>
				<div class="table-responsive">
					<table class="table" id="services_section_table">
						<thead>
							<th>#</th>
							<th>Heading</th>
							<th>Discription</th>
							<th>Services</th>
							<th>Pages </th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $num = 1;
							if ($data) : foreach ($data as $value) : ?>
									<tr id="<?= $value->id ?>">
										<?php $pagesss = json_decode($value->pages);
										$servicesss = json_decode($value->services);  ?>
										<td><?= $num; ?></td>
										<td class=""><?= $value->heading; ?></td>
										<td class=""><?= $value->discription; ?></td>
										<td class="custom_wdth" style="width: 34%;">
											<?php if ($servicesss) :
												foreach ($services as $value1) :
													
													foreach ($servicesss as $k => $key) : 
														if ($value1->id == $key) : 
															if($k!=0){
																$comma = ", ";
															}else{
																$comma = ""; 
															}
														echo $comma.$value1->service; 
														endif; ?>
												<?php endforeach;
												endforeach;
											endif; ?>
										</td>
										<td class="">
											<?php if ($pagesss) : foreach ($pagesss as $k=>$value2) :
												$arr = getSubMenuPageName($value2->menu, $value2->sub_menu);
												$comm = ", ";
												if($k == count($pagesss)-1){
													$comm = "";
												}
												echo $arr.$comm;
											endforeach;
											endif; ?>
										</td>
										<td>
											<button class="btn btn-primary btn-sm" onclick="edit_service_section(<?= $value->id ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
											<button class="btn btn-danger btn-sm" onclick="delete_service_section(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$(document).ready(function() {
		$('#services_section_table').DataTable({
			responsive: false,
		});
		$('.pages').select2();
		$('.services').select2();
	})
</script>
<script src="<?php echo base_url('public/assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>
<?= $this->extend('template/main'); ?>
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
<strong></strong>
<marquee style="color:red;"><?php echo "After adding content in manage section, must update Arrange Section from Appearance Menu."; ?></marquee>
</h6>
<!-- End Page Header -->

<!--Row-->
<div class="row row-sm mx-auto">
    <div class="col-md-12 ">
        <div class="row">
            <div class="col-md-12 box-shadow border">
                <div class="mt-2 mb-2">
                    <input type="hidden" name="logo_slider_id" id="logo_slider_id" value="">
                    <form id="LogoSliderSection">

                        <div class="row">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="heading" id="heading">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Logo Slider <span class="text-danger"> *</span></label>
                                    <select class="form-control logoSliderIds" name="logo_slider[]" id="logo_slider" required multiple>
                                        <?php if ($logo_slider) : foreach ($logo_slider as $key) : ?>
                                                <option value="<?= $key->id; ?>"><?= $key->name; ?></option>
                                        <?php endforeach;
                                        endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Pages <span class="text-danger"> *</span></label>
                                    <select class="form-control pagesIds" name="pages_ids[]" id="pages_ids" required multiple>
                                        <?php if ($pages) : foreach ($pages as $value) :
                                                $ids = $value->menu_id . ", 0," .$value->sub_menu;
                                                $optiontext = $value->menu_name;
                                            ?>
                                            <option value="<?= $ids; ?>"><?= $optiontext; ?></option>
                                        <?php endforeach;
                                        endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm">Add Section</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table" id="imageSection_table">
                        <thead>
                            <th>#</th>
                            <th>Heading</th>
                            <th>Logo Name</th>
                            <th>Page</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            if ($data) : foreach ($data as $value) : ?>
                                    <?php $testimonials_ids = json_decode($value->logo_slider);
                                    $pages_ids = json_decode($value->pages_ids);  ?>
                                    <?php $testimonialsResult = "";
                                    if ($testimonials_ids) : foreach ($logo_slider as $value1) : foreach ($testimonials_ids as $key) : ?>
                                                <?php if ($value1->id == $key) : ?>
                                                    <?php $testimonialsResult .= $value1->name . ", "; ?>
                                                <?php endif; ?>
                                    <?php endforeach;
                                        endforeach;
                                    endif; ?>

                                    <tr id="<?= $value->id ?>">
                                        <td><?= $num; ?></td>
                                        <td><?= $value->heading; ?></td>
                                        <td class="">
                                            <?= substr_replace($testimonialsResult, "", -2); ?>
                                        </td>
                                        <td class="custom_wdth">
                                            <?php if ($pages_ids) : 
                                                    foreach ($pages_ids as $k=>$value2) : 
                                                        $arr = getSubMenuPageName($value2->menu, $value2->sub_menu);
                                                        $comm = ", ";
                                                        if($k == count($pages_ids)-1){
                                                            $comm = "";
                                                        }
                                                    echo $arr.$comm;
                                            endforeach;
                                            endif; ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" onclick="edit_LogoSliderSection(<?= $value->id ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button class="btn btn-danger btn-sm" onclick="delete_LogoSliderSection(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('#imageSection_table').DataTable({
            responsive: false,
        });
        console.log($('.logoSliderIds'));
    $('.logoSliderIds').select2();
    $('.pagesIds').select2();
    })
</script>
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>
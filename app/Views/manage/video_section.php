<?= $this->extend('template/main');?>
<?= $this->section('content');?>
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
                        <input type="hidden" name="video_section_id" id="video_section_id" value="">
                        <form id="VideosSection">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="heading" id="heading">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Videos <span class="text-danger"> *</span></label>
                                        <select class="form-control multivideo" name="videos[]" id="videos" multiple required>
                                            <?php if($video): foreach($video as $key):?>
                                                <option value="<?= $key->id;?>"><?= $key->title;?></option>
                                            <?php endforeach;  endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pages <span class="text-danger"> *</span></label>
                                        <select class="form-control multiPages" name="pages[]" id="pages" multiple required>
                                            <?php if($pages): foreach($pages as $value): ?>
                                                <?php
                                                    $ids = $value->menu_id.", 0,".$value->sub_menu; 
                                                    $optiontext = $value->menu_name;
                                                ?>
                                                <option value="<?= $ids;?>"><?= $optiontext;?></option>
                                            <?php endforeach; endif; ?>
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
                                <th>Video</th>
                                <th>Pages</th>                                
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $num =1; if($data): foreach($data as $value): ?>
                                    <?php $videos_ids = json_decode($value->videos); $pages_ids = json_decode($value->pages);  ?>												
                                    <tr id="<?= $value->id?>">                                   
                                        <td><?= $num; ?></td>
                                        <td><?= $value->heading; ?></td>                                      
                                        <td class="custom_wdth">
                                            <?php if($videos_ids): foreach($video as $value1): 
                                                foreach($videos_ids as $k=>$key):
                                                    if($value1->id == $key ):
                                                        if($k!=0){
                                                            $comma = ", ";
                                                        }else{
                                                            $comma = ""; 
                                                        }
													echo $comma.$value1->title;
                                                endif; ?>
                                            <?php  endforeach;  endforeach; endif;?>   
                                        </td>    
                                        <td class="custom_wdth">
                                            <?php if($pages_ids): foreach($pages_ids as $k=>$value2):
                                                $arr = getSubMenuPageName($value2->menu, $value2->sub_menu);
                                                $comm = ", ";
                                                if($k == count($pages_ids)-1){
                                                    $comm = "";
                                                }
                                                echo $arr.$comm;
                                            endforeach; endif;?>
                                        </td>                                            
                                        <td>   
                                            <button class="btn btn-primary btn-sm" onclick="edit_videoSection(<?= $value->id?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>                                     
                                            <button class="btn btn-danger btn-sm" onclick="delete_videoSection(<?= $value->id?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                <?php $num++;  endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>									
            </div>  
        </div>
    </div>

<?= $this->endSection();?>

<?= $this->section('script');?>

<script>
$(document).ready(function(){
    $('#imageSection_table').DataTable({
        responsive: false,
    });
    $('.multivideo').select2();
    $('.multiPages').select2();
  })
</script>
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>

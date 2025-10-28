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
                        <input type="hidden" name="faqs_section_id" id="faqs_section_id" value="">
                        <form id="FaqsSection">
                            <div class="row">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" id="heading">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Faqs <span class="text-danger"> *</span></label>
                                        <select class="form-control FaqsIds" name="faqs_ids[]" id="faqs_ids" multiple required>
                                          <?php if($faqs): foreach($faqs as $key):?>
                                                <option value="<?= $key->id;?>"><?= $key->title;?></option>
                                            <?php endforeach;  endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Pages <span class="text-danger"> *</span></label>
                                        <select class="form-control PagesIds" name="pages_id[]" id="pages_id" multiple required>
                                            <?php if($pages): foreach($pages as $value): 		
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
                        <table class="table" id="faqsSection_table">
                            <thead>
                                <th>#</th>  
                                <th>Heading</th>
                                <th>Faqs</th>       
                                <th>Page</th>                           
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $num =1; if($data): foreach($data as $value): ?>
                                    <?php $faqs_ids = json_decode($value->faqs_ids); $pages_id = json_decode($value->pages_id);  ?>												
                                    <tr id="<?= $value->id?>">                                   
                                        <td><?= $num; ?></td>
                                        <td><?= $value->heading; ?></td>                                      
                                        <td class="">
                                            <?php if($faqs_ids): foreach($faqs as $value1): 
                                                foreach($faqs_ids as $k=>$key): 
                                                    if($value1->id == $key ):
                                                        $comm  = $k=="0"?"":", ";
                                                        echo $comm.$value1->title;
                                                    endif; 
                                                    endforeach;  endforeach; endif;?>   
                                        </td>    
                                        <td class="custom_wdth">
                                            <?php if($pages_id): foreach($pages_id as $k=>$value2):
                                            $arr = getSubMenuPageName($value2->menu, $value2->sub_menu);
                                            $comm = $k == (count($pages_id)-1)?"":", ";
                                            echo $arr.$comm;
                                            endforeach; endif;?>
                                        </td>                                            
                                        <td>   
                                            <button class="btn btn-primary btn-sm" onclick="edit_FaqsSection(<?= $value->id?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>                                     
                                            <button class="btn btn-danger btn-sm" onclick="delete_FaqsSection(<?= $value->id?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
    $('#faqsSection_table').DataTable({
        responsive: true,
    });  
    $('.FaqsIds').select2();
    $('.PagesIds').select2();
  })
</script>
<script src="<?php echo base_url('public/assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>

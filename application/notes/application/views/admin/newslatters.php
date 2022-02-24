
<?php // echo "<pre>";print_r($newslatter);exit;?>   
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong> Newslatter </strong> 
        </div>
        <form action="<?= base_url('admin/newslatters') ?>" method="POST" class="form-horizontal">
            <div class="card-body card-block">

                <div class="row form-group"> 
                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Newslatter</label></div>
                    <div class="col-8 col-md-8">
                        <div class="input-group">
                            <select name="email[]" id="my_select_box" data-placeholder="Choose a emails..." multiple="" class="standardSelect form-control" style="display: none;">

                                <?php
                                foreach ($newsletter_subscribers as $key => $row) {
                                    echo '<option value="' . $row->email . '">' . $row->email . '</option>';
                                }
                                ?>                                
                            </select>                            
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="all" type="button">Select All</button>
                                <button class="btn btn-danger btn-sm" id="reset" type="button">Reset</button>

                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label">Email Subject</label></div>
                    <div class="col-md-8" >
                        <input type="text" name="subject" value="<?php echo $newslatter[0]->subject?>" class="form-control">
                    </div>

                </div>                -->
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label">Email Content</label></div>
                    <div class="col-md-8" >
                        <textarea name="message" id="textEditor" class="required"></textarea>
                    </div>

                </div>                

<!--                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.css" rel="stylesheet" type="text/css">-->


 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script type="text/javascript" src="<?=base_url()?>admin_assets/js/jquery-te-1.4.0.min.js"></script>
<!--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>-->
<link href="<?=base_url()?>admin_assets/css/jquery-te-1.4.0.css" rel="stylesheet" type="text/css">



<script language="javascript">
 $("#textEditor").jqte();
</script>


            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>

    </div>
</div> 
<link href="<?= base_url('admin_assets/css/lib/chosen/chosen.min.css'); ?>" rel="stylesheet">
<script src="<?= base_url(); ?>admin_assets/js/lib/chosen/chosen.jquery.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "75%"
        });
        $("#all").on('click', function () {
            
            // Select All
            $('#my_select_box option').prop('selected', true);
            $('#my_select_box').trigger('chosen:updated');
        });
        $("#reset").on('click', function () {
            
            // Deselect All
            $('#my_select_box option:selected').removeAttr('selected');
            $('#my_select_box').trigger('chosen:updated');

        });
        $(".editorEx").jqte({css:"jqte_green", placeholder:"Please write, drag-drop, copy-paste somethings"});
    });


</script>
<style>
    .jqte_tool.jqte_tool_1 .jqte_tool_label {
position:relative;
display:block;
padding:3px;
width:70px;
height:21px; /* change it to 20px; */
overflow:hidden; }
    
</style>
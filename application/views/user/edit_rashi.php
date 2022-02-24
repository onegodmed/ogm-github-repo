<div id="sample">

 <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

</div>

        <div class="page-wrapper">

           

            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Edit category</h4>

                        <div class="ml-auto text-right">

                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Library</li>

                                </ol>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

           

            <div class="container-fluid">

            

                <div class="row">

                    <div class="col-md-12">

                        <div class="card">

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/update_rashi') ?>">
                               <div class="card-body">
                                <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Type</label>
                                        <div class="col-sm-4">
                                            <select name="rashiType" class="form-control" id="rashiType"> 
                                           
                                                <option value="Sunsign" <?php if($rashi[0]->rashi_type == "Sunsign"){ echo "selected";}?>>Sunsign</option> 
                                                <option value="Moonsign" <?php if($rashi[0]->rashi_type == "Moonsign"){ echo "selected";}?>>Moonsign</option>
                                            </select>
                                        </div>
                                    </div>
<input type="hidden" name="id" value="<?php echo $rashi[0]->id?>">
                                    <div class="form-group row" id="Sunsign" style="display:none">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Name</label>
                                        <div class="col-sm-4">
                                            <select name="rashiName" class="form-control"> 
                                                <option value="Aries" <?php if($rashi[0]->rashi_name == "Aries"){ echo "selected";}?>>Aries</option> 
                                                <option value="Taurus" <?php if($rashi[0]->rashi_name == "Taurus"){ echo "selected";}?>>Taurus</option> 
                                                <option value="Gemini" <?php if($rashi[0]->rashi_name == "Gemini"){ echo "selected";}?>>Gemini</option> 
                                                <option value="Cancer" <?php if($rashi[0]->rashi_name == "Cancer"){ echo "selected";}?>>Cancer</option> 
                                                <option value="Leo" <?php if($rashi[0]->rashi_name == "Leo"){ echo "selected";}?>>Leo</option> 
                                                <option value="Virgo" <?php if($rashi[0]->rashi_name == "Virgo"){ echo "selected";}?>>Virgo</option> 
                                                <option value="Libra" <?php if($rashi[0]->rashi_name == "Libra"){ echo "selected";}?>>Libra</option> 
                                                <option value="Scorpio" <?php if($rashi[0]->rashi_name == "Scorpio"){ echo "selected";}?>>Scorpio</option>
                                                <option value="Sagittarius" <?php if($rashi[0]->rashi_name == "Sagittarius"){ echo "selected";}?>>Sagittarius</option> 
                                                <option value="Capricorn" <?php if($rashi[0]->rashi_name == "Capricorn"){ echo "selected";}?>>Capricorn</option> 
                                                <option value="Aquarius" <?php if($rashi[0]->rashi_name == "Aquarius"){ echo "selected";}?>>Aquarius</option> 
                                                <option value="Pisces" <?php if($rashi[0]->rashi_name == "Pisces"){ echo "selected";}?>>Pisces</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row" id="moonsign" style="display:none">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Name</label>
                                        <div class="col-sm-4">
                                            <select name="rashiName" class="form-control"> 
                                                <option value="Maish" <?php if($rashi[0]->rashi_name == "Maish"){ echo "selected";}?>>Maish</option> 
                                                <option value="Vrish" <?php if($rashi[0]->rashi_name == "Vrish"){ echo "selected";}?>>Vrish</option> 
                                                <option value="Mithun" <?php if($rashi[0]->rashi_name == "Mithun"){ echo "selected";}?>>Mithun</option> 
                                                <option value="Kark" <?php if($rashi[0]->rashi_name == "Kark"){ echo "selected";}?>>Kark</option> 
                                                <option value="Singh" <?php if($rashi[0]->rashi_name == "Singh"){ echo "selected";}?>>Singh</option> 
                                                <option value="Kanya" <?php if($rashi[0]->rashi_name == "Kanya"){ echo "selected";}?>>Kanya</option> 
                                                <option value="Tula" <?php if($rashi[0]->rashi_name == "Tula"){ echo "selected";}?>>Tula</option> 
                                                <option value="Vrishchik" <?php if($rashi[0]->rashi_name == "Vrishchik"){ echo "selected";}?>>Vrishchik</option>
                                                <option value="Dhanu" <?php if($rashi[0]->rashi_name == "Dhanu"){ echo "selected";}?>>Dhanu</option> 
                                                <option value="Makar" <?php if($rashi[0]->rashi_name == "Makar"){ echo "selected";}?>>Makar</option> 
                                                <option value="Kumbh" <?php if($rashi[0]->rashi_name == "Kumbh"){ echo "selected";}?>>Kumbh</option> 
                                                <option value="Meen" <?php if($rashi[0]->rashi_name == "Meen"){ echo "selected";}?>>Meen</option>
                                            </select>
                                        </div>
                                    </div>
                                
                                    
                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <button type="submit" class="btn btn-primary">Update</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                       </div>

                       

                       </div>
                       <?php if($this->session->flashdata('success')){?>

<script type="text/javascript">

    $(document).ready(function () {

    $("#consolPopup").fancybox({

        'overlayShow': true

    }).trigger('click');

});

</script>

<div id="consolPopup">

    	<h1>Success</h1>
        <p><?php echo $this->session->flashdata('success')?></p>

</div>


<?php }?>					
<?php if($this->session->flashdata('error')){?>

<script type="text/javascript">

    $(document).ready(function () {

    $("#consolPopup").fancybox({

        'overlayShow': true

    }).trigger('click');

});

</script>

<div id="consolPopup">

    	<h1>Oops</h1>
    	<p><?php echo $this->session->flashdata('error')?></p>

</div>


<?php }?>
          
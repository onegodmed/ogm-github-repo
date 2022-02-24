        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Add Rashi</h4>

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

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/add_rashi_data') ?>">

                                

                                <div class="card-body">
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Type</label>
                                        <div class="col-sm-4">
                                            <select name="rashiType" class="form-control" id="rashiType">
                                                <option value="" disabled selected>Choose Rashi type</option> 
                                                <option value="Sunsign">Sunsign</option> 
                                                <option value="Moonsign">Moonsign</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="Sunsign" style="display:none">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Name</label>
                                        <div class="col-sm-4">
                                            <select name="rashiName" class="form-control"> 
                                                <option value="Aries">Aries</option> 
                                                <option value="Taurus">Taurus</option> 
                                                <option value="Gemini">Gemini</option> 
                                                <option value="Cancer">Cancer</option> 
                                                <option value="Leo">Leo</option> 
                                                <option value="Virgo">Virgo</option> 
                                                <option value="Libra">Libra</option> 
                                                <option value="Scorpio">Scorpio</option>
                                                <option value="Sagittarius">Sagittarius</option> 
                                                <option value="Capricorn">Capricorn</option> 
                                                <option value="Aquarius">Aquarius</option> 
                                                <option value="Pisces">Pisces</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row" id="moonsign" style="display:none">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Name</label>
                                        <div class="col-sm-4">
                                            <select name="rashiName" class="form-control"> 
                                                <option value="Maish">Maish</option> 
                                                <option value="Vrish">Vrish</option> 
                                                <option value="Mithun">Mithun</option> 
                                                <option value="Kark">Kark</option> 
                                                <option value="Singh">Singh</option> 
                                                <option value="Kanya">Kanya</option> 
                                                <option value="Tula">Tula</option> 
                                                <option value="Vrishchik">Vrishchik</option>
                                                <option value="Dhanu">Dhanu</option> 
                                                <option value="Makar">Makar</option> 
                                                <option value="Kumbh">Kumbh</option> 
                                                <option value="Meen">Meen</option>
                                            </select>
                                        </div>
                                    </div>
                           </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <button type="submit" class="btn btn-primary">Submit</button>

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
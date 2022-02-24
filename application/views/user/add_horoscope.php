<div id="sample">
  <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</div>
<div class="page-wrapper">

<div class="page-breadcrumb">
<div class="row">
<div class="col-12 d-flex no-block align-items-center">
<h4 class="page-title">Add Horoscope</h4>
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
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<div class="card">
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/add_horoscope_data') ?>">
        
        <div class="card-body">
            <div class="form-group row">
                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Horoscope Type</label>
                <div class="col-sm-4">
                    <select class="form-control" name="horoscopetype" id="horotype" required>
                        <option value="" disabled selected>Choose Horoscope Type</option>
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                    </select>
                </div>

            </div>
            
            <div class="form-group row" id="chsdate" style="display:none">
                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Choose Date</label>
                <div class="col-sm-4">
                   <input type="date" name="date"  value="<?php echo date("m-d-Y");?>"/>
                </div>

            </div>
            <?php 
$year = date('Y');
$month1 = date('m');
$list = array();
        $week = "";
        $arrWeek = array();
        $weekCount = 1;
        $oldweek = "";
        for ($month = $month1; $month <= 12; $month++) {
            for ($d = 1; $d <= 31; $d++) {
                $time = mktime(12, 0, 0, $month, $d, $year);
                if (date('m', $time) == $month) {
                    $weekCount = date('W', $time);
                    if ($oldweek >= 52 && $weekCount == 01)
                        $weekCount = 53;
                    if ($year == date("Y")) {
                        if ($weekCount >= date("W")) {
                            $list[$weekCount][date('D', $time)] = date('d', $time);
                            if ($oldweek != $weekCount)
                                $arrWeek[] = $weekCount;
                            $oldweek = $weekCount;
                        }
                    } else {
                        $list[$weekCount][date('D', $time)] = date('d', $time);
                        if ($oldweek != $weekCount)
                            $arrWeek[] = $weekCount;
                        $oldweek = $weekCount;
                    }
                }
            }
        }
        $newList = array();


        $newList['week'] = $arrWeek;

        $newList['curWeek'] = date("W");
?>
            <div class="form-group row" id="chsweek" style="display:none">
                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Choose Week</label>
                <div class="col-sm-4">
                   <select class="form-control" name="week" required>
                       <?php foreach($newList['week'] as $val){?>
                        <option value="<?php echo $val?>">Week <?php echo $val?></option>
                        <?php }?>
                    </select>
                    <input type="hidden" name="weekyear" value="<?php echo date('Y');?>"/>
                </div>

            </div>
            
            <div class="form-group row" id="chsmonth" style="display:none">
                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Choose Month</label>
                <div class="col-sm-4">
                   <select class="form-control" name="month" required>
                       <?php $monthname = array('January', 'February', 'March','April', 'May', 'June', 'July', 'August', 'Sepetember', 'October', 'November', 'December');
                       foreach ($monthname as $key => $month) {$key = $key + 1;?>
                        <option value="<?php if($key<=9){ echo '0'.$key;}else{ echo $key;} ?>" <?php if($key == date('m')){ echo "selected";}?>><?php echo($month) ?></option>
                        <?php }?>
                    </select>
                    <input type="hidden" name="monthyear" value="<?php echo date('Y');?>"/>
                </div>

            </div>
            
            <div class="form-group row" id="chsyear" style="display:none">
                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Choose Month</label>
                <div class="col-sm-4">
                   <select class="form-control" name="year" required>
                       <?php $nyear = date("Y",strtotime("+1 year"));
                             $years = range(date('Y'), $nyear); 
                             foreach ($years as $year) { ?>
                       <option value="<?php echo($year) ?>" <?php if($key == date('Y')){ echo "selected";}?>><?php echo($year) ?></option>
                        <?php }?>
                    </select>
                </div>

            </div>
            
            <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Type</label>
                                        <div class="col-sm-4">
                                            <select name="rashiType" class="form-control" id="rashiType" required>
                                                <option value="" disabled selected>Choose Rashi type</option> 
                                                <option value="Sunsign">Sunsign</option> 
                                                <option value="Moonsign">Moonsign</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="Sunsign" style="display:none">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Name</label>
                                        <div class="col-sm-4">
                                            <select name="rashiName" class="form-control" required> 
                                            <?php foreach($rashi as $val){ if($val->rashi_type=="Sunsign"){?>
                                                <option value="<?php echo $val->rashi_name;?>"><?php echo $val->rashi_name;?></option> 
                                                <?php }}?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row" id="moonsign" style="display:none">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Rashi Name</label>
                                        <div class="col-sm-4">
                                            <select name="rashi_name" class="form-control" required> 
                                                <?php foreach($rashi as $val){ if($val->rashi_type=="Moonsign"){?>
                                                <option value="<?php echo $val->rashi_name;?>"><?php echo $val->rashi_name;?></option> 
                                                <?php }}?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea  style="height: 300px;" name="description" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Love Horoscope</label>
                <div class="col-sm-10">
                    <textarea name="love_horoscope" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Career Horoscope</label>
                <div class="col-sm-10">
                    <textarea name="career_horoscope" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Finance Horoscope</label>
                <div class="col-sm-10">
                    <textarea name="finance_horoscope" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Health Horoscope</label>
                <div class="col-sm-10">
                    <textarea name="health_horoscope" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Personality</label>
                <div class="col-sm-10">
                    <textarea name="personality_desc" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Lover</label>
                <div class="col-sm-10">
                    <textarea name="lover_desc" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Professional</label>
                <div class="col-sm-10">
                    <textarea name="professional_desc" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Teen</label>
                <div class="col-sm-10">
                    <textarea name="teen_desc" class="form-control"></textarea>
                </div>
            </div>
            
            
            <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Title </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title"  placeholder="Enter Page Title" />
                                            
                                        </div>
                                        
                                    </div>
                                    
            <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta tags </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_tags" placeholder="Enter Meta tags">
                                            <span>* separate tags using commas(,)</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Keywords</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description">
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
            

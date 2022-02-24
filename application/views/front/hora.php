
<!--<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<!--BKnowcrumb start-->

<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>Hora Muhurta</h2>
					
				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?php echo base_url(); ?>">home</a></li>

					<li>//</li>

					<li><a href="<?php echo base_url(); ?>panchang/hora">Hora Muhurta</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>
<section class="space--xxs imagebg blue-gradiant">
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="cta" style="display: inline-block;">
<h2 class="unmarg" style="display: inline-block;"><span id="top-heading-date" style="display: inline-block;">Hora Muhurta </h2>

</div>
<!--<button type="button" class="btn btn-warning csnow" style="float: right;"><a href="<?=base_url()?>Panchang/horanextdata">Next</a></button>
<button type="button" class="btn btn-warning csnow" style="float: right;"><a href="<?=base_url()?>Panchang/horaprevdata">Prev</a></button>-->
</div>
</div>
</div></section>
<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
       <!-- <div class="row" style="background:#ccc; width:99.5%; margin: 20px auto; padding:10px 0px;">
		  <div class="">
		       <div class="col-md-3">
		       		   <div class="form-group">
    <label for="exampleFormControlInput1">Select Date</label>
 
     <input type="date" value="<?php echo $d; ?>/<?php echo  $m; ?>/<?php echo $y; ?>" class="form-control dmy">
     <p id="errdmymsg" style="display:none;color:red"></p>
  </div>
		       
		   </div>
		   <div class="col-md-3">  
		   
		   <div class="form-group">
    <label for="exampleFormControlInput1">Place</label>
    <input type="text" class="form-control place" id="exampleFormControlInput1" value="<?php echo $location; ?>" autocomplete="off">
    <p id="errplacemsg" style="display:none;color:red"></p>
  </div>
  </div>
		   <div class="col-md-3"> <div class="form-group">
    <label for="exampleFormControlSelect1">Select Language</label>
    <select class="form-control language" id="exampleFormControlSelect1"  value="<?php echo $language; ?>">
     <option <?php if(($language == 'en')|| ($language == 'English')){echo "selected";} ?> value="en">English</option>
<option value="hi" <?php if(($language == 'hi')|| ($language == 'Hindi')){echo "selected";} ?>>Hindi</option>
<option value="ma" <?php if(($language == 'ma')|| ($language == 'Marathi')){echo "selected";} ?>>Marathi</option>
<option value="kn" <?php if(($language == 'kn')|| ($language == 'Kannada')){echo "selected";} ?>>Kannada</option>
<option value="ta" <?php if(($language == 'ta')|| ($language == 'Tamil')){echo "selected";} ?>>Tamil</option>
<option value="ml" <?php if(($language == 'ml')|| ($language == 'Malayalam')){echo "selected";} ?>>Malayalam</option>
<option value="te" <?php if(($language == 'te')|| ($language == 'Telgu')){echo "selected";} ?>>Telgu</option>
<option value="bn" <?php if(($language == 'bn')|| ($language == 'Bengali')){echo "selected";} ?>>Bengali</option>
    </select>
  </div></div>
		   <div class="col-md-3">
		       <input type="submit"  id="submitBtn" class="btn btn-warning csnow" style="margin-top:26px;" value="Get Hora"/>
		       
		      <!--   <button type="button" class="btn btn-warning" style="margin-top:26px;">Next</button>
		         
		         </div>
		  </div>
		  
		</div>-->
		<div class="row">

			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

				<div class="ast_heading">

					<h1>Hora Muhurta For <?php echo $day; ?>, <?php echo $d; ?>&nbsp;<?php echo $m; ?> &nbsp;<?php echo $y; ?></h1>
					<span><?php echo $location; ?></span>

					

				</div>

			</div>
			
			
			<div class="col-lg-12 col-md-12 col-sm-10 col-xs-12 col-lg-offset-0 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

				<div class="ast_heading">
				    <p class="text-justify">The following Hora Muhurta are shown for the date <?php echo $day; ?>, <?php echo $d; ?>&nbsp;<?php echo $m; ?>&nbsp;<?php echo $y; ?> and place "<?php echo $location; ?>". These Panchang calculations are based on Drik Ganit i.e. current sidereal positions of planets in the sky. The Ayanamsha used is Lahiri or Chitrapakshiya. The current day sunrise is taken as the time to calculate planet positions and accordingly other drika panchang calculations.
</p>
             
				

</div>

				</div>
			<div class="row">
<div class="col-md-4 col-md-offset-1 col-xs-12">
<h4 class="unmarg--bottom chaughdiya-block-title sunrise-set">Day Hora</h4>
<script type="text/x-handlebars-template" id="dayChaughadiyaTpl">
                <ul>
                    {{#each day}}

                    <li class="border-bottom"><p class="muhuratDate {{#noop}}{{this.hora}}{{/noop}}"><strong>{{this.hora}}</strong> &nbsp; &nbsp; {{this.time}}</p></li>
                    {{/each}}

                </ul>
                </script>
<div class="" id="dayChaughadiya">
                <ul>
                    <?php foreach($hora['hora']['day'] as $arrdata) { ?>

                    <li class="border-bottom"><p class="muhuratDate "><strong><?php echo $arrdata['hora']; ?></strong> &nbsp; &nbsp; <?php echo $arrdata['time']; ?></p></li>
                    <?php  }  ?>

                    
                    

                </ul>
                </div>
</div>
<div class="col-md-4 col-md-offset-1 col-xs-12">
<h4 class="unmarg--bottom chaughdiya-block-title sunrise-set">Night Hora</h4>
<script type="text/x-handlebars-template" id="nightChaughadiyaTpl">
                <ul>
                    {{#each night}}
                    <li class="border-bottom"><p class="muhuratDate"><strong>{{this.hora}}</strong> &nbsp; &nbsp; {{this.time}}</p></li>
                    {{/each}}
                </ul>
                </script>
<div class="" id="nightChaughadiya">
                <ul>
                    <?php foreach($hora['hora']['night'] as $arrdata) { ?>

                    <li class="border-bottom"><p class="muhuratDate "><strong><?php echo $arrdata['hora']; ?></strong> &nbsp; &nbsp; <?php echo $arrdata['time']; ?></p></li>
                    <?php  }  ?>

                    
                    

                </ul>
                </div>
</div>
</div>
	<div class="row margn120">
    <div class="container01">
        <div class="card-container card11">
        <div class="col-md-4">
    <div class="custom-card">
        <div class="card-img-box">
            <img src="<?=base_url()?>front-assets/images/header/kundli-bg.jpg">
            <p>Chaughadiya</p>
        </div>
        <div class="card-content">
            <h2>Chaughadiya</h2>

         <a href="<?=base_url()?>Panchang/chaughadiya">Read More</a>
        </div>
    </div>
</div>
    <div class="col-md-4">
    <div class="custom-card">
        <div class="card-img-box">
            <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg">
            <p>Hora Muhurata</p>
        </div>
        <div class="card-content">
            <h2>Hora Muhurata</h2>

         <a href="<?=base_url()?>Panchang/hora">Read More</a>
        </div>
    </div>
</div>
       <!--<div class="col-md-3">
    <div class="custom-card">
        <div class="card-img-box">
            <img src="front-assets/images/header/kundli-bg.jpg">
            <p>Monthly Panchang</p>
        </div>
        <div class="card-content">
            <h2>Monthly Panchang</h2>

         <a href="<?=base_url()?>Panchang/chaughadiya">Read More</a>
        </div>
    </div>
</div>-->
       <div class="col-md-4">
    <div class="custom-card">
        <div class="card-img-box">
            <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg">
            <p>Daily Panchang</p>
        </div>
        <div class="card-content">
            <h2>Daily Panchang</h2>

         <a href="<?=base_url()?>Panchang">Read More</a>
        </div>
    </div>
</div>
       </div>
       </div>
</div>  
    </div>
</div>
<style>
.ast_heading span{color: #f77403;}
    #dayChaughadiya p.muhuratDate, #nightChaughadiya p.muhuratDate {
    padding: 10px;
    text-align: center;
    background: #fff7f0;margin-bottom:0px;
}
.muhurat-good {
    background: #ffcfa6!important;
}
    .muhurat-bad {
    background: #d8cabd!important;
}
.muhurat-neutral {
    background: #d8ac86!important;
}
#dayChaughadiya ul li, #nightChaughadiya ul li{list-style-type:none;}
#dayChaughadiya ul, #nightChaughadiya ul{padding-left:0px;}
.border-bottom {
    border-bottom: 1px solid #eee;
}
.chaughdiya-block-title {
    color: #ffffff;
    font-size: 1.5em;
    text-align: center;
    padding: 15px 10px;
    border-radius: .3em .3em 0 0;
    background: #ff8820;
    margin-bottom: 0px;
}
hr {
    margin-top: 20px;
    margin-bottom: 30px;
    border: 0;
    border-top: 1px solid #fa8819;
}
.legend-bg1 {
    background: #ffcfa6;
}

.legend-bg {
    height: 30px;
    width: 30px;
    border-radius: 25%;
    margin-right: 10px;
}
.legend-bg2 {
    background: #d8cabd;
}
.legend-bg3 {
    background: #d8ac86;
}
.content-ch p{    line-height: 31px;
    font-size: 16px;}
    .card-container .custom-card {
        position:relative;
        background: #000;
        overflow: hidden;
        border-radius: 10px;
        transition: .5s;
        min-height:213px;
        margin-bottom: 40px;
    }

    .card-container .custom-card:hover {
        transform: translateY(-20px);
        box-shadow: 0 20px 20px rgba(0,0,0,0.2);

    }
        .card-container .custom-card .card-img-box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: 0.5s;
        }

        .card-container .custom-card:hover .card-img-box {
            opacity: 0.4;
        }

        .card-container .custom-card .card-img-box img {
            width:100%;
            height: 100%;
        }

        .card-container .custom-card .card-content {
            position: absolute;
            width: 100%;
            height: 80%;
            bottom: -100%;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            transition: 0.5s;
            padding-top: 30px;
        }

        .card-container .custom-card:hover .card-content {
            bottom:0
        }
            
        .card-container .custom-card:nth-child(1) {
            background: #da7105;
            opacity: 1;
        }
        .card-container .custom-card:nth-child(2) {
            background: linear-gradient(0deg, #8012a5, transparent)
        }
        .card-container .custom-card:nth-child(3) {
            background: linear-gradient(0deg, #3a414c, transparent)
        }

        .card-container .custom-card .card-content h2 {
            margin: 0 0 21px;
            padding:0;
            color: #fff;
            font-size: 20px;text-transform:capitalize;
        }

        .card-container .custom-card .card-content h2 span {        
            color: #ffeb3b;
            font-size: 16px;
        }

        .card-container .custom-card .card-content p {
            margin: 0;
            padding: 0;
            color: #fff;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .card-container .custom-card .card-content ul {
            display: flex;
            margin: 10px 0 0;
            padding: 0;
            align-items: center;
            justify-content: center;
        }

        .card-container .custom-card .card-content ul  li {
            list-style: none;

        }

            .card-container .custom-card .card-content ul li a {
                color: #fff;
                padding: 0 10px;
                font-size: 18px;
                transition: 0.5s;
            }
            .card-img-box p{
    position: absolute;
    bottom: 0px;
    width: 100%;
    text-align: center;
  background-color: #fa8819;
    padding: 8px 3px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 18px;
}
.custom-card:nth-child(2) .card-img-box p{linear-gradient(120deg, #f6d365 0%, #fda085 100%)}
.card-container .custom-card:hover .card-img-box p{display: none;}
.card-content a{
    color: #fff;
    background-color: #fa8819;
    padding: 10px 16px;
}
.card-content a:hover {
    background-image: none;
    background-color: #fff;
    color: #000;
}
.card-container {
    margin-top: 30px;
}
.muhuratDate strong{margin-right:20px;}
</style>

<script>
$(document).ready(function(){

  $("#submitBtn").click(function () {

    var place = $('.place').val();
    var dmy = $('.dmy').val();
    var language = $('.language').val();
    if(dmy==""){
        $('#errdmymsg').css('display', 'block');
        $('#errdmymsg').text('Please Choose your  Date');
        return false;
    }
    if(place==""){
        $('#errplacemsg').css('display', 'block');
        $('#errplacemsg').text('Please enter your  Correct Place');
        return false;
    }
    if((place.length <=2) || (place.length >=26))  { 
            
        
        $('#errplacemsg').css('display', 'block');
        $('#errplacemsg').text('Please enter your Correct Place');
        return false;
    }

     

    $('#errplacemsg').css('display', 'none');
    $('#errdmymsg').css('display', 'none');


        $.ajax({

             url: "<?= base_url('panchang/getdetails')?>",

            type: 'POST',

              dataType: "json",

            data: {'dmy':dmy,
                'place': place,
                'language': language
                
            },
            

            success: function(response) {
                if(response.status == 'success'){
                    window.location.href="<?= base_url(); ?>panchang/hora";
                }
            
        }
            
      


  });

});
  $(".place").click(function(){
    $('#errplacemsg').css('display', 'none');
});
  $(".dmy").click(function(){
    $('#errdmymsg').css('display', 'none');
});
});
</script>
<script>
    
$('.place').keydown(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8)) { 
            event.preventDefault(); 
        }
    });

</script>
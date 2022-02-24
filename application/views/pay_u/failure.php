<?php session_start(); ?>
<div class="ast_pagetitle">
  <div class="ast_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="page_title">
          <h2>Payment Gateway</h2>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>">home</a></li>
          <li>//</li>
          <li><a href="#">Payment Gateway</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container" style="background-color:#cccccc3b;padding: 50px; border: 2px solid #f77403;">
	<div class="row">
	     <div class="col-md-12" >
        <div class="">
    
          <div class="ast_heading">

					<h4 class="card-header">Transaction <label for="Success" style="color:red">Failed</label></h4>
				</div>
        </div>
    </div>
     </div>
     <div class"row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
        	<div class="card">
        		<div class="card-body">
        			<?php 

                    echo "Dear Customer, Sorry .Your Payment has been cancelled with the following details. Please quote your transaction reference number with our customer support with for any queries relating to this request.".'<br/><br/>';
	                echo "Transaction Status: ".$status.'<br/><br/>';
                    echo "Transaction Reference Number: ".$txnid.'<br/><br/>';
                    echo "Transaction Date and Time:".@$date.'<br/><br/>';

	                if($pay_type == "wallet"){?>
    <a href="<?= base_url()?>wallet/" class="ast_btn">Go back to Wallet page</a>
	          <?php  }else{?>
<a href="<?= base_url()?>wallet/" class="ast_btn">Go back to talk to astrologer page</a>

	          <?php  }

	            ?>
        		</div>
        	</div>
        	                                   
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
     </div>
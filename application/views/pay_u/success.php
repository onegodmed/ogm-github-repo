<?php session_start(); ?>

<!-- Event snippet for Purchase Complete conversion page -->

<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-712496260/vlwTCJfY7dABEISp39MC',
      'transaction_id': ''
  });
</script>

<script>
  fbq('track', 'Purchase', {
      value: '<?php echo $_SESSION['pack_amt_dsc'];?>',
      currency: 'INR',
      contents: [
        {
          quantity: 1
        }
      ],
  });
</script>
                  
  $.ajax({
        url: "<?php echo base_url('front/success');?>",
        type: 'POST',
        dataType: "json",
        data: {
                <!-- 'pack_amt_dsc': pack_amt_dsc, -->
              },
        success: function(response) {
                 if (response.status == 1) {
                      // alert("");
                 }
        }
  });

</script>


<div class="ast_pagetitle">
  <div class="ast_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="page_title">
          <h2>Order Confirmation</h2>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>">home</a></li>
          <li>//</li>
          <li><a href="#">Order Confirmation</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container" style="background-color:#cccccc3b;">
	<div class="row">
	     <div class="col-md-12" >
        <div class="">
    
          <div class="ast_heading">

					<h4 class="card-header">Transaction <label for="Success" style="color:green">Success</label></h4>
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

                    echo "Dear Customer, Thank you .Your Payment has been successfully received with the following details. Please quote your transaction reference number with our customer support with for any queries relating to this request.".'<br/><br/>';
	                echo "Transaction Status: ".$status.'<br/><br/>';
	                echo "Amount: ".$currency.' '.$amount.'<br/><br/>';
                    echo "Transaction Reference Number: ".$txnid.'<br/><br/>';
                    echo "Transaction Date and Time:".@$date.'<br/><br/>';

	                if($pay_type == "wallet" && $status='success'){?>
	                <script>
fbq('track', 'Purchase');
</script>
<form action="<?= base_url()?>talk-to-astrologers/" method="post">
    <input type="submit" class="ast_btn" value="Go to talk to astrologers"/>
</form>
	          <?php  }else{?>

	            	 <form action="<?= base_url()?>wallet/" method="post">
    <input type="submit" class="ast_btn" value="Go to Wallet"/>
</form>

	          <?php  }

	            ?>
        		</div>
        	</div>
        	                                   
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
     </div>
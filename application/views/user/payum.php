<!-- <?php   
if(count($records)) {
foreach($records as $d) {
?>
<div class="row margin" style="padding:10%">
<fieldset>
<legend>Subscription info</legend>
<div class="form-group">
<label>Name:</label>  <?php echo $d->username;?> <br/> 
<label>Amount:</label>  <?php echo $d->fees;?><br/>  
<label>E-mail:</label>  <?php echo $d->email;?> <br/> 
<label>Phone:</label>  <?php echo $d->phone;?>  <br/> 
</div>
</fieldset>
<?PHP 
}}  ?> -->
</div>
<?php
$price=5000;
// Merchant key here as provided by Payu
$MERCHANT_KEY = 'gWX8Dxj9';
// Merchant Salt as provided by Payu
$SALT =  "HDSFHVQUOv";
$txnid = 11261;
$hash_string = $MERCHANT_KEY."|".$txnid."|".$price."|Subscription fess MCQUES|shubham|s@GMAILCOM|8817012881||||||||||".$SALT;
$hash = hash('sha512', $hash_string);
?>
<div class="col-sm-12" style="padding:8%; font-family: georgia; font-size: 18px;">
<form method="POST" action="https://secure.payu.in/_payment">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
<input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
 You can change your contact number <input type="text" name="phone" value="8817012881" />
<br><br><input type="hidden" name="amount" value="<?php echo $price;?>" />
<input type="hidden" name="firstname" id="firstname" value="shubham" >
<input type="hidden"  name="email" id="email" value="s@GMAILCOM"  />
<input type="hidden"  name="productinfo" value="Subscription fess MCQUES">
<input type="hidden"  name="surl" value="<?php echo base_url();?>payu/success.php" size="64" />
<input type="hidden"  name="furl" value="<?php echo base_url();?>payu/failure.php" size="64" />
<input type="hidden"   name="service_provider" value="payu_paisa" size="64" />
<!-- <input  type="hidden"  name="udf1" value="<?php echo $d->id;?>"> -->
<input type="submit" value="Continue" class="btn btn-success" >
</form>
</div>

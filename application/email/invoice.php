<?php
$message = '<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>One God Med</title>
</head>
<body style="background-color: #ccccccab; margin: 0; padding: 0;">
	<div style="width: 600px; height: auto; margin:0 auto;">
	<!--Header-->
		<div style="padding: 5px 0 ;">
			<img src="https://www.onegodmed.com/front-assets/images/header/logo.png" style="width: 277px ; float: left;" alt="" >	
			<span style="font-size: 41px; text-transform: uppercase; font-weight: bold; float:right; padding: 0px 10px; color: #333; margin: 0;">INVOICE</span>
     		<div style="width: 100%; border-bottom: 1px solid #ff871f; float: left; ">
		</div>

<!--Name-->
		<div style="margin:20px 0; float: left; width: 600px;">
			<div style="width: 250px; float: left;">
				<span style="font-size:26px;">'.$data['name'].'</span><br>
				<span style="font-size: 13px; line-height: 22px;"> <strong>Phone:</strong>'.$data['mobile'].'</span>
			</div>

			<div style="width: 350px; float: right;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr style="line-height: 30px;">
                            <td width="41%"><strong>Invoice Number</strong></td>
                            <td width="5%"><strong>:</strong></td>
                            <td width="54%">'.$data['invoice_no'].'</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td><strong>Invoice Date</strong></td>
                            <td><strong>:</strong></td>
                            <td>'.$data['invoice_date'].'</td>
                        </tr>
                        <tr style="line-height: 30px;">
                            <td><strong>Service Type</strong></td>
                            <td><strong>:</strong></td>
                            <td>Calling Pack</td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>

<!--Table-->
<table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
            <tbody>
                <tr style="background: #333; color: #fff;  ">
                    <td width="50%">Description</td>
                    <td width="20%">Amount ('.$data['currency'].')</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">'.$data['pack_name'].'</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['amt_bfr_dsc'].'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['disc_price'].'</td>
                </tr>
                <tr>
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Taxable Amount</td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['amt_after_dsc'].'</td>
                </tr>
                <tr style="background-color: #ededed">
                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
                    <td style="border-bottom:1px solid #aaa;">'.$data['currency'].' '.$data['gst'].'</td>
                </tr>
                <tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
                    <td style="border-right:1px solid #aaa;">Net Amount Payable ('.$data['currency'].')</td>
                    <td style="">'.$data['currency'].' '.$data['amount'].'</td>
                </tr>
            </tbody>
        </table>

 <!--Table 2-->
 <div style="background-color: #fff; margin: 15px 0;">
            <table width="100%" border="0" style=" padding: 10px; line-height: 35px;" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td width="27%" valign="top">Amount in Words </td>
                        <td width="3%" valign="top">:</td>
                        <td width="70%">'.$data['call_price_word'].' '.$data['currency_code'].' ONLY</td>
                    </tr>
                    <tr>
                        <td>GST No </td>
                        <td>:</td>
                        <td>09AAHCG6487H1Z2</td>
                    </tr>
                    <tr>
                        <td>PAN</td>
                        <td>:</td>
                        <td>AABCN1019J</td>
                    </tr>
                </tbody>
            </table>
        </div>       		
<!--Footer-->
 <div style="background: #333; color: #fff; padding: 10px; display: block; float: left;">       
 	<div style="width:290px; float: left;">
 		<h2 style="margin: 0; padding: 0; margin-bottom: 15px; color: #ff871f; font-size: 18px; font-weight: normal;">Corporate Office</h2>
 		<span style="font-size: 14px;">1701/57, Express Trade Tower 2, Sector 132,<br> Noida, UP, India 201305
 			<br><br>
E-mail:- support@onegodmod.com
<br><br>
Tel:- +91 9169-305-305
</span>
 	</div>

<div style="width:290px; float: right;">
 		<h2 style="margin: 0; padding: 0; color: #ff871f; font-size: 18px; font-weight: normal;">Terms & Conditions:</h2>
 		<ul style="font-size: 14px;">
                    <li>All Payments should be made in favour of Godmed Technologies Private Limited - Noida</li>
                    <li>All payment should be in advance and it will be non-refundable</li>
                    <li>Onegodmed is a product of Godmed Technologies Private Limited</li>
                </ul>
 	</div>
<h6 style="font-size: 12px; float: left; width: 100%; font-weight: normal; display: block; margin: 10px 0; text-align: center;">This is computer generated invoice and does not require signature and stamp</h6>
</div>

</div>
</body>
</html>
';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body{
		font-family: 'Nunito', sans-serif;
	}
	#invoice{
    padding: 30px;
}
thead tr th {
    font-weight: 900 !important;
}
.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.invoice {
    position: relative;
    background-color: #f9f9f9;
    min-height: 680px;
    margin: 0 50px;
    box-shadow: 0 0 10px #ddd;
}

.invoice header {
    padding: 10px 15px;
    margin-bottom: 20px;
    border-bottom: 1px solid #ff871f;
    background: #333;
    color: #fff;
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #ff871f
}

.invoice main {
    padding: 0 15px 50px;
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 25px;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #ff871f
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #ff871f;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 17px;
    line-height: 25px;
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #ff871f
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #ff871f;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #ff871f;
    font-size: 1.4em;
    border-top: 1px solid #ff871f
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
header img {
    width: 250px;
}
</style>
<body style="font-family: 'Nunito', sans-serif;">
<div id="invoice" style="padding: 30px;">
    <div class="invoice overflow-auto" style=" position: relative;
    background-color: #f9f9f9;
    min-height: 680px;
    margin: 0 50px;
    box-shadow: 0 0 10px #ddd;">
        <div style="min-width: 600px">
            <header style=" padding: 10px 15px;
    margin-bottom: 20px;
    border-bottom: 1px solid #ff871f;
    background: #333;
    color: #fff;">
                <div class="row" style="display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;">
                    <div class="col" style="-ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;">
                        <a target="_blank" href="#">
                            <img src="https://onegodmed.com/front-assets/images/header/logo.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details" style="-ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;text-align: right;">
                        <h2 class="name" style=" margin-top: 0;
    margin-bottom: 0">Godmed Technologies Pvt Ltd.</h2>
                        <div> 1701/57, Express Trade Tower 2<br>  Sector 132, Noida, UP, India 201305</div>
                        <div><b>GSTIN</b> : 09AAHCG6487H1Z2</div>
                        <div>support@onegodmod.com</div>
                        <div>+91 9169-305-305</div>
                    </div>
                </div>
            </header>
            <main style=" padding: 0 15px 50px;">
                <div class="row contacts" style="display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;margin-bottom: 20px">
                    <div class="col invoice-to" style="-ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;text-align: left">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to" style=" margin-top: 0;
    margin-bottom: 0">Name Middlename Lastname</h2>
                        <div class="address">796 Silver Mall, Indore</div>
                        <div class="email"><a href="mailto:john@example.com">xyz@example.com</a></div>
                    </div>
                    <div class="col invoice-details" style="-ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;text-align: right;">
                        <h1 class="invoice-id" style="margin-top: 0;
    color: #ff871f">INVOICE# OGMYSP1920/00005</h1>
                        <div class="date">Invoice Date # DD/MM/YY</div>
                        <!--<div class="date">Due Date: 30/072010</div>-->
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0" style="width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px">
                    <thead>
                        <tr>
                            <th style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; white-space: nowrap;
    font-weight: 400;
    font-size: 16px">SR NO.</th>
                            <th style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; white-space: nowrap;
    font-weight: 400;
    font-size: 16px" class="text-left"> YOUR BOOKED SERVICE</th>
                            <th style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff;white-space: nowrap;
    font-weight: 400;
    font-size: 16px" class="text-right">SERVICE TYPE</th>
                            <th style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff;white-space: nowrap;
    font-weight: 400;
    font-size: 16px" class="text-right">DATE / TIME OF SERVICE</th>
                            <th style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff;white-space: nowrap;
    font-weight: 400;
    font-size: 16px" class="text-right">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff;color: #fff;
    font-size: 1.6em;
    background: #ff871f;" class="no">01</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" class="text-left">
                            	<h3 style=" margin: 0;
    font-weight: 400;
    color: #ff871f;
    font-size: 1.2em">VEDIC HEALING</h3>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; text-align: right;
    font-size: 17px;
    line-height: 25px; background: #ddd" class="unit">Vedio Call</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; text-align: right;
    font-size: 17px;
    line-height: 25px;" class="qty">01 July 2019<br> 10:00 am TO 12:00 pm</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; text-align: right;
    font-size: 17px;
    line-height: 25px;background: #ff871f;
    color: #fff" class="total">100 INR</td>
                        </tr>
                        <tr>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff;color: #fff;
    font-size: 1.6em;
    background: #ff871f" class="no">02</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" class="text-left">
                            	<h3 style=" margin: 0;
    font-weight: 400;
    color: #ff871f;
    font-size: 1.2em">VEDIC HEALING</h3>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; text-align: right;
    font-size: 17px;
    line-height: 25px; background: #ddd" class="unit">Audio Call</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; text-align: right;
    font-size: 17px;
    line-height: 25px;" class="qty">01 July 2019<br> 10:00 am TO 12:00 pm</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff; text-align: right;
    font-size: 17px;
    line-height: 25px;background: #ff871f;
    color: #fff" class="total">50 INR</td>
                        </tr>                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" colspan="2"></td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" colspan="2">SUBTOTAL</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff">150 INR</td>
                        </tr>
                        <tr>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" colspan="2"></td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" colspan="2">TAX 25%</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff">37 INR</td>
                        </tr>
                        <tr>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" colspan="2"></td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff" colspan="2">GRAND TOTAL</td>
                            <td style=" padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff">177 INR</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks" style=" margin-top: -100px;
    font-size: 25px;
    margin-bottom: 50px">Thank you for choosing us your spiritual partner !</div>
                <div class="notices" style=" padding-left: 6px;
    border-left: 6px solid #ff871f">
                    <div>NOTICE:</div>
                    <div class="notice" style="font-size: 1.2em">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        
        <div></div>
    </div>
</div>
</body>
</html>
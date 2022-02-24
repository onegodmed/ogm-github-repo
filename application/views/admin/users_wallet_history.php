      <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet"/> 
        <style>
          button.dt-button, div.dt-button, a.dt-button {
    background: #fe871e;
    margin: 10px;
    padding: 10px 20px;
    color: #fff;
    font-size: 14px;
    border-radius: 50px;
}
        </style>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">User Wallet History</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wallet History</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $cust[0]->name;?> Wallet & Call History</h3>
                                <div class="table-responsive">
                                    <table id="example" class="display nowrap table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                        <th>S.no</th>
                                        <th>Transaction No. / Booking No.</th>
                                        <th>Transaction Date/Time / Booking Date/Time</th>
                                        <th>Astrologer Name </th>
                                        <th>Package Name </th>
                                        <th>Package Amount </th>
                                        <th>Discount Amount </th>
                                        <th>Recharge Amount(w/o GST) </th>
                                        <th>GST</th>
                                        <th>Amount</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Service Name</th>
                                        <th>Payment Type</th>
                                         <th>Nation</th>
                                        <th>Coupon Code</th>
                                        <th>Coupon Discount</th>
                                        <th>Current Balance</th>
                                        <th>Invoice</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1; foreach($final_history as $row)  {
                                                if(@$row['payment_type'] == "Credit"){
                                            ?>
                                        <tr style="background-color:#209620b0;color:#fff;">
                                            <td style="background-color:#209620b0;color:#fff;"><?php echo $i;?></td>
                                            <td><?php echo @$row['txn_id'];?></td>
                                            <td><?php echo @$row['pay_date'];?></td>
                                            <td><?php if(@$row['name'] !="")echo @$row['name'];else echo "N/A";?></td>
                                            <td><?php if(@$row['pack_name'] !="") echo @$row['pack_name'];else echo "N/A";?></td>
                                            <td><?php if(@$row['amt_bfr_dsc'] > 0) echo @$row['amt_bfr_dsc']; else echo "0";?></td>
                                            <td><?php if(@$row['disc_price'] > 0) echo @$row['disc_price']; else echo "0";?></td>
                                            <td><?php if(@$row['amt_after_dsc'] > 0) echo @$row['amt_after_dsc']; else echo "0";?></td>
                                            <td><?php if(@$row['gst'] > 0) echo @$row['gst']; else echo "0";?></td>
                                            <td><?php if(@$row['pay_amount'] > 0) echo @$row['pay_amount']; else echo "0";?></td>
                                            <td><?php if(@$row['call_duration'] != "") echo @$row['call_duration']; else echo "N/A";?></td>
                                            <td><?php if(@$row['call_type'] != "") echo @$row['call_type']; else echo "N/A";?></td>
                                            <td><?php if(@$row['sevice_name'] != "") echo @$row['sevice_name']; else echo "N/A";?></td>
                                            <td><?php echo @$row['payment_type'];?></td>
                                            <td><?php if(@$row['callNation'] != "") echo @$row['callNation']; else echo "N/A";?></td>
                                            <td><?php if(@$row['coupon_code'] != "") echo @$row['coupon_code']; else echo "N/A";?></td>
                                            <td><?php if(@$row['coupon_disc'] > 0) echo @$row['coupon_disc']; else echo "0";?></td>
                                            <td><?php echo @$row['pay_current_bal'];?></td>
                                            <td><a style="color:#fff;text-decoration:underline" href="<?= base_url()?>admin/invoice/<?php echo base64_encode(@$row['id']);?>/<?php echo base64_encode(@$row['txn_id']);?>/" target="_blank">View Invoice</a></td>
                                        </tr>
                                        <?php }elseif(@$row['payment_type'] == "Debit"){ ?>
                                        <tr style="background-color:#ff00009c;color:#fff;" style="background-color:red;color:#fff;">
                                            <td style="background-color:#ff00009c;color:#fff;"><?php echo $i?></td>
                                            <td><?php echo @$row['txn_id'];?></td>
                                            <td><?php echo @$row['pay_date'];?></td>
                                            <td><?php if(@$row['name'] !="")echo @$row['name'];else echo "N/A";?></td>
                                            <td><?php if(@$row['pack_name'] !="") echo @$row['pack_name'];else echo "N/A";?></td>
                                            <td><?php if(@$row['amt_bfr_dsc'] > 0) echo @$row['amt_bfr_dsc']; else echo "0";?></td>
                                            <td><?php if(@$row['disc_price'] > 0) echo @$row['disc_price']; else echo "0";?></td>
                                            <td><?php if(@$row['amt_after_dsc'] > 0) echo @$row['amt_after_dsc']; else echo "0";?></td>
                                            <td><?php if(@$row['gst'] > 0) echo @$row['gst']; else echo "0";?></td>
                                            <td><?php if(@$row['pay_amount'] > 0) echo @$row['pay_amount']; else echo "0";?></td>
                                            <td><?php if(@$row['call_duration'] != "") echo @$row['call_duration']; else echo "N/A";?></td>
                                            <td><?php if(@$row['call_type'] != "") echo @$row['call_type']; else echo "N/A";?></td>
                                            <td><?php if(@$row['sevice_name'] != "") echo @$row['sevice_name']; else echo "N/A";?></td>
                                            <td><?php echo @$row['payment_type'];?></td>
                                            <td><?php if(@$row['callNation'] != "") echo @$row['callNation']; else echo "N/A";?></td>
                                            <td><?php if(@$row['coupon_code'] != "") echo @$row['coupon_code']; else echo "N/A";?></td>
                                            <td><?php if(@$row['coupon_disc'] > 0) echo @$row['coupon_disc']; else echo "0";?></td>
                                            <td><?php echo @$row['pay_current_bal'];?></td>
                                            <td><a style="color:#fff;text-decoration:underline" href="<?= base_url()?>admin/consultation/<?php echo base64_encode(@$row['id']);?>/<?php echo base64_encode(@$row['txn_id']);?>/" target="_blank">View Reciept</a></td>
                                        </tr>
                                        <?php }$i++;}?>
                                        </tbody>
                                        <tfoot>
                                           <tr>
                                        <th>S.no</th>
                                        <th>Transaction No. / Booking No.</th>
                                        <th>Transaction Date/Time / Booking Date/Time</th>
                                        <th>Astrologer Name </th>
                                        <th>Package Name </th>
                                        <th>Package Amount </th>
                                        <th>Discount Amount </th>
                                        <th>Recharge Amount(w/o GST) </th>
                                        <th>GST</th>
                                        <th>Amount</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Service Name</th>
                                        <th>Payment Type</th>
                                         <th>Nation</th>
                                        <th>Coupon Code</th>
                                        <th>Coupon Discount</th>
                                        <th>Current Balance</th>
                                        <th>Invoice</th>
                                    </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel'
        ]
    } );
} );
    </script>



    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <footer class="footer text-center">



                <?php echo date('Y');?> all rights reserved @ onegodmed.com



            </footer>




 
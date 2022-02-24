

        <div class="page-wrapper">
            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Wallet History</h4>

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

                               
                                 <h3>History</h3>
                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">
<thead>
                                            <tr>
                                        <th>S.no</th>
                                        <th>Transaction No.</th>
                                        <th>Transaction Date/Time</th>
                                        <th>Package Name </th>
                                        <th>Package Amount </th>
                                        <th>Discount Amount </th>
                                        <th>Recharge Amount(w/o GST) </th>
                                        <th>GST</th>
                                        <th>Amount</th>
                                        <th>Coupon Code</th>
                                        <th>Coupon Discount</th>
                                        <th>Current Balance</th>
                                        <th>Invoice</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($final_history as $row)  {
                                            ?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                             <td><?php echo @$row['txn_id'];?></td>
                                            <td><?php echo @$row['pay_date'];?></td>
                                            <td><?php echo @$row['pack_name'];?></td>
                                        <td><?php echo @$row['amt_bfr_dsc'];?></td>
                                        <td><?php echo @$row['disc_price'];?></td>
                                        <td><?php echo @$row['amt_after_dsc'];?></td>
                                        <td><?php echo @$row['gst'];?></td>
                                        <td><?php echo @$row['pay_amount'];?></td>
                                        <td><?php echo @$row['coupon_code'];?></td>
                                        <td><?php echo @$row['coupon_disc'];?></td>
                                        <td><?php echo @$row['pay_current_bal'];?></td>
                                            <td><a style="text-decoration:underline" href="<?= base_url()?>user/invoice/<?php echo base64_encode($this->session->userdata('id'));?>/<?php echo base64_encode(@$row['txn_id']);?>/" target="_blank">View Invoice</a></td>
                                        </tr>
                                        <?php $i++;}?>
                                        </tbody>
                                        <tfoot>
                                           <tr>
                                        <th>S.no</th>
                                        <th>Transaction No.</th>
                                        <th>Transaction Date/Time</th>
                                        <th>Package Name </th>
                                        <th>Package Amount </th>
                                        <th>Discount Amount </th>
                                        <th>Recharge Amount(w/o GST) </th>
                                        <th>GST</th>
                                        <th>Amount</th>
                                        <th>Coupon Code</th>
                                        <th>Coupon Discount</th>
                                        <th>Current Balance</th>
                                        <th><a href="#">Invoice</a></th>
                                    </tr>
                                        </tfoot>
                                    </table>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>

            </div>


 
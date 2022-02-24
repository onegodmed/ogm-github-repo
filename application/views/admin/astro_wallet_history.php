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
                        <h4 class="page-title">Astrologer Wallet History</h4>
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
                                   <h3><?php echo $astro[0]->name;?> Wallet & Call History</h3>
                                <div class="table-responsive">
                                    <table id="example" class="display nowrap table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                        <th>S.no</th>
                                        <th>Customer Name</th>
                                        <th>Booking No.</th>
                                        <th>Booking Date/Time</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Service Name</th>
                                        <th>Amount</th>
                                        <th>Payment Type</th>
                                        <th>Current Balance</th>
                                         <th>Nation</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($wallet_history as $row) {?>
                                        <tr>
                                        <td><?php echo $i?></td>
                                        <td><?php echo $row->name?></td>
                                        <td><?php echo $row->booking_no?></td>
                                        <td><?php echo $row->date?></td>
                                        <td><?php echo $row->call_duration?></td>
                                        <td><?php echo $row->call_type?></td>
                                        <td><?php echo $row->sevice_name?></td>
                                        <td><?php if(@$row->callNation == "Domestic") echo "Rs. ".$row->amount; 
                                        else if(@$row->callNation == "International") echo "USD $ ".$row->amount;
                                        ?></td>
                                         <?php if(@$row->payment_type == "Cradit"){ ?>
                                            <td style="color:green"><?php echo @$row->payment_type;?></td>
                                            <?php }elseif(@$row->payment_type == "Debit"){ ?>
                                            <td style="color:red"><?php echo @$row->payment_type;?></td>
                                            <?php }?>
                                        <td><?php echo $row->astro_current_bal;?></td>
                                        <td><?php echo $row->callNation;?></td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                        <tfoot>
                                           <tr>
                                        <th>S.no</th>
                                        <th>Customer Name</th>
                                        <th>Booking No.</th>
                                        <th>Booking Date/Time</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Service Name</th>
                                        <th>Amount</th>
                                        <th>Payment Type</th>
                                        <th>Current Balance</th>
                                         <th>Nation</th>
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
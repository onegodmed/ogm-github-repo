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
                        <h4 class="page-title">Free Kundali Data</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Free Kundali Data</li>
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
                                <div class="table-responsive">
                                    <table id="example" class="display nowrap table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>DOB</th>
                                        <th>Birth Place</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Birth Time</th>
                                        <th>Date & Time</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($match as $row) {?>
                                        <tr>
                                        <td><?php echo $i?></td>
                                        <td><?php echo $row->name?></td>
                                        <td><?php $m_dob = date('d-m-Y', strtotime($row->dob)); echo $m_dob;?></td>
                                        <td><?php echo $row->birth_place?></td>
                                        <td><?php echo $row->mobile?></td>
                                        <td><?php echo $row->email?></td>
                                        <td><?php echo $row->gender?></td>
                                        <td><?php echo $row->time;?></td>
                                        <td><?php $crdDate = date('d-m-Y H:i:s', strtotime($row->created)); echo $crdDate;?></td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                        <tfoot>
                                           <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>DOB</th>
                                        <th>Birth Place</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Birth Time</th>
                                        <th>Date & Time</th>
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
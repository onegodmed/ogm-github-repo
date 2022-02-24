<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
	<!-- Datatable JS -->
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <div class="page-wrapper">

            <div class="page-breadcrumb">



                <div class="row">



                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Kundali Booking</h4>



                        <div class="ml-auto text-right">



                            <nav aria-label="breadcrumb">



                                <ol class="breadcrumb">



                                    <li class="breadcrumb-item"><a href="#">Home</a></li>



                                    <li class="breadcrumb-item active" aria-current="page">Library</li>



                                </ol>



                            </nav>



                        </div>



                    </div>



                </div>



            </div>



           

            <div class="container-fluid">

<!-- <a class="btn btn-primary" href="<?php echo base_url('user/add_super_cat/'.$this->uri->segment('3'))?>">Add Super Category</a><br><br> -->



                <div class="row">



                    <div class="col-12">



                        <div class="card">



                            <div class="card-body">



                                <!-- <h5 class="card-title">Basic Datatable</h5> -->



                                <div class="table-responsive">
<button class="button-exce" id="button-excel">Create Excel</button>
                                   <table id='empTable' class='display dataTable'>

	  <thead>
	    <tr>
	      <th>S. No.</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Mobile Number</th>
          <th>DOB</th>
          <th>Time</th>
          <th>Current Location</th>
          <th>Birth State</th>
          <th>Birth City</th>
          <th>Upload Kundali</th>
	    </tr>
	  </thead>

	</table>

                                    
                                </div>
                            </div>



                        </div>



                    </div>



                </div>



            </div>

<script type="text/javascript">
	$(document).ready(function(){
	   	$('#empTable').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'post',
	      	'ajax': {
	          'url':'<?=base_url()?>admin/kundliList'
	      	},
	      	'columns': [
	      	    { data: 'id' },
	         	{ data: 'fname' },
	         	{ data: 'lname' },
	         	{ data: 'mobile' },
	         	{ data: 'dob' },
	         	{ data: 'birth_time' },
	         	{ data: 'current_location' },
	         	{ data: 'birth_state' },
	         	{ data: 'birth_city' },
	         	{ data: 'status' },
	      	]
	   	});
	});
	     let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
  let table = document.querySelector("#empTable");
  TableToExcel.convert(table);
});
	</script>
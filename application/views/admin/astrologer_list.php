<style>
.switch {
  position: relative;
  display: inline-block;
  width: 113px;
  height: 34px;
  margin-bottom:0px;
  margin-right:10px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ca2222;
  -webkit-transition: .4s;
  transition: .4s;
   border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(78px);
}

/*------ ADDED CSS ---------*/
.slider:after
{
 content:'offline';
 color: white;
 display: block;
 position: absolute;
 transform: translate(-50%,-50%);
 top: 50%;
 left: 50%;
 font-size: 13px;
 font-family: Verdana, sans-serif;
}

input:checked + .slider:after
{  
  content:'online';
}



/*--------- END --------*/
</style>
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
	<!-- Datatable JS -->
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <!-- Chat Modal -->
 <div class="modal fade" id="Chat" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Next available for chat</h4>
        </div>
        <div class="modal-body">
          <select name="hour" id="selectHourChat">
              <option value="">Select Hour</option>
              <option value="00">00 Hour</option>
              <option value="01">01 Hour</option>
              <option value="02">02 Hour</option>
              <option value="03">03 Hour</option>
              <option value="04">04 Hour</option>
              <option value="05">05 Hour</option>
              <option value="06">06 Hour</option>
              <option value="07">07 Hour</option>
              <option value="08">08 Hour</option>
              <option value="09">09 Hour</option>
              <option value="10">10 Hour</option>
              <option value="11">11 Hour</option>
              <option value="12">12 Hour</option>
              <option value="13">13 Hour</option>
              <option value="14">14 Hour</option>
              <option value="15">15 Hour</option>
              <option value="16">16 Hour</option>
              <option value="17">17 Hour</option>
              <option value="18">18 Hour</option>
              <option value="19">19 Hour</option>
              <option value="20">20 Hour</option>
              <option value="21">21 Hour</option>
              <option value="22">22 Hour</option>
              <option value="23">23 Hour</option>
              <option value="24">24 Hour</option>
          </select>
          <select name="min" id="selectMinChat">
              <option value="">Select Minute</option>
              <option value="00">00 Minutes</option>
              <option value="15">15 Minutes</option>
              <option value="30">30 Minutes</option>
          </select>
          <p style="color:red;" class="errormessage1"></p>
          <input type="hidden" class="setastroId" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="update_status_val('Offline','Chat')" >Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Chat Modal end -->


  <!-- Call Modal -->
 <div class="modal fade" id="Call" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Next available for Call</h4>
        </div>
        <div class="modal-body">
        <select name="hour" id="selectHourCall">
              <option value="00">00 Hour</option>
              <option value="01">01 Hour</option>
              <option value="02">02 Hour</option>
              <option value="03">03 Hour</option>
              <option value="04">04 Hour</option>
              <option value="05">05 Hour</option>
              <option value="06">06 Hour</option>
              <option value="07">07 Hour</option>
              <option value="08">08 Hour</option>
              <option value="09">09 Hour</option>
              <option value="10">10 Hour</option>
              <option value="11">11 Hour</option>
              <option value="12">12 Hour</option>
              <option value="13">13 Hour</option>
              <option value="14">14 Hour</option>
              <option value="15">15 Hour</option>
              <option value="16">16 Hour</option>
              <option value="17">17 Hour</option>
              <option value="18">18 Hour</option>
              <option value="19">19 Hour</option>
              <option value="20">20 Hour</option>
              <option value="21">21 Hour</option>
              <option value="22">22 Hour</option>
              <option value="23">23 Hour</option>
              <option value="24">24 Hour</option>
          </select>
          <select name="min" id="selectMinCall">
              <option value="00">00 Minutes</option>
              <option value="15">15 Minutes</option>
              <option value="30">30 Minutes</option>
          </select>
          <p style="color:red;" class="errormessage1"></p>
          <input type="hidden" class="setastroId" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="update_status_val('Offline','Call')" >Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Call Modal end -->
        <div class="page-wrapper">

            <div class="page-breadcrumb">

                

                <div class="row">

                      

                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Vendor List</h4>



                        <div class="ml-auto text-right">



                            <nav aria-label="breadcrumb">



                                <ol class="breadcrumb">



                                    <li class="breadcrumb-item"><a href="#">Home</a></li>



                                    <li class="breadcrumb-item active" aria-current="page">Vendor List</li>



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

                       <p><a href="<?php echo base_url('admin/add_vendor')?>" class="btn btn-primary">Add Vendor</a> </p>    

                        <div class="card">



                            <div class="card-body">



                               <!--  <h5 class="card-title">Basic Datatable</h5> -->



                                <div class="table-responsive">
 <form method="post" action="<?php echo base_url(); ?>admin/createAstroExcel">
     <input type="submit" name="export" class="btn btn-success" value="Download All" />
    </form>
    <br>
<button class="button-exce" id="button-excel">Create Excel</button>
                                   <table id='empTable' class='display dataTable'>

	  <thead>
	    <tr>
	      <th>S.no.</th>
          <th>Image</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Wallet Balance</th>
          <th>Dollar Wallet Balance</th>
          <th>Mobile</th>
          <th>Call Status</th>
          <th>Chat Status</th>
          <th>Wallet History</th>
          <th>Add Services</th>
          <th>Edit</th>
          <th>Payment Release</th>
          <th>Delete</th>
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
	          'url':'<?=base_url()?>admin/astroList'
	      	},
	      	'columns': [
	      	    { data: 'id' },
	         	{ data: 'image' },
	         	{ data: 'name' },
	         	{ data: 'email' },
	         	{ data: 'password' },
	         	{ data: 'wallet_balence' },
	         	{ data: 'astro_dollar_bal' },
	         	{ data: 'mobile' },
	         	{ data: 'stonline' },
	         	{ data: 'stoffline' },
	         	{ data: 'wallet_hist' },
	         	{ data: 'add_service' },
	         	{ data: 'edit_astro' },
	         	{ data: 'pay_rel' },
	         	{ data: 'delete_astro' },
	      	]
	   	});
	});
	     let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
  let table = document.querySelector("#empTable");
  TableToExcel.convert(table);
});
	</script>


 
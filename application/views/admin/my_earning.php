<?php 
   $ts = strtotime(date("Y-m-d"));
      $start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
      $last_Week = date('Y-m-d', $start);
   //  echo    $last_week_end = date('Y-m-d', strtotime('next saturday', $start));
   //     exit();
      
   //$last_Week = date("Y-m-d", strtotime("-7 days"));
   
   $current_month=date('m');
   $current_year=date('Y');
   if($current_month==1)
   {
   $lastmonth=12;
   }
   else
   {
   $lastmonth=$current_month;
   }
   
   $last_week_earning  = 0;
   $last_Month_earning = 0;
   $inter_last_week_earning  = 0;
   $inter_last_Month_earning = 0;
   $Today_earning = 0; 
   $total_earning= 0;
   $inter_Today_earning = 0; 
   $inter_total_earning= 0;
   $total_realase = 0;
   $inter_total_realase = 0;
   foreach ($my_earning as $row) {
       if($row->payment_type == "Cradit" ){
           if(date("Y-m-d", strtotime($row->date)) == date('Y-m-d') && $row->callNation == 'Domestic'){
        $Today_earning += $row->amount;
        } else if(date("Y-m-d", strtotime($row->date)) == date('Y-m-d') && $row->callNation == 'International'){
          $inter_Today_earning += $row->amount;  
        }
       if($row->callNation == 'Domestic' && $row->payment_type == "Cradit")
       $total_earning += $row->amount;
       else if($row->callNation == 'International' && $row->payment_type == "Cradit")
       $inter_total_earning += ($row->amount);
       } else if($row->payment_type == "Debit" ){
           if($row->callNation == 'Domestic'){
       $total_realase += $row->amount;

    }
       else if($row->callNation == 'International')
       $inter_total_realase += $row->amount;
       }
      }
   ?>
<?php  foreach ($my_earning as $row) {
   if(date("Y-m-d", strtotime($row->date)) <= date('Y-m-d') AND date("Y-m-d", strtotime($row->date)) >= $last_Week && $row->callNation == 'Domestic'&& $row->payment_type == "Cradit")
     $last_week_earning += $row->amount; 
   else if(date("Y-m-d", strtotime($row->date)) <= date('Y-m-d') AND date("Y-m-d", strtotime($row->date)) >= $last_Week && $row->callNation == 'International'&& $row->payment_type == "Cradit")
     $inter_last_week_earning += $row->amount; 
   
   } ?>
<?php  foreach ($my_earning as $row) {
   if(date("m", strtotime($row->date)) <= date('m') AND date("m", strtotime($row->date)) >= $lastmonth && date("Y", strtotime($row->date)) >= $current_year && $row->callNation == 'Domestic' && $row->payment_type == "Cradit" ){
   // echo $row->amount.'<br>';
   
     $last_Month_earning += $row->amount; 
   }
   else if(date("m", strtotime($row->date)) <= date('m') AND date("m", strtotime($row->date)) >= $lastmonth && date("Y", strtotime($row->date)) >= $current_year && $row->callNation == 'International' && $row->payment_type == "Cradit")
     $inter_last_Month_earning += $row->amount; 
   } ?>



<style>
    .page-wrapper.earning>.container-fluid {
    min-height: auto;
}
</style>
<div class="page-wrapper earning">
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">My Earning</h4>
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
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               
               <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                     <tr>
                        <th><b>Earning</b></th>
                        <th><b>INR</b></th>
                        <th><b>USD</b></th>
                    
                     <tr>
                        <th><b>Today's Earning</b></th>
                        <td>Rs. <?php echo round($Today_earning)?></td>
                        <td>USD $ <?php echo round($inter_Today_earning)?></td>
                     </tr>
                     <tr>
                        <th><b><?=date('F-Y')?></b></th>
                        <td>Rs. <?php echo round($last_Month_earning)?></td>
                        <td>USD $ <?php echo round($inter_last_Month_earning)?></td>
                     </tr>
                     <tr>
                        <th><b>Total Earning</b></th>
                        <td>Rs. <?php echo round($total_earning) ?></td>
                        <td>USD $ <?php echo round($inter_total_earning) ?></td>
                     </tr>
                    
                     <tr>
                        <th><b>Total Earnings in INR</b></th>
                        <td>Rs.  <?php echo round($total_earning)?></td>
                        <td>Rs. <?php echo round(($inter_total_earning)*75) ; ?></td>
                     </tr>

                  </table>
               </div>
               


               <!-- <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                     <tr>
                        <th><b>Total Earning</b></th>
                        <td>USD $ 20</td>
                     </tr>
                  
                     
                     <tr>
                        <th><b>Total Realase Amount</b></th>
                        <td>USD $ <?php echo $inter_total_realase?></td>
                     </tr>
                     <tr>
                        <th><b>Remaining Balance</b></th>
                        <td>USD $ <?php echo $inter_total_earning - $inter_total_realase?></td>
                     </tr>
                  </table>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</div>


<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               
             
               


               <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                     <tr>
                        <th><b>Total Earning in INR</b></th>
                        <td>Rs. <?php echo $t =  round(($total_earning + $inter_total_earning*75)) ?></td>
                     </tr>
                  
                     
                     <tr>
                        <th><b>Total Realase Amount</b></th>
                        <td>Rs. <?php echo $total= round(($total_realase  )) ?></td>
                     </tr>
                     <tr>
                        <th><b>Remaining Balance</b></th>
                        <td>Rs. <?php echo round($t - $total) ?></td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
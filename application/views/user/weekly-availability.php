<!DOCTYPE html>
<html>
   <head>
      <title>Weekly Availability</title>
      <style type="text/css">

        
         label{ cursor:pointer; user-select:none; }
            input:checked + span {
            color:red;
            }
            .availbilti-admin input {
                display: none;
            }
            .wrap-main {
            width: calc(100% - 250px);
            margin-left: auto;
        }
        .availability {
            border: 2px solid #e1e1e1;
            padding: 15px 20px;
        }

        .availability h4 {
            text-align: center;
            border-radius: 5px;
            break-after: avoid;
            border: 2px solid #000;
            padding: 20px 10px;
            margin: 0;
        }
                .avail-wrap {
            border: 2px solid #e1e1e1;
            margin-top: 30px;
        }

        .day-wrap {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            border-bottom: 2px solid #e1e1e1;
            padding-bottom: 5px;
            padding-left: 5px;
            padding-top: 5px;
            position: relative;
            flex-wrap: wrap;
        }
        .day {
            text-align: center;
            border-radius: 5px;
            break-after: avoid;
            border: 2px solid #000;
            padding: 10px 15px;
            margin: 0;
            max-width: 60px;
            min-width: 60px;
            min-height: 46px;
            font-weight: 700;
        }

        .availbilti-admin {
            margin: 50px auto;
        }

        .avail-wrap ul {
            width: calc(100% - 60px);
            padding-left: 15px;
            margin-bottom: 0;
        }

        .avail-wrap ul label span    {
            list-style: none;
            display: inline-block;
            background-color: #ff8820;
            font-size: 10px;
            border-radius: 10px;
            padding: 2px 5px;
            
            color: #fff;
        }
        .avail-wrap ul label input:checked + span {
            background-color: #66B21B;
            color: #fff;
        }
        .avail-wrap ul:before {
            content: "";
            width: 2px;
            height: calc(100% + 7px);
            position: absolute;
            background-color: #e1e1e1;
            top: 0;
            left: 73px;
        }
        .daysTbale:last-child .day-wrap{
            border-bottom: 0;
        }

                .day label {
            margin-bottom: 0;
                }

                .availability button.btn {
                    margin: 0 auto;
                    display: flex;
                    margin-top: 17px;
                    background-color: #ff8820;
                    border-color: #ff8820;
                    border-radius: 5px;
                    padding: 0.375rem 2rem;
                }
                .avail-wrap ul label {
    width: 24%;
    text-align: center;
}
      </style>
   </head>
   <body>
       <div class="wrap-main">
       <form action="<?php echo base_url();?>User/updateweeklytime" method="post">
         <div class="col-md-8 availbilti-admin">
            <div class="availability">
               <h4>Availability</h4>
               <div class="avail-wrap">
                    <?php
                        foreach ($timetable as $key => $list) { ?>
                    
                                <div class="daysTbale">
                                <div class="day-wrap">
                                    <div class="day"><input type="checkbox" name="day[]" checked value="<?= $list->day?>">
                                        <input type="hidden" name="astroid" value="<?php echo $this->session->userdata('id') ; ?>"> 	
                                        <label for="vehicle1"><?= $list->day?></label><br>
                                    </div>
                                    <ul>     	
                                        <?php $time =explode(",", $list->time);
                                        if(isset($check[0])){
                                            $select_time = explode(",", $check[0][$list->day]);
                                        }else{
                                            $select_time = [];
                                        }
                                        foreach ($time as  $value) {
                                         ?>  
                                        <label>
                                            <input type="checkbox" <?php if (in_array($value, $select_time)) { echo "Checked"; } ?> name="<?= $list->day?>[]" value="<?= $value ?>">
                                            <span><?= $value ?></span>
                                        </label>	
                                           
                                        <?php }  ?>
                                     
                                    </ul>
                                </div>
                                </div>
                        
                    
                    <?php } ?>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div>
         </div>
        
      </form>
       </div>
     
   </body>
</html>
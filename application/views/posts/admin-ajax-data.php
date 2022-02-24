         <button class="button-exce" id="button-excel">Create Excel</button>
                                    <table id="zero_config2" class="display" style="width:100%">

                                        <thead>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>
                                                
                                                <th>Customer Mobile</th>

                                                <th>Vendor Name</th>

                                                <th>Services name</th>
                                                
                                                <th>Nation</th>
                                                
                                                <th>Price</th>
                                                
                                                <th>Vendor Price</th>
                                                <th>Vendor Service Price</th>
                                                <th>Service Type</th>
                                                
                                                <th>Duration</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>
                                                <th>No. of Calls</th>
                                                <th>Status</th>
                                                
                                                <th>Agent Call Ring Status</th>
                                                
                                                <th>Agent Call Up Status</th>
                                                
                                                <th>Customer Call Ring Status</th>
                                                
                                                <th>Customer Call Up Status</th>
                                                
                                                <th>Customer Hangup Status</th>
                                                
                                                <th>Agent Hangup Status</th>
                                                
                                                <th>Call Status</th>
                                                
                                                <th>Recording</th>
                                                <th>Refund</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            <?php 

                             $i = 1;
                             $cnt=0;
                         foreach ($booking as $key => $row) {

                                  if($row['menu_id'] == 3){

                                    $where = array('id' => $row['astrologer_id']);

                                    $profile = $this->admin->get_details('author', $where);

                         ?>

                                                <tr>

                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row['name']; ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php echo $row['mobile']; ?>
                                                    </td>

                                                    <td>
                                                        <?php if($profile){echo $profile[0]->name;}else{

                                                echo "";

                                            } ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row['super_category']; ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php echo $row['callNation']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row['service_price']; ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <?php echo $row['vendor_service_price'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['vendor_price'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['call_type']; ?>
                                                    </td>
                                                     <td>
                                                        <?php echo $row['call_duration']; ?>
                                                    </td>
                                                    
                                                    <td><?php echo $row['date'];?></td>

                                                    <td><?php echo $row['booking_no'];?></td>
<td>
                                                        <?php echo $row['callCount'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['is_Active'];?>
                                                    </td>
                                                    <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_calltype');
                                                        $this->db->where('callid', $row['callRequestId']);
                                                        $query = $this->db->get();
                                                        $callData = $query->result();
                                                        if(count($callData)>0){
                                                            if($row['callNation'] == "Domestic"){
                                                    ?>
                                                    <?php if(@$callData[0]->status =="AgentRing"){?>
                                                    <td> <?php echo @$callData[0]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                   <?php if(@$callData[1]->status =="AgentUp"){?>
                                                    <td> <?php echo @$callData[1]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[2]->status =="CustomerRing"){?>
                                                    <td> <?php echo @$callData[2]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[3]->status =="CustomerUp"){?>
                                                    <td> <?php echo @$callData[3]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[4]->status =="AgentHangup"){?>
                                                    <td> <?php echo @$callData[4]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[5]->status =="CustomerHangup"){?>
                                                    <td> <?php echo @$callData[5]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[6]->status =="answered"){?>
                                                    <td> <?php echo @$callData[6]->status;?></td>
                                                    <?php }elseif(@$callData[3]->status =="CustomerUp"){?>
                                                    <td><?php if($row['is_Active'] == "Complete"){?>
                                                        answered<?php } else if($row['is_Active'] == "Accept"){?>In progress
                                                        <?php }?>
                                                        </td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[6]->callHistory !=""){
                                                    if(@$callData[6]->status == 'answered'){
                                                                $caddSt = @$callData[6]->callHistory;
                                                                $CalData = json_decode($caddSt, 1);
                                                            $finalData = json_decode($CalData['data'], 1);
                                                            ?>
                                                    <td><audio controls>
                                                                  <source src="<?php echo @$finalData['cdr']['recording-url']?>" type="audio/mpeg">
                                                                </audio></td>
                                                    <?php }}else{?>
                                                    <td></td>
                                                     <?php }}  else{ ?>
                                                    <td></td>
                                                    <td></td>
                                                    <?php if(@$callData[0]->status =="CustomerRing"){?>
                                                    <td> <?php echo @$callData[0]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[1]->status =="CustomerUp"){?>
                                                    <td> <?php echo @$callData[1]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[2]->status =="CustomerHangup"){?>
                                                    <td> <?php echo @$callData[2]->status;?></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <td></td>
                                                    <?php if(@$callData[3]->status =="answered"){?>
                                                    <td> <?php echo @$callData[3]->status;?></td>
                                                    <?php }elseif(@$callData[1]->status =="CustomerUp"){?>
                                                    <td>In Progress</td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                    <?php if(@$callData[3]->callHistory !=""){
                                                    // if(@$callData[3]->status == 'answered'){
                                                                $caddSt = @$callData[3]->callHistory;
                                                                $CalData = json_decode($caddSt, 1);
                                                            $finalData = json_decode($CalData['data'], 1);
                                                            ?>
                                                    <td><audio controls>
                                                                  <source src="<?php echo @$finalData['cdr']['recording-url']?>" type="audio/mpeg">
                                                                </audio></td>
                                                    <?php }else{?>
                                                    <td></td>
                                                    <?php }?>
                                                     <?php }}else{?>
                                                     <td> </td>
                                                      <td> </td>
                                                       <td> </td>
                                                        <td> </td>
                                                         <td> </td>
                                                          <td> </td>
                                                           <td> </td>
                                                           <?php if($row['call_type'] == "Chat" && ($row['is_Active'] == "Reimbursement" || $row['is_Active'] == "Complete" || $row['is_Active'] == "Accept")){?>
                                                           <td><a href="<?= base_url()?>admin/chathistory/<?php echo base64_encode($row['customer_id']);?>/<?php echo base64_encode($row['astrologer_id']);?>/<?php echo base64_encode($row['id']);?>/" target="_blank">Chat History</a></td>
                                                           <?php }else{?>
                                                           <td></td>
                                                           <?php }}?>
                                                            <td>
                                                            <?php if($row['is_Active'] == "Complete"){?>
                                                            <input type="button" class="btn btn-primary" onclick="updateCallstatus(<?php echo $row['id'];?>, <?php echo $row['service_price']; ?>, <?php echo $row['vendor_service_price']; ?>, <?php echo $row['customer_id']; ?>, <?php echo $row['astrologer_id']; ?>, '<?php echo $row['booking_no']; ?>', '<?php echo $row['callNation'];?>')" value="Reimbursement">
                                                            <?php }else if($row['is_Active'] == "Reimbursement"){?>
                                                            Reimbursed
                                                            <?php }?>
                                                            </td>
                                                            <td>
                                                            <?php if($row['call_type'] == "Chat"){?>
                                                            <select class="form-control" onchange="chat_status(this.value,<?php echo $row['id'];?>)">
                                                            <option value="<?php echo $row['is_Active']?>">
                                                                <?php echo $row['is_Active']?>
                                                            </option>
                                                            <option value="Cancel" <?php if($row['is_Active'] == "Cancel"){ echo "hidden"; } ?> >Cancel</option>
                                                        </select>
                                                            <?php }?>
                                                            </td>
                                                </tr>

                                                <?php }}?>
  
                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th>S.no</th>

                                                <th>Customer Name</th>
                                                
                                                <th>Customer Mobile</th>

                                                <th>Vendor Name</th>

                                                <th>Services name</th>
                                                
                                                 <th>Nation</th>

                                                <th>Price</th>
                                                
                                                <th>Vendor Price</th>
                                                <th>Vendor Service Price</th>
                                                <th>Service Type</th>
                                                
                                                <th>Duration</th>

                                                <th>Booking Date</th>

                                                <th>Booking no</th>
                                                <th>No. of Calls</th>
                                                <th>Status</th>
                                                
                                                <th>Agent Call Ring Status</th>
                                                
                                                <th>Agent Call Up Status</th>
                                                
                                                <th>Customer Call Ring Status</th>
                                                
                                                <th>Customer Call Up Status</th>
                                                
                                                <th>Customer Hangup Status</th>
                                                
                                                <th>Agent Hangup Status</th>
                                                
                                                <th>Call Status</th>
                                                
                                                <th>Recording</th>
                                                <th>Refund</th>
                                                <th>Action</th>
                                            </tr>

                                        </tfoot>

                                    </table>



<!-- Render pagination links -->
<?php echo $this->ajax_pagination->create_links(); ?>
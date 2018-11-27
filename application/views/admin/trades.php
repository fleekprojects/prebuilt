<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
			<div id="msg"></div>
            <div class="x_title">
               <h2>Recent <?= $title; ?> |<small>List</small></h2>
               <?php  if(count($records) > 0 ) { ?>
               <!--<button type="button" class="btn btn-danger margin pull-right" onClick="doDelete()" style="margin-right:auto" >Delete</button>-->
               <?php } ?>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <form method="post" id="ordertbl" action="<?= base_url();?>admin/Categories/DeleteRecord">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th align="center"><input type="checkbox" name="chkAll" class="checkUncheckAll" ></th>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Trade Type</th>
                           <th>Payment</th>
                           <th>Order Total</th>
                           <th>Status</th>
                           <!--<th>Date Added</th>-->
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach($records AS $rec){
                            ?>
                        <tr>
                           <td align="center">
                              <input class="chkIds" type="checkbox" name="ids[]" id="chk-<?= $rec['id'] ?>" value="<?= $rec['id'] ?>"  />
                           </td>
                           <td><a style="color: #72b6f1; font-weight: 700;" href="javascript:;" onclick="get_details(<?= $rec['id']; ?>)"><?= $rec['order_code']; ?></a><br/>
						   <?php
							if($rec['status'] == "" && $rec['trade_details']=='Prepaid Label'){
								echo '<span class="label label-primary"><i class="fa fa-info"></i>&nbsp; Shipping Kit Sent</span>';
							}
							else if($rec['status'] == "" ){
								echo '<span class="label label-primary"><i class="fa fa-play-circle"></i>&nbsp; Initiated</span>';
							}
							else if($rec['status'] == "received" ){
								echo '<span class="label label-success"><i class="fa fa-check"></i>&nbsp; Received</span>';
							}
							else if($rec['status'] == "paid" ){
								echo '<span class="label label-success"><i class="fa fa-check"></i>&nbsp; Paid</span>';
							}
							else if($rec['status'] == "returned" ){
								echo '<span class="label label-success"><i class="fa fa-check"></i>&nbsp; Returned</span>';
							}
							else if($rec['status'] == "cancelled" ){
								echo '<span class="label label-success"><i class="fa fa-check"></i>&nbsp; Cancelled</span>';
							}
						   ?><br>
						   <b style="font-size: 11px;"><?= date('jS M Y h:i:s A', strtotime($rec['created_at'])); ?></b>
						   </td>
                           <td><?= $rec['first_name'].' '.$rec['last_name']; ?></td>
                           <td><?= $rec['email']; ?></td>
                           <td><?= $rec['phone']; ?></td>
                           <td><?= $rec['trade_details']; ?></td>
                           <td><?= ($rec['pay_type'] == 1 ? 'Paypal' : 'Check'); ?></td>
                           <td>$<?= $rec['amount']; ?></td>
                           <td>
							<select class="form-control" id="o_st<?= $rec['id'] ?>" onchange='change_order_status(<?= $rec['id'].',"'.$name.'","'.$rec['email'].'"'; ?>)' >
								<option <?= ($rec['status'] == "" ? 'selected' : ''); ?> value="">Pending</option>
								<option <?= ($rec['status'] == "received" ? 'selected' : ''); ?> value="received">Received</option>
								<option <?= ($rec['status'] == "paid" ? 'selected' : ''); ?> value="paid">Paid</option>
								<option <?= ($rec['status'] == "recycled" ? 'selected' : ''); ?> value="recycled">Recycled</option>
								<option <?= ($rec['status'] == "returned" ? 'selected' : ''); ?> value="returned">Returned</option>
								<?php
								if($rec['trade_details']=='Prepaid Label'){
									echo '<option '.($rec['status'] == "shipping_kit_sent" ? 'selected' : '').' value="shipping_kit_sent">Shipping Kit Sent</option>';
								} ?>
							</select>
                           </td>
                         <!--  <td>
                              <span style="font-size:0"><?= $rec['created_at']; ?></span>
                              <? date('jS M Y h:i:s A', strtotime($rec['created_at'])); ?>
                           </td>-->
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                  </table>
               </form>
            </div>
         </div>
      </div>
      <!-- Detail modal -->
      <div class="modal fade bs-example-modal-lg" id="ModalOdet" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel"><?= $title; ?> |<small>View Details</small></h4>
               </div>
               <div class="modal-body" id="detail_view">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Detail modal -->
   </div>
</div>
<script>
	$('#ordertbl').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
   function get_details(id){
   	$.ajax({
   		url:"<?= base_url(); ?>admin/trades/get_order",
   		type:'POST',
   		data:{'id':id},
   		success:function(result){
   			$("#detail_view").html(result);
   			$("#ModalOdet").modal("show");
   		},
   		error: function (xhr, textStatus, errorThrown){
   			console.log(xhr.responseText);
   		}
   	});
   }
   function change_order_status(id,name,email){
	var status=$("#o_st"+id).val();
   	$.ajax({
   		url:"<?= base_url(); ?>admin/trades/ch_status",
   		type:'POST',
   		data:{'id':id,'status':status,'name':name,'email':email},
   		success:function(result){
   			$("#msg").html('<div class="alert alert-success alert-dismissable"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><b> Status Updated!</b></div>');
			$("#msg").show();
			// setTimeout(function(){$("#msg").hide(); }, 1000);
			setTimeout(location.reload(), 1000);
   		},
   		error: function (xhr, textStatus, errorThrown){
   			console.log(xhr.responseText);
   		}
   	});
   }
</script>
<div class="row">
   <div class="col-md-12">
      <table style="width:100%">
         <thead>
            <tr>
               <th>Provider</th>
               <th>Device</th>
               <th>Condition</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Subtotal</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php
			foreach ($odetails as $item){
				?>            
            <tr>
               <td><?= $item['provider']; ?></td>
               <td><?= $item['device'].' '.$item['storage']; ?></td>
               <td><?= $item['condition']; ?></td>
               <td>$<?= $item['offer']; ?></td>
               <td><?= $item['quantity']; ?></td>
               <td>$<?= $item['subtotal']; ?></td>
               <td>
			   <?php
				if($order[0]['status']==""){
					echo 'Mark as received first to access actions';
				}
				else{ ?>
				<a class="text-success" href="/admin/trade-ins/896/items/1318/inspections/passed" title="Passed Inspection"><i class="fa fa-check"></i></a>
				&nbsp;&nbsp;
				<a class="text-danger" href="/admin/trade-ins/896/items/1318/inspections/failed" title="Failed Inspection"><i class="fa fa-ban"></i></a>
				&nbsp; &nbsp;
				<a class="text-warning" href="#" onclick="TradeInModal.showRequoteForItem('f1adfdbc896', '1318');" title="Requote"><i class="fa fa-quote-left"></i></a>
				&nbsp; &nbsp;
				<a class="text-danger" href="#" onclick="TradeInModal.showActionRequiredForItem('f1adfdbc896', '1318');" title="Seller Action Required"><i class="fa fa-exclamation-triangle"></i></a>
				<?php } ?>
				</td>
            </tr>
            <?php
			}
			?>         
         </tbody>
      </table>
   </div>
</div>
<hr noshade>
<div class="row">
   <div class="col-md-12">
      <h2>Order Total: <span id="total">$<?= $order[0]['amount']; ?></span></h2>
   </div>
</div>
<hr noshade>
<div class="row" style="min-height: 50px;">
   <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="col-xs-2">         <i class="fa fa-user" style="font-size: 32px;"></i>      </div>
      <div class="col-xs-10">
         <h4>            Contact Information          </h4>
         <p>            <?= $order[0]['first_name'].' '.$order[0]['last_name']; ?><br/>            <?= $order[0]['email']; ?><br/>            <?= $order[0]['phone']; ?><br/><br/>         </p>
      </div>
   </div>
   <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="col-xs-2">         <i class="fa fa-edit" style="font-size: 32px;"></i>      </div>
      <div class="col-xs-10">
         <h4>            Shipping Information          </h4>
         <p><?= $order[0]['address']; ?><br/>
		 <?= $order[0]['zip'].', '.$order[0]['city'].', '.$order[0]['state']; ?>
		 <hr/>
		 <?= $order[0]['trade_details']; ?>
		 </p>
      </div>
   </div>
   <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="col-xs-2">         <i class="fa fa-paypal" style="font-size: 32px;"></i>      </div>
      <div class="col-xs-10">
         <h4>            Payment Method         </h4>		 <p>			<?php				if($order[0]['pay_type']==1){					echo 'Payment Method: Paypal<br/>';					echo 'Paypal Email: '.(!empty($order[0]['paypal_email']) ? $order[0]['paypal_email'] : $order[0]['email']);				}				else if($order[0]['pay_type']==2){					echo 'Payment Method: Check<br/>';					echo 'Check Type: '.($order[0]['check_type'] == "e_check" ? 'E-Check - Receive check via E-Mail, You print out.' : 'Mailed Check - Receive your check in the mail 3-5 business days after your order is processed.');				}				?>		 </p>
      </div>
   </div>
</div>
<hr noshade>
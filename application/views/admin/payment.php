<div class="">
<div class="page-title">
<div class="title_left">
<h3><?= $title; ?></h3>
</div>
</div>
<hr noshade>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div id="msg"></div>
<div class="x_panel">
<div class="x_title">
<h2><?= $title; ?> |<small>View</small></h2>
<div class="clearfix"></div>
</div>
<div class="x_content">
<table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
<tr>
<th>Payment ID</th>	
<th>Webapp ID</th>
<th>Payment Date</th>
<th>Amount</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php foreach ($paymentdata as $paydata) { ?>
<tr>
<td><?php echo $paydata['id']; ?></td>
<td><?php echo $paydata['webapp_id']; ?></td>
<td><?php echo $paydata['payment_date']; ?></td>
<td><?php echo '$'.number_format((float)$paydata['amount_paid'], 2, '.', ''); ?></td>
<td><?php if($paydata['status'] == 0){ echo 'Decline'; }elseif($paydata['status'] == 1){ echo 'Pending'; }elseif($paydata['status'] == 2){ echo 'Accepted'; }elseif($paydata['status'] == 4){ echo 'Canceled'; } ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Manage <?= $title; ?></h3>
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
<a href="newwebapp" class="btn btn-default margin pull-right" style="margin-right:5px"><i class="fa fa-plus"></i> Add WebApp</a>
<div class="clearfix"></div>
</div>
<div class="x_content">
<!-----------------View Order Modal ------------------>
<div class="modal fade" id="vieworderModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Webapp Details</h3>
</div>
<div class="modal-body">
<div class="form-group col-md-6">
<label>Webapp ID:</label>
<span id="ordnumber"></span>
</div>
<div class="form-group col-md-6">
<label>Date:</label>
<span id="orddte"></span>
</div>
<div class="form-group col-md-6">
<label>Name:</label>
<span id="ordnme"></span>
</div>
<div class="form-group col-md-6">
<label>Email:</label>
<span id="ordeml"></span>
</div>
<div class="form-group col-md-6">
<label>Business Name:</label>
<span id="ordbusnes"></span>
</div>
<div class="form-group col-md-6">
<label>Industry:</label>
<span id="ordinds"></span>
</div>
<div class="form-group col-md-6">
<label>Do you have any domain?:</label>
<span id="ordhvedmn"></span>
</div>
<div class="form-group col-md-6">
<label>Your Domain:</label>
<span id="orddmn"></span>
</div>
<div class="form-group col-md-6">
<label>Your Logo:</label>
<span id="ordlgo"><img src="" width="100" height="100"></span>
</div>
<div class="form-group col-md-6">
<label>Your Theme:</label>
<span id="ordthm"><img src="" width="100" height="100"></span>
</div>
<div class="form-group col-md-12">
<label>Details:</label>
<span id="orddtls"></span>
</div>
<div class="form-group col-md-6">
<label>Package:</label>
<span id="ordpckg"></span>
</div>
<div class="form-group col-md-6">
<label>Package Type:</label>
<span id="ordpckgtyp"></span>
</div>
<div class="form-group col-md-6">
<label>Package Price:</label>
<span id="ordprce"></span>
</div>
<div class="form-group col-md-6">
<label>Status:</label>
<span id="ordsts"></span>
</div>
<div class="form-group col-md-6">
<label>Auto Renew:</label>
<span id="ordrnw"></span>
</div>
<div class="form-group col-md-6">
<label>Contacted:</label>
<span id="ordcontct"></span>
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
</div>
</div>
</div>
</div>
<!----------------------/View Order Modal ----------------------->	
<div id="ststmsg"></div>
<table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
<tr>
<th>Webapp ID</th>
<th>Business</th>
<th>Email</th>
<th>Payment Date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($webdata as $webdatas) { ?>
<tr>
<td><?php echo $webdatas['webapp_id']; ?></td>
<td><?php echo $webdatas['business_name']; ?></td>
<td><?php echo $webdatas['email']; ?></td>
<td><?php echo $webdatas['date_created']; ?></td>
<td>
<select name="webstatus" id="webstatus" onchange="webstaus('<?php echo $webdatas['webapp_id']; ?>',this.value);">
<option value="0" <?php if($webdatas['status'] == 0){ echo 'selected="selected"'; }else{} ?>>Deactive</option>
<option value="1" <?php if($webdatas['status'] == 1){ echo 'selected="selected"'; }else{} ?>>Active</option>	
</select>	
</td>
<td><a data-toggle="modal" data-target="#vieworderModal" class="btn btn-warning btn-editc btn-sm vieworder" webId="<?=$webdatas['webapp_id']?>">
<i class="fa fa-eye"></i></a>
<a href="editwebapp/<?=$webdatas['webapp_id']?>" class="btn btn-warning btn-editc btn-sm" webId="<?=$webdatas['webapp_id']?>">
<i class="fa fa-edit"></i></a></td>
</tr>
<?php }	?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
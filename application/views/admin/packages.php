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
<a data-toggle="modal" data-target="#createpackageModal" class="btn btn-default margin pull-right" style="margin-right:5px"><i class="fa fa-plus"></i> Add New Package</a>
<div class="clearfix"></div>
</div>
<!-----------------Create Industry Modal ------------------>
<form role="form" id="createpackageform" method="post" enctype="multipart/form-data" name="frmPage">
<div class="modal fade" id="createpackageModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">New Package</h3>
</div>
<div class="modal-body">
<div id="pckgsmsg"></div>	
<div class="form-group col-md-12">
<label>Package Name:</label>
<input type="text" name="packagename" id="packagename" class="form-control" required />
</div>
<div class="form-group col-md-12">
<label>About Package:</label>
<input type="text" name="packagedetails" id="packagedetails" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Package Price:</label>
<input type="text" name="packageprice" id="packageprice" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Package Discount Price:</label>
<input type="text" name="packagediscountprice" id="packagediscountprice" class="form-control" value="0" required />
</div>
<div class="form-group col-md-12">
<label>Package Type:</label>
<select name="package_type" id="package_type" class="form-control">
<option value="0">One Time</option>
<option value="1">One Time + Monthly</option>
<option value="2">Monthly</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Add Package</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Create Industry Modal ----------------------->
<!-----------------Edit Industry Modal ------------------>
<form role="form" action="" id="editpackageform" method="post" enctype="multipart/form-data" name="frmPage">
<input type="hidden" name="edit_packageid" id="edit_packageid">	
<div class="modal fade" id="editpackageModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Edit Package</h3>
</div>
<div class="modal-body">
<div id="editpckgsmsg"></div>	
<div class="form-group col-md-12">
<label>Package Name:</label>
<input type="text" name="edit_packagename" id="edit_packagename" class="form-control" required />
</div>
<div class="form-group col-md-12">
<label>About Package:</label>
<input type="text" name="edit_packagedetails" id="edit_packagedetails" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Package Price:</label>
<input type="text" name="edit_packageprice" id="edit_packageprice" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Package Discount Price:</label>
<input type="text" name="edit_packagediscountprice" id="edit_packagediscountprice" class="form-control" value="0" required />
</div>
<div class="form-group col-md-12">
<label>Package Type:</label>
<select name="edit_package_type" id="edit_package_type" class="form-control">
<option value="0">One Time</option>
<option value="1">One Time + Monthly</option>
<option value="2">Monthly</option>
</select>
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Update Package</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Edit User Modal ----------------------->
<div class="x_content">
<table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
<tr>
<th>Package Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($packagedata as $package) { ?>
<tr>
<td><?php echo $package['name']; ?></td>
<td>
<a data-toggle="modal" data-target="#editpackageModal" class="btn btn-warning btn-editc btn-sm editpackage" packageId="<?=$package['package_id']?>">
<i class="fa fa-edit"></i></a>
<a class="btn btn-danger btn-sm packagedelete" packageId="<?=$package['package_id']?>"><i class="fa fa-trash"></i></a>	
</td>
</tr>	
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
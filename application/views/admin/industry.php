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
<a data-toggle="modal" data-target="#createindustryModal" class="btn btn-default margin pull-right" style="margin-right:5px"><i class="fa fa-plus"></i> Add New Industry</a>
<div class="clearfix"></div>
</div>
<!-----------------Create Industry Modal ------------------>
<form role="form" id="createindustryform" method="post" enctype="multipart/form-data" name="frmPage">
<div class="modal fade" id="createindustryModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">New Industry</h3>
</div>
<div class="modal-body">
<div id="industrymsg"></div>	
<div class="form-group col-md-12">
<label>Industry Name:</label>
<input type="text" name="industryname" id="industryname" class="form-control" required />
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Add Industry</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Create Industry Modal ----------------------->
<!-----------------Edit Industry Modal ------------------>
<form role="form" action="" id="editindustryform" method="post" enctype="multipart/form-data" name="frmPage">
<input type="hidden" name="edit_industryid" id="edit_industryid">	
<div class="modal fade" id="editindustryModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Edit Industry</h3>
</div>
<div class="modal-body">
<div id="editindustrysmsg"></div>	
<div class="form-group col-md-12">
<label>Industry Name:</label>
<input type="text" name="edit_industry" id="edit_industry" class="form-control" required />
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Update Industry</button>
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
<th>Industry Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($industrydata as $industry) { ?>
<tr>
<td><?php echo $industry['name']; ?></td>
<td>
<a data-toggle="modal" data-target="#editindustryModal" class="btn btn-warning btn-editc btn-sm editindustry" industryId="<?=$industry['id']?>">
<i class="fa fa-edit"></i></a>
<a class="btn btn-danger btn-sm industrydelete" industryId="<?=$industry['id']?>"><i class="fa fa-trash"></i></a>	
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
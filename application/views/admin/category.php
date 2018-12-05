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
<a data-toggle="modal" data-target="#createcategoryModal" class="btn btn-default margin pull-right" style="margin-right:5px"><i class="fa fa-plus"></i> Add New Category</a>
<div class="clearfix"></div>
</div>
<!-----------------Create Category Modal ------------------>
<form role="form" id="createcategoryform" method="post" enctype="multipart/form-data" name="frmPage">
<div class="modal fade" id="createcategoryModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">New Category</h3>
</div>
<div class="modal-body">
<div id="catorymsg"></div>	
<div class="form-group col-md-12">
<label>Category Name:</label>
<input type="text" name="categoryname" id="categoryname" class="form-control" required />
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Add Category</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Create Category Modal ----------------------->
<!-----------------Edit Category Modal ------------------>
<form role="form" action="" id="editcategoryform" method="post" enctype="multipart/form-data" name="frmPage">
<input type="hidden" name="edit_categoryid" id="edit_categoryid">	
<div class="modal fade" id="editcategoryModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Edit Category</h3>
</div>
<div class="modal-body">
<div id="editcategorysmsg"></div>	
<div class="form-group col-md-12">
<label>Category Name:</label>
<input type="text" name="edit_categoryname" id="edit_categoryname" class="form-control" required />
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Update Category</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Edit Category Modal ----------------------->
<div class="x_content">
<div id="categorysmsg"></div>	
<table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
<tr>
<th>Category Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($categorydata as $category) { ?>
<tr>
<td><?php echo $category['pre_name']; ?></td>
<td>
<a data-toggle="modal" data-target="#editcategoryModal" class="btn btn-warning btn-editc btn-sm editcategory" categoryId="<?=$category['id']?>">
<i class="fa fa-edit"></i></a>
<a class="btn btn-danger btn-sm categorydelete" categoryId="<?=$category['id']?>"><i class="fa fa-trash"></i></a>	
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
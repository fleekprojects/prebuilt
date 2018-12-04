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
<a data-toggle="modal" data-target="#createthemeModal" class="btn btn-default margin pull-right" style="margin-right:5px"><i class="fa fa-plus"></i> Add New Theme</a>
<div class="clearfix"></div>
</div>
<!-----------------Create Theme Modal ------------------>
<form role="form" id="createthemeform" method="post" enctype="multipart/form-data" name="frmPage">
<div class="modal fade" id="createthemeModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">New Theme</h3>
</div>
<div class="modal-body">
<div id="thememsg"></div>	
<div class="form-group col-md-12">
<label>Theme Name:</label>
<input type="text" name="themename" id="themename" class="form-control" required />
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Add Theme</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Create Theme Modal ----------------------->
<!-----------------Edit Theme Modal ------------------>
<form role="form" action="" id="editthemeform" method="post" enctype="multipart/form-data" name="frmPage">
<input type="hidden" name="edit_themeid" id="edit_themeid">	
<div class="modal fade" id="editthemeModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Edit Theme</h3>
</div>
<div class="modal-body">
<div id="editcategorysmsg"></div>	
<div class="form-group col-md-12">
<label>Theme Name:</label>
<input type="text" name="edit_themename" id="edit_themename" class="form-control" required />
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Update Theme</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Edit Theme Modal ----------------------->
<div class="x_content">
<table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
<tr>
<th>Theme Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($themedata as $theme) { ?>
<tr>
<td><?php echo $theme['theme_name']; ?></td>
<td>
<a data-toggle="modal" data-target="#editthemeModal" class="btn btn-warning btn-editc btn-sm edittheme" categoryId="<?=$theme['theme_id']?>">
<i class="fa fa-edit"></i></a>
<a class="btn btn-danger btn-sm themedelete" categoryId="<?=$theme['theme_id']?>"><i class="fa fa-trash"></i></a>	
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
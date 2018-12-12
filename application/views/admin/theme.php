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
<form role="form" id="createthemeform" action="" method="post" enctype="multipart/form-data" name="createthemeform">
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
<div class="form-group col-md-12">
<label>Theme Category:</label>
<select name="theme_cat" id="theme_cat" class="form-control">
<?php foreach ($themecategory as $themecat) { ?>
<option value="<?php echo $themecat['id']; ?>"><?php echo $themecat['pre_name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-12">
<label>Theme Description:</label>
<textarea class="summernote" name="description" id="description"></textarea>
</div>
<div class="form-group col-md-12">
<label>Theme Image:</label>
<input type="file" name="themefile" id="themefile" class="form-control" required />
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
<div id="editthemesmsg"></div>	
<div class="form-group col-md-12">
<label>Theme Name:</label>
<input type="text" name="edit_themename" id="edit_themename" class="form-control" required />
</div>
<div class="form-group col-md-12">
<label>Theme Category:</label>
<select name="edit_theme_cat" id="edit_theme_cat" class="form-control">
<?php foreach ($themecategory as $edit_themecat) { ?>
<option value="<?php echo $edit_themecat['id']; ?>"><?php echo $edit_themecat['pre_name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-12">
<label>Theme Description:</label>
<textarea class="summernote" name="edit_description" id="edit_description"></textarea>
</div>
<div class="form-group col-md-12">
<label>Theme Image:</label>
<input type="file" name="edit_themefile" id="edit_themefile" class="form-control" />
<img class="editimg" src="" width="50px" height="50px">
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
<div id="ststmsg"></div>	
<table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
<tr>
<th>Theme Name</th>
<th>Theme Category Name</th>
<th>Theme Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach ($themedata as $theme) { ?>
<tr>
<td><?php echo $theme['theme_name']; ?></td>
<td><?php echo $theme['pre_name']; ?></td>
<td>
<select name="themestatus" id="themestatus" onchange="themestaus('<?php echo $theme['theme_id']; ?>',this.value);">
<option value="0" <?php if($theme['status'] == 0){ echo 'selected="selected"'; }else{} ?>>Deactive</option>	
<option value="1" <?php if($theme['status'] == 1){ echo 'selected="selected"'; }else{} ?>>Active</option>
</select>	
</td>
<td>
<a data-toggle="modal" data-target="#editthemeModal" class="btn btn-warning btn-editc btn-sm edittheme" themeId="<?=$theme['theme_id']?>">
<i class="fa fa-edit"></i></a>
<a class="btn btn-danger btn-sm themedelete" themeId="<?=$theme['theme_id']?>"><i class="fa fa-trash"></i></a>	
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
<script type="text/javascript">
$(document).ready(function(){
$('.summernote').summernote({
placeholder: 'Enter Details here...',
tabsize: 2,
height: 100
});
});
</script>
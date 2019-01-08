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
<div class="x_content">
<?php if(isset($webappdata)){ ?>	
<form role="form" id="updatewebapp" method="post" enctype="multipart/form-data" name="updatewebapp">
<input type="hidden" name="id" id="id" value="<?php if(isset($webappdata)){ echo $webappdata->webapp_id; }else{} ?>">	
<?php }else{ ?>
<form role="form" id="createwebapp" method="post" enctype="multipart/form-data" name="createwebapp">	
<?php } ?>
<div id="webappmsg"></div>	
<div class="form-group col-md-6">
<label>Business Name:</label>
<input type="text" name="businessname" id="businessname" class="form-control" value="<?php if(isset($webappdata)){ echo $webappdata->business_name; }else{} ?>" required />
</div>
<div class="form-group col-md-6">
<label>Industry:</label>
<select name="industry" id="industry" class="form-control">
<?php foreach ($industrydata as $industry) { ?>
<option value="<?php echo $industry['id']; ?>" <?php if(isset($webappdata) && $webappdata->industry_id == $industry['id']){ echo 'selected="selected"'; }else{} ?>><?php echo $industry['name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-6">
<label>Upload Your Logo:</label>
<input type="file" name="weblogo" id="weblogo" class="form-control" <?php if(!isset($webappdata)){ echo 'required="required"'; }else{} ?> />
<div id="filemsg"><?php if(isset($webappdata)){ echo '<img src="../../uploads/logos/'.$webappdata->business_logo.'" width="50px" height="50px">'; }else{} ?></div>
</div>
<div class="form-group col-md-6">
<label>Domain Address:</label>
<div class="form-group">
<input type="text" name="domain" id="domain" class="form-control" value="<?php if(isset($webappdata)){ echo $webappdata->domain; }else{} ?>" <?php if(isset($webappdata)){ ?>  readonly="readonly" <?php }else{} ?> required /> 

<?php if(isset($webappdata)){}else{ ?>
<a class="srchdpmain btn btn btn-warning">Search Domain</a>
<?php } ?>
</div>
<div id="domainmsg"></div>
</div>
<div class="form-group col-md-6">
<label>Select Theme Category:</label>
<select name="themecat" id="themecat" class="form-control" onchange="getthemecat(this.value)" required="required">
<option value="">Select Theme Category</option>	
<?php foreach ($themecatedata as $themecat) { ?>
<option value="<?php echo $themecat['id']; ?>" <?php if(isset($webappdata) && $webappdata->category_id == $themecat['id']){ echo 'selected="selected"'; }else{} ?>><?php echo $themecat['pre_name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-6">
<label>Themes:</label>
<div id="showthemes">
</div>
</div>
<div class="form-group col-md-12">
<label>Write Details:</label>
<textarea class="summernote" name="details" id="details"><?php if(isset($webappdata)){ echo $webappdata->customization_details; }else{} ?></textarea>
</div>
<div class="form-group col-md-6">
<label>Package:</label>
<select name="package" id="package" class="form-control" required="required" onchange="getpackagedetails(this.value)">
<option value="">Select Theme Category</option>	
<?php foreach ($packagedata as $packge) { ?>
<option value="<?php echo $packge['package_id']; ?>" <?php if(isset($webappdata) && $webappdata->package_id == $packge['package_id']){ echo 'selected="selected"'; }else{} ?>><?php echo $packge['package_name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-6">
<label>Package Detail:</label>
<div id="prmpckg"></div>
</div>
<div class="clearfix"></div>
<div class="form-group col-md-6">
<label>User Email:</label>
<select name="useremail" id="useremail" class="form-control" required="required">
<option value="">Select Email</option>	
<?php 
foreach ($userdata as $usersdata) { 
	if($usersdata['user_id'] == 1){}else{
?>
<option value="<?php echo $usersdata['user_id']; ?>" <?php if(isset($webappdata) && $webappdata->user_id == $usersdata['user_id']){ echo 'selected="selected"'; }else{} ?>><?php echo $usersdata['email']; ?></option>
<?php }} ?>
</select>
</div>
<div class="form-group col-md-6">
<label>How would you like to be contacted?:</label>
<select name="contacted" id="contacted" class="form-control">
<option value="0" <?php if(isset($webappdata) && $webappdata->contact_preference == 0){ echo 'selected="selected"'; }else{} ?>>Email</option>
<option value="1" <?php if(isset($webappdata) && $webappdata->contact_preference == 1){ echo 'selected="selected"'; }else{} ?>>Phone</option>
</select>
</div>
<div class="clearfix"></div>
<div class="modal-footer">
<?php if(isset($webappdata)){ ?>
<button type="submit" id="submit" name="submit" class="btn btn-warning">Update Order</button>
<?php }else{ ?>	
<button type="button" id="chkdmn" name="chkdmn" class="btn btn-warning" onclick="checkdomainagain();"><i class="fa fa-plus"></i>   Add Order</button>	
<button type="submit" id="submit" name="submit" class="btn btn-warning hide"><i class="fa fa-plus"></i>   Add Web App</button>
<div id="apierrors"></div>
<?php } ?>
</div>
</form>
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
<?php if(isset($webappdata)){ ?>
$(document).ready(function(){
getthemecat('<?php echo $webappdata->category_id; ?>');	
getpackagedetails('<?php echo $webappdata->package_id; ?>')
});	
<?php } ?>
</script>
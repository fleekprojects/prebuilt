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
<form role="form" id="createwebapp" method="post" enctype="multipart/form-data" name="createwebapp">
<div id="webappmsg"></div>	
<div class="form-group col-md-6">
<label>Business Name:</label>
<input type="text" name="businessname" id="businessname" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Industry:</label>
<select name="industry" id="industry" class="form-control">
<?php foreach ($industrydata as $industry) { ?>
<option value="<?php echo $industry['id']; ?>"><?php echo $industry['name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-6">
<label>Upload Your Logo:</label>
<input type="file" name="weblogo" id="weblogo" class="form-control" required />
<div id="filemsg"></div>
</div>
<div class="form-group col-md-6">
<label>Domain Address:</label>
<input type="text" name="domain" id="domain" class="form-control" required /> 
<div id="domainmsg"></div>
<a class="srchdpmain btn">Search Domain</a>
</div>
<div class="form-group col-md-6">
<label>Select Theme Category:</label>
<select name="themecat" id="themecat" class="form-control" onchange="getthemecat(this.value)" required="required">
<option value="">Select Theme Category</option>	
<?php foreach ($themecatedata as $themecat) { ?>
<option value="<?php echo $themecat['id']; ?>"><?php echo $themecat['pre_name']; ?></option>	
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
<textarea class="summernote" name="details" id="details"></textarea>
</div>
<div class="form-group col-md-6">
<label>Package:</label>
<select name="package" id="package" class="form-control" required="required" onchange="getpackagedetails(this.value)">
<option value="">Select Theme Category</option>	
<?php foreach ($packagedata as $packge) { ?>
<option value="<?php echo $packge['package_id']; ?>"><?php echo $packge['package_name']; ?></option>	
<?php }	?>
</select>
</div>
<div class="form-group col-md-6">
<label>Package Detail:</label>
<div id="prmpckg"></div>
</div>
<div class="form-group col-md-6">
<label>User Email:</label>
<select name="useremail" id="useremail" class="form-control" required="required">
<option value="">Select Email</option>	
<?php 
foreach ($userdata as $usersdata) { 
	if($usersdata['user_id'] == 1){}else{
?>
<option value="<?php echo $usersdata['user_id']; ?>"><?php echo $usersdata['email']; ?></option>
<?php }} ?>
</select>
</div>
<div class="form-group col-md-6">
<label>How would you like to be contacted?:</label>
<select name="contacted" id="contacted" class="form-control">
<option value="0">Email</option>
<option value="1">Phone</option>
</select>
</div>
<div class="clearfix"></div>
<div class="modal-footer">
<button type="submit" id="submit" name="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Add Web App</button>
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
</script>
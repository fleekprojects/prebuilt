<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=Admin_Title?></title>
<link href="<?= base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/admin/build/css/dynamic.css" rel="stylesheet">
<script src="<?= base_url(); ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.validate.js"></script>
<style type="text/css">
.error{
color: #E74C3C;
font-weight: 100;
}

</style>
</head>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="<?= base_url(); ?>/admin" class="site_title">
<span style="color: #000;">LOGO HERE</span>
<!-- <img src="<?= base_url(); ?>assets/admin/images/logo.png" style="max-width: 100%;" /> -->
</a>
</div>
<div class="clearfix"></div>
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<ul class="nav side-menu">
<li><a href="<?= base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>	
<!-- <li><a><i class="fa fa-edit"></i>CMS <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="<?= base_url(); ?>admin/posts">Blogs/Pages</a></li>
<li><a href="<?= base_url(); ?>admin/faqs">Faqs</a></li>
<li><a href="<?= base_url(); ?>admin/contact-queries">Contact/Queries</a></li>
</ul>
</li> -->

</ul>
</div>
</div>
<!-- /sidebar menu -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
<nav>
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
<div class="nav toggle">
<a data-toggle="modal" data-target="#conModal"  ><i class="fa fa-gears"></i></a>
</div>

<ul class="nav navbar-nav navbar-right">
<li class="">
<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<img src="images/img.jpg" alt="">Admin
<span class=" fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
<li><a href="javascript:;"> Update Profile</a></li>
<li><a href="<?= base_url('admin/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
<!-- /top navigation -->
<!-----------------Settings Modal ------------------>
<form role="form" action="<?= base_url('/updatesettings') ?>" id="settingsform" method="post" enctype="multipart/form-data" name="frmPage">
<div class="modal fade" id="conModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Update Website Settings</h3>
</div>

<div class="modal-body">
<div id="settingsmsg"></div>
<div class="form-group col-md-6">
<label>Site Name:</label>
<input type="text" name="Title" value="<?=Site_Title?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Admin Site Name:</label>
<input type="text" name="ATitle" value="<?=Admin_Title?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Site Email:</label>
<input type="text" name="Email" value="<?=Site_Email?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Phone No:</label>
<input type="text" name="Phone" value="<?=Phone?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Address:</label>
<input type="text" name="Address" value="<?=Address?>" class="form-control" required>
</div>
<div class="form-group col-md-6">
<label>Website:</label>
<input type="text"   name="Website" value="<?=Website?>" class="form-control" required />
</div> 

<div class="form-group col-md-12">
<label>SMTP Host:</label>
<input type="text" name="SMTP_Host" value="<?=SMTP_Host?>" class="form-control" >
</div>
<div class="form-group col-md-6">
<label>SMTP Email:</label>
<input type="text" name="SMTP_Email" value="<?=SMTP_Email?>" class="form-control" >
</div>
<div class="form-group col-md-6">
<label>SMTP Password:</label>
<input type="password" name="SMTP_Pass" value="<?=SMTP_Pass?>" value="" class="form-control">
<p> leave empty if don't want to change </p>
</div>
<div class="form-group col-md-6">
<label>SMTP Port:</label>
<input type="number" step="any" min="0" name="SMTP_Port" value="<?=SMTP_Port?>" class="form-control">
</div>
<div class="form-group col-md-6">
<label>Timezone:</label>
<input type="text"   name="Timezone" value="<?=Timezone?>" class="form-control" required />
</div> 
<div class="clearfix"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i>   Update</button>
</div>
</div>
</div>
</div>
</form>
<!----------------------/Settings Modal ----------------------->

<!-- page content -->
<div class="right_col" role="main">
<?php  $this->load->view($view,$viewData); ?>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
<div class="pull-right">
Powered by Online Prebuilt</a>
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- Bootstrap -->
<script src="<?= base_url(); ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url(); ?>assets/admin/vendors/nprogress/nprogress.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>assets/admin/vendors/iCheck/icheck.min.js"></script>
<!-- Switchery -->
<script src="<?= base_url(); ?>assets/admin/vendors/switchery/dist/switchery.min.js"></script>
<!-- jquery.inputmask -->
<script src="<?= base_url(); ?>assets/admin/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="https://sweetalert.js.org/assets/sweetalert/sweetalert.min.js"></script>
<script> var baseurl="<?= base_url();?>";</script>
<!-- Custom Theme Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="<?= base_url(); ?>assets/admin/build/js/custom.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts.js"></script>
</body>
</html>
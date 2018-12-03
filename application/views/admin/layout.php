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
<li><a href="<?= base_url(); ?>admin/users"><i class="fa fa-dashboard"></i> <span>Users</span></a></li>	
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
<ul class="nav navbar-nav navbar-right">
<li class="">
<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<?php echo $this->session->userdata('admin_user_name');?>
<span class=" fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
<li><a data-toggle="modal" data-target="#profModal"> Update Profile</a></li>
<?php if($this->session->userdata('admin_roles') == 1){ ?>
<li><a data-toggle="modal" data-target="#conModal"> Site Setting</a></li>
<?php } ?>
<li><a href="<?= base_url('admin/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
<!-- /top navigation -->
<!-----------------Profile Modal ------------------>
<form role="form" action="<?= base_url('/admin/updateprofiles') ?>" id="profileform" method="post" enctype="multipart/form-data" name="frmPage">
<input type="hidden" name="userid" id="userid" value="<?php echo user_id; ?>" class="form-control" required />
<div class="modal fade" id="profModal"  tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="panel-title" id="myModalLabel">Update Profile</h3>
</div>

<div class="modal-body">
<div class="form-group col-md-6">
<label>First Name:</label>
<input type="text" name="fname" id="fname" value="<?php echo first_name; ?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Last Name:</label>
<input type="text" name="lname" id="lname" value="<?php echo last_name; ?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Email:</label>
<input type="email" name="email" id="email" value="<?php echo user_email; ?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>User Name:</label>
<input type="text" name="user_name" id="user_name" value="<?php echo user_name; ?>" class="form-control" required />
</div>
<div class="form-group col-md-6">
<label>Password:</label>
<input type="password" name="password" id="password" class="form-control">
</div>
<div class="form-group col-md-6">
<label>Business Name:</label>
<input type="text" name="business_name" id="business_name" value="<?php echo business_name; ?>" class="form-control" required />
</div> 
<div class="form-group col-md-12">
<label>Industry:</label>
<select name="industry" id="industry" class="form-control">
<option value="1" <?php if(industry_id == '1'){ ?> selected="selected" <?php }else{} ?>>Volvo</option>
<option value="2" <?php if(industry_id == '2'){ ?> selected="selected" <?php }else{} ?>>Opel</option>			
</select>
</div>
<div class="form-group col-md-6">
<label>Contact Preferences:</label>
<select name="contact_pref" id="contact_pref" class="form-control">
<option value="0" <?php if(contact_preference == '0'){ ?> selected="selected" <?php }else{} ?>>Email</option>
<option value="1" <?php if(contact_preference == '1'){ ?> selected="selected" <?php }else{} ?>>Phone</option>			
</select>
</div>
<div class="form-group col-md-6">
<label>Country:</label>
<select id="country" name="country" class="form-control">
<option value="Afghanistan" <?php if(country == 'Afghanistan'){ ?> selected="selected" <?php }else{} ?>>Afghanistan</option>
<option value="Albania" <?php if(country == 'Albania'){ ?> selected="selected" <?php }else{} ?>>Albania</option>
<option value="Algeria" <?php if(country == 'Algeria'){ ?> selected="selected" <?php }else{} ?>>Algeria</option>
<option value="American Samoa" <?php if(country == 'American Samoa'){ ?> selected="selected" <?php }else{} ?>>American Samoa</option>
<option value="Andorra" <?php if(country == 'Andorra'){ ?> selected="selected" <?php }else{} ?>>Andorra</option>
<option value="Angola" <?php if(country == 'Angola'){ ?> selected="selected" <?php }else{} ?>>Angola</option>
<option value="Anguilla" <?php if(country == 'Anguilla'){ ?> selected="selected" <?php }else{} ?>>Anguilla</option>
<option value="Antartica" <?php if(country == 'Antartica'){ ?> selected="selected" <?php }else{} ?>>Antarctica</option>
<option value="Antigua and Barbuda" <?php if(country == 'Antigua and Barbuda'){ ?> selected="selected" <?php }else{} ?>>Antigua and Barbuda</option>
<option value="Argentina" <?php if(country == 'Argentina'){ ?> selected="selected" <?php }else{} ?>>Argentina</option>
<option value="Armenia" <?php if(country == 'Armenia'){ ?> selected="selected" <?php }else{} ?>>Armenia</option>
<option value="Aruba" <?php if(country == 'Aruba'){ ?> selected="selected" <?php }else{} ?>>Aruba</option>
<option value="Australia" <?php if(country == 'Australia'){ ?> selected="selected" <?php }else{} ?>>Australia</option>
<option value="Austria" <?php if(country == 'Austria'){ ?> selected="selected" <?php }else{} ?>>Austria</option>
<option value="Azerbaijan" <?php if(country == 'Azerbaijan'){ ?> selected="selected" <?php }else{} ?>>Azerbaijan</option>
<option value="Bahamas" <?php if(country == 'Bahamas'){ ?> selected="selected" <?php }else{} ?>>Bahamas</option>
<option value="Bahrain" <?php if(country == 'Bahrain'){ ?> selected="selected" <?php }else{} ?>>Bahrain</option>
<option value="Bangladesh" <?php if(country == 'Bangladesh'){ ?> selected="selected" <?php }else{} ?>>Bangladesh</option>
<option value="Barbados" <?php if(country == 'Barbados'){ ?> selected="selected" <?php }else{} ?>>Barbados</option>
<option value="Belarus" <?php if(country == 'Belarus'){ ?> selected="selected" <?php }else{} ?>>Belarus</option>
<option value="Belgium" <?php if(country == 'Belgium'){ ?> selected="selected" <?php }else{} ?>>Belgium</option>
<option value="Belize" <?php if(country == 'Belize'){ ?> selected="selected" <?php }else{} ?>>Belize</option>
<option value="Benin" <?php if(country == 'Benin'){ ?> selected="selected" <?php }else{} ?>>Benin</option>
<option value="Bermuda" <?php if(country == 'Bermuda'){ ?> selected="selected" <?php }else{} ?>>Bermuda</option>
<option value="Bhutan" <?php if(country == 'Bhutan'){ ?> selected="selected" <?php }else{} ?>>Bhutan</option>
<option value="Bolivia" <?php if(country == 'Bolivia'){ ?> selected="selected" <?php }else{} ?>>Bolivia</option>
<option value="Bosnia and Herzegowina" <?php if(country == 'Bosnia and Herzegowina'){ ?> selected="selected" <?php }else{} ?>>Bosnia and Herzegowina</option>
<option value="Botswana" <?php if(country == 'Botswana'){ ?> selected="selected" <?php }else{} ?>>Botswana</option>
<option value="Bouvet Island" <?php if(country == 'Bouvet Island'){ ?> selected="selected" <?php }else{} ?>>Bouvet Island</option>
<option value="Brazil" <?php if(country == 'Brazil'){ ?> selected="selected" <?php }else{} ?>>Brazil</option>
<option value="British Indian Ocean Territory" <?php if(country == 'British Indian Ocean Territory'){ ?> selected="selected" <?php }else{} ?>>British Indian Ocean Territory</option>
<option value="Brunei Darussalam" <?php if(country == 'Brunei Darussalam'){ ?> selected="selected" <?php }else{} ?>>Brunei Darussalam</option>
<option value="Bulgaria" <?php if(country == 'Bulgaria'){ ?> selected="selected" <?php }else{} ?>>Bulgaria</option>
<option value="Burkina Faso" <?php if(country == 'Burkina Faso'){ ?> selected="selected" <?php }else{} ?>>Burkina Faso</option>
<option value="Burundi" <?php if(country == 'Burundi'){ ?> selected="selected" <?php }else{} ?>>Burundi</option>
<option value="Cambodia" <?php if(country == 'Cambodia'){ ?> selected="selected" <?php }else{} ?>>Cambodia</option>
<option value="Cameroon" <?php if(country == 'Cameroon'){ ?> selected="selected" <?php }else{} ?>>Cameroon</option>
<option value="Canada" <?php if(country == 'Canada'){ ?> selected="selected" <?php }else{} ?>>Canada</option>
<option value="Cape Verde" <?php if(country == 'Cape Verde'){ ?> selected="selected" <?php }else{} ?>>Cape Verde</option>
<option value="Cayman Islands" <?php if(country == 'Cayman Islands'){ ?> selected="selected" <?php }else{} ?>>Cayman Islands</option>
<option value="Central African Republic" <?php if(country == 'Central African Republic'){ ?> selected="selected" <?php }else{} ?>>Central African Republic</option>
<option value="Chad" <?php if(country == 'Chad'){ ?> selected="selected" <?php }else{} ?>>Chad</option>
<option value="Chile" <?php if(country == 'Chile'){ ?> selected="selected" <?php }else{} ?>>Chile</option>
<option value="China" <?php if(country == 'China'){ ?> selected="selected" <?php }else{} ?>>China</option>
<option value="Christmas Island" <?php if(country == 'Christmas Island'){ ?> selected="selected" <?php }else{} ?>>Christmas Island</option>
<option value="Cocos Islands" <?php if(country == 'Cocos Islands'){ ?> selected="selected" <?php }else{} ?>>Cocos (Keeling) Islands</option>
<option value="Colombia" <?php if(country == 'Colombia'){ ?> selected="selected" <?php }else{} ?>>Colombia</option>
<option value="Comoros" <?php if(country == 'Comoros'){ ?> selected="selected" <?php }else{} ?>>Comoros</option>
<option value="Congo" <?php if(country == 'Congo'){ ?> selected="selected" <?php }else{} ?>>Congo</option>
<option value="Congothe Democratic" <?php if(country == 'Congothe Democratic'){ ?> selected="selected" <?php }else{} ?>>Congo, the Democratic Republic of the</option>
<option value="Cook Islands" <?php if(country == 'Cook Islands'){ ?> selected="selected" <?php }else{} ?>>Cook Islands</option>
<option value="Costa Rica" <?php if(country == 'Costa Rica'){ ?> selected="selected" <?php }else{} ?>>Costa Rica</option>
<option value="Cota DIvoire" <?php if(country == 'Cota DIvoire'){ ?> selected="selected" <?php }else{} ?>>Cote d'Ivoire</option>
<option value="Croatia" <?php if(country == 'Croatia'){ ?> selected="selected" <?php }else{} ?>>Croatia (Hrvatska)</option>
<option value="Cuba" <?php if(country == 'Cuba'){ ?> selected="selected" <?php }else{} ?>>Cuba</option>
<option value="Cyprus" <?php if(country == 'Cyprus'){ ?> selected="selected" <?php }else{} ?>>Cyprus</option>
<option value="Czech Republic" <?php if(country == 'Czech Republic'){ ?> selected="selected" <?php }else{} ?>>Czech Republic</option>
<option value="Denmark" <?php if(country == 'Denmark'){ ?> selected="selected" <?php }else{} ?>>Denmark</option>
<option value="Djibouti" <?php if(country == 'Djibouti'){ ?> selected="selected" <?php }else{} ?>>Djibouti</option>
<option value="Dominica" <?php if(country == 'Dominica'){ ?> selected="selected" <?php }else{} ?>>Dominica</option>
<option value="Dominican Republic" <?php if(country == 'Dominican Republic'){ ?> selected="selected" <?php }else{} ?>>Dominican Republic</option>
<option value="East Timor" <?php if(country == 'East Timor'){ ?> selected="selected" <?php }else{} ?>>East Timor</option>
<option value="Ecuador" <?php if(country == 'Ecuador'){ ?> selected="selected" <?php }else{} ?>>Ecuador</option>
<option value="Egypt" <?php if(country == 'Egypt'){ ?> selected="selected" <?php }else{} ?>>Egypt</option>
<option value="El Salvador" <?php if(country == 'El Salvador'){ ?> selected="selected" <?php }else{} ?>>El Salvador</option>
<option value="Equatorial Guinea" <?php if(country == 'Equatorial Guinea'){ ?> selected="selected" <?php }else{} ?>>Equatorial Guinea</option>
<option value="Eritrea" <?php if(country == 'Eritrea'){ ?> selected="selected" <?php }else{} ?>>Eritrea</option>
<option value="Ethiopia" <?php if(country == 'Ethiopia'){ ?> selected="selected" <?php }else{} ?>>Ethiopia</option>
<option value="Falkland Islands" <?php if(country == 'Falkland Islands'){ ?> selected="selected" <?php }else{} ?>>Falkland Islands (Malvinas)</option>
<option value="Faroe Islands" <?php if(country == 'Faroe Islands'){ ?> selected="selected" <?php }else{} ?>>Faroe Islands</option>
<option value="Fiji" <?php if(country == 'Fiji'){ ?> selected="selected" <?php }else{} ?>>Fiji</option>
<option value="Finland" <?php if(country == 'Finland'){ ?> selected="selected" <?php }else{} ?>>Finland</option>
<option value="France" <?php if(country == 'France'){ ?> selected="selected" <?php }else{} ?>>France</option>
<option value="France Metropolitan" <?php if(country == 'France Metropolitan'){ ?> selected="selected" <?php }else{} ?>>France, Metropolitan</option>
<option value="French Guiana" <?php if(country == 'French Guiana'){ ?> selected="selected" <?php }else{} ?>>French Guiana</option>
<option value="French Polynesia" <?php if(country == 'French Polynesia'){ ?> selected="selected" <?php }else{} ?>>French Polynesia</option>
<option value="French Southern Territories" <?php if(country == 'French Southern Territories'){ ?> selected="selected" <?php }else{} ?>>French Southern Territories</option>
<option value="Gabon" <?php if(country == 'Gabon'){ ?> selected="selected" <?php }else{} ?>>Gabon</option>
<option value="Gambia" <?php if(country == 'Gambia'){ ?> selected="selected" <?php }else{} ?>>Gambia</option>
<option value="Georgia" <?php if(country == 'Georgia'){ ?> selected="selected" <?php }else{} ?>>Georgia</option>
<option value="Germany" <?php if(country == 'Germany'){ ?> selected="selected" <?php }else{} ?>>Germany</option>
<option value="Ghana" <?php if(country == 'Ghana'){ ?> selected="selected" <?php }else{} ?>>Ghana</option>
<option value="Gibraltar" <?php if(country == 'Gibraltar'){ ?> selected="selected" <?php }else{} ?>>Gibraltar</option>
<option value="Greece" <?php if(country == 'Greece'){ ?> selected="selected" <?php }else{} ?>>Greece</option>
<option value="Greenland" <?php if(country == 'Greenland'){ ?> selected="selected" <?php }else{} ?>>Greenland</option>
<option value="Grenada" <?php if(country == 'Grenada'){ ?> selected="selected" <?php }else{} ?>>Grenada</option>
<option value="Guadeloupe" <?php if(country == 'Guadeloupe'){ ?> selected="selected" <?php }else{} ?>>Guadeloupe</option>
<option value="Guam" <?php if(country == 'Guam'){ ?> selected="selected" <?php }else{} ?>>Guam</option>
<option value="Guatemala" <?php if(country == 'Guatemala'){ ?> selected="selected" <?php }else{} ?>>Guatemala</option>
<option value="Guinea" <?php if(country == 'Guinea'){ ?> selected="selected" <?php }else{} ?>>Guinea</option>
<option value="Guinea-Bissau" <?php if(country == 'Guinea-Bissau'){ ?> selected="selected" <?php }else{} ?>>Guinea-Bissau</option>
<option value="Guyana" <?php if(country == 'Guyana'){ ?> selected="selected" <?php }else{} ?>>Guyana</option>
<option value="Haiti" <?php if(country == 'Haiti'){ ?> selected="selected" <?php }else{} ?>>Haiti</option>
<option value="Heard and McDonald Islands" <?php if(country == 'Heard and McDonald Islands'){ ?> selected="selected" <?php }else{} ?>>Heard and Mc Donald Islands</option>
<option value="Holy See" <?php if(country == 'Holy See'){ ?> selected="selected" <?php }else{} ?>>Holy See (Vatican City State)</option>
<option value="Honduras" <?php if(country == 'Honduras'){ ?> selected="selected" <?php }else{} ?>>Honduras</option>
<option value="Hong Kong" <?php if(country == 'Hong Kong'){ ?> selected="selected" <?php }else{} ?>>Hong Kong</option>
<option value="Hungary" <?php if(country == 'Hungary'){ ?> selected="selected" <?php }else{} ?>>Hungary</option>
<option value="Iceland" <?php if(country == 'Iceland'){ ?> selected="selected" <?php }else{} ?>>Iceland</option>
<option value="India" <?php if(country == 'India'){ ?> selected="selected" <?php }else{} ?>>India</option>
<option value="Indonesia" <?php if(country == 'Indonesia'){ ?> selected="selected" <?php }else{} ?>>Indonesia</option>
<option value="Iran" <?php if(country == 'Iran'){ ?> selected="selected" <?php }else{} ?>>Iran (Islamic Republic of)</option>
<option value="Iraq" <?php if(country == 'Iraq'){ ?> selected="selected" <?php }else{} ?>>Iraq</option>
<option value="Ireland" <?php if(country == 'Ireland'){ ?> selected="selected" <?php }else{} ?>>Ireland</option>
<option value="Israel" <?php if(country == 'Israel'){ ?> selected="selected" <?php }else{} ?>>Israel</option>
<option value="Italy" <?php if(country == 'Italy'){ ?> selected="selected" <?php }else{} ?>>Italy</option>
<option value="Jamaica" <?php if(country == 'Jamaica'){ ?> selected="selected" <?php }else{} ?>>Jamaica</option>
<option value="Japan" <?php if(country == 'Japan'){ ?> selected="selected" <?php }else{} ?>>Japan</option>
<option value="Jordan" <?php if(country == 'Jordan'){ ?> selected="selected" <?php }else{} ?>>Jordan</option>
<option value="Kazakhstan" <?php if(country == 'Kazakhstan'){ ?> selected="selected" <?php }else{} ?>>Kazakhstan</option>
<option value="Kenya" <?php if(country == 'Kenya'){ ?> selected="selected" <?php }else{} ?>>Kenya</option>
<option value="Kiribati" <?php if(country == 'Kiribati'){ ?> selected="selected" <?php }else{} ?>>Kiribati</option>
<option value="Democratic Peoples Republic of Korea" <?php if(country == 'Democratic Peoples Republic of Korea'){ ?> selected="selected" <?php }else{} ?>>Korea, Democratic People's Republic of</option>
<option value="Korea" <?php if(country == 'Korea'){ ?> selected="selected" <?php }else{} ?>>Korea, Republic of</option>
<option value="Kuwait" <?php if(country == 'Kuwait'){ ?> selected="selected" <?php }else{} ?>>Kuwait</option>
<option value="Kyrgyzstan" <?php if(country == 'Kyrgyzstan'){ ?> selected="selected" <?php }else{} ?>>Kyrgyzstan</option>
<option value="Lao" <?php if(country == 'Lao'){ ?> selected="selected" <?php }else{} ?>>Lao People's Democratic Republic</option>
<option value="Latvia" <?php if(country == 'Latvia'){ ?> selected="selected" <?php }else{} ?>>Latvia</option>
<option value="Lebanon" <?php if(country == 'Lebanon'){ ?> selected="selected" <?php }else{} ?>>Lebanon</option>
<option value="Lesotho" <?php if(country == 'Lesotho'){ ?> selected="selected" <?php }else{} ?>>Lesotho</option>
<option value="Liberia" <?php if(country == 'Liberia'){ ?> selected="selected" <?php }else{} ?>>Liberia</option>
<option value="Libyan Arab Jamahiriya" <?php if(country == 'Libyan Arab Jamahiriya'){ ?> selected="selected" <?php }else{} ?>>Libyan Arab Jamahiriya</option>
<option value="Liechtenstein" <?php if(country == 'Liechtenstein'){ ?> selected="selected" <?php }else{} ?>>Liechtenstein</option>
<option value="Lithuania" <?php if(country == 'Lithuania'){ ?> selected="selected" <?php }else{} ?>>Lithuania</option>
<option value="Luxembourg" <?php if(country == 'Luxembourg'){ ?> selected="selected" <?php }else{} ?>>Luxembourg</option>
<option value="Macau" <?php if(country == 'Macau'){ ?> selected="selected" <?php }else{} ?>>Macau</option>
<option value="Macedonia" <?php if(country == 'Macedonia'){ ?> selected="selected" <?php }else{} ?>>Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar" <?php if(country == 'Madagascar'){ ?> selected="selected" <?php }else{} ?>>Madagascar</option>
<option value="Malawi" <?php if(country == 'Malawi'){ ?> selected="selected" <?php }else{} ?>>Malawi</option>
<option value="Malaysia" <?php if(country == 'Malaysia'){ ?> selected="selected" <?php }else{} ?>>Malaysia</option>
<option value="Maldives" <?php if(country == 'Maldives'){ ?> selected="selected" <?php }else{} ?>>Maldives</option>
<option value="Mali" <?php if(country == 'Mali'){ ?> selected="selected" <?php }else{} ?>>Mali</option>
<option value="Malta" <?php if(country == 'Malta'){ ?> selected="selected" <?php }else{} ?>>Malta</option>
<option value="Marshall Islands" <?php if(country == 'Marshall Islands'){ ?> selected="selected" <?php }else{} ?>>Marshall Islands</option>
<option value="Martinique" <?php if(country == 'Martinique'){ ?> selected="selected" <?php }else{} ?>>Martinique</option>
<option value="Mauritania" <?php if(country == 'Mauritania'){ ?> selected="selected" <?php }else{} ?>>Mauritania</option>
<option value="Mauritius" <?php if(country == 'Mauritius'){ ?> selected="selected" <?php }else{} ?>>Mauritius</option>
<option value="Mayotte" <?php if(country == 'Mayotte'){ ?> selected="selected" <?php }else{} ?>>Mayotte</option>
<option value="Mexico" <?php if(country == 'Mexico'){ ?> selected="selected" <?php }else{} ?>>Mexico</option>
<option value="Micronesia" <?php if(country == 'Micronesia'){ ?> selected="selected" <?php }else{} ?>>Micronesia, Federated States of</option>
<option value="Moldova" <?php if(country == 'Moldova'){ ?> selected="selected" <?php }else{} ?>>Moldova, Republic of</option>
<option value="Monaco" <?php if(country == 'Monaco'){ ?> selected="selected" <?php }else{} ?>>Monaco</option>
<option value="Mongolia" <?php if(country == 'Mongolia'){ ?> selected="selected" <?php }else{} ?>>Mongolia</option>
<option value="Montserrat" <?php if(country == 'Montserrat'){ ?> selected="selected" <?php }else{} ?>>Montserrat</option>
<option value="Morocco" <?php if(country == 'Morocco'){ ?> selected="selected" <?php }else{} ?>>Morocco</option>
<option value="Mozambique" <?php if(country == 'Mozambique'){ ?> selected="selected" <?php }else{} ?>>Mozambique</option>
<option value="Myanmar" <?php if(country == 'Myanmar'){ ?> selected="selected" <?php }else{} ?>>Myanmar</option>
<option value="Namibia" <?php if(country == 'Namibia'){ ?> selected="selected" <?php }else{} ?>>Namibia</option>
<option value="Nauru" <?php if(country == 'Nauru'){ ?> selected="selected" <?php }else{} ?>>Nauru</option>
<option value="Nepal" <?php if(country == 'Nepal'){ ?> selected="selected" <?php }else{} ?>>Nepal</option>
<option value="Netherlands" <?php if(country == 'Netherlands'){ ?> selected="selected" <?php }else{} ?>>Netherlands</option>
<option value="Netherlands Antilles" <?php if(country == 'Netherlands Antilles'){ ?> selected="selected" <?php }else{} ?>>Netherlands Antilles</option>
<option value="New Caledonia" <?php if(country == 'New Caledonia'){ ?> selected="selected" <?php }else{} ?>>New Caledonia</option>
<option value="New Zealand" <?php if(country == 'New Zealand'){ ?> selected="selected" <?php }else{} ?>>New Zealand</option>
<option value="Nicaragua" <?php if(country == 'Nicaragua'){ ?> selected="selected" <?php }else{} ?>>Nicaragua</option>
<option value="Niger" <?php if(country == 'Niger'){ ?> selected="selected" <?php }else{} ?>>Niger</option>
<option value="Nigeria" <?php if(country == 'Nigeria'){ ?> selected="selected" <?php }else{} ?>>Nigeria</option>
<option value="Niue" <?php if(country == 'Niue'){ ?> selected="selected" <?php }else{} ?>>Niue</option>
<option value="Norfolk Island" <?php if(country == 'Norfolk Island'){ ?> selected="selected" <?php }else{} ?>>Norfolk Island</option>
<option value="Northern Mariana Islands" <?php if(country == 'Northern Mariana Islands'){ ?> selected="selected" <?php }else{} ?>>Northern Mariana Islands</option>
<option value="Norway" <?php if(country == 'Norway'){ ?> selected="selected" <?php }else{} ?>>Norway</option>
<option value="Oman" <?php if(country == 'Oman'){ ?> selected="selected" <?php }else{} ?>>Oman</option>
<option value="Pakistan" <?php if(country == 'Pakistan'){ ?> selected="selected" <?php }else{} ?>>Pakistan</option>
<option value="Palau" <?php if(country == 'Palau'){ ?> selected="selected" <?php }else{} ?>>Palau</option>
<option value="Panama" <?php if(country == 'Panama'){ ?> selected="selected" <?php }else{} ?>>Panama</option>
<option value="Papua New Guinea" <?php if(country == 'Papua New Guinea'){ ?> selected="selected" <?php }else{} ?>>Papua New Guinea</option>
<option value="Paraguay" <?php if(country == 'Paraguay'){ ?> selected="selected" <?php }else{} ?>>Paraguay</option>
<option value="Peru" <?php if(country == 'Peru'){ ?> selected="selected" <?php }else{} ?>>Peru</option>
<option value="Philippines" <?php if(country == 'Philippines'){ ?> selected="selected" <?php }else{} ?>>Philippines</option>
<option value="Pitcairn" <?php if(country == 'Pitcairn'){ ?> selected="selected" <?php }else{} ?>>Pitcairn</option>
<option value="Poland" <?php if(country == 'Poland'){ ?> selected="selected" <?php }else{} ?>>Poland</option>
<option value="Portugal" <?php if(country == 'Portugal'){ ?> selected="selected" <?php }else{} ?>>Portugal</option>
<option value="Puerto Rico" <?php if(country == 'Puerto Rico'){ ?> selected="selected" <?php }else{} ?>>Puerto Rico</option>
<option value="Qatar" <?php if(country == 'Qatar'){ ?> selected="selected" <?php }else{} ?>>Qatar</option>
<option value="Reunion" <?php if(country == 'Reunion'){ ?> selected="selected" <?php }else{} ?>>Reunion</option>
<option value="Romania" <?php if(country == 'Romania'){ ?> selected="selected" <?php }else{} ?>>Romania</option>
<option value="Russia" <?php if(country == 'Russia'){ ?> selected="selected" <?php }else{} ?>>Russian Federation</option>
<option value="Rwanda" <?php if(country == 'Rwanda'){ ?> selected="selected" <?php }else{} ?>>Rwanda</option>
<option value="Saint Kitts and Nevis" <?php if(country == 'Saint Kitts and Nevis'){ ?> selected="selected" <?php }else{} ?>>Saint Kitts and Nevis</option> 
<option value="Saint LUCIA" <?php if(country == 'Saint LUCIA'){ ?> selected="selected" <?php }else{} ?>>Saint LUCIA</option>
<option value="Saint Vincent" <?php if(country == 'Saint Vincent'){ ?> selected="selected" <?php }else{} ?>>Saint Vincent and the Grenadines</option>
<option value="Samoa" <?php if(country == 'Samoa'){ ?> selected="selected" <?php }else{} ?>>Samoa</option>
<option value="San Marino" <?php if(country == 'San Marino'){ ?> selected="selected" <?php }else{} ?>>San Marino</option>
<option value="Sao Tome and Principe" <?php if(country == 'Sao Tome and Principe'){ ?> selected="selected" <?php }else{} ?>>Sao Tome and Principe</option> 
<option value="Saudi Arabia" <?php if(country == 'Saudi Arabia'){ ?> selected="selected" <?php }else{} ?>>Saudi Arabia</option>
<option value="Senegal" <?php if(country == 'Senegal'){ ?> selected="selected" <?php }else{} ?>>Senegal</option>
<option value="Seychelles" <?php if(country == 'Seychelles'){ ?> selected="selected" <?php }else{} ?>>Seychelles</option>
<option value="Sierra" <?php if(country == 'Sierra'){ ?> selected="selected" <?php }else{} ?>>Sierra Leone</option>
<option value="Singapore" <?php if(country == 'Singapore'){ ?> selected="selected" <?php }else{} ?>>Singapore</option>
<option value="Slovakia" <?php if(country == 'Slovakia'){ ?> selected="selected" <?php }else{} ?>>Slovakia (Slovak Republic)</option>
<option value="Slovenia" <?php if(country == 'Slovenia'){ ?> selected="selected" <?php }else{} ?>>Slovenia</option>
<option value="Solomon Islands" <?php if(country == 'Solomon Islands'){ ?> selected="selected" <?php }else{} ?>>Solomon Islands</option>
<option value="Somalia" <?php if(country == 'Somalia'){ ?> selected="selected" <?php }else{} ?>>Somalia</option>
<option value="South Africa" <?php if(country == 'South Africa'){ ?> selected="selected" <?php }else{} ?>>South Africa</option>
<option value="South Georgia" <?php if(country == 'South Georgia'){ ?> selected="selected" <?php }else{} ?>>South Georgia and the South Sandwich Islands</option>
<option value="Span" <?php if(country == 'Span'){ ?> selected="selected" <?php }else{} ?>>Spain</option>
<option value="SriLanka" <?php if(country == 'SriLanka'){ ?> selected="selected" <?php }else{} ?>>Sri Lanka</option>
<option value="St. Helena" <?php if(country == 'St. Helena'){ ?> selected="selected" <?php }else{} ?>>St. Helena</option>
<option value="St. Pierre and Miguelon" <?php if(country == 'St. Pierre and Miguelon'){ ?> selected="selected" <?php }else{} ?>>St. Pierre and Miquelon</option>
<option value="Sudan" <?php if(country == 'Sudan'){ ?> selected="selected" <?php }else{} ?>>Sudan</option>
<option value="Suriname" <?php if(country == 'Suriname'){ ?> selected="selected" <?php }else{} ?>>Suriname</option>
<option value="Svalbard" <?php if(country == 'Svalbard'){ ?> selected="selected" <?php }else{} ?>>Svalbard and Jan Mayen Islands</option>
<option value="Swaziland" <?php if(country == 'Swaziland'){ ?> selected="selected" <?php }else{} ?>>Swaziland</option>
<option value="Sweden" <?php if(country == 'Sweden'){ ?> selected="selected" <?php }else{} ?>>Sweden</option>
<option value="Switzerland" <?php if(country == 'Switzerland'){ ?> selected="selected" <?php }else{} ?>>Switzerland</option>
<option value="Syria" <?php if(country == 'Syria'){ ?> selected="selected" <?php }else{} ?>>Syrian Arab Republic</option>
<option value="Taiwan" <?php if(country == 'Taiwan'){ ?> selected="selected" <?php }else{} ?>>Taiwan, Province of China</option>
<option value="Tajikistan" <?php if(country == 'Tajikistan'){ ?> selected="selected" <?php }else{} ?>>Tajikistan</option>
<option value="Tanzania" <?php if(country == 'Tanzania'){ ?> selected="selected" <?php }else{} ?>>Tanzania, United Republic of</option>
<option value="Thailand" <?php if(country == 'Thailand'){ ?> selected="selected" <?php }else{} ?>>Thailand</option>
<option value="Togo" <?php if(country == 'Togo'){ ?> selected="selected" <?php }else{} ?>>Togo</option>
<option value="Tokelau" <?php if(country == 'Tokelau'){ ?> selected="selected" <?php }else{} ?>>Tokelau</option>
<option value="Tonga" <?php if(country == 'Tonga'){ ?> selected="selected" <?php }else{} ?>>Tonga</option>
<option value="Trinidad and Tobago" <?php if(country == 'Trinidad and Tobago'){ ?> selected="selected" <?php }else{} ?>>Trinidad and Tobago</option>
<option value="Tunisia" <?php if(country == 'Tunisia'){ ?> selected="selected" <?php }else{} ?>>Tunisia</option>
<option value="Turkey" <?php if(country == 'Turkey'){ ?> selected="selected" <?php }else{} ?>>Turkey</option>
<option value="Turkmenistan" <?php if(country == 'Turkmenistan'){ ?> selected="selected" <?php }else{} ?>>Turkmenistan</option>
<option value="Turks and Caicos" <?php if(country == 'Turks and Caicos'){ ?> selected="selected" <?php }else{} ?>>Turks and Caicos Islands</option>
<option value="Tuvalu" <?php if(country == 'Tuvalu'){ ?> selected="selected" <?php }else{} ?>>Tuvalu</option>
<option value="Uganda" <?php if(country == 'Uganda'){ ?> selected="selected" <?php }else{} ?>>Uganda</option>
<option value="Ukraine" <?php if(country == 'Ukraine'){ ?> selected="selected" <?php }else{} ?>>Ukraine</option>
<option value="United Arab Emirates" <?php if(country == 'United Arab Emirates'){ ?> selected="selected" <?php }else{} ?>>United Arab Emirates</option>
<option value="United Kingdom" <?php if(country == 'United Kingdom'){ ?> selected="selected" <?php }else{} ?>>United Kingdom</option>
<option value="United States" <?php if(country == 'United States'){ ?> selected="selected" <?php }else{} ?>>United States</option>
<option value="United States Minor Outlying Islands" <?php if(country == 'United States Minor Outlying Islands'){ ?> selected="selected" <?php }else{} ?>>United States Minor Outlying Islands</option>
<option value="Uruguay" <?php if(country == 'Uruguay'){ ?> selected="selected" <?php }else{} ?>>Uruguay</option>
<option value="Uzbekistan" <?php if(country == 'Uzbekistan'){ ?> selected="selected" <?php }else{} ?>>Uzbekistan</option>
<option value="Vanuatu" <?php if(country == 'Vanuatu'){ ?> selected="selected" <?php }else{} ?>>Vanuatu</option>
<option value="Venezuela" <?php if(country == 'Venezuela'){ ?> selected="selected" <?php }else{} ?>>Venezuela</option>
<option value="Vietnam" <?php if(country == 'Vietnam'){ ?> selected="selected" <?php }else{} ?>>Viet Nam</option>
<option value="Virgin Islands (British)" <?php if(country == 'Virgin Islands (British)'){ ?> selected="selected" <?php }else{} ?>>Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)" <?php if(country == 'Virgin Islands (U.S)'){ ?> selected="selected" <?php }else{} ?>>Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands" <?php if(country == 'Wallis and Futana Islands'){ ?> selected="selected" <?php }else{} ?>>Wallis and Futuna Islands</option>
<option value="Western Sahara" <?php if(country == 'Western Sahara'){ ?> selected="selected" <?php }else{} ?>>Western Sahara</option>
<option value="Yemen" <?php if(country == 'Yemen'){ ?> selected="selected" <?php }else{} ?>>Yemen</option>
<option value="Yugoslavia" <?php if(country == 'Yugoslavia'){ ?> selected="selected" <?php }else{} ?>>Yugoslavia</option>
<option value="Zambia" <?php if(country == 'Zambia'){ ?> selected="selected" <?php }else{} ?>>Zambia</option>
<option value="Zimbabwe" <?php if(country == 'Zimbabwe'){ ?> selected="selected" <?php }else{} ?>>Zimbabwe</option>
</select>
</div>
<div class="form-group col-md-6">
<label>State:</label>
<input type="text" name="state" id="state" value="<?php echo state; ?>" class="form-control">
</div>
<div class="form-group col-md-6">
<label>City:</label>
<input type="text" name="city" id="city" value="<?php echo city; ?>" class="form-control" required />
</div> 
<div class="form-group col-md-6">
<label>Address1:</label>
<input type="text" name="address1" id="address1" value="<?php echo address_1; ?>" class="form-control" required />
</div> 
<div class="form-group col-md-6">
<label>Address2:</label>
<input type="text" name="address2" id="address2" value="<?php echo address_2; ?>" class="form-control" required />
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
<!----------------------/Profile Modal ----------------------->
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
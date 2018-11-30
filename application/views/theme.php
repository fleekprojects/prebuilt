<section>
<div class="">
<div class="">
<div class="col-md-3 bg_color">
<h1 class="h_content">3/6
<br>Select
<br>Theme
</h1>
<p class="p_content">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit,<br> sed to eiusmod tempor<br> incididunt ut labore et <br>dolore magna aliqua.</p>
</div>
<div class="col-md-9 bg1_height">

<div class="topSection">

<div class="row" style=" margin:20px">
<div class="col-xs-12">
<button class="btn btn-small btn-danger btn_color" data-toggle="portfilter" data-target="all">
All
</button>
<?php foreach($categories as $category){ ?> 
<button class="btn btn-small btn-danger btn_color" data-toggle="portfilter" data-target="<?= $category['tag']?>">
<?= $category['name'] ?>
</button>
<?php }  ?>
</div>
</div>
<div class="row">
<?php  foreach($themes as $theme){ ?>
<div class="col-md-3" data-tag='cms'>
<div class="s_shadow">
<h1 class="alignleft"><?= strtoupper($theme['theme_name']) ?></h1>
<a href="#" class="alignright">SELECT</a>
<img src="<?=base_url()?>assets/front/images/<?= $theme['image1'] ?>" class="img-responsive i_img">
</div>
</div>
<?php } ?>
</div>
</div>
<!--<div class="col-md-3">
<div class="s_shadow">
<h1 class="alignleft">THEME 1</h1>
<a href="#" class="alignright">SELECT</a>
<img src="images/image1.jpg" class="img-responsive i_img">
</div>
</div>

<div class="col-md-3">
<div class="s_shadow">
<h1 class="alignleft">THEME 2</h1>
<a href="#" class="alignright">SELECT</a>
<img src="images/image2.jpg" class="img-responsive i_img">
</div>
</div>

<div class="col-md-3">
<div class="s_shadow">
<h1 class="alignleft">THEME 3</h1>
<a href="#" class="alignright">SELECT</a>
<img src="images/image3.jpg" class="img-responsive i_img">
</div>
</div>

<div class="col-md-3">
<div class="s_shadow">
<h1 class="alignleft">THEME 4</h1>
<a href="#" class="alignright">SELECT</a>
<img src="images/image3.jpg" class="img-responsive i_img">
</div>
</div>-->
<footer>
<div class="footer_inner_left clearifix">
<a href="<?= base_url();?>select-domain" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
</div>
<div class="footer_inner clearifix">
<a href="<?= base_url();?>other-info" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>
</div>
</div>
</footer>  
<!--<a href="selectdomain.html" class="con_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
<a href="otherinfo.html" class="con_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
</div>
</div>
</div>
</section>
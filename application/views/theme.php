<section>
   <div class="">
   <div class="">
      <div class="col-md-3 bg_color bg_color1">
          <div class="table">
               <div class="table-cell">
         <h1 class="h_content">3/6
            <br>Select
            <br>Theme
         </h1>
         <p class="p_content">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
   </div>
      </div>
      <div class="col-md-9 bg1_height">
 <div class="table">
               <div class="table-cell">
         <div class="topSection">
            <div class="row">
               <div class="col-xs-12">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <button class="btn btn-small btn-danger btn_color" data-toggle="portfilter" data-target="all">
                     All
                     </button>
					 <?php
					   foreach($categories as $category){ ?>
					   <button class="btn btn-small btn-danger btn_color" data-toggle="portfilter" data-target="<?= $category['id']?>"><?= $category['pre_name'] ?></button>
					 <?php }  ?>
                  </div>
               </div>
            </div>
            <div class="theme-sec">
               <div class="row">
			    <?php  foreach($themes as $theme){ ?>
                  <div class="theme-box" data-tag="<?= $theme['cat_id']?>">
                     <div class="col-md-3 col-sm-4">
                        <div class="panel">
                           <div class="s_shadow">
                              <h1 class="alignleft"><?= strtoupper($theme['theme_name']) ?></h1>
                              <a href="#" onclick="themeSelect(<?= $theme['theme_id'] ?>)" class="alignright">SELECT</a>
                              <a href="<?=base_url()?>uploads/themeimages/<?= $theme['image1'] ?>" class="thumbnail " data-fancybox>
								<img src="<?=base_url()?>uploads/themeimages/<?= $theme['image1'] ?>" class="img-responsive i_img">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
				<?php } ?>      
			   </div>
            </div>
            <div id="errortheme"></div>
			<input type="hidden" name="theme_id" id="theme_id">
            <div class="clearifix"></div>
         </div>
         <footer>
            <div class="footer_inner_left clearifix">
               <a href="<?= base_url();?>select-domain" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span><span class="text">Back</span></a>
            </div>
            <div class="footer_inner clearifix">
               <a  href="javascript:void(0)" onclick="SaveChanges3()" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
         </footer>
      </div>
   </div></div>
   </div>
</section>
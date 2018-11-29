<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <h1 class="h_content">1/6
               <br>Business
               <br>Details
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit,<br> sed to eiusmod tempor<br> incididunt ut labore et <br>dolore magna aliqua.</p>
         </div>
         <div class="col-md-9 bg_height">
            <form class="form-horizontal"  enctype="multipart/form-data" action="<?= base_url();?>save-user-info" method="POST">
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="name">Business Name</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control f_name" name="business_name" placeholder="ENTER YOUR BUSINESS NAME">
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="ind">Industry</label>
                  <div class="col-sm-10">
					 <select name="industry_id" class="s_select">
					 <?php
						 foreach($industries AS $ind){
							echo '<option value="'.$ind['id'].'">'.$ind['name'].'</option>';
						 }
					?>
					</select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-2 l_style f_font" for="name">Upload Your Logo</label>
                  <div class="col-sm-10">
                     <div class="custom-file-upload">
                        <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> SELECT FILE
                        </label>
                        <input name="business_logo" id="file-upload" onchange="readURL(this);"  type="file"><br>
						<img id="blah" src="#" alt="Image" style="display:none;" />
                     </div>
                  </div>
               </div>
            <footer>
               <div class="footer_inner clearifix">
                  <button type="submit" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></button>
               </div>
            </footer>
			
            </form>
            <!--<h2 class="c_continue">Continue  <span class="glyphicon glyphicon-arrow-right"></span></h2>-->
            <!--<a href="selectdomain.html" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
         </div>
      </div>
   </div>
</section>
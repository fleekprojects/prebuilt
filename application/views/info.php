<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <h1 class="h_content">4/6
               <br>Other
               <br>Info
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit,<br> sed to eiusmod tempor<br> incididunt ut labore et <br>dolore magna aliqua.</p>
         </div>
         <div class="col-md-9 bg_height">
            <form class="form-horizontal" method="POST" action="<?= base_url()?>save-details">
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="w_name">Write Details</label>
                  <div class="col-sm-10">
                     <textarea rows="10"  id="comment" cols="80" name="comment"  class="t_area" placeholder="Mention few details about the features and functions you want to have in your website.You can also ask for help here."></textarea>
                  </div>
               </div>
           
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>select-theme" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
               </div>
               <div class="footer_inner clearifix">
                  <!-- <a href="<?= base_url();?>select-package" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a> -->
                    <a href="#" onclick="SaveChanges4()" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
         </div>
         </footer>  
          </form>
         <!--<a href="select_theme.html" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
            <a href="select_packgae.html" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
      </div>
   </div>
   </div>
</section>
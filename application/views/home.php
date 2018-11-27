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
            <form class="form-horizontal" action="/action_page.php">
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="name">Business Name</label>
                  <div class="col-sm-10">
                     <input type="name" class="form-control f_name" id="name" placeholder="ENTER YOUR BUSINESS NAME">
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="ind">Industry</label>
                  <div class="col-sm-10">
                     <select class="s_select">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
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
                        <input id="file-upload" type="file">
                     </div>
                  </div>
               </div>
            </form>
            <footer>
               <div class="footer_inner clearifix">
                  <a href="<?= base_url();?>select-domain" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
            </footer>
            <!--<h2 class="c_continue">Continue  <span class="glyphicon glyphicon-arrow-right"></span></h2>-->
            <!--<a href="selectdomain.html" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
         </div>
      </div>
   </div>
</section>
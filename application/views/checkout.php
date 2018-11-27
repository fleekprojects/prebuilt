<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <h1 class="h_content">6/6
               <br>Confirm
               <br>Purchase
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit,<br> sed to eiusmod tempor<br> incididunt ut labore et <br>dolore magna aliqua.</p>
         </div>
         <div class="col-md-9 bg_height">
            <form class="form-horizontal" action="/action_page.php">
               <div class="form-group g_pad">
                  <label class="control-label col-md-2 l_style" for="package">Package Choosen</label>
                  <div class="col-md-8">
                     <input type="package" class="form-control f_name alignleft" id="package" placeholder="Standard Package">
                     <a href="#" class="alignright1">Change Your Package</a>
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="name">Name</label>
                  <div class="col-sm-10">
                     <input type="name" class="form-control f_name" id="name" placeholder="MENTION YOUR NAME">
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="p_num">Phone Number</label>
                  <div class="col-sm-10">
                     <input type="text" name="quantity" id="quantity" class="num_field" placeholder="ENTER YOUR PHONE NUMBER"/>&nbsp;<span id="errmsg"></span>
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="email">Email Address</label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control f_name" id="email" placeholder="ENTER YOUR EMAIL NUMBER">
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="email">How would you like to be contacted?</label>
                  <div class="col-sm-10">
                     <label class="radio-inline r_inline">
                     <input type="radio" name="optradio" checked> Email
                     </label>
                     <label class="radio-inline r_inline">
                     <input type="radio" name="optradio"> Phone
                     </label>
                  </div>
               </div>
               <button type="button" class="btn p_btn">PAY NOW</button>
            </form>
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>select-package" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
               </div>
               <div class="footer_inner clearifix">
                  <a href="<?= base_url();?>payment-confirm" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
         </div>
         </footer>  
         <!--<a href="select_packgae.html" class="con_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
            <a href="payment_confirm.html" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
      </div>
   </div>
   </div>
</section>
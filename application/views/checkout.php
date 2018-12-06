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
            <form class="form-horizontal" method="POST" action="#">
               <div class="form-group g_pad">
                  <label class="control-label col-md-2 l_style" for="package">Package Choosen</label>
                  <div class="col-md-8">
                     <input type="text" disabled="" name="package" class="form-control f_name alignleft" id="package" placeholder="Standard Package">
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="p_num">Phone Number</label>
                  <div class="col-sm-10">
                     <input type="text" name="phone" id="phone" class="num_field" placeholder="ENTER YOUR PHONE NUMBER"/>&nbsp;<span id="errmsg"></span>
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="email">Email Address</label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control f_name" id="email" name="email" placeholder="ENTER YOUR EMAIL NUMBER">
                  </div>
               </div>
               <div class="form-group g_pad">
                  <label class="control-label col-sm-2 l_style" for="email">How would you like to be contacted?</label>
                  <div class="col-sm-10">
                     <label class="radio-inline r_inline">
                     <input type="radio" name="optradio" class="radioclass" value="0"> Email
                     </label>
                     <label class="radio-inline r_inline">
                     <input type="radio" name="optradio"  class="radioclass" value="1"> Phone
                     </label>
                  </div>
               </div>
               <button type="button" onclick="SaveChanges6()" class="btn p_btn">PAY NOW</button>
           
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>select-package" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
               </div><!-- 
               <div class="footer_inner clearifix">
                   <a href="#" onclick="SaveChanges6()" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
               </div> -->
                </form>
         </div>
         </footer>  
         <!--<a href="select_packgae.html" class="con_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
            <a href="payment_confirm.html" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
      </div>
   </div>
   </div>
</section>
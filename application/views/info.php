<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <div class="table">
               <div class="table-cell">
            <h1 class="h_content">4/6
               <br>Other
               <br>Info
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>
      </div>
         </div>
         <div class="col-md-9 bg_height">
<div class="table">
               <div class="table-cell">
            <div class="topSection">
               <div class="form-group col-sm-12">
                  <label class="control-label col-sm-3 label-style" for="w_name">Write Details</label>
                  <div class="col-sm-9">
                     <textarea rows="10"  id="comment" class="form-control" cols="80" name="comment"     class="t_area" placeholder="Mention few details about the features and functions you want to have in your website.You can also ask for help here."><?= (isset($cookiearr[6]) ? $cookiearr[6] : '') ?></textarea>
                     <div id="errorcomment"></div>
                  </div>
               </div>
            </div>
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>select-theme" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span><span class="text">Back</span></a>
               </div>
               <div class="footer_inner clearifix">
                  <a href="javascript:void(0)" onclick="SaveChanges4()" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
            </footer>
         </div>
</div>
</div>

      </div>
   </div>
</section>
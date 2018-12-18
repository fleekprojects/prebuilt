<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color bg_color2">
          <div class="table">
               <div class="table-cell">
            <h1 class="h_content">6/6
               <br>Confirm
               <br>Purchase
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          </div>
        </div>
         </div>

         <div class="col-md-9 bg1_height conFrm">
<div class="table">
               <div class="table-cell">
            <div class="topSection">
               <form class="form-horizontal" method="POST" id="checkoutform" action="<?= base_url()?>checkoutsubmit">
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="package">Package Choosen</label>
                     <div class="col-sm-9">
                        <input type="text" disabled=""  class="form-control" id="package" value="<?= $packages->package_name?>" />
                       <input type="hidden" name="amount" value="<?= $packages->package_price ?>">
                     </div> 
                  </div>
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="p_num">Phone Number</label>
                     <div class="col-sm-9">
                        <input type="text" name="phone" value="<?= (isset($cookiearr[8]) ? $cookiearr[8] : '') ?>" id="phone" class="form-control"  placeholder="ENTER YOUR PHONE NUMBER"/>
                        <div id="errorphone"></div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="email">Email Address</label>
                     <div class="col-sm-9">
                        <input type="email"  value="<?= (isset($cookiearr[9]) ? $cookiearr[9] : '') ?>" class="form-control" id="email" name="email" placeholder="ENTER YOUR EMAIL ADDRESS">
                        <div id="erroremail"></div>
                     </div>
                  </div>
                       <?php 
                         $contact=(isset($cookiearr[10]) ? $cookiearr[10] : 0); 

                         ?>
            
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="email">How would you like to be contacted?</label>
                     <div class="col-sm-9">
                        <label class="radio-inline r_inline">
                        <input type="radio" <?= ($contact==1 ? 'checked' : 'checked' ) ?> name="optradio" class="radioclass"  value="0"> Email
                        </label>
                        <label class="radio-inline r_inline">
                        <input type="radio"   <?= ($contact==0 ? 'checked' : '' ) ?> name="optradio"  class="radioclass" value="1"> Phone
                        </label>
                          <div id="errorradio"></div>
                     </div>
                  </div>
                  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
                  <div class="form-group col-sm-12" style="text-align: center;padding-top: 10px;">
                     <button id="paynow" class="btn button-default">PAY NOW</button>
                     <img id="loadergif" src="<?=base_url()?>assets/front/images/loader.gif" style="display: none; width: 27%;" >
                  </div>
               </form>
            </div>
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>select-package" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
               </div>
            </footer>

</div>
</div>

         </div>

      </div>
   </div>
</section>

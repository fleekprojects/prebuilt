<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color bg_color2">
            <h1 class="h_content">6/6
               <br>Confirm
               <br>Purchase
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>

         <div class="col-md-9 bg1_height conFrm">
            <div class="topSection">
               <form class="form-horizontal" method="POST" id="checkoutform" action="<?= base_url()?>checkoutsubmit">
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="package">Package Choosen</label>
                     <div class="col-sm-9">
                        <input type="text" disabled=""  class="form-control" id="package" value="<?= $packages->name?> Package" />
                       <input type="hidden" name="amount" value="<?= $packages->package_price ?>">
                     </div> 
                  </div>
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="p_num">Phone Number</label>
                     <div class="col-sm-9">
                        <input type="text" name="phone" id="phone" class="form-control"  placeholder="ENTER YOUR PHONE NUMBER"/>
                        <div id="errorphone"></div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="email">Email Address</label>
                     <div class="col-sm-9">
                        <input type="email"  class="form-control" id="email" name="email" placeholder="ENTER YOUR EMAIL NUMBER">
                        <div id="erroremail"></div>
                     </div>
                  </div>

               </div>
                    
               
      
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="email">How would you like to be contacted?</label>
                     <div class="col-sm-9">
                        <label class="radio-inline r_inline">
                        <input type="radio" name="optradio" class="radioclass" value="0"> Email
                        </label>
                        <label class="radio-inline r_inline">
                        <input type="radio" name="optradio"  class="radioclass" value="1"> Phone
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
                     <button  class="btn button-default">PAY NOW</button>
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
</section>

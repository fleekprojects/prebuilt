<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <h1 class="h_content">2/6
               <br>Select<br>Domain
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>
         <div class="col-md-9 bg_height">
            <div class="topSection">
               <div class="form-group col-sm-12">
                  <label class="control-label col-sm-3 label-style" for="youHavedomainName">Do you have any domain?</label>
                  <div class="col-sm-9">
                     <label class="radio-inline">
						<input type="radio" name="youHavedomainName" value="1" checked> Yes
                     </label>
                     <label class="radio-inline">
						<input type="radio" name="youHavedomainName" value="0"> No
                     </label>
                  </div>
               </div>
               <div id="domainHave">
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="domain_name">Your Domain </label>
                     <div class="col-sm-9">
                        <input type="text" class="form-control" id="domain" name="domain_name" placeholder="ENTER YOUR DOMAIN NAME">
                        <div id="errordomain"></div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12">
				  <hr noshade>
                     <label class="control-label col-sm-3 label-style" for="nameserver">Note: Please update your nameserver accordingly </label>
                     <div class="col-sm-9">
                        <p>ns1.inmotionhosting.com</p>
                        <p>ns2.inmotionhosting.com</p>
                     </div>
                  </div>
               </div>
               <div id="domainSearch" class="d-none">
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="domainSearch">Domain Address</label>
                     <div class="col-sm-9">
                        <input type="text" class="form-control" name="domain_name" id="domain_name_search" placeholder="ENTER YOUR DOMAIN ADDRESS">
                        <button type="button" class="btn btn-default">SEARCH DOMAIN</button>
                           <div id="errordomainaddress"></div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url()?>" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span><span class="text">Back</span></a>
               </div>
               <div class="footer_inner clearifix">
                  <a href="#"  onclick="SaveChanges2()" class="c_continue"><span class="text">Continue</span><span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
            </footer>
         </div>
      </div>
   </div>
</section>
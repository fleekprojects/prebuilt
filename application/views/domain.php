<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
             <div class="table">
               <div class="table-cell">
            <h1 class="h_content">2/6
               <br>Select<br>Domain
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>
      </div>
         </div>
         <div class="col-md-9 bg_height">
 <div class="table">
               <div class="table-cell">
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
                     
                     <div class="col-sm-9">
                        <p class=" label-style">Note: Please update your nameserver accordingly</p>
                        <p><b>ns1.inmotionhosting.com</b></p>
                        <p><b>ns2.inmotionhosting.com</b></p>
                     </div>
                  </div>
               </div>
               <div id="domainSearch" class="d-none">
                  <div class="form-group col-sm-12">
                     <label class="control-label col-sm-3 label-style" for="domainSearch">Domain Address</label>
                     <div class="col-sm-9">
                        <input type="text" class="form-control" name="domain_name" id="domain_name_search" placeholder="ENTER YOUR DOMAIN ADDRESS">
                        <button type="button" class="button-default" onclick="checkDomain();">SEARCH DOMAIN</button>
                           <div id="errordomainaddress"></div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url()?>" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span><span class="text">Back</span></a>
               </div>
               <div id="domainyss" class="footer_inner clearifix">
                  <a href="javascript:void(0)"  onclick="SaveChanges2()" class="c_continue"><span class="text">Continue</span><span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
               <div id="domainnos" class="footer_inner clearifix" style="display: none;">
                  <a href="javascript:void(0)"  onclick="continue_checkDomain()" class="c_continue"><span class="text">Continue</span><span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
            </footer>
         </div>
      </div>
         </div>
      </div>
   </div>
</section>
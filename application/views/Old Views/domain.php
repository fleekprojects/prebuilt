 <section>
    <div class="">
      <div class="">
        <div class="col-md-3 bg_color">
          <h1 class="h_content">2/6
          <br>Select
          <br>Domain
        </h1>
          <p class="p_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-md-9 bg_height">
            <div class="topSection">
          <form class="form-horizontal" action="">
            <div class="form-group g_pad" id="youHavedomainName">
              <label class="control-label col-sm-3 label-style" for="youHavedomainName">Do you have any domain?</label>
              <div class="col-sm-7">
                <label class="radio-inline">
                  <input type="radio" name="youHavedomainName" value="1" checked> Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" name="youHavedomainName" value="0"> No
                </label>
              </div>

            </div>
            <div id="domainHave">
            <div class="form-group g_pad">
             <label class="control-label col-sm-3 label-style" for="domain_name">Your Domain </label>
             <div class="col-sm-7">
               <input type="text" class="form-control f_name alignleft" id="domain" name="domain_name" placeholder="ENTER YOUR DOMAIN NAME">
             </div>

           </div>
           <div class="form-group g_pad">
            <label class="control-label col-sm-3 label-style" for="nameserver">Note: Please update your nameserver accordingly </label>
            <div class="col-sm-7">
              <input type="text" class="form-control f_name" name="nameserver"  readonly value="ns1.inmotionhosting.com">
              <input type="text" class="form-control f_name" name="nameserver"  readonly value="ns2.inmotionhosting.com">
            </div>

          </div>
          <div class="form-group g_pad">
           <div class="col-sm-7 col-sm-offset-3">
             <button type="button" class="btn button-default ">SUBMIT</button>
           </div>

         </div>
         </div>
           <div id="domainSearch" class="d-none">
   <div class="form-group g_pad">
    <label class="control-label col-sm-3 label-style" for="domainSearch">Domain Address</label>
    <div class="col-sm-7">
      <input type="text" class="form-control f_name alignleft"  name="domainSearch" id="domainSearch" placeholder="ENTER YOUR DOMAIN ADDRESS">
       <button type="button" class="f_btn alignright">SEARCH DOMAIN</button>
    </div>

  </div>
</div>






</form>
</div>
<footer>
    <div class="footer_inner_left clearifix">

      <a href="<?= base_url()?>"                                                class="c_back"><span class="glyphicon glyphicon-arrow-left"></span><span class="text">Back</span></a>
    </div>
       <div class="footer_inner clearifix">
      <a href="#"  onclick="SaveChanges2()" class="c_continue"><span class="text">Continue</span><span class="glyphicon glyphicon-arrow-right"></span></a>
       </div>
    </div>
  </footer>
<!--<h2 class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</h2>-->
<!--<a href="index.html" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
<a href="select_theme.html" class="c_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
        </div>

      </div>
    </div>
  </section>
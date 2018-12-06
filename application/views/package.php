<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color bg_color1">
            <h1 class="h_content">5/6
               <br>Select
               <br>Package
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>
         <div class="col-md-9 padding_bg">
            <div class="topSection top_one">
			  <?php foreach($packages as $package){ ?>
               <div class="col-md-6">
                  <h2 class="s_main"><?= $package['name'] ?> Package</h2>
                  <div class="box">
                     <div class="icon">
                        <div class="info i_info">
						  <ul>
                           <?= $package['package_details'] ?>
						  </ul>
                           <h2 class="n_num">$<?= $package['package_price'] ?></h2>
                           <p class="o_one">One time cost</p>
                           <div class="more">
                              <a href="#" class="button-default btn" onclick="packageSelect(<?= $package['package_id']?>)" title="Title Link">SELECT</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   <?php } ?>
			   <input type="hidden" name="packageid" id="packageid" >
            </div>
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>other-info" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
               </div>
               <div class="footer_inner clearifix">
                  <a href="#" onclick="SaveChanges5()" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
            </footer>
         </div>
      </div>
   </div>
</section>
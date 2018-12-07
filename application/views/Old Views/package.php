<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <h1 class="h_content">5/6
               <br>Select
               <br>Package
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit,<br> sed to eiusmod tempor<br> incididunt ut labore et <br>dolore magna aliqua.</p>
         </div>
         <div class="col-md-9 bg1_height">
            <?php foreach($packages as $package){ ?>
            <div class="col-md-6">
               <h2 class="s_main"><?= $package['name'] ?> Packages</h2>
               <div class="box">
                  <div class="icon">
                     <!--<div class="image"><i class="fa fa-thumbs-o-up"></i></div>-->
                     <div class="info i_info">
                        <ul>
                          <?= $package['package_details'] ?>
                        </ul>
                        <h2 class="n_num">$<?= $package['package_price'] ?></h2>
                        <p class="o_one">One time cost</p>
                        <div class="more">
                           <a href="#" onclick="packageSelect(<?= $package['package_id']?>)" title="Title Link">
                            SELECT 
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            <input type="hidden" name="packageid" id="packageid" >
            <footer>
               <div class="footer_inner_left clearifix">
                  <a href="<?= base_url();?>other-info" class="c_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
               </div>
               <div class="footer_inner clearifix">
                   <a href="#" onclick="SaveChanges5()" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
         </div>
         </footer>  
         <!--<a href="otherinfo.html" class="con_back"><span class="glyphicon glyphicon-arrow-left"></span>Back</a>
            <a href="confirm_purchase.html" class="con_continue">Continue<span class="glyphicon glyphicon-arrow-right"></span></a>-->
      </div>
   </div>
   </div>
</section>
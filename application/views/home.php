<section>
   <div class="">
      <div class="">
         <div class="col-md-3 bg_color">
            <div class="table">
               <div class="table-cell">
                  <h1 class="h_content">1/6
               <br>Business
               <br>Details
            </h1>
            <p class="p_content">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed to eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               </div>
            </div>
         </div>
         <div class="col-md-9 bg_height">
            <div class="height-scrolling-one">
 <div class="table">
               <div class="table-cell">
            <div class="topSection">
               <div class="form-group col-sm-12">
                  <label class="control-label col-sm-3 label-style" for="name">Business Name</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="name"  name="name" placeholder="YOUR BUSINESS NAME">
                      <div id="errorname"></div>
                  </div>


               </div>
               <div class="form-group col-sm-12">
                  <label class="control-label col-sm-3 label-style" for="ind">Industry</label>
                  <div class="col-sm-9">
                     <select name="industry_id" id="industry_id" class="form-control">
                     <?php
                        foreach($industries AS $ind){
                          echo '<option  value="'.$ind['id'].'">'.$ind['name'].'</option>';
                        }
                        ?>
                     </select>
                     <div id="errorindustry"></div>
                  </div>
               </div>
               <div class="form-group col-sm-12">
                  <label class="control-label col-sm-3 label-style" for="name">Upload Your Logo</label>
                  <div class="col-sm-9">
                     <div class="custom-file-upload">
                        <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> SELECT FILE
                        </label>
                        <input name="business_logo" id="file-upload" onchange="readURL(this);"  type="file">
                        <br>
                        <img id="img" src="#" alt="Image" style="display: none;max-width: 300px;max-height: 350px;" />
                     </div>
                       <input type="hidden"  id="imgname" >
                       <div id="errorimage"></div>
                  </div>
               </div>
            </div>
            </div>
            <footer>
               <div class="footer_inner clearifix">
                  <a href="#" onclick="SaveChanges1('industry_id')" class="c_continue"><span class="text">Continue</span> <span class="glyphicon glyphicon-arrow-right"></span></a>
               </div>
            </footer>

         </div></div>
         </div>
      </div>
   </div>
</section>
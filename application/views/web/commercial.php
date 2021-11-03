
<?php $this->load->view('layout/header_css1'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/projects-details-page.css')?>">
<style type="text/css">
  .filter-location{
    position: relative;
    top: -45px;
    border: none;
    background-color: #f5f6f7;
  }
  .form-control:focus {
    color: #212529;
    background-color: #f5f6f7;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: none;
}
</style>
<?php $this->load->view('layout/header-menu'); ?>
  
   
  <section class="allprojectslist">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
          <ul class="nav nav-tabs  justify-content-end" id="myTab" role="tablist">
            <li class="nav-item tabnav" >
              <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ready to Move-in</a>
            </li>
            <li class="nav-item tabnav">
              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Ongoing</a>
            </li>
            <li class="nav-item tabnav">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Completed</a>
            </li>
            <li class="nav-item tabnav">
              <img src="<?php echo base_url('assets/web/images/location@2x.webp')?>">
                <select name="location"  class="form-control filter-location" tabindex="-98"  id="filter_location">
                    <option>--Select Location--</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Coimbatore">Coimbatore</option>
                </select> 
            </li>
          </ul>
        </div>
        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row " id="display">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-left pb20">Commercial</h2>
                <h5 class="text-left pb20">Commercial</h5>
                </div>

                  <?php 
                    foreach($property as $details){
                      if($details->property_status == 'Ready-to-Move'){
                  ?>                
                <div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
                    <div class="projects-item1">                                           
                        <div class="img-hol">
                          <a href="<?php echo base_url('home/property_details/').$details->property_id;?> ">                           
                          <img src="<?php echo base_url('assets/admin/uploads/property_thumb/'.$details->thumb_img)?>"  class="img-fluid">
                          <div class="project-title1">
                          <h3 class="text-white"><?php echo $details->name; ?></h3>
                          <p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp; <?php echo $details->title; ?></p>
                          </div>
                          </a>                           
                        </div>  
                                                            
                      <div class="projectshortdetails">
                        <ul>
                        <li class="app"><span>Apartments</span><br>
                        <?php echo $details->apartment_type; ?> BHK</li>
                        <li class="Possession"><span>Possession</span><br>
                        From <?php $timestamp = strtotime($details->possession); 
                                      $new_date = date('M Y', $timestamp);  echo $new_date; ?></li>
                        <li class="price"><span>Starting from</span><br>
                        <?php echo $details->price; ?> Onwards*</li>
                        <li class="status"><span>Project Status</span><br>
                        <?php echo $details->property_status; ?></li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div>
                  <?php } } ?>
                  

            </div> 
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-left pb20">Commercial</h2>
                <h5 class="text-left pb20">Commercial</h5>
                </div>
                    <?php 
                      foreach($property as $details){
                        if($details->property_status == 'Ongoing'){
                    ?> 
                  <div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
                    <div class="projects-item1">                     
                        <div class="img-hol">
                          <a href="<?php echo base_url('home/property_details/').$details->property_id;?> ">  
                            <img src="<?php echo base_url('assets/admin/uploads/property_thumb/'.$details->thumb_img)?>"  class="img-fluid">
                          <div class="project-title1">
                          <h3 class="text-white"><?php echo $details->name; ?></h3>
                          <p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp; <?php echo $details->title; ?></p>
                          </div>
                          </a>
                        </div>                                         
                      <div class="projectshortdetails">
                        <ul>
                        <li class="app"><span>Apartments</span><br>
                        <?php echo $details->apartment_type; ?> BHK</li>
                        <li class="Possession"><span>Possession</span><br>
                        From <?php $timestamp = strtotime($details->possession); 
                                      $new_date = date('M Y', $timestamp);  echo $new_date; ?></li>
                        <li class="price"><span>Starting from</span><br>
                        <?php echo $details->price; ?> Onwards*</li>
                        <li class="status"><span>Project Status</span><br>
                        <?php echo $details->property_status; ?></li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div>
                    <?php } } ?>
            </div>
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-left pb20">Commercial</h2>
                <h5 class="text-left pb20">Commercial</h5>
                </div>

                    <?php 
                      foreach($property as $details){
                        if($details->property_status == 'Completed'){
                    ?> 
                  <div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
                    <div class="projects-item1">                     
                        <div class="img-hol">
                          <a href="<?php echo base_url('home/property_details/').$details->property_id;?> ">  
                            <img src="<?php echo base_url('assets/admin/uploads/property_thumb/'.$details->thumb_img)?>"  class="img-fluid">
                          <div class="project-title1">
                          <h3 class="text-white"><?php echo $details->name; ?></h3>
                          <p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp; <?php echo $details->title; ?></p>
                          </div>
                          </a>
                        </div>                                         
                      <div class="projectshortdetails">
                        <ul>
                        <li class="app"><span>Apartments</span><br>
                        <?php echo $details->apartment_type; ?> BHK</li>
                        <li class="Possession"><span>Possession</span><br>
                        From <?php $timestamp = strtotime($details->possession); 
                                      $new_date = date('M Y', $timestamp);  echo $new_date; ?></li>
                        <li class="price"><span>Starting from</span><br>
                        <?php echo $details->price; ?> Onwards*</li>
                        <li class="status"><span>Project Status</span><br>
                        <?php echo $details->property_status; ?></li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                    <?php } } ?>                
            
            </div>
          </div>

        </div>

      </div>
    </div>

  </section>


<!-- footer-area -->
<?php $this->load->view('layout/footer-menu-inner'); ?>

<!-- ToTop Button 
<button class="scrollup"><i class="fas fa-angle-up"></i></button>-->
<!-- Javascript Files -->
<?php $this->load->view('layout/footer-home-js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script src="<?php echo base_url('assets/web/js/custom.js')?>"></script>
<script type="text/javascript">
        var baseURL= "<?php echo base_url();?>";
</script>
</body>
</html>
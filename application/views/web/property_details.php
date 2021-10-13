
<?php $this->load->view('layout/header_css1'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/web/flexslider.css')?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/projects-details-page.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/iconmon.css')?>">
<style>
.specifications img{
  width: 100% !important;
}
</style>

<?php $this->load->view('layout/header-menu'); ?>


<!-- Banner-section -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <?php 
              $i = 0;
              foreach($property_banner as $banner) {
                $active = '';
                if($i == 0)
                {
                  $active = 'active';
                }
                
            ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"  ></button>
           <?php $i++; } ?>
          
        </div>
        <div class="carousel-inner">
            <?php 
              $i = 0;
              foreach($property_banner as $banner) {
                $active = '';
                if($i == 0)
                {
                  $active = 'active';
                }
            ?>
          <div class="carousel-item <?php echo $active; ?>">         
            <img src="<?php echo base_url('assets/admin/uploads/property_banner/'.$banner->banner_img)?>"  class="w-100" alt="...">
          </div>
            <?php $i++; } ?>
         
       
      </div>
</section>
<!-- project detail Menu --> 

<header>
  <nav>
    <section class="project-menus">
      <div class="container">
        <div class="row align-items-center">
          <ul>
            <li><a href="#project-overview" class="project-menu-active">Project Overview</a></li>
            <li class="d-none d-sm-block"><a href="#Specifications">Specifications</a></li>
            <li class="d-none d-sm-block"><a href="#Features">Features</a></li>
            <li><a href="#floor-plan">Floor Plan</a></li>
            <li  class="d-none d-sm-block"><a href="#virtual-tour">360° Virtual Tour</a></li>
            <li><a href="#location">Location Map</a></li>
          </ul>
        </div>
      </div>
    </section>
  </nav>
</header>
<!-- project overview --> 
    <section id="project-overview" class="project-overview  ptb56">
      <div class="container">
          <div class="row">

            <div class="col-xxl-6 col-xl-7 col-lg-7 col-sm-12 col-xs-12  col-12">
              <div class="row d-xxl-none">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-2  col-2">
                  <img src="<?php echo base_url('assets/web/images/project-logo/'.$property_details->name);?>" class="img-fluid" />
                </div>
                <div class="col-xxl-10 col-xl-10 col-lg-2 col-sm-2 col-xs-2 col-10">
                  <h2><?php echo $property_details->name; ?> </h2>
                  <h4><?php echo $property_details->title; ?></h4>
                  <h5><img src="<?php echo base_url('assets/web/images/location-black2.webp')?>" />&nbsp;&nbsp; Vadapalani</h5>
                </div>
              </div>
              <div class="row">
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-2  col-12 d-none d-sm-block">

                    <img src="<?php echo base_url('assets/web/images/project-logo/'.$property_details->name.".jpg");?>" class="img-fluid" />
                  </div>
                  <div class="col-xxl-10 col-xl-6 col-lg-6 col-sm-12 col-xs-12  col-12">
                    <h2 class="d-none d-sm-block"><?php echo $property_details->name; ?></h2>
                    <h4 class="d-none d-sm-block"><?php echo $property_details->title; ?></h4>
                    <h5 class="d-none d-sm-block"><img src="<?php echo base_url('assets/web/images/location-black2.webp')?>" />&nbsp;&nbsp; <?php echo $property_details->location; ?></h5>
                    <div class="row">
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 col-xs-6  col-6">
                        <div class="broucher-bt"><a href="#"><center> <img src="<?php echo base_url('assets/web/images/Brochure1.webp')?>" />&nbsp;&nbsp; Brochure</center></a></div>
                      </div>
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 col-xs-6  col-6">
                        <div class="broucher-bt"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><center>
                         <img src="<?php echo base_url('assets/web/images/flyer.webp')?>" />&nbsp;&nbsp; Walkthrough</center></a></div>

                      </div>
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 col-xs-6  col-12">
                        <div class="enquirenow-bt"><a href="#"><center>  Enquire Now </center></a></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-xxl-6 col-xl-5 col-lg-5 col-sm-12 col-xs-12  col-12">
            <p><?php echo $property_details->description; ?> </p>
            </div>
          </div>

          <div class="pt40">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12  col-12">
              <div class="app  overdetails">
                <span>Apartments</span><br>
                  <?php echo $property_details->apartment_type; ?> BHK
              </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12  col-12">
              <div class="Possession overdetails"><span>Possession</span><br>
              From <?php 
                              $timestamp = strtotime($property_details->possession); 
                              $new_date = date('M Y', $timestamp);                             
                              echo $new_date; 
                          ?>    </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12  col-12">
                <div class="pro-location overdetails"><span>Location</span><br>
              <?php echo $property_details->location_address; ?></div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12  col-12">
                <div class="price overdetails"><span>Starting from</span><br>
              <?php echo $property_details->price; ?> Onwards*</div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12  col-12">
                <div class="status overdetails"><span>Project Status</span><br>
              <?php echo $property_details->property_status; ?></div>
              </div>
            </div>
          </div>
      </div>
    
<!-- Button trigger modal -->

<!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Walkthrough Video</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php  
               if(isset($property_details->walkthrough_video)){
              ?>
              <iframe width="100%" height="415" src="<?php echo base_url('assets/admin/uploads/walkthrough_video/'.$property_details->walkthrough_video) ; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php } else { echo "No Video Found "; } ?>
            </div>           
          </div>
        </div>
      </div>
    </section>

<!-- banner text  --> 
    <section class="pro-big-title">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
            <h2 class="text-center"><?php $my_value =$property_details->name; $first_word = explode(' ',trim($my_value))[0]; echo $first_word; ?></h2>
          </div>
        </div>
      </div>
    </section>

<!--specification start here  -->
    <section id="Specifications" class="specifications ptb56">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
            <h2 class="text-center pb20">Specifications</h2>
          </div>
        </div>
        <div class="row pb40">
          <?php
          $spec = json_decode($property_details->specification);
          $arr=explode(',',$property_details->specification);
          foreach($spec as $k=>$det)
            { 
              $x = (array)$det;  
              $y = (array)$x['spec'.$k];
          ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12">
               <?php echo(html_entity_decode($y[0])); ?>
          </div>              
          <?php } ?>   
        </div>        
      </div>
    </section>

<!-- Features list -->
    <section id="Features" class="fearures ptb56">
        <div class="container">
          <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
              <h2 class="text-center">Features</h2>
              <h3 class="text-center">World class amenities to matching global standards in living</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
              <ul>                  
                  <?php 
                    
                    if(preg_match("/Water-Treatment/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-water-treatment-plant fa-4x"></span><p>Water Treatment Plant</p></li>';
                    } 
                    if(preg_match("/100-Power-Back-up/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-power-backup fa-4x"></span><p>100% Power Back up for common areas & apartments </p></li>';
                    }  
                    if(preg_match("/Regulator-Gas/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-regulator-gas fa-4x"></span><p>Regulator Gas</p></li>';
                    } 
                    if(preg_match("/Rain-water-Harvesting/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-rain-water-harvesting fa-4x"></span><p>Rain water Harvesting</p></li>';
                    } 
                    if(preg_match("/Mini-Theatre/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-mini-thestre fa-4x"></span><p>Mini Theatre</p></li>';
                    }   
                    if(preg_match("/Swimming-Pool/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-swimming-pool fa-4x"></span><p>Swimming Pool</p></li>';
                    } 
                    if (preg_match("/Fire-Alarm/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-fire-alarm fa-4x"></span><p>Fire Alarm & Wet riser system</p></li>';
                    } 
                    if (preg_match("/Landscaped-garden/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-landscaped-garden fa-4x"></span><p>Landscaped garden with Water bodies</p></li>';
                    } 
                    if (preg_match("/Association-Room/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-association-room fa-4x"></span><p>Association Room</p></li>';
                    } 
                    if (preg_match("/Color-video-Door-Phone/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-video-security-phone-intercom fa-4x"></span><p>Color video Door Phone </p></li>';
                    } 
                    if (preg_match("/Garbage/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-garbage-collection-room fa-4x"></span><p> Garbage collection room</p></li>';
                    } 
                    if (preg_match("/club-house/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-clubhouse fa-4x"></span><p>Minor Sensor Lighting system in club house</p></li>';
                    } 
                    if (preg_match("/CCTV/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-CCTV-surveillance fa-4x"></span><p>CCTV Surveillance</p></li>';
                    } 
                    if (preg_match("/solar-lights/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-solor-powered-led-lights fa-4x"></span><p>Solar Powered LED Lights in coomon area</p></li>';
                    } 
                    if (preg_match("/Clubhouse/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-clubhouse fa-4x"></span><p>Clubhouse</p></li>';
                    } 
                    if (preg_match("/security-chain/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-security-cabin fa-4x"></span><p>Security Cabin</p></li>';
                    } 
                    if (preg_match("/fitness-center/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-fitness-center fa-4x"></span><p>Fitness Center</p></li>';
                    } 
                    if (preg_match("/party-hall/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-party-hall fa-4x"></span><p>Party Hall</p></li>';
                    } 
                    if (preg_match("/parking-barrier/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-parking-barrier fa-4x"></span><p>Access Controlled Barrier for Car Park Entry</p></li>';
                    } if (preg_match("/lifts-V3F/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-Elevator fa-4x"></span><p>Lifts with V3F & ARD</p></li>';
                    } 
                    if (preg_match("/water-meter/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-water-meter fa-4x"></span><p>Water meters for all apartments (Digital)</p></li>';
                    } 
                    if (preg_match("/toilet-driver/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-toilet-for-drivers fa-4x"></span><p>Toilets for drivers & domestic help</p></li>';
                    } 
                    if (preg_match("/fire-flight/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-fire-flight-sprinker-system fa-4x"></span><p>Fire fighting sprinkler system</p></li>';
                    } 
                    if (preg_match("/hydro-pnuematic/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-water-softening-plant fa-4x"></span><p>Hydro Pnuematic System</p></li>';
                    } 
                    if (preg_match("/access-controlled/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-access-controlled-doors fa-4x"></span><p>Access Controlled Doors</p></li>';
                    } 
                    if (preg_match("/sewage-treatment/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-water-treatment-plant fa-4x"></span><p>Sewage Treatment Plant</p></li>';
                    } 
                    if (preg_match("/indoor-games/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-indoor-games fa-4x"></span><p>Indoor Games</p></li>';
                    } 
                    if (preg_match("/video-intercom/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-regulator-gas fa-4x"></span><p>Video Security Phone and Intercom</p></li>';
                    } 
                    if (preg_match("/DTH/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-DTH-provision fa-4x"></span><p>DTH Provision</p></li>';
                    } 
                    if (preg_match("/power-backup/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-power-backup fa-4x"></span><p>1000 Watts Power Back up for each unit</p></li>';
                    } 
                    if (preg_match("/childerns-play/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-childerns-play-area fa-4x"></span><p>Childrens Play Area</p></li>';
                    } 
                    if (preg_match("/guest-rooms/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-guest-room fa-4x"></span><p>Guest Rooms</p></li>';
                    } 
                    if (preg_match("/waste-management/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-waster-management fa-4x"></span><p>Comprehensive Waste management system</p></li>';
                    } 
                    if (preg_match("/drivers-waiting-room/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-drivers-waiting-room fa-4x"></span><p>Drivers Waiting room with fittings</p></li>';
                    } 
                    if (preg_match("/elevators/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-Elevator fa-4x"></span><p>Elevators in each block</p></li>';
                    } 
                    if (preg_match("/access-doors/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-access-controlled-doors fa-4x"></span><p>Access Controlled doors with CCTV cameras coverage @ vantage point</p></li>';
                    } 
                    if (preg_match("/water-softening-plant/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-water-softening-plant fa-4x"></span><p>Water Softening plant</p></li>';
                    } 
                    if (preg_match("/500-watt/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-power-backup fa-4x"></span><p>500 watt standby power supply for EWS Block</p></li>';
                    } 
                    if (preg_match("/Wifi-connectivity/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-wifi fa-4x"></span><p>Wifi Connectivity in club house</p></li>';
                    } 
                    if (preg_match("/ac-outdoor/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-ac-outdoor-units fa-4x"></span><p>Provision for AC Outdoor Unit Placement</p></li>';
                    } 
                    if (preg_match("/servant-quarters/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-servant-quarters fa-4x"></span><p>Servant Quarters</p></li>';
                    } 
                    if (preg_match("/intercom/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-intercom fa-4x"></span><p>Intercom</p></li>';
                    } 
                    if (preg_match("/boundary-line/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-regulator-gas fa-4x"></span><p>Boundary Line Landscaping & Sprawling Lawn</p></li>';
                    } 
                    if (preg_match("/wifi-multiplesystem/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-wifi-multiplesystem fa-4x"></span><p>Wifi and Multiplesystem Service provider Television Enablement</p></li>';
                    } 
                    if (preg_match("/air-conditioning/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-ac-outdoor-units fa-4x"></span><p>Placement Provision for Air-Conditioning Outdoor Units</p></li>';
                    } 
                    if (preg_match("/private-clothes/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-private-clothes-drying fa-4x"></span><p>Private Clothes Drying areas for each apartment</p></li>';
                    } 
                    if (preg_match("/kids-play/", "$property_details->feature")) 
                    {
                      echo '<li><span class="icon-kids-play-area fa-4x"></span><p>Kids Play area(Children Under-8)</p></li>';
                    } 
                             
                  ?>
                                
                
              </ul>
            </div>
          </div>
        </div>
      </section>
<!-- Features list  end here -->
<!-- image banner -->
    <section>
        <img src="<?php echo base_url('assets/web/images/floor-bg.webp')?>" class="img-fluid" />
    </section>
<!-- image banner end -->

<!-- floor plan start here -->

    <section id="floor-plan" class=" floor ptb66">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
            <h2 class="text-center">Floor Plan</h2>
            <h3 class="text-center">World class amenities to matching global standards in living</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-12 col-xs-12 offset-3 slider">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <?php
                foreach($floorplan_details as $k=>$val){
                  if($k == 0){
                ?>
                <li class="nav-item tabnav" >
                <a class="nav-link active" id="home-tab_<?=$k?>" data-bs-toggle="tab" data-bs-target="#home_<?=$k?>" type="button" role="tab" aria-controls="home" aria-selected="true"><?=$val->floor_name?></a>
              </li>
              <?php } else{?>
                <li class="nav-item tabnav" >
                  <a class="nav-link " id="home-tab_<?=$k?>" data-bs-toggle="tab" data-bs-target="#home_<?=$k?>" type="button" role="tab" aria-controls="home" aria-selected="true"><?=$val->floor_name?></a>
                </li>
              <?php } } ?>  
                           
            </ul>
            
            <div class="tab-content" id="myTabContent">
              <?php
              foreach($floorplan_details as $k=>$val){
                if($k == 0 ){
              ?>
              <div class="tab-pane fade show active" id="home_<?=$k?>" role="tabpanel" aria-labelledby="home-tab_<?=$k?>">
                <?php                
                  $floor_images = json_decode($floorplan_details[$k]->floor_img);
                ?>
                <center>  
                  <div>
                    <section class="">
                      <div id="slider_<?=$k?>" data-id="<?=$k?>" class="flexslider">
                        <ul class="slides">
                          <?php
                            foreach($floor_images as $k=>$val){
                          ?>
                            <li>
                              <img src="<?php echo base_url('assets/admin/uploads/floor_plan/'.$val->img)?>" />
                            </li>
                          <?php } ?>  
                        </ul>
                      </div>
                      <div id="carousel_<?=$k?>" data-id="<?=$k?>" class="flexslider">
                        <ul class="slides">
                          <?php
                          foreach($floor_images as $k=>$val){
                            
                            ?>
                            <li>
                            <img src="<?php echo base_url('assets/admin/uploads/floor_plan/'.$val->img)?>" />
                          </li>
                            <?php
                          }
                          ?>                                          
                        </ul>
                      </div>
                    </section>      
                  </div> 
                </center>
              </div>
              <?php } else{ ?>
                
              <div class="tab-pane fade" id="home_<?=$k?>" role="tabpanel" aria-labelledby="home-tab_<?=$k?>">
                <?php                
                  $floor_images = json_decode($floorplan_details[$k]->floor_img);
                ?>
                <center>  
                  <div>
                    <section class="">
                      <div id="slider_<?=$k?>" data-id="<?=$k?>" class="flexslider">
                        <ul class="slides">
                          <?php
                            foreach($floor_images as $k=>$val){
                          ?>
                            <li>
                              <img src="<?php echo base_url('assets/admin/uploads/floor_plan/'.$val->img)?>" />
                            </li>
                          <?php } ?>  
                        </ul>
                      </div>
                      <div id="carousel_<?=$k?>" data-id="<?=$k?>" class="flexslider">
                        <ul class="slides">
                          <?php
                          foreach($floor_images as $k=>$val){
                            
                            ?>
                            <li>
                            <img src="<?php echo base_url('assets/admin/uploads/floor_plan/'.$val->img)?>" />
                          </li>
                            <?php
                          }
                          ?>                                          
                        </ul>
                      </div>
                    </section>      
                  </div> 
                </center>
              </div>
              <?php } } ?>
             
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- floor plan end here -->

<!-- Location Map -->
  <section class="model-flat ptb56" id="virtual-tour">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
          <h2 class="text-center pb40">360° Virtual Tour </h2>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6 col-xs-12">
          <iframe class="pb-4" width="100%" height="480" src="https://my.matterport.com/show/?m=Dth1zsgsjKD" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>         						
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6 col-xs-12">
          <iframe class="pb-4" width="100%" height="480" src="https://my.matterport.com/show/?m=QRHY1d9UYGG" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>         						
        </div>
      </div>
    </div>
  </section>

<!-- Location Map -->
  <section id="location" class="location-map ptb56">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
          <h2 class="text-center pb40">Location Map</h2>                 
        </div>
      </div>
      <div class="row">
        <?php echo $property_details->google_map; ?>
      </div>
    </div>
  </section>

<!-- faq list start here  -->

          <section class="faq ptb56">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                  <h2 class="text-center">Frequently Asked Questions</h2>
                  <h3 class="text-center pb40">We have attempted to provide answers to the queries in the sequence of order normally asked by the customers. <br />However, if you have any other queries, please visit our office.</h3>
                </div>
              </div>
              <div class="row">
                <div class="accordion" id="accordionExample">
                  <div class="row">
                   
                        <?php 
                          $i=1;
                          foreach($property_faq as $faq)
                          {
                            $show = '';                           
                            if($i == 1)
                            {
                              $show = 'show';
                            }

                        ?>
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $faq->faq_question; ?>
                            </button>
                          </h2>
                          <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse " aria-labelledby="heading1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p> <?php echo $faq->faq_answer; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $i++; } ?>                    
                    
                  </div>                  
                </div>
              </div>
            </div>
          </section>

<!-- faq list end here  -->


<!-- Projects list -->
<section class="cta ptb70">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="d-none d-sm-block">
          <center>Interested on this project? &nbsp;&nbsp; <a href="#" class="callto"> <img src="<?php echo base_url('assets/web/images/phone-icon2.jpg')?>" />&nbsp; +91 766 733 0000 </a></center>
        </div>
        <div class=" d-block d-sm-none">
          <center>Interested on this project? <br /><br /> <a href="#" class="callto"> <img src="<?php echo base_url('assets/web/images/phone-icon2.jpg')?>" />&nbsp; +91 766 733 0000 </a></center>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects list -->
<section class="projectslist ptb56">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
        <h2 class="text-center pb20">Homes to explore</h2>
      </div>
          <?php 
            foreach($property as $detail){
          ?>   
      <div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
        <div class="projects-item1">
          <div class="img-hol">
            <a href="<?php echo base_url('Home/property_details/'.$detail->property_id)?>">                           
              <img src="<?php echo base_url('assets/admin/uploads/property_thumb/'.$detail->thumb_img)?>"  class="img-fluid">
              <div class="project-title1">
                <h3 class="text-white"><?php echo $detail->name; ?></h3>
                <p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp;  <?php echo $detail->location; ?></p>
              </div>
            </a>
          </div>
          <div class="projectshortdetails">
            <ul>
              <li class="app"><span>Apartments</span><br>
                <?php echo $detail->apartment_type; ?></li>
              <li class="Possession"><span>Possession</span><br>
                  From <?php $timestamp = strtotime($detail->possession); 
                  $new_date = date('M Y', $timestamp);  echo $new_date; ?></li>
              <li class="price"><span>Starting from</span><br>
                  <?php echo $detail->price; ?> Onwards*</li>
              <li class="status"><span>Project Status</span><br>
                  <?php echo $detail->property_status; ?></li>
            </ul>
            <div class="clearfix"></div>
          </div>
         </div>
        </div>
          <?php } ?>

      </div>
  </div>
</section>


<!-- footer-area -->
<?php $this->load->view('layout/footer-menu-inner'); ?>

<?php $this->load->view('layout/footer-home-js'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<!-- Syntax Highlighter -->

<!-- Optional FlexSlider Additions -->
<script src="<?php echo base_url('assets/web/jquery.flexslider.js')?>"></script>
<script src="<?php echo base_url('assets/web/js1/jquery.easing.js')?>"></script>
<script src="<?php echo base_url('assets/web/js1/jquery.mousewheel.js')?>"></script>
<script defer src="<?php echo base_url('assets/web/js1/demo.js')?>"></script>
<script src="<?php echo base_url('assets/web/js1/modernizr.js')?>"></script>
<!-- FlexSlider -->

<script type="text/javascript">
        $(window).scroll(function(){  if ($(window).scrollTop() >= 300) {  $('nav').addClass('fixed-header');  $('nav').addClass('project-menus1');  }  else {  $('nav').removeClass('fixed-header');  $('nav').removeClass('project-menus1');  } });

  
//flex slider 

    $(window).load(function(){
      $('[id^="carousel"]').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 115,
        itemMargin: 5,
        asNavFor: '#slider',
      });

      $('[id^="slider"]').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

   
</script>
</body>
</html>

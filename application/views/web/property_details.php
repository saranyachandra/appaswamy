<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- Required Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Page Title -->
<title>Trellis - Appaswamy Real Estates</title>
<meta name="description" content="Appaswamy Real Estates offers elegantly designed properties in Chennai with exciting facilities and amenities at prominent locations.">
<!-- Favicon Icon -->
<link rel="shortcut icon" href="favicon.png">
<!-- CSS Files -->
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/bootstrap.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/style.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/projects-details-page.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/responsive.css')?>">

</head>
<body>
<div class="top">
<div class="container">
<div class="row align-items-center">
<div class="col-xxl-2 col-xl-2 col-lg-2  col-sm-2 col-xs-4 col-8">
<div class="logo">
<a href="index.html"><img src="<?php echo base_url('assets/web/images/logo.png')?>" /></a>   
</div>
</div>
<div class="col-xxl-7 col-xl-7 col-lg-7  col-sm-4 col-xs-5 col-2">


<div class="mobicon d-block d-sm-none">
<a href="tel:+91 766 733 0000"><img src="<?php echo base_url('assets/web/images/phone-icon2.jpg')?>" /> </a>
</div>
</div>
<div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-3 col-xs-3 col-2">

<div class="mobile d-none d-sm-block">
<a href="tel:+91 766 733 0000"><span>Sales Enquiries</span><br />
+91 766 733 0000 </a>
</div>
<div class="mobimenu d-block d-sm-none">
<a href="#"><img src="<?php echo base_url('assets/web/images/menu.jpg')?>" /> </a>
</div>
</div>
</div>
</div>
</div>
<div class="header-container">
<div class="navbar d-block primary-navigation">
<div class="d-flex justify-content-between align-items-center">
<div class="col d-none d-xl-block col p-0 primary-nav-container">
<nav class="navbar-nav primary-nav-links  offset-3" role="navigation" aria-label="Main">
<ul role="menu" class="p-0 m-0 d-flex align-items-center">
<li role="presentation" class="nav-item"><a class="nav-link" role="menuitem" href="#" target="_self"></a></li>
<li role="presentation" class="primary-nav-dropdown nav-item"><a class="nav-link" href="#" target="_self" aria-haspopup="true" aria-expanded="false" role="menuitem">Residential</a>
<div class="dropdown-container">
<ul class="dropdown-list">
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Navasuja</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Azure The Oceanic</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Altezza</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Clover By The River</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Capella</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_blank">Splendour</a></li>
</ul></div></li>
<li role="presentation" class="primary-nav-dropdown nav-item"><a class="nav-link" href="#" target="_self" aria-haspopup="true" aria-expanded="false" role="menuitem">									Commercials</a>
<div class="dropdown-container"><ul class="dropdown-list">
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Platina</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Greensville</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Time Square Commercial</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Jaya Commercial</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="#" target="_self">Paypal</a></li>
</ul></div></li>
<li role="presentation" class="primary-nav-dropdown nav-item">
<a class="nav-link" href="residences.html" target="_self" aria-haspopup="true" aria-expanded="false" role="menuitem">Hospitality</a></li>
<li role="presentation" class="primary-nav-dropdown nav-item">
<a class="nav-link" href="residences.html" target="_self" aria-haspopup="true" aria-expanded="false" role="menuitem">Buyers Guide</a></li>
<li role="presentation" class="primary-nav-dropdown nav-item">
<a class="nav-link" href="residences.html" target="_self" aria-haspopup="true" aria-expanded="false" role="menuitem">About Us</a><div class="dropdown-container"><ul class="dropdown-list">
<li class="dropdown-list-item"><a class="nav-link" href="meetings-and-events/find-a-venue.html" target="_self">About us</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="meetings-and-events/group-offers.html" target="_self">Careers</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="meetings-and-events/rosewood-rest-assured.html" target="_self">Magazine</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="meetings-and-events/rosewood-rewards.html" target="_self">Press</a></li>
<li class="dropdown-list-item"><a class="nav-link" href="meetings-and-events/same-time-next-year.html" target="_self"></a></li>
</ul></div></li>
</ul>
</nav></div>
</div>
</div>
</div>

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
<!-- project overview --> 
    <section id="project-overview" class="project-overview  ptb56">
      <div class="container">
          <div class="row">

            <div class="col-xxl-6 col-xl-7 col-lg-7 col-sm-12 col-xs-12  col-12">
              <div class="row d-xxl-none">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-2  col-2">
                <img src="<?php echo base_url('assets/web/images/trellis-logo.webp')?>" class="img-fluid" />
                </div>
                <div class="col-xxl-10 col-xl-10 col-lg-2 col-sm-2 col-xs-2 col-10">
                <h2><?php echo $property_details->name; ?> </h2>
                <h4><?php echo $property_details->title; ?></h4>
                <h5><img src="<?php echo base_url('assets/web/images/location-black2.webp')?>" />&nbsp;&nbsp; Vadapalani</h5>
                </div>
              </div>
              <div class="row">
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-2  col-12 d-none d-sm-block">
                  <img src="<?php echo base_url('assets/web/images/trellis-logo.webp')?>" class="img-fluid" />
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
                        <div class="broucher-bt"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><center> <img src="<?php echo base_url('assets/web/images/flyer.webp')?>" />&nbsp;&nbsp; Walkthrough</center></a></div>

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
              <iframe width="100%" height="415" src="<?php echo base_url('assets/admin/uploads/walkthrough_video/'.$property_details->walkthrough_video) ; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>           
          </div>
        </div>
      </div>
    </section>

<!-- About Us --> 
    <section class="pro-big-title">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
            <h2 class="text-center">Trellis</h2>
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
          $arr=$property_details->specification;
         
               echo $arr;         
          ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-xs-12">
             
          </div>

              
          
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
                  
                  <?php if (preg_match("/Water-Treatment-Plant/", "$property_details->feature")) 
                    {                      
                  ?>
                  <li><img src="<?php echo base_url('assets/web/images/features/Water-Treatment-Plant.webp')?>" /><p>Water treatment plant</p></li>
                  <?php  }?>

                  <?php if (preg_match("/Clubhouse/", "$property_details->feature")) 
                    {                      
                  ?>
                  <li><img src="<?php echo base_url('assets/web/images/features/Clubhouse.webp')?>" /><p>Clubhouse</p></li>
                  <?php  }?>

                  <?php if (preg_match("/Rain-water-Harvesting/", "$property_details->feature")) 
                    {                      
                  ?>
                  <li><img src="<?php echo base_url('assets/web/images/features/Rain-water-Harvesting.webp')?>" /><p>Rain Water Harvesting</p></li>
                  <?php  }?>

                                
                <li><img src="images/guest-star1@2x.webp" /><p>Guest Rooms</p></li>
                <li><img src="images/party(1)@2x.webp" /><p>Party Hall</p></li>
                <li><img src="images/surface1@2x.webp" /><p>Video Security Phone & Intercom</p></li>
                <li><img src="images/fire-alarm@2x.webp" /><p>Fire Alarm & Wet Riser System</p></li>
                <li><img src="images/park(1)@2x.webp" /><p>Landscaped Garden</p></li>
                <li><img src="images/thunderbolt@2x.webp" /><p>500 Watt Power supply For EWS Block</p></li>
                <li><img src="images/toilet(1)@2x.webp" /><p>Toilets for Domestic Help & Car Drivers</p></li>
                <li><img src="images/save-water@2x.webp" /><p>Water Softening Plant</p></li>
                <li><img src="images/fitness@2x.webp" /><p>Fitness Center</p></li>
                <li><img src="images/armchairs(1)@2x.webp" /><p>Mini Theatre</p></li>
                <li><img src="images/swimming@2x.webp" /><p>Swimming Pool</p></li>
                <li><img src="images/parking-barrier@2x.webp" /><p>Access controlled Barrier For Car Park Entry</p></li>
                <li><img src="images/thunderbolt@2x(1).webp" /><p>1000 Watt Power supply For Each Unit</p></li>
                <li><img src="images/recycle(2)@2x.webp" /><p>Comprehensive Waster Management</p></li>
                <li><img src="images/gauge@2x.webp" /><p>Water Meters for All Apartments</p></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<!-- Features list  end here -->

<section>
<img src="images/floor-bg.webp" class="img-fluid" />
</section>
<section id="floor-plan" class=" floor ptb56">
<div class="container">
<div class="row">
<div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
<h2 class="text-center">Floor Plan</h2>
<h3 class="text-center">World class amenities to matching global standards in living</h3>
</div>
</div>
<div class="row">
<div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
  <li class="nav-item tabnav" >
    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tower A</a>
  </li>
  <li class="nav-item tabnav">
    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tower B</a>
  </li>
  <li class="nav-item tabnav">
    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Tower C</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <center><img src="images/tower-a-1.webp" class="img-fluid" /></center></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <center><img src="images/tower-a-1.webp" /></center></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> <center><img src="images/tower-a-1.webp" /></center></div>
</div>
</div>
</div>
</div>

</section>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
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
<center>Interested on this project? &nbsp;&nbsp; <a href="#" class="callto"> <img src="images/phone-icon2.jpg" />&nbsp; +91 766 733 0000 </a></center>
</div>
<div class=" d-block d-sm-none">
<center>Interested on this project? <br /><br /> <a href="#" class="callto"> <img src="images/phone-icon2.jpg" />&nbsp; +91 766 733 0000 </a></center>
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
<div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
<div class="projects-item">
<div class="img-hol">
<div class="project-title">
<h3 class="text-white">Azure The Oceanique</h3>
<p class="text-white"><img src="images/location@2x.webp"> &nbsp; Raja Annamalai Puram, Chennai</p>
</div>
</div>
<div class="projectshortdetails">
<ul>
<li class="app"><span>Apartments</span><br />
2, 3 & 4 BHK</li>
<li class="Possession"><span>Possession</span><br />
From Apr 2024</li>
<li class="price"><span>Starting from</span><br />
6.81 Cr Onwards*</li>
<li class="status"><span>Project Status</span><br />
Underconstruction</li>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>
<div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
<div class="projects-item">
<div class="img-hol2">
<div class="project-title">
<h3 class="text-white">Trellis</h3>
<p class="text-white"><img src="images/location@2x.webp"> &nbsp; Vadapalani, Chennai</p>
</div>
</div>
<div class="projectshortdetails">
<ul>
<li class="app"><span>Apartments</span><br />
2, 3 & 4 BHK</li>
<li class="Possession"><span>Possession</span><br />
From May 2021</li>
<li class="price"><span>Starting from</span><br />
6.81 Cr Onwards*</li>
<li class="status"><span>Project Status</span><br />
Ready to Move</li>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>
<div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
<div class="projects-item">
<div class="img-hol3">
<div class="project-title">
<h3 class="text-white">Habitat</h3>
<p class="text-white"><img src="images/location@2x.webp"> &nbsp; Siruseri, Chennai</p>
</div>
</div>
<div class="projectshortdetails">
<ul>
<li class="app"><span>Apartments</span><br />
2, 3 & 4 BHK</li>
<li class="Possession"><span>Possession</span><br />
From May 2021</li>
<li class="price"><span>Starting from</span><br />
56.5 Lakhs Onwards</li>
<li class="status"><span>Project Status</span><br />
Ready to move</li>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>


</div>
</div>

</section>


<!-- footer-area -->
<footer>
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-3 col-xs-12">
<div class=" footer-mobile mb20">
<a href="tel:+91 766 733 0000"><span>Sales Enquiries</span><br />
+91 766 733 0000 </a>

</div>
</div>
<div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-3 col-xs-12">
<div class="footer-email mb20">
<a href="mailto:info@appasamy.com"><span>Email</span><br />
info@appasamy.com </a>

</div>
</div>
<div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-3 col-xs-12">
<div class="footer-address mb20">
<a href="https://goo.gl/maps/bFGzmXsWyG8xH6UT8" target="_blank"><span>Office</span><br />
3, Mangesh Street, T.Nagar,
Chennai - 600 017 </a>

</div>
</div>
<div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-3 col-xs-12">
<div class="footersoical mb20">
<img src="images/facebook@2x.webp" /> &nbsp; <img src="images/instagram@2x.webp" /> &nbsp;  <img src="images/youtube@2x.webp" />  &nbsp; <img src="images/whatsapp@2x.webp" />
</div>
</div>



</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-xxl-9 col-xl-9 col-lg-9 col-sm-9 col-xs-12">
<h3>Appasamy Realestates</h3>
<p>Founded in 1959 by the visionary entrepreneur Mr S Appaswamy, Appaswamy Real Estate Ltd is a highly respected leading Real Estate conglomerate, headquartered in Chennai. </p>
<div class="pt-2">
<h3>Ongoing Projects</h3>
<p><a href="#">Appasamy Habitat</a>    <a href="#"> Appasamy Azure The Oceanic</a>     <a href="#">Appasamy Splendour</a>     <a href="#"> Appasamy The Bloomingdale</a>      <a href="#">Appasamy Clover</a></p>
</div>
<div  class="pt-2">
<h3>Website</h3>
<a href="#">Home</a>    <a href="#"> About Us </a>    <a href="#">Contact </a>    <a href="#">Blog </a>    <a href="#">Press</a>
</div>
</div>
<div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-3 col-xs-12">

</div>
</div>
</div>

<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
<p class="text-center">Copyright 2021 © Appaswamy.com All Rights Reserved.  <a href="#">Privacy Policy</a> |  <a href="#">Disclaimer</a></p>
</div>
</div>
</div>
</div>
</footer>


</script>
<script src="<?php echo base_url('assets/web/js/bootstrap.js')?>"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- Required Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Page Title -->
<title>Properties in Chennai - Appaswamy Real Estates</title>
<meta name="description" content="Appaswamy Real Estates offers elegantly designed properties in Chennai with exciting facilities and amenities at prominent locations.">
<!-- Favicon Icon -->
<link rel="shortcut icon" href="<?php echo base_url('assets/web/images/favicon.png')?>">
<!-- CSS Files -->
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/bootstrap.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/style.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/inner-page.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/web/css/responsive.css')?>">
</head>
<body>
<header class="top position-relative">
<div class="container">
<div class="row align-items-center">
<div class="col-xxl-2 col-xl-2 col-lg-2  col-sm-2 col-xs-6 col-8">
<div>
<img src="<?php echo base_url('assets/web/images/logo.png')?>" class="img-fluid" />    
</div>
</div>
<div class="col-xxl-7 col-xl-7 col-lg-7  col-sm-4 col-xs-3  col-2">
<div class="menu d-none d-sm-block">
<ul>
<li>Residential</li>
<li>Commercials</li>
<li>Hospitality</li>
<li>Buyers Guide</li>
<li>About Us</li>
</ul>
</div>
<div class="mobicon d-block d-sm-none">
<a href="tel:+91 766 733 0000"><img src="<?php echo base_url('assets/web/images/phone-icon2.jpg')?>" /> </a>
</div>
</div>
<div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-3 col-xs-3  col-2">
<div class="mobile  d-none d-sm-block">
<a href="tel:+91 766 733 0000"><span>Sales Enquiries</span><br />
+91 766 733 0000 </a>

</div>
<div class="mobimenu d-block d-sm-none">
<a href="#"><img src="<?php echo base_url('assets/web/images/menu.jpg')?>" /> </a>
</div>
</div>
</div>
</div>
</header>
<!-- inner page Banner-section -->
<section class="innerpage-title">
<div class="container">
<div class="row align-items-center">
<div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
<h2 class="text-center">Magazine</h2>
<h3 class="text-center">Thoughts</h3>
</div>
</div>
</div>   
</section>


<!-- About Us --> 
<section class="blog-list ptb56">
<div class="container">
    <div class="row">
        <div class="col-xxl-9 col-xl-9 col-lg-9  col-sm-9 col-12">
            <h3><?php echo $details->title; ?></h3><br>
           
            <a href="#"><img src="<?php echo base_url('assets/admin/uploads/banner/'.$details->banner_img)?>" class="img-fluid" />
            <br>

           
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12  col-sm-12 col-12">            
                 
                <p class="blog-disc" ><?php echo $details->description;?></p>
               
                <p class="blog-date"><?php $timestamp = strtotime($details->updated_date); 
                                  $new_date = date('d M Y', $timestamp);  echo $new_date; ?></p>

              
                </div>
                
            </div>
            

        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-3 col-12">
<div class="subscribe">
<center><img src="<?php echo base_url('assets/web/images/Subscribe-icon.jpg')?>" /></center>
<h3>Subscribe to stay on top of your living with curated news!</h3>
<form id="contactForm">
                            <div class="row">
                            
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Enter your Name" class="form-control1" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Enter your Email Id" class="form-control1" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                            <div class="col-lg-12 col-md-12">
                            <button type="button" class=" redbotton btn btn-primary btn-lg btn-block ">Subscribe</button>
                            </div>
                        </form>
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
<h2 class="text-center pb40">HOMES TO EXPLORE</h2>
</div>
<div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
<div class="projects-item">
<div class="img-hol">
<div class="project-title">
<h3 class="text-white">Azure The Oceanique</h3>
<p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp; Raja Annamalai Puram, Chennai</p>
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
<p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp; Vadapalani, Chennai</p>
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
<p class="text-white"><img src="<?php echo base_url('assets/web/images/location@2x.webp')?>"> &nbsp; Siruseri, Chennai</p>
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

<div class="col-xxl-12 col-xl-12 col-lg-12  col-sm-6 col-xs-12">

</div>
</div>
</div>

</section>

<!-- Blog Details -->


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
<img src="<?php echo base_url('assets/web/images/facebook@2x.webp')?>" /> &nbsp; <img src="<?php echo base_url('assets/web/images/instagram@2x.webp')?>" /> &nbsp;  <img src="<?php echo base_url('assets/web/images/youtube@2x.webp')?>" />  &nbsp; <img src="<?php echo base_url('assets/web/images/whatsapp@2x.webp')?>" />
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


<!-- ToTop Button 
<button class="scrollup"><i class="fas fa-angle-up"></i></button>-->
<!-- Javascript Files -->
<script src="<?php echo base_url('assets/web/js/bootstrap.js')?>"></script>
</body>
</html>
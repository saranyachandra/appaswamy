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
<style type="text/css">
   
</style>
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
            <a href="<?php echo base_url('home/magazine_details/'.$last_row->blog_id)?>">
                <img src="<?php echo base_url('assets/admin/uploads/banner/'.$last_row->banner_img)?>" class="img-fluid" />
            <h2><?php echo $last_row->title; ?></h2>
            <p class="blog-date"><?php $timestamp = strtotime($last_row->updated_date); 
                                  $new_date = date('d M Y', $timestamp);  echo $new_date; ?></p></a>

            <?php 
                foreach($details as $detail)
                {
            ?>
             <div class="pb30"> 
            <div class="row">
              
                <div class="col-xxl-8 col-xl-8 col-lg-8  col-sm-4 col-12">
                <a href="<?php echo base_url('home/magazine_details/'.$detail->blog_id)?>" >
                <h3><?php echo $detail->title; ?></h3>
                <p class="blog-disc" ><?php $desc = substr($detail->description, 0, 150); echo $desc."..." ?></p>
               
                <p class="blog-date"><?php $timestamp = strtotime($detail->updated_date); 
                                  $new_date = date('d M Y', $timestamp);  echo $new_date; ?></p>

                </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-3 col-12">

                <img src="<?php echo base_url('assets/admin/uploads/thumb/'.$detail->thumb_img)?>" class="img-fluid pb36" />
                </div>
            
            </div>
            </div>
            <?php } ?>

        </div>

        <div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-3 col-12">
<div class="subscribe">
<center><img src="<?php echo base_url('assets/web/images/Subscribe-icon.jpg')?>" /></center>
<h3>Subscribe to stay on top of your living with curated news!</h3>
                    <!-- <form id="contactForm" action="<?php echo base_url('Home/storeAddress')?>" method="POST">
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
                            <button type="submit" class=" redbotton btn btn-primary btn-lg btn-block ">Subscribe</button>
                            </div>
                        </form>-->
                        <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">

    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
     #mc_embed_signup .button {
    clear: both;
    background-color: #c3282d;
    border: 0 none;
    border-radius: 4px;
    transition: all 0.23s ease-in-out 0s;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-size: 15px;
    font-weight: normal;
    height: 32px;
    line-height: 32px;
    margin: 0 11px 0px 0;
    padding: 0 22px;
    text-align: center;
    text-decoration: none;
    vertical-align: top;
    white-space: nowrap;
    width: auto;
    float: right;
}
    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://yungmedia.us5.list-manage.com/subscribe/post?u=392a0fe001fd35bff51fac894&amp;id=995df5ea2f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">   

<div class="mc-field-group">
    <label for="mce-FNAME">Name </label>
    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_392a0fe001fd35bff51fac894_995df5ea2f" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>
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



<!-- footer-area -->
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
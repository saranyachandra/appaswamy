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
                <li>About US</li>
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
          <h2 class="text-center">Press</h2>
          <h3 class="text-center" style="overflow: hidden;">coverage</h3>
        </div>
      </div>
    </div>   
  </section>
<!-- Blog Details --> 
  <section class="Press ptb56 ashbg">
    <div class="container">
      <div class="row">  
          <?php 
            foreach($details as $detail){
          ?>
        <div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-6 col-xs-12 margin">
          <div class="projects-item mb30">
            <div class="img-ho">
              <img src="<?php echo base_url('assets/admin/uploads/press/thumb_img/'.$detail->thumb_img)?>" class="img-fluid" />
              <div class="blogtag1">News</div>
            </div>
            <div class="blogtitle">
               <?php $desc = substr($detail->title, 0, 80); echo $desc."..." ?>
            </div>
            <div class="bloglinks">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                  <div class="blog-date">
                    <?php $timestamp = strtotime($detail->press_date); 
                        $new_date = date('d M Y', $timestamp);  echo $new_date; ?>
                  </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                  <div class="blog-links">
                    <?php if($detail->news_url != null){ ?>
                    <a href="<?php echo $detail->news_url; ?>" target="_blank">Read more</a>
                    <?php } ?>
                    <?php if($detail->news_url == null){ ?>
                    <a href="<?php echo base_url('assets/admin/uploads/press/pdf/'.$detail->pdf_file)?>" target="_blank">Read more</a>
                    <?php } ?>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>          
            </div>          
          </div>       
        </div>

      <?php } ?>
  
      </div>
    </div>
  </section>

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
              3, Mangesh Street, T.Nagar,Chennai - 600 017 </a>                          
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-3 col-xs-12">
            <div class="footersoical mb20">
             <img src="<?php echo base_url('assets/web/images/facebook@2x.webp')?>" /> &nbsp; <img src="<?php echo base_url('assets/web/images/instagram@2x.webp')?>" /> &nbsp; <img src="<?php echo base_url('assets/web/images/youtube@2x.webp')?>" /> &nbsp; <img src="<?php echo base_url('assets/web/images/whatsapp@2x.webp')?>" />
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
        <a href="#">Home</a> <a href="#"> About Us </a>    <a href="#">Contact </a>    <a href="#">Blog </a>    <a href="#">Press</a>
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
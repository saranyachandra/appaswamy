<?php $this->load->view('layout/header_css1'); ?>

<?php $this->load->view('layout/header-menu'); ?>
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
<?php $this->load->view('layout/footer-menu-inner'); ?>

<!-- ToTop Button 
<button class="scrollup"><i class="fas fa-angle-up"></i></button>-->
<!-- Javascript Files -->
<?php $this->load->view('layout/footer-home-js'); ?>
</body>
</html>
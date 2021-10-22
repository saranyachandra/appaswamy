
<?php $this->load->view('layout/header-home'); ?>
<?php $this->load->view('layout/header-menu'); ?>
<style type="text/css">
    
    #sidebar {
    display: none;
}
.projects-item:hover #sidebar {
    display:block;
}
</style>
<!-- Banner-section -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class=" container" >
                    <div class="caption-top">
                        <div class="row">
                          <div class="col-lg-4 col-4">
                            <img src="<?php echo base_url('assets/web/images/cliver-logo.jpg')?>" class="img-fluid" />
                          </div>
                          <div class="col-lg-8 col-8">
                            <h2>Clover</h2>
                            <p> <img src="<?php echo base_url('assets/web/images/location@2x.webp')?>" /> &nbsp; Kotturpuram, Chennai</p>
                          </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo base_url('assets/admin/uploads/main_banner/'.$banner_img->banner_img1)?>"  class="d-block w-100 d-none d-sm-block" alt="...">
                <img src="<?php echo base_url('assets/web/images/banner1m.jpg')?>"  class="d-block w-100 d-block d-sm-none" alt="...">
            </div>

            <div class="carousel-item">
                <div class=" container" >
                    <div class="caption-top">
                        <div class="row">
                          <div class="col-lg-4 col-4">
                            <img src="<?php echo base_url('assets/web/images/azure-logo.jpg')?>" class="img-fluid" />
                          </div>
                          <div class="col-lg-8 col-8">
                            <h2>Azure The Oceanic</h2>
                            <p> <img src="<?php echo base_url('assets/web/images/location@2x.webp')?>" /> &nbsp; Santhome High Road R A Puram</p>
                          </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo base_url('assets/admin/uploads/main_banner/'.$banner_img->banner_img2)?>"  class="d-block w-100 d-none d-sm-block" alt="...">
                <img src="<?php echo base_url('assets/web/images/banner2m.jpg')?>"  class="d-block w-100 d-block d-sm-none" alt="...">
            </div>

            <div class="carousel-item">
                <div class=" container" >
                    <div class="caption-top">
                        <div class="row">
                            <div class="col-lg-4 col-4">
                                <img src="<?php echo base_url('assets/web/images/altezza-logo.jpg')?>" class="img-fluid" />
                            </div>
                            <div class="col-lg-8 col-8">
                                <h2>Altezza</h2>
                                <p> <img src="<?php echo base_url('assets/web/images/location@2x.webp')?>" /> &nbsp;Kottivakkam, Chennai</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <img src="<?php echo base_url('assets/admin/uploads/main_banner/'.$banner_img->banner_img3)?>"  class="d-block w-100 d-none d-sm-block" alt="...">
                 <img src="<?php echo base_url('assets/web/images/banner3m.jpg')?>"  class="d-block w-100 d-block d-sm-none" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- About Us --> 
<section class="aboutus ptb56">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-center pb40">About Our Story</h2>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                <center>
                <img src="<?php echo base_url('assets/web/images/founder1.webp')?>" class="img-fluid" /></center>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                <h3>APPASWAMY<br />
                <span>Founder & Chairman</span></h3>
                <p>Founded in 1959 by a visionary entrepreneur, Mr S Appaswamy, Appaswamy Real Estates is an eminent real estate conglomerate and one of the leading builders in Chennai. We are constantly expanding our footprint with exquisite dwellings and elevated lifestyle solutions in our apartments in Chennai. Our clientele spans thousands of happy residents and families in this beloved city.</p>
                <p>From residences that can be appreciated by the burgeoning upper middle class to extravagant luxury homes in Chennai that are akin to castles in the air, we’ve done it all over our 60 years in the real estate industry. Our Chairman, Mr Appaswamy is widely credited to have introduced the “Apartment Culture” in Chennai by being one of the first to offer elegantly designed residences. Additionally, we were the builders in Chennai to pioneer the concept of creating townships in key suburban locations through the urban development model – one that is now replicated by many others.</p>
                <a href="<?php echo base_url('about-us');?>"><div class="readmore">Read More</div></a>
            </div>
        </div>
    </div>
</section>

<!-- residential Projects list -->

<section class="projectslist ptb56">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-center pb40">residential apartments</h2>
            </div>               
                <?php 
                    foreach($property as $detail){
                ?>   
            <div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">
                <div class="projects-item">
                    <div class="img-hol">
                        <a href="<?php echo base_url('home/property_details/'.$detail->property_id)?>">                           
                        <img src="<?php echo base_url('assets/admin/uploads/property_thumb/'.$detail->thumb_img)?>"  class="img-fluid">
                        <div class="project-title">
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

            <div class="col-xxl-12 col-xl-12 col-lg-12  col-sm-6 col-xs-12">
                <div class="viewallprojects"><a href="<?php echo base_url('residential-property')?>">View All Projects</a></div>
            </div>
        </div>
    </div>
</section>

<!-- hospitality start here  -->
<section class="hospitality ptb56">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-center pb40">hospitality</h2>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                <img src="<?php echo base_url('assets/web/images/hotel-image.webp')?>" class="img-fluid" />
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                <img src="<?php echo base_url('assets/web/images/residency-logo2.webp')?>" class="img-fluid d-none d-sm-block" />
                <h3>THE RESIDENCY HOTELS</h3>
                <p>The Residency Towers Coimbatore’s first luxury & trendy Hotel commenced in 1996 won the H & FS Award for “Excellence in Hospitality – Business Hotel of the Year” two years later. Chin Chin the Chinese Specialty Restaurant that had become hugely popular at The Residency Chennai, debuted equally favorably at Coimbatore and remains the City’s favorite fine dining restaurant.</p>
                <a href="#"><div class="readmore">View Detail</div></a>
            </div>
        </div>
    </div>
</section>

<!-- Press coverage -->
<section class="Press ptb56">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <h2 class="text-center pb40">Press coverage</h2>
            </div>
                <?php 
                    foreach($press as $detail){
                ?>
            <div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-6 col-xs-12">
                <div class="projects-item">
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

                <?php 
                    foreach($blog as $detail){
                ?>
            <div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-6 col-xs-12">
                <div class="projects-item">
                    <div class="img-ho">
                        <img src="<?php echo base_url('assets/admin/uploads/magazine/thumb/'.$detail->thumb_img)?>" class="img-fluid" />
                        <div class="blogtag2">Magazine</div>
                    </div>
                    <div class="blogtitle">
                        <?php $desc = substr($detail->title, 0, 80); echo $desc."..." ?>
                    </div>
                    <div class="bloglinks">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                                <div class="blog-date">
                                 <?php $timestamp = strtotime($detail->updated_date); 
                                    $new_date = date('d M Y', $timestamp);  echo $new_date; ?>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6  col-sm-6 col-xs-12">
                                <div class="blog-links">                                    
                                    <a href="<?php echo base_url('home/magazine_details/'.$detail->blog_id)?>" >Read more</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>          
                     
            
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12  col-sm-6 col-xs-12">
                <div class="viewallprojects"><a href="<?php echo base_url('press')?>">View All News</a></div>
            </div>
        </div>
</section>

<!-- contact-area -->
<section class="contactus" >
    <div class=" container-fluid">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="mapbg" style="width:100%;">
                    <div class="contact-address">                  
                      <p>Interested in a project? Let’s talk</p>
                      <h4><img src="<?php echo base_url('assets/web/images/phone-icon1.jpg')?>" />  +91 766 733 0000</h4>
                      <hr>
                      <p>Visit us @ Office</p>
                      <a href="#" >
                      <h4><img src="<?php echo base_url('assets/web/images/direction.jpg')?>" /> Get Directions</h4>
                      <p style="color:#707479; font-size:12px;">
                      3, Mangesh Street, T.Nagar, Chennai - 600 017</p></a>
                    </div>
                </div>         
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="homepage-contact-form">
                    <p>What we can help you with</p>
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <select>
                                                <option value="" selected disabled>Please select</option>
                                                <option value="">Residential Properties</option>
                                                <option value="">Commercial Properties</option>
                                                
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" placeholder="Mobile Number" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" placeholder="Budget" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                <button type="button" class=" redbotton btn btn-primary btn-lg btn-block ">Send Enquiry</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('layout/footer-menu'); ?>
<?php $this->load->view('layout/footer-home-js'); ?>
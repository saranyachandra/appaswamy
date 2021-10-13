
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
<section class="Press ptb56">
<div class="container">
    <div class="row">
        
        <div class=" col-xxl-9 col-xl-9 col-lg-9  col-sm-9 col-12">
            <div class="blog-list">
                    <?php 
                        if(isset($last_row->blog_id)){
                    ?>
                <a href="<?php echo base_url('home/magazine_details/'.$last_row->blog_id)?>">
                    <img src="<?php echo base_url('assets/admin/uploads/banner/'.$last_row->banner_img)?>" class="img-fluid" />
                <h2><?php echo $last_row->title; ?></h2>
                <p class="blog-date"><?php $timestamp = strtotime($last_row->updated_date); 
                    $new_date = date('d M Y', $timestamp);  echo $new_date; ?></p></a>
                    <?php } ?>
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
            <div class="paginate justify-content-center" >    
                <?php echo $this->pagination_bootstrap->render(); ?>                
            </div> 
        </div>


        <div class="col-xxl-3 col-xl-3 col-lg-3  col-sm-3 col-12">
             <form class="navbar-form" role="search" action="<?php echo base_url('home/search_keyword/');?>" method = "post">
                <div class="d-none d-sm-block">
                <div class="input-group " style="border: 1px solid #b7b7b7;" >                    
                    <input type="text" class="form-control" placeholder="Search" name="keyword" style="border:none;margin: 0px;">                   
                    <div class="input-group-btn" style="padding:8px;">
                        <button class="btn btn-default" type="submit" value ="Search"><i class="fa fa-search" aria-hidden="true" onclick="searchFunction()"></i></button>
                    </div>
                </div>
                </div>
            </form>
            <div class="subscribe">
                <center><img src="<?php echo base_url('assets/web/images/Subscribe-icon.jpg')?>" /></center>
                    <h3>Subscribe to stay on top of your living with curated news!</h3>
                   
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


</section>



        
<!-- Projects list -->
<section class="projectslist ptb56">
<div class="container">
<div class="row">
<div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-xs-12">
<h2 class="text-center pb40">HOMES TO EXPLORE</h2>
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
<script src="<?php echo base_url('assets/web/js/bootstrap.min.js')?>"></script>
<script type="text/javascript">
   
</script>
</body>
</html>
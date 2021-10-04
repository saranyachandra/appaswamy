<?php $this->load->view('layout/header_css1'); ?>

<?php $this->load->view('layout/header-menu'); ?>

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

  
<?php $this->load->view('layout/footer-menu-inner'); ?>

<!-- ToTop Button 
<button class="scrollup"><i class="fas fa-angle-up"></i></button>-->
<!-- Javascript Files -->
<?php $this->load->view('layout/footer-home-js'); ?>
</body>
</html>
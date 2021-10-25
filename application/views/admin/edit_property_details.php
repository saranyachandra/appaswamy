<?php 
$details = (array)$details;
$spec = array(); 
if(isset($details['specification']) && !empty($details['specification'])){
    $spec = json_decode($details['specification']);
}
$floor_plan_count = count($floor_plan);
$this->load->view('layout/admin/admin_css'); ?>
<style>
.error{
    color:red;
}
#fieldGroupTemplate {
  display: none;
}
</style>
<body>

    <div id="main-wrapper">
        <div class="nav-header">
            <a href="<?php echo base_url('admin/dashboard') ?>" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url('assets/admin/images/logo1.png');?>" alt="">
                <img class="logo-compact" src="<?php echo base_url('assets/admin/images/Logo.png');?>" alt="">
                <img class="brand-title" src="<?php echo base_url('assets/admin/images/Logo.png');?>" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>    
        
        <?php $this->load->view('layout/admin/sidebar'); ?>     
        <?php $this->load->view('layout/admin/headerbar'); ?>
      
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="nav menu-tabs">                  
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#dashboard">
                            <svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span style="font-size: 12px;text-align: center;">home  </span>
                        </a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#apps">
                            <svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span style="font-size: 12px;text-align: center;">Blog  </span>
                        </a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#forms">
                            <svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg>
                            <span style="font-size: 12px;text-align: center;">Property  </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#press">
                            <svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg>
                            <span style="font-size: 12px;text-align: center;">Press </span>
                        </a>
                    </li>                          
                </ul>
            </div>
            <a href="<?php echo base_url('login/Logout') ?>" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
        </div>
        
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                           <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h2 class="card-title" style="font-size: 27px;">Edit Property</h2>
                                    </div>
                                    <div class="card-body">
                                        <!--tab view stat -->
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Property Details</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully updated
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Something went wrong please try again
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>                                                             
                                                    <div class="row">                                                       
                                                        <div class="col-xl-2">
                                                            <div class="nav flex-column nav-pills mb-3">
                                                                <a href="#Project-Overview" data-toggle="pill" class="nav-link show active">Project Overview</a>
                                                                <a href="#Specifications" data-toggle="pill" class="nav-link">Specifications</a>
                                                                <a href="#Features" data-toggle="pill" class="nav-link">Features</a>
                                                                <a href="#Floor-Plan" data-toggle="pill" class="nav-link">Floor Plan</a>
                                                                <a href="#faq" data-toggle="pill" class="nav-link">FAQ</a>
                                                                <a href="#banner" data-toggle="pill" class="nav-link">Banner</a>
                                                            </div>
                                                        </div>
                                                    <div class="col-xl-10">
                                                    <div class="tab-content">
                                                    <div id="Project-Overview" class="tab-pane fade active show">
                                                        <form id="property_edit_form" action="" method="POST" enctype="multipart/form-data">
                                                            <div class="row"> 
                                                                <div class="col-lg-6 col-md-6"> 
                                                                <section>   
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="id" value="<?=$details['property_id']?>">
                                                                            <label class="text-label">Property Type</label>
                                                                            <select name="project_type" class="form-control" >
                                                                                <option>--Select Project Type--</option>
                                                                                <option value="Residential" <?php if($details['type'] == 'Residential'){?> selected="selected" <?php } ?>>Residential Projects</option>
                                                                                <option value="Commercial" <?php if($details['type'] == 'Commercial'){?> selected="selected" <?php } ?>>Commercial Projects</option>
                                                                                <option value="Hospitality" <?php if($details['type'] == 'Hospitality'){?> selected="selected" <?php } ?>>Hospitality Projects</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>      
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Property Name</label>
                                                                            <input type="text" name="property_name" class="form-control alpha-only" placeholder="Enter Name" style="text-transform: capitalize;" value="<?=$details['name']?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Title</label>
                                                                            <input type="text" name="property_title"  class="form-control" placeholder="Enter Title " value="<?php echo $details['title']?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Possession</label>
                                                                            <input type="date" name="possession"  class="form-control" value="<?=date('Y-m-d',strtotime($details['possession']))?>">
                                                                                                     
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Location</label>
                                                                            <select name="location" class="form-control" >
                                                                                <option>--Select Location--</option>
                                                                                <option value="Chennai" <?php  if($details['location'] == 'Chennai'){?> selected <?php }?>>Chennai</option>
                                                                                <option value="Coimbatore" <?php if($details['location'] == 'Coimbatore'){?> selected <?php }?>>Coimbatore</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Location address</label>
                                                                            <input type="text" name="location_address"  class="form-control" value="<?=$details['location_address']?>" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Description</label>
                                                                            <textarea class="form-control" name="description"><?=$details['description']?></textarea>
                                                                        </div>
                                                                    </div>                         
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Thumb Upload </label>
                                                                            <input type="hidden" name="thumb_img_old"  class="form-control" value="<?=$details['thumb_img']?>" >
                                                                            <input type="file" name="thumb_img" class="form-control" >
                                                                                                    <?php if(isset($details['thumb_img'])){?>
                                                                            <img src="../../assets/admin/uploads/property_thumb/<?=$details['thumb_img']?>" alt="Thumb image" height="100" width="200">
                                                                                                    <?php } ?>
                                                                        </div>
                                                                    </div>                                                                                 
                                                                </section>
                                                            </div>

                                                            <div class="col-lg-6 "> 
                                                                <section>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label>Apartment Type:</label>
                                                                            <div class="dropdown bootstrap-select show-tick form-control"><?php
                                                                                $apartMentExplode = explode(',',$details['apartment_type']);
                                                                            ?>                                                                    
                                                                            <select multiple="" name="apartment_type[]" class="form-control" id="sel2" tabindex="-98">
                                                                                <option value="1" <?php   if(in_array(1,$apartMentExplode)){ ?> selected= "selected" <?php }?>>1 BHK</option>
                                                                                <option value="2" <?php   if(in_array(2,$apartMentExplode)){ ?> selected= "selected" <?php }?>>2 BHK</option>
                                                                                <option value="3" <?php   if(in_array(3,$apartMentExplode)){ ?> selected= "selected" <?php }?>>3 BHK</option>
                                                                                <option value="4" <?php   if(in_array(4,$apartMentExplode)){ ?> selected= "selected" <?php }?>>4 BHK</option>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Price </label>
                                                                            <input type="text" name="price" class="form-control" value="<?=$details['price']?>">
                                                                        </div>
                                                                    </div>
                                                                                           
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Property Status</label>
                                                                            <select name="project_status" class="form-control" >
                                                                                <option disabled selected hidden>--Select Project Status--</option>
                                                                                <option value="underconstruction" <?php if($details['property_status'] == 'underconstruction') {?> selected <?php }?>>Underconstruction</option>
                                                                                <option value="Ready-to-Move" <?php if($details['property_status'] == 'Ready-to-Move'){ ?> selected <?php }?>>Ready to Move</option>
                                                                                <option value="Ongoing" <?php if($details['property_status'] == 'Ongoing'){ ?> selected <?php } ?>>Ongoing</option>
                                                                                <option value="Completed" <?php if($details['property_status'] == 'Completed') {?> selected <?php } ?>>Completed</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="form-group">
                                                                            <label class="text-label">Google Map</label>
                                                                            <textarea class="form-control" name="google_map"><?=$details['google_map']?></textarea>
                                                                        </div>
                                                                    </div>     
                                                                    <div class="col-lg-12 text-center mb-2">
                                                                        <div class="form-group"> 
                                                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>   
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </form>     
                                                </div>

                                                <div id="Specifications" class="tab-pane fade">
                                                    <div class="col-lg-12 mb-2">
                                                        <form id="specification_edit_form" action="" method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="id" value="<?=$details['property_id']?>">
                                                            <div class="row fieldGroup">
                                                            <div class="col-md-12  text-right">
                                                                <a href="javascript:void(0)" class="btn btn-success addMore">+</a>
                                                            </div>
                                                                <?php
                                                                    if(!empty($spec)){
                                                                    foreach($spec as $k=>$det)
                                                                        { 
                                                                          $x = (array)$det;  
                                                                          $y = (array)$x['spec'.$k];
                                                                ?>
                                                            <div class="col-md-12  ">
                                                                <div class="form-group">
                                                                    <h4>Section Content</h4>
                                                                    <textarea name="specification[]" class="editor"><?php echo(html_entity_decode($y[0])); ?></textarea>
                                                                </div>
                                                            </div>
                                                                <?php 
                                                                    } }else{ ?>   
                                                            <div class="col-md-12  ">
                                                                <div class="form-group">
                                                                    <h4>Section Content</h4>
                                                                    <textarea name="specification[]" class="editor"></textarea>
                                                                </div>
                                                            </div> 
                                                                <?php } ?>
                                                            </div>
                                                            <div class="row" id="fieldGroupTemplate">
                                                                <div class="col-md-12 text-right ">
                                                                    <a href="javascript:void(0)" class="btn btn-danger remove"> X </a>
                                                                </div>
                                                                <div class="col-sm-12 ">
                                                                    <div class="form-group">
                                                                        <h4>Section Content</h4>
                                                                        <textarea name="specification[]" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 text-center mb-2">
                                                                <div class="form-group"> 
                                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                    Cancel</button>                                            
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>   
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- feature tab start here -->
                                                <div id="Features" class="tab-pane fade">
                                                    <div class="row">
                                                            <div class="col-lg-12 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" id="select-all" class="form-check-input">Select all 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Water-Treatment" <?php if(preg_match("/Water-Treatment/", $details['feature'])) { echo 'checked';} else {echo "";} ?>  >Water Treatment Plant </label> 
                                                                </div>
                                                            </div>
                                                            <?php 
                                                                    foreach($features as $fe){
                                                                        $test = array($fe);
                                                                        print_r( $test->feature_name);
                                                                    }
                                                                   
                                                            ?>
                                                                    
                                                             
                                                    </div>
                                                </div>
                                              <!--  <div id="Features" class="tab-pane fade">
                                                    <form id="features_edit_form" method="POST" action="">
                                                        <input type="hidden" name="id" value="<?=$details['property_id']?>">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" id="select-all" class="form-check-input">Select all 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Water-Treatment" <?php if(preg_match("/Water-Treatment/", $details['feature'])) { echo 'checked';} else {echo "";} ?>  >Water Treatment Plant </label> 
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>  <input type="checkbox" name="features[]" class="form-check-input" value="100-Power-Back-up" <?php if(preg_match("/100-Power-Back-up/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span> 100% Power Back up for common areas & apartments </span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Regulator-Gas" <?php if(preg_match("/Regulator-Gas/", $details['feature'])) { echo 'checked';} else {echo "";} ?> >Reticulated Gas</label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Rain-water-Harvesting" <?php if(preg_match("/Rain-water-Harvesting/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Rain water Harvesting
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Mini-Theatre" <?php if(preg_match("/Mini-Theatre/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Mini Theatre</label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="Swimming-Pool" <?php if(preg_match("/Swimming-Pool/", $details['feature'])) { echo 'checked';} else {echo "";} ?>> Swimming Pool</label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Fire-Alarm" <?php if(preg_match("/Fire-Alarm/", $details['feature'])) { echo 'checked';} else {echo "";} ?>> Fire Alarm & Wet riser system</label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Landscaped-garden" <?php if(preg_match("/Landscaped-garden/", $details['feature'])) { echo 'checked';} else {echo "";} ?>> </span>
                                                                    <span>    Landscaped garden with Water bodies</span>
                                                                                           
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Association-Room" <?php if(preg_match("/Association-Room/", $details['feature'])) { echo 'checked';} else {echo "";} ?>> Association Room
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Color-video-Door-Phone" <?php if(preg_match("/Color-video-Door-Phone/", $details['feature'])) { echo 'checked';} else {echo "";} ?>> Color video Door Phone
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Garbage" <?php if(preg_match("/Garbage/", $details['feature'])) { echo 'checked';} else {echo "";} ?>> Garbage collection room
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                 <div class="form-check form-check-inline">
                                                                    <span>
                                                                         <input type="checkbox" name="features[]" class="form-check-input" value="club-house" <?php if(preg_match("/club-house/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span> <span>Motion Sensor Lighting system in club house</span>
                                                                                            
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="CCTV" <?php if(preg_match("/CCTV/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>CCTV Surveillance
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="solar-lights" <?php if(preg_match("/solar-lights/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span><span>Solar Powered LED Lights in coomon area</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="Clubhouse" <?php if(preg_match("/Clubhouse/", $details['feature'])) { echo 'checked';} else {echo "";} ?> >Clubhouse 
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="security-cabin" <?php if(preg_match("/security-cabin/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Security Chain
                                                                    </label>
                                                                </div>
                                                             </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                         <input type="checkbox" name="features[]" class="form-check-input" value="fitness-center" <?php if(preg_match("/fitness-center/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Fitness Centre
                                                                    </label>
                                                                 </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="party-hall" <?php if(preg_match("/party-hall/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Party Hall
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="parking-barrier" <?php if(preg_match("/parking-barrier/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                        <span>Access Controlled Barrier for Car Park Entry</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="lifts-V3F" <?php if(preg_match("/lifts-V3F/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Lifts with V3F & ARD
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="water-meter" <?php if(preg_match("/water-meter/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span>Water meters for all apartments (Digital)</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="toilet-driver" <?php if(preg_match("/toilet-driver/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Toilets for drivers & domestic help
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                     <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="fire-flight" <?php if(preg_match("/fire-flight/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Fire fighting sprinkler system
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="hydro-pnuematic" <?php if(preg_match("/hydro-pnuematic/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Hydro Pnuematic System
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                         <input type="checkbox" name="features[]" class="form-check-input" value="access-controlled" <?php if(preg_match("/access-controlled/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Access Controlled Doors
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="sewage-treatment" <?php if(preg_match("/sewage-treatment/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Sewage Treatment Plant
                                                                    </label>
                                                                 </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                         <input type="checkbox" name="features[]" class="form-check-input" value="indoor-games" <?php if(preg_match("/indoor-games/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Indoor Games
                                                                     </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="video-intercom" <?php if(preg_match("/video-intercom/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Video Security Phone and Intercom
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                     <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="DTH" <?php if(preg_match("/DTH/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>DTH Provision
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="power-backup" <?php if(preg_match("/power-backup/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                        <span>1000 Watts Power Back up for each unit</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="childerns-play" <?php if(preg_match("/childerns-play/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Children's Play Area
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="guest-rooms" <?php if(preg_match("/guest-rooms/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Guest Rooms
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="waste-management" <?php if(preg_match("/waste-management/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                     <span>Comprehensive Waste management system</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="drivers-waiting-room" <?php if(preg_match("/drivers-waiting-room/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Drivers Waiting room with fittings
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="elevators" <?php if(preg_match("/elevators/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Elevators in each block
                                                                    </label>
                                                                </div>
                                                            </div>       
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="access-doors" <?php if(preg_match("/access-doors/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                        <span>Access Controlled doors with CCTV cameras coverage @ vantage point</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="water-softening-plant" <?php if(preg_match("/water-softening-plant/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Water Softening plant
                                                                     </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                <span>
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="500-watt" <?php if(preg_match("/500-watt/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span>500 watt standby power supply for EWS Block</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="Wifi-connectivity" <?php if(preg_match("/Wifi-connectivity/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Wifi Connectivity in club house
                                                                </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                <span>
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="ac-outdoor" <?php if(preg_match("/ac-outdoor/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span><span>Provision for AC Outdoor Unit Placement</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                     <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="servant-quarters" <?php if(preg_match("/servant-quarters/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Servant Quarters
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="intercom" <?php if(preg_match("/intercom/", $details['feature'])) { echo 'checked';} else {echo "";} ?>>Intercom
                                                                    </label>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="boundary-line" <?php if(preg_match("/boundary-line/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span> Boundary Line Landscaping & Sprawling Lawn</span>
                                                                                            
                                                                </div>
                                                            </div>          
                                                            <div class="col-lg-3 mb-2">
                                                                 <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="wifi-multiplesystem" <?php if(preg_match("/wifi-multiplesystem/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span> Wifi and Multiplesystem Service provider Television Enablement</span>
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="air-conditioning" <?php if(preg_match("/air-conditioning/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span>Placement Provision for Air-Conditioning Outdoor Units</span>
                                                                </div>  
                                                           </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                        <input type="checkbox" name="features[]" class="form-check-input" value="private-clothes" <?php if(preg_match("/private-clothes/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span>    Private Clothes Drying areas for each apartment</span>
                                                                </div>
                                                            </div>  
                                                            <div class="col-lg-3 mb-2">
                                                                <div class="form-check form-check-inline">
                                                                    <span>
                                                                    <input type="checkbox" name="features[]" class="form-check-input" value="kids-play" <?php if(preg_match("/kids-play/", $details['feature'])) { echo 'checked';} else {echo "";} ?>></span>
                                                                    <span>   Kids Play area(Children Under-8)</span>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="col-lg-12 text-center mb-2">
                                                            <div class="form-group"> 
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>   
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>  
                                                            </div>
                                                        </div>
                                                    </form>                                                                            
                                                </div>-->
                                            <!-- feature tab end here -->
                                            <!-- floor plan tab starts here -->
                                            <div id="Floor-Plan" class="tab-pane fade">
                                                <form method="POST" action="" id="floor_edit_form" enctype="multipart/form-data">
                                                    <label>Select Floor Blocks</label>
                                                    <input type="number" id="btn-add-tab" name="tab-count" min="1" value="<?=$floor_plan_count?>">    
                                                    <input type="hidden" id="btn-add-tab" name="property_id" value="<?=$floor_plan[0]->property_id?>">    
                                                    <div class="default-tab">
                                                        <ul class="nav nav-tabs" role="tablist" id="tab-list">
                                                           <?php
                                                                foreach($floor_plan as $k=>$v){
                                                                    if($k == 0){
                                                            ?>
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#home<?=$k?>"> <?=$v->floor_name?></a>
                                                            </li>
                                                            <?php } else{?>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#home<?=$k?>"> <?=$v->floor_name?></a>
                                                            </li>
                                                            <?php } } ?>  
                                                        </ul>
                                                        <div class="tab-content" id="tab-content">
                                                            <?php
                                                                foreach($floor_plan as $k=>$val){
                                                                $floor_imgs = json_decode($val->floor_img);
                                                                if($k == 0 ){
                                                            ?>                                                                          <div class="tab-pane fade active show" id="home<?=$k?>" role="tabpanel">
                                                                <div class="col-lg-12 mt-2 text-right">
                                                                    <button type="button" name="remove" id="<?=$k?>" data-id="<?=$val->floor_id?>" class="btn btn-danger floorplan_remove"><i class="fa fa-trash"></i></button>
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <div class="form-group">
                                                                         <input type="hidden" id="btn-add-tab" name="floor_id<?=$k?>[]" value="<?=$val->floor_id?>"> 
                                                                        <label class="text-label">Tower Name </label>
                                                                         <input type="text" name="tower_name<?=$k?>[]" class="form-control" value="<?=$val->floor_name?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="text-label">Title </label>
                                                                         <input type="text" name="tower_title<?=$k?>[]" class="form-control" value="<?=$val->floor_title?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="text-label">Floor Plan Upload </label>
                                                                         <input type="file" name="floor_banner_img<?=$k?>[][]" class="form-control"  accept=".jpg, .jpeg, .png, .webp   " multiple>
                                                                    </div> 
                                                                </div>       
                                                                <div class="col-lg-12 mb-2">         
                                                                    <?php
                                                                        foreach($floor_imgs as $k=>$v){
                                                                    ?>
                                                                    <img src="<?php echo base_url('assets/admin/uploads/floor_plan/').$v->img ?>" height="100" width="200" class="img-thumbnail">
                                                                    <?php } ?>   
                                                                    
                                                                </div> 
                                                            </div>
                                                            <?php } else{ ?>
                                                            <div class="tab-pane fade " id="home<?=$k?>" role="tabpanel">
                                                                <div class="col-lg-12 mt-2 text-right">
                                                                    <button type="button" name="remove" id="<?=$k?>" data-id="<?=$val->floor_id?>" class="btn btn-danger floorplan_remove"><i class="fa fa-trash"></i></button>
                                                                </div>
                                                                <div class="col-lg-6 mb-2">
                                                                    <div class="form-group">
                                                                         <input type="hidden" id="btn-add-tab" name="floor_id<?=$k?>[]" value="<?=$val->floor_id?>">     
                                                                        <label class="text-label">Tower Name </label>
                                                                       <input type="text" name="tower_name<?=$k?>[]" class="form-control" value="<?=$val->floor_name?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="text-label">Title </label>
                                                                      <input type="text" name="tower_title<?=$k?>[]" class="form-control" value="<?=$val->floor_title?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="text-label">Floor Plan Upload </label>
                                                                       <input type="file" name="floor_banner_img<?=$k?>[][]" class="form-control"  accept=".jpg, .jpeg, .png, .webp" multiple>
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-12 mb-2">      
                                                                    <?php
                                                                        foreach($floor_imgs as $k=>$v){
                                                                    ?>
                                                                    <img src="<?php echo base_url('assets/admin/uploads/floor_plan/').$v->img ?>" height="100" width="200" class="img-thumbnail">
                                                                    <?php } ?>   
                                                                </div> 
                                                            </div>  
                                                            <?php } } ?>   
                                                            <div class="col-lg-12 text-center mb-2">
                                                                <div class="form-group"> 
                                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                                                    Cancel</button>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- floor plan tab ends here -->
                                           
                                            <!-- FAQ tab start here -->
                                            <div id="faq" class="tab-pane fade ">
                                                <div class="table-responsive">  
                                                    <form id="faq_edit_form" method="POST" action="">
                                                        <table class="table" id="dynamic_field">  
                                                            <tr><td colspan="3" align="right"><button type="button" name="add" id="add" class="btn btn-success">+</button></td></tr>
                                                                <?php
                                                                    foreach((array)$faq as $k=>$val){
                                                                ?>
                                                            <tr id="row<?=$k?>">  
                                                                <td>
                                                                    <input type="hidden" name="property_id[]" value="<?=$val->property_id?>">
                                                                    <input type="hidden" name="faq_id[]" value="<?=$val->faq_id?>">
                                                                    <input type="text" name="faq_question[]" placeholder="Enter FAQ Question" class="form-control name_list" value="<?=$val->faq_question?>"/>
                                                                </td>  
                                                                <td>
                                                                    <textarea name="faq_answer[]" placeholder="Enter FAQ Answer" class="form-control"><?=$val->faq_answer?></textarea>
                                                                </td>
                                                                <td><button type="button" name="remove" id="<?=$k?>" data-id="<?=$val->faq_id?>" class="btn btn-danger btn_remove">X</button></td> 
                                                            </tr>  
                                                                <?php } ?>
                                                        </table> 
                                                        <div class="col-lg-12 text-center mb-2">
                                                            <div class="form-group"> 
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                                                    Cancel</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                                                    Submit</button>   
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>  
                                            </div>
                                            <!-- FAQ tab end here -->
                                            <!-- banner tab start here -->
                                           <div id="banner" class="tab-pane fade ">
                                                <div class="card-body">
                                                    <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully updated
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Something went wrong please try again
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form id="property_banner_update" action="<?php echo base_url('admin/property_banner_update');?>"  enctype="multipart/form-data" method="POST">
                                                            <?php 
                                                                foreach($banner as $banners){
                                                            ?>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="row ">
                                                                <div class="col-lg-6 col-md-6 ">
                                                                    <label class="text-label">Banner Img Upload </label>
                                                                    <input type="file"  name="banner_img_new[]" class="form-control"  accept=".jpg, .jpeg, .png" onchange="preview_image_1(event)" multiple="">
                                                                    <input type="hidden"  name="banner_img[]" value="<?php echo $banners->banner_img ?>"  >
                                                                    <input type="hidden"  name="banner_id[]" value="<?php echo $banners->banner_id ?>"  >
                                                                    <input type="hidden"  name="property_id" value="<?php echo $banners->property_id ?>"  >
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 mb-2">
                                                                    <img id="output_image1"/>
                                                                    <img  id="img1" style="width:300px;height: 150px;" src="<?php echo base_url('assets/admin/uploads/property_banner/'.$banners->banner_img)?>" />
                                                                    <button type="button" name="delete_banner" id="<?php echo $banners->banner_id ?>" data-id="<?php echo $banners->banner_id ?>"  data-proid ="<?php echo $banners->property_id ?>" class="btn btn-danger banner_remove">X</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <?php } ?>
                                                        <div class="col-lg-12 col-md-12">    
                                                        <div class="row ">    
                                                            <div class="col-lg-6 col-md-6 ">
                                                                <label class="text-label">Banner Img Upload </label>
                                                                <input type="file"  name="banner_img_new1[]" class="form-control"  accept=".jpg, .jpeg, .png"  multiple>
                                                            </div> 
                                                        </div></div><br>  
                                                        <div class="col-lg-12 text-center mb-2">
                                                            <div class="form-group"> 
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                    Cancel</button>                                            
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                    Submit
                                                                </button>                                            
                                                            </div>
                                                        </div>
                                                    </form>                                        
                                                </div>
                                            </div>
                                            <!-- banner tab end here -->

                                        </div>
                                    </div>
                                                                
                                </div>
                                                        
                            </div>
                        </div>
                    </div>
                    <!--tab view end -->
                                       
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>                  
               </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2021. Yung Pharma. All Rights Reserved. &amp; Powered by <a href="https://yungmedia.com" target="_blank">Yung</a></p>
            </div>
        </div>
        


    </div>
    
<?php $this->load->view('layout/admin/admin_js'); ?>


<script src="<?php echo base_url('assets/admin/plugins/ckfinder/ckfinder.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/ckeditor/ckeditor.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/adapters/jquery.js"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>

<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
 <script src="<?php echo base_url('assets/admin/js/bootbox.js')?>"></script>

<script type='text/javascript'>
    var baseURL= "<?php echo base_url();?>";
//add faq dynamic
$(document).ready(function(){  
      var i=1;  
        $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="faq_question[]" placeholder="Enter FAQ Question" class="form-control name_list" /></td><td><textarea name="faq_answer[]" placeholder="Enter FAQ Answer" class="form-control"></textarea></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
        }); 

        $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");
           var id = $(this).attr("data-id"); 
           if(id == null){
            $('#row'+button_id+'').remove(); 
           }
               
           else{
          bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {
                    $.ajax({
                            url : baseURL + 'admin/delete_faq',                          
                            method: 'POST', 
                            data: {id:id},
                            dataType:'JSON',                          
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },           
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                    $('#faq').show();
                                    
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            },
                           
                    });
                }
            });
       }
          
        });  
     
});  
 
$(document).on('click', '.banner_remove', function(){  
           var pro_id = $(this).attr("data-proid");
           var id = $(this).attr("data-id"); 
           if(id == null){
            $('#row'+button_id+'').remove(); 
           }
               
        else{
            bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {
                    $.ajax({
                            url : baseURL + 'admin/delete_property_banner',                          
                            method: 'POST', 
                            data: {id:id},
                            dataType:'JSON',                          
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },           
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                     window.location.href = baseURL+'Admin/edit_property/'+pro_id+'#banner';
                                     console.log('location.hash', window.location.hash) 
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            },
                           
                    });
                }
            });
       }
          
    });  
//add dynamic tab 
$(document).ready(function(){  
 $('#btn-add-tab').on('change',function()
     {
        var i = 0;
         var selectedValue = $(this).val();  
          $('#tab-list').html('');        //clear tab data before select option
          $('#tab-content').html('');     
          $('#no_of_days').val(selectedValue);

          var tabID = 1;

    for(i=0;i<selectedValue;i++)
    {    
         
        $('#tab-list').append($('<li class="nav-item"><a class="nav-link " href="#tab' + tabID + '" role="tab" data-toggle="tab"> Tower ' + tabID + ' <br> <span id="' + tabID + '"> </span></a></li>'));  //class name - in active hide  

        $('#tab-content').append($('<div class=" tab-pane fade tab_' + tabID + '" id="tab' + tabID + '">   <div id="day_' +tabID+' "> <div class="form-group col-sm-12" id="day1_dynamicadd_1"> <div class="col-lg-12 mb-2"> <div class="form-group"> <label class="text-label">Name </label> <input type="text" name="tower_name'+tabID+'[]" class="form-control"></div> </div> <div class="col-lg-12 mb-2"> <div class="form-group"> <label class="text-label">Title </label>    <input type="text" name="tower_title'+tabID+'[]" class="form-control" ></div> </div> <div class="col-lg-12 mb-2"> <div class="form-group"> <label class="text-label">Floor Images Upload </label> <input type="file" name="floor_banner_img'+tabID+'[][]" class="form-control"  accept=".jpg, .jpeg, .png, .webp" multiple> </div> </div>   </div> </div>'));
         
        tabID++;
    }

       i++;     

     });
});

//ckeditor dynamic
 var editor = CKEDITOR.replace( 'ckfinder' );
    CKFinder.setupCKEditor( editor );
    CKEDITOR.replace( 'editor', {
        filebrowserUploadMethod: 'form',
         filebrowserUploadUrl:'<?php echo base_url('admin/upload_ckeditor'); ?>',
        } );
    
$(function() {

  //section add limit
  var maxGroup = 10;

  // initialize all current editor(s)
  $('.editor').ckeditor();

  //add more section
  $(".addMore").click(function() {

    // define the number of existing sections
    var numGroups = $('.fieldGroup').length;
   
    // check whether the count is less than the maximum
    if (numGroups < maxGroup) {

      // create new section from template
      var $fieldHTML = $('<div>', {
        'class': 'row fieldGroup',
        'html': $("#fieldGroupTemplate").html()
      });

      // insert new group after last one
      $('.fieldGroup:last').after($fieldHTML);

      // instantiate ckeditor on new textarea
      $fieldHTML.find('textarea').attr('disabled', false).ckeditor();

    } else {
      alert('Maximum ' + maxGroup + ' sections are allowed.');
    }

  });

  //remove fields 
  $("body").on("click", ".remove", function() {
    $(this).parents(".fieldGroup").remove();
  });

});
 
 

//select all checkbox
document.getElementById('select-all').onclick = function() {
  var checkboxes = document.getElementsByName('features[]');
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
}

//add 
</script>
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>
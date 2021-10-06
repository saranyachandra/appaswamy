

<?php $this->load->view('layout/admin/admin_css'); ?>
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
                <img class="logo-abbr" src="<?php echo base_url('assets/admin/images/Logo.png');?>" alt="">
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
			<a href="<?php echo base_url('super_admin/Logout') ?>" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
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
										<h2 class="card-title" style="font-size: 27px;">Create Property</h2>
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
                                                        <form id="property_form" action="" method="POST" enctype="multipart/form-data">     
                                                            <div class="row">                                                       
                                                                <div class="col-xl-2">
                                                                    <div class="nav flex-column nav-pills mb-3">
                                                                        <a href="#Project-Overview" data-toggle="pill" class="nav-link show active">Project Overview</a>
                                                                        <a href="#Specifications" data-toggle="pill" class="nav-link">Specifications</a>
                                                                        <a href="#Features" data-toggle="pill" class="nav-link">Features</a>
                                                                        <a href="#Floor-Plan" data-toggle="pill" class="nav-link">Floor Plan</a>
                                                                        <a href="#faq" data-toggle="pill" class="nav-link">FAQ</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-10">
                                                                    <div class="tab-content">

                                                                        <div id="Project-Overview" class="tab-pane fade active show">
                                                                           
                                                                                <div class="row"> 
                                                                                    <div class="col-lg-6 col-md-6"> 
                                                                                        <section>   
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Property Type</label>
                                                                                                    <select name="project_type" class="form-control" >
                                                                                                        <option>--Select Project Type--</option>
                                                                                                        <option value="Residential">Residential Projects</option>
                                                                                                        <option value="Commercial">Commercial Projects</option>
                                                                                                        <option value="Hospitality">Hospitality Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>      
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Property Name</label>
                                                                                                    <input type="text" name="property_name" class="form-control alpha-only" placeholder="Enter Name" style="text-transform: capitalize;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Title</label>
                                                                                                    <input type="text" name="property_title"  class="form-control" placeholder="Enter Title ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Possession</label>
                                                                                                    <input type="date" name="possession"  class="form-control" >
                                                                                                     
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Location</label>
                                                                                                     <select name="location" class="form-control" >
                                                                                                        <option>--Select Location--</option>
                                                                                                        <option value="Chennai">Chennai</option>
                                                                                                        <option value="Coimbatore">Coimbatore</option>
                                                                                                    </select>
                                                                                                    </div>
                                                                                            </div> 
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Location address</label>
                                                                                                    <input type="text" name="location_address"  class="form-control" >
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Description</label>
                                                                                                    <textarea class="form-control" name="description"></textarea>
                                                                                                </div>
                                                                                            </div> 
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Thumb Upload </label>
                                                                                                    <input type="file" name="thumb_img" class="form-control" >
                                                                                                </div>
                                                                                            </div>                                                     
                                                                                        </section>
                                                                                    </div>

                                                                                    <div class="col-lg-6 "> 
                                                                                        <section>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Banner Upload </label>
                                                                                                    <input type="file" name="banner_img[]" class="form-control"  accept=".jpg, .jpeg, .png" multiple>
                                                                                                </div>
                                                                                            </div> 
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Walkthrough videos Upload </label>
                                                                                                    <input type="file" name="walkthrough-video" class="form-control"  accept=".mp4" multiple>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">E-Brochure Upload </label>
                                                                                                    <input type="file" name="E_Brochure" class="form-control"  accept=".pdf" multiple>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label>Apartment Type:</label>
                                                                                                <div class="dropdown bootstrap-select show-tick form-control">
                                                                                                    <select multiple="" 
                                                                                                        name="apartment_type[]" class="form-control" id="sel2" tabindex="-98">
                                                                                                        <option value="1">1 BHK</option>
                                                                                                        <option value="2">2 BHK</option>
                                                                                                        <option value="3">3 BHK</option>
                                                                                                        <option value="4">4 BHK</option>
                                                                                                    </select>
                                                                                                    
                                                                                                </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Price </label>
                                                                                                    <input type="text" name="price" class="form-control" >
                                                                                                </div>
                                                                                            </div>
                                                                                           
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Property Status</label>
                                                                                                    <select name="project_status" class="form-control" >
                                                                                                        <option disabled selected hidden>--Select Project Status--</option>
                                                                                                        <option value="underconstruction">Underconstruction</option>
                                                                                                        <option value="Ready-to-Move">Ready to Move</option>
                                                                                                        <option value="Ongoing">Ongoing</option>
                                                                                                        <option value="Completed">Completed</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Google Map</label>
                                                                                                    <textarea class="form-control" name="google_map"></textarea>
                                                                                                </div>
                                                                                            </div>     
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                                 
                                                                        </div>

                                                                         <div id="Specifications" class="tab-pane fade">
                                                                            <div class="col-lg-12 mb-2">
                                                                               <div class="row fieldGroup">
                                                                                      
                                                                                      <div class="col-md-12  text-right">
                                                                                        <a href="javascript:void(0)" class="btn btn-success addMore">
                                                                                           +
                                                                                        </a>
                                                                                      </div>
                                                                                      <div class="col-md-12  ">
                                                                                        <div class="form-group">
                                                                                          <h4>Section Content</h4>
                                                                                          <textarea name="specification[]" class="editor"></textarea>
                                                                                        </div>
                                                                                      </div>
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
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Water-Treatment- Plant">
                                                                                        Water Treatment Plant</label>
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                       
                                                                                        <span>  <input type="checkbox" name="features[]" class="form-check-input" value="100%-Power-Back-up-for-common-areas-&- apartments"></span>
                                                                                       <span> 100% Power Back up for common areas & apartments </span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Reticulated-Gas">Reticulated Gas
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Rain-water-Harvesting">Rain water Harvesting
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Mini-Theatre">Mini Theatre
                                                                                        </label>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Swimming-Pool"> Swimming Pool
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Fire-Alarm-&-Wet- riser system"> Fire Alarm & Wet riser system
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Landscaped-garden-with-Water-bodies"> </span>
                                                                                        <span>    Landscaped garden with Water bodies</span>
                                                                                       
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Association-Room"> Association Room
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Color-video-Door- Phone"> Color video Door Phone
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Garbage-collection- room"> Garbage collection room
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Motion-Sensor- Lighting-system-in-club-house"></span> <span>Motion Sensor Lighting system in club house</span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="CCTV-Surveillance">CCTV Surveillance
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                       <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Solar-Powered-LED- Lights-in-coomon-area"></span><span>Solar Powered LED Lights in coomon area</span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Clubhouse">Clubhouse 
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Security-Chain">Security Chain
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Fitness-Centre">Fitness Centre
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Party-Hall">Party Hall
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Access-Controlled- Barrier-for-Car-Park-Entry"></span>
                                                                                            <span>Access Controlled Barrier for Car Park Entry</span>
                                                                                      
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Lifts-with-V3F-&-ARD">Lifts with V3F & ARD
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Water-meters-for-all-apartments-(Digital)"></span>
                                                                                        <span>Water meters for all apartments (Digital)</span>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Toilets-for-drivers- &-domestic-help">Toilets for drivers & domestic help
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Fire-fighting- sprinkler-system">Fire fighting sprinkler system
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Hydro-Pnuematic- System">Hydro Pnuematic System
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Access-Controlled- Doors">Access Controlled Doors
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Gymnasium">Gymnasium
                                                                                        </label>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Sewage-Treatment- Plant">Sewage Treatment Plant
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Security-Cabin">Security Cabin
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Indoor-Games">Indoor Games
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Video-Security-Phone-and-Intercom">Video Security Phone and Intercom
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="DTH-Provision">DTH Provision
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="1000-Watts-Power- Back-up-for -each-unit"></span>
                                                                                            <span>1000 Watts Power Back up for each unit</span>
                                                                                       
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Children's-Play-Area">Children's Play Area
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Guest-Rooms">Guest Rooms
                                                                                        </label>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Comprehensive-Waste- management-system"></span>
                                                                                        <span>Comprehensive Waste management system</span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Super-Market-(Groceries & Vegetables)">Guest Rooms
                                                                                        </label>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Associate-Office-Room">Associate Office Room
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Drivers-Waiting-room- with-fittings">Drivers Waiting room with fittings
                                                                                        </label>
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Elevators-in-each-block">Elevators in each block
                                                                                        </label>
                                                                                    </div>
                                                                                </div>        
         
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Minor-Sensor- Lighting-system-in-Club-House"></span>
                                                                                            <span>Minor Sensor Lighting system in Club House</span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Access-Controlled- doors-with-CCTV-cameras-coverage-@-vantage- point"></span>
                                                                                            <span>Access Controlled doors with CCTV cameras coverage @ vantage point</span>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Water-Softening-plant">Water Softening plant
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="500-watt-standby- power-supply-for-EWS-Block"></span>
                                                                                            <span>500 watt standby power supply for EWS Block</span>
                                                                                       
                                                                                    </div>
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Wifi-Connectivity-in-club-house">Wifi Connectivity in club house
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Provision-for-AC Outdoor-Unit-Placement"></span><span>Provision for AC Outdoor Unit Placement</span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Servant-Quarters">Servant Quarters
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Intercom">Intercom
                                                                                        </label>
                                                                                    </div>
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Boundary-Line- Landscaping-&-Sprawling-Lawn"></span>
                                                                                        <span> Boundary Line Landscaping & Sprawling Lawn</span>
                                                                                        
                                                                                    </div>
                                                                                </div>          
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Wifi-and- Multiplesystem-Service-provider-Television- Enablement"></span>
                                                                                        <span> Wifi and Multiplesystem Service provider Television Enablement</span>
                                                                                        
                                                                                    </div>
                                                                                </div>    <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Placement-Provision- for-Air-Conditioning-Outdoor-Units"></span>
                                                                                            <span>Placement Provision for Air-Conditioning Outdoor Units</span>
                                                                                        
                                                                                    </div>  
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Private-Clothes- Drying-areas-for-each-apartment"></span>
                                                                                        <span>    Private Clothes Drying areas for each apartment</span>
                                                                                        
                                                                                    </div>
                                                                                </div>  
                                                                                  <div class="col-lg-3 mb-2">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <span>
                                                                                            <input type="checkbox" name="features[]" class="form-check-input" value="Kids-Play-area(Children-Under-8)"></span>
                                                                                        <span>   Kids Play area(Children Under-8)
                                                                                        </span>
                                                                                    </div>
                                                                                </div>  
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <!-- feature tab end here -->

                                                                        <div id="Floor-Plan" class="tab-pane fade">
                                                                            <label>Select Floor Blocks</label>
                                                                            <input type="number" id="btn-add-tab" name="tab-count" min="1" value="1">     
                                                                            <div class="default-tab">
                                                                                <ul class="nav nav-tabs" role="tablist" id="tab-list">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" data-toggle="tab" href="#home"> Tower A</a>
                                                                                    </li>
                                                                                    
                                                                                </ul>
                                                                                <div class="tab-content" id="tab-content">
                                                                                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                                                                                         <div class="col-lg-12 mb-2">
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Tower Name </label>
                                                                                                    <input type="text" name="tower_name1[]" class="form-control">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Title </label>
                                                                                                    <input type="text" name="tower_title1[]" class="form-control" >
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class="text-label">Floor Plan Upload </label>
                                                                                                    <input type="file" name="floor_banner_img1[][]" class="form-control"  accept=".jpg, .jpeg, .png" multiple>
                                                                                                </div>
                                                                                            </div> 
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- FAQ tab start here -->
                                                                        <div id="faq" class="tab-pane fade ">
                                                                            <div class="table-responsive">  
                                                                               <table class="table" id="dynamic_field">  
                                                                                    <tr>  
                                                                                         <td><input type="text" name="faq_question[]" placeholder="Enter FAQ Question" class="form-control name_list" /></td>  
                                                                                         <td>
                                                                                            <textarea name="faq_answer[]" placeholder="Enter FAQ Answer" class="form-control"></textarea>
                                                                                         </td> 
                                                                                         <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
                                                                                    </tr>  
                                                                               </table> 
                                                                            </div>  
                                                                        </div>
                                                                        <!-- FAQ tab end here -->

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 text-center mb-2">
                                                                    <div class="form-group"> 
                                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                        Cancel</button>                                            
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                          Submit
                                                                        </button>                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
           $('#row'+button_id+'').remove();  
        });  
     
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

        $('#tab-content').append($('<div class=" tab-pane fade tab_' + tabID + '" id="tab' + tabID + '">   <div id="day_' +tabID+' "> <div class="form-group col-sm-12" id="day1_dynamicadd_1"> <div class="col-lg-12 mb-2"> <div class="form-group"> <label class="text-label">Name </label> <input type="text" name="tower_name'+tabID+'[]" class="form-control"></div> </div> <div class="col-lg-12 mb-2"> <div class="form-group"> <label class="text-label">Title </label>    <input type="text" name="tower_title'+tabID+'[]" class="form-control" ></div> </div> <div class="col-lg-12 mb-2"> <div class="form-group"> <label class="text-label">Floor Images Upload </label> <input type="file" name="floor_banner_img'+tabID+'[][]" class="form-control"  accept=".jpg, .jpeg, .png" multiple> </div> </div>   </div> </div>'));
         
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
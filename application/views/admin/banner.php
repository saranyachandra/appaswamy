

<?php $this->load->view('layout/admin/admin_css'); ?>

<style type="text/css">
    #output_image1 {
       max-width:350px;
    }
    #output_image2 {
       max-width:350px;
    }
    #output_image3 {
       max-width:350px;
    }
    #output_image4 {
       max-width:350px;
    }
    #output_image5 {
       max-width:350px;
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
						<a class="nav-link active" data-toggle="tab" href="#dashboard">
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
						<a class="nav-link" data-toggle="tab" href="#forms">
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
										<h2 class="card-title" style="font-size: 27px;">Create Banner</h2>
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
									   <form id="banner_form" action="" name="form-example-1" id="form-example-1" enctype="multipart/form-data" method="POST">
                                            <div class="text-right">
                                                <button type="button" name="add" id="add" class="btn btn-success ">+</button>
                                            </div>  
                                            <div  id="dynamic_field">    
                                            	<div class="row">                                                        
                                                    <div class="col-lg-6 col-md-6 ">
                                                        <label class="text-label">Property Name </label>
                                                        <input type="text"  name="name[]" class="form-control"  >
                                                    </div>  
                                                    <div class="col-lg-6 col-md-6 ">
                                                        <label class="text-label">Location </label>
                                                        <input type="text"  name="location[]" class="form-control"  >
                                                    </div> 
                                                    <div class="col-lg-6 col-md-6 ">
                                                        <label class="text-label">Title </label>
                                                        <input type="text"  name="title[]" class="form-control"  >
                                                    </div>                                                  
                                                </div>   
                                                <div class="row">     
                                                    <div class="col-lg-6 col-md-6 ">
                                                        <label class="text-label">Website Banner Img Upload </label>
                                                        <input type="file"  name="web_img[]" class="form-control"  accept=".jpg, .jpeg, .png, .webp" >
                                                    </div>      
                                                    <div class="col-lg-6 col-md-6 ">
                                                        <label class="text-label">Mobile Banner Img Upload </label>
                                                        <input type="file"  name="mobile_img[]" class="form-control"  accept=".jpg, .jpeg, .png, .webp" >
                                                    </div> 
                                                </div>
                                            </div>
                                                        <!--<div class="row">
                                                           <div class="col-lg-6 col-md-6 ">
                                                                <label class="text-label">Banner Img2 Upload </label>
                                                                <input type="file"  name="banner_img_2" class="form-control"  accept=".jpg, .jpeg, .png" onchange="preview_image_2(event)">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 mb-2">
                                                                <img id="output_image2"/>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                           <div class="col-lg-6 col-md-6 ">
                                                                <label class="text-label">Banner Img3 Upload </label>
                                                                <input type="file"  name="banner_img_3" class="form-control"  accept=".jpg, .jpeg, .png" onchange="preview_image_3(event)">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 mb-2">
                                                                <img id="output_image3"/>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                           <div class="col-lg-6 col-md-6 ">
                                                                <label class="text-label">Banner Img4 Upload </label>
                                                                <input type="file"  name="banner_img_4" class="form-control"  accept=".jpg, .jpeg, .png" onchange="preview_image_4(event)">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 mb-2">
                                                                <img id="output_image4"/>
                                                            </div>
                                                        </div>
                                                             
                                                        <div class="row ">
                                                           <div class="col-lg-6 col-md-6 ">
                                                                <label class="text-label">Banner Img5 Upload </label>
                                                                <input type="file"  name="banner_img_5" class="form-control"  accept=".jpg, .jpeg, .png" onchange="preview_image_5(event)">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 mb-2">
                                                                <img id="output_image5"/>
                                                            </div>
                                                        </div>    -->                                             
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
                                        </form>                                        
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

<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
 <script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>


<script type='text/javascript'>
var baseURL= "<?php echo base_url();?>";

//add banner dynamic
$(document).ready(function(){  
      var i=1;  
        $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<div id="row_remove'+i+'"><div class="row"><div class="col-lg-6 col-md-6 ">  <label class="text-label"> Property Name </label>  <input type="text"  name="name[]" class="form-control"  > </div> <div class="col-lg-6 col-md-6 ">  <label class="text-label">Location </label>  <input type="text"  name="location[]" class="form-control"  > </div><div class="col-lg-6 col-md-6 ">  <label class="text-label">Title </label>  <input type="text"  name="title[]" class="form-control"  > </div></div><div class="row"> <div class="col-lg-6 col-md-6 ">   <label class="text-label">Banner Img Upload </label>  <input type="file"  name="web_img[]" class="form-control"  accept=".jpg, .jpeg, .png, .webp" ></div> <div class="col-lg-6 col-md-6 ">   <label class="text-label">Mobile Img Upload </label>  <input type="file"  name="mobile_img[]" class="form-control"  accept=".jpg, .jpeg, .png, .webp" ></div></div><div class="text-right"><hr><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div>');        
                                            
        });  
        $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row_remove'+button_id+'').remove();  
        }); 
});  

//banner img1 preview
function preview_image_1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
//banner img2 preview
function preview_image_2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
//banner img3 preview
function preview_image_3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
//banner img4 preview
function preview_image_4(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image4');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

//banner img5 preview
function preview_image_5(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image5');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>
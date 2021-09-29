
<?php $this->load->view('layout/admin_css'); ?>
<link href="<?php echo base_url('assets/admin/plugins/datatables/datatables.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/admin/plugins/datatables/datatables.min.css')?>" rel="stylesheet" type="text/css" />

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
		
		<?php $this->load->view('layout/sidebar'); ?>
	
        <?php $this->load->view('layout/headerbar'); ?>
     
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="nav menu-tabs">					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#dashboard">
							<svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span style="font-size: 12px;text-align: center;">home  </span>
						</a>
					</li>					
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#apps">
							<svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span style="font-size: 12px;text-align: center;">User  </span>
						</a>
					</li>					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#forms">
							<svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg>
                            <span style="font-size: 12px;text-align: center;">Report  </span>
						</a>
					</li>					
				</ul>
			</div>
			<a href="<?php echo base_url('super_admin/Logout') ?>" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title"  style="font-size: 27px;">View  User Details</h4>
									</div>
									<div class="card-body">
									   
                                    	<div>
                                        
                                        <section>
                                           <div class="table-responsive">
                                    <table  id="table_view" class="table table-striped table-bordered">
                                         <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully deleted
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>    
                                                <th>Title</th>                              
                                                <th>Thumb Img</th>                                     
                                                <th>Create At</th>                                               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <?php 
                                                        $i=1;
                                                        foreach ($details as $detail) 
                                                        {                                                
                                                ?>
                                            <tr>                                               
                                                <td>
                                                   <?php echo $i; ?>
                                                </td>
                                                <td><?php echo $detail->title; ?> </td>
                                               
                                                <td>                                              
                                                    <img style="width:100px; height: 65px;"  src="<?php echo base_url('assets/admin/uploads/press/thumb_img/').$detail->thumb_img?>" >
                                                </td>                                                                               
                                                <td>
                                                   <?php 
                                                         $timestamp = strtotime($detail->press_date);
                                                         echo date('d-m-Y', $timestamp);
                                                    ?>
                                                </td>                                               

                                                <td>                                              
                                                    <div class="d-flex"> 
                                                        <form  action="<?php echo base_url('admin/edit_press_by_id/'.$detail->press_id); ?>" method="POST" style="float: left;"> 
                                                            <button class="btn btn-primary shadow btn-xs sharp mr-1" >
                                                                   <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </form>
                                                        <form class="delete_id" action="" method="POST" style="float: left;">
                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        
                                                    </div>
                                                </td>
                                            </tr> 

                                            <?php $i++; } ?>     <!--   here end foreach   -->                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                        </section>                                        
                                       
                                        </div>
                                        
                                
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
    
 <?php $this->load->view('layout/admin_js'); ?> 



<script src="<?php echo base_url('assets/admin/plugins/datatables/datatables.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables/datatables.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/bootbox.js')?>"></script>

<script>
  var baseURL= "<?php echo base_url();?>";
// show table inbuild function like pagination 
   $(document).ready(function() {
    $('#table_view').DataTable();
} ); 

// delete blog details  form submit
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

   $(document).on("submit", ".delete_id", function(e){     
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

      bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {

                    $.ajax({

                            url : url,
                            context:this,
                            type: 'POST',                            
                            processData: false,
                            contentType: false,
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                 $('#success_msg').show();
                                 window.location.href = "<?php echo base_url('admin/get_blog_details'); ?>";
                                                                   
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            }

                        });
                }
            });
    }); 
   
});


  

</script>

</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>
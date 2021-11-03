


//login form 

    $(document).on("submit", "#login", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {              
                                    user_name: "required",                                  
                                    password: "required",                                                                           
                                 },

                          messages: {                          
                                 
                                  user_name: {
                                      required: "Required ", 
                                  },                                
                                  password: {
                                      required: "Required", 
                                  }, 
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url : baseURL+'Login/login_auth',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
              
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                                
                                window.location.href = baseURL+'Admin/dashboard';                           
                            }  
                               
                            else 
                            {                            
                                $("#error").show();
                            }          
                        }
               });
        }
     

 });
  
 //add main banner form  
  $(document).on("submit", "#banner_form", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {                           
                                    banner_img_1: "required",
                                    banner_img_2: "required",
                                    banner_img_3: "required",                                                      
                                 },

                          messages: {                           
                                  banner_img_1: {
                                      required: "Required ", 
                                  },
                                  banner_img_2: {
                                      required: "Required ", 
                                  }, 
                                  banner_img_3: {
                                      required: "Required ", 
                                  },                                  
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url :baseURL+'Banner/insert_banner',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#success_msg').show(); 
                                $('#banner_form').trigger("reset");                                                         
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });
  // banner edit form 
    $(document).on("submit", "#banner_update", function(e){
        e.preventDefault();        
       
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'Banner/update_banner',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#success_msg').show();                                                          
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
          

 });
//delete main banner
$(document).on('click', '.banner_remove', function(){  
           
           var id = $(this).attr("data-id"); 
           
        bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {
                    $.ajax({
                            url : baseURL + 'banner/delete_banner',                          
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
                                   window.location.href = baseURL+'banner/banner_details';  
                                    
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            },
                           
                    });
                }
        });
       
          
    });      
//property  banner updated form 
    $(document).on("submit", "#property_banner_update", function(e){
        e.preventDefault();        
       
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :url,
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#success_msg').show();                                                          
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
          

 });
//add blog insert form 
    $(document).on("submit", "#blog_form", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    blog_title: "required",
                                    blog_author: "required",
                                    blog_date: "required",
                                    banner_img: "required",
                                    thumb_img: "required", 
                                    editor: "required",                                                                           
                                 },
                          messages: {                           
                                  blog_title: {
                                      required: "Required ", 
                                  },
                                  blog_author: {
                                      required: "Required ", 
                                  }, 
                                  blog_date: {
                                      required: "Required ", 
                                  }, 
                                  banner_img: {
                                      required: "Required ", 
                                  }, 
                                  thumb_img: {
                                      required: "Required", 
                                  }, 
                                  editor: {
                                      required: "Required", 
                                  },                                                                                                                       
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/insert_blog',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#success_msg').show();                                                          
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });

// blog edit form 
    $(document).on("submit", "#blog_edit", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    blog_title: "required",
                                    blog_author: "required",
                                    blog_date: "required",                                    
                                    editor: "required",                                                                           
                                 },
                          messages: {                           
                                  blog_title: {
                                      required: "Required ", 
                                  },
                                  blog_author: {
                                      required: "Required ", 
                                  }, 
                                  blog_date: {
                                      required: "Required ", 
                                  },                                
                                  editor: {
                                      required: "Required", 
                                  },                                                                                                                       
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/update_blog',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#success_msg').show(); 
                                window.location.href = baseURL+'Admin/blog_details';                                                           
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });


//insert property

    $(document).on("submit", "#property_form", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    project_type: "required",
                                    property_title: "required",
                                    property_title: "required",                                    
                                    possession: "required",                                                                           
                                 },
                          messages: {                           
                                  project_type: {
                                      required: "Required ", 
                                  },
                                  property_title: {
                                      required: "Required ", 
                                  }, 
                                  property_title: {
                                      required: "Required ", 
                                  },                                
                                  possession: {
                                      required: "Required", 
                                  },                                                                                                                       
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/insert_property',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#property_form').trigger("reset");
                                $('#success_msg').show();
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });

//Edit property form   
 $(document).on("submit", "#property_edit_form", function(e){
    e.preventDefault();
     $(this).validate({ 
                      rules: {                           
                                project_type: "required",
                                property_title: "required",
                                property_title: "required",                                    
                                possession: "required",                                                                           
                             },
                      messages: {                           
                              project_type: {
                                  required: "Required ", 
                              },
                              property_title: {
                                  required: "Required ", 
                              }, 
                              property_title: {
                                  required: "Required ", 
                              },                                
                              possession: {
                                  required: "Required", 
                              },                                                                                                                       
                         },

                       }); 
if($(this).valid())
    {     
            var url = $(this).attr('action');
            var formdata = new FormData(this);              
            $.ajax({
                    url :baseURL+'admin/edit_property_overview',
                    method: 'POST',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },
                    beforeSend: function()
                    {
                                  
                    },                        
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {                             
                            $('#property_form').trigger("reset");
                            $('#success_msg').show();
                        }   
                        else 
                        {                            
                           $('#error_msg').show();
                        }          
                    }
           });
    }     

});

//faq edit 
$(document).on("submit", "#faq_edit_form", function(e){
    e.preventDefault();
            var url = $(this).attr('action');
            var formdata = new FormData(this);              
            $.ajax({
                    url :baseURL+'admin/edit_property_faq',
                    method: 'POST',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },
                    beforeSend: function()
                    {
                                  
                    },                        
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {                             
                            $('#faq_edit_form').trigger("reset");
                            $('#success_msg').show();
                        }   
                        else 
                        {                            
                           $('#error_msg').show();
                        }          
                    }
           });
    
    });

//Floor plan edit 
$(document).on("submit", "#floor_edit_form", function(e){
    e.preventDefault();
            var url = $(this).attr('action');
            var formdata = new FormData(this);              
            $.ajax({
                    url :baseURL+'admin/edit_property_floor_plan',
                    method: 'POST',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },
                    beforeSend: function()
                    {
                                  
                    },                        
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {                             
                            $('#faq_edit_form').trigger("reset");
                            $('#success_msg').show();
                        }   
                        else 
                        {                            
                           $('#error_msg').show();
                        }          
                    }
           });
    
    });  
//delete floor plan
$(document).on('click', '.floorplan_remove', function(){  
           
           var id = $(this).attr("data-id"); 
           
        bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {
                    $.ajax({
                            url : baseURL + 'admin/delete_floorplan',                          
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
       
          
    });      
//Specification edit 
$(document).on("submit", "#specification_edit_form", function(e){
e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);              
        $.ajax({
                url :baseURL+'admin/edit_property_specification',
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                beforeSend: function()
                {
                              
                },                        
                success: function(response)
                {
                   if(response.status == 'success')
                   {                             
                        $('#property_form').trigger("reset");
                        $('#success_msg').show();
                    }   
                    else 
                    {                            
                       $('#error_msg').show();
                    }          
                }
            });

});

//feature edit 
$(document).on("submit", "#features_edit_form", function(e){
    e.preventDefault();
            var url = $(this).attr('action');
            var formdata = new FormData(this);              
            $.ajax({
                    url :baseURL+'admin/edit_property_feature',
                    method: 'POST',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    error: function(xhr,status,error)
                    {   
                        alert(xhr.responseText);
                    },
                    beforeSend: function()
                    {
                                  
                    },                        
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {                             
                            $('#success_msg').show();
                            window.onload = timedRefresh(5000);     
                        }   
                        else 
                        {                            
                           $('#error_msg').show();
                        }          
                    }
           });
    
    });
// delete property 

$(document).ready(function(){
   $(document).on("submit", ".delete_property_id", function(e){     
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
                                 window.location.href = baseURL+'Admin/property_details';
                                                                   
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
$(document).on('click', '.property_banner_remove', function(){  
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


//insert press

    $(document).on("submit", "#press_form", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    press_title: "required",
                                    press_date: "required",
                                    thumb_img: "required",                                    
                                                                                                             
                                 },
                          messages: {                           
                                  press_title: {
                                      required: "Required ", 
                                  },
                                  press_date: {
                                      required: "Required ", 
                                  }, 
                                  thumb_img: {
                                      required: "Required ", 
                                  },                                
                                                                                                                                                       
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/insert_press',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                               $('#press_form').trigger("reset");
                                $('#success_msg').show();
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });

// features form     
 $(document).on("submit", "#features_add_form", function(e){
        e.preventDefault();
        $(this).validate({ 
                        rules: {                           
                                    features: "required",
                                },
                        messages: {                           
                                features: {
                                      required: "Required ", 
                                },
                            },
                        }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/insert_feature',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                               $('#features_add_form').trigger("reset");
                                $('#success_msg').show();
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });

// press edit form 
    $(document).on("submit", "#press_edit", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    press_title: "required",
                                    press_date: "required",
                                                                  
                                                                                                            
                                 },
                          messages: {                           
                                  press_title: {
                                      required: "Required ", 
                                  },
                                  press_date: {
                                      required: "Required ", 
                                  },
                                                                                                                                                        
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/update_press',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#success_msg').show(); 
                                window.location.href = baseURL+'Admin/press_details';                                                           
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });



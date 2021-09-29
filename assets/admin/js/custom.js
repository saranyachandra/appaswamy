


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
                        url :baseURL+'admin/insert_banner',
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
  //add banner edit form 
    $(document).on("submit", "#banner_update", function(e){
        e.preventDefault();        
       
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/update_banner',
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

//add blog edit form 
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
                                window.location.href = baseURL+'Admin/get_blog_details';                                                           
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


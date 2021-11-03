//login form 

    $(document).on("submit", "#contactForm", function(e){

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
  
// location filter residential   
$(document).on('change', '#filter_location', function(){

    var name = document.getElementById('filter_location').value;
    
    $.ajax({

            url : baseURL+'home/location_filter',                           
            type: 'POST',
            data:  {name: name},
            dataType:'json',
            error: function(xhr,status,error)
            {   
                alert(xhr.responseText);
            },              
                            
            success: function(response)
            {
                if(response.status == 'success')
                {
                 var dataItems = "";               
                 $property = response.msg ;                 
                
                    $.each($property, function(key,val){
                        var formatDate= val.possession;
                        var timestamp = moment(formatDate).format('MMMM Y');    
                                             
                        dataItems += '<div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">';
                        dataItems += '<div class="projects-item1">';
                        dataItems += '<div class="img-hol">';
                        dataItems += '<a href= '+baseURL+'home/property_details/'+val.property_id+'  > ';
                        dataItems += '<img src=assets/admin/uploads/property_thumb/'+val.thumb_img+' class="img-fluid">';
                        dataItems += '<div class="project-title1">';
                        dataItems += '<h3 class="text-white"> '+val.name+'</h3>';
                        dataItems +='<p class="text-white"><img src="assets/web/images/location@2x.webp"> &nbsp; '+val.title+' ></p>';
                        dataItems += '</div>';
                        dataItems +='</a>';
                        dataItems += '</div>';
                        dataItems +=  '<div class="projectshortdetails">'  
                        dataItems +=    ' <ul>'
                        dataItems +=    '<li class="app"><span>Apartments</span><br>';
                        dataItems +=    ' '+val.apartment_type+' BHK</li>';
                        dataItems +=    '<li class="Possession"><span>Possession</span><br>';
                        dataItems +=    'From '+timestamp+'</li>';
                        dataItems +=    '<li class="price"><span>Starting from</span><br>';
                        dataItems +=    ' '+val.price+' Onwards*</li>'
                        dataItems +=    '<li class="status"><span>Project Status</span><br>';
                        dataItems +=    ' '+val.property_status+'</li>';
                        dataItems +=    '</ul>';
                        dataItems +=    '<div class="clearfix"></div>';
                        dataItems +=    ' </div>';
                        dataItems +=    '</div>';
                        dataItems +=    '</div>';
                        
                    });
                    
                    $('#display').html(dataItems);
                                                                   
                }else 
                {                    
                    Swal.fire('Something went wrong...');    
                }
            }

        });

});

// location filter commercial   
$(document).on('change', '#filter_location', function(){

    var name = document.getElementById('filter_location').value;
    
    $.ajax({

            url : baseURL+'home/location_filter',                           
            type: 'POST',
            data:  {name: name},
            dataType:'json',
            error: function(xhr,status,error)
            {   
                alert(xhr.responseText);
            },              
                            
            success: function(response)
            {
                if(response.status == 'success')
                {
                 var dataItems = "";               
                 $property = response.msg ;                 
                
                    $.each($property, function(key,val){
                        var formatDate= val.possession;
                        var timestamp = moment(formatDate).format('MMMM Y');    
                                             
                        dataItems += '<div class="col-xxl-4 col-xl-4 col-lg-4  col-sm-6 col-xs-12">';
                        dataItems += '<div class="projects-item1">';
                        dataItems += '<div class="img-hol">';
                        dataItems += '<a href= '+baseURL+'home/property_details/'+val.property_id+'  > ';
                        dataItems += '<img src=assets/admin/uploads/property_thumb/'+val.thumb_img+' class="img-fluid">';
                        dataItems += '<div class="project-title1">';
                        dataItems += '<h3 class="text-white"> '+val.name+'</h3>';
                        dataItems +='<p class="text-white"><img src="assets/web/images/location@2x.webp"> &nbsp; '+val.title+' ></p>';
                        dataItems += '</div>';
                        dataItems +=   '</a>';
                        dataItems += '</div>';
                        dataItems +=  '<div class="projectshortdetails">'  
                        dataItems +=    ' <ul>'
                        dataItems +=    '<li class="app"><span>Apartments</span><br>';
                        dataItems +=    ' '+val.apartment_type+' BHK</li>';
                        dataItems +=    '<li class="Possession"><span>Possession</span><br>';
                        dataItems +=    'From '+timestamp+'</li>';
                        dataItems +=    '<li class="price"><span>Starting from</span><br>';
                        dataItems +=    ' '+val.price+' Onwards*</li>'
                        dataItems +=    '<li class="status"><span>Project Status</span><br>';
                        dataItems +=    ' '+val.property_status+'</li>';
                        dataItems +=    '</ul>';
                        dataItems +=    '<div class="clearfix"></div>';
                        dataItems +=    ' </div>';
                        dataItems +=    '</div>';
                        dataItems +=    '</div>';
                        
                    });
                    
                    $('#display').html(dataItems);
                                                                   
                }else 
                {                    
                    Swal.fire('Something went wrong...');    
                }
            }

        });

});

 //hide source code

 /*   function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x","u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }
 */
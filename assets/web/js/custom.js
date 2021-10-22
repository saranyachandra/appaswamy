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
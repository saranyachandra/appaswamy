(function($) {
    "use strict";

    $(document).on('ready', function() {

      

      
$('#hamburger, .side-menu .menu-toggle').on('click', function() {            
            $('.mobile-nav').addClass('show');
            $('.overlay').addClass('active');
        });

        $('.close-nav').on('click', function() {            
            $('.mobile-nav').removeClass('show');            
            $('.overlay').removeClass('active');          
        });
        $("#mobile-menu").metisMenu();


       

    }); // end document ready function
})(jQuery); // End jQuery

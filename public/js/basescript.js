
$(document).ready(function() {
    
    var height = $('#navbarLayout').height();
    var scrollTop = $(window).scrollTop();

    var path = window.location.pathname;
    var pagename = path;
    var windowWidth = $(window).width();

   

      //Navbar active view

        if(pagename == '/'){

            $('.nav-item').removeClass('active');
            $('.home').addClass('active');

        }else if(pagename == '/nosotros'){
            $('.nav-item').removeClass('active');
            $('.nosotros').addClass('active');

        }else if(pagename == '/aseo' || pagename == '/financiero'  || pagename == '/rrhh'  || pagename == '/informatico' ){
            $('.nav-item').removeClass('active');
            // $('.services').addClass('active');

        }else if(pagename == '/contacto'){
            $('.nav-item').removeClass('active');
            $('.contact').addClass('active');

        }
    
  
        //change color transparent to solid

        if($(this).scrollTop() > 10) { 
            $('.navbar').addClass('solid-nav');
            $('.navbar-brand').css('color','#fff');
            $('.nav-link').css('color','#fff'); 
            $('.fa.fa-navicon').css('color','#fff');
        } else {
            $('.navbar').removeClass('solid-nav');
            $('.navbar-brand').css('color','#fff');
            $('.nav-link').css('color','#fff'); 
            $('.fa.fa-navicon').css('color','#fff');
        }

        $(window).scroll(function() {

            if($(this).scrollTop() > 10) { 
                $('#logo').addClass('whitelogo');
                $('.navbar').addClass('solid-nav');
                $('.navbar-brand').css('color','#fff');
                $('.nav-link').css('color','#fff'); 
                $('.fa.fa-navicon').css('color','#fff');
            } else {
                $('#logo').removeClass('whitelogo');
                $('.navbar').removeClass('solid-nav');
                $('.navbar-brand').css('color','#fff');
                $('.nav-link').css('color','#fff'); 
                $('.fa.fa-navicon').css('color','#fff');
            }
        

        });
    
});



    
//$('#logo').addClass('whitelogo');
//$('#logo').removeClass('whitelogo');

    
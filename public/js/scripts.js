 $(document).ready(function(){

  $('#phoneinput').on('input', function (event) { 
    this.value = this.value.replace(/[^0-9]/g, '');
    });
    
  var path = window.location.pathname;
  //var pagename = path.split("/").pop();
  //var pagename =  page.split(".html").pop();
  var pagename = path;

  if(pagename != '/'){
    $('.navbar-inverse').css('background','rgb(246,246,246)');
    $('.navbar-inverse').css('background','linear-gradient(90deg, rgba(246,246,246,1) 0%, rgba(255,255,255,1) 50%, rgba(246,246,246,1) 100%)');
    $('.navbar-inverse .navbar-brand').css('color','#333');
    $('.navbar-inverse').css('box-shadow','0px 0px 3px grey');
    $('.navbar-inverse .navbar-nav > li > a').css('color','#333');
    $('.navbar-inverse .navbar-nav > li > a').css('text-shadow','none');
    $('.info').css('background','#fff');
    $('.info').css('color','#333');
    $('.info').css('font-weight','bold');
    $('.info').css('box-shadow','rgba(0, 0, 0, 0.2) 0px 0px 1px');  
    $('.info').css('background','rgb(246,246,246)');
    $('.info').css('background','linear-gradient(90deg, rgba(246,246,246,1) 0%, rgba(255,255,255,1) 50%, rgba(246,246,246,1) 100%)');
    $(".github img").attr("src","img/github2.png");
    $(".dev").css('color','#2F93D6');

    
    if(pagename == '/about'){
      $('.elemento').removeClass('activo');
      $('.vista2').addClass('activo');
      $('.info').css('position','relative');
   
    }
    if(pagename == '/services'){
      $('.elemento').removeClass('activo');
      $('.vista3').addClass('activo');
      $('.info').css('position','relative');
      
    }
    if(pagename == '/portfolio'){
      $('.elemento').removeClass('activo');
      $('.vista4').addClass('activo');
      $('.info').css('position','sticky');
 
    }
    if(pagename == '/contact'){
      $('.elemento').removeClass('activo');
      $('.vista5').addClass('activo');
      $('.info').css('position','relative');
      
      var planname = "";
      var subjectinput = document.getElementById('subjectinput');
      var idplanSession = sessionStorage.getItem('idplanweb');
      if(idplanSession==1){

        planname = 'Solicitud Paquete Basico';

      }else if(idplanSession==2){

        planname = 'Solicitud Paquete PYME';

      }else if(idplanSession==3){

        planname = 'Solicitud Paquete Tienda Virtual';

      }
      subjectinput.value = planname;
    
    }

    if(pagename == '/plandetails'){
    
      $('.elemento').removeClass('activo');
      $('.vista3').addClass('activo');
      $('.info').css('position','relative');
   
    }

    

  }else{

    // $('.navbar-inverse .navbar-toggle').css('border','none');
    // $('#header').css('background','#333'); 
    // $('.navbar-toggle').css('background-color','#333!important');
  }
 

});

function openpagebox(name){
  
  if(name == 'nando'){
    $('.modal-image-portfolio').attr('src','img/pastelerianando.jpg');
    $('.modal-image-portfolio').attr('alt','pastelerianando');
    $('.modal-box-title').html("Pastelería Nando");
    $('.url-web').html("url: <a target='_blank' href='https://www.pastelerianando.cl'>https://www.pastelerianando.cl</a>");
  }else if(name == 'inacap'){
    $('.modal-image-portfolio').attr('src','img/plataformainacap.jpg');
    $('.modal-image-portfolio').attr('alt','plataformainacap');
    $('.modal-box-title').html("Plataforma Inacap (En desarrollo)");
    $('.url-web').html('');
  }else if(name == 'blogdev'){
    $('.modal-image-portfolio').attr('src','img/blogdev.jpg');
    $('.modal-image-portfolio').attr('alt','blogdev');
    $('.modal-box-title').html("Blog Dev");
    $('.url-web').html('');
  }else if(name == 'speedo'){
    $('.modal-image-portfolio').attr('src','img/speedomart.jpg');
    $('.modal-image-portfolio').attr('alt','speedomart');
    $('.modal-box-title').html("SpeedoMart");
    $('.url-web').html('');
  }

  $('#modalwebpage').modal();
}
  
 

jQuery(function() {
  jQuery('a[href^="#services-webs"]').click(function() {
     var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {    
        jQuery('html,body').animate({
          scrollTop: target.offset().top-70
        }, 1000);
        return false;
      }
  });
});



jQuery(function() {
  jQuery('#viewplan[href^="#plans-webs"]').click(function() {
     var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {    
        jQuery('html,body').animate({
          scrollTop: target.offset().top-80
        }, 1000);
        return false;
      }
  });
});

 function selectedplan(id){

      sessionStorage.setItem('idplanweb', id);
      window.location.replace('/contact');
}


// function selectedplan(id){

//   // sessionStorage.setItem('idplanweb', id);
//   // window.location.replace('/contact');

//   if(id==1){

//     $('.modal-box-title').html("Paquete Básico");
//     $('.modal-box-title').css('color','#2F93D6');

//   }else if(id==2){
//     $('.modal-box-title').html("Paquete PYME");
//     $('.modal-box-title').css('color','#7d75d9');

//   }else if(id==3){
//     $('.modal-box-title').html("Paquete Tienda Virtual");
//     $('.modal-box-title').css('color','#3BB36B');

//   }

//   $('#modalplanweb').modal();


// }

// function ajaxtest(){

//   var CSRF_TOKEN = document.getElementById("token").value;

//   $.ajax({
//     type:'POST',
//     url:'services',
//     data: { _token: CSRF_TOKEN },
//     success:function(data) {
//        $("#msg").html(data.msg);
//     }
//  });
 
 

// }






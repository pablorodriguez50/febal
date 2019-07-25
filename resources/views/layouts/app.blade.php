<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">
        
        <link rel="stylesheet" href="/fonts/RopaSans-Italic.ttf">
        <link rel="stylesheet" href="/fonts/RopaSans-Regular.ttf">
        <link rel="stylesheet" href="/fonts/eina-01-regular">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d3a5b8f9d1.js"></script>
        
        <link rel="icon" type="image/png" sizes="32x32" href="/image/small_logo.png">

        <title>@yield('title') - Febal Group</title>






    </head>
    <body>
      <!--NAVBAR-->


      <div class="container-full">        
        <nav id="navbarLayout" class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
            <a class="navbar-brand" href="/">
              <img src="/image/full_logo.png" id="logo" width="110" height="50" class="d-inline-block align-top" alt="">
              
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                        <i class="fa fa-navicon"></i>
                  </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                    <li class="home nav-item active">
                      <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nosotros nav-item">
                      <a class="nav-link" href="/nosotros">Nosotros</a>
                  </li>
                    <li class="services nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios <i style="position:absolute; top:9px; right:-5px;" class="fas fa-sort-down"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/aseo">Aseo Industrial</a>
                            <a class="dropdown-item" href="/financiero">Financieros</a>
                            <a class="dropdown-item" href="/rrhh">Recursos Humanos</a>
                            <a class="dropdown-item" href="/informatico">Informatico</a>
                            {{-- <a class="dropdown-item" href="/it-solutions">IT Solutions</a>  --}}
                      </div>
                    </li>
                    
                     <li class="contact nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                  </ul>
                </div>
              </nav>
    </div>

      
        <!--END NAVBAR-->

        

 
        
            @yield('content')
        
         
    </body>
    <footer class="page-footer font-small pt-4 fpic">

            <!-- Footer Links -->
        <div class="container text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

              <!-- Content -->
              <a class="navbar-brand d-none d-lg-inline-block" href="#">
                <a class="navbar-brand" href="/">
                    <img src="/image/full_logo.png" id="logo" width="120" height="59" class="d-inline-block" alt="">
                </a>
               </a>
              <p style="color:white">Febal Group | Servicios Generales para empresas</p>
              <p style="color:white"><i class="fa fa-envelope"></i> info@febalgroup.com</p>
              <p style="color:white"><i class="fa fa-phone"></i> (+569) 96879815</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

              <!-- Links -->
              <h5 class=" text-uppercase mt-3 mb-4" style="color:white">PAGINAS</h5>

              <ul class="list-unstyled">
                <li>
                  <a class="a2" href="/" style="color:white">Inicio</a>
                </li>
                <li>
                  <a class="a2" href="/nosotros" style="color:white">Nosotros</a>
                </li>
                <li>
                  <a class="a2" href="/contacto" style="color:white">Contacto</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

              <!-- Links -->
              <h5 class="text-uppercase mt-3 mb-4" style="color:white">Servicios</h5>

              <ul class="list-unstyled">
                <li>
                  <a class="a2" href="/aseo" style="color:white">Aseo Industrial</a>
                </li>
                <li>
                  <a class="a2" href="/financiero" style="color:white">Financieros</a>
                </li>
                <li>
                  <a class="a2" href="/rrhh"style="color:white">Recursos Humanos</a>
                </li>
                <li>
                  <a class="a2" href="/informatico" style="color:white">Informático</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:white">FOLLOW</h5>

              <ul class="list-unstyled">
                <li>
                  <a class="a2" href="https://www.facebook.com/kinnikuchu" style="color:white">FACEBOOK</a>
                </li>
                <li>
                  <a class="a2" href="https://www.twitter.com/kinnikuchu" style="color:white">TWITTER</a>
                </li>
                <li>
                  <a class="a2" href="https://www.instagram.com/kinnikuchu" style="color:white">INSTAGRAM</a>
                </li>
                <li>
                  <a class="a2" href="https://aminoapps.com/c/dbz/page/user/kinnikuchu3/4pn5_Qrt5fJW6r8Wjd2Rem6mWkMMkBBazZ" style="color:white">DBZ AMINO</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <hr>

            <!-- Footer Elements -->
            <div class="container">
              <!-- Social buttons -->
              <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn-floating btn-fb mx-4" href="https://www.facebook.com/kinnikuchu">
                   <i class="fa fa-facebook-official fa-3x face" aria-hidden="true"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-tw mx-4" href="https://www.twitter.com/kinnikuchu">
                    <i class="fa fa-twitter fa-3x twitter" aria-hidden="true"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-gplus mx-4" href="https://www.youtube.com/kinnikuchu"> 
                    <i class="fa fa-youtube-play fa-3x youtube" aria-hidden="true"> </i>
                  </a>
                </li>
              </ul>
              <!-- Social buttons -->
          
            </div>
            <!-- Footer Elements -->
          
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 footer-font2" style="background: #212b32; color:#e6e6e6; padding-bottom:0 !important;">Copyright © 2019 FEBAL GROUP. Todos los derechos reservados.</div>
               <div class=" footer-copyright text-center py-3 footer-font2" style="background: #212b32; color:#bbbaba; padding-top:0 !important">Website Developed By:
              <a class="footer-font" href="https://www.gamoxion.com">Gamoxion.com</a>
            </div>
            <!-- Copyright -->
          
          </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src='/js/basescript.js'></script>
    <script src="/js/jquery.superslides.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/matinput.js"></script>
    <script src="/js/jquery.animate-enhanced.min.js"></script>





</html>
@extends('layouts.app')
@section('title','Inicio')
 

@section('content') 

<!--BANNER--> 
<div class ="p-0" style="background:#181c1f;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item active">
           <div class="row cover1L m-0">
             <div class="col md-7">
                    <h1 class="coverText">Servicios Generales</h1>
                    <p class="coverPara">Febal Consultores fue creado por profesionales con amplia experiencia en el área de servicios de aseo y venta de insumos</p>
                    
                     </div>
             <div class="col-md-5 ">
                     <img src="/image/full_logo.png" class="coverImage" id="logo" alt="">
             </div>
         </div>
         <!--<img class="d-block w-100" src="/image/banner.jpg" style="height:600px;" alt="First slide">-->
       </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="/image/1.jpg" style="height:600px;" alt="Second slide">
       </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="/image/banner.jpg" style="height:600px;" alt="Third slide">
       </div>
     </div>
     <nav class="slides-navigation">
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="icon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="icon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </nav>
   </div>
 </div>
 <!--END BANNER-->

<div class="row m-0" style="background:#f2f2f2">


    <div class="container">
        <h2 style="text-align:center" class="font-bold"><br>NOSOTROS</h2>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                   <div class="col-md-2"></div>
                 <div class="col-md-8">
                   <p class="font-regu" style="text-align: center">Este equipo humano ha logrado en su trayectoria gran experiencia y conocimiento en plataformas de clase mundial en el ámbito Operativo y de recursos humanos, y todo este conocimiento y experiencia desean colocarlo al servicio de nuestros clientes</p>
                 </div>
                 <div class="col-md-2>"></div>
               </div>
               <br>
               
           </div>
            <div class="col-md-12">
                <div class="card-group">
                    <div class="card" style="background:transparent; border:0; box-shadow:none !important">
                      <i class="card-img-top fa fa-globe fa-3x text-center"  alt="Card image cap" style="color:#fd9f00"></i>
                      <div class="card-body">
                        <h5 class="card-title text-center">Misión</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                      </div>
                    </div>
                    <div class="card" style="background:transparent;border:0; box-shadow:none !important">
                        <i class="card-img-top fa fa-eye fa-3x text-center"  alt="Card image cap" style="color:#679dff"></i>
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center">Visión</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

                      </div>
                    </div>
                    <div class="card" style="background:transparent;border:0; box-shadow:none !important">
                        <i class="card-img-top fa fa fa-heart fa-3x text-center"  alt="Card image cap" style="color:red"></i>
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center">Valores</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <br>
    </div>
</div>
<div class="row designbar m-0">
        
    <div class="shapel"></div>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <p class="subtitle">SERVICIOS</p>
        
        <div class="row m-0">
            <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="/image/cleaning.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title font-bold text-center"><i class="fa fa-tint" style="color:#679dff; padding-right:5px"></i> Aseo Industrial</h5>
                    <p class="card-text">Aseo Industrial para todo tipo de empresa</p>
                    <p class="card-text" style="text-align:end"><small class="text-muted">Ver mas</small></p>
                  </div>
                  <a href="/aseo" class="stretched-link"></a>
                </div>
                <div class="card">
                  <img class="card-img-top" src="/image/finance.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title font-bold text-center"><i class="fa fa-money" style="color:green; padding-right:5px"></i> Financieros</h5>
                    <p class="card-text">Aseo Industrial de la mejor calidad.</p>
                    <p class="card-text" style="text-align:end"><small class="text-muted">Last updated 3 mins ago</small></p>
                  
                    <a href="/financiero" class="stretched-link"></a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="/image/hr.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title font-bold text-center"><i class="fa fa-users" style="color:#fd9f00; padding-right:5px"></i> Recursos Humanos</h5>
                    <p class="card-text">Aseo Industrial de la mejor calidad.</p>
                    <p class="card-text" style="text-align:end"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="/rrhh" class="stretched-link"></a>
                  </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="/image/it.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title font-bold"><i class="fa fa-laptop" style="color:#679dff; padding-right:5px"></i> Informatico</h5>
                      <p class="card-text">Aseo Industrial de la mejor calidad.</p>
                      <p class="card-text" style="text-align:end"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <a href="/informatico" class="stretched-link"></a>
                  </div>
                  
              </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>



<div class="row m-0 cal-ser" style="padding:5em;">
        

      <br>
      
      <div class="row">
          <div class="col-md-6">
              
              <div class="row m-0">
                  <div class="col-md-12">
                    <img src="/image/cleaning2.jpg" style="width:50%; height:100%; float:left" class="q-imgl1">
                    
                    <img src="/image/finance2.jpg" style="width:50%; height:100%; float:left" class="q-imgr1">
                  </div>
                  <div class="col-md-12">
                      <img src="/image/hr2.jpg" style="width:50%; height:100%; float:left" class="q-imgl2">
                      <img src="/image/info2.jpeg" style="width:50%; height:100%; float:left" class="q-imgr2">
                  </div>
              </div>
              
  
          </div>
        <div class="col-md-6" ><h1 class="h1c" style="text-align:center">Calidad en Servicios</h1>
          <p class="pc" style="text-align:center">Thousands of amazing companies around the world build with Ionic. Join the ranks with Ionic Enterprise Edition for the stability and world-class support needed to build cross-platform apps with confidence.</p>
          
            <img src="/image/satis.jpg" style="width:100%">
          
        </div>
        
      </div>           



      <br>

</div>  

<div class="row m-0" style="background:#f2f2f2">


    <div class="container">
        <br>
        <br>
        <h2 style="text-align:center" class="font-bold"><br>Nuestros Clientes</h2>
        <br>
        <div class="row">
            <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <p class="font-regu" style="text-align: center">Este equipo humano ha logrado en su trayectoria gran experiencia y conocimiento en plataformas de clase mundial en el ámbito Operativo y de recursos humanos, y todo este conocimiento y experiencia desean colocarlo al servicio de nuestros clientes</p>
                  </div>
                  <div class="col-md-2>"></div>
                </div>
                <br>
                
            </div>
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top" src="/image/c1.jpg" alt="Card image cap">
                      <div class="card-body">
                          <p class="card-text">Aseo Industrial para todo tipo de empresa</p>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="/image/c2jpg.jpg" alt="Card image cap">
                      <div class="card-body">
                          <p class="card-text">Aseo Industrial para todo tipo de empresa</p>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="/image/c3.jpg" alt="Card image cap">
                      <div class="card-body">
                          <p class="card-text">Aseo Industrial para todo tipo de empresa</p>
                      </div>
                    </div>
                    <div class="card text-center">
                        <img class="card-img-top" src="/image/c4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Aseo Industrial para todo tipo de empresa</p>
                        </div>
                      </div>
                  </div>

            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>


<div class="row m-0 designbar">
    <div class="shapel"></div>
  <div class="container">
      
      <div class="row m-0">
          <div class="col-md-12 p-0"> <h1 class="h1-ad b-1" style="color:black;">COTICE CON NOSOTROS</h1> </div>
          <div class="col-md-3 p-0"></div>
          <div class="col-md-4" >
                  
                  <a href="/contacto" class="btn btn-primary coverBtn">
                    Contacto <i class="fa fa-arrow-circle-right"width="16"></i></a>
                    </div>
                  
          </div>
          <div class="col-md-3"></div>
                            
      </div>
  </div>
</div>

@endsection
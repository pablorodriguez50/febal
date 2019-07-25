@extends('layouts.app')
@section('title','Servicio Aseo Industrial')
 

@section('content') 

    <div class="col-md-12 m-0 p-0 games-banner">  
        <video autoplay muted loop id="myVideo" >
            <source src="/image/clean2.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>
        <div class="content">
                
            <div class="col-md-12">
                <h1 class="fontp">Aseo Industrial</h1>
                <p class="fontp2">Calidad en limpieza para su negocio</p>
                <button onclick="location.href='/contacto';" style="font-size:15px;" class="btn-details-transparent" type="submit"><i class="fa fa-chevron-right"></i>  Cotiza ahora</button>
            </div>
        </div>
    </div>


    <section id="up-section" style="background:white">
            <div class="container">
                <div class="row m-0" style="padding-top:2em; padding-bottom:5em;">
                    <div class="col-md-12 mx-auto">
                        <h1 class="h1-aseo" style="text-align:center">Como operamos</h1>
                        <p style="text-align:center">En Febal Group nos especializamos en una serie de servicios de aseo para todo tipo de empresa, ya sea pequeña o grande.</p>
                        

                        <div class="card-deck" style="padding-top:2em">
                                <div class="card" style="box-shadow:none; border:none">

                                        <div class="card-body">
                                                <h5 class="card-title font-bold " style="font-size:16px"> Perfil de nuestros Colaboradores</h5>
                                          <p class="card-text" style="font-size:14px">Con el fin de mantener un perfil homogéneo en nuestros colaboradores se realiza un proceso de selección mediante una comparación y un proceso de reclutamiento</p>
                                        </div>
                                </div>
                                <div class="card" style="box-shadow:none; border:none">

                                        <div class="card-body">
                                          <h5 class="card-title font-bold" style="font-size:16px">Plan de Trabajo</h5>
                                          <p class="card-text" style="font-size:14px">Realizamos un plan que nos permite ordenar y sistematizar información relevante para realizar un trabajo según las necesidades de cada empresa, ordenando el recurso humano, material y tecnológico disponible.</p>
                                        </div>
                                </div>
                                <div class="card" style="box-shadow:none; border:none">

                                        <div class="card-body">
                                          <h5 class="card-title font-bold" style="font-size:16px">Sistema de Post Venta</h5>
                                          <p class="card-text" style="font-size:14px">Establecemos un compromiso con el cliente que trascienda al momento de la contratación del servicio, respaldando su decisión con una asistencia continua.</p>
                                        </div>
                                </div>                                 
                        </div>

                        <div class="card-deck" style="padding-top:2em">
                            <div class="card" style="box-shadow:none; border:none">

                                    <div class="card-body">
                                    <h5 class="card-title font-bold" style="font-size:16px">Administrador de contrato</h5>
                                    <p class="card-text" style="font-size:14px">Con el fin de brindar un servicio de calidad hemos desarrollado un sistema operativo que nos permite mantener una constante fiscalización, cada instalación cuenta con el apoyo directo de un administrador de contrato que se encarga del correcto desarrollo operacional del servicio, teniendo un control de asistencia y solicitudes del cliente.</p>
                                    </div>
                            </div>
                            <div class="card" style="box-shadow:none; border:none">

                                    <div class="card-body">
                                    <h5 class="card-title font-bold" style="font-size:16px">Prevencion de Riesgos</h5>
                                    <p class="card-text" style="font-size:14px">Considerando que es una labor permanente, dinámica y planificada, es que hemos adoptado como uno de nuestros principios básicos y objetivos fundamentales. Tener adecuadas condiciones de salud y seguridad en el trabajo en especial mediante el control o la eliminación de los riesgos laborales y el cumplimiento de la normativa legal vigente.</p>
                                    </div>
                            </div>
                            <div class="card" style="box-shadow:none; border:none">

                                    <div class="card-body">
                                    <h5 class="card-title font-bold" style="font-size:16px">Reportes de Supervisión </h5>
                                    <p class="card-text" style="font-size:14px">Dentro de las obligaciones que tienen FEBAL es generar un reporte por cada instalación dejando evidencia de cualquier detalle que sea necesario corregir.</p>
                                    </div>
                            </div>
                        </div>
        </section>
        
    
        <section id="services" style="background:white">
            <div class="container">
                    <hr>
                <div class="row m-0" style="padding-bottom:3em;">
                        <h1 class="h1-aseo">Servicios</h1>
                        <div class="card-deck" style="padding-top:2em">
                                <div class="card">
                                  <img class="card-img-top" src="/image/indus.jpg" alt="Card image cap" style="height:200px">
                                  <div class="card-body">
                                    <h6 class="card-title text-center">Aseo Industrial</h6>
                                  </div>
                                </div>
                                <div class="card">
                                  <img class="card-img-top" src="/image/clinic.jpg" alt="Card image cap" style="height:200px">
                                  <div class="card-body">
                                    <h6 class="card-title text-center">Aseo Clínico</h6>
                                  
                                  </div>
                                </div>
                                <div class="card">
                                  <img class="card-img-top" src="/image/cleaning3.jpg" alt="Card image cap" style="height:200px">
                                  <div class="card-body">
                                    <h6 class="card-title text-center">Servicios Generales</h6>
                                  </div>
                                </div>
                                <div class="card text-center">
                                    <img class="card-img-top" src="/image/bode.jpg" alt="Card image cap" style="height:200px">
                                    <div class="card-body">
                                      <h6 class="card-title ">Aseo de Bodegas</h6>
                                    </div>
                                  </div>
                                  
                        </div>
                    </div>    
                </div>
            </div>
    </section>
    <section id="mid-section" style="background:#f2f2f2; padding-bottom:3em;">
        <div class="container">
                <div class="row m-0">
                    
                        <div class="col-md-6" style="margin-top:2em; background:white; border-bottom: solid 3px #acacac">
                            <h1 class="h1-aseo">Aseo Industrial</h1>
                            <p class="p-mision">Since 1974, the company’s mission has been to add value to the activities and businesses of our customers and drive their growth through a better use of information technology while at the same time building long-term relations where we intimately understand their everyday work and development.</p>
                        </div>
                        <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                            <img src="/image/indus.jpg" style="width:100%; height:100%;">
                        </div>
                        </div>
        </div>
    </section>

    <section id="mid-section" style="background:#fffff; padding-bottom:3em;">
            <div class="container">
                    <div class="row m-0">
                        
                            <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                                    <img src="/image/clinic.jpg" style="width:100%; height:100%;">
                            </div>

                            <div class="col-md-6" style="margin-top:2em; background:white; border-bottom: solid 3px #acacac">
                                <h1 class="h1-aseo">Aseo Clinico</h1>
                                <p class="p-mision">Since 1974, the company’s mission has been to add value to the activities and businesses of our customers and drive their growth through a better use of information technology while at the same time building long-term relations where we intimately understand their everyday work and development.</p>
                            </div>
                            
                            </div>
            </div>
        </section>

        <section id="mid-section" style="background:#f2f2f2; padding-bottom:3em;">
                <div class="container">
                        <div class="row m-0">
                            
                                <div class="col-md-6" style="margin-top:2em; background:white; border-bottom: solid 3px #acacac">
                                    <h1 class="h1-aseo">Servicios Generales</h1>
                                    <p class="p-mision">Since 1974, the company’s mission has been to add value to the activities and businesses of our customers and drive their growth through a better use of information technology while at the same time building long-term relations where we intimately understand their everyday work and development.</p>
                                </div>
                                <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                                    <img src="/image/cleaning3.jpg" style="width:100%; height:100%;">
                                </div>
                                </div>
                </div>
            </section>
        
            <section id="mid-section" style="background:#ffffff; padding-bottom:3em;">
                    <div class="container">
                            <div class="row m-0">
                                
                                    <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                                            <img src="/image/bode.jpg" style="width:100%; height:100%;">
                                    </div>
        
                                    <div class="col-md-6" style="margin-top:2em; background:white; border-bottom: solid 3px #acacac">
                                        <h1 class="h1-aseo">Aseo de Bodegas</h1>
                                        <p class="p-mision">Since 1974, the company’s mission has been to add value to the activities and businesses of our customers and drive their growth through a better use of information technology while at the same time building long-term relations where we intimately understand their everyday work and development.</p>
                                    </div>
                                    
                                    </div>
                    </div>
                </section>

    
            
            
                <div class="row m-0 designbar">
                    <div class="shapel"></div>
                  <div class="container">
                      

                          <div class="row m-0">
                            <div class="col-md-12 p-0"> <h1 class="h1-ad" style="color:black; padding-top:2em;"> COTICE AHORA</h1> </div>
                            <div class="col-md-12 p-0">
                                    
                                    <div class="text-center" style="padding-bottom:20px;">
                                            <button class="main-btn" onclick="window.location.href='/contacto'">Cotizar</button>
                                    </div>
                            </div>
                                               
                        </div>
                                  

                                            
                      </div>
            </div>
            

@endsection
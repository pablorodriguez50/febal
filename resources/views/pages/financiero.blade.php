@extends('layouts.app')
@section('title','Servicio Financiero')
 

@section('content') 

<div class="col-md-12 m-0 p-0 games-banner">  
    <video autoplay muted loop id="myVideo" >
        <source src="/image/finance2.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
    </video>
    <div class="content">
            
        <div class="col-md-12">
            <h1 class="fontp">Servicio Financiero</h1>
            <p class="fontp2">Consultoría financiera para su negocio</p>
            <button onclick="location.href='/contacto';" style="font-size:15px;" class="btn-details-transparent" type="submit"><i class="fa fa-chevron-right"></i>  Cotiza ahora</button>
        </div>
    </div>
</div>

<section id="up-section" style="background:white">
    <div class="container">
        <div class="row m-0" style="padding-top:2em; padding-bottom:5em;">
            <div class="col-md-12 mx-auto">
                <h1 class="h1-aseo" style="text-align:center">Como operamos</h1>
                <p style="text-align:center">En Febal Group nos especializamos en una serie de servicios financieros para todo tipo de empresa, ya sea grande o pequeña. En cada consultoría destacamos nuestros valores fundamentales.</p>
                

                <div class="card-deck" style="padding-top:2em">
                        <div class="card" style="box-shadow:none; border:none">

                                <div class="card-body">
                                        <h5 class="card-title font-bold " style="font-size:16px; text-align:center">Confiabilidad</h5>
                                  <p class="card-text" style="font-size:14px; text-align:center">Con el fin de mantener un perfil homogéneo en nuestros colaboradores se realiza un proceso de selección mediante una comparación y un proceso de reclutamiento</p>
                                </div>
                        </div>
                        <div class="card" style="box-shadow:none; border:none">

                                <div class="card-body">
                                  <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Flexibilidad</h5>
                                  <p class="card-text" style="font-size:14px; text-align:center">Realizamos un plan que nos permite ordenar y sistematizar información relevante para realizar un trabajo según las necesidades de cada empresa, ordenando el recurso humano, material y tecnológico disponible.</p>
                                </div>
                        </div>
                        <div class="card" style="box-shadow:none; border:none">

                                <div class="card-body">
                                  <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Innovación</h5>
                                  <p class="card-text" style="font-size:14px; text-align:center">Establecemos un compromiso con el cliente que trascienda al momento de la contratación del servicio, respaldando su decisión con una asistencia continua.</p>
                                </div>
                        </div>  
                        <div class="card" style="box-shadow:none; border:none">

                            <div class="card-body">
                              <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Servicio al cliente</h5>
                              <p class="card-text" style="font-size:14px; text-align:center">Establecemos un compromiso con el cliente que trascienda al momento de la contratación del servicio, respaldando su decisión con una asistencia continua.</p>
                            </div>
                    </div>                                
                </div>
            </section>
            
    <section id="mid-section" style="background:#f2f2f2; padding-bottom:3em;">
        <div class="container">
                <div class="row m-0">
                    
                        <div class="col-md-6" style="margin-top:2em; background:white; border-bottom: solid 3px #acacac">
                            <h1 class="h1-aseo">Servicio Remuneraciones</h1>
                            <p class="p-mision" style="padding-bottom:0px">Como servicio de remuneraciones ofrecemos las siguientes prestaciones:</p>
                            <div class="row" style="padding-bottom:2em;">
                                <div class="col-md-6 m-0" style="padding-left:2em;">
                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Calculo de nomina con sistema</p><br>
                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Contratos y Anexos de contratos</p><br>
                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Tramitación de Licencias Medicas</p><br>
                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Calculo de Finiquitos</p><br>
                                </div>
                                <div class="col-md-6 m-0 p-0">
                                        <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Papeletas de Vacaciones</p><br>
                                        <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Informes de Gestión</p><br>
                                        <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Administración de sistema de asistencia</p><br>
                                        <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Calculo y Pago de Cotizaciones Previsionales</p><br>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                            <img src="/image/remu.jpg" style="width:100%; height:100%;">
                        </div>
                        </div>
                <div class="col-md-12">
                    <h1 class="h1-aseo mx-auto" style="text-align:center; font-size:20px">Adicionalmente entregaremos los siguientes informes</h1>
                
                    <div class="card-deck" style="padding-top:2em">
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/book.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
    
                                    <div class="card-body">
                                            <h5 class="card-title font-bold " style="font-size:16px; text-align:center">Centralización Contable y Libro de Remuneraciones</h5>
                                      <p class="card-text" style="font-size:14px; text-align:center">Con el fin de mantener un perfil homogéneo en nuestros colaboradores se realiza un proceso de selección mediante una comparación y un proceso de reclutamiento</p>
                                    </div>
                            </div>
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/report.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
    
                                    <div class="card-body">
                                      <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Informe detallado de Haberes y Descuentos</h5>
                                      <p class="card-text" style="font-size:14px; text-align:center">Realizamos un plan que nos permite ordenar y sistematizar información relevante para realizar un trabajo según las necesidades de cada empresa, ordenando el recurso humano, material y tecnológico disponible.</p>
                                    </div>
                            </div>
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/vaca.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
                                    <div class="card-body">
                                      <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Provisión de Vacaciones</h5>
                                      <p class="card-text" style="font-size:14px; text-align:center">Establecemos un compromiso con el cliente que trascienda al momento de la contratación del servicio, respaldando su decisión con una asistencia continua.</p>
                                    </div>
                            </div>  
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/medicine.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
    
                                <div class="card-body">
                                  <h5 class="card-title font-bold" style="font-size:16px; text-align:center"> Estadistica de Licencias medicas y ausencias </h5>
                                  <p class="card-text" style="font-size:14px; text-align:center">Establecemos un compromiso con el cliente que trascienda al momento de la contratación del servicio, respaldando su decisión con una asistencia continua.</p>
                                </div>
                        </div>                                
                    </div>
                    <div class="card-deck" style="padding-top:2em">
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/gears.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
    
                                    <div class="card-body">
                                            <h5 class="card-title font-bold " style="font-size:16px; text-align:center">Informe de Gestión</h5>
                                      <p class="card-text" style="font-size:14px; text-align:center">Costo de remuneraciones, dotación, indice de rotación, horas extras, otros</p>
                                    </div>
                            </div>
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/diploma.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
                                    <div class="card-body">
                                      <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Emisión certificados </h5>
                                      <p class="card-text" style="font-size:14px; text-align:center">Realizamos un plan que nos permite ordenar y sistematizar información relevante para realizar un trabajo según las necesidades de cada empresa, ordenando el recurso humano, material y tecnológico disponible.</p>
                                    </div>
                            </div>
                            <div class="card" style="box-shadow:none; border:none">
                                <img src="/image/pay.png" class="card-img-top mx-auto" alt="..." style="width: 50px; box-shadow: none; padding-top:2em;">
    
                                    <div class="card-body">
                                      <h5 class="card-title font-bold" style="font-size:16px; text-align:center">Liquidaciones de sueldos Individual </h5>
                                      <p class="card-text" style="font-size:14px; text-align:center">Establecemos un compromiso con el cliente que trascienda al momento de la contratación del servicio, respaldando su decisión con una asistencia continua.</p>
                                    </div>
                            </div>  
                        </div>                                
                    </div>

                </div>
        </div>
    </section>

    <section id="mid-section" style="background:#fffff; padding-bottom:3em;">
            <div class="container">
                    <div class="row m-0">
                        
                            <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                                    <img src="/image/conta.jpg" style="width:100%; height:100%;">
                            </div>

                            <div class="col-md-6" style="margin-top:2em; background:white; border-bottom: solid 3px #acacac">
                                <h1 class="h1-aseo">Servicio Contabilidad</h1>
                                <p class="p-mision" style="padding-bottom:0px">Since 1974, the company’s mission has been to add value</p>
                            
                                <div class="row" style="padding-bottom:2em;">
                                        <div class="col-md-8 m-0" style="padding-left:2em;">
                                            <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Declaración de IVA mensual ( F.29 )</p><br>
                                            <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Declaración de Renta Anual ( F.22 )</p><br>
                                            <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Declaración Anual según régimen tributario</p><br>
                                            <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Libro de Compra y Venta ( Fisico )</p><br>
                                            <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Facturas Electronicas</p><br>
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
                                    <h1 class="h1-aseo">Servicios de Prevención de Riesgos</h1>
                                    <p class="p-mision" style="padding-bottom:0px">Since 1974, the company’s mission has been to add value to the activities and businesses of our customers and drive their growth through a better use of information technology while at the same time building long-term relations where we intimately understand their everyday work and development.</p>
                                    
                                    <div class="row" style="padding-bottom:2em;">
                                            <div class="col-md-6 m-0" style="padding-left:2em;">
                                                <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Confección de Reglamento Interno </p><br>
                                                <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Inducción Obligacíon a Informar</p><br>
                                                <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Rebaja de Tasa</p><br>
                                                <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Confección DIAT</p><br>
                                            </div>
                                            <div class="col-md-6 m-0 p-0">
                                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Plan de Emergencia</p><br>
                                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Charlas seguridad</p><br>
                                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Comite Paritario </p><br>
                                                    <i class="fa fa-check-circle green-i"> </i><p class="p-check"> Procedimientos</p><br>
                                            </div>
                                        </div>

                                </div>
                                <div class="col-md-6 p-0" style="margin-top:2em; background:white">
                                    <img src="/image/preve.png" style="width:100%; height:100%;">
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
            
</section>


@endsection
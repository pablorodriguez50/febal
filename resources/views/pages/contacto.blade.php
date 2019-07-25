@extends('layouts.app')
@section('title','Contacto')
 

@section('content') 

    <section id="banner-con">
            <div class="bg-contact"></div>
                <div class="row m-0">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg-center" style="text-align:center">
                        <h1 style="color:white">Contacto</h1>
                    </div>
                    <div class="col-md-2"></div>
                    
                </div>
            

    </section>

    <section id="cf"  style="background:#f2f2f2">
            <div class="container"  style="padding-bottom:2em; padding-top:2em;" >
                    <div class="row ">
                            <div class="col-md-3">
                                
                                </div>    
                        <div class="col-md-6"  style="background:white">
                                <form method="POST" action="#" class="contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="title-form">
                                                  <h2>Contactanos!</h2>
                                              </div>  
                                            </div>
                                            <div class="col-md-6">
                                              <div class="mat-div">
                                                  <label for="first-name" class="mat-label">Nombre *</label>
                                                  <input type="text" class="mat-input" id="first-name">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="mat-div">
                                                  <label for="last-name" class="mat-label">Apellido *</label>
                                                  <input type="text" class="mat-input" id="last-name">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="mat-div">
                                                  <label for="phone" class="mat-label">Teléfono *</label>
                                                  <input type="text" class="mat-input" id="phone">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="mat-div">
                                                  <label for="company" class="mat-label">Empresa *</label>
                                                  <input type="text" class="mat-input" id="company">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="mat-div">
                                                  <label for="email" class="mat-label">E-mail *</label>
                                                  <input type="text" class="mat-input" id="email" placeholder="email@example.com">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="mat-div">
                                                  <label for="country" class="mat-label">País *</label>
                                                  <input type="text" class="mat-input" id="country">
                                              </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                  <div class="mat-div">
                                                      <label for="subject" class="mat-label">Asunto</label>
                                                      <input type="text" class="mat-input" id="subject"> 
                                                  </div>
                                                </div> --}}
                                            <div class="col-md-12">
                                              <div class="mat-div">
                                                  <label for="message" class="mat-label">Mensaje *</label>
                                                  <textarea style="resize:none;" name="message" class="mat-input"  id="message" rows="4"></textarea>
                                                  {{-- <small id="#"  class="text-muted" >
                                                      Characters 0/100.
                                                  </small> --}}
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="#">
                                                  <label for="captcha" class="mat-label">CAPTCHA</label>
                                                  <input type="checkbox" id="captcha" class="mat-input"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-buttons">
                                                  <button class="floatbutton-send " type="submit">Enviar</button>
                                                  <button class="floatbutton-clear" type="reset">Limpiar</button>
                                              </div>
                                            </div>
                                        </div>
                                  </form>
                        </div>
                        <div class="col-md-3">
                                
                        </div>
                    </div>
                </div>
    </section>


@endsection
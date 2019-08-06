@extends('Portfolio.template')

@section('head')
 @parent
@stop

@include('Portfolio.partials.nav') 

@section('services')
<!-- ////////////Services -->
        <section class="box-content " id="services">
            <div class="container" style="margin-top: 20px;">
                <div class="row heading">
                     <div class="col-lg-12">
                        <h2>Mis Habilidades</h2>
                        <hr class="line02">
                        <div class="intro">FRONT-END | BACK-END</div>
                    </div>
                </div>

            
                <div class="row">
                @foreach($services as $service)  
                    <div class="col-sm-4 services-item">
                        <div class="wrap-img">
                            <img src="images/servicios/{{ $service->imgServicio }}">
                        </div>
                        <h3 class="services-heading">{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                        
                    </div>
                @endforeach()
                </div>
             
            </div>
        </section>
        
       
@stop

@section('Portafolio')
<!-- ////////////Portfolio -->
        <section class="box-content box-style" id="portfolio">
            <div class="container">
                <div class="row heading">
                     <div class="col-lg-12">
                        <h2>Mi Portafolio</h2>
                        <hr class="line01">
                        <div class="intro">PAGINAS | PLANTILLAS</div>
                    </div>
                </div>
                <div class="row">

                    @foreach($products as $product)

                   <div class="col-md-3 col-sm-6 portfolio-item">
                        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#exampleModal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-eye fa-3x"></i>
                                </div>
                            </div>
                            <img src="images/portafolio/{{ $product->imgProducto }}" class="img-responsive" alt="">
                        </a>
                        
                        
                    </div>
                                        
                </div>
            </div>
        </section>

<!-- Modal de portafolio -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portafolio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Main layout-->
          

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-5">

                    <img src="images/portafolio/{{ $product->imgProducto }}"  class="img-fluid" alt="">

                  </div>
                  <!--Grid column-->
                  <div class="col-md-7">


                  <p class="lead">
                    <span>$700</span>
                  </p>
                    
                   <p class="lead font-weight-bold">{{ $product->name }}</p>

                   
                   <p class="font-weight-bold">Description</p>

                  <p>{{ $product->description }}</p>

                  </div>  


                </div>
                <!--Grid row-->


            <!--Main layout-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Regresar</button>
          </div>
        </div>
      </div>
    </div>
<!-- termina modal de portafolio -->
                
        @endforeach()

        
@stop



@section('about')

<!-- ////////////About -->
        <section class="box-content" id="about">
            <div class="container">
                <div class="row center">
                    <div class="col-md-6">
                    @foreach($abouts as $about)
                        <div class="wrap-img">
                            <img src="images/miperfil/{{ $about->user->imgPerfil }}">
                        </div>
                
                    </div>
                    <div class="col-md-6">
                        <div class="row heading">
                            <h2>Acerca de Mi</h2>
                            <hr class="line02">
                            <div class="intro">{{ $about->name }}</div>
                        </div>
                        <div class="row">
                            <p>{{ $about->description }}</p>
                        </div>
                    @endforeach()
                    </div>
                </div>
            </div>
        </section>
        
@stop


@section('certification')

<!-- ////////////Portfolio -->

<section class="box-content box-style" id="portfolio2">
    <div class="container" style="margin-top: 40px;">
        <div class="row heading">
             <div class="col-lg-12">
                <h2>Mis Certificaciones</h2>
                <hr class="line01">
                <div class="intro">Estas son certificaciones que he adquirido a lo largo del aprendizaje Web</div>
            </div>
        </div>
        @foreach($certification as $certificado)
        <div class="row">
           
            <div class="col-md-4 col-sm-3 portfolio-item2">
                <a href="#" class="portfolio-link" data-toggle="modal" data-target="#certificado">
                    
                    <img src="images/certificados/{{ $certificado->imgCertificacion}}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption center">
                    <h4>{{ $certificado->name}}</h4>
                    
                </div>
            </div>
          
            
        </div>
    </div>
</section>

<!-- Modal de Certficados -->
<div class="modal fade" id="certificado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cartficados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Main layout-->
      

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-5">

                <img src="images/certificados/{{ $certificado->imgCertificacion}}" class="img-fluid" alt="">

              </div>
              <!--Grid column-->
              <div class="col-md-7">


               <p class="lead font-weight-bold">{{ $certificado->name }}</p>

               
               <p class="font-weight-bold">Description</p>

              <p>{{ $certificado->description }}</p>

              </div>  


            </div>
            <!--Grid row-->


        <!--Main layout-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Regresar</button>
      </div>
    </div>
  </div>
</div>
<!-- termina modal de Certficados -->

        @endforeach() 
        
@stop



@section('contact')
<!-- ////////////Contact -->
<section class="box-content box-style" id="contact">
<div class="container">
    <div class="row">
<br>

@if(session()->has('flash'))
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{ session()->get('flash') }}
  </div>
@endif

    <div class="col-lg-12 text-center">
        <div class="row heading">
            <h2>Contactame</h2>
            <hr class="line01">
            <div class="intro">Las mejores cosas en la vida no son cosas</div>
        </div>
    </div>


    <div class="col-md-6 contact-item">
        <div class="row">
            <div class="col-sm-12">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123536.65268311882!2d-90.56260126824222!3d14.626375695534955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a180655c3345%3A0x4a72c7815b867b25!2sGuatemala!5e0!3m2!1ses!2ses!4v1507921393836" width="95%"  frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                <br>
                <p>Guatemala , Guatemala.</p>
                <p>(+502)56227500</p>
                <p>martires@gmail.com</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-6 contact-item">

{!! Form::open(['route' => 'messages', 'method' => 'POST']) !!}

{{ csrf_field() }}

<div class="row">
<div class="col-md-6">
    <div class="form-group">
   
    {!!Form::text('name',null,['required' => 'required','placeholder'=> 'Nombre y apellido'])!!}
              
    </div>
    <div class="form-group">
              
    {!!Form::text('email',null,['required' => 'required','placeholder'=> 'Email'])!!}

    </div>

    <div class="form-group">
              
    {!!Form::text('subject',null,['required' => 'required','placeholder'=> 'Subject'])!!}

    </div>
 
 </div>

<div class="col-md-6">
    <div class="form-group">
            
    {!! Form::textarea('body',null,['class'=>'form-control','required' => 'required','placeholder'=>'Mensaje']) !!}
    
    </div>
</div>

</div>
    
    <div class="row">
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-l">Enviar Mensaje</button>
            </div>
    </div>

{!!Form::close()!!}
    </div>
</div>
</div>
</section>



@stop




@section('script')
  @parent
@stop
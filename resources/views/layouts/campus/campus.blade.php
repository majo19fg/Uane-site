@extends('index')

@section('content')

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
    <div class="container pt-70 pb-20">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title text-white">
               Campus {{ $campus->name }}
            </h2>
            <ol class="breadcrumb text-left text-black mt-10">
              <li><a href="/">Inicio</a></li>
              <li><a href="#">Campus</a></li>
              <li class="active text-gray-silver">
                Campus {{ $campus->name }}
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">

                <img src="/laravel/public/multi/images/{{ ($campus->miniatura) }}" alt="">
                
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name font-24 mt-0 mb-0">
                Campus {{ $campus->name }}
              </h1>
              <h5 class="mt-5 text-theme-color-2">Historia</h5>
              {!! $campus->history !!}
              {{-- <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul> --}}
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Section: Gallery -->
    <section id="gallery" class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-building-o text-gray-darkgray mr-10"></i>Dirección del <span class="text-theme-colored">campus</span></h3>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Dirección:</h5>
                        <p>{{ $campus->direccion }}</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom p-15">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14357.817053606503!2d-97.5647252!3d25.8874332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x728921150893a393!2sUniversidad+Americana+del+Noreste!5e0!3m2!1ses-419!2smx!4v1548463120224" width="100%" height="350" frameborder="0" style="border:0"></iframe> --}}
                        {{-- <div style="width: 100%"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=es&amp;coord={{ $campus->latitud }},{{ $campus->longitud }}&amp;q={{ $campus->direccion }}+(UANESabinas)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" ></iframe></div><br /> --}}
                        {{-- <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=25.4353838,-100.9964269&amp;q=Monclova%201567%2C%20Rep%C3%BAblica%2C%2025280%20Saltillo%2C%20Coah.+(UANE%20Rectoria)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe></div><br /> --}}
                        <iframe
                          width="600"
                          height="450"
                          frameborder="0" style="border:0"
                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAl1Kp_uph3e-JFdc-9EeNSTRNRA_H_u38
                            &q=UANE {{ $campus->name }}
                            &zoom=18" allowfullscreen>
                        </iframe>

                        
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i><span class="text-theme-colored">Galeria</span></h3>
              <!-- Portfolio Gallery Grid -->

              <div class="gallery-isotope grid-2 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->

                @foreach ($campus->Galeria as $galeria)
                    <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                      <div class="thumb">
                        <img alt="project" src="/laravel/public/multi/images/{{ $galeria->path }}" class="img-fullwidth">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                          <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                              <a href="/multi/images/{{ $galeria->path }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
                   
                  <!-- Portfolio Item End -->
              
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
            
          </div>
        </div>
      </div>
    </section>

   <section>
      <div class="container">
        <div class="content">
          <div class="row mt-30">
            <div class="col-md-12">
              <div class="clearfix">
                <h4 class="line-bottom">Programas en 
                    Campus
                </h4>
              </div>

             <programas-component
              campus="{{ $campus->url }}"
              urlprograma="/programas/"
              ></programas-component>
              {{--
              <div class="owl-carousel-2col" data-dots="true">
                  
                @foreach ($campusPrograma as $programa)
                @if ($programa->modalidadPrograma->name == 'Presencial')
                    <div class="item ">
                        <div class="service-block bg-white">
                            <div class="thumb">
                                @if ($programa->photos->count() === 1)
                                <img alt="featured project" src=" /admin/images/{{ $programa->photos->first()->path }} " class="img-fullwidth">
                                @endif                            
                            </div>
                            <div class="content text-left flip p-25 pt-0" style="height:300px;">
                                <h4 class="line-bottom pb-20">{{ $programa->title }}</h4>
                                <p>{{ str_limit($programa->descripcion_corta, 250) }}</p>
                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-auto" style="bottom:10px;"  href="#">Ver programa</a>
                            </div>
                        </div>
                    </div>
                @endif
                    
                @endforeach
                
              </div>
              --}}
            </div>
          </div>
        </div>
      </div>
    </section> 
@endsection






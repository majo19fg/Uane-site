@extends('index')

@section('content')
    <!-- Section: home -->
        @include('partial.sliders.slider-2')
       
        <!-- Slider Revolution Ends -->

      </div>
    </section>

    <!-- Section: About -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
              <div class="col-md-12" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
                      <!-- Portfolio Item Start -->
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/sliders/UANE-Comunicado-20-julio1.jpg" >
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/sliders/UANE-Comunicado-20-julio1.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End -->
                      
                      <!-- Portfolio Item Start -->
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/sliders/UANE-Comunicado-20-julio-MTY.jpg" >
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/sliders/UANE-Comunicado-20-julio-MTY.jpg"   data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End -->
                      
                      <!-- Portfolio Item Start -->
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/sliders/UANE-Comunicado-20-julio-PN.jpg" >
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/sliders/UANE-Comunicado-20-julio-PN.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
              </div>
            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20 ">
              <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">Tu oportunidad está en<span class="text-theme-color-2"> UANE</span></h2>
              <p class="lead font-18" align="justify">UANE cuenta con 45 años de historia, más de 12,000 estudiantes y más de 45,000 egresados en los niveles de Bachillerato, Licenciatura y Postgrado.</p>
              <p align="justify">Contamos con 8 campus en el noreste de México ubicados en los estados de Coahuila, Tamaulipas y Nuevo León que ofrecen educación presencial además de ofrecer educación en Línea. </p>
              <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Conoce más de UANE</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
              <div class="image-box-thum">
                <img class="img-fullwidth img-responsive" alt="" src="/multi/images/programas/presencial.jpg">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title text-uppercase line-bottom mt-0">Educación presencial</h4>
                <p class="desc mb-10" align="justify">Gana experiencia laboral mientras estudias una Licenciatura o Postgrado en UANE.</p>
                <a href="{{ route('programas.prec') }}" class="btn btn-xs btn-theme-colored">Leer más</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
              <div class="image-box-thum">
                <img class="img-fullwidth img-responsive" alt="" src="/multi/images/programas/enlinea.jpg">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title text-uppercase line-bottom mt-0">Educación en línea</h4>
                <p class="desc mb-10" align="justify">Descubre los beneficios de estudiar una Carrera o un Postgrado en Línea con UANE.<br></p>
                <p> </p>
                <a href="{{ route('programas.linea') }}" class="btn btn-xs btn-theme-colored">Leer más</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="image-box-thum">
                <img class="img-fullwidth img-responsive" alt="" src="/multi/images/programas/becas.jpg">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title text-uppercase line-bottom mt-0">Becas y convenios</h4>
                <p class="desc mb-10" align="justify">Contamos con un amplio programa de becas y convenios para impulsar el crecimiento profesional de nuestros estudiantes.</p>
                <a href="{{ route('admisiones.beca-presencial') }}" class="btn btn-xs btn-theme-colored">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: COURSES -->
    @include('partial.datos')
    <!-- Section: Gallery -->
   {{--  <section id="gallery" class="bg-lighter">
     <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">Nuestros<span class="text-theme-color-2 font-weight-400"> CAMPUS</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Works Filter -->
              <div class="portfolio-filter font-alt align-center">
                <a href="#" class="active" data-filter="*">Todos</a>
                <a href="#select1" class="" data-filter=".select1">Saltillo</a>
                <a href="#select2" class="" data-filter=".select2">Torreón</a>
                <a href="#select3" class="" data-filter=".select3">Monclova</a>
                <a href="#select4" class="" data-filter=".select4">Sabinas</a>
                <a href="#select5" class="" data-filter=".select5">Piedras Negras</a>
                <a href="#select6" class="" data-filter=".select6">Monterrey</a>
                <a href="#select7" class="" data-filter=".select7">Reynosa</a>
                <a href="#select8" class="" data-filter=".select8">Matamoros</a>
              </div>
              <!-- End Works Filter -->
              
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
               
                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="/multi/images/campus" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/1.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="/multi/images/footer-bg.png" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/2.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/2.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="/multi/images/footer-bg.png" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/3.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/3.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/4.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/4.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/5.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/5.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/6.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/6.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/7.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/7.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/8.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/8.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/9.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/9.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select2">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/10.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/10.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select1">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/11.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/11.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item select3">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/280x160" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/12.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/12.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div >
    </section> --}}

    <!-- Section: Why Choose Us -->
    <section id="event" class="">
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">              
            <br/>
            <div class="col-md-4">
              <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>SIGUENOS EN <span class="text-theme-color-2">FACEBOOK</span></h3>
              <div class="fb-page" data-href="https://www.facebook.com/UANEOficial/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/UANEOficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/UANEOficial/">UANE</a></blockquote></div>
              <br/>
              {{-- <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="http://placehold.it/120x120"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="http://placehold.it/120x120"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="http://placehold.it/120x120"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article> --}}
            </div>
            <div class="col-md-4">
              <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-heartbeat mr-10"></i>Programa fitness <span class="text-theme-color-2">Uane</span></h3>
              <div class="gallery">
                  <div><a href="{{ asset('/multi/pdf/Programa fit UANE.pdf') }}"><img src="{{ asset('/multi/images/UANE-fit.jpg') }}"width="623px"id=experiencias1 /></a>
                </div>
              </div>  
          </div> 
            <div class="col-md-4">
              <h3 class="line-bottom mt-0 line-height-1"><i class="fa fa-question-circle mr-10"></i>¿Por qué <span class="text-theme-color-2">UANE?</span></h3>
              {{-- <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p> --}}
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> 8 Campus en 3 estados de la República</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Contamos con 8 campus en 3 estados de la república mexicana, con el fin de brindar educación y generar oportunidades para desarrollar personas ejemplares, comprometidas con su futuro.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Más de 60 planes de estudio</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Contamos con una amplia oferta educativa donde nuestros maestros son expertos en su área con el fin prepararte para enfrentar un mundo laboral y competitivo.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> 45 años de experiencia</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Contamos con 45 años de experiencia en educación, ofreciendo un sistema modular el cual te ayudara a enfocarte y aprovechar cada minuto de estudio.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span>Clubes deportivos y culturales</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Vive la experiencia de ser campeón siendo parte en alguno de nuestros clubes deportivos o culturales los cuales han ganado torneos nacionales.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span> Carreras y Maestría en Línea</a> </div>
                  <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Contamos con diferentes Carreras y maestrías en línea en las cuales podrás organizar tu tiempo para cursarlas y disfrutar los mejores momentos de tu vida.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: testimonials -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="1.5" data-bg-img="/multi/images/footer-bg.png">
      <div class="container pb-50">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              {{-- <h5 class="font-weight-300 m-0 text-gray-lightgray">Happy Student</h5> --}}
              <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Experiencia que <span class="font-30 text-theme-color-2">transforma</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-10">
            <div class="owl-carousel-2col boxed" data-dots="true">
                <div class="item">
                    <div class="testimonial pt-10">
                      <div class="thumb pull-left mb-0 mr-0 pr-20">
                        <img width="75" class="img-circle" alt="" src="/multi/images/Hombre.jpg">
                      </div>
                      <div class="ml-100 ">
                        <h4 class="text-white text-uppercase mt-0">UANE ha transformado mis experiencias laborales permitiendo crecer con todas las herramientas y conocimientos que adquirí durante mi carrera profesional.</h4>
                        <p class="author mt-20">- <span class="text-theme-color-2">Carlos Espino,</span> <small><em class="text-gray-lightgray">Egresado,Licenciado en Mercadotecnia Internacional.</em></small></p>
                      </div>
                    </div>
                  </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="/multi/images/Mujer.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0">ESTUDIAR EN UANE HACE QUE ME SIENTA COMO EN CASA, SOY PARTE DE UNA FAMILIA.</h4>
                    <p class="author mt-20">- <span class="text-theme-color-2">Lizeth Palos Ortega,</span> <small><em class="text-gray-lightgray">IIS, 5to. Semestre</em></small></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="/multi/images/Hombre.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="text-white mt-0">UANE ME PERMITIÓ OBTENER EXPERIENCIA EN EL ÁREA LABORAL MIENTRAS ESTUDIABA.</h4>
                    <p class="author mt-20">- <span class="text-theme-color-2">Alfredo Galvan</span> <small><em class="text-gray-lightgray">Egresado UANE</em></small></p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-lighter">
      <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <a href="{{ route('blog.noticias') }}"><h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Últimas <span class="text-theme-color-2 font-weight-400">noticias</span></h2></a>
           </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="/multi/images/Interuane/INTERUANE.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">16</li>
                        <li class="font-12 text-white text-uppercase">MAR</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('blog.interuane20') }}">InterUANE 2020</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                      </div>
                    </div>
                  </div>
                  <a href="{{ route('blog.interuane20') }}" class="btn-read-more">Leer más</a>
                  <div class="clearfix"></div>
                </div>
              </article>
              
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="/multi/images/SARAM/SARAM1.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">20</li>
                        <li class="font-12 text-white text-uppercase">AGO</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('blog.Saram') }}">Inaguración del primer Employment Center en Monterrey</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">UANE y Saram HR buscan mayor inserción con el primer Employment Center..
                  </p>
                  <a href="{{ route('blog.Saram') }}" class="btn-read-more">Leer más</a>
                  <div class="clearfix"></div>
                </div>
              </article>
              
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="/multi/images/blog/Licenciatura/PHOTOCINEMA-6284.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">20</li>
                        <li class="font-12 text-white text-uppercase">AGO</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('blog.InicioClasesLic') }}">BIENVENIDOS A UANE PIEDRAS NEGRAS</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">UANE campus Piedras Negras abrió sus puertas a los alumnos de las diferentes licenciaturas.
                    Les deseamos un semestre lleno de éxitos.
                  </p>
                  <a href="{{ route('blog.InicioClasesLic') }}" class="btn-read-more">Ver galería</a>
                  <div class="clearfix"></div>
                </div>
              </article>
              
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="/multi/images/blog/PrepaUANE/PHOTOCINEMA-0066.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">20</li>
                        <li class="font-12 text-white text-uppercase">AGO</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('blog.InicioClases') }}">BIENVENIDA PREPA UANE PIEDRAS NEGRAS</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">UANE campus Piedras Negras abrió sus puertas a los alumnos de bachillerato generación 2019 - 2021.</p>
                  <a href="{{ route('blog.InicioClases') }}" class="btn-read-more">Ver galería</a>
                  <div class="clearfix"></div>
                </div>
              </article>
              
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="/multi/images/noticias/diplomado-titulacion.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">20</li>
                        <li class="font-12 text-white text-uppercase">JUN</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('blog.titulacion') }}">¿Sabías que en UANE...</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Próximamente te graduarás y seguramente estás considerando cada una de las alternativas para titularte...</p>
                  <a href="{{ route('blog.titulacion') }}" class="btn-read-more">Leer más</a>
                  <div class="clearfix"></div>
                </div>
              </article>
              
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="/multi/images/noticias/interuane.jpg"  alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-white">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">MAR</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('blog.interuane') }}">InterUANE 2019</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                        --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">UANE campus Saltillo abrió sus puertas para celebrar el ya tradicional InterUANE en su edición 2019...</p>
                  <a href="{{ route('blog.interuane') }}" class="btn-read-more">Leer más</a>
                  <div class="clearfix"></div>
                </div>
              </article>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Call To Action -->

@endsection
@push('css')
<style>
    img.logo {
      width: 50%;
      height: 30%;
    }
   
    </style>
@endpush

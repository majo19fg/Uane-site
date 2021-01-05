@extends('index')

@section('content')
	<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/46banner.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Mensajes del Rector</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li class="active text-gray-silver">Mensajes del rector</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: News & Blog -->
    <section id="news">
      <div class="container">
        <div class="section-content">
          <div class="row">
     <!-- <div class="col-md-6">
            <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="/multi/images/comunicados-del-rector.gif" alt="" class="img-responsive img-fullwidth"> </div>
                {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                <div class="display-table">
                  <div class="display-table-cell">
                    <ul>
                      <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                      <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                    </ul>
                  </div>
                </div>
                </div> --}}
              </div>
              <div class="entry-content border-1px p-20">
                <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: "Una experiencia que transforma"</a></h5>
                <p class="text-left mb-20 mt-15 font-13">"El Hoy es ahora, me siento muy agradecido y sumamente honrado de formar parte de esta casa de estudios como Rector de UANE.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left"  href="{{ route('blog.rector2') }}">Leer más</a>
                <ul class="list-inline entry-date pull-right font-12 mt-5">
                  <li><span class="text-theme-colored">May 13, 2018</span></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </article>
        </div>    --> 
        <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje09-11-2020') }}"><img src="/multi/images/Noviembre.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
            </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Habilidades blandas Noviembre 2020.</a></h5>
              <p class="text-left mb-20 mt-15 font-13">NUEVAMENTE ME DIRIJO A TODA LA COMUNIDAD UNIVERSITARIA...</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje09-11-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Nov 09, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
        <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje05-10-2020') }}"><img src="/multi/images/Octubre.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
            </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Octubre 2020</a></h5>
              <p class="text-left mb-20 mt-15 font-13">¡JUNTOS! LA FAMILIA UANE, EN ESTE MES DE SEPTIEMBRE, CONMEMORAMOS CUARENTA Y SEIS AÑOS DE VIDA;</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje05-10-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Oct 05, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
        <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje09-09-2020') }}"><img src="/multi/images/Septiembre.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
            </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: 46º Aniversario Septiembre 2020 2020</a></h5>
              <p class="text-left mb-20 mt-15 font-13">¡JUNTOS! LA FAMILIA UANE, EN ESTE MES DE SEPTIEMBRE, CONMEMORAMOS CUARENTA Y SEIS AÑOS DE VIDA;</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje09-09-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Sep 09, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
        
        <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje01-08-2020') }}"><img src="/multi/images/Agosto.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
            </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Agosto 2020</a></h5>
              <p class="text-left mb-20 mt-15 font-13">ESTIMADOS ESTUDIANTES, LES DOY NUEVAMENTE LA BIENVENIDA A SU ALMA MATER.</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje01-08-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Ago 10, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
          </div>

          </div>
      <!--</div>-->
      {{--  <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje 02-04-2020') }}"><img src="/multi/images/Abril.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
            </div>
           {{-- <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Abril 2020</a></h5>
              <p class="text-left mb-20 mt-15 font-13">ME DIRIJO NUEVAMENTE A LA COMUNIDAD UNIVERSITARIA DE UANE PARA HACER ALGUNAS REFLEXIONES SOBRE EL MOMENTO QUE ESTAMOS VIVIENDO.r</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje 02-04-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Abr 02, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
      {{--  <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"> <img src="/multi/images/mensaje02.jpg" alt="" class="img-responsive img-fullwidth"> </div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
         {{--   </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Desarrollo Humano</a></h5>
              <p class="text-left mb-20 mt-15 font-13">Nuevamente tengo el honor de dirigirme a toda la comunidad universitaria para hablar</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje05-03-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Mar 05, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
          </div>
       {{-- <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"> <img src="/multi/images/mensaje01.jpg" alt="" class="img-responsive img-fullwidth"> </div>--}}
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
           {{-- </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Resposabilidad</a></h5>
              <p class="text-left mb-20 mt-15 font-13">En esta ocasión hablaremos de otro valor que es pilar dentro del ámbito académico</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje06-02-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Feb 06, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>--}}
      <!--  <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"> <img src="/multi/images/mensaje02.jpg" alt="" class="img-responsive img-fullwidth"> </div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}}
            </div>
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Año Nuevo 2020</a></h5>
              <p class="text-left mb-20 mt-15 font-13">"Me da mucho gusto tener la oportunidad para desearles lo mejor en este año.</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje20-01-2020') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Ene 15, 2020</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>-->
       {{--  <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"> <img src="/multi/images/mensaje01.jpg" alt="" class="img-responsive img-fullwidth"> </div>
              {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
              <div class="display-table">
                <div class="display-table-cell">
                  <ul>
                    <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                    <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                  </ul>
                </div>
              </div>
              </div> --}
            </div> 
            <div class="entry-content border-1px p-20">
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Bienvenida Alumnos 2019</a></h5>
              <p class="text-left mb-20 mt-15 font-13">"¡FELICIDADES! Ya eres parte de la familia UANE...</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje12-09-19') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Ago 12, 2019</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div>
            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/mensaje02.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Analogía del oso</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">"En sus inicios la universidad escogió al oso como mascota de la institución, por sus diversas características y atributos tan particulares.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.rector1') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">Ago 9, 2018</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>

            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/mensaje01.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: "Una experiencia que transforma"</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">"El Hoy es ahora, me siento muy agradecido y sumamente honrado de formar parte de esta casa de estudios como Rector de UANE.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left"  href="{{ route('blog.rector2') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">May 13, 2018</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>--}}

            
          </div>
        </div>
      </div>
    </section>

@endsection

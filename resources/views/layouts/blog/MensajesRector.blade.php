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
            <div class="col-md-6">
              <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje 03-02-2021') }}"><img src="/multi/images/Febrero.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
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
                  <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Febrero 2021</a></h5>
                  <p class="text-left mb-20 mt-15 font-13">LES DOY NUEVAMENTE LA BIENVENIDA A SU ALMA MATER, UANE...</p>
                  <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje 03-02-2021') }}">Leer más</a>
                  <ul class="list-inline entry-date pull-right font-12 mt-5">
                    <li><span class="text-theme-colored">Feb 03, 2021</span></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </article>
          </div>
        <div class="col-md-6">
          <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
            <div class="entry-header">
              <div class="post-thumb thumb"><a href="{{ route('blog.Mensaje 14-01-2021') }}"><img src="/multi/images/Enero-2021.jpg" alt="" class="img-responsive img-fullwidth"></a></div>
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
              <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Bienvenida semestre Enero Junio 2021.</a></h5>
              <p class="text-left mb-20 mt-15 font-13">HAGO LLEGAR A TODA LA COMUNIDAD UNIVERSITARIA DE UANE...</p>
              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.Mensaje 14-01-2021') }}">Leer más</a>
              <ul class="list-inline entry-date pull-right font-12 mt-5">
                <li><span class="text-theme-colored">Ene 14, 2021</span></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </article>
      </div> 
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
          </div>
        </div>
      </div>
    </section>

@endsection

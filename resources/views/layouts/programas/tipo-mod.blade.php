@extends('index')

@section('title', 'Lista de programas')
@section('meta-desc', 'Conoce todos los programas presenciales y en línea que UANE tiene para ti.')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/banner.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Programas</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Inicio</a></li>
                <li class="active text-gray-silver">Lista de programas</li>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Course list -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">

            
            @foreach ($programas as $programa)
            <div class="row mb-15">
              <div class="col-sm-6 col-md-4">
                <div class="thumb">
                    <img src="/laravel/public/multi/images/{{ $programa->miniatura }}" alt="">
                </div>
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="line-bottom mt-0 mt-sm-0">{{ $programa->title }}</h4>
                <ul class="review_text list-inline">
                  {{-- <li><h4 class="mt-0"><span class="text-theme-color-1">Fecha de inicio :</span> {{ $programa->inicio_curso->format('d/m/Y') }}</h4></li> --}}
                  {{-- <li>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                  </li> --}}
                </ul>
                <p align="justify">{{ $programa->descripcion_corta }}</p>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="/programas/{{ $programa->url }}">Ver programa</a>
              </div>
            </div>
            <hr> 
            @endforeach
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              {{-- <div class="widget">
                <h5 class="widget-title line-bottom">Search <span class="text-theme-color-2">Courses</span></h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div> --}}
              <div class="widget">
                <h5 class="widget-title line-bottom">Tipo de <span class="text-theme-color-2">programas</span></h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <ul class="list list-border angle-double-right">
                        <li><a href="{{ route('programas.bach') }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Bachillerato</a></li>
                        <li><a href="{{ route('programas.lic') }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Licenciatura</a></li>
                        <li><a href="{{ route('programas.ing') }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Ingeniería</a></li>
                        <li><a href="{{ route('programas.maes') }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Maestría</a></li>
                        <li><a href="{{ route('programas.esp') }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Especialidad</a></li>
                        <li><a href="{{ route('programas.doc') }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Doctorado</a></li>
                    </ul>
                  </ul>
                </div>
              </div>
             {{--  <div class="widget">
                <h5 class="widget-title line-bottom">Latest <span class="text-theme-color-2">Course</span></h5>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="http://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="http://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="http://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                </div>
              </div> --}}
              {{-- <div class="widget">
                <h5 class="widget-title line-bottom">Instagram <span class="text-theme-color-2"></span></h5>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                  </script>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav>
              {{-- <ul class="pagination theme-colored xs-pull-center m-0">
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
              </ul> --}}

              {{$programas->links()}}
            </nav>
          </div>
        </div>
      </div>
    </section>
@endsection
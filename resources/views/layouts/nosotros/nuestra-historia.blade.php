@extends('index')

@section('title', 'Nuestra historia')

@section('meta-desc', 'Hace 44 años, un grupo de personas tuvieron una visión de formar una Universidad cuyo principio fundamental era generar oportunidades para una educación superior de calidad para las personas que se encontraban inmersas en el campo laboral.')

@section('content')
   <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/46banner.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Nuestra historia</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li><a href="#">Somos UANE</a></li>
                <li class="active text-gray-silver">Nuestra historia</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">46 años transformando vidas</h2>
              {{-- <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
              <p align="justify">Hace 46 años, un grupo de personas tuvieron una visión de formar una Universidad cuyo principio fundamental era generar oportunidades para una educación superior de calidad para las personas que se encontraban inmersas en el campo laboral. Con base en este compromiso social, fue que en 1974 se iniciaron las primeras clases en UANE dando a todos los fundadores una experiencia gratificante y a la vez extenuante, ya que el crecimiento se presentó de forma acelerada.</p>
             <p>Actualmente UANE es una universidad con más de 10,500 estudiantes, más de 45,000 egresados en los niveles de bachillerato, licenciatura y postgrado, además de 8 campus en 3 estados de la república mexicana y seguimos expandiéndonos por todo México con nuestro nuevo programa de “Educación en línea”.</p>
            </div>
            <div class="col-md-6">
              <div class="video-popup">                
                  <img alt="" src="/multi/images/uane_fachada.jpg" class="img-responsive img-fullwidth">
              </div>
            </div>
          </div>
            <div class="row">
              <hr>
              <div class="col-md-6 mt-10">
                <h4 class="text-uppercase font-weight-600 mt-0 font-20 line-bottom text-theme-colored">Misión</h4>
                <p>Generar oportunidades para desarrollar personas ejemplares, comprometidas con su futuro.</p>
                <h4 class="text-uppercase font-weight-600 mt-0 font-20 line-bottom text-theme-colored">Visión</h4>
                <p>Estar entre las 10 mejores universidades particulares de México y lograr un crecimiento anual de alumnos de al menos 7%.</p>
              </div>
              <div class="col-md-6 mt-10">
                <h4 class="text-uppercase font-weight-600 mt-0 font-20  text-theme-colored">Nuestros valores</h4>

                <h4 class="text-uppercase font-weight-600 mt-0 font-16 line-bottom text-theme-colored">Honestidad</h4>
                <p>Actuamos con integridad, congruencia y rectitud en nuestro que hacer cotidiano y nos conducimos con apego a la verdad.</p>
                <h4 class="text-uppercase font-weight-600 mt-0 font-16 line-bottom text-theme-colored">Responsabilidad</h4>
                <p>Estamos comprometidos con la comunidad universitaria y con la sociedad, con esto desempeñamos nuestro trabajo con exigencia y profesionalismo.</p>
                <h4 class="text-uppercase font-weight-600 mt-0 font-16 line-bottom text-theme-colored">Desarrollo humano</h4>
                <p>Construimos un ambiente de oportunidades, respeto y confianza para motivar a la pasión por el aprendizaje y la superación permanentes.</p>
                <h4 class="text-uppercase font-weight-600 mt-0 font-16 line-bottom text-theme-colored">Servicio</h4>
                <p>Nos vinculamos permanentemente con nuestro entorno para satisfacer sus necesidades con calidad, oportunidad y trato amable.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('partial.datos')

@endsection
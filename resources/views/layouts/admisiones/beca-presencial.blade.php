@extends('index')

@section('title', 'Becas presenciales')

@section('meta-desc', 'Conoce todas las becas que la universidad tiene para ti.')

@section('content')
   <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Becas presenciales</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li><a href="#">Somos UANE</a></li>
                <li class="active text-gray-silver">Becas presenciales</li>
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
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Beca servicio</h2>
              {{-- <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
              <p>La Beca Servicio se otorga en pesos y el monto autorizado se aplica exclusivamente al costo de la colegiatura. Se otorga a los estudiantes de escasos recursos económicos que tengan un promedio de aprovechamiento académico de por lo menos 80 sobre 100, además de tener buena conducta. La beca deberá ser retribuida mediante actividades de servicio ya sea en beneficio de la Universidad o de la Comunidad.</p>
              <a class="btn btn-theme-colored btn-flat btn-xl mt-10 mb-sm-30" href="http://sw.uane.edu.mx/BecasUANE/" target="_blank">¡Solicita tu beca! →</a>
            </div>
            <div class="col-md-6">
              <div class="video-popup">                
                  <img alt="" src="/multi/images/beca-presencial.jpg" class="img-responsive img-fullwidth">
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            
            <div class="col-md-6">
              <div class="video-popup">                
                  <img alt="" src="/multi/images/convenios.jpg" class="img-responsive img-fullwidth">
              </div>
            </div>
            <div class="col-md-6">
              <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Beca Excelencia </h2>
              {{-- <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
              <p>La Beca Excelencia para la licenciatura cubre el 50% del monto total de la colegiatura y se otorga a los alumnos egresados del bachillerato de nuestra Casa de Estudios y de otras instituciones que cuenten con un promedio de aprovechamiento académico mínimo de 95.</p>
              <p>La Beca Excelencia para el bachillerato cubre el 50% del monto total de la colegiatura, se otorga a los alumnos egresados de secundaria con promedio de aprovechamiento académico mínimo de 90.</p>
              <p>Para conservar este tipo de beca, se deberá mantener el promedio académico de 95 para licenciatura y 90 para bachillerato. Su otorgamiento es independiente de la condición económica del candidato, por lo que no es necesario incluir la documentación que justifique una situación económico-familiar limitada.</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Beca Convenio</h2>
              {{-- <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
              <p>Si el alumno, sus papás o cónyuge laboran en una empresa que tenga convenio con UANE se podrá obtener de manera automática una beca del 33%.</p>
              <p>*Aplican restricciones. Todas las becas se aplican exclusivamente al costo de las colegiaturas.</p>
            </div>
            <div class="col-md-6">
              <div class="video-popup">                
                  <img alt="" src="/multi/images/programas/EL.jpg" class="img-responsive img-fullwidth">
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('partial.datos')

@endsection
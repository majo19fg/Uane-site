@extends('index') 
@section('title', 'El Rector') 
@section('meta-desc', 'Jorge Eduardo Verástegui Saucedo nació en la ciudad de Saltillo, Coahuila el día 8
de junio de 1956. Estudió la Licenciatura en Ciencias de la Comunicación, por el Instituto Tecnológico y de Estudios Superiores
de Monterrey con un postgrado en Gobernanza de UANE.') 
@section('content')
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/banner.jpg">
  <div class="container pt-70 pb-20">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-white">Jorge Eduardo Verástegui Saucedo</h2>
          <ol class="breadcrumb text-left text-black mt-10">
            <li><a href="/">Inicio</a></li>
            <li><a href="#">Somos UANE</a></li>
            <li class="active text-gray-silver">El Rector</li>
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
          <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">45 años transformando vidas</h2>
          {{--
          <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
          <p align="justify">Jorge Eduardo Verástegui Saucedo nació en la ciudad de Saltillo, Coahuila el día 8 de junio de 1956. Estudió la
            Licenciatura en Ciencias de la Comunicación, por el Instituto Tecnológico y de Estudios Superiores de Monterrey
            con un postgrado en Gobernanza de UANE. Adicionalmente, participó en el Programa de Auditoria en Comunicación
            Organizacional, por la Universidad de Búfalo en el ITESM; Programa de Planeación y Mercadotecnia, por la Universidad
            de Columbia, realizado en el Grupo Industrial Saltillo; Programa de Aptitudes Directivas I y II, por el Instituto
            de Mandos Intermedios, en Monterrey, Nuevo León.<br><br></p>
        </div>
        <div class="col-md-6">
          <div class="video-popup">
            <img alt="" src="/multi/images/rector-semblanza.jpg" class="img-responsive img-fullwidth">
          </div>
        </div>

        <div class="col-md-12">
          <p align="justify">
            Tiene un Diplomado en Comunicación por el ITESM y participó en el Programa de Dirección de Empresas en IPADE.<br><br>            Sus estudios de primaria, secundaria y bachillerato, los realizó en el Colegio México en la ciudad de Saltillo,
            Coahuila.<br><br> Ha sido Consejero de Nacional Financiera y del Instituto Tecnológico de Monterrey, Campus Saltillo;
            fue presidente de CANACINTRA, delegación Saltillo y del Centro Empresarial Coahuila Sureste (COPARMEX).<br><br>            En el sector empresarial se desempeñó como Gerente de Publicidad y Promoción en Cinsa, Gerente de la Agencia
            de Publicidad Interna de Grupo Industrial Saltillo; Gerente de Marca Cinsa y General Electric en Industrias CONFAD,
            así como Gerente de Mercadotecnia y Publicidad en esa misma empresa.<br><br> Fue Gerente Corporativo de Relaciones
            Públicas de Grupo Industrial Saltillo y Director General de esa misma área.<br><br> En el sector gubernamental
            se desempeñó como Subsecretario de Vinculación entre el sector productivo y el educativo de la Secretaria de
            Fomento Económico; Secretario de Fiscalización y Rendición de Cuentas y Secretario de Salud del Gobierno del
            Estado de Coahuila.<br><br> Su último cargo fue como Secretario del Ayuntamiento de la ciudad de Saltillo, Coahuila.<br><br>            A partir del día 2 de abril de 2018, se desempeña como Rector de UANE, Institución Educativa con presencia en
            los estados de Coahuila, Tamaulipas y Nuevo León.</p>
        </div>


      </div>
    </div>
  </div>
</section>
  @include('partial.datos')
@endsection
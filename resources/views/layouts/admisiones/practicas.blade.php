@extends('index') 
@section('title', 'Prácticas profesionales') 
@section('content')
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
    <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white">Prácticas profesionales</h2>
                    <ol class="breadcrumb text-left text-black mt-10">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#">Vinculación</a></li>
                        <li class="active text-gray-silver">Prácticas profesionales</li>
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
                <div class="col-md-12">
                    <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
                    <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Prácticas profesionales</h2>
                    {{--
                    <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
                    <p>UANE es una Universidad que este año cumple 45 años de generar experiencias que transforman, contando
                        con reconocimiento de validez oficial de estudios.</p>
                    <p>Actualmente nos encontramos en 3 estados, con 8 campus. Cada uno de ellos cuenta con instalaciones y
                        aulas equipadas, bibliotecas físicas y virtuales, equipos audiovisuales, centro de cómputo y en general
                        con el material didáctico necesario para el excelente desarrollo de oportunidades.</p>
                    <p>Apoyamos a las empresas vinculadas a dar a conocer y cubrir sus vacantes de prácticas profesionales y
                        bolsa de trabajo, proporcionando los curriculum vitae de la comunidad estudiantil y egresados, construyendo
                        un ambiente de oportunidades para ambas partes. </p>
                </div>

            </div>
        </br>

            <div class="row">
                <div class="col-md-12">
                    <div class="slider">
                        <div class="slide-track">
                           <div class="slide">
                                <a href="https://www.facebook.com/colegiofaradaydetorreon/"><img src="{{ asset('/multi/images/practicas-profesionales/colegio-faraday.jpg') }}" alt="" /></a>
                            </div>
                            <div class="slide">
                                    <a href="http://www.colegiolosangelesdetorreon.edu.mx/"><img src="{{ asset('/multi/images/practicas-profesionales/colegio-los-angeles.jpg') }}" alt="" /></a>
                            </div>
                            <div class="slide">
                                    <a href="https://www.kenworthlaguna.com.mx/"><img src={{ asset('/multi/images/practicas-profesionales/kenworth.jpg') }} alt="" /></a>
                            </div>
                            <div class="slide">
                                    <a href="https://www.ahmsa.com/"><img src={{ asset('/multi/images/practicas-profesionales/ahmsa.jpg') }} alt="" /></a>
                            </div>
                            <div class="slide">
                                    <a href="https://www.facebook.com/DifMonclova/" ><img src={{ asset('/multi/images/practicas-profesionales/dif-monclova.jpg') }} alt="" /></a>
                            </div>
                            <div class="slide">
                                    <a href="http://www.gunderson-gimsa.com.mx/" ><img src={{ asset('/multi/images/practicas-profesionales/gunderson.jpg') }} alt="" /></a>
                            </div>
                            <div class="slide">
                                    <a href="http://joysonsafety.com/?lang=es" ><img src={{ asset('/multi/images/practicas-profesionales/joyson.jpg') }} alt="" /></a>
                            </div>
                            <div class="slide">
                                   <img src={{ asset('/multi/images/practicas-profesionales/sndtmmsc.jpg') }} alt="" />
                            </div>
                            <div class="slide">
                                    <a href="http://upmf.edu.mx/" ><img src="{{ asset('/multi/images/practicas-profesionales/upmf.jpg') }}" alt="" /></a>
                            </div>
                            <!--<div class="slide">
                                    <a href=http://www.utrc.edu.mx/"  ><img src={{ asset('/multi/images/practicas-profesionales/UTRCC.jpg') }} height="2500" width="1500" alt="" /></a>
                            </div>-->
                        </div>
                    </div>
                </div>

            </div>
        </br>

        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <div class="slide-track">
                       <div class="slide">
                            <a href="https://www.comimsa.com.mx/portal/"><img src="{{ asset('/multi/images/practicas-profesionales/Comimsa.jpg') }}" alt="" /></a>
                        </div>
                        <div class="slide">
                                <a href=https://coparmex.org.mx/><img src="{{ asset('/multi/images/practicas-profesionales/Coparme.jpg') }}" alt="" /></a>
                        </div>
                        <div class="slide">
                                <a href="https://www.daimler.com/en/"><img src={{ asset('/multi/images/practicas-profesionales/Daimler.jpg') }} alt="" /></a>
                        </div>
                        <div class="slide">
                                <a href="https://www.fcagroup.com/en-US/Pages/home.aspx"><img src={{ asset('/multi/images/practicas-profesionales/FCA.jpg') }} alt="" /></a>
                        </div>
                        <div class="slide">
                                <a href="http://www.imss.gob.mx/"><img src={{ asset('/multi/images/practicas-profesionales/IMSS.jpg') }} alt="" /></a>
                        </div>
                        <div class="slide">
                                <a href="https://www.gob.mx/issste"><img src={{ asset('/multi/images/practicas-profesionales/ISSSTE.jpg') }} alt="" /></a>
                        </div>
                        <div class="slide">
                                <a href="https://www.nemak.com/" ><img src={{ asset('/multi/images/practicas-profesionales/Nemak.jpg') }} alt="" /></a>
                        </div>
                        <div class="slide">
                            <a href="https://www.sat.gob.mx/home" > <img src={{ asset('/multi/images/practicas-profesionales/SAT.jpg') }} alt="" /></a>
                        </div>
                        <div class="slide">
                            <a href="http://www.grupoantolin.com/en" > <img src={{ asset('/multi/images/practicas-profesionales/antolin.jpg') }} alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
    </div>
</section>
          <!--  <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="owl-carousel-1col" data-dots="true">
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/colegio-faraday.jpg') }}" alt="">
                            <p>"En el Colegio Faraday educamos y formamos personas competitivas, preparadas para la vida."<br>
                            Es una institución 100% Bilingüe comprometidos con el crecimiento académico y personal en todos sus alumnos. Ubicado en la ciudad de Torreón Coahuila. 
                            </p>
                            <a href="https://www.facebook.com/colegiofaradaydetorreon/" target="_blank" class="btn btn-theme-colored text-center">Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/colegio-los-angeles.jpg') }}" alt="">
                            <p>"Nos vemos como una Institución líder en la formación académica..."<br>
                            El Colegio Los Ángeles cuenta con servicios educativos sólidos, un personal altamente capacitado y atención personalizada, grupos reducidos, orientación vocacional, entre más cosas. El Colegio se encuentra en la ciudad de Torreón Coahuila. 
                            </p>
                            <a href="http://www.colegiolosangelesdetorreon.edu.mx/" target="_blank" class="btn btn-theme-colored text-center">Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/kenworth.jpg') }}" alt="">
                            <p>Kenworth Laguna es una empresa líder en la industrial del transporte de carga dedicada a la venta de camiones, tracto camiones, refacciones y servicio.</p>
                            <a href="https://www.kenworthlaguna.com.mx/" target="_blank" class="btn btn-theme-colored text-center">Ir al sitio</a>
                        </div>

                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/ahmsa.jpg') }}" alt="">
                            <p>Altos Hornos de México, S.A.B. de C.V. es la mayor siderúrgica integrada del país. Sus oficinas corporativas se localizan en Monclova, Coahuila, en la región centro del Estado de Coahuila, a 250 kilómetros de la frontera con Estados Unidos</p>
                            <a href="https://www.ahmsa.com/" target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/dif-monclova.jpg') }}" alt="">
                            <p>El Sistema Nacional para el Desarrollo Integral de la Familia es una institución pública mexicana de asistencia social fundada en 1977, ​ que se enfoca en desarrollar el bienestar de las familias mexicanas.​</p>
                            <a href="https://www.facebook.com/DifMonclova/  " target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/gunderson.jpg') }}" alt="">
                            <p>Somos una empresa altamente competitiva y por ello el acondicionamiento de la planta de GUNDERSON-GIMSA, se llevó a cabo simultáneamente con la implementación de la línea de producción para carros tolva, ambas actividades fueron realizadas en un tiempo récord.</p>
                            <a href="http://www.gunderson-gimsa.com.mx/" target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/joyson.jpg') }}" alt="">
                            <p>Joyson Safety Systems, anteriormente conocida como Key Safety Systems, es una compañía de propiedad china que desarrolla y fabrica sistemas de seguridad automotriz.</p>
                            <a href="http://joysonsafety.com/?lang=es" target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/sndtmmsc.jpg') }}" alt="">
                            <p></p>
                            {{-- <a href="#" target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a> --}}
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/upmf.jpg') }}" alt="">
                            <p>La Universidad Politécnica de Monclova-Frontera es la primer Universidad Politécnica en Coahuila con el modelo BIS, modelo innovador basado en competencias en América Latina que tiene como ejes rectores ser Bilingüe, Internacional y Sustentable.</p>
                            <a href="http://upmf.edu.mx/" target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('/multi/images/practicas-profesionales/UTRCC.jpg') }}" alt="">
                            <p>En la Universidad Tecnológica de la Región Carbonífera contamos con un modelo educativo altamente reconocido por la calidad de sus programas académicos.</p>
                            <a href="http://www.utrc.edu.mx/" target="_blank" class="btn btn-theme-colored text-center"> Ir al sitio</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>-->
    @include('partial.datos')
@endsection
@push('css')
    <style>
    
@-webkit-keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
            transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
            transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: white;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
  height: 250px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 960px;
}
.slider::before, .slider::after {
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 250px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  -webkit-transform: rotateZ(180deg);
          transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 20s linear infinite;
          animation: scroll 20s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: 250px;
}


</style>
@endpush
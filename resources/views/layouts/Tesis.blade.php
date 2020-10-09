@extends('index') 
@section('title', 'Tesis de Doctorado') 
@section('content')
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
    <div class="container pt-70 pb-20">
        <!-- Section Content -->
      <!--  <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white">Empleabilidad</h2>
                    <ol class="breadcrumb text-left text-black mt-10">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#">Vinculación</a></li>
                        <li class="active text-gray-silver">Empleabilidad</li>
                    </ol>
                </div>
            </div>
        </div>-->
    </div>
</section>

<!-- Section: About -->
<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
                    <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Tesis de Doctorado</h2>
                    {{--
                    <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
                    <p align="justify">La Universidad Autónoma del Noreste es una prestigiada institución académica, cuyo trabajo está centrado en la calidad que nos permite aportar profesionistas que mejoren su entorno productivo. </br> Durante <b>45 años de experiencia</b> en el sector educativo hemos egresado más de 45 mil personas, que acorde a nuestra misión son ejemplares y comprometidas con su futuro. En UANE creemos que el trabajo requiere no solo competencias técnicas sino también habilidades que permiten afrontar los retos del futuro. </br>Como Universidad sabemos que el mercado laboral es dinámico, cambia, incluso hoy podemos decir que estamos preparando a jóvenes profesionistas para desempeñarse en trabajos que aún no existen y ante problemas que no se han presentado.</p>
                    <p align="justify">La empleabilidad es la principal expectativa de quien deposita en nosotros sus aspiraciones, debemos siempre desarrollar alianzas, estrategias y pasos firmes para asegurar la inserción de nuestros alumnos en el mercado productivo. </br>Reconocemos la importancia de trabajar en las siguientes estrategias:</p>
                    
                    <ul class="list theme-colored circle-double-right">
                    <li>Visibilización de la empleabilidad como tema prioritario institucionalmente.</li>
                    <li>Reconocimiento oficial de Planes o Estrategias de Empleabilidad.</li>
                    <li>Servicios de colocación laboral.</li>
                    <li>Generación de experiencias laborales y extracurriculares.</li>
                    <li>Instalar Espacios de confluencia entre estudiantes y empresas.</li>
                    </ul>

                   
                 <p align="justify">Durante este semestre UANE ha impactado, mediante muchas actividades, el desarrollo de competencias y habilidades útiles para la empleabilidad. Desde jornadas de actualización, ferias de empleo y proyectos emprendedores por mencionar solo algunos. </br>Hemos firmado nuevos convenios de vinculación profesional en todas las ciudades en que tenemos presencia, tanto en el noreste como a nivel nacional e internacional, así como el establecimiento de mecanismos que impulsen la colocación de nuestros egresados. <b>Llegó el momento. </b></p>
                 <br/>
                 <div class="col-md-12">
                  <div class="gallery2">
                <div align="center"><a href="{{ asset('/multi/pdf/Infografía prácticas profesionales.pdf') }}"><img src="{{ asset('/multi/images/practicas-profesionales/practicas.jpg') }}"/></a>
                </div>
              </div>
            </div>
            <br/>
                 <div class="col-md-4">
                  <div class="gallery">
                      <div><a href="{{ asset('/multi/pdf/RESULTADOS CURSOS JUNIO 2019.pdf') }}"><img src="{{ asset('/multi/images/campus/Experiencias laborales.jpg') }}"width="250px" height="250px"id=experiencias1 /></a>
                    </div>
                  </div>  
              </div>  
              <!--<div class="col-md-4">
                      <div class="gallery">
                    <div align="center"><a href="{{ asset('/multi/pdf/INFORME POR DIMENSIONES.pdf') }}"><img src="{{ asset('/multi/images/campus/Fotos de campus-13.png') }}" width="250px" height="250px"id=informe1 /></a>
                    </div>
                  </div>
                </div>-->
                <div class="col-md-4">
                  <div class="gallery">
                <div align="center"><a href="{{ asset('/multi/pdf/INFORME POR DIMENSIONES JUL-DIC19.pdf') }}"><img src="{{ asset('/multi/images/campus/Fotos de campus-12.png') }}" width="250px" height="250px"id=informe1 /></a>
                </div>
              </div>
            </div>
               <div class="col-md-4">
                  <div class="gallery">
                <div align="center"><a href="{{ asset('/multi/pdf/Informe de empleabilidad.pdf') }}"><img src="{{ asset('/multi/images/campus/Fotos de campus-14.jpg') }}" width="250px" height="250px"id=informe1 /></a>
                </div>
              </div>
            </div>
                </div>
                </div>
                 <p align="justify"><b>Da clic sobre el Campus de tu preferencia para más información.</b></p>
            <div class="col-md-4">
                <div class="gallery">
                    <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS SALTILLO.pdf') }}" onMouseOver="cambiar();" onMouseOut="volver();"><img src="{{ asset('/multi/images/campus/uane-saltillo.jpg') }}" width="250px" height="250px"id=saltillo1 /></a> 
                  </div>
                </div>  
            </div>  
            <div class="col-md-4">
                    <div class="gallery">
                  <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS TORREON.pdf') }}"onMouseOver="cambiar3();" onMouseOut="volver3();"><img src="{{ asset('/multi/images/campus/uane-torreon.jpg') }}" width="250px" height="250px"id=torreon1 /></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                    <div class="gallery">
                      <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS SABINAS.pdf') }}"onMouseOver="cambiar5();" onMouseOut="volver5();"><img src="{{ asset('/multi/images/campus/uane-sabinas.jpg') }}" width="250px" height="250px"id=sabinas1 /></a>
                  </div>
                  </div>
                </div>     
                <div class="col-md-4"> 
                        <div class="gallery">
                          <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS PIEDRAS NEGRAS.pdf') }}"onMouseOver="cambiar6();" onMouseOut="volver6();"><img src="{{ asset('/multi/images/campus/uane-piedras-negras.jpg') }}" width="250px" height="250px"id=piedras1 /></a>
                    </div>   
                   </div>
                  </div> 
                  <div class="col-md-4">
                        <div class="gallery">
                      <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS MONTERREY.pdf') }}"onMouseOver="cambiar2();" onMouseOut="volver2();"><img src="{{ asset('/multi/images/campus/uane-monterrey.jpg') }}" width="250px" height="250px"id=monterrey1 /></a> 
                    </div>
                  </div> 
                </div>   
                <div class="col-md-4"> 
                      <div class="gallery">
                        <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS REYNOSA.pdf') }}"onMouseOver="cambiar4();" onMouseOut="volver4();"><img src="{{ asset('/multi/images/campus/uane-reynosa.jpg') }}" width="250px" height="250px"id=reynosa1 /></a>
                  </div>   
                 </div>
                </div> 
  

        </div>
    </div>
    </div>
</section>
    @include('partial.datos')
@endsection

@push('css')
<style>
    div.gallery {
      margin: 10px;
      border: 2px solid #ccc;
      float: left;
      width: 250px;
      height: 250px;
    }
    
    div.gallery img {
        width: 100%;
      height: auto;
    }
    
    </style>
@endpush
@push('css')
<style>
    div.gallery2 {
      margin: 10px;
      border: 2px solid #ccc;
      float: left;

    }
    
    div.gallery2 img {
        width: 100%;
      height: auto;
    }
    
    </style>
@endpush
@push('js')
<script type="text/javascript">
 
    function cambiar () {
     document.getElementById('saltillo1').src = "{{ asset('/multi/images/campus/MASLW.png') }}";
    }
    
    function volver () {
     document.getElementById('saltillo1').src = "{{ asset('/multi/images/campus/uane-saltillo.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar2 () {
     document.getElementById('monterrey1').src = "{{ asset('/multi/images/campus/MAMTY.png') }}";
    }
    
    function volver2 () {
     document.getElementById('monterrey1').src = "{{ asset('/multi/images/campus/uane-monterrey.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar3 () {
     document.getElementById('torreon1').src = "{{ asset('/multi/images/campus/MATORREON.png') }}";
    }
    
    function volver3 () {
     document.getElementById('torreon1').src = "{{ asset('/multi/images/campus/uane-torreon.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar4 () {
     document.getElementById('reynosa1').src = "{{ asset('/multi/images/campus/MAREY.png') }}";
    }
    
    function volver4 () {
     document.getElementById('reynosa1').src = "{{ asset('/multi/images/campus/uane-reynosa.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar5 () {
     document.getElementById('sabinas1').src = "{{ asset('/multi/images/campus/MASABINAS.png') }}";
    }
    
    function volver5 () {
     document.getElementById('sabinas1').src = "{{ asset('/multi/images/campus/uane-sabinas.jpg') }}";
    }
    
   </script>
      <script type="text/javascript">
 
        function cambiar6 () {
         document.getElementById('piedras1').src = "{{ asset('/multi/images/campus/MAPIEDRAS.png') }}";
        }
        
        function volver6 () {
         document.getElementById('piedras1').src = "{{ asset('/multi/images/campus/uane-piedras-negras.jpg') }}";
        }
        
       </script>
          <script type="text/javascript">
 
            function cambiar7 () {
             document.getElementById('experiencias1').src = "{{ asset('/multi/images/campus/Experiencias laborales.jpg') }}";
            }
            
            function volver7 () {
             document.getElementById('experiencias1').src = "{{ asset('/multi/images/campus/OExperiencias.jpg') }}";
            }
            
           </script>
              <script type="text/javascript">
         
                function cambiar8 () {
                 document.getElementById('informe1').src = "{{ asset('/multi/images/campus/Informe de dimensiones.jpg') }}";
                }
                
                function volver8 () {
                 document.getElementById('informe1').src = "{{ asset('/multi/images/campus/OInforme.jpg') }}";
                }
                
               </script>
@endpush
@extends('index')

@section('content')
	<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/46banner.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Noticias y comunicados</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li class="active text-gray-silver">Noticias y comunicados</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/multi/images/noticias/fc7a43f6-8493-4633-978d-68b598b263ea.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><a class="text-uppercase" href="#">Firma convenio IMEF & UANE.</a></h4>
                </div>
                <div class="entry-meta pl-15">
                  <ul class="list-inline">
                    <li>Fecha: <span class="text-theme-color-2"> 07/05/2021</span></li>
                    <li>Por: <span class="text-theme-color-2">UANE</span></li>
                  </ul>
                </div>
                <div class="entry-content mt-10">
                  <p style="text-align: justify;">El día viernes 07 de mayo se llevó a cabo la firma de Convenio de colaboración entre la Universidad Autónoma del Noreste, A.C. y el Instituto Mexicano de Ejecutivo de Finanzas, A.C. (IMEF).</p>
                  <p style="text-align: justify;">IMEF es una asociación civil sin fines de lucro que convoca y agrupa a destacados miembros del sector financiero mexicano. Tiene presencia en 20 ciudades del país a través de los Grupos IMEF. Además, forma parte de la International Association of Financial Executives Institutes.</p>
                  <p style="text-align: justify;">El objetivo del Instituto es contribuir al mejoramiento profesional y humano de sus asociados, ofreciéndoles formación y actualización en finanzas, favoreciendo así el desarrollo de la economía y de la sociedad en general. Mediante las actividades de la Fundación de Investigación IMEF y sus 17 Comités Técnicos Nacionales impulsa la generación de conocimiento y la innovación financiera.</p>
                  <p style="text-align: justify;">La firma de convenio tiene como finalidad otorgar a los socios, empleados, conyugues e hijos:</p>
                  <p style="text-align: justify;">- Un 33% de beca aplicable en las mensualidades de bachillerato, carrera, especialidades y maestrías presenciales.</p>
                  <p style="text-align: justify;">- Un 25% de beca aplicable en las mensualidades de doctorados presenciales.</p>
                  <p style="text-align: justify;">- Así como un 20% de descuento en las mensualidades de bachillerato, carreras y postgrados 100% en Línea.</p>
                  <p style="text-align: justify;">A la firma de convenio asistieron Jorge Eduardo Verástegui Saucedo, Rector de la Universidad; Ángel García Lascuraín Valero, Presidente del Consejo Ejecutivo Nacional; Gerardo González Ayala, Director General del IMEF; Ludivina Leija Rodríguez, Presidenta del Consejo Directivo del IMEF Coahuila Sureste; Antonio H. Tonone Del Bosque, Director de Finanzas; Miguel Gutiérrez Iracheta, Director de Operaciones y Calidad Académica; Héctor A. Gil Müller, Director de Crecimiento; Armando José Sánchez, Director de Oferta Académica y Giovanni de la Peña Merlos, Director del campus Saltillo.</p>

                    <!--<p style="text-align: justify;">La inauguración se llevó a cabo el día 15 de marzo en la capital de Coahuila, en donde se citaron a más de 700 jugadores a reunirse en el gimnasio principal para la ceremonia de apertura, en donde los equipos de baile y música se dieron la tarea de recibir y animar con un espectáculo a los visitantes de Torreón, Piedras Negras, Monclova, Matamoros, Reynosa, Monterrey y Sabinas.</p>-->

                   <!-- <p style="text-align: justify;">Reuniendo a deportistas, alumnos, maestros y familia, el rector de UANE Jorge Verástegui Saucedo nos recordó lo especial que son los InterUANE en especial el de este año, ya que se celebra el 45 aniversario de la institución.</p>-->

                 <!-- <p style="text-align: justify;">Tras tres días que los equipos dejaron todo en las canchas, se dio el cierre el día 17 de marzo con grandes resultados donde la armonía, solidaridad y hermandad se hicieron presentes, dejándonos deseOSOS de la siguiente edición, de la cual próximamente se revelará la sede.</p>-->
                  <div class="col-md-12">
                    <div class="gallery"> 
                        <div><img class="img-responsive img-fullwidth" src="{{ asset('/multi/images/noticias/9f3cea71-2781-412d-a615-c7ccf82f4f24.jpg') }}"/></a> 
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
      width: 100%;
      height: auto;
    }
    
    div.gallery img {
        width: 100%;
      height: auto;
    }
    
    </style>
@endpush
             
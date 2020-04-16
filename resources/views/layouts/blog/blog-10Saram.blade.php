@extends('index')

@section('content')
	<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
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
                  <div class="post-thumb thumb"> <img src="/multi/images/SARAM/SARAM1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><a class="text-uppercase" href="#">Inaguración del primer Employment Center en Monterrey</a></h4>
                </div>
                <div class="entry-meta pl-15">
                  <ul class="list-inline">
                    <li>Fecha: <span class="text-theme-color-2"> 20/09/2019</span></li>
                    <li>Por: <span class="text-theme-color-2">UANE</span></li>
                  </ul>
                </div>
                <div class="entry-content mt-10">
                  <p style="text-align: justify;">El pasado 20 de agosto se inauguró un centro de empleabilidad dentro de las instalaciones de la Universidad Americana del Noreste Campus Monterrey quien cuenta con una alianza con la empresa coreana SARAM HUMAN CONSULTING FIRM. 
                    Se contó con la presencia de autoridades y personalidades como Johnny Hwang Director General de SARAM HR, el ingeniero Ricardo Martínez Neira presidente del consejo directivo y asamblea de fundadores UANE, el Licenciado Jorge Eduardo Verástegui Saucedo Rector de UANE y del maestro Marco Antonio García García director de UANE Campus Monterrey. </p>
                    La finalidad de SARAM Human Consulting Firm, es encontrar talentos de alta calidad mediante la contratación de nuevos empleados de nivel operativo hasta ejecutivo.
                    
                    <p style="text-align: justify;">El objetivo del Employment Center dentro de UANE es potenciar oportunidades de empleo mediante prácticas profesionales y bolsa de trabajo para que todo alumno antes de que termine sus estudios profesionales cuente con un trabajo estable.</p>
                    
                    <p style="text-align: justify;">Con una velada única en nuestra universidad, se hizo el corte del listón para dar así inicio a las operaciones del Centro de Gestión de Talento Employment Center By SARAM HR.
                    Si eres egresado de la Universidad también puedes acudir al Employment Center para mayor información.</p>
                    
                

                    <!--<p style="text-align: justify;">La inauguración se llevó a cabo el día 15 de marzo en la capital de Coahuila, en donde se citaron a más de 700 jugadores a reunirse en el gimnasio principal para la ceremonia de apertura, en donde los equipos de baile y música se dieron la tarea de recibir y animar con un espectáculo a los visitantes de Torreón, Piedras Negras, Monclova, Matamoros, Reynosa, Monterrey y Sabinas.</p>-->

                   <!-- <p style="text-align: justify;">Reuniendo a deportistas, alumnos, maestros y familia, el rector de UANE Jorge Verástegui Saucedo nos recordó lo especial que son los InterUANE en especial el de este año, ya que se celebra el 45 aniversario de la institución.</p>-->

                 <!-- <p style="text-align: justify;">Tras tres días que los equipos dejaron todo en las canchas, se dio el cierre el día 17 de marzo con grandes resultados donde la armonía, solidaridad y hermandad se hicieron presentes, dejándonos deseOSOS de la siguiente edición, de la cual próximamente se revelará la sede.</p>-->
                 <p style="text-align: middle;"><b>¡UANE Llegó el momento!</b></p>
                  <p style="text-align: justify;">¡Quédate al pendiente de nuestra sección de noticias para conocer más!</p>
                  <div class="col-md-6">
                    <div class="gallery">
                        <div><img class="img-responsive img-fullwidth" src="{{ asset('/multi/images/SARAM/SARAM2.png') }}" /></a> 
                      </div>
                    </div>  
                </div>  
                <div class="col-md-6">
                        <div class="gallery">
                            <div><img class="img-responsive img-fullwidth" src="{{ asset('/multi/images/SARAM/SARAM3.png') }}" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="gallery">
                        <div><img class="img-responsive img-fullwidth" src="{{ asset('/multi/images/SARAM/SARAM4.png') }}" />
                  </div>
                </div>  
            </div>  

            </div>
            </div>
        </div>
        </div>
    </section>
        @include('partial.datos')
             
    @endsection
    

<!-- Header -->
<header id="header" class="header">
  <div class="header-top sm-text-center p-0" style="background-color: #F4C300">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="widget no-border m-0">
            <ul class="list-inline font-13 sm-text-center mt-5">
              <li>
                <a class="text-white" href="{{ route('somos-uane.legales') }}">Términos y condiciones</a>
              </li>
              <li class="text-white">|</li>
              <li>
                <a class="text-white" href="#">SIUANE</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
            <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
              <li><a target="_blank" href="https://www.facebook.com/UANEOficial/"><i class="fab fa-facebook-square text-white"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/uaneosos"><i class="fab fa-twitter text-white"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/uaneoficial/"><i class="fab fa-instagram text-white"></i></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/school/universidad-aut%C3%B3noma-del-noreste-a.c./"><i class="fab fa-linkedin text-white"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle p-0 bg-lightest xs-text-center">
    <div class="container pt-0 pb-0">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-5">
          <div class="widget no-border m-0">
            <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="/"><img src="/multi/images/uane-logo.png" alt=""></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
            <ul class="list-inline">
              <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
              <li>
                <a href="#" class="font-12 text-gray text-uppercase">Llámanos</a>
                <h5 class="font-14 m-0"> Lun a Vie 9:00 am – 9:00 pm<br>800 822 8263</h5>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
            <ul class="list-inline">
              <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
              <li>
                <a href="#" class="font-12 text-gray text-uppercase">Visítanos</a>
                <h5 class="font-13 text-black m-0">  Lun a Vie 9:00 - 1:00 pm <br>y de 4:00 - 8:30 pm</h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
      <div class="container">
        <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
          <ul class="menuzord-menu">
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Inicio</a></li>
            <li class="
            @if (request()->is('programas'))
            {{ request()->is('programas')?'active':'' }}
            @elseif (request()->is('programas/*'))
            {{ request()->is('programas/*') ? 'active' : '' }}
            @endif
            "><a href="#">Programas</a>
              <div class="megamenu">
                <div class="megamenu-row">
                  <div class="col4">
                    <ul class="list-unstyled list-dashed">
                      <h4><a href="{{ route('programas.index') }}">Tipos de Programas</a></h4>
                      <li><a href="{{ route('programas.bach') }}">Bachillerato</a></li>
                      <li><a href="{{ route('programas.lic') }}">Licenciatura</a></li>
                      <li><a href="{{ route('programas.ing') }}">Ingenieria</a></li>
                      <li><a href="{{ route('programas.maes') }}">Maestría</a></li>
                      <li><a href="{{ route('programas.esp') }}">Especialidad</a></li>
                      <li><a href="{{ route('programas.doc') }}">Doctorado</a></li>
                      <li><a href="{{ route('programas.cursos') }}">Cursos en línea</a></li>
                    </ul>
                  </div>
                  <div class="col4">
                    <ul class="list-unstyled list-dashed">
                      <h4><a href="{{ route('programas.index') }}">Modalidad</a></h4>
                      <li><a href="{{ route('programas.prec') }}">Presencial</a></li>
                      <li><a href="{{ route('programas.linea') }}">En Línea</a></li>
                    </ul>
                  </div>
                  <div class="col4">
                    <ul class="list-unstyled list-dashed">
                      <h4><a href="#">Campus</a></h4>
                      <li><a href="{{ route('campus.show', 'saltillo') }}">Saltillo</a></li>
                      <li><a href="{{ route('campus.show', 'torreon') }}">Torreón</a></li>
                      <li><a href="{{ route('campus.show', 'monclova') }}">Monclova</a></li>
                      <li><a href="{{ route('campus.show', 'sabinas') }}">Sabinas</a></li>
                      <li><a href="{{ route('campus.show', 'piedras-negras') }}">Piedras Negras</a></li>
                      <li><a href="{{ route('campus.show', 'monterrey') }}">Monterrey</a></li>
                      <li><a href="{{ route('campus.show', 'reynosa') }}">Reynosa</a></li>
                      <li><a href="{{ route('campus.show', 'matamoros') }}">Matamoros</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="#">Quienes somos</a>
              <div class="megamenu">
                <div class="megamenu-row">
                  <div class="col4">
                    <ul class="list-unstyled list-dashed">
                      <h4>Somos UANE</h4>
                      <li><a href="{{ route('somos-uane.historia') }}">Nuestra historia</a></li>
                      <li><a href="{{ route('somos-uane.rector') }}">El Rector</a></li>
                    </ul>
                  </div>
                  <div class="col4">
                    <ul class="list-unstyled list-dashed">
                      <h4>Reglamento</h4>
                      <li><a target="_blank" href="/reglamentos/reglamento_bach.pdf">Bachillerato</a></li>
                      <li><a target="_blank" href="/reglamentos/reglamento_lic.pdf">Licenciatura</a></li>
                      <li><a target="_blank" href="/reglamentos/reglamentopostgrado2016.pdf">Postgrado</a></li>
                    </ul>
                  </div>
                  {{--
                  <div class="col3">
                    <ul class="list-unstyled list-dashed">
                      <h4>CISEAN</h4>
                      <li><a href="#">Investigación</a></li>
                      <li><a href="#">Cursos y maestrías</a></li>
                    </ul>
                  </div> --}}
                </div>
              </div>
            </li>
            <li><a href="#">Admisiones</a>
              <ul class="dropdown">
                {{--
                <li><a href="#">Proceso de inscripción</a>
                  <ul class="dropdown">
                    <li><a href="#">Bachillerato</a></li>
                    <li><a href="#">Licenciatura e ingenieria presencial</a></li>
                    <li><a href="#">Licenciatura e ingenieria en línea</a></li>
                    <li><a href="#">Postgrado presencial</a></li>
                    <li><a href="#">Postgrado en línea</a></li>
                  </ul>
                </li> --}} {{--
                <li><a href="#">Proceso de titulación</a>
                  <ul class="dropdown">
                    <li><a href="#">Trámites y solicitudes</a></li>
                  </ul>
                </li> --}}
                <li><a href="{{ route('admisiones.beca-presencial') }}">Becas</a></li>
                {{--
                <li><a href="#">Bibliotecas virtuales</a></li> --}}
                
              </ul>
              {{--
              <div class="megamenu">
                <div class="megamenu-row">
                  <div class="col3">
                    <ul class="list-unstyled list-dashed">
                      <h4>Poceso de inscripción</h4>
                      <li><a href="#">Bachillerato</a></li>
                      <li><a href="#">Licenciatura presencial</a></li>
                      <li><a href="#">Licenciatura en línea</a></li>
                      <li><a href="#">Postgrado presencial</a></li>
                      <li><a href="#">Postgrado en línea</a></li>
                    </ul>
                  </div>
                  <div class="col3">
                    <ul class="list-unstyled list-dashed">
                      <h4>Procesos de titulación</h4>
                      <li><a href="#">Trámites y solicitudes</a></li>
                    </ul>
                  </div>
                  <div class="col3">
                    <ul class="list-unstyled list-dashed">
                      <li><a href=""></a></li>
                      <li><a href=""></a></li>
                      <li><a href=""></a></li>
                      <li><a href=""></a></li>
                    </ul>
                  </div>
                  <div class="col3">
                    <ul class="list-unstyled list-dashed">
                      <li><a href=""></a></li>
                      <li><a href=""></a></li>
                      <li><a href=""></a></li>
                      <li><a href=""></a></li>
                    </ul>
                  </div>
                </div>
              </div> --}}
            </li>
            
            <li><a href="#">Vinculación</a>
              <ul class="dropdown">
                <li><a href="http://www.emple-ap.com/" target="_blank">ERASMUS Proyecto de empleabilidad UANE</a></li>
                <li><a href="{{ route('admisiones.convenios') }}">Convenios empresariales</a></li>
                <li><a href="{{ route('admisiones.practicas') }}">Practicas profesionales</a></li>
                <li><a href="{{ route('admisiones.empleabilidad') }}">Empleabilidad</a></li>
              </ul>
            </li>
            <li><a href="#">Aulas Virtuales</a>
              <ul class="dropdown">
                <li><a href="https://sistema.uane.edu.mx/" target="_blank">SIUANE</a></li>
                <li><a href="http://pg.uane.edu.mx/" target="_blank">Postgrado</a></li>
              </ul>
            </li>
            <li class="{{ request()->is('egresados') ? 'active' : '' }} {{ request()->is('egresados/actualizar-datos') ? 'active' : '' }}"><a href="{{ route('exauane') }}">ExaUANE</a></li>
            <li><a href="#">Vida universitaria</a>
              <ul class="dropdown">
                <li><a href="{{ route('vozuane') }}">Voz Uane</a></li>
                <li><a href="{{ route('blog.noticias') }}">Noticias</a></li>
                <li><a href="{{ route('blog.MensajesRector') }}">Mensaje del Rector</a></li>
              </ul>
            </li>

          </ul>
          <ul class="pull-right flip hidden-sm hidden-xs">
            <li>
              <!-- Modal: Book Now Starts -->
              @if (\Route::current()->getName() == 'exauane')
              <a class="btn btn-colored btn-flat  text-white font-16 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" style="background-color: #F4C300"  href="{{ route('exauane.formulario') }}"
                style="font-weight:600;">¡Regístrate!</a> @elseif(\Route::current()->getName() == 'exauane.formulario')
              <a class="btn btn-colored btn-flat  text-white font-16 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" style="background-color: #F4C300" href="{{ route('exauane.formulario') }}"
                style="font-weight:600;">¡Regístrate!</a> @else
              <a class="btn btn-colored btn-flat  text-white font-16 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" style="background-color: #F4C300" data-toggle="modal"
                data-target="#BSParentModal" style="font-weight:600;">Solicita más información</a> @endif

              <!-- Modal: Book Now End -->
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
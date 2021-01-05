<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ route('home.admin') }}"><img src="/admin/images/uane-logo-blanco.png" class="img-fluid"
      style="max-width:180px;" alt=""></span></a></div>
<div class="br-sideleft sideleft-scrollbar">
  <label class="sidebar-label pd-x-10 op-3">Navegación</label>
  <ul class="br-sideleft-menu">

    <li class="br-menu-item show-sub">
      <a href="{{ route('home.admin') }}" class="br-menu-link {{ setActiveRoute('home.admin') }}">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Panel principal</span>
      </a>
      <!-- br-menu-link -->
    </li>
    <!-- br-menu-item -->

    {{-- Roles para campus --}}
    @hasanyrole('Campus|Super Admin|Admin|Comercial')
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{ setActiveRoute(['formulario.diseno', 'diseno.campus']) }}">
        <i class="fas fa-book tx-20"></i>
        <span class="menu-item-label tx-13">Solicitudes de diseño</span>
      </a>
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('diseno.campus') }}"
            class="sub-link {{ setActiveRoute('diseno.campus') }}">Lista de solicitudes</a></li>
        <li class="sub-item"><a href="{{ route('formulario.diseno') }}"
            class="sub-link {{ setActiveRoute('formulario.diseno') }}">Formulario de diseño</a></li>
      </ul>
    </li>

  <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{ setActiveRoute(['convenios.index', 'convenios.formulario']) }}">
        <i class="fas fa-building tx-20"></i>
        <span class="menu-item-label tx-13">Convenios empresariales</span>
      </a>
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('convenios.lista') }}"
          class="sub-link {{ setActiveRoute('convenios.lista') }}">Convenios anteriores</a></li>
        <li class="sub-item"><a href="{{ route('convenios.index') }}"
            class="sub-link {{ setActiveRoute('convenios.index') }}">Convenios nuevos</a></li>
        <li class="sub-item"><a href="{{ route('convenios.formulario') }}"
            class="sub-link {{ setActiveRoute('convenios.formulario') }}">Ficha técnica de convenio</a></li>
      </ul>
    </li>


    @endhasanyrole
     {{-- Roles para diseñadores --}}
    @hasanyrole('Diseñador|Super Admin')

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{ setActiveRoute(['diseno.solicitudes']) }}">
        <i class="fas fa-book tx-20"></i>
        <span class="menu-item-label tx-13">Diseño y solicitudes</span>
      </a>
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('diseno.solicitudes') }}"
            class="sub-link {{ setActiveRoute('diseno.solicitudes') }}">Lista de solicitudes</a></li>
            <li class="sub-item"><a href="{{ route('formulario.diseno') }}"
              class="sub-link {{ setActiveRoute('formulario.diseno') }}">Formulario de diseño</a></li>
      </ul>
    </li>

    @endhasanyrole

    {{-- Roles para diseñadores --}}
    @hasanyrole('Comercial|Super Admin|Community Manager')
    {{-- Aspirantes --}}
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{ setActiveRoute('mostrar.aspirantes') }}">
        <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
        <span class="menu-item-label tx-13">Seguimiento a aspirantes</span>
      </a>
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('mostrar.aspirantes') }}"
            class="sub-link {{ setActiveRoute('mostrar.aspirantes') }}">Lista de registros</a></li>
      </ul>
    </li>
    @endhasanyrole

    @hasanyrole('Materiales y Proveedores|Super Admin')
    @endhasanyrole

    @hasanyrole('Webmaster|Super Admin|Community Manager')

    {{-- Programas --}}
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{ setActiveRoute(['mostrar.programa', 'editar.programa']) }}">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Programas</span>
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('mostrar.programa') }}"
            class="sub-link {{ setActiveRoute('mostrar.programa') }}">Ver todos los programas</a></li>
        <li class="sub-item"><a href="#" data-toggle="modal" data-target="#crearPrograma"
            class="sub-link {{ request()->is('mkt-user/crear-programas') ? 'active' : ''}}">Crear un nuevo programa</a>
        </li>
      </ul>
    </li>

    {{-- Campus --}}
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{ setActiveRoute(['mostrar.campus', 'editar.campus']) }}">
        <i class="menu-item-icon fas fa-building tx-20"></i>
        <span class="menu-item-label tx-13">Campus</span>
      </a>
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('mostrar.campus') }}"
            class="sub-link {{ setActiveRoute('mostrar.campus') }}">Información de campus</a></li>
      </ul>
 
    </li>
    @endhasanyrole

    @hasanyrole('Community Manager|Super Admin')

    @endhasanyrole

    {{-- Usuarios --}}
    @hasrole('Campus')
    @else
    <li class="br-menu-item">

      <a href="#"
        class="br-menu-link with-sub {{ setActiveRoute(['mostrar.usuarios', 'crear.usuario', 'editar.usuarios']) }}">
        <i class="menu-item-icon fa fa-users tx-20"></i>

        @hasanyrole('Super Admin|Admin')
        <span class="menu-item-label tx-13"> Configuración de usuarios</span>
        @else
        <span class="menu-item-label tx-13"> Configuración de usuario</span>
        @endhasanyrole
      </a>
      <ul class="br-menu-sub">
        @hasanyrole('Super Admin|Admin')
        <li class="sub-item"><a href="{{ route('reporte') }}"
          class="sub-link {{ setActiveRoute('reporte') }}">Encuesta de Medios</a></li>
        <li class="sub-item"><a href="{{ route('crear.usuario') }}"
            class="sub-link {{ setActiveRoute('crear.usuario')}}">Crear un usuario</a></li>
        <li class="sub-item"><a href="{{ route('mostrar.usuarios') }}"
            class="sub-link {{ setActiveRoute('mostrar.usuarios')}}">Lista de usuarios</a></li>
        @else
        <li class="sub-item"><a href="{{ route('editar.usuarios', Auth::user()->id) }}"
            class="sub-link {{ setActiveRoute('editar.usuarios')}}">Actualizar datos</a></li>
        @endhasanyrole

      </ul>
    </li>
    @endhasrole
   @hasanyrole('Webmaster|Super Admin|Community Manager|Admin|Campus|Comercial|Diseñador|Becario')

    {{-- Programas --}}
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{setActiveRoute('acceso.index')}}">
        <img src="{{ asset('/multi/images/Marketing box/LOGOblanco.png') }}" width="30px" height="30px"/>
        <span class="menu-item-label">Marketing Box</span>
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('acceso.show') }}"
            class="sub-link {{ setActiveRoute('acceso.show') }}">Archivos</a></li>

      @hasanyrole('Super Admin|Admin')
      <li class="sub-item"><a href="{{ route('acceso.index') }}"
          class="sub-link {{ setActiveRoute('acceso.index')}}">Accesos</a></li>
      @endhasanyrole
    </ul>
    </li>
    @endhasanyrole


    <li class="br-menu-item">
      <a href="/" target="_blank" class="br-menu-link">
        <i class=" menu-item-icon icon fas fa-globe tx-22"></i>
        <span class="menu-item-label">Sitio Web</span>
      </a>
      <!-- br-menu-link -->
    </li>
    <!-- br-menu-item -->

  </ul>

  <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

  <div class="info-list">

    <div class="info-list-item">
      <div>
        <p class="info-list-label">Progamas en el sitio</p>
        <h5 class="info-list-amount">### <small>Programas </small></h5>
      </div>
    </div>
    <div class="info-list-item">
      <div>
        <p class="info-list-label">Registro de aspirantes </p>
        <h5 class="info-list-amount">### <small>Aspirantes Registrados </small></h5>
      </div>
    </div>

    <div class="info-list-item">
      <div>
        <p class="info-list-label">Solicitudes de diseño activas </p>
        <h5 class="info-list-amount">### <small>Solicitudes </small></h5>
      </div>
    </div>
  </div>



  <!-- br-sideleft-menu -->

  <br>
</div>
<!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
  <div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a>
    </div>

  </div>
  <!-- br-header-left -->


  <div class="br-header-right">
    <nav class="nav">

      {{-- <div class="dropdown">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-email-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu dropdown-menu-header">
            <div class="dropdown-menu-label">
              <label>Messages</label>
              <a href="">+ Add New Message</a>
            </div>
            <!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link">
                <div class="media">
                  <img src="https://via.placeholder.com/500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Donna Seay</p>
                      <span>2 minutes ago</span>
                    </div>
                    <!-- d-flex -->
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                  </div>
                </div>
                <!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="" class="media-list-link read">
                <div class="media">
                  <img src="https://via.placeholder.com/500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Samantha Francis</p>
                      <span>3 hours ago</span>
                    </div>
                    <!-- d-flex -->
                    <p>My entire soul, like these sweet mornings of spring.</p>
                  </div>
                </div>
                <!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media">
                  <img src="https://via.placeholder.com/500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Robert Walker</p>
                      <span>5 hours ago</span>
                    </div>
                    <!-- d-flex -->
                    <p>I should be incapable of drawing a single stroke at the present moment...</p>
                  </div>
                </div>
                <!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media">
                  <img src="https://via.placeholder.com/500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Larry Smith</p>
                      <span>Yesterday</span>
                    </div>
                    <!-- d-flex -->
                    <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                  </div>
                </div>
                <!-- media -->
              </a>
              <div class="dropdown-footer">
                <a href=""><i class="fa fa-angle-down"></i> Show All Messages</a>
              </div>
            </div>
            <!-- media-list -->
          </div>
          <!-- dropdown-menu -->
        </div> --}}

      <div class="dropdown">
        <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
          <i class="icon ion-ios-bell-outline tx-24"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
          <!-- end: if statement -->
        </a>
        <div class="dropdown-menu dropdown-menu-header">
          <div class="dropdown-menu-label">
            <label>Notifications</label>
            <a href="">Mark All as Read</a>
          </div>
          <!-- d-flex -->

          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media">
                <img src="https://via.placeholder.com/500" alt="">
                <div class="media-body">
                  <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span>October 03, 2017 8:45am</span>
                </div>
              </div>
              <!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media">
                <img src="https://via.placeholder.com/500" alt="">
                <div class="media-body">
                  <p class="noti-text"><strong>Mellisa Brown</strong> appreciated your work <strong>The Social
                      Network</strong></p>
                  <span>October 02, 2017 12:44am</span>
                </div>
              </div>
              <!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media">
                <img src="https://via.placeholder.com/500" alt="">
                <div class="media-body">
                  <p class="noti-text">20+ new items added are for sale in your <strong>Sale Group</strong></p>
                  <span>October 01, 2017 10:20pm</span>
                </div>
              </div>
              <!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media">
                <img src="https://via.placeholder.com/500" alt="">
                <div class="media-body">
                  <p class="noti-text"><strong>Julius Erving</strong> wants to connect with you on your conversation
                    with <strong>Ronnie Mara</strong></p>
                  <span>October 01, 2017 6:08pm</span>
                </div>
              </div>
              <!-- media -->
            </a>
            <div class="dropdown-footer">
              <a href=""><i class="fa fa-angle-down"></i> Show All Notifications</a>
            </div>
          </div>
          <!-- media-list -->
        </div>
        <!-- dropdown-menu -->
      </div>
      <!-- dropdown -->
      <div class="dropdown" style="padding-top:7px;">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name hidden-md-down">{{ Auth::user()->name }} {{ Auth::user()->second_name }}</span>
          <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-250">
          <div class="tx-center">
            <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
            <h6 class="logged-fullname">{{ Auth::user()->name }} {{ Auth::user()->second_name }}</h6>
            <p>{{ Auth::user()->email }} <br>{{ Auth::user()->job_position }}</p>
          </div>
          <hr>
          <ul class="list-unstyled user-profile-nav">
            <li><a href="#"><i class="icon ion-ios-person"></i> Editar perfil</a></li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                <i class="icon ion-power"></i> {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

            </li>

          </ul>
        </div>
        <!-- dropdown-menu -->
      </div>
      <!-- dropdown -->


    </nav>

    {{-- <div class="navicon-right">
        <a id="btnRightMenu" href="" class="pos-relative">
          <i class="icon ion-ios-chatboxes-outline"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
          <!-- end: if statement -->
        </a>
      </div><!-- navicon-right --> --}}

  </div>
  <!-- br-header-right -->
</div>
<!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">
  <ul class="nav nav-tabs sidebar-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i
          class="icon ion-ios-contact-outline tx-24"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i
          class="icon ion-ios-folder-outline tx-22"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i
          class="icon ion-ios-calendar-outline tx-24"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i
          class="icon ion-ios-gear-outline tx-24"></i></a>
    </li>
  </ul>
  <!-- sidebar-tabs -->

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane pos-absolute a-0 mg-t-60 contact-scrollbar active" id="contacts" role="tabpanel">
      <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
      <div class="contact-list pd-x-10">
        <a href="" class="contact-list-link new">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p>Marilyn Tarter</p>
              <span>Clemson, CA</span>
            </div>
            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p class="mg-b-0 ">Belinda Connor</p>
              <span>Fort Kent, ME</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link new">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p>Britanny Cevallos</p>
              <span>Shiboygan Falls, WI</span>
            </div>
            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link new">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p>Brandon Lawrence</p>
              <span>Snohomish, WA</span>
            </div>
            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p>Andrew Wiggins</p>
              <span>Springfield, MA</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p>Theodore Gristen</p>
              <span>Nashville, TN</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-success"></div>
            </div>
            <div class="contact-person">
              <p>Deborah Miner</p>
              <span>North Shore, CA</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
      </div>
      <!-- contact-list -->


      <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
      <div class="contact-list pd-x-10">
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Marilyn Tarter</p>
              <span>Clemson, CA</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Belinda Connor</p>
              <span>Fort Kent, ME</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Britanny Cevallos</p>
              <span>Shiboygan Falls, WI</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Brandon Lawrence</p>
              <span>Snohomish, WA</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Andrew Wiggins</p>
              <span>Springfield, MA</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Theodore Gristen</p>
              <span>Nashville, TN</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
        <a href="" class="contact-list-link">
          <div class="d-flex">
            <div class="pos-relative">
              <img src="https://via.placeholder.com/500" alt="">
              <div class="contact-status-indicator bg-gray-500"></div>
            </div>
            <div class="contact-person">
              <p>Deborah Miner</p>
              <span>North Shore, CA</span>
            </div>
          </div>
          <!-- d-flex -->
        </a>
        <!-- contact-list-link -->
      </div>
      <!-- contact-list -->

    </div>
    <!-- #contacts -->


    <div class="tab-pane pos-absolute a-0 mg-t-60 attachment-scrollbar" id="attachments" role="tabpanel">
      <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
      <div class="media-file-list">
        <div class="media">
          <div
            class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-image tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">IMG_43445</p>
            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
            <p class="mg-b-0 tx-12 op-5">1.2mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div
            class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-video tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">VID_6543</p>
            <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
            <p class="mg-b-0 tx-12 op-5">24.8mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-word tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">Tax_Form</p>
            <p class="mg-b-0 tx-12 op-5">Word Document</p>
            <p class="mg-b-0 tx-12 op-5">5.5mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div
            class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-pdf tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">Getting_Started</p>
            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
            <p class="mg-b-0 tx-12 op-5">12.7mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div
            class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-pdf tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">Introduction</p>
            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
            <p class="mg-b-0 tx-12 op-5">7.7mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div
            class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-image tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">IMG_43420</p>
            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
            <p class="mg-b-0 tx-12 op-5">2.2mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div
            class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-image tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">IMG_43447</p>
            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
            <p class="mg-b-0 tx-12 op-5">3.2mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div
            class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-video tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">VID_6545</p>
            <p class="mg-b-0 tx-12 op-5">AVI Video</p>
            <p class="mg-b-0 tx-12 op-5">14.8mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
        <div class="media mg-t-20">
          <div class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
            <i class="far fa-file-word tx-28 tx-white"></i>
          </div>
          <div class="media-body">
            <p class="mg-b-0 tx-13">Secret_Document</p>
            <p class="mg-b-0 tx-12 op-5">Word Document</p>
            <p class="mg-b-0 tx-12 op-5">4.5mb</p>
          </div>
          <!-- media-body -->
          <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
        </div>
        <!-- media -->
      </div>
      <!-- media-list -->
    </div>
    <!-- #history -->
    <div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar" id="calendar" role="tabpanel">
      <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
      <div class="pd-x-25">
        <h2 id="brTime" class="br-time"></h2>
        <h6 id="brDate" class="br-date"></h6>
      </div>

      <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
      <div class="datepicker sidebar-datepicker"></div>


      <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
      <div class="pd-x-25">
        <div class="list-group sidebar-event-list mg-b-20">
          <div class="list-group-item">
            <div>
              <h6>Roven's 32th Birthday</h6>
              <p>2:30PM</p>
            </div>
            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div>
          <!-- list-group-item -->
          <div class="list-group-item">
            <div>
              <h6>Regular Workout Schedule</h6>
              <p>7:30PM</p>
            </div>
            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
          </div>
          <!-- list-group-item -->
        </div>
        <!-- list-group -->

        <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-12 tx-spacing-2">+ Add Event</a>
        <br>
      </div>

    </div>
    <div class="tab-pane pos-absolute a-0 mg-t-60 settings-scrollbar" id="settings" role="tabpanel">
      <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

      <div class="sidebar-settings-item">
        <h6 class="tx-13 tx-normal">Sound Notification</h6>
        <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
        <div class="br-switchbutton checked">
          <input type="hidden" name="switch1" value="true">
          <span></span>
        </div>
        <!-- br-switchbutton -->
      </div>
      <div class="sidebar-settings-item">
        <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
        <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
        <div class="br-switchbutton">
          <input type="hidden" name="switch2" value="false">
          <span></span>
        </div>
        <!-- br-switchbutton -->
      </div>
      <div class="sidebar-settings-item">
        <h6 class="tx-13 tx-normal">Location Services</h6>
        <p class="op-5 tx-13">Allowing us to access your location</p>
        <div class="br-switchbutton">
          <input type="hidden" name="switch3" value="false">
          <span></span>
        </div>
        <!-- br-switchbutton -->
      </div>
      <div class="sidebar-settings-item">
        <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
        <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
        <div class="br-switchbutton checked">
          <input type="hidden" name="switch4" value="true">
          <span></span>
        </div>
        <!-- br-switchbutton -->
      </div>
      <div class="sidebar-settings-item">
        <h6 class="tx-13 tx-normal">Your email</h6>
        <div class="pos-relative">
          <input type="email" name="email" class="form-control" value="janedoe@domain.com">
        </div>
      </div>

      <div class="pd-y-20 pd-x-25">
        <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
        <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
        <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
      </div>
    </div>
  </div>
  <!-- tab-content -->

</div>
<!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->
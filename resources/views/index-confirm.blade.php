<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="@yield('meta-desc', 'Conoce todos los programas académicos de UANE: Bachillerato, Licenciaturas, Ingenierías, Maestrías, Especialidades, Doctorados y Programas Internacionales en modalidad presencial o en línea. ¡Inscribete ahora!')" />

<link rel="canonical" href="{{ url(Request::url()) }}" />

<meta name="robots" content="index,follow">
<meta name="author" content="UANE" />

<meta name="google-site-verification" content="6rFrZ4sGpNygGgV2ZbORAfScCucv8PKvJXtsqNqrCbY" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Page Title -->
<title>UANE | @yield('title', 'Experiencia que transforma')</title>

<!-- Favicon and Touch Icons -->
<link href="/multi/images/favicon.png" rel="shortcut icon" type="image/png">
{{-- <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> --}}

<!-- Stylesheet -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/style-main.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
@stack('css')
<!-- Revolution Slider 5.x CSS settings -->
<link  href="/multi/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="/multi/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="/multi/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="/multi/css/colors/style-uane.css" rel="stylesheet" type="text/css">
<!-- external javascripts -->
<script src="/multi/js/jquery-2.2.4.min.js"></script>
<script src="/multi/js/jquery-ui.min.js"></script>
<script src="/multi/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/multi/js/jquery-plugin-collection.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0"></script>
<!-- Revolution Slider 5.x SCRIPTS -->
<script src="/multi/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/multi/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
 <!-- Facebook Pixel Code -->
 <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '487461332128996');
  fbq('track', 'PopupView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=487461332128996&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NGBCMHM');</script>
<!-- End Google Tag Manager -->





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
                        <h4><a href="">Tipos de Programas</a></h4>
                        <li><a href="{{ route('programas.bach') }}">Bachillerato</a></li>
                        <li><a href="{{ route('programas.lic') }}">Licenciatura</a></li>
                        <li><a href="{{ route('programas.ing') }}">Ingenieria</a></li>
                        <li><a href="{{ route('programas.maes') }}">Maestría</a></li>
                        <li><a href="{{ route('programas.esp') }}">Especialidad</a></li>
                        <li><a href="{{ route('programas.doc') }}">Doctorado</a></li>
                        <li><a href="{{ route('programas.bachel') }}">Bachillerato en Línea</a></li>
                        <li><a href="{{ route('programas.lcel') }}">Licenciatura en Línea</a></li>
                        <li><a href="{{ route('programas.mel') }}">Maestría en Línea</a></li>
                        <li><a href="{{ route('programas.eel') }}">Especialidad en Línea</a></li>
                        <li><a href="{{ route('programas.curso') }}">Cursos en Línea</a></li>
                        <li><a href="{{ route('programas.diplomado') }}">Diplomados  en Línea</a></li>
                        <li><a href="{{ route('programas.diplomadobarcelona') }}">Diplomados Barcelona</a></li>
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
                        <li><a target="_blank" href="/multi/reglamentos/Bachillerato_compressed.pdf">Bachillerato</a></li>
                        <li><a target="_blank" href="/multi/reglamentos/Licenciatura_compressed.pdf">Licenciatura</a></li>
                        <li><a target="_blank" href="/multi/reglamentos/Postgrado_compressed.pdf">Postgrado</a></li>
                        <li><a target="_blank" href="/multi/reglamentos/Licenciatura en linea _compressed.pdf">Licenciatura en Línea</a></li>
                        <li><a target="_blank" href="/multi/reglamentos/postgrado en linea_compressed.pdf">Postgrado en Línea</a></li>
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
                  <li><a href="https://moodle.uane.edu.mx/" target="_blank">Postgrado</a></li>
                </ul>
              </li>
              <li class="{{ request()->is('egresados') ? 'active' : '' }} {{ request()->is('egresados/actualizar-datos') ? 'active' : '' }}"><a href="{{ route('exauane') }}">ExaUANE</a></li>
              <li><a href="#">Vida universitaria</a>
                <ul class="dropdown">
                 <li><a href="{{ route('aniversario') }}">Eventos Aniversario</a></li>
                 <!--<li><a href="{{ route('investigacion') }}">Investigación</a></li>-->
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
    <section id="home">
      <div class="container-fluid p-0">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0"></script>
      </div>
    </section>
        <section style="background-color: #F4C300">
          <div class="container pt-10 pb-20">
            <div class="row">
              <div class="call-to-action">
                <div class="col-md-9">
                 <center><h3 class="mt-0 text-white font-weight-600 font-16">¡Vive una Experiencia que Transforma!</h3></center> 
                </div>
                <div class="col-md-3 text-right flip sm-text-center"> 
                  <a class="btn btn-flat btn-theme-colored btn-lg mt-5" data-toggle="modal" data-target="#BSParentModal">Solicita información Aquí</a>  
                </div>
              </div>
            </div>
          </div>
        </section>
       <!-- <section id="marquee">
          <div class="container-fluid p-0">
                <div class="row">
                    <MARQUEE bgcolor="#73243C";color="#ffff"> Esta marquesina tiene un fondo de color rosa </MARQUEE>
                </div>
          </div>
            </section>-->
  </header>
  <!-- Start main-content -->
  <div class="main-content">
  <script>
    fbq('track', 'Lead');
  </script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGBCMHM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        
            <div class="rev_slider_wrapper fullscreen-container" data-alias="agency-website" id="rev_slider_280_1_wrapper" style="background-color:#222222;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
                <div class="rev_slider fullscreenbanner" data-version="5.1.4" id="rev_slider_280_1" style="display:none;">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-description="" data-easein="Power2.easeInOut" data-easeout="default" data-index="rs-898" data-masterspeed="2000" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide" data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img alt="" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140" src="/multi/images/sliders/Fondo Vino.jpg">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme font-raleway" id="rs-1-layer-1" data-x="['middle']"
                    data-hoffset="['0']" data-y="['middle']"
                    data-voffset="['-170']" data-fontsize="['70','70','40','40']"
                    data-lineheight="['120','120','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; font-weight:700 ;  color:#fff; ">&nbsp; Gracias por contactarnos &nbsp;
                  </div>
                           <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme font-raleway" id="rs-1-layer-1" data-x="['middle']"
                    data-hoffset="['0']" data-y="['middle']"
                    data-voffset="[0]" data-fontsize="['60','60','40','40']"
                    data-lineheight="['120','120','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1100" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; font-weight:500 ;color:#fff; ">&nbsp; En breve nos pondremos en contacto contigo &nbsp;
          </div>
                                     <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme font-raleway" id="rs-1-layer-1" data-x="['middle']"
                    data-hoffset="['0']" data-y="['middle']"
                    data-voffset="[100]" data-fontsize="['80','80','40','40']"
                    data-lineheight="['120','120','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1300" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; font-weight:800 ;color:#F4C300; ">&nbsp;Contáctanos&nbsp;
          </div>
          <div class="tp-caption tp-resizeme font-raleway" id="rs-1-layer-1" data-x="['middle']"
          data-hoffset="['0']" data-y="['middle']"
          data-voffset="['230','230','340','340']" data-fontsize="['70','70','40','40']"
          data-lineheight="['120','120','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
          data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
          data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
          data-start="1300" data-splitin="none" data-splitout="none" data-responsive_offset="on"
          style="z-index: 5; white-space: nowrap; font-weight:800 ;color:#ffff; ">&nbsp;800 822 8263&nbsp;
  </div>
          </li>

                                      
                            <!-- LAYER NR. 2 --
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway  pl-20 pr-20"
                            id="rs-2-layer-2"

                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['-83']" 
                            data-fontsize="['35']"
                            data-lineheight="['54']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:900; font-family: 'Raleway', sans-serif; background:#73243d;">¿Eres EXAUANE? 
                            </div>-->

                            <!--<div class="tp-caption tp-resizeme text-uppercase text-white font-raleway  pl-20 pr-20"
                            id="rs-2-layer-2"

                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['40','40','200','200']" 
                            data-fontsize="['48','48','35','35']"
                            data-lineheight="['54']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:600; font-family: 'Raleway', sans-serif; background:#40bab3;">¡Te estamos buscando!
                            </div>

                            <!-- LAYER NR. 3 --
                            <div class="tp-caption tp-resizeme text-white font-raleway" 
                            id="rs-2-layer-3"

                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['90','90','250','250']"
                            data-fontsize="['38','38','28','28']"
                            data-lineheight="['58']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1400" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; line-height:2px; background:#40bab3; white-space: nowrap; letter-spacing:0px; font-weight:400; ">&nbsp; Regístrate en nuestra página para actualizar tus datos  &nbsp;
                            </div>

                            <!-- LAYER NR. 4 --
                            <div class="tp-caption tp-resizeme text-white text-center font-raleway" 
                              id="rs-2-layer-4"

                              data-x="['center']"
                              data-hoffset="[0]"
                              data-y="['center']"
                              data-voffset="['200','200','450','450']"
                              data-width="none"
                              data-height="none"
                              data-fontsize="['25']"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1000" 
                              data-splitin="none" 
                              data-splitout="none" 
                              data-responsive_offset="on"
                              style="z-index: 5; white-space: nowrap; letter-spacing:1px; font-family: 'Raleway', sans-serif; font-weight:600; background:#de453b; color:#fff; border-radius:10px;"><a href="#form" class="btn btn-colored btn-lg btn-flat text-white pl-20 pr-20" data-toggle="modal">Regístrate</a>

                            </div>
                        </li>


                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <script type="text/javascript">
                var tpj = jQuery;

                var revapi280;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_280_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_280_1");
                    } else {
                        revapi280 = tpj("#rev_slider_280_1").show().revolution({
                            sliderType: "hero",
                            jsFileLocation: "../../revolution/js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {},
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [868, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                type: "scroll",
                            },
                            shadow: 0,
                            spinner: "spinner2",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "60",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>
      <!-- END REVOLUTION SLIDER -->
      <!--DISEÑO MODAL-->
        <!--Prueba -->
      </div>
         <!--Prueba -->
         <!--<script type="text/javascript">
 
          function Ocultar () {
          var f = document.getElementById('formulario');
          if  (f.style.display == 'none'){
               f.style.display = "inline";
              } else {
               f.style.display = "none";
              }
              }
              window.onload = Ocultar;/* "contenido_a_mostrar" es el nombre que le dimos al DIV */      
         </script>
         <div id="formulario">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-30">
                            <div class="fluid-video-wrapper">
                                <iframe src="https://sistema.uane.edu.mx/Admisiones/Egresado1.aspx" width="auto" height="600"  title="Creative" ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
          </div>(prueba funciona)-->
    <div class="modal fade" id="form">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!--header modal-->
            <div class="modal-header">
              <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="fluid-video-wrapper">
                              <iframe src="https://sistema.uane.edu.mx/Admisiones/Egresado1.aspx" width="auto" height="630"  title="Creative" ></iframe>
                          </div>
                      </div>
                  </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: welcome -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0" data-margin-top="-300px">
           <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
             <!-- <div class="sm-height-auto" data-bg-img="/multi/images/exauane/uane-tramites-y-servicios.jpg">
                <div class="p-20">
                  <h3 class="text-white text-uppercase" style="font-weight:600;">Trámites y servicios</h3>
                  <div class="clearfix">
                  </div>
                  <p class="text-white-f1 mt-10">UANE sigue creca de ti y continúa con su misión de formar personas ejemplares comprometidas con su futuro, por ello, te ofrecemos diferentes formas de mantener vivo el vinculo con tu Universidad y así enriquecer tu desarrollo personal y profesional.</p>
                  <a href="#" class="btn btn-default text-theme-colored font-14 mt-10 p-10 pr-15">Ver trámites y solicitudes</a>
                </div>
              </div>-->
            </div>
           <!-- <div class="col-sm-12 col-md-6 pl-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <!--<div class="sm-height-auto" data-bg-img="/multi/images/exauane/uane-oferta-educativa1.png">--
                <div class="p-20">
                  <h2 class="text-white text-uppercase text-center" style=font-weight:600 align;>Oferta educativa</h2>
                  <h4 class="text-white-f1 mt-0 text-center">En UANE queremos que sigas creciendo personal y profesionalmente, conoce todos nuestros programas de postgrado presencial y en línea que tenemos para ti. Con estos programas podrás desarrollar competencias profesionales con acceso a herramientas tecnológicas. </h4>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                   <!-- <div class="text-center" align-item:center;><a class="btn btn-default text-theme-colored font-14 mt-10 p-10 pr-15" style="" href="{{ route('programas.index') }}">Ver oferta educativa</a></div>
                      <!-- Modal: Book Now End --
                    </li>
                  </ul>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
   <!-- <section id="services" class="">
      <div class="container pb-10">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase mt-0 line-height-1">¡Bienvenido ExaUANE!</h2>
            </div>
          </div>
        </div>
      </div>
    </section>-->
        <!-- Section: about -->
        <!-- Section: Oferta Academica --
    <section id="services" class="">
      <div class="container pb-10">
       <div class="section-content">
          <div class="row">
              <h3 class="text-gray mt-0 mt-sm-30 mb-0" align="center">¡Llegó el momento!</h3>
              <h2 class="text-theme-colored mt-0" align="center">EXAUANE</h2>
              <p class="font-weight-600" align="center">"Generar oportunidades para desarrollar personas ejemplares comprometidas con su futuro".</p>
              <p class="mt-20" align="center">El objetivo de este programa de exalumnos es mantener el contacto con <b>UANE</b> y establecer una sinergia entre los egresados para reforzar el sentido de pertenencia y ser agentes de promoción de la <b>Misión Institucional.</b></p>
              <p align= "center";>¡Actualmente somos más de 45 mil egresados en la universidad! Por eso, queremos que conozcas todos los beneficios que UANE tiene para ti. </p>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-30 p-10">
                <a href="#" class="">
                  <img src="/multi/images/flaticon-png/small/6.png" width="70" alt="">
                </a>
                <h4 class="font-weight-600 mt-20">Trámites y solicitudes</h4>
                <p>UANE sigue creca de ti y continúa con su misión de formar personas ejemplares comprometidas con su futuro.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-30 p-10">
                <a href="{{ route('programas.index') }}" class="">
                  <img src="/multi/images/flaticon-png/small/2.png" width="70" alt="">
                </a>
                <h4 class="font-weight-600 mt-20">Oferta academica</h4>
                <p>En UANE queremos que sigas creciendo personal y profesionalmente, conoce todos nuestros programas de postgrado presencial y en línea que tenemos para ti.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-30 p-10">
                <a href="#" class="">
                  <img src="/multi/images/flaticon-png/small/5.png" width="70" alt="">
                </a>
                <h4 class="font-weight-600 mt-20">Bibliotecas virtuales</h4>
                <p>Como egresado, tienes acceso a una amplia variedad de libros electrónicos con nuestras bibliotecas virtuales a través del sistema UANE.</p>
              </div>
            </div>
            <div class="col-xs-12">
                <div class="text-center mb-30 p-10">
            <a href="{{ route('exauane.formulario') }}" class="btn btn-primary btn-theme-colored btn-xl mt-15 mb-sm-12" align="center">¡Regístrate aquí!</a>
          </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-sm-30 p-10">
                <a href="#" class="">
                  <img src="/multi/images/flaticon-png/small/6.png" width="70" alt="">
                </a>
                <h4 class="font-weight-600 mt-20">Mastery Learning</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-sm-30 p-10">
                <a href="#" class="">
                  <img src="/multi/images/flaticon-png/small/5.png" width="70" alt="">
                </a>
                <h4 class="font-weight-600 mt-20">Library System</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-sm-30 p-10">
                <a href="#" class="">
                  <img src="/multi/images/flaticon-png/small/4.png" width="70" alt="">
                </a>
                <h4 class="font-weight-600 mt-20">Abundant Labs</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>

        <!-- Section: Gallery --
        <section id="gallery" class="">
            <div class="container">
              <div class="section-content">
                <div class="row">
                  <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h3 class="title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>#<span class="text-theme-colored">SoyUANE</span></h3>
                    <!-- Portfolio Gallery Grid --
      
                    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE1.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE1.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE6.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE6.jpg"   data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE3.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE3.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE7.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE7.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE17.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE17.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE20.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE20.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE8.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                       Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE19.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE19.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      Portfolio Item End --
                      
                    Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE13.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE13.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      Portfolio Item End --
                      
                     Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE11.jpg" class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      Portfolio Item End --
                      
                      Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE21.jpg"class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE21.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      Portfolio Item End --
                      
                    Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/exauane/FACEBOOK/EXAUANE23.jpg"  class="img-fullwidth">
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/exauane/FACEBOOK/EXAUANE23.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      Portfolio Item End --
                    </div>
                     End Portfolio Gallery Grid --
                    </div>
                  <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h3 class="title line-bottom mt-0 mb-30 mt-sm-40"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Para mí <span class="text-theme-colored">UANE es:</span></h3>
      
                    <div class="bxslider bx-nav-top">
                      <div class="border-1px border-left-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
                        <div class="testimonial pt-10">
                          <div class="thumb pull-left mb-0 mr-0 pr-20">
                            <img width="75" class="img-circle" alt="" src="/multi/images/Hombre.jpg">
                          </div>
                          <div class="ml-100 ">
                            <p>UANE ha transformado mis experiencias laborales permitiendome crecer con todas las herramientas y conocimientos que adquirí durante mi carrera profesional.</p>
                            <p class="author mt-10">- <span class="text-theme-colored">Carlos Espino,</span> <small><em>Egresado,Licenciado en Mercadotecnia Internacional.</em></small></p>
                          </div>
                        </div>
                      </div>
                      <div class="border-1px border-right-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
                        <div class="testimonial pt-10">
                          <div class="thumb pull-left mb-0 mr-0 pr-20">
                            <img width="75" class="img-circle" alt="" src="/multi/images/Mujer.jpg">
                          </div>
                          <div class="ml-100 ">
                            <p>Uane es mi segundo hogar, me enseñó y me dio las herramientas para desarrollarme profesionalmente... Pero también me dejó grandes amistades que han marcado mi vida, gracias uane por tanto!.</p>
                            <p class="author mt-10">- <span class="text-theme-colored">Verónica Salinas,</span> <small><em>BMB 2007-2010, LP 2010-2014</em></small></p>
                          </div>
                        </div>
                      </div>
                    <div class="border-1px border-left-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
                        <div class="testimonial pt-10">
                          <div class="thumb pull-left mb-0 mr-0 pr-20">
                            <img width="75" class="img-circle" alt="" src="https://placehold.it/100x100">
                          </div>
                          <div class="ml-100 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                            <p class="author mt-10">- <span class="text-theme-colored">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                          </div>
                        </div>
                      </div>
                      <div class="border-1px border-right-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
                        <div class="testimonial pt-10">
                          <div class="thumb pull-left mb-0 mr-0 pr-20">
                            <img width="75" class="img-circle" alt="" src="https://placehold.it/100x100">
                          </div>
                          <div class="ml-100 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                            <p class="author mt-10">- <span class="text-theme-colored">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                          </div>
                        </div>
                      </div>
                      <div class="border-1px border-left-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
                        <div class="testimonial pt-10">
                          <div class="thumb pull-left mb-0 mr-0 pr-20">
                            <img width="75" class="img-circle" alt="" src="https://placehold.it/100x100">
                          </div>
                          <div class="ml-100 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                            <p class="author mt-10">- <span class="text-theme-colored">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                          </div>
                        </div>
                      </div>
                      <div class="border-1px border-right-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
                        <div class="testimonial pt-10">
                          <div class="thumb pull-left mb-0 mr-0 pr-20">
                            <img width="75" class="img-circle" alt="" src="https://placehold.it/100x100">
                          </div>
                          <div class="ml-100 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</p>
                            <p class="author mt-10">- <span class="text-theme-colored">Catherine Grace,</span> <small><em>CEO apple.inc</em></small></p>
                          </div>
                        </div>
                      </div>--
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>-->
          <!--<section>
            <div class="container">
              <div class="section-content">
                <div class="row justify-content-center">
                  <div class="col-md-12" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="gallery-isotope grid-2 gutter-small clearfix" data-lightbox="gallery">
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/Comunicado1.jpg" >
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/Comunicado1.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End --
                      
                      <!-- Portfolio Item Start --
                      <div class="gallery-item">
                        <div class="thumb">
                          <img alt="project" src="/multi/images/Comunicadopostgrados.jpg" >
                          <div class="overlay-shade"></div>
                          <div class="icons-holder">
                            <div class="icons-holder-inner">
                              <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="/multi/images/Comunicadopostgrados.jpg"   data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio Item End -->
                    </div>
                    <!-- End Portfolio Gallery Grid --
                    </div>
                </div>
      
              </div>
            </div>
          </section>
          <center><a class="btn btn-colored btn-theme-colored btn-sm" href="/multi/images/Comunicado 06-01-21.pdf">Descargar comunicados</a></center>
          <section class="divider parallax layer-overlay overlay-white-7 img-responsive img-fullwidth" data-bg-img="/multi/images/soyuane/vozuaneprueba.jpg" data-parallax-ratio="0.7">
            <div class="container">

              <div class="row">
                <div class="col-md-12">
                  <div class="owl-carousel-4col" data-nav="true">
                    <div class="item">
                      <article class="post clearfix maxwidth400 mb-sm-20">
                        <div class="entry-header">
                            <div class="video-popup">                
                                <a href="https://www.youtube.com/watch?v=Me6VRXEmGGo" data-lightbox-gallery="youtube-video" title="Video">
                                  <img alt="" src="/multi/images/soyuane/Minecraft.jpg" class="img-fullwidth">
                                </a>
                              </div>       
                        </div>
                        <div class="entry-content bg-white border-1px p-20">
                          <h5 class="entry-title mt-0 pt-0"><a href="#">UANE en Minecraft. #VozUANE</a></h5>
                          <p class="text-left mb-20 mt-15 font-13"></p>
                          <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://www.youtube.com/watch?v=Me6VRXEmGGo">Ver más</a>
                          <ul class="list-inline entry-date pull-right font-12 mt-5">
                            <li><span class="text-theme-colored">Abr 27, 2020</span></li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                      </article>
                    </div>
                    <div class="item">
                      <article class="post clearfix maxwidth400 mb-sm-20">
                        <div class="entry-header">
                            <div class="video-popup">                
                                <a href="https://www.youtube.com/watch?v=fAMHCg5-so8" data-lightbox-gallery="youtube-video" title="Video">
                                  <img alt="" src="/multi/images/soyuane/HomeOffice.JPG" class="img-fullwidth">
                                </a>
                              </div>       
                        </div>
                        <div class="entry-content bg-white border-1px p-20">
                          <h5 class="entry-title mt-0 pt-0"><a href="#">Tips para un Home Office exitoso. #VozUANE</a></h5>
                          <p class="text-left mb-20 mt-15 font-13"></p>
                          <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://www.youtube.com/watch?v=fAMHCg5-so8">Ver más</a>
                          <ul class="list-inline entry-date pull-right font-12 mt-5">
                            <li><span class="text-theme-colored">Abr 17, 2020</span></li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                      </article>
                    </div>
                      <div class="item">
                          <article class="post clearfix maxwidth400 mb-sm-20">
                            <div class="entry-header">
                                <div class="video-popup">                
                                    <a href="https://www.youtube.com/watch?v=zGWDRTIlc50" data-lightbox-gallery="youtube-video" title="Video">
                                      <img alt="" src="/multi/images/soyuane/concurso.jpg" class="img-fullwidth">
                                    </a>
                                  </div>       
                            </div>
                            <div class="entry-content bg-white border-1px p-20">
                              <h5 class="entry-title mt-0 pt-0"><a href="#">Día del Nutriólogo en UANE. #VozUANE</a></h5>
                              <p class="text-left mb-20 mt-15 font-13"></p>
                              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://www.youtube.com/watch?v=zGWDRTIlc50">Ver más</a>
                              <ul class="list-inline entry-date pull-right font-12 mt-5">
                                <li><span class="text-theme-colored">Ene 27, 2020</span></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                        <div class="item">
                            <article class="post clearfix maxwidth600 mb-sm-30">
                              <div class="entry-header">
                                  <div class="video-popup">                
                                      <a href="https://www.youtube.com/watch?v=dRGNLtSu3AM" data-lightbox-gallery="youtube-video" title="Video">
                                        <img alt="" src="/multi/images/soyuane/karla.jpg" class="img-fullwidth">
                                      </a>
                                    </div>       
                              </div>
                              <div class="entry-content bg-white border-1px p-20">
                                <h5 class="entry-title mt-0 pt-0"><a href="#">Karla te invita a conocer UANE.</a></h5>
                                <p class="text-left mb-20 mt-15 font-13"></p>
                                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://www.youtube.com/watch?v=dRGNLtSu3AM">Ver más</a>
                                <ul class="list-inline entry-date pull-right font-12 mt-5">
                                  <li><span class="text-theme-colored">Ene 22, 2020</span></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                            </article>
                          </div>
                      <div class="item">
                        <article class="post clearfix maxwidth600 mb-sm-30">
                          <div class="entry-header">
                              <div class="video-popup">                
                                  <a href="https://www.youtube.com/watch?v=OgA2jH5GTJc" data-lightbox-gallery="youtube-video" title="Video">
                                    <img alt="" src="/multi/images/soyuane/Kelly.jpg" class="img-responsive img-fullwidth">
                                  </a>
                                </div>       
                          </div>
                          <div class="entry-content bg-white border-1px p-20">
                            <h5 class="entry-title mt-0 pt-0"><a href="#">Kely Torres te invita a conocer UANE.</a></h5>
                            <p class="text-left mb-20 mt-15 font-13"></p>
                            <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://www.youtube.com/watch?v=OgA2jH5GTJc">Ver más</a>
                            <ul class="list-inline entry-date pull-right font-12 mt-5">
                              <li><span class="text-theme-colored">Feb 7, 2020</span></li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                        </article>
                      </div>
                      <div class="item">
                          <article class="post clearfix maxwidth600 mb-sm-30">
                            <div class="entry-header">
                                <div class="video-popup">                
                                    <a href="https://www.youtube.com/watch?v=SEi1VIq9sHQ" data-lightbox-gallery="youtube-video" title="Video">
                                      <img alt="" src="/multi/images/soyuane/interpretar.jpg" class="img-responsive img-fullwidth">
                                    </a>
                                  </div>       
                            </div>
                            <div class="entry-content bg-white border-1px p-20">
                              <h5 class="entry-title mt-0 pt-0"><a href="#">Interpretar y argumentar #VozUANE</a></h5>
                              <p class="text-left mb-20 mt-15 font-13"></p>
                              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://www.youtube.com/watch?v=SEi1VIq9sHQ">Ver más</a>
                              <ul class="list-inline entry-date pull-right font-12 mt-5">
                                <li><span class="text-theme-colored">Feb 7, 2020</span></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      <div class="item">
                          <article class="post clearfix maxwidth600 mb-sm-30">
                            <div class="entry-header">
                                <div class="video-popup">                
                                    <a href="https://youtu.be/Szbbd9SRCJo" data-lightbox-gallery="youtube-video" title="Video">
                                      <img alt="" src="/multi/images/soyuane/jesus.jpg" class="img-responsive img-fullwidth">
                                    </a>
                                  </div>       
                            </div>
                            <div class="entry-content bg-white border-1px p-20">
                              <h5 class="entry-title mt-0 pt-0"><a href="#">Jesús Armando te invita a conocer UANE.</a></h5>
                              <p class="text-left mb-20 mt-15 font-13"></p>
                              <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://youtu.be/Szbbd9SRCJo">Ver más</a>
                              <ul class="list-inline entry-date pull-right font-12 mt-5">
                                <li><span class="text-theme-colored">Feb 7, 2020</span></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
    <!-- Divider: Be smart,help --
    <section style="background-color:#FF4337">
      <div class="container" >
        <div class="section-content">
          <div class="row">
              <p><center><img src="/multi/images/sliders/BLOG.png"></center></p>
            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/noticias/diplomado-titulacion.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="{{ route('blog.titulacion') }}">¿Sabías que en UANE...</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Próximamente te graduarás y seguramente estás considerando cada una de las alternativas para titularte...</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.titulacion') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">Jun 20, 2019</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>
            <div class="col-md-6">
              <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/multi/images/noticias/cv.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                  {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                  </div> --}}
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="#">Tips para mejorar tu Currículum</a></h5>
                  <p class="text-left mb-20 mt-15 font-13">El Currículum Vitae es el primer contacto que tendrá una empresa contigo, por eso es importante...</p>
                  <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.cv') }}">Leer más</a>
                  <ul class="list-inline entry-date pull-right font-12 mt-5">
                    <li><span class="text-theme-colored">Mar 29, 2019</span></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/multi/images/noticias/emprender.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                  {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                  </div> --}}
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="{{ route('blog.6-pasos') }}">¡6 pasos para comenzar a....</a></h5>
                  <p class="text-left mb-20 mt-15 font-13">1. Investiga tu mercado. Saber lo mismo que la competencia no sirve de nada. Profundiza....</p>
                  <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.6-pasos') }}">Leer más</a>
                  <ul class="list-inline entry-date pull-right font-12 mt-5">
                    <li><span class="text-theme-colored">Feb 17, 2019</span></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </article>
          </div>
          </div> 
          </div>
        </div>
    </section>
          <!--<div class="col-md-6">
            <div class="video-popup">                
              <a href="https://www.youtube.com/watch?v=8LDTk1DLg4M" data-lightbox-gallery="youtube-video" title="Video">
                <img alt="" src="/multi/images/exauane/uane-play.png" class="img-responsive img-fullwidth">
              </a>
            </div>
          </div>-->
         <!-- <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h3 class="text-gray-lightgray font-24 font-weight-600 mb-5">Conoce un poco de nuestros </h3>
            <h2 class="font-36 text-uppercase text-white font-weight-600 mt-0">Egresados UANE</span></h2>
            <p class="text-white">"Cuando nos graduamos, la mayoría de los que fueron mis compañeros ya tenían un trabajo estable, porque en UANE si te dan la oportunidad de hacer las cosas y de que tus sueños se hagan realidad"<br>

              Mafer Ortíz es egresada de la Licenciatura en Comunicación y trabaja actualmente en Multimedios como conductora de TV y locutora de Radio.</p>
            <a class="btn  btn-default hvr-bounce-to-left mt-15" href="https://www.youtube.com/watch?v=Rf7Seoj9ZPk&list=PLKNQip5jbYJkgI2uSqHJ7qWH36W5x8LFm" target="_blank">Conoce más casos de éxito aquí</a>
          </div>-->





     <!--Section: CTA--

     <section id="event" class="layer-overlay overlay-white-7" style="background-color:#00BB3"data-parallax-ratio="0.7" >
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>SIGUENOS EN <span class="text-theme-color-2">FACEBOOK</span></h3>
              <div class="fb-page" data-href="https://www.facebook.com/UANEOficial/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/UANEOficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/UANEOficial/">UANE</a></blockquote></div>
              <br/>       
            </div>
            <div class="col-md-8 ">
              <center><a href="{{ route('blog.soyuane') }}"><img alt="project" src="/multi/images/soyuane/Logo.png" class="logo"></a></center></div>
              <!-- Portfolio Gallery Grid --
             <div class="container">
              <div class="section-content">
              <div class="row">
              <div class="col-md-8" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="gallery-isotope grid-5 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane01.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane01.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane02.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane02.jpg"   data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane03.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane03.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane04.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane04.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane05.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane05.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane06.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane06.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane07.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane07.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane08.jpg">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane08.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane09.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane09.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start --
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="/multi/images/soyuane/soyuane010.jpg" >
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="/multi/images/soyuane/soyuane010.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid --
            </br>
             <center> <a href="{{ route('blog.soyuane') }}" class="btn btn-xl btn-theme-colored">Conoce nuestra galeria aquí</a></center>
          </br>
              </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  @include('partial.footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="{{ url('multi/js/custom.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="/multi/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description"
    content="@yield('meta-desc', 'Conoce todos los programas académicos de UANE: Bachillerato, Licenciaturas, Ingenierías, Maestrías, Especialidades, Doctorados y Programas Internacionales en modalidad presencial o en línea. ¡Inscribete ahora!')" />

  <link rel="canonical" href="{{ url(Request::url()) }}" />

  <meta name="robots" content="index,follow">
  <meta name="author" content="UANE" />

  <meta name="google-site-verification" content="6rFrZ4sGpNygGgV2ZbORAfScCucv8PKvJXtsqNqrCbY" />

  <meta name="csrf-token" content="{{ csrf_token() }}">



  <!-- Page Title -->
  <title>UANE | @yield('title', 'Experiencia que transforma')</title>

  <!-- Favicon and Touch Icons -->
  <link href="/multi/images/favicon.png" rel="shortcut icon" type="image/png">
  {{-- <link href="/multi/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="/multi/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/multi/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/multi/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> --}}

  <!-- Stylesheet -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/style-main.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
    integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">


  @stack('css')

  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  {{-- <link  href="/multi/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="/multi/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="/multi/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/> --}}

  <!-- CSS | Theme Color -->


  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NSPHQBL');
  </script>
  <!-- End Google Tag Manager -->


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <style>
    form .hidden {
      display: none;
    }

    form .visible {
      display: block;
    }
  </style>
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
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=487461332128996&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body class="">
  <div id="app">
    
    <div id="wrapper " class="clearfix">

      <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <img src="{{ asset('/multi/images/preloaders/Logo-45años-1000.gif') }}"width="100%" height="100%";
          height: 100%;/>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
      </div>


      @include('partial.menu')

      <!-- Start main-content -->
      <div class="main-content" id="app">

        @yield('content')
        <!-- end main-content -->
      </div>

      <!-- Footer -->

      <footer-component
      Bachillerato="{{ route('programas.bach') }}" 
      Licenciatura="{{ route('programas.lic') }}" 
      Ingenieria="{{ route('programas.ing') }}" 
      Maestria="{{ route('programas.maes') }}" 
      Especialidad="{{ route('programas.esp') }}" 
      Doctorado="{{ route('programas.doc') }}" 
      somosuane="{{ route('somos-uane.historia') }}"
      ></footer-component>
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    </div>
  </div>
  <!-- end wrapper -->




  @if (\Route::current()->getName() == 'exauane')

  @elseif(\Route::current()->getName() == 'exauane.formulario')

  @else
  @include('partial.forms.form-aspirantes')
  @endif

  <!-- Footer Scripts -->

  <!-- external javascripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/uane-js.js') }}"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="/multi/js/jquery-plugin-collection.js"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="/multi/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="/multi/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>





  {{-- Slider revolution script --}}

  <script>
    $(document).ready(function(e) {
    $(".rev_slider").revolution({
      sliderType:"standard",
      sliderLayout: "auto",
      dottedOverlay: "none",
      delay: 5000,
      navigation: {
          keyboardNavigation: "off",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          onHoverStop: "on",
          touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
          },
        arrows: {
          style:"zeus",
          enable:true,
          hide_onmobile:true,
          hide_under:600,
          hide_onleave:true,
          hide_delay:200,
          hide_delay_mobile:1200,
          tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
          left: {
            h_align:"left",
            v_align:"center",
            h_offset:30,
            v_offset:0
          },
          right: {
            h_align:"right",
            v_align:"center",
            h_offset:30,
            v_offset:0
          }
        },
        bullets: {
          enable:false,
          hide_onmobile:true,
          hide_under:600,
          style:"metis",
          hide_onleave:true,
          hide_delay:200,
          hide_delay_mobile:1200,
          direction:"horizontal",
          h_align:"center",
          v_align:"bottom",
          h_offset:0,
          v_offset:30,
          space:5,
          tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{}}</span>'
        }
      },
      responsiveLevels: [1240, 1024, 778],
      visibilityLevels: [1240, 1024, 778],
      gridwidth: [1170, 1024, 778, 480],
      gridheight: [650, 768, 960, 720],
      lazyType: "none",
      parallax: {
          origo: "slidercenter",
          speed: 1000,
          levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
          type: "scroll"
      },
      shadow: 0,
      spinner: "off",
      stopLoop: "on",
      stopAfterLoops: 0,
      stopAtSlide: -1,
      shuffle: "off",
      autoHeight: "off",
      fullScreenAutoWidth: "off",
      fullScreenAlignForce: "off",
      fullScreenOffsetContainer: "",
      fullScreenOffset: "0",
      hideThumbsOnMobile: "off",
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      debugMode: false,
      fallbacks: {
          simplifyAll: "off",
          nextSlideOnWindowFocus: "off",
          disableFocusListener: false,
      }
    });
  });
  </script>

  @stack('js')


  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSPHQBL" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat" attribution=setup_tool page_id="116612451803997" theme_color="#0084ff"
    logged_in_greeting="¡Hola! ¿En que podemos ayudarte?" logged_out_greeting="¡Hola! ¿En que podemos ayudarte?">
  </div>





</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta -->
    <meta name="description" content="UANE Marketing">
    <meta name="author" content="UANE">

    <title>@yield('title') | UANE Marketing</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="/admin/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style-main.css') }}">
    @stack('css')
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/admin/css/bracket.css">
    <link rel="stylesheet" href="/admin/css/bracket.oreo.css">
    <link rel="stylesheet" href="/admin/css/richtext.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
    integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    
    

    
  </head>

  <body>

    @if (Auth::user())
    @include('partial.menu-admin')
    @endif
    
    <div class="br-mainpanel {{ request()->is('mkt-user/usuarios/*') ? 'br-profile-page' : '' }}">
        @yield('content')


        <footer class="br-footer">
            <div class="footer-left">
              <div class="mg-b-2">UANE &copy; 2020. </div>
            </div>
            <div class="footer-right d-flex align-items-center">
              
            </div>
          </footer>
    </div>



      

    <script src="/admin/lib/jquery/jquery.min.js"></script>
    <script src="/admin/lib/jquery/jquery.richtext.js"></script>
    <script src="/admin/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="/admin/lib/select2/js/select2.full.min.js"></script> --}}
    <script src="/admin/lib/select2/js/select2.min.js"></script>
    <script src="/admin/lib/parsleyjs/parsley.min.js"></script>
    <script src="/admin/lib/parsleyjs/i18n/es.js"></script>
    <script src="/admin/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admin/lib/moment/min/moment.min.js"></script>
    <script src="/admin/lib/peity/jquery.peity.min.js"></script>


    
    



    <script src="/admin/js/bracket.js"></script>


   

@stack('js')

@include('admin.programas.crear-programa')
  </body>
</html>

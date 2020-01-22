<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UANE Marketing">
    <meta name="author" content="UANE">

    <title>@yield('title') | UANE Marketing</title>

    <!-- vendor css -->
    <link href="/admin/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/admin/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">

    @stack('css')

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/admin/css/bracket.css">
  </head>

  <body>

        @yield('content')


    

    <script src="/admin/lib/jquery/jquery.min.js"></script>
    <script src="/admin/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/lib/select2/js/select2.min.js"></script>
    <script src="/admin/lib/parsleyjs/parsley.min.js"></script>
    <script src="/admin/lib/parsleyjs/i18n/es.js"></script>
    <script src="/admin/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admin/lib/moment/min/moment.min.js"></script>
    <script src="/admin/lib/peity/jquery.peity.min.js"></script>

    @stack('js')

    <script src="/admin/js/bracket.js"></script>


    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
      
    </script>

  </body>
</html>

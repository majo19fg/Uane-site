@extends('index-admin')

@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="#">Dashboard</a>
    <span class="breadcrumb-item active">Programas</span>
  </nav>
</div><!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
      <h4>Programas</h4>
      <p class="mg-b-0">Lista completa de Programas.<br></p>
    </div>

    
    
 </div><!-- d-flex -->



<div class="br-pagebody">
  <div class="br-section-wrapper">      
    
    <div class="row">
        <div class="col-md-6">
            <h6 class="br-section-label">Programas</h6>
        </div>
        <div class="col-md-6">
            <a href="{{ route('exportar.reporte') }}" class="btn btn-primary btn-block tx-15 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-large" >Exportar tabla a excel</a>
        </div>
    </div>

    <div class="table-wrapper">
      
      <table id="datatable1" class="table display responsive nowrap" style="width:100%;">
        <thead>
          <tr>
            <th class="wd-15p">Id</th>
            <th class="wd-15p">Tiy</th>
            <th class="wd-15p">Matricula</th>
            <th class="wd-15p">Modalidad</th>
            <th class="wd-15p">Edad</th>
            <th class="wd-15p">Ciudad</th>
            <th class="wd-15p">Campus</th>
            <th class="wd-15p">Sexo</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($encuestas as $encuestas)
          <tr >
              <td>{{ $encuestas->id }}</td>
              <td>{{ $encuestas->email }}</td>
              <td>{{ $encuestas->matricula }}</td>
              <td>{{ $encuestas->modalidad }}</td>
              <td>{{ $encuestas->edad }}</td>
              <td>{{ $encuestas->ciudad }}</td>
              <td>{{ $encuestas->campus }}</td>
              <td>{{ $encuestas->sexo }}</td>

          </tr>
        @endforeach
          
        </tbody>
      </table>
    </div><!-- table-wrapper -->
    


    

  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->
@endsection

@push('css')
		<!-- vendor css -->
    
		<link href="/admin/lib/highlightjs/styles/github.css" rel="stylesheet">
    <link href="/admin/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/admin/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    


@endpush

@push('js')
    <script src="/admin/lib/highlightjs/highlight.pack.min.js"></script>
    <script src="/admin/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="/admin/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/admin/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: 'Mostrar _MENU_ registros',
            zeroRecords: "No hay resultados, intenta con otra busqueda",
            infoEmpty: "No hay datos guardados",
            info: "Pagina _PAGE_ de _PAGES_",
            paginate: {
              'previous': 'Atras',
              'next': 'Siguiente'
            },
           
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

    <style>
    </style>

@endpush
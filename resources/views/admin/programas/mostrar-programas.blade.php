@extends('index-admin')

@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="#">Dashboard</a>
    <a class="breadcrumb-item" href="#">Programas</a>
    <span class="breadcrumb-item active">Ver programas</span>
  </nav>
</div><!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
      <h4>Lista de programas</h4>
      <p class="mg-b-0">Lista completa de programas para ver y editar.<br></p>
    </div>

    
    
 </div><!-- d-flex -->



<div class="br-pagebody">
  <div class="br-section-wrapper">      
    
    <div class="row">
        <div class="col-md-6">
            <h6 class="br-section-label">Lista de programas</h6>
          <p class="br-section-text">Puedes actualizar los diferentes programas dentro del sitio web, ocultarlos o verlos directamente en la página web. Puedes añadir un nuevo programa dando clic en el botón o directamente desde el menú principal. </p>
        </div>
        <div class="col-md-6">
          <button class="btn btn-primary btn-block tx-15 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-large" data-toggle="modal" data-target="#crearPrograma">Da clic para crear un nuevo programa</button>
        </div>
    </div>

    <div class="table-wrapper">
      
      <table id="datatable1" class="table display responsive nowrap table" style="width:100%;">
        <thead>
          <tr>
            <th class="wd-15p">Programa</th>
            <th class="wd-15p">Campus</th>
            <th class="wd-15p">Modalidad</th>
            <th class="wd-15p">Tipo de programa</th>
            <th class="wd-15p">Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($programas as $programa)
          <tr >
              <td>{{ $programa->title }}</td>
              <td class="wd-15p">
                @foreach ($programa->campus as $campus)
                    {{  $loop->first ? '' : '|' }}
                    {{ $campus->name }}
                @endforeach
              </td>
              <td>{{ $programa->modalidadPrograma->name }}</td>
              <td>{{ $programa->tipoPrograma->name }}</td>
              <td>
                  <a target="_blank" href="{{ route('programas.lista', $programa) }}" class="btn-xs btn-primary btn-icon">
                    <div><i class="fa fa-eye"></i></div>
                  </a>
                  <a href="{{ route('editar.programa', $programa) }}" class="btn-xs btn-warning btn-icon">
                    <div><i class="fa fa-file"></i></div>
                  </a>
                  <a target="_blank" href="{{ route('programas.lista', $programa) }}" class="btn-xs btn-primary btn-icon">
                      <div><i class="fa fa-ban"></i></div>
                    </a>
                  <a href="#" class="btn-xs btn-danger btn-icon">
                    <div><i class="fa fa-trash-alt "></i></div>
                  </a>
              </td>
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
          responsive: {
            details: true,
          },
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

@endpush
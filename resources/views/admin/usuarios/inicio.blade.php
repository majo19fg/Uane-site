@extends('index-admin')

@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="#">Dashboard</a>
    <span class="breadcrumb-item active">Usuarios</span>
  </nav>
</div><!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
      <h4>Usuarios</h4>
      <p class="mg-b-0">Lista completa de usuarios del sistema.<br></p>
    </div>

    
    
 </div><!-- d-flex -->



<div class="br-pagebody">
  <div class="br-section-wrapper">      
    
    <div class="row">
        <div class="col-md-6">
            <h6 class="br-section-label">Usuarios del sistema</h6>
          <p class="br-section-text">Puedes actualizar los roles de los usuarios para administrar diferentes secciones del sitio web y acceder a ciertas caracteristicas dentro del sistema.</p>
        </div>
    </div>

    <div class="table-wrapper">
      
      <table id="datatable1" class="table display responsive nowrap" style="width:100%;">
        <thead>
          <tr>
            <th class="wd-15p">Nombre</th>
            <th class="wd-15p">Correo</th>
            <th class="wd-15p">Puesto</th>
            <th class="wd-15p">Roles</th>
            <th class="wd-15p">Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
          <tr >
              <td>{{ $usuario->name }} {{ $usuario->second_name }}</td>
              <td>{{ $usuario->email }}</td>
              <td>{{ $usuario->job_position }}</td>
              <td>{{ $usuario->getRoleNames()->implode(', ') }}</td>
              <td>
                  {{-- <a target="_blank" href="{{ route('mostrar.usuarios', $usuario) }}" class="btn-xs btn-primary btn-icon">
                    <div><i class="fa fa-eye"></i></div>
                  </a> --}}
                  @can('Actualizar Usuarios')
                  <a href="{{ route('editar.usuarios', $usuario) }}" class="btn btn-warning">
                    <div><i class="fa fa-file"></i></div>
                  </a>
                  @endcan
                  

                  <form action="{{ route('eliminar.usuarios', $usuario->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                      <div><i class="fa fa-trash-alt "></i></div>
                    </button>
                  </form>
                  
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
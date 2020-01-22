@extends('index-admin') 
@section('content')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Solicitud de diseño</a>
        <span class="breadcrumb-item active">Lista de solicitudes</span>
    </nav>
</div>
<!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
        <h4>Lista de solicitudes de diseño</h4>
        <p class="mg-b-0">Puedes revisar el status de la solicitud que realizaste.</p>
    </div>
</div>
<!-- d-flex -->


<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-inverse tx-uppercase tx-bold tx-14 mg-b-10">Solicitudes</h6>
        <p class="br-section-text">Para monitorear tu solicitud de diseño, utiliza tu numero de folio.</p>

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap table-bordered">
                <thead>
                    <tr>
                        <th>ID de la solicitud</th>
                        <th>Codigo de solicitud</th>
                        <th>Nombre del solicitante</th>
                        <th>Titulo</th>
                        <th>Campus</th>
                        <th>Material Requerido</th>
                        <th>Estatus</th>
                        <th>Fecha solicitada</th>
                        <th>Días transcurridos</th>
                        <th>Porcentaje</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($solicitudes as $solicitud)
                        <tr>
                            <td align="char">{{ $solicitud->id }}</th>
                            
                            <td align="char">{{ $solicitud->request_code }}</th>

                            <td align="char">{{ $solicitud->name.' ' .$solicitud->last_name }}</th>
                            
                            <td align="char">{{ $solicitud->title }}</th>

                            <td align="char">{{ $solicitud->campus }}</th>
                            
                            <td align="char">{!! $solicitud->request_design !!}</th>

                            <td align="char"><span class="badge 
                                {{ $solicitud->status == 'Sin confirmar' ? 'badge-dark' : ($solicitud->status == 'Sin Información' ? 'badge-danger' : ($solicitud->status == 'Confirmado' ? 'badge-info' : ($solicitud->status == 'En proceso' ? 'badge-warning' : ($solicitud->status == 'Finalizado' ? 'badge-primary' : ($solicitud->status == 'Entregado/Enviado' ? 'badge-success' : ''))))) }} 
                                 tx-13">{{ $solicitud->status }}</span></th> 

                            <td align="char">{{ $solicitud->created_at->format('d/m/Y') }}</th>

                            <td align="char">{{  $solicitud->created_at->diffInDays(\Carbon\Carbon::now()) == 0 ? 'No ha transcurrido ni un día' : $solicitud->created_at->diffInDays(\Carbon\Carbon::now()).' días' }}</th>

                            <td align="char">{!! $solicitud->percentage == null ? 'Solicitud sin confirmar' :  
                                    '<div class="progress mg-b-20">
                                        <div class="progress-bar wd-'.$solicitud->percentage.'p" role="progressbar" aria-valuenow="'.$solicitud->percentage.'" aria-valuemin="0" aria-valuemax="100">'.$solicitud->percentage .'%</div>
                                    </div>' !!}</th>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>



@if (Session::has('success'))
<div class="alert alert-success alert-solid pd-20" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
    <div class="d-sm-flex align-items-center justify-content-start">
        <i class="icon ion-ios-checkmark-outline lh-0 tx-52"></i>
        <div class="mg-sm-l-15 mg-t-15 mg-sm-t-0">
            <h5 class="mg-b-2 pd-t-2">¡Excelente!</h5>
            <p class="mg-b-0 tx-xs op-8">{{ Session::get('success') }}</p>
        </div>
    </div>
    <!-- d-flex -->
</div>
@endif
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
    <script src="/admin/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script>
            $(function(){
              'use strict';
      
              $('#datatable1').DataTable({
                pageLength : 25,
                responsive: {
                  details: true,
                },
                order:{},
                columnDefs: {
                    targets: 'no-sort',
                    orderable: true,
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

      
            });
          </script>

@endpush
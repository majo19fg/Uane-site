@extends('index-admin')

@section('content')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Convenios</a>
        <span class="breadcrumb-item active">Guardar convenio</span>
    </nav>
</div>
<!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
        <h4>Convenios empresariales</h4>
        <p class="mg-b-0"></p>
    </div>
</div>

<!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row mg-t-10">
            <div class="col-xl-12">

                @if (session()->has('success'))

                <div class="alert alert-success alert-bordered" role="alert">

                    <div class="d-sm-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                        <div class="mg-t-20 mg-sm-t-0">
                            <h5 class="mg-b-2 tx-success">Convenio eliminado exitosamente.</h5>
                            <p class="mg-b-0 tx-gray">¡El convenio se ha eliminado exitosamente!</p>
                        </div>
                    </div>
                    <!-- d-flex -->
                </div>
                @endif
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-10p">Id</th>
                                <th class="wd-10p">Campus</th>
                                <th class="wd-10p">Empresa</th>
                                <th class="wd-10p">Giro de la empresa</th>
                                <th class="wd-10">direccion_empresa</th>
                                <th class="wd-25p">Datos de contacto</th>
                                <th class="wd-10p">Fecha del convenio</th>
                                <th class="wd-10p">Adjuntos</th>
                                
                                <th class="wd-10p">Acciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($convenios as $convenio)
                            <tr>
                                <td class="wd-10p">{{ $convenio->id }}</td>
                                <td class="wd-10p">{{ $convenio->campus }}</td>
                                <td class="wd-10p">{{ $convenio->nombre_empresa }}</td>
                                <td class="wd-10p">{{ $convenio->giro_empresa }}</td>
                                <td class="wd-10">{{ $convenio->direccion_empresa }}</td>
                                <td class="wd-25p">{!! 'Nombre: '.$convenio->nombre_contacto.'<br> Teléfono: '.$convenio->telefono_contacto.'<br> Correo:'.$convenio->correo_contacto !!}</td>
                                <td class="wd-10p">{{ $convenio->fecha_inicio->format('d/m/Y') }}</td>                                
                                <td class="wd-10p"><a href="/laravel/public/multi/images/{{ $convenio->documento }}"><i class="far fa-file tx-22 tx-link lh-0 valign-middle"></i><span class="pd-l-5">{{ $convenio->nombre_documento }}</span></a></td>
                                
                                <td class="wd-10p">
                                    <a  href="{{ route('convenios.editar',$convenio) }}" class="btn btn-outline-warning btn-icon mg-r-5"><div><i class="fas fa-edit"></i></div></a>
                                    <a  href="{{ route('convenios.pdf',$convenio) }}" class="btn btn-outline-info btn-icon mg-r-5"><div><i class="fas fa-print"></i></div></a>
                                    <a  href="{{ route('convenios.view',$convenio) }}" class="btn btn-outline-success btn-icon mg-r-5"><div><i class="fas fa-eye"></i></div></a>
                                    @hasanyrole('Super Admin')
                                    <form action="{{ route('convenios.eliminar', $convenio) }}" method="post" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-outline-danger btn-icon mg-r-5" onclick="return confirm('¿Estás seguro de eliminar este convenio?')"><div><i class="fas fa-minus"></i></div></button>
                                    </form>
                                    @endhasanyrole
                                </td>
                                

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- col-6 -->
            <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <a href="{{ route('exportar.convenios') }}" class="btn btn-primary btn-block tx-15 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-large" >Exportar tabla a excel</a>
                </div>
        
        </div><!-- row -->

    </div>

</div>
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
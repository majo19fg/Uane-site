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
        <h4>Asignar y editar solicitud de diseno</h4>
        <p class="mg-b-0">Asigna usuarios a la solicitud de diseno.</p>
    </div>
</div>
<!-- d-flex -->


<div class="br-pagebody">
    <div class="row">
        <div class="offset-lg-1  col-lg-4">
            <div class="br-section-wrapper">
                <h6 class="tx-inverse tx-uppercase tx-bold tx-14 mg-b-25">Información de la solicitud:</h6>
                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Id de la solicitud:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->id }}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Nombre del solicitante:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->name.' '.$solicitud->last_name }}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Teléfono:</p>
                <p class="tx-inverse mg-b-25 ">Oficina: <strong>{{ $solicitud->phone }}</strong> <br>Celular: <strong>{{ $solicitud->cel == null ? 'No registró un teléfono celular' : $solicitud->cel }}</strong></p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Correo:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->email }}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Nombre del solicitante:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->name.' '.$solicitud->last_name }}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Campus:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->campus }}</p>
                
                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Área o departamento:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->dpto }}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Solicitud:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{!! $solicitud->request_design !!}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Titulo:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{!! $solicitud->title !!}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Descripción:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->desc }}</p>

                <p class="tx-14 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Fecha de registro:</p>
                <p class="tx-inverse mg-b-25 tx-bold">{{ $solicitud->created_at->format('d/m/Y') }}</p>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="br-section-wrapper">
                <div class="form-layout">
                    <h6 class="tx-inverse tx-uppercase tx-bold tx-14 mg-b-10">Estatus y progreso</h6>
                    <form action="{{ route('diseno.actualizar-estatus', $solicitud) }}" method="post">
                        @csrf @method('PUT') 
                        
                        @if ($errors->any())
                        <div class="alert alert-danger alert-solid" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <div class="d-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-close alert-icon tx-32"></i>
                                <span><strong>¡UPS!</strong> @foreach($errors->all() as $error) {{ $error }} @endforeach</span>
                            </div><!-- d-flex -->
                        </div>
                        @endif
                        
                        @if (session()->has('flash'))
                        <div class="alert alert-success alert-bordered" role="alert">
                
                            <div class="d-sm-flex align-items-center justify-content-start">
                            <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                            <div class="mg-t-20 mg-sm-t-0">
                                <h5 class="mg-b-2 tx-success">Estado de la solicitud actualizado exitosamente.</h5>
                                <p class="mg-b-0 tx-gray">¡El programa se ha actualizado exitosamente! </p>
                                <p>Se envió un correo a <b>{{ $solicitud->name.' '.$solicitud->last_name }}</b> notificando esta acción.</p>
                            </div>
                            </div><!-- d-flex -->
                        </div>
                        @endif
                        <div class="row mg-t-20">
                            <div class="col-lg-4">
                                <label class="rdiobox rdiobox-info">
                                    <input {{ $solicitud->status == 'Confirmado' ? 'checked' : '' }} type="radio" name="status" value="Confirmado"><span>Confirmado</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="rdiobox rdiobox-info">
                                    <input {{ $solicitud->status == 'Sin Información' ? 'checked' : '' }} type="radio" name="status" value="Sin Información"><span>Sin Información</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="rdiobox rdiobox-warning">
                                    <input {{ $solicitud->status == 'En proceso' ? 'checked' : '' }} type="radio" name="status" value="En proceso"><span>En proceso</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="rdiobox rdiobox-primary">
                                    <input {{ $solicitud->status == 'Finalizado' ? 'checked' : '' }} type="radio" name="status" value="Finalizado"><span>Finalizado</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="rdiobox rdiobox-success">
                                    <input {{ $solicitud->status == 'Entregado/Enviado' ? 'checked' : '' }} type="radio" name="status" value="Entregado/Enviado"><span>Entregado/Enviado</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <textarea name="mensaje" class="form-control" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info tx-11 tx-uppercase tx-spacing-2 mg-t-10">Actualizar estado</button>

                    </form>
                </div>
            </div>

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
<link href="/admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<link href="/admin/lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
<link href="/admin/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet"> 
@endpush @push('js')

<script src="/admin/lib/highlightjs/highlight.pack.min.js"></script>
<script src="/admin/lib/select2/js/select2.min.js"></script>
<script src="/admin/lib/timepicker/jquery.timepicker.min.js"></script>
<script src="/admin/lib/spectrum-colorpicker/spectrum.js"></script>
<script src="/admin/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
<script src="/admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="/admin/lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>





@endpush
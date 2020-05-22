@extends('index-admin')

@section('content')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home.admin') }}">Dashboard</a>
        <span class="breadcrumb-item active">Marketing Box</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
 <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>

<div>
        <h4>Marketing Box</h4>
        <p class="mg-b-0"></p>
    </div>
</div><!-- d-flex -->
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row mg-t-10">
            <div class="col-xl-10 offset-1">
                <form action="{{ route('acceso.guardar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div >

                        <div class="row mg-t-5">  
                            <label class="col-sm-4 form-control-label">Campus: <span class="tx-danger">*</span></label>
                            <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2" name="campus"
                                    data-placeholder="Selecciona un campus">
                                    <option label="Selecciona un campus"></option>
                                    <option {{ old('campus') == 'Campus Saltillo' ? 'selected' : '' }}
                                        value="Campus Saltillo">Campus Saltillo</option>
                                    <option {{ old('campus') == 'Campus Torreón' ? 'selected' : '' }}
                                        value="Campus Torreón">Campus Torreón</option>
                                    <option {{ old('campus') == 'Campus Monclova' ? 'selected' : '' }}
                                        value="Campus Monclova">Campus Monclova</option>
                                    <option {{ old('campus') == 'Campus Sabinas' ? 'selected' : '' }}
                                        value="Campus Sabinas">Campus Sabinas</option>
                                    <option {{ old('campus') == 'Campus Piedras Negras' ? 'selected' : '' }}
                                        value="Campus Piedras Negras">Campus Piedras Negras</option>
                                    <option {{ old('campus') == 'Campus Monterrey' ? 'selected' : '' }}
                                        value="Campus Monterrey">Campus Monterrey</option>
                                    <option {{ old('campus') == 'Campus Reynosa' ? 'selected' : '' }}
                                        value="Campus Reynosa">Campus Reynosa</option>
                                    <option {{ old('campus') == 'Campus Matamoros' ? 'selected' : '' }}
                                        value="Campus Matamoros">Campus Matamoros</option>
                                    <option {{ old('campus') == 'Rectoría' ? 'selected' : '' }} value="Rectoría">
                                        Rectoría</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-layout-footer mg-t-30">
                            <button class="buttonGuardar">Ingresar</button>
                        </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->

                </form>
            </div><!-- col-6 -->

        </div><!-- row -->
    </div>
</div>
@endsection

@push('css')
<link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">

@endpush
@push('css')
<style>
.buttonGuardar{
    background-color: #73243D;
    color:#ffff;
    height:35px; 
    width:33.3%; 
    margin: 5px -15%; 
    position:relative;
    top:50%; 
    left:50%;
    }
</style>
@endpush


@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Flyers</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
    <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Torreón </h4>
        <p class="mg-b-0"></p>
    </div>
</div><!-- d-flex -->


<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-4">
                    {{-- <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p> --}}
                    <table border-collapse: separate; style>
                      <colgroup>
                        <col style="width: 15%"/>                                    
                        <col style="width: 55%"/>
                        <col style="width: 30%"/>
                      </colgroup>
                      <thead>
                        <tr>
                            <th rowspan="2"></th>
                            <th rowspan="2">Nombre</th>
                            <th rowspan="2">Tamaño</th>
                        </tr>
                      </thead>
                      <tfoot>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td><a href="{{ route('usuarios.BMB') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                          <th><a href="{{ route('usuarios.BMB') }}">Bachillerato</a></th>
                          <td>2 elementos</td>
                        </tr>
                        <tr>
                          <td><a href="{{ route('usuarios.CarrerasTorr') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                          <th><a href="{{ route('usuarios.CarrerasTorr') }}">Carreras</a></th>
                          <td>15 elementos</td>
                        </tr>
                        <tr>
                          <td><a href="{{ route('usuarios.PostgradosTR') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                          <th><a href="{{ route('usuarios.PostgradosTR') }}">Postgrados</a></th>
                          <td>3 elementos</td>
                        </tr>
                        <tr>
                          <td><a href="{{ route('usuarios.PreciosTR') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                          <th><a href="{{ route('usuarios.PreciosTR') }}">Precios</a></th>
                          <td>2 elementos</td>
                        </tr>
                        <tr>
                          <td><a href="{{ route('usuarios.Procesos') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                          <th><a href="{{ route('usuarios.Procesos') }}">Procesos de admisión</a></th>
                          <td>2 elementos</td>
                        </tr>
                      </tbody>
                    </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

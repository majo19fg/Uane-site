@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Brochures</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
    <div>
        <h4>Archivos de Descarga </h4>
        <p class="mg-b-0"></p>
    </div>
</div><!-- d-flex -->


<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    {{-- <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p> --}}
                              <table border-collapse: separate; style>
                                  <colgroup>
                                    <col style="width: 60%"/>
                                    <col style="width: 20%"/>
                                    <col style="width: 20%"/>
                                    <col style="width: 20%"/>
                                  </colgroup>
                                  <thead>
                                    <tr>
                                      <th rowspan="2">Nombre</th>
                                      <th rowspan="2">Fecha</th>
                                      <th rowspan="2">Tamaño</th>
                                      <th rowspan="2">Descarga</th>
                                    </tr>
                                  </thead>
                                  <tfoot>
                                  </tfoot>
                                  <tbody>
                                    <tr>
                                      <th><a href="{{ asset('/multi/pdf/presentaciones/Saltillo/UANE - Oferta Educativa Saltillo - Bachillerato.pdf') }}">UANE - Oferta Educativa Saltillo - Bachillerato.pdf</a></th>
                                      <td>20 de Junio</td>
                                      <td>628 KB</td>
                                      <td><a href="{{ asset('/multi/pdf/presentaciones/Saltillo/UANE - Oferta Educativa Saltillo - Bachillerato.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="{{ asset('/multi/pdf/presentaciones/Saltillo/UANE - Oferta Educativa Saltillo - Empresas.pdf') }}">UANE - Oferta Educativa Saltillo - Empresas.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>628 KB</td>
                                        <td><a href="{{ asset('/multi/pdf/presentaciones/Saltillo/UANE - Oferta Educativa Saltillo - Empresas.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/pdf/presentaciones/Saltillo/UANE - Oferta Educativa Saltillo - Presencial.pdf') }}">UANE - Oferta Educativa Saltillo - Presencial.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>628 KB</td>
                                        <td><a href="{{ asset('/multi/pdf/presentaciones/Saltillo/UANE - Oferta Educativa Saltillo - Presencial.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
    

                                    
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

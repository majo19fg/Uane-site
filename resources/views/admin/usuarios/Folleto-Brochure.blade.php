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
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-DPYLE-2019.pdf') }}">Brochure-DPYLE-2019.pdf</a></th>
                                      <td>20 de Junio</td>
                                      <td>628 KB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-DPYLE-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-ESO-2019.pdf') }}">Brochure-ESO-2019.pdf</a></th>
                                      <td>20 de Junio</td>
                                      <td>646 KB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-ESO-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-IMPI-2019.pdf') }}">Brochure-IMPI-2019.pdf</a></th>
                                      <td>15 de Agosto</td>
                                      <td>7,48 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-IMPI-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                     <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MAYL-2019.pdf') }}">Brochure-MAYL-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>34.5 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MAYL-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MGA-2019.pdf') }}">Brochure-MGA-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>49.2</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MGA-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MGNM-2019.pdf') }}">Brochure-MGNM-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>64.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MGNM-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MSO-2019.pdf') }}">Brochure-MSO-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>53.6 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Brochures/Brochure-MSO-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                    
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

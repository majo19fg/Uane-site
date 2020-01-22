@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">En linea</span>
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
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/100% en Línea.pdf') }}">100% en Línea.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>13.7 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/100% en Línea.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Bachillerato.pdf') }}">Bachillerato.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>53.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Bachillerato.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Carreras.pdf') }}">Carreras.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>49 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Carreras.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                     <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Matamoros.pdf') }}">Postgrados Matamoros.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>48.1 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Matamoros.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Monclova .pdf') }}">Postgrados Monclova.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>63.1 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Monclova .pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Monterrey.pdf') }}">Postgrados Monterrey.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>64.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Monterrey.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Piedras Negras.pdf') }}">Postgrados Piedras Negras.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>53.6 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Piedras Negras.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Reynosa.pdf') }}">Postgrados Reynosa.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>628 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Reynosa.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Saltillo.pdf') }}">Postgrados Saltillo.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>646 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Saltillo.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Torreon.pdf') }}">Postgrados Torreon.pdf</a></th>
                                        <td>15 de Agosto</td>
                                        <td>7,48 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Generales/Postgrados Torreon.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
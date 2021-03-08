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
    <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Presentaciones Piedras Negras</h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Efz2fqVJ8bNFhbBrdn4gf-4B5VaLdbVCtkX5W_Uz94qL6g?e=MqbAsf">UANE - Oferta Educativa Piedras Negras - Bachillerato.pdf</a></th>
                                      <td>26 de Febrero</td>
                                      <td>2.52 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Efz2fqVJ8bNFhbBrdn4gf-4B5VaLdbVCtkX5W_Uz94qL6g?e=MqbAsf"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Edqs3bJ8R0tFqrSFrrUN0uEBZcSCwTRuCezGLfE5GpOnkQ?e=g9saRH">UANE - Oferta Educativa Piedras Negras - Empresas.pdf</a></th>
                                        <td>26 de Febrero</td>
                                        <td>2.09 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Edqs3bJ8R0tFqrSFrrUN0uEBZcSCwTRuCezGLfE5GpOnkQ?e=g9saRH"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaSFOsT0fX9HlRoCaLJAzCYBjKnIW8P7z2yDzi3v_21BYw?e=Hp81Lk">UANE - Oferta Educativa Piedras Negras - Presencial.pdf</a></th>
                                        <td>26 de Febrero</td>
                                        <td>1.20 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaSFOsT0fX9HlRoCaLJAzCYBjKnIW8P7z2yDzi3v_21BYw?e=Hp81Lk"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
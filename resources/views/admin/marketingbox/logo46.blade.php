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
        <h4>Mailing </h4>
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
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQuCt2CMUJxGkWl7_jmah5oBAt6oCypTLQHQGG25kYJfew?e=hWS2tI">Logo 46 años Original Vertical.png</a></th>
                                        <td>4 de Septiembre</td>
                                        <td>153 KB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQuCt2CMUJxGkWl7_jmah5oBAt6oCypTLQHQGG25kYJfew?e=hWS2tI"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETIAgtHu-dNLquvTcPspFxwBR7x8p67uJSAGuyiugAFl5Q?e=xUKaWQ">Logo 46 años 2 colores horizontal.png</a></th>
                                        <td>4 de Septiembre</td>
                                        <td>128 KB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETIAgtHu-dNLquvTcPspFxwBR7x8p67uJSAGuyiugAFl5Q?e=xUKaWQ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETMLO-AOjCFNsSPwCcfhn0wBDjyZW_7lbD2wKjimQ8-Jyw?e=KxXhtO">Logo 46 años blanco vertical.png</a></th>
                                        <td>4 de Septiembre</td>
                                        <td>119 KB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETMLO-AOjCFNsSPwCcfhn0wBDjyZW_7lbD2wKjimQ8-Jyw?e=KxXhtO"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfbXW1X969lFgP4ZNuSL8TYB-bg6VP1OcXoZVpOyW-jmjA?e=wKL9zc">Logo 46 años blanco horizontal.png</a></th>
                                      <td>4 de Septiembre</td>
                                      <td>95 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfbXW1X969lFgP4ZNuSL8TYB-bg6VP1OcXoZVpOyW-jmjA?e=wKL9zc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

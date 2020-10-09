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
        <h4>Orgullosamente UANE</h4>
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
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESBDOM8EAX5Ol3-2r6Eian4BlAxRbrZVSu3Dj_iTyCrsvg?e=ZtAmF3">Orgullosamente UANE FB.jpg</a></th>
                                        <td>9 de Septiembre</td>
                                        <td>2,50 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESBDOM8EAX5Ol3-2r6Eian4BlAxRbrZVSu3Dj_iTyCrsvg?e=ZtAmF3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET61DedqwO1AuKAFNkX5e-ABmKw4KevcUa7D73cAwWk6fg?e=d9FbDC">Orgullosamente UANE WhatsApp.jpg</a></th>
                                        <td>9 de Septiembre</td>
                                        <td>3,25 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET61DedqwO1AuKAFNkX5e-ABmKw4KevcUa7D73cAwWk6fg?e=d9FbDC"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXIekQ_xYetPqYuLpez859sBWZYZVZZdFwgp7UEBhVQYcw?e=MqhLfq">Orgullosamente Docente FB.jpg</a></th>
                                        <td>10 de Septiembre</td>
                                        <td>897 KB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXIekQ_xYetPqYuLpez859sBWZYZVZZdFwgp7UEBhVQYcw?e=MqhLfq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EW3BnyaIDLpGvplhera2dfgBE6-a6vZ8hQJqZQm-rn3Ddg?e=H0UFxA">Orgullosamente Docente WhatsApp.jpg</a></th>
                                        <td>10 de Septiembre</td>
                                        <td>1,16 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EW3BnyaIDLpGvplhera2dfgBE6-a6vZ8hQJqZQm-rn3Ddg?e=H0UFxA"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

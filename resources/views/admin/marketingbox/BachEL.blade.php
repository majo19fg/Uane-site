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
        <h4>Flyers En Línea</h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESv62zRt_1lGlHVdSf-o5woB18S01ok-RvCVjXPY5pTS8Q?e=WdiTKh">BACH-EL-2020.pdf</a></th>
                                      <td>29 de Septiembre</td>
                                      <td>2,56 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESv62zRt_1lGlHVdSf-o5woB18S01ok-RvCVjXPY5pTS8Q?e=WdiTKh"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcZCKk52G9NHtW2Be_0fjzIBTVlC-cQ7jWh9cU3qdEu_AQ?e=9BrkVi">Mailing Bachillerato en Línea.jpg</a></th>
                                      <td>27 de Octubre</td>
                                      <td>1,48 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcZCKk52G9NHtW2Be_0fjzIBTVlC-cQ7jWh9cU3qdEu_AQ?e=9BrkVi"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ebidrmy7YndLu6rPo_AC_CoBl2ovS5edaoQL4iWQmykv2A?e=AicAWu">Historias Instagram Bachillerato en Línea-01.jpg</a></th>
                                      <td>27 de Octubre</td>
                                      <td>1,14 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ebidrmy7YndLu6rPo_AC_CoBl2ovS5edaoQL4iWQmykv2A?e=AicAWu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef6ztiG3qPNItk9Rf-te4DEBaV_HJ3ObMFOApaBBtBL5mw?e=35eUN9">Historias Instagram Bachillerato en Línea-02.jpg</a></th>
                                      <td>27 de Octubre</td>
                                      <td>888 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef6ztiG3qPNItk9Rf-te4DEBaV_HJ3ObMFOApaBBtBL5mw?e=35eUN9"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EacERBzRIMxEjxTgw4-rUjkBvPuFLJGKNKpDK0Knq-ONSg?e=3t91f4">Facebook Bachillerato en Línea.jpg</a></th>
                                      <td>27 de Octubre</td>
                                      <td>5,39 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EacERBzRIMxEjxTgw4-rUjkBvPuFLJGKNKpDK0Knq-ONSg?e=3t91f4"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
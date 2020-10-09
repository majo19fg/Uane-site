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
        <h4>Wallpapers</h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVMU3USLPzJLhyu6cOab4csBFb_PyLPfrojy6uL5NozR5Q?e=dyDGtH">Wallpaper UANE.pdf</a></th>
                                      <td>8 de Octubre</td>
                                      <td>1,94 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVMU3USLPzJLhyu6cOab4csBFb_PyLPfrojy6uL5NozR5Q?e=dyDGtH"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ETL2SPea9lxBpWKMBi0XpNIBG8zL4tSb0HUL5_UsAeGdkA?e=LSoF1h">Wallpaper Universidad Americana del Noreste.pdf</a></th>
                                      <td>8 de Octubre</td>
                                      <td>6,85 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ETL2SPea9lxBpWKMBi0XpNIBG8zL4tSb0HUL5_UsAeGdkA?e=LSoF1h"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EY5T3M8xsvpDspmc8QOBDFEBWfIr41TvbGzsDdmsHsyRHg?e=uzB28n">Wallpaper Universidad Americana del Noreste 1.jpg</a></th>
                                      <td>8 de Octubre</td>
                                      <td>6,27 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EY5T3M8xsvpDspmc8QOBDFEBWfIr41TvbGzsDdmsHsyRHg?e=uzB28n"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcPmKmEy1RxNrAYnFxTfsTMB0CD8g8k7ON6nmHo2vUJr5A?e=C9uweY">Wallpaper Universidad Americana del Noreste 2.jpg</a></th>
                                      <td>8 de Octubre</td>
                                      <td>6,40 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcPmKmEy1RxNrAYnFxTfsTMB0CD8g8k7ON6nmHo2vUJr5A?e=C9uweY"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdsQYqcpXURArPj9in5Nd0EBOopFJPWVLJFfuLrgFjWCFw?e=s9iA5v">Wallpaper Universidad Autonoma del Noreste.pdf</a></th>
                                      <td>8 de Octubre</td>
                                      <td>6,80 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdsQYqcpXURArPj9in5Nd0EBOopFJPWVLJFfuLrgFjWCFw?e=s9iA5v"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZyq07C57ENNsp3CdNXc-xYBOSXS_sFA0CrIWejwkVOXUw?e=b78vQ3">Wallpaper Universidad Autonoma del Noreste 1.jpg</a></th>
                                      <td>8 de Octubre</td>
                                      <td>6,22 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZyq07C57ENNsp3CdNXc-xYBOSXS_sFA0CrIWejwkVOXUw?e=b78vQ3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeKcZ41qoZtIskRE2246t3gBYmcxl5eMeNoPo7jjmOykaA?e=vVyFN4">Wallpaper Universidad Autonoma del Noreste 2.jpg</a></th>
                                      <td>8 de Octubre</td>
                                      <td>6,33 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeKcZ41qoZtIskRE2246t3gBYmcxl5eMeNoPo7jjmOykaA?e=vVyFN4"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>                          
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

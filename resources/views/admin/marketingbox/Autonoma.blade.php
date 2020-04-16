@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Autonoma</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
  <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Autonoma </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/ETqR4tOeMSVIhq0lRS8bK40BLT1DI9bYDKnK9LPyEPi6vg?e=t8lLFT">UANE Diseño 1.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/ETqR4tOeMSVIhq0lRS8bK40BLT1DI9bYDKnK9LPyEPi6vg?e=t8lLFT"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EUpnPZIxf9NIigMMCeMxANwBeLuscX4Eq-vUW7tx_l4ECA?e=IKVXRu">UANE Diseño 2 - Constancia.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EUpnPZIxf9NIigMMCeMxANwBeLuscX4Eq-vUW7tx_l4ECA?e=IKVXRu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/ESKXHo7Zd3pLtTptJH0dkCQBqWttKID_2tHnm2N4FJkUmA?e=4Us42k">UANE Diseño 2 - Diploma.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/ESKXHo7Zd3pLtTptJH0dkCQBqWttKID_2tHnm2N4FJkUmA?e=4Us42k"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EZu6r7cQTzhGjsO84KrhHqMBYWSpgCkfmSWgYt6y2Xwo1g?e=y5Mhve">UANE Diseño 2 - Reconocimiento.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EZu6r7cQTzhGjsO84KrhHqMBYWSpgCkfmSWgYt6y2Xwo1g?e=y5Mhve"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/ETJlLNMo841KkOgMzUey63kBi0iwFiJCLNAYYmzYKisI4g?e=GQAhaY">UANE Diseño 3.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/ETJlLNMo841KkOgMzUey63kBi0iwFiJCLNAYYmzYKisI4g?e=GQAhaY"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/Ede_asYq-qREpUitQFaQFscBspWqo613l8MBxh-n-BA-uw?e=1haCdg">UANE Diseño 4 - Constancia.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/Ede_asYq-qREpUitQFaQFscBspWqo613l8MBxh-n-BA-uw?e=1haCdg"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EQV9Tl5yg3pOvSMORRjkqewBjWfPUbX1jUBH00ti3mCZlQ?e=2FxjeE">UANE Diseño 4 - Diploma.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EQV9Tl5yg3pOvSMORRjkqewBjWfPUbX1jUBH00ti3mCZlQ?e=2FxjeE"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EaTb31RAKn9DsdCHAeMmGJ4BLXBmqIQc8x8J7BBfPN1bAA?e=zsad1D">UANE Diseño 4 - Reconocimiento.pptx</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EaTb31RAKn9DsdCHAeMmGJ4BLXBmqIQc8x8J7BBfPN1bAA?e=zsad1D"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                                                  
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
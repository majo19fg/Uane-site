@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Cursos en línea</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
  <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Cursos en línea </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETSy-SEzsYlLlnQ5_dNaAncB0rxAGE3yQ2l2VNQ9NJ5aqw?e=hkr2in">Diplomados 2021_UANE_Administración-de Negocios.jpg</a></th>
                                      <td>29 de Enero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETSy-SEzsYlLlnQ5_dNaAncB0rxAGE3yQ2l2VNQ9NJ5aqw?e=hkr2in"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESKaXJD8IfZLsiP2iKaaHIsBCXpLa_EWeXDIVAylmfweCw?e=hTDWTt">Diplomados 2021_UANE_Coaching Familiar.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESKaXJD8IfZLsiP2iKaaHIsBCXpLa_EWeXDIVAylmfweCw?e=hTDWTt"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXwOtzw7ZZhGtdVNfSQkWPABIuJ92otshYqLlj9Iww0NLg?e=G9bEck">Diplomados 2021_UANE_Fundamentos-de Docencia.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXwOtzw7ZZhGtdVNfSQkWPABIuJ92otshYqLlj9Iww0NLg?e=G9bEck"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZuHRZuX62hKjVey_ch7cBABhTeBD-WwDYkttJ7Muk393A?e=uN4QGD">Diplomados 2021_UANE_Globalización.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZuHRZuX62hKjVey_ch7cBABhTeBD-WwDYkttJ7Muk393A?e=uN4QGD"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdEV-bbMw8lCko95lDlAf8EBo5QexOcUwqMToBEAhnjnXg?e=6IV51e">Diplomados 2021_UANE_Herramientas para-Emprendimiento.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdEV-bbMw8lCko95lDlAf8EBo5QexOcUwqMToBEAhnjnXg?e=6IV51e"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcLBwnXWVtRGuGryn3xDkowBjNKp7dlrHewEm9Eo66Re2g?e=8fNIpj">Diplomados 2021_UANE_Liderazgo para Nuevos-Profesionistas_Lidere.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcLBwnXWVtRGuGryn3xDkowBjNKp7dlrHewEm9Eo66Re2g?e=8fNIpj"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVgd7qmIfEpOoFrZf93ecUUBifnhi74V2nU06MjH3cM3cw?e=TzsTbs">Diplomados 2021_UANE_Talento Humano.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVgd7qmIfEpOoFrZf93ecUUBifnhi74V2nU06MjH3cM3cw?e=TzsTbs"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
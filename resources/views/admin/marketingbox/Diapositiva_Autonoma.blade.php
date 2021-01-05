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
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EX0Uh6SdC8NDo99a4sFotaYBuD8__B3HAavD98Pd5lbNCw?e=oHQHtD">Panorámica.pptx</a></th>
                                      <td>27 de Octubre</td>
                                      <td>4,14 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EX0Uh6SdC8NDo99a4sFotaYBuD8__B3HAavD98Pd5lbNCw?e=oHQHtD"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>  
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EVCuAEdCgzFIvtd6-Sw0iY8BvpIuGnkJxk2TN0zcyPN4mQ?e=KCbNPT">Plantilla-1-dic.pptx</a></th>
                                      <td>27 de Octubre</td>
                                      <td>686 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EVCuAEdCgzFIvtd6-Sw0iY8BvpIuGnkJxk2TN0zcyPN4mQ?e=KCbNPT"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EeRUDYvTuQRAgfgKvNu4xWkBwN0EE7kB5xZ2FjsK71fnDw?e=XHUXc4">Plantilla-2-dic.pptx</a></th>
                                      <td>27 de Octubre</td>
                                      <td>664 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EeRUDYvTuQRAgfgKvNu4xWkBwN0EE7kB5xZ2FjsK71fnDw?e=XHUXc4"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>  
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EWE5OAC4ImxPgJuCINr-hiYBl0_r4zG-TenoA9DT97hXdw?e=aO4TxY">Plantilla-3-dic.pptx</a></th>
                                      <td>27 de Octubre</td>
                                      <td>695 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:p:/g/personal/marketingdigital_uane_edu_mx/EWE5OAC4ImxPgJuCINr-hiYBl0_r4zG-TenoA9DT97hXdw?e=aO4TxY"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>                                                                  
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
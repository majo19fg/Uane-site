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
        <h4>En Línea </h4>
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
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQGkXUa5aWtNtcJvM0GXKowBTg2kk7V74plZfm_Mf_QCZQ?e=swk3V9">EAYL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQGkXUa5aWtNtcJvM0GXKowBTg2kk7V74plZfm_Mf_QCZQ?e=swk3V9"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec91RnPuLgtLn2lf6cFbBBoBtWF_d4XvI5Uq71o9MH4Q2w?e=TWQxlr">EL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec91RnPuLgtLn2lf6cFbBBoBtWF_d4XvI5Uq71o9MH4Q2w?e=TWQxlr"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EfRzDT11CBVFrIv0qrSKRKUBj15tCfbZV6nAnSpBsBdgkQ?e=NNFOaW">EME-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EfRzDT11CBVFrIv0qrSKRKUBj15tCfbZV6nAnSpBsBdgkQ?e=NNFOaW"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW1yYL33Tx5JgxNuIFN5qpYBsO2PrGsZ7rUnjjEOU1-YYQ?e=kNvvMq">ESO-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW1yYL33Tx5JgxNuIFN5qpYBsO2PrGsZ7rUnjjEOU1-YYQ?e=kNvvMq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcpvYKXVVS5Jj43YyQ48MaMB9JOFG7F9wvvUYjxmey0Qow?e=BZJnj2">MGNM-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcpvYKXVVS5Jj43YyQ48MaMB9JOFG7F9wvvUYjxmey0Qow?e=BZJnj2"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcTkcPHuJWNHhGqnoD34LbEBn7i-FBdps3W-ApWwdEZdgA?e=ypGUyL">MAYL-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcTkcPHuJWNHhGqnoD34LbEBn7i-FBdps3W-ApWwdEZdgA?e=ypGUyL"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZmFnxeAzdNKtmg9VQfzA40BmKfFlYS9F9Dj3lSqNknicQ?e=VDlDJY">MDIE-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZmFnxeAzdNKtmg9VQfzA40BmKfFlYS9F9Dj3lSqNknicQ?e=VDlDJY"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdQw4iKkQF5Jsa38WlHecywBkI1NS2Kces22df_5imA68A?e=IV1IQP">MGA-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdQw4iKkQF5Jsa38WlHecywBkI1NS2Kces22df_5imA68A?e=IV1IQP"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW6MbkJGQehLoY5a_ydr_DcBtOY4R8U9CZTke56p4O73vg?e=tdAoA8">MME-2020.pdf</a></th>
                                                <td>21 de Febrero</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW6MbkJGQehLoY5a_ydr_DcBtOY4R8U9CZTke56p4O73vg?e=tdAoA8"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVLIUBXhhhZAhtVcLlow2KcBAz3RC3G1zvn7VgTusxuxBg?e=fqcRdv">MSO-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>4.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVLIUBXhhhZAhtVcLlow2KcBAz3RC3G1zvn7VgTusxuxBg?e=fqcRdv"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
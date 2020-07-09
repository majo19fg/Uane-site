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
        <h4>Hojas membretadas </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVsI9F3UVNZIl-9G1MBTM1QBjNEqMPUV_Re2VQ4gJsdhDg?e=eDPBkG">Matamoros.pdf</a></th>
                                      <td>2 de Junio</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVsI9F3UVNZIl-9G1MBTM1QBjNEqMPUV_Re2VQ4gJsdhDg?e=eDPBkG"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcmzxCWUJCFKrcbtINLxA7IBuXxxtDoiUwCDQ2twWdlo9g?e=b0IvZv">Monclova.pdf</a></th>
                                        <td>2 de Junio</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcmzxCWUJCFKrcbtINLxA7IBuXxxtDoiUwCDQ2twWdlo9g?e=b0IvZv"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EevWPVzfpsNAr-8l-WRsJJQBa8x_iLJDVLTjxT7yTIYAWA?e=JlJf31">Monterrey.pdf</a></th>
                                        <td>2 de Junio</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EevWPVzfpsNAr-8l-WRsJJQBa8x_iLJDVLTjxT7yTIYAWA?e=JlJf31"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUPYAxwVDJlCveBWz_vEj_YBA1DlSWP4oJ30PTSdQQ59fw?e=ishUt0">Piedras Negras.pdf</a></th>
                                        <td>2 de Junio</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUPYAxwVDJlCveBWz_vEj_YBA1DlSWP4oJ30PTSdQQ59fw?e=ishUt0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdbmouxoYUlEpHcGtjLfi6gBjszIwQauflY4QzenOQkM5g?e=9gGyQ7">Rectoria.pdf</a></th>
                                          <td>2 de Junio</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdbmouxoYUlEpHcGtjLfi6gBjszIwQauflY4QzenOQkM5g?e=9gGyQ7"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZMqEdp_UDpHvvfQp4OreDoBj1wKVIcg33LUvoemD3Vxsw?e=uX5URK">Reynosa.pdf</a></th>
                                          <td>2 de Junio</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZMqEdp_UDpHvvfQp4OreDoBj1wKVIcg33LUvoemD3Vxsw?e=uX5URK"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ETVVbZKKXSJFmc0CKrRtcE4BypefXvTSNinLmJ75PQ2GzQ?e=cApk5Y">Sabinas.pdf</a></th>
                                            <td>2 de Junio</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ETVVbZKKXSJFmc0CKrRtcE4BypefXvTSNinLmJ75PQ2GzQ?e=cApk5Y"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWq3ho1eyktLpDWzKrogEikBBaOrZdu6aAzv_AvyoVhRxg?e=lZow2H">Saltillo.pdf</a></th>
                                              <td>2 de Junio</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWq3ho1eyktLpDWzKrogEikBBaOrZdu6aAzv_AvyoVhRxg?e=lZow2H"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EeBBLjUVGRZNhoE253Gr49wBF8KGLHEZFh97GvIV4bap-A?e=b26WEI">Torreon.pdf</a></th>
                                              <td>2 de Junio</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EeBBLjUVGRZNhoE253Gr49wBF8KGLHEZFh97GvIV4bap-A?e=b26WEI"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>

                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
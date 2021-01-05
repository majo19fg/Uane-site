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
        <h4>Firmas correo electrónico </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ed9WSXDkOA5Ot0XnFCx4hKYBWMZ7v-eBcv43iQbGhVJ7WQ?e=hdaDdi">Matamoros.png</a></th>
                                      <td>21 de Octubre</td>
                                      <td>5.28 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ed9WSXDkOA5Ot0XnFCx4hKYBWMZ7v-eBcv43iQbGhVJ7WQ?e=hdaDdi"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZJy10kqEqVMgP-08OU6FTQBtCHU5uJ57feOjDEQXOvAXg?e=VIANvq">Monclova.png</a></th>
                                        <td>21 de Octubre</td>
                                        <td>5.14 KB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZJy10kqEqVMgP-08OU6FTQBtCHU5uJ57feOjDEQXOvAXg?e=VIANvq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaVCvUaOrLVOvNUY_xOZ3pEBdxhGZQb1LeYs8s6a4am-ew?e=T0XiLh">Monterrey.png</a></th>
                                        <td>21 de Octubre</td>
                                        <td>5.44 KB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaVCvUaOrLVOvNUY_xOZ3pEBdxhGZQb1LeYs8s6a4am-ew?e=T0XiLh"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbcPwwTtjY9OnkKBgz3UayAB0HUqYL9GD0mC7HY7nkA0VA?e=tEme88">P.Negras.png</a></th>
                                        <td>21 de Octubre</td>
                                        <td>6.16 kB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbcPwwTtjY9OnkKBgz3UayAB0HUqYL9GD0mC7HY7nkA0VA?e=tEme88"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESbzZDmwa8dOhmQKMw90a-ABfbtSOaUAsQiIT7bQ4M0WTQ?e=k6LC3Z">Rectoría.png</a></th>
                                          <td>21 de Octubre</td>
                                          <td>4.90 KB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESbzZDmwa8dOhmQKMw90a-ABfbtSOaUAsQiIT7bQ4M0WTQ?e=k6LC3Z"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eb5CzI83rsRAmUMWooQUOkEB1wxKhmcro6xW6WxFGOtSKw?e=PcxKQ5">Reynosa.png</a></th>
                                          <td>21 de Octubre</td>
                                          <td>5.25 KB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eb5CzI83rsRAmUMWooQUOkEB1wxKhmcro6xW6WxFGOtSKw?e=PcxKQ5"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Edm1Wk7q5BpNiLY1M4GB3vwB8FDgi6Wehzb83v-Xikoiug?e=GjjOmM">Sabinas.png</a></th>
                                            <td>21 de Octubre</td>
                                            <td>4.86 KB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Edm1Wk7q5BpNiLY1M4GB3vwB8FDgi6Wehzb83v-Xikoiug?e=GjjOmM"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQW2G1s05EVImVQoiWFphaQBAVNhPxMN5mZBVQ8kAEdfCw?e=yRQDMl">Saltillo.png</a></th>
                                              <td>21 de Octubre</td>
                                              <td>4.38 KB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQW2G1s05EVImVQoiWFphaQBAVNhPxMN5mZBVQ8kAEdfCw?e=yRQDMl"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdVA0xpYrHNKkp0BULjtvRIB9hX9_HWzT4eJ6wg6oEg8Mg?e=z3iTS0">Torreón.png</a></th>
                                              <td>21 de Octubre</td>
                                              <td>4.79 KB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdVA0xpYrHNKkp0BULjtvRIB9hX9_HWzT4eJ6wg6oEg8Mg?e=z3iTS0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
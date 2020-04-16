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
        <h4>Flyers Coahuila </h4>
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
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZunauXKEk9Dumfy6cUFLXUBfXri-0-iZHvKHGT-VHbNUg?e=sjB1rd">CP-1100-COAH- TAMP-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZunauXKEk9Dumfy6cUFLXUBfXri-0-iZHvKHGT-VHbNUg?e=sjB1rd"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbN73ysIUuNNpyQLS-P8cOkBOChF3iHdVgMUkx0Ai2BvxQ?e=qAqTQY">LAE-1100-COAH-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbN73ysIUuNNpyQLS-P8cOkBOChF3iHdVgMUkx0Ai2BvxQ?e=qAqTQY"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EX-qY4YCRVBKqc4hWZPul8kBKhx-CNOsHC7oK_93T09j2Q?e=oIkVgI">LARH-1100-COAH-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EX-qY4YCRVBKqc4hWZPul8kBKhx-CNOsHC7oK_93T09j2Q?e=oIkVgI"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdrUxQ_l9LtGv_WUlbrSE2YB_N4chZHXD0DdL0gJ0-6oQQ?e=tf4JVf">LD-0800-COAH-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>2.7 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdrUxQ_l9LtGv_WUlbrSE2YB_N4chZHXD0DdL0gJ0-6oQQ?e=tf4JVf"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                      <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVMBrJ9-u4tBhh47Wy9M_TABvvhQjWhuqy7-hk0JaMrIdA?e=jXboPD">LP-1300-COAH-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>4.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVMBrJ9-u4tBhh47Wy9M_TABvvhQjWhuqy7-hk0JaMrIdA?e=jXboPD"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>

                                    
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
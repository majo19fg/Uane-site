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
        <h4>Mailing </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWyAr72YZkNLrZp0GVu5LSEB4fUL2ZXAd1IWosAKTa4S7A?e=HSBFJa">Mailing Campus Saltillo.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWyAr72YZkNLrZp0GVu5LSEB4fUL2ZXAd1IWosAKTa4S7A?e=HSBFJa"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcCNA6m2ldxGpeMvM6dNyCIBWrm2LHSdGnJNOanRJWyWkg?e=XbdIkn">Mailing Campus Torreón.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.13 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcCNA6m2ldxGpeMvM6dNyCIBWrm2LHSdGnJNOanRJWyWkg?e=XbdIkn"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaKv1siSJQdAjMZaTEa5BpQBkQfnt9-MhQwiVnSNTfhrsw?e=9P8fRu">Mailing Campus Sabinas.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaKv1siSJQdAjMZaTEa5BpQBkQfnt9-MhQwiVnSNTfhrsw?e=9P8fRu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETbCKtGQ_gFFtQXDlyjWRFsBwXW4L3yZQGvT7BEYg-_7cQ?e=hHNECz">Mailing Campus Piedras Negras.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.13 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETbCKtGQ_gFFtQXDlyjWRFsBwXW4L3yZQGvT7BEYg-_7cQ?e=hHNECz"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbDK5AOG4MtNsdECR3Y9DOgBkR0ipeV4m9IgFnHxGesWaw?e=JDOpeC">Mailing Campus Monclova.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbDK5AOG4MtNsdECR3Y9DOgBkR0ipeV4m9IgFnHxGesWaw?e=JDOpeC"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWvqVJDwQo5FqKmusVZ0eeoBBSHiCSxVJ4REhIdsG632mA?e=KPTVDV">Mailing Campus Reynosa.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.13 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWvqVJDwQo5FqKmusVZ0eeoBBSHiCSxVJ4REhIdsG632mA?e=KPTVDV"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYfY33EPuKFIgDWUSYGujvQBKfHBBxAok3bnOGomlG-4jA?e=Tu8mhG">Mailing Campus Matamoros.jpg</a></th>
                                      <td>3 de Marzo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYfY33EPuKFIgDWUSYGujvQBKfHBBxAok3bnOGomlG-4jA?e=Tu8mhG"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

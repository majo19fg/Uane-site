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
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaMTHLvfmbZIlsVmNSTrSqsBm4wj1frk1S1yr5zwkvKMVg?e=UpwbyA">ESO-1100-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaMTHLvfmbZIlsVmNSTrSqsBm4wj1frk1S1yr5zwkvKMVg?e=UpwbyA"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBfdomfz1GVJPIHpjJybO09A?e=fbzii2">MAYL-1400-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBfdomfz1GVJPIHpjJybO09A?e=fbzii2"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZ1JSwJVoTVJvpIZwJ9yXtcBAQggfdU3fEVwVvggKXrj-w?e=uhMRFz">MED-0800-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZ1JSwJVoTVJvpIZwJ9yXtcBAQggfdU3fEVwVvggKXrj-w?e=uhMRFz"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVd-xnqYUWJBkaUDU3M_85EBfWJ6HzK8T4ehe2sW0Ha7Zg?e=DGTQnR">MEFO-1500-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVd-xnqYUWJBkaUDU3M_85EBfWJ6HzK8T4ehe2sW0Ha7Zg?e=DGTQnR"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESLmaig4qGhKvxeOGTIDFyQBewFtP3XwGnPGiMEez0bYPw?e=ruLL7K">MGA-0800-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESLmaig4qGhKvxeOGTIDFyQBewFtP3XwGnPGiMEez0bYPw?e=ruLL7K"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWAxKiq6iNdInHV92GzRRQIBmwaemS3rZPVZIAhJzISJrA?e=D0Fewl">MGNM-1700-2020.pdf</a></th>
                                                <td>21 de Febrero</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWAxKiq6iNdInHV92GzRRQIBmwaemS3rZPVZIAhJzISJrA?e=D0Fewl"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQCgwn_YR9lJsWz4KyM9_RsBUrwPtrpyK0qDMvugYQlJPg?e=Sx3T3i">MSO-1100-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>5.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQCgwn_YR9lJsWz4KyM9_RsBUrwPtrpyK0qDMvugYQlJPg?e=Sx3T3i"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
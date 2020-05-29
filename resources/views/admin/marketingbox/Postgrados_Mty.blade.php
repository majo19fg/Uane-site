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
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Eca7QybsKcFOoKNk7I1ArAsBrhfqX4K1kwc1PnStrJ3muQ?e=mtsflk">ERJL-1500-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Eca7QybsKcFOoKNk7I1ArAsBrhfqX4K1kwc1PnStrJ3muQ?e=mtsflk"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaMTHLvfmbZIlsVmNSTrSqsBm4wj1frk1S1yr5zwkvKMVg?e=TQLTsQ">ESO-1100-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaMTHLvfmbZIlsVmNSTrSqsBm4wj1frk1S1yr5zwkvKMVg?e=TQLTsQ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBOTPv1FadeG6E8JXLp-jo2w?e=ysIPEN">MAYL-1400-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBOTPv1FadeG6E8JXLp-jo2w?e=ysIPEN"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                                  <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESik9JsE5clGkxUdydLt_eEBUmq37YmW-2Z6o0FdapJ1uw?e=tYvIYX">MGA-0800-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>5.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESik9JsE5clGkxUdydLt_eEBUmq37YmW-2Z6o0FdapJ1uw?e=tYvIYX"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                    <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUp392WhHqpGiH_B2fHnGYIBzslRBBE09CaSAg7hV95HDQ?e=LEUIpp">MGSS-1400-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>2.7 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUp392WhHqpGiH_B2fHnGYIBzslRBBE09CaSAg7hV95HDQ?e=LEUIpp"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                      <tr>
                                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0XGJRcZpxPnRGpZ4AmGoABAwMOssiZJykdWPqr-FcJWA?e=he3vzh">MSO-1100-2020.pdf</a></th>
                                                        <td>21 de Febrero</td>
                                                        <td>2.7 MB</td>
                                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0XGJRcZpxPnRGpZ4AmGoABAwMOssiZJykdWPqr-FcJWA?e=he3vzh"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                      </tr>
                                                      <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYWa2mlt4mxEu9o6x7pg2hABQePl4FvZLoM5uOC7avL3IA?e=A4h7bj">MSPA-1100-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>5.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYWa2mlt4mxEu9o6x7pg2hABQePl4FvZLoM5uOC7avL3IA?e=A4h7bj"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>
                                                        <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZOAcID_SyNBiFaSlYmtjdIB5WiThUTfe4edvqpiCt9fWA?e=wsvAqm">MASC-1400-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>5.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZOAcID_SyNBiFaSlYmtjdIB5WiThUTfe4edvqpiCt9fWA?e=wsvAqm"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
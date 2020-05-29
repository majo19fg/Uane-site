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
        <h4>Postgrado Matamoros </h4>
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
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbjDZfhJ1PBHjXDb4HoZFWYB8UDUmfePV-v1RbWqlI0hBw?e=8hU6gc">ERJL-0400-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbjDZfhJ1PBHjXDb4HoZFWYB8UDUmfePV-v1RbWqlI0hBw?e=8hU6gc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBOTPv1FadeG6E8JXLp-jo2w?e=ysIPEN">MAYL-1400-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBOTPv1FadeG6E8JXLp-jo2w?e=ysIPEN"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                                  <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ERtnkaAYHMpFgLx3DjTCWR4BSKQSo2sCC2M6UjHEvCIBAA?e=dtM5i2">MGNM-1700-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>4.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ERtnkaAYHMpFgLx3DjTCWR4BSKQSo2sCC2M6UjHEvCIBAA?e=dtM5i2"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                      <tr>
                                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0XGJRcZpxPnRGpZ4AmGoABAwMOssiZJykdWPqr-FcJWA?e=eI8tbJ">MSO-1100-2020.pdf</a></th>
                                                        <td>21 de Febrero</td>
                                                        <td>2.7 MB</td>
                                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0XGJRcZpxPnRGpZ4AmGoABAwMOssiZJykdWPqr-FcJWA?e=eI8tbJ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                      </tr>

                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
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
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EV_Ei2jX1JVDnnBQGKDK7S0BhEMF1oTmlVAnOd-aK_3rWg?e=u18eIN">EGRH-0015-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EV_Ei2jX1JVDnnBQGKDK7S0BhEMF1oTmlVAnOd-aK_3rWg?e=u18eIN"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQ2aIa--OuhLkn9zSj9Ll7EBTy0EZHMRkEHdzwGb5ainjA?e=pkhe27">EME-0500-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQ2aIa--OuhLkn9zSj9Ll7EBTy0EZHMRkEHdzwGb5ainjA?e=pkhe27"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBOTPv1FadeG6E8JXLp-jo2w?e=ysIPEN">MAYL-1400-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EamVBL8yYRRIpgSVmX3uEuYBOTPv1FadeG6E8JXLp-jo2w?e=ysIPEN"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbKy7drhjtpBhQE6pWra_F4BJ8U7NIpKPOI6MvVUsNN2-g?e=sLwiRL">MD-1400-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbKy7drhjtpBhQE6pWra_F4BJ8U7NIpKPOI6MvVUsNN2-g?e=sLwiRL"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVd-xnqYUWJBkaUDU3M_85EBfWJ6HzK8T4ehe2sW0Ha7Zg?e=NAqmDX">MEFO-1500-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>4.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVd-xnqYUWJBkaUDU3M_85EBfWJ6HzK8T4ehe2sW0Ha7Zg?e=NAqmDX"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                  <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWAxKiq6iNdInHV92GzRRQIBmwaemS3rZPVZIAhJzISJrA?e=bQ3NB5">MGNM-1700-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>4.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWAxKiq6iNdInHV92GzRRQIBmwaemS3rZPVZIAhJzISJrA?e=bQ3NB5"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                    <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUp392WhHqpGiH_B2fHnGYIBzslRBBE09CaSAg7hV95HDQ?e=LEUIpp">MGSS-1400-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>2.7 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUp392WhHqpGiH_B2fHnGYIBzslRBBE09CaSAg7hV95HDQ?e=LEUIpp"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                      <tr>
                                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQCgwn_YR9lJsWz4KyM9_RsBUrwPtrpyK0qDMvugYQlJPg?e=54T12X">MSO-1100-2020.pdf</a></th>
                                                        <td>21 de Febrero</td>
                                                        <td>2.7 MB</td>
                                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQCgwn_YR9lJsWz4KyM9_RsBUrwPtrpyK0qDMvugYQlJPg?e=54T12X"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                      </tr>
                                                      <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYWa2mlt4mxEu9o6x7pg2hABQePl4FvZLoM5uOC7avL3IA?e=A4h7bj">MSPA-1100-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>5.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYWa2mlt4mxEu9o6x7pg2hABQePl4FvZLoM5uOC7avL3IA?e=A4h7bj"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr> 
                                                 <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdfPcoU-MrlPryInaKmZS80BnPiQOzwJrxrJMdQR52Q1gA?e=EmHJyH">METF-0800-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>2.7 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdfPcoU-MrlPryInaKmZS80BnPiQOzwJrxrJMdQR52Q1gA?e=EmHJyH"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
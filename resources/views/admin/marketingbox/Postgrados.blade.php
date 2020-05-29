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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Eca7QybsKcFOoKNk7I1ArAsBrhfqX4K1kwc1PnStrJ3muQ?e=jul0du">ERJL-1500-2020.pdf</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Eca7QybsKcFOoKNk7I1ArAsBrhfqX4K1kwc1PnStrJ3muQ?e=jul0du"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
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
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbKy7drhjtpBhQE6pWra_F4BJ8U7NIpKPOI6MvVUsNN2-g?e=QeJbi0">MD-1400-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EbKy7drhjtpBhQE6pWra_F4BJ8U7NIpKPOI6MvVUsNN2-g?e=QeJbi0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcFiY86TDTVHn07DJI-eS5sBhMBFRijyfPZQ79k00r69hQ?e=oBGwja">MDF-1700-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EcFiY86TDTVHn07DJI-eS5sBhMBFRijyfPZQ79k00r69hQ?e=oBGwja"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYe5KFvFOFNIuQBqe-srIWUBkCn91oxOgPE97QMjRiqydQ?e=gDfONc">MDM-0300-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYe5KFvFOFNIuQBqe-srIWUBkCn91oxOgPE97QMjRiqydQ?e=gDfONc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
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
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESik9JsE5clGkxUdydLt_eEBUmq37YmW-2Z6o0FdapJ1uw?e=YRwgFC">MGA-0800-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESik9JsE5clGkxUdydLt_eEBUmq37YmW-2Z6o0FdapJ1uw?e=YRwgFC"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ERtnkaAYHMpFgLx3DjTCWR4BSKQSo2sCC2M6UjHEvCIBAA?e=cBynIo">MGNM-1700-2020.pdf</a></th>
                                                <td>21 de Febrero</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ERtnkaAYHMpFgLx3DjTCWR4BSKQSo2sCC2M6UjHEvCIBAA?e=cBynIo"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUp392WhHqpGiH_B2fHnGYIBzslRBBE09CaSAg7hV95HDQ?e=e2vaai">MGSS-1400-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>4.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUp392WhHqpGiH_B2fHnGYIBzslRBBE09CaSAg7hV95HDQ?e=e2vaai"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUuuYZpf6G5NomWBsLIM6qABxqY7VBy_EbDm2MY9Ygl_zA?e=u9StGW">MI-0400-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>2.7 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EUuuYZpf6G5NomWBsLIM6qABxqY7VBy_EbDm2MY9Ygl_zA?e=u9StGW"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0XGJRcZpxPnRGpZ4AmGoABAwMOssiZJykdWPqr-FcJWA?e=ba3heL">MSO-1100-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>5.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0XGJRcZpxPnRGpZ4AmGoABAwMOssiZJykdWPqr-FcJWA?e=ba3heL"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                  <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYWa2mlt4mxEu9o6x7pg2hABQePl4FvZLoM5uOC7avL3IA?e=kYO45C">MSPA-1100-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>4.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYWa2mlt4mxEu9o6x7pg2hABQePl4FvZLoM5uOC7avL3IA?e=kYO45C"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                    <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdfPcoU-MrlPryInaKmZS80BnPiQOzwJrxrJMdQR52Q1gA?e=xIOFH3">METF-0800-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>2.7 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdfPcoU-MrlPryInaKmZS80BnPiQOzwJrxrJMdQR52Q1gA?e=xIOFH3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EflDFNtbFuJJhPY2W_RcYdMBM_UTKK2zKpj13w-qtG0AEA?e=Z1nmKP">MDL-1500-2020.pdf</a></th>
                                                        <td>21 de Febrero</td>
                                                        <td>4.6 MB</td>
                                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EflDFNtbFuJJhPY2W_RcYdMBM_UTKK2zKpj13w-qtG0AEA?e=Z1nmKP"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                      </tr>
                                                      <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVheZBL7BcRBnOyd4KWQS6IBrKPrAdTQ4CzkKDjtxy2L5g?e=VFUGNL">MNOD-1700-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>4.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVheZBL7BcRBnOyd4KWQS6IBrKPrAdTQ4CzkKDjtxy2L5g?e=VFUGNL"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>
                                                        <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec0ypTngc09Jkzg-ZqHkfVcB0oYFPPXt5a4THOyt77YPfQ?e=1amONg">MJA-1900-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>4.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec0ypTngc09Jkzg-ZqHkfVcB0oYFPPXt5a4THOyt77YPfQ?e=1amONg"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>
                                                        <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdLsTQGiSG1Jpw1j_RkzhsQB7VkfbI1mE2dDImMlIQQ_Dw?e=qStBCK">DD-1400-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>4.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EdLsTQGiSG1Jpw1j_RkzhsQB7VkfbI1mE2dDImMlIQQ_Dw?e=qStBCK"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>
                                                        <tr>
                                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ET1P51yIrLdIoYBr9uiQco4BM8Iq_WbCCCO1lYttQ38Tng?e=m8IRjU">DPYLE-1700-2020.pdf</a></th>
                                                          <td>21 de Febrero</td>
                                                          <td>4.6 MB</td>
                                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ET1P51yIrLdIoYBr9uiQco4BM8Iq_WbCCCO1lYttQ38Tng?e=m8IRjU"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                        </tr>


                                    
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
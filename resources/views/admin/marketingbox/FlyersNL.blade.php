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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYSfLRe3s4REjM4VjjIyUX0BUHII_Q3LJLxNrteC4T9bHA?e=EY0k4L">ARQ-1340-NL-2020.pdf</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYSfLRe3s4REjM4VjjIyUX0BUHII_Q3LJLxNrteC4T9bHA?e=EY0k4L"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYcNmA5JSO5PnQsgKwnHIu8B36Wq5RzH0cdcYnRnoGyRhw?e=hTX1Z0">IIS-1340-NL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYcNmA5JSO5PnQsgKwnHIu8B36Wq5RzH0cdcYnRnoGyRhw?e=hTX1Z0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQA53h2EejJIp3zG0rB-Ym8Bnh_YrjYAcCyFGtJXR-NMSA?e=4zAesH">IMPI-1300-NL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQA53h2EejJIp3zG0rB-Ym8Bnh_YrjYAcCyFGtJXR-NMSA?e=4zAesH"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZyjAMwx9phOqc3rtYcCzcoBa2CRhVFOSgNd8Li57jC4QA?e=xGVWs2">LAEN-1340-NL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZyjAMwx9phOqc3rtYcCzcoBa2CRhVFOSgNd8Li57jC4QA?e=xGVWs2"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EY26b4RDhi1OiSSMu2lC0YIBPd_Ua3gvoOUA0Z5uIILipQ?e=cM2cGd">LCI-1340-NL-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EY26b4RDhi1OiSSMu2lC0YIBPd_Ua3gvoOUA0Z5uIILipQ?e=cM2cGd"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaaxY5lVaw5PuLAejAQ62FgBqdNoutxSi3HgKMxsVvr5tQ?e=GptAt3">LN-0900-NL-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaaxY5lVaw5PuLAejAQ62FgBqdNoutxSi3HgKMxsVvr5tQ?e=GptAt3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaR1OBg2IupDnPQyOkn6ccQBa6dcl-9jziaMbCPlGnxy1Q?e=dVmgvI">LP-1340-NL-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaR1OBg2IupDnPQyOkn6ccQBa6dcl-9jziaMbCPlGnxy1Q?e=dVmgvI"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
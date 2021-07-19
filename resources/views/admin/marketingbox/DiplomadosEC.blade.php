@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Cursos en línea</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
  <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Cursos en línea </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQON_C4xWl5JtNgG5JIXX7MBPwQ7paPA49c685NYIrydJw?e=uT8nlA">Diplomados 2021_UANE_Administración-de Negocios.jpg</a></th>
                                      <td>30 de Abril</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQON_C4xWl5JtNgG5JIXX7MBPwQ7paPA49c685NYIrydJw?e=uT8nlA"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EffAeaRD2jlNkf2yc9XZOLEB7sD1r3B8pWMoH0Bka7nBbw?e=MWfZQv">Diplomados 2021_UANE_Coaching Familiar.jpg</a></th>
                                        <td>30 de Abril</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EffAeaRD2jlNkf2yc9XZOLEB7sD1r3B8pWMoH0Bka7nBbw?e=MWfZQv"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbnNC08Y8YxPgjM6XoTB2KkBdk1l6ASWfjjMIHBWOs6KpA?e=72SI7M">Diplomados 2021_UANE_Fundamentos-de Docencia.jpg</a></th>
                                        <td>30 de Abril</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbnNC08Y8YxPgjM6XoTB2KkBdk1l6ASWfjjMIHBWOs6KpA?e=72SI7M"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ecst9-HaH1pNhk8VQndQY7UBQFolkpSFD9K2tE8q9PPDmQ?e=wczusV">Diplomados 2021_UANE_Globalización.jpg</a></th>
                                          <td>30 de Abril</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ecst9-HaH1pNhk8VQndQY7UBQFolkpSFD9K2tE8q9PPDmQ?e=wczusV"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQBI3lXe_mBNin4RjpOuBcUBJfCMRmy6xuQMFgh0pYrh9w?e=8rhgKB">Diplomados 2021_Herramientas Básicas-para Ingenieros.jpg</a></th>
                                          <td>30 de Abril</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQBI3lXe_mBNin4RjpOuBcUBJfCMRmy6xuQMFgh0pYrh9w?e=8rhgKB"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERH5lomRqnRAkjL3cgU7A04Bxrej8cyPlJQzr3Jrql4AGQ?e=q0rXII">Diplomados 2021_UANE_Herramientas para-Emprendimiento.jpg</a></th>
                                          <td>30 de Abril</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERH5lomRqnRAkjL3cgU7A04Bxrej8cyPlJQzr3Jrql4AGQ?e=q0rXII"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>

                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESfLj_gDgcxNgWsHx1OS_tQBJN5XpXyq2DkM2mDQOSNJsg?e=hwnwi0">Diplomados 2021_UANE_Liderazgo para Nuevos-Profesionistas_Lidere.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESfLj_gDgcxNgWsHx1OS_tQBJN5XpXyq2DkM2mDQOSNJsg?e=hwnwi0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ee-p6fuHIEtKrf8DionOEnsBAKGHNzGiLGMuB3_GWr3v3g?e=dnbSP3">Diplomados 2021_UANE_Talento Humano.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ee-p6fuHIEtKrf8DionOEnsBAKGHNzGiLGMuB3_GWr3v3g?e=dnbSP3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXgPtmSY2LZDoUwVQ9i37HYB7Ya41zBHQq8H7wcYA8H9bw?e=SZglYR">Diplomados 2021_Transformación Digital_UB.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXgPtmSY2LZDoUwVQ9i37HYB7Ya41zBHQq8H7wcYA8H9bw?e=SZglYR"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
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
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZISuWtfGAVKufoNvnpd3HMBwUnmj3L677SdGGJGwOv8Sg?e=eNAMGg">Diplomados 2021_Design Thinking-y Gamificación_UB.jpg</a></th>
                                        <td>30 de Abril</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZISuWtfGAVKufoNvnpd3HMBwUnmj3L677SdGGJGwOv8Sg?e=eNAMGg"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESO8B8d6C01OqlwzGEB5RZIBAnLVAu-l5mIa0Wjbud6mOQ?e=b2CMZt">Diplomados 2021_Envejecimiento, Calidad-de Vida  y Dependencia_UB.jpg</a></th>
                                        <td>30 de Abril</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESO8B8d6C01OqlwzGEB5RZIBAnLVAu-l5mIa0Wjbud6mOQ?e=b2CMZt"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EY-ZHk8zoepEiLrCpefxYQsBWyqvNx7AxLMAVhZFcwISUg?e=uw6nqc">Diplomados 2021_Liderazgo Digital-y Employee Experience_UB.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EY-ZHk8zoepEiLrCpefxYQsBWyqvNx7AxLMAVhZFcwISUg?e=uw6nqc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ea43n1Ys5FNMmoV6rYZqTcwBZ4-2q0Il6EQ4kSX-DGH7DQ?e=EUOPDb">Diplomados 2021_Marketing Digital y Social-Media Management_UB.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ea43n1Ys5FNMmoV6rYZqTcwBZ4-2q0Il6EQ4kSX-DGH7DQ?e=EUOPDb"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdPuqiJtin9BkVJ3_2nQ26sBSi_rUDiF_3GqNzrzWqOvlA?e=cTH3Ts">Diplomados 2021_Recursos Humanos- -Employer Branding -y E-recruitment_UB.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdPuqiJtin9BkVJ3_2nQ26sBSi_rUDiF_3GqNzrzWqOvlA?e=cTH3Ts"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZJMD72RzFZCrd5tUNUU8QoBpaQw7QhD8dXSNBrFQzZcBw?e=4zWGvh">Diplomados 2021_Storytelling_UB.jpg</a></th>
                                            <td>30 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZJMD72RzFZCrd5tUNUU8QoBpaQw7QhD8dXSNBrFQzZcBw?e=4zWGvh"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
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
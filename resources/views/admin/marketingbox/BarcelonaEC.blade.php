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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Efv1rTBMeoZDq_VE-VtkaCcB0a5rKqtgncG0vpF3tNSUfw?e=6bO0b6">Diplomados Barcelona_Design Thinking-y Gamificación_UB.jpg</a></th>
                                      <td>29 de Enero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Efv1rTBMeoZDq_VE-VtkaCcB0a5rKqtgncG0vpF3tNSUfw?e=6bO0b6"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYJNr0Nb0MZCt4XmnU4VKKYBB1Jhc9I4TmIFiI9ihDZdBw?e=PqpmiT">Diplomados Barcelona_Envejecimiento, Calidad-de Vida  y Dependencia_UB.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYJNr0Nb0MZCt4XmnU4VKKYBB1Jhc9I4TmIFiI9ihDZdBw?e=PqpmiT"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ES_U-6XT66dFgu9EsMUb-mwByOPdPD596V0ZNp_ieOHVFg?e=gM0yB4">Diplomados Barcelona_Liderazgo Digital-y Employee Experience_UB.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ES_U-6XT66dFgu9EsMUb-mwByOPdPD596V0ZNp_ieOHVFg?e=gM0yB4"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZtyM5Pn59RJly6xC_IITNcBGawWHCmFIl00o9iWt_c5hQ?e=y2yvD7">Diplomados Barcelona_Marketing Digital y Social-Media Management_UB.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZtyM5Pn59RJly6xC_IITNcBGawWHCmFIl00o9iWt_c5hQ?e=y2yvD7"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWNDyFfG_4NMlPR44addSxgBsIHRn3eLF_63IltMnAdr_g?e=nzTw8h">Diplomados Barcelona_Recursos Humanos- -Employer Branding -y E-recruitment_UB.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWNDyFfG_4NMlPR44addSxgBsIHRn3eLF_63IltMnAdr_g?e=nzTw8h"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaBmu0324gRGlSv_OQa6_hABpwJO6P4KmPGQMhmM3VOYhg?e=bTkgn2">Diplomados Barcelona_Storytelling_UB.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaBmu0324gRGlSv_OQa6_hABpwJO6P4KmPGQMhmM3VOYhg?e=bTkgn2"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdA3XeilkgFJuqiuuDwfIUoBfyImHxXHz6I6Lw09OXLpNA?e=X4VMif">Diplomados Barcelona_Transformación-Digital_UB.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdA3XeilkgFJuqiuuDwfIUoBfyImHxXHz6I6Lw09OXLpNA?e=X4VMif"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
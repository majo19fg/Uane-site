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
        <h4>Cursos y Diplomados en línea</h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVqYSuCJseFGsOvnYKm-eTcBKMNOcuDR6G2zauD0iN7u3A?e=51ppub">Facebook Diplomados en línea.jpg</a></th>
                                      <td>8 de Octubre</td>
                                      <td>1,84 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVqYSuCJseFGsOvnYKm-eTcBKMNOcuDR6G2zauD0iN7u3A?e=51ppub"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVpvotdnceBAmhNXp3y6cL8BKk_7xI8kIJKEkN5I7gykMQ?e=ct1Djc">Mailing Diplomados en línea.jpg</a></th>
                                      <td>8 de Octubre</td>
                                      <td>2,22 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVpvotdnceBAmhNXp3y6cL8BKk_7xI8kIJKEkN5I7gykMQ?e=ct1Djc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>                                    
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

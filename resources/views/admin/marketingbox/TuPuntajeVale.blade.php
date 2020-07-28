@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Promocionales</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
    <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>#TuPuntajeVale</h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXVPA_Uk-bNIuOY0f-x_V1MBA3twTCuv7xu-3rLYqMmzdQ?e=j4cT8q">Mailing.jpg</a></th>
                                      <td>22 de Julio</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXVPA_Uk-bNIuOY0f-x_V1MBA3twTCuv7xu-3rLYqMmzdQ?e=j4cT8q"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdcQQpYWN_VJkmzdiBqb8I0BS5FIv8rt1cvv1GcYaIjexw?e=bntfUc">Facebook.jpg</a></th>
                                      <td>22 de Julio</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdcQQpYWN_VJkmzdiBqb8I0BS5FIv8rt1cvv1GcYaIjexw?e=bntfUc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYX33mFiMkFDgm0rpRwVPVABYitsjkl5nHDEqi2cEnY_5g?e=B1qJ73">Historia Instagram 01.jpg</a></th>
                                      <td>22 de Julio</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYX33mFiMkFDgm0rpRwVPVABYitsjkl5nHDEqi2cEnY_5g?e=B1qJ73"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETgmmLmqKhREuSezdre6Rm4B2YoB_AkyYhsZZp73q-dVPw?e=f7uNFL">Historia Instagram 02.jpg</a></th>
                                      <td>22 de Julio</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETgmmLmqKhREuSezdre6Rm4B2YoB_AkyYhsZZp73q-dVPw?e=f7uNFL"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdcNW5b76D9Gn4isha3aLHQBSvVnyo_PiSQ3I4qdJhJgQw?e=TAoQqg">WhatsApp.jpg</a></th>
                                      <td>22 de Julio</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdcNW5b76D9Gn4isha3aLHQBSvVnyo_PiSQ3I4qdJhJgQw?e=TAoQqg"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

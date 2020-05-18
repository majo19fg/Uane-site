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
        <h4>Mailing </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdCC6AA8koBHhcWDUyVdfD4BvdDjOJjAeK5VR19fovaCpA?e=nEadx8">Mailing Campus Saltillo Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdCC6AA8koBHhcWDUyVdfD4BvdDjOJjAeK5VR19fovaCpA?e=nEadx8"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERzb2HlQkINChphYEn51Q4oBL9O08lZIzXDoAMW2JX10Dg?e=LTSdaa">Mailing Campus Torreón Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.13 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERzb2HlQkINChphYEn51Q4oBL9O08lZIzXDoAMW2JX10Dg?e=LTSdaa"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWas4lDT1JJEgTAufQOG8J8BjNhWDKn7Gb5tQmz_jE6_RA?e=hcmVHL">Mailing Campus Sabinas Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWas4lDT1JJEgTAufQOG8J8BjNhWDKn7Gb5tQmz_jE6_RA?e=hcmVHL"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaWN5TWAyDFFkdEPOyFRVX8BlWeCbaiH_48NRVKjF1YxAA?e=xIYucK">Mailing Campus Piedras Negras Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.13 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaWN5TWAyDFFkdEPOyFRVX8BlWeCbaiH_48NRVKjF1YxAA?e=xIYucK"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfnoECLi82lMvuknd0ZUh7kBBRPds6Oyp1-PYp85ockrAw?e=lV0lUe">Mailing Campus Monclova Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfnoECLi82lMvuknd0ZUh7kBBRPds6Oyp1-PYp85ockrAw?e=lV0lUe"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVNOF9Os3HlKskmoiTUVNnABASmz3TInFUouU-yYVJCPpQ?e=5yEcdc">Mailing Campus Reynosa Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.13 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVNOF9Os3HlKskmoiTUVNnABASmz3TInFUouU-yYVJCPpQ?e=5yEcdc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWKzsYv2S6NDhvitgVdEi_YBeYPiT2aN35v0eizS0uwPTg?e=QsajMS">Mailing Campus Matamoros Mayo.jpg</a></th>
                                      <td>4 de Mayo</td>
                                      <td>1.29 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWKzsYv2S6NDhvitgVdEi_YBeYPiT2aN35v0eizS0uwPTg?e=QsajMS"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

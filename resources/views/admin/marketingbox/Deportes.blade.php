@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Disciplinas</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
  <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Disciplinas </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET6jRHfdeNFJmJvrgp2VbO0BjWOQXNHseSfO30HvfRcDfg?e=ADaJq5">Voleibol.jpg</a></th>
                                      <td>24 de Agosto</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET6jRHfdeNFJmJvrgp2VbO0BjWOQXNHseSfO30HvfRcDfg?e=ADaJq5"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EW0-qAzmLTVPrGxsq6gEa84Brh8_iOZd9cgq3iP6aJ2jFw?e=tIc12G">Futbol.jpg</a></th>
                                        <td>24 de Agosto</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EW0-qAzmLTVPrGxsq6gEa84Brh8_iOZd9cgq3iP6aJ2jFw?e=tIc12G"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ebv16mxNP2pJsl8UKjFusgkBLK3FYWUSNCOqvNuI3lGZWg?e=5Cqheu">TaeKwonDo.jpg</a></th>
                                        <td>24 de Agosto</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ebv16mxNP2pJsl8UKjFusgkBLK3FYWUSNCOqvNuI3lGZWg?e=5Cqheu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXXd8V_HJCVMjlAOtty6iVwBP--cD6zCsgjktUG1yfCj4w?e=XX7vnk">Basquetbol.jpg</a></th>
                                        <td>24 de Agosto</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXXd8V_HJCVMjlAOtty6iVwBP--cD6zCsgjktUG1yfCj4w?e=XX7vnk"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESZGt5HDGJBIm1h7Sul0JDUB1IcGXC3eCH3lQ5IXLts6Hw?e=ucExOT">Tochito.jpg</a></th>
                                          <td>24 de Agosto</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESZGt5HDGJBIm1h7Sul0JDUB1IcGXC3eCH3lQ5IXLts6Hw?e=ucExOT"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaijXMacoRlAlHxIYAeRSIgBcg-6D1WOkVpffsd_QQHA0w?e=J1VShX">Beisbol.jpg</a></th>
                                          <td>24 de Agosto</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaijXMacoRlAlHxIYAeRSIgBcg-6D1WOkVpffsd_QQHA0w?e=J1VShX"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERbCYvEzz6tLqQtBYgW8uGIB4oXwHBRHNFTTfQrvaiMfxg?e=jEcw9u">Softbol.jpg</a></th>
                                            <td>24 de Agosto</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERbCYvEzz6tLqQtBYgW8uGIB4oXwHBRHNFTTfQrvaiMfxg?e=jEcw9u"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaGHh1mbBEtJoookmsCdo1oBsGaphMQiu5x_KaM_19gLTg?e=XUiWNW">Porra.jpg</a></th>
                                            <td>24 de Agosto</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaGHh1mbBEtJoookmsCdo1oBsGaphMQiu5x_KaM_19gLTg?e=XUiWNW"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection
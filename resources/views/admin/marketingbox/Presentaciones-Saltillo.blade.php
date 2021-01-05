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
        <h4>Archivos de Descarga </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ETEk6LRJ_phPrIfFTgWbxDkBGL3hIYn1fuR_8pJxnqM6Og?e=5T9PMj">UANE - Oferta Educativa Saltillo - Bachillerato.pdf</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ETEk6LRJ_phPrIfFTgWbxDkBGL3hIYn1fuR_8pJxnqM6Og?e=5T9PMj"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0Qw1XVb1NOgG050pU_BsEBpFeTvZ9ZekUzvRpcO7Mj0A?e=U1Kyui">UANE - Oferta Educativa Saltillo - Bachillerato 2021.pdf</a></th>
                                      <td>10 de Noviembre</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ee0Qw1XVb1NOgG050pU_BsEBpFeTvZ9ZekUzvRpcO7Mj0A?e=U1Kyui"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVzO7QXU165Nl0osbYbAPtgBa7LdeeRrWD6lgTV6cH21Nw?e=OuKE0w">UANE - Oferta Educativa Saltillo - Empresas.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EVzO7QXU165Nl0osbYbAPtgBa7LdeeRrWD6lgTV6cH21Nw?e=OuKE0w"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EY9D1pdbq-pBsw7Z_vhZYn4Bvu30PlfbiS6upl811h6qkg?e=97DHrm">UANE - Oferta Educativa Saltillo - Presencial.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EY9D1pdbq-pBsw7Z_vhZYn4Bvu30PlfbiS6upl811h6qkg?e=97DHrm"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
    

                                    
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active" href="{{ route('usuarios.Folletos-Licenciatura') }}">Licenciaturas</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
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
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ARQ-1100-COAH-2019.pdf') }}">ARQ-1100-COAH-2019.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>5.37 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ARQ-1100-COAH-2019') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BACH-2019.pdf') }}">BACH-2019.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>5.20 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BACH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BMB-2019.pdf') }}">BMB-2019.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>1.90 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BMB-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                     <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/CP-1100-COAH-2019.pdf') }}">CP-1100-COAH-2019.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>17 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/CP-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/IIS-1300-COAH-2019.pdf') }}">IIS-1300-COAH-2019.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>49.2</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/IIS-1300-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/IMPI-1300-COAH-2019.pdf') }}">IMPI-1300-COAH-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>64.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/IMPI-1300-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ISPI-1300-COAH-2019.pdf') }}">ISPI-1300-COAH-2019.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>628 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ISPI-1300-COAH-2019') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAE-1100-COAH-2019.pdf') }}">LAE-1100-COAH-2019.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>646 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAE-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAET-1100-COAH-2019.pdf') }}">LAET-1100-COAH-2019.pdf</a></th>
                                        <td>15 de Agosto</td>
                                        <td>7,48 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAET-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                       <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LARH-1100-COAH-2019.pdf') }}">LARH-1100-COAH-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>34.5 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LARH-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LC-1100-COAH-2019.pdf') }}">LC-1100-COAH-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>49.2</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LC-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCE-1100-COAH-2019.pdf') }}">LCE-1100-COAH-2019.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>628 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCE-1100-COAH-2019') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCI-1100-COAH-2019.pdf') }}">LCI-1100-COAH-2019.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>646 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCI-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LD-1800-COAH-2019.pdf') }}">LD-1800-COAH-2019.pdf</a></th>
                                        <td>15 de Agosto</td>
                                        <td>7,48 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LD-1800-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                       <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LDG-1400-COAH-2019.pdf') }}">LDG-1400-COAH-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>34.5 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LDG-1400-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LG-1500-COAH-2019.pdf') }}">LG-1500-COAH-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>49.2</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LG-1500-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LI-1200-COAH-2019.pdf') }}">LI-1200-COAH-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>64.6 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LI-1200-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LN-1400-COAH-2019.pdf') }}">LN-1400-COAH-2019.pdf</a></th>
                                          <td>20 de Junio</td>
                                          <td>628 KB</td>
                                          <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LN-1400-COAH-2019') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LP-1300-COAH-2019.pdf') }}">LP-1300-COAH-2019.pdf</a></th>
                                          <td>20 de Junio</td>
                                          <td>646 KB</td>
                                          <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LP-1300-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                                                           
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection

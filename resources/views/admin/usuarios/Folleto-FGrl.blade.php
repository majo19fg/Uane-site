@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">En linea</span>
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
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/CP-2019.pdf') }}">CP-2019.pdf</a></th>
                                      <td>23 de Enero</td>
                                      <td>13.7 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/CP-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/EAYL-2019.pdf') }}">EAYL-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>53.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/EAYL-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/EL-2019.pdf') }}">EL-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>49 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/EL-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                     <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/EME-2019.pdf') }}">EME-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>48.1 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/EME-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/ESO-2019.pdf') }}">ESO-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>63.1 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/ESO-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/IDS-2019.pdf') }}">IDS-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>64.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/IDS-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/IIS-2019.pdf') }}">IIS-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>53.6 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/IIS-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/IMPI-1300.pdf') }}">IMPI-1300.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>628 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/IMPI-1300.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LAE-2019.pdf') }}">LAE-2019.pdf</a></th>
                                        <td>20 de Junio</td>
                                        <td>646 KB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LAE-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LAET-2019.pdf') }}">LAET-2019.pdf</a></th>
                                        <td>15 de Agosto</td>
                                        <td>7,48 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LAET-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                       <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LARH-2019.pdf') }}">LARH-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>34.5 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LARH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LCE-2019.pdf') }}">LCE-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>49.2</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LCE-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LCI-2019.pdf') }}">LCI-2019.pdf</a></th>
                                        <td>30 de Mayo</td>
                                        <td>64.6 MB</td>
                                        <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LCI-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LD-2019.pdf') }}">LD-2019.pdf</a></th>
                                          <td>30 de Mayo</td>
                                          <td>53.6 MB</td>
                                          <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LD-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LPL-2019.pdf') }}">LPL-2019.pdf</a></th>
                                            <td>20 de Junio</td>
                                            <td>628 KB</td>
                                            <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/LPL-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MAGNM-2019.pdf') }}">MAGNM-2019.pdf</a></th>
                                            <td>20 de Junio</td>
                                            <td>646 KB</td>
                                            <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MAGNM-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MAYL-2019.pdf') }}">MAYL-2019.pdf</a></th>
                                            <td>15 de Agosto</td>
                                            <td>7,48 MB</td>
                                            <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MAYL-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                           <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MDIE-2019.pdf') }}">MDIE-2019.pdf</a></th>
                                            <td>30 de Mayo</td>
                                            <td>34.5 MB</td>
                                            <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MDIE-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MGA-2019.pdf') }}">MGA-2019.pdf</a></th>
                                            <td>30 de Mayo</td>
                                            <td>49.2</td>
                                            <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MGA-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MME-2019.pdf') }}">MME-2019.pdf</a></th>
                                             <td>30 de Mayo</td>
                                             <td>34.5 MB</td>
                                             <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MME-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                           </tr>
                                           <tr>
                                             <th><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MSO-2019.pdf') }}">MSO-2019.pdf</a></th>
                                             <td>30 de Mayo</td>
                                             <td>49.2</td>
                                             <td><a href="{{ asset('/multi/images/Plantilla de descarga/EnLinea/MSO-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                           </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
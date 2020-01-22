@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Descargas</span>
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
                    <div id="accordion1" class="br-menu-item show-sub">
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}" width="50px" height="50px" />Coahuila</a> </div>
                        <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <br/>
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
                                  <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ARQ-1100-COAH-2019.pdf') }}" >ARQ-1100-COAH-2019.pdf</a></th>
                                  <td>20 de Junio</td>
                                  <td>628 KB</td>
                                  <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ARQ-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                </tr>
                                <tr>
                                  <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BACH-2019.pdf') }}">BACH-2019.pdf</a></th>
                                  <td>20 de Junio</td>
                                  <td>646 KB</td>
                                  <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BACH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                </tr>
                                <tr>
                                  <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BMB-2019.pdf') }}">BMB-2019.pdf</a></th>
                                  <td>15 de Agosto</td>
                                  <td>7,48 MB</td>
                                  <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/BMB-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                </tr>
                                <tr>
                                 <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/CP-1100-COAH-2019.pdf') }}">CP-1100-COAH-2019.pdf</a></th>
                                  <td>30 de Mayo</td>
                                  <td>34.5 MB</td>
                                  <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/CP-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                </tr>
                                <tr>
                                  <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/IIS-1300-COAH-2019.pdf') }}">IIS-1300-COAH-2019.pdf</a></th>
                                  <td>30 de Mayo</td>
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
                                    <td>30 de Mayo</td>
                                    <td>53.6 MB</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/ISPI-1300-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                  </tr>
                                  <tr>
                                    <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAE-1100-COAH-2019.pdf') }}" >LAE-1100-COAH-2019.pdf</a></th>
                                    <td>20 de Junio</td>
                                    <td>628 KB</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAE-1100-COAH-2019') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                  </tr>
                                  <tr>
                                    <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAET-2019.pdf') }}">LAET-1100-COAH-2019.pdf</a></th>
                                    <td>20 de Junio</td>
                                    <td>646 KB</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LAET-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                  </tr>
                                  <tr>
                                    <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LARH-1100-COAH-2019.pdf') }}">LARH-1100-COAH-2019.pdf</a></th>
                                    <td>15 de Agosto</td>
                                    <td>7,48 MB</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LC-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                  </tr>
                                  <tr>
                                   <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LC-1100-COAH-2019.pdf') }}">LC-1100-COAH-2019.pdf</a></th>
                                    <td>30 de Mayo</td>
                                    <td>34.5 MB</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LC-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                  </tr>
                                  <tr>
                                    <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCE-1100-COAH-2019.pdf') }}">LCE-1100-COAH-2019.pdf</a></th>
                                    <td>30 de Mayo</td>
                                    <td>49.2</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCE-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                  </tr>
                                  <tr>
                                    <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCI-1100-COAH-2019.pdf') }}">LCI-1100-COAH-2019.pdf</a></th>
                                    <td>30 de Mayo</td>
                                    <td>64.6 MB</td>
                                    <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LCI-1100-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                  </tr>
                                  <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LD-1800-COAH-2019.pdf') }}">LD-1800-COAH-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>53.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LD-1800-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LD-1800-COAH-2019.pdf') }}">LD-1800-COAH-2019.pdf</a></th>
                                      <td>30 de Mayo</td>
                                      <td>53.6 MB</td>
                                      <td><a href="{{ asset('/multi/images/Plantilla de descarga/Coahuila/LD-1800-COAH-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" width="50px" height="50px"/></a></td>
                                    </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}"width="50px" height="50px" />Nuevo León</a> </div>
                        <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">

                        </div>
                      </div>
                    </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}"width="50px" height="50px" />Piedras Negras</a> </div>
                        <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}"width="50px" height="50px" />Tamaulipas</a> </div>
                        <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <p>Vive la experiencia de ser campeón siendo parte en alguno de nuestros clubes deportivos o culturales los cuales han ganado torneos nacionales.</p>
                          </div>
                        </div>
                      </div>
                      </div>


        </div>
    </div>
    </div>
</section>
@endsection

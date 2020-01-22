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
                    <!--<div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}" width="50px" height="50px" />Folletos</a> </div>
                        <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <table border-collapse: separate; style>
                              <colgroup>
                                <col style="width: 5%"/>                                    
                                <col style="width: 40%"/>
                                <col style="width: 20%"/>
                                <col style="width: 20%"/>
                              </colgroup>
                              <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th rowspan="2">Nombre</th>
                                    <th rowspan="2">Fecha</th>
                                    <th rowspan="2">Tamaño</th>
                                </tr>
                              </thead>
                              <tfoot>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td><a href="{{ route('usuarios.Folleto-Brochure') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.Folleto-Brochure') }}">Brochures</a></th>
                                  <td>21 de Agosto</td>
                                  <td>7 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.Folleto-EnLinea') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.Folleto-EnLinea') }}">En línea</a></th>
                                  <td>23 de Enero</td>
                                  <td>21 elementos</td>
                                </tr>                                
                                <tr>
                                  <td><a href="{{ route('usuarios.Folleto-General') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.Folleto-General') }}">Generales por Modalidad</a></th>
                                  <td>23 de Enero</td>
                                  <td>10 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.Folletos-Licenciatura') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.Folletos-Licenciatura') }}">Licenciaturas</a></th>
                                  <td>23 de Enero</td>
                                  <td>21 elementos</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div> -->
                      <!--<div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}"width="50px" height="50px" />Brochures</a> </div>
                        <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">

                        </div>
                      </div>
                    </div>--> 
                      <!--<div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}"width="50px" height="50px" />Promociones</a> </div>
                        <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                          </div>
                        </div>
                      </div>-->
                     <!-- <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}"width="50px" height="50px" />Diplomas</a> </div>
                        <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <p>Vive la experiencia de ser campeón siendo parte en alguno de nuestros clubes deportivos o culturales los cuales han ganado torneos nacionales.</p>
                          </div>
                        </div>
                      </div>--> 
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}" width="50px" height="50px"/>Presentaciones</a> </div>
                        <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <table border-collapse: separate; style>
                              <colgroup>
                                <col style="width: 5%"/>                                    
                                <col style="width: 40%"/>
                                <col style="width: 20%"/>
                                <col style="width: 20%"/>
                              </colgroup>
                              <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th rowspan="2">Nombre</th>
                                    <th rowspan="2">Fecha</th>
                                    <th rowspan="2">Tamaño</th>
                                </tr>
                              </thead>
                              <tfoot>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesSLW') }}">Saltillo</a></th>
                                  <td>21 de Agosto</td>
                                  <td>7 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.Folleto-EnLinea') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.Folleto-EnLinea') }}">En línea</a></th>
                                  <td>23 de Enero</td>
                                  <td>21 elementos</td>
                                </tr>                                
                                <tr>
                                  <td><a href="{{ route('usuarios.Folleto-General') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.Folleto-General') }}">Generales por Modalidad</a></th>
                                  <td>23 de Enero</td>
                                  <td>10 elementos</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                      </div>
                     <!-- <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span><img src="{{ asset('/multi/images/SampleArrow.png') }}" width="50px" height="50px"/>Video</a> </div>
                        <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <p>Contamos con diferentes Carreras y maestrías en línea en las cuales podrás organizar tu tiempo para cursarlas y disfrutar los mejores momentos de tu vida.</p>
                          </div>
                        </div>
                      </div>
                    </div>-->


        </div>
    </div>
    </div>
</section>
@endsection

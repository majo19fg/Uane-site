@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home.admin') }}">Dashboard</a>
        <span class="breadcrumb-item active">Marketing Box</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
 <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>

<div>
        <h4>Marketing Box</h4>
        <p class="mg-b-0"></p>
    </div>
</div><!-- d-flex -->


<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row"> 
                <div class="col-md-12" style="background-image:{{ asset('/multi/images/Fondo Vino.jpg') }};">

                    {{-- <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p> --}}
                    <div class="col-md-4">
                    <div id="accordion1" class="br-menu-item show-sub">
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Coahuila.png') }}"/>Coahuila</center></a></div>
                        <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <table border-collapse: separate; style>
                              <colgroup>
                                <col style="width: 15%"/>                                    
                                <col style="width: 55%"/>
                                <col style="width: 30%"/>
                              </colgroup>
                              <thead>
                                <tr>
                                    <th rowspan="2"></th>
                                    <th rowspan="2">Nombre</th>
                                    <th rowspan="2">Tamaño</th>
                                </tr>
                              </thead>
                              <tfoot>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td><a href="{{ route('usuarios.FlyersCoah') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.FlyersCoah') }}">PDF Coahuila</a></th>
                                  <td>17 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.FlyersPN') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.FlyersPN') }}">PDF Piedras Negras</a></th>
                                  <td>9 elementos</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div id="accordion2" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion2" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/nuevo leon.png') }}"/>Nuevo Leon</center></a> </div>
                          <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                            <div class="panel-content">
                              <table border-collapse: separate; style>
                                <colgroup>
                                  <col style="width: 15%"/>                                    
                                  <col style="width: 55%"/>
                                  <col style="width: 30%"/>
                                </colgroup>
                                <thead>
                                  <tr>
                                      <th rowspan="2"></th>
                                      <th rowspan="2">Nombre</th>
                                      <th rowspan="2">Tamaño</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                  <tr>
                                    <td><a href="{{ route('usuarios.FlyersMty') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.FlyersMty') }}">PDF Monterrey</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div id="accordion3" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion3" data-toggle="collapse" href="#accordion17" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Tamaulipas.png') }}"/>Tamaulipas</center></a></div>
                          <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                            <div class="panel-content">
                              <table border-collapse: separate; style>
                                <colgroup>
                                    <col style="width: 15%"/>                                    
                                    <col style="width: 55%"/>
                                    <col style="width: 30%"/>
                                </colgroup>
                                <thead>
                                  <tr>
                                      <th rowspan="2"></th>
                                      <th rowspan="2">Nombre</th>
                                      <th rowspan="2">Tamaño</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                  <tr>
                                    <td><a href="{{ route('usuarios.FlyersMat') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.FlyersMat') }}">PDF Matamoros</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.FlyersRey') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.FlyersRey') }}">PDF Reynosa</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
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

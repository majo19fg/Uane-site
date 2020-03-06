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
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -01.png') }}"/>Presentaciones</center></a></div>
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
                                  <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesSLW') }}">Saltillo</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesTor') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesTor') }}">Torreón</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesMon') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesMon') }}">Monclova</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesSab') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesSab') }}">Sabinas</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesPN') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesPN') }}">Piedras Negras</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesMTY') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesMTY') }}">Monterrey</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesRey') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesRey') }}">Reynosa</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesMat') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesMat') }}">Matamoros</a></th>
                                  <td>3 elementos</td>
                                </tr>
                                <tr>
                                  <td><a href="{{ route('usuarios.presentacionesEL') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.presentacionesEL') }}">En línea</a></th>
                                  <td>1 elemento</td>
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
                          <div class="panel-title"> <a data-parent="#accordion2" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -02.png') }}"/>Flyers</center></a> </div>
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
                                    <td><a href="{{ route('usuarios.presentacionesBach') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesBach') }}">Bachillerato</a></th>
                                    <td>3 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesCarr') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesCarr') }}">Carreras</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.FlyersPG') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.FlyersPG') }}">Postgrado</a></th>
                                    <td>26 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.FlyersEL') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.FlyersEL') }}">En línea</a></th>
                                    <td>21 elementos</td>
                                  </tr>
  
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                  <!--  </div>
                    <div class="col-md-4">
                      <div id="accordion3" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion3" data-toggle="collapse" href="#accordion17" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -03.png') }}"/>Videos</center></a></div>
                          <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="true">
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
                                      <th rowspan="2">Tamaño</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Saltillo</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Torreón</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Monclova</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Sabinas</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Piedras Negras</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Monterrey</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Reynosa</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Matamoros</a></th>
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
                    <div class="col-md-4">
                      <div id="accordion3" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion3" data-toggle="collapse" href="#accordion17" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -04.png') }}"/>Promociones</center></a></div>
                          <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="true">
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
                                      <th rowspan="2">Tamaño</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Saltillo</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Torreón</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Monclova</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Sabinas</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Piedras Negras</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Monterrey</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Reynosa</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.presentacionesSLW') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.presentacionesSLW') }}">Matamoros</a></th>
                                    <td>7 elementos</td>
                                  </tr>
  
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>    
                    </div>
    </div>
</section>
@endsection

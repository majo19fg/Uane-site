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
                    <div class="col-md-3">
                    <div id="accordion1" class="br-menu-item show-sub">
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -01.png') }}"/>Presentaciones- Oferta Educativa </center></a></div>
                        <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <table border-collapse: separate; style>
                              <colgroup>
                                <col style="width: 10%"/>                                    
                                <col style="width: 50%"/>
                                <col style="width: 40%"/>
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
                                  <td>2 elementos</td>
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
                              <!--  <tr>
                                  <td><a href="{{ route('usuarios.cursos') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                  <th><a href="{{ route('usuarios.cursos') }}">Cursos y Diplomados En línea</a></th>
                                  <td>3 elementos</td>
                                </tr>-->
                              </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div id="accordion2" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion2" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -021.png') }}"/>Flyers - Planes, precios y procesos </center></a> </div>
                          <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                            <div class="panel-content">
                              <table border-collapse: separate; style>
                                <colgroup>
                                  <col style="width: 10%"/>                                    
                                  <col style="width: 50%"/>
                                  <col style="width: 40%"/>
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
                                    <td><a href="{{ route('usuarios.SW') }}" ><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.SW') }}">Saltillo</a></th>
                                    
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Tor') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Tor') }}">Torreón</a></th>
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Monclova') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Monclova') }}">Monclova</a></th>
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Sabinas') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Sabinas') }}">Sabinas</a></th>
                                    <td>4 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.PiedrasNegras') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.PiedrasNegras') }}">Piedras Negras</a></th>
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Monterrey') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Monterrey') }}">Monterrey</a></th>
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Reynosa') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Reynosa') }}">Reynosa</a></th>
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Matamoros') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Matamoros') }}">Matamoros</a></th>
                                    <td>5 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.EnLinea') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.EnLinea') }}">En línea</a></th>
                                    <td>5 elemento</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                </div>
                    <div class="col-md-3">
                      <div id="accordion3" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion3" data-toggle="collapse" href="#accordion17" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -04.png') }}"/>Promociones</center></a></div>
                          <div id="accordion17" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                            <div class="panel-content">
                              <table border-collapse: separate; style>
                                <colgroup>
                                  <col style="width: 10%"/>                                    
                                  <col style="width: 50%"/>
                                  <col style="width: 40%"/>
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
                                    <td><a href="{{ route('usuarios.DIT45') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.DIT45') }}">DIT 45% Febrero</a></th>
                                    <td>2 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.DIT45mty') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.DIT45mty') }}">DIT 45% Febrero Mty</a></th>
                                    <td>1 elemento</td>
                                  </tr>                                  
                                  <tr>
                                    <td><a href="{{ route('usuarios.DIT7002') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.DIT7002') }}">DIT 70% Febrero </a></th>
                                    <td>2 elementos</td>
                                  </tr>  
                                  </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div id="accordion12" class="br-menu-item show-sub">
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion12" data-toggle="collapse" href="#accordion26" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -07[8831].png') }}"/>Educación continua</center></a></div>
                            <div id="accordion26" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <table border-collapse: separate; style>
                                  <colgroup>
                                    <col style="width: 10%"/>                                    
                                    <col style="width: 50%"/>
                                    <col style="width: 40%"/>
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
                                      <td><a href="{{ route('usuarios.MailED') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.MailED') }}">Mailing</a></th>
                                      <td>2 elementos</td>
                                    </tr>
                                  <tr>
                                      <td><a href="{{ route('usuarios.CursosEC') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.CursosEC') }}">Cursos en Línea</a></th>
                                      <td>25 elementos</td>
                                    </tr>
                                    <tr>
                                      <td><a href="{{ route('usuarios.DiplomadoEC') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.DiplomadoEC') }}">Diplomados en Línea</a></th>
                                      <td>7 elementos</td>
                                    </tr>
                                    <tr>
                                      <td><a href="{{ route('usuarios.BarcelonaEC') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.BarcelonaEC') }}">Diplomados Universidad de Barcelona en Línea</a></th>
                                      <td>7 elementos</td>
                                    </tr>
                                    <tr>
                                      <td><a href="{{ route('usuarios.Piezas') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.Piezas') }}">Piezas Generales</a></th>
                                      <td>7 elementos</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div> 
                      <div class="col-md-3">
                      <div id="accordion5" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion5" data-toggle="collapse" href="#accordion20" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -05.png') }}"/>Editables</center></a></div>
                          <div id="accordion20" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                            <div class="panel-content">
                              <table border-collapse: separate; style>
                                <colgroup>
                                  <col style="width: 10%"/>                                    
                                  <col style="width: 50%"/>
                                  <col style="width: 40%"/>
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
                                    <td><a href="{{ route('usuarios.Autonoma') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Autonoma') }}">Autónoma</a></th>
                                    <td>8 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Americana') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Americana') }}">Americana</a></th>
                                    <td>8 elementos</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>   
                  <div class="col-md-3">
                  <div id="accordion6" class="br-menu-item show-sub">
                    <div class="panel">
                      <div class="panel-title"> <a data-parent="#accordion6" data-toggle="collapse" href="#accordion21" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Facebook.jpg') }}"/>Facebook</center></a></div>
                      <div id="accordion21" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                        <div class="panel-content">
                          <table border-collapse: separate; style>
                            <colgroup>
                              <col style="width: 10%"/>                                    
                              <col style="width: 50%"/>
                              <col style="width: 40%"/>
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
                                <td><a href="{{ route('usuarios.FB') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                <th><a href="{{ route('usuarios.FB') }}">Oferta Educativa Presencial</a></th>
                                <td>23 elementos</td>
                              </tr>
                              <tr>
                                <td><a href="{{ route('usuarios.FBEL') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                <th><a href="{{ route('usuarios.FBEL') }}">Oferta Educativa En Línea</a></th>
                                <td>23 elementos</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div id="accordion7" class="br-menu-item show-sub">
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion7" data-toggle="collapse" href="#accordion22" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos -031.png') }}"/>Videos</center></a></div>
                        <div id="accordion22" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <table border-collapse: separate; style>
                              <colgroup>
                                <col style="width: 10%"/>                                    
                                <col style="width: 50%"/>
                                <col style="width: 40%"/>
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
                              </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div id="accordion8" class="br-menu-item show-sub">
                        <div class="panel">
                          <div class="panel-title"> <a data-parent="#accordion8" data-toggle="collapse" href="#accordion23" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Icono -08.png') }}"/>Imagen institucional</center></a></div>
                          <div id="accordion23" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                            <div class="panel-content">
                              <table border-collapse: separate; style>
                                <colgroup>
                                  <col style="width: 10%"/>                                    
                                  <col style="width: 50%"/>
                                  <col style="width: 40%"/>
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
                                    <td><a href="{{ route('usuarios.firmas_correo') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.firmas_correo') }}">Firmas correo electrónico</a></th>
                                    <td>9 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.logotipos') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.logotipos') }}">Logotipos</a></th>
                                    <td>10 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.Wallpapers') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.Wallpapers') }}">Wallpapers</a></th>
                                    <td>7 elementos</td>
                                  </tr>
                                  <tr>
                                    <td><a href="{{ route('usuarios.WallpapersE20') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                    <th><a href="{{ route('usuarios.WallpapersE20') }}">Wallpapers Encuentro 2020</a></th>
                                    <td>6 elementos</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div id="accordion9" class="br-menu-item show-sub">
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion9" data-toggle="collapse" href="#accordion18" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Iconos--09.png') }}"/>Disciplinas deportivas / culturales</center></a></div>
                            <div id="accordion18" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <table border-collapse: separate; style>
                                  <colgroup>
                                    <col style="width: 10%"/>                                    
                                    <col style="width: 50%"/>
                                    <col style="width: 40%"/>
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
                                      <td><a href="{{ route('usuarios.Deportes') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.Deportes') }}">Deportes</a></th>
                                      <td>8 elementos</td>
                                    </tr>
                                    <tr>
                                      <td><a href="{{ route('usuarios.Culturales') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                      <th><a href="{{ route('usuarios.Culturales') }}">Culturales</a></th>
                                      <td>2 elementos</td>
                                    </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div id="accordion10" class="br-menu-item show-sub">
                            <div class="panel">
                              <div class="panel-title"> <a data-parent="#accordion10" data-toggle="collapse" href="#accordion19" class="" aria-expanded="true"> <span class="open-sub"></span><center><img src="{{ asset('/multi/images/Marketing box/Icono -10.png') }}"/>46 Aniversario</center></a></div>
                              <div id="accordion19" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                                <div class="panel-content">
                                  <table border-collapse: separate; style>
                                    <colgroup>
                                      <col style="width: 10%"/>                                    
                                      <col style="width: 50%"/>
                                      <col style="width: 40%"/>
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
                                        <td><a href="{{ route('usuarios.Logo46') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                        <th><a href="{{ route('usuarios.Logo46') }}">Logotipos</a></th>
                                        <td>4 elementos</td>
                                      </tr>
                                      <tr>
                                        <td><a href="{{ route('usuarios.Identidad46') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                        <th><a href="{{ route('usuarios.Identidad46') }}">Identidad</a></th>
                                        <td>1 elemento</td>
                                      </tr>
                                      <tr>
                                        <td><a href="{{ route('usuarios.conferencias') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                        <th><a href="{{ route('usuarios.conferencias') }}">Conferencias</a></th>
                                        <td>3 elemento</td>
                                      </tr>
                                      <tr>
                                        <td><a href="{{ route('usuarios.orgullosamente') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                        <th><a href="{{ route('usuarios.orgullosamente') }}">Orgullosamente UANE</a></th>
                                        <td>4 elemento</td>
                                      </tr>
                                      <tr>
                                        <td><a href="{{ route('usuarios.exauane46') }}"><img src="{{ asset('/multi/images/vector.jpg') }}"  /></a></td>
                                        <th><a href="{{ route('usuarios.exauane46') }}">EXAUANE</a></th>
                                        <td>2 elemento</td>
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
  </div>
</section>
@endsection

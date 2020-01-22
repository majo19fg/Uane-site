@extends('index')

@section('title')
{{ $programa->title }}
@endsection

@section('meta-desc')
{{ $programa->descripcion_programa }}
@endsection


@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/banner.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">{{ $programa->title }}</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li><a href="{{ route('programas.index') }}">Programas</a></li>
                <li class="active text-gray-silver">{{ $programa->title }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          @if (session()->has('flash'))
          <div class="col-md-12">
            <div class="alert alert-success alert-bordered" role="alert">              
              <div class="d-sm-flex align-items-center justify-content-start">
                <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                <div class="mg-t-20 mg-sm-t-0">
                  <h3 class="mg-b-2 tx-success">Tus datos se han enviado exitosamente.</h3>
                  <hr>
                  <p class="mg-b-0 tx-50 tx-gray">Uno de nuestros expertos se pondra en contacto contigo para brindarte la información que necesitas.</p>
                </div>
              </div><!-- d-flex -->
            </div>
          </div>  
          @endif
        </div>
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img 
              @if ($programa->modalidadPrograma->name == 'Presencial')
              src="/multi/images/programas/{{ str_replace('í', 'i', $programa->TipoPrograma->name) }}.jpg"
              @elseif($programa->modalidadPrograma->name == 'En línea')
              src="/multi/images/programas/EL.jpg"
              @endif
               
              
              alt="">
              <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $programa->title }}</h3>
              {{-- <h4 class="mt-0"><span class="text-theme-color-2">Price :</span> $420</h4>
                <ul class="review_text list-inline">
                  <li>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                  </li>
                </ul> --}}
              <h5><em>{{ $programa->descripcion_corta }}</em></h5>
               {!! $programa->descripcion_programa !!}

              <!--@if ($programa->duracion_curso == '8 semestres')
              <h4 class="line-bottom mt-20 mb-20 text-theme-colored">Programa</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li>
                <li><a href="#segundo" data-toggle="tab">Segundo año</a></li>
                <li><a href="#tercero" data-toggle="tab">Tercer año</a></li>
                <li><a href="#cuarto" data-toggle="tab">Cuarto año</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="primero">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="segundo">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="tercero">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="cuarto">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
              </div>
              @elseif($programa->duracion_curso == '4 semestres')
              <h4 class="line-bottom mt-20 mb-20 text-theme-colored">Programa</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li>
                <li><a href="#segundo" data-toggle="tab">Segundo año</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="primero">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="segundo">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Primer año</td>
                    </tr>
                    <tr> 
                      <th>Primer semestre</th> 
                      <th>Segundo semestre</th> 
                    <tbody> 
                      <tr> 
                         <td>45 minutes</td>
                         <td>3 years</td>
                      </tr>
                      <tr> 
                         <td>45 minutes</td>
                         <td>2 years</td>
                      </tr>
                      <tr> 
                         <td>1 Hours</td>
                         <td>4 years</td>
                      </tr>
                      <tr> 
                         <td>1 Hours</td>
                         <td>5 years</td>
                      </tr> 
                      <tr> 
                         <td>30 minutes</td>
                         <td>3 years</td>
                      </tr> 
                    </tbody> 
                  </table>
                </div>
              </div>
              @elseif($programa->duracion_curso == '2 semestres')
              <h4 class="line-bottom mt-20 mb-20 text-theme-colored">Programa</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="primero">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
              </div>

              @elseif($programa->duracion_curso == '6 semestres')
              <h4 class="line-bottom mt-20 mb-20 text-theme-colored">Programa</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li>
                <li class="active"><a href="#segundo" data-toggle="tab">Segundo año</a></li>
                <li class="active"><a href="#tercero" data-toggle="tab">Tercer año</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="primero">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade in active" id="segundo">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade in active" id="tercero">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td>
                    </tr>
                    <tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr>
                    <tbody> 
                      <tr> <th scope="row">Applied Psychology</th> <td>45 minutes</td> <td>3 years</td> <td>$810</td> </tr>
                      <tr> <th scope="row">Business Administration (MBA)</th> <td>45 minutes</td> <td>2 years</td> <td>$940</td> </tr>
                      <tr> <th scope="row">Computer Science (BSc)</th> <td>1 Hours</td> <td>4 years</td> <td>$1180</td> </tr>
                      <tr> <th scope="row">Development Studies (MDS)</th> <td>1 Hours</td> <td>5 years</td> <td>$1400</td> </tr> 
                      <tr> <th scope="row">Engineering Technology (BSc)</th> <td>30 minutes</td> <td>3 years</td> <td>$600</td> </tr> 
                    </tbody> 
                  </table>
                </div>
              </div>
              @endif-->
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
                <div class="widget">
                    <h4 class="widget-title line-bottom">Caracteristica <span class="text-theme-color-2">del programa</span></h4>
                    <div class="opening-hours">
                        <ul class="list-border">
                            <li class="clearfix"> <span> Campus:</span>
                                <div class="value pull-right"> 
                                @foreach ($programa->campus as $campus)
                                    {{ $loop->first ? '' : '|' }}
                                     <b>{{ $campus->name}}</b>
                                @endforeach 
                                </div>
                            </li>
                            <li class="clearfix"> <span> Modalidad : </span>
                                <div class="value pull-right"> {{ $programa->ModalidadPrograma->name }} </div>
                            </li>
                            {{-- <li class="clearfix"> <span>Tipo de programa </span>
                                <div class="value pull-right"> {{ $programa->TipoPrograma->name }} </div>
                            </li> --}}
                            <li class="clearfix"> <span> Fecha de inicio :</span>
                                <div class="value pull-right"> {{ $programa->inicio_curso->format('d/m/Y') }} </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div class="widget">
                <h4 class="widget-title line-bottom">Tipo de <span class="text-theme-color-2">programa</span></h4>
                <div class="services-list">
                    <ul class="list list-border angle-double-right">
                    @foreach ($tipoPrograma as $tipoPrograma)
                      <li 
                      @if($programa->TipoPrograma->name == $tipoPrograma->name)
                      class="active"
                      @endif
                      ><a href="/programas/{{ str_replace('í', 'i', strtolower($tipoPrograma->name)) }}">{{ $tipoPrograma->name }}</a></li>
                    @endforeach
                    </ul>
                </div>
                </div>
              
              
            </div>
          </div>
        </div>

        {{-- Formulario de aspirante --}}
        <div class="row">
          <div class="col-md-8 blog-pull-right">
              <h3 class="text-theme-colored line-bottom text-theme-colored">Solicita más información</h3>
              <form action="{{ route('guardar.aspirante') }}" method="POST">
                @csrf

                <div class="row">
                
                <div class="form-group{{ $errors->has('nombreAspirante') ? ' has-error' : '' }} col-md-6">
                    <label class="control-label" for="">Nombre</label>
                  <input class="form-control" type="text" name="nombreAspirante" placeholder="Nombre" required>
                  {!! $errors->first('nombreAspirante', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                </div>
                <div class="form-group{{ $errors->has('apellidoAspirante') ? ' has-error' : '' }} col-md-6">
                  <label class="control-label" for="">Apellido</label>
                  <input class="form-control" type="text" name="apellidoAspirante" placeholder="Apellido" required>
                  {!! $errors->first('apellidoAspirante', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                </div>
                <div class="form-group{{ $errors->has('telefonoAspirante') ? ' has-error' : '' }} col-md-6">
                  <label class="control-label" for="">Teléfono</label>
                  <input class="form-control" type="text" name="telefonoAspirante" id="" placeholder="844 415 1556" required>
                  {!! $errors->first('telefonoAspirante', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                </div>
                <div class="form-group{{ $errors->has('correoAspirante') ? ' has-error' : '' }} col-md-6">
                  <label class="control-label" for="">Correo</label>
                  <input class="form-control" type="email" name="correoAspirante" id="" placeholder="Correo" required>
                  {!! $errors->first('correoAspirante', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                </div>
                <div class="form-group{{ $errors->has('campusAspirante') ? ' has-error' : '' }} col-md-12">
                  <label class="control-label" for="">Campus</label>
                  <select name="campusAspirante" class="form-control" required>
                    <option value="">- Selecciona un campus -</option>
                    @foreach ($programa->campus as $campus)
                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('campusAspirante', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                </div>
                <input type="hidden" value="{{ $programa->title }}" name="programaAspirante">
                <input type="hidden" value="{{ $programa->tipoPrograma->name }}" name="tipoProgramaAspirante">
                <input type="hidden" value="{{ $programa->modalidadPrograma->name  }}" name="modalidadAspirante">
              </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-theme-colored btn-xl">Solicitar información</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>
@endsection

@push('css')
    <style>
      .widget .services-list li.active::after {
          border-color: transparent #73243d  transparent transparent;
      }
  </style>
@endpush
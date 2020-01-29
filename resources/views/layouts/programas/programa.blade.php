@extends('index')

@section('title')
{{ $programa->title }}
@endsection

@section('meta-desc')
{{ $programa->descripcion_programa }}
@endsection


@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header" style="background-color:#73243d">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-1" >
            </div>
            <div class="col-md-8">
             <h2 style="font-size: 40px;  font-weight:750;color: #FEFEFE; text-transform: uppercase" >  {{ $programa->title }}</h2>
             <h2 style="font-size: 35px; font-weight:500;color: #E7C209;" >Modalidad {{  $programa->ModalidadPrograma->name }}</h2>
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
          <div class=" col-md-4">
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
          <div class="col-sm-12 col-md-8">
            <div class="sidebar sidebar-right mt-sm-30 ml-40">
              <img 
              @if ($programa->modalidadPrograma->name == 'Presencial')
              src="/multi/images/programas/{{ str_replace('í', 'i', $programa->TipoPrograma->name) }}.jpg"
              @elseif($programa->modalidadPrograma->name == 'En línea')
              src="/multi/images/programas/EL.jpg"
              @endif
               
              
              alt="">
              <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $programa->title }}</h3>
              <h5><em>{{ $programa->descripcion_corta }}</em></h5>
              </div>
            </div>
          </div>
          <div class="col-md-12" style="background-color:#73243d">
          <input value="Plan de estudios" id="plan" type="button"style="font-size: 35px; font-weight:500;color: #fefefe; background-color:#40BAB3" ></div>
          <div class="col-md-12" id="programa" style="display: none">
          {!! $programa->descripcion_programa !!}
          </div>
        {{-- Formulario de aspirante --}}
        <div class="row">
          <div class="col-md-12 blog-pull-right">
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
@push('js')
<script type="text/javascript">
    $(function(){
      $("#plan").on( "click", function() {
			$('#programa').show(); //muestro mediante id
		 });
                                                           
     })

                      
</script>
@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#sol34").click(function(){
     if($(this).is(":checked")){
     $('#Medidas').show();
     }else{
     $('#Medidas').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
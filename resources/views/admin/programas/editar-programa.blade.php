@extends('index-admin')
@section('content')


<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="#">Dashboard</a>
    <a class="breadcrumb-item" href="#">Programas</a>
    <span class="breadcrumb-item active">Crear programa</span>
  </nav>
</div><!-- br-pageheader -->
      
<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
      <h4>Crear programas</h4>
      <p class="mg-b-0">Crea un nuevo programa en el sitio web.</p>
    </div>
 </div><!-- d-flex -->

 <div class="br-pagebody">
  <div class="br-section-wrapper">
    @if (session()->has('flash'))
      <div class="alert alert-success alert-bordered" role="alert">
        
        <div class="d-sm-flex align-items-center justify-content-start">
          <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
          <div class="mg-t-20 mg-sm-t-0">
            <h5 class="mg-b-2 tx-success">Programa guardado exitosamente.</h5>
            <p class="mg-b-0 tx-gray">¡El programa se ha actualizado exitosamente!</p>
          </div>
        </div><!-- d-flex -->
      </div>
    @endif
      
    <h6 class="br-section-label">Formulario de programa</h6>
    <p class="br-section-text">Llena cada uno de los campus del formulario para crear un nuevo programa en el sitio web.</p>

    
    
 


    

    <form method="POST" action="{{ route('update.programa', $programa) }}" enctype="multipart/form-data">
        @method('put')
      @csrf
      
      <div class="form-layout form-layout-1">
        <div class="row">

          {{-- Nombre programa --}}
          <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Nombre del programa: <span class="tx-danger">*</span></label>
              <input class="form-control{{ $errors->has('nombrePrograma') ? ' is-invalid' : '' }}" type="text" name="nombrePrograma" 
              value="{{ old('nombrePrograma', $programa->title)}}" 
              placeholder="Ej: Licenciatura en administración de empresas">
              {!! $errors->first('nombrePrograma', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
          </div><!-- col-8 -->

          {{-- Tipo de programa --}}
          <div class="col-lg-4 mg-b-10-force">
            <div class="form-group{{ $errors->has('tipoPrograma') ? ' has-danger' : '' }} ">
                <label class="form-control-label">Tipo de programa: <span class="tx-danger">*</span></label>
                <select class="form-control has-danger select2" name="tipoPrograma" data-placeholder="Selecciona una opción">
                  <option label="Selecciona una opción"></option>
                  @foreach ($tipoPrograma as $tipoPrograma)
                      <option
                      {{ old('tipoPrograma', $programa->tipoPrograma_id) == $tipoPrograma->id ? 'selected' : '' }} 
                       value="{{ $tipoPrograma->id }}">{{ $tipoPrograma->name }}</option>
                  @endforeach
                </select>
                {!! $errors->first('tipoPrograma', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
          </div><!-- col-4 -->

          {{-- Modalidad --}}
          <div class="col-lg-4 mg-b-10-force">
            <div class="form-group{{ $errors->has('modalidad') ? ' has-danger' : '' }}">
              <label class="form-control-label">Modalidad: <span class="tx-danger">*</span></label>
              <select class="form-control select2" name="modalidad" data-placeholder="Selecciona una opción">
                <option label="Selecciona una opción"></option>
                @foreach ($modalidad as $modalidad)
                    <option
                     value="{{ $modalidad->id }}"
                     {{ old('modalidad', $programa->modalidadPrograma_id) == $modalidad->id ? 'selected' : '' }}
                     >{{ $modalidad->name }}</option>
                @endforeach
              </select>
              {!! $errors->first('modalidad', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
          </div><!-- col-4 -->

          {{-- Duracion --}}
          <div class="col-lg-4 mg-b-10-force">
            <div class="form-group{{ $errors->has('duracionCurso') ? ' has-danger' : '' }}">
              <label class="form-control-label">Duración del curso: <span class="tx-danger">*</span></label>
              <select class="form-control select2" name="duracionCurso" data-placeholder="Selecciona una opción">
                <option label="Selecciona una opción"></option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '7 semanas' ? 'selected' : '' }} value="7 semanas">7 semanas</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '11 semanas' ? 'selected' : '' }} value="11 semanas">11 semanas</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '20 semanas' ? 'selected' : '' }} value="20 semanas">20 semanas</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '1 semestre' ? 'selected' : '' }} value="1 semestre">1 semestre</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '2 semestres' ? 'selected' : '' }} value="2 semestres">2 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '3 semestres' ? 'selected' : '' }} value="3 semestres">3 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '4 semestres' ? 'selected' : '' }} value="4 semestres">4 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '5 semestres' ? 'selected' : '' }} value="5 semestres">5 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '6 semestres' ? 'selected' : '' }} value="6 semestres">6 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '7 semestres' ? 'selected' : '' }} value="7 semestres">7 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '8 semestres' ? 'selected' : '' }} value="8 semestres">8 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '9 semestres' ? 'selected' : '' }} value="9 semestres">9 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '10 semestres' ? 'selected' : '' }} value="10 semestres">10 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '11 semestres' ? 'selected' : '' }} value="11 semestres">11 semestres</option>
                <option {{ old('duracionCurso', $programa->duracion_curso) == '12 semestres' ? 'selected' : '' }} value="12 semestres">12 semestres</option>
              </select>
              {!! $errors->first('duracionCurso', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
          </div><!-- col-4 -->

          {{-- Campus --}}
          <div class="col-lg-12 mg-b-10-force">
            <div class="form-group  ">
              <label class="form-control-label">Campus: <span class="tx-danger">*</span></label>
              <select class="form-control select2" name="campus[]" data-placeholder="Choose Browser" multiple="multiple">
                @foreach ($campus as $campus)
                    <option
                    {{ collect(old('campus', $programa->campus->pluck('id')))->contains($campus->id) ? 'selected' : '' }} 
                    value="{{ $campus->id }}">{{ $campus->name }}</option>
                @endforeach
              </select>
              {!! $errors->first('campus', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
          </div><!-- col-4 -->
          

          {{-- Fecha de inicio --}}

          <div class="col-lg-3 mg-b-10-force">
            <div class="form-group has-danger mg-b-10-force">
              <label class="form-control-label">Fecha de inicio: <span class="tx-danger">*</span></label>
              <div class="mg-b-30">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                      </div>
                    </div>
                    <input type="text" name="fechaInicio" class="form-control{{ $errors->has('fechaInicio') ? ' is-invalid' : '' }} fc-datepicker" value="{{ old('fechaInicio', $programa->inicio_curso ? $programa->inicio_curso->format('m/d/Y'): null)  }}" placeholder="MM/DD/YYYY">
                  </div>
                  {!! $errors->first('fechaInicio', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                </div><!-- wd-200 -->
      
            </div>
          </div><!-- col-8 -->

          <div class="col-lg-9 mg-b-10-force">
            <div class="row">
              @if ($programa->miniatura != null)
              <div class="col-lg-6 mg-b-10-force">
                  <div class="ht-350 bg-gray-500 d-flex align-items-center justify-content-center">
                      <input type="file" name="miniaturas" id="file-1" class="inputfile">
                      <label for="file-1" class="tx-white bg-info">
                        <i class="icon ion-ios-upload-outline tx-24"></i>
                        <span>Actualiza la miniatura...</span>
                      </label>
                  </div>
                </div>
              @else
              <div class="col-lg-6 mg-b-10-force">
                  <div class="ht-350 bg-gray-500 d-flex align-items-center justify-content-center">
                      <input type="file" name="miniaturas" id="file-1" class="inputfile">
                      <label for="file-1" class="tx-white bg-info">
                        <i class="icon ion-ios-upload-outline tx-24"></i>
                        <span>Selecciona una miniatura...</span>
                      </label>
                  </div>
                </div>
              @endif
              
              <div class="col-lg-6 mg-b-10-force">
                  <img width="100%" class="img-fluid " src="/multi/images/{{ ($programa->miniatura) }}" alt="">
              </div>
          </div>
            {{-- <div class="form-group has-danger mg-b-10-force">
                <div class="dropzone"></div>
            </div> --}}
          </div><!-- col-8 -->


          {{-- Descripción corta --}}
          <div class="col-lg-12 mg-b-10-force">
            <div class="form-group bg-b-10-force">
              <label class="form-control-label">Descripción corta: <span class="tx-danger">*</span></label>
              <textarea rows="3" name="descripcionCorta" class="form-control{{ $errors->has('descripcionCorta') ? ' is-invalid' : '' }}" placeholder="Textarea" style="margin-top: 0px; margin-bottom: 0px; height: 87px;">{{ old('descripcionCorta', $programa->descripcion_corta) }}</textarea>
              {!! $errors->first('descripcionCorta', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
            
          </div>

          {{-- Descripción --}}
          <div class="col-lg-12">
            <div class="form-group">
                {!! $errors->first('descripcionPrograma', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
                <textarea name="descripcionPrograma" class="{{ $errors->has('descripcionPrograma') ? ' is-invalid' : '' }}" id="summernote" >
                  {{ old('descripcionPrograma', $programa->descripcion_programa) }}

                
                </textarea>                
            </div>
          </div>

          
        </div><!-- row -->

        <div class="form-layout-footer">
          <button class="btn btn-info">Submit Form</button>
          <button class="btn btn-secondary">Cancel</button>
        </div><!-- form-layout-footer -->
      </div><!-- form-layout -->
    </form>
  </div>
 </div>

@endsection


@push('css')
<!-- vendor css -->
		<link href="/admin/lib/highlightjs/styles/github.css" rel="stylesheet">
    <link href="/admin/lib/timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="/admin/lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="/admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="/admin/lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="/admin/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="/admin/lib/summernote/summernote-bs4.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">



@endpush


@push('js')
 




    <script src="/admin/lib/highlightjs/highlight.pack.min.js"></script>
    <script src="/admin/lib/timepicker/jquery.timepicker.min.js"></script>
    <script src="/admin/lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="/admin/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="/admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="/admin/lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

    <script src="/admin/lib/summernote/summernote-bs4.min.js"></script>
    <script src="/js/summernote-templates.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    <script>
      $(function(){
        'use strict'

        // Toggles
        $('.br-toggle').on('click', function(e){
          e.preventDefault();
          $(this).toggleClass('on');
        })

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // Time Picker
        $('#tpBasic').timepicker();
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
          $('#tp3').timepicker('setTime', new Date());
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });


        // Rangeslider
        if($().ionRangeSlider) {
          $('#rangeslider1').ionRangeSlider();

          $('#rangeslider2').ionRangeSlider({
              min: 100,
              max: 1000,
              from: 550
          });

          $('#rangeslider3').ionRangeSlider({
              type: 'double',
              grid: true,
              min: 0,
              max: 1000,
              from: 200,
              to: 800,
              prefix: '$'
          });

          $('#rangeslider4').ionRangeSlider({
              type: 'double',
              grid: true,
              min: -1000,
              max: 1000,
              from: -500,
              to: 500,
              step: 250
          });
        }

      });

      var HelloButton = function (context) {
        var ui = $.summernote.ui;
        var list = $('#elements-list').val();
        var button = ui.buttonGroup([
            ui.button({
                className: 'dropdown-toggle',
                contents: '<span class="fa fa-table"></span> Añadir contenido del programa <span class="caret"></span>',
                //tooltip: "Parámetros disponibles",
                data: {
                    toggle: 'dropdown'
                }
            }),
            ui.dropdown({
              className: 'dropdown-menu note-check dropdown-line-height',
              contents: "<a class='dropdown-item 2-años' href='#'>Programa de 2 años</a> <a class='dropdown-item 3-años' href='#'>Programa de 3 años</a> <a class='dropdown-item 4-años' href='#'>Programa de 4 años</a> <a class='dropdown-item 5-años' href='#'>Programa de 5 años</a>",
              callback: function ($dropdown) {
                $dropdown.find('a.2-años').each(function () {
                  $(this).click(function(e) {
                                                      // We restore cursor position and text is inserted in correct pos.
                    context.invoke('editor.restoreRange');
                    context.invoke('editor.focus');
                    context.invoke('code', '<p>Inserta aquí la descripción del programa (si no lo requiere, borrar esta linea)</p><hr><ul id="myTab" class="nav nav-tabs boot-tabs"><li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li><li><a href="#segundo" data-toggle="tab">Segundo año</a></li></ul>              <div id="myTabContent" class="tab-content"><div class="tab-pane fade in active" id="primero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Primer año</td></tr><tr> <th>Primer semestre</th> <th>Segundo Semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody>  </table></div>              <div class="tab-pane fade" id="segundo"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Segundo Año</td></tr><tr> <th>Tercer semestre</th> <th>Cuarto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr></tbody> </table></div></div>');
                    e.preventDefault();
                  });
                });
                $dropdown.find('a.3-años').each(function () {
                  $(this).click(function(e) {
                                                      // We restore cursor position and text is inserted in correct pos.
                    context.invoke('editor.restoreRange');
                    context.invoke('editor.focus');
                    context.invoke('code', '<p>Inserta aquí la descripción del programa (si no lo requiere, borrar esta linea)</p><hr><ul id="myTab" class="nav nav-tabs boot-tabs"><li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li><li><a href="#segundo" data-toggle="tab">Segundo año</a></li><li><a href="#tercero" data-toggle="tab">Tercer año</a></li></ul><div id="myTabContent" class="tab-content"><div class="tab-pane fade in active" id="primero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Primer año</td></tr><tr> <th>Primer semestre</th> <th>Segundo Semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody>  </table></div><div class="tab-pane fade" id="segundo"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Segundo año</td></tr><tr> <th>Tercer semestre</th> <th>Cuarto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="tercero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Tercer año</td></tr><tr> <th>Quinto semestre</th> <th>Sexto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div></div>');
                    e.preventDefault();
                  });
                });

                $dropdown.find('a.4-años').each(function () {
                  $(this).click(function(e) {
                                                      // We restore cursor position and text is inserted in correct pos.
                    context.invoke('editor.restoreRange');
                    context.invoke('editor.focus');
                    context.invoke('code', '<p>Inserta aquí la descripción del programa (si no lo requiere, borrar esta linea)</p><hr><ul id="myTab" class="nav nav-tabs boot-tabs"><li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li><li><a href="#segundo" data-toggle="tab">Segundo año</a></li><li><a href="#tercero" data-toggle="tab">Tercer año</a></li><li><a href="#cuarto" data-toggle="tab">Cuarto año</a></li></ul><div id="myTabContent" class="tab-content"><div class="tab-pane fade in active" id="primero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Primer año</td></tr><tr> <th>Primer semestre</th> <th>Segundo Semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody>  </table></div><div class="tab-pane fade" id="segundo"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Segundo año</td></tr><tr> <th>Tercer semestre</th> <th>Cuarto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="tercero"><table class="table table-bordered"><tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Tercer año</td></tr><tr> <th>Quinto semestre</th> <th>Sexto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="cuarto"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Cuarto año</td></tr><tr> <th>Septimo semestre</th> <th>Octavo semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div></div>');
                    e.preventDefault();
                  });
                });

                $dropdown.find('a.5-años').each(function () {
                  $(this).click(function(e) {
                                                      // We restore cursor position and text is inserted in correct pos.
                    context.invoke('editor.restoreRange');
                    context.invoke('editor.focus');
                    context.invoke('code', '<p>Inserta aquí la descripción del programa (si no lo requiere, borrar esta linea)</p><hr><ul id="myTab" class="nav nav-tabs boot-tabs"><li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li><li><a href="#segundo" data-toggle="tab">Segundo año</a></li><li><a href="#tercero" data-toggle="tab">Tercer año</a></li><li><a href="#cuarto" data-toggle="tab">Cuarto año</a></li><li><a href="#quinto" data-toggle="tab">Quinto año</a></li></ul><div id="myTabContent" class="tab-content"><div class="tab-pane fade in active" id="primero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Primer año</td></tr><tr> <th>Primer semestre</th> <th>Segundo Semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody>  </table></div><div class="tab-pane fade" id="segundo"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Segundo año</td></tr><tr> <th>Tercer semestre</th> <th>Cuarto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="tercero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Tercer Año</td></tr><tr> <th>Quinto semestre</th> <th>Sexto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="cuarto"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Cuarto año</td></tr><tr> <th>Septimo semestre</th> <th>Octavo semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="quinto"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Quinto año</td></tr><tr> <th>Septimo semestre</th> <th>Octavo semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div></div>');
                    e.preventDefault();
                  });
                });
              
              
              }
            })
          ]);

        // create button
        // var button = ui.button({
          
        //   contents: '<i class="fa fa-table"/> Insertar programa',
        //   tooltip: 'Clic para insertar tabla de programas',
        //   click: function () {
        //     // invoke insertText method with 'hello' on editor module.
        //     context.invoke('code', '<p>Inserta aquí la descripción del programa (si no lo requiere, borrar esta linea)</p><hr><ul id="myTab" class="nav nav-tabs boot-tabs"><li class="active"><a href="#primero" data-toggle="tab">Primer año</a></li><li><a href="#segundo" data-toggle="tab">Segundo año</a></li><li><a href="#tercero" data-toggle="tab">Tercer año</a></li><li><a href="#cuarto" data-toggle="tab">Cuarto año</a></li></ul>              <div id="myTabContent" class="tab-content"><div class="tab-pane fade in active" id="primero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td></tr><tr> <th>Primer semestre</th> <th>Segundo Semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody>  </table></div>                <div class="tab-pane fade" id="segundo"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td></tr><tr> <th>Tercer semestre</th> <th>Cuarto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div><div class="tab-pane fade" id="tercero"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td></tr><tr> <th>Quinto semestre</th> <th>Sexto semestre</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody>                   </table></div><div class="tab-pane fade" id="cuarto"><table class="table table-bordered"> <tr><td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Prices For All Lesson Type</td></tr><tr> <th>Coures Type</th> <th>Class time</th> <th>Course Duration</th> <th>Price</th> </tr><tbody> <tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr><tr> <td>Materia</td> <td>Materia</td> </tr> </tbody> </table></div></div>');
        //   }
        // });

        return button.render();   // return button as jquery object
      }
      

      $('#summernote').summernote({
          height: 550,
          toolbar:[

            ['mybutton', ['hello']],
            ['codeview', ['codeview']]
        ],
        

        buttons: {
          hello: HelloButton
        }, 
        
        });
        

        //var HTMLstring = '<div><p>Hello, world</p><p>Summernote can insert HTML string</p></div>';
        //$('#summernote').summernote('insertText', HTMLstring);

        $(function(){

'use strict';

$( '.inputfile' ).each( function()
{
  var $input	 = $( this ),
    $label	 = $input.next( 'label' ),
    labelVal = $label.html();

  $input.on( 'change', function( e )
  {
    var fileName = '';

    if( this.files && this.files.length > 1 )
      fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
    else if( e.target.value )
      fileName = e.target.value.split( '\\' ).pop();

    if( fileName )
      $label.find( 'span' ).html( fileName );
    else
      $label.html( labelVal );
  });

  // Firefox bug fix
  $input
  .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
  .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
});

});

        // var myDropzone = new Dropzone('.dropzone', {
        //     url: '/mkt-user/programas/{{ $programa->url }}/fotos',
        //      acceptedFiles: 'image/*',
        //      maxFilesize: 6,
        //     paramName: 'photo',
        //     headers: {
        //         'X-CSRF-Token': $('input[name="_token"]').val()
        //     },
        //     dictDefaultMessage: 'Arrastra las fotos aquí para subirlas',
        // });

        // myDropzone.on('error', function(file, res) {
        //     var msg = res.errors.photo[0];
        //     $('.dz-error-message:last > span').text(msg);
        // }); 
        // Dropzone.autoDiscover = false;
    </script>
@endpush
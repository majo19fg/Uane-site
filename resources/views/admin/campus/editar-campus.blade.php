@extends('index-admin') 
@section('content')


<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="#">Dashboard</a>
    <a class="breadcrumb-item" href="#">Campus</a>
    <span class="breadcrumb-item active">Editar Campus {{ $campus->name }}</span>
  </nav>
</div>
<!-- br-pageheader -->

<div class="br-pagetitle">
  <i class="icon icon ion-ios-bookmarks-outline"></i>
  <div>
    <h4>Editar Campus {{ $campus->name }}</h4>
    <p class="mg-b-0">Edita uno de los campus.</p>
  </div>
</div>
<!-- d-flex -->

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
      </div>
      <!-- d-flex -->
    </div>
    @endif

    

    <h6 class="br-section-label">Formulario de programa</h6>
    <p class="br-section-text">Llena cada uno de los campus del formulario para crear un nuevo programa en el sitio web.</p>

    <form method="POST" action="{{ route('update.campus', $campus) }}" enctype="multipart/form-data">
      @method('put') @csrf

      <div class="form-layout form-layout-1">
        <div class="row">

          {{-- Nombre Campus --}}
          <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Nombre del campus: <span class="tx-danger">*</span></label>
              <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name', $campus->name)}}"
                placeholder="Ej: Saltillo"> {!! $errors->first('name', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>')
              !!}
            </div>
          </div>
          <!-- col-8 -->

          <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Dirección del campus: <span class="tx-danger">*</span></label>
              <input class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" type="text" name="direccion" value="{{ old('direccion', $campus->direccion)}}"
                placeholder="Ej: Saltillo"> {!! $errors->first('direccion', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>')
              !!}
            </div>
          </div>
          <!-- col-8 -->

          <div class="col-lg-6">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Latitud del campus: <span class="tx-danger">*</span></label>
              <input class="form-control{{ $errors->has('latitud') ? ' is-invalid' : '' }}" type="text" name="latitud" value="{{ old('latitud', $campus->latitud)}}"
                placeholder="Ej: Saltillo"> {!! $errors->first('latitud', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>')
              !!}
            </div>
          </div>
          <!-- col-8 -->

          <div class="col-lg-6">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Longitud del campus: <span class="tx-danger">*</span></label>
              <input class="form-control{{ $errors->has('longitud') ? ' is-invalid' : '' }}" type="text" name="longitud" value="{{ old('longitud', $campus->longitud)}}"
                placeholder="Ej: Saltillo"> {!! $errors->first('longitud', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>')
              !!}
            </div>
          </div>
          <!-- col-8 -->

          <div class="col-lg-12 mg-b-10-force mg-t-20">
            <div class="row">
              @if ($campus->miniatura != null)
              <div class="col-lg-6 mg-b-10-force">
                <div class="ht-350 bg-gray-500 d-flex align-items-center justify-content-center">
                  <input type="file" name="miniatura" id="file-1" class="inputfile">
                  <label for="file-1" class="tx-white bg-info">
                        <i class="icon ion-ios-upload-outline tx-24"></i>
                        <span>Actualiza la miniatura...</span>
                      </label>
                </div>
              </div>
              <div class="col-lg-6 mg-b-10-force">
                <img width="100%" class="img-fluid " src="/laravel/public/multi/images/{{ ($campus->miniatura) }}" alt="">
              </div>
              @else
              <div class="col-lg-6 mg-b-10-force">
                <div class="ht-350 bg-gray-500 d-flex align-items-center justify-content-center">
                  <input type="file" name="miniatura" id="file-1" class="inputfile">
                  <label for="file-1" class="tx-white bg-info">
                        <i class="icon ion-ios-upload-outline tx-24"></i>
                        <span>Selecciona una miniatura...</span>
                      </label>
                </div>
              </div>
              @endif
            </div>
            {{--
            <div class="form-group has-danger mg-b-10-force">
              <div class="dropzone"></div>
            </div> --}}
          </div>
          <!-- col-8 -->

          {{-- Historia --}}
          <div class="col-lg-12 mg-b-10-force mg-t-20">
            <div class="form-group">
              {!! $errors->first('history', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>')
              !!}
              <textarea name="history" class="{{ $errors->has('history') ? ' is-invalid' : '' }}" id="summernote">
                  {{ old('history', $campus->history) }}

                
                </textarea>
            </div>
          </div>

          <div class="col-lg-12 mg-b-10-force mg-t-20">
            <div class="row">
              <div class="col-lg-12 mg-b-10-force">
                <div class="ht-350 bg-gray-500 d-flex align-items-center justify-content-center">
                  <input type="file" name="galeriaCampus[]" id="file-2" class="inputfile" data-multiple-caption="{count} archivos seleccionados"
                    multiple>
                  <label for="file-2" class="tx-white bg-info">
                    <i class="icon ion-ios-upload-outline tx-24"></i>
                    <span>Subir imagenes de galeria</span>
                  </label>
                </div>
                {!! $errors->first('galeriaCampus[]', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">Es necesario agregar una foto al menos.</strong>')
                !!}
              </div>

            </div>
          </div>



        </div>
        <!-- row -->

        <div class="form-layout-footer">
          <button class="btn btn-info">Submit Form</button>
          <button class="btn btn-secondary">Cancel</button>
        </div>
        <!-- form-layout-footer -->
      </div>
      <!-- form-layout -->
    </form>

    <div class="col-lg-12 mg-b-10-force mg-t-20">
      <div class="row">
        @foreach ($campus->galeria as $galeria)
        <form action="{{ route('galeria.destroy', $galeria->id) }}" method="post" class="form-inline">
          @method('DELETE') @csrf
          <div class="col-md-3">
            <figure class="overlay">
              <img src="/laravel/public/multi/images/{{ $galeria->path }}" class="img-fluid" alt="">
              <figcaption class="overlay-body d-flex">
                <div class="img-option img-option-sm" style="background:#de453b;">
                  {{--
                  <a href="{{ $galeria->id }}" class="img-option-link">
                    <div><i class="fa fa-trash"></i></div>
                  </a> --}}
                  <button class="btn btn-danger btn-xs" style="position:absolute;"><i class="fa fa-trash"></i></button>
                </div>
              </figcaption>
            </figure>
          </div>
        </form>

        @endforeach

      </div>
    </div>
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
@endpush @push('js')





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
  $('#summernote').summernote({
        height: 550,
      });
</script>

<script>
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

</script>

@endpush
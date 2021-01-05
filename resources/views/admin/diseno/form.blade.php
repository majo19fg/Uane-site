@extends('index-admin') 
@section('content')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Solicitud de diseño</a>
        <span class="breadcrumb-item active">Formulario</span>
    </nav>
</div>
<!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
        <h4>Solicitud de diseño</h4>
        <p class="mg-b-0">Realiza la solicitud de materiales como lonas, folletos, piezas para redes sociales, etc.</p>
    </div>
</div>
<!-- d-flex -->



<div class="br-pagebody">
    <div class="br-section-wrapper">

        @if (Session::has('success'))
        <div class="alert alert-success alert-solid pd-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            <div class="d-sm-flex align-items-center justify-content-start">
                <i class="icon ion-ios-checkmark-outline lh-0 tx-52"></i>
                <div class="mg-sm-l-15 mg-t-15 mg-sm-t-0">
                    <h5 class="mg-b-2 pd-t-2">¡Excelente!</h5>
                    <p class="mg-b-0 tx-xs op-8">{{ Session::get('success') }}</p>
                </div>
            </div>
            <!-- d-flex -->
        </div>
        @endif @if ($errors->any())
        <div class="alert alert-danger alert-solid pd-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            <div class="d-sm-flex align-items-center justify-content-start">
                <i class="icon ion-ios-close-outline lh-0 tx-52"></i>
                <div class="mg-sm-l-15 mg-t-15 mg-sm-t-0">
                    <h5 class="mg-b-2 pd-t-2">Al parecer hubo un error</h5>
                    <p class="mg-b-0 tx-xs op-8">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
            <!-- d-flex -->
        </div>
        @endif



        <form id="form" action="{{ route('formulario.solicitud') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        
            <div id="wizard1">
                <h3>Datos de contacto</h3>
                <section>
                    <p>Comparte tus datos de contacto para envíar la solicitud</p>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                                <input id="name_designReq" class="form-control {{ $errors->has('name') ? 'is-invalid' :'' }}" name="name" value="{{ old('name') }}"
                                    placeholder="Nombre" type="text" required>
                            </div>
                            <!-- form-group -->
                        </div>
                        <div class="col-lg-4 ">
                            <div class="form-group ">
                                <label class="form-control-label ">Apellido: <span class="tx-danger">*</span></label>
                                <input id="last_name_designReq" class="form-control {{ $errors->has('last_name') ? 'is-invalid' :'' }}" name="last_name"
                                    value="{{ old('last_name') }}" placeholder="Apellido" type="text" required>
                            </div>
                            <!-- form-group -->
                        </div>
                        <div class="col-lg-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Teléfono: <span class="tx-danger">*</span></label>
                                <input id="phone_designReq" class="form-control {{ $errors->has('phone') ? 'is-invalid' :'' }}" name="phone" value="{{ old('phone') }}"
                                    placeholder="Teléfono" type="tel" required>
                            </div>
                            <!-- form-group -->
                        </div>
                        <div class="col-lg-4 ">
                            <div class="form-group ">
                                <label class="form-control-label">Celular: <span class="tx-danger"></span></label>
                                <input id="cel_designReq" class="form-control " name="cel" value="{{ old('cel') }}" placeholder="cel" type="tel">
                            </div>
                            <!-- form-group -->
                        </div>
                        <div class="col-lg-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="form-group ">
                                <label class="form-control-label">Campus: <span class="tx-danger">*</span></label>
                                <select name="campus" class="form-control {{ $errors->has('campus') ? 'is-invalid' :'' }}" id="campus_designReq" required>
                                    <option value="">Selecciona un campus</option>
                                    <option value="Campus Saltillo">Campus Saltillo</option>
                                    <option value="Campus Torreón">Campus Torreón</option>
                                    <option value="Campus Monclova">Campus Monclova</option>
                                    <option value="Campus Sabinas">Campus Sabinas</option>
                                    <option value="Campus Piedras Negras">Campus Piedras Negras</option>
                                    <option value="Campus Monterrey">Campus Monterrey</option>
                                    <option value="Campus Reynosa">Campus Reynosa</option>
                                    <option value="Campus Matamoros">Campus Matamoros</option>
                                    <option value="Rectoría">Rectoría</option>
                                </select >
                            </div>
                            <!-- form-group -->
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Departamento: <span class="tx-danger">*</span></label>
                                <input id="dpto_designReq" class="form-control {{ $errors->has('dpto') ? 'is-invalid' :'' }}" name="dpto" value="{{ old('dpto') }}"
                                    placeholder="Departamento" type="text" required>
                            </div>
                            <!-- form-group -->
                        </div>

                        <div class="col-lg-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Correo: <span class="tx-danger">*</span></label>
                                <input id="email_designReq" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" type="email"
                                    required>
                            </div>
                            <!-- form-group -->
                        </div>
                        <div class="col-lg-4 "></div>
                    </div>


                </section>
                <h3>Tipo de solicitud</h3>
                <section>
                    <p>Selecciona una opción de solicitud que necesites, en caso de no encontrarla favor de poner Otro.</p>
                    <div id="cbWrapper" class="parsley-checkbox mg-b-0">
                        <h4>Redes sociales</h4>
                        <hr>
                        <div class="row">
                            
                            {{-- Facebook --}}

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Foto de perfil para Facebook" {{ old('request_design') == 'Foto de perfil para Facebook' ? 'checked' : '' }} name="request_design[]" id="sol1" type="checkbox" required>
                                <span>Foto de perfil para Facebook</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Portada de Facebook" {{ old('request_design') == 'Portada de Facebook' ? 'checked' : '' }} name="request_design[]" id="sol2" type="checkbox" required>
                                <span>Portada de Facebook</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Post de Facebook" {{ old('request_design') == 'Post de Facebook' ? 'checked' : '' }} name="request_design[]" id="sol3" type="checkbox" required>
                                <span>Post de Facebook</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Imágenes para eventos en Facebook" {{ old('request_design') == 'Imágenes para eventos en Facebook' ? 'checked' : '' }} name="request_design[]" id="sol5" type="checkbox" required>
                                <span>Imágenes para eventos en Facebook</span>
                            </label>
                            </div>

                            {{-- Twitter --}}

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Foto de perfil para Twitter" {{ old('request_design') == 'Foto de perfil para Twitter' ? 'checked' : '' }} name="request_design[]" id="sol4" type="checkbox" required>
                                <span>Foto de perfil para Twitter</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Portada de Twitter" {{ old('request_design') == 'Portada de Twitter' ? 'checked' : '' }} name="request_design[]" id="sol5" type="checkbox" required>
                                <span>Portada de Twitter</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Post de Twitter" {{ old('request_design') == 'Post de Twitter' ? 'checked' : '' }} name="request_design[]" id="sol6" type="checkbox" required>
                                <span>Post de Twitter</span>
                            </label>
                            </div>
                            

                            {{-- Instageam --}}

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Foto de perfil para Instagram" {{ old('request_design') == 'Foto de perfil para Instagram' ? 'checked' : '' }} name="request_design[]" id="sol7" type="checkbox" required>
                                <span>Foto de perfil para Instagram</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Post de Instagram" {{ old('request_design') == 'Post de Instagram' ? 'checked' : '' }} name="request_design[]" id="sol8" type="checkbox" required>
                                <span>Post de Instagram</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Historias de Instagram" {{ old('request_design') == 'Historias de Instagram' ? 'checked' : '' }} name="request_design[]" id="sol9" type="checkbox" required>
                                <span>Historias de Instagram</span>
                            </label>
                            </div>

                            {{-- Whatsapp --}}

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Foto de perfil para Whatsapp" {{ old('request_design') == 'Foto de perfil para Whatsapp' ? 'checked' : '' }} name="request_design[]" id="sol10" type="checkbox" required>
                                <span>Foto de perfil para Whatsapp</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Historias de Whatsapp" {{ old('request_design') == 'Historias de Whatsapp' ? 'checked' : '' }} name="request_design[]" id="sol11" type="checkbox" required>
                                <span>Historias de Whatsapp</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Imágenes para Whatsapp" {{ old('request_design') == 'Imágenes para Whatsapp' ? 'checked' : '' }} name="request_design[]" id="sol12" type="checkbox" required>
                                <span>Imágenes para Whatsapp</span>
                            </label>
                            </div>


                        </div>
                        <h4 style="margin-top:20px;">Diseño</h4>
                        <hr>
                        <div class="row ">
                            
                            {{-- Diseño --}}


                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Volantes para imprimir" {{ old('request_design') == 'Volantes para imprimir' ? 'checked' : '' }} name="request_design[]" id="sol13" type="checkbox" data-parsley-errors-container="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" required>
                                <span>Volantes para imprimir</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Pósters (Tabloides)" {{ old('request_design') == 'Pósters (Tabloides)' ? 'checked' : '' }} name="request_design[]" id="sol14" type="checkbox" required>
                                <span>Pósters (Tabloides)</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Folletos" {{ old('request_design') == 'Folletos' ? 'checked' : '' }} name="request_design[]" id="sol15" type="checkbox" required>
                                <span>Folletos</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Lonas" {{ old('request_design') == 'Lonas' ? 'checked' : '' }} name="request_design[]" id="sol16" type="checkbox" required>
                                <span>Lonas</span>
                            </label>
                            </div>
                            
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Prensa" {{ old('request_design') == 'Prensa' ? 'checked' : '' }} name="request_design[]" id="sol17" type="checkbox" required>
                                <span>Prensa</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Revista" {{ old('request_design') == 'Revista' ? 'checked' : '' }} name="request_design[]" id="sol18" type="checkbox" required>
                                <span>Revista</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Espectacular" {{ old('request_design') == 'Espectacular' ? 'checked' : '' }} name="request_design[]" id="sol19" type="checkbox" required>
                                <span>Espectacular</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value=" Invitaciones" {{ old('request_design') == 'Invitaciones' ? 'checked' : '' }} name="request_design[]" id="sol20" type="checkbox" required>
                                <span> Invitaciones</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                    <label class="ckbox ">
                                    <input value=" Invitaciones impresas" {{ old('request_design') == 'Invitaciones impresas' ? 'checked' : '' }} name="request_design[]" id="sol21" type="checkbox" required>
                                    <span> Invitaciones impresas</span>
                                </label>
                                </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Diplomas" {{ old('request_design') == 'Diplomas' ? 'checked' : '' }} name="request_design[]" id="sol22" type="checkbox" required>
                                <span>Diplomas</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Animaciones" {{ old('request_design') == 'Animaciones' ? 'checked' : '' }} name="request_design[]" id="sol23" type="checkbox" required>
                                <span>Animaciones</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="GIF" {{ old('request_design') == 'GIF' ? 'checked' : '' }} name="request_design[]" id="sol24" type="checkbox" required>
                                <span>GIF</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Presentaciones Power Point" {{ old('request_design') == 'Presentaciones Power Point' ? 'checked' : '' }} name="request_design[]" id="sol25" type="checkbox" required>
                                <span>Presentaciones Power Point </span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Edición de Video" {{ old('request_design') == 'Video' ? 'checked' : '' }} name="request_design[]" id="sol26" type="checkbox" required>
                                <span>Edición de Video</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Edición de fotografia" {{ old('request_design') == 'Edición de fotografia' ? 'checked' : '' }} name="request_design[]" id="sol27" type="checkbox" required>
                                <span>Edición de fotografia</span>
                            </label>
                            </div>


                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Reconocimiento de angiguedad" {{ old('request_design') == 'Reconocimiento de angiguedad' ? 'checked' : '' }} name="request_design[]" id="sol28" type="checkbox" required>
                                <span>Reconocimiento de antigüedad</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Tarjetas de presentación" {{ old('request_design') == 'Tarjetas de presentación' ? 'checked' : '' }} name="request_design[]" id="sol29" type="checkbox" required>
                                <span>Tarjetas de presentación</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Mailings" {{ old('request_design') == 'Mailings' ? 'checked' : '' }} name="request_design[]" id="sol30" type="checkbox" required>
                                <span>Mailings</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Logotipo" {{ old('request_design') == 'Logotipo' ? 'checked' : '' }} name="request_design[]" id="sol31" type="checkbox" required>
                                <span>Logotipos</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Diseño de uniforme" {{ old('request_design') == 'Diseño de uniforme' ? 'checked' : '' }} name="request_design[]" id="sol32" type="checkbox" required>
                                <span>Diseño de uniforme</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Tarjetones" {{ old('request_design') == 'Tarjetones de estacionamiento' ? 'checked' : '' }} name="request_design[]" id="sol33" type="checkbox" required>
                                <span>Tarjetones de estacionamiento</span>
                            </label>
                            </div>

                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Banner (araña) " {{ old('request_design') == 'Banner' ? 'checked' : '' }} name="request_design[]" id="sol34" type="checkbox" required>
                                <span>Banner (araña)</span>
                            </label>
                            </div>
                            <div class="col-md-3">
                                <label class="ckbox ">
                                <input value="Otro" {{ old('request_design') == 'Otro' ? 'checked' : '' }} name="request_design[]" id="sol35" type="checkbox" required>
                                <span>Otro</span>
                            </label>
                            </div>

                            <div  id="Medidas" class="col-md-10" style="display: none">
                            <br/>
                            <p>Agrega las medidas de tu solicitud con unidades.</p>
                            <div  class="col-md-6">
                            <p>Base: 
                            <div class="col-md-7"><input name="base" class="form-control {{ $errors->has('base') ? 'is-invalid' :'' }}" id="base"  required>{{ old('base') }}</input></div></p>
                            </div>
                            <div  class="col-md-6">
                            <p>Altura: 
                            <div class="col-md-7"><input name="altura" class="form-control {{ $errors->has('altura') ? 'is-invalid' :'' }}" id="altura"  required>{{ old('altura'&'metros') }}</input></div></p>
                            </div>
                            </div>
 
                            

                        </div>
                    </div>
                </section>
                <h3>Título</h3>
                <section>
                <p>Agrega un título para identificar tu solicitud. Máx 30 caracteres (<i>Ejemplo: Venta Nocturna Octubre</i>). Recuerda que el título es obligatorio *</p>
                  <div class="col-md-12">
                     <input name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' :'' }}" id="title" cols="5" rows="2" required>{{ old('title') }}</input>
                  </div>
                    <h4 style="color:#17202A">Descripción</h4>                  
                    <p>A continuación, describe lo que necesitas. Recuerda incluir medidas, para que se utilizara y cualquier
                        especificación importante que pueda servir para el diseño.</p>
                    <div class="col-md-12">
                        <textarea name="desc" class="form-control {{ $errors->has('desc') ? 'is-invalid' :'' }}" id="desc" cols="30" rows="10">{{ old('desc') }}</textarea>
                    </div>
                </br>
                    <div class="col-md-12" style="background-color: #cc0000; color:white;">

                        <center><h5>Agrega un título para identificar tu solicitud. Máx 30 caracteres (<i>Ejemplo: Venta Nocturna Octubre</i>). Recuerda que el título es obligatorio *</h5></center>

                    </div>
                </section>
                    
            </div>
        </form>
    </div>
</div>
@endsection
 @push('css')
<link href="/admin/lib/timepicker/jquery.timepicker.css" rel="stylesheet"> 
@endpush @push('js')
<script src="/admin/lib/highlightjs/highlight.pack.min.js"></script>
<script src="/admin/lib/jquery-steps/build/jquery.steps.min.js"></script>
<script src="/admin/lib/timepicker/jquery.timepicker.min.js"></script>
<script src="/admin/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
<script>
    $('#wizard1').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        autoFocus: true,
        titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
        cssClass: 'wizard step-equal-width',
        labels: {
              next: 'Siguiente',
              previous: 'Regresar',
              finish: 'Enviar'
          },
        onStepChanging: function (event, currentIndex, newIndex) {
            
            if(currentIndex < newIndex) {
                // Step 1 form validation
                if(currentIndex === 0) {
                    var fname = $('#name_designReq').parsley();
                    var lname = $('#last_name_designReq').parsley();
                    var phone = $('#phone_designReq').parsley();
                    var cel = $('#cel_designReq').parsley();
                    var campus = $('#campus_designReq').parsley();
                    var dpto = $('#dpto_designReq').parsley();
                    var email = $('#email_designReq').parsley();

                    if(fname.isValid() && lname.isValid() && phone.isValid() && campus.isValid() && dpto.isValid() && email.isValid() ) {
                        return true;
                    } else {
                        fname.validate();
                        lname.validate();
                        phone.validate();
                        campus.validate();
                        //cel.validate();
                        dpto.validate();
                        email.validate();
                    }
                }
                // Step 2 form validation

                if(currentIndex === 1){
                    var sol1 = $('#sol1').parsley();
                    var sol2 = $('#sol2').parsley();
                    var sol3 = $('#sol3').parsley();
                    var sol4 = $('#sol4').parsley();
                    var sol5 = $('#sol5').parsley();
                    var sol6 = $('#sol6').parsley();
                    var sol7 = $('#sol7').parsley();
                    var sol8 = $('#sol8').parsley();
                    var sol9 = $('#sol9').parsley();
                    var sol10 = $('#sol10').parsley();
                    var sol11 = $('#sol11').parsley();
                    var sol12 = $('#sol12').parsley();
                    var sol13 = $('#sol13').parsley();
                    var sol14 = $('#sol14').parsley();
                    var sol15 = $('#sol15').parsley();
                    var sol16 = $('#sol16').parsley();
                    var sol17 = $('#sol17').parsley();
                    var sol18 = $('#sol18').parsley();
                    var sol19 = $('#sol19').parsley();
                    var sol20 = $('#sol20').parsley();
                    var sol21 = $('#sol21').parsley();
                    var sol22 = $('#sol22').parsley();
                    var sol23 = $('#sol23').parsley();
                    var sol24 = $('#sol24').parsley();
                    var sol25 = $('#sol25').parsley();
                    var sol26 = $('#sol26').parsley();
                    var sol27 = $('#sol27').parsley();
                    var sol28 = $('#sol28').parsley();
                    var sol29 = $('#sol29').parsley();
                    var sol30 = $('#sol30').parsley();
                    var sol31 = $('#sol31').parsley();
                    var sol32 = $('#sol32').parsley();
                    var sol33 = $('#sol33').parsley();
                    var sol34 = $('#sol34').parsley();
                    var sol35 = $('#sol35').parsley();

                    if (sol1.isValid() || sol2.isValid() || sol3.isValid() || sol4 .isValid() || sol5 .isValid() || sol6 .isValid() || sol7 .isValid() || sol8 .isValid() || sol9 .isValid() || sol10.isValid() || sol11.isValid() || sol12.isValid() || sol13.isValid() || sol14.isValid() || sol15.isValid() || sol16.isValid() || sol17.isValid() || sol18.isValid() || sol19.isValid() || sol20.isValid() || sol21.isValid() || sol22.isValid() || sol23.isValid() || sol24.isValid() || sol25.isValid() || sol26.isValid() || sol27.isValid() || sol28.isValid() || sol29.isValid() || sol30.isValid()|| sol31.isValid()|| sol32.isValid()|| sol33.isValid()|| sol34.isValid()|| sol35.isValid()) {
                        return true;
                    } else {
                        sol1.validate();
                        sol2.validate();
                        sol3.validate(); 
                        sol4.validate(); 
                        sol5.validate(); 
                        sol6.validate(); 
                        sol7.validate(); 
                        sol8.validate(); 
                        sol9.validate();
                        sol10.validate();
                        sol11.validate();
                        sol12.validate();
                        sol13.validate();
                        sol14.validate();
                        sol15.validate();
                        sol16.validate();
                        sol17.validate();
                        sol18.validate();
                        sol19.validate();
                        sol20.validate();
                        sol21.validate();
                        sol22.validate();
                        sol23.validate();
                        sol24.validate();
                        sol25.validate();
                        sol26.validate();
                        sol27.validate();
                        sol28.validate();
                        sol29.validate();
                        sol30.validate();
                        sol31.validate();
                        sol32.validate();
                        sol33.validate();
                        sol34.validate();
                        sol35.validate();
                    }
                }

                if (currentIndex === 2) {
                    var desc = $('#desc').parsley();

                    if (desc.isValid()) {
                        return true;
                    } else{
                        desc.validate();
                    }
                }
               

                
                

                
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
        },

        onFinished: function (event, currentIndex) {
            $("#form").submit();
        },        
    });

    $('#cel_designReq').mask('(999) 999-9999');
    $('#phone_designReq').mask('(999) 999-9999');

</script>


@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#sol16").click(function(){
     if($(this).is(":checked")){
     $('#Medidas').show();
     }else{
     $('#Medidas').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#sol21").click(function(){
     if($(this).is(":checked")){
     $('#Medidas').show();
     }else{
     $('#Medidas').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#sol19").click(function(){
     if($(this).is(":checked")){
     $('#Medidas').show();
     }else{
     $('#Medidas').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#sol18").click(function(){
     if($(this).is(":checked")){
     $('#Medidas').show();
     }else{
     $('#Medidas').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#sol17").click(function(){
     if($(this).is(":checked")){
     $('#Medidas').show();
     }else{
     $('#Medidas').hide();
     }
                                                             
     })
                                                           
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
@push('js')
<script >
    $(document).ready(function(){
     $("#desc").richText({
        ol: false,
        fontColor: false,
        videoEmbed: false,
        removeStyles: false,
        code: false,
        imageUpload: false,
        fileUpload: false,
     });                                                
     });
                               
</script>
@endpush

@extends('index')
@section('title', 'Encuesta de medios')

@section('meta-desc')

@section('content')
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/banner.jpg">
    <div class="container pt-70 pb-20">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="br-pageheader">

</div>
<!-- br-pageheader --> 
<center>
<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div class="col-xl-8 offset-1">
    </div>
</div>
</center>
<!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row mg-t-10">
            <div class="col-xl-10 offset-1">
                <form  action="{{ route('encuesta.guardar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div >

                        @if (session()->has('success'))

                        <div class="alert alert-success alert-bordered" role="alert">

                            <div class="d-sm-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                                <div class="mg-t-20 mg-sm-t-0">
                                    <h5 class="mg-b-2 tx-success">Encuesta registrada exitosamente.</h5>
                                    <p class="mg-b-0 tx-gray">¡Haz finalizado tu encuesta!</p>
                                    <p class="mg-b-0 tx-gray">En agradecimiento a tu colaboración, queremos darte la oportunidad de participar en un sorteo</p>
                                    <p class="mg-b-0 tx-gray">por un kit promocional. A los ganadores se les entregará su premio personalmente en su campus</p>
                                    <p class="mg-b-0 tx-gray">correspondiente. Te mantendremos informado.</p>
                                </div>
                            </div>
                            <!-- d-flex -->
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-bordered" role="alert">

                            <div class="d-sm-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-close alert-icon tx-52 mg-r-20 tx-danger"></i>
                                <div class="mg-t-20 mg-sm-t-0">
                                    <h5 class="mg-b-2 tx-danger">¡Ups! Parece que algo salio mal.</h5>
                                    <ul style="list-style:none;" class="list-group">
                                        @foreach ($errors->all() as $error)

                                        <li>- {{ $error }}</li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- d-flex -->
                        </div>
                        @endif

                        {{-- Campus --}}
              <section class="sinborde">
                 <div class="container">
                    <div class="section-content">
                        <div class="col-md-12">  
                       <center> 
                        <div class="linea">
                        <div class="col-md-12">                                
                        <h2 class="text-uppercase font-weight-600 mt-0 font-28 linea"> Encuesta de medios</h2> 
                        </div>
                        </div>
                    </center>
                        <div class="col-md-12">     
                        <p class="mg-b-0"><h5>Te agradecemos tu atención e interés por contestar esta encuesta, te tomará 15 minutos hacerla y nos proporcionará información muy valiosa para hacer mejor nuestro trabajo. </h5></p>
                        <p class="mg-b-0"><h5>Es indispensable ser alumno de nuevo ingreso en modalidad presencial.</h5></p>
                        <p class="mg-b-0"><h5>Los datos que expongas serán considerados como anónimos y se utilizarán solamente con fines académicos y de investigación. </h5></p>
                        <p class="mg-b-0"><h5>Puedes consultar nuestro aviso de privacidad en
                        <a href="https://www.uane.edu.mx"><b><u style="color: #73243D">www.uane.edu.mx</u></b></a>. </h5></p>
                        <p class="mg-b-0"><h5>Muchas gracias por tu apoyo. </h5></p>
                        </div>
                    </br>
                    {{-- Matrícula --}} 
                    <div class="section">
                    <label class="col-sm-4 form-control-label">Matrícula</label>
                         <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                         <input class="sinborde" value="{{ old('matricula') }}" name="matricula"
                         placeholder="Matrícula">
                         </div>
                    </div>
                        {{-- Campus --}}     
                        <div class="section">
                            <label class="col-sm-12 form-control-label">1. ¿A qué campus perteneces?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <select class="sinborde" name="campus"
                                    data-placeholder="Selecciona un campus">
                                    <option label="Selecciona un campus"></option>
                                    <option {{ old('campus') == 'Campus Saltillo' ? 'selected' : '' }}
                                        value="Campus Saltillo">Campus Saltillo</option>
                                    <option {{ old('campus') == 'Campus Torreón' ? 'selected' : '' }}
                                        value="Campus Torreón">Campus Torreón</option>
                                    <option {{ old('campus') == 'Campus Monclova' ? 'selected' : '' }}
                                        value="Campus Monclova">Campus Monclova</option>
                                    <option {{ old('campus') == 'Campus Sabinas' ? 'selected' : '' }}
                                        value="Campus Sabinas">Campus Sabinas</option>
                                    <option {{ old('campus') == 'Campus Piedras Negras' ? 'selected' : '' }}
                                        value="Campus Piedras Negras">Campus Piedras Negras</option>
                                    <option {{ old('campus') == 'Campus Monterrey' ? 'selected' : '' }}
                                        value="Campus Monterrey">Campus Monterrey</option>
                                    <option {{ old('campus') == 'Campus Reynosa' ? 'selected' : '' }}
                                        value="Campus Reynosa">Campus Reynosa</option>
                                    <option {{ old('campus') == 'Campus Matamoros' ? 'selected' : '' }}
                                        value="Campus Matamoros">Campus Matamoros</option>
                                </select>
                            </div>
                        </div>
                        {{-- Sexo --}} 
                        <div class="section">       
                            <label class="col-sm-12 form-control-label">2. Sexo</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="sexo"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('sexo') == 'Femenino' ? 'selected' : '' }}
                                        value="Femenino">Femenino</option>
                                    <option {{ old('sexo') == 'Masculino' ? 'selected' : '' }}
                                        value="Masculino">Masculino</option>

                                </select>
                            </div>
                        </div>
                    
                        {{-- Edad --}}
                        <div class="section">
                        <label class="col-sm-4 form-control-label">3. Edad</label>
                         <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                         <input value="{{ old('edad') }}" name="edad"
                        class="sinborde" placeholder="Edad">
                         </div>
                        </div>
                        {{-- Ciudad --}}
                        <div class="section">
                        <label class="col-sm-4 form-control-label">4. Ciudad en la que vives</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input  value="{{ old('ciudad') }}" name="ciudad"
                                    class="sinborde" placeholder="Ciudad en la que vives">
                            </div>
                        </div>
                        {{-- Codigo postal --}}
                        <div class="section">
                        <label class="col-sm-4 form-control-label">5. Código postal</label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" value="{{ old('codigo_postal') }}" name="codigo_postal"
                                class="sinborde" placeholder="Código postal">
                        </div>
                    </div>
                        {{-- Pregunta 6 --}}
                        <div class="section">
                            <label class="col-sm-12 form-control-label">6. ¿Qué estas estudiando?. </label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="estudios_actuales"
                                    data-placeholder="Bachillerato">
                                    <option>Elíge una opción</option>
                                    <option >---- Bachillerato ----</option>
                                    <option {{ old('estudios_actuales') == 'Bachillerato 2 años' ? 'selected' : '' }}
                                    value="Bachillerato 2 años">Bachillerato 2 años</option>
                                    <option {{ old('estudios_actuales') == 'Bachillerato 3 años' ? 'selected' : '' }}
                                    value="Bachillerato 3 años">Bachillerato 3 años</option>
                                    <option {{ old('estudios_actuales') == 'Prepa abierta' ? 'selected' : '' }}
                                    value="Prepa abierta">Prepa abierta</option>
                                    <option >---- Licenciatura ----</option>
                                    <option {{ old('estudios_actuales') == 'Arquitectura' ? 'selected' : '' }}
                                    value="Arquitectura">Arquitectura</option>
                                    <option {{ old('estudios_actuales') == 'Contador Público' ? 'selected' : '' }}
                                    value="Contador Público">Contador Público</option>
                                    <option {{ old('estudios_actuales') == 'Ingeniería Industrial y de Sistemas' ? 'selected' : '' }}
                                    value="Ingeniería Industrial y de Sistemas">Ingeniería Industrial y de Sistemas</option>
                                    <option {{ old('estudios_actuales') == 'Ingeniería Mecánica en Procesos de Inyección' ? 'selected' : '' }}
                                    value="Ingeniería Mecánica en Procesos de Inyección">Ingeniería Mecánica en Procesos de Inyección</option>
                                    <option {{ old('estudios_actuales') == 'Ingeniería en Sistemas y Productividad Industrial' ? 'selected' : '' }}
                                    value="Ingeniería en Sistemas y Productividad Industrial">Ingeniería en Sistemas y Productividad Industrial</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Administración de Empresas' ? 'selected' : '' }}
                                    value="Licenciatura en Administración de Empresas">Licenciatura en Administración de Empresas</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Administración de Empresas Turísticas' ? 'selected' : '' }}
                                    value="Licenciatura en Administración de Empresas Turísticas">Licenciatura en Administración de Empresas Turísticas</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Administración de Recursos Humanos' ? 'selected' : '' }}
                                    value="Licenciatura en Administración de Recursos Humanos">Licenciatura en Administración de Recursos Humanos</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Comunicación' ? 'selected' : '' }}
                                    value="Licenciatura en Comunicación">Licenciatura en Comunicación</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Ciencias de la Educación' ? 'selected' : '' }}
                                    value="Licenciatura en Ciencias de la Educación">Licenciatura en Ciencias de la Educación</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Comercio Internacional' ? 'selected' : '' }}
                                    value="Licenciatura en Comercio Internacional">Licenciatura en Comercio Internacional</option>
                                   <option {{ old('estudios_actuales') == 'Licenciatura en Derecho' ? 'selected' : '' }}
                                    value="Licenciatura en Derecho">Licenciatura en Derecho</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Diseño Gráfico' ? 'selected' : '' }}
                                    value="Licenciatura en Diseño Gráfico">Licenciatura en Diseño Gráfico</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Gastronomía' ? 'selected' : '' }}
                                    value="Licenciatura en Gastronomía">Licenciatura en Gastronomía</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Idiomas' ? 'selected' : '' }}
                                    value="Licenciatura en Idiomas">Licenciatura en Idiomas</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Mercadotecnia Internacional' ? 'selected' : '' }}
                                    value="Licenciatura en Mercadotecnia Internacional">Licenciatura en Mercadotecnia Internacional</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Nutrición' ? 'selected' : '' }}
                                    value="Licenciatura en Nutrición">Licenciatura en Nutrición</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Psicología' ? 'selected' : '' }}
                                    value="Licenciatura en Psicología">Licenciatura en Psicología</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Administración Estratégica de Negocios' ? 'selected' : '' }}
                                    value="Licenciatura en Administración Estratégica de Negocios">Licenciatura en Administración Estratégica de Negocios</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Derecho con Acentuación en Negocios Internacionales' ? 'selected' : '' }}
                                    value="Licenciatura en Derecho con Acentuación en Negocios Internacionales">Licenciatura en Derecho con Acentuación en Negocios Internacionales</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Educación y Desarrollo' ? 'selected' : '' }}
                                    value="Licenciatura en Educación y Desarrollo">Licenciatura en Educación y Desarrollo</option>
                                    <option {{ old('estudios_actuales') == 'Licenciatura en Organización de Servicios Turísticos' ? 'selected' : '' }}
                                    value="Licenciatura en Organización de Servicios Turísticos">Licenciatura en Organización de Servicios Turísticos</option>
                                    <option>---- Postgrado ----</option>
                                    <option {{ old('estudios_actuales') == 'Especialidad en Relaciones Jurídico Laborales' ? 'selected' : '' }}
                                    value="Especialidad en Relaciones Jurídico Laborales">Especialidad en Relaciones Jurídico Laborales</option>
                                    <option {{ old('estudios_actuales') == 'Especialidad en Salud Ocupacional' ? 'selected' : '' }}
                                    value="Especialidad en Salud Ocupacional">Especialidad en Salud Ocupacional</option>
                                    <option {{ old('estudios_actuales') == 'Especialidad en Administración y Liderazgo' ? 'selected' : '' }}
                                    value="Especialidad en Administración y Liderazgo">Especialidad en Administración y Liderazgo</option>
                                    <option {{ old('estudios_actuales') == 'Especialidad en Gestión de Recursos Humanos' ? 'selected' : '' }}
                                    value="Especialidad en Gestión de Recursos Humanos">Especialidad en Gestión de Recursos Humanos</option>
                                    <option {{ old('estudios_actuales') == 'Especialidad en Manufactura Esbelta' ? 'selected' : '' }}
                                    value="Especialidad en Manufactura Esbelta">Especialidad en Manufactura Esbelta</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Administración y Liderazgo' ? 'selected' : '' }}
                                    value="Maestría en Administración y Liderazgo">Maestría en Administración y Liderazgo</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Docencia' ? 'selected' : '' }}
                                    value="Maestría en Docencia">Maestría en Docencia</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Derecho Fiscal' ? 'selected' : '' }}
                                    value="Maestría en Derecho Fiscal">Maestría en Derecho Fiscal</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Derecho Mercantil' ? 'selected' : '' }}
                                    value="Maestría en Derecho Mercantil">Maestría en Derecho Mercantil</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Educación' ? 'selected' : '' }}
                                    value="Maestría en Educación">Maestría en Educación</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Efectividad Organizacional' ? 'selected' : '' }}
                                    value="Maestría en Efectividad Organizacional">Maestría en Efectividad Organizacional</option>
                                   <option {{ old('estudios_actuales') == 'Maestría en Gestión Ambiental' ? 'selected' : '' }}
                                    value="Maestría en Gestión Ambiental">Maestría en Gestión Ambiental</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Gestión de Negocios de Manufactura' ? 'selected' : '' }}
                                    value="Maestría en Gestión de Negocios de Manufactura">Maestría en Gestión de Negocios de Manufactura</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Gestión de Servicios de Salud' ? 'selected' : '' }}
                                    value="Maestría en Gestión de Servicios de Salud">Maestría en Gestión de Servicios de Salud</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Impuestos' ? 'selected' : '' }}
                                    value="Maestría en Impuestos">Maestría en Impuestos</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Salud Ocupacional' ? 'selected' : '' }}
                                    value="Maestría en Salud Ocupacional">Maestría en Salud Ocupacional</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Sistema Penal Acusatorio' ? 'selected' : '' }}
                                    value="Maestría en Sistema Penal Acusatorio">Maestría en Sistema Penal Acusatorio</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Terapia Familiar' ? 'selected' : '' }}
                                    value="Maestría en Terapia Familiar">Maestría en Terapia Familiar</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Derecho Laboral' ? 'selected' : '' }}
                                    value="Maestría en Derecho Laboral">Maestría en Derecho Laboral</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Nutrición en Obesidad y Diabetes' ? 'selected' : '' }}
                                    value="Maestría en Nutrición en Obesidad y Diabetes">Maestría en Nutrición en Obesidad y Diabetes</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Mecanismos Alternativos de Solución de Controversias' ? 'selected' : '' }}
                                    value="Maestría en Mecanismos Alternativos de Solución de Controversias">Maestría en Mecanismos Alternativos de Solución de Controversias</option>
                                    <option {{ old('estudios_actuales') == 'Maestría en Gobernanza' ? 'selected' : '' }}
                                    value="Maestría en Gobernanza">Maestría en Gobernanza</option>
                                    <option {{ old('estudios_actuales') == 'Doctorado en Derecho' ? 'selected' : '' }}
                                    value="Doctorado en Derecho">Doctorado en Derecho</option>
                                    <option {{ old('estudios_actuales') == 'Doctorado en Planeación y Liderazgo Educativo' ? 'selected' : '' }}
                                    value="Doctorado en Planeación y Liderazgo Educativo">Doctorado en Planeación y Liderazgo Educativo</option>
                                </select>
                            </div>
                        </div>
                        {{-- PREGUNTA 7 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">7. ¿Cómo te enteraste de UANE? </label>
                         <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="llegada_UANE"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('llegada_UANE') == 'a) Recomendación directa' ? 'selected' : '' }}
                                value="a) Recomendación directa">a) Recomendación directa</option>
                            <option {{ old('llegada_UANE') == 'b) Publicidad tradicional' ? 'selected' : '' }}
                                value="b) Publicidad tradicional">b) Publicidad tradicional</option>
                            <option {{ old('llegada_UANE') == 'c)	Evento en las instalaciones' ? 'selected' : '' }}
                                value="c) Evento en las instalaciones">c)	Evento en las instalaciones</option>
                            <option {{ old('llegada_UANE') == 'd)	Me llamaron para darme información' ? 'selected' : '' }}
                                value="d) Me llamaron para darme información">d)	Me llamaron para darme información</option>
                            <option {{ old('llegada_UANE') == 'e)	Acudieron a tu escuela o lugar de trabajo' ? 'selected' : '' }}
                                value="e) Acudieron a tu escuela o lugar de trabajo">e)	Acudieron a tu escuela o lugar de trabajo</option>
                            <option {{ old('llegada_UANE') == 'f)	Redes sociales' ? 'selected' : '' }}
                                value="f) Redes sociales">f)	Redes sociales</option>
                        </select>
                    </div>
                    </div>
                        {{-- PREGUNTA 8 --}}
                        <div class="section">
                            <label class="col-sm-12 form-control-label">8. Alguno de tus siguientes parientes es o fue estudiante de UANE </label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <select class="sinborde" name="familiares_UANE"
                                data-placeholder="Elíge una opción">
                                <option label="Elíge una opción"></option>
                                <option {{ old('familiares_UANE') == 'a) Abuelos' ? 'selected' : '' }}
                                    value="a) Abuelos">a) Abuelos</option>
                                <option {{ old('familiares_UANE') == 'b)	Padres' ? 'selected' : '' }}
                                    value="b)	Padres">b) Padres</option>
                                <option {{ old('familiares_UANE') == 'c)	Hermanos' ? 'selected' : '' }}
                                    value="c)	Hermanos">c)	Hermanos</option>
                                <option {{ old('familiares_UANE') == 'd)	Tíos' ? 'selected' : '' }}
                                    value="d)	Tíos">d)	Tíos</option>
                                <option {{ old('familiares_UANE') == 'e)	Primos' ? 'selected' : '' }}
                                    value="e)	Primos">e)	Primos</option>
                                <option {{ old('familiares_UANEBP´SCA') == 'f)	Nadie' ? 'selected' : '' }}
                                    value="f)	Nadie">f)	Nadie</option>
                            </select>
                        </div>
                        </div>
                        {{-- PREGUNTA 9 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">9. Razón por la elegiste UANE </label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="eleccion_UANE"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('eleccion_UANE') == 'a) Tradición Familiar' ? 'selected' : '' }}
                                value="a) Tradición Familiar">a) Tradición Familiar</option>
                            <option {{ old('eleccion_UANE') == 'b)	Recomendación' ? 'selected' : '' }}
                                value="b) Recomendación">b) Recomendación</option>
                            <option {{ old('eleccion_UANE') == 'c) Tienen el programa que yo quería estudiar' ? 'selected' : '' }}
                                value="c) Tienen el programa que yo quería estudiar">c)	Tienen el programa que yo quería estudiar</option>
                            <option {{ old('eleccion_UANE') == 'd)	Los horarios accesibles' ? 'selected' : '' }}
                                value="d) Los horarios accesibles">d) Los horarios accesibles</option>
                            <option {{ old('eleccion_UANE') == 'e) Becas y facilidad de pagos' ? 'selected' : '' }}
                                value="e) Becas y facilidad de pagos">e) Becas y facilidad de pagos</option>
                            <option {{ old('eleccion_UANE') == 'f) Instalaciones' ? 'selected' : '' }}
                                value="f) Instalaciones">f) Instalaciones</option>
                            <option {{ old('eleccion_UANE') == 'g)	Actividades extracurriculares' ? 'selected' : '' }}
                                value="g) Actividades extracurriculares">g)	Actividades extracurriculares</option>
                            <option {{ old('eleccion_UANE') == 'h)	Ambiente' ? 'selected' : '' }}
                                value="h) Ambiente">h) Ambiente</option>
                            <option {{ old('eleccion_UANE') == 'i)	Promociones' ? 'selected' : '' }}
                                value="i) Promociones">i)	Promociones</option>
                            <option {{ old('eleccion_UANE') == 'j)	Otro' ? 'selected' : '' }}
                                value="j) Otro">j)	Otro</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                             <input  value="{{ old('OTROeleccion_UANE') }}" name="OTROeleccion_UANE"
                                class="sinborde" placeholder="Especifica aquí otro.">
                    </div>
                    </div>
                        {{-- PREGUNTA 10--}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">10. ¿Recomendarías UANE? </label>
                        <div class="col-sm-12">
                            <select class="sinborde" name="recomendacion"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('recomendacion') == 'a)	Sí' ? 'selected' : '' }}
                                value="a)	Sí">a)	Sí</option>
                            <option {{ old('recomendacion') == 'b)	No' ? 'selected' : '' }}
                                value="b)	No">b)	No </option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                        <input  type="text"value="{{ old('razon_NOrecomendacion') }}" name="razon_NOrecomendacion"
                                class="sinborde" placeholder="Especifica en caso de no">
                        </div>
                        </div>
                        {{-- PREGUNTA 11 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">11. Si recomendarías UANE, ¿Cuál sería la razón? </label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <input  value="{{ old('razon_recomendacion') }}" name="razon_recomendacion"
                        class="sinborde" placeholder="Escribe aquí respuesta"></option>
                    </div>
                    </div>
                        {{-- PREGUNTA 12 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">12. Consideraste otra opción educativa antes de elegir UANE</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="opciones_educativas"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('opciones_educativas') == 'a) Ninguna' ? 'selected' : '' }}
                                value="a) Ninguna">a) Ninguna</option>
                            <option {{ old('opciones_educativas') == 'b)	1 opción' ? 'selected' : '' }}
                                value="b)	1 opción">b) 1 opción</option>
                            <option {{ old('opciones_educativas') == 'c)	1 a 3 opciones' ? 'selected' : '' }}
                                value="c)	1 a 3 opciones">c)	1 a 3 opciones</option>
                            <option {{ old('opciones_educativas') == 'd)	Más de 3 opciones' ? 'selected' : '' }}
                            value="d)	Más de 3 opciones">d)	Más de 3 opciones</option>
                        </select>
                    </div>
                    </div>
                        {{-- PREGUNTA 13 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">13. Encontraste accesible y oportuna la información sobre UANE durante tu proceso de admisión</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="informacion_accesible"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('informacion_accesible') == 'a) Sí' ? 'selected' : '' }}
                                value="a) Sí">a) Sí</option>
                            <option {{ old('informacion_accesible') == 'b)	No' ? 'selected' : '' }}
                                value="b) No">b) No</option>
                        </select>
                    </div>
                        </div>
                        {{-- PREGUNTA 14 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">14. De los siguientes atributos, ¿cuál te parece que describe mejor a UANE?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="describe_UANE"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('describe_UANE') == 'a) Sistema de Becas' ? 'selected' : '' }}
                                value="a) Sistema de Becas">a) Sistema de Becas</option>
                            <option {{ old('describe_UANE') == 'b)	Sistema Modular Intensivo' ? 'selected' : '' }}
                                value="b) Sistema Modular Intensivo">b) Sistema Modular Intensivo</option>
                                <option {{ old('describe_UANE') == 'c) Profesores Competentes y Calificados' ? 'selected' : '' }}
                                value="c) Profesores Competentes y Calificados">c) Profesores Competentes y Calificados</option>
                            <option {{ old('describe_UANE') == 'd)	Instalaciones' ? 'selected' : '' }}
                                value="d) Instalaciones">d) Instalaciones</option>
                                <option {{ old('describe_UANE') == 'e) Oferta Académica' ? 'selected' : '' }}
                                value="e) Oferta Académica">e) Oferta Académica</option>
                            <option {{ old('describe_UANE') == 'f)	Actividades extracurriculares' ? 'selected' : '' }}
                                value="f) Actividades extracurriculares">f) Actividades extracurriculares</option>
                        </select>
                    </div>
                        </div>
                        {{-- PREGUNTA 15 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">15. Al pensar en la publicidad de UANE, ¿cuál frase viene a tu mente?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="frase_UANE"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('frase_UANE') == 'a) Llegó el momento' ? 'selected' : '' }}
                                value="a) Llegó el momento">a) Llegó el momento</option>
                            <option {{ old('frase_UANE') == 'b)	Becas ' ? 'selected' : '' }}
                                value="b) Becas ">b) Becas</option>
                                <option {{ old('frase_UANE') == 'c) Educación en línea' ? 'selected' : '' }}
                                value="c) Educación en línea">c) Educación en línea</option>
                            <option {{ old('frase_UANE') == 'd)	Somos UANE' ? 'selected' : '' }}
                                value="d)	Somos UANE">d)	Somos UANE</option>
                                <option {{ old('frase_UANE') == 'e) Osos UANE' ? 'selected' : '' }}
                                value="e) Osos UANE">e) Osos UANE</option>
                        </select>
                    </div>
                        </div>
                        
                    <h3 class="col-sm-12 form-control-label"> Queremos conocer sobre tu rutina... </h3>  
                                     
                        {{-- PREGUNTA 16 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">16. ¿Cuánto tiempo pasas en el tráfico al día?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="tiempo_trafico"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('tiempo_trafico') == 'a) Menos de una hora' ? 'selected' : '' }}
                                value="a) Menos de una hora">a) Menos de una hora</option>
                            <option {{ old('tiempo_trafico') == 'b)	De 1 a 2 horas ' ? 'selected' : '' }}
                                value="b) De 1 a 2 horas ">b) De 1 a 2 horas</option>
                                <option {{ old('tiempo_trafico') == 'c) Más de 3 horas ' ? 'selected' : '' }}
                                value="c) Más de 3 horas ">c) Más de 3 horas </option>
                        </select>
                    </div>
                </div>
                        {{-- PREGUNTA 17 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">17.	¿Con qué frecuencia escuchas la radio?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="frecuencia_radio"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('frecuencia_radio') == 'a) Nunca' ? 'selected' : '' }}
                                value="a) Nunca">a) Nunca</option>
                            <option {{ old('frecuencia_radio') == 'b)	Menos de una hora ' ? 'selected' : '' }}
                                value="b) Menos de una hora ">b) Menos de una hora</option>
                                <option {{ old('frecuencia_radio') == 'b)	Menos de 2 horas ' ? 'selected' : '' }}
                                value="b) Menos de 2 horas ">b) Menos de 2 horas</option>
                            <option {{ old('frecuencia_radio') == 'd) De 2 a 4 horas ' ? 'selected' : '' }}
                                value="d) De 2 a 4 horas ">d) De 2 a 4 horas </option>
                            <option {{ old('frecuencia_radio') == 'e) Más de 5 horas ' ? 'selected' : '' }}
                                value="e) Más de 5 horas ">e) Más de 5 horas </option>
                        </select>
                    </div>
                        </div>

                        {{-- PREGUNTA 18 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">18.	En caso de que escuches la radio, ¿en qué momento lo haces?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="momento_radio"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('momento_radio') == 'a) Por la mañana' ? 'selected' : '' }}
                                value="a) Por la mañana">a) Por la mañana</option>
                            <option {{ old('momento_radio') == 'b)	Por la tarde ' ? 'selected' : '' }}
                                value="b) Por la tarde ">b) Por la tarde</option>
                            <option {{ old('momento_radio') == 'c) Por la noche ' ? 'selected' : '' }}
                                value="c) Por la noche ">c) Por la noche </option>
                        </select>
                    </div>
                    </div>
                     {{-- PREGUNTA 19 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">19. Menciona tu estación/frecuencia favorita  </label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <input type="text" value="{{ old('estacion_frecuencia') }}" name="estacion_frecuencia"
                        class="sinborde" placeholder="Escribe aquí tu respuesta"></option>
                    </div>
                     </div>
                     {{-- PREGUNTA 20 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">20.	¿Con qué frecuencia ves la televisión?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="frecuencia_television"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('frecuencia_television') == 'a) Nunca' ? 'selected' : '' }}
                                value="a) Nunca">a) Nunca</option>
                            <option {{ old('frecuencia_television') == 'b)	Menos de 2 horas ' ? 'selected' : '' }}
                                value="b) Menos de 2 horas ">b) Menos de 2 horas</option>
                            <option {{ old('frecuencia_television') == 'c) De 2 a 4 horas ' ? 'selected' : '' }}
                                value="c) De 2 a 4 horas ">c) De 2 a 4 horas </option>
                            <option {{ old('frecuencia_television') == 'd) Más de 5 horas ' ? 'selected' : '' }}
                                value="d) Más de 5 horas ">d) Más de 5 horas </option>
                        </select>
                    </div>
                     </div>
                     {{-- PREGUNTA 21 --}}                        
                     <div class="section">
                        <label class="col-sm-12 form-control-label">21.	En caso de que veas la televisión, ¿en qué momento lo haces?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="momento_television"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('momento_television') == 'a) Por la mañana' ? 'selected' : '' }}
                                value="a) Por la mañana">a) Por la mañana</option>
                            <option {{ old('momento_television') == 'b)	Por la tarde ' ? 'selected' : '' }}
                                value="b) Por la tarde ">b) Por la tarde</option>
                            <option {{ old('momento_television') == 'c) Por la noche ' ? 'selected' : '' }}
                                value="c) Por la noche ">c) Por la noche </option>
                        </select>
                    </div>
                     </div>
                    {{-- PREGUNTA 22 --}}
                    <div class="section">
                    <label class="col-sm-12 form-control-label">22.	¿Qué ves en la televisión generalmente?</label>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <select class="sinborde" name="television"
                        data-placeholder="Elíge una opción">
                        <option label="Elíge una opción"></option>
                        <option {{ old('television') == 'a) Televisión abierta' ? 'selected' : '' }}
                            value="a) Televisión abierta">a) Televisión abierta</option>
                        <option {{ old('television') == 'b)	Televisión por cable ' ? 'selected' : '' }}
                            value="b) Televisión por cable ">b) Televisión por cable</option>
                    </select>
                </div>
                    </div>
                 {{-- PREGUNTA 23 --}}
                 <div class="section">
                        <label class="col-sm-12 form-control-label">23. Menciona tu canal favorito  </label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <input value="{{ old('canal') }}" name="canal"
                        class="sinborde" placeholder="Escribe aquí tu respuesta"></option>
                    </div>
                 </div>
                 {{-- PREGUNTA 24 --}}
                 <div class="section">
                        <label class="col-sm-12 form-control-label">24.	¿Con qué frecuencia lees el periódico?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="frecuencia_periodico"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('frecuencia_periodico') == 'a) Nunca' ? 'selected' : '' }}
                                value="a) Nunca">a) Nunca</option>
                            <option {{ old('frecuencia_periodico') == 'b)	Entre semana ' ? 'selected' : '' }}
                                value="b) Entre semana ">b) Entre semana</option>
                            <option {{ old('frecuencia_periodico') == 'c) Todos los días ' ? 'selected' : '' }}
                                value="c) Todos los días ">c) Todos los días </option>
                            <option {{ old('frecuencia_periodico') == 'd) Sólo los fines de semana ' ? 'selected' : '' }}
                                value="d) Sólo los fines de semana ">d) Sólo los fines de semana </option>
                        </select>
                    </div>
                 </div>
                     {{-- PREGUNTA 25 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">25. ¿Cuál periódico suele ser el de tu preferencia?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <input value="{{ old('periodico') }}" name="periodico"
                        class="sinborde" placeholder="Escribe aquí tu respuesta"></option>
                    </div>
                     </div> 
                     {{-- PREGUNTA 26 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">26.	Marcando con una X, compártenos con qué frecuencia usas los siguientes medios:</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Redes sociales(Facebook, Twitter, Instagram...)</u></h5>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Nunca" {{ old('uso_redes') == 'Nunca' ? 'checked' : '' }} name="uso_redes" id="uso_redes" type="radio" >
                                <span>Nunca</span>
                                </h5>
                        </div>
                            <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="Casi Nunca" {{ old('uso_redes') == 'Casi Nunca' ? 'checked' : '' }} name="uso_redes" id="uso_redes" type="radio" >
                                <span>Casi Nunca</span>
                                </h5>
                            </div>

                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Casi Siempre" {{ old('uso_redes') == 'Casi Siempre' ? 'checked' : '' }} name="uso_redes" id="uso_redes" type="radio" >
                                <span>Casi Siempre</span>
                                </h5>
                            </div>

                            <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="Siempre" {{ old('uso_redes') == 'Siempre' ? 'checked' : '' }} name="uso_redes" id="26a" type="radio" >
                                <span>Siempre</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Periódicos o revistas</u></h5>
                        <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="Nunca" {{ old('uso_periodico') == 'Nunca' ? 'checked' : '' }} name="uso_periodico" id="26b" type="radio" >
                                <span>Nunca</span>
                                </h5>
                        </div>
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Casi Nunca" {{ old('uso_periodico') == 'Casi Nunca' ? 'checked' : '' }} name="uso_periodico" id="26b" type="radio" >
                                <span>Casi Nunca</span>
                                </h5>
                            </div>

                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Casi Siempre" {{ old('uso_periodico') == 'Casi Siempre' ? 'checked' : '' }} name="uso_periodico" id="26b" type="radio" >
                                <span>Casi Siempre</span>
                                </h5>
                            </div>

                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Siempre" {{ old('uso_periodico') == 'Siempre' ? 'checked' : '' }} name="uso_periodico" id="26b" type="radio" >
                                <span>Siempre</span>
                                </h5>
                            </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Televisión</u></h5>
                            <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Nunca" {{ old('uso_tv') == 'Nunca' ? 'checked' : '' }} name="uso_tv" id="26c" type="radio" >
                                    <span>Nunca</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Casi Nunca" {{ old('uso_tv') == 'Casi Nunca' ? 'checked' : '' }} name="uso_tv" id="26c" type="radio" >
                                    <span>Casi Nunca</span>
                                    </h5>
                                </div>
    
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Casi Siempre" {{ old('uso_tv') == 'Casi Siempre' ? 'checked' : '' }} name="uso_tv" id="26c" type="radio" >
                                    <span>Casi Siempre</span>
                                    </h5>
                                </div>
    
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Siempre" {{ old('uso_tv') == 'Siempre' ? 'checked' : '' }} name="uso_tv" id="26c" type="radio" >
                                    <span>Siempre</span>
                                    </h5>
                                </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Radio</u></h5>
                                <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="Nunca" {{ old('uso_radio') == 'Nunca' ? 'checked' : '' }} name="uso_radio" id="26d" type="radio" >
                                        <span>Nunca</span>
                                        </h5>
                                </div>
                                    <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="Casi Nunca" {{ old('uso_radio') == 'Casi Nunca' ? 'checked' : '' }} name="uso_radio" id="26d" type="radio" >
                                        <span>Casi Nunca</span>
                                        </h5>
                                    </div>
        
                                    <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="Casi Siempre" {{ old('uso_radio') == 'Casi Siempre' ? 'checked' : '' }} name="uso_radio" id="26d" type="radio" >
                                        <span>Casi Siempre</span>
                                        </h5>
                                    </div>
        
                                    <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="Siempre" {{ old('uso_radio') == 'Siempre' ? 'checked' : '' }} name="uso_radio" id="26d" type="radio" >
                                        <span>Siempre</span>
                                        </h5>
                                    </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- Cine</u></h5>
                                    <div class="col-md-2">
                                            <h5 class="radio">
                                            <input value="Nunca" {{ old('uso_cine') == 'Nunca' ? 'checked' : '' }} name="uso_cine" id="26e" type="radio" >
                                            <span>Nunca</span>
                                            </h5>
                                    </div>
                                        <div class="col-md-2">
                                            <h5 class="radio">
                                            <input value="Casi Nunca" {{ old('uso_cine') == 'Casi Nunca' ? 'checked' : '' }} name="uso_cine" id="26e" type="radio" >
                                            <span>Casi Nunca</span>
                                            </h5>
                                        </div>
            
                                        <div class="col-md-2">
                                            <h5 class="radio">
                                            <input value="Casi Siempre" {{ old('uso_cine') == 'Casi Siempre' ? 'checked' : '' }} name="uso_cine" id="26e" type="radio" >
                                            <span>Casi Siempre</span>
                                            </h5>
                                        </div>
            
                                        <div class="col-md-2">
                                            <h5 class="radio">
                                            <input value="Siempre" {{ old('uso_cine') == 'Siempre' ? 'checked' : '' }} name="uso_cine" id="26e" type="radio" >
                                            <span>Siempre</span>
                                            </h5>
                                        </div>
                                </div>
                     </div>
                        {{-- PREGUNTA 28 --}}
                         <div class="section">
                            <label class="col-sm-12 form-control-label">27. ¿Qué cine visitas usualmente?.</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="cine"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('cine') == 'a) Cinepolis' ? 'selected' : '' }}
                                        value="a) Cinepolis">a) Cinepolis</option>
                                    <option {{ old('cine') == 'b)	Cinemex ' ? 'selected' : '' }}
                                        value="b) Cinemex ">b) Cinemex</option>
                                    <option {{ old('cine') == 'c) Otro ' ? 'selected' : '' }}
                                        value="c) Otro ">c) Otro </option>
                                </select>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <input value="{{ old('cine_otro') }}" name="cine_otro"
                            class="sinborde" placeholder="Mencióna otro"></option>
                         </div> 
                        </div>
                     {{-- PREGUNTA 29 --}}
                     <div class="section">
                            <label class="col-sm-12 form-control-label">28.	¿Con que frecuencia visitas el cine?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <select class="sinborde" name="frecuencia_cine"
                                data-placeholder="Elíge una opción">
                                <option label="Elíge una opción"></option>
                                <option {{ old('frecuencia_cine') == 'a) Nunca' ? 'selected' : '' }}
                                    value="a) Nunca">a) Nunca</option>
                                <option {{ old('frecuencia_cine') == 'b)	Una vez por semana  ' ? 'selected' : '' }}
                                    value="b) Una vez por semana  ">b) Una vez por semana </option>
                                <option {{ old('frecuencia_cine') == 'c) Más de 2 veces por semana ' ? 'selected' : '' }}
                                    value="c) Más de 2 veces por semana ">c) Más de 2 veces por semana </option>
                                <option {{ old('frecuencia_cine') == 'd) Una vez al mes ' ? 'selected' : '' }}
                                    value="d) Una vez al mes  ">d) Una vez al mes  </option>
                                <option {{ old('frecuencia_cine') == 'e) De 2 a 4 veces al año ' ? 'selected' : '' }}
                                    value="e) De 2 a 4 veces al año  ">e) De 2 a 4 veces al año  </option>
                            </select>
                        </div>
                     </div>
                        <h3 class="col-sm-12 form-control-label"> Contemplando la calificación de 1 al 6, siendo el 1 un uso mayor y el 6 la mínima.</h3>
                       {{-- PREGUNTA 26 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">29. En orden  de mayor uso a menor¿Cuáles medios digitales utilizas más?.</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Facebook</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('uso_FACEBOOK') == '1' ? 'checked' : '' }} name="uso_FACEBOOK" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('uso_FACEBOOK') == '2' ? 'checked' : '' }} name="uso_FACEBOOK" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('uso_FACEBOOK') == '3' ? 'checked' : '' }} name="uso_FACEBOOK" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('uso_FACEBOOK') == '4' ? 'checked' : '' }} name="uso_FACEBOOK" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('uso_FACEBOOK') == '5' ? 'checked' : '' }} name="uso_FACEBOOK" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('uso_FACEBOOK') == '6' ? 'checked' : '' }} name="uso_FACEBOOK" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Twitter</u></h5>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="1" {{ old('uso_Twitter') == '1' ? 'checked' : '' }} name="uso_Twitter" id="1" type="radio" >
                            <span>1 más</span>
                            </h5>
                    </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="2" {{ old('uso_Twitter') == '2' ? 'checked' : '' }} name="uso_Twitter" id="2" type="radio" >
                            <span>2</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="3" {{ old('uso_Twitter') == '3' ? 'checked' : '' }} name="uso_Twitter" id="3" type="radio" >
                            <span>3</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="4" {{ old('uso_Twitter') == '4' ? 'checked' : '' }} name="uso_Twitter" id="4" type="radio" >
                            <span>4</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="5" {{ old('uso_Twitter') == '5' ? 'checked' : '' }} name="uso_Twitter" id="5" type="radio" >
                            <span>5</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="6" {{ old('uso_Twitter') == '6' ? 'checked' : '' }} name="uso_Twitter" id="6" type="radio" >
                            <span>6 menos</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Instagram</u></h5>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('uso_Instagram') == '1' ? 'checked' : '' }} name="uso_Instagram" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('uso_Instagram') == '2' ? 'checked' : '' }} name="uso_Instagram" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('uso_Instagram') == '3' ? 'checked' : '' }} name="uso_Instagram" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('uso_Instagram') == '4' ? 'checked' : '' }} name="uso_Instagram" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('uso_Instagram') == '5' ? 'checked' : '' }} name="uso_Instagram" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('uso_Instagram') == '6' ? 'checked' : '' }} name="uso_Instagram" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Youtube</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('uso_Youtube') == '1' ? 'checked' : '' }} name="uso_Youtube" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('uso_Youtube') == '2' ? 'checked' : '' }} name="uso_Youtube" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('uso_Youtube') == '3' ? 'checked' : '' }} name="uso_Youtube" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('uso_Youtube') == '4' ? 'checked' : '' }} name="uso_Youtube" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('uso_Youtube') == '5' ? 'checked' : '' }} name="uso_Youtube" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('uso_Youtube') == '6' ? 'checked' : '' }} name="uso_Youtube" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Snapchat</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('uso_Snapchat') == '1' ? 'checked' : '' }} name="uso_Snapchat" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('uso_Snapchat') == '2' ? 'checked' : '' }} name="uso_Snapchat" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('uso_Snapchat') == '3' ? 'checked' : '' }} name="uso_Snapchat" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('uso_Snapchat') == '4' ? 'checked' : '' }} name="uso_Snapchat" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('uso_Snapchat') == '5' ? 'checked' : '' }} name="uso_Snapchat" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('uso_Snapchat') == '6' ? 'checked' : '' }} name="uso_Snapchat" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- Otro</u></h5>
                                    <div class="col-md-1">
                                        <h5 class="radio">
                                        <input value="1" {{ old('uso_otro') == '1' ? 'checked' : '' }} name="uso_otro" id="1" type="radio" >
                                        <span>1 más</span>
                                        </h5>
                                </div>
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="2" {{ old('uso_otro') == '2' ? 'checked' : '' }} name="uso_otro" id="2" type="radio" >
                                        <span>2</span>
                                        </h5>
                                    </div>
            
                                    <div class="col-md-1">
                                        <h5 class="radio">
                                        <input value="3" {{ old('uso_otro') == '3' ? 'checked' : '' }} name="uso_otro" id="3" type="radio" >
                                        <span>3</span>
                                        </h5>
                                    </div>
            
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="4" {{ old('uso_otro') == '4' ? 'checked' : '' }} name="uso_otro" id="4" type="radio" >
                                        <span>4</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-1">
                                        <h5 class="radio">
                                        <input value="5" {{ old('uso_otro') == '5' ? 'checked' : '' }} name="uso_otro" id="5" type="radio" >
                                        <span>5</span>
                                        </h5>
                                    </div>
            
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="6" {{ old('uso_otro') == '6' ? 'checked' : '' }} name="uso_otro" id="6" type="radio" >
                                        <span>6 menos</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4 form-control-label">Si usas otra red social.</h5>
                                <input  class="sinborde" value="{{ old('otro') }}" name="otro"  placeholder="Especifica aquí.">
                                </div>
                     </div> 
                        {{-- PREGUNTA 30 --}}
                         <div class="section">
                            <label class="col-sm-12 form-control-label">30. Ordena del 1 (mayor) al 3(menor) los siguientes valores de marca:</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- UANE es Innovación</u></h5>
                            <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="1" {{ old('v_innovacion') == '1' ? 'checked' : '' }} name="v_innovacion" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('v_innovacion') == '2' ? 'checked' : '' }} name="v_innovacion" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
    
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="3" {{ old('v_innovacion') == '3' ? 'checked' : '' }} name="v_innovacion" id="3" type="radio" >
                                    <span>3 menos</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- UANE es Oportunidad</u></h5>
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('v_oportunidad') == '1' ? 'checked' : '' }} name="v_oportunidad" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="2" {{ old('v_oportunidad') == '2' ? 'checked' : '' }} name="v_oportunidad" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3" {{ old('v_oportunidad') == '3' ? 'checked' : '' }} name="v_oportunidad" id="3" type="radio" >
                                <span>3 menos</span>
                                </h5>
                            </div>
                        </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- UANE es Inspiración</u></h5>
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('v_inspiracion') == '1' ? 'checked' : '' }} name="v_inspiracion" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="2" {{ old('v_inspiracion') == '2' ? 'checked' : '' }} name="v_inspiracion" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3" {{ old('v_inspiracion') == '3' ? 'checked' : '' }} name="v_inspiracion" id="3" type="radio" >
                                <span>3 menos</span>
                                </h5>
                            </div>
                        </div>
                         </div> 
                        {{-- PREGUNTA 31 --}}
                         <div class="section">
                            <label class="col-sm-12 form-control-label">31. Ordena del 1 (mayor) al 4(menor) los siguientes atributos de marca:</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es moderna</u></h5>
                                <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="1" {{ old('a_moderna') == '1' ? 'checked' : '' }} name="a_moderna" id="1" type="radio" >
                                        <span>1 más</span>
                                        </h5>
                                </div>
                                    <div class="col-md-2">
                                        <h5 class="radio ">
                                        <input value="2" {{ old('a_moderna') == '2' ? 'checked' : '' }} name="a_moderna" id="2" type="radio" >
                                        <span>2</span>
                                        </h5>
                                    </div>
        
                                    <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="3" {{ old('a_moderna') == '3' ? 'checked' : '' }} name="a_moderna" id="3" type="radio" >
                                        <span>3 </span>
                                        </h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="4" {{ old('a_moderna') == '4' ? 'checked' : '' }} name="a_moderna" id="4" type="radio" >
                                        <span>4 menos</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es comprometida</u></h5>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="1" {{ old('a_comprometida') == '1' ? 'checked' : '' }} name="a_comprometida" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('a_comprometida') == '2' ? 'checked' : '' }} name="a_comprometida" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="3" {{ old('a_comprometida') == '3' ? 'checked' : '' }} name="a_comprometida" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="4" {{ old('a_comprometida') == '4' ? 'checked' : '' }} name="a_comprometida" id="4" type="radio" >
                                    <span>4 menos</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es desafiante</u></h5>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="1" {{ old('a_desafiante') == '1' ? 'checked' : '' }} name="a_desafiante" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('a_desafiante') == '2' ? 'checked' : '' }} name="a_desafiante" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="3" {{ old('a_desafiante') == '3' ? 'checked' : '' }} name="a_desafiante" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="4" {{ old('a_desafiante') == '4' ? 'checked' : '' }} name="a_desafiante" id="4" type="radio" >
                                    <span>4 menos</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es humanitaria</u></h5>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="1" {{ old('a_humanitaria') == '1' ? 'checked' : '' }} name="a_humanitaria" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('a_humanitaria') == '2' ? 'checked' : '' }} name="a_humanitaria" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="3" {{ old('a_humanitaria') == '3' ? 'checked' : '' }} name="a_humanitaria" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="4" {{ old('a_humanitaria') == '4' ? 'checked' : '' }} name="a_humanitaria" id="4" type="radio" >
                                    <span>4 menos</span>
                                    </h5>
                                </div>
                            </div>
                             </div> 
                        {{-- PREGUNTA 32 --}}
                         <div class="section">
                            <label class="col-sm-12 form-control-label">32. Ordena del 1 (mayor) al 3(menor) los siguientes beneficios de marca:</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es calidad académica</u></h5>
                                <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="1" {{ old('b_calidad') == '1' ? 'checked' : '' }} name="b_calidad" id="1" type="radio" >
                                        <span>1 más</span>
                                        </h5>
                                </div>
                                    <div class="col-md-2">
                                        <h5 class="radio ">
                                        <input value="2" {{ old('b_calidad') == '2' ? 'checked' : '' }} name="b_calidad" id="2" type="radio" >
                                        <span>2</span>
                                        </h5>
                                    </div>
        
                                    <div class="col-md-2">
                                        <h5 class="radio">
                                        <input value="3" {{ old('b_calidad') == '3' ? 'checked' : '' }} name="b_calidad" id="3" type="radio" >
                                        <span>3 menos</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es accesibilidad</u></h5>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="1" {{ old('b_accesibilidad') == '1' ? 'checked' : '' }} name="b_accesibilidad" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('b_accesibilidad') == '2' ? 'checked' : '' }} name="b_accesibilidad" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="3" {{ old('b_accesibilidad') == '3' ? 'checked' : '' }} name="b_accesibilidad" id="3" type="radio" >
                                    <span>3 menos</span>
                                    </h5>
                                </div>
                            </div>
                                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- UANE es éxito personal</u></h5>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="1" {{ old('b_exito') == '1' ? 'checked' : '' }} name="b_exito" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('b_exito') == '2' ? 'checked' : '' }} name="b_exito" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="3" {{ old('b_exito') == '3' ? 'checked' : '' }} name="b_exito" id="3" type="radio" >
                                    <span>3 menos</span>
                                    </h5>
                                </div>
                            </div>
                             </div> 
                         <h3 class="col-sm-12 form-control-label"> Pensando en la publicidad que recibiste antes de ingresar a UANE</h3>
                       {{-- PREGUNTA 33 --}}
                     <div class="section">
                            <label class="col-sm-12 form-control-label">33.	¿Qué tan diferente es la publicidad utilizada en UANE comparada con otras ofertas escolares (universidades)?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <select class="sinborde" name="diferencia_publicitaria"
                                data-placeholder="Elíge una opción">
                                <option label="Elíge una opción"></option>
                                <option {{ old('diferencia_publicitaria') == 'a) Totalmente diferente' ? 'selected' : '' }}
                                    value="a) Totalmente diferente">a) Totalmente diferente</option>
                                <option {{ old('diferencia_publicitaria') == 'b)	Con varias diferencias con otras  ' ? 'selected' : '' }}
                                    value="b) Con varias diferencias con otras  ">b) Con varias diferencias con otras </option>
                                <option {{ old('diferencia_publicitaria') == 'c) Poco diferente ' ? 'selected' : '' }}
                                    value="c) Poco diferente ">c) Poco diferente </option>
                                <option {{ old('diferencia_publicitaria') == 'd) Nada diferente ' ? 'selected' : '' }}
                                    value="d) Nada diferente  ">d) Nada diferente  </option>
                            </select>
                        </div>
                         </div>
                        {{-- PREGUNTA 34 --}}
                     <div class="section">
                            <label class="col-sm-12 form-control-label">34.	¿Qué tan creíble es la publicidad de UANE?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <select class="sinborde" name="credibilidad_publicitaria"
                                data-placeholder="Elíge una opción">
                                <option label="Elíge una opción"></option>
                                <option {{ old('credibilidad_publicitaria') == 'a) Muy creíble' ? 'selected' : '' }}
                                    value="a) Muy creíble">a) Muy creíble</option>
                                <option {{ old('credibilidad_publicitaria') == 'b)	Creíble  ' ? 'selected' : '' }}
                                    value="b) Creíble ">b) Creíble </option>
                                <option {{ old('credibilidad_publicitaria') == 'c) Medianamente creíble ' ? 'selected' : '' }}
                                    value="c) Medianamente creíble ">c) Medianamente creíble </option>
                                <option {{ old('credibilidad_publicitaria') == 'd) Nada creíble ' ? 'selected' : '' }}
                                    value="d) Nada creíble  ">d) Nada creíble  </option>
                            </select>
                        </div>
                         </div>
                        {{-- PREGUNTA 35 --}}
                     <div class="section">
                            <label class="col-sm-12 form-control-label">35.	¿Qué tan relevante es la publicidad de UANE?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <select class="sinborde" name="relevancia_publicitaria"
                                data-placeholder="Elíge una opción">
                                <option label="Elíge una opción"></option>
                                <option {{ old('relevancia_publicitaria') == 'a) Muy relevante' ? 'selected' : '' }}
                                    value="a) Muy relevante">a) Muy relevante</option>
                                <option {{ old('relevancia_publicitaria') == 'b) Relevante  ' ? 'selected' : '' }}
                                    value="b) Relevante ">b) Relevante </option>
                                <option {{ old('relevancia_publicitaria') == 'c) Medianamente relevante ' ? 'selected' : '' }}
                                    value="c) Medianamente relevante ">c) Medianamente relevante </option>
                                <option {{ old('relevancia_publicitaria') == 'd) Nada relevante ' ? 'selected' : '' }}
                                    value="d) Nada relevante  ">d) Nada relevante  </option>
                            </select>
                        </div>
                         </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <div class="form-layout-footer mg-t-30">
                            <button class="buttonGuardar">Enviar encuesta</button>
                            </div>
                        </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
                        </div>
                    </div>
                 </div>
              </section>
                </form>
            </div><!-- col-6 -->
        </div>
    </div>
        </div><!-- row -->
    </div>
</div>
@endsection
@push('css')
<link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">

@endpush
@push('css')
<style>
h2.linea {
    border: #40BAB3 2px dashed;
    border-radius: 8px;
    }
</style>
@endpush
@push('css')
<style>
.sinborde {
      border: 0;
      border-radius: 5px;
      height:auto; 
    }
</style>
@endpush
@push('css')
<style>
    div.section {
      background-color: paleturquoise;
      margin-top: 8px;
      margin-bottom: 8px;
      padding: 3px 10px;
      border:  #40BAB3 5px double;
      border-radius: 8px;
      float: left;
      width: 100%;
      height: auto;
    }
    
    div.section img {
        width: 100%;
      height: auto;
    }
    
    </style>
@endpush
@push('css')
<style>
.buttonGuardar{
    background-color: whitesmoke;
    border:  #40BAB3 2px dashed;
    border-radius: 5px;
    color:black;
    height:auto; 
    width:33.3%; 
    margin: 5px -15%; 
    position:relative;
    top:50%; 
    left:50%;
    }
</style>
@endpush
@push('js')



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

    $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        changeYear: true,
        changeMonth: true,
        dropdownCssClass: 'hover-success',
        monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        dayNamesMin: ['Do.','Lu.','Ma.','Mi.','Ju.','Vi.','Sa.'],
        yearRange: '-60: +1', 
        // dateFormat: 'dd/mm/yy'
    });


    if ($('#check_otro').is(':checked')) {
        $('#otro_check').show();
    }else{
        $('#otro_check').hide();
    }
    

    $("#check_otro").click(function(){
        if ($(this).is(':checked')) {
            $('#otro_check').fadeIn();
        }else{
            $('#otro_check').fadeOut();
        }
    })

    


      
</script>


@endpush

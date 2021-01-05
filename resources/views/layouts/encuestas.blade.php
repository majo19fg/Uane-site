@extends('index')
@section('title', 'Encuesta de medios')

@section('meta-desc')

@section('content')
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/46banner.jpg">
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

<div class="br-pagebody" >
    <div class="br-section-wrapper">
        <div class="row mg-t-10"  style="background-color:#73243C">
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
                                    <p class="mg-b-0 tx-gray">Aviso de privacidad. Este cuestionario y el tratamiento de los datos proporcionados por los alumnos serán utilizados para efectos académicos, administrativos y estadísticos dentro de la universidad, por lo que no serán compartidos ni distribuidos con ningún ente externo a la organización ni con fines ajenos al efecto informativo.</p>
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
              <section class="sinborde" >
                 <div class="container">
                    <div class="section-content" >
                        <div class="col-md-12">  
                       <center> 
                        <div class="linea">
                        <div class="col-md-12">                                
                        <h2 class="text-uppercase  font-weight-600 mt-0 font-28 linea" style="color: white"> Encuesta Socioeconómica</h2> 
                        </div>
                        </div>
                    </center>
                        <div class="col-md-12">     
                        <p class="mg-b-0"><h5 style="color: white">Te agradecemos tu atención e interés por contestar esta encuesta, te tomará 15 minutos hacerla y nos proporcionará información muy valiosa para hacer mejor nuestro trabajo. </h5></p>
                        <p class="mg-b-0"><h5 style="color: white">Es indispensable ser alumno de nuevo ingreso.</h5></p>
                        <p class="mg-b-0"><h5 style="color: white">Los datos que expongas serán considerados como anónimos y se utilizarán solamente con fines académicos y de investigación. </h5></p>
                        <p class="mg-b-0"><h5 style="color: white">Puedes consultar nuestro aviso de privacidad en
                        <a href="https://www.uane.edu.mx/somos-uane/T%C3%A9rminosyCondiciones"><b><u style="color: #FF4337">www.uane.edu.mx/somos-uane/TérminosyCondiciones</u></b></a>. </h5></p>
                        <p class="mg-b-0" ><h5 style="color: white">Muchas gracias por tu apoyo. </h5></p>
                        </div>
                    </br>
                    {{-- Email --}} 
                    <div class="section">
                    <label class="col-sm-4 form-control-label">Email</label>
                         <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                         <input class="sinborde" value="{{ old('email') }}" name="email"
                         placeholder="Email">
                         </div>
                    </div>
                    {{-- Matrícula --}} 
                    <div class="section">
                    <label class="col-sm-4 form-control-label">Matrícula</label>
                         <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                         <input class="sinborde" value="{{ old('matricula') }}" name="matricula"
                         placeholder="Matrícula">
                         </div>
                    </div>                    
                    {{-- Edad --}} 
                    <div class="section">
                    <label class="col-sm-4 form-control-label">Edad</label>
                         <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="edad"
                            data-placeholder="Elige una opción">
                            <option label="Elige una opción"></option>
                            <option {{ old('edad') == 'Menos de 15' ? 'selected' : '' }}
                                value="Menos de 15">Menos de 15</option>
                            <option {{ old('edad') == '15 a 20' ? 'selected' : '' }}
                                value="15 a 20">15 a 20</option>
                            <option {{ old('edad') == '21 a 25' ? 'selected' : '' }}
                                value="21 a 25">21 a 25</option>
                            <option {{ old('edad') == '26 a 30' ? 'selected' : '' }}
                                value="26 a 30">26 a 30</option>
                            <option {{ old('edad') == '31 a 35' ? 'selected' : '' }}
                                value="31 a 35">31 a 35</option>
                            <option {{ old('edad') == 'Más de 36' ? 'selected' : '' }}
                                value="Más de 36">Más de 36</option>
                        </select>
                         </div>
                    </div>
                    {{-- Ciudad --}} 
                    <div class="section">
                    <label class="col-sm-4 form-control-label">Ciudad donde vive actualmente:</label>
                         <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                         <input class="sinborde" value="{{ old('ciudad') }}" name="ciudad"
                         placeholder="Ciudad">
                         </div>
                    </div>

                        {{-- Campus --}}     
                        <div class="section">
                            <label class="col-sm-12 form-control-label">1.   Campus origen:</label>
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
                            <label class="col-sm-12 form-control-label">2. Modalidad:</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="modalidad"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('modalidad') == 'Presencial' ? 'selected' : '' }}
                                        value="Presencial">Presencial</option>
                                    <option {{ old('modalidad') == 'En Línea' ? 'selected' : '' }}
                                        value="En Línea">En Línea</option>

                                </select>
                            </div>
                        </div>
                        {{-- Sexo --}} 
                        <div class="section">       
                            <label class="col-sm-12 form-control-label">3. Sexo:</label>
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
                        {{-- Estado Civil --}} 
                        <div class="section">       
                            <label class="col-sm-12 form-control-label">4.  Estado civil:</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="estado_civil"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('estado_civil') == 'Soltero' ? 'selected' : '' }}
                                        value="Soltero">Soltero</option>
                                    <option {{ old('estado_civil') == 'Casado' ? 'selected' : '' }}
                                        value="Casado">Casado</option>
                                    <option {{ old('estado_civil') == 'Viudo' ? 'selected' : '' }}
                                        value="Viudo">Viudo</option>
                                    <option {{ old('estado_civil') == 'Unión Libre' ? 'selected' : '' }}
                                        value="Unión Libre">Unión Libre</option>
                                    <option {{ old('estado_civil') == 'Divorciado' ? 'selected' : '' }}
                                        value="Divorciado">Divorciado</option>                                        

                                </select>
                            </div>
                        </div>   
                        {{-- carrera --}}
                        <div class="section">
                            <label class="col-sm-12 form-control-label">5. ¿Qué estas estudiando?. </label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="estudios_actuales" style="max-width:200px"
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
                        {{-- Hijos --}} 
                        <div class="section">       
                            <label class="col-sm-12 form-control-label">6.  ¿Tienes hijos?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="hijos_sino"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('hijos_sino') == 'Si' ? 'selected' : '' }}
                                        value="Si">Sí</option>
                                    <option {{ old('hijos_sino') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>
                                </select>
                            </div>
                        </div>
                        {{-- CuantosHijos --}} 
                        <div class="section">       
                            <label class="col-sm-12 form-control-label">6.1  ¿Cuántos hijos tienes?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="hijos"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('hijos') == '0' ? 'selected' : '' }}
                                        value="0">No tengo hijos</option>
                                    <option {{ old('hijos') == '1' ? 'selected' : '' }}
                                        value="1">1</option>
                                    <option {{ old('hijos') == '2' ? 'selected' : '' }}
                                        value="2">2</option>
                                    <option {{ old('hijos') == '3' ? 'selected' : '' }}
                                        value="3">3</option>   
                                    <option {{ old('hijos') == '4 o más' ? 'selected' : '' }}
                                        value="4 o más">4 o más</option>                                                                                
                                </select>
                            </div>
                        </div>
                        {{-- ResponsableHijos --}} 
                        <div class="section">       
                            <label class="col-sm-12 form-control-label">6.2   ¿Quién se responsabiliza económicamente de tu(s) hijo(s)?</label>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="responsabiliza_economicamente"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('responsabiliza_economicamente') == 'No tengo hijos' ? 'selected' : '' }}
                                    value="No tengo hijos">No tengo hijos</option>
                                    <option {{ old('responsabiliza_economicamente') == 'Yo' ? 'selected' : '' }}
                                        value="Yo">Yo</option>
                                    <option {{ old('responsabiliza_economicamente') == 'pareja' ? 'selected' : '' }}
                                        value="pareja">Mi pareja</option>
                                    <option {{ old('responsabiliza_economicamente') == 'pareja&yo' ? 'selected' : '' }}
                                        value="pareja&yo">Mi pareja y yo</option>
                                    <option {{ old('responsabiliza_economicamente') == 'padres' ? 'selected' : '' }}
                                        value="padres">Mi mamá / mi papá</option>   
                                    <option {{ old('responsabiliza_economicamente') == 'familiar' ? 'selected' : '' }}
                                        value="familiar">Otro familiar</option>                                                                                
                                </select>
                            </div>
                        </div>

                        {{-- Personas hogar --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">7.   ¿Cuántas personas viven en tu hogar contándote a ti?</label>
                         <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                         <input value="{{ old('personas_entuhogar') }}" name="personas_entuhogar"
                        class="sinborde" placeholder="Respuesta">
                         </div>
                        </div>
                        {{-- gastos --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">8.	¿Quién se encarga mayormente de los gastos del hogar?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="encarga_gastos"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('encarga_gastos') == 'Padre' ? 'selected' : '' }}
                                        value="Padre">Padre</option>
                                    <option {{ old('encarga_gastos') == 'Madre' ? 'selected' : '' }}
                                        value="Madre">Madre</option>
                                    <option {{ old('encarga_gastos') == 'Yo' ? 'selected' : '' }}
                                        value="Yo">Yo</option>
                                    <option {{ old('encarga_gastos') == 'Pareja' ? 'selected' : '' }}
                                        value="Pareja">Pareja</option>   
                                    <option {{ old('encarga_gastos') == 'Otro' ? 'selected' : '' }}
                                        value="Otro">Otro</option>                                                                                
                                </select>
                            </div>
                        </div>
                        {{-- trabajas --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">9.	¿Trabajas Actualmente?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="trabajas"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('trabajas') == 'Si' ? 'selected' : '' }}
                                        value="Si">Sí</option>
                                    <option {{ old('trabajas') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>                                                                               
                                </select>
                            </div>
                        </div>
                     {{-- desarrollo de trabajo --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">9.1.	¿Cómo desarrollas tu trabajo?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="desarrollo_trabajo" style="max-width:200px"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('desarrollo_trabajo') == 'No trabajo.' ? 'selected' : '' }}
                                    value="No trabajo.">No trabajo.</option> 
                                    <option {{ old('desarrollo_trabajo') == 'Tengo negocio propio sin ingreso fijo.' ? 'selected' : '' }}
                                    value="Tengo negocio propio sin ingreso fijo.">Tengo negocio propio sin ingreso fijo.</option> 
                                    <option {{ old('desarrollo_trabajo') == 'Apoyando en la actividad económica familiar, sin percibir ingresos.' ? 'selected' : '' }}
                                        value="Apoyando en la actividad económica familiar, sin percibir ingresos.">Apoyando en la actividad económica familiar, sin percibir ingresos.</option>  
                                    <option {{ old('desarrollo_trabajo') == 'De manera temporal, apoyando una actividad económica familiar, percibiendo algún pago.' ? 'selected' : '' }}
                                        value="De manera temporal, apoyando una actividad económica familiar, percibiendo algún pago.">De manera temporal, apoyando una actividad económica familiar, percibiendo algún pago.</option>
                                    <option {{ old('desarrollo_trabajo') == 'De manera permanente, apoyando una actividad económica familiar, percibiendo algún pago.' ? 'selected' : '' }}
                                        value="De manera permanente, apoyando una actividad económica familiar, percibiendo algún pago.">De manera permanente, apoyando una actividad económica familiar, percibiendo algún pago.</option>  
                                    <option {{ old('desarrollo_trabajo') == 'De manera temporal, en negocio, empresa, organización, percibiendo pago.' ? 'selected' : '' }}
                                        value="De manera temporal, en negocio, empresa, organización, percibiendo pago.">De manera temporal, en negocio, empresa, organización, percibiendo pago.</option>
                                    <option {{ old('desarrollo_trabajo') == 'De manera permanente, en negocio, empresa, organización, percibiendo pago.' ? 'selected' : '' }}
                                        value="De manera permanente, en negocio, empresa, organización, percibiendo pago.">De manera permanente, en negocio, empresa, organización, percibiendo pago.</option>  
                                    <option {{ old('desarrollo_trabajo') == 'Realizo alguna actividad a cambio de servicios como hospedaje y alimentación.' ? 'selected' : '' }}
                                        value="Realizo alguna actividad a cambio de servicios como hospedaje y alimentación.">Realizo alguna actividad a cambio de servicios como hospedaje y alimentación.</option>
                                                                            
                                </select>
                            </div>
                        </div>
                        {{-- relacion de trabajo --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">9.2.	El trabajo que desarrollas, ¿está relacionado con la carrera que estudias o deseas estudiar?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="relación_trabajo"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('relación_trabajo') == 'No trabajo.' ? 'selected' : '' }}
                                    value="No trabajo.">No trabajo.</option> 
                                    <option {{ old('relación_trabajo') == 'Si' ? 'selected' : '' }}
                                        value="Si">Sí</option>
                                    <option {{ old('relación_trabajo') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>                                                                               
                                </select>
                            </div>
                        </div>
                        {{-- casa --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">10.	La casa en la que habitas actualmente es:</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="casa"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('casa') == 'Rentada' ? 'selected' : '' }}
                                        value="Rentada">Rentada</option>
                                    <option {{ old('casa') == 'Propia' ? 'selected' : '' }}
                                        value="Propia">Propia</option>  
                                    <option {{ old('casa') == 'Prestada' ? 'selected' : '' }}
                                        value="Prestada">Prestada</option>
                                    <option {{ old('casa') == 'Otra situación' ? 'selected' : '' }}
                                        value="Otra situación">Otra situación</option>                                                                              
                                </select>
                            </div>
                        </div>
<!-- <div class="section">
                        <label class="col-sm-12 form-control-label">11.	Marca los servicios con los que cuentas en tu hogar:</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Agua</u></h5>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Sí" {{ old('servicios_agua') == 'Sí' ? 'checked' : '' }} name="servicios_agua" id="servicios_agua" type="radio" >
                                <span>Sí</span>
                                </h5>
                        </div>
                            <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="No" {{ old('servicios_agua') == 'No' ? 'checked' : '' }} name="servicios_agua" id="servicios_agua" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Luz</u></h5>
                        <div class="col-md-2">
                                <h5 class="radio ">
                                <input value="Sí" {{ old('servicios_luz') == 'Sí' ? 'checked' : '' }} name="servicios_luz" id="servicios_luz" type="radio" >
                                <span>Sí</span>
                                </h5>
                        </div>
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="No" {{ old('servicios_luz') == 'No' ? 'checked' : '' }} name="servicios_luz" id="servicios_luz" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Teléfono</u></h5>
                            <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Sí" {{ old('servicios_telfono') == 'Sí' ? 'checked' : '' }} name="servicios_telefono" id="servicios_telefono" type="radio" >
                                    <span>Sí</span>
                                    </h5>
                            </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="No" {{ old('servicios_telefono') == 'No' ? 'checked' : '' }} name="servicios_telefono" id="servicios_telefono" type="radio" >
                                    <span>No</span>
                                    </h5>
                                </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Gas</u></h5>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Sí" {{ old('servicios_gas') == 'Sí' ? 'checked' : '' }} name="servicios_gas" id="servicios_gas" type="radio" >
                                    <span>Sí</span>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="No" {{ old('servicios_gas') == 'No' ? 'checked' : '' }} name="servicios_gas" id="servicios_gas" type="radio" >
                                    <span>No</span>
                                    </h5>
                                </div>
                        </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- Drenaje</u></h5>
                                    <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Sí" {{ old('servicios_drenaje') == 'Sí' ? 'checked' : '' }} name="servicios_drenaje" id="servicios_drenaje" type="radio" >
                                    <span>Sí</span>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="No" {{ old('servicios_drenaje') == 'No' ? 'checked' : '' }} name="servicios_drenaje" id="servicios_drenaje" type="radio" >
                                    <span>No</span>
                                    </h5>
                                </div>
                                </div>
                                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- Televisión de paga</u></h5>
                                    <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="Sí" {{ old('servicios_television') == 'Sí' ? 'checked' : '' }} name="servicios_television" id="servicios_television" type="radio" >
                                    <span>Sí</span>
                                    </h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="radio">
                                    <input value="No" {{ old('servicios_television') == 'No' ? 'checked' : '' }} name="servicios_television" id="servicios_television" type="radio" >
                                    <span>No</span>
                                    </h5>
                                </div>
                                </div>
                     </div>-->
                     {{-- equipo --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">11.	¿Cuentas con equipo tecnológico disponible en tu casa?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="equipo_tecnologico"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('equipo_tecnologico') == 'Sí' ? 'selected' : '' }}
                                        value="Sí">Sí</option>
                                    <option {{ old('equipo_tecnologico') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>                                                                             
                                </select>
                            </div>
                        </div>
                        {{-- equipo_tecnologico --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">12.	Selecciona la cantidad de equipo tecnológico con el que cuentes en casa indicando cuántos tienes:</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Computadora de escritorio </u></h5>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Ninguno" {{ old('equipo_desktop') == 'Ninguno' ? 'checked' : '' }} name="equipo_desktop" id="equipo_desktop" type="radio" >
                                <span>Ninguno</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('equipo_desktop') == '1' ? 'checked' : '' }} name="equipo_desktop" id="equipo_desktop" type="radio" >
                                <span>1</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="2" {{ old('equipo_desktop') == '2' ? 'checked' : '' }} name="equipo_desktop" id="equipo_desktop" type="radio" >
                                <span>2</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3 o más" {{ old('equipo_desktop') == '3 o más' ? 'checked' : '' }} name="equipo_desktop" id="equipo_desktop" type="radio" >
                                <span>3 o más</span>
                                </h5>
                        </div>

                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Laptop</u></h5>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Ninguno" {{ old('equipo_laptop') == 'Ninguno' ? 'checked' : '' }} name="equipo_laptop" id="equipo_laptop" type="radio" >
                                <span>Ninguno</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('equipo_laptop') == '1' ? 'checked' : '' }} name="equipo_laptop" id="equipo_laptop" type="radio" >
                                <span>1</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="2" {{ old('equipo_laptop') == '2' ? 'checked' : '' }} name="equipo_laptop" id="equipo_laptop" type="radio" >
                                <span>2</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3 o más" {{ old('equipo_laptop') == '3 o más' ? 'checked' : '' }} name="equipo_laptop" id="equipo_laptop" type="radio" >
                                <span>3 o más</span>
                                </h5>
                        </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Tablet</u></h5>
                            <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Ninguno" {{ old('equipo_tableta') == 'Ninguno' ? 'checked' : '' }} name="equipo_tableta" id="equipo_tableta" type="radio" >
                                <span>Ninguno</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('equipo_tableta') == '1' ? 'checked' : '' }} name="equipo_tableta" id="equipo_tableta" type="radio" >
                                <span>1</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="2" {{ old('equipo_tableta') == '2' ? 'checked' : '' }} name="equipo_tableta" id="equipo_tableta" type="radio" >
                                <span>2</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3 o más" {{ old('equipo_tableta') == '3 o más' ? 'checked' : '' }} name="equipo_tableta" id="equipo_tableta" type="radio" >
                                <span>3 o más</span>
                                </h5>
                        </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Smartphone (Celular)</u></h5>
                                <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Ninguno" {{ old('equipo_celular') == 'Ninguno' ? 'checked' : '' }} name="equipo_celular" id="equipo_celular" type="radio" >
                                <span>Ninguno</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('equipo_celular') == '1' ? 'checked' : '' }} name="equipo_celular" id="equipo_celular" type="radio" >
                                <span>1</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="2" {{ old('equipo_celular') == '2' ? 'checked' : '' }} name="equipo_celular" id="equipo_celular" type="radio" >
                                <span>2</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3 o más" {{ old('equipo_celular') == '3 o más' ? 'checked' : '' }} name="equipo_celular" id="equipo_celular" type="radio" >
                                <span>3 o más</span>
                                </h5>
                        </div>
                        </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- SmartTV</u></h5>
                                    <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Ninguno" {{ old('equipo_television') == 'Ninguno' ? 'checked' : '' }} name="equipo_television" id="equipo_television" type="radio" >
                                <span>Ninguno</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('equipo_television') == '1' ? 'checked' : '' }} name="equipo_television" id="equipo_television" type="radio" >
                                <span>1</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="2" {{ old('equipo_television') == '2' ? 'checked' : '' }} name="equipo_television" id="equipo_television" type="radio" >
                                <span>2</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3 o más" {{ old('equipo_television') == '3 o más' ? 'checked' : '' }} name="equipo_television" id="equipo_television" type="radio" >
                                <span>3 o más</span>
                                </h5>
                        </div>
                                </div>
                                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- Consola de Videojuegos</u></h5>
                                    <div class="col-md-2">
                                <h5 class="radio">
                                <input value="Ninguno" {{ old('equipo_consola') == 'Ninguno' ? 'checked' : '' }} name="equipo_consola" id="equipo_consola" type="radio" >
                                <span>Ninguno</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="1" {{ old('equipo_consola') == '1' ? 'checked' : '' }} name="equipo_consola" id="equipo_consola" type="radio" >
                                <span>1</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="2" {{ old('equipo_consola') == '2' ? 'checked' : '' }} name="equipo_consola" id="equipo_consola" type="radio" >
                                <span>2</span>
                                </h5>
                        </div>
                        <div class="col-md-2">
                                <h5 class="radio">
                                <input value="3 o más" {{ old('equipo_consola') == '3 o más' ? 'checked' : '' }} name="equipo_consola" id="equipo_consola" type="radio" >
                                <span>3 o más</span>
                                </h5>
                        </div>
                            </div>
                        </div>
                        {{-- internet --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">13.	¿Cuentas con acceso a Internet en casa? </label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="internet"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('internet') == 'Sí' ? 'selected' : '' }}
                                        value="Sí">Sí</option>
                                    <option {{ old('internet') == 'No' ? 'selected' : '' }}
                                        value="No">No</option>                                                                             
                                </select>
                            </div>
                        </div>
                        {{-- velocidad internet --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">14.	Indica la velocidad de tu servicio de internet.</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <select class="sinborde" name="velocidad_internet"
                                    data-placeholder="Elíge una opción">
                                    <option label="Elíge una opción"></option>
                                    <option {{ old('velocidad_internet') == 'Desconozco la velocidad' ? 'selected' : '' }}
                                    value="Desconozco la velocidad">Desconozco la velocidad</option>   
                                    <option {{ old('velocidad_internet') == '2 MB' ? 'selected' : '' }}
                                        value="2 MB">2 MB</option>
                                    <option {{ old('velocidad_internet') == '5 MB' ? 'selected' : '' }}
                                        value="5 MB">5 MB</option>    
                                        <option {{ old('velocidad_internet') == '10 MB' ? 'selected' : '' }}
                                        value="10 MB">10 MB</option>
                                    <option {{ old('velocidad_internet') == '20 MB' ? 'selected' : '' }}
                                        value="20 MB">20 MB</option>    
                                        <option {{ old('velocidad_internet') == '50 MB' ? 'selected' : '' }}
                                        value="50 MB">50 MB</option>
                                    <option {{ old('velocidad_internet') == '100 MB' ? 'selected' : '' }}
                                        value="100 MB">100 MB</option>                                                                             
                                </select>
                            </div>
                        </div>
                        <div class="section">
                        <label class="col-sm-12 form-control-label">15.	Selecciona con Sí el uso que le das al Internet en casa (Solo selecciona 3 opciones con Sí, el resto con No) </label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>•	Para realizar actividades escolares</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('actividades_escolares') == 'SÍ' ? 'checked' : '' }} name="actividades_escolares" id="actividades_escolares" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('actividades_escolares') == 'No' ? 'checked' : '' }} name="actividades_escolares" id="actividades_escolares" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>•	Para entretenimiento</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('entretenimiento') == 'SÍ' ? 'checked' : '' }} name="entretenimiento" id="entretenimiento" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('entretenimiento') == 'No' ? 'checked' : '' }} name="entretenimiento" id="entretenimiento" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>•	Para acceder a contenido audiovisual</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('contenido_audiovisual') == 'SÍ' ? 'checked' : '' }} name="contenido_audiovisual" id="contenido_audiovisual" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('contenido_audiovisual') == 'No' ? 'checked' : '' }} name="contenido_audiovisual" id="contenido_audiovisual" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>•	Para leer periódicos, revistas o libros</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('leer') == 'SÍ' ? 'checked' : '' }} name="leer" id="leer" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('leer') == 'No' ? 'checked' : '' }} name="leer" id="leer" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>•	Para obtener información</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('informacion') == 'SÍ' ? 'checked' : '' }} name="informacion" id="informacion" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('informacion') == 'No' ? 'checked' : '' }} name="informacion" id="informacion" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>•	Para comunicarme</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('comunicarme') == 'SÍ' ? 'checked' : '' }} name="comunicarme" id="comunicarme" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('comunicarme') == 'No' ? 'checked' : '' }} name="comunicarme" id="comunicarme" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>

                        </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>•	Para acceder a redes sociales</u></h5>
                                <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('redes_sociales') == 'SÍ' ? 'checked' : '' }} name="redes_sociales" id="redes_sociales" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('redes_sociales') == 'No' ? 'checked' : '' }} name="redes_sociales" id="redes_sociales" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>
        

                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>•	Para descargar softwares</u></h5>
                                <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('software') == 'SÍ' ? 'checked' : '' }} name="software" id="software" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('software') == 'No' ? 'checked' : '' }} name="software" id="software" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>
        

                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>•	Para comprar productos</u></h5>
                                <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('compras') == 'SÍ' ? 'checked' : '' }} name="compras" id="compras" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('compras') == 'No' ? 'checked' : '' }} name="compras" id="compras" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>
        

                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>•	Para operaciones bancarias</u></h5>
                                <div class="col-md-1">
                                <h5 class="radio">
                                <input value="SÍ" {{ old('bancos') == 'SÍ' ? 'checked' : '' }} name="bancos" id="bancos" type="radio" >
                                <span>SÍ</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="No" {{ old('bancos') == 'No' ? 'checked' : '' }} name="bancos" id="bancos" type="radio" >
                                <span>No</span>
                                </h5>
                            </div>
        


                                </div>
                                </div>

                        <div class="section">
                        <label class="col-sm-12 form-control-label">16.	Cuando usas Internet, ¿presentas algún problema?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="problemas_internet" style="max-width:200px"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('problemas_internet') == 'Lentitud en el servicio' ? 'selected' : '' }}
                                value="Lentitud en el servicio">Lentitud en el servicio</option>
                            <option {{ old('problemas_internet') == 'Interrupciones en el servicio' ? 'selected' : '' }}
                                value="Interrupciones en el servicio">Interrupciones en el servicio</option>
                                <option {{ old('problemas_internet') == 'Exceso de información no deseada' ? 'selected' : '' }}
                                value="Exceso de información no deseada">Exceso de información no deseada</option>
                            <option {{ old('problemas_internet') == 'Mensajes de desconocidos' ? 'selected' : '' }}
                                value="Mensajes de desconocidos ">Mensajes de desconocidos </option>
                            <option {{ old('problemas_internet') == 'Virus en mi equipo' ? 'selected' : '' }}
                                value="Virus en mi equipo">Virus en mi equipo </option>
                                <option {{ old('problemas_internet') == 'Fraudes' ? 'selected' : '' }}
                                value="Fraudes">Fraudes</option>
                            <option {{ old('problemas_internet') == 'Violación a la privacidad' ? 'selected' : '' }}
                                value="Violación a la privacidad">Violación a la privacidad </option>
                            <option {{ old('problemas_internet') == 'No presento problemas' ? 'selected' : '' }}
                                value="No presento problemas">No presento problemas </option>
                        </select>
                    </div>
                        </div>
                        <div class="section">
                        <label class="col-sm-12 form-control-label">17. En caso de no contar con acceso a internet ¿A dónde acudes cuando requieres utilizar este servicio?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="acudes_servicio" style="max-width:200px"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('acudes_servicio') == 'Lo utilizo a través de la compañía de teléfono celular (recarga o plan)' ? 'selected' : '' }}
                                value="Lo utilizo a través de la compañía de teléfono celular (recarga o plan)">Lo utilizo a través de la compañía de teléfono celular (recarga o plan)</option>
                            <option {{ old('acudes_servicio') == 'Me acerco con alguien que cuente con Internet en casa' ? 'selected' : '' }}
                                value="Me acerco con alguien que cuente con Internet en casa">Me acerco con alguien que cuente con Internet en casa</option>
                                <option {{ old('acudes_servicio') == 'Acudo a un Ciber café' ? 'selected' : '' }}
                                value="Acudo a un Ciber café">Acudo a un Ciber café</option>
                            <option {{ old('acudes_servicio') == 'Le pido a alguien que haga dicha actividad por mí' ? 'selected' : '' }}
                                value="Le pido a alguien que haga dicha actividad por mí">Le pido a alguien que haga dicha actividad por mí </option>
                                <option {{ old('acudes_servicio') == 'Tengo acceso en mi hogar' ? 'selected' : '' }}
                                value="Tengo acceso en mi hogar">Tengo acceso en mi hogar </option>
                        </select>
                    </div>
                        </div>
                        {{-- PREGUNTA 26 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">18. En orden  de mayor uso a menor, ¿Cuáles son las redes sociales que utilizas? .</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Facebook</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('facebook') == '1' ? 'checked' : '' }} name="facebook" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('facebook') == '2' ? 'checked' : '' }} name="facebook" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('facebook') == '3' ? 'checked' : '' }} name="facebook" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('facebook') == '4' ? 'checked' : '' }} name="facebook" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('facebook') == '5' ? 'checked' : '' }} name="facebook" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('facebook') == '6' ? 'checked' : '' }} name="facebook" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div> 
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('facebook') == 'N/A' ? 'checked' : '' }} name="facebook" id="7" type="radio" >
                                <span>No uso</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Twitter</u></h5>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="1" {{ old('twitter') == '1' ? 'checked' : '' }} name="twitter" id="1" type="radio" >
                            <span>1 más</span>
                            </h5>
                    </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="2" {{ old('twitter') == '2' ? 'checked' : '' }} name="twitter" id="2" type="radio" >
                            <span>2</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="3" {{ old('twitter') == '3' ? 'checked' : '' }} name="twitter" id="3" type="radio" >
                            <span>3</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="4" {{ old('twitter') == '4' ? 'checked' : '' }} name="twitter" id="4" type="radio" >
                            <span>4</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="5" {{ old('twitter') == '5' ? 'checked' : '' }} name="twitter" id="5" type="radio" >
                            <span>5</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="6" {{ old('twitter') == '6' ? 'checked' : '' }} name="twitter" id="6" type="radio" >
                            <span>6 menos</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="N/A" {{ old('twitter') == 'N/A' ? 'checked' : '' }} name="twitter" id="7" type="radio" >
                            <span>No uso</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Instagram</u></h5>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('instagram') == '1' ? 'checked' : '' }} name="instagram" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('instagram') == '2' ? 'checked' : '' }} name="instagram" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('instagram') == '3' ? 'checked' : '' }} name="instagram" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('instagram') == '4' ? 'checked' : '' }} name="instagram" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('instagram') == '5' ? 'checked' : '' }} name="instagram" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('instagram') == '6' ? 'checked' : '' }} name="instagram" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('instagram') == 'N/A' ? 'checked' : '' }} name="instagram" id="7" type="radio" >
                                <span>No uso</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Tik Tok</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('tiktok') == '1' ? 'checked' : '' }} name="tiktok" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('tiktok') == '2' ? 'checked' : '' }} name="tiktok" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('tiktok') == '3' ? 'checked' : '' }} name="tiktok" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('tiktok') == '4' ? 'checked' : '' }} name="tiktok" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('tiktok') == '5' ? 'checked' : '' }} name="tiktok" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('tiktok') == '6' ? 'checked' : '' }} name="tiktok" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="N/A" {{ old('tiktok') == 'N/A' ? 'checked' : '' }} name="tiktok" id="7" type="radio" >
                                    <span>No uso</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- Snapchat</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('snapchat') == '1' ? 'checked' : '' }} name="snapchat" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('snapchat') == '2' ? 'checked' : '' }} name="snapchat" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('snapchat') == '3' ? 'checked' : '' }} name="snapchat" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('snapchat') == '4' ? 'checked' : '' }} name="snapchat" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('snapchat') == '5' ? 'checked' : '' }} name="snapchat" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('snapchat') == '6' ? 'checked' : '' }} name="snapchat" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="N/A" {{ old('snapchat') == 'N/A' ? 'checked' : '' }} name="snapchat" id="7" type="radio" >
                                    <span>No uso</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                    <h5 class="col-sm-4"><u>- Otro</u></h5>
                                    <div class="col-md-1">
                                        <h5 class="radio">
                                        <input value="1" {{ old('otra') == '1' ? 'checked' : '' }} name="otra" id="1" type="radio" >
                                        <span>1 más</span>
                                        </h5>
                                </div>
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="2" {{ old('otra') == '2' ? 'checked' : '' }} name="otra" id="2" type="radio" >
                                        <span>2</span>
                                        </h5>
                                    </div>
            
                                    <div class="col-md-1">
                                        <h5 class="radio">
                                        <input value="3" {{ old('otra') == '3' ? 'checked' : '' }} name="otra" id="3" type="radio" >
                                        <span>3</span>
                                        </h5>
                                    </div>
            
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="4" {{ old('otra') == '4' ? 'checked' : '' }} name="otra" id="4" type="radio" >
                                        <span>4</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-1">
                                        <h5 class="radio">
                                        <input value="5" {{ old('otra') == '5' ? 'checked' : '' }} name="otra" id="5" type="radio" >
                                        <span>5</span>
                                        </h5>
                                    </div>
            
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="6" {{ old('otra') == '6' ? 'checked' : '' }} name="otra" id="6" type="radio" >
                                        <span>6 menos</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-1">
                                        <h5 class="radio ">
                                        <input value="N/A" {{ old('otra') == 'N/A' ? 'checked' : '' }} name="otra" id="7" type="radio" >
                                        <span>No uso</span>
                                        </h5>
                                    </div>
                                </div>
                     </div> 
                        {{-- PREGUNTA 17 --}}
                        <div class="section">
                        <label class="col-sm-12 form-control-label">19. ¿Cuánto tiempo le dedicas al uso de redes sociales?</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <select class="sinborde" name="tiempo"
                            data-placeholder="Elíge una opción">
                            <option label="Elíge una opción"></option>
                            <option {{ old('tiempo') == '1-2 horas por semana' ? 'selected' : '' }}
                                value="1-2 horas por semana">1-2 horas por semana</option>
                            <option {{ old('tiempo') == '3-5 horas por semana' ? 'selected' : '' }}
                                value="3-5 horas por semana">3-5 horas por semana</option>
                                <option {{ old('tiempo') == '5-10 horas por semana' ? 'selected' : '' }}
                                value="5-10 horas por semana">5-10 horas por semana</option>
                            <option {{ old('tiempo') == '1-2 horas al día' ? 'selected' : '' }}
                                value="1-2 horas al día">1-2 horas al día</option>
                            <option {{ old('tiempo') == '3-5 horas al día ' ? 'selected' : '' }}
                                value="3-5 horas al día ">3-5 horas al día </option>
                                <option {{ old('tiempo') == '5-10 horas al día' ? 'selected' : '' }}
                                value="5-10 horas al día">5-10 horas al día</option>
                            <option {{ old('tiempo') == 'Más de 10 horas diarias' ? 'selected' : '' }}
                                value="Más de 10 horas diarias">Más de 10 horas diarias</option>
                            <option {{ old('tiempo') == 'No uso' ? 'selected' : '' }}
                                value="No uso">No uso</option>
                        </select>
                    </div>
                        </div>

                        {{-- PREGUNTA 26 --}}
                     <div class="section">
                        <label class="col-sm-12 form-control-label">20.	En orden  de mayor preferencia a menor, Cuando la universidad notifica alguna situación, ¿cuál es el medio por el que prefieres recibir la información oficial de la universidad? (Solo selecciona 6 opciones, el resto con N/A)</label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- SIUANE</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('siuane') == '1' ? 'checked' : '' }} name="siuane" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('siuane') == '2' ? 'checked' : '' }} name="siuane" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('siuane') == '3' ? 'checked' : '' }} name="siuane" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('siuane') == '4' ? 'checked' : '' }} name="siuane" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('siuane') == '5' ? 'checked' : '' }} name="siuane" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('siuane') == '6' ? 'checked' : '' }} name="siuane" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('siuane') == 'N/A' ? 'checked' : '' }} name="siuane" id="7" type="radio" >
                                <span>N/A</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Sitio Oficial</u></h5>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('12_pagina') == '1' ? 'checked' : '' }} name="12_pagina" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('12_pagina') == '2' ? 'checked' : '' }} name="12_pagina" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('12_pagina') == '3' ? 'checked' : '' }} name="12_pagina" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('12_pagina') == '4' ? 'checked' : '' }} name="12_pagina" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('12_pagina') == '5' ? 'checked' : '' }} name="12_pagina" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('12_pagina') == '6' ? 'checked' : '' }} name="12_pagina" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('12_pagina') == 'N/A' ? 'checked' : '' }} name="12_pagina" id="7" type="radio" >
                                <span>N/A</span>
                                </h5>
                            </div>
                        </div>
                       <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Facebook</u></h5>
                        <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('12_facebook') == '1' ? 'checked' : '' }} name="12_facebook" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('12_facebook') == '2' ? 'checked' : '' }} name="12_facebook" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('12_facebook') == '3' ? 'checked' : '' }} name="12_facebook" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('12_facebook') == '4' ? 'checked' : '' }} name="12_facebook" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('12_facebook') == '5' ? 'checked' : '' }} name="12_facebook" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>

                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('12_facebook') == '6' ? 'checked' : '' }} name="12_facebook" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('12_facebook') == 'N/A' ? 'checked' : '' }} name="12_facebook" id="7" type="radio" >
                                <span>N/A</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Messenger</u></h5>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="1" {{ old('12_messenger') == '1' ? 'checked' : '' }} name="12_messenger" id="1" type="radio" >
                            <span>1 más</span>
                            </h5>
                    </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="2" {{ old('12_messenger') == '2' ? 'checked' : '' }} name="12_messenger" id="2" type="radio" >
                            <span>2</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="3" {{ old('12_messenger') == '3' ? 'checked' : '' }} name="12_messenger" id="3" type="radio" >
                            <span>3</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="4" {{ old('12_messenger') == '4' ? 'checked' : '' }} name="12_messenger" id="4" type="radio" >
                            <span>4</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="5" {{ old('12_messenger') == '5' ? 'checked' : '' }} name="12_messenger" id="5" type="radio" >
                            <span>5</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="6" {{ old('12_messenger') == '6' ? 'checked' : '' }} name="12_messenger" id="6" type="radio" >
                            <span>6 menos</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="N/A" {{ old('12_messenger') == 'N/A' ? 'checked' : '' }} name="12_messenger" id="7" type="radio" >
                            <span>N/A</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- Twitter</u></h5>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="1" {{ old('12_twitter') == '1' ? 'checked' : '' }} name="12_twitter" id="1" type="radio" >
                            <span>1 más</span>
                            </h5>
                    </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="2" {{ old('12_twitter') == '2' ? 'checked' : '' }} name="12_twitter" id="2" type="radio" >
                            <span>2</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="3" {{ old('12_twitter') == '3' ? 'checked' : '' }} name="12_twitter" id="3" type="radio" >
                            <span>3</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="4" {{ old('12_twitter') == '4' ? 'checked' : '' }} name="12_twitter" id="4" type="radio" >
                            <span>4</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="5" {{ old('12_twitter') == '5' ? 'checked' : '' }} name="12_twitter" id="5" type="radio" >
                            <span>5</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="6" {{ old('12_twitter') == '6' ? 'checked' : '' }} name="12_twitter" id="6" type="radio" >
                            <span>6 menos</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="N/A" {{ old('12_twitter') == 'N/A' ? 'checked' : '' }} name="12_twitter" id="7" type="radio" >
                            <span>N/A</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Instagram</u></h5>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('12_instagram') == '1' ? 'checked' : '' }} name="12_instagram" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('12_instagram') == '2' ? 'checked' : '' }} name="12_instagram" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('12_instagram') == '3' ? 'checked' : '' }} name="12_instagram" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('12_instagram') == '4' ? 'checked' : '' }} name="12_instagramm" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('12_instagram') == '5' ? 'checked' : '' }} name="12_instagram" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('12_instagram') == '6' ? 'checked' : '' }} name="12_instagram" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('12_instagram') == 'N/A' ? 'checked' : '' }} name="12_instagram" id="7" type="radio" >
                                <span>N/A</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>-	Whatsapp</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('12_whatsapp') == '1' ? 'checked' : '' }} name="12_whatsapp" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('12_whatsapp') == '2' ? 'checked' : '' }} name="12_whatsapp" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('12_whatsapp') == '3' ? 'checked' : '' }} name="12_whatsapp" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('12_whatsapp') == '4' ? 'checked' : '' }} name="12_whatsapp" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('12_whatsapp') == '5' ? 'checked' : '' }} name="12_whatsapp" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('12_whatsapp') == '6' ? 'checked' : '' }} name="12_whatsapp" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="N/A" {{ old('12_whatsapp') == 'N/A' ? 'checked' : '' }} name="12_whatsapp" id="7" type="radio" >
                                    <span>N/A</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                        <h5 class="col-sm-4"><u>- SMS</u></h5>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="1" {{ old('12_sms') == '1' ? 'checked' : '' }} name="12_sms" id="1" type="radio" >
                            <span>1 más</span>
                            </h5>
                    </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="2" {{ old('12_sms') == '2' ? 'checked' : '' }} name="12_sms" id="2" type="radio" >
                            <span>2</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="3" {{ old('12_sms') == '3' ? 'checked' : '' }} name="12_sms" id="3" type="radio" >
                            <span>3</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="4" {{ old('12_sms') == '4' ? 'checked' : '' }} name="12_sms" id="4" type="radio" >
                            <span>4</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio">
                            <input value="5" {{ old('12_sms') == '5' ? 'checked' : '' }} name="12_sms" id="5" type="radio" >
                            <span>5</span>
                            </h5>
                        </div>

                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="6" {{ old('12_sms') == '6' ? 'checked' : '' }} name="12_sms" id="6" type="radio" >
                            <span>6 menos</span>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="radio ">
                            <input value="N/A" {{ old('12_sms') == 'N/A' ? 'checked' : '' }} name="12_sms" id="7" type="radio" >
                            <span>N/A</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <h5 class="col-sm-4"><u>- Telegram</u></h5>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="1" {{ old('12_telegram') == '1' ? 'checked' : '' }} name="12_telegram" id="1" type="radio" >
                                <span>1 más</span>
                                </h5>
                        </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="2" {{ old('12_telegram') == '2' ? 'checked' : '' }} name="12_telegram" id="2" type="radio" >
                                <span>2</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="3" {{ old('12_telegram') == '3' ? 'checked' : '' }} name="12_telegram" id="3" type="radio" >
                                <span>3</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="4" {{ old('12_telegram') == '4' ? 'checked' : '' }} name="12_telegram" id="4" type="radio" >
                                <span>4</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio">
                                <input value="5" {{ old('12_telegram') == '5' ? 'checked' : '' }} name="12_telegram" id="5" type="radio" >
                                <span>5</span>
                                </h5>
                            </div>
    
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="6" {{ old('12_telegram') == '6' ? 'checked' : '' }} name="12_telegram" id="6" type="radio" >
                                <span>6 menos</span>
                                </h5>
                            </div>
                            <div class="col-md-1">
                                <h5 class="radio ">
                                <input value="N/A" {{ old('12_telegram') == 'N/A' ? 'checked' : '' }} name="12_telegram" id="7" type="radio" >
                                <span>N/A</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>-	Correo electrónico</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('12_correo') == '1' ? 'checked' : '' }} name="12_correo" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('12_correo') == '2' ? 'checked' : '' }} name="12_correo" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('12_correo') == '3' ? 'checked' : '' }} name="12_correo" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('12_correo') == '4' ? 'checked' : '' }} name="12_correo" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('12_correo') == '5' ? 'checked' : '' }} name="12_correo" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('12_correo') == '6' ? 'checked' : '' }} name="12_correo" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="N/A" {{ old('12_correo') == 'N/A' ? 'checked' : '' }} name="12_correo" id="7" type="radio" >
                                    <span>N/A</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                <h5 class="col-sm-4"><u>- LLamada telefónica</u></h5>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="1" {{ old('12_llamada') == '1' ? 'checked' : '' }} name="12_llamada" id="1" type="radio" >
                                    <span>1 más</span>
                                    </h5>
                            </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="2" {{ old('12_llamada') == '2' ? 'checked' : '' }} name="12_llamada" id="2" type="radio" >
                                    <span>2</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="3" {{ old('12_llamada') == '3' ? 'checked' : '' }} name="12_llamada" id="3" type="radio" >
                                    <span>3</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="4" {{ old('12_llamada') == '4' ? 'checked' : '' }} name="12_llamada" id="4" type="radio" >
                                    <span>4</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio">
                                    <input value="5" {{ old('12_llamada') == '5' ? 'checked' : '' }} name="12_llamada" id="5" type="radio" >
                                    <span>5</span>
                                    </h5>
                                </div>
        
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="6" {{ old('12_llamada') == '6' ? 'checked' : '' }} name="12_llamada" id="6" type="radio" >
                                    <span>6 menos</span>
                                    </h5>
                                </div>
                                <div class="col-md-1">
                                    <h5 class="radio ">
                                    <input value="N/A" {{ old('12_llamada') == 'N/A' ? 'checked' : '' }} name="12_llamada" id="7" type="radio" >
                                    <span>N/A</span>
                                    </h5>
                                </div>
                            </div>
                     </div> 
                      <p class="mg-b-0"><h5 style="color: white">Esta encuesta está diseñada con fines estadísticos para uso exclusivo de la Universidad Autónoma del Noreste. Te pedimos por favor no dejar algun campo sin contestar.</h5></p>
                        <!--{{-- Ciudad --}}
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
                         </div>-->
                         <button class="buttonGuardar">Enviar encuesta</button>
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
</div>
@endsection
@push('css')
<link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">

@endpush
@push('css')
<style>
h2.linea {
    border: #F4C300 2px solid;
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
      background-color:#F4C300;
      margin-top: 8px;
      margin-bottom: 8px;
      padding: 3px 10px;
      border:   #F4C300 5px double;
      color:black;
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
    background-color: #73243C;
    border: #F4C300 2px solid;
    color:white;
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

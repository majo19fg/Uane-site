@extends('index-admin')

@section('content')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Convenios</a>
        <span class="breadcrumb-item active">Guardar convenio</span>
    </nav>
</div>
<!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
        <h4>Convenios empresariales</h4>
        <p class="mg-b-0">Llena cada uno de los campos para guardar un convenio empresarial en el sistema.</p>
    </div>
</div>
<!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row mg-t-10">
            <div class="col-xl-10 offset-1">
                <form action="{{ route('convenios.actualizar', $convenio) }}" method="post" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="form-layout form-layout-4">

                        @if (session()->has('success'))

                        <div class="alert alert-success alert-bordered" role="alert">

                            <div class="d-sm-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                                <div class="mg-t-20 mg-sm-t-0">
                                    <h5 class="mg-b-2 tx-success">Convenio actualizado exitosamente.</h5>
                                    <p class="mg-b-0 tx-gray">¡El convenio se ha actualizado exitosamente!</p>
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
                         {{-- Campus --}}
                         <div class="form-layout form-layout-4">
                            <div align="right"><img  src="{{ asset('/multi/images/campus/uanerectoria.png') }}"width="194px" height="60px"/></div>
                            <div align="center"class="col-sm-12" style=" background-color: #73243D; height: 30px ">
                               <h3 style="color: white">FICHA TÉCNICA DE CONVENIO</h3>
                               </div>

                            <div class="row mg-t-20">
                            <label class="col-sm-4 ">ID Solicitud: </label> 
                           <label class="col-sm-4 ">{{ $convenio->id }} </label>
                            </div> 
                        {{-- Fecha de Inicio --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Fecha de inicio <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="fecha_inicio" class="form-control fc-datepicker"
                                        placeholder="" readonly="readonly">
                                </div><!-- input-group -->
                            </div>


                        </div>
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label"> Tipo de convenio:<span class="tx-danger">*</span> </label>
                            <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                <select class="form-control" name="convenio"
                                    data-placeholder="Elige uno">
                                    <option label="Elige uno"></option>
                                    <option {{ old('convenio') == 'Descuento' ? 'selected' : '' }}
                                    value="Nuevo">Nuevo</option>
                                    <option {{ old('convenio') == 'Mensualidad' ? 'selected' : '' }}
                                    value="Renovación">Renovación</option>
                                 </select>
                            </div>
                        </div>
                        
                        <div class="row mg-t-5">  
                            <label class="col-sm-4 form-control-label">Campus: <span class="tx-danger">*</span></label>
                            <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2" name="campus"
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
                                    <option {{ old('campus') == 'Rectoría' ? 'selected' : '' }} value="Rectoría">
                                        Rectoría</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mg-t-10">
                        <div align="center"class="col-sm-12" style=" background-color: #cccccc; height: 20px ">
                            <h5>DATOS DE LA ORGANIZACIÓN </h5>
                            </div>
                        </div>
                        {{-- Nombre empresa --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Nombre de la Empresa/Negocio <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('nombre_empresa') }}" name="nombre_empresa" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        {{-- Giro --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Giro con 5 opciones</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2 " name="giro_empresa"
                                    data-placeholder="Choose Browser">
                                    <option {{ old('giro_empresa') == 'Industrial' ? 'selected' : '' }}
                                        value="Industrial">Industrial</option>
                                    <option {{ old('giro_empresa') == 'Servicios' ? 'selected' : '' }}
                                        value="Servicios">Servicios</option>
                                    <option {{ old('giro_empresa') == 'Comercial' ? 'selected' : '' }}
                                        value="Comercial">Comercial</option>
                                    <option {{ old('giro_empresa') == 'No Gubernamental' ? 'selected' : '' }}
                                        value="No Gubernamental">No Gubernamental</option>
                                    <option {{ old('giro_empresa') == 'Sin fines de Lucro' ? 'selected' : '' }}
                                        value="Sin fines de Lucro">Sin fines de Lucro</option>
                                </select>
                            </div>
                        </div>
                        {{-- Dirección --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Dirección <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('direccion_empresa') }}" name="direccion_empresa"
                                    class="form-control" placeholder="">
                            </div>
                        </div>
                        {{-- Nombre del representante legal --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Nombre del representante legal <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('nombre_representante_legal') }}"
                                    name="nombre_representante_legal" class="form-control" placeholder="">
                            </div>
                        </div>
                        {{-- Nombre del contacto --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Nombre del contacto <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('nombre_contacto') }}" name="nombre_contacto"
                                    class="form-control" placeholder="">
                            </div>
                        </div>

                        {{-- Teléfono del contacto --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Teléfono de Contacto <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('telefono_contacto') }}" name="telefono_contacto"
                                    class="form-control" placeholder="">
                            </div>
                        </div>

                        {{-- Correo del contacto --}}
                        <div class="row mg-t-5">
                            <label class="col-sm-4 form-control-label">Correo de Contacto <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="email" value="{{ old('correo_contacto') }}" name="correo_contacto"
                                    class="form-control" placeholder="ejemplo@uane.edu.mx">
                            </div>
                        </div>


                        <div class="row mg-t-10">
                            <div align="center"class="col-sm-12" style=" background-color: #cccccc; height: 20px ">
                                <h5>DATOS DEL CONVENIO </h5>
                                </div>
                            </div>


                        <div class="row mg-t-30">
                            <label class="col-sm-4 form-control-label">Convenio para:</label>
                        </div>

                        <div class="row mg-t-10">

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_beca_convenio" value="Beca convenio"
                                        type="checkbox"><span>Beca convenio</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_practicas" value="Prácticas"
                                        type="checkbox"><span>Prácticas</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_servicio_social" value="Servicio social"
                                        type="checkbox"><span>Servicio social</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_servicio_otro" value="Otro" type="checkbox"
                                        id="check_otro"><span>Otro</span>
                                </label>
                            </div>
                        </div>

                        <div class="row" id="otro_check">
                            <div class="col-lg-12">
                                <label class="col-sm-4 form-control-label mg-t-10"></label>
                                <textarea rows="3" class="form-control" placeholder="Especificar otro:" name="convenio_otro_especificar"></textarea>  
                            </div>
                        </div>
                        <div class="row mg-t-10">
                            <div align="center"class="col-sm-12" style=" background-color: #cccccc; height: 20px ">
                                <h5>MODALIDADES </h5>
                                </div>
                            </div>

                        <div class="row mg-t-10">
                        <div class="col-md-3">
                            <label class="ckbox ">
                            <input value="presencial"  id="presencial" type="checkbox" >
                            <span>Modalidad Presencial</span>
                        </label>
                        </div>

                        <div class="col-md-3">
                            <label class="ckbox ">
                            <input value="enlinea"  id="enlinea" type="checkbox" >
                            <span>Modalidad en línea</span>
                        </label>
                        </div>
                        </div>
                        <!--Modalidad presencial-->
                        <div class="row mg-t-30" id="ModalidadPresencial" style="display: none">
                            <div align="center" class="col-sm-12" style=" background-color: #40BAB3; height: 20px " id="ModalidadPresencial">
                                <h5 style="color: white">MODALIDAD PRESENCIAL</h5>
                            </div>
                    <div class="row">
                        <label class="col-sm-1 form-control-label">Nivel: <span class="tx-danger">*</span></label>
                        <div class="col-sm-5 mg-t-10 mg-sm-t-0">
                            <select class="form-control" name="nivel_presencial"
                                data-placeholder="Elige uno">
                                <option label="Elige uno"></option>
                                <option {{ old('nivel_presencial') == 'N/A' ? 'selected' : '' }}
                                value="N/A">N/A</option>
                                <option {{ old('nivel_presencial') == 'Bachillerato' ? 'selected' : '' }}
                                value="Bachillerato">Bachillerato</option>
                                <option {{ old('nivel_presencial') == 'Carrera' ? 'selected' : '' }}
                                value="Carrera">Carrera</option>
                                <option {{ old('nivel_presencial') == 'Especialidad' ? 'selected' : '' }}
                                value="Especialidad">Especialidad</option>
                                <option {{ old('nivel_presencial') == 'Maestria' ? 'selected' : '' }}
                                value="Maestría">Maestría</option>
                                <option {{ old('nivel_presencial') == 'Doctorado' ? 'selected' : '' }}
                                value="Doctorado">Doctorado</option>
                                <option {{ old('nivel_presencial') == 'Bachillerato y Carrera' ? 'selected' : '' }}
                                value="Bachillerato y Carrera">Bachillerato y Carrera</option>
                                <option {{ old('nivel_presencial') == 'Bachillerato y Especialidad' ? 'selected' : '' }}
                                value="Bachillerato y Especialidad">Bachillerato y Especialidad</option>
                                <option {{ old('nivel_presencial') == 'Bachillerato y Maestría' ? 'selected' : '' }}
                                value="Bachillerato y Maestría">Bachillerato y Maestría</option>
                                <option {{ old('nivel_presencial') == 'Bachillerato y Doctorado' ? 'selected' : '' }}
                                value="Bachillerato y Doctorado">Bachillerato y Doctorado</option>
                                <option {{ old('nivel_presencial') == 'Bachillerato y Postgrados Presenciales' ? 'selected' : '' }}
                                value="Bachillerato y Postgrados Presenciales">Bachillerato y Postgrados Presenciales</option>
                                <option {{ old('nivel_presencial') == 'Carrera y Especialidad' ? 'selected' : '' }}
                                value="Carrera y Especialidad">Carrera y Especialidad</option>
                                <option {{ old('nivel_presencial') == 'Carrera y Maestría' ? 'selected' : '' }}
                                value="Carrera y Maestría">Carrera y Maestría</option>
                                <option {{ old('nivel_presencial') == 'Carrera y Doctorado' ? 'selected' : '' }}
                                value="Carrera y Doctorado">Carrera y Doctorado</option>
                                <option {{ old('nivel_presencial') == 'Carrera y Postgrados Presenciales' ? 'selected' : '' }}
                                value="Carrera y Postgrados Presenciales">Carrera y Postgrados Presenciales</option>
                                <option {{ old('nivel_presencial') == 'Especialidad y Maestría' ? 'selected' : '' }}
                                value="Especialidad y Maestría">Especialidad y Maestría</option>
                                <option {{ old('nivel_presencial') == 'Especialidad y Doctorado' ? 'selected' : '' }}
                                value="Especialidad y Doctorado">Especialidad y Doctorado</option>
                                <option {{ old('nivel_presencial') == 'Programas Presenciales (Esp, Maest y Doct)' ? 'selected' : '' }}
                                value="Programas Presenciales (Esp, Maest y Doct)">Programas Presenciales (Esp, Maest y Doct)</option>
                                <option {{ old('nivel_presencial') == 'Programas Presenciales (Pre y Postgrado)' ? 'selected' : '' }}
                                value="Programas Presenciales (Pre y Postgrado)">Programas Presenciales (Pre y Postgrado)</option>
                             </select>
                        </div>
                        <label class="col-sm-1.5 form-control-label">%: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-1 ">
                            <input type="text" name="beca_pre" value="{{ old('beca_pre') }}" class="form-control" placeholder="">
                        </div>
                        <label class="col-sm-1.5 form-control-label"> de </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="tipo_pre"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('tipo_pre') == 'N/A' ? 'selected' : '' }}
                                        value="N/A">N/A</option>
                                        <option {{ old('tipo_pre') == 'Descuento' ? 'selected' : '' }}
                                        value="Descuento">Descuento</option>
                                        <option {{ old('tipo_pre') == 'Beca' ? 'selected' : '' }}
                                        value="Beca">Beca</option>
                                     </select>
                                </div>    
                                <label class="col-sm-1.5 form-control-label"> en </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="aplica_pre"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('aplica_pre') == 'N/A' ? 'selected' : '' }} 
                                        value="N/A">N/A</option>
                                        <option {{ old('aplica_pre') == 'Inscripción' ? 'selected' : '' }} 
                                        value="Inscripción">Inscripción</option>
                                        <option {{ old('aplica_pre') == 'Mensualidad' ? 'selected' : '' }}  
                                        value="Mensualidad">Mensualidad</option>
                                     </select>
                                </div> 
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Seleccionar en caso de doble beneficio </label>
                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                            <select class="form-control" name="doble_beneficiopre"
                                data-placeholder="Elige uno">
                                <option label="Elige uno"></option>
                                <option {{ old('doble_beneficiopre') == 'N/A' ? 'selected' : '' }} 
                                value="N/A">N/A</option>
                                <option {{ old('doble_beneficiopre') == 'y' ? 'selected' : '' }} 
                                value="y">y</option>
                                <option {{ old('doble_beneficiopre') == 'o' ? 'selected' : '' }} 
                                value="o">o</option>
                             </select>
                        </div>
                        <label class="col-sm-1.5 form-control-label">  %: </label>
                        <div class="col-sm-1 ">
                            <input type="text" name="beca_preDB" value="{{ old('beca_preDB') }}" class="form-control" placeholder="">
                        </div>
                        <label class="col-sm-1.5 form-control-label"> de </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="tipo_preDB"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('tipo_preDB') == 'N/A' ? 'selected' : '' }} 
                                        value="N/A">N/A</option>
                                        <option {{ old('tipo_preDB') == 'Descuento' ? 'selected' : '' }} 
                                        value="Descuento">Descuento</option>
                                        <option {{ old('tipo_preDB') == 'Beca' ? 'selected' : '' }} 
                                        value="Beca">Beca</option>
                                     </select>
                                </div>    
                                <label class="col-sm-1.5 form-control-label"> en </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="aplica_preDB"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('aplica_preDB') == 'N/A' ? 'selected' : '' }}
                                        value="N/A">N/A</option>
                                        <option {{ old('aplica_preDB') == 'Descuento' ? 'selected' : '' }}
                                        value="Descuento">Inscripción</option>
                                        <option {{ old('aplica_preDB') == 'Mensualidad' ? 'selected' : '' }}
                                        value="Mensualidad">Mensualidad</option>
                                     </select>
                                </div> 
                    </div>
                    <div class="row mg-t-50">                    
                    <label class="col-sm-3 br-section">Legales:
                        <hr>
                    </label>
                </div> 
                    <div class="row mg-t-20">
                        <label class="col-sm-3 form-control-label">Vigencia: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                            <input type="text" value="{{ old('vigencia_pre') }}" name="vigencia_pre"class="form-control" placeholder="">
                        </div>                      
                    <label class="col-sm-3 form-control-label">Ciudad donde es aplicable: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                            <input type="text" value="{{ old('ciudad_pre') }}" name="ciudad_pre" class="form-control" placeholder="">
                        </div>
                   

                        <label class="col-sm-3 form-control-label">Ciclo de Vigencia: <span
                            class="tx-danger">*</span></label>
                    <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                        <input type="text" value="{{ old('cvigencia_pre') }}" name="cvigencia_pre"class="form-control" placeholder="">
                    </div>                      
                <label class="col-sm-3 form-control-label">A quien aplica el beneficio: <span
                            class="tx-danger">*</span></label>
                    <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                        <input type="text" value="{{ old('aqa_pre') }}" name="aqa_pre" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mg-t-20">
                    <div class="col-lg-12">
                        <label class="col-sm-12 form-control-label mg-t-10">Observaciones</label>
                        <textarea rows="3" class="form-control" value="{{ old('observaciones_pre') }}" placeholder="" name="observaciones_pre"></textarea>  
                    </div>
                </div>
            </div>
                    <!--Modalidad 100% en línea-->
                        <div class="row mg-t-30" id="ModalidadEnLinea" style="display: none">
                            <div align="center" class="col-sm-12" style=" background-color: #6C9B3B; height: 20px " id="ModalidadEnLinea">
                                <h5 style="color: white">MODALIDAD 100% EN LÍNEA</h5>
                            </div>
                    <div class="row">
                        <label class="col-sm-1 form-control-label">Nivel: <span class="tx-danger">*</span></label>
                        <div class="col-sm-5 mg-t-10 mg-sm-t-0">
                            <select class="form-control" name="nivel_enlinea"
                                data-placeholder="Elige uno">
                                <option label="Elige uno"></option>
                                <option {{ old('nivel_enlinea') == 'N/A' ? 'selected' : '' }}
                                value="N/A">N/A</option>
                                <option {{ old('nivel_enlinea') == 'Carrera' ? 'selected' : '' }}
                                value="Carrera">Carrera</option>
                                <option {{ old('nivel_enlinea') == 'Especialidad' ? 'selected' : '' }}
                                value="Especialidad">Especialidad</option>
                                <option {{ old('nivel_enlinea') == 'Maestría' ? 'selected' : '' }}
                                value="Maestría">Maestría</option>
                                <option {{ old('nivel_enlinea') == 'Doctorado' ? 'selected' : '' }}
                                value="Doctorado">Doctorado</option>
                                <option {{ old('nivel_enlinea') == 'Carrera y Especialidad' ? 'selected' : '' }}
                                value="Carrera y Especialidad">Carrera y Especialidad</option>
                                <option {{ old('nivel_enlinea') == 'Carrera y Maestría' ? 'selected' : '' }}
                                value="Carrera y Maestría">Carrera y Maestría</option>
                                <option {{ old('nivel_enlinea') == 'Carrera y Doctorado' ? 'selected' : '' }} 
                                value="Carrera y Doctorado">Carrera y Doctorado</option>
                                <option {{ old('nivel_enlinea') == 'Carrera y Postgrados 100% en línea' ? 'selected' : '' }}
                                value="Carrera y Postgrados Presenciales">Carrera y Postgrados 100% en línea</option>
                                <option {{ old('nivel_enlinea') == 'Especialidad y Maestría' ? 'selected' : '' }}
                                value="Especialidad y Maestría">Especialidad y Maestría</option>
                                <option {{ old('nivel_enlinea') == 'Especialidad y Doctorado' ? 'selected' : '' }}
                                value="Especialidad y Doctorado">Especialidad y Doctorado</option>
                                <option {{ old('nivel_enlinea') == 'Programas 100% en línea (Esp, Maest y Doct)' ? 'selected' : '' }}
                                value="Programas Presenciales (Esp, Maest y Doct)">Programas 100% en línea (Esp, Maest y Doct)</option>
                                <option {{ old('nivel_enlinea') == 'Programas 100% en línea (Pre y Postgrado)' ? 'selected' : '' }}
                                value="Programas Presenciales (Pre y Postgrado)">Programas 100% en línea (Pre y Postgrado)</option>
                             </select>
                        </div>
                        <label class="col-sm-1.5 form-control-label">%: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-1 ">
                            <input type="text" value="{{ old('beca_el') }}" name="beca_el" class="form-control" placeholder="">
                        </div>
                        <label class="col-sm-1.5 form-control-label"> de </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="tipo_el"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('tipo_el') == 'N/A' ? 'selected' : '' }}
                                        value="N/A">N/A</option>
                                        <option {{ old('tipo_el') == 'Descuento' ? 'selected' : '' }}
                                        value="Descuento">Descuento</option>
                                        <option {{ old('tipo_el') == 'Beca' ? 'selected' : '' }}
                                        value="Beca">Beca</option>
                                     </select>
                                </div>    
                                <label class="col-sm-1.5 form-control-label"> en </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="aplica_el"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('aplica_el') == 'N/A' ? 'selected' : '' }}
                                        value="N/A">N/A</option>
                                        <option {{ old('aplica_el') == 'Inscripción' ? 'selected' : '' }}
                                        value="Inscripción">Inscripción</option>
                                        <option {{ old('aplica_el') == 'Mensualidad' ? 'selected' : '' }}
                                        value="Mensualidad">Mensualidad</option>
                                     </select>
                                </div> 
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Seleccionar en caso de doble beneficio </label>
                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                            <select class="form-control" name="doble_beneficio"
                                data-placeholder="Elige uno">
                                <option label="Elige uno"></option>
                                <option {{ old('doble_beneficio') == 'N/A' ? 'selected' : '' }} 
                                value="N/A">N/A</option>
                                <option {{ old('doble_beneficio') == 'y' ? 'selected' : '' }}
                                value="y">y</option>
                                <option {{ old('doble_beneficio') == 'o' ? 'selected' : '' }}
                                value="o">o</option>
                             </select>
                        </div>
                        <label class="col-sm-1.5 form-control-label">  %: </label>
                        <div class="col-sm-1 ">
                            <input type="text" value="{{ old('beca_elDB') }}"name="beca_elDB" class="form-control" placeholder="">
                        </div>
                        <label class="col-sm-1.5 form-control-label"> de </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="tipo_elDB"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('tipo_elDB') == 'N/A' ? 'selected' : '' }}
                                        value="N/A">N/A</option>
                                        <option {{ old('tipo_elDB') == 'Descuento' ? 'selected' : '' }}
                                        value="Descuento">Descuento</option>
                                        <option {{ old('tipo_elDB') == 'Beca' ? 'selected' : '' }}
                                        value="Beca">Beca</option>
                                     </select>
                                </div>    
                                <label class="col-sm-1.5 form-control-label"> en </label>
                                <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" name="aplica_elDB"
                                        data-placeholder="Elige uno">
                                        <option label="Elige uno"></option>
                                        <option {{ old('aplica_elDB') == 'N/A' ? 'selected' : '' }}
                                        value="N/A">N/A</option>
                                        <option {{ old('aplica_elDB') == 'Inscripción' ? 'selected' : '' }}
                                        value="Inscripción">Inscripción</option>
                                        <option {{ old('aplica_elDB') == 'Mensualidad' ? 'selected' : '' }}
                                        value="Mensualidad">Mensualidad</option>
                                     </select>
                                </div> 
                    </div>
                    <div class="row mg-t-50">                    
                    <label class="col-sm-3 br-section">Legales:
                        <hr>
                    </label>
                </div> 
                    <div class="row mg-t-20">
                        <label class="col-sm-3 form-control-label">Vigencia: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                            <input type="text" value="{{ old('vigencia_el') }}" name="vigencia_el"class="form-control" placeholder="">
                        </div>                      
                    <label class="col-sm-3 form-control-label">Ciudad donde es aplicable: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                            <input type="text" value="{{ old('ciudad_el') }}" name="ciudad_el" class="form-control" placeholder="">
                        </div>
                   

                        <label class="col-sm-3 form-control-label">Ciclo de Vigencia: <span
                            class="tx-danger">*</span></label>
                    <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                        <input type="text" value="{{ old('cvigencia_el') }}" name="cvigencia_el"class="form-control" placeholder="">
                    </div>                      
                <label class="col-sm-3 form-control-label">A quien aplica el beneficio: <span
                            class="tx-danger">*</span></label>
                    <div class="col-sm-3 mg-t-10 mg-sm-t-0">
                        <input type="text" value="{{ old('aqa_el') }}" name="aqa_el" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mg-t-20">
                    <div class="col-lg-12">
                        <label class="col-sm-12 form-control-label mg-t-10">Observaciones</label>
                        <textarea rows="3" class="form-control" value="{{ old('observaciones_el') }}" placeholder="" name="observaciones_el"></textarea>  
                    </div>
                </div>
            </div>
  
                     <div class="row mg-t-20 mg-lg-t-10">
                        <div align="center" class= "col-sm-12" style=" background-color: #DE453B; height: 20px " id="ModalidadEnLinea">
                            <h5 style="color: white">ALCANCE DEL CONVENIO</h5>
                        </div>

                    </br>
                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="alcance" value="Municipal"
                                        type="checkbox"><span>Municipal</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="alcance" value="Estatal" type="checkbox"><span>Estatal</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="alcance" value="Nacional"
                                        type="checkbox"><span>Nacional</span>
                                </label>
                            </div>
                        </div>


                        <div class="row" id="otro_check">
                            <div class="col-lg-12">
                                <label class="col-sm-4 form-control-label mg-t-10">Observaciones</label>
                                <textarea rows="3" class="form-control" placeholder="" name="observaciones"></textarea>  
                            </div>
                        </div>



                        <div class="row mg-t-20">
                         <div align="center"class="col-sm-12" style=" background-color: #e7c209; height: 20px ">
                                    <h5>DOCUMENTO</h5>
                                </div>
                            <div class=" col-md-12 ht-200 bg-gray-200 d-flex align-items-center justify-content-center">
                                <input type="file" id="file-1" class="inputfile" name="documento"
                                    data-multiple-caption="{count} files selected"
                                    accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
                                <label for="file-1">
                                    <i class="icon ion-ios-upload-outline tx-24"></i>
                                    <span>Sube un documento DOCX o PDF</span>
                                </label>
                            </div><!-- ht-200 -->
                        </div>

                        <div class="form-layout-footer mg-t-30">
                            <button class="buttonGuardar">Guardar convenio</button>
                        </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->

                </form>
            </div><!-- col-6 -->

        </div><!-- row -->
    </div>
</div>
@endsection

@push('css')
<link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">

@endpush
@push('css')
<style>
.buttonGuardar{
    color:#73243D;
    height:35px; 
    width:33.3%; 
    margin: 5px -15%; 
    position:relative;
    top:50%; 
    left:50%;
    }
</style>
@endpush
@push('css')
<style>
.buttonSolicitud{
    color:#40BAB3;
    height:35px; 
    width:33.3%; 
    margin: 5px -15%; 
    position:relative;
    top:50%; 
    left:50%;
    }
</style>
@endpush
@push('css')
<style>
.buttonPDF{
    color:#40BAB3;
    height:35px; 
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
@push('js')
<script type="text/javascript">
    $(function(){
     $("#presencial").click(function(){
     if($(this).is(":checked")){
     $('#ModalidadPresencial').show();
     }else{
     $('#ModalidadPresencial').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
@push('js')
<script type="text/javascript">
    $(function(){
     $("#enlinea").click(function(){
     if($(this).is(":checked")){
     $('#ModalidadEnLinea').show();
     }else{
     $('#ModalidadEnLinea').hide();
     }
                                                             
     })
                                                           
     })
                               
</script>
@endpush
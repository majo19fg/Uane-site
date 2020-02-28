<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Meta -->
    <meta name="description" content="UANE Marketing">
    <meta name="author" content="UANE">
    <!-- vendor css -->
  </head>

  <body>
    <div class="form-layout form-layout-4">
        <div align="right"><img  src="{{ asset('/multi/images/campus/uanerectoria.png') }}"width="194px" height="60px"/></div>
        <div align="center"class="col-sm-12" style=" background-color: #73243D; height: 20px ">
           <h3 style="color: white">FICHA TÉCNICA DE CONVENIO</h3>
           </div>
               {{-- Campus --}}
        <div class="row">
            <center><label class="col-sm-4 form-control-label"><strong>ID Solicitud: </strong></label> 
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->id }} </label> 
            <label class="col-sm-4 form-control-label"><strong>  Fecha de Inicio: </strong></label> 
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->fecha_inicio }}</label></center>
       </div>
               {{-- Campus --}}
        <div class="row">
            <center><label class="col-sm-4 form-control-label"><strong>Tipo de convenio: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->convenio }}          </label>  
            <label class="col-sm-4 form-control-label"><strong>  Campus: </strong></label>
            <label class="col-sm-6 mg-t-10 mg-sm-t-0">{{ $convenio->campus }}</label></center>
            </div>
    
            <div align="center"class="col-sm-12" style=" background-color: #cccccc; height: 20px ">
                <h5>DATOS DE LA ORGANIZACIÓN: </h5>
                </div>
        {{-- Nombre empresa --}}
        <div align="left"class="row mg-t-10">
            <label class="col-sm-4 form-control-label"><strong>Nombre: <strong></label>
            <label class="col-sm-4 form-control-label">{{ $convenio->nombre_empresa }}</label>
            </div>
        {{-- Giro --}}
        <div align="left"class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Giro: <strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->giro_empresa }}</label>
        </div>
        {{-- Dirección --}}
        <div align="left"class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Dirección: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->direccion_empresa }}</label>
            </div>
        {{-- Nombre del representante legal --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Representante legal: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->nombre_representante_legal }}</label>
            </div>
        {{-- Correo del representante legal --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong> Correo representante legal: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->correo_representante }}</label>
            </div>
        {{-- Nombre del contacto --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Nombre del contacto: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->nombre_contacto }}</label>
            </div>   
        {{-- Teléfono del contacto --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Teléfono de Contacto: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->telefono_contacto }}</label>
        </div>   
        {{-- Correo del contacto --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Correo de Contacto: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->correo_contacto }}</label>
        </div>
        <div align="center"class="col-sm-12" style=" background-color: #cccccc; height: 20px ">
            <h5>DATOS DEL CONVENIO: </h5>
            </div>
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>Convenio para: <strong></label>
            <label name="beca">{{ $convenio->convenio_para_beca_convenio }}</label>
            <label name="practicas">{{ $convenio->convenio_para_practicas }}</label>
            <label name="servicioSocial">{{ $convenio->convenio_para_servicio_social }}</label>
            <label name="servicio">{{ $convenio->convenio_para_servicio_otro }}</label>
        </div>
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"><strong>En caso de seleccionar otro especifique: <strong></label>
            <label class="col-sm-4 form-control-label">{{ $convenio->convenio_otro_especificar }}</label>
        </div>
        <!--Modalidad presencial-->
        <div align="center" class="row mg-t-30" style=" background-color: #40BAB3; height: 20px " id="ModalidadPresencial">
            <h5 style="color: white">MODALIDAD PRESENCIAL</h5>
        </div>
        <div class="row mg-t-20">
            <label class="col-sm-4"><strong>Nivel: </strong></label>
            <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->nivel_presencial }} </label>
            <label class="col-sm-4">{{ $convenio->beca_pre }}<strong> % </strong><strong> de </strong>{{ $convenio->tipo_pre }}<strong> en </strong>{{ $convenio->aplica_pre }}</label>
        </div>
        <div class="row mg-t-20">
        <label class="col-sm-4"><strong>Seleccionar en caso de doble beneficio: </strong></label>
        <label class="col-sm-4">{{ $convenio->doble_beneficiopre }}</label>
        <label class="col-sm-4"> {{ $convenio->beca_preDB }}<strong> % </strong><strong> de </strong>{{ $convenio->tipo_preDB }}<strong> en </strong>{{ $convenio->aplica_preDB }}</label></p>
        </div>
        <div align="center"class="col-sm-12" style=" background-color: #ffe1dc; height: 20px ">
            <h5>LEGALES:</h5>
        </div>
    <div class="row mg-t-5">
        <label class="col-sm-4"><strong>Vigencia: </strong></label>
        <label class="col-sm-4">{{ $convenio->vigencia_pre }}</label>
        <label class="col-sm-4"><strong>Ciudad donde es aplicable: </strong></label>
        <label class="col-sm-6">{{ $convenio->ciudad_pre }}</label>
         </div>
    <div class="row mg-t-5">
        <label class="col-sm-4"><strong>Ciclo de Vigencia:  </strong></label>
        <label class="col-sm-8 mg-t-10 mg-sm-t-0">{{ $convenio->cvigencia_pre }}</label>
    </div>
    <div class="row mg-t-5">
        <label class="col-sm-4"><strong>A quien aplica el beneficio:  </strong></label>
        <label class="col-sm-8">{{ $convenio->aqa_pre }}</label>
         </div>
    <div class="row mg-t-5">
        <label class="col-sm-4"><strong>Observaciones adicionales:  </strong></label>
        <div class="col-sm-8">{{ $convenio->observaciones_pre }}</label>
         </div>
    <!--Modalidad 100% en línea-->
    <div align="center" class="row mg-t-30" style=" background-color: #6C9B3B; height: 20px " id="ModalidadEnLinea">
        <h5 style="color: white">MODALIDAD 100% EN LÍNEA</h5>
    </div>
    <div class="row mg-t-20">
        <label class="col-sm-4"><strong>Nivel: </strong></label>
        <label class="col-sm-4 mg-t-10 mg-sm-t-0">{{ $convenio->nivel_enlinea }} </label>
        <label class="col-sm-4">{{ $convenio->beca_el }}<strong> % </strong><strong> de </strong>{{ $convenio->tipo_el }}<strong> en </strong>{{ $convenio->aplica_el }}</label>
    </div>
    <div class="row mg-t-20">
    <label class="col-sm-4"><strong>Seleccionar en caso de doble beneficio: </strong></label>
    <label class="col-sm-4">{{ $convenio->doble_beneficio }}</label>
    <label class="col-sm-4"> {{ $convenio->beca_elDB }}<strong> % </strong><strong> de </strong>{{ $convenio->tipo_elDB }}<strong> en </strong>{{ $convenio->aplica_elDB }}</label></p>
    </div>
    <div align="center"class="col-sm-12" style=" background-color: #ffe1dc; height: 20px ">
        <h5>LEGALES:</h5>
    </div>
<div class="row mg-t-5">
    <label class="col-sm-4"><strong>Vigencia: </strong></label>
    <label class="col-sm-4">{{ $convenio->vigencia_el }}</label>
    <label class="col-sm-4"><strong>Ciudad donde es aplicable: </strong></label>
    <label class="col-sm-6">{{ $convenio->ciudad_el }}</label>
     </div>
<div class="row mg-t-5">
    <label class="col-sm-4"><strong>Ciclo de Vigencia:  </strong></label>
    <label class="col-sm-8 mg-t-10 mg-sm-t-0">{{ $convenio->cvigencia_el }}</label>
</div>
<div class="row mg-t-5">
    <label class="col-sm-4"><strong>A quien aplica el beneficio:  </strong></label>
    <label class="col-sm-8">{{ $convenio->aqa_el }}</label>
     </div>
<div class="row mg-t-5">
    <label class="col-sm-4"><strong>Observaciones adicionales:  </strong></label>
    <label class="col-sm-8">{{ $convenio->observaciones_el }}</label>
     </div>
     <div align="center" class="row mg-t-30" style=" background-color: #DE453B; height: 20px " id="ModalidadEnLinea">
        <h5 style="color: white">ALCANCE DEL CONVENIO</h5>
    </div>
    <div class="row mg-t-5">
        <label class="col-sm-4"><strong>Alcance:  </strong></label>
        <label class="col-sm-8">{{ $convenio->alcance }}</label>
         </div>
         <div class="row mg-t-5">
            <label class="col-sm-4"><strong>Observaciones adicionales:  </strong></label>
            <label class="col-sm-8">{{ $convenio->observaciones }}</label>
             </div>
             <div align="center"class="col-sm-12" style=" background-color: #e7c209; height: 20px ">
                <h5>DOCUMENTO:</h5>
            </div>
          <div class="row mg-t-5">
                <label class="col-sm-4"><strong>Nombre:  </strong></label>
                <label class="col-sm-8">{{ $convenio->nombre_documento }}</label>
                 </div>
        <div class="row mg-t-10">
            <label class="col-sm-4 form-control-label"><strong>Firma por parte de UANE:<strong></label>
            </br>
        </div>
        </div>

        <footer class="br-footer">
            <div class="footer-left">
              <div class="mg-b-2"><center>UANE &copy; 2020.</center> </div>
            </div>
            <div class="footer-right d-flex align-items-center">
              
            </div>
          </footer>
    </div>

    <script src="/admin/lib/jquery/jquery.min.js"></script>
    <script src="/admin/lib/jquery/jquery.richtext.js"></script>
    <script src="/admin/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="/admin/lib/select2/js/select2.full.min.js"></script> --}}
    <script src="/admin/lib/select2/js/select2.min.js"></script>
    <script src="/admin/lib/parsleyjs/parsley.min.js"></script>
    <script src="/admin/lib/parsleyjs/i18n/es.js"></script>
    <script src="/admin/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admin/lib/moment/min/moment.min.js"></script>
    <script src="/admin/lib/peity/jquery.peity.min.js"></script>

    <script src="/admin/js/bracket.js"></script>
  </body>
</html>


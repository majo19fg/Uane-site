

//Campus Var
var saltillo    = $('select option[value=Saltillo]');
var torreon     = $('select option[value=Torreón]');
var monclova    = $('select option[value=Monclova]');
var sabinas     = $('select option[value=Sabinas]');
var pNegras     = $('select option[value="Piedras Negras"]');
var monterrey   = $('select option[value=Monterrey]');
var reynosa     = $('select option[value=Reynosa]');
var matamoros   = $('select option[value=Matamoros]');
var enlinea   = $('select option[value=En linea]');
//

//Tipo Programa Var
var bachillerato  = $('select option[value=Bachillerato]');
var licenciatura  = $('select option[value=Licenciatura]');
var maestria      = $('select option[value=Maestría]');
var especialidad  = $('select option[value=Especialidad]');
var doctorado     = $('select option[value=Doctorado]');
var licenciaturaenlínea  = $('select option[value=Licenciatura En Línea]');
var maestríaenlínea  = $('select option[value=Maestría En Línea]');
var especialidadenlínea  = $('select option[value=Especialidad En Línea]');

//

//Programas Var
//Saltillo
  var BachSaltillo  = $('.BachSaltillo'); 
  var LicSaltillo   = $('.LicSaltillo'); 
  var MaeSaltillo   = $('.MaeSaltillo'); 
  var EspSaltillo   = $('.EspSaltillo'); 
  var DocSaltillo   = $('.DocSaltillo'); 
//Torreón
  var BachTorreon  = $('.BachTorreon'); 
  var LicTorreon   = $('.LicTorreon'); 
  var MaeTorreon   = $('.MaeTorreon'); 
  var EspTorreon   = $('.EspTorreon'); 
  var DocTorreon   = $('.DocTorreon'); 
//Monclova
  var BachMonclova  = $('.BachMonclova'); 
  var LicMonclova   = $('.LicMonclova'); 
  var MaeMonclova   = $('.MaeMonclova'); 
  var EspMonclova   = $('.EspMonclova'); 
  var DocMonclova   = $('.DocMonclova'); 
//Sabinas
  var BachSabinas  = $('.BachSabinas'); 
  var LicSabinas   = $('.LicSabinas'); 
  var MaeSabinas   = $('.MaeSabinas'); 
  var EspSabinas   = $('.EspSabinas'); 
  var DocSabinas   = $('.DocSabinas'); 
//Piedras Negras
  var BachPiedras  = $('.BachPiedras'); 
  var LicPiedras   = $('.LicPiedras'); 
  var MaePiedras   = $('.MaePiedras'); 
  var EspPiedras   = $('.EspPiedras'); 
  var DocPiedras   = $('.DocPiedras'); 
//Monterrey
  var BachMonterrey  = $('.BachMonterrey'); 
  var LicMonterrey   = $('.LicMonterrey'); 
  var MaeMonterrey   = $('.MaeMonterrey'); 
  var EspMonterrey   = $('.EspMonterrey'); 
  var DocMonterrey   = $('.DocMonterrey'); 
//Reynosa
  var BachReynosa  = $('.BachReynosa'); 
  var LicReynosa   = $('.LicReynosa'); 
  var MaeReynosa   = $('.MaeReynosa'); 
  var EspReynosa   = $('.EspReynosa'); 
  var DocReynosa   = $('.DocReynosa'); 
//Matamoros
  var BachMatamoros  = $('.BachMatamoros'); 
  var LicMatamoros   = $('.LicMatamoros'); 
  var MaeMatamoros   = $('.MaeMatamoros'); 
  var EspMatamoros   = $('.EspMatamoros'); 
  var DocMatamoros   = $('.DocMatamoros'); 

//En línea
  var LicEL    = $('.LicEL');
  var mel    = $('.MEL');
  var eel   = $('.EEL');




//Esconder Campus
saltillo.attr('disabled', 'disabled').hide();
torreon.attr('disabled', 'disabled').hide();
monclova.attr('disabled', 'disabled').hide();
sabinas.attr('disabled', 'disabled').hide();
pNegras.attr('disabled', 'disabled').hide();
monterrey.attr('disabled', 'disabled').hide();
reynosa.attr('disabled', 'disabled').hide();
matamoros.attr('disabled', 'disabled').hide();
enlinea.attr('disabled', 'disabled').hide();
//Esconder Campus

//Esconder Tipo Programa
bachillerato.attr('disabled', 'disabled').hide();
licenciatura.attr('disabled', 'disabled').hide();
maestria.attr('disabled', 'disabled').hide();
especialidad.attr('disabled', 'disabled').hide();
doctorado.attr('disabled', 'disabled').hide();
licenciaturaenlínea.attr('disabled', 'disabled').hide();
maestríaenlínea.attr('disabled', 'disabled').hide();
especialidadenlínea.attr('disabled', 'disabled').hide();

//

//Esconder grupos de programas
BachSaltillo.attr('disabled', 'disabled').hide();
LicSaltillo.attr('disabled', 'disabled').hide();
MaeSaltillo.attr('disabled', 'disabled').hide();
EspSaltillo.attr('disabled', 'disabled').hide();
DocSaltillo.attr('disabled', 'disabled').hide();

BachTorreon.attr('disabled', 'disabled').hide();
LicTorreon.attr('disabled', 'disabled').hide();
MaeTorreon.attr('disabled', 'disabled').hide();
EspTorreon.attr('disabled', 'disabled').hide();
DocTorreon.attr('disabled', 'disabled').hide();

BachMonclova.attr('disabled', 'disabled').hide();
LicMonclova.attr('disabled', 'disabled').hide();
MaeMonclova.attr('disabled', 'disabled').hide();
EspMonclova.attr('disabled', 'disabled').hide();
DocMonclova.attr('disabled', 'disabled').hide();

BachSabinas.attr('disabled', 'disabled').hide();
LicSabinas.attr('disabled', 'disabled').hide();
MaeSabinas.attr('disabled', 'disabled').hide();
EspSabinas.attr('disabled', 'disabled').hide();
DocSabinas.attr('disabled', 'disabled').hide();

BachPiedras.attr('disabled', 'disabled').hide();
LicPiedras.attr('disabled', 'disabled').hide();
MaePiedras.attr('disabled', 'disabled').hide();
EspPiedras.attr('disabled', 'disabled').hide();
DocPiedras.attr('disabled', 'disabled').hide();

BachMonterrey.attr('disabled', 'disabled').hide();
LicMonterrey.attr('disabled', 'disabled').hide();
MaeMonterrey.attr('disabled', 'disabled').hide();
EspMonterrey.attr('disabled', 'disabled').hide();
DocMonterrey.attr('disabled', 'disabled').hide();

BachReynosa.attr('disabled', 'disabled').hide();
LicReynosa.attr('disabled', 'disabled').hide();
MaeReynosa.attr('disabled', 'disabled').hide();
EspReynosa.attr('disabled', 'disabled').hide();
DocReynosa.attr('disabled', 'disabled').hide();

BachMatamoros.attr('disabled', 'disabled').hide();
LicMatamoros.attr('disabled', 'disabled').hide();
MaeMatamoros.attr('disabled', 'disabled').hide();
EspMatamoros.attr('disabled', 'disabled').hide();
DocMatamoros.attr('disabled', 'disabled').hide();

LicEL.attr('disabled', 'disabled').hide();
mel.attr('disabled', 'disabled').hide();
eel.attr('disabled', 'disabled').hide();
//
$(function() {

//Modalidad Aspirante -> Campus
$('#modalidadAspirante').change(function() {
  switch($(this).val()){
    case 'Presencial':
      saltillo.removeAttr('disabled').show();
      torreon.removeAttr('disabled').show();
      monclova.removeAttr('disabled').show();
      sabinas.removeAttr('disabled').show();
      pNegras.removeAttr('disabled').show();
      monterrey.removeAttr('disabled').show();
      reynosa.removeAttr('disabled').show();
      matamoros.removeAttr('disabled').show();

      $('#campusAspirante').prop('selectedIndex', 0);
      $('#tipoProgramaAspirante').prop('selectedIndex', 0);
      $('#programaAspirante').prop('selectedIndex', 0);

      //Campus aspirante -> Tipo de programa
        $('#campusAspirante').change(function(){
          switch ($(this).val()) {
            case 'Saltillo': 
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.removeAttr('disabled').show();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.removeAttr('disabled').show();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.removeAttr('disabled').show();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Especialidad':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.removeAttr('disabled').show();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Doctorado':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //
              LicEL.removeAttr('disabled', 'disabled').hide();
              mel.removeAttr('disabled', 'disabled').hide();
              eel.removeAttr('disabled', 'disabled').hide();
            break;
            case 'Torreón':  
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show();   
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachTorreon.removeAttr('disabled').show();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.removeAttr('disabled').show();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.removeAttr('disabled').show();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.removeAttr('disabled').show();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.removeAttr('disabled').show();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              //   
              LicEL.removeAttr('disabled', 'disabled').hide();
              mel.removeAttr('disabled', 'disabled').hide();
              eel.removeAttr('disabled', 'disabled').hide();
            break;
            case 'Monclova':     
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show();
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachMonclova.removeAttr('disabled').show();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.removeAttr('disabled').show();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.removeAttr('disabled').show();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.removeAttr('disabled').show();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              //    
              LicEL.removeAttr('disabled', 'disabled').hide();
              mel.removeAttr('disabled', 'disabled').hide();
              eel.removeAttr('disabled', 'disabled').hide();
            break;
            case 'Sabinas':      
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.attr('disabled', 'disabled').hide();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachSabinas.removeAttr('disabled').show();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.removeAttr('disabled').show();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.removeAttr('disabled').show();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.removeAttr('disabled').show();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              //  
              LicEL.removeAttr('disabled', 'disabled').hide();
              mel.removeAttr('disabled', 'disabled').hide();
              eel.removeAttr('disabled', 'disabled').hide(); 
            break;
            case 'Piedras Negras':  
            $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show();
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachPiedras.removeAttr('disabled').show();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.removeAttr('disabled').show();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.removeAttr('disabled').show();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.removeAttr('disabled').show();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              //   
              LicEL.removeAttr('disabled', 'disabled').hide();
              mel.removeAttr('disabled', 'disabled').hide();
              eel.removeAttr('disabled', 'disabled').hide();
            break;
            case 'Monterrey':  
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show();
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachMonterrey.removeAttr('disabled').show();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.removeAttr('disabled').show();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.removeAttr('disabled').show();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.removeAttr('disabled').show();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              // 
              LicEL.attr('disabled', 'disabled').hide();
              mel.attr('disabled', 'disabled').hide();
              eel.attr('disabled', 'disabled').hide();
            break;
            case 'Reynosa':  
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show();
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachReynosa.removeAttr('disabled').show();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.removeAttr('disabled').show();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.removeAttr('disabled').show();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.removeAttr('disabled').show();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              //  
              LicEL.attr('disabled', 'disabled').hide();
              mel.attr('disabled', 'disabled').hide();
              eel.attr('disabled', 'disabled').hide();
            break;
            case 'Matamoros':  
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.removeAttr('disabled').show();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.removeAttr('disabled').show();
              doctorado.removeAttr('disabled').show(); 
              //Tipo de programa -> Torreón
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Bachillerato':
                      BachMatamoros.removeAttr('disabled').show();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Licenciatura':
                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.removeAttr('disabled').show();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Maestría':
                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.removeAttr('disabled').show();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Especialidad':
                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.removeAttr('disabled').show();
                      DocMatamoros.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                    case 'Doctorado':
                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.removeAttr('disabled').show();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();
                                      $('#programaAspirante').prop('selectedIndex', 0);

                    break;
                  }
                })
              //  
              LicEL.attr('disabled', 'disabled').hide();
              mel.attr('disabled', 'disabled').hide();
              eel.attr('disabled', 'disabled').hide();
            break;
          
          }
        })
      //
    break;
    case 'En línea':
      saltillo.removeAttr('disabled').show();
      torreon.removeAttr('disabled').show();
      monclova.removeAttr('disabled').show();
      sabinas.removeAttr('disabled').show();
      pNegras.removeAttr('disabled').show();
      monterrey.removeAttr('disabled').show();
      reynosa.removeAttr('disabled').show();
      matamoros.removeAttr('disabled').show();

      LicEL.attr('disabled', 'disabled').hide();
      mel.attr('disabled', 'disabled').hide();
      eel.attr('disabled', 'disabled').hide();

      $('#campusAspirante').prop('selectedIndex', 0);
      $('#tipoProgramaAspirante').prop('selectedIndex', 0);
      $('#programaAspirante').prop('selectedIndex', 0);

      //Campus aspirante -> Tipo de programa
      $('#campusAspirante').change(function(){
          switch ($(this).val()) {
            case 'Saltillo': 
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //
            break;
            case 'Torreón':  
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //   
            break;
            case 'Monclova':     
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //        
            break;
            case 'Sabinas':      
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //     
            break;
            case 'Piedras Negras':  
            $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //   
            break;
            case 'Monterrey':  
              $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //   
            break;
            case 'Reynosa':  
            $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //   
            break;
            case 'Matamoros':  
            $('#programaAspirante').prop('selectedIndex', 0);
              $('#tipoProgramaAspirante').prop('selectedIndex', 0);
              bachillerato.attr('disabled', 'disabled').hide();
              licenciatura.removeAttr('disabled').show();
              maestria.removeAttr('disabled').show();
              especialidad.attr('disabled', 'disabled').hide();
              doctorado.attr('disabled', 'disabled').hide();
              //Tipo de programa -> Saltillo
                $('#tipoProgramaAspirante').change(function(){
                  switch($(this).val()){
                    case 'Licenciatura':
                      $('#programaAspirante').prop('selectedIndex', 0);

                      LicEL.removeAttr('disabled').show();
                      
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                    case 'Maestría':
                      mel.removeAttr('disabled').show();
                      $('#programaAspirante').prop('selectedIndex', 0);
                      BachSaltillo.attr('disabled', 'disabled').hide();
                      LicSaltillo.attr('disabled', 'disabled').hide();
                      MaeSaltillo.attr('disabled', 'disabled').hide();
                      EspSaltillo.attr('disabled', 'disabled').hide();
                      DocSaltillo.attr('disabled', 'disabled').hide();

                      BachTorreon.attr('disabled', 'disabled').hide();
                      LicTorreon.attr('disabled', 'disabled').hide();
                      MaeTorreon.attr('disabled', 'disabled').hide();
                      EspTorreon.attr('disabled', 'disabled').hide();
                      DocTorreon.attr('disabled', 'disabled').hide();

                      BachMonclova.attr('disabled', 'disabled').hide();
                      LicMonclova.attr('disabled', 'disabled').hide();
                      MaeMonclova.attr('disabled', 'disabled').hide();
                      EspMonclova.attr('disabled', 'disabled').hide();
                      DocMonclova.attr('disabled', 'disabled').hide();

                      BachSabinas.attr('disabled', 'disabled').hide();
                      LicSabinas.attr('disabled', 'disabled').hide();
                      MaeSabinas.attr('disabled', 'disabled').hide();
                      EspSabinas.attr('disabled', 'disabled').hide();
                      DocSabinas.attr('disabled', 'disabled').hide();

                      BachPiedras.attr('disabled', 'disabled').hide();
                      LicPiedras.attr('disabled', 'disabled').hide();
                      MaePiedras.attr('disabled', 'disabled').hide();
                      EspPiedras.attr('disabled', 'disabled').hide();
                      DocPiedras.attr('disabled', 'disabled').hide();

                      BachMonterrey.attr('disabled', 'disabled').hide();
                      LicMonterrey.attr('disabled', 'disabled').hide();
                      MaeMonterrey.attr('disabled', 'disabled').hide();
                      EspMonterrey.attr('disabled', 'disabled').hide();
                      DocMonterrey.attr('disabled', 'disabled').hide();

                      BachReynosa.attr('disabled', 'disabled').hide();
                      LicReynosa.attr('disabled', 'disabled').hide();
                      MaeReynosa.attr('disabled', 'disabled').hide();
                      EspReynosa.attr('disabled', 'disabled').hide();
                      DocReynosa.attr('disabled', 'disabled').hide();

                      BachMatamoros.attr('disabled', 'disabled').hide();
                      LicMatamoros.attr('disabled', 'disabled').hide();
                      MaeMatamoros.attr('disabled', 'disabled').hide();
                      EspMatamoros.attr('disabled', 'disabled').hide();
                      DocMatamoros.attr('disabled', 'disabled').hide();
                    break;
                  }
                })
              //  
            break;
          
          }
        })
      //
    break;
  }
})
//
})
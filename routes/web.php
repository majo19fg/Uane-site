<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::view('/test', 'welcome');

use Illuminate\Support\Facades\App;

Route::get('/prueba', 'PagesController@empleabilidad');

Route::get('/', 'PagesController@index');



//Programas
Route::get('/programas', 'ProgramasController@programas')->name('programas.index');
Route::get('/programas/bachillerato', 'ProgramasController@bach')->name('programas.bach');
Route::get('/programas/licenciatura', 'ProgramasController@lic')->name('programas.lic');
Route::get('/programas/ingenieria', 'ProgramasController@ing')->name('programas.ing');
Route::get('/programas/maestria', 'ProgramasController@maes')->name('programas.maes');
Route::get('/programas/especialidad', 'ProgramasController@esp')->name('programas.esp');
Route::get('/programas/doctorado', 'ProgramasController@doc')->name('programas.doc');
Route::get('/programas/presencial', 'ProgramasController@prec')->name('programas.prec');
Route::get('/programas/en-linea', 'ProgramasController@linea')->name('programas.linea');
Route::get('/programas/{programa}', 'ProgramasController@show')->name('programas.lista');
Route::post('/programas/aspirante', 'ProgramasController@datosAspirante')->name('guardar.aspirante');
Route::post('/programas/aspirante/index', 'ProgramasController@datosAspirante2')->name('guardar.aspirante2');



//Nuestra historia
Route::get('/somos-uane/nuestra-historia', 'PagesController@historia')->name('somos-uane.historia');
Route::get('/somos-uane/el-rector', 'PagesController@rector')->name('somos-uane.rector');
Route::get('/somos-uane/TérminosyCondiciones', 'PagesController@legales')->name('somos-uane.legales');


//admisiones y vinculación
Route::get('/vinculacion/convenios-empresariales', 'PagesController@convenios')->name('admisiones.convenios');
Route::get('/admisiones/beca-presencial', 'PagesController@becas')->name('admisiones.beca-presencial');

Route::get('/vinculacion/practicas-profesionales', 'PagesController@practicas')->name('admisiones.practicas');
Route::get('/vinculacion/empleabilidad', 'PagesController@empleabilidad')->name('admisiones.empleabilidad');

//Exauane
Route::get('/proximamente', 'PagesController@proximamente')->name('coming-soon');


//Blog
Route::get('/Noticias', 'PagesController@NoticiasEventos')->name('blog.noticias');
Route::get('/vozuane/comunicado-del-rector-analogia', 'PagesController@NoticiasEventos1')->name('blog.rector1');
Route::get('/vozuane/comunicado-del-rector', 'PagesController@NoticiasEventos2')->name('blog.rector2');
Route::get('/Noticias/interuane2019', 'PagesController@NoticiasEventos4')->name('blog.interuane');
Route::get('/VozUane/tips-para-mejorar-tu-curriculum', 'PagesController@NoticiasEventos5')->name('blog.cv');
Route::get('/VozUane/6-pasos-para-comenzar-a-ser-emprendedor', 'PagesController@noticia11')->name('blog.6-pasos');
Route::get('/Noticias/congreso-internacional-de-empleabilidad', 'PagesController@NoticiasEventos6')->name('blog.empleabilidad');
Route::get('/Noticias/sabias-que-en-uane-puedes-cursar-un-diplomado-como-opcion-de-titulacion', 'PagesController@NoticiasEventos7')->name('blog.titulacion');
Route::get('/Noticias/inicio-clases-Piedras-Negras', 'PagesController@NoticiasEventos8')->name('blog.InicioClases');
Route::get('/Noticias/inicio-clases-lic-Piedras-Negras', 'PagesController@NoticiasEventos9')->name('blog.InicioClasesLic');
Route::get('/Noticias/Saram', 'PagesController@NoticiasEventos10')->name('blog.Saram');
Route::get('/MensajesRector', 'PagesController@MensajeRector')->name('blog.MensajesRector');
Route::get('/MensajesRector/Bienvenidos2019', 'PagesController@MensajeRector12')->name('blog.Mensaje12-09-19');
Route::get('/MensajesRector/AñoNuevo2020', 'PagesController@Mensaje20')->name('blog.Mensaje20-01-2020');
Route::get('/MensajesRector/Responsabilidad', 'PagesController@Mensaje06')->name('blog.Mensaje06-02-2020');
Route::get('/MensajesRector/Desarrollo Humano', 'PagesController@Mensaje05')->name('blog.Mensaje05-03-2020');
Route::get('/MensajesRector/Abril 2020', 'PagesController@Mensaje0204')->name('blog.Mensaje 02-04-2020');
Route::get('/MensajesRector/Mayo 2020', 'PagesController@Mensaje0505')->name('blog.Mensaje 05-05-2020');
Route::get('/Noticias/45aniversario', 'PagesController@NoticiasEventos11')->name('blog.45aniversario');
Route::get('/Noticias/45aniversario/Pasteles', 'PagesController@Pasteles')->name('blog.Pasteles');
Route::get('/VozUane/soyuane', 'PagesController@soyuane')->name('blog.soyuane');
Route::get('/vozuane/45aniversario/Inaguración CU', 'PagesController@PiedraI')->name('blog.PiedraI');
Route::get('/prueba', 'PagesController@programa')->name('programa');
Route::get('/VozUane', 'PagesController@vozuane')->name('vozuane');
Route::get('/Noticias/interuane2020', 'PagesController@NoticiasEventos12')->name('blog.interuane20');
// Route::get('/prueba', function () {
//     return App\Programa::all();
// });

//Campus
Route::get('/campus/{campus}', 'CampusController@show')->name('campus.show');




//ExaUANE
Route::get('/egresados', 'PagesController@exauane')->name('exauane');
Route::get('/egresados/actualizar-datos', 'PagesController@exauaneRegistro')->name('exauane.formulario');


//InterUANE
Route::view('/interuane', 'layouts.interuane');

//Encuesta
    Route::get('/encuesta2019', 'EncuestaController@create')->name('encuesta');
    Route::post('/encuesta2019', 'EncuestaController@store')->name('encuesta.guardar');
    Route::get('/confirmacion', 'pagesController@confirmacion')->name('encuesta.confirmar');
Auth::routes();


//Grupos de rutas ADMIN



Route::group(['prefix' => 'mkt-user', 'namespace' => 'admin', 'middleware' => 'auth', 'except' => ''], function () {
    Route::get('/', 'AdminController@index')->name('home.admin');

    //Programas
    Route::get('/programas/lista-programas', 'ProgramasController@index')->name('mostrar.programa');
    Route::get('/programas/crear', 'ProgramasController@create')->name('crear.programa');
    Route::post('/programas', 'ProgramasController@store')->name('guardar.programa');
    Route::get('/programas/{programa}', 'ProgramasController@edit')->name('editar.programa');    
    Route::put('/programas/{programa}', 'ProgramasController@update')->name('update.programa');

    //fotos
    // Route::post('/programas/{programa}/fotos', 'PhotosController@store')->name('store.programa.foto');
    // Route::delete('/photo/{photo}', 'PhotosController@destroy')->name('destroy.programa.foto');

    //aspirantes
    Route::get('/aspirantes/lista-aspirantes', 'AspirantesController@index')->name('mostrar.aspirantes');
    Route::get('/aspirantes/exportarAspirantes', 'AspirantesController@exportarAspirantes')->name('exportar.aspirantes');

    //Campus
    Route::get('/campus/mostrar-campus', 'CampusController@index')->name('mostrar.campus');
    Route::get('/campus/mostrar-campus/{campus}', 'CampusController@editar')->name('editar.campus');

    Route::put('/campus/{campus}/actualizar', 'CampusController@update')->name('update.campus');

    Route::delete('/campus/delete-photo/{galery}', 'CampusController@galeriaDestroy')->name('galeria.destroy');
    //plantilla 
    Route::get('/usuarios/MKTBOX', 'UsersController@Plantilla')->name('usuarios.PlantillaDescarga');
    Route::get('/usuarios/MKTBOX/presentacionesSLW', 'UsersController@Presentaciones_Saltillo')->name('usuarios.presentacionesSLW');
    Route::get('/usuarios/MKTBOX/presentacionesTor', 'UsersController@Presentaciones_Torreon')->name('usuarios.presentacionesTor');
    Route::get('/usuarios/MKTBOX/presentacionesMon', 'UsersController@Presentaciones_Monclova')->name('usuarios.presentacionesMon');
    Route::get('/usuarios/MKTBOX/presentacionesSab', 'UsersController@Presentaciones_Sabinas')->name('usuarios.presentacionesSab');
    Route::get('/usuarios/MKTBOX/presentacionesPN', 'UsersController@Presentaciones_Piedras')->name('usuarios.presentacionesPN');
    Route::get('/usuarios/MKTBOX/presentacionesMTY', 'UsersController@Presentaciones_Monterrey')->name('usuarios.presentacionesMTY');
    Route::get('/usuarios/MKTBOX/presentacionesRey', 'UsersController@Presentaciones_Reynosa')->name('usuarios.presentacionesRey');
    Route::get('/usuarios/MKTBOX/presentacionesMat', 'UsersController@Presentaciones_Matamoros')->name('usuarios.presentacionesMat');
    Route::get('/usuarios/MKTBOX/presentacionesEL', 'UsersController@Presentaciones_EL')->name('usuarios.presentacionesEL');
    Route::get('/usuarios/MKTBOX/Carreras', 'UsersController@Presentaciones_Carreras')->name('usuarios.presentacionesCarr');
    Route::get('/usuarios/MKTBOX/FlyersCoahuila', 'UsersController@FlyersCoah')->name('usuarios.FlyersCoah');
    Route::get('/usuarios/MKTBOX/FlyersPN', 'UsersController@FlyersPN')->name('usuarios.FlyersPN');
    Route::get('/usuarios/MKTBOX/FlyersMty', 'UsersController@FlyersMty')->name('usuarios.FlyersMty');
    Route::get('/usuarios/MKTBOX/FlyersMat', 'UsersController@FlyersMat')->name('usuarios.FlyersMat');
    Route::get('/usuarios/MKTBOX/FlyersRey', 'UsersController@FlyersRey')->name('usuarios.FlyersRey');
    Route::get('/usuarios/MKTBOX/FlyersPG', 'UsersController@FlyersPG')->name('usuarios.FlyersPG');
    Route::get('/usuarios/MKTBOX/FlyersEL', 'UsersController@FlyersEL')->name('usuarios.FlyersEL');
    Route::get('/usuarios/MKTBOX/Banner', 'UsersController@Banner')->name('usuarios.Banner');
    Route::get('/usuarios/MKTBOX/Facebook', 'UsersController@Facebook')->name('usuarios.Facebook');
    Route::get('/usuarios/MKTBOX/Instagram', 'UsersController@Instagram')->name('usuarios.Instagram');
    Route::get('/usuarios/MKTBOX/Saltillo', 'UsersController@SW')->name('usuarios.SW');
    Route::get('/usuarios/MKTBOX/Torreón', 'UsersController@Torreon')->name('usuarios.Tor');
    Route::get('/usuarios/MKTBOX/Bachillerato', 'UsersController@Bach')->name('usuarios.Bachs');
    Route::get('/usuarios/MKTBOX/BachilleratoNL', 'UsersController@BachNL')->name('usuarios.BachsNL');
    Route::get('/usuarios/MKTBOX/Bachilleratos', 'UsersController@BMB')->name('usuarios.BMB');
    Route::get('/usuarios/MKTBOX/BMB', 'UsersController@BMB2')->name('usuarios.BMB2');
    Route::get('/usuarios/MKTBOX/PostFB', 'UsersController@FB')->name('usuarios.FB');
    Route::get('/usuarios/MKTBOX/postgrados', 'UsersController@Postgradossw')->name('usuarios.Postgrados');
    Route::get('/usuarios/MKTBOX/precios', 'UsersController@PreciosSW')->name('usuarios.PreciosSW');
    Route::get('/usuarios/MKTBOX/procesos', 'UsersController@Procesos')->name('usuarios.Procesos');
    Route::get('/usuarios/MKTBOX/CarreraTor', 'UsersController@CarrerasTorr')->name('usuarios.CarrerasTorr');
    Route::get('/usuarios/MKTBOX/precios_torreon', 'UsersController@PreciosTor')->name('usuarios.PreciosTR');
    Route::get('/usuarios/MKTBOX/postgradosTR', 'UsersController@PostgradosTR')->name('usuarios.PostgradosTR');
    Route::get('/usuarios/MKTBOX/CarreraMon', 'UsersController@CarrerasMon')->name('usuarios.CarrerasMon');
    Route::get('/usuarios/MKTBOX/Monclova', 'UsersController@Monclova')->name('usuarios.Monclova');   
    Route::get('/usuarios/MKTBOX/precios_monclova', 'UsersController@PreciosMon')->name('usuarios.PreciosMon');
    Route::get('/usuarios/MKTBOX/postgradosMon', 'UsersController@PostgradosMon')->name('usuarios.PostgradosMon');
    Route::get('/usuarios/MKTBOX/Sabinas', 'UsersController@Sabinas')->name('usuarios.Sabinas'); 
    Route::get('/usuarios/MKTBOX/CarreraSab', 'UsersController@CarrerasSab')->name('usuarios.CarrerasSab');
    Route::get('/usuarios/MKTBOX/precios_sabinas', 'UsersController@PreciosSabinas')->name('usuarios.PreciosSabinas'); 
    Route::get('/usuarios/MKTBOX/PiedrasNegras', 'UsersController@PiedrasNegras')->name('usuarios.PiedrasNegras'); 
    Route::get('/usuarios/MKTBOX/precios_PN', 'UsersController@PreciosPN')->name('usuarios.PreciosPN');
    Route::get('/usuarios/MKTBOX/postgradosPN', 'UsersController@PostgradosPN')->name('usuarios.PostgradosPN');
    Route::get('/usuarios/MKTBOX/Matamoros', 'UsersController@Matamoros')->name('usuarios.Matamoros'); 
    Route::get('/usuarios/MKTBOX/precios_Mat', 'UsersController@PreciosMat')->name('usuarios.PreciosMat');
    Route::get('/usuarios/MKTBOX/postgradosMat', 'UsersController@PostgradosMat')->name('usuarios.PostgradosMat');
    Route::get('/usuarios/MKTBOX/Monterrey', 'UsersController@Monterrey')->name('usuarios.Monterrey'); 
    Route::get('/usuarios/MKTBOX/precios_Mty', 'UsersController@PreciosMty')->name('usuarios.PreciosMty');
    Route::get('/usuarios/MKTBOX/postgradosMty', 'UsersController@PostgradosMty')->name('usuarios.PostgradosMty');
    Route::get('/usuarios/MKTBOX/Reynosa', 'UsersController@Reynosa')->name('usuarios.Reynosa'); 
    Route::get('/usuarios/MKTBOX/precios_Rey', 'UsersController@PreciosRey')->name('usuarios.PreciosRey');
    Route::get('/usuarios/MKTBOX/postgradosRey', 'UsersController@PostgradosRey')->name('usuarios.PostgradosRey');
    Route::get('/usuarios/MKTBOX/EnLinea', 'UsersController@EnLinea')->name('usuarios.EnLinea'); 
    Route::get('/usuarios/MKTBOX/precios_EL', 'UsersController@PreciosEL')->name('usuarios.PreciosEL');
    Route::get('/usuarios/MKTBOX/postgradosEL', 'UsersController@PostgradosEL')->name('usuarios.PostgradosEL');
    Route::get('/usuarios/MKTBOX/Autonoma', 'UsersController@Autonoma')->name('usuarios.Autonoma');
    Route::get('/usuarios/MKTBOX/Americana', 'UsersController@Americana')->name('usuarios.Americana');
    Route::get('/usuarios/MKTBOX/Diapositivas Autonoma', 'UsersController@DiapositivasAutonoma')->name('usuarios.DiapositivasAutonoma');
    Route::get('/usuarios/MKTBOX/Constancia Autonoma', 'UsersController@ConstanciaAutonoma')->name('usuarios.ConstanciaAutonoma');
    Route::get('/usuarios/MKTBOX/Reconocimiento Autonoma', 'UsersController@ReconocimientoAutonoma')->name('usuarios.ReconocimientoAutonoma');
    Route::get('/usuarios/MKTBOX/Diploma Autonoma', 'UsersController@DiplomaAutonoma')->name('usuarios.DiplomaAutonoma');
    Route::get('/usuarios/MKTBOX/Diapositivas Americana', 'UsersController@DiapositivasAmericana')->name('usuarios.DiapositivasAmericana');
    Route::get('/usuarios/MKTBOX/Constancia Americana', 'UsersController@ConstanciaAmericana')->name('usuarios.ConstanciaAmericana');
    Route::get('/usuarios/MKTBOX/Reconocimiento Americana', 'UsersController@ReconocimientoAmericana')->name('usuarios.ReconocimientoAmericana');
    Route::get('/usuarios/MKTBOX/Diploma Americana', 'UsersController@DiplomaAmericana')->name('usuarios.DiplomaAmericana');
    Route::get('/usuarios/MKTBOX/DIT70-Presencial', 'UsersController@Carpeta70mayo')->name('usuarios.carpeta70Mayo');
    Route::get('/usuarios/MKTBOX/Banner70-Presencial', 'UsersController@Banner70mayo')->name('usuarios.Banner70mayo');
    Route::get('/usuarios/MKTBOX/Facebook70-Presencial', 'UsersController@FB70mayo')->name('usuarios.FB70mayo');
    Route::get('/usuarios/MKTBOX/Instagram70-Presencial', 'UsersController@Instagram70mayo')->name('usuarios.Instagram70mayo');
    Route::get('/usuarios/MKTBOX/Mailing70-Presencial', 'UsersController@Mail70mayo')->name('usuarios.Mail70mayo');
    Route::get('/usuarios/MKTBOX/DIT70Mty', 'UsersController@Carpeta70mayoMty')->name('usuarios.carpeta70MayoMty');
    Route::get('/usuarios/MKTBOX/Banner70Mty', 'UsersController@Banner70mayoMty')->name('usuarios.Banner70mayoMty');
    Route::get('/usuarios/MKTBOX/Facebook70Mty', 'UsersController@FB70mayoMty')->name('usuarios.FB70mayoMty');
    Route::get('/usuarios/MKTBOX/Instagram70Mty', 'UsersController@Instagram70mayoMty')->name('usuarios.Instagram70mayoMty');
    Route::get('/usuarios/MKTBOX/Mailing70Mty', 'UsersController@Mail70mayoMty')->name('usuarios.Mail70mayoMty');
    Route::get('/usuarios/MKTBOX/DIT70EL', 'UsersController@Carpeta70mayoEL')->name('usuarios.carpeta70MayoEL');
    Route::get('/usuarios/MKTBOX/Banner70EL', 'UsersController@Banner70mayoEL')->name('usuarios.Banner70mayoEL');
    Route::get('/usuarios/MKTBOX/Facebook70EL', 'UsersController@FB70mayoEL')->name('usuarios.FB70mayoEL');
    Route::get('/usuarios/MKTBOX/Instagram70EL', 'UsersController@Instagram70mayoEL')->name('usuarios.Instagram70mayoEL');
    Route::get('/usuarios/MKTBOX/Mailing70EL', 'UsersController@Mail70mayoEL')->name('usuarios.Mail70mayoEL');
    Route::get('/usuarios/MKTBOX/PostFB-EL', 'UsersController@FBEL')->name('usuarios.FBEL');
    Route::get('/usuarios/MKTBOX/WhatsApp70', 'UsersController@WA70')->name('usuarios.WA70');
    //Route::get('/usuarios/MKTBOX/DIT70Mty', 'UsersController@carpeta70Mty')->name('usuarios.carpeta70Mty');
    //Route::get('/usuarios/MKTBOX/Banner 70 Mty', 'UsersController@banner70Mty')->name('usuarios.banner70Mty');
    //Route::get('/usuarios/MKTBOX/Facebook 70 Mty', 'UsersController@FB70Mty')->name('usuarios.FB70Mty');
    //Route::get('/usuarios/MKTBOX/Instagram 70 Mty', 'UsersController@Instagram70Mty')->name('usuarios.Instagram70Mty');

    //Route::get('/usuarios/MKTBOX/Mailing 70 Mty', 'UsersController@Mail70Mty')->name('usuarios.Mail70Mty');-->
     
    
    //usuarios
    Route::get('/usuarios', 'UsersController@index')->name('mostrar.usuarios');
    Route::get('/usuarios/crear', 'UsersController@create')->name('crear.usuario');
    //Route::get('/usuarios/mostrar/{usuario}', 'UsersController@show')->name('mostrar.usuarios');
    Route::get('/usuarios/editar/{usuario}', 'UsersController@edit')->name('editar.usuarios');
    Route::get('/encuesta2019', 'UsersController@lista_encuesta')->name('reporte');
    Route::get('/encuesta2019/exportar', 'UsersController@exportar')->name('exportar.reporte');


    Route::post('/usuarios/crear', 'UsersController@store')->name('guardar.usuario');
    Route::put('/usuarios/{usuario}/actualizar', 'UsersController@update')->name('actualizar.usuarios');
    Route::put('/usuarios/{usuario}/roles', 'UsersRolesController@update')->name('actualizar.rol.usuarios');
    Route::delete('/usuarios/{usuario}/eliminar', 'UsersController@delete')->name('eliminar.usuarios');

    //Formulario de diseño
    Route::get('/disenos-campus/formulario-diseno', 'DisenoController@FormDesign')->name('formulario.diseno');
    Route::post('/disenos-campus/formulario-diseno', 'DisenoController@saveData')->name('formulario.solicitud');
    Route::get('/disenos-campus', 'DisenoController@listaSolicitudes')->name('diseno.campus');

    Route::get('/diseno', 'DisenoController@disenoSolicitudes')->name('diseno.solicitudes');
    Route::get('/diseno/asignar/{id}', 'DisenoController@asignarSolicitudes')->name('diseno.asignar');
    Route::get('/solicitud-diseno/{id}', 'DisenoController@verSolicitudes')->name('diseno.ver');
    Route::delete('/solicitud-diseno/eliminar/{id}', 'DisenoController@eliminarSolicitud')->name('eliminarSolicitud');

    Route::put('/diseno/actualizar-estatus/{id}', 'DisenoController@actualizarEstado')->name('diseno.actualizar-estatus');
    Route::put('/diseno/asignar-usuario/{id}', 'DisenoController@asignarDisenador')->name('diseno.asignar-usuario');


Route::get('/convenios anteriores', 'ConveniosController@index')->name('convenios.lista');
Route::get('/convenios', 'ConveniosNuevoController@index')->name('convenios.index');
Route::get('/convenios/exportarexcel', 'ConveniosNuevoController@exportar')->name('exportar.convenios');
Route::get('/convenios/exportarexcelanteriores', 'ConveniosNuevoController@exportaranteriores')->name('exportaranteriores.convenios');
Route::get('/convenios/guardar-convenio', 'ConveniosNuevoController@create')->name('convenios.formulario');
Route::post('/convenios/guardar-convenio', 'ConveniosNuevoController@store')->name('convenios.formulario.guardar');
Route::get('/convenios/editar/{convenio}', 'ConveniosNuevoController@edit')->name('convenios.editar');
Route::get('/convenios/Vista/{convenio}', 'ConveniosNuevoController@view')->name('convenios.view');
Route::put('/convenios/actualizar/{convenio}', 'ConveniosNuevoController@update')->name('convenios.actualizar');
Route::delete('/convenios/eliminar/{convenio}', 'ConveniosNuevoController@destroy')->name('convenios.eliminar');
Route::get('/pdf/{convenio}', 'ConveniosNuevoController@pdf')->name('convenios.pdf');
    
    
   /**Route::get('/convenios', 'ConveniosController@index')->name('convenios.index');
   Route::get('/convenios/guardar-convenio', 'ConveniosController@create')->name('convenios.formulario');
   Route::post('/convenios/guardar-convenio', 'ConveniosController@store')->name('convenios.formulario.guardar');
   Route::get('/convenios/editar/{convenio}', 'ConveniosController@edit')->name('convenios.editar');
   Route::put('/convenios/actualizar/{convenio}', 'ConveniosController@update')->name('convenios.actualizar');
   Route::get('/convenios/exportarConvenios', 'ConveniosController@exportarConvenios')->name('exportar.convenios');
   Route::delete('/convenios/eliminar/{convenio}', 'ConveniosController@destroy')->name('convenios.eliminar');*/
});



Route::get('/email', function () {
    return view('partial.mail.notifyDesignerRequest');
});


//Route::view('/mailing', 'partial.mail.registroAspirantes');


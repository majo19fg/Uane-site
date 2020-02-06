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
Route::get('/vozuane', 'PagesController@NoticiasEventos')->name('blog.noticias');
Route::get('/vozuane/comunicado-del-rector-analogia', 'PagesController@NoticiasEventos1')->name('blog.rector1');
Route::get('/vozuane/comunicado-del-rector', 'PagesController@NoticiasEventos2')->name('blog.rector2');
Route::get('/vozuane/interuane2019', 'PagesController@NoticiasEventos4')->name('blog.interuane');
Route::get('/vozuane/tips-para-mejorar-tu-curriculum', 'PagesController@NoticiasEventos5')->name('blog.cv');
Route::get('/vozuane/congreso-internacional-de-empleabilidad', 'PagesController@NoticiasEventos6')->name('blog.empleabilidad');
Route::get('/vozuane/sabias-que-en-uane-puedes-cursar-un-diplomado-como-opcion-de-titulacion', 'PagesController@NoticiasEventos7')->name('blog.titulacion');
Route::get('/vozuane/inicio-clases-Piedras-Negras', 'PagesController@NoticiasEventos8')->name('blog.InicioClases');
Route::get('/vozuane/inicio-clases-lic-Piedras-Negras', 'PagesController@NoticiasEventos9')->name('blog.InicioClasesLic');
Route::get('/vozuane/Saram', 'PagesController@NoticiasEventos10')->name('blog.Saram');
Route::get('/MensajesRector', 'PagesController@MensajeRector')->name('blog.MensajesRector');
Route::get('/MensajesRector/Bienvenidos2019', 'PagesController@MensajeRector12')->name('blog.Mensaje12-09-19');
Route::get('/MensajesRector/AñoNuevo2020', 'PagesController@Mensaje20')->name('blog.Mensaje20-01-2020');
Route::get('/MensajesRector/Responsabilidad', 'PagesController@Mensaje06')->name('blog.Mensaje06-02-2020');
Route::get('/vozuane/45aniversario', 'PagesController@NoticiasEventos11')->name('blog.45aniversario');
Route::get('/vozuane/45aniversario/Pasteles', 'PagesController@Pasteles')->name('blog.Pasteles');
Route::get('/soyuane', 'PagesController@soyuane')->name('blog.soyuane');
Route::get('/vozuane/45aniversario/Inaguración CU', 'PagesController@PiedraI')->name('blog.PiedraI');
Route::get('/prueba', 'PagesController@programa')->name('programa');
Route::get('/VozUane', 'PagesController@vozuane')->name('vozuane');
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
    Route::get('/usuarios/plantilla', 'UsersController@Plantilla')->name('usuarios.PlantillaDescarga');
    Route::get('/usuarios/plantilla/presentacionesSLW', 'UsersController@Presentaciones_Saltillo')->name('usuarios.presentacionesSLW');
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
    Route::get('/convenios/guardar-convenio', 'ConveniosNuevoController@create')->name('convenios.formulario');
    Route::post('/convenios/guardar-convenio', 'ConveniosNuevoController@store')->name('convenios.formulario.guardar');
    Route::get('/convenios/editar/{convenio}', 'ConveniosNuevoController@edit')->name('convenios.editar');
    Route::get('/convenios/Vista/{convenio}', 'ConveniosNuevoController@view')->name('convenios.view');
    Route::put('/convenios/actualizar/{convenio}', 'ConveniosNuevoController@update')->name('convenios.actualizar');
    Route::delete('/convenios/eliminar/{convenio}', 'ConveniosNuevoController@destroy')->name('convenios.eliminar');
    Route::get('/pdf/{convenio}', 'ConveniosNuevoController@pdf')->name('convenios.pdf');
    
    
});



Route::get('/email', function () {
    return view('partial.mail.notifyDesignerRequest');
});


//Route::view('/mailing', 'partial.mail.registroAspirantes');


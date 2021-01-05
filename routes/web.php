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

Route::get('/programas/licenciaturaenlinea', 'ProgramasController@lcel')->name('programas.lcel');
Route::get('/programas/maestriaenlinea', 'ProgramasController@Mel')->name('programas.mel');
Route::get('/programas/especialidadenlinea', 'ProgramasController@Eel')->name('programas.eel');
Route::get('/programas/bachilleratoenlinea', 'ProgramasController@bachel')->name('programas.bachel');
Route::get('/programas/cursoenlinea', 'ProgramasController@curso')->name('programas.curso');
Route::get('/programas/diplomadoenlinea', 'ProgramasController@diplomado')->name('programas.diplomado');
Route::get('/programas/diplomadobarcelona', 'ProgramasController@diplomadobarcelona')->name('programas.diplomadobarcelona');


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
Route::get('/MensajesRector/Día del maestro', 'PagesController@Mensaje1505')->name('blog.Mensaje 15-05-2020');
Route::get('/MensajesRector/Agosto', 'PagesController@Mensaje0108')->name('blog.Mensaje01-08-2020');
Route::get('/MensajesRector/Septiembre46Aniversario', 'PagesController@Mensaje0909')->name('blog.Mensaje09-09-2020');
Route::get('/MensajesRector/Octubre', 'PagesController@Mensaje0510')->name('blog.Mensaje05-10-2020');

Route::get('/MensajesRector/Noviembre', 'PagesController@Mensaje0911')->name('blog.Mensaje09-11-2020');
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

Route::get('/investigacion', 'PagesController@investigacion')->name('investigacion');
Route::get('/eventosaniversario', 'PagesController@aniversario')->name('aniversario');


//ExaUANE
Route::get('/egresados', 'PagesController@exauane')->name('exauane');
Route::get('/egresados/actualizar-datos', 'PagesController@exauaneRegistro')->name('exauane.formulario');


//InterUANE
Route::view('/interuane', 'layouts.interuane');

//Encuesta
    Route::get('/encuesta2020', 'EncuestaController@create')->name('encuesta');
    Route::post('/encuesta2020', 'EncuestaController@store')->name('encuesta.guardar');
    Route::get('/confirmacion', 'pagesController@confirmacion')->name('encuesta.confirmar');
Auth::routes();


//Grupos de rutas ADMIN



Route::group(['prefix' => 'mkt-user', 'namespace' => 'admin', 'middleware' => 'auth', 'except' => ''], function () {
    Route::get('/', 'AdminController@index')->name('home.admin');
    Route::get('/Acceso', 'AccesController@show')->name('acceso.show');
    Route::get('/ReporteAcceso', 'AccesController@index')->name('acceso.index');
    Route::post('/Accesoguardar', 'AccesController@store')->name('acceso.guardar');
    Route::get('/Accesos/exportar', 'AccesController@exportar')->name('exportar.acceso');

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
    Route::get('/usuarios/MKTBOX/BachEnLinea', 'UsersController@BachEL')->name('usuarios.BachEL'); 
    Route::get('/usuarios/MKTBOX/Cursosenlinea', 'UsersController@CEL')->name('usuarios.CEL'); 
    Route::get('/usuarios/MKTBOX/Diplomadosenlinea', 'UsersController@DEL')->name('usuarios.DEL'); 
    Route::get('/usuarios/MKTBOX/Diplomadosbarcelona', 'UsersController@DB')->name('usuarios.DB'); 
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
    Route::get('/usuarios/MKTBOX/Cursos y diplomados', 'UsersController@cursos')->name('usuarios.cursos');

    Route::get('/usuarios/MKTBOX/DIT50 Autonoma', 'UsersController@Carpeta50')->name('usuarios.Carpetasdit50Jul');
    Route::get('/usuarios/MKTBOX/DIT50 presencial', 'UsersController@presencial50')->name('usuarios.presencial50');
    Route::get('/usuarios/MKTBOX/Firma 50', 'UsersController@Firma50Sep')->name('usuarios.Firma50Sep');
    Route::get('/usuarios/MKTBOX/Facebook', 'UsersController@FB50Sep')->name('usuarios.FB50Sep');
    Route::get('/usuarios/MKTBOX/Instagram', 'UsersController@Instagram50Sep')->name('usuarios.Instagram50Sep');
    Route::get('/usuarios/MKTBOX/Mailing', 'UsersController@Mail50Sep')->name('usuarios.Mail50Sep');
    Route::get('/usuarios/MKTBOX/WhatsApp', 'UsersController@WA50Sep')->name('usuarios.WA50Sep');

    Route::get('/usuarios/MKTBOX/EnLinea 70', 'UsersController@enlinea70')->name('usuarios.enlinea70');
    Route::get('/usuarios/MKTBOX/Firma', 'UsersController@Firma70EL')->name('usuarios.Firma70EL');
    Route::get('/usuarios/MKTBOX/Facebook 70', 'UsersController@FB70AgoEL')->name('usuarios.FB70AgoEL');
    Route::get('/usuarios/MKTBOX/Instagram 70', 'UsersController@Instagram70AgoEL')->name('usuarios.Instagram70AgoEL');
    Route::get('/usuarios/MKTBOX/Mailing 70', 'UsersController@Mail70AgoEL')->name('usuarios.Mail70AgoEL');
    Route::get('/usuarios/MKTBOX/WhatsApp 70', 'UsersController@WA70AgoEL')->name('usuarios.WA70AgoEL');

    Route::get('/usuarios/MKTBOX/PostFB-EL', 'UsersController@FBEL')->name('usuarios.FBEL');
    Route::get('/usuarios/MKTBOX/TuPuntajeVale', 'UsersController@TuPuntajeVale')->name('usuarios.TuPuntajeVale');

    Route::get('/usuarios/MKTBOX/Firmas correo', 'UsersController@firmas_correo')->name('usuarios.firmas_correo');
    Route::get('/usuarios/MKTBOX/Logotipos', 'UsersController@logotipos')->name('usuarios.logotipos');
    Route::get('/usuarios/MKTBOX/Wallpapers', 'UsersController@Wallpapers')->name('usuarios.Wallpapers');
    Route::get('/usuarios/MKTBOX/WallpapersE20', 'UsersController@WallpapersE20')->name('usuarios.WallpapersE20');
    Route::get('/usuarios/MKTBOX/Hojas membretadas', 'UsersController@hoja')->name('usuarios.hoja');
    Route::get('/usuarios/MKTBOX/Deportes', 'UsersController@Deportes')->name('usuarios.Deportes');
    Route::get('/usuarios/MKTBOX/Culturales', 'UsersController@Culturales')->name('usuarios.Culturales');
    Route::get('/usuarios/MKTBOX/Identidad46', 'UsersController@Identidad46')->name('usuarios.Identidad46');
    Route::get('/usuarios/MKTBOX/Logo46', 'UsersController@Logo46')->name('usuarios.Logo46');
    Route::get('/usuarios/MKTBOX/Conferencias46', 'UsersController@conferencias')->name('usuarios.conferencias');
    Route::get('/usuarios/MKTBOX/OrgullosamenteUANE46', 'UsersController@orgullosamente')->name('usuarios.orgullosamente');
    Route::get('/usuarios/MKTBOX/EXAUANE46', 'UsersController@exauane46')->name('usuarios.exauane46');
     
    Route::get('/usuarios/MKTBOX/DIT50', 'UsersController@DIT55')->name('usuarios.DIT55');
    Route::get('/usuarios/MKTBOX/DIT50E', 'UsersController@DIT55oct')->name('usuarios.DIT55oct');
    Route::get('/usuarios/MKTBOX/DIT50MTYE', 'UsersController@DIT55mty')->name('usuarios.DIT55mty');
    Route::get('/usuarios/MKTBOX/BuenFin', 'UsersController@DIT55pn')->name('usuarios.DIT55pn');
    Route::get('/usuarios/MKTBOX/Firma50E', 'UsersController@Firma55Oct')->name('usuarios.Firma55Oct');
    Route::get('/usuarios/MKTBOX/Facebook50E', 'UsersController@FB55Oct')->name('usuarios.FB55Oct');
    Route::get('/usuarios/MKTBOX/Instagram50E', 'UsersController@Instagram55Oct')->name('usuarios.Instagram55Oct');
    Route::get('/usuarios/MKTBOX/Mailing50E', 'UsersController@Mail55Oct')->name('usuarios.Mail55Oct');
    Route::get('/usuarios/MKTBOX/WhatsApp50E', 'UsersController@WA55Oct')->name('usuarios.WA55Oct');
    Route::get('/usuarios/MKTBOX/Firma50mtyE', 'UsersController@Firma55mty')->name('usuarios.Firma55mty');
    Route::get('/usuarios/MKTBOX/Facebook50mtyE', 'UsersController@FB55mty')->name('usuarios.FB55mty');
    Route::get('/usuarios/MKTBOX/Instagram50mtyE', 'UsersController@Instagram55mty')->name('usuarios.Instagram55mty');
    Route::get('/usuarios/MKTBOX/Mailing50mtyE', 'UsersController@Mail55mty')->name('usuarios.Mail55mty');
    Route::get('/usuarios/MKTBOX/WhatsApp50mtyE', 'UsersController@WA55mty')->name('usuarios.WA55mty');
    Route::get('/usuarios/MKTBOX/Firma55pn', 'UsersController@Firma55pn')->name('usuarios.Firma55pn');
    Route::get('/usuarios/MKTBOX/Facebook55pn', 'UsersController@FB55pn')->name('usuarios.FB55pn');
    Route::get('/usuarios/MKTBOX/Instagram55pn', 'UsersController@Instagram55pn')->name('usuarios.Instagram55pn');
    Route::get('/usuarios/MKTBOX/Mailing55pn', 'UsersController@Mail55pn')->name('usuarios.Mail55pn');
    Route::get('/usuarios/MKTBOX/WhatsApp55pn', 'UsersController@WA55pn')->name('usuarios.WA55pn');
    Route::get('/usuarios/MKTBOX/DIT50 presencial', 'UsersController@presencial50')->name('usuarios.presencial50');
    Route::get('/usuarios/MKTBOX/Firma 50', 'UsersController@Firma50Sep')->name('usuarios.Firma50Sep');
    Route::get('/usuarios/MKTBOX/Facebook', 'UsersController@FB50Sep')->name('usuarios.FB50Sep');
    Route::get('/usuarios/MKTBOX/Instagram', 'UsersController@Instagram50Sep')->name('usuarios.Instagram50Sep');
    Route::get('/usuarios/MKTBOX/Mailing', 'UsersController@Mail50Sep')->name('usuarios.Mail50Sep');
    Route::get('/usuarios/MKTBOX/WhatsApp', 'UsersController@WA50Sep')->name('usuarios.WA50Sep');


    Route::get('/usuarios/MKTBOX/DIT70D', 'UsersController@DIT70D')->name('usuarios.DIT70D');
    Route::get('/usuarios/MKTBOX/Firma70D', 'UsersController@Firma70D')->name('usuarios.Firma70D');
    Route::get('/usuarios/MKTBOX/Facebook70D', 'UsersController@FB70D')->name('usuarios.FB70D');
    Route::get('/usuarios/MKTBOX/Instagram70D', 'UsersController@Instagram70D')->name('usuarios.Instagram70D');
    Route::get('/usuarios/MKTBOX/Mailing70D', 'UsersController@Mail70D')->name('usuarios.Mail70D');
    Route::get('/usuarios/MKTBOX/WhatsApp70D', 'UsersController@WA70D')->name('usuarios.WA70D');

    Route::get('/usuarios/MKTBOX/DIT70DA', 'UsersController@DIT70DA')->name('usuarios.DIT70DA');
    Route::get('/usuarios/MKTBOX/Firma70DA', 'UsersController@Firma70DA')->name('usuarios.Firma70DA');
    Route::get('/usuarios/MKTBOX/Facebook70DA', 'UsersController@FB70DA')->name('usuarios.FB70DA');
    Route::get('/usuarios/MKTBOX/Instagram70DA', 'UsersController@Instagram70DA')->name('usuarios.Instagram70DA');
    Route::get('/usuarios/MKTBOX/Mailing70DA', 'UsersController@Mail70DA')->name('usuarios.Mail70DA');
    Route::get('/usuarios/MKTBOX/WhatsApp70DA', 'UsersController@WA70DA')->name('usuarios.WA70DA');


    Route::get('/usuarios/MKTBOX/DIT50PP', 'UsersController@DIT50PP')->name('usuarios.DIT50PP');
    Route::get('/usuarios/MKTBOX/Firma50PP', 'UsersController@Firma50PP')->name('usuarios.Firma50PP');
    Route::get('/usuarios/MKTBOX/Facebook50PP', 'UsersController@FB50PP')->name('usuarios.FB50PP');
    Route::get('/usuarios/MKTBOX/Instagram50PP', 'UsersController@Instagram50PP')->name('usuarios.Instagram50PP');
    Route::get('/usuarios/MKTBOX/Mailing50PP', 'UsersController@Mail50PP')->name('usuarios.Mail50PP');
    Route::get('/usuarios/MKTBOX/WhatsApp50PP', 'UsersController@WA50PP')->name('usuarios.WA50PP');

    Route::get('/usuarios/MKTBOX/DIT50PL', 'UsersController@DIT50PL')->name('usuarios.DIT50PL');
    Route::get('/usuarios/MKTBOX/Firma50PL', 'UsersController@Firma50PL')->name('usuarios.Firma50PL');
    Route::get('/usuarios/MKTBOX/Facebook50PL', 'UsersController@FB50PL')->name('usuarios.FB50PL');
    Route::get('/usuarios/MKTBOX/Instagram50PL', 'UsersController@Instagram50PL')->name('usuarios.Instagram50PL');
    Route::get('/usuarios/MKTBOX/Mailing50PL', 'UsersController@Mail50PL')->name('usuarios.Mail50PL');
    Route::get('/usuarios/MKTBOX/WhatsApp50PL', 'UsersController@WA50PL')->name('usuarios.WA50PL');


    Route::get('/usuarios/MKTBOX/DIT55D', 'UsersController@DIT55D')->name('usuarios.DIT55D');
    Route::get('/usuarios/MKTBOX/DIT55DIC', 'UsersController@DIT55DIC')->name('usuarios.DIT55DIC');
    Route::get('/usuarios/MKTBOX/Firma55D', 'UsersController@Firma55D')->name('usuarios.Firma55D');
    Route::get('/usuarios/MKTBOX/Facebook55D', 'UsersController@FB55D')->name('usuarios.FB55D');
    Route::get('/usuarios/MKTBOX/Instagram55D', 'UsersController@Instagram55D')->name('usuarios.Instagram55D');
    Route::get('/usuarios/MKTBOX/Mailing55D', 'UsersController@Mail55D')->name('usuarios.Mail55D');
    Route::get('/usuarios/MKTBOX/WhatsApp55D', 'UsersController@WA55D')->name('usuarios.WA55D');
    Route::get('/usuarios/MKTBOX/DIT55DICM', 'UsersController@DIT55DICM')->name('usuarios.DIT55DICM');
    Route::get('/usuarios/MKTBOX/Firma55DM', 'UsersController@Firma55DM')->name('usuarios.Firma55DM');
    Route::get('/usuarios/MKTBOX/Facebook55DM', 'UsersController@FB55DM')->name('usuarios.FB55DM');
    Route::get('/usuarios/MKTBOX/Instagram55DM', 'UsersController@Instagram55DM')->name('usuarios.Instagram55DM');
    Route::get('/usuarios/MKTBOX/Mailing55DM', 'UsersController@Mail55DM')->name('usuarios.Mail55DM');
    Route::get('/usuarios/MKTBOX/WhatsApp55DM', 'UsersController@WA55DM')->name('usuarios.WA55DM');
    

    Route::get('/usuarios/MKTBOX/FirmaBF', 'UsersController@FirmaBF')->name('usuarios.FirmaBF');
    Route::get('/usuarios/MKTBOX/FacebookBF', 'UsersController@FBBF')->name('usuarios.FBBF');
    Route::get('/usuarios/MKTBOX/InstagramBF', 'UsersController@InstagramBF')->name('usuarios.InstagramBF');
    Route::get('/usuarios/MKTBOX/MailingBF', 'UsersController@MailBF')->name('usuarios.MailBF');
    Route::get('/usuarios/MKTBOX/WhatsAppBF', 'UsersController@WABF')->name('usuarios.WABF');

    Route::get('/usuarios/MKTBOX/Firma55NOV', 'UsersController@Firma55NOV')->name('usuarios.Firma55NOV');
    Route::get('/usuarios/MKTBOX/Facebook55NOV', 'UsersController@FB55NOV')->name('usuarios.FB55NOV');
    Route::get('/usuarios/MKTBOX/Instagram55NOV', 'UsersController@Instagram55NOV')->name('usuarios.Instagram55NOV');
    Route::get('/usuarios/MKTBOX/Mailing55NOV', 'UsersController@Mail55NOV')->name('usuarios.Mail55NOV');
    Route::get('/usuarios/MKTBOX/WhatsApp55NOV', 'UsersController@WA55NOV')->name('usuarios.WA55NOV');

    Route::get('/usuarios/MKTBOX/FirmaMTY55NOV', 'UsersController@FirmaMTY55NOV')->name('usuarios.FirmaMTY55NOV');
    Route::get('/usuarios/MKTBOX/FacebookMTY55NOV', 'UsersController@FBMTY55NOV')->name('usuarios.FBMTY55NOV');
    Route::get('/usuarios/MKTBOX/InstagramMTY55NOV', 'UsersController@InstagramMTY55NOV')->name('usuarios.InstagramMTY55NOV');
    Route::get('/usuarios/MKTBOX/MailingMTY55NOV', 'UsersController@MailMTY55NOV')->name('usuarios.MailMTY55NOV');
    Route::get('/usuarios/MKTBOX/WhatsAppMTY55NOV', 'UsersController@WAMTY55NOV')->name('usuarios.WAMTY55NOV');
 
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
    Route::get('/encuesta2020', 'UsersController@lista_encuesta')->name('reporte');
    Route::get('/encuesta2020/exportar', 'UsersController@exportar')->name('exportar.reporte');


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


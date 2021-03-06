<?php
/*Rutas del administrador*/

/*Route::get('/admin/registro', function()
{
	$admin = new sgve\User;
	$admin->nom_docente = 'Naty';
	$admin->no_cuenta = '220494';
	$admin->email = 'naty_snuff@hotmail.com';
	$admin->password = bcrypt('nath123');
	$admin->rol = 0;
	$admin->activo = 1;
	$admin->plantel_id = 1;
	$admin->save();
});
*/

/*Route::get('/admin/registro', function()
{
	$admin = new sgve\User;
	$admin->nom_docente = 'Chuy';
	$admin->no_cuenta = '20131944';
	$admin->email = 'jjaimes@ucol.mx';
	$admin->password = bcrypt('chuy123');
	$admin->rol = 0;
	$admin->activo = 1;
	$admin->plantel_id = 1;
	$admin->save();
});
*/

Route::get('/admin/home', 'AdminController@homeAdmin')->name('homeAdmin');

Route::get('/admin/login', 'AdminController@loginAdmin')->name('loginAdmin');

Route::post('/admin/login', 'AdminController@datosLoginAdmin')->name('datosLoginAdmin');

Route::get('/admin/salir', 'AdminController@salirAdmin')->name('salirAdmin');

/*Paginas del administrador */

Route::get('/admin/validar', 'AdminController@validarUsuarios')->name('validarUsuariosAdmin');

Route::put('/admin/activar/usuario/{id}', 'AdminController@datoActivarUsuario')->name('datoActivarUsuario');

Route::get('/admin/crear_ciclos', 'AdminController@crearCiclos')->name('crearCiclos');

Route::post('/admin/crear_ciclos', 'AdminController@datosCrearCiclo')->name('datosCrearCiclo');

Route::get('/admin/elegir_campus', 'AdminController@elegirCampusAdmin')->name('elegirCampusAdmin');

Route::post('/admin/elegir_plantel', 'AdminController@datoCampusAdmin')->name('datoCampusAdmin');

Route::post('/admin/crear_carreras', 'AdminController@crearCarreras')->name('crearCarreras');

Route::post('/admin/crear_carreras/datos', 'AdminController@datosCrearCarreras')->name('datosCrearCarreras');

Route::get('/admin/baja_ciclos', 'AdminController@bajaCiclos')->name('bajaCiclos');

Route::put('/admin/baja_ciclo/{id}', 'AdminController@datoBajaCiclo')->name('datoBajaCiclo');

/*Rutas del sistema*/

Route::get('/campus', 'AuthController@elegirCampus')->name('elegirCampus');

Route::post('/plantel', 'AuthController@datoCampus')->name('datoCampus');

Route::post('/registro', 'AuthController@datoPlantel')->name('datoPlantel');

Route::post('/registro/datos', 'AuthController@datosRegistro')->name('datosRegistro');

Route::get('/', 'AuthController@login')->name('login');

Route::post('/login/datos', 'AuthController@datosLogin')->name('datosLogin');

Route::get('/home', 'AuthController@home')->name('home');

Route::get('/salir', 'AuthController@salir')->name('salir');

/*Rutas del director del plantel*/

Route::get('/director/viajes', 'DirectorController@verViajes')->name('verViajesDirector');

Route::get('/director/viaje/{id}', 'DirectorController@verViaje')->name('verViajeDirector');

Route::put('/director/aceptar_viaje/{id}', 'DirectorController@aceptarViajeDirector')->name('aceptarViajeDirector');

Route::get('/director/historial/viajes', 'DirectorController@historialViajes')->name('historialViajesDirector');

Route::get('/director/historial/viaje/{id}', 'DirectorController@verViajeHistorialDirector')->name('verViajeHistorialDirector');

/*Rutas del Coordinador*/

Route::get('/coordinador/validar_usuarios', 'CoordinadorController@validarUsuarios')->name('validarUsuarios');

Route::put('/coordinador/validar_usuarios/{id}', 'CoordinadorController@datoValidarUsuario')->name('datoValidarUsuario');

Route::get('/coordinador/ver_viajes', 'CoordinadorController@verViajes')->name('verViajes');

Route::get('/coordinador/viaje/{id}', 'CoordinadorController@verViajeCoordinador')->name('verViajeCoordinador');

Route::get('/coordinador/historial/viajes', 'CoordinadorController@historialViajes')->name('historialViajes');

Route::get('/coordinador/historial/viaje/{id}', 'CoordinadorController@infoViajeHistorial')->name('infoViajeHistorial');

Route::put('/coordinador/aceptar_viaje/{id}', 'CoordinadorController@aceptarViajeCoordinador')->name('aceptarViajeCoordinador');

Route::get('/coordinador/baja/viajes', 'CoordinadorController@darBajaViajes')->name('darBajaViajes');

Route::get('/coordinador/viaje/ver/{id}', 'CoordinadorController@verViajeCompleto')->name('verViajeCompleto');

Route::get('/coordinador/viaje/pdf/{id}', 'CoordinadorController@viajePDF')->name('viajePDF');

Route::put('/coordinador/viaje/baja/{id}', 'CoordinadorController@darBajaViaje')->name('darBajaViaje');

Route::get('/coordinador/crear/mensaje', 'CoordinadorController@crearMensaje')->name('crearMensaje');

Route::post('/coordinador/mensaje', 'CoordinadorController@datosMensaje')->name('datosMensaje');

/*Rutas del docente*/

Route::get('/docente/elegir_ciclo', 'DocenteController@elegirCiclo')->name('elegirCiclo');

Route::get('/docente/crear_viaje/{id}', 'DocenteController@crearViaje')->name('crearViaje');

Route::post('/docente/crear_viaje', 'DocenteController@datosCrearViaje')->name('datosCrearViaje');

Route::get('docente/lista_viajes', 'DocenteController@listaViajes')->name('listaViajes');

Route::get('/docente/viaje/{id}', 'DocenteController@verViaje')->name('verViaje');

Route::get('/docente/viaje/edit/{id}', 'DocenteController@editarViaje')->name('editarViaje');

Route::put('/docente/viaje/data/{id}', 'DocenteController@datosEditarViaje')->name('datosEditarViaje');

Route::get('/docente/viajes/asignados', 'DocenteController@viajesAsignados')->name('viajesAsignados');

Route::get('/docente/viaje/asignado/{id}', 'DocenteController@verViajeAsignado')->name('verViajeAsignado');

Route::get('/docente/crear_empresas', 'DocenteController@crearEmpresas')->name('crearEmpresas');

Route::post('/docente/crear_empresa', 'DocenteController@datosCrearEmpresa')->name('datosCrearEmpresa');

Route::get('/docente/empresas', 'DocenteController@listaEmpresas')->name('listaEmpresas');

Route::get('/docente/info_empresa/{id}', 'DocenteController@infoEmpresa')->name('infoEmpresa');

Route::get('/docente/asignar_empresas', 'DocenteController@asignarEmpresasViaje')->name('asignarEmpresasViaje');

Route::get('/docente/asignar_empresas/{id}', 'DocenteController@asignarEmpresasViajeForm')->name('asignarEmpresasViajeForm');

Route::post('/docente/asignar_empresas/datos/{id}', 'DocenteController@datosAsignarEmpresasViaje')->name('datosAsignarEmpresasViaje');

Route::get('/docente/editar_empresas/{id}', 'DocenteController@editarEmpresasViajeForm')->name('editarEmpresasViajeForm');

Route::put('/docente/editar_empresas/datos/{id}', 'DocenteController@datosEditarEmpresasViaje')->name('datosEditarEmpresasViaje');

Route::get('/docente/grupos', 'DocenteController@crearGrupos')->name('crearGrupos');

Route::get('/docente/grupo/viaje/{id}', 'DocenteController@crearGrupo')->name('crearGrupo');

Route::post('/docente/grupo/viaje', 'DocenteController@datosCrearGrupo')->name('datosCrearGrupo');

Route::get('/docente/grupo/{id}', 'DocenteController@infoGrupo')->name('infoGrupo');

Route::get('/docente/asignar_alumnos_grupos', 'DocenteController@asignarAlumnosGrupos')->name('asignarAlumnosGrupos');

Route::get('/docente/viaje/asignar_alumnos_grupos/{id}', 'DocenteController@elegirViajeAsignarAlumnosGrupos')->name('elegirViajeAsignarAlumnosGrupos');

Route::get('/docente/asignar_alumnos_grupos/form/{id}', 'DocenteController@asignarAlumnosGruposForm')->name('asignarAlumnosGruposForm');

Route::post('/docente/datos/asignar_alumnos_grupos/{id}', 'DocenteController@datosAsignarAlumnosGrupos')->name('datosAsignarAlumnosGrupos');

Route::get('/docente/editar_alumnos_grupos/form/{id}', 'DocenteController@editarAlumnosGruposForm')->name('editarAlumnosGruposForm');

Route::put('/docente/editar_alumnos_grupos/datos/{id}', 'DocenteController@datosEditarAlumnosGrupos')->name('datosEditarAlumnosGrupos');

Route::get('/docente/alumnos/grupo/{id}', 'DocenteController@verAlumnosGrupo')->name('verAlumnosGrupo');

Route::get('/docente/reporte/viaje', 'DocenteController@listaReporteViaje')->name('listaReporteViaje');

Route::get('/docente/reporte/viaje/{id}', 'DocenteController@reporteViajeForm')->name('reporteViajeForm');

Route::put('/docente/reporte/{id}', 'DocenteController@datoReporteViaje')->name('datoReporteViaje');

Route::get('/docente/reporte/viaje/editar/{id}', 'DocenteController@editarReporteViajeForm')->name('editarReporteViajeForm');

Route::put('/docente/reporte/editar/{id}', 'DocenteController@datoEditarReporteViaje')->name('datoEditarReporteViaje');

Route::get('/docente/reporte/ver/viaje/{id}', 'DocenteController@verReporteViaje')->name('verReporteViaje');

/*Notificaciones (mensajes del docente)*/

Route::get('/docente/mensajes', 'NotificacionController@notificaciones')->name('notificaciones');

Route::get('/docente/mensaje/{id}', 'NotificacionController@notificacionMostrar')->name('notificacionMostrar');

Route::patch('/docente/mensaje/leido/{id}', 'NotificacionController@leidaNotificacion')->name('leidaNotificacion');

Route::delete('/docente/mensaje/borrar/{id}', 'NotificacionController@borrarNotificacion')->name('borrarNotificacion');

/*Rutas del alumno*/

Route::get('/alumno/opciones', 'AlumnoController@elegirOpciones')->name('elegirOpciones');

Route::get('/alumno/campus', 'AlumnoController@elegirCampusRegistrar')->name('elegirCampusRegistrar');

Route::post('alumno/planteles', 'AlumnoController@elegirPlantelRegistrar')->name('elegirPlantelRegistrar');

Route::post('alumno/registro', 'AlumnoController@registroAlumno')->name('registroAlumno');

Route::post('/alumno/registro/datos', 'AlumnoController@datosRegistroAlumno')->name('datosRegistroAlumno');















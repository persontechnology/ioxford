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

Route::get('/', function () {
    return view('welcome');
     // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
	// Artisan::call('storage:link');
	// Artisan::call('key:generate');
	// Artisan::call('migrate --seed');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// periodos
Route::get('/periodos', 'PeriodoController@index')->name('periodos');
Route::post('/periodo-estado', 'PeriodoController@estado')->name('estadoPeriodo');
Route::post('/periodo-guardar', 'PeriodoController@guardar')->name('periodosGuardar');
Route::get('/periodo-editar/{id}', 'PeriodoController@editar')->name('editarPeriodo');
Route::post('/periodo-actualizar', 'PeriodoController@actualizar')->name('periodosActualizar');
// cursos
Route::get('/cursos/{tipo}/{periodo}', 'CursoController@index')->name('cursos');

// paralelos
Route::post('/paralelos-guardar', 'ParaleloController@guardar')->name('paralelosGuardar');
Route::get('/paralelos-eliminar/{id}', 'ParaleloController@eliminar')->name('eliminarParalelo');
// estudiantes
Route::get('/estudiantes/{paralelo}', 'EstudianteController@index')->name('estudiantes');
Route::post('/estudiantes-guardar', 'EstudianteController@guardar')->name('guardarEstudiante');
Route::post('/estudiantes-importar', 'EstudianteController@importarEstudiante')->name('importarEstudiante');
Route::post('/estudiantes-actualizar', 'EstudianteController@actualizar')->name('actualizarEstudiante');
Route::get('/estudiantes-retirar/{id}', 'EstudianteController@retirar')->name('retirarEstudiante');
// mensajes
Route::post('/estudiantes-enviar-mensajes', 'EstudianteController@enviarMensaje')->name('enviarMensaje');



// routusuarios
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');
Route::post('/usuarios-guardar', 'UsuariosController@guardar')->name('guardarUsuario');
Route::post('/usuarios-eliminar', 'UsuariosController@eliminar')->name('eliminarUsuario');
Route::get('/usuarios-editar/{id}', 'UsuariosController@editar')->name('editarUsuario');
Route::post('/usuarios-actualizar', 'UsuariosController@actualizar')->name('actualizarUsuario');


// roles y permisos
Route::namespace('Sistema')->group(function () {
    // roles
    Route::get('/roles', 'Roles@index')->name('roles');
    Route::post('/roles-guardar', 'Roles@guardar')->name('guardarRol');
    Route::post('/roles-eliminar', 'Roles@eliminar')->name('eliminarRol');
    // permisos
    Route::get('/permisos/{idRol}', 'Permisos@index')->name('permisos');
    Route::post('/permisos-sincronizar', 'Permisos@sincronizar')->name('sincronizarPermiso');
});


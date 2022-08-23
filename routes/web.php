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
    return view('auth/login');
});
//
Route::resource('/talleres','CalendarioTallerController');
//
Route::resource('archivo/profesionales','ProfesionalController');
Route::resource('archivo/acompanantes','AcompananteController');
Route::resource('archivo/pacientes','PacienteController');
Route::resource('archivo/diagnosticos','DiagnosticoController');
Route::resource('archivo/talleres','TallerController');
Route::resource('archivo/admisiones','AdmisionController');
Route::resource('archivo/turnos','TurnoController');
Route::resource('archivo/usuarios','UsuarioController');
Route::resource('archivo/pacientetalleres','PacienteTallerController');
Route::resource('archivo/pacienteacompanantes','PacienteAcompananteController');
Route::resource('archivo/profesionaltalleres','ProfesionalTallerController');
//REPORTES
Route::get('/pdf/{historiaclinica}', 'HistoriaclinicaController@orderPdf')->name('orderPdf');
Route::get('reportetaller/{id}', 'TallerController@reportec');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/informacion', function () {
    return view('/informacion');
});
Route::get('/profesionaltaller', function () {
    return view('/profesionaltaller');
});
Route::get('resuprofesional1/{profesional?}', ['as' => 'resuprofesional1', 'uses' => 'ConsultaProfesionalController@consulta']); 

Route::get('/profesionalfecha', function () {
    return view('/profesionalfecha');
});
Route::get('fechaprofresultado/{profesional?}', ['as' => 'fechaprofresultado', 'uses' => 'ConsultaProfesionalController@fecha']);

Route::get('/profesionalesfecha', function () {
    return view('/profesionalesfecha');
});
Route::get('profesionalesresultado/{profesional?}', ['as' => 'profesionalesresultado', 'uses' => 'ConsultaProfesionalController@fechagral']);

Route::get('/acompanantefecha', function () {
    return view('/acompanantefecha');
});
Route::get('fechaacompresultado/{acompanante?}', ['as' => 'fechaacompresultado', 'uses' => 'ConsultaAcompananteController@fecha']);

Route::get('/pacientetaller', function () {
    return view('/pacientetaller');    
});
Route::get('resupaciente1/{paciente?}', ['as' => 'resupaciente1', 'uses' => 'ConsultaPacienteController@consulta']); 

Route::get('/pacientefecha', function () {
    return view('/pacientefecha');
});
Route::get('fechapaciresultado/{paciente?}', ['as' => 'fechapaciresultado', 'uses' => 'ConsultaPacienteController@fecha']);

Route::get('/pacientefechados', function () {
    return view('/pacientefechados');
});
Route::get('fechapaciresultadodos/{paciente?}', ['as' => 'fechapaciresultadodos', 'uses' => 'ConsultaPacienteController@fechados']);

Route::get('/admisionestado', function () {
    return view('/admisionestado');
});
Route::get('admisionresultado/{admision?}', ['as' => 'admisionresultado', 'uses' => 'ConsultaAdmisionController@fecha']);

Route::get('/turnoestado', function () {
    return view('/turnoestado');
});
Route::get('turnoresultado/{turno?}', ['as' => 'turnoresultado', 'uses' => 'ConsultaTurnoController@fecha']);
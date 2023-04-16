<?php

use App\Http\Controllers\CargaHorariaController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostulanteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
})->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::group(['middleware' => ['web']], function () {
    Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
    Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
    Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
    Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
});
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
    return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
    return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');

Route::post('postulantes/curriculum_vitae', [PostulanteController::class, 'storeCurriculumVitae'])->name('postulantes.storeCurriculumVitae');
Route::post('postulantes/carta_solicitud', [PostulanteController::class, 'storeCartaSolicitud'])->name('postulantes.storeCartaSolicitud');
Route::post('postulantes/fotocopia_carnet_identidad', [PostulanteController::class, 'storeFotocopiaCarnetIdentidad'])->name('postulantes.storeFotocopiaCarnetIdentidad');
Route::post('postulantes/avance_academico', [PostulanteController::class, 'storeAvanceAcademico'])->name('postulantes.storeAvanceAcademico');
Route::post('postulantes/formulario', [PostulanteController::class, 'storeFormulario'])->name('postulantes.storeFormulario');
Route::delete('postulantes/curriculum_vitae', [PostulanteController::class, 'deleteCurriculumVitae'])->name('postulantes.destroyCurriculumVitae');
Route::delete('postulantes/carta_solicitud', [PostulanteController::class, 'deleteCartaSolicitud'])->name('postulantes.destroyCartaSolicitud');
Route::delete('postulantes/fotocopia_carnet_identidad', [PostulanteController::class, 'deleteFotocopiaCarnetIdentidad'])->name('postulantes.destroyFotocopiaCarnetIdentidad');
Route::delete('postulantes/avance_academico', [PostulanteController::class, 'deleteAvanceAcademico'])->name('postulantes.destroyAvanceAcademico');
Route::delete('postulantes/formulario', [PostulanteController::class, 'deleteFormulario'])->name('postulantes.destroyFormulario');

Route::group(['middleware' => 'auth'], function () {
    Route::get('billing', function () {
        return view('pages.billing');
    })->name('billing');
    Route::get('tables', function () {
        return view('pages.tables');
    })->name('tables');
    Route::get('rtl', function () {
        return view('pages.rtl');
    })->name('rtl');
    Route::get('virtual-reality', function () {
        return view('pages.virtual-reality');
    })->name('virtual-reality');
    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');
    Route::get('static-sign-in', function () {
        return view('pages.static-sign-in');
    })->name('static-sign-in');
    Route::get('static-sign-up', function () {
        return view('pages.static-sign-up');
    })->name('static-sign-up');
    Route::get('user-management', function () {
        return view('pages.laravel-examples.user-management');
    })->name('user-management');


    Route::get('user-profile', function () {
        return view('pages.user.user-profile');
    })->name('user-profile');
    Route::put('user-profile', [ProfileController::class, 'update'])->middleware('auth');
    Route::get('periodos', [PeriodoController::class, 'index'])->name('periodos.index');
    // TODO: Agregar middleware para verificar que el usuario es Decano
    Route::get('periodos/create', [PeriodoController::class, 'create'])->name('periodos.create')->middleware('decano');
    Route::post('periodos', [PeriodoController::class, 'store'])->name('periodos.store');
    Route::get('convocatorias', [ConvocatoriaController::class, 'index'])->name('convocatorias.index');
    Route::get('convocatorias/create', [ConvocatoriaController::class, 'create'])->name('convocatorias.create');
    Route::get('convocatorias/materia-ofertada/{materiaConvocadaId}', [ConvocatoriaController::class, 'materiaConvocadaShow'])->name('convocatorias.materias-convocadas.show');
    Route::get('convocatorias/{id}', [ConvocatoriaController::class, 'show'])->name('convocatorias.show');
    Route::post('convocatorias', [ConvocatoriaController::class, 'store'])->name('convocatorias.store');
    Route::get('postulantes/create/{materiaConvocadaId}', [PostulanteController::class, 'create'])->name('postulantes.create');
    Route::post('postulantes/{materiaConvocadaId}', [PostulanteController::class, 'store'])->name('postulantes.store');
    Route::get('postulante/{postulanteId}', [PostulanteController::class, 'show'])->name('postulantes.show');
    Route::get('postulantes/{convocatoriaId}/{materiaConvocadaId}', [PostulanteController::class, 'index'])->name('postulantes.index');
    Route::get('formularios/{postulanteId}', [FormularioController::class, 'show'])->name('formularios.show');
    Route::put('formularios/{postulanteId}', [FormularioController::class, 'update'])->name('formularios.update');
    Route::get('evaluaciones/create/{materiaConvocadaId}', [ExamenController::class, 'create'])->name('evaluaciones.create');
    Route::post('evaluaciones/{materiaConvocadaId}', [ExamenController::class, 'store'])->name('evaluaciones.store');
    Route::get('carga-horaria/{postulanteId}', [CargaHorariaController::class, 'create'])->name('carga-horaria.create');
    Route::post('carga-horaria/{postulanteId}', [CargaHorariaController::class, 'store'])->name('carga-horaria.store');


});

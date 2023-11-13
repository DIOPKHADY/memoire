<?php
namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\Patient;
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
Route::get('/', 'AccueilController@index')->name('accueil');

Route::get('/', function () {
    return view('test');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('medecin', MedecinController::class);
Route::resource('secretaire', SecretaireController::class);
Route::resource('Patient', PatientController::class);
Route::resource('Medecin', MedecinController::class);
Route::resource('Secretaire', SecretaireController::class);

Route::resource('patient', PatientController::class);
Route::resource('medecin', MedecinController::class);
Route::resource('RendezVous', RendezVousController::class);
Route::resource('rendezvous', RendezVousController::class);
Route::resource('Consultation', ConsultationController::class);
Route::resource('consultation', ConsultationController::class);




require __DIR__.'/auth.php';

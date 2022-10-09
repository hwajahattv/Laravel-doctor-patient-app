<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\VideoChatController;
use App\Http\Controllers\PatientController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\AdminController::class,'logout']);
Route::get('/team', [App\Http\Controllers\HomeController::class,'team']);
Route::get('/services', [App\Http\Controllers\HomeController::class,'services']);
Route::get('/aboutUs', [App\Http\Controllers\HomeController::class,'aboutUs']);
Route::get('/contactUs', [App\Http\Controllers\HomeController::class,'contactUs']);


// Doctor routes
Route::get('/profile', function() {
    return redirect()->route('profile', ['id' => Auth::id()]);
});
Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::get('/profileEdit/{id}', [App\Http\Controllers\HomeController::class,
'profileBuilder'])->name('profileBuilder');
Route::post('/profileEdit/{id}', [App\Http\Controllers\HomeController::class,
'profileBuilderUpdate'])->name('profileBuilderUpdate');

// Admin routes
Route::get('/showDoctors', [App\Http\Controllers\AdminController::class,'showDoctors']);
Route::get('/deleteDoctor/{id}', [App\Http\Controllers\AdminController::class,
'deleteDoctor'])->name('deleteDoctor');

Route::get('/showPatients', [App\Http\Controllers\AdminController::class,'showPatients']);
Route::get('/deletePatient/{id}', [App\Http\Controllers\AdminController::class,
'deletePatient'])->name('deletePatient');

Route::get('/showAdmins', [App\Http\Controllers\AdminController::class,'showAdmins']);
Route::get('/deleteAdmin/{id}', [App\Http\Controllers\AdminController::class,
'deleteAdmin'])->name('deleteAdmin');

// patient routes

Route::get('/profilePatient/{id}', [App\Http\Controllers\PatientController::class,
'profilePatient'])->name('profilePatient');
Route::get('/patientProfileEdit/{id}', [App\Http\Controllers\PatientController::class,
'patientProfileBuilder'])->name('patientProfileBuilder');
Route::post('/patientProfileEdit/{id}', [App\Http\Controllers\HomeController::class,
'patientProfileBuilderUpdate'])->name('patientProfileBuilderUpdate');
Route::get('/getAvailableDays/{id}', [App\Http\Controllers\HomeController::class,
'getAvailableDays'])->name('getAvailableDays');
Route::get('/registerAppointmentOfThisDoctor/getAvailableDays/{id}', [App\Http\Controllers\HomeController::class,
'getAvailableDays'])->name('getAvailableDays');
Route::get('/getAvailableSlots/{id}/{day}', [App\Http\Controllers\HomeController::class,
'getAvailableSlots'])->name('getAvailableSlots');
Route::get('/registerAppointmentOfThisDoctor/getAvailableSlots/{id}/{day}',
[App\Http\Controllers\HomeController::class,
'getAvailableSlots'])->name('getAvailableSlots');

// Appointment routes
Route::get('/registerAppointment', [App\Http\Controllers\AppointmentController::class,
'registerAppointment'])->name('registerAppointment');
Route::get('/registerAppointmentOfThisDoctor/{id}', [App\Http\Controllers\AppointmentController::class,
'registerAppointmentOfThisDoctor'])->name('registerAppointmentOfThisDoctor');
Route::post('/registerAppointment/{id}', [App\Http\Controllers\AppointmentController::class,
'registerAppointmentStore'])->name('registerAppointmentStore');
// Route::get('/appointmentPage', [App\Http\Controllers\AppointmentController::class,
// 'appointmentPage'])->name('appointmentPage');
Route::get('/showAppointmentsList', [App\Http\Controllers\AppointmentController::class,
'showAppointmentsList'])->name('showAppointmentsList');
Route::get('/adminShowAppointments', [App\Http\Controllers\AppointmentController::class,
'adminShowAppointments'])->name('adminShowAppointments');
Route::get('/doneAppointment/{id}', [App\Http\Controllers\AppointmentController::class,
'doneAppointment'])->name('doneAppointment');
Route::get('/undoneAppointment/{id}', [App\Http\Controllers\AppointmentController::class,
'undoneAppointment'])->name('undoneAppointment');


// //Video Chat Routes
// Route::get('/video-chat', function () {
//     // fetch all users apart from the authenticated user
//     $users = User::where('id', '<>', Auth::id())->get();
//     return view('video-chat', ['users' => $users]);
// });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/agora-chat', 'App\Http\Controllers\AgoraVideoController@index');
    Route::post('/agora/token', 'App\Http\Controllers\AgoraVideoController@token');
    Route::post('/agora/call-user', 'App\Http\Controllers\AgoraVideoController@callUser');
});

// Endpoints to call or receive calls.
Route::post('/video/call-user', [App\Http\Controllers\VideoChatController::class,'callUser']);
Route::post('/video/accept-call', [App\Http\Controllers\VideoChatController::class,'acceptCall']);

Auth::routes();

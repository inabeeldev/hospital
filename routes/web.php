<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PatientBillController;
use App\Http\Controllers\DoctorScreenController;
use App\Http\Controllers\ProcedureNameController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('patients', PatientController::class);
    Route::get('patients/print/{id}', [PatientController::class, 'print'])->name('patients.print');
    Route::get('patients/prescription/{id}', [PatientController::class, 'prescription'])->name('patients.prescription');
    Route::post('patient-info', [PatientController::class, 'info'])->name('patients.info');
    Route::get('doctor_procedures/{id}', [PatientController::class, 'doc_pro'])->name('doc.pro');
    Route::resource('references', ReferenceController::class);
    Route::resource('conditions', ConditionController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('procedures', ProcedureController::class);
    Route::resource('doctor-screen', DoctorScreenController::class);
    Route::get('doctor-screen/old_patient/{id}', [DoctorScreenController::class, 'show_old'])->name('show.old');
    Route::get('doctor-screen/echo/{id}', [DoctorScreenController::class, 'echo'])->name('doctor-screen.echo');
    Route::post('doctor-screen/echo_store', [DoctorScreenController::class, 'echo_store'])->name('doctor-screen.echo_store');
    Route::resource('history', HistoryController::class);
    Route::get('doctor_procedures_history/{id}', [HistoryController::class, 'docs_pros'])->name('docs.pros');
    Route::resource('patient_bill', PatientBillController::class);
    Route::resource('consultants', ConsultantController::class);
    Route::resource('procedure_names', ProcedureNameController::class);
});

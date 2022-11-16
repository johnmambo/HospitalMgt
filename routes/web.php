<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hr\HrController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Nurse\nurseController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Pharmacy\PharmacyController;










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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin/dashboard', [AdminController::class, 'admindash'])->name('admin.dashboard');
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/index', [AdminController::class, 'adminindex'])->name('index');
    Route::get('/dashboard', [AdminController::class, 'admindash'])->name('dashboard');



    // Route::resource('/departments/index', DepartmentsController::class);
    // Route::resource('/departments/create/', DepartmentsController::class);


    Route::get('/departments', [AdminController::class, 'departments'])->name('departments');
    Route::get('/departments/adddepartment', [AdminController::class, 'adddepartment'])->name('adddepartment');
    Route::Post('/departments/store', [AdminController::class, 'storedepartment'])->name('store');
    Route::get('/departments/departments/edit', [AdminController::class, 'editdepartment'])->name('dep_edit');
    Route::post('/departments/update', [AdminController::class, 'updatedepartment'])->name('update');

    Route::get('/allusers', [AdminController::class, 'allusers'])->name('allusers');
    Route::get('/doctors', [AdminController::class, 'admindoctors'])->name('doctors');
    Route::get('/inpatients', [AdminController::class, 'inpatients'])->name('inpatients');
});



Route::get('/doctor/dashboard', [DoctorController::class, 'doctordash'])->name('doctor.dashboard');





Route::get('/user/dashboard', [UserController::class, 'userdash'])->name('user.dashboard');

Route::get('/nurse/dashboard', [nurseController::class, 'nursedash'])->name('nurse.dashboard');


Route::get('/patient/dashboard', [PatientController::class, 'patientdash'])->name('patient.dashboard');


Route::get('/pharmacy/dashboard', [PharmacyController::class, 'pharmacydash'])->name('pharmacy.dashboard');

Route::get('/hr/dashboard', [HrController::class, 'hrdash'])->name('hr.dashboard');
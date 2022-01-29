<?php

// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;

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

// Route::get('/login', function () {
//     return view('login.index');
// })->name('login');;

Route::post('login', [LoginController::class,'login'])->name('login');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'login'])->name('loginget');
Route::get('/login', [App\Http\Controllers\DashboardController::class, 'login'])->name('loginget');
// Route::post('storecustomer', [App\Http\Controllers\DashboardController::class, 'storecustomer'])->name('storecustomer');
// Route::post('storecustomer1', [App\Http\Controllers\DashboardController::class, 'storecustomer1'])->name('storecustomer1');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/logout', [LoginController::class,'logout']);
	Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
	Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

	Route::get('/search-patient', [App\Http\Controllers\DoctorController::class, 'search_patient'])->name('search-patient');

	Route::get('/add-patient', [App\Http\Controllers\DoctorController::class, 'add_patient'])->name('add-patient');
	Route::post('/add-patient', [App\Http\Controllers\DoctorController::class, 'add_patient'])->name('add-patient');

	Route::get('/new-users', [App\Http\Controllers\DoctorController::class, 'new_users'])->name('new-users');
	Route::get('/follow-ups', [App\Http\Controllers\DoctorController::class, 'follow_ups'])->name('follow-ups');
	Route::post('/save-followups', [App\Http\Controllers\DoctorController::class, 'save_followups'])->name('save_followups');
	Route::get('/medicine-requests', [App\Http\Controllers\DoctorController::class, 'medicine_requests'])->name('medicine-requests');
	Route::get('/deletemedicine/{id}', [App\Http\Controllers\DoctorController::class, 'deletemedicine'])->name('deletemedicine');
	Route::get('/deletefeedback/{id}', [App\Http\Controllers\DoctorController::class, 'deletefeedback'])->name('deletefeedback');
	Route::get('/ajax_form', [App\Http\Controllers\DoctorController::class, 'ajax_form'])->name('ajax_form');

	Route::get('/change-password', [App\Http\Controllers\DoctorController::class, 'change_password'])->name('change-password');
	Route::post('/change-password', [App\Http\Controllers\DoctorController::class, 'change_password'])->name('change-password');

	Route::get('/caseanalysis', [App\Http\Controllers\DoctorController::class, 'caseanalysis'])->name('caseanalysis');
    Route::get('/do', [App\Http\Controllers\DoctorController::class, 'does'])->name('do');

    Route::get('/history', [App\Http\Controllers\DoctorController::class, 'history'])->name('history');
    Route::post('/history', [App\Http\Controllers\DoctorController::class, 'history'])->name('history');

    Route::get('/complaint', [App\Http\Controllers\DoctorController::class, 'complaint'])->name('complaint');
    Route::post('/complaint', [App\Http\Controllers\DoctorController::class, 'complaint'])->name('complaint');

    Route::get('/testimonials', [App\Http\Controllers\DoctorController::class, 'testimonials'])->name('testimonials');
    Route::post('/testimonials', [App\Http\Controllers\DoctorController::class, 'testimonials'])->name('testimonials');

    Route::get('/prescription', [App\Http\Controllers\DoctorController::class, 'prescription'])->name('prescription');
    Route::post('/prescription', [App\Http\Controllers\DoctorController::class, 'prescription'])->name('prescription');

    Route::get('/makeup', [App\Http\Controllers\DoctorController::class, 'makeup'])->name('makeup');
    Route::post('/makeup', [App\Http\Controllers\DoctorController::class, 'makeup'])->name('makeup');

    Route::get('/general', [App\Http\Controllers\DoctorController::class, 'general'])->name('general');
    Route::post('/general', [App\Http\Controllers\DoctorController::class, 'general'])->name('general');

    Route::get('/birth', [App\Http\Controllers\DoctorController::class, 'birth'])->name('birth');
    Route::post('/birth', [App\Http\Controllers\DoctorController::class, 'birth'])->name('birth');

    Route::get('/mother', [App\Http\Controllers\DoctorController::class, 'mother'])->name('mother');
    Route::post('/mother', [App\Http\Controllers\DoctorController::class, 'mother'])->name('mother');

    Route::get('/milestone', [App\Http\Controllers\DoctorController::class, 'milestone'])->name('milestone');
    Route::post('/milestone', [App\Http\Controllers\DoctorController::class, 'milestone'])->name('milestone');

    Route::get('/vaccination', [App\Http\Controllers\DoctorController::class, 'vaccination'])->name('vaccination');
    Route::post('/vaccination', [App\Http\Controllers\DoctorController::class, 'vaccination'])->name('vaccination');

    Route::get('/mental', [App\Http\Controllers\DoctorController::class, 'mental'])->name('mental');
    Route::post('/mental', [App\Http\Controllers\DoctorController::class, 'mental'])->name('mental');

    Route::get('/mental1', [App\Http\Controllers\DoctorController::class, 'mental1'])->name('mental1');
    Route::post('/mental1', [App\Http\Controllers\DoctorController::class, 'mental1'])->name('mental1');

	//only those have manage_user permission will get access
	Route::group(['middleware' => 'can:manage_user'], function(){
		Route::get('/users', [UserController::class,'index']);
		Route::get('/user/get-list', [UserController::class,'getUserList']);
		Route::get('/user/get-list1', [UserController::class,'getUserList1']);
		Route::get('/user/create', [UserController::class,'create']);
		Route::post('/user/create', [UserController::class,'store'])->name('create-user');
		Route::get('/user/{id}', [UserController::class,'edit']);
		Route::post('/user/update', [UserController::class,'update']);
		Route::get('/user/delete/{id}', [UserController::class,'delete']);
	});

	Route::get('/profile', [UserController::class,'profile']);
	Route::post('/user-profile', [UserController::class,'updateProfile'])->name('user-profile');

});















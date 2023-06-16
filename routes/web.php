<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaidServicesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentServicesController;
use App\Http\Controllers\SutdentResultController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/web-login' , [LoginController::class , 'webLogin'])->name('web-login');
Route::post('/save-user', [LoginController::class, 'saveLogin'])->name('save-user');
Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/main', [MainController::class, 'index'])->name('main');
    Route::get('/pay-book/{id}', [MainController::class, 'payBook'])->name('pay-book');
    Route::post('/savePayBook', [MainController::class, 'savePayBook'])->name('savePayBook');
    Route::get('/pay-page/{id}', [MainController::class, 'payPage'])->name('pay-page');
    Route::post('/savePayPage', [MainController::class, 'savePayPage'])->name('savePayPage');
    Route::get('/pay-page/{id}', [MainController::class, 'payPage'])->name('pay-page');
    Route::get('/new-year/{id}', [MainController::class, 'newYear'])->name('new-year');

    Route::get('/askar/{id}', [MainController::class, 'askar'])->name('askar');

    Route::get('/eltemas/{id}', [MainController::class, 'eltemas'])->name('eltemas');
    Route::post('/saveEltemas', [MainController::class, 'saveEltemas'])->name('saveEltemas');
    Route::get('/summer/{id}', [MainController::class, 'summer'])->name('summer');
    Route::post('/saveSummer', [MainController::class, 'saveSummer'])->name('saveSummer');
    Route::post('/saveSummerPdf', [MainController::class, 'saveSummerPdf'])->name('saveSummerPdf');
    Route::get('/unread/{id}', [MainController::class, 'unread'])->name('unread');
    Route::post('/saveUnread', [MainController::class, 'saveUnread'])->name('saveUnread');
    Route::get('/result', [MainController::class, 'result'])->name('result');
    Route::get('/resultVal', [MainController::class, 'resultVal'])->name('resultVal');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('services', ServicesController::class);
    Route::resource('paid-services', PaidServicesController::class);
    Route::resource('students', StudentController::class);
    //Pay-book-fees
    Route::get('Pay-book-fees',[StudentServicesController::class,'PayBookFees'] )->name('Pay-book-fees');
    //Payment-tuition-fees
    Route::get('Payment-tuition-fees',[StudentServicesController::class,'PaymentTuitionFees'] )->name('Payment-tuition-fees');
//submit-petition
Route::get('submit-petition',[StudentServicesController::class,'submitPetition'] )->name('submit-petition');
//Literacy
Route::get('literacy',[StudentServicesController::class,'Literacy'] )->name('literacy');
//summer-training
Route::get('summer-training',[StudentServicesController::class,'summerTraining'] )->name('summer-training');
//student-result
Route::resource('student-result', SutdentResultController::class);

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

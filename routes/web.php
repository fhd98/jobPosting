<?php

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

Route::get('create-post', function () {
    return view('create-post');
});

Route::post('/create-post', function () {
    return view('create-post');
});

//Route::get('dashboard', function () {
  //  return view('dashboard');
//});

Route::get('login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});


Route::get('/home/plus',[\App\Http\Controllers\CalculateController::class,'add']);
Route::post('signup',[\App\Http\Controllers\userController::class,'signupAction']);
Route::post('createpost',[\App\Http\Controllers\postController::class,'postAction']);


Route::get('dashboard',[\App\Http\Controllers\postController::class,'getPost']);








Route::get('user-details', function () {
    return view('user-details');
});

//Route::get('user-info', function () {
  //  return view('user-info');
//});


Route::post('/detailsSave',[\App\Http\Controllers\testController::class,'detailsAction']);
Route::get('user-info',[\App\Http\Controllers\testController::class,'getDetails']);


//new
Route::get('/form',[\App\Http\Controllers\FormController::class,'indexAction']);
Route::post('/saveForm',[\App\Http\Controllers\FormController::class,'saveFormAction']);

Route::get('/editForm/{id}',[\App\Http\Controllers\FormController::class,'editFormAction']);
Route::get('/deleteForm/{id}',[\App\Http\Controllers\FormController::class,'deleteFormAction']);

//bet


Route::get('/betFormm',[\App\Http\Controllers\betFormController::class,'indexAction']);
Route::post('/saveBetForm',[\App\Http\Controllers\betFormController::class,'saveFormAction']);

Route::get('bet-info',[\App\Http\Controllers\betFormController::class,'getDetails']);


Route::get('/editForm/{id}',[\App\Http\Controllers\betFormController::class,'editFormAction']);
Route::get('/deleteForm/{id}',[\App\Http\Controllers\betFormController::class,'deleteFormAction']);


// Rozee Evaluation
// Rozee Evaluation


Route::get('rozee-login', function () {
    return view('Rozee.login');
});

Route::get('/rozee-postjob',[\App\Http\Controllers\rozeeController::class,'indexAction']);
Route::post('/saveJobForm',[\App\Http\Controllers\rozeeController::class,'saveFormAction']);

Route::get('job-info',[\App\Http\Controllers\rozeeController::class,'getDetails']);

Route::get('/editForm/{id}',[\App\Http\Controllers\rozeeController::class,'editFormAction']);
Route::get('/deleteForm/{id}',[\App\Http\Controllers\rozeeController::class,'deleteFormAction']);

Route::post('/rozeeLogin',[\App\Http\Controllers\rozeeController::class,'userLogin']);


Route::get('rozee-dashboard',[\App\Http\Controllers\rozeeController::class,'getDetails']);


//Route::get('rozee-dashboard', function () {
  //  return view('Rozee.dashboard');
//});





//Route::get('rozee-postjob', function () {
  //  return view('Rozee.post-job');
//});

//API

Route::get('testAPI',[App\Http\Controllers\HomeControllers::class,'fetchTest']);

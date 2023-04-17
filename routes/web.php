<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('admin/admin/lista', function () {
    return view('admin.admin.lista');
});






Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    });
});


Route::group(['middleware' => 'secretario'], function () {
    Route::get('secretario/dashboard', function () {
        return view('admin.dashboard');
    });
});


Route::group(['middleware' => 'tesoureiro'], function () {
    Route::get('tesoureiro/dashboard', function () {
        return view('admin.dashboard');
    });
});

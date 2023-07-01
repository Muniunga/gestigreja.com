<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ParoquiaController;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\SancaoController;
use App\Http\Controllers\DizimoController;
use App\Http\Controllers\OfertaController;

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
Route::get('esqueci-password', [AuthController::class, 'esquecipassword']);
Route::post('esqueci-password', [AuthController::class, 'PostEsqueciPassword']);


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('admin/admin/lista', function () {
    return view('admin.admin.lista');
});






Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/admin/lista',  [AdminController::class, 'lista']);
    Route::get('admin/admin/membros',  [AdminController::class, 'membros']);
    Route::get('admin/admin/add',  [AdminController::class, 'add']);
    Route::post('admin/admin/add',  [AdminController::class, 'insert']);
    Route::get('admin/admin/addmembro',  [AdminController::class, 'addMembro']);
    Route::post('admin/admin/addmembro',  [AdminController::class, 'insertMembro']);
    Route::get('admin/admin/edit/{id}',  [AdminController::class, 'edit']);
    Route::post('admin/admin/edit/{id}',  [AdminController::class, 'update']);
    Route::get('admin/admin/delete/{id}',  [AdminController::class, 'delete']);


    // rotas endereco
    Route::get('admin/endereco/lista',  [EnderecoController::class, 'lista']);
    Route::get('admin/endereco/add',  [EnderecoController::class, 'add']);
    Route::post('admin/endereco/add',  [EnderecoController::class, 'insert']);
    Route::get('admin/endereco/edit/{id}',  [EnderecoController::class, 'edit']);
    Route::post('admin/endereco/edit/{id}',  [EnderecoController::class, 'update']);
    Route::get('admin/endereco/delete/{id}',  [EnderecoController::class, 'delete']);

    // Rotas paroquia
    Route::get('admin/paroquia/lista',  [ParoquiaController::class, 'lista']);
    Route::get('admin/paroquia/add',  [ParoquiaController::class, 'add']);
    Route::post('admin/paroquia/add',  [ParoquiaController::class, 'insert']);
    Route::get('admin/paroquia/edit/{id}',  [ParoquiaController::class, 'edit']);
    Route::post('admin/paroquia/edit/{id}',  [ParoquiaController::class, 'update']);
    Route::get('admin/paroquia/delete/{id}',  [ParoquiaController::class, 'delete']);

    //Rotas Membro
    Route::get('admin/membro/lista',  [MembroController::class, 'lista']);
    Route::get('admin/membro/add',  [MembroController::class, 'add']);
    Route::post('admin/membro/add',  [MembroController::class, 'insert']);
    Route::get('admin/membro/edit/{id}',  [MembroController::class, 'edit']);
    Route::post('admin/membro/edit/{id}',  [MembroController::class, 'update']);
    Route::get('admin/membro/delete/{id}',  [MembroController::class, 'delete']);
    Route::get('admin/membro/detalhe/{id}',  [MembroController::class, 'detalhe']);


    //Rotas sancao
    Route::get('admin/sancao/lista',  [SancaoController::class, 'lista']);
    Route::get('admin/sancao/add',  [SancaoController::class, 'add']);
    Route::post('admin/sancao/add',  [SancaoController::class, 'insert']);
    Route::get('admin/sancao/edit/{id}',  [SancaoController::class, 'edit']);
    Route::post('admin/sancao/edit/{id}',  [SancaoController::class, 'update']);
    Route::get('admin/sancao/delete/{id}',  [SancaoController::class, 'delete']);
    Route::get('admin/sancao/detalhe/{id}',  [SancaoController::class, 'detalhe']);

    //Rotas oferta
    Route::get('admin/oferta/lista',  [OfertaController::class, 'lista']);
    Route::get('admin/oferta/add',  [OfertaController::class, 'add']);
    Route::post('admin/oferta/add',  [OfertaController::class, 'insert']);
    Route::get('admin/oferta/edit/{id}',  [OfertaController::class, 'edit']);
    Route::post('admin/oferta/edit/{id}',  [OfertaController::class, 'update']);
    Route::get('admin/oferta/delete/{id}',  [OfertaController::class, 'delete']);

    //Rotas dizimo

    Route::get('admin/dizimo/lista',  [DizimoController::class, 'lista']);
    Route::get('admin/dizimo/add',  [DizimoController::class, 'add']);
    Route::post('admin/dizimo/add',  [DizimoController::class, 'insert']);
    Route::get('admin/dizimo/edit/{id}',  [DizimoController::class, 'edit']);
    Route::post('admin/dizimo/edit/{id}',  [DizimoController::class, 'update']);
    Route::get('admin/dizimo/delete/{id}',  [DizimoController::class, 'delete']);



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

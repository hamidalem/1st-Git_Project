<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PDFExportController;
use App\Http\Controllers\QrCodeController;

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


Route::get('/', [ClientController::class, 'index'])->name('clients.index');





//client routes
Route::get('/client', [ClientController::class, 'index'])->name('clients.index');
Route::get('/client/create', [ClientController::class,'create'])->name ('clients.create');
Route::post('/client', [ClientController::class,'store'])->name ('clients.store');
Route::get('/client/{idclient}/edit', [ClientController::class,'edit'])->name ('clients.edit');
Route::delete('/client/{idclient}', [ClientController::class,'destroy'])->name ('clients.destroy');
Route::put('/client/{idclient}', [ClientController::class,'update'])->name ('clients.update');

//fonction routes
Route::get('/fonction', [FonctionController::class, 'index'])->name('fonctions.index');
Route::get('/fonction/create', [FonctionController::class,'create'])->name ('fonctions.create');
Route::post('/fonction', [FonctionController::class,'store'])->name ('fonctions.store');
Route::get('/fonction/{idfonction}/edit', [FonctionController::class,'edit'])->name ('fonctions.edit');
Route::delete('/fonction/{idfonction}', [FonctionController::class,'destroy'])->name ('fonctions.destroy');
Route::put('/fonction/{idfonction}', [FonctionController::class,'update'])->name ('fonctions.update');

//auth
Route::get('/register',[RegisteredUserController::class,'create'])->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy'])->name('logout');


//pdf
Route::get('/exportclientpdf', [PDFExportController::class, 'exportClientWithQrcode'])->name('exportclientpdf');
Route::get('/exportfonctionpdf', [PDFExportController::class, 'exportFonctionWithQrcode'])->name('exportfonctionpdf');

//excel
Route::get('/exportclientexcel', [ClientController::class, 'export'])->name('exportclientexcel');
Route::get('/exportfonctionexcel', [FonctionController::class, 'export'])->name('exportfonctionexcel');






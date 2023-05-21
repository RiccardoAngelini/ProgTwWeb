<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;

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
Route::get('/', [PublicController::class,'showHome'])
        ->name('Home');

Route::view('/dovesiamo', 'dovesiamo')
        ->name('dovesiamo');




Route::view('/chisiamo', 'chisiamo')
        ->name('chisiamo');

Route::view('/contatti', 'contatti')
        ->name('contatti');

Route::get('/catalogo', [PublicController::class,'showCatalogo'])
        ->name('catalogo');


Route::get('/aziende', [PublicController::class,'showAziende'])
        ->name('aziende');


        
// GESTIONE FAQ
Route::get('/FAQ', [PublicController::class, 'faq'])->name('faq2'); //accesso publico

//Acesso admin, vincolli di acesso non ancore definito

 Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
 Route::get('/faq/create', [FaqController::class, 'create'])->name('adminfaq.create');
 Route::post('/faq', [FaqController::class, 'store'])->name('adminfaq.store');
 Route::get('faq/{id}/edit', [FaqController::class, 'edit'])->name('adminfaq.edit');
 Route::put('/faq/{id}', [FaqController::class, 'update'])->name('adminfaq.update');
 Route::get('/show/{id}', [FaqController::class, 'show'])->name('show');
 Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('adminfaq.destroy');


// ROUTE USER
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);

Route::post('/user', [UserController::class, 'store']);

Route::get('/user/updateUser', [UserController::class, 'changeUsername'])
->name('newusername');


Route::POST('/user/updateUser', [UserController::class, 'storeUsername'])
->name('newusername.store');


Route::get('/user/{userId}/edit', [UserController::class, 'edit']);
Route::put('/user/{userId}', [UserController::class, 'update']);
Route::delete('/user/{userId}', [UserController::class, 'destroy']);





Route::get('/user', [UserController::class, 'index'])
        ->name('user')->middleware('can:isUser');

Route::get('/staff', [StaffController::class, 'index'])
        ->name('staff')->middleware('can:isStaff');

Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin');


Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])
        ->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])
        ->name('newproduct.store');


Route::get('/admin/updateproduct', [AdminController::class, 'updateProduct'])
        ->name('updateproduct');



Route::get('/offerta/{promo_Id}', [PublicController::class,'showOfferta'])
        ->name('offerta');

Route::get('/coupon}', [UserController::class,'showCoupon'])
        ->name('coupon');


Route::get('/catalogo/filtro', [PublicController::class,'filtro'])
        ->name('catalogo2');

Route::get('/catalogo/ricerca', [PublicController::class,'ricercaPerAziendaNome'])
        ->name('catalogo3');

require __DIR__.'/auth.php';

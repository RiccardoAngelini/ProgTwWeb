<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqController;
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

Route::get('/index', [FaqController::class, 'index'])->name('index');
Route::get('/create', [FaqController::class, 'create'])->name('create');
Route::post('/store', [FaqController::class, 'store'])->name('store');
Route::get('/edit/{faq_id}', [FaqController::class, 'edit'])->name('edit');
Route::get('/show/{faq_id}', [FaqController::class, 'show'])->name('show');


// GESTIONE FAQ
Route::get('/FAQ', [PublicController::class, 'faq'])->name('faq2'); //accesso publico

//Acesso admin, vincolli di acesso non ancore definito
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/faq/create', [FaqController::class, 'create'])->name('adminfaq.create');
Route::post('/faq', [FaqController::class, 'store'])->name('adminfaq.store');
Route::get('faq/{faq_Id}/edit', [FaqController::class, 'edit'])->name('adminfaq.edit');
Route::put('/faq/{faq_Id}', [FaqController::class, 'update'])->name('adminfaq.update');
Route::get('/show/{faq_Id}', [FaqController::class, 'show'])->name('show');
Route::delete('/faq/{faq_Id}', [FaqController::class, 'destroy'])->name('adminfaq.destroy');
// Route::resource('faq', FaqController::class);

//Acesso admin, vincolli di acesso non ancore definito
Route::get('/index', [FaqController::class, 'index'])->name('index');
Route::get('/create', [FaqController::class, 'create'])->name('create');
Route::post('/store', [FaqController::class, 'store'])->name('store');
Route::get('/edit/{faq_Id}', [FaqController::class, 'edit'])->name('edit');
Route::get('/show/{faq_Id}', [FaqController::class, 'show'])->name('show');
Route::get('/destroy/{faq_Id}', [FaqController::class, 'destroy'])->name('destroy');




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

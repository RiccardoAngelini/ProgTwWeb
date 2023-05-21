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
Route::get('/', [PublicController::class,'showHome'])->name('Home');

Route::view('/dovesiamo', 'dovesiamo') ->name('dovesiamo');
  
Route::view('/chisiamo', 'chisiamo')->name('chisiamo');

Route::view('/contatti', 'contatti')->name('contatti');

Route::get('/catalogo', [PublicController::class,'showCatalogo'])->name('catalogo');

Route::get('/aziende', [PublicController::class,'showAziende'])->name('aziende');
        


        
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



//ROUTE PROFILO STAFF
use App\Http\Controllers\ProfileController;

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy');


Route::middleware('auth')->group(function(){
        Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('profiles.show');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);

Route::post('/user', [UserController::class, 'store']);

Route::get('/user/updateUser', [UserController::class, 'changeUsername'])
->name('newusername');


Route::POST('/user/updateUser', [UserController::class, 'storeUsername'])
->name('newusername.store');


Route::get('/user/updatePsw', [UserController::class, 'changePassword'])
->name('newpassword');

Route::POST('/user/updatePsw', [UserController::class, 'storePassword'])
->name('newpassword.store');

Route::get('/user/updateEmail', [UserController::class, 'changeEmail'])
->name('newemail');

Route::POST('/user/updateEmail', [UserController::class, 'storeEmail'])
->name('newemail.store');

Route::get('/user/updateNameSurname', [UserController::class, 'changeNameSurname'])
->name('newnamesurname');

Route::POST('/user/updateNameSurname', [UserController::class, 'storeNameSurname'])
->name('newnamesurname.store');

Route::get('/user/{userId}/edit', [UserController::class, 'edit']);
Route::put('/user/{userId}', [UserController::class, 'update']);
Route::delete('/user/{userId}', [UserController::class, 'destroy']);





Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('can:isUser');


Route::get('/staff', [StaffController::class, 'staff'])->name('staff')->middleware('can:isStaff');
Route::get('/staff/listaofferte',[StaffController::class, 'listapromo'])->name('product.index');

Route::get('/offerta/{promo_Id}', [PublicController::class,'showOfferta'])
        ->name('offerta');

Route::get('/offerta/{promo_Id}/coupon/{coupon_Id}', [UserController::class,'showCoupon'])
        ->name('coupon');





Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])->name('newproduct.store');

Route::get('/admin/updateproduct', [AdminController::class, 'updateProduct'])->name('updateproduct');

Route::get('/offerta/{promo_Id}', [PublicController::class,'showOfferta'])->name('offerta');

Route::get('/coupon}', [UserController::class,'showCoupon'])->name('coupon');

Route::get('/catalogo/filtro', [PublicController::class,'filtro'])->name('catalogo2');

Route::get('/catalogo/ricerca', [PublicController::class,'ricercaPerAziendaNome'])->name('catalogo3');
        

require __DIR__.'/auth.php';

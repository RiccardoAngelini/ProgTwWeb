<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
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
 Route::get('/faq/{id}/edit', [FaqController::class, 'edit'])->name('adminfaq.edit');
 Route::put('/faq/{id}', [FaqController::class, 'update'])->name('adminfaq.update');
 Route::get('/faq/show/{id}', [FaqController::class, 'show'])->name('show');
 Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('adminfaq.destroy');



//ROUTE PROFILO STAFF

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

Route::get('/offerta/{promo_Id}/coupon/{coupon_Id}', [UserController::class,'showCoupon'])->name('coupon');


Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('can:isUser');

Route::prefix('staff')->group(function(){
        Route::get('/', [StaffController::class, 'staff'])->name('staff')->middleware('can:isStaff');
        Route::get('/product/listaofferte',[StaffController::class, 'listapromo'])->name('product.index');
        Route::get('/product/creaofferta', [StaffController::class, 'creapromo'])->name('product.create');
        Route::post('/product/store', [StaffController::class, 'store'])->name('product.store');
        Route::get('/product/visualizaofferta/{promo_Id}', [StaffController::class, 'visualizapromo'])->name('product.show');
        Route::get('/product/{promo_Id}/modificaofferta', [StaffController::class, 'modificapromo'])->name('product.edit');
        Route::post('/promo_Id/{promo_Id}', [StaffController::class, 'updatepromo'])->name('product.update');
        Route::delete('/product/{promotion}/delete', [StaffController::class, 'delete'])->name('product.delete');


        Route::get('/updatePsw', [StaffController::class, 'changePasswordStaff'])->name('newPasswordStaff');
        Route::POST('/updatePsw', [StaffController::class, 'storePasswordStaff'])->name('newPasswordStaff.store');
        Route::get('/updateDati', [StaffController::class, 'changeDatiStaff'])->name('newDatiStaff');
        Route::POST('/updateDati', [StaffController::class, 'storeDatiStaff'])->name('newDatiStaff.store');   
});
// Route::get('/staff/product/', [StaffController::class, 'staff'])->name('staff')->middleware('can:isStaff');
// Route::get('/staff/product/listaofferte',[StaffController::class, 'listapromo'])->name('product.index');
// Route::get('staff/product/creaofferta', [StaffController::class, 'creapromo'])->name('product.create');
// Route::post('/staff/product/store', [StaffController::class, 'store'])->name('product.store');
// Route::get('/staff/product/visualizaofferta/{promo_Id}', [StaffController::class, 'visualizapromo'])->name('product.show');
// Route::get('/staff/product/{promo_Id}/modificaofferta', [StaffController::class, 'modificapromo'])->name('product.edit');
// // Route::put('/staff/promo_Id/{promo_Id}', [StaffController::class, 'updatepromo'])->name('product.update');
// Route::delete('/staff/product/{promotion}/delete', [StaffController::class, 'delete'])->name('product.delete');

// Route::get('/staff/updatePsw', [StaffController::class, 'changePasswordStaff'])
// ->name('newPasswordStaff');

// Route::POST('/staff/updatePsw', [StaffController::class, 'storePasswordStaff'])
// ->name('newPasswordStaff.store');

// Route::get('/staff/updateDati', [StaffController::class, 'changeDatiStaff'])
// ->name('newDatiStaff');

// Route::POST('/staff/updateDati', [StaffController::class, 'storeDatiStaff'])
// ->name('newDatiStaff.store');   







Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])->name('newproduct.store');

Route::get('/admin/updateproduct', [AdminController::class, 'updateProduct'])->name('updateproduct');

Route::get('/offerta/{promo_Id}', [PublicController::class,'showOfferta'])->name('offerta');

Route::get('/catalogo/filtro', [PublicController::class,'filtro'])->name('catalogo2');

Route::get('/catalogo/ricerca', [PublicController::class,'ricercaPerAziendaNome'])->name('catalogo3');


//elimina utenti admin
Route::get('/admin/listautenti',[AdminController::class ,'listaUser'])->name('admin.listautenti');
Route::delete('/admin/listautenti/delete',[AdminController::class,'deleteUser'])->name('admin.eliminautenti');
//aziende
Route::get('/admin/listaAziende',[AdminController::class ,'listaCompany'])->name('admin.listaziende');
Route::get('/admin/newCompany',[AdminController::class ,'createCompany'])->name('newCompany');
Route::post('/admin/newCompany', [AdminController::class, 'storeCompany'])->name('newCompany.store');

Route::delete('/listaAziende/{azienda_Id}', [AdminController::class, 'destroyCompany'])->name('adminCompany.destroy');
Route::get('/listaAzienze/edit/{azienda_Id}', [AdminController::class, 'editCompany'])->name('adminCompany.edit');
Route::post('/listaAzienze/update/{azienda_Id}', [AdminController::class, 'updateCompany'])->name('adminCompany.update');

require __DIR__.'/auth.php';


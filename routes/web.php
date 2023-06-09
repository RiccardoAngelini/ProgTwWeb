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
        
Route::get('/azienda/{comp_Id}',[PublicController::class,'showAziendaPublic'])->name('aziendaPublic');

Route::get('/offerta/{promo_Id}', [PublicController::class,'showOfferta'])->name('offerta');
Route::get('/catalogo/ricerca', [PublicController::class,'ricercaPerAziendaDesc'])->name('catalogo2');
        
// GESTIONE FAQ
Route::get('/FAQ', [PublicController::class, 'faq'])->name('faq2'); //accesso publico

//Acesso admin
 Route::get('/faq', [FaqController::class, 'index'])->name('faq.index')->middleware('can:isAdmin');
 Route::get('/faq/create', [FaqController::class, 'create'])->name('adminfaq.create')->middleware('can:isAdmin');
 Route::post('/faq', [FaqController::class, 'store'])->name('adminfaq.store')->middleware('can:isAdmin');
 Route::get('/faq/{id}/edit', [FaqController::class, 'edit'])->name('adminfaq.edit')->middleware('can:isAdmin');
 Route::put('/faq/{id}', [FaqController::class, 'update'])->name('adminfaq.update')->middleware('can:isAdmin');
 Route::get('/faq/show/{id}', [FaqController::class, 'show'])->name('show')->middleware('can:isAdmin');
 Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('adminfaq.destroy')->middleware('can:isAdmin');

//Accesso User
Route::get('/user', [UserController::class, 'index'])->middleware('can:isUser');

Route::get('/user/updatePsw', [UserController::class, 'changePassword'])->name('newpassword')->middleware('can:isUser');
Route::POST('/user/updatePsw', [UserController::class, 'storePassword'])->name('newpassword.store')->middleware('can:isUser');
Route::get('/user/viewProfillo', [UserController::class, 'viewProfile'])->name('viewprofillo')->middleware('can:isUser');
Route::get('/user/updateEmail', [UserController::class, 'changeEmail'])->name('newemail')->middleware('can:isUser');
Route::POST('/user/updateEmail', [UserController::class, 'storeEmail'])->name('newemail.store')->middleware('can:isUser');
Route::get('/user/updateNameSurname', [UserController::class, 'changeNameSurname'])->name('newnamesurname')->middleware('can:isUser');
Route::POST('/user/updateNameSurname', [UserController::class, 'storeNameSurname'])->name('newnamesurname.store')->middleware('can:isUser');
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('can:isUser');

Route::get('/coupon/{promo_Id}/acquista/{coupon_Id}', [UserController::class, 'showCoupon'])->name('coupon.vedi')->middleware('can:isUser');
Route::POST('/coupon/{promo_Id}/acquista', [UserController::class, 'acquistaCoupon'])->name('coupon.acquista')->middleware('can:isUser');


Route::prefix('staff')->group(function(){
        Route::get('/', [StaffController::class, 'staff'])->name('staff')->middleware('can:isStaff')->middleware('can:isStaff');
        Route::get('/product/listaofferte',[StaffController::class, 'listapromo'])->name('staff.index')->middleware('can:isStaff');
        Route::get('/product/creaofferta', [StaffController::class, 'creapromo'])->name('staff.create')->middleware('can:isStaff');
        Route::post('/product/store', [StaffController::class, 'store'])->name('staff.store')->middleware('can:isStaff');
        Route::get('/product/{promo_Id}/modificaofferta', [StaffController::class, 'modificapromo'])->name('staff.edit')->middleware('can:isStaff');
        Route::post('/promo_Id/{promo_Id}', [StaffController::class, 'updatepromo'])->name('staff.update')->middleware('can:isStaff');
        Route::delete('/product/{promotion}/delete', [StaffController::class, 'delete'])->name('staff.delete')->middleware('can:isStaff');


        Route::get('/updatePsw', [StaffController::class, 'changePasswordStaff'])->name('newPasswordStaff')->middleware('can:isStaff');
        Route::POST('/updatePsw', [StaffController::class, 'storePasswordStaff'])->name('newPasswordStaff.store')->middleware('can:isStaff');
        Route::get('/updateDati', [StaffController::class, 'changeDatiStaff'])->name('newDatiStaff')->middleware('can:isStaff');
        Route::POST('/updateDati', [StaffController::class, 'storeDatiStaff'])->name('newDatiStaff.store')->middleware('can:isStaff');   
});



Route::get('/admin', [AdminController::class, 'index'])->name('admin');



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

Route::get('/admin/listaAziende/azienda/{comp_Id}',[AdminController::class,'showAzienda'])->name('azienda');

//crud staff admin
Route::get('/admin/listastaff',[AdminController::class ,'listaStaff'])->name('admin.listastaff');
Route::get('/admin/listastaff/new',[AdminController::class ,'addStaff'])->name('admin.newStaff');
Route::post('/admin/listastaff/store',[AdminController::class ,'store'])->name('admin.create');
Route::get('/admin/listastaff/{id}',[AdminController::class ,'modificaStaff'])->name('admin.modStaff');
Route::post('/admin/listastaff/{id}',[AdminController::class ,'update'])->name('admin.updateStaff');
Route::delete('/admin/listastaff/delete',[AdminController::class,'deleteStaff'])->name('admin.deleteStaff');
//Rotte statistiche
Route::get('/coupon/statistiche/{user_id}', [AdminController::class, 'couponStatistiche'])->name('coupon.statistiche');
Route::get('/admin/listautenti/statistiche',[AdminController::class ,'listaUserStats'])->name('admin.listautentistats');
Route::get('/admin/statistiche/coupon_totali',[AdminController::class, 'couponTotali'])->name('admin.numcouponemessi');

Route::get('/coupon/statistiche/promo/{promo_id}', [AdminController::class, 'promoStatistiche'])->name('promo.statistiche');
Route::get('/admin/listautenti/statistiche/promo',[AdminController::class ,'listaPromoStats'])->name('admin.listapromozionistats');

//DOCUMENTAZIONE
Route::get('/Documentazione', [PublicController::class, 'docFiles'])->name('document');

require __DIR__.'/auth.php';


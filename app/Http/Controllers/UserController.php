<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use App\Models\Resources\Coupon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\NewUsernameRequest;
use App\Http\Requests\NewPasswordRequest;
use App\Http\Requests\NewEmailRequest;
use App\Http\Requests\NewNameSurnameRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {

    protected $_userModel;

    protected $_couponModel;
    protected $_promotionModel;

    public function __construct(){
        $this->_userModel = new User;
        $this->_promotionModel = new Promotion;
        $this->_couponModel = new Coupon;
    }

    public function index() {
        return view('user');
    }

    public function showCoupon($promo_Id,$coupon_Id)
    {
        $promotion=$this->_promotionModel->getPromoById($promo_Id);
        $user=Auth::user();
        $coupon = $this->_couponModel->getCouponById($coupon_Id);
        return view('coupon')
        ->with('user', $user)
        ->with('promotion', $promotion)
        ->with('coupon', $coupon);
    }
    
    public function acquistaCoupon(Request $request,$promo_Id)
{
    $userId = auth()->id();
    $promotion = $this->_promotionModel->getPromotionId($promo_Id)->first();
    $promotionId=$promotion->promo_Id;
    
    // Verifica se l'utente ha già un coupon per la promozione corrente
    $existingCoupon = $this->_couponModel->existingCoupon($promotionId,$userId);

    if ($existingCoupon) {
        // L'utente ha già un coupon per questa promozione
        // Puoi gestire l'errore o mostrare un messaggio all'utente
return redirect()->back()->with('error', 'Hai già un coupon per questa promozione');

    }

    // Genera un codice casuale per il coupon
    $couponCode = strtoupper(Str::random(8));

    // Salva il coupon nel database
    $coupon = new Coupon();
    $coupon->code = $couponCode;
    $coupon->user_id = $userId;
    $coupon->promotion_id = $promotionId;
    $coupon->save();

    // Reindirizza l'utente alla vista "coupon" con il coupon appena creato
    return redirect()->route('coupon.vedi', ['coupon_Id' => $coupon->coupon_Id, 'promo_Id' => $promo_Id])->with('success','Coupon acquistato con successo!');
}

public function changePassword(){
    return view('users.updatePassword');
}

public function storePassword(NewPasswordRequest $request)
    {
        $validatedData = $request->validated();
        $passwordIns = $validatedData['password'];
        $newPassword = $validatedData['newpassword'];

        $user = auth()->user();

        if (Hash::check($passwordIns, $user->password)) {
            $user->password = Hash::make($newPassword);
            $user->save();

            return redirect()->route('viewprofillo')->with("status", "Password cambiata correttamente!");
        } else {
            return redirect()->back()->with("error", "La password inserita non è corretta!");
        }
    }

    public function changeEmail(){
        return view('users.updateEmail');
    }

    public function storeEmail(NewEmailRequest $request){

        $validatedData = $request->validated();
 
        $emailIns = $validatedData['old-email'];
        $newEmail = $validatedData['email'];
        
        $user = Auth::user();

        if ($user->email === $emailIns) {
            $user->email = $newEmail;
            $user->save();
    
            return redirect()->route('viewprofillo')->with("status", "Email cambiata correttamente!");
        } else {
            return redirect()->back()->with("error", "L'email inserita non è corretta!");
    
}
    }


public function changeNameSurname(){
    $user=Auth::user();
    return view('users.updateNameSurname')->with('user',$user);
}

public function storeNameSurname(NewNameSurnameRequest $request){

    $validatedData = $request->validated();

    $nameIns = $validatedData['name'];
    $surnameIns = $validatedData['surname'];
    $phoneIns = $validatedData['phone'];
    $ageIns = $validatedData['age'];
    
    $user = Auth::user();

    
        $user->name = $nameIns;
        $user->surname = $surnameIns;
        $user->phone=$phoneIns;
        $user->age=$ageIns;
        $user->save();

        return redirect()->route('viewprofillo')->with("status", "Dati Personali cambiati correttamente!");
    

}

    public function viewProfile(){
        return view('users.viewProfillo');
    }

}



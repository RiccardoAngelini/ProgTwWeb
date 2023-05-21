<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use App\Models\Resources\Coupon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\NewUsernameRequest;
use App\Http\Requests\NewPasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    public function showCoupon($promo_Id, $coupon_Id)
    {

        $promo_byid=$this->_promotionModel->getPromotionId($promo_Id);
        $scelta_coupon = $this->_couponModel->getCouponIdByProm($coupon_Id);

        $coupon=$this->_couponModel->getCouponById($scelta_coupon)->first();

        return view('coupon')
        ->with('coupon', $coupon)
        ->with('promo_byid', $promo_byid)
            ->with('scelta_coupon', $scelta_coupon);
    }
    
    public function changeUsername(){
        return view('users.updateUsername');
    }

    public function storeUsername(NewUsernameRequest $request){

        $validatedData = $request->validated();
 
        $usernameIns = $validatedData['username'];
        $newUsername = $validatedData['newusername'];
        
        $username=$this->_userModel->getUsername($usernameIns);
      
        if($username){
            $username->username=$newUsername;
            $username->save();
    
    }
    return redirect()->action([UserController::class, 'index']);

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

            return redirect()->back()->with("status", "Password cambiata correttamente!");
        } else {
            return redirect()->back()->with("error", "La vecchia password non è corretta");
        }
    }
}



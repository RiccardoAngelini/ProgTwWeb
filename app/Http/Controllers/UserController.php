<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\NewUsernameRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    protected $_userModel;

    public function __construct(){
        $this->_userModel = new User;
    }

    public function index() {
        return view('user');
    }

    public function showCoupon(){
        return view('coupon');
    }
    
    public function changeUsername(){
        return view('users.updateUsername');
    }

    public function storeUsername(NewUsernameRequest $request){
 
        $usernameIns=$request->input('username');
        $newUsername=$request->input('newusername');
        
        $username=$this->_userModel->getUsername($usernameIns);
      
        if($username){
            $username->username=$newUsername;
            $username->save();
    
    }
    return redirect()->action([UserController::class, 'index']);

}

public function changePassword(){
    return view('users.updateUsername');
}

public function storePassword(NewUsernameRequest $request){

    $usernameIns=$request->input('username');
    $newUsername=$request->input('newusername');
    
    $username=$this->_userModel->getUsername($usernameIns);
  
    if($username){
        $username->username=$newUsername;
        $username->save();

}
return redirect()->action([UserController::class, 'index']);

}
}
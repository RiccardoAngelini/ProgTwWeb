<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {
        return view('user');
    }

    public function showCoupon(){
        return view('coupon');
    }

    

}
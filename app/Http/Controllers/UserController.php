<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Http\Request;

class UserController extends Controller {

    protected $_companyModel;
    protected $_promotionModel;
    public function __construct() {
        $this->_companyModel = new Company;
        $this->_promotionModel = new Promotion;
    }

    public function index() {
        return view('user');
    }

    public function showCoupon(){
        return view('coupon');
    }

    

}
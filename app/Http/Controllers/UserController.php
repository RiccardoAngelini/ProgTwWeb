<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;

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

 
}

<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function index() {
        return view('user');
    }

    public function showOfferta(){ 
        $company_name=$this->_companyModel->getCompanyNameId();
        $promotions=$this->_promotionModel->getPromotion();
        return view('offerta')
                 ->with('company_namesids',$company_name)
                 ->with('promotions',$promotions);
    }
}

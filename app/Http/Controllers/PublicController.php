<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Support\Facades\Log;
use View;



class PublicController extends Controller
{

    protected $_companyModel;
    protected $_promotionModel;

    public function __construct() {
        $this->_companyModel = new Company;
        $this->_promotionModel = new Promotion;
    }

    public function showHome(){
        $companies=$this->_companyModel->getCompany()->take(4);
        $promotionst=$this->_promotionModel->getPromotion();
        $proms=$this->_promotionModel->getPromotionByTime($promotionst);
        return view('home')
                ->with('proms',$proms)
                ->with('companies',$companies);
    }
    public function showCatalogo(){ 
        $company_namesids=$this->_companyModel->getCompanyNameId();
        $promotions=$this->_promotionModel->getPromotion();
        return view('catalogo')
                 ->with('company_namesids',$company_namesids)
                 ->with('promotions',$promotions);
    }

    public function showAziende(){ 
        $aziende=$this->_companyModel->getCompany();
        return view('aziende')
                ->with('aziende',$aziende);
    }

    public function showLogin(){ 
        return view('login');
    }
    public function showRegistrati(){ 
        return view('registrazione');
    }
    public function showOfferta($promo_Id){ 

        $sel_promId=$this->_promotionModel->where('promo_Id',$promo_Id)->first();
        return view('offerta')
                 ->with('sel_promId',$sel_promId);

    }

}
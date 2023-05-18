<?php

namespace App\Http\Controllers;

use View;
use App\Models\Faq;
use App\Models\Catalog;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;






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

        $sel_promId=$this->_promotionModel->getPromotionId($promo_Id)->first();
        return view('offerta')
                 ->with('sel_promId',$sel_promId);

    }
    public function filtro(Request $request)
    {
        $aziendeSelezionate = $request->input('aziende');
        $comp_names = $this->_companyModel->getcompanyname();
        $proms_by_comp = [];
    
        foreach ($aziendeSelezionate as $aziendaSelezionata) {
            foreach ($comp_names as $comp_name) {
                if ($aziendaSelezionata == $comp_name->name) {
                    $proms = $this->_promotionModel->getPromotionByComp($comp_name->name)->toArray();
                    foreach ($proms as $prom) {
                        if (!in_array($prom, $proms_by_comp)) {
                            $proms_by_comp[] = $prom;
                        }
                    }
                }
            }
        }
        $proms_by_comp = json_decode(json_encode($proms_by_comp));

        return view('catalogo2')
            ->with('proms_by_comp', $proms_by_comp);
    }
    
    

    public function faq(){
        $listafaq = Faq::all();
        return view('faq2',[
            'listafaq' => $listafaq,
        ]);
    }
}
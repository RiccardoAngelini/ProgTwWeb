<?php

namespace App\Http\Controllers;

use View;
use App\Models\Faq;
use App\Models\Catalog;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use App\Models\Resources\Coupon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;



class PublicController extends Controller
{

    protected $_companyModel;
    protected $_promotionModel;
    protected $_couponModel;

    public function __construct() {
        $this->_companyModel = new Company;
        $this->_promotionModel = new Promotion;
        $this->_couponModel= new Coupon;
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

    public function showOfferta($promo_Id){ 

        $sel_promId=$this->_promotionModel->getPromotionId($promo_Id)->first();



        
        $scelta_coupon=$this->_couponModel->getCouponIdByProm($promo_Id);
        return view('offerta')
        ->with('scelta_coupon',$scelta_coupon)
                 ->with('sel_promId',$sel_promId);
                 

    }
    
    
    public function filtro(Request $request)
    {
        $aziendeSelezionate = $request->input('aziende');
        $comp_names = $this->_companyModel->getcompanyname();
        $proms_by_comp = [];

        if (is_null($aziendeSelezionate)) {
        return view('errore2');
        }else {
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
        $company_namesids=$this->_companyModel->getCompanyNameId();
        $proms_by_comp = json_decode(json_encode($proms_by_comp));
        return view('catalogo')
            ->with('proms_by_comp', $proms_by_comp)
            ->with('company_namesids',$company_namesids);
    }

       }

       public function ricercaPerAziendaNome(Request $request)
       {
           $aziendaSelezionata = $request->input('opzioni');
           $ricerca = $request->input('ricerca');
           $matched = false;
           $company_namesids = $this->_companyModel->getCompanyNameId();
           
           $names = $this->_promotionModel->getPromotionByName($ricerca);
           $proms_by_name = $this->_promotionModel->getPromotionByCompName($ricerca, $aziendaSelezionata);
           

           foreach ($names as $name) {
            if (stripos($name->name, $ricerca) !== false) {
                $matched = true;
                break; 
            }
        }

         if(!$matched){
         return view('errore');
         }


          elseif (!empty($proms_by_name)) {
               return view('catalogo')
                   ->with('proms_by_name', $proms_by_name)
                   ->with('company_namesids', $company_namesids);
           }
        else{
           return view('catalogo')
               ->with('proms_by_name', $proms_by_name)
               ->with('company_namesids', $company_namesids);
       }

 }


    public function faq(){
        $listafaq = Faq::all();
        return view('faq2',[
            'listafaq' => $listafaq,
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
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
    protected $_faqModel;

    public function __construct() {
        $this->_companyModel = new Company;
        $this->_promotionModel = new Promotion;
        $this->_couponModel= new Coupon;
        $this->_faqModel= new Faq;
    }

    public function showHome(){
        $companies=$this->_companyModel->getCompany()->take(4);
        $promotionst=$this->_promotionModel->getPromotion();
        $proms=$this->_promotionModel->getPromotionByTime($promotionst);
        $companies2=$this->_companyModel->getCompany();
        return view('home')
                ->with('proms',$proms)
                ->with('companies2',$companies2)
                ->with('companies',$companies);
    }
    public function showCatalogo(){ 
        $promotions=$this->_promotionModel->getPromotion();
        $promotions=Promotion::paginate(8);
        return view('catalogo')
                 ->with('promotions',$promotions);
    }


    public function showAziende(){ 
        $aziende=$this->_companyModel->getCompany();
        $aziende=Company::paginate(10);
        return view('aziende')
                ->with('aziende',$aziende);
    }

    public function showAziendaPublic($comp_Id){
        $azienda=$this->_companyModel->getcompanyId($comp_Id);
        return view('admin.azienda')
            ->with('azienda',$azienda);
     }

    public function showOfferta($promo_Id){ 

        $sel_promId=$this->_promotionModel->getPromotionId($promo_Id)->first();
        return view('offerta')
                 ->with('sel_promId',$sel_promId);
                 

    }
    
    public function ricercaPerAziendaDesc(Request $request)
    {
        $descrizione = $request->input('ricerca_desc');
        $azienda = $request->input('ricerca_azienda');
    
        $company = $this->_companyModel->getCompanyByPartialName($azienda)->first();

        //divide una stringa $descrizione in un array di parole utilizzando lo spazio come delimitatore.
        $keywords = explode(' ', $descrizione);
       
        $desc = $this->_promotionModel->getDescByPartialName($keywords)->toArray();
        


        if (!$company) {
            return view('errore');
        }

        //se la ricerca è vuota mostra l'intero catalogo
        $promotions=$this->_promotionModel->getPromotion();
        $promotions=Promotion::paginate(8);
        
        if(($descrizione==null&&$azienda==null)){
            return view('catalogo')
                 ->with('promotions',$promotions);
        }
    
        if ($keywords && $azienda) {
            $promo_by_desc_and_comp = $this->_promotionModel->getPromotionByDescAndCompany($keywords, $company->name);
            $desc_comp_array=$promo_by_desc_and_comp->toArray();
            if(empty($desc_comp_array)){
                return view('errore');}
            return view('catalogo')
                ->with('promo_by_comp', $promo_by_desc_and_comp);

                
        
        } elseif ($azienda) {
            $promo_by_comp = $this->_promotionModel->getPromotionByComp($company->name);
           $promo=$promo_by_comp->toArray();
           if(empty($promo)){
            return view('errore');
           }
            return view('catalogo')
                ->with('promo_by_comp', $promo_by_comp);
        } elseif ($keywords) {
            $promo_by_desc = $this->_promotionModel->getPromotionByDescShort($keywords);
            $desc=$promo_by_desc->toArray();
            if(empty($desc)){
                return view('errore');
            }         
            return view('catalogo')
                ->with('promo_by_comp', $promo_by_desc);
        }
      
        }
    
    


    public function faq(){
        $listafaq = $this->_faqModel->getFaq();
        $listafaq = Faq::paginate(6);
        return view('faq2',[
            'listafaq' => $listafaq,
        ]);
    }
    public function docFiles(){
        $filePath = public_path().'/files/documentazione.pdf';
        
        if (file_exists($filePath)) {
            return new BinaryFileResponse($filePath);
        }
        
        return 'File PDF non trovato.';
        }
}
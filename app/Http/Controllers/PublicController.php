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
        return view('home')
                ->with('proms',$proms)
                ->with('companies',$companies);
    }
    public function showCatalogo(){ 
        $company_namesids=$this->_companyModel->getCompanyNameId();
        $promotions=$this->_promotionModel->getPromotion();
        $promotions=Promotion::paginate(8);
        return view('catalogo')
                 ->with('company_namesids',$company_namesids)
                 ->with('promotions',$promotions);
    }


    public function showAziende(){ 
        $aziende=$this->_companyModel->getCompany();
        $aziende=Company::paginate(10);
        return view('aziende')
                ->with('aziende',$aziende);
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

        $desc = $this->_promotionModel->getDescByPartialName($descrizione)->toArray();
        if (!$company||($descrizione==null&&$azienda==null)||empty($desc)) {
            return view('errore');
        }
    
        if ($descrizione && $azienda) {
            $promo_by_desc_and_comp = $this->_promotionModel->getPromotionByDescAndCompany($descrizione, $company->name);
    
            return view('catalogo')
                ->with('promo_by_comp', $promo_by_desc_and_comp);
        } elseif ($azienda) {
            $promo_by_comp = $this->_promotionModel->getPromotionByComp($company->name);
    
            return view('catalogo')
                ->with('promo_by_comp', $promo_by_comp);
        } elseif ($descrizione) {
            $promo_by_desc = $this->_promotionModel->getPromotionByDescShort($descrizione);
    
            return view('catalogo')
            ->with('desc',$desc)
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
        $filePath = public_path('\public\files\schema_dei_link.pdf');
        if(file_exists($filePath)){
            return new BinaryFileResponse($filePath);
        }
        return response()->json(['message' => 'il file non existe.' , 404]);
    }
}
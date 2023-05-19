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

    public function filtro(Request $request)
    {
        $aziendeSelezionate = $request->input('aziende');
        $ricerca= $request->input('ricerca');
        $comp_names = $this->_companyModel->getcompanyname();
        $proms_by_comp = [];

        if (is_null($aziendeSelezionate)) {
        //    $ricerca;
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
        $proms_by_comp = json_decode(json_encode($proms_by_comp));
        return view('catalogo2')
            ->with('proms_by_comp', $proms_by_comp)
            ->with('ricerca', $ricerca);
    }

       }

       public function ricercaPerAzienda(Request $request)
       {
           $ricerca = $request->input('ricerca');
           $comp_names = $this->_companyModel->getcompanyname();
           $promos_by_comp = [];
           $proms = [];
           $proms_by_name = [];
           $matched=false;
       
           foreach ($comp_names as $comp_name) {
               $proms = $this->_promotionModel->getPromotionByComp($comp_name->name)->toArray();
               $promos_by_comp = array_merge($promos_by_comp, $proms);

               if(stripos(strtolower($comp_name->name),strtolower($ricerca))!==false){
                $proms_by_name = $this->_promotionModel->getPromotionByComp($comp_name->name)->toArray();
                $matched=true;
           }
           $proms_by_name=json_decode(json_encode($proms_by_name));

        }

        if($matched){
           return view('catalogo2')   
               ->with('proms_by_name', $proms_by_name)
               ->with('ricerca', $ricerca);
       }else{
        return view('errore');
       }
       

}

}
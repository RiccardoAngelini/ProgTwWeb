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
    
        foreach ($aziendeSelezionate as $aziendaSelezionata) {
            foreach ($comp_names as $comp_name) {
                if ($aziendaSelezionata == $comp_name->name || $ricerca==$comp_name->name || ($aziendaSelezionata == $comp_name->name && $ricerca==$comp_name->name)) {
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


}
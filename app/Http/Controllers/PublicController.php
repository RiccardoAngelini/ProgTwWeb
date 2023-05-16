<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Company;
use Illuminate\Support\Facades\Log;
use View;



class PublicController extends Controller
{

    protected $_companyModel;

    public function __construct() {
        $this->_companyModel = new Company;
       
    }
    public function showHome(){ 
        return view('home');
    }

    public function showCatalogo(){ 
        return view('catalogo');
    }

    public function showAziende(){ 
        $aziende=Company::select('name')->get();
        return view('aziende',['aziende'=>$aziende]);
    }

    public function showLogin(){ 
        return view('login');
    }
    public function showRegistrati(){ 
        return view('registrazione');
    }

}

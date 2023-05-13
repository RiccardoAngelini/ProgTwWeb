<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Support\Facades\Log;
use View;


class PublicController extends Controller
{

    public function showHome(){ 
        return view('layouts/home');
    }

    public function showCatalogo(){ 
        return view('layouts/catalogo');
    }

    public function showAziende(){ 
        return view('layouts/aziende');
    }

    public function showFaq(){ 
        return view('faq');
    }

    public function showLogin(){ 
        return view('layouts/login');
    }
    public function showRegistrati(){ 
        return view('layouts/registrazione');
    }

}

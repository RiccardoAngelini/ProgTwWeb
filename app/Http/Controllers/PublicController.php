<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Support\Facades\Log;
use View;


class PublicController extends Controller
{

    public function showHome(){ 
        return view('home');
    }

    public function showCatalogo(){ 
        return view('catalogo');
    }

    public function showAziende(){ 
        return view('aziende');
    }

    public function showLogin(){ 
        return view('login');
    }
    public function showRegistrati(){ 
        return view('registrazione');
    }

}

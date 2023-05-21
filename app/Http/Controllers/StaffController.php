<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Http\Request;

class StaffController extends Controller {

    public function staff() {
        return view('profile.staff');
    }    

    public function listapromo(Request $promotion){
        $promotion = Promotion::all();
        $promotion = Promotion::paginate(5);
        return view('product.listaofferte',[
            'promotion' => $promotion
        ]);
    }

    public function create(){

    }

    public function store(){
        
    }
    
    public function show(){

    }

    public function edit(){

    }

    public function destroy(){

    }
}
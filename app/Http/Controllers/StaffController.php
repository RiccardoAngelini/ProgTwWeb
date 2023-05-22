<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use App\Http\Requests\PromotionRequest;

class StaffController extends Controller {

    public function staff() {
        return view('profile.staff');
    }    

    public function listapromo(Request $promotion){
        $promotion = Promotion::all();
        $promotion = Promotion::paginate(6);
        return view('product.listaofferte',[
            'promotion' => $promotion
        ]);
    }

    public function creapromo(){
        return view('product.creaofferta');
    }

    public function store(PromotionRequest $request){
        $validated = $request->validated();
        dd($request->all());
        Promotion::create([
            'name' => $request -> input('name'),
            'price' => $request -> input('pice'),
            'comp_name' => $request -> input('comp_name'),
            'date_start' => $request -> input('date_start'),
            'date_end' => $request -> input('date_end'),
            'discountPerc' => $request -> input('discountPerc'),
            'desc' => $request -> input('desc'),
        ]);
        return redirect()->route('product.index');
    }
    
    public function visualizapromo($promo_Id){
        $promotion = Promotion::where('promo_Id', $promo_Id)->first();
        // dd($promotion);
        return view('product.visualizapromo',[
            'promotion' => $promotion
        ]);
    }

     public function modificapromo($promo_Id){
        $promotion = Promotion::find($promo_Id);
        return view('product.modificapromo',[
            'promotion' => $promotion
        ]);
    }
    public function updatepromo($promo_Id, Request $request){

    }

    public function delete(Promotion $promotion){
        dd($promotion);
        // return view('index',[
        //     'promotion' => $promotion
        // ]);
    }
}
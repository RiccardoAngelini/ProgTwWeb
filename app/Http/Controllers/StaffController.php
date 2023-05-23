<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use App\Http\Requests\PromotionRequest;
use App\Http\Requests\NewNameSurnameRequest;
use App\Http\Requests\NewPasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use App\Http\Requests\NewDatiStaffRequest;
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
    

     public function modificapromo($promo_Id){
        $promotion = Promotion::find($promo_Id);
        return view('product.modificapromo',[
            'promotion' => $promotion
        ]);
    }
    public function updatepromo($promo_Id, Request $request){

    }

    public function visualizapromo($promo_Id){
        $promotion = Promotion::where('promo_Id', $promo_Id)->first();
        return view('product.visualizapromo')->with('promotion',$promotion);
    }

    public function delete(Promotion $promotion){
        dd($promotion);
        // return view('index',[
        //     'promotion' => $promotion
        // ]);
    }

    public function changePasswordStaff(){
        return view('profile.updatePasswordStaff');
    }
    
    public function storePasswordStaff(NewPasswordRequest $request)
        {
            $validatedData = $request->validated();
            $passwordIns = $validatedData['password'];
            $newPassword = $validatedData['newpassword'];
    
            $staff = auth()->user();
    
            if (Hash::check($passwordIns, $staff->password)) {
                $staff->password = Hash::make($newPassword);
                $staff->save();
    
                return redirect()->back()->with("status", "Password cambiata correttamente!");
            } else {
                return redirect()->back()->with("error", "La password inserita non è corretta!");
            }
        }

        public function changeDatiStaff(){
            return view('profile.updateDatiStaff');
        }
        
        public function storeDatiStaff(NewDatiStaffRequest $request)
        {
            $validatedData = $request->validated();
            $nameIns = $validatedData['name'];
            $surnameIns = $validatedData['surname'];
            
            $staff = auth()->user();
            
            $staff->name = $nameIns;
            $staff->surname = $surnameIns;
            $staff->save();
            
            return redirect()->back()->with("status", "Dati Personali cambiati correttamente!");
        }
        

}



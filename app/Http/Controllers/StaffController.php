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
use Carbon\Carbon;
use App\Http\Requests\NewDatiStaffRequest;
use Illuminate\Support\Facades\Validator;
class StaffController extends Controller {

    public function staff() {
        return view('staff.staff');
    }    

    public function listapromo(Request $promotion){
        $promotion = Promotion::all();
        $promotion = Promotion::paginate(6);
        return view('staff.listaofferte',[
            'promotion' => $promotion
        ]);
    }

    public function creapromo(){
        return view('staff.creaofferta');
    }

    public function store(PromotionRequest $request){
        $validator = $request->validated();

        Promotion::create([
            'name' => $request -> input('name'),
            'price' => $request -> input('price'),
            'comp_name' => $request -> input('comp_name'),
            'date_start' => $request -> input('date_start'),
            'date_end' => $request -> input('date_end'),
            'discountPerc' => $request -> input('discountPerc'),
            'desc' => $request -> input('desc'),
        ]);
        if($validator -> passes())
        {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
          $promotion = new Promotion();
          $promotion ->name =$request->name;
          $promotion -> price = $request->price;
          $promotion -> comp_name = $request->comp_name;
          $promotion -> date_start = $request->date_start;
          $promotion -> date_end = $request->date_end;
          $promotion -> discountPerc = $request->discountPerc;
          $promotion -> desc = $request-> desc;
          $promotion -> date_start = Carbon::createFromFormat('Y-m-d', $promotion->date_start)->format('d/m/Y');
          $promotion -> date_end = Carbon::createFromFormat('Y-m-d', $promotion->date_end)->format('d/m/Y');
          $promotion ->image = $imageName;
          $promotion->save();
        
 
          

          if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/promotions';
            $image->move($destinationPath, $imageName);
        };
        return redirect()->route('staff.index')->with('status', 'Promozione creata con sucesso');
    }
}
    

     public function modificapromo($promo_Id){
        $promotion = Promotion::find($promo_Id);
        return view('staff.modificaofferta',[
            'promotion' => $promotion
        ]);
    }
    public function updatepromo($promo_Id, Request $request){
        $promotion = Promotion::find($promo_Id);
        $promotion ->name =$request->name;
        $promotion -> price = $request->price;
        $promotion -> comp_name = $request->comp_name;
        $promotion -> date_start = $request->date_start;
        $promotion -> date_end = $request->date_end;
        $promotion -> discountPerc = $request->discountPerc;
        $promotion -> desc = $request-> desc;
        $promotion -> date_start = Carbon::createFromFormat('Y-m-d', $promotion->date_start)->format('d/m/Y');
        $promotion -> date_end = Carbon::createFromFormat('Y-m-d', $promotion->date_end)->format('d/m/Y');
        $promotion->save();
        return redirect()->route('staff.index')->with('Promozione modificata con successo.');
    }

    public function delete(Promotion $promotion){
        // dd($promotion);
        $promotion -> delete();
        return redirect()->route('staff.index')->with('status', 'Promozione cancellata con sucesso');
    }
    public function changePasswordStaff(){
        return view('staff.updatePasswordStaff');
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
            return view('staff.updateDatiStaff');
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



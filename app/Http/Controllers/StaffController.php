<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use App\Models\Resources\Coupon;
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

    protected $_companyModel;
    protected $_promotionModel;
    protected $_couponModel;

    public function __construct() {
        $this->_companyModel = new Company;
        $this->_promotionModel = new Promotion;
        $this->_couponModel = new Coupon;
    }

    public function staff() {
        return view('staff.staff');
    }    

    public function listapromo(Request $promotion){
        $promotion = $this->_promotionModel->getPromotion();
        $promotion = Promotion::paginate(6);
        return view('staff.listaofferte',[
            'promotion' => $promotion
        ]);
    }

    public function creapromo(){
        $companies=$this->_companyModel->getCompanyArray();
        return view('staff.creaofferta')
                ->with('companies',$companies);
    }

    public function store(PromotionRequest $request){
       
    $validator = Validator::make($request -> all(),[

        'name' => 'required',
        'price' => 'required',
        'comp_name' => 'required',
        'date_start' => 'required',
        'date_end' => 'required',
        'discountPerc'=> 'required',
        'desc'=> 'required',
        'image'=> 'required',
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
          $promotion -> name = $request->name;
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
        $companies=$this->_companyModel->getCompanyArray();

        $promotion = $this->_promotionModel->findPromotion($promo_Id);
        return view('staff.modificaofferta',[
            'promotion' => $promotion
        ])->with('companies',$companies);
    }
    public function updatepromo($promo_Id, Request $request){
        $validator = Validator::make($request -> all(),[

            'name' => 'required',
            'price' => 'required',
            'comp_name' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'discountPerc'=> 'required',
            'desc'=> 'required',
            'image'=> 'required',
        ]);  
        if($validator -> passes())
        { 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        $promotion = $this->_promotionModel->findPromotion($promo_Id);
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
        return redirect()->route('staff.index')->with('Promozione modificata con successo.');
    }
}

    public function delete(Promotion $promotion)
    {
        // Trova i coupon correlati alla promozione
        $coupons = $this->_couponModel->getPromoCoupon($promotion->promo_Id);
       
    
        // Elimina i coupon correlati
        foreach ($coupons as $coupon) {
            $coupon->delete();
        }
    
        // Elimina la promozione
        $promotion->delete();
    
        return redirect()->route('staff.index')->with('status', 'Promozione cancellata con successo');
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



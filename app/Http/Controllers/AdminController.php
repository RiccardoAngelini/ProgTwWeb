<?php

namespace App\Http\Controllers; 

use App\Http\Requests\NewProductRequest;
use App\Http\Requests\UpadateCompanyRequest;
use App\Models\Admin;
use App\Models\Resources\Product;
use App\Models\User;
use App\Models\Resources\Company;
use App\Models\Resources\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Facades\Validator;



class AdminController extends Controller {

    protected $_adminModel;
    protected $_companyModel;

    protected $_couponModel;
    protected $_userModel;
    
    // public function __construct() {
    //     $this->_adminModel = new Admin;
    //     $this->middleware('can:isAdmin');
    // }

    public function __construct(){
        $this->_adminModel = new Admin;
        $this->_companyModel = new Company;
        $this->_couponModel = new Coupon;
        $this->_userModel = new User;
        $this->middleware('can:isAdmin');
            
        }
    

    public function index() {
        return view('admin');
    }

    public function addProduct() {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    }

    public function storeProduct(NewProductRequest $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->image = $imageName;
        $product->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };

        return response()->json(['redirect' => route('admin')]);
        ;
    }
   
  Public function listaUser()
{
    $users = User::where('role','user')->get();
    return view('admin.listautenti', ['users' => $users]);
}

public function deleteUser(Request $request)
{
    $userIds = $request->input('user_ids', []);

        if (!empty($userIds)) {
            User::whereIn('id', $userIds)->delete();
        }
    return redirect()->route('admin.listautenti')->with('success', 'Utenti eliminati con successo.');
}
//lista aziende
        
    public function listaCompany(){          
        $company =$this->_companyModel->getCompany();
        $company=Company::paginate(8);
        return view('admin.listaaziende', ['company' => $company ]);
   }

public function destroyCompany($comp_Id) {
    $company = $this->_companyModel->getcompanyId($comp_Id);
    if ($company) {
    $company -> delete();
     return redirect()->route('admin.listaziende')->with('success', 'Azienda cancelata con sucesso.');
    }else{
        return redirect()->route('admin.listaziende')->with('error', 'Azienda non trovata.'); 
    }
 }

 public function createCompany(Request $request)
 {
      $company =  Company::all();
     return view('admin.creazioneazienda',[ 'company' => $company]);
 }

 public function storeCompany(Request $request){

    $validator = Validator::make($request -> all(),[

             'name' => 'required',
             'location' => 'required',
             'image' => 'required',
         ]);
         if($validator -> passes())
         {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
            } else {
                $imageName = NULL;
            }
              $company = new Company();
              $company ->name = $request->name;
              $company ->location = $request->location;
              $company ->image = $imageName;
              $company ->save();

              if (!is_null($imageName)) {
                $destinationPath = public_path() . '/images/companies';
                $image->move($destinationPath, $imageName);
            };


              return redirect()->route('admin.listaziende')->with('success', 'Azienda creata con sucesso!')
              ->with('company',$company);
            }else{
                return redirect()->route('newCompany')->withErrors($validator)->withInput();
            }
      }

 public function editCompany($comp_Id){
    $company=$this->_companyModel->getcompanyId($comp_Id);
    return view('admin.editCompany')
        ->with('company',$company);
 }
//
 public function  updateCompany($comp_Id,UpadateCompanyRequest $request){
        
    $validator = Validator::make($request -> all(),[

        'name' => 'required',
        'location' => 'required',
        
    ]);
    if($validator -> passes()){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        $company = Company::find($comp_Id);
        $company ->name = $request->name;
        $company ->location = $request->location;
        $company->image=$imageName;
        $company ->save();
        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/companies';
            $image->move($destinationPath, $imageName);
        };
        return redirect()->route('admin.listaziende')->with('success', 'Azienda modificata con sucesso!');
    }else{
        return redirect()->route('adminCompany.edit', $comp_Id)->withErrors($validator)->withInput();
    }
 }

 public function showAzienda($comp_Id){
        $azienda=$this->_companyModel->getcompanyId($comp_Id);
        return view('admin.azienda')
            ->with('azienda',$azienda);
     }
     Public function listaStaff()
     {
         $staffs = User::where('role','staff')->get();
         return view('admin.listastaff', ['staffs' => $staffs]);
     }
     
     public function deleteStaff(Request $request)
     {
         $staffIds = $request->input('staff_ids', []);
     
             if (!empty($staffIds)) {
                 User::whereIn('id', $staffIds)->delete();
             }
         return redirect()->route('admin.listastaff')->with('success', 'Eliminazione avvenuta con successo.');
     }
     
     public function addStaff(){
         return view('admin.creastaff');
     }
     
     public function store(Request $request){
         $request->validate([
             'name' => ['required', 'string', 'max:255'],
             'surname' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'phone' => ['required', 'int', 'phone', 'min:10'],
             'username' => ['required', 'string', 'min:8', 'unique:users'],
             'age' => ['required','int','min:18'],
             'gender' => ['required','string','min:1'],
             'password' => ['required', 'min:3'],
     
         ]);
     
         $user = User::create([
             'name' => $request->name,
             'surname'=>$request->surname,
             'phone' => $request->phone,
             'email' => $request->email,
             'username' => $request->username,
             'age' =>$request->age,
             'gender' => $request->gender,
             'password' => Hash::make($request->password),
             
         ]);
     
         $user->role='staff';
         $user->save();
             return redirect()->route('admin.listastaff')->with('success','Creazione membro dello staff avvenuta con successo');
         }
         
         public function modificaStaff($id){
             $staff = User::findOrFail($id);
           
             return view('admin.modificastaff',['staff'=>$staff]);
     
         }
         public function update(Request $request, $id)
         {
             $user = User::findOrFail($id);
           
             $user->name = $request->input('name');
             $user->email = $request->input('email');
             $user->username = $request->input('username');
             $user->age = $request->input('age');
             $user->gender = $request->input('gender');
             $user->password = $request->input('password');
             $user->surname = $request->input('surname');
             $user->phone = $request->input('phone');
             
             
             $user->save();
             
             
         
             return redirect()->route('admin.listastaff')->with('success','Modifica dei dati avvenuta con successo');
         }

         public function couponStatistiche($user_id)
         {
            $couponStats = $this->_couponModel->getCouponCountByUserId($user_id);
         
             $user =$this->_userModel->getUserById($user_id); // Recupera le informazioni dell'utente
         
             return view('admin.coupon_statistiche')->with('couponStats', $couponStats)->with('user', $user);
         }

public function listaUserStats(){

    $users = $this->_userModel->getUser();
    return view('admin.listastatsutenti', ['users' => $users]);

}


}
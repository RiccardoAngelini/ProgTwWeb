<?php

namespace App\Http\Controllers; 

use App\Http\Requests\NewProductRequest;
use App\Http\Requests\UpadateCompanyRequest;
use App\Models\Admin;
use App\Models\Resources\Product;
use APP\Models\User;
use App\Models\Resources\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Facades\Validator;



class AdminController extends Controller {

    protected $_adminModel;
    protected $_companyModel;
    
    // public function __construct() {
    //     $this->_adminModel = new Admin;
    //     $this->middleware('can:isAdmin');
    // }

    public function __construct(){
        $this->_adminModel = new Admin;
        $this->_companyModel = new Company;
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
        $company = Company::find($comp_Id);
        $company ->name = $request->name;
        $company ->location = $request->location;
        $company ->save();
        return redirect()->route('admin.listaziende')->with('status', 'Azienda modificata con sucesso!');
    }else{
        return redirect()->route('adminCompany.edit', $comp_Id)->withErrors($validator)->withInput();
    }
 }

}



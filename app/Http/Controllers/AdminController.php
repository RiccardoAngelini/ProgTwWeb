<?php

namespace App\Http\Controllers; 

use App\Http\Requests\NewProductRequest;
use App\Models\Admin;
use App\Models\Resources\Product;
use APP\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;


class AdminController extends Controller {

    protected $_adminModel;
    
    // public function __construct() {
    //     $this->_adminModel = new Admin;
    //     $this->middleware('can:isAdmin');
    // }

    public function __construct(){
        $this->_adminModel = new Admin;
       
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
public function listaCompany()
{          
     $company = Company::where('comp_Id', 'name','location','image')->get();
     return view('admin.listaaziende', ['company' => $company ]);

}

public function createAziende(Request $request)
{
     $company =  company::all();
    return view('admin.creazioneazienda',[ 'company' => $company]);
}

  public function storeAziende(Request $request)
  {
     $validator = Validator::make($request -> all(),[

        'name' => 'required',
        'location' => 'required',
        'image' => 'required',
     ]);
     if($validator -> passes())
     {
        $company = company::find($comp_Id);
        $company ->name = $request->name;
        $company ->location = $request->location;
        $company ->image = $request->image;
        $company ->save();
       
         return redirect('listaaziende')->with('success', 'Azienda creata con sucesso');
     } else {
          return redirect()->route('admin.listaaziende.create')->withErrors($validator)->withInput();
     }
  }

 public function edit($comp_Id)
 {
   
     $company = company::findOrFail($comp_Id);
    //  $faq = Faq::where('faq_Id', $faq_Id);
     return view('adminfaq.edit', ['company' => $company]);
 }

 public function  update($comp_Id, Request $request){
    
    $validator = Validator::make($request -> all(),[

        'name' => 'required',
        'location' => 'required',
        'image' => 'required',
    ]);
    if($validator -> passes()){
        $company = company::find($comp_Id);
        $company ->name = $request->name;
        $company ->location = $request->location;
        $company ->image = $request->image;
        $company ->save();
        return redirect('listaaziende')->with('success', 'Azienda modificata con sucesso');
    }else{
        return redirect()->route('adminfaq.edit', $id)->withErrors($validator)->withInput();
    }
 }

public function destroy($comp_Id, Request $request)
  {
     $company = company::findOrFail($id);
     $company -> delete();
     return redirect()->route('faq.index')->with('success', 'Azienda cancelata con sucesso.');
 }
}



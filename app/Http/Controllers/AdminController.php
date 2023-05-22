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
}



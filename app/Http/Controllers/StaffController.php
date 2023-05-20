<?php

namespace App\Http\Controllers;
use App\Models\Resources\Company;
use App\Models\Resources\Promotion;
use Illuminate\Http\Request;

class StaffController extends Controller {

    public function index() {
        return view('staff');
    }    

}
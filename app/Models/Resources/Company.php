<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = 'company';
    protected $primaryKey = 'compId';

    public function getCompany(){
        return Company::all();
    }
    public function getCompanyNameId(){
        return Company::select('name','comp_Id')->get();
    }

    public function filterByCompany(){
        $nike= Company::whereIn('name', 'Apple Inc.')->get();
        $filteredData = Company::where('name', $nike)->get();

        return $nike;

    }

}

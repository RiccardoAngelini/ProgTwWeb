<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = 'company';
    protected $primaryKey = 'comp_Id';
    protected $fillable = ['name', 'ragione_sociale', 'location', 'desc'];
    public $timestamps = false;

    public function getCompany(){
        return Company::all();
    }
    public function getCompanyNameId(){
        return Company::select('name','comp_Id')->get();
    }

  public function getcompanyname(){
    return Company::select('name')->get();
  }
  public function getcompanyId($comp_Id) {
      return Company::find($comp_Id);
  }

  public function getCompanyArray(){

        $companies = Company::pluck('name', 'name')->toArray();
        return $companies;
}

public function findCompany($comp_Id){
    return Company::find($comp_Id);
}

public function getCompanyByPartialName($name)
{
    return $this->whereRaw('LOWER(name) LIKE ?', ['%' . $name . '%']);
}

  
}
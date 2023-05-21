<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

    protected $table = 'promotion';
    protected $primaryKey = 'promo_Id';
    protected $filllable = ['question', 'answer'];
    public function getPromotion(){
        return Promotion::all();
    }
    public function getPromotionId($promo_Id){
        return Promotion::where('promo_Id',$promo_Id)->get();
    }

    public function getPromotionByTime($promotions){
        $prom_by_time = $promotions->sortByDesc('date_start')->take(5);
        return $prom_by_time;
    }

    public function getPromotionByComp($comp_name){
        return Promotion::where('comp_name',$comp_name)->get();
    }

    public function getPromotionByName($name)
    {
        return Promotion::where('name', 'LIKE', '%' . $name . '%')->orWhere('name', 'LIKE', $name . '%')->get();
    }
    
    public function getPromotionByCompName($name, $comp) {
        return Promotion::where('name', 'LIKE', '%' . $name . '%')
                        ->where(function ($query) use ($comp) {
                            $query->where('comp_name', 'LIKE', '%' . $comp . '%');
                        })
                        ->get();
    }
    

    public function getPromotionname(){
        return Promotion::select('name')->get();
    }

}

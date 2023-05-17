<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

    protected $table = 'promotion';
    protected $primaryKey = 'promo_Id';

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
}
<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

    protected $table = 'promotion';
    protected $primaryKey = 'promo_Id';

    public function getPromotion(){
        return Promotion::all();
    }
    public function getPromotionId($cod_promo){
        return Promotion::where('cod_promo',$cod_promo)->get();
    }
}
<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

    protected $table = 'promotion';
    protected $primaryKey = 'promo_Id';

    public function getPromotion(){
        return Promotion::all();
    }
}
<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {

    protected $table = 'coupon';
    protected $primaryKey = 'coupon_Id';


public function getCouponId(){
    return Coupon::select('coupon_Id')->get();
}
/*
public function getCouponIdByProm($coupon_Id)
{
    return Promotion::where('coupon_id', $coupon_Id)->first()->coupon_id;
}
*/
public function getCouponById($coupon_Id)
{
    return Coupon::where('coupon_Id', $coupon_Id)->get();
}


}
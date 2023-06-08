<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {

    protected $table = 'coupon';
    protected $primaryKey = 'coupon_Id';

    protected $fillable = ['code'];
    public $timestamps= false;



    public function getCoupons(){
        return Coupon::all();
    }

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

public function promotion()
{
    return $this->belongsTo(Promotion::class);
}


public function getCouponCountByUserId($user_id)
{
    return $this->where('user_id', $user_id)->selectRaw('count(*) as total')->first();
}

public function getPromotionCountByPromoId($promo_id)
{
    return $this->where('promotion_id', $promo_id)->selectRaw('count(*) as total')->first();
}
public function existingCoupon($promotionId,$userId){
return Coupon::where('promotion_id', $promotionId)
                            ->where('user_id', $userId)
                            ->first();
}

public function getPromoCoupon($promo_Id){
return Coupon::where('promotion_id', $promo_Id)->get();
}

}
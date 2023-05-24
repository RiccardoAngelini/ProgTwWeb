<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Promotion extends Model {

    protected $table = 'promotion';
    protected $primaryKey = 'promo_Id';
    public $timestamps= false;
    protected $fillable = ['name', 'price', 'comp_name', 'date_start', 'date_end', 'discountPerc', 'desc'];
    public function getPromotion(){
        return Promotion::all();
    }
    public function getPromotionId($promo_Id){
        return Promotion::where('promo_Id',$promo_Id)->get();
    }

    public function getPromotionByTime($promotions){
            $currentDate = date('Y-m-d');
            $recentPromotions = $promotions->filter(function ($promotion) use ($currentDate) {
                $endDate = DateTime::createFromFormat('d/m/Y', $promotion->date_end);
                return $endDate && $endDate >= new DateTime($currentDate);
            })->sortBy(function ($promotion) use ($currentDate) {
                $endDate = DateTime::createFromFormat('d/m/Y', $promotion->date_end);
                $remainingDays = $endDate->diff(new DateTime($currentDate))->days;
                return $remainingDays;
            })->take(5);
            return $recentPromotions;
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

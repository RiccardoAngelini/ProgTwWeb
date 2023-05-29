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
    
public function findPromotion($promo_Id){
    return Promotion::find($promo_Id);
}


public function getPromoById($promo_Id)
{
    return Promotion::where('promo_Id', $promo_Id)->get();
}

public function getPromotionByDescShort($descrizione)
{
    return $this->where('desc_short', 'LIKE', '%' . $descrizione . '%')
        ->get();
}

public function getPromotionByDescAndCompany($descrizione, $comp_name)
{
    return $this->where('desc_short', 'LIKE', '%' . $descrizione . '%')
        ->where('comp_name', $comp_name)
        ->get();
}

public function getDescByPartialName($desc)
{
    return $this->where('desc_short', 'LIKE', '%' . $desc . '%')->get();
}
 
}

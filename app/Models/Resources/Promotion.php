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

public function getPromotionByDescShort($keywords)
{
    $query = $this->query();
    
    foreach ($keywords as $index => $keyword) {
        if ($index === 0) {
            $query->where('desc', 'LIKE', '%' . $keyword . '%');
        } else {
            $query->where('desc', 'LIKE', '%' . $keyword . '%', 'AND', function ($query) use ($keyword) {
                $query->where('desc', 'LIKE', '%' . $keyword . '%');
            });
        }
    }
    
    return $query->get();
}



public function getPromotionByDescAndCompany($descrizione, $comp_name)
{
    return $this->where(function ($query) use ($descrizione) {
        foreach ($descrizione as $desc) {
            $query->orWhere('desc', 'LIKE', '%' . $desc . '%');
        }
    })->where('comp_name', $comp_name)->get();
}




public function getDescByPartialName($keywords)
{
    return $this->where(function ($query) use ($keywords) {
        foreach ($keywords as $keyword) {
            $query->orWhere('desc', 'LIKE', '%' . $keyword . '%');
        }
    })->get();
}


 
}

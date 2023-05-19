<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faq';
    protected $primarykey = 'faq_Id';
    public $timestamps = false;
    protected $filllable = ['question', 'answer'];

    public function faq(){
        return Faq::all();
    }

    public function getFaqBuIds(int $faq_id){
        $faq = Faq::where('faq_id', $faq_id);

        return $faq;
    }
}

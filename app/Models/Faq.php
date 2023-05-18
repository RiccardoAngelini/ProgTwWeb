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

<<<<<<< HEAD
    public function getFaqBuId(int $faq_Id){
        $faq = Faq::where('faq_Id', $faq_Id)->first();
=======

    public function getFaqBuId(int $id){
        $faq = Faq::where('id', $id);
    }

    public function getFaqBuIds(int $faq_id){
        $faq = Faq::where('faq_id', $faq_id);

>>>>>>> b145dcec6724c9a7d60fb7097ce41710676d6ad9
        return $faq;
    }
}

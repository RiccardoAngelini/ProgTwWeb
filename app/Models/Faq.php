<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faq';
    protected $primarykey = 'faq_id';
    public $timestamps = false;
    protected $filllable = ['question', 'answer'];

    public function faq(){
        return Faq::all();
    }

<<<<<<< HEAD
    public function getFaqBuId(int $id){
        $faq = Faq::where('id', $id);
=======
    public function getFaqBuId(int $faq_id){
        $faq = Faq::where('faq_id', $faq_id);
>>>>>>> 2f19594e1efcc6625c1c0098fda9796c0d5513c1
        return $faq;
    }
}

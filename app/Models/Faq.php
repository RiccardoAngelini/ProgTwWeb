<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faq';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $filllable = ['question', 'answer'];

    public function orderFaq(){
        return Faq::orderBy('id', 'DESC')->get();;
    }

    public function getFaq() {
        return Faq::all();
    }

    public function findFaq($id){
        return Faq::find($id);
    }
    public function findorfailFaq($id){
        return Faq::findOrFail($id);
    }
}



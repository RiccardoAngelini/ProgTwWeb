<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class NewNameSurnameRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|phone|min:10',
            'age' => 'required|integer',
        ];
    }
    
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:50',
            'price' => 'required',
            'comp_name' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'discountPerc' => 'required',
            'desc' => 'required',
            'image'=> 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

// Aggiunti per response JSON
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;


class NewCompanyRequest extends FormRequest {

/**
 * Determine if the user is authorized to make this request.
 *
 * @return bool
 */
public function authorize() {
    // Nella form non mettiamo restrizioni d'uso su base utente
    // Gestiamo l'autorizzazione ad un altro livello
    return true;
}

/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules() {
    return [
             'name' => 'required',
             'location' => 'required',
             'ragione_sociale' => 'required',
             'tipologia' => 'required',
             'desc' => 'required',
             'image' => 'required',
    ];
}
/**
     * Override: response in formato JSON
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
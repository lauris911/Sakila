<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            "name" => "required|min:5"
        ];
    }

    protected function failedValidation(Validator $v){
        //lanzar una excepcion HttpResponse en caso
        //de errores ded validacion 
        throw new HttpResponseException( response()->json([
                                                    "success"=> false,
                                                    "errors"=> $v->errors()
                                                ], 422) );

    }
}
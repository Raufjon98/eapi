<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|required|max:255|unique:products',
            'description' => 'sometimes|required',
            'price' => 'sometimes|required|max:10',
            'stock' => 'sometimes|required|max:6',
            'discount' => 'sometimes|required|max:2'
        ];
    }
}

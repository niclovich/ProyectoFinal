<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticuloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'bail|required|string|max:255|unique:articulos,nombre_articulo',
            'image' => 'bail|required|image|mimes:jpeg,png,jpg|max:2048',
            'body' => 'bail|required|string|max:2048'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrailerCategoryUpdateRequest extends FormRequest
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
        'name' => 'required',
        'slug' => 'required|unique:categories,slug,'.$this->category,
        'status'        => 'required|in:EDICION_AGOTADA,EDICION_NO_AGOTADA',
    ];

     if($this->get('file'))
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png' ]);

    }
}

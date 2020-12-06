<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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

       $rules= [
            'name'          => 'required',
            'slug'          => 'required|unique:posts,slug,' . $this->post,
            'user_id'       => 'required|integer',
            'category_id'   => 'required|integer',
            'tags'          => 'required|array',
            'body'          => 'required',
            'status'        => 'required|in:DRAFT,PUBLISHED',
        ];

        if($this->get('file'))
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png' ]);

         if($this->get('file2'))
            $rules = array_merge($rules, ['file2' => 'mimes:jpg,jpeg,png' ]);

        if($this->get('file3'))
            $rules = array_merge($rules, ['file3' => 'mimes:jpg,jpeg,png' ]);

        if($this->get('file4'))
            $rules = array_merge($rules, ['file4' => 'mimes:jpg,jpeg,png' ]);

        if($this->get('file5'))
            $rules = array_merge($rules, ['file5' => 'mimes:jpg,jpeg,png' ]);

            return $rules;

    }
}

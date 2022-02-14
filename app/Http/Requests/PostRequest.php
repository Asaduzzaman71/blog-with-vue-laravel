<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

            // I want to check the name if exists first
            // If exists, will pass the name for unique validation
            // This is efficient, rather than we creating another validation for create or update
            'title' => 'required |unique:posts|max:255',
            'excerpt' => 'required',
            'content' => 'required',
        ];
    }
}

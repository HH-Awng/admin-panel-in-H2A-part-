<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DB;

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
            'title'=>'require',
            'description'=>'require',
            'short_description'=>'require',
            'category'=>'require',
            'feature'=>'required|mimes:jpg,jpeg,png|image|max:5000'
        ];
    }
}

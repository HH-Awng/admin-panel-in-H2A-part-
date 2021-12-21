<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title'=>['required|min:2|max:200'],
            'email'=>['required', 'email',Rule::unique((new User)->getTable())->ignore(auth()->id())],
            'logo'=>['nullable', 'image'],
            'coverphoto'=>['nullable', 'image'],
            'description'=>['required'],

        ];
    }
}

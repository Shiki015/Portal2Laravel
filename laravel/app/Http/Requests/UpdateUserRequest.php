<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'required|alpha|min:2|max:20',
            'last_name' => 'required|alpha|min:2|max:20',
            'email' => 'required|email',
            'password'=>'min:5|regex:/^[A-z\d]+$/',
            'role_id' => 'required'
        ];
    }

}

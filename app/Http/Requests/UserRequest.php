<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required|min:5|max:13',
            'address' => 'required',
            'type' => 'required',
            'pan_number' => 'required|min:5',
            // 'logo' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'description' => 'required',
        ];
    }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_name' => 'required|min:2|max:20'
        ];

        // $image = $request->file('image');
        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/uploads');
        // $image->move($destinationPath, $input['imagename']);
        // $this->postImage->add($input);
    }
}

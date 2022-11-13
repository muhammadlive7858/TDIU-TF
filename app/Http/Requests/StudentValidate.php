<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentValidate extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'full_name'=>$request->full_name,
            'phone'=>$request->phone,
            'image'=>$request->image,
            'email'=>$request->email,
            'password'=>$request->password
        ];
    }
}

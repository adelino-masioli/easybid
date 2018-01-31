<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
        if($this->method() == 'POST')
        {
            return [
                'name'         => 'required|unique:users',
                'email'        => 'required|email|unique:users',
                'password'     => 'required|confirmed|min:6',
                'is_admin'     => 'required',
                'setting_id'   => 'required',
                'status_id'    => 'required',
            ];
        } elseif($this->method() == 'PUT')
        {
            return [
                'name'         => 'required|unique:users,name,' . $this->get('id'),
                'email'        => 'required|email|unique:users,email,' . $this->get('id'),
                'password'     => 'required|confirmed|min:6',
                'is_admin'     => 'required',
                'setting_id'   => 'required',
                'status_id'    => 'required',
            ];
        }else{
            return [];
        }
    }
}

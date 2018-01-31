<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingFormRequest extends FormRequest
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
                'name'      => 'required|unique:settings',
                'email'     => 'required|email|unique:settings',
                'telephone' => 'required',
                'cellphone' => 'required',
                'zipcode'   => 'required',
                'address'   => 'required',
                'state_id'  => 'required',
                'city_id'   => 'required',
            ];
        } elseif($this->method() == 'PUT')
        {
            return [
                'name'      => 'required|unique:settings,name,' . $this->get('id'),
                'email'     => 'required|email|unique:settings,email,' . $this->get('id'),
                'telephone' => 'required',
                'cellphone' => 'required',
                'zipcode'   => 'required',
                'address'   => 'required',
                'state_id'  => 'required',
                'city_id'   => 'required',
            ];
        }else{
            return [];
        }
    }
}

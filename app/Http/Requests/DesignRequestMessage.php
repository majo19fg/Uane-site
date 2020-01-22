<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignRequestMessage extends FormRequest
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
            'request_code' => 'unique:DesignRequest',
            'name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'campus' => 'required',
            'dpto' => 'required',
            'email' => 'required',
            'request_design' => 'required|array',
            'title' => 'required',
            'desc' => 'required',
        ];
    }
}

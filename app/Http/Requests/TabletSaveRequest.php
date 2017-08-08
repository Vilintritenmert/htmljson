<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TabletSaveRequest extends FormRequest
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
     * Sanitize
     *
     * @return array
     */
    public function sanitize()
    {
        return [
            'title'       => 'trim',
            'description' => 'trim'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required',
            'description' => 'required',
            'count'       => 'required|numeric',
            'in_stock'    => 'required|numeric'
        ];
    }
}

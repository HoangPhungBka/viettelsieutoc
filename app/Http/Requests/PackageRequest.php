<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
        $rules = [
            'name' => 'bail|required|unique:packages,name',
            'categories' => 'required',
            'type' => 'bail|required|boolean',
            'cost' => 'required',
            'summary' => 'required',
            'description' => 'required'
        ];

        if ($this->has('id')) {
            $rules['name'] = $rules['name'] . ",$this->id";
        }

        return $rules;
    }
}

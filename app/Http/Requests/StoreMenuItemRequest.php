<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [

            //regex:/^[a-zA-Z\s]+$/ ensures only simple and capitol letters and spaces can be entered
            "p_name" => ["required", "regex:/^[a-zA-Z\s]+$/"],
            // "p_id" => ["required","alpha_num","unique:menu_items,p_id"],
            "p_price" => ["required","numeric","decimal:2"],
            "p_image" => ["required","image"],

        ];
    }
    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'p_name' => 'Product Name',
            'p_id' => 'ProductID',
            'p_price' => 'Product Price',
            'p_image' => 'Product Image',
        ];
    }
}

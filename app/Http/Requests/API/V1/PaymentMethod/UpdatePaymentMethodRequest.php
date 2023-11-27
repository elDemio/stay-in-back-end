<?php

namespace App\Http\Requests\API\V1\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentMethodRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'payment_icon' => '',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'El nombre es requerido.',
        ];
    }
}

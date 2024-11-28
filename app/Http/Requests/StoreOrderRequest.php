<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'delivery_date' => 'required|date',
            'description' => 'nullable|string|max:255',
            'status' => 'required|string|max:255',
            'clients_id' => 'nullable|exists:clients,id',
        ];
    }
}

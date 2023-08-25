<?php

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    public function rules()
    {
        // Define your validation rules here
        return [
            'from_language_id' => 'required',
            'due_date' => 'required_if:immediate,no|date_format:m/d/Y',
            // More rules
        ];
    }

    public function messages()
    {
        return [
            // Custom validation messages
        ];
    }
}
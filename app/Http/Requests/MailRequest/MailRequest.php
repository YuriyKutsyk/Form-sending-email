<?php

namespace App\Http\Requests\MailRequest;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email_from'    => 'required|email',
            'email_to'      => 'required|email',
            'email_cc'      => 'nullable|email',
            'subject'       => 'required|string',
            'type'          => 'required|string',
            'message'       => 'required|string'
        ];
    }
}

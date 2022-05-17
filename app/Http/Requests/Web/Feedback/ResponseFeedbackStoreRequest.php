<?php

namespace App\Http\Requests\Web\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class ResponseFeedbackStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'response_title' => 'required|string|max:255',
            'response_note' => 'required|string'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

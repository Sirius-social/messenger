<?php

namespace App\Http\Requests\Dashboard\Section;

use App\Models\Section;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SectionUpdateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'language' => 'required|string|max:255',
            'page_id' => 'required|numeric|exists:pages,id',
            'type' => $this->typeRules(),
            $this->getAttributeWithLang('title') => 'required|string|max:255',
            $this->getAttributeWithLang('lead') => 'nullable|string|max:255',
            $this->getAttributeWithLang('subtitle') => 'nullable|string|max:255',
            $this->getAttributeWithLang('description') => 'nullable|string',
            $this->getAttributeWithLang('youtube_link') => 'nullable|string|max:255',
            $this->getAttributeWithLang('uploaded_photo') => 'nullable|image|max:10000'
        ];
    }

    private function getAttributeWithLang(string $attribute): string
    {
        return $attribute . '_' . $this->get('language');
    }

    private function typeRules(): array
    {
        return [
            'required',
            Rule::in([Section::HERO, Section::ADDITION_INFO, Section::CONTENT])
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FlashcardRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $flashcard = $this->route('flashcard');

        return [
            'deck_id' => [
                'required',
                'exists:decks,id',
            ],

            'content_lang_id' => [
                'required',
                'exists:languages,id',
            ],

            'translation_lang_id' => [
                'required',
                'exists:languages,id',
                'different:content_lang_id',
            ],

            'raw_content' => [
                'required',
                'string',
                'max:1000',
            ],

            'raw_translation' => [
                'required',
                'string',
                'max:1000',
            ],
        ];
    }
}

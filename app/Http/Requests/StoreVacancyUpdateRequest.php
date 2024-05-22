<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacancyUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'due_date' => 'required',
            'schedule' => 'required',
            'benefits' => 'nullable',
            'location' => 'required',
            'postcode' => 'nullable',
            'type' => 'required',
            'salary' => 'nullable',
            'pay_rate' => 'nullable',
            'contact' => 'required',
        ];
    }
}

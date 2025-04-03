<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessHourRequest extends FormRequest
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
            'is_open' => 'required',
            'open_at' => 'required',
            'close_at' => 'required',
            'lunch_start' => 'required',
            'lunch_end' => 'required',
            'is_every_other_week' => 'boolean',
            'other_week_start_date' => 'required_if:is_every_other_week,true'
        ];
    }
}

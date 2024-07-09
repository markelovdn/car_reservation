<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
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
            'availableForDates' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    $dates = explode(',', $value);

                    if (count($dates) !== 2 || !strtotime($dates[0]) || !strtotime($dates[1])) {
                        return $fail('The ' . $attribute . ' must be a valid date range.');
                    }

                    $first_date = $dates[0];
                    $second_date = $dates[1];

                    if ($first_date > $second_date) {
                        return $fail('The first date must be before or equal to the second date.');
                    }

                    if ($first_date < now()->toDateString() || $second_date < now()->toDateString()) {
                        return $fail('Dates must not be in the past.');
                    }
                },
            ],
        ];
    }
}

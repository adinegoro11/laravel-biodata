<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'applied_position' => ['required', 'string', 'min:3', 'max:255'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'id_card' => ['required', 'string', 'min:3'],
            'place_of_birth' => ['required', 'string', 'min:2', 'max:20'],
            'date_of_birth' => ['required', 'string', 'min:3', 'max:20'],
            'gender' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'blood_group' => ['required', 'string','min:1'],
            'marital_status' => ['required', 'string','min:2'],
            'address_origin' => ['required', 'string','min:3'],
            'address_now' => ['required', 'string','min:3'],
            'phone_number' => ['required', 'string','min:3'],
            'related_person' => ['required', 'string','min:3'],
            'willing_travel' => ['required', 'string','min:2'],
            'expected_salary' => ['required', 'integer','min:2'],
            'skills' => ['required', 'string','min:2'],
            'signed_place' => ['required', 'string','min:2'],
            'signed_date' => ['required', 'string','min:2'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}

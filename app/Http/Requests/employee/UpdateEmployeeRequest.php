<?php

namespace App\Http\Requests\employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'nullable',
            'company_id' => 'nullable',
            'phone' => 'nullable|numeric',
        ];
    }

    function messages()
    {
        return[
            'first_name.required' => ' The Employee First Name field is required.',
            'last_name.required' => ' The Employee Last Name field is required.',
        ];
    }
}

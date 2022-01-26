<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
    public function rules()
    {

        $employee_id = $this->request->get('id');

        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => ['required','email', Rule::unique('employees')->ignore($employee_id)],
            'company_id' => ['required'],
            'phone_number' => ['required', Rule::unique('employees')->ignore($employee_id), 'min:10'],
        ];
        
    }
}
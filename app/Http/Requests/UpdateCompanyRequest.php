<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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

        $company_id = $this->request->get('id');

        return [
            'name' => 'required|string|max:50',
            'email' => ['required','email', Rule::unique('companies')->ignore($company_id)],
            'logo' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:16000',
            'website' => ['required','URL', Rule::unique('companies')->ignore($company_id)],
        ];
        
    }
}
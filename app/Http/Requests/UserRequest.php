<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $rules =  [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', Rule::unique('users')->ignore(optional($this)->user)],
            'roles_id' => ['required', 'integer'],
            'kelas_id' => ['required', 'integer'],

        ];

        if (request()->routeIs('admin.users.create')) {
            $rules['password'] = ['required', 'confirmed'];
        }

        if (request()->routeIs('admin.users.edit')) {
            $rules['password'] = ['confirmed'];
        }

        return $rules;
    }
}

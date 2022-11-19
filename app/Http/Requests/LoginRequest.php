<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	public function rules()
	{
		return [
			'email'       => 'required|email',
			'password'    => 'required',
		];
	}

	public function messages()
	{
		return [
			'email.required'                   => __('language.email_is_required'),
			'password.required'                => __('language.password_is_required'),
		];
	}
}

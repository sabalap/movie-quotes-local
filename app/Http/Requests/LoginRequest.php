<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	public function rules()
	{
		return [
			'email'    => 'required|email',
			'password' => 'required',
		];
	}

	public function messages()
	{
		return [
			'email.required'    => 'Email is required',
			'password.required' => 'Password is required',
			'email.email'       => 'Email is not correct',
		];
	}
}

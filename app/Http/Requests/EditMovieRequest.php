<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditMovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'title'    => ['required', Rule::unique('movies', 'title'), 'min:2'],
		];
	}

	public function messages()
	{
		return [
			'title.required'    => 'Title is required',
			'title.unique'      => 'Title already exists',
			'title.min'         => 'Title is short',
		];
	}
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditMovieRequest extends FormRequest
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
	 * @return array<string, mixed>
	 */
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

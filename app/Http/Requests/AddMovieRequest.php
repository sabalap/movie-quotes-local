<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddMovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'title_en'            => ['required', Rule::unique('movies', 'title')],
			'title_ka'            => ['required'],
		];
	}
}

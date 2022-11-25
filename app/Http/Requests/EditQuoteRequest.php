<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditQuoteRequest extends FormRequest
{
	public function rules()
	{
		$rules = [
			'quote'    => ['required', Rule::unique('quotes', 'quote'), 'min:5'],
			'image'    => 'image',
		];
		if (request()->getMethod() == 'POST')
		{
			$rules['image'] = 'image|' . 'required';
		}
		return $rules;
	}

	public function messages()
	{
		return [
			'quote.required'    => 'Quote is required',
			'quote.unique'      => 'Quote already exists',
			'quote.min'         => 'Quote is short',
			'image.unique'      => 'Image already exists',
			'image.required'    => 'Image is required',
			'image.image'       => 'Upload Image',
		];
	}
}

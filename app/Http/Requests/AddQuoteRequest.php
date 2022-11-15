<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddQuoteRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'quote'    => ['required', Rule::unique('quotes', 'quote'), 'min:5'],
			'image'    => ['required', 'image', Rule::unique('quotes', 'image')],
		];
	}

	public function messages()
	{
		return [
			'quote.required'    => 'Quote is required',
			'quote.unique'      => 'Quote already exists',
			'quote.min'         => 'Quote is short',
			'image.required'    => 'Image is required',
			'image.unique'      => 'Image already exists',
			'image.image'       => 'Upload Image',
		];
	}
}

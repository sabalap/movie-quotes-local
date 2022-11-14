<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditQuoteRequest extends FormRequest
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
			'image.unique'      => 'Image already exists',
			'image.required'    => 'Image is required',
			'image.image'       => 'Upload Image',
		];
	}
}

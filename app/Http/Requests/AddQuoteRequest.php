<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddQuoteRequest extends FormRequest
{
	public function rules()
	{
		return [
			'quote_en'    => ['required', Rule::unique('quotes', 'quote'), 'min:5'],
			'quote_ka'    => ['required', Rule::unique('quotes', 'quote'), 'min:5'],
			'image'       => ['required', 'image', Rule::unique('quotes', 'image')],
		];
	}
}

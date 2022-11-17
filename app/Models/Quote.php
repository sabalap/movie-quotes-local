<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['quote'];

	protected $guarded = [];

	protected $casts = [
		'quote' => 'json',
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'movie_id');
	}
}

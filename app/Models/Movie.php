<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['title'];

	protected $guarded = [];

	protected $casts = [
		'title' => 'json',
	];

	public function quotes()
	{
		return $this->hasMany(Quote::class);
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $fillable = ['title', 'slug'];

	public $translatable = ['title'];

	public function quote()
	{
		return $this->hasMany(Quote::class);
	}
}

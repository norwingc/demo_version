<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Person;

class Son extends Model
{
	protected $fillable = ['name', 'age'];

	public function father()
	{
		return $this->belongsTo(Person::class, 'person_id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agenda;
use App\Son;

class Person extends Model
{
    protected $fillable = [
        'name', 'phone', 'email'
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
	}

	public function sons()
	{
		return $this->hasMany(Son::class, 'person_id');
	}
}

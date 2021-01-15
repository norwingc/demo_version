<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agenda;

class Person extends Model
{
    protected $fillable = [
        'name', 'phone', 'email'
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Person;

class Agenda extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}

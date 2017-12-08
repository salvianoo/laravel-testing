<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{

    public static function by_letter($letter = '')
    {
       return static::select('firstname', 'lastname', 'email')
                   ->where('lastname', 'like', $letter . '%')
                   ->orderBy('lastname')
                   ->get();
    }
}

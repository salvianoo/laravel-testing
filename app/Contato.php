<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{

    public function search_by_letter($params)
    {
        $letter = $params->get('letter');

        if ($letter) {

            return $this->by_letter($letter);

        }

        return $this->orderBy('lastname')->get();
    }

    private function by_letter($letter = '')
    {
       return static::where('lastname', 'like', $letter . '%')
                    ->orderBy('lastname')
                    ->get();
    }

    protected $hidden = [ 'id', 'created_at', 'updated_at' ];
}

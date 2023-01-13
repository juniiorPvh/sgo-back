<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orquestra extends Model
{
    protected $fillable = [
        'name', 'acronyms', 'address', 'email', 'phone', 'photo', 'dt_end'
    ];
}

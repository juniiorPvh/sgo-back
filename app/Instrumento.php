<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instrumento extends Model
{
    protected $table = 'instrumentos';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'tonality', 'photo', 'description'];

}

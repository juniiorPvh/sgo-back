<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membro extends Model
{
    protected $table = 'membros';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id', 'orquestra_id', 'papel_id', 'instrumento_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orquestra() {
        return $this->belongsTo(Orquestra::class);
    }

    public function papel() {
        return $this->belongsTo(Papel::class);
    }

    public function instrumento() {
        return $this->belongsTo(Instrumento::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    protected $table = 'papeis';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name'];

    public const ADMINISTRADOR = 1;
    public const GESTOR = 2;
    public const MAESTRO = 3;
    public const MUSICO = 4;
    public const VISITANTE = 5;

    public function orquestras() {
        return $this->belongsToMany(Orquestra::class, 'membros');
    }

}

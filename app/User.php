<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password', 'name', 'cpf', 'dt_nasc', 'sexo', 'phone','email', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getDtNascAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function setDtNascAttribute($value)
    {
        $this->attributes['dt_nasc'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }
}

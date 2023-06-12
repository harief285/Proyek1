<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class tbl_user extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    public $timestamps = false;
    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $fillable = [
        'id_user',
        'password',
        'jabatan',
    ];
}
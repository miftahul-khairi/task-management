<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Tambahkan HasApiTokens ke Model User (app/Models/User.php)
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $connection = 'mysql';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $visible = [
        'id',
        'name',
        'email',
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}

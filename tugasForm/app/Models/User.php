<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'nama',
        'nim',
        'jk',
        'hobi',
        'status',
        'email',
        'alamat',
        'nomor',
    ];

    public function getRouteKeyName()
    {
        return 'nim';
    }
}

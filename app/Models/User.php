<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_rol',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->id_rol = $user->id_rol ?? 1; // Establece el valor predeterminado si no se proporciona
        });
    }

    // Usuario pertenece a un rol específico. 
    // 'id_rol' especifica la clave foránea que se utiliza para la relación.
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    // Verifica si el usuario tiene ese rol.
    public function hasRole($role)
    {
        return optional($this->rol)->nombre === $role;
    }
    
}


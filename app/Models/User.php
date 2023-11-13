<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'matricule',
        'prenom',
        'Nom',
        'telephone',
        'email',
        'password',

    ];

    public function secretaire()
    {
        return $this->hasOne(Secretaire::class);

    }

    public function medecin()
    {
        return $this->hasOne(Medecin::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function rendezvous()
    {
        return $this->belongsTo(Rendezvous::class);
    }

    public function consultations()
    {
        return $this->belongsTo(Consultation::class);
    }


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
    ];
}

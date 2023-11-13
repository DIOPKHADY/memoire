<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $fillable = [
       'dateRv',

    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}

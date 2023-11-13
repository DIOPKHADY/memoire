<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends User
{
    use HasFactory;
    protected $fillable=
    ['poste'];
    protected $table = 'secretaires';


    public function user() {
        return $this->belongsTo(User::class);
    }
}

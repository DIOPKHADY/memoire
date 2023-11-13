<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    use HasFactory;
    protected $fillable=[
        'information',
        'notes',
        'dateAjout',
];
public function consultation()
{
    return $this->hasMany(Consultation::class);
}
}

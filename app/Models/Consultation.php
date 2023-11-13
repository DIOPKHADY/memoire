<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable=[
        'motifconsult',
        'historiqueMal',
        'syndrome',
        'observation',
        'dateconsult',
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

}

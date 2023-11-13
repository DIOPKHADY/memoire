<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'prenom',
        'telephone',
        'dossierMedical',
        'genre',
        'dateNaissance',
        'NumeroCNI',
        'situationMatrimoniale',
        'Profession',
        'Nationalite',
    ];
    public function consultations()
    {
        return $this->belongsTo(Consultation::class);
    }
    public function rendezvous()
    {
        return $this->belongsTo(Rendezvous::class);
    }
    public function antecedent()
    {
        return $this->belongsTo(Antecedent::class);
    }
    public function constantephysio()
    {
        return $this->hasMany(ConstantePhysio::class);
    }



}

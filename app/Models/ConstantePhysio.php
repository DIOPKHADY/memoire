<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstantePhysio extends Model
{
    use HasFactory;
    protected $fillable=[
        'glycemie',
        'temperaturecorporelle',
        'FrequenceCardiaque',
        'saturation',
        'frequenceRespiration',
        'pressionArterielle',
        'poidsKG',
        'tailleCm ',
        'dateHeureConstantes',

    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

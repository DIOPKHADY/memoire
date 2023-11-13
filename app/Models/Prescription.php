<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'datecommencement',
        'arenouveler',
        'notesprescription',
        'dateprescription',

     ];
     public function consultation()
     {
         return $this->hasMany(Consultation::class);
     }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'designation',
        'nomservice',
    ];
    public function rendezvous()
    {
        return $this->belongsTo(Rendezvous::class);
    }

}

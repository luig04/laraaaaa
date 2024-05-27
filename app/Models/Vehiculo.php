<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'modelo', 'marca'
    ];

    public function personas()
    {
        return $this->belongsToMany(Persona::class, 'tiene', 'vehiculo_id', 'persona_id');
    }
}

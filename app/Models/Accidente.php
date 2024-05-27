<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accidente extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo', 'hora', 'fecha', 'lugar'
    ];

    public function personas()
    {
        return $this->belongsToMany(Persona::class, 'involucra', 'accidente_id', 'persona_id');
    }
}

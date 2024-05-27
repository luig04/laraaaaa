<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $primaryKey = 'cedula';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'cedula', 'nombre'
    ];

    public function tiene()
    {
        return $this->hasMany(Tiene::class, 'persona_id', 'cedula');
    }

    public function accidentes()
    {
        return $this->belongsToMany(Accidente::class, 'involucra', 'persona_id', 'accidente_id', 'cedula', 'id');
    }
}

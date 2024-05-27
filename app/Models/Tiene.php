<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiene extends Model
{
    use HasFactory;

    protected $table = 'tiene';

    protected $fillable = [
        'vehiculo_id', 'persona_id'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id', 'cedula');
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Involucra extends Model
{
    use HasFactory;

    protected $table = 'involucra';

    protected $fillable = [
        'persona_id', 'accidente_id'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id', 'cedula');
    }

    public function accidente()
    {
        return $this->belongsTo(Accidente::class, 'accidente_id');
    }
}

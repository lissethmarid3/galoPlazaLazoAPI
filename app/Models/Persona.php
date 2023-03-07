<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_persona';
    protected $table = 'personas';
    protected $fillable = ['nombre_persona', 'apellido_persona', 'telefono_persona', 'direccion_persona', 'ciudad_persona','pais_persona','estado_persona'];
}

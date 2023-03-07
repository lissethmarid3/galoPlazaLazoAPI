<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulador extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_simulador';
    protected $table = 'simulador';
    public function detalle_simulador()
    {
        return $this->hasMany(Simulador_detalle::class, 'id_simulador','id_simulador')->with('pregunta');
    }
}

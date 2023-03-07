<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pregunta';
    protected $table = 'preguntas';
    public function respuestas(){
        return $this->hasMany(Respuestas::class, 'id_pregunta','id_pregunta');
    }
}

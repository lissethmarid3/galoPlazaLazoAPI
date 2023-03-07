<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_curso';
    protected $table = 'cursos';
    protected $fillable = ['nombre_curso', 'descripcion_curso'];
    public function simuladores()
    {
        return $this->hasMany(Simulador::class, 'id_curso','id_curso');
    }
}

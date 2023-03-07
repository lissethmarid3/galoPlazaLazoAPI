<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasesCurso extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_clase_curso';
    protected $table = 'clases_cursos';
    protected $fillable = ['id_curso','nombre_clase_curso', 'descripcion_clase_curso'];
    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso','id_curso');
    }
}

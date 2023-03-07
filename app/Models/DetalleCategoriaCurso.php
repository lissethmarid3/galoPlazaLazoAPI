<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCategoriaCurso extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detalle_categoria_curso';
    protected $table = 'detalle_categoria_cursos';
    protected $fillable = ['id_categoria_curso','id_curso'];

    public function categoria()
    {
        return $this->hasOne(CategoriaCurso::class, 'id_categoria_curso','id_categoria_curso');
    }

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso','id_curso')->with('simuladores');
    }
    public function clases(){
        return $this->hasMany(ClasesCurso::class,'id_detalle_categoria_curso','id_detalle_categoria_curso');
    }

}

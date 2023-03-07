<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCurso extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_categoria_curso';
    protected $table = 'categoria_cursos';
    protected $fillable = ['nombre_categoria_curso'];

}

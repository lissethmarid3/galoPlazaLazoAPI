<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipanteCurso extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_participante_curso';
    protected $table = 'participante_cursos';
    protected $fillable = ['id_curso','id_usuario'];

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id_curso','id_curso');
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'id','id_usuario');
    }
}

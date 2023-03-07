<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    public const ROL_DOCENTE = 1;
    public const ROL_ESTUDIANTE = 2;
    protected $primaryKey = 'id_rol';
    protected $table = 'roles';
    protected $fillable = ['nombre_rol'];
}

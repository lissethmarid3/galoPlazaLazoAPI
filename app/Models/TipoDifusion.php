<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDifusion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tipo_difusion';
    protected $table = 'tipo_difusion';
    protected $fillable = ['nombre'];
}

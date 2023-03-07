<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difusion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_difusion';
    protected $table = 'difusion';
    protected $fillable = ['titulo', 'imagen','id_tipo_difusion'];
    public function tipo_difusion()
    {
        return $this->belongsTo(TipoDifusion::class, 'id_tipo_difusion','id_tipo_difusion');
    }
}

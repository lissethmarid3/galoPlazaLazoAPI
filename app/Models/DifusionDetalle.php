<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DifusionDetalle extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_difusion';
    protected $table = 'difusion_detalles';
    protected $fillable = ['descripcion', 'imagen','id_difusion'];
    public function difusion()
    {
        return $this->hasOne(Difusion::class, 'id_difusion','id_difusion');
    }
}

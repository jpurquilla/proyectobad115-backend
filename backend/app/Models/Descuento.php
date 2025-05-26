<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;
    protected $table = 'descuentos'; // Nombre exacto de la tabla

    protected $primaryKey = 'iddescuento'; // Llave primaria personalizada

    protected $fillable = [
        'descripcion',
        'porcentaje',
        'monto_fijo'
    ];

    public $timestamps = true; // Laravel maneja created_at y updated_at automáticamente
}

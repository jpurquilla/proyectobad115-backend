<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados';
    protected $primaryKey = 'idempleado';
    public $timestamps = true;

    protected $fillable = [
        'primer_nombre', 'segundo_nombre', 'primer_apellido',
        'segundo_apellido', 'apellido_casada', 'idcatalogogenero',
        'iddetallegenero', 'idcatalogoestadocivil', 'iddetalleestadocivil'
    ];

   
}

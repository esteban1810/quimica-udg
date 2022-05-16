<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    use HasFactory;
    protected $fillable = [
        'apellido_paterno_evaluador',
        'apellido_materno_evaluador',
        'nombre_evaluador',
        'correo',
        'is_profesor',
        'nombre_institucion',
        'area_investigacion',
        'codigo',
        'area_investigacion_proyecto',
        'id_trabajo',
        'apellido_paterno_estudiante',
        'apellido_materno_estudiante',
        'nombre_estudiante',
        'is_formal',
        'is_puntual',
        'rubrica21',
        'rubrica22',
        'rubrica23',
        'rubrica24',
        'rubrica25',
        'rubrica31',
        'rubrica32',
        'rubrica33',
        'rubrica41',
        'rubrica42',
        'rubrica43',
        'evaluacion',
        'observaciones',
    ];
}

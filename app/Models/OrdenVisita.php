<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenVisita extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'folio',
        'fecha',
        'inspector',
        'seConocePropietario',
        'nombrePropietario',
        'numExt',
        'numInt',
        'calle',
        'fraccionamiento',
        'colonia',
        'acompanante1',
        'acompanante2',
        'acompanante3',
        'hechos',
        'nombreVisitado',
        'manifiestaSer',
        'seIdentifica',
        'numIdentificacion',
    ];
}

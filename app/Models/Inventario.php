<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventario';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'Codigo',
        'Existencia',
        'Unidad_Pag',
        'Nombre',
        'Presentacion',
        'Unidad_Med',
        'PrecioC',
        'PrecioD',
        'Imagen',
        'Marca',
        'Empresa',
        'Estado'
    ];
}

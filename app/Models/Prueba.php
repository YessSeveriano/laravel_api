<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    // Define el nombre de la tabla en la base de datos
    protected $table = 'prueba_insert'; // Si el nombre de la tabla es diferente

    // Desactiva el uso de timestamps si no tienes columnas 'created_at' y 'updated_at'
    public $timestamps = false; // Si no tienes columnas 'created_at' y 'updated_at'

    // Define los campos que pueden ser asignados masivamente
    protected $fillable = [
        'fecha',
        'tipo_Act',
        'defensor',
        // Agrega otros campos según tu modelo
    ];
}


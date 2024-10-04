<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'cat_municipios'; // Si el nombre de la tabla es diferente
    public $timestamps = false; // Si no tienes columnas 'created_at' y 'updated_at'
}

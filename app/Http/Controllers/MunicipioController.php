<?php

namespace App\Http\Controllers;
use App\Models\Municipio;
use App\Models\Zonas;
use App\Models\Prueba;
use App\Models\Categorias;
use App\Models\Regiones;
use App\Models\Carpetas;
use App\Models\Delitos;
use App\Models\Audiencias;
use App\Models\ConclusionA;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MunicipioController extends Controller
{
 // Obtener todos los municipios
 public function index()
 {
     $municipios = Municipio::all(); // Obtiene todos los registros de municipios
     return response()->json($municipios);
 }
 public function zonas()
 {
     $zonas = Zonas::all(); // Obtiene todos los registros de municipios
     return response()->json($zonas);
 }
 public function categorias()
 {
     $categorias = Categorias::all(); // Obtiene todos los registros de municipios
     return response()->json($categorias);
 }
 public function regiones()
 {
     $regiones = Regiones::all(); // Obtiene todos los registros de municipios
     return response()->json($regiones);
 }
 public function carpetas()
 {
     $carpetas = Carpetas::all(); // Obtiene todos los registros de municipios
     return response()->json($carpetas);
 }
 public function audiencias()
 {
     $audiencias = Audiencias::all(); // Obtiene todos los registros de municipios
     return response()->json($audiencias);
 }
 public function delitos()
 {
     $delitos = Delitos::all(); // Obtiene todos los registros de municipios
     return response()->json($delitos);
 }
 public function conclusion()
 {
     $conAu = ConclusionA::all(); // Obtiene todos los registros de municipios
     return response()->json($conAu);
 }
 public function store(Request $request)
 {
     // Validar los datos
     $validator = Validator::make($request->all(), [
         'fecha' => 'required|date',
         'tipo_act' => 'required|max:40',
         'defensor' => 'required|max:100',
         // Agrega otras reglas de validación según tus necesidades
     ]);

     if ($validator->fails()) {
         return response()->json($validator->errors(), 422);
     }

     // Crear el nuevo registro
     $data = Prueba::create([
         'fecha' => $request->input('fecha'),
         'tipo_Act' => $request->input('tipo_act'),
         'defensor'=>$request->input('defensor')
         // Mapea otros campos según tu modelo
     ]);

     return response()->json(['message' => 'Data inserted successfully', 'data' => $data], 201);
 }
}


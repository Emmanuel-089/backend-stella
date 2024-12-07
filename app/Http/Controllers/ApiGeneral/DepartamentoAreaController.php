<?php

namespace App\Http\Controllers\ApiGeneral;

use App\Http\Controllers\Controller;
use App\Models\DepartamentoArea;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoArea\CrearDepartamentoAreaRequest;
use App\Http\Requests\DepartamentoArea\ActualizarDepartamentoAreaRequest;

class DepartamentoAreaController extends Controller
{
    // Obtener todos los registros
    public function all()
    {
        return response()->json(DepartamentoArea::with(['departamento', 'area'])->get());
    }

    // Paginación
    public function index()
    {
        return response()->json(DepartamentoArea::with(['departamento', 'area'])->get());
    }

    // Crear un nuevo registro
    public function store(CrearDepartamentoAreaRequest $request)
        {
        // Verificar si ya existe un registro con id_depto e id_area
        $existe = DepartamentoArea::where('id_depto', $request->id_depto)
            ->where('id_area', $request->id_area)
            ->exists();

        if ($existe) {
            return response()->json(['message' => 'El registro ya existe.'], 422);
        }

        // Crear el nuevo registro si no existe
        return response()->json(DepartamentoArea::create($request->validated()));
    }


    // Mostrar un registro específico
    public function show($id_dep_area)
    {
        $departamentoArea = DepartamentoArea::with(['departamento', 'area'])->find($id_dep_area);

        if (!$departamentoArea) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($departamentoArea);
    }

    public function update(ActualizarDepartamentoAreaRequest $request, $id_dep_area)
    {
        $departamentoArea = DepartamentoArea::find($id_dep_area);

        if (!$departamentoArea) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        // Verificar si ya existe un registro con la misma combinación de id_depto e id_area
        $existe = DepartamentoArea::where('id_depto', $request->id_depto)
            ->where('id_area', $request->id_area)
            ->where('id_dep_area', '!=', $id_dep_area) // Excluir el registro actual
            ->exists();

        if ($existe) {
            return response()->json(['message' => 'Ya existe un registro con esta combinación de id_depto e id_area.'], 422);
        }

        // Actualizar el registro si no hay duplicados
        $departamentoArea->update($request->validated());
        return response()->json($departamentoArea);
    }


    // Eliminar un registro
    public function destroy($id_dep_area)
    {
        $departamentoArea = DepartamentoArea::find($id_dep_area);

        if (!$departamentoArea) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $departamentoArea->delete();
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }
}

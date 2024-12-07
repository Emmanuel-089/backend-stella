<?php


namespace App\Http\Controllers\ModuloMantenimiento;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\ModuloMantenimiento;
use Illuminate\Http\Request;


use App\Http\Requests\ModuloMantenimiento\CrearModuloMantenimientoRequest;
use App\Http\Requests\ModuloMantenimiento\ActualizarModuloMantenimientoRequest;


class ModuloMantenimientoController 
{
    
    public function all()
    {
        return response()->json(ModuloMantenimiento::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(ModuloMantenimiento::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearModuloMantenimientoRequest $request)
    {
        return response()->json(ModuloMantenimiento::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_mod_mant)
    {
        // Intentar obtener la modulomantenimiento por ID
        $modulomantenimiento = ModuloMantenimiento::find($id_mod_mant);

        // Si no se encuentra la modulomantenimiento, devolver un error
        if (!$modulomantenimiento) {
            return response()->json(['message' => 'ModuloMantenimiento no encontrada'], 404);
        }
        return response()->json($modulomantenimiento);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarModuloMantenimientoRequest $request, $id_mod_mant)
    {
        // Obtener la modulomantenimiento por ID
        $modulomantenimiento = ModuloMantenimiento::find($id_mod_mant);

        // Si la modulomantenimiento no existe, devolver error
        if (!$modulomantenimiento) {
            return response()->json(['message' => 'ModuloMantenimiento no encontrada'], 404);
        }
        $modulomantenimiento->update($request->validated());

        return response()->json($modulomantenimiento);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_mod_mant)
    {
        $modulomantenimiento = ModuloMantenimiento::find($id_mod_mant);

        if (!$modulomantenimiento) {
            return response()->json(['message' => 'ModuloMantenimiento no encontrada'], 404);
        }

        $modulomantenimiento->delete();
        return response()->json('ok');
    }


}


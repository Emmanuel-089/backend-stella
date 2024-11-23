<?php


namespace App\Http\Controllers\ModuloComputadoraEquipo;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\ModuloComputadoraEquipo;
use Illuminate\Http\Request;


use App\Http\Requests\ModuloComputadoraEquipo\CrearModuloComputadoraEquipoRequest;
use App\Http\Requests\ModuloComputadoraEquipo\ActualizarModuloComputadoraEquipoRequest;


class ModuloComputadoraEquipoController 
{
    
    public function all()
    {
        return response()->json(ModuloComputadoraEquipo::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(ModuloComputadoraEquipo::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearModuloComputadoraEquipoRequest $request)
    {
        return response()->json(ModuloComputadoraEquipo::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_equipo)
    {
        // Intentar obtener la modulocomputadoraequipo por ID
        $modulocomputadoraequipo = ModuloComputadoraEquipo::find($id_equipo);

        // Si no se encuentra la modulocomputadoraequipo, devolver un error
        if (!$modulocomputadoraequipo) {
            return response()->json(['message' => 'ModuloComputadoraEquipo no encontrada'], 404);
        }
        return response()->json($modulocomputadoraequipo);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarModuloComputadoraEquipoRequest $request, $id_equipo)
    {
        // Obtener la modulocomputadoraequipo por ID
        $modulocomputadoraequipo = ModuloComputadoraEquipo::find($id_equipo);

        // Si la modulocomputadoraequipo no existe, devolver error
        if (!$modulocomputadoraequipo) {
            return response()->json(['message' => 'ModuloComputadoraEquipo no encontrada'], 404);
        }
        $modulocomputadoraequipo->update($request->validated());

        return response()->json($modulocomputadoraequipo);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_equipo)
    {
        $modulocomputadoraequipo = ModuloComputadoraEquipo::find($id_equipo);

        if (!$modulocomputadoraequipo) {
            return response()->json(['message' => 'ModuloComputadoraEquipo no encontrada'], 404);
        }

        $modulocomputadoraequipo->delete();
        return response()->json('ok');
    }


}


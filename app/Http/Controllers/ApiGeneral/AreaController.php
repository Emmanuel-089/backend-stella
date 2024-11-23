<?php


namespace App\Http\Controllers\ApiGeneral;

use Storage;
use App\Models\Area;
use Illuminate\Http\Request;


use App\Http\Requests\Area\CrearAreaRequest;
use App\Http\Requests\Area\ActualizarAreaRequest;


class AreaController
{
    
    public function all()
    {
        return response()->json(Area::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Area::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearAreaRequest $request)
    {
        return response()->json(Area::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_area)
    {
        // Intentar obtener la area por ID
        $area = Area::find($id_area);

        // Si no se encuentra la area, devolver un error
        if (!$area) {
            return response()->json(['message' => 'Area no encontrada'], 404);
        }
        return response()->json($area);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarAreaRequest $request, $id_area)
    {
        // Obtener la area por ID
        $area = Area::find($id_area);

        // Si la area no existe, devolver error
        if (!$area) {
            return response()->json(['message' => 'Area no encontrada'], 404);
        }
        $area->update($request->validated());

        return response()->json($area);
    }



    //============  api de eliminar DELETE
    public function destroy($id_area)
    {
        $area = Area::find($id_area);

        if (!$area) {
            return response()->json(['message' => 'Area no encontrada'], 404);
        }

        $area->delete();
        return response()->json('ok');
    }


}


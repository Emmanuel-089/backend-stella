<?php


namespace App\Http\Controllers\ApiGeneral;

use Storage;
use App\Models\SO;
use Illuminate\Http\Request;


use App\Http\Requests\SO\CrearSORequest;
use App\Http\Requests\SO\ActualizarSORequest;


class SOController
{
    
    public function all()
    {
        return response()->json(SO::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(SO::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearSORequest $request)
    {
        return response()->json(SO::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_so)
    {
        // Intentar obtener la so por ID
        $so = SO::find($id_so);

        // Si no se encuentra la so, devolver un error
        if (!$so) {
            return response()->json(['message' => 'SO no encontrada'], 404);
        }
        return response()->json($so);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarSORequest $request, $id_so)
    {
        // Obtener la so por ID
        $so = SO::find($id_so);

        // Si la so no existe, devolver error
        if (!$so) {
            return response()->json(['message' => 'SO no encontrada'], 404);
        }
        $so->update($request->validated());

        return response()->json($so);
    }



    //============  api de eliminar DELETE
    public function destroy($id_so)
    {
        $so = SO::find($id_so);

        if (!$so) {
            return response()->json(['message' => 'SO no encontrada'], 404);
        }

        $so->delete();
        return response()->json('ok');
    }


}


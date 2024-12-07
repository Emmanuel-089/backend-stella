<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Modelo;
use Illuminate\Http\Request;


use App\Http\Requests\Modelo\CrearModeloRequest;
use App\Http\Requests\Modelo\ActualizarModeloRequest;


class ModeloController 
{
    
    public function all()
    {
        return response()->json(Modelo::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Modelo::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearModeloRequest $request)
    {
        return response()->json(Modelo::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_modelo)
    {
        // Intentar obtener la modelo por ID
        $modelo = Modelo::find($id_modelo);

        // Si no se encuentra la modelo, devolver un error
        if (!$modelo) {
            return response()->json(['message' => 'Modelo no encontrada'], 404);
        }
        return response()->json($modelo);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarModeloRequest $request, $id_modelo)
    {
        // Obtener la modelo por ID
        $modelo = Modelo::find($id_modelo);

        // Si la modelo no existe, devolver error
        if (!$modelo) {
            return response()->json(['message' => 'Modelo no encontrada'], 404);
        }
        $modelo->update($request->validated());

        return response()->json($modelo);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_modelo)
    {
        $modelo = Modelo::find($id_modelo);

        if (!$modelo) {
            return response()->json(['message' => 'Modelo no encontrada'], 404);
        }

        $modelo->delete();
        return response()->json('ok');
    }


}


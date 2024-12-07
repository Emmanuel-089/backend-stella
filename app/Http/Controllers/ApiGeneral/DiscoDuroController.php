<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\DiscoDuro;
use Illuminate\Http\Request;


use App\Http\Requests\DiscoDuro\CrearDiscoDuroRequest;
use App\Http\Requests\DiscoDuro\ActualizarDiscoDuroRequest;


class DiscoDuroController 
{
    
    public function all()
    {
        return response()->json(DiscoDuro::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(DiscoDuro::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearDiscoDuroRequest $request)
    {
        return response()->json(DiscoDuro::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_dd)
    {
        // Intentar obtener la discoduro por ID
        $discoduro = DiscoDuro::find($id_dd);

        // Si no se encuentra la discoduro, devolver un error
        if (!$discoduro) {
            return response()->json(['message' => 'DiscoDuro no encontrada'], 404);
        }
        return response()->json($discoduro);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarDiscoDuroRequest $request, $id_dd)
    {
        // Obtener la discoduro por ID
        $discoduro = DiscoDuro::find($id_dd);

        // Si la discoduro no existe, devolver error
        if (!$discoduro) {
            return response()->json(['message' => 'DiscoDuro no encontrada'], 404);
        }
        $discoduro->update($request->validated());

        return response()->json($discoduro);
    }



    //============  api de eliminar DELETE
    public function destroy($id_dd)
    {
        $discoduro = DiscoDuro::find($id_dd);

        if (!$discoduro) {
            return response()->json(['message' => 'DiscoDuro no encontrada'], 404);
        }

        $discoduro->delete();
        return response()->json('ok');
    }


}


<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\TipoDiscoDuro;
use Illuminate\Http\Request;


use App\Http\Requests\TipoDiscoDuro\CrearTipoDiscoDuroRequest;
use App\Http\Requests\TipoDiscoDuro\ActualizarTipoDiscoDuroRequest;


class TipoDiscoDuroController
{
    
    public function all()
    {
        return response()->json(TipoDiscoDuro::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(TipoDiscoDuro::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearTipoDiscoDuroRequest $request)
    {
        return response()->json(TipoDiscoDuro::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_tipodd)
    {
        // Intentar obtener la tipodiscoduro por ID
        $tipodiscoduro = TipoDiscoDuro::find($id_tipodd);

        // Si no se encuentra la tipodiscoduro, devolver un error
        if (!$tipodiscoduro) {
            return response()->json(['message' => 'TipoDiscoDuro no encontrada'], 404);
        }
        return response()->json($tipodiscoduro);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT
    public function update(ActualizarTipoDiscoDuroRequest $request, $id_tipodd)
    {
        // Obtener la tipodiscoduro por ID
        $tipodiscoduro = TipoDiscoDuro::find($id_tipodd);

        // Si la tipodiscoduro no existe, devolver error
        if (!$tipodiscoduro) {
            return response()->json(['message' => 'TipoDiscoDuro no encontrada'], 404);
        }
        $tipodiscoduro->update($request->validated());

        return response()->json($tipodiscoduro);
    }



    //============  api de eliminar DELETE
    public function destroy($id_tipodd)
    {
        $tipodiscoduro = TipoDiscoDuro::find($id_tipodd);

        if (!$tipodiscoduro) {
            return response()->json(['message' => 'TipoDiscoDuro no encontrada'], 404);
        }

        $tipodiscoduro->delete();
        return response()->json('ok');
    }


}


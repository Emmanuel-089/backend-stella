<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Marca;
use Illuminate\Http\Request;


use App\Http\Requests\Marca\CrearMarcaRequest;
use App\Http\Requests\Marca\ActualizarMarcaRequest;


class MarcaController 
{
    
    public function all()
    {
        return response()->json(Marca::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Marca::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearMarcaRequest $request)
    {
        return response()->json(Marca::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_marca)
    {
        // Intentar obtener la marca por ID
        $marca = Marca::find($id_marca);

        // Si no se encuentra la marca, devolver un error
        if (!$marca) {
            return response()->json(['message' => 'Marca no encontrada'], 404);
        }
        return response()->json($marca);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarMarcaRequest $request, $id_marca)
    {
        // Obtener la marca por ID
        $marca = Marca::find($id_marca);

        // Si la marca no existe, devolver error
        if (!$marca) {
            return response()->json(['message' => 'Marca no encontrada'], 404);
        }
        $marca->update($request->validated());

        return response()->json($marca);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_marca)
    {
        $marca = Marca::find($id_marca);

        if (!$marca) {
            return response()->json(['message' => 'Marca no encontrada'], 404);
        }

        $marca->delete();
        return response()->json('ok');
    }


}


<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Office;
use Illuminate\Http\Request;


use App\Http\Requests\Office\CrearOfficeRequest;
use App\Http\Requests\Office\ActualizarOfficeRequest;


class OfficeController
{
    
    public function all()
    {
        return response()->json(Office::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Office::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearOfficeRequest $request)
    {
        return response()->json(Office::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_office)
    {
        // Intentar obtener la office por ID
        $office = Office::find($id_office);

        // Si no se encuentra la office, devolver un error
        if (!$office) {
            return response()->json(['message' => 'Office no encontrada'], 404);
        }
        return response()->json($office);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT
    public function update(ActualizarOfficeRequest $request, $id_office)
    {
        // Obtener la office por ID
        $office = Office::find($id_office);

        // Si la office no existe, devolver error
        if (!$office) {
            return response()->json(['message' => 'Office no encontrada'], 404);
        }
        $office->update($request->validated());

        return response()->json($office);
    }



    //============  api de eliminar DELETE
    public function destroy($id_office)
    {
        $office = Office::find($id_office);

        if (!$office) {
            return response()->json(['message' => 'Office no encontrada'], 404);
        }

        $office->delete();
        return response()->json('ok');
    }


}


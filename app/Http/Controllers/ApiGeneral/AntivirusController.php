<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Antivirus;
use Illuminate\Http\Request;


use App\Http\Requests\Antivirus\CrearAntivirusRequest;
use App\Http\Requests\Antivirus\ActualizarAntivirusRequest;


class AntivirusController
{
    
    public function all()
    {
        return response()->json(Antivirus::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Antivirus::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearAntivirusRequest $request)
    {
        return response()->json(Antivirus::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_antivirus)
    {
        // Intentar obtener la antivirus por ID
        $antivirus = Antivirus::find($id_antivirus);

        // Si no se encuentra la antivirus, devolver un error
        if (!$antivirus) {
            return response()->json(['message' => 'Antivirus no encontrada'], 404);
        }
        return response()->json($antivirus);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT
    public function update(ActualizarAntivirusRequest $request, $id_antivirus)
    {
        // Obtener la antivirus por ID
        $antivirus = Antivirus::find($id_antivirus);

        // Si la antivirus no existe, devolver error
        if (!$antivirus) {
            return response()->json(['message' => 'Antivirus no encontrada'], 404);
        }
        $antivirus->update($request->validated());

        return response()->json($antivirus);
    }



    //============  api de eliminar DELETE
    public function destroy($id_antivirus)
    {
        $antivirus = Antivirus::find($id_antivirus);

        if (!$antivirus) {
            return response()->json(['message' => 'Antivirus no encontrada'], 404);
        }

        $antivirus->delete();
        return response()->json('ok');
    }


}


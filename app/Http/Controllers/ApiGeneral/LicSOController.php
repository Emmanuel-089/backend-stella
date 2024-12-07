<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\LicSO;
use Illuminate\Http\Request;


use App\Http\Requests\LicSO\CrearLicSORequest;
use App\Http\Requests\LicSO\ActualizarLicSORequest;


class LicSOController
{
    
    public function all()
    {
        return response()->json(LicSO::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(LicSO::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearLicSORequest $request)
    {
        return response()->json(LicSO::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_licso)
    {
        // Intentar obtener la licso por ID
        $licso = LicSO::find($id_licso);

        // Si no se encuentra la licso, devolver un error
        if (!$licso) {
            return response()->json(['message' => 'LicSO no encontrada'], 404);
        }
        return response()->json($licso);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT
    public function update(ActualizarLicSORequest $request, $id_licso)
    {
        // Obtener la licso por ID
        $licso = LicSO::find($id_licso);

        // Si la licso no existe, devolver error
        if (!$licso) {
            return response()->json(['message' => 'LicSO no encontrada'], 404);
        }
        $licso->update($request->validated());

        return response()->json($licso);
    }



    //============  api de eliminar DELETE
    public function destroy($id_licso)
    {
        $licso = LicSO::find($id_licso);

        if (!$licso) {
            return response()->json(['message' => 'LicSO no encontrada'], 404);
        }

        $licso->delete();
        return response()->json('ok');
    }


}


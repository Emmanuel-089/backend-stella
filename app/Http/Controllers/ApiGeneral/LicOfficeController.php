<?php


namespace App\Http\Controllers\ApiGeneral;

use Storage;
use App\Models\LicOffice;
use Illuminate\Http\Request;


use App\Http\Requests\LicOffice\CrearLicOfficeRequest;
use App\Http\Requests\LicOffice\ActualizarLicOfficeRequest;


class LicOfficeController
{
    
    public function all()
    {
        return response()->json(LicOffice::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(LicOffice::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearLicOfficeRequest $request)
    {
        return response()->json(LicOffice::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_licoffice)
    {
        // Intentar obtener la licoffice por ID
        $licoffice = LicOffice::find($id_licoffice);

        // Si no se encuentra la licoffice, devolver un error
        if (!$licoffice) {
            return response()->json(['message' => 'LicOffice no encontrada'], 404);
        }
        return response()->json($licoffice);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarLicOfficeRequest $request, $id_licoffice)
    {
        // Obtener la licoffice por ID
        $licoffice = LicOffice::find($id_licoffice);

        // Si la licoffice no existe, devolver error
        if (!$licoffice) {
            return response()->json(['message' => 'LicOffice no encontrada'], 404);
        }
        $licoffice->update($request->validated());

        return response()->json($licoffice);
    }



    //============  api de eliminar DELETE
    public function destroy($id_licoffice)
    {
        $licoffice = LicOffice::find($id_licoffice);

        if (!$licoffice) {
            return response()->json(['message' => 'LicOffice no encontrada'], 404);
        }

        $licoffice->delete();
        return response()->json('ok');
    }


}


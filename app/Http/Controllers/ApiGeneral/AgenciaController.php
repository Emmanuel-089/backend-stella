<?php

namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Agencia;
use Illuminate\Http\Request;


use App\Http\Requests\Agencia\CrearAgenciaRequest;
use App\Http\Requests\Agencia\ActualizarAgenciaRequest;

class AgenciaController
{
    
    public function all()
    {
        return response()->json(Agencia::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Agencia::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearAgenciaRequest $request)
    {
        return response()->json(Agencia::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_agencia)
    {
        // Intentar obtener la agencia por ID
        $agencia = Agencia::find($id_agencia);

        // Si no se encuentra la agencia, devolver un error
        if (!$agencia) {
            return response()->json(['message' => 'Agencia no encontrada'], 404);
        }
        return response()->json($agencia);
    }

    //============  API de ACTUALIZAR  ------------ PUT
    public function update(ActualizarAgenciaRequest $request, $id_agencia)
    {
        // Obtener la agencia por ID
        $agencia = Agencia::find($id_agencia);

        // Si la agencia no existe, devolver error
        if (!$agencia) {
            return response()->json(['message' => 'Agencia no encontrada'], 404);
        }
        $agencia->update($request->validated());

        return response()->json($agencia);
    }

    //============  api de eliminar DELETE
    public function destroy($id_agencia)
    {
        $agencia = Agencia::find($id_agencia);

        if (!$agencia) {
            return response()->json(['message' => 'Agencia no encontrada'], 404);
        }

        $agencia->delete();
        return response()->json('ok');
    }


}


<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Procesador;
use Illuminate\Http\Request;


use App\Http\Requests\Procesador\CrearProcesadorRequest;
use App\Http\Requests\Procesador\ActualizarProcesadorRequest;


class ProcesadorController 
{
    
    public function all()
    {
        return response()->json(Procesador::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Procesador::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearProcesadorRequest $request)
    {
        return response()->json(Procesador::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_cpu)
    {
        // Intentar obtener la procesador por ID
        $procesador = Procesador::find($id_cpu);

        // Si no se encuentra la procesador, devolver un error
        if (!$procesador) {
            return response()->json(['message' => 'Procesador no encontrada'], 404);
        }
        return response()->json($procesador);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarProcesadorRequest $request, $id_cpu)
    {
        // Obtener la procesador por ID
        $procesador = Procesador::find($id_cpu);

        // Si la procesador no existe, devolver error
        if (!$procesador) {
            return response()->json(['message' => 'Procesador no encontrada'], 404);
        }
        $procesador->update($request->validated());

        return response()->json($procesador);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_cpu)
    {
        $procesador = Procesador::find($id_cpu);

        if (!$procesador) {
            return response()->json(['message' => 'Procesador no encontrada'], 404);
        }

        $procesador->delete();
        return response()->json('ok');
    }


}


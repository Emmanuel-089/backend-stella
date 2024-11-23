<?php


namespace App\Http\Controllers\ApiGeneral;

use Storage;
use App\Models\Monitor;
use Illuminate\Http\Request;


use App\Http\Requests\Monitor\CrearMonitorRequest;
use App\Http\Requests\Monitor\ActualizarMonitorRequest;


class MonitorController
{
    
    public function all()
    {
        return response()->json(Monitor::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Monitor::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearMonitorRequest $request)
    {
        return response()->json(Monitor::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_monitor)
    {
        // Intentar obtener la monitor por ID
        $monitor = Monitor::find($id_monitor);

        // Si no se encuentra la monitor, devolver un error
        if (!$monitor) {
            return response()->json(['message' => 'Monitor no encontrada'], 404);
        }
        return response()->json($monitor);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarMonitorRequest $request, $id_monitor)
    {
        // Obtener la monitor por ID
        $monitor = Monitor::find($id_monitor);

        // Si la monitor no existe, devolver error
        if (!$monitor) {
            return response()->json(['message' => 'Monitor no encontrada'], 404);
        }
        $monitor->update($request->validated());

        return response()->json($monitor);
    }



    //============  api de eliminar DELETE
    public function destroy($id_monitor)
    {
        $monitor = Monitor::find($id_monitor);

        if (!$monitor) {
            return response()->json(['message' => 'Monitor no encontrada'], 404);
        }

        $monitor->delete();
        return response()->json('ok');
    }


}


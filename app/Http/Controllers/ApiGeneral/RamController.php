<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Ram;
use Illuminate\Http\Request;


use App\Http\Requests\Ram\CrearRamRequest;
use App\Http\Requests\Ram\ActualizarRamRequest;


class RamController 
{
    
    public function all()
    {
        return response()->json(Ram::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Ram::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearRamRequest $request)
    {
        return response()->json(Ram::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_ram)
    {
        // Intentar obtener la ram por ID
        $ram = Ram::find($id_ram);

        // Si no se encuentra la ram, devolver un error
        if (!$ram) {
            return response()->json(['message' => 'Ram no encontrada'], 404);
        }
        return response()->json($ram);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarRamRequest $request, $id_ram)
    {
        // Obtener la ram por ID
        $ram = Ram::find($id_ram);

        // Si la ram no existe, devolver error
        if (!$ram) {
            return response()->json(['message' => 'Ram no encontrada'], 404);
        }
        $ram->update($request->validated());

        return response()->json($ram);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_ram)
    {
        $ram = Ram::find($id_ram);

        if (!$ram) {
            return response()->json(['message' => 'Ram no encontrada'], 404);
        }

        $ram->delete();
        return response()->json('ok');
    }


}


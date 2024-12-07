<?php


namespace App\Http\Controllers\ModuloControlGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\ModuloControlGeneral;
use Illuminate\Http\Request;


use App\Http\Requests\ModuloControlGeneral\CrearModuloControlGeneralRequest;
use App\Http\Requests\ModuloControlGeneral\ActualizarModuloControlGeneralRequest;


class ModuloControlGeneralController 
{
    
    public function all()
    {
        return response()->json(ModuloControlGeneral::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(ModuloControlGeneral::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearModuloControlGeneralRequest $request)
    {
        return response()->json(ModuloControlGeneral::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_mod_general)
    {
        // Intentar obtener la modulocontrolgeneral por ID
        $modulocontrolgeneral = ModuloControlGeneral::find($id_mod_general);

        // Si no se encuentra la modulocontrolgeneral, devolver un error
        if (!$modulocontrolgeneral) {
            return response()->json(['message' => 'ModuloControlGeneral no encontrada'], 404);
        }
        return response()->json($modulocontrolgeneral);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarModuloControlGeneralRequest $request, $id_mod_general)
    {
        // Obtener la modulocontrolgeneral por ID
        $modulocontrolgeneral = ModuloControlGeneral::find($id_mod_general);

        // Si la modulocontrolgeneral no existe, devolver error
        if (!$modulocontrolgeneral) {
            return response()->json(['message' => 'ModuloControlGeneral no encontrada'], 404);
        }
        $modulocontrolgeneral->update($request->validated());

        return response()->json($modulocontrolgeneral);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_mod_general)
    {
        $modulocontrolgeneral = ModuloControlGeneral::find($id_mod_general);

        if (!$modulocontrolgeneral) {
            return response()->json(['message' => 'ModuloControlGeneral no encontrada'], 404);
        }

        $modulocontrolgeneral->delete();
        return response()->json('ok');
    }


}


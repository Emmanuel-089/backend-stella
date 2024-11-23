<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Departamento;
use Illuminate\Http\Request;


use App\Http\Requests\Departamento\CrearDepartamentoRequest;
use App\Http\Requests\Departamento\ActualizarDepartamentoRequest;


class DepartamentoController 
{
    
    public function all()
    {
        return response()->json(Departamento::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Departamento::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearDepartamentoRequest $request)
    {
        return response()->json(Departamento::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_depto)
    {
        // Intentar obtener la departamento por ID
        $departamento = Departamento::find($id_depto);

        // Si no se encuentra la departamento, devolver un error
        if (!$departamento) {
            return response()->json(['message' => 'Departamento no encontrada'], 404);
        }
        return response()->json($departamento);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarDepartamentoRequest $request, $id_depto)
    {
        // Obtener la departamento por ID
        $departamento = Departamento::find($id_depto);

        // Si la departamento no existe, devolver error
        if (!$departamento) {
            return response()->json(['message' => 'Departamento no encontrada'], 404);
        }
        $departamento->update($request->validated());

        return response()->json($departamento);
    }



    //============  api de eliminar DELETE
    public function destroy($id_depto)
    {
        $departamento = Departamento::find($id_depto);

        if (!$departamento) {
            return response()->json(['message' => 'Departamento no encontrada'], 404);
        }

        $departamento->delete();
        return response()->json('ok');
    }


}


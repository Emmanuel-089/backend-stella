<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Empleado;
use Illuminate\Http\Request;


use App\Http\Requests\Empleado\CrearEmpleadoRequest;
use App\Http\Requests\Empleado\ActualizarEmpleadoRequest;


class EmpleadoController 
{
    
    public function all()
    {
        return response()->json(Empleado::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Empleado::paginate(5));
    }

   //============  APi de crear------------ Store
    public function store(CrearEmpleadoRequest $request)
    {
        return response()->json(Empleado::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_emp)
    {
        // Intentar obtener la empleado por ID
        $empleado = Empleado::find($id_emp);

        // Si no se encuentra la empleado, devolver un error
        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrada'], 404);
        }
        return response()->json($empleado);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarEmpleadoRequest $request, $id_emp)
    {
        // Obtener la empleado por ID
        $empleado = Empleado::find($id_emp);

        // Si la empleado no existe, devolver error
        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrada'], 404);
        }
        $empleado->update($request->validated());

        return response()->json($empleado);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_emp)
    {
        $empleado = Empleado::find($id_emp);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrada'], 404);
        }

        $empleado->delete();
        return response()->json('ok');
    }


}


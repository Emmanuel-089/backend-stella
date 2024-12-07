<?php


namespace App\Http\Controllers\ApiGeneral;
use App\Http\Controllers\Controller;
use Storage;
use App\Models\Categoria;
use Illuminate\Http\Request;


use App\Http\Requests\Categoria\CrearCategoriaRequest;
use App\Http\Requests\Categoria\ActualizarCategoriaRequest;


class CategoriaController 
{
    
    public function all()
    {
        return response()->json(Categoria::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Categoria::get());
    }

   //============  APi de crear------------ Store
    public function store(CrearCategoriaRequest $request)
    {
        return response()->json(Categoria::create($request->validated()));
    }

    //============  API de mostrar
    public function show($id_catego)
    {
        // Intentar obtener la categoria por ID
        $categoria = Categoria::find($id_catego);

        // Si no se encuentra la categoria, devolver un error
        if (!$categoria) {
            return response()->json(['message' => 'Categoria no encontrada'], 404);
        }
        return response()->json($categoria);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarCategoriaRequest $request, $id_catego)
    {
        // Obtener la categoria por ID
        $categoria = Categoria::find($id_catego);

        // Si la categoria no existe, devolver error
        if (!$categoria) {
            return response()->json(['message' => 'Categoria no encontrada'], 404);
        }
        $categoria->update($request->validated());

        return response()->json($categoria);
    }



    //============  api de eliminar DELETE 
    public function destroy($id_catego)
    {
        $categoria = Categoria::find($id_catego);

        if (!$categoria) {
            return response()->json(['message' => 'Categoria no encontrada'], 404);
        }

        $categoria->delete();
        return response()->json('ok');
    }


}


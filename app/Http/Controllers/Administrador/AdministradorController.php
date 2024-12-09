<?php


namespace App\Http\Controllers\Administrador;

use Storage;
use App\Models\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Administrador\CrearAdministradorRequest;
use App\Http\Requests\Administrador\ActualizarAdministradorRequest;


class AdministradorController
{
    public function login(Request $request)
    {
        $credentials = $request->only('correo_admin', 'password');
    
        // Buscar al administrador en la tabla 'administradores' usando 'correo_admin'
        $admin = Administrador::where('correo_admin', $credentials['correo_admin'])->first();
    
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Login exitoso
            Auth::login($admin);  // Loguea al administrador
    
            return response()->json(['status' => 'ok', 'message' => 'Login exitoso', 'admin' => $admin]);
        } else {
            // Login fallido
            return response()->json(['status' => 'error', 'message' => 'Credenciales incorrectas']);
        }
    }
    
    public function all()
    {
        return response()->json(Administrador::get());
    }

    //============  funcion del reporte principal
    public function index()
    {
        return response()->json(Administrador::get());
    }

   //============  APi de crear------------ Store
    // En el método store (cuando se crea un nuevo administrador)
    public function store(CrearAdministradorRequest $request)
    {
        // Cifrar la contraseña antes de guardarla
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']); // Cifra la contraseña

        return response()->json(Administrador::create($data)); // Guarda el administrador con la contraseña cifrada
    }

    //============  API de mostrar
    public function show($id_admin)
    {
        // Intentar obtener la administrador por ID
        $administrador = Administrador::find($id_admin);

        // Si no se encuentra la administrador, devolver un error
        if (!$administrador) {
            return response()->json(['message' => 'Administrador no encontrada'], 404);
        }
        return response()->json($administrador);
    }


  
    //============  API de ACTUALIZAR  ------------ PUT 
    public function update(ActualizarAdministradorRequest $request, $id_admin)
{
    $administrador = Administrador::find($id_admin);

    if (!$administrador) {
        return response()->json(['message' => 'Administrador no encontrado'], 404);
    }

    // Obtener datos validados
    $data = $request->validated();

    // Solo cifrar y actualizar la contraseña si está presente en la solicitud
    if (!empty($data['password'])) {
        $data['password'] = Hash::make($data['password']);
    } else {
        unset($data['password']); // Elimina 'password' si no se envió
    }

    // Actualizar el administrador
    $administrador->update($data);

    return response()->json($administrador);
}





    //============  api de eliminar DELETE
    public function destroy($id_admin)
    {
        $administrador = Administrador::find($id_admin);

        if (!$administrador) {
            return response()->json(['message' => 'Administrador no encontrada'], 404);
        }

        $administrador->delete();
        return response()->json('ok');
    }


}


<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'birthdate' => 'required|date',
        ]);

        // Actualizar los datos del usuario
        $user->name = $request->input('name');
        $user->birthdate = $request->input('birthdate');
        $user->save();

        return redirect()->route('profile')->with('success', 'Perfil actualizado correctamente.');
    }
}



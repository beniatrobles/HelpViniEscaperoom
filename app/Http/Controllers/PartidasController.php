<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;

class PartidasController extends Controller
{
    public function crearPartida(Request $request)
    {
        $requestt = $request->validate([

            'tablet' => 'required|boolean',
            'gmail' => 'required|boolean',
            'instagram' => 'required|boolean',
            'twitter' => 'required|boolean',
            'whatsapp' => 'required|boolean',
            'completado' => 'required|boolean',
            'tiempo' => 'required|integer',
            'id_usuario' => 'required|integer',
        ]);


        // Verificar si ya existe una partida activa para el usuario
        $partidaExistente = Partida::where('id_usuario', $requestt['id_usuario'])
            ->where('completado', false) // Ajusta según tu lógica
            ->first();

        if ($partidaExistente) {
            return response()->json([], 200);
        }

        //crea la partida si no existe una
        $partida = Partida::create([

            'tablet' => $requestt['tablet'],
            'gmail' => $requestt['gmail'],
            'instagram' => $requestt['instagram'],
            'twitter' => $requestt['twitter'],
            'whatsapp' => $requestt['whatsapp'],
            'completado' => $requestt['completado'],
            'tiempo' => $requestt['tiempo'],
            'id_usuario' => $requestt['id_usuario'],

        ]);


        return response()->json([], 200);
    }

    public function actualizarPartida(Request $request, $id)
    {
        // Validar los campos que pueden ser actualizados
        $validatedData = $request->validate([
            'tablet' => 'nullable|boolean',
            'gmail' => 'nullable|boolean',
            'instagram' => 'nullable|boolean',
            'twitter' => 'nullable|boolean',
            'whatsapp' => 'nullable|boolean',
            'completado' => 'nullable|boolean',
            'tiempo' => 'nullable|integer',
        ]);

        // Buscar la partida por su ID
        $partida = Partida::find($id);

        if (!$partida) {
            return response()->json(['error' => 'Partida no encontrada'], 404);
        }

        // Actualizar los campos según los datos proporcionados
        $partida->update($validatedData);

        return response()->json(['message' => 'Partida actualizada correctamente'], 200);
    }

    public function obtenerPartidaActiva($idUsuario)
    {
        $partida = Partida::where('id_usuario', $idUsuario)
            ->where('completado', false)
            ->first();

        if (!$partida) {
            return response()->json(['error' => 'No hay partida activa'], 404);
        }

        return response()->json($partida, 200);
    }
}

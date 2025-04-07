<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;

class PartidasController extends Controller
{

    public function index()
    {
        $partidas = Partida::with('usuario')->paginate(10);
        return view('admin.partidas', compact('partidas'));
    }

    public function destroy($id)
    {
        $partida = Partida::findOrFail($id);
        $partida->delete();
        return redirect()->route('admin.partidas')->with('success', 'Partida eliminada correctamente.');
    }
    public function destroyPartida($id)
    {
        $partida = Partida::findOrFail($id);
        $usuarioId = $partida->id_usuario; 

        
        $partida->delete();

        
        return redirect()->route('admin.show', ['id' => $usuarioId])
            ->with('success', 'Partida eliminada correctamente.');
    }

    public function confirmarEliminacionPartida($id)
    {
        $partida = Partida::findOrFail($id);
        return view('admin.confirmarEliminacionPartida', compact('partida'));
    }


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
            ->where('terminado', false)
            ->first();

        if ($partidaExistente) {
            return response()->json([], 200);
        }

        // Crear la partida
        $partida = Partida::create([
            'tablet' => $requestt['tablet'],
            'gmail' => $requestt['gmail'],
            'instagram' => $requestt['instagram'],
            'twitter' => $requestt['twitter'],
            'whatsapp' => $requestt['whatsapp'],
            'completado' => $requestt['completado'],
            'tiempo' => $requestt['tiempo'],
            'id_usuario' => $requestt['id_usuario'],
            'primera_vez' => $request['primera_vez'],
            'terminado' => $request['terminado'],
            'penalizar' => $request['penalizar'],
        ]);

        return response()->json([], 200);
    }

    public function actualizarPartida(Request $request, $id)
    {
        $validatedData = $request->validate([
            'primera_vez' => 'nullable|boolean',
            'tablet' => 'nullable|boolean',
            'gmail' => 'nullable|boolean',
            'instagram' => 'nullable|boolean',
            'twitter' => 'nullable|boolean',
            'whatsapp' => 'nullable|boolean',
            'completado' => 'nullable|boolean',
            'tiempo' => 'nullable|integer',
            'terminado' => 'nullable|boolean',
            'penalizar' => 'nullable|boolean',
        ]);

        $partida = Partida::find($id);

        if (!$partida) {
            return response()->json(['error' => 'Partida no encontrada'], 404);
        }

        $partida->update($validatedData);

        return response()->json(['message' => 'Partida actualizada correctamente'], 200);
    }

    public function obtenerPartidaActiva($idUsuario)
    {
        $partida = Partida::where('id_usuario', $idUsuario)
            ->where('terminado', false)
            ->first();

        if (!$partida) {
            return response()->json(['error' => 'No hay partida activa'], 404);
        }

        return response()->json($partida, 200);
    }

        public function getTiempoRestante($id)
        {
            $partida = Partida::where('id_usuario', $id)
                ->where('terminado', false) // Solo partidas activas
                ->first();

            if (!$partida) {
                return response()->json(['error' => 'No hay partida activa para este usuario.'], 404);
            }

            return response()->json(['tiempo' => $partida->tiempo]);
        }

        // Actualizar tiempo restante
        public function actualizarTiempo(Request $request, $id)
        {
            // Validar que el campo 'tiempo' esté presente y sea un entero
            $request->validate(['tiempo' => 'required|integer']);

            // Buscar la partida activa para el usuario
            $partida = Partida::where('id_usuario', $id)
                ->where('terminado', false) // Solo partida activa
                ->first();

            // Verificar si existe una partida activa
            if (!$partida) {
                return response()->json(['error' => 'No hay partida activa para este usuario.'], 404);
            }

            // Actualizar el tiempo de la partida activa
            $partida->tiempo = $request->tiempo;
            $partida->save();

            return response()->json(['message' => 'Tiempo actualizado con éxito.'], 200);
        }
        public function obtenerPartidasFinalizadas()
        {
            $partidas = Partida::with('usuario:id_usuario,nombre_usuario,correo,avatar_ruta,id_rol')
                ->where('terminado', true)
                ->where('completado', true)
                ->orderByDesc('tiempo')
                ->limit(10)
                ->get()
                ->map(function ($partida) {
                    return [
                        // 'id_partida'     => $partida->id_partida,
                        // 'primera_vez'    => $partida->primera_vez,
                        // 'tablet'         => $partida->tablet,
                        // 'gmail'          => $partida->gmail,
                        // 'instagram'      => $partida->instagram,
                        // 'twitter'        => $partida->twitter,
                        // 'whatsapp'       => $partida->whatsapp,
                        // 'completado'     => $partida->completado,
                        // 'terminado'      => $partida->terminado,
                        // 'penalizar'      => $partida->penalizar,
                        'tiempo'         => $partida->tiempo,
                        'id_usuario'     => $partida->id_usuario,
                        // 'created_at'     => $partida->created_at,
                        // 'updated_at'     => $partida->updated_at,
                        'nombre_usuario' => $partida->usuario->nombre_usuario ?? null,
                        // 'correo'         => $partida->usuario->correo ?? null,
                        'avatar_ruta'    => $partida->usuario->avatar_ruta ?? null,
                        // 'id_rol'         => $partida->usuario->id_rol ?? null,
                    ];
                });

            return response()->json($partidas);
        }
}

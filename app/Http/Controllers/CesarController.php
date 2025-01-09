<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CesarController extends Controller
{
    public function translate(Request $request)
    {
        $validated = $request->validate([
            'mensaje' => 'required|string',
            'rotacion' => 'required|integer',
            'modo' => 'required|string|in:encrypt,decrypt',
        ]);

        $mensaje = $validated['mensaje'];
        $rotacion = $validated['rotacion'];
        $modo = $validated['modo'];

        // Ajustar el desplazamiento si está en modo de descifrado
        if ($modo === 'decrypt') {
            $rotacion = -$rotacion;
        }

        // Cifrado César
        $translated = $this->cesarCipher($mensaje, $rotacion);

        return response()->json(['translated' => $translated]);
    }

    private function cesarCipher($text, $rotacion)
    {
        $result = '';
        $rotacion = $rotacion % 26; // Asegurar que el desplazamiento esté entre 0 y 25

        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                $asciiOffset = ctype_upper($char) ? 65 : 97;
                $newChar = chr(((ord($char) - $asciiOffset + $rotacion + 26) % 26) + $asciiOffset);
                $result .= $newChar;
            } else {
                $result .= $char; // Los números y otros caracteres no cambian
            }
        }

        return $result;
    }
}

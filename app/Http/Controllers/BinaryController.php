<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinaryController extends Controller
{
    public function translate(Request $request)
    {
        $validated = $request->validate([
            'mensaje' => 'required|string',
            'modo' => 'required|string|in:text-to-binary,binary-to-text',
        ]);

        $mensaje = $validated['mensaje'];
        $modo = $validated['modo'];

        // Traducción basada en el modo
        $translated = $modo === 'text-to-binary'
            ? $this->textToBinary($mensaje)
            : $this->binaryToText($mensaje);

        return response()->json(['translated' => $translated]);
    }

    private function textToBinary($text)
    {
        $binary = [];
        foreach (str_split($text) as $char) {
            $binary[] = sprintf('%08b', ord($char)); // Convierte cada carácter a binario de 8 bits
        }
        return implode(' ', $binary); // Separa los binarios con un espacio
    }

    private function binaryToText($binary)
    {
        $text = '';
        foreach (explode(' ', $binary) as $binaryChar) {
            $text .= chr(bindec($binaryChar)); // Convierte cada binario a carácter
        }
        return $text;
    }
}

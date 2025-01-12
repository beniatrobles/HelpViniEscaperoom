<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CancelButton extends Component
{
    public $url;

    /**
     * Crear una nueva instancia del componente.
     *
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Renderizar el componente.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cancel-button');
    }
}

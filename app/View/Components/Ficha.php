<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Ficha extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $titulo;
    public $link;
    public $imagen;


    public function __construct($imagen, $link="#",$titulo="Debes poner el título en la llamada")
    {
        $this->titulo = $titulo;
        $this->link = $link;
        $this->imagen = $imagen;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ficha');
    }
}


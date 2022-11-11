<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class div_inicio extends Component
{
    public $imagen;
    public $titulo;
    public $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imagen,$titulo,$info)
    {
        $this->imagen=$imagen;
        $this->titulo=$titulo;
        $this->info=$info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.div_inicio');
    }
}

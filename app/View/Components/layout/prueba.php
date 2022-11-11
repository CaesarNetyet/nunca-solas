<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class prueba extends Component
{
    public $messenge;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($messenge)
    {
        $this->messenge=$messenge;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.prueba');
    }
}

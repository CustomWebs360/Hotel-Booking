<?php

namespace App\View\Components;

use Illuminate\View\Component;

class image extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name = '';
    public $label = '';
    public $class = '';
    public $col = '';
    public function __construct($name, $label, $class= null, $col = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->class = $class;
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image');
    }
}

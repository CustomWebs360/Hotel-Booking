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
    public $required = '';
    public $width = '';
    public $src = '';
    public function __construct($name, $label, $class = null, $col = null, $required = null, $width = null, $src = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->class = $class;
        $this->col = $col;
        $this->required = $required;
        $this->width = $width;
        $this->src = $src;
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

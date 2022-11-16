<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UpdateInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type = '';
    public $name = '';
    public $label = '';
    public $value = '';
    public $class = '';
    public $id = '';
    public $col = '';
    public $required = '';
    public function __construct($type, $name, $label, $class = null, $value = null, $id = null, $col = null, $required = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->class = $class;
        $this->id = $id;
        $this->col = $col;
        $this->required = $required;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.update-input');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type = '';
    public $name = '';
    public $placeholder = '';
    public $label = '';
    public $value = '';
    public $class = '';
    public $id = '';
    public $col = '';
    public function __construct($type, $name, $placeholder, $label, $class = null,$value = null,$id = null, $col=null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->value = $value;
        $this->class = $class;
        $this->id = $id;
        $this->col = $col;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}

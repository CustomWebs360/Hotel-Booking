<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UpdateTextArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name = '';
    public $col = '';
    public $value = "";
    public $label = "";
    public $placeholder = "";
    public $required = "";
    public function __construct($name, $value, $col = null, $label = null, $placeholder = null, $required = null)
    {
        $this->name = $name;
        $this->col = $col;
        $this->value = $value;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.update-text-area');
    }
}

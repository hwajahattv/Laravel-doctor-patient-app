<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProfileInputField extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $value;
    public $onkeypress;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $placeholder, $value, $onkeypress)
    {
        $this->type=$type;
        $this->name=$name;
        $this->placeholder=$placeholder;
        $this->value=$value;
        $this->onkeypress=$onkeypress;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */


    public function render()
    {
        return view('components.profile-input-field');
    }
}

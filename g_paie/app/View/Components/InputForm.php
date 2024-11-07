<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputForm extends Component
{
    public $label;
    public $iconRight;

   public function __construct($label = null, $iconRight = null)
    {
        $this->label = $label;
        $this->iconRight = $iconRight;
    }


    public function render(): View|Closure|string
    {
        return view('components.input-form');
    }
}

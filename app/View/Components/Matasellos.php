<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Matasellos extends Component
{
    public function __construct()
    {
        //
    }

    // @return \Illuminate\Contracts\View\View|\Closure|string
    public function render()
    {
        return view('components.matasellos');
    }
}

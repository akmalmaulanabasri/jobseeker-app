<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Snap extends Component
{
    public $snapToken;
    public function __construct($snapToken)
    {
        $this->snapToken = $snapToken;
    }

    /**
     * Get the view / contents that represent the component.
     */
    // snapToken
    public function render(): View
    {
        return view('components.snap', [
            'snapToken' => $this->snapToken,
        ]);
    }
}

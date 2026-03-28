<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Container extends Component
{
    public function __construct(
        public string $class = '',
    ) {
    }

    public function render()
    {
        return view('components.container');
    }

    protected function mergeAttributes()
    {
        return $this->attributes->class('mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ' . $this->class);
    }
}

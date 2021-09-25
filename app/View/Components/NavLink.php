<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $name;
    public $url;
    public $target;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $url, $target='')
    {
        $this->name = $name;
        $this->url = $url;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}

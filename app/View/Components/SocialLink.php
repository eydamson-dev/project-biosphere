<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialLink extends Component
{
    public $url;
    public $icon;
    public $alt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $icon, $alt = "")
    {
        $this->url = $url;
        $this->icon = $icon;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social-link');
    }
}

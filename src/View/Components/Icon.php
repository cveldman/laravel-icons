<?php

namespace Veldman\Icons\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return file_get_contents(__DIR__.'/../../../resources/icons/' . $this->name . '.svg');
    }
}

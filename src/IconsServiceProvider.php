<?php

namespace Veldman\Icons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Veldman\Icons\View\Components\Icon;

class IconsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::component('icon', Icon::class);
    }
}
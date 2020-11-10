<?php

namespace Tabraiz\Web\ServiceProviders;
use illuminate\Support\ServiceProvider;

Class WebServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd('we are loading our package service provider');
    }

    public function register()
    {

    }
}


?>
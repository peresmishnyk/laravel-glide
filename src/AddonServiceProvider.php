<?php

namespace Peresmishnyk\LaravelGlide;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'peresmishnyk';
    protected $packageName = 'laravel-glide';
    protected $commands = [];
}

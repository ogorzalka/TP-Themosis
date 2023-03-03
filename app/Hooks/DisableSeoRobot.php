<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;

class DisableSeoRobot extends Hookable
{
    public $hook = 'robots_txt';
    public function register()
    {
        return '';
    }
}

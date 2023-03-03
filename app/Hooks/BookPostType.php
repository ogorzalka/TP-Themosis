<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;

class BookPostType extends Hookable
{
    public $hook = 'robots_txt';
    public function register()
    {
        return '';
    }
}

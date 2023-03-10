<?php

namespace App\Hooks;

use Carbon_Fields\Carbon_Fields;
use Themosis\Hook\Hookable;

class CarbonFields extends Hookable
{
    /**
     * Widgets action hook.
     *
     * @var string
     */
    public $hook = 'after_setup_theme';

    /**
     * Register the widgets.
     */
    public function register()
    {
        Carbon_Fields::boot();
    }
}

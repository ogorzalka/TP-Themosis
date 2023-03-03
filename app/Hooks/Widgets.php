<?php

namespace App\Hooks;

use App\Widgets\LatestBooksWidget;
use Themosis\Hook\Hookable;

class Widgets extends Hookable
{
    /**
     * Widgets action hook.
     *
     * @var string
     */
    public $hook = 'widgets_init';

    /**
     * Widgets to register.
     *
     * @var array
     */
    public $widgets = [
        LatestBooksWidget::class,
    ];

    /**
     * Register the widgets.
     */
    public function register()
    {
        if (! empty($this->widgets)) {
            foreach ($this->widgets as $widget) {
                register_widget($widget);
            }
        }
    }
}

<?php

namespace Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Page;
use Themosis\Support\Section;

class RobotTxtAdmin extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $page = Page::make('robots-admin', 'Gestion du robots.txt')
            ->set();

        $page->addSections([
            new Section('general', 'General'),
        ]);

        $page->addSettings([
            'general' => [
                Field::textarea('robots_txt')
            ]
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

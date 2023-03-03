<?php

namespace Theme\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Extended\ACF\Fields\Gallery;
use Extended\ACF\Location;
use Themosis\Support\Facades\Action;

class GalleryProvider extends ServiceProvider
{
    /**
     * Theme Assets
     *
     * Here we define the loaded assets from our previously defined
     * "dist" directory. Assets sources are located under the root "assets"
     * directory and are then compiled, thanks to Laravel Mix, to the "dist"
     * folder.
     *
     * @see https://laravel-mix.com/
     */
    public function register()
    {
        Action::add('acf/init', [$this, 'registerFields']);

        $this->setViewVars();
    }

    protected function setViewVars() {
        if (!is_front_page()) {
            return;
        }

        View::composer('front', function ($view) {
            $view->with('gallery_items', );
        });
    }

    public function registerFields() {
        register_extended_field_group([
            'title' => 'About',
            'fields' => [
                Gallery::make('Images', 'gallery_image')
                    ->mimeTypes(['jpg', 'jpeg', 'png'])
                    ->min(1)
                    ->max(6)
                    ->fileSize('100 KB', 5) // MB if entered as int
                    ->library('all') // all or uploadedTo
                    ->returnFormat('array') // id, url or array (default)
                    ->previewSize('medium') // thumbnail, medium or large
                    ->required()
            ],
            'location' => [
                Location::where('page_type', 'front_page')
            ],
        ]);
    }
}

<?php

namespace Theme\Providers;

use Illuminate\Support\ServiceProvider;

class BlockProvider extends ServiceProvider
{
    public function register()
    {
        register_block_type( get_stylesheet_directory(). DS. 'views' . DS . 'blocks'. DS. 'latest-books');
    }
}

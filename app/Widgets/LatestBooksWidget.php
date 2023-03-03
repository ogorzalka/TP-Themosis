<?php

namespace App\Widgets;

class LatestBooksWidget extends \WP_Widget
{
    public function __construct()
    {
        parent::__construct('latest_books', 'Latest Books', [
            'description' => 'Displays the latest books.',
        ]);
    }
}

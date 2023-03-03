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

    public function form($instance)
    {
        $title = $instance['title'] ?? '';

        echo view('admin.widgets.latest-books', [
           'field_id' => $this->get_field_id('title'),
           'field_name' => $this->get_field_name('title'),
           'title' => $title,
        ]);
    }

    public function update($new_instance, $old_instance)
    {
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

    public function widget($args, $instance)
    {
        echo view('front.widgets.latest-books', [
            'title' => $instance['title'],
        ]);
    }
}

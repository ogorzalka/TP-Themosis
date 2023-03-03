<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Facades\Taxonomy;

class BookPostType extends Hookable
{
    public $hook = 'init';
    public function register()
    {
        PostType::make('books', 'Books', 'Book')
            ->setTitlePlaceholder('Titre de votre livre')
            ->setArguments([
                'supports' => ['editor']
            ])
            ->status([
                'rent' => [
                    'publish_text' => 'Save and rent the book'
                ],
                'rented' => [
                    'publish_text' => 'Set the book as rented'
                ],
                'sell' => [
                    'publish_text' => 'Sell the book'
                ],
                'sold' => [
                    'publish_text' => 'Set the book as sold'
                ]
            ])
            ->set();

        Taxonomy::make('author', 'books', 'Auteurs', 'Auteur')
            ->set();

        Metabox::make('foobar', 'books')
            ->setTitle('Ma metabox')
            ->setCallback(function() {
                echo 'foobar';
            })
            ->set();

    }
}

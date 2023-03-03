<?php

/**
 * Application routes.
 */
Route::get('/', function () {
    return view('pages.front');
});

Route::get('robots-seo.txt', function () {
    return view('seo.robots');
});
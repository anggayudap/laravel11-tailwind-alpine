<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('post', ['title' => 'Posts', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'AYP',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto illo iste esse labore suscipit distinctio repellendus deleniti laboriosam quis quas. Saepe reprehenderit omnis accusamus architecto odio vero quas ratione ipsa.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'ZAD',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto illo iste esse labore suscipit distinctio repellendus deleniti laboriosam quis quas. Saepe reprehenderit omnis accusamus architecto odio vero quas ratione ipsa.'
        ]
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts_arr = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'AYP',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto illo iste esse labore suscipit distinctio repellendus deleniti laboriosam quis quas. Saepe reprehenderit omnis accusamus architecto odio vero quas ratione ipsa.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'ZAD',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto illo iste esse labore suscipit distinctio repellendus deleniti laboriosam quis quas. Saepe reprehenderit omnis accusamus architecto odio vero quas ratione ipsa.'
        ]
    ];

    $post = Arr::first($posts_arr, function($postx) use ($id) {
        return $postx['id'] == $id;

        // lanjutkan pada video ini https://youtu.be/76YsC4EjGE4?t=1583
    });
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

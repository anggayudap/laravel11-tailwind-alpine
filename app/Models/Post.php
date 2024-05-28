<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'AYP',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto illo iste esse labore suscipit distinctio repellendus deleniti laboriosam quis quas. Saepe reprehenderit omnis accusamus architecto odio vero quas ratione ipsa.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'ZAD',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto illo iste esse labore suscipit distinctio repellendus deleniti laboriosam quis quas. Saepe reprehenderit omnis accusamus architecto odio vero quas ratione ipsa.'
            ]
        ];
    }

    public static function find($slug): array
    {
        // using arrow function
        $post_arr = Arr::first(static::all(), fn ($postx) => $postx['slug'] == $slug);

        if(!$post_arr)
        {
            abort(404);
        }

        return $post_arr;
    }
}
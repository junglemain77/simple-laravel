<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"     => "Judul Post 1",
            "slug"      => "judul-post-pertama",
            "author"    => "Vale II",
            "body"      => "Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Eu lobortis elementum nibh tellus molestie nunc non blandit."
        ],
        [
            "title"     => "Judul Post 2",
            "slug"      => "judul-post-kedua",
            "author"    => "Vale IV",
            "body"      => "eqweqweqwqeedff dfs sq ASDAS SDSA,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Eu lobortis elementum nibh tellus molestie nunc non blandit."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts  = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky",
            "body" => "Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Quisquam, voluptatum
            voluptatibus. Quisquam, voluptatum voluptatibus. Quisquam,
            voluptatum voluptatibus. Quisquam, voluptatum voluptatibus.
            Quisquam, voluptatum voluptatibus. Quisquam, voluptatum
            voluptatibus. Quisquam, voluptatum voluptatibus. Quisquam,
            voluptatum voluptatibus. Quisquam, voluptatum voluptatibus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizky",
            "body" => "Lorem ipsum dolor sit
            amet con
            sectetur adipisicing elit. Quisquam, voluptatum voluptatibus.
            Quisquam, voluptatum voluptatibus. Quisquam, voluptatum
            voluptatibus. Quisquam, voluptatum voluptatibus. Quisquam,
            "
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Models;


class projects
{
    private static $blog_projects = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jimi Mikail Zamzami",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, explicabo debitis vol
            uptate odit eos esse dolorum laudantium, omnis quas mollitia, iste aliquid! Sapiente quas libero corrupti alias nesciunt commodi recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum veniam labore! Incidunt ex optio repellat quo quos, perspiciatis sunt fuga. Voluptatibus error repellat ipsa, laudantium provident corrupti ab praesentium."
        ],
        [
            "tittle" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rika",
            "body" => "Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
        vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
        cursus magna."
        ]
    ];
    public static function all()
    {
        return self::$blog_projects;
    }
    public static function find($slug)
    {
        $projects = self::$blog_projects;
        $project = [];
        foreach ($projects as $p) {
            if ($p["$slug"]  === $slug) {
                $project = $p;
            }
        }
        return $project;
    }
}

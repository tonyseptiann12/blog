<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "tonyseptiann",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, voluptas voluptates obcaecati excepturi ea reiciendis, dolorum reprehenderit sit neque illum soluta accusantium officiis, cum corporis repellendus impedit! Obcaecati expedita, ex laudantium possimus nihil soluta pariatur laboriosam nisi dolorum, placeat, ipsam at quia fugit voluptatem minima ducimus quidem! Maiores porro distinctio possimus delectus nisi cum expedita tempora vitae in veniam inventore ipsum saepe, quos, et non. Esse id quae fuga, ducimus deleniti corrupti nihil soluta dolorum eum atque perferendis consequatur necessitatibus?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "tonys",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, tempore! Ex, pariatur? Modi laboriosam atque tempore minima ab sed illo quod! Laudantium est consequatur reprehenderit ab qui, rerum iste voluptatibus provident temporibus a quo explicabo doloribus eligendi dolor, molestiae facere cupiditate fugiat sunt ullam. Quas impedit hic perspiciatis alias, voluptates nemo sint eaque, sit ea in, consequuntur esse eos asperiores tenetur temporibus blanditiis enim ratione consectetur tempora explicabo nesciunt veritatis aspernatur dolores? Quasi nesciunt incidunt dolor quae facilis, vel totam quisquam esse iste quia deserunt, quaerat consequuntur, saepe illum architecto suscipit quis facere laudantium vitae odit eum. Illum, vitae. Quis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

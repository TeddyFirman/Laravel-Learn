<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Teddy 404",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex reiciendis molestiae itaque qui aliquam voluptatibus sed, vitae quibusdam facilis culpa error, nemo illo obcaecati quia nulla quas, id ut! A dolor adipisci non, ullam sunt at architecto porro consequuntur nulla fugit, rem tempora odit voluptas illo vitae quia eius vero reiciendis, consequatur earum natus explicabo. Vero blanditiis voluptatum doloremque cum corrupti. Qui nostrum, odit tenetur voluptate enim, aut quisquam reprehenderit suscipit ducimus rerum temporibus nihil quam quibusdam corporis, aliquid fugiat."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Teddy 84",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error eveniet dolorum inventore magni accusantium eum iusto molestiae culpa. Consectetur nesciunt mollitia unde quod illum at debitis quasi blanditiis enim quis natus sapiente, explicabo a iusto incidunt vel adipisci accusantium voluptate vero tenetur, autem temporibus amet odit? Earum hic nemo, quos minus autem ipsam at quibusdam aliquid aut veritatis dolore aliquam recusandae rerum similique architecto, aperiam ex sint nobis modi quo. Illo corporis non dolorum eum dignissimos perspiciatis omnis, aspernatur voluptates architecto consequatur fugiat dolorem accusamus tempora autem repellat corrupti illum ipsam cum, iure quam excepturi aliquid, obcaecati animi? Quaerat dolore iste quam ut nostrum placeat reprehenderit ad fugiat animi error delectus eveniet repellat, omnis quae porro, praesentium ratione magnam."
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

        // return $post;
        return $posts->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
   private static $blog_post = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repudiandae accusantium possimus natus, dicta in veritatis et? Quibusdam ratione praesentium maxime similique! Animi minus asperiores soluta? Doloremque impedit libero unde sequi quod. Aliquid sunt harum aut ab facere eveniet culpa unde sint pariatur autem repellat exercitationem, reprehenderit ratione voluptatum labore corporis repudiandae. Quos, blanditiis a veniam totam temporibus obcaecati eius quam ipsum, officiis expedita dolores aliquam repudiandae perferendis fuga natus eos, neque est nulla nesciunt molestiae animi vitae reprehenderit! Distinctio accusantium id officia molestias asperiores laudantium commodi necessitatibus cum magnam, odit placeat, vel eligendi nemo veniam unde quos facilis est."
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Riefah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repudiandae accusantium possimus natus, dicta in veritatis et? Quibusdam ratione praesentium maxime similique! Animi minus asperiores soluta? Doloremque impedit libero unde sequi quod. Aliquid sunt harum aut ab facere eveniet culpa unde sint pariatur autem repellat exercitationem, reprehenderit ratione voluptatum labore corporis repudiandae. Quos, blanditiis a veniam totam temporibus obcaecati eius quam ipsum, officiis expedita dolores aliquam repudiandae perferendis fuga natus eos, neque est nulla nesciunt molestiae animi vitae reprehenderit! Distinctio accusantium id officia molestias asperiores laudantium commodi necessitatibus cum magnam, odit placeat, vel eligendi nemo veniam unde quos facilis est."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        // if($p["slug"] === $slug) {
        // $post = $p;
//     }
// }

        return $posts->firstWhere('slug', $slug);

return $post;
    }
}

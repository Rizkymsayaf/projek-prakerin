<?php

namespace App\Models;


class Post
{

  private  static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky M ",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic ab officia libero, reprehenderit
            debitis fuga odit excepturi dolores voluptates aperiam, porro ipsam consectetur iure quas magnam iusto dicta quos harum consequuntur perferendis veritatis amet tenetur delectus? At cumque libero necessitatibus perferendis, rem distinctio quidem? Eius sint, eaque minus culpa, accusamus enim, necessitatibus alias aut ea veniam distinctio excepturi aperiam in tenetur quidem saepe odit natus repellendus aspernatur? Possimus libero magni bea
            tae, nesciunt, recusandae hic, quae totam delectus culpa vitae voluptatem"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy ",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic ab officia libero, reprehenderit
            debitis fuga odit excepturi dolores voluptates aperiam, porro ipsam consectetur iure quas magnam iusto dicta quos harum consequuntur perferendis veritatis amet tenetur delectus? At cumque libero necessitatibus perferendis, rem distinctio quidem? Eius sint, eaque minus culpa, accusamus enim, necessitatibus alias aut ea veniam distinctio excepturi aperiam in tenetur quidem saepe odit natus repellendus aspernatur? Possimus libero magni bea
            tae, nesciunt, recusandae hic, quae totam delectu?"
        ],
    ];

    public static function all(){
             return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
    //      $post = [];
    // foreach ($posts as $p){
    //     if($p["slug"] === $slug){
    //        $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);




    }
}

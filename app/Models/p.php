<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Bima Rigantara", 
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis suscipit quidem magni nemo voluptas impedit vitae incidunt error labore inventore excepturi, id dolores accusantium placeat ab non sit dolorum expedita tempora. Laborum, consectetur necessitatibus quam officia natus veniam maxime eveniet consequuntur reprehenderit error nobis eius? Exercitationem cum porro natus expedita?"
        
        
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Stevanus Satria ", 
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit minus vitae doloribus, omnis laboriosam molestias! Excepturi sit nemo labore vero voluptas tempora est ex itaque ad, velit dolores nobis cupiditate, aliquam fuga pariatur vitae reprehenderit quo quos atque molestias dolor laborum magnam! Excepturi iusto ea harum debitis quisquam voluptatibus illo perferendis ab dolor rerum obcaecati, placeat dolorum? Autem, officia. Tenetur, fugit. Minus cum tempore necessitatibus ut doloribus. Reiciendis eligendi iure numquam delectus dolore unde obcaecati laboriosam ducimus dolor. Repudiandae deserunt placeat dolore aspernatur! Soluta blanditiis beatae corporis cupiditate dolor? Facere, ullam consequatur veritatis reiciendis ut dolore adipisci rem. Ab, dolor."
        
            ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }
    
        public static function find($slug)
        {
            $posts = static::all();
        //     $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //         }
        //     }
            return $posts->firstWhere('slug', $slug);
        }

}

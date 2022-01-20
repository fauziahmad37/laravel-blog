<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Fauzi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, animi. Facilis, 
            qui velit deleniti culpa et mollitia impedit optio cumque ullam iste magni sint temporibus iure corporis dicta amet eligendi 
            necessitatibus nam est perspiciatis eum blanditiis quibusdam? Vero veritatis illum, possimus quod magni culpa aliquid aut saepe, 
            iste voluptatem nemo officiis minus quidem beatae, explicabo odit velit! Itaque, cupiditate. Nobis, velit harum commodi repellendus
             enim nihil molestiae atque facere? Repudiandae modi mollitia nam expedita velit hic quidem aliquam cupiditate cumque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dody Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor neque ipsam hic iste quibusdam error 
            commodi perferendis beatae. Explicabo, accusamus cumque. Cupiditate, saepe quas hic sunt debitis illo recusandae 
            adipisci aliquam delectus numquam optio quae? Commodi quam porro distinctio rerum illo incidunt, consequuntur tempore 
            aliquid veritatis iusto iure est sapiente hic, dolores voluptatibus laboriosam accusamus, voluptatem similique facilis! 
            Debitis nulla tempore dolorum. Qui ut eos eveniet veritatis, temporibus impedit perspiciatis? Nemo harum, earum magnam non 
            labore officiis ipsa facilis deleniti! Inventore, ipsa porro incidunt aliquid, labore quidem ea facilis architecto excepturi 
            ullam commodi. Dolores dignissimos quis, aliquid minima aut a."
        ]
    
        ];
    
        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();

            // $post = [];
            // foreach($posts as $p){
            //     if($p["slug"] ===  $slug ){
            //         $post = $p; 
            //     }
            // }
            return $posts->firstWhere('slug', $slug);
        }
}

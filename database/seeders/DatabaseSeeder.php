<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddyferdiansyah@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    
        

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione. Perferendis beatae odio animi assumenda maxime quia sunt, facere ipsa doloribus cupiditate sit voluptatibus praesentium dolorem! Aliquid, atque non ipsa laborum nam dicta. Eius amet non exercitationem, praesentium vero doloremque tempora voluptatem totam ea nostrum minus incidunt. Fugit vero sequi quia ut fuga saepe quidem rem molestias cumque obcaecati. Praesentium rem repellendus molestias eligendi, repudiandae hic sint pariatur expedita amet cumque officiis dolore veritatis! Nostrum eligendi a debitis. Tenetur, et dolor nam error aspernatur mollitia impedit sunt vel pariatur ducimus optio commodi eaque veritatis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione. Perferendis beatae odio animi assumenda maxime quia sunt, facere ipsa doloribus cupiditate sit voluptatibus praesentium dolorem! Aliquid, atque non ipsa laborum nam dicta. Eius amet non exercitationem, praesentium vero doloremque tempora voluptatem totam ea nostrum minus incidunt. Fugit vero sequi quia ut fuga saepe quidem rem molestias cumque obcaecati. Praesentium rem repellendus molestias eligendi, repudiandae hic sint pariatur expedita amet cumque officiis dolore veritatis! Nostrum eligendi a debitis. Tenetur, et dolor nam error aspernatur mollitia impedit sunt vel pariatur ducimus optio commodi eaque veritatis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione. Perferendis beatae odio animi assumenda maxime quia sunt, facere ipsa doloribus cupiditate sit voluptatibus praesentium dolorem! Aliquid, atque non ipsa laborum nam dicta. Eius amet non exercitationem, praesentium vero doloremque tempora voluptatem totam ea nostrum minus incidunt. Fugit vero sequi quia ut fuga saepe quidem rem molestias cumque obcaecati. Praesentium rem repellendus molestias eligendi, repudiandae hic sint pariatur expedita amet cumque officiis dolore veritatis! Nostrum eligendi a debitis. Tenetur, et dolor nam error aspernatur mollitia impedit sunt vel pariatur ducimus optio commodi eaque veritatis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis et voluptas enim neque eius, dicta ratione. Perferendis beatae odio animi assumenda maxime quia sunt, facere ipsa doloribus cupiditate sit voluptatibus praesentium dolorem! Aliquid, atque non ipsa laborum nam dicta. Eius amet non exercitationem, praesentium vero doloremque tempora voluptatem totam ea nostrum minus incidunt. Fugit vero sequi quia ut fuga saepe quidem rem molestias cumque obcaecati. Praesentium rem repellendus molestias eligendi, repudiandae hic sint pariatur expedita amet cumque officiis dolore veritatis! Nostrum eligendi a debitis. Tenetur, et dolor nam error aspernatur mollitia impedit sunt vel pariatur ducimus optio commodi eaque veritatis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
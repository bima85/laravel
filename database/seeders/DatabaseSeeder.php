<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            User::create([
                    'name' => 'Bima Rigantara',
                    'username' => 'bimarigantara',
                    'email' => 'xaverius@gmail.com',
                    'password' => bcrypt('1234')
                ]); 
                // User::create([
                    //     'name' => 'Stevanus',
                    //     'email' => 'evan@gmail.com',
                    //     'password' => bcrypt('1234')
                    // ]); 
                    
            User::factory(3)->create();

            Category::create([
                'name' => 'Programming',
                'slug' => 'programming'
            ]);
            Category::create([
                'name' => 'Web Desain',
                'slug' => 'web-desain'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);

            Post::factory(20)->create();

            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero',
            //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero, dignissimos beatae hic eligendi fuga sed dolorem velit fugiat nobis non sapiente quaerat ullam iure assumenda vel dolores officiis, unde consequatur! Cum sed fugit assumenda est ea doloribus ullam esse iusto corporis inventore possimus maxime ipsum tempora, eos quis. Doloremque aperiam enim debitis ut. Odio nemo sed sapiente consectetur quisquam autem totam similique, animi dolorem quia, sint repellat non vero deserunt minima eaque aperiam dignissimos quod eveniet fugiat sit corporis. Voluptatum, asperiores neque esse at quidem sunt ea, corporis hic error nisi molestias exercitationem facere fugiat.',
            //     'category_id' => 1,
            //     'user_id' => 1   

            // ]);
            // Post::create([
            //     'title' => 'Judul Ke Dua',
            //     'slug' => 'judul-ke-dua',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero',
            //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero, dignissimos beatae hic eligendi fuga sed dolorem velit fugiat nobis non sapiente quaerat ullam iure assumenda vel dolores officiis, unde consequatur! Cum sed fugit assumenda est ea doloribus ullam esse iusto corporis inventore possimus maxime ipsum tempora, eos quis. Doloremque aperiam enim debitis ut. Odio nemo sed sapiente consectetur quisquam autem totam similique, animi dolorem quia, sint repellat non vero deserunt minima eaque aperiam dignissimos quod eveniet fugiat sit corporis. Voluptatum, asperiores neque esse at quidem sunt ea, corporis hic error nisi molestias exercitationem facere fugiat.',
            //     'category_id' => 1,
            //     'user_id' => 1   

            // ]);
            // Post::create([
            //     'title' => 'Judul Ke Tiga',
            //     'slug' => 'judul-ke-tiga',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero',
            //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero, dignissimos beatae hic eligendi fuga sed dolorem velit fugiat nobis non sapiente quaerat ullam iure assumenda vel dolores officiis, unde consequatur! Cum sed fugit assumenda est ea doloribus ullam esse iusto corporis inventore possimus maxime ipsum tempora, eos quis. Doloremque aperiam enim debitis ut. Odio nemo sed sapiente consectetur quisquam autem totam similique, animi dolorem quia, sint repellat non vero deserunt minima eaque aperiam dignissimos quod eveniet fugiat sit corporis. Voluptatum, asperiores neque esse at quidem sunt ea, corporis hic error nisi molestias exercitationem facere fugiat.',
            //     'category_id' => 2,
            //     'user_id' => 2   

            // ]);
            // Post::create([
            //     'title' => 'Judul Ke Empat',
            //     'slug' => 'judul-ke-empat',
            //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero',
            //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta aut ipsam suscipit dolore vero, dignissimos beatae hic eligendi fuga sed dolorem velit fugiat nobis non sapiente quaerat ullam iure assumenda vel dolores officiis, unde consequatur! Cum sed fugit assumenda est ea doloribus ullam esse iusto corporis inventore possimus maxime ipsum tempora, eos quis. Doloremque aperiam enim debitis ut. Odio nemo sed sapiente consectetur quisquam autem totam similique, animi dolorem quia, sint repellat non vero deserunt minima eaque aperiam dignissimos quod eveniet fugiat sit corporis. Voluptatum, asperiores neque esse at quidem sunt ea, corporis hic error nisi molestias exercitationem facere fugiat.',
            //     'category_id' => 2,
            //     'user_id' =>2  

            // ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // User::create([
        //     'name' => 'Tedd404',
        //     'email' => 'tedd404@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Tedd666',
        //     'email' => 'tedd666@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Website',
            'slug' => 'website'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut quos numquam eius animi laboriosam adipisci nesciunt asperiores',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, animi dignissimos. Reprehenderit sed tempore commodi officia perspiciatis, illum necessitatibus, eveniet veritatis obcaecati ipsum iusto aut autem! Tenetur sit placeat aliquam aliquid.</p> <p> Culpa quia cumque repudiandae! Tempora veniam sequi explicabo. Nisi sed odio repellat adipisci? Nam ratione odio dolorem natus adipisci dicta quasi facilis, perspiciatis itaque praesentium pariatur ipsum tenetur illo nisi nesciunt hic sed? Explicabo </p> <p> voluptates magnam accusantium incidunt nulla blanditiis amet natus esse assumenda! Praesentium, enim officiis. Mollitia ratione vitae dolorum veniam eligendi, libero fugiat perspiciatis iure, eveniet pariatur natus, nemo provident temporibus soluta? Necessitatibus optio ex aliquid inventore!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut quos numquam eius animi laboriosam adipisci nesciunt asperiores',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, animi dignissimos. Reprehenderit sed tempore commodi officia perspiciatis, illum necessitatibus, eveniet veritatis obcaecati ipsum iusto aut autem! Tenetur sit placeat aliquam aliquid.</p> <p> Culpa quia cumque repudiandae! Tempora veniam sequi explicabo. Nisi sed odio repellat adipisci? Nam ratione odio dolorem natus adipisci dicta quasi facilis, perspiciatis itaque praesentium pariatur ipsum tenetur illo nisi nesciunt hic sed? Explicabo </p> <p> voluptates magnam accusantium incidunt nulla blanditiis amet natus esse assumenda! Praesentium, enim officiis. Mollitia ratione vitae dolorum veniam eligendi, libero fugiat perspiciatis iure, eveniet pariatur natus, nemo provident temporibus soluta? Necessitatibus optio ex aliquid inventore!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut quos numquam eius animi laboriosam adipisci nesciunt asperiores',
        //     'body' => '<p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, animi dignissimos. Reprehenderit sed tempore commodi officia perspiciatis, illum necessitatibus, eveniet veritatis obcaecati ipsum iusto aut autem! Tenetur sit placeat aliquam aliquid.</p> <p> Culpa quia cumque repudiandae! Tempora veniam sequi explicabo. Nisi sed odio repellat adipisci? Nam ratione odio dolorem natus adipisci dicta quasi facilis, perspiciatis itaque praesentium pariatur ipsum tenetur illo nisi nesciunt hic sed? Explicabo </p> <p> voluptates magnam accusantium incidunt nulla blanditiis amet natus esse assumenda! Praesentium, enim officiis. Mollitia ratione vitae dolorum veniam eligendi, libero fugiat perspiciatis iure, eveniet pariatur natus, nemo provident temporibus soluta? Necessitatibus optio ex aliquid inventore!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}

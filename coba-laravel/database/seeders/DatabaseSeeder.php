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
        //     'name' => 'Erlang Gilar',
        //     'email'=> 'erlang.pamungkas@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Liam Galagher',
        //     'email'=> 'Liam.galagher@gmail.com',
        //     'password'=> bcrypt('12345')
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
        //     'title'=> 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni laboriosam natus nulla voluptatibus illum atque assumenda quo inventore totam expedita molestiae tempore, veritatis repellendus accusantium delectus. Voluptas quae quidem sequi placeat maiores, fuga quos tenetur molestias dolorem! Obcaecati, officia ex laboriosam odio cupiditate eveniet autem in tempora possimus, fugiat earum minus. Iste voluptatum praesentium tenetur ab minus distinctio eius, ipsam temporibus, officiis dolorum commodi nihil libero iusto quia id? Error ullam nostrum sed quas, quo quam voluptatum ipsum distinctio aspernatur accusamus ratione et facere expedita molestias repellat consequatur illo voluptates itaque! Officia, placeat quidem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni laboriosam natus nulla voluptatibus illum atque assumenda quo inventore totam expedita molestiae tempore, veritatis repellendus accusantium delectus. Voluptas quae quidem sequi placeat maiores, fuga quos tenetur molestias dolorem! Obcaecati, officia ex laboriosam odio cupiditate eveniet autem in tempora possimus, fugiat earum minus. Iste voluptatum praesentium tenetur ab minus distinctio eius, ipsam temporibus, officiis dolorum commodi nihil libero iusto quia id? Error ullam nostrum sed quas, quo quam voluptatum ipsum distinctio aspernatur accusamus ratione et facere expedita molestias repellat consequatur illo voluptates itaque! Officia, placeat quidem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni laboriosam natus nulla voluptatibus illum atque assumenda quo inventore totam expedita molestiae tempore, veritatis repellendus accusantium delectus. Voluptas quae quidem sequi placeat maiores, fuga quos tenetur molestias dolorem! Obcaecati, officia ex laboriosam odio cupiditate eveniet autem in tempora possimus, fugiat earum minus. Iste voluptatum praesentium tenetur ab minus distinctio eius, ipsam temporibus, officiis dolorum commodi nihil libero iusto quia id? Error ullam nostrum sed quas, quo quam voluptatum ipsum distinctio aspernatur accusamus ratione et facere expedita molestias repellat consequatur illo voluptates itaque! Officia, placeat quidem.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aut odio consequuntur voluptates fugit magni laboriosam natus nulla voluptatibus illum atque assumenda quo inventore totam expedita molestiae tempore, veritatis repellendus accusantium delectus. Voluptas quae quidem sequi placeat maiores, fuga quos tenetur molestias dolorem! Obcaecati, officia ex laboriosam odio cupiditate eveniet autem in tempora possimus, fugiat earum minus. Iste voluptatum praesentium tenetur ab minus distinctio eius, ipsam temporibus, officiis dolorum commodi nihil libero iusto quia id? Error ullam nostrum sed quas, quo quam voluptatum ipsum distinctio aspernatur accusamus ratione et facere expedita molestias repellat consequatur illo voluptates itaque! Officia, placeat quidem.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

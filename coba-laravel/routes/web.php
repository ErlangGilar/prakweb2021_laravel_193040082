<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Erlang Gilar",
        "email"=> "erlang.pamungkas@gmail.com",
        "image"=> "fotoerlang.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Erlang Gilar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eos voluptates ad libero numquam perferendis quibusdam voluptatem quidem vero similique modi provident, illum, sint delectus nisi quaerat deleniti distinctio nostrum corporis. Quos eos porro iusto tempora hic velit, harum culpa iste natus dolores earum, dolorem ullam debitis ducimus accusantium totam ipsam. Eum dolorem placeat iusto odit dicta libero repellat, hic consequuntur est error mollitia vel ducimus molestiae doloribus porro, sequi aspernatur nisi soluta maiores nulla ut fugit voluptates iste. Eligendi."
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Liam",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias non repellat laudantium, aspernatur at unde quam vitae voluptatem. Maxime consectetur perspiciatis quis corrupti illum. Nulla maxime deserunt ut, quasi explicabo natus modi atque expedita inventore ab quis in quo ipsa numquam. Repudiandae, fugit. Veritatis, quia dolorem ducimus fuga perspiciatis deserunt doloremque debitis quas modi, laboriosam deleniti atque beatae ipsam earum optio suscipit amet, asperiores tempore nesciunt! Facilis minima totam repellendus iste ad ducimus accusantium earum doloribus sint, dolor, asperiores necessitatibus ut rem illum nisi ipsum inventore id, delectus architecto provident aliquid vel non. Numquam, itaque perferendis saepe et ratione temporibus?"
    
        ],
    
    ];
    
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Erlang Gilar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eos voluptates ad libero numquam perferendis quibusdam voluptatem quidem vero similique modi provident, illum, sint delectus nisi quaerat deleniti distinctio nostrum corporis. Quos eos porro iusto tempora hic velit, harum culpa iste natus dolores earum, dolorem ullam debitis ducimus accusantium totam ipsam. Eum dolorem placeat iusto odit dicta libero repellat, hic consequuntur est error mollitia vel ducimus molestiae doloribus porro, sequi aspernatur nisi soluta maiores nulla ut fugit voluptates iste. Eligendi."
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Liam",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias non repellat laudantium, aspernatur at unde quam vitae voluptatem. Maxime consectetur perspiciatis quis corrupti illum. Nulla maxime deserunt ut, quasi explicabo natus modi atque expedita inventore ab quis in quo ipsa numquam. Repudiandae, fugit. Veritatis, quia dolorem ducimus fuga perspiciatis deserunt doloremque debitis quas modi, laboriosam deleniti atque beatae ipsam earum optio suscipit amet, asperiores tempore nesciunt! Facilis minima totam repellendus iste ad ducimus accusantium earum doloribus sint, dolor, asperiores necessitatibus ut rem illum nisi ipsum inventore id, delectus architecto provident aliquid vel non. Numquam, itaque perferendis saepe et ratione temporibus?"
    
        ],
    
    ];
    
    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

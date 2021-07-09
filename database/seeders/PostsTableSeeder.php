<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Post::truncate();
        Category::truncate();

        $category = new Category();
        $category->name = "Finanzas";
        $category->save();

        $category = new Category();
        $category->name = "Tecnologia";
        $category->save();
        
        $post = new Post();
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "Contenido de mi primer post";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "Mi segundo post";
        $post->excerpt = "Extracto de mi segundo post";
        $post->body = "Contenido de mi segundo post";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 2;
        $post->save();

        $post = new Post();
        $post->title = "Mi tercer post";
        $post->excerpt = "Extracto de mi tercer post";
        $post->body = "Contenido de mi tercer post";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->save();

        $post = new Post();
        $post->title = "Mi cuarto post";
        $post->excerpt = "Extracto de mi cuarto post";
        $post->body = "Contenido de mi cuarto post";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 2;
        $post->save();

    }
}

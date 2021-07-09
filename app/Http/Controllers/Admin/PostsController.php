<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index')->with(compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.create')->with(compact('categories'))->with(compact('tags'));
    }

    public function store(Request $request)
    {
        $messages = [
            'body.required' => 'El campo de contenido es obligatorio',
            'excerpt.required' => 'El campo de extracto es obligatorio'
        ];
        
        $rules = [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'excerpt' => 'required',
            'tags' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->excerpt = $request->excerpt;
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->published_at) : null;
        $post->category_id = $request->category;

        $post->save();

        $post->tags()->attach($request->tags);

        return back()->with('flash', 'tu publicación ha sido creada');
    }
}

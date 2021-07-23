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

    /*public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.create')->with(compact('categories'))->with(compact('tags'));
    }*/

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);

        $post = Post::create([
            'title' => $request->get('title'),
            'url' => str_slug($request->title)
        
        ]);

        return redirect()->route('admin.posts.edit',compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit')->with(compact('categories'))->with(compact('tags'))->with(compact('post'));
        
    }

    public function update(Post $post, Request $request)
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
        
        $post->title = $request->title;
        $post->url = str_slug($request->title);
        $post->body = $request->body;
        $post->excerpt = $request->excerpt;
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->published_at) : null;
        $post->category_id = $request->category;

        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('admin.posts.edit', $post)->with('flash', 'tu publicación ha sido guardada');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Carbon\Carbon;
use App\Http\Requests\StorePostRequest;


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

        $post = Post::create($request->only('title'));

        return redirect()->route('admin.posts.edit',compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit')->with(compact('categories'))->with(compact('tags'))->with(compact('post'));
        
    }

    public function update(Post $post, StorePostRequest $request)
    {
        //return $request->all();
        /*$messages = [
            'body.required' => 'El campo de contenido es obligatorio',
            'excerpt.required' => 'El campo de extracto es obligatorio'
        ];
        
        $rules = [
            
        ];
        $this->validate($request, $rules, $messages);
        */

        $post->title = $request->title;        
        $post->body = $request->body;
        $post->iframe = $request->iframe;
        $post->excerpt = $request->excerpt;
        $post->published_at = $request->published_at;
        $post->category_id = $request->category;


        $post->save();

        $tags = collect($request->get('tags'))->map(function($tag){
            return Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;
        });

        
        $post->tags()->sync($tags);

        return redirect()->route('admin.posts.edit', $post)->with('flash', 'tu publicación ha sido guardada');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return back();
    }
}

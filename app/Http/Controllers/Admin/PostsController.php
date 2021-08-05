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
        $post->url = str_slug($request->title)."-{$post->id}";
        $post->save();        

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
        
        $post->update($request->except('tags', 'files'));

        $post->syncTags($request->get('tags'));

        return redirect()->route('admin.posts.edit', $post)->with('flash', 'La publicación ha sido guardada');
    }

    public function delete($id)
    {
        $post = Post::find($id);        

        $post->delete();

        return redirect()->route('admin.posts.index')->with('flash', 'La publicación ha sido eliminada');
    }
}

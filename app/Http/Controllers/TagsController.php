<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {

        $posts = $tag->posts()->paginate();
        $title = "Publicaciones de la etiqueta ".$tag->name;

        return view('pages.home')->with(compact('posts'))->with(compact('title'));
    }
}

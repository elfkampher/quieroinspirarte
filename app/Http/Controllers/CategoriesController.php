<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {

        $posts = $category->posts()->paginate();
        $title = "Publicaciones de la categoria ".$category->name;

        return view('pages.home')->with(compact('posts'))->with(compact('title'));
    }
}

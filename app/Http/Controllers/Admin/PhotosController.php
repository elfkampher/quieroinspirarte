<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [
            'photo' => 'required|image|max:2048|'
        ]);        



        Photo::create([
            'url' => Storage::url(request()->file('photo')->store('posts','public')),
            'post_id' => $post->id
        ]);    

    }

    public function deletephoto(Request $request)
    {
        if($request->ajax()){ 
            $photo = Photo::find($request->id);            
            
            $photo->delete();
        }

        return back()->with('flash', 'Foto eliminada');
    }
}

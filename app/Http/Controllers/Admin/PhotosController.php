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

        $photo = request()->file('photo')->store('public');

        $photoUrl = Storage::url($photo);

        Photo::create([
            'url' => Storage::url($photo),
            'post_id' => $post->id
        ]);    

    }

    public function deletephoto(Request $request)
    {
        if($request->ajax()){ 
            $photo = Photo::find($request->id);            
            $photoPath = str_replace('storage', 'public', $photo->url);
            Storage::delete($photoPath);
            $photo->delete();
        }

        return back()->with('flash', 'Foto eliminada');
    }
}

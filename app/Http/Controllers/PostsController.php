<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{
    // requires authorization, protects the route
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        /**
         * Image resizing but not actually resizing the actual image
         * using the component Intervention/Image
         */
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // takes the current logged in user's id, then insert along with the array of data
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(\App\Post $post) 
    {
        return view('posts.show', compact('post'));
    }
}

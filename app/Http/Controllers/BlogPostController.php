<?php

namespace App\Http\Controllers;

use App\Models\Post; // Pastikan Anda sudah membuat model Post
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $relatedPosts = Post::where('id', '!=', $id)->take(3)->get(); // Ambil 3 post terkait
        return view('post', compact('post', 'relatedPosts'));
    }
}
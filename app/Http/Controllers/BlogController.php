<?php

namespace App\Http\Controllers;

use App\Models\Post; // Pastikan Anda sudah membuat model Post
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Ambil semua post dari database
        return view('blog', compact('posts'));
    }
}
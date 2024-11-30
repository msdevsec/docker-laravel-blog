<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // Show single post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Show create form
    public function create()
    {
        return view('posts.create');
    }

    // Store new post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'youtube_id' => 'nullable|max:255',
            'is_premium' => 'boolean',
            'premium_content' => 'nullable'
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    // Search posts
    public function search(Request $request)
    {
        $query = $request->get('q');
        
        $posts = Post::where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->latest()
            ->get();
            
        return view('posts.index', compact('posts'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Validator;


class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

          Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);
        

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

       if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'content' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('posts.index')
                ->withErrors($validator)
                ->withInput()
                ->with([
                    'edit_error' => true,
                    'edit_post_id' => $post->id, 
                ]);
    }

    $post->update($request->only('title', 'content'));

    return redirect()
        ->route('posts.index')
        ->with('update', 'Post updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Post $post)
{
    $post->delete();

    return redirect()
        ->route('posts.index')
        ->with('delete', 'Post deleted successfully');
}
public function apiIndex()
{
    $posts = Post::with('user')->latest()->get();

    return response()->json($posts);
}
}

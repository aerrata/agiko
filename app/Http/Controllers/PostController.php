<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        return inertia('Post/Index', [
            'posts' => Post::query()
                ->with('author')
                ->when($r->type, function ($q, $r) {
                    $q->where('meta->type', $r);
                })
                ->when($r->trashed, function ($q) {
                    $q->onlyTrashed();
                })
                ->latest()
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Post/Modify', [
            'post' => new Post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $r
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $r)
    {
        $post = Post::create([
            'meta' => $r->validated(),
            'meta->author_id' => auth()->user()->id,
        ]);

        $post->addMediaFromRequest('image_url')->toMediaCollection();

        return redirect()->route('post.index')->with('success', 'Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        abort_if(!$post->meta?->published, 404);

        $view = match ($post->meta?->type) {
            'article' => 'post.show',
            'event' => 'post.show',
        };

        return view($view, [
            'post' => $post->load('author')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return inertia('Post/Modify', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $r
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $r, Post $post)
    {
        $post->update([
            'meta' => $r->validated(),
            'meta->author_id' => auth()->user()->id,
        ]);

        if ($r->hasFile('image_url')) {
            if ($post->getFirstMedia()) {
                $post->getFirstMedia()->delete();
            }
            $post->addMediaFromRequest('image_url')->toMediaCollection();
        }

        return back()->with('success', 'Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Deleted!');
    }

    public function restore(Post $post)
    {
        $post->restore();

        return back()->with('success', 'Restored!');
    }
}

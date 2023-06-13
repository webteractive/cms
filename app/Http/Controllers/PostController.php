<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        // $authors = User::all();

        // return view('post.index', compact(['posts', 'authors']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        switch ($request->get('submitbutton')) {
            case 'publish':$publish = Carbon::now();$post = Post::create(['user_id' => $request->user()->id,'title' => $request->title,'slug' => $request->slug,'summary' => $request->summary,'content' => $request ->content,'category' => $request ->category,'published_at' => $publish,
                ]);
                break;
                case 'draft':$post = Post::create(['user_id' => $request->user()->id,'title' => $request->title,'slug' => $request->slug,'summary' => $request->summary,'content' => $request ->content,'category' => $request ->category,
                    ]);
                    break;}
  
  
          return redirect (route('post.index'));
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
    public function edit(Post $post)
    { $author = User::find($post->user_id);
        return view('post.edit', compact(['post','author']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

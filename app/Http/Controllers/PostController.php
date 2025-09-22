<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPost;
use Illuminate\Support\Facades\Auth;    
//use Illuminate\Support\Facades\Gate;    
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    //
    use AuthorizesRequests;
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = UserPost::all();
        //
        //$posts = UserPost::where('user_id', Auth::user()->id)->get();
        //
        return view('post_view', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
        //$user = Auth::user();
        //
        //$post = UserPost::findOrFail($id);
        //
        // AppServiceProvider
        /*if(Gate::allows('user-post', $post)){
            //
            return view('post_edit', compact('post'));
        }else{
            //
            abort(403, 'Access denied');
            //
            //redirect()->route('post.index');
        }*/
        //
        //Gate::authorize('user-post', $post);
        //
        /*if(Gate::denies()){
            //
            abort(403, 'Access denied');
        }else{
            //
            return view('post_edit', compact('post'));
        }*/
        // AuthServiceProvider
        //
        $userPost = UserPost::findOrFail($id);
        //
        $this->authorize('update', $userPost);
        //
        $post = $userPost;
        //
        return view('post_edit', compact('post'));
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

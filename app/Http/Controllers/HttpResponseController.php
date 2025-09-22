<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumninate\Support\Facades\Storage;

class HttpResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return "Post Index";
        //
        //return redirect('post/create', 302);
        //
        //return redirect()->route('post.show', ['post' => 1]);
        //
        //return to_route('post.show', ['post' => 1]);
        //
        //return redirect()->route([HttpResponseController::class, 'show'], ['post' => 1]);
        //
        //return redirect()->action([HttpResponseController::class, 'show'], ['post' => 1 ]);
        //
        //return redirect()->away('https://www.google.com');
        //
        //return redirect()->back();
        //
        //return redirect()->route('post.show', ['post' => 1]);
        //
        //return ["Laravel Developer" => "Taylor Otwell"];
        //
        //return response(["Laravel Developer" => "Taylor Otwell"], 200);
        //
        /*return response()->json([
            "Laravel Developer" => "Taylor Otwell"
        ], 200);*/
        //
        //
        //$publicPath = public_path('uploads/elon_musk.jpeg');
        //
        /*if(!file_exists($publicPath)){
            //
            abort(404, 'File not found!');
        }*/
        //
        /*return response()->download(public_path('uploads/elon_musk.jpeg'),
        [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline',
        ]);*/
        //
        return response()->file(public_path('uploads/elon_musk.jpeg'),
        [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "Post Create";
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
        return "Post Show with ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

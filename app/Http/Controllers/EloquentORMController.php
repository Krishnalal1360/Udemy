<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentORMController extends Controller
{
    //
    public function eloquentORM(){
        //hasOne() -> belongsTo()
        /*$address = DB::table('users')
                       ->join('addresses', 'users.id', '=', 'addresses.user_id')
                       ->select('users.id', 'users.name', 'users.email', 'addresses.user_id', 'addresses.country')
                       ->get();*/
        //
        //dd($address);
        //hasMany() -> belongsTo()
        /*$product = DB::table('users')->join('products', 'users.id', '=', 'products.user_id')
                                     ->select('users.id', 'users.name', 'users.email', 'products.user_id', 'products.name', 'products.price')
                                     ->get();*/
        //
        //dd($product);
        //
        $post_tag = DB::table('posts')->join('post_tag', 'posts.id', '=', 'post_tag.post_id')
                                      ->join('tags', 'post_tag.tag_id', '=', 'tags.id')
                                      ->select('posts.id', 'posts.title', 'posts.content', 'tags.id', 'tags.name')
                                      ->get();
        //
        dd($post_tag);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\User;
//use App\Models\Product;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    //
    public function queryBuilder(){
        //
        //$product = DB::table('products')->get();
        //
        //$product = DB::table('products')->pluck('name')->first();
        //
        //$product = DB::table('products')->pluck('name');
        //
        //$product = DB::table('products')->where('user_id', 2)->first();
        //
        //$product = DB::table('products')->where('user_id', 2)->get();
        //
        //$product = DB::table('products')->select('name', 'price')->first();
        //
        //$product = DB::table('products')->select('name', 'price')->get();
        //
        /*$product = DB::table('products')->where('user_id', 2)
                                        ->where('name', 'reprehenderit ipsum dolorem culpa sit')
                                        ->get();*/
        //
        /*$product = DB::table('products')->where('user_id', 2)
                                        ->orWhere('name', 'reprehenderit ipsum dolorem culpa sit')
                                        ->get();*/
        //
        /*$product = DB::table('products')->whereBetween('price', [1000, 5000])
                                        ->get();*/
        //
        /*$product = DB::table('products')->whereIn('user_id', [1, 2, 3, 4, 5])
                                        ->get();*/
        //
        /*$product = DB::table('products')->whereNull('deleted_at')
                                        ->get();*/
        //
        /*$product = DB::table('products')->where('price', '>', 5000)
                                        ->get();*/
        //
        /*$product = DB::table('products')->where('name', 'LIKE', '%dolorem%')
                                        ->get();*/
        //
        /*$product = DB::table('products')->where('price', '<', 5000)
                                        ->orderBy('price', 'asc')
                                        ->get();*/
        //
        /*$product = DB::table('products')->where('price', '<', 5000)
                                        ->orderBy('price', 'desc')
                                        ->get();*/
        //
        /*$product = DB::table('products')->select('user_id', DB::raw('COUNT(*) AS FREQUENCY'))
                                        ->groupBy('user_id')
                                        ->having('FREQUENCY', '>', 1)
                                        ->orderBy('user_id', 'DESC')
                                        ->get();*/
        //
        /*$product = DB::table('products')->select('user_id', DB::raw('MIN(price) AS MINIMUM_PRICE'))
                                        ->groupBy('user_id')
                                        ->having('MINIMUM_PRICE', '<', 5000)
                                        ->orderBy('MINIMUM_PRICE', 'ASC')
                                        ->get();*/
        //
        /*$product = DB::table('products')->select('user_id', DB::raw('MAX(price) AS MAXIMUM_PRICE'))
                                        ->groupBy('user_id')
                                        ->having('MAXIMUM_PRICE', '>', 5000)
                                        ->orderBy('MAXIMUM_PRICE', 'DESC')
                                        ->get();*/
        //
        /*$product = DB::table('products')->select('user_id', DB::raw('SUM(price) AS TOTAL_PRICE'))
                                        ->groupBy('user_id')
                                        ->having('TOTAL_PRICE', '>', 10000)
                                        ->orderBy('TOTAL_PRICE', 'DESC')
                                        ->get();*/
        //
        /*$product = DB::table('products')->select('user_id', DB::raw('AVG(price) AS AVG_PRICE'))
                                        ->groupBy('user_id')
                                        ->having('AVG_PRICE', '>', 5000)
                                        ->orderBy('AVG_PRICE', 'DESC')
                                        ->get();*/
        //
        /*$product = DB::table('users')->join('products', 'users.id', '=', 'products.user_id')
                                     ->select('users.id', 'users.name', 'users.email', 'products.user_id', 'products.name', 'products.price')
                                     ->get();*/
        //
        /*$product = DB::table('users')->leftJoin('products', 'users.id', '=', 'products.user_id')
                                     ->select('users.id', 'users.name', 'users.email', 'products.user_id', 'products.name', 'products.price')
                                     ->get();*/
        //
        /*$product = DB::table('users')->rightJoin('products', 'users.id', '=', 'products.user_id')
                                     ->select('users.id', 'users.name', 'users.email', 'products.user_id', 'products.name', 'products.price')
                                     ->get();*/
        //
        /*$product = DB::table('users')->crossJoin('products', 'users.id', '=', 'products.user_id')
                                     ->select('users.id', 'users.name', 'users.email', 'products.user_id', 'products.name', 'products.price')
                                     ->get();*/
        //
        /*$product = DB::table('products')->insert([
            [
            'user_id' => 1,
            'name' => 'Boat Wireless Air Pods',
            'price' => 5000.00,
            ],
            [
            'user_id' => 1,
            'name' => 'Boat Wireless Headsets',
            'price' => 7000.00,
            ],            
        ]);*/
        //
        //$product = DB::table('products')->get();
        //
        /*$product = DB::table('products')->where('id', 1)->update([
            'name' => 'Android Samsung Galaxy S7',
            'price' => 15000,
        ]);*/
        //
        //$product = DB::table('products')->where('id', 1)->increment('price', 5000.00);
        //
        //$product = DB::table('products')->where('id', 1)->decrement('price', 5000.00);
        //
        //$product = DB::table('products')->whereIn('id', [21, 22])->delete();
        //
        //$product = DB::table('products')->get();
        //
        //$product = DB::table('products')->take(10)->get();
        //
        //$product = DB::table('products')->skip(10)->take(5)->get();
        //
        //$product = DB::table('products')->distinct()->get();
        //
        $product = DB::table('products')->paginate();
        //
        dd($product);
    }
}

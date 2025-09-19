<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Middleware\RoleMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ControllerMiddleware extends Controller implements HasMiddleware
{
    //
    public static function middleware(){
        //
        //return [new Middleware(RoleMiddleware::class, only:['formStore'])];
        //
        return [new Middleware(RoleMiddleware::class, except:['formView'])];
    }

    //
    public function formView(){
        //
        return view('form');
    }
    //
    public function formStore(Request $request){
        //
        dd($request);
        //
        // Validating data from request
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'role' => 'required|string|in:user,admin',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:5',
            ]
        );
        //
        // Saving data into table
        $user = new User();
        //
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //
        $user->save();
        //
        // Showing data
        //dd($user);
        //
        // Redirect back to form
        //return redirect()->route('form.view');
    }
}

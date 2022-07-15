<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tampiluser()
    {
        return view('tampiluser');
    }

    public function tambahuser()
    {
        return view('tambahuser');
    }

    public function simpanuser(Request $request)
    {
//         
// dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
// dd($user);
        return view('test');
    }
}

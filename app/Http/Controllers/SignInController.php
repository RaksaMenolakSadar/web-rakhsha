<?php

namespace App\Http\Controllers;
use App\Models\SignIn;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function readInfo()
    {
        return view('signIn', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    
}


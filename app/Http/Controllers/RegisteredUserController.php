<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use function PHPUnit\Framework\matches;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        //validate
        $Attributes = request()->validate([
            'name' => ['string'],
            'email' => ['required','email'],
            'password' => ['required',password::min(6),'confirmed'],



        ]);

        //create the user
        $user = User::create($Attributes);
        //log in
        Auth::login($user);
        //redirect somewhere
        return redirect('/client');
    }
}

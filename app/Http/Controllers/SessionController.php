<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use function Pest\Laravel\handleValidationExceptions;



class SessionController extends Controller
{
    public function create(){

        return view('auth.login');

    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

          //attempt to login
          if(! Auth::attempt($attributes)) {


            throw ValidationException::withMessages([
                'email' => 'wrong email or password '
            ]);
            }
            
                request()->session()->regenerate();

                return redirect('/client');



    }


    public function destroy(){
        Auth::logout();
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register'); 
    }

    public function store(Request $request) {
        
        $validated = $request->validate([
            "first_name" => 'required|string|max:255',
            "last_name" => 'required|string|max:255',   
            "email" => ['required', 'email', Rule::unique('users', 'email')], 
            "password" => ["required", Password::min(6)->numbers()->letters()->symbols(), "confirmed"],
        ]);
        
        $user = User::create($validated);
        Auth::login($user);
        return redirect("/register");
      }

      public function test()
      {
          return view('auth.test'); 
      }
}


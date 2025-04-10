<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function destroy(Request $request) {
    
        Auth::logout();

        return redirect("/");
      }

    public function create() {
        return view('auth.login'); 
      }
  
    public function store(Request $request) {
    
        $validated = $request->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')], 
            'password' => ['required', 'string', 'min:6'], 
        ]);
        
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                "email" => "Nepareiz e-pasts vai parole"
              ]);        
        }
        
        $request->session()->regenerate();
        return redirect("/");

       }
}

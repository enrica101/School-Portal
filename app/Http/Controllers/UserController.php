<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Registration Form
    public function register(){
        return view('/Users/register');
    }

    // Create and Store New User
    public function store(Request $request){
        $formInputs = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required','confirmed','min:6']
        ]);

        // Hash Password
        $formInputs['password'] = bcrypt($formInputs['password']);

        // Create User
        $user = User::create($formInputs);

        // Login
        auth()->login($user);

        return redirect('/');
    }

    // Logout User
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login(){
        return view('/Users/login');
    }

    // Authenticate User
    public function authenticate(Request $request){
        $formInputs = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formInputs)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}

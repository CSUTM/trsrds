<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create()
    {
        return view('users.register');
    }

    public function store_admin(Request $request)
    {
        $formFields = $request->validate([
            'company_name' => ['required', 'min:2'],
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:4'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = Admin::create($formFields);

        auth()->login($user);
        $token = $user->createToken('myapptoken')->plainTextToken;

        return redirect('/carousel/index')->with('message', 'User created and logged in');
    }


    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:4'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        $token = $user->createToken('myapptoken')->plainTextToken;

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('message', 'You have logged out');
    }



    public function show_admin()
    {
        return view('users.login_admin');
    }

    public function show()
    {
        return view('users.login');
    }

    public function show_blog()
    {
        return view('site.blog');
    }

    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Authenticate admin
    public function authenticate_admin(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/carousel/index')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function apiAuthenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return 1;
        }

        return 0;
    }
}

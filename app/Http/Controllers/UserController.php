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

    // The code smell in the provided code is duplication of similar functionality for creating and storing user data in the store_admin and store methods. To refactor it and eliminate the duplication, you can extract the common logic into a separate method and reuse it. Here's the refactored code:



    private function createUser($formFields, $userModel, $redirectPath)
    {
        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = $userModel::create($formFields);

        auth()->login($user);
        $token = $user->createToken('myapptoken')->plainTextToken;

        return redirect($redirectPath)->with('message', 'User created and logged in');
    }

    public function store_admin(Request $request)
    {
        $formFields = $request->validate([
            'company_name' => ['required', 'min:2'],
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:4'
        ]);

        return $this->createUser($formFields, Admin::class, '/carousel/index');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:4'
        ]);

        return $this->createUser($formFields, User::class, '/');
    }


    // In the refactored code, the createUser method is extracted to handle the common logic for creating a user, hashing the password, logging in the user, and generating a token. The store_admin and store methods now call this createUser method with the appropriate parameters based on their respective models and redirect paths. This approach eliminates code duplication and improves maintainability.


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
            
            $redirectUrl = '/';
            if (auth()->guard('admin')->check()) {
                $redirectUrl = '/carousel/index';
            }
    
            return redirect($redirectUrl)->with('message', 'You are now logged in!');
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

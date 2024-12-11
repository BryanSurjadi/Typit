<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            return redirect('/');
        }

        return redirect()->back()->withErrors(['email' => "Invalid credentials"]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function registerPage()
    {
        return view('register');
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|max:255',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator);
        }

        User::create($validator->validated());

        return redirect('/register')->with('success', 'Account has been created successfully');
    }

    public function profile()
    {
        $blogs = Blog::with('user')
            ->where('user_id', 'LIKE', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        $user = User::find(Auth::user()->id);
        return view('profile', compact('blogs', 'user'));
    }
}

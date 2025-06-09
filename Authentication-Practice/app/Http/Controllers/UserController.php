<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function renderLoginView()
    {
        if (Auth::check()) {
            return $this->renderDashboard();
        } else {
            return view('login');
        }
    }
    public function renderSignupView()
    {
        if (Auth::check()) {
            return $this->renderDashboard();
        } else {
            return view('signup');
        }
    }

    public function renderDashboard()
    {
        if (Auth::check()) {
            $data = Auth::user();
            return view('dashboard', ['data' => $data]);
        } else {
            return redirect(route('login'));
        }
    }
    public function login(Request $req)
    {
        $creds = $req->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);
        if (Auth::attempt($creds)) {
            return redirect(route('user.dashboard'));
        }
    }

    public function signup(Request $req)
    {
        $validated = $req->validate([
            'fname' => 'required | string | max:255',
            'lname' => 'required | string | max:255',
            'email' => 'required | email',
            'password' => 'required | confirmed | max:255',
        ]);

        $res = User::create($validated);

        if ($res) {
            return redirect(route('login'));
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect(route('login'));
        }
    }
    public function updateUser(Request $req)
    {
        $validated = $req->validate([
            'fname' => 'required | string | max:255',
            'lname' => 'required | string | max:255',
            'email' => 'required | email'
        ]);

        $res = User::where('id', $req->id)->update([
            'fname' => $req->fname,
            'lname' => $req->lname,
            'email' => $req->email
        ]);

        if ($res) {
            return redirect(route('user.dashboard'));
        }
    }

    public function updatePass(Request $req)
    {

        $validate = $req->validate([
            'current_password' => 'required',
            'password' => 'required | confirmed | max:255',
        ]);

        if (Hash::check($req->current_password, auth()->user()->password)) {
            $res = User::where('id', Auth::id())->update([
                'password' => Hash::make(value: $req->password),
            ]);
            if ($res) {
                return $this->renderDashboard();
            }
        }

    }
}

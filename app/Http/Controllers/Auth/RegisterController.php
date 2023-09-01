<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'nama' => ['required', 'max:255',],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:12',
        ]);
        $ValidatedData['password'] = Hash::make($ValidatedData['password']);
        User::create($ValidatedData);
        return redirect('/register')
            ->with('success', 'Akun Berhasil Dibuat');
    }
}

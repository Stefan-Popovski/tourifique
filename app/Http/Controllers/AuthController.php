<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function form()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            "email" => ['required', "email:rcf,dns"],
            "password" => ['required', "confirmed", Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);

        return redirect()->route("quiz", ["success" => "Successfully registered"]);
    }

    public function quiz()
    {
        return view("quiz");
    }

    public function suppliersForm()
    {
        return view("suppliersForm");
    }
}

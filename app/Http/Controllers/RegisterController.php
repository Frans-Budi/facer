<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register", [
            "title" => "Daftar",
            "active" => "pengguna",
        ]);
    }

    public function store(Request $request)
    {
        $request["name"] = "$request->firstName $request->lastName";

        $validatedData = $request->validate([
            "name" => "required|string|min:3",
            "email" => "required|string|email|unique:users,email",
            "password" => ["required", "string", new Password(), "min:8"],
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]);

        User::create($validatedData);

        return redirect("/login")->with(
            "success",
            "Pendaftara Akun Kamu Berhasil! Silahkan Masuk"
        );
    }
}

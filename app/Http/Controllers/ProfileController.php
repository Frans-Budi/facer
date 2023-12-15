<?php

namespace App\Http\Controllers;

use App\Models\RequestProduct;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $history = RequestProduct::with("product")
            ->with("payment")
            ->where("user_id", auth()->user()->id)
            ->has("payment")
            ->get();

        return view("profile", [
            "title" => "Pengguna",
            "active" => "pengguna",
            "history" => $history,
        ]);
    }

    public function edit()
    {
        return view("edit-profile", [
            "title" => "Pengaturan Akun",
            "active" => "pengguna",
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "nullable|string|min:3",
            "address" => "nullable|string",
            "phone" => "nullable|string",
            "gender" => "nullable|string",
            "date_of_birth" => "nullable|date",
            "profile_image" => "nullable|image|mimes:png,jpg,jpeg|max:1024",
        ]);

        $user = User::find(auth()->user()->id);

        // If request not empty
        if ($request->file("profile_image")) {
            $format = $request
                ->file("profile_image")
                ->getClientOriginalExtension();
            $image = Str::random(30) . "." . $format;

            $request
                ->file("profile_image")
                ->storeAs("public/profile-images", $image);

            if ($user->profile_image) {
                Storage::delete(
                    "public/profile-images/" . $user->profile_image
                );
            }

            $validatedData["profile_image"] = $image;
        }

        $user->update($validatedData);

        return back()->with("success", "Berhasil Mengubah Data Profil");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RequestProduct;

class BorrowingController extends Controller
{
    public function index()
    {
        return view("borrowing", [
            "title" => "Peminjaman",
            "active" => "peminjaman",
        ]);
    }

    public function goverment()
    {
        return view("bor-goverment", [
            "title" => "Peminjaman",
            "active" => "peminjaman",
        ]);
    }

    public function private()
    {
        return view("bor-private", [
            "title" => "Peminjaman",
            "active" => "peminjaman",
        ]);
    }

    public function show(Product $product)
    {
        return view("bor-detail", [
            "title" => "Peminjaman",
            "active" => "peminjaman",
            "product" => $product,
        ]);
    }

    public function formulir(Product $product)
    {
        return view("bor-fomulir", [
            "title" => "Peminjaman",
            "active" => "peminjaman",
            "product" => $product,
        ]);
    }

    public function store(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            "program_name" => "required|string",
            "program_date" => "required|string",
            "program_time" => "required|string",
            "program_type" => "required|string",
            "used_facility" => "required|string",
            "other_needs" => "required|string",
        ]);

        $validatedData["user_id"] = auth()->user()->id;
        $validatedData["product_id"] = $product->id;
        $validatedData["is_acc"] = false;
        $validatedData["id"] = rand(100000000, 999999999);
        $validatedData["slug"] = Str::of($validatedData["program_name"])->slug(
            "-"
        );

        RequestProduct::create($validatedData);

        return redirect("/payment")->with(
            "success",
            "Berhasil Melakukan Pemesanan"
        );
    }
}

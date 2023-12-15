<?php

namespace App\Http\Controllers;

use App\Models\RequestProduct;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $allRequest = RequestProduct::with("product")
            ->with("user")
            ->orderBy("created_at")
            ->get();

        return view("admin", [
            "title" => "Pengajuan",
            "active" => "pengajuan",
            "all_request" => $allRequest,
        ]);
    }

    public function show(RequestProduct $requestProduct)
    {
        $data = $requestProduct
            ->with("product")
            ->with("user")
            ->where("id", $requestProduct->id)
            ->where("is_acc", false)
            ->first();

        if (!$data) {
            return back()->with("info", "Admin Sudah Memberikan Izin!");
        }

        return view("submission", [
            "title" => "Pengajuan",
            "active" => "pengajuan",
            "data" => $data,
        ]);
    }

    public function update(RequestProduct $requestProduct)
    {
        $requestProduct->update([
            "is_acc" => true,
        ]);

        return redirect()
            ->route("submission")
            ->with("success", "Berhasil Memberikan Izin");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\RequestProduct;
use Illuminate\Support\Carbon;

class PaymentController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            $isRequestProductExists = RequestProduct::where(
                "user_id",
                auth()->user()->id
            )->exists();

            if ($isRequestProductExists) {
                return redirect()->route("payment.progress-1");
            }
        }

        return view("payment", [
            "title" => "Pembayaran",
            "active" => "pembayaran",
        ]);
    }

    public function progress_1()
    {
        $requestProduct = RequestProduct::where("user_id", auth()->user()->id)
            ->latest("created_at")
            ->first();

        if (!$requestProduct) {
            return redirect()->route("payment");
        }

        $requestProduct["tanggal_peminjaman"] = Carbon::parse(
            $requestProduct->created_at
        )->format("d F Y");

        // Store data in session
        session(["request_product" => $requestProduct]);

        return view("payment-progress-1", [
            "title" => "Pembayaran",
            "active" => "pembayaran",
            "request_product" => $requestProduct,
        ]);
    }

    public function progress_2()
    {
        // Retrieve data from session
        $requestProduct = session("request_product");

        if (!$requestProduct->is_acc) {
            return back()->with(
                "confirm",
                "Pesanan Anda Perlu dikonfirmasi oleh Admin Terlebih Dahulu!"
            );
        }

        $is_paid = Payment::where(
            "request_product_id",
            $requestProduct->id
        )->exists();

        return view("payment-progress-2", [
            "title" => "Pembayaran",
            "active" => "pembayaran",
            "request_product" => $requestProduct,
            "is_paid" => $is_paid,
        ]);
    }

    public function progress_3()
    {
        // Retrieve data from session
        $requestProduct = session("request_product");

        if (!$requestProduct->is_acc) {
            return back()->with(
                "confirm",
                "Pesanan Anda Perlu dikonfirmasi oleh Admin Terlebih Dahulu!"
            );
        }

        $paymentData = Payment::where("request_product_id", $requestProduct->id)
            ->with("costs")
            ->first();

        if (!$paymentData) {
            return redirect()->route("payment.progress-2");
        }

        return view("payment-progress-3", [
            "title" => "Pembayaran",
            "active" => "pembayaran",
            "paymentData" => $paymentData,
        ]);
    }

    public function store(Request $request)
    {
        if (!$request->payment_method) {
            return back()->with("error", "Metode Pembayaran Harus dipilih");
        }

        // Data Validation from Request
        $validatedData = $request->validate([
            "payment_method" => "required|string",
            "biaya_sewa_gedung" => "required|integer",
            "biaya_keamanan" => "required|integer",
            "biaya_admin" => "required|integer",
            "request_product_id" => "required",
        ]);

        // Initial Data
        $totalCost =
            $validatedData["biaya_sewa_gedung"] +
            $validatedData["biaya_keamanan"] +
            $validatedData["biaya_admin"];

        // Create Payment Table
        $paymentData = Payment::create([
            "total_cost" => $totalCost,
            "payment_method" => $validatedData["payment_method"],
            "is_paid" => true,
            "request_product_id" => $validatedData["request_product_id"],
        ]);

        // Create Cost Table
        Cost::create([
            "name" => "Biaya Sewa Gedung",
            "amount" => $validatedData["biaya_sewa_gedung"],
            "payment_id" => $paymentData->id,
        ]);
        Cost::create([
            "name" => "Biaya Keamanan",
            "amount" => $validatedData["biaya_keamanan"],
            "payment_id" => $paymentData->id,
        ]);
        Cost::create([
            "name" => "Biaya Admin",
            "amount" => $validatedData["biaya_admin"],
            "payment_id" => $paymentData->id,
        ]);

        return redirect()->route("payment.progress-3");
    }
}

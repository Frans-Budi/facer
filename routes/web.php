<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("home", [
        "title" => "Home",
        "active" => "home",
    ]);
})->name("home");

Route::get("/schedule", function () {
    return view("schedule", [
        "title" => "Jadwal",
        "active" => "jadwal",
    ]);
})->name("schedule");

Route::middleware(["auth"])->group(function () {
    Route::prefix("profile")->group(function () {
        Route::get("/", [ProfileController::class, "index"])->name("profile");
        Route::get("/edit", [ProfileController::class, "edit"])->name(
            "profile.edit"
        );
        Route::post("/edit", [ProfileController::class, "update"]);
        Route::post("/update-profile-image", [
            ProfileController::class,
            "updateProfileImage",
        ]);
    });
});

Route::prefix("borrowing")->group(function () {
    // View
    Route::get("/", [BorrowingController::class, "index"])->name("borrowing");
    Route::get("/pemerintah", [BorrowingController::class, "goverment"])->name(
        "bor-goverment"
    );
    Route::get("/swasta", [BorrowingController::class, "private"])->name(
        "bor-private"
    );

    // View Detail Product (Pemerintah)
    Route::get("/pemerintah/{product:slug}", [
        BorrowingController::class,
        "show",
    ])->name("bor-goverment.detail");
    Route::get("/pemerintah/{product:slug}/formulir", [
        BorrowingController::class,
        "formulir",
    ])
        ->name("bor-goverment.detail.formulir")
        ->middleware("auth");

    // View Detail Product (Swasta)
    Route::get("/swasta/{product:slug}", [
        BorrowingController::class,
        "show",
    ])->name("bor-private.detail");
    Route::get("/swasta/{product:slug}/formulir", [
        BorrowingController::class,
        "formulir",
    ])
        ->name("bor-private.detail.formulir")
        ->middleware("auth");

    // Store
    Route::post("/pemerintah/{product:slug}/formulir", [
        BorrowingController::class,
        "store",
    ]);
    Route::post("/swasta/{product:slug}/formulir", [
        BorrowingController::class,
        "store",
    ]);
});

Route::prefix("payment")->group(function () {
    Route::get("/", [PaymentController::class, "index"])->name("payment");

    Route::middleware(["auth"])->group(function () {
        Route::get("/progress-1", [
            PaymentController::class,
            "progress_1",
        ])->name("payment.progress-1");

        Route::get("/progress-2", [
            PaymentController::class,
            "progress_2",
        ])->name("payment.progress-2");
        Route::post("/progress-2", [PaymentController::class, "store"]);

        Route::get("/progress-3", [
            PaymentController::class,
            "progress_3",
        ])->name("payment.progress-3");
    });
});

// Auth
Route::get("/register", [RegisterController::class, "index"])
    ->name("register")
    ->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/login", [LoginController::class, "index"])
    ->name("login")
    ->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);

// Admin
Route::middleware("admin")->group(function () {
    Route::get("/admin", [AdminController::class, "index"])->name("submission");
    Route::get("/admin/{request_product:id}", [
        AdminController::class,
        "show",
    ])->name("submission.detail");
    Route::post("/admin/{request_product:id}", [
        AdminController::class,
        "update",
    ]);
});

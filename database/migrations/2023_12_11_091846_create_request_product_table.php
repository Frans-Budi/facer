<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("request_product", function (Blueprint $table) {
            $table->id();
            $table->string("program_name");
            $table->string("program_date");
            $table->string("program_time");
            $table->string("program_type");
            $table->string("used_facility");
            $table->string("other_needs");
            $table->boolean("is_acc")->default(false);
            $table->bigInteger("product_id");
            $table->bigInteger("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("request_product");
    }
};

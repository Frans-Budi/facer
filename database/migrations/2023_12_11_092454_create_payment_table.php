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
        Schema::create("payment", function (Blueprint $table) {
            $table->id();
            $table->double("total_cost");
            $table->string("payment_method");
            $table->boolean("is_paid")->default(false);
            $table->bigInteger("request_product_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("payment");
    }
};

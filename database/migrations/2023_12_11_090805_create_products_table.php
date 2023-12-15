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
        Schema::create("products", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->text("description");
            $table->json("facility");
            $table->string("location");
            $table->string("image");
            $table->double("price");
            $table->string("unit");
            $table->bigInteger("category_product_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("products");
    }
};

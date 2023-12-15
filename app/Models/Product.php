<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $guarded = ["id", "created_at", "updated_at"];

    public function requestProduct(): HasOne
    {
        return $this->hasOne(RequestProduct::class);
    }

    public function categoryProduct(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class);
    }
}

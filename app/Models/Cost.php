<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cost extends Model
{
    use HasFactory;

    protected $table = "costs";
    protected $guarded = ["id", "created_at", "updated_at"];

    public function payments(): BelongsToMany
    {
        return $this->belongsToMany(
            Payment::class,
            "payment_costs",
            "payment_id",
            "cost_id"
        );
    }
}

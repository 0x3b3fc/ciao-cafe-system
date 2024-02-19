<?php

namespace Domain\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'is_active',
    ];
    protected $guarded = [
        'id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

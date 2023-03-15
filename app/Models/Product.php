<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'categories_id',
        'tags'
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductGallery::class, 'categories_id', 'id');
    }
}

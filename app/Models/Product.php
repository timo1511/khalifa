<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes; // Improved with SoftDeletes for recoverable deletions

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'colors',
        'stitching_colors',
        'stock',
        'category_id', // Added: Foreign key for category relationship
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'colors' => 'array', // Automatic JSON to array conversion for color options
        'stitching_colors' => 'array', // Automatic JSON to array conversion for stitching options
        'price' => 'decimal:2', // Ensures price is handled as decimal with 2 places
    ];

    /**
     * Get the formatted price attribute.
     *
     * @return string
     */
    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 2); // Improved: Accessor for displaying price with currency symbol
    }

    /**
     * Scope a query to only include products with available stock.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailable($query)
    {
        return $query->where('stock', '>', 0); // Improved: Scope for filtering in-stock products
    }

    /**
     * Define the relationship to orders.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class); // Improved: Active relationship to Order model for e-commerce tracking
    }

    /**
     * Define the relationship to category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class); // Added: Relationship to Category model
    }
}
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'author_id', 'year', 'isbn', 'cost'];
    protected $casts = ['year' => 'integer', 'cost' => 'decimal:2'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    public function scopeCostly($query, $minCost)
    {
        return $query->where('cost', '>=', $minCost);
    }
}



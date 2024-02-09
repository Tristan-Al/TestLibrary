<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should not be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes of the model.
     *
     * @var array<string, int, string, string, float>
     */
    protected $fillable = [
        'title',
        'author_id',
        'category',
        'description',
        'price'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'price' => 'float',
    ];

    // Define the relationship with Author model
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}

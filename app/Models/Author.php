<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
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
     * @var array<string, string, string, char, int>
     */
    protected $fillable = [
        'surnames',
        'name',
        'nationality',
        'gender',
        'age'
    ];

    // Define the relationship with Book model
    public function books()
    {
        return $this->hasMany(Book::class, 'autor_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
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
     * @var array<int, int, datetime, datetime>
     */
    protected $fillable = [
        'user_id',
        'book_id',
        'rental_date',
        'return_date'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'rental_date' => 'datetime',
        'return_date' => 'datetime'
    ];

    // Define the relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // Define the relationship with User model
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}

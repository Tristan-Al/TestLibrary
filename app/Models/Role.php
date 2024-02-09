<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
     * @var array<string>
     */
    protected $fillable = [
        'rolname'
    ];

    // Define the many-to-many relationship with Users
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}

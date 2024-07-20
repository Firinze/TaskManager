<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    /**
     * Relation many-to-many avec le modèle User.
     */
    public function teUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
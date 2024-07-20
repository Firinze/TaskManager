<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Task extends Model
{
    use HasFactory;

    // Champs remplissables
    protected $fillable = [
        'tetitle', 
        'tedescription', 
        'tepriority', 
        'testart_date', 
        'tedue_date', 
        'testart_time', 
        'teend_time', 
        'testatus', 
        'teuser_created_by', 
        'teuser_assigned_to'
    ];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec l'utilisateur créateur
    public function creator()
    {
        return $this->belongsTo(User::class, 'teuser_created_by');
    }

    // Relation avec l'utilisateur assigné
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'teuser_assigned_to');
    }
}
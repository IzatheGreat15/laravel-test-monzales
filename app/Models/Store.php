<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    // define one-to-many relationship with users
    public function user(){
        return $this->belongsTo(User::class, 'owner_id');
    }
}

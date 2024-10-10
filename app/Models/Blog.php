<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'author_id', 'status'];

    // Relasi ke model User (Penulis)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}

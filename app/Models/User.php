<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'session_id', 'role'];

    public function isAdmin()
    {
        return $this->role === 99;
    }

    public function getPosts()
    {
        if ($this->isAdmin()) {
            return Post::all();
        } else {
            return Post::where('is_published', true)->get();
        }
    }
}

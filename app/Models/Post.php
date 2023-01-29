<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    public function category()
    {
        // allows to display necessary category
        // belongs to relationship
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        // "a post belongs to a user"
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        // allows to display necessary posts for separate category
        // one to many relationship
        return $this->hasMany(Post::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    protected $with = ['category', 'author'];

    public function category()
    {
        // allows to display necessary category
        // belongs to relationship
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // "a post belongs to a user"
        // author is a user that has posts and own user_id (!not author_id)
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        // when() is system function
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        });
    }
}

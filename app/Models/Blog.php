<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class, 'blogcategory_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id', 'blog_id')->where('status', 1);
    }
}
